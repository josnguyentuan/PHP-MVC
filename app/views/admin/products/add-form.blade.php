@extends('layouts.main')
@section('title', "Add Product")
@section('content')
<form id="form" class="p-5" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="text-right">
            <a href="{{BASE_URL . 'product'}}" class="btn btn-sm btn-danger">Hủy</a>

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
            @foreach ($categories as $item)
                <option value="{{$item->id}}">
                    {{$item->name_cate}}
                </option>
            @endforeach
            </select>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
    </div>
    
  </form>

@endsection
@section('page-script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#form").validate({
            rules: {
                name:{
                    required: true,
                    remote: {
                        url: `{{BASE_URL}}product/check-name`,
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
    
@endsection