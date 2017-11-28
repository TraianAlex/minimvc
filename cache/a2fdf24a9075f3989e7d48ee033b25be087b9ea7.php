<?php $__env->startSection('content'); ?>
Home page<br>
Test cache: the time is <?php echo e(time()); ?><br>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>This is category <?php echo e($cat['id']); ?> => <?php echo e($cat['name']); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>showing <?php echo e($page); ?> out of <?php echo e($pagination); ?>

<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i = 1; $i < $total; $i++): ?>
        <li><a href="<?php echo e(SITE_ROOT); ?>/home/category/<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
    <?php endfor; ?>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>