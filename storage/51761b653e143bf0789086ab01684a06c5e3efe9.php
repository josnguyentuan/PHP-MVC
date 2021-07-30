<?php $__env->startSection('title', "Add Product"); ?>
<?php $__env->startSection('content'); ?>
<form id="form" class="p-5" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="text-right">
            <a href="<?php echo e(BASE_URL . 'product'); ?>" class="btn btn-sm btn-danger">Hủy</a>

        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" placeholder="Nhập giá">
      </div>
      <div class="form-group">
        <label for="">Mô tả ngắn</label>
        <textarea name="short_desc" class="form-control" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <textarea name="detail" class="form-control" rows="10"></textarea>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Hình ảnh</label>
            <input type="file" class="form-control" name="image">
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
        <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
    </div>
    
  </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#form").validate({
            rules: {
                name:{
                    required: true,
                    remote: {
                        url: `<?php echo e(BASE_URL); ?>product/check-name`,
                        type: 'post',
                        data:{
                            name: function(){
                                return $(`[name ="name"]`).val()
                            }
                        }
                    }
                },
                price:{
                    required: true,
                    minlength: 5,
                },
                short_desc:{
                    required: true,
                },
                detail:{
                    required: true,
                },
                image:{
                    required: true,
                }
            },
            messages:{
                name:{
                    required: "Tên không được để trống ",
                    remote : "Tên sản phẩm tồn tại"
                },
                price: {
                    required: "Vui lòng nhập ít nhất 5 số",


                },
                short_desc: {
                  required: "Không được bỏ trống"
                },
                detail:{
                    required: "Không được để trống",
                },
                image:{
                  required: "Vui lòng thêm ảnh sản phẩm"
                }

            }
        });

    })
</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/products/add-form.blade.php ENDPATH**/ ?>