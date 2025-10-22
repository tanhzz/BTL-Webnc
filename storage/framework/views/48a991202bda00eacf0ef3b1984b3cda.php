
<?php $__env->startSection('content'); ?>
    <h2>Sửa phòng/căn hộ</h2>
    <form action="<?php echo e(route('rooms.update', $room->id)); ?>" method="POST"><?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <p>Số phòng: <input name="room_number" value="<?php echo e($room->room_number); ?>"></p>
        <p>Loại: <input name="type" value="<?php echo e($room->type); ?>"></p>
        <p>Giá: <input name="price" value="<?php echo e($room->price); ?>"></p>
        <p>Trạng thái: 
            <select name="status">
                <option value="available" <?php echo e($room->status=='available'?'selected':''); ?>>Trống</option>
                <option value="rented" <?php echo e($room->status=='rented'?'selected':''); ?>>Đã thuê</option>
                <option value="maintenance" <?php echo e($room->status=='maintenance'?'selected':''); ?>>Bảo trì</option>
            </select>
        </p>
        <button type="submit">Cập nhật</button>
    </form>
    <a href="<?php echo e(route('rooms.index')); ?>">Quay lại</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/rooms/edit.blade.php ENDPATH**/ ?>