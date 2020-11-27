var canvas = document.getElementById("ctr8");
var ctx = canvas.getContext("2d");


//outer
ctx.beginPath();
ctx.lineWidth=5;
ctx.lineTo(100,40);
ctx.lineTo(70,80);
ctx.lineTo(70,120);
ctx.lineTo(100,160);
ctx.lineTo(130,120);
ctx.lineTo(130,80);
ctx.closePath();
ctx.fillStyle ="#5dc255";
ctx.strokeStyle ="#2c6e26";
ctx.stroke();
ctx.fill();

//inner
ctx.beginPath();
ctx.lineWidth=5;
ctx.lineTo(100,60);
ctx.lineTo(80,80);
ctx.lineTo(80,120);
ctx.lineTo(100,145);
ctx.lineTo(120,120);
ctx.lineTo(120,80);
ctx.closePath();
ctx.fillStyle ="#5dc255";
ctx.strokeStyle ="#2c6e26";
ctx.stroke();
ctx.fillStyle ="#77de6f";
ctx.fill();

//lines
ctx.beginPath();
ctx.lineWidth=3;
ctx.lineTo(100,60);
ctx.lineTo(100,40);
ctx.moveTo(80,80);
ctx.lineTo(70,80);
ctx.moveTo(80,120);
ctx.lineTo(70,120);
ctx.moveTo(100,160);
ctx.lineTo(100,145);
ctx.moveTo(130,120);
ctx.lineTo(120,120);
ctx.moveTo(130,80);
ctx.lineTo(120,80);
ctx.closePath();
ctx.fillStyle ="#5dc255";
ctx.strokeStyle ="#2c6e26";
ctx.stroke();
ctx.fillStyle ="#77de6f";
ctx.fill();
