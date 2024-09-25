

<?php $__env->startSection('content'); ?>
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4 text-center"> Products</h1>

    <!-- Product Grid Layout -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Product Card -->
            <div class="bg-white border border-gray-300 rounded-lg shadow-md overflow-hidden">
                <img src="<?php echo e($item->pro_image_url); ?>" alt="<?php echo e($item->pro_name); ?>" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?php echo e($item->pro_name); ?></h2>
                    <p class="text-gray-600 mt-2">Price: $<?php echo e($item->pro_price); ?></p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views//products.blade.php ENDPATH**/ ?>