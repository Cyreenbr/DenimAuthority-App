<!DOCTYPE html>
<html lang="en">
<head>
  @include("css")
</head>
<body>
    <!-- partial:partials/_navbar -->
         @include("navbar")
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html-->
         @include("settingspanel") 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
         @include("sidebar")
      <!-- partial -->

      <!--main-panel -->
      @include("mainpanel")
      <!--main-panelEnd -->
      <iframe  name="report" src="http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fRapportsDenimAuthority%2fTableauProd&rs:Command=Render&rs:embed=true&rc:Toolbar=true&rc:PrintButton=false&rc:ExportExcel=false&rc:ExportCsv=false" width="1150" height="1500" frameborder="0"  toolbar="false"></iframe>                  </div>

      <div class="row" height="200">
        <div class="col-lg-11 d-flex flex-column">
          <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body" >
                  <div class="d-sm-flex justify-content-between align-items-start"></div>

                  <div class="mt-3">
                </div>
              </div>
            </div>
          </div>
          <!-- partial:partials/_footer.html -->
          @include("footer")
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

@include("script")
<!-- ReportScript-->
<script src="/js/serviceAchat.js"></script>

<!--Onload-->
<script>
   window.onload = function() {
       var SidebarButton = document.getElementById('navbar_button');
       SidebarButton.click();

   };
</script> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    
    <!---->
</body>
</html>
