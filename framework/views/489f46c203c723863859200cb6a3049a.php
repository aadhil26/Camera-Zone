

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
            <div class="border p-3 rounded-lg bg-white">
                <div class="m-2">
                    <h2 class="mb-2 text-center">Manage Products</h2> 
                    <hr>
                </div>
                <div class="grid grid-cols-2">

                    <?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <div class="col-span-2 grid grid-cols-4 gap-3">
                            <div class="col-span-2 flex flex-col justify-center m-auto">
                                <img src="<?php echo e(url($pro->pro_image_url)); ?>" alt="IMG" class="h-[10em]">
                            </div>
                            <div class="col-span-1 flex flex-col justify-center">
                                <p><?php echo e($pro->pro_name); ?></p>
                                <p class="text-sm text-green-600"><?php echo e($pro->pro_price); ?></p>
                            </div>
                            <div class="col-span-1 flex items-center gap-3">
                                <a href="<?php echo e(url('product/edit/' .$pro->id)); ?>" class="bg-blue-600 text-white h-fit p-1 rounded-lg" >EDIT</a>

                                <form action="<?php echo e(url('product/delete')); ?>" method="post">
                                    <?php echo csrf_field(); ?> 
                                    <input type="hidden" name="pro_id" value="<?php echo e($pro->id); ?>" >
                                    <input type="submit" value="DELETE" class="bg-red-600 text-white h-fit p-1 rounded-lg">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views\product\index.blade.php ENDPATH**/ ?>