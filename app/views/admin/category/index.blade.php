@extends('layouts.main')
@section('title', 'Danh sách danh mục')
@section('content')
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
                            <a href="{{BASE_URL . 'category/add'}}" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($cates as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name_cate}}</td>
                                <td>{{$item->show_menu == 1 ? "Có" : "Không"}}</td>
                                <td>{{count($item->products)}}</td>
                                <td>
                    <a href="{{BASE_URL . 'category/edit/' . $item->id}}" >Sửa</a>
                    <a  id="{{$user->id}}" href="{{BASE_URL . 'category/delete/' . $item->id}}"  >Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection