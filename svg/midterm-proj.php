<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            body{
                padding: 0;
                margin: 0;
                background-color: #fff;
                overflow-x: hidden;
            }
            .cloud1{
                position: absolute;
                animation: cloud1 50s linear infinite normal forwards 3s;
                opacity: 0;
            }
            .cloud2{
                position: absolute;
                animation: cloud2 40s linear infinite normal forwards 5s;
                opacity: 0;
            }
            .cloud3{
                position: absolute;
                animation: cloud3 60s linear infinite normal forwards 10s;
                opacity: 0;
            }
            @keyframes cloud1{ 
                0% {
                    transform: translateX(-700px);
                    opacity: 0%
                }
                1% {
                    transform: translateX(-680px);
                    opacity: 40%
                }
                70% {
                    transform: translateX(820px);
                    opacity: 60%
                } 
                100% {
                    transform: translateX(900px);
                    opacity: 0
                } 
            }
            @keyframes cloud2{ 
                0% {
                    transform: translate(-700px, 70px);
                    opacity: 0%
                }
                1% {
                    transform: translate(-680px, 70px);
                    opacity: 50%
                }
                70% {
                    transform: translate(820px, 70px);
                    opacity: 70%
                } 
                100% {
                    transform: translate(900px, 70px);
                    opacity: 0
                } 
            }
            @keyframes cloud3{ 
                0% {
                    transform: translate(-700px, 50px);
                    opacity: 0%
                }
                1% {
                    transform: translate(-680px, 50px);
                    opacity: 50%
                }
                80% {
                    transform: translate(820px, 50px);
                    opacity: 70%
                } 
                100% {
                    transform: translate(900px, 50px);
                    opacity: 0
                } 
            }
            .grass{
                position: absolute;
                top: 0;
                margin-bottom: 0;
                transform: translate(0px, 650px) scale(1.1);
            }
            .sky{
                position: absolute;
                top: 0;
                margin-bottom: 0;
                transform: translate(0px, 650px) scale(1.1);
            }
            .container{
                background: linear-gradient(to bottom, #b1dae6 15%,#ffd6c8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b1dae6', endColorstr='#ffd6c8',GradientType=0 );
                overflow-x: hidden;
                width: 100vw;
                height: 100vh;
                position: relative;
                display: flex;
                flex-direction: row;
                justify-content: center;
                right: 5px;
                left: 0px;
                top: 0px ;
                bottom: 0px;
            }
            .logo-ctn{
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
            .logo{
                margin: 0 auto;
                position: absolute;
                width: 542px;
                height: 301px;
                opacity: 1;
                transform: translateX(30px);
                animation: all 1s ease-in-out 1s;
            }
            .flowers{
                transform: translateX(0px);
            }
            .human{
                position: absolute;
                transform: translate(30px,175px) scale(0.7);
                animation: human 50s ease-in infinite 6s;
                opacity: 0;
            }
            @keyframes human{
                0%{
                    transform: translate(700px, 175px) scale(0.7);
                    opacity: 0;
                }
                10%{
                    opacity: 1;
                }
                50%{
                    transform: translate(-700px, 195px) scale(0.7);
                    opacity: 1;
                }
                55%{
                    transform: translate(-710px, 175px) scale(0.7);
                    opacity: 1;
                }
                56%{
                    transform: translate(-710px, 175px) scale(0.7);
                    opacity: 0;
                }
                100%{
                    transform: translate(-710px, 175px) scale(0.7);
                    opacity: 0;
                }
            }
            .fences{
                position: absolute;
                transform: translate(0px, 540px) scale(1.1);
            }
            /*flowers*/
            .carn{
                position: absolute;
                transform: translate(-660px, 610px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .carn:hover{
                transform: translate(-660px, 610px) scale(1.2);
            }
            .carninfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .carn:hover + .carninfo{
                visibility: visible;
                opacity: 100%;
            }
            .iris{
                position: absolute;
                transform: translate(-500px, 725px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .iris:hover{
                transform: translate(-500px, 725px) scale(1.2);
            }
            .irisinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .iris:hover + .irisinfo{
                visibility: visible;
                opacity: 100%;
            }
            .sun{
                position: absolute;
                transform: translate(-470px, 610px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .sun:hover{
                transform: translate(-470px, 610px) scale(1.2);
            }
            .suninfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .sun:hover + .suninfo{
                visibility: visible;
                opacity: 100%;
            }
            .rose{
                position: absolute;
                transform: translate(-300px, 665px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .rose:hover{
                transform: translate(-300px, 665px) scale(1.2);
            }
            .roseinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .rose:hover + .roseinfo{
                visibility: visible;
                opacity: 100%;
            }
            .dahlia{
                position: absolute;
                transform: translate(-130px, 690px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .dahlia:hover{
                transform: translate(-130px, 690px) scale(1.2);
            }
            .dahliainfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .dahlia:hover + .dahliainfo{
                visibility: visible;
                opacity: 100%;
            }
            .orchid{
                position: absolute;
                transform: translate(-60px, 519px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .orchid:hover{
                transform: translate(-60px, 505px) scale(1.2);
            }
            .orchidinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .orchid:hover + .orchidinfo{
                visibility: visible;
                opacity: 100%;
            }
            .peony{
                position: absolute;
                transform: translate(160px, 630px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .peony:hover{
                transform: translate(160px, 625px) scale(1.2);
            }
            .peonyinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .peony:hover + .peonyinfo{
                visibility: visible;
                opacity: 100%;
            }
            .lily{
                position: absolute;
                transform: translate(300px, 530px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .lily:hover{
                transform: translate(300px, 510px) scale(1.2);
            }
            .lilyinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .lily:hover + .lilyinfo{
                visibility: visible;
                opacity: 100%;
            }
            .tulip{
                position: absolute;
                transform: translate(460px, 635px) scale(1.1);
                transition: all ease-in-out 0.5s;
            }
            .tulip:hover{
                transform: translate(460px, 620px) scale(1.2);
            }
            .tulipinfo{
                position: absolute;
                opacity: 0%;
                visibility: none;
                transform: translate(-300px, 260px) scale(0.9);
                transition: opacity ease-in-out 0.5s;
            }
            .tulip:hover + .tulipinfo{
                visibility: visible;
                opacity: 100%;
            }
            .bushes{
                position: absolute;
                transform: translate(0px, 610px) scale(1.1);
                overflow-x: hidden;
            }
            .frontbushes{
                position: absolute;
                transform: translate(0px, 800px) scale(1.1);
            }
            .f2{
                filter: hue-rotate(180deg);
                position: absolute;
                transform: translate(0px, 0px) scale(0.2);
                animation: but 40s infinite 5s;
                opacity: 0;
            }
            @keyframes but{
                0%{
                    transform: translate(700px, 550px) scale(0.7);
                    opacity: 1;
                }
                5%{
                    transform: translate(500px, 500px) scale(0.7);
                }
                20%{
                    transform: translate(100px, 450px) scale(0.7);
                }
                25%{
                    transform: translate(0px, 510px) scale(0.7);
                }
                40%{
                    transform: translate(-300px, 600px) scale(0.7);
                }
               55%{
                    transform: translate(-700px, 540px) scale(0.7);
                    opacity: 1;
                }
                56%{
                    transform: translate(-700px, 500px) scale(0.7);
                    opacity: 0;
                }
                100%{
                    transform: translate(-700px, 200px) scale(0.7);
                    opacity: 0;
                }
            }
            .f{
                position: absolute;
                transform: translate(0px, 0px) scale(0.2);
                animation: bu 40s infinite 2s;
                opacity: 0;
            }
            @keyframes bu{
                0%{
                    transform: translate(700px, 300px) scale(0.7);
                    opacity: 1;
                }
                5%{
                    transform: translate(500px, 500px) scale(0.7);
                }
                20%{
                    transform: translate(100px, 450px) scale(0.7);
                }
                25%{
                    transform: translate(0px, 510px) scale(0.7);
                }
                40%{
                    transform: translate(-300px, 300px) scale(0.7);
                }
               55%{
                    transform: translate(-700px, 200px) scale(0.7);
                    opacity: 1;
                }
                56%{
                    transform: translate(-700px, 200px) scale(0.7);
                    opacity: 0;
                }
                100%{
                    transform: translate(-700px, 200px) scale(0.7);
                    opacity: 0;
                }
            }

        </style>
    </head>
    <body>
        <div class="container">
            <object type="image/svg+xml" data="svg/cloud1.svg" class="cloud1">
            </object>
            <object type="image/svg+xml" data="svg/cloud2.svg" class="cloud2">
            </object>
            <object type="image/svg+xml" data="svg/cloud3.svg" class="cloud3">
            </object>
            <object type="image/svg+xml" data="svg/human.svg" class="human">
            </object>
            <object type="image/svg+xml" data="svg/grass.svg" class="grass">
            </object>
            <div class="logo-ctn">
                <object type="image/svg+xml" data="svg/logo.svg" class="logo">
                </object>
            </div>           
            <object type="image/svg+xml" data="svg/fences.svg" class="fences">
            </object>
            <object type="image/svg+xml" data="svg/bushes.svg" class="bushes">
            </object>
            <object type="image/svg+xml" data="svg/butterfly.svg" class="f">
            </object>
            <object type="image/svg+xml" data="svg/butterfly.svg" class="f2">
            </object>
            <div class="flowers">
                <div>             
                    <object type="image/svg+xml" data="svg/sunflowers.svg" class="sun">
                    </object>
                    <object type="image/svg+xml" data="svg/sun_info.svg" class="suninfo">
                    </object>
                </div> 
                <div>
                    <object type="image/svg+xml" data="svg/carnations.svg" class="carn">
                    </object>
                    <object type="image/svg+xml" data="svg/carn_info.svg" class="carninfo">
                    </object>
                </div>  
                <div>
                    <object type="image/svg+xml" data="svg/irises.svg" class="iris">
                    </object>
                    <object type="image/svg+xml" data="svg/iris_info.svg" class="irisinfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/roses.svg" class="rose">
                    </object>
                    <object type="image/svg+xml" data="svg/rose_info.svg" class="roseinfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/orchids.svg" class="orchid">
                    </object>
                    <object type="image/svg+xml" data="svg/orchid_info.svg" class="orchidinfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/peonies.svg" class="peony">
                    </object>
                    <object type="image/svg+xml" data="svg/peony_info.svg" class="peonyinfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/dahlias.svg" class="dahlia">
                    </object>
                    <object type="image/svg+xml" data="svg/dahlia_info.svg" class="dahliainfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/lilies.svg" class="lily">
                    </object>
                    <object type="image/svg+xml" data="svg/lily_info.svg" class="lilyinfo">
                    </object>
                </div>
                <div>
                    <object type="image/svg+xml" data="svg/tulips.svg" class="tulip">
                    </object>
                    <object type="image/svg+xml" data="svg/tulip_info.svg" class="tulipinfo">
                    </object>
                </div>
            </div>
            <object type="image/svg+xml" data="svg/frontbushes.svg" class="frontbushes">
            </object>
            
        </div>

    </body>
</html>
