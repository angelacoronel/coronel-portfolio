var canvas = document.getElementById("ctr6");
var ctx = canvas.getContext("2d");
    

    //bullet
    ctx.beginPath();
    ctx.strokeStyle="#eb4634";
    ctx.arc(80, 100, 40, 0, 3 * Math.PI);
    ctx.fillStyle="#292929";
    ctx.fill();  
    ctx.closePath();
     ctx.beginPath();
     ctx.strokeStyle="#292929";
     ctx.lineWidth=80;
     ctx.lineTo(80,100);
     ctx.lineTo(150,100);
     ctx.fillStyle="#292929";
     ctx.fill();  
     ctx.stroke();
     ctx.closePath();

     //line
     ctx.beginPath();
     ctx.strokeStyle="red";
     ctx.lineWidth=80;
     ctx.lineTo(130,100);
     ctx.lineTo(140,100);
     ctx.stroke();
     ctx.closePath();

     //eye
     ctx.beginPath();
     ctx.fillStyle="white";
     ctx.lineWidth=3;
     ctx.lineTo(70,80);
     ctx.lineTo(50,90);
     ctx.bezierCurveTo(55, 100, 70, 100, 70, 80);  
     ctx.fill();
     ctx.closePath();

     //inner eye
     ctx.beginPath();
     ctx.fillStyle="black";
     ctx.lineWidth=3;
     ctx.lineTo(65,82);
     ctx.lineTo(55,87);
     ctx.bezierCurveTo(60, 94, 65, 93, 65, 83); 
     ctx.fill();
     ctx.closePath();

     //eye
     ctx.beginPath();
     ctx.fillStyle="white";
     ctx.lineWidth=3;
     ctx.lineTo(100,90);
     ctx.lineTo(120,100);
     ctx.bezierCurveTo(130, 110, 80, 115, 100, 90);  
     ctx.fill();
     ctx.closePath();
