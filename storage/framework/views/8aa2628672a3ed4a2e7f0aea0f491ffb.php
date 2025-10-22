
<?php $__env->startSection('content'); ?>
    <h2>Tạo hợp đồng thuê mới</h2>
    <form action="<?php echo e(route('contracts.store')); ?>" method="POST"><?php echo csrf_field(); ?>
        <p>Khách thuê: 
            <select name="customer_id">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <p>Phòng: 
            <select name="room_id">
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($room->id); ?>"><?php echo e($room->room_number); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <p>Ngày bắt đầu: <input type="date" name="start_date"></p>
        <p>Ngày kết thúc: <input type="date" name="end_date"></p>
        <p>Giá: <input name="price"></p>
        <p>Ghi chú: <input name="notes"></p>
        <button type="submit">Tạo</button>
    </form>
    <a href="<?php echo e(route('contracts.index')); ?>">Quay lại</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/contracts/create.blade.php ENDPATH**/ ?>