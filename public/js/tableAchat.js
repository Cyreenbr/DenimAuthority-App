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

function afficherRapport() {
    var rapportURL = "http://desktop-46kokp9/ReportServer1/Pages/ReportViewer.aspx?%2fReporting%2fta_detail_four&rs:Command=Render&rs:embed=true&rc:Toolbar=false";

    document.getElementById("rapportTableAchat").src = rapportURL;
}

afficherRapport();
