var canvas = document.getElementById("ctr7");
var ctx = canvas.getContext("2d");
    

    
    //knob
    ctx.beginPath();
    ctx.lineWidth = 10;
    ctx.strokeStyle="#737373";
    ctx.arc(145, 80, 15, 0, 2 * Math.PI);
    ctx.stroke(); 
    ctx.closePath();
    ctx.beginPath();
    ctx.lineWidth = 10;
    ctx.strokeStyle="#737373";
    ctx.arc(145, 110, 15, 0, 2 * Math.PI);
    ctx.stroke(); 
    ctx.closePath();

    //bomb
    ctx.beginPath();
    ctx.arc(90, 100, 45, 0, 3 * Math.PI);
    ctx.fillStyle="#161717";
    ctx.fill();  
    ctx.closePath();
    
    //wick
    ctx.beginPath();
    ctx.lineTo(90,50);
    ctx.lineTo(90,30);
    ctx.closePath();
    ctx.lineWidth = 5;
    ctx.stroke();

    //line
    ctx.beginPath();
    ctx.lineWidth = 10;
    ctx.strokeStyle="#737373";
    ctx.lineTo(75,53);
    ctx.lineTo(105,53);
    ctx.closePath();
    ctx.stroke();

    //eye L
    ctx.beginPath();
    ctx.lineTo(75,90);
    ctx.lineTo(75,105);
    ctx.closePath();
    ctx.lineWidth = 10;
    ctx.stroke();

    //eye R
    ctx.beginPath();
    ctx.lineTo(105,90);
    ctx.lineTo(105,105);
    ctx.closePath();
    ctx.lineWidth = 10;
    ctx.stroke();
