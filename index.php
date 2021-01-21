<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <form action="welcome.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="row">
                <input type="email" name="email" id="email"  placeholder="Email">
            </div>
             <button class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html> 