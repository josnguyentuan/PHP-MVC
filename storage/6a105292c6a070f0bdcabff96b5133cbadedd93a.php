<?php $__env->startSection('title', 'Thêm danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" id="form">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" required name="name_cate" class="form-control">
                    
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="1" name="show_menu" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị ở menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="10"></textarea>
                </div>
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'category'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#form").validate({
            rules: {
                name_cate:{
                    required: true,
                    remote: {
                        url: `<?php echo e(BASE_URL); ?>category/check-name`,
                        type: 'post',
                        data:{
                            name_cate: function(){
                                return $(`[name = "name_cate"]`).val()
                            }
                        }
                    }
                },
                desc:{
                    required: true
                }
            },
            messages:{
                name_cate:{
                    required: "Tên không được để trống ",
                    remote : "Tên đã tồn tại"
                },
                desc: {
                    required: "Vui lòng nhập mô tả",

                }

            }
        });

    })
</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/PHP2/mvc/app/views/admin/category/add-form.blade.php ENDPATH**/ ?>