$(document).ready(function() {
    var rapport = $('*[name="report"]');
    var wrapper = rapport.parent();

});

    function afficherRapport(nature) {
        var rapportURL = "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fServiceStock&rs:Command=Render&rs:embed=true&rc:Toolbar=false";


        rapportURL += "&nature=" + nature ;

        document.getElementById("DashboardStock").src = rapportURL;
        document.getElementById("selected-year").innerHTML = nature;

    }

    afficherRapport('1T');