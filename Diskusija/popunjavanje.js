function submitComment(){

    var ime= document.forms["myForm"]["ime"].value;
    var prezime= document.forms["myForm"]["prezime"].value;
    var email= document.forms["myForm"]["email"].value;
    var komentar= document.forms["myForm"]["komentar"].value;

    if(!email)
    {
        alert("Morate popuniti E-mail");
        return false;
    }
    else
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    {
        alert("Morate uneti validnu email adresu!");
        return false;
    }

    if(!ime)
    {
        alert("Morate popuniti Ime");
        return false;
    }
    else
    if(!(/^[a-zA-Z]+$/.test(ime)))
    {
        alert("Morate uneti validno ime!");
        return false;
    }

    if(!prezime)
    {
        alert("Morate popuniti Prezime");
        return false;
    }
    else
    if(!(/^[a-zA-Z]+$/.test(prezime)))
    {
        alert("Morate uneti validno prezime!");
        return false;
    }

    if(!komentar)
    {
        alert("Morate popuniti komentar");
        return false;
    }

    var xhttp;  

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // document.getElementById("txtHint").innerHTML = this.responseText;
        //document.getElementById("komentari").innerHTML = this.responseText;
        showComments();
      }
    };

    xhttp.open("POST", "addComment.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ime="+ime+"&prezime="+prezime+"&email="+email+"&komentar="+komentar);
}



function showComments(){
    var xhttp;  

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("komentari").innerHTML = this.responseText;
      }
    };

    xhttp.open("GET", "showComments.php", true);
    xhttp.send();
}