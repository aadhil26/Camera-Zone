<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
            <div class="border p-3 rounded-lg">
                <div class="m-2"><?php echo e(__('Dashboard')); ?></div>

                <a href="<?php echo e(url('product/index')); ?>" class="p-2 border-[.1em] rounded">
                        <button>
                            Manage Products
                        </button>
                    </a>

                <a href="<?php echo e(url('product/create')); ?>" class="p-2  border-[.1em] rounded">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views\home.blade.php ENDPATH**/ ?>