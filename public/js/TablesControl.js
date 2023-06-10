var urlCourante = window.location.href;

var rapportUrls = {
    "http://127.0.0.1:8000/table_d%C3%A9tails_achat": {
        yearParam: "year",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fTableAchat+(1)&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
    },
    "http://127.0.0.1:8000/table_d%C3%A9tails_vente": {
        yearParam: "year",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fTableVente+(1)&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
    },
    "http://127.0.0.1:8000/table_d%C3%A9tails_production": {
        yearParam: "Date",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fTableauProd&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
    },
    "http://127.0.0.1:8000/table_d%C3%A9tails_deuxi%C3%A9me_choix": {
        yearParam: "year",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fTableProdDeuxiemeChoix&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
    }  
};

function afficherRapport(year) {
    var rapportURL = "";

    if (rapportUrls.hasOwnProperty(urlCourante)) {
        var config = rapportUrls[urlCourante];
        rapportURL = config.reportUrl + "&" + config.yearParam + "=" + year;
    } else {
        console.error("URL de tableau de bord invalide : " + urlCourante);
        return;
    }

    document.getElementById("Table").src = rapportURL;
}

afficherRapport('2022');