<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././themify-icons/themify-icons.css">
    <title>Document</title>
</head>
<body>

<div class="image"> 
    <div class="slider">
        <div class="slider1">
            <img id="img1" onclick="changeImage()" src="./images/slider1.png">
        </div>
        <div class="slider2">
            <a href="index5.php"><img class="img2_1" id="img2" onclick="changeImage()" src="./images/slider2.1.jpg"></a>
            <a href="index6.php"><img class="img2_2" id="img2" onclick="changeImage()" src="./images/slider2.2.jpg"></a>
            <a href="index7.php"><img class="img2_3" id="img2" onclick="changeImage()" src="./images/slider2.3.jpg"></a>
            <a href="index8.php"><img class="img2_4" id="img2" onclick="changeImage()" src="./images/slider2.4.jpg"></a>
        </div>
    </div>
    
<style>

    .image{
        margin-top: 142px;
    }
    .image .slider{
        display: flex;
        height: 325px;
        width: 100%;
    }

    .image .slider .slider1{
        flex: 3;
    }
    .image .slider .slider2{
        flex: 1;
        display: flex;
        flex-wrap: wrap;
        margin: 9px 16px 0 -8px;
    }

    #img1{
        height: 325px;
        width: 95%;
    }

    a #img2{
        height: 150px;
        width: 100%;
        cursor: pointer;
        transition: all .3s;
    }

    a #img2:hover{
        transform: scale(1.1);
        
    }

    .img2_1, .img2_3{
        margin-left: -9px;
        margin-right: 9px;
    }

</style>

<script>
    var index = 1;
    changeImage = function (){
        var imgs = ["./images/slider1.png","./images/slider2.png","./images/slider3.png"];
        document.getElementById('img1').src = imgs[index];
        index++;
        if(index==3){
            index=0;
        }
    }
    setInterval(changeImage,3000);
</script>
</body>
</html>
