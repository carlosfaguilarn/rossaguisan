//======================================================================
// VARIABLES
//====================================================================== 
var canvas = document.getElementById("canvas");
var guardar = document.getElementById("guardar");
var limpiar = document.getElementById("borrar");
var ctx = canvas.getContext("2d");
var cw = canvas.width = 900,
  cx = cw / 2;
var ch = canvas.height = 500,
  cy = ch / 2;

var dibujar = false;
var factorDeAlisamiento = 3;
var Trazados = [];
var puntos = [];
ctx.lineJoin = "round";

ctx.strokeStyle = '#000099';

limpiar.addEventListener('click', function(evt) {
  dibujar = false;
  ctx.clearRect(0, 0, cw, ch);
  Trazados.length = 0;
  puntos.length = 0;
}, false);


canvas.addEventListener('touchstart', function(evt) {
  dibujar = true;
  //ctx.clearRect(0, 0, cw, ch);
  puntos.length = 0;
  ctx.beginPath();
}, false);

canvas.addEventListener('touchend', function(evt) {
  redibujarTrazados();
}, false); 

canvas.addEventListener("touchmove", function(evt) {
  if (dibujar) {
    var m = oMousePos(canvas, evt);
    puntos.push(m);
    ctx.lineTo(m.x, m.y);
    ctx.stroke();
  }
  
}, false); 

function reducirArray(n,elArray) {
  var nuevoArray = [];
  nuevoArray[0] = elArray[0];
  for (var i = 0; i < elArray.length; i++) {
    if (i % n == 0) {
      nuevoArray[nuevoArray.length] = elArray[i];
    }
  }
  nuevoArray[nuevoArray.length - 1] = elArray[elArray.length - 1];
  Trazados.push(nuevoArray);
}

function calcularPuntoDeControl(ry, a, b) {
  var pc = {}
  pc.x = (ry[a].x + ry[b].x) / 2;
  pc.y = (ry[a].y + ry[b].y) / 2;
  return pc;
}

function alisarTrazado(ry) {
  if (ry.length > 1) {
    var ultimoPunto = ry.length - 1;
    ctx.beginPath();
    ctx.moveTo(ry[0].x, ry[0].y);
    for (i = 1; i < ry.length - 2; i++) {
      var pc = calcularPuntoDeControl(ry, i, i + 1);
      ctx.quadraticCurveTo(ry[i].x, ry[i].y, pc.x, pc.y);
    }
    ctx.quadraticCurveTo(ry[ultimoPunto - 1].x, ry[ultimoPunto - 1].y, ry[ultimoPunto].x, ry[ultimoPunto].y);
    ctx.stroke();
  }
}


function redibujarTrazados(){
  dibujar = false;
  ctx.clearRect(0, 0, cw, ch);
  reducirArray(factorDeAlisamiento,puntos);
  for(var i = 0; i < Trazados.length; i++)
  alisarTrazado(Trazados[i]);
}

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.changedTouches[0].clientX - ClientRect.left),
    y: Math.round(evt.changedTouches[0].clientY - ClientRect.top)
  }
}


// Método para guardar el canvas en formato PNG
guardar.addEventListener('click', function(evt) {
    var elem = document.getElementById('guardar');
    var nombre = "FIRMA";
    if(nombre != null){
        elem.download = nombre + ".png"; 
        var imagen = canvas.toDataURL("image/png");
        var token = document.getElementById('token'); 
        $.ajax({
            url: './upload.php',
            type: 'POST',
            data: {
                imagen: imagen,
                token: token.value
            }, 
            success: function(response) {
                if (response != 0) { 
                    location.reload();
                } else {
                    alert('Formato incorrecto.'); 
                }
            }
        });

        //this.href = imagen;
    }else{
        alert("Ingresa un nombre válido");
    } 
}, false);