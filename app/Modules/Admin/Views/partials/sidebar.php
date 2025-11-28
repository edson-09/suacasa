<!-- BACKDROP MOBILE -->
<div id="sidebar-backdrop" class="fixed inset-0 z-30 bg-black/40 hidden lg:hidden">
</div>

<!-- SIDEBAR -->
<aside id="sidebar" class="fixed inset-y-0 transition-all duration-500 ease-in-out left-0 z-40 flex flex-col bg-slate-900 text-slate-200 dark:text-slate-100 w-70 transform -translate-x-full transition-transform duration-200 lg:translate-x-0 lg:static lg:w-70 border-r border-slate-200 dark:border-slate-800 bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900">
    <!-- TOPO: LOGO + BOTÕES -->
    <div class="flex h-16 items-center justify-between px-4 pt-5">
        <div class="flex items-center gap-2">
            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white font-semibold">
                <img src="<?= base_url('assets/site/img/sua.png') ?>" alt="">
            </div>
            <div id="logo-text" class="flex flex-col">
                <span class="font-semibold leading-tight text-black dark:text-white">
                    Sua Casa
                </span>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <!-- FECHAR MOBILE -->
            <button
                id="close-sidebar"
                class="inline-flex lg:hidden h-8 w-8 items-center justify-center rounded-lg hover:bg-slate-800">
                ✕
            </button>
        </div>
    </div>

    <!-- SCROLL ÁREA -->
    <div class="flex-1 overflow-y-auto py-3 prevent-overflow">

        <!-- SEÇÃO DASHBOARD -->
        <div class="px-3 mt-6">
            <p
                class="sidebar-label mb-1 px-2 text-[10px] font-semibold uppercase tracking-[0.08em] text-slate-500">
                Menu
            </p>

            <nav class="space-y-1">
                <!-- VISÃO GERAL -->
                <a
                    href="/admin"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">
                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-grid"></i>
                    </span>
                    <div class="sidebar-label flex flex-col ml-2">
                        <span class="text-xs font-medium">Visão Geral</span>
                    </div>
                </a>

                <!-- TODOS IMÓVEIS -->
                <a
                    href="/admin/properties"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">
                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-houses"></i>
                    </span>
                    <div class="sidebar-label flex flex-col ml-2">
                        <span class="text-xs font-medium">Todos Imóveis</span>
                    </div>
                </a>

                <!-- CARTEIRA -->
                <a
                    href="/admin/wallet"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">
                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <div class="sidebar-label flex flex-col ml-2">
                        <span class="text-xs font-medium">Carteira</span>
                    </div>
                </a>

                <!-- USUÁRIOS -->
                <a
                    href="/admin/users"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">
                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-people"></i>
                    </span>
                    <div class="sidebar-label flex flex-col ml-2">
                        <span class="text-xs font-medium">Usuários</span>
                    </div>
                </a>

                <!-- NOTIFICAÇÕES -->
                <a
                    href="/admin/notifications"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">

                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-bell"></i>
                    </span>

                    <div class="sidebar-label flex flex-row gap-2 ml-2">
                        <div class="link">
                            <span class="text-xs font-medium">Notificações</span>
                        </div>
                    </div>

                    <div class="badge ml-auto flex items-center px-2 py-0 rounded-md bg-red-600/50 border border-red-700 text-[11px]">
                        4
                    </div>

                </a>

                <!-- MENSAGENS -->
                <a
                    href="/admin/conversations"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">

                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <div class="sidebar-label flex flex-row gap-2 ml-2">
                        <div class="link">
                            <span class="text-xs font-medium">Mensagens</span>
                        </div>
                    </div>

                    <div class="badge ml-auto flex items-center px-2 py-0 rounded-md bg-yellow-600/50 border border-yellow-700 text-[11px]">
                        4
                    </div>
                </a>

                <!-- PERFIL -->
                <a
                    href="/admin/me"
                    id="side-link"
                    class="side-link flex items-center rounded-lg px-2 py-2 text-slate-900 dark:text-slate-50 hover:bg-slate-200/60 dark:hover:bg-slate-700/60 hover:text-blue-500 transition">

                    <span class="flex h-8 w-8 items-center justify-center">
                        <i class="bi bi-person"></i>
                    </span>

                    <div class="sidebar-label flex flex-row gap-2 ml-2">
                        <div class="link">
                            <span class="text-xs font-medium">Perfil</span>
                        </div>
                    </div>
                </a>
            </nav>
        </div>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // pode usar pelo id repetido ou pela classe; aqui usei a classe:
        const links = document.querySelectorAll('#sidebar .side-link');
        const currentPage = window.location.pathname.split('/').pop(); // ex: "index.php"

        links.forEach(link => {
            const href = link.getAttribute('href');

            if (href && href.endsWith(currentPage)) {
                link.classList.add(
                    'bg-slate-200/60',
                    'dark:bg-slate-700/60',
                    'text-blue-500'
                );
            }

            link.addEventListener('click', () => {
                links.forEach(l => l.classList.remove(
                    'bg-slate-200/60',
                    'dark:bg-slate-700/60',
                    'text-blue-500'
                ));
                link.classList.add(
                    'bg-slate-200/60',
                    'dark:bg-slate-700/60',
                    'text-blue-500'
                );
            });
        });
    });
</script>