<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action=" {{ route('users.updatepostuser') }}" method="POST">
        @foreach ($abc as $value)
        @csrf
        <input type="text" name="idUser" value=" {{ $value->id }}">
        <label for="">Tên</label>
        <input type="text" name="nameUser" value=" {{ $value->name }}"> <br>

        <label for="">Email</label>
        <input type="email" name="emailUser" value=" {{ $value->email }}"> <br>

        <label for="">Phòng ban</label>
        <select name="phongbanUser">
            @foreach ($phongBan as $valu)
                <option value="{{ $valu->id }}">{{ $valu->ten_donvi }}</option>
            @endforeach
        </select> <br>

        <label for="">Tuổi</label>
        <input type="text" name="tuoiUser" value=" {{ $value->tuoi }}"> <br>
        @endforeach
        <button>Sửa</button>
    </form>
</body>

</html>
