<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Camera Zone</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <!-- <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-red-600 shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white ml-4 lg:ml-8 xl:ml-12" href="<?php echo e(route('home')); ?>">
                    Camera Zone
                </a>
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" navbar-collapse" id="navbarSupportedContent">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                                <a class="nav-link d-flex align-items-center text-white hover:underline" href="<?php echo e(route('products')); ?>">
                                <img src="<?php echo e(asset('images/productsIcon.png')); ?>" alt="Products Icon" class="h-4 w-4 me-2 ">
                                <?php echo e(__('Products')); ?>

                                </a>
                        </li>
                            
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="<?php echo e(route('login')); ?>">
                                    <img src="<?php echo e(asset('images/loginIcon.png')); ?>" alt="Login Icon" class="h-4 w-4 me-2 "> 
                                        <?php echo e(__('Login')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="<?php echo e(route('register')); ?>">
                                    <img src="<?php echo e(asset('images/registerIcon.png')); ?>" alt="Login Icon" class="h-4 w-4 me-2 "> 
                                    <?php echo e(__('Register')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>

                            <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="">
                                    <img src="<?php echo e(asset('images/callIcon.png')); ?>" alt="Login Icon" class="h-4 w-4 me-2 ">
                                        0778957364
                                    </a>
                            </li>

                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views/layouts/app.blade.php ENDPATH**/ ?>