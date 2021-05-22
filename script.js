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
    if (i == aktifResim) {resimler[i].style.display="inline-flex";}
  }

  aktifResim++;
  gelen = -1;
  if (aktifResim > resimler.length-1){aktifResim=0;}

  setTimeout(resimGoster, 8000);
}

var aktifbilgi=0;

function sehirBilgileri(aktifbilgi) {
var bilgiler = document.getElementsByClassName('bilgi');

  for (var i = 0; i < bilgiler.length; i++) {
     bilgiler[i].style.display="none";
    if (i == aktifbilgi) {bilgiler[i].style.display="inline-flex";}
  }
}


/*
var stop = 0;
var sayac = 0;
var timer;

function autosehirgoster(stop)
{
  while(stop==0)
  {
    var bilgi = document.getElementsByClassName('bilgi');
    sayac++;
    if (sayac > bilgi.length-1){sayac=0;}
    sehirBilgileri(sayac);
    timer = setTimeout(autosehirgoster,5000);
  }

  if (stop<0)
  {
    clearTimeout(timer);
    setTimeout(autosehirgoster,15000);
    stop = 1;
    return;
  }
}*/




//18040E52C851C58661CA4969107B94FF
// http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXXXXXXXX&steamids=76561197960435530
