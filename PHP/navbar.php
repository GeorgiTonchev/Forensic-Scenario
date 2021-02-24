<?php

if(!isset($_SESSION['name'])){

echo ' <!--Navbar -->
<nav role="navigation" id="navbar" class="navbar navbar-expand-lg m-0 sticky-top">
   <a class="whitecream navbar-brand m-0 pl-2" href="index.php"> <img src="http://ritxykun.com/50WEB/img/logopatty2.png" height="80" alt="logo"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
   aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon whitecream"><i class="fas fa-hamburger"></i></span>
   </button>

 <!-- Collapsible content -->
 <div class="collapse navbar-collapse" id="basicExampleNav">
     
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/index.php">Home</a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/promotions.php"> Promotions </a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/contact.php"> Contact </a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/menu.php">Menu</a></li>
            <li class="nav-item"><a class="whitecream nav-link"  href="http://ritxykun.com/50WEB/loginform.php">Log in</a></li>
            <li class="nav-item"><a class="whitecream nav-link"  href="http://ritxykun.com/50WEB/adminlogin.php">Admin</a></li>
          
        </ul>
    </div>
    </nav>';

}
if(isset($_SESSION['name'])){

    echo ' <!--Navbar -->
<nav role="navigation" id="navbar" class="navbar navbar-expand-lg m-0 sticky-top">
   <a class="whitecream navbar-brand m-0 pl-2" href="index.php"> <img src="http://ritxykun.com/50WEB/img/logopatty2.png" height="80" alt="logo"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
   aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon whitecream"><i class="fas fa-hamburger"></i></span>
   </button>

 <!-- Collapsible content -->
 <div class="collapse navbar-collapse" id="basicExampleNav">
     
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/index.php">Home</a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/promotions.php"> Promotions </a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/contact.php"> Contact </a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/menu.php">Menu</a></li>
            <li class="nav-item"><a class="whitecream nav-link" href="http://ritxykun.com/50WEB/PHP/logout.php">Log Out</a></li>
            <li class="nav-item whitecream mt-2 ml-1">'.$_SESSION['name'].'</li>
        </ul>
    </div>
    </nav>';

}
?>