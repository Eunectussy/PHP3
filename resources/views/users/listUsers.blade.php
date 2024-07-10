<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.addusers') }}">Thêm mới</a>
    <h1>what is love</h1>
    <table class="table" border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Email</td>
            <td>Phòng ban</td>
            <td>Hành động</td>
        </tr>
        @foreach ($abc as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->ten_donvi }}</td>
            <td>
                <a  href="{{ route('users.deleteuser', $value->id) }}">Xóa</a> {{-- confirm trước khi delete --}}
                <a href="{{ route('users.getuser', $value->id) }}">Sửa</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>