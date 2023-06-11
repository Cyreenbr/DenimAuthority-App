var baseReportURL = "http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx";

var year_var = "2023";
var jalon_var = "PIQUAGE";

async function updateDashboardProdURL(year, jalon) {
    var rapportProdURL = baseReportURL + "?%2fRapportsDenimAuthority%2fServiceProduction&rs:Command=Render&rs:embed=true&rc:Toolbar=false";
    rapportProdURL += "&date=" + year;

    rapportProdURL += "&Jalon=" + jalon;

    document.getElementById("DashboardProd").src = rapportProdURL;

    $("#lien-prod-export-pdf").attr("href", rapportProdURL+"&rs:Format=PDF");

    document.getElementById("valeur-selectionnee-prod").textContent = year;

}

async function updateDashboardDeuxiemeChoixURL(year) {
    var rapportDeuxiemeChoixURL = baseReportURL + "?%2fRapportsDenimAuthority%2fServiceProdDeuxiemeChoix&rs:Command=Render&rs:embed=true&rc:Toolbar=false";
    rapportDeuxiemeChoixURL += "&year=" + year;
    document.getElementById("DashboardDeuxiemeChoix").src = rapportDeuxiemeChoixURL;

    $("#lien-2prod-export-pdf").attr("href", rapportDeuxiemeChoixURL+"&rs:Format=PDF");

    document.getElementById("valeur-selectionnee-prod").textContent = year;

}

async function GetYear(year) {
    year_var = year ;
    await updateDashboardProdURL(year_var , jalon_var);
    await updateDashboardDeuxiemeChoixURL(year_var);

}



async function GetJalon(jalon) {
    jalon_var = jalon ;
    await updateDashboardProdURL(year_var, jalon_var);
}

updateDashboardProdURL("2022", "PIQUAGE");
updateDashboardDeuxiemeChoixURL("2022");
