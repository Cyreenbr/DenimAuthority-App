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

function afficherRapport(year, month) {
    var rapportURL = "http://desktop-46kokp9/ReportServer1/Pages/ReportViewer.aspx?%2fREporting%2fqte2temp&rs:Command=Render&rs:embed=true&rc:Toolbar=false";

    rapportURL += "&AnneeSelectionnee=" + year;
    rapportURL += "&MoisSelectionne=" + month;

    document.getElementById("rapport").src = rapportURL;
    document.getElementById("selected-year").innerHTML = year;
    document.getElementById("selected-month").innerHTML = month;
}
    afficherRapport('2019','12');