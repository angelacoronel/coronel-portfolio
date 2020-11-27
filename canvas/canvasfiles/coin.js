var canvas = document.getElementById("ctr3");
var ctx = canvas.getContext("2d");
    

    //coin
    ctx.beginPath();
    ctx.lineWidth = 30;
    ctx.strokeStyle="#f7c331";
    ctx.arc(100, 100, 40, 0, 2 * Math.PI);
    ctx.stroke();
    ctx.fillStyle="#ffe499";
    ctx.fill();  
    ctx.closePath();

    //line
    ctx.beginPath();
    ctx.lineTo(100,80);
    ctx.lineTo(100,120);
    ctx.closePath();
    ctx.lineWidth = 15;
    ctx.stroke();
