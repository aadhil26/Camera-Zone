

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
            <div class="border p-3 rounded-lg">
                <div class="m-2"><?php echo e(__('Dashboard')); ?></div>

                <h2 class="mb-2 text-center"> Edit Product</h2>
                <hr>
                </div>

                <div class>
                    <form action="<?php echo e(url('product/update/' .$product->id)); ?>" enctype="multipart/form-data" method="post" class=" grid">
                        <?php echo csrf_field(); ?>
                    <div>
                        <label for="product_name">Product Name:</label>
                        <input type="text" name="product_name" id='product_name' class="border border-1" value="<?php echo e($product->pro_name); ?>" >
                    </div>

                    <div>
                        <label for="product_price">Product Price:</label>
                        <input type="number" name="product_price" id='product_price' class="border border-1" value="<?php echo e($product->pro_price); ?>">
                    </div>

                    <div>
                        <label for="product_image">File Upload</label>
                        <input type="file" name="product_image" id='product_image' class="border border-1" value="<?php echo e($product->pro_image); ?>">
                    </div>

                <input type="submit" class="border border-1">
                </form>
                
                <div class="felx flex-col justifyy-center m-auto">
                    <img src="<?php echo e(url($product->pro_image_url)); ?>" alt="IMG" class="" >
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views\product\edit.blade.php ENDPATH**/ ?>