
<html>
    <head>
        <style>
            body{
                background-color: black;
            }
            #ctn{
                height: 90vh;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            svg{
                border: black solid;
                background: linear-gradient(to bottom, rgba(0,26,153,1) 0%, rgba(29,132,163,1) 100%);
            }
            img{
                opacity: 50%;
                z-index: -1;
                position: relative;
                transform: translate(-290px,-30px);
                height: 250px;
                width: 250px;
            }
        </style>
    </head>
    <body>
    <div id="ctn">
    <svg height="300px" width="300px">

    <g style="opacity: 0;">   
        <ellipse cx="30" cy="30" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="50" cy="45" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="15" cy="45" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>

        <animateMotion dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#cloud"></mpath>
        </animateMotion>
        <path d="M-100,0 350,0"
            stroke="none" fill="none" id="cloud"></path>
        <animate attributeType="CSS" attributeName="opacity" set="0" to="0.7" begin="0s" dur="1s" repeatCount="1" fill="freeze"/>
    </g> 
    <g style="opacity: 0;">   
        <ellipse cx="50" cy="150" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="65" cy="165" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="60" cy="170" rx="35" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>

        <animateMotion begin="2s" dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#cloud"></mpath>
        </animateMotion>
        <path d="M-100,0 350,0"
            stroke="none" fill="none" id="cloud"></path>
        <animate attributeType="CSS" attributeName="opacity" set="0" to="0.5" begin="2s" dur="1s" repeatCount="1" fill="freeze"/>

    </g> 
    <g style="opacity: 0;">   
        <ellipse cx="60" cy="270" rx="30" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="75" cy="285" rx="40" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <ellipse cx="50" cy="290" rx="40" ry="20" fill="#a4aedb" stroke="none" stroke-width="3"/>
        <animateMotion begin="1s" dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#cloud"></mpath>
        </animateMotion>
        <path d="M-100,0 350,0"
            stroke="none" fill="none" id="cloud"></path>
        <animate attributeType="CSS" attributeName="opacity" set="0" to="1" begin="1s" dur="1s" repeatCount="1" fill="freeze"/>
    </g> 

        <g>
        /*body*/
        <ellipse cx="115" cy="105" rx="25" ry="15" fill="#c22f7c" stroke="none" stroke-width="3" />
        <ellipse cx="210" cy="120" rx="25" ry="15" fill="#c22f7c" stroke="none" stroke-width="3" />
        <ellipse cx="125" cy="85" rx="15" ry="25" fill="#f5abd2" stroke="none" stroke-width="3" />
        <circle cx="165" cy="80" r="45" fill="#f5abd2" stroke="none" stroke-width="3" />
        <ellipse cx="197" cy="115" rx="15" ry="18" fill="#f5abd2" stroke="none" stroke-width="3" />

    /*face*/

        <ellipse style="transform: rotate(20deg);" cx="180" cy="5" rx="6" ry="15" fill="#02061a" stroke="none" stroke-width="3">
        </ellipse>
        <ellipse style="transform: rotate(20deg);" cx="180" cy="-1" rx="3" ry="7" fill="#edf0ff" stroke="none" stroke-width="3"></ellipse>

        <ellipse style="transform: rotate(20deg);" cx="200" cy="5" rx="6" ry="13" fill="#02061a" stroke="none" stroke-width="3" />
        <ellipse style="transform: rotate(20deg);" cx="200" cy="0" rx="3" ry="7" fill="#edf0ff" stroke="none" stroke-width="3" />

        <ellipse cx="170" cy="90" rx="7" ry="5" fill="#991737" stroke="none" stroke-width="3" />
        <ellipse style="transform: rotate(20deg);" cx="163" cy="18" rx="8" ry="5" fill="#f76084" stroke="none" stroke-width="3" />
        <ellipse style="transform: rotate(20deg);" cx="215" cy="18" rx="8" ry="5" fill="#f76084" stroke="none" stroke-width="3" />

        /*star*/
        <path id="star" stroke="none" stroke-width="3" fill="#ebc507"
            d="M150,83 Q130,80 105,123
                Q40,145 45,150 Q40,160 80,215
                Q80,250 87,269 Q90,280 150,250
                Q200,270 205,260 Q210,250 205,200
                Q245,160 240,150 Q230,135 190,130
                Q160,80 150,83"
        >
        <animate attributeName="fill" values="red;#ebc507;green;blue;purple;violet;red;" dur="10s" repeatCount="indefinite" />
        </path>

        <animateMotion dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#wire"></mpath>
        </animateMotion>
        </g>
        <path d="M0,-20 -5,20 0,-10 5,10 0,-20"
            stroke="none" fill="none" id="wire"></path>

    </svg>
    </div>
    </body>
 </html>