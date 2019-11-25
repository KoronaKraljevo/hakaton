function validateForm(){
    var naziv= document.forms["myForm"]["naziv"].value;
    var email= document.forms["myForm"]["email"].value;
    var br_tel= document.forms["myForm"]["br_tel"].value;
    var mesto_odr= document.forms["myForm"]["mesto_odr"].value;
    var vreme_odr= document.forms["myForm"]["vreme_odr"].value;
    var naziv_dog= document.forms["myForm"]["naziv_dog"].value;
    var kategorija= document.forms["myForm"]["kategorija"].value;
    var opis= document.forms["myForm"]["opis"].value;

    var naziv1 = naziv.split(" ");
    var mesto_odr1 = mesto_odr.split(" ");
    var naziv_dog1 = naziv_dog.split(" ");
    var opis1 = opis.split(" ");

    var naziv2="";
    for(var i=0; i<naziv1.length;i++)
        naziv2+=naziv1[i];

    var mesto_odr2="";
    for(var i=0; i<mesto_odr1.length;i++)
        mesto_odr2+=mesto_odr1[i];
    
    var naziv_dog2="";
    for(var i=0; i<naziv_dog1.length;i++)
        naziv_dog2+=naziv_dog1[i];

    var opis2="";
    for(var i=0; i<opis1.length;i++)
        opis2+=opis1[i];

    //|| !(/^\S{3,}$/.test(naziv))

    if(!(/^\S{3,}$/.test(naziv2)))
    {
        alert("Morate popuniti Ime i prezime/Organizacija!");
        return false;
    }

    if(!(/^\S{3,}$/.test(mesto_odr2)))
    {
        alert("Morate popuniti Mesto odrzavanja");
        return false;
    }
    else

    if(!(/^\S{3,}$/.test(naziv_dog2)))
    {
        alert("Morate popuniti Naziv dogadjaja");
        return false;
    }

    if(kategorija=="Izaberi" )
    {
        alert("Morate izabrati Kategoriju");
        return false;
    }

    if((!(/^\S{3,}$/.test(opis2))))
    {
        alert("Morate popuniti Opis");
        return false;
    }
       
    if(!(/^\S{3,}$/.test(email)))
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

    if(!(/^\S{3,}$/.test(br_tel)))
    {
        alert("Morate popuniti Broj telefona");
        return false;
    }
    else
    if(!/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(br_tel) )
    {
        alert("Morate uneti validan Broj telefona!");
        return false;
    }

    if(vreme_odr=="")
    {
        alert("Morate popuniti Datum odrzavanja");
        return false;
    }
    
}