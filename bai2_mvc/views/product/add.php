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
    <form method="POST" action="<?php echo BASE_URL.'?url=add-product'; ?>">
        Name
        <input type="text" name="name" value="">
        Price
        <input type="text" name="price" value="">
        <input type="submit" name="add" value="Add">
    </form>
</body>
</html>