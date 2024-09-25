

<?php $__env->startSection('content'); ?>
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4 text-center"> Products</h1>

    <!-- Product Grid Layout -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Product Card -->
            <div class="bg-gray-100 border border-gray-300 rounded-lg shadow-lg p-6 flex flex-col items-center">
                <img src="<?php echo e($item->pro_image_url); ?>" alt="<?php echo e($item->pro_name); ?>" class="w-50 h-30 object-cover mb-4">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-center"><?php echo e($item->pro_name); ?></h2>
                    <p class="text-gray-600 text-center mb-4">Price: <?php echo e($item->pro_price); ?> LKR</p>
                    <button class="mt-auto bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600">
                        Add to Cart
                    </button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views/products.blade.php ENDPATH**/ ?>