<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <form class="mb3" action="{{ route('products.searchproducts') }}">
            <input class="form-control" type="text" name="prodsearch" placeholder="Nhập" aria-label="Search">
            <button class="btn btn-outline-success">Search</button>
            <a href="{{ route('products.listproduct') }}" class="btn btn-outline-success">All</a>
        </form><br>




        <a href="{{ route('products.addproducts') }}" class="btn btn-primary">Thêm mới</a>
        <table class="table" border="1">
            <tr>
                <td>ID</td>
                <td>Tên</td>
                <td>Giá</td>
                <td>Lượt xem</td>
                <td>Danh mục</td>
                <td>Thời gian cập nhật</td>
                <td>Hành động</td>
            </tr>
            @foreach ($Product as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->view }}</td>
                    <td>{{ $item->catename }}</td>
                    <td>{{ $item->create_at }}</td>
                    <td><a href="{{ route('products.deleteproduct', $item->id) }}" class="btn btn-warning">Xóa</a>
                        <a href="{{ route('products.updateproduct', $item->id) }}" class="btn btn-secondary">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
