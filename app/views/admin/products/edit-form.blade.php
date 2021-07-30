@extends('layouts.main')
@section('title', "Add Product")
@section('content')
<form class="p-5" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="text-right">
            <a href="{{BASE_URL . 'product'}}" class="btn btn-sm btn-danger">Hủy</a>

        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Giá sản phẩm</label>
        <input type="text" value="{{$product->price}}" class="form-control" name="price" placeholder="Nhập giá">
      </div>
      <div class="form-group">
        <label for="">Mô tả ngắn</label>
        <textarea name="short_desc"  class="form-control" rows="3"> {{$product->short_desc}}</textarea>
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <textarea name="detail"  class="form-control" rows="5"> {{$product->detail}}</textarea>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Hình ảnh</label>
        <img src="<?= BASE_URL?>{{$product->image}}" alt="" height="100px" width="100px">
            <input type="file" value="{{$product->image}}" class="form-control" name="image">
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
        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
    </div>
    
  </form>

@endsection