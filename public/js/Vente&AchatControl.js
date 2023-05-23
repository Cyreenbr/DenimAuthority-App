var urlCourante = window.location.href;

var rapportUrls = {
    "http://127.0.0.1:8000/AchatsDashboard": {
        yearParam: "dateCommande",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fServiceAchat&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
    },
    "http://127.0.0.1:8000/VentesDashboard": {
        yearParam: "DateCommande",
        reportUrl: "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fServiceVente&rs:Command=Render&rs:embed=true&rc:Toolbar=false"
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

    document.getElementById("Dashboard").src = rapportURL;
}

afficherRapport('2019');

      
