var canvas = document.getElementById("ctr5");
var ctx = canvas.getContext("2d");
    
    // stem
    ctx.beginPath();
    ctx.lineWidth = 30;
    ctx.strokeStyle="#3dab35";
    ctx.lineTo(100,100);
    ctx.lineTo(100,170);
    ctx.closePath();
    ctx.lineWidth = 15;
    ctx.stroke();
    
    //flower
    ctx.beginPath();
    ctx.lineWidth = 25;
    ctx.strokeStyle="#eb4634";
    ctx.arc(100, 70, 30, 0, 3 * Math.PI);
    ctx.stroke();
    ctx.fillStyle="#ffe499";
    ctx.fill();  
    ctx.closePath();

    //leaf1
    ctx.beginPath();
    ctx.fillStyle="#3dab35";
    ctx.lineTo(100,170);
    ctx.bezierCurveTo(70, 170, 75, 165, 70, 150);
    ctx.bezierCurveTo(90, 150, 95, 155, 100, 170);
    ctx.fill();  
    ctx.closePath();

    //leaf2
    ctx.beginPath();
    ctx.fillStyle="#3dab35";
    ctx.lineTo(100,170);
    ctx.bezierCurveTo(130, 170, 135, 165, 130, 150);
    ctx.bezierCurveTo(110, 150, 115, 155, 100, 170);
    ctx.fill();  
    ctx.closePath();


