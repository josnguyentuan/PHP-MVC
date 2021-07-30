@extends('layouts.main')
@section('title', 'Danh sách sản phẩm')
@section('content')
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
                            <a href="{{BASE_URL . 'product/add'}}" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody >
                        @foreach ($products as $item)
                            <tr>    
                                <td> {{$item->id}} </td>
                                <td> 
                                   <img src="<?= BASE_URL?>{{$item->image}}" width="50px" height="50px" alt="" > 
                                </td>

                                <td> {{$item->name}} </td>
                                <td> {{ number_format($item->price)}}đ </td>
                                <td> {{substr($item->detail, 0, 40)}}... </td>
                                <td> {{$item->category->name_cate}} </td>
                                <td>
                                    <a href="{{BASE_URL . 'product/edit/' . $item->id}}" class="btn btn-sm btn-primary">Sửa</a>
                                    <a  href="{{BASE_URL . 'product/delete/' . $item->id}}"  href="" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection