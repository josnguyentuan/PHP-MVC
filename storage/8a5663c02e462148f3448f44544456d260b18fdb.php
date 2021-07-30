<?php $__env->startSection('title', 'Danh sách danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Hiển thị menu</th>
                        <th>Số lượng sản phẩm</th>
                        <th>
                            <a href="<?php echo e(BASE_URL . 'category/add'); ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name_cate); ?></td>
                                <td><?php echo e($item->show_menu == 1 ? "Có" : "Không"); ?></td>
                                <td><?php echo e(count($item->products)); ?></td>
                                <td>
                    <a href="<?php echo e(BASE_URL . 'category/edit/' . $item->id); ?>" >Sửa</a>
                    <a  id="<?php echo e($user->id); ?>" href="<?php echo e(BASE_URL . 'category/delete/' . $item->id); ?>"  >Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/category/index.blade.php ENDPATH**/ ?>