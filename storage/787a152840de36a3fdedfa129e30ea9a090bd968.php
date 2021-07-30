<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Start</th>
                <th>Receive</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $trains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->start_time); ?></td>
                <td><?php echo e($item->recceive_time); ?></td>
                <td>
                    <a href="<?php echo e(BASE_URL . 'train/edit/'. $item->id); ?>">Sua</a>
                    <a  id="<?php echo e($user->id); ?>" href="<?php echo e(BASE_URL . 'train/delete/' . $item->id); ?>" >Xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/train/train.blade.php ENDPATH**/ ?>