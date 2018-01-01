<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if($data): ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($item); ?><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=Alexander+platz&amp;center=Berlin&amp;zoom=13&amp;size=640x500&amp;sensor=false"></div>
        <div class="col-md-6">
          <h1>Contact us</h1>
          <p>We would love to hear from you</p>
          <form method="post" action="contact/send">
            <div class="form-group"> <label for="InputName">Your name</label>
              <input type="text" class="form-control" id="InputName" placeholder="Your name" name="name"> </div>
            <div class="form-group"> <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" name="email"> </div>
            <div class="form-group"> <label for="Textarea">Write here</label> <textarea class="form-control" id="Textarea" rows="3" placeholder="Type here" name="text"></textarea> </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('js'); ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>