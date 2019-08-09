<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBLOG</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <!-- include_once('./navbar/navbar.php') -->
    <?php include './navbar/navbar.php';?>

    <div class="container ">
        <?php include './eachpost/eachpost.php';?>
        <h1 class="m-4">Create Post</h1>
        <?php include './createpost/createpost.php';?>
        <h1 class="m-4">Edit Post</h1>
        <?php include './editpost/editpost.php';?>
        <h1 class="m-4">Sign Up</h1>
        <?php include './signup/signup.php';?>
        <h1 class="m-4">Log In</h1>
        <?php include './login/login.php';?>
    </div>

    <script src="public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>