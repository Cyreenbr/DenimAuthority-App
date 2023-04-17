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

    function afficherRapportArLentMv(NATURE) {
        var rapportURL = "http://desktop-46kokp9/ReportServer1/Pages/ReportViewer.aspx?%2fREporting%2fArLents&rs:Command=Render&rs:embed=true&rc:Toolbar=false";


        rapportURL += "&NATURE=" + NATURE ;

        document.getElementById("ArLenMv").src = rapportURL;
  document.getElementById("select-nature").innerHTML = year;

    }

    afficherRapportArLentMv('1D');