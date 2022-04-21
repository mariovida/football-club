// Provjera forme prije slanja
document.getElementById("slanje").onclick = function(event) {
  var slanjeForme = true;

  // Naslov vijesti (5-30 znakova)
  var poljeTitle = document.getElementById("naslov");
  var title = document.getElementById("naslov").value;
  if (title.length < 5 || title.length > 55) {
    slanjeForme = false;
    poljeTitle.style.border="2px solid red";
    document.getElementById("porukaTitle").style.color = "red";
    document.getElementById("porukaTitle").style.padding = "0 5px";
    document.getElementById("porukaTitle").innerHTML="Naslov vijesti mora imati između 5 i 55 znakova!<br>";
  }

  // Kratki sadržaj (10-100 znakova)
  var poljeAbout = document.getElementById("sazetak");
  var about = document.getElementById("sazetak").value;
  if (about.length < 10 || about.length > 100) {
    slanjeForme = false;
    poljeAbout.style.border="2px solid red";
    document.getElementById("porukaAbout").style.color = "red";
    document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
  }

  // Sadržaj mora biti unesen
  var poljeContent = document.getElementById("tekst");
  var content = document.getElementById("tekst").value;
  if (content.length == 0) {
    slanjeForme = false;
    poljeContent.style.border="2px solid red";
    document.getElementById("porukaContent").style.color = "red";
    document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
  }

  // Slika mora biti unesena
  var poljeSlika = document.getElementById("slika");
  var pphoto = document.getElementById("slika").value;
  if (pphoto.length == 0) {
    slanjeForme = false;
    poljeSlika.style.border="2px dashed red";
    poljeSlika.style.padding="13px 0 0 10px";
    document.getElementById("porukaSlika").style.color = "red";
    document.getElementById("porukaSlika").style.padding = "0 5px";
    document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};
