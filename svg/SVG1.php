<html>
    <head>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: blanchedalmond;
            }
            .main-ctn{
                display: flex;
                padding: 10px;
                flex-direction: column;
            }
            .row1{
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
            }
            .row2-center{
                margin: 0 auto;
                width: 67vw;
            }
            .row2{
                margin-top: 2vh;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
            }
            .ctn1{
                border: 1px solid black;
                background-color: rgb(89, 194, 159);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn2{
                border: 1px solid black;
                background-color: rgb(86, 106, 223);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn3{
                border: 1px solid black;
                background-color: rgb(212, 155, 89);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn4{
                border: 1px solid black;
                background-color: rgb(228, 117, 172);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn5{
                border: 1px solid black;
                background-color: rgb(221, 136, 125);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn6{
                border: 1px solid black;
                background-color: rgb(158, 118, 182);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .ctn7{
                border: 1px solid black;
                background-color: rgb(120, 176, 221);
                width: 200px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                }
            .label{
                background-color: rgb(252, 186, 105);
                font-size: 14px;
                padding: 0 10 0 10;
                margin-bottom: -1vh;
            }
            
        </style>
    </head>
    <body>
        <div class="main-ctn">
            <div style="text-align: center;">
                <h2>5.4 Engage - Learning Task 5.1</h2>
                <h3>Coronel, Angela</h3>
                <h3><a href="#" style="text-decoration: none; color: rgb(46, 143, 8);">Github repo</a></h3>
            </div>
            
            <div class="row1">
                <div class="ctn1">
                    <svg height="300" width="200">
                        <circle cx="100" cy="50" r="25" fill="#ff5100e1" />
                        <circle cx="100" cy="250" r="25" fill="#ff5100e1" />
                        <circle cx="30" cy="150" r="25" fill="#ff5100e1" />
                        <circle cx="170" cy="150" r="25" fill="#ff5100e1" />
                        <line x1="100" y1="75" x2="100" y2="225" style="stroke:rgba(173, 36, 32, 0.884); stroke-width: 3" />     
                        <line x1="55" y1="150" x2="145" y2="150" style="stroke:rgb(173, 36, 32); stroke-width: 3" />
                        <line x1="75" y1="120" x2="135" y2="192" style="stroke:rgb(173, 36, 32); stroke-width: 3" />   
                        <line x1="124" y1="120" x2="75" y2="180" style="stroke:rgb(173, 36, 32); stroke-width: 3" />  
                        <circle cx="70" cy="110" r="20" fill="#e4327c" />
                        <circle cx="70" cy="190" r="20" fill="#e4327c" />
                        <circle cx="130" cy="110" r="20" fill="#e4327c" />
                        <circle cx="130" cy="190" r="20" fill="#e4327c" />
                    </svg>
                    <div class="label">
                        Lines and Circles
                    </div>
                </div>
                <div class="ctn2">
                    <svg height="300" width="200">
                        <!--head-->
                        <rect x="35" y="90" width="130" height="140" style="fill: #8C8C8C" />
                        <!--antenna-->
                        <rect x="95" y="35" width="10" height="55" style="fill: #272727" />
                        <circle cx="100" cy="35" r="15" fill="#F3DE47" />
                        <circle cx="95" cy="30" r="5" fill="#fff" /> 
                        <!--eyes-->
                        <circle cx="70" cy="140" r="20" fill="#272727" />
                        <circle cx="130" cy="140" r="20" fill="#272727" />
                        <circle cx="70" cy="140" r="15" fill="#F3DE47" />
                        <circle cx="130" cy="140" r="15" fill="#F3DE47" />
                        <circle cx="65" cy="135" r="5" fill="#fff" />
                        <circle cx="125" cy="135" r="5" fill="#fff" />  
                        <!--mouth-->                
                        <rect x="53" y="170" width="95" height="40" style="fill: #272727" />
                        <rect x="58" y="175" width="25" height="30" style="fill: #F3DE47" />
                        <rect x="88" y="175" width="25" height="30" style="fill: #F3DE47" />
                        <rect x="118" y="175" width="25" height="30" style="fill: #F3DE47" />
                    </svg>
                    <div class="label">
                        Circles and Rectangles
                    </div>
                </div>
                <div class="ctn3">
                    <svg height="300" width="200">
                        <!--sun-->
                        <circle cx="100" cy="80" r="60" fill="#F3DE47" />
                        <!--water-->
                        <polyline points="-20,180 0,200 20,180 40,200 60,180 80,200 100,180 120,200 140,180 160,200 180,180 201,200" style="fill:none;stroke:rgb(22, 92, 172);stroke-width:5" /> 
                        <polyline points="-20,210 0,230 20,210 40,230 60,210 80,230 100,210 120,230 140,210 160,230 180,210 201,230" style="fill:none;stroke:rgb(61, 130, 209);stroke-width:5" />  
                        <polyline points="-20,240 0,260 20,240 40,260 60,240 80,260 100,240 120,260 140,240 160,260 180,240 201,260" style="fill:none;stroke:rgb(22, 92, 172);stroke-width:5" />  
                        <polyline points="-20,270 0,290 20,270 40,290 60,270 80,290 100,270 120,290 140,270 160,290 180,270 201,290" style="fill:none;stroke:rgb(61, 130, 209);stroke-width:5" />   
                    </svg>
                    <div class="label">
                        Polylines and Circle
                    </div>
                </div>
                <div class="ctn4">
                    <svg height="300" width="200">
                        <!--ice cream scoop-->
                        <ellipse cx="100" cy="110" rx="60" ry="70"style="fill:rgb(98, 204, 154) " />
                        <!--cone-->
                        <polygon points="100,270 150,150 50,150" style="fill:rgb(158, 100, 34)" />
                        <polygon points="100,270 130,150 150,150" style="fill:rgb(139, 85, 23)" />
                        <!--details-->
                        <ellipse cx="50" cy="150" rx="30" ry="20"style="fill:rgb(98, 204, 154) " />
                        <ellipse cx="100" cy="150" rx="30" ry="20"style="fill:rgb(98, 204, 154) " />
                        <ellipse cx="150" cy="150" rx="30" ry="20"style="fill:rgb(98, 204, 154) " />
                        <ellipse cx="65" cy="90" rx="10" ry="20"style="fill: #72F1C5" />
                        <ellipse cx="55" cy="120" rx="5" ry="10"style="fill: #72F1C5" />
                    </svg>
                    <div class="label">
                        Polygon and Ellipses
                    </div>    
                </div>
                
            </div>
            <div class="row2-center">
                <div class="row2">
                    <div class="ctn5">
                        <svg height="300" width="200">
                            <!--kebab stick-->
                            <line x1="100" y1="30" x2="100" y2="270" style="stroke:rgb(119, 85, 46); stroke-width: 5" />      
                            <!--kebab-->
                            <circle cx="100" cy="70" r="23" fill="#eec083" />
                            <rect x="75" y="100" width="50" height="30" style="fill: #5c3625" />
                            <circle cx="100" cy="160" r="23" fill="#eec083" />
                            <rect x="75" y="190" width="50" height="30" style="fill: #754128" />
                        </svg>
                        <div class="label">
                            Circle, Line, and Rectangle
                        </div>  
                    </div>
                    <div class="ctn6">
                        <svg height="300" width="200">
                            <!--diamond-->
                            <polygon points="60,70 140,70 170,120 30,120" style="fill:rgb(125, 232, 240);stroke:rgb(40, 179, 179);stroke-width: 2" />
                            <polygon points="170,120 100,230 30,120" style="fill:rgb(125, 232, 240);stroke:rgb(40, 179, 179);stroke-width: 2" />
                            <!--inner lines-->
                            <polyline points="60,70 80,120 100,70 120,120 140,70 " style="fill:none;stroke:rgb(40, 179, 179);stroke-width:2" /> 
                            <polyline points="80,120 100,230 120,120 " style="fill:none;stroke:rgb(40, 179, 179);stroke-width:2" />              
                        </svg>
                        <div class="label">
                            Polyline and Polygon
                        </div>  
                    </div>
                    <div class="ctn7">
                        <svg height="300" width="200">
                            <!--ears-->
                            <polygon points="35,110 40,35 140,130" style="fill:#CBA36E;stroke:#CBA36E;stroke-width: 2" />
                            <polygon points="165,130 160,35 85,110" style="fill:#CBA36E;stroke:#CBA36E;stroke-width: 2" />
                            <!--body-->
                            <ellipse cx="100" cy="250" rx="90" ry="110"style="fill: #eec083" />
                            <!--face and snout-->
                            <circle cx="100" cy="130" r="70" fill="#eec083" />
                            <ellipse cx="100" cy="140" rx="50" ry="30" style="fill: #d4c7b5;" />
                            <!--eyes-->
                            <circle cx="70" cy="100" r="20" style="fill:rgb(240, 248, 197);" />  
                            <circle cx="130" cy="100" r="20" style="fill:rgb(240, 248, 197);" />
                            <circle cx="70" cy="100" r="18" style="fill:rgb(40, 179, 179);" />  
                            <circle cx="130" cy="100" r="18" style="fill:rgb(40, 179, 179);" />
                            <circle cx="70" cy="100" r="10" style="fill:rgb(10, 31, 31);" />  
                            <circle cx="130" cy="100" r="10" style="fill:rgb(10, 31, 31);" />
                            <circle cx="60" cy="100" r="5" style="fill:rgb(176, 223, 223);" />  
                            <circle cx="120" cy="100" r="5" style="fill:rgb(176, 223, 223);" />  
                            <!--mouth-->
                            <polyline points="90,130 100,120 100,115 100,120 110,130" style="fill:none;stroke:#2b1f10;stroke-width:2" />              
                            <!--nose and whiskers-->
                            <ellipse cx="100" cy="110" rx="10" ry="5" style="fill: #eb7992" />
                            <polyline points="40,120 50,130 60,120 70,130 80,120" style="fill:none;stroke:#b6b6b6;stroke-width:2" />
                            <polyline points="40,130 50,140 60,125 70,135 80,120" style="fill:none;stroke:#b6b6b6;stroke-width:2" />
                            <polyline points="160,120 150,130 140,120 130,130 120,120" style="fill:none;stroke:#b6b6b6;stroke-width:2" />
                            <polyline points="160,130 150,140 140,125 130,135 120,120" style="fill:none;stroke:#b6b6b6;stroke-width:2" />
                            <!--belly-->
                            <ellipse cx="100" cy="250" rx="60" ry="80"style="fill: #CBA36E" />
                            <!--collar-->
                            <rect x="33" y="160" width="135" height="15" style="fill: red" />
                            <ellipse cx="100" cy="180" rx="15" ry="10" style="fill: #b97b08" />
                            <ellipse cx="95" cy="175" rx="5" ry="3" style="fill: #c4a776" />
                        </svg>   
                        <div class="label">
                            Circle, Rectangle, Polyline, Polygon and Ellipse
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>