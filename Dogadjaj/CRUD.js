function promeni(){
    var id = document.getElementById('id').value;
    var naziv = document.getElementById('naziv').value;
    var email = document.getElementById('email').value;
    var br_tel = document.getElementById('br_tel').value;
    var mesto_odr = document.getElementById('mesto_odr').value;
    var dat_odr = document.getElementById('dat_odr').value;
    var naziv_dog = document.getElementById('naziv_dog').value;
    var kategorija = document.getElementById('kategorija').value;
    var opis = document.getElementById('opis').value;
    var xhttp;  

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //alert('Uspesno izmenjeni podaci');
      }
    };

    xhttp.open("POST", "izmena.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("naziv="+naziv+"&email="+email+"&br_tel="+br_tel+"&mesto_odr="+mesto_odr
    +"&dat_odr="+dat_odr+"&naziv_dog="+naziv_dog+"&kategorija="+kategorija+"&opis="+opis+"&id="+id);
    alert('Uspesno izmenjeni podaci');
}