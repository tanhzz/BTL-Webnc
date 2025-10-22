
<?php $__env->startSection('content'); ?>
<h2>Danh sách phòng/căn hộ</h2>
<p>
    Tổng phòng: <b style="color:#3795f6"><?php echo e($totalRooms); ?></b>,
    Trống: <b style="color:#36b37e"><?php echo e($totalAvailable); ?></b>
</p>
<a href="<?php echo e(route('rooms.create')); ?>" style="background:#2d88ff; color:#fff; border-radius:5px; padding:6px 20px;text-decoration:none;margin-left:2px;">+ Thêm phòng mới</a>

<div style="display:flex; flex-wrap:wrap; gap:27px; margin-top:29px;">
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="background:linear-gradient(140deg,#f4fbff 90%,#f1f6ef); box-shadow:0 2px 13px #3795f61a; border-radius:13px; width:265px; padding:18px 20px 20px 20px; position:relative;min-height:174px;">
        <img src="https://cdn-icons-png.flaticon.com/512/2354/2354080.png" style="width:54px;position:absolute;top:-19px;right:20px;filter:drop-shadow(0 2px 4px #bddbff44);">
        <div style="font-size:20px; color:#3795f6; font-weight:700;">
            Phòng: <?php echo e($room->room_number ?? $room->id); ?>

        </div>
        <div style="margin-top:2px;"><b>Loại:</b> <?php echo e($room->type ?? '-'); ?></div>
        <div><b>Giá:</b> <span style="color:#f0810f;"><?php echo e($room->price ?? '-'); ?></span></div>
        <div>
            <b>Trạng thái:</b>
            <?php if($room->status === 'available'): ?> <span style="color:#36b37e;"><b>Còn trống</b></span>
            <?php else: ?> <span style="color:red;"><b>Đã thuê</b></span> <?php endif; ?>
        </div>
        <div style="margin-top:9px;">
            <a href="<?php echo e(route('rooms.show', $room->id)); ?>" style="color:#3795f6;">Xem</a> |
            <a href="<?php echo e(route('rooms.edit', $room->id)); ?>" style="color:#f0810f;">Sửa</a> |
            <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="POST" style="display:inline">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')" style="border:none;background:none;color:#d35e5e;cursor:pointer;">Xóa</button>
            </form>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/rooms/index.blade.php ENDPATH**/ ?>