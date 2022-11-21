
//dynamicke menu pri responzivnom dizajne
let menuB = document.getElementById("menuB");

function zobrazMenu()
{
    menuB.style.right = "0";
}

function skryMenu()
{
    menuB.style.right = "-200px";
}


//aktualizacia roku v pate dokumentu
let year = new Date().getFullYear();
let date = `&copy; Erik Vodilka ${year}, All Rights Reserved.`;
document.getElementsByTagName('footer')[0].innerHTML = date;



//aktualizacia pre vsetky hlavicky v dokumente
let hlavicka = `
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title> Hraj << DotA2 </title>
    
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/evo-calendar.midnight-blue.css" type="text/css">
    <link rel="stylesheet" href="../css/evo-calendar.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">`;

document.getElementsByTagName('header')[0].innerHTML = hlavicka;

//tabulka, vkladanie, sortovanie

let sortDirection = false;
let personData = [
    { Meno: "Johnatan Anghberg", Nickname: "Lod[A]", Tim: "Alliance", Wins: 658, Losses: 231, ELO: 10458 },
    { Meno: "Cheng Jin Xiang", Nickname: "NothingToSay", Tim: "PSG-LGD", Wins: 452, Losses: 358, ELO: 9254 },
    { Meno: "Zhang Ruida", Nickname: "Faith Bian", Tim: "PSG-LGD", Wins: 324, Losses: 198, ELO: 9125 },
    { Meno: "Zhao Zixing", Nickname: "XinQ", Tim: "PSG-LGD", Wins: 857, Losses: 425, ELO: 8924 },
    { Meno: "Yaroslav Naidenov", Nickname: "Miposhka", Tim: "Spirit", Wins: 668, Losses: 231, ELO: 8910 },
    { Meno: "Alexander Khertek", Nickname: "TORONTOTOKYO", Tim: "Spirit", Wins: 658, Losses: 231, ELO: 7852 },
    { Meno: "Ilya Mulyarchuk", Nickname: "Yatoro", Tim: "Spirit", Wins: 542, Losses: 12, ELO: 7813 },
    { Meno: "Magomed Khalilov", Nickname: "collapse", Tim: "Spirit", Wins: 896, Losses: 658, ELO: 7812 },
    { Meno: "Miroslaw Kolpakov", Nickname: "Mira", Tim: "Spirit", Wins: 458, Losses: 300, ELO: 9785 },
    { Meno: "Clement Ivanov", Nickname: "Puppey", Tim: "Secret", Wins: 254, Losses: 91, ELO: 10462 },
    { Meno: "Jonathan Sundstein", Nickname: "N0tail", Tim: "OG", Wins: 612, Losses: 421, ELO: 10254 },
  ];

    window.onload = () => {
        loadTableData(personData);
    }

function loadTableData(personData){
    const tableBody = document.getElementById("tableData");
    let dataHtml = "";

    for(let person of personData) {
        dataHtml += `<tr><td>${person.Meno}</td><td>${person.Nickname}</td><td>${person.Tim}</td><td>${person.Wins}</td><td>${person.Losses}</td><td>${person.ELO}</td></tr>`;
    }
    tableBody.innerHTML = dataHtml;
}

function sortColumn(columnName) {
        const dataType = typeof personData[0][columnName];
        sortDirection = !sortDirection;

        switch (dataType) {
            case 'number':
                sortNumberColumn(sortDirection, columnName);
                break;
        }

        loadTableData(personData);
}

function sortNumberColumn(sort, columnName){
        personData = personData.sort((p1, p2) =>{
            return sort ? p1[columnName] - p2[columnName] :
                          p2[columnName] - p1[columnName]
        });
}