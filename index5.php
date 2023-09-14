<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="././images/logo.jpg" type="image/x-icon" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web phụ kiện</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css">
    
</head>
<body>
   
    <div class="wrapper">
    <?php
        session_start();
            include("admin/config/config.php");
            include("pages/menu.php");
            include("pages/header.php"); 
            include("index1.php"); 
            include("pages/footer.php"); 
        ?>
    </div>
</body>
</html>