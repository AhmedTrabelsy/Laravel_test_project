<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User</title>
</head>

<body>
  <h2>User test</h2>
  <?php $__currentLoopData = $msg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <h2><?php echo e($loop->index); ?></h2>
    <p><?php echo e($element); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\Users\Ahmed Trabelsi\Desktop\Education\DSI21\sem 2\Tp\laravel\laravelTest\resources\views/user.blade.php ENDPATH**/ ?>