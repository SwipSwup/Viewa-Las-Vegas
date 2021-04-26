document.getElementById("d-Track").addEventListener("click",download1);
document.getElementById("d-Track1").addEventListener("click",download2);
document.getElementById("d-Track2").addEventListener("click",download3);
document.getElementById("d-Track3").addEventListener("click",download4);

function download1(){
	downloadURI("../musik/Corona Regeln.wav","Corona Regeln.wav");
}

function download2(){
	downloadURI("../musik/Hände desinfizieren.wav","Hände desinfizieren.wav");
}

function download3(){
	downloadURI("../musik/Abstand halten.wav","Abstand halten.wav");
}

function download4(){
	downloadURI("../musik/Daheim bleiben.wav","Daheim bleiben.wav");
}

function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}