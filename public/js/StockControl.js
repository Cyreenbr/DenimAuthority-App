
    function afficherRapport(nature) {
        var rapportURL = "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fServiceStock&rs:Command=Render&rs:embed=true&rc:Toolbar=false";


        rapportURL += "&nature=" + nature ;

        document.getElementById("DashboardStock").src = rapportURL;

        $("#lien-stock-export-pdf").attr("href", rapportURL+"&rs:Format=PDF");
    }

    afficherRapport('1T');