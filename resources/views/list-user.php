<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Nill Kigger</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
    <?php foreach($ligma as $value): ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
        </tr>
    <?php endforeach ?>
    </table>
</body>

</html>