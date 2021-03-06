<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';

 ?>


<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <style>
            .circle{
                position: absolute;
                transform: translate(30px, 150px);
            }
            .logo{
                position: absolute;
                height: 16px;
            }
            #square{
                flex-direction: row;
                position: relative;
                transform: translate(420px, 290px);
                background-color: white;
            }  
            .logo2{
                position: relative;
                transform: translateX(-70px)scale(0.7);
                right: 0;
            }
        </style>
    </head>
    <body>
        
        <header>
            
            <div class="header-wrap stretch space-between">
                <div class="title">
                <object type="image/svg+xml" data="logo.svg" class="logo">
                 </object>
                </div>
                <div>
                    <ul class="nav-links">
                        <li class="right">
                            <a href="index.php?page=home">HOME</a>
                        </li>
                        <li class="right">
                            <a href="index.php?page=about">ABOUT</a>
                        </li>
                        <li class="right">
                            <a href="index.php?page=css">CSS3</a>
                        </li>
                        <li class="right" >
                            <a href="index.php?page=svg">SVG</a>
                        </li>
                        <li class="right" >
                            <a href="index.php?page=canvas">CANVAS</a>
                        </li>      
                    </ul>
                </div>
            </div>
            
        </header>
        
        <div id="content-wrapper">
        <?php
                switch ($page) { 
                    case 'home':
                        require_once('home.php');
                        break;
                    case 'about':
                        require_once('about.php');
                        break;
                    case 'css':
                        require_once('css.php');
                        break;
                    case 'svg':
                        require_once('svg.php');
                        break;
                    case 'canvas':
                        require_once('canvas.php');
                        break;
                    default: 
                        require_once ('home.php');  
                        break;
                }
            ?>
        </div>
        <div class="socmed">
            <a href="https://github.com/angelacoronel/coronel-portfolio/" target="blank" class="right">
                <div class="logo-github-small">
                    <div class="ear-one-left"></div>
                    <div class="ear-one-none"></div>
                    <div class="ear-one-right"></div>
                    <div class="ear-two-right"></div>
                    <div class="ear-two-none"></div>
                    <div class="ear-two-left"></div>
                    <div class="body-bottom"></div>
                    <div class="body-left-none"></div>
                    <div class="body-right-none"></div>
                    <div class="tail-end"></div>
                    <div class="tail-body"></div>
                    <div class="tail-body-spots"></div>
                    <div class="tail-end-none"></div>
                    <div class="tail-body-none"></div>
                    <div class="tail-tip"></div>
                    <div class="body-left"></div>
                    <div class="body-right"></div>
                    <div class="head"></div>
                    <div class="chin-left"></div>
                    <div class="chin-right"></div>
                </div>
            </a>
        </div>        
    </body>
</html>
<script>
 $(document).ready(function(){
    $(window).scrollTop(0);
});
</script>