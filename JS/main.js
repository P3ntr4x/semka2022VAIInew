
//dynamicke menu pri responzivnom dizajne
var menuB = document.getElementById("menuB");

function zobrazMenu()
{
    menuB.style.right = "0";
}

function skryMenu()
{
    menuB.style.right = "-200px";
}


//aktualizacia roku v pate dokumentu
var year = new Date().getFullYear();
var date = `&copy; Erik Vodilka ${year}, All Rights Reserved.`;
document.getElementsByTagName('footer')[0].innerHTML = date;



//aktualizacia pre vsetky hlavicky v dokumente
var hlavicka = `
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/ikona.ico"/>
    <title> Hraj << DotA2 </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">`;

document.getElementsByTagName('header')[0].innerHTML = hlavicka;


