
<?php $__env->startSection('content'); ?>
<div style="max-width:500px;margin:30px auto;background:#fff;padding:32px 36px 28px 36px;border-radius:16px;box-shadow:0 2px 20px #2d88ff11;">
    <div style="text-align:center">
        <img src="https://cdn-icons-png.flaticon.com/512/2354/2354080.png" width="62" style="margin-bottom:12px;">
    </div>
    <h2 style="color:#3795f6;text-align:center;margin-bottom:14px;font-weight:700;">Thêm phòng/căn hộ mới</h2>
    <?php if($errors->any()): ?>
    <div style="color:#d35e5e;margin-bottom:16px;"><?php echo implode('', $errors->all('<div>:message</div>')); ?></div>
    <?php endif; ?>
    <form action="<?php echo e(route('rooms.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div style="margin-bottom:10px;">
            <label>Số phòng:</label>
            <input name="room_number" class="form-control" style="width:100%;border-radius:6px;" value="<?php echo e(old('room_number')); ?>">
        </div>
        <div style="margin-bottom:10px;">
            <label>Loại:</label>
            <input name="type" class="form-control" style="width:100%;border-radius:6px;" value="<?php echo e(old('type')); ?>">
        </div>
        <div style="margin-bottom:10px;">
            <label>Giá:</label>
            <input name="price" type="number" class="form-control" style="width:100%;border-radius:6px;" value="<?php echo e(old('price')); ?>">
        </div>
        <div style="margin-bottom:20px;">
            <label>Trạng thái:</label>
            <select name="status" style="width:100%;border-radius:6px;">
                <option value="available">Trống</option>
                <option value="rented">Đã thuê</option>
            </select>
        </div>
        <button type="submit" style="background:#2d88ff;color:#fff;padding:10px 22px;border-radius:7px;">Thêm mới</button>
        <a href="<?php echo e(route('rooms.index')); ?>" style="margin-left:24px;">Quay lại</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/rooms/create.blade.php ENDPATH**/ ?>