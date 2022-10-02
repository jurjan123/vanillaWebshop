<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @media only screen and(max-width:600px){
        li{
            background-color: blue;
        }
    }
</style>
<body>
    <nav class="mynav">
        
    <ul class="menu-items">
        <li id="logo"><img src="images/Schermopname (212).svg" alt=""></li>
        <li>heren  <img src="images/arrow_down.png" id="arrowdown" height="10" width="10"><button class="btn"></button></li>
        <li>schoenen <img src="images/arrow_down.png" id="arrowdown" height="10" width="10"></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" class="person" width="48" height="48" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg><!--<img src="person (4).svg" class="person" width="48" height="48" alt="">!--></li>
          <li><div class="cartamount">0</div></li>
        <li><img src="shoppingbag.png" width="50" height="50" class="shoppingcart"></li> 
    </ul>
</nav>
<h1 class="uitgelicht">uitgelicht</h1>
<div class="shop">
    
    <div class="item">
        <img src="images/img-1.jpg" width="200" alt="">
        <div class="details">
            mooi overhemd

        </div>
        <div class="quantity">$19.99</div>
    </div>
    <div class="item">
        <img src="images/img-2.jpg" width="200"  alt="">
        <div class="details">
            ook een mooi overhemd

        </div>
        <div class="quantity">$19.99</div>
    </div>
    <div class="item">
        <img src="images/img-3.jpg" width="200" alt="">
        <div class="details">
            mooi t-shirt
        </div>
        <div class="quantity">$19.99</div>
    </div>
    <div class="item">
        <img src="images/img-4.jpg" width="200" alt="">
        <div class="details">
            mooi pak 

        </div>
        <div class="quantity">$19.99</div>
    </div>
    <div class="item">
        <img src="images/img-4.jpg" width="200" alt="">
        <div class="details">
            mooi pak

        </div>
        <div class="quantity">$19.99</div>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>