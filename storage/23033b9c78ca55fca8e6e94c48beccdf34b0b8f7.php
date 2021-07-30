<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped text-center">
                    <thead>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Loại sản phẩm</th>

                        <th>
                            <a href="<?php echo e(BASE_URL . 'product/add'); ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody >
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>    
                                <td> <?php echo e($item->id); ?> </td>
                                <td> 
                                   <img src="<?= BASE_URL?><?php echo e($item->image); ?>" width="50px" height="50px" alt="" > 
                                </td>

                                <td> <?php echo e($item->name); ?> </td>
                                <td> <?php echo e(number_format($item->price)); ?>đ </td>
                                <td> <?php echo e(substr($item->detail, 0, 40)); ?>... </td>
                                <td> <?php echo e($item->category->name_cate); ?> </td>
                                <td>
                                    <a href="<?php echo e(BASE_URL . 'product/edit/' . $item->id); ?>" class="btn btn-sm btn-primary">Sửa</a>
                                    <a  href="<?php echo e(BASE_URL . 'product/delete/' . $item->id); ?>"  href="" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/products/home.blade.php ENDPATH**/ ?>