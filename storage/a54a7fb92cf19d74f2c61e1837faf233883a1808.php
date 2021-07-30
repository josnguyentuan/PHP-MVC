<?php $__env->startSection('title', "Add Product"); ?>
<?php $__env->startSection('content'); ?>
<form class="p-5" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="text-right">
            <a href="<?php echo e(BASE_URL . 'product'); ?>" class="btn btn-sm btn-danger">Hủy</a>

        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" class="form-control" value="<?php echo e($product->name); ?>" name="name" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Giá sản phẩm</label>
        <input type="text" value="<?php echo e($product->price); ?>" class="form-control" name="price" placeholder="Nhập giá">
      </div>
      <div class="form-group">
        <label for="">Mô tả ngắn</label>
        <textarea name="short_desc"  class="form-control" rows="3"> <?php echo e($product->short_desc); ?></textarea>
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <textarea name="detail"  class="form-control" rows="5"> <?php echo e($product->detail); ?></textarea>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Hình ảnh</label>
        <img src="<?= BASE_URL?><?php echo e($product->image); ?>" alt="" height="100px" width="100px">
            <input type="file" value="<?php echo e($product->image); ?>" class="form-control" name="image">
      </div>
      <div class="form-group">
        <label for="">Category</label>
        <select name="cate_id" id="" class="form-control">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>">
                    <?php echo e($item->name_cate); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
    </div>
    
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/products/edit-form.blade.php ENDPATH**/ ?>