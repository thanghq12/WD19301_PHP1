<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        <?php foreach ($products as $key=>$value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['price']; ?></td>
            <td><a href="<?php echo BASE_URL.'?url=edit-product&id='.$value['id']; ?>">Edit</a>
                <a href="<?php echo BASE_URL.'?url=delete-product&id='.$value['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>