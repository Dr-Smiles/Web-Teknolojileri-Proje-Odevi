function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);

  var saat = "ÖÖ";

  if (h>12){h = h-12; saat = "ÖS";}

  document.getElementById('txt').innerHTML =saat + " " + h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

var aktifResim=0;
var gelen = -1;

function resimGoster(gelen) {
var resimler = document.getElementsByClassName('resim');
if (gelen > -1){aktifResim=gelen;}

for (var i = 0; i < resimler.length; i++) {
  resimler[i].style.display="none";
  if (i == aktifResim) {resimler[i].style.display="block";}
}

aktifResim++;
gelen = -1;
if (aktifResim > resimler.length-1){aktifResim=0;}

setTimeout(resimGoster, 8000);
}
