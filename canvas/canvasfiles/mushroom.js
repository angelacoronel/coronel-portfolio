var canvas = document.getElementById("ctr1");
var ctx = canvas.getContext("2d");
    

    //head
    ctx.beginPath();
    ctx.lineTo(115,95);
    ctx.arc(100,130,15,0*Math.PI,1*Math.PI);
    ctx.lineTo(85,95);
    ctx.closePath();
    ctx.fillStyle = "#fce2ae";
    ctx.fill();

    //stem
    ctx.beginPath();
    ctx.lineTo(115,95);
    ctx.arc(100,95,50,1*Math.PI,0*Math.PI);
    ctx.lineTo(80,95);
    ctx.closePath();
    ctx.fillStyle = "#F93318";
    ctx.fill();

    //circle 1
    ctx.beginPath();
    ctx.arc(70, 78, 8, 0, 2 * Math.PI);
    ctx.fillStyle="#fff";
    ctx.fill();
    ctx.closePath();

    //circle 2
    ctx.beginPath();
    ctx.arc(90, 58, 8, 0, 2 * Math.PI);
    ctx.fillStyle="#fff";
    ctx.fill();
    ctx.closePath();

    //circle 3
    ctx.beginPath();
    ctx.arc(105, 82, 8, 0, 2 * Math.PI);
    ctx.fillStyle="#fff";
    ctx.fill();
    ctx.closePath();
    ctx.beginPath();

    //circle 4
    ctx.arc(130, 70, 8, 0, 2 * Math.PI);
    ctx.fillStyle="#fff";
    ctx.fill();
    ctx.closePath();