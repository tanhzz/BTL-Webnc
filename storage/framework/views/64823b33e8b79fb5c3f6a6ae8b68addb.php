
<?php $__env->startSection('content'); ?>
    <h2>Danh sách hợp đồng thuê</h2>
    <a href="<?php echo e(route('contracts.create')); ?>">Tạo hợp đồng mới</a>
    <table border="1">
        <tr>
            <th>Khách thuê</th>
            <th>Phòng</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Giá</th>
            <th>Thao tác</th>
        </tr>
        <?php $__currentLoopData = $contracts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($contract->customer->name); ?></td>
            <td><?php echo e($contract->room->room_number); ?></td>
            <td><?php echo e($contract->start_date); ?></td>
            <td><?php echo e($contract->end_date); ?></td>
            <td><?php echo e(number_format($contract->price)); ?> đ</td>
            <td>
                <a href="<?php echo e(route('contracts.show', $contract->id)); ?>">Xem</a> |
                <a href="<?php echo e(route('contracts.edit', $contract->id)); ?>">Sửa</a> |
                <form action="<?php echo e(route('contracts.destroy', $contract->id)); ?>" method="POST" style="display:inline">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Xóa hợp đồng?')">Xóa</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($contracts->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/contracts/index.blade.php ENDPATH**/ ?>