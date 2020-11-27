var canvas = document.getElementById("ctr4");
var ctx = canvas.getContext("2d");
    

    //hole
    ctx.beginPath();
    ctx.lineWidth = 20;
    ctx.strokeStyle="#a19f9c";
    ctx.arc(100, 60, 25, 0, 2 * Math.PI);
    ctx.stroke(); 
    ctx.closePath();

    //line
    ctx.beginPath();
    ctx.lineTo(100,90);
    ctx.lineTo(100,160);
    ctx.stroke(); 
    ctx.closePath();

     //line2
     ctx.beginPath();
     ctx.lineWidth = 15;
     ctx.lineTo(100,120);
     ctx.lineTo(130,120);
     ctx.stroke(); 
     ctx.closePath();

     //line3
     ctx.beginPath();
     ctx.lineWidth = 15;
     ctx.lineTo(100,152);
     ctx.lineTo(130,152);
     ctx.stroke(); 
     ctx.closePath();
 
