

<?php $__env->startSection('content'); ?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="container">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
            <div class="border p-3 rounded-lg  bg-gray-200">
                <div class="mb-2 text-center font-extrabold text-3xl font-sans"><?php echo e(__(' Admin Dashboard')); ?></div>

                <div class="flex flex-col items-center justify-center h-full space-y-4">
                    <a href="<?php echo e(url('product/index')); ?>" class="p-2 border-[.1em] rounded bg-white">
                        <button>
                            Manage Products
                        </button>
                    </a>
                    <a href="<?php echo e(url('product/create')); ?>" class="p-2 border-[.1em] rounded bg-white">
                        <button>
                            Add Products
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views/dashboard.blade.php ENDPATH**/ ?>