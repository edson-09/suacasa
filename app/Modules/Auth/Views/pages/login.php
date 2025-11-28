<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <title>Sua Casa - Entrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind via CDN (apenas para desenvolvimento / protótipo) -->
    <link rel="stylesheet" href="<?= base_url('assets/site/css/build/build.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stack+Sans+Text:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-gray-200">


    <section>
        <div class="max-w-7xl mx-auto h-screen flex flex-col justify-center items-center">
            <div class="relative flex flex-col justify-center items-center bg-gray-100 border border-gray-200 px-3 py-10 m-5 rounded-3xl max-h-[700px] max-w-[500px] text-center">
                <span id="close" class="block absolute bg-blue-100 hover:bg-blue-200 duration-300 cursor-pointer m-1 px-2 py-1 rounded-full text-gray-500 hover:text-gray-700" style="top: 0; right: 0;"><i class="bi bi-x"></i></span>
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('assets/admin/img/sua.png') ?>" alt="" class="w-25 mb-5">
                </a>
                <h2 class="text-2xl w-90 font-bold text-blue-950 mb-3">Vender, comprar, arrendar: tudo é mais rápido com uma <span class="text-blue-500">conta Sua Casa</span></h2>
                <p class="text-sm text-gray-500">Fique a par de preços, guarde anúncios e pesquisas e receba notificações sobre atualizações em primeira mão</p>

                <?php if (session('error')): ?>
                    <div class='w-full p-4 bg-red-200 text-red-600 mx-10 rounded my-3'><?= esc(session('error')) ?></div>
                <?php endif; ?>

                <!-- <div role="login" class="mt-4"> -->
                <form id="login" method="post" action="<?= base_url('auth/login') ?>" class="w-full space-y-4 rounded-lg p-6">
                    <h3 class="text-2xl font-bold text-blue-950">Entrar na minha conta</h3>
                    <div>
                        <label class="block text-sm font-medium text-gray-900 text-left" for="email">Email</label>

                        <input class="mt-1 w-full rounded-lg p-2 border bg-gray-200 border-gray-300 focus:border-indigo-500 focus:outline-none" id="email" name="email" type="email">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 text-left" for="name">Senha</label>

                        <input class="mt-1 w-full rounded-lg p-2 border bg-gray-200 border-gray-300 focus:border-indigo-500 focus:outline-none" id="password" name="password" type="password">
                    </div>

                    <button class="block w-full rounded-lg border border-indigo-900 bg-indigo-900 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-indigo-950 cursor-pointer" type="submit">
                        Entrar
                    </button>
                    <p class="text-sm mt-2">Ainda não tem conta? <span class="text-blue-400 cursor-pointer" id="form-register">Registar</span></p>
                </form>

                <form id="register" method="post" action="<?= base_url('auth/login') ?>" class="w-full hidden space-y-4 rounded-lg p-6">
                    <h3 class="text-2xl font-bold text-blue-950">Registar minha conta</h3>
                    <div>
                        <label class="block text-sm font-medium text-gray-900 text-left" for="email">Email</label>

                        <input class="mt-1 w-full rounded-lg p-2 border bg-gray-200 border-gray-300 focus:border-indigo-500 focus:outline-none" id="email" name="email" type="email">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 text-left" for="name">Senha</label>

                        <input class="mt-1 w-full rounded-lg p-2 border bg-gray-200 border-gray-300 focus:border-indigo-500 focus:outline-none" id="password" name="password" type="password">
                    </div>

                    <button class="block w-full rounded-lg border border-indigo-900 bg-indigo-900 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-indigo-950 cursor-pointer" type="submit">
                        Registar
                    </button>
                    <p class="text-sm mt-2">Já tem conta? <span class="text-blue-400 cursor-pointer" id="form-login">Entrar</span></p>
                </form>
                <!-- </div> -->
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('form-register').addEventListener('click', () => {
                document.getElementById('login').classList.add('hidden');
                document.getElementById('register').classList.remove('hidden');
                document.getElementById('register').classList.add('block');
            })

            document.getElementById('form-login').addEventListener('click', () => {
                document.getElementById('register').classList.add('hidden');
                document.getElementById('login').classList.remove('hidden');
                document.getElementById('login').classList.add('block');
            })

            document.getElementById('close').addEventListener('click', () => {
                window.location.assign("<?= base_url() ?>");
            });
        });
    </script>


</body>

</html>