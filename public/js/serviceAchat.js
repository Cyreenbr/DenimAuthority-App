$(document).ready(function() {
    var rapport = $('#rapport');
    var wrapper = rapport.parent();
    
    // Mettre la taille de l'iframe à celle de la div parente
    rapport.width(wrapper.width());
    rapport.height(wrapper.height());
    
    // Redimensionner l'iframe lorsque la taille de la fenêtre est modifiée
    $(window).resize(function() {
        rapport.width(wrapper.width());
        rapport.height(wrapper.height());
    });
});

    function afficherRapport(year) {
        var rapportURL = "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fDenimAuthorityReports%2fTop10FournissEtTop10Produit&rs:Command=Render&rs:embed=true&rc:Toolbar=false";


        rapportURL += "&year=" + year ;

        document.getElementById("rapport").src = rapportURL;
  document.getElementById("selected-year").innerHTML = year;

    }

    afficherRapport('2019');