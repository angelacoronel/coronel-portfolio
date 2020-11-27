
    var canvas = document.getElementById("ctr2");
    var ctx = canvas.getContext("2d");
    

    //star
    ctx.beginPath();
    ctx.lineTo(80,80);
    ctx.lineTo(100,30);
    ctx.lineTo(125,80);
    ctx.lineTo(165,80);
    ctx.lineTo(135,120);  
    ctx.lineTo(150,170);
    ctx.lineTo(103,140);
    ctx.lineTo(60,170);
    ctx.lineTo(70,120);
    ctx.lineTo(40,80);
    ctx.closePath();
    ctx.fillStyle = "#eded53";
    ctx.fill();

    //eye L
    ctx.beginPath();
    ctx.lineTo(90,90);
    ctx.lineTo(90,105);
    ctx.closePath();
    ctx.lineWidth = 5;
    ctx.stroke();

     //eye R
     ctx.beginPath();
    ctx.lineTo(115,90);
    ctx.lineTo(115,105);
    ctx.closePath();
    ctx.lineWidth = 5;
    ctx.stroke();

