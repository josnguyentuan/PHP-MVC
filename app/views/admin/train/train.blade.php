<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Start</th>
                <th>Receive</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->start_time}}</td>
                <td>{{$item->recceive_time}}</td>
                <td>
                    <a href="{{BASE_URL . 'train/edit/'. $item->id}}">Sua</a>
                    <a  id="{{$user->id}}" href="{{BASE_URL . 'train/delete/' . $item->id}}" >Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>