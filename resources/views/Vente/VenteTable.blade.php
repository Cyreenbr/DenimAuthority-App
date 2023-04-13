
<!DOCTYPE html>
<html lang="en">

<head>
  @include("css")
   <style>
      #ReportViewerControl_ctl05
  {
    display: none;
  }
   </style>
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

             <!--TableNom-->
                    <div >
                        <div class="row flex-grow" >
                          <div class=" grid-margin stretch-card" style="height:1000px;">
                            <div class="card card-rounded" >
                              <div class="card-body" >
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">table Nomenclature</h4>
                                   <p class="card-subtitle card-subtitle-dash">Détails</p>
                                  </div>
                                </div>
                                   <iframe  name="report" src="http://desktop-5r4su46:85/ReportServer2023/Pages/ReportViewer.aspx?%2fDenimAuthorityReports%2fNbrCompParNom&rs:Command=Render&rs:embed=true"  width="100%" height="100%" frameborder="0"  ></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>  
                      
             <!--TableNomEnd-->

        <!-- content-wrapper ends -->
        <!-- partial:partials -->
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
    <!---->
</body>

</html>

