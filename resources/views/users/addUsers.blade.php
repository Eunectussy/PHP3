<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action=" {{ route('users.addpostusers') }}" method="POST">
        @csrf
        <label for="">Tên</label>
        <input type="text" name="nameUser"> <br>

        <label for="">Email</label>
        <input type="email" name="emailUser"> <br>

        <label for="">Phòng ban</label>
        <select name="phongbanUser">
            @foreach ($phongBan as $value)
                <option value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
            @endforeach
        </select> <br>

        <label for="">Tuổi</label>
        <input type="text" name="tuoiUser"> <br>

        <button>Thêm mới</button>
    </form>
</body>

</html>
