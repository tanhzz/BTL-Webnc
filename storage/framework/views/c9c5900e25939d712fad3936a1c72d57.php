
<?php $__env->startSection('content'); ?>
    <h2>Trang tổng hợp các loại báo cáo</h2>
    <ul>
        <li><a href="<?php echo e(route('reports.revenue_monthly')); ?>">Báo cáo doanh thu theo tháng</a></li>
        <li><a href="<?php echo e(route('reports.debt')); ?>">Báo cáo công nợ khách hàng</a></li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\xampp\htdocs\btl\apartment-fee-management\resources\views/reports/index.blade.php ENDPATH**/ ?>