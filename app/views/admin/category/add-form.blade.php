@extends('layouts.main')
@section('title', 'Thêm danh mục')
@section('content')
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
                    <a href="{{BASE_URL . 'category'}}" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#form").validate({
            rules: {
                name_cate:{
                    required: true,
                    remote: {
                        url: `{{BASE_URL}}category/check-name`,
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
    
@endsection