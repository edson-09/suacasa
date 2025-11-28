<?php

/**
 * Retorna os dados completos do usuário armazenados na sessão
 */
function user(): ?array
{
    return session('user') ?? null;
}

/**
 * Retorna o ID do usuário logado
 */
function user_id(): ?int
{
    return session('user.id') ?? null;
}

/**
 * Retorna o email do usuário logado
 */
function user_email(): ?string
{
    return session('user.email') ?? null;
}

/**
 * Retorna o role_id do usuário logado
 */
function user_role(): ?int
{
    return session('user.role_id') ?? null;
}

/**
 * Verifica se o usuário está autenticado
 */
function is_logged_in(): bool
{
    return session()->has('auth_token') 
        && session('expires') > time();
}

/**
 * Verifica tipos de usuário
 */
function is_admin(): bool
{
    return user_role() === 1;
}

function is_agent(): bool
{
    return user_role() === 2;
}

function is_client(): bool
{
    return user_role() === 3;
}

/**
 * Retorna o nome da pasta do módulo de acordo com o role
 * Ex: "Admin", "Agent", "Client"
 */
function role_folder(): ?string
{
    return match (user_role()) {
        1 => 'Admin',
        2 => 'Agent',
        3 => 'Client',
        default => null,
    };
}

/**
 * Redireciona o usuário para a rota correta conforme seu role
 */
function redirect_role()
{
    return match (user_role()) {
        1 => redirect()->to('/admin'),
        2 => redirect()->to('/agent'),
        3 => redirect()->to('/client/dashboard'),
        default => redirect()->to('/login'),
    };
}

/**
 * Renderiza uma view automaticamente conforme o role
 * Exemplo:
 *   return role_view('pages/dashboard');
 * Renderiza:
 *   Admin/pages/dashboard.php
 *   Agent/pages/dashboard.php
 *   Client/pages/dashboard.php
 */
function role_view(string $view, array $data = [], array $options = []): string
{
    $folder = role_folder();

    if (!$folder) {
        throw new \Exception("Role inválido — não foi possível localizar views do módulo.");
    }

    return view("$folder/$view", $data, $options);
}
