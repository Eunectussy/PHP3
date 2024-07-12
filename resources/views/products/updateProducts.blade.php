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
        <form action="{{ route('products.updatepostproduct') }}" method="POST">
            @csrf

            <input type="hidden" name="idProduct" value="{{ $pro->id }}" id="">
            <div class="mb-3">
                <label for="" class="form-label">Tên</label>
                <input type="text" class="form-control" name="nameProduct" value="{{ $pro->name }}" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giá</label>
                <input type="text" class="form-control" name="priceProduct" value="{{ $pro->price }}" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Lượt xem</label>
                <input type="text" class="form-control" name="viewProduct" value="{{ $pro->view }}" id="">
            </div>
            <div class="mb-3">
                <select name="categoryProduct" class="form-select"  id="">
                    @foreach ($cate as $value)
                    <option value="{{ $value->id }}" @if ($pro->category_id === $value->id) selected @endif>
                        {{ $value->name }}</option>
                @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Sửa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
