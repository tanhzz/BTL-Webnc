
<?php $__env->startSection('content'); ?>
    <h2>Thêm khách hàng mới</h2>
    <form action="<?php echo e(route('customers.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>Tên: <input type="text" name="name" value="<?php echo e(old('name')); ?>"></p>
        <p>Email: <input type="email" name="email" value="<?php echo e(old('email')); ?>"></p>
        <p>SĐT: <input type="text" name="phone" value="<?php echo e(old('phone')); ?>"></p>
        <p>Địa chỉ: <input type="text" name="address" value="<?php echo e(old('address')); ?>"></p>
        <button type="submit">Thêm mới</button>
    </form>
    <a href="<?php echo e(route('customers.index')); ?>">Quay lại</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/customers/create.blade.php ENDPATH**/ ?>