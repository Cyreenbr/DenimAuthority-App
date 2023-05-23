
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


 <iframe src="" id="DashboardStock" height="2000px" width="100%" ></iframe>
           
            
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
         @include("footer")
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<!--Onload-->
<script>
   window.onload = function() {
       var SidebarButton = document.getElementById('navbar_button');
       SidebarButton.click();
       var Parameterbutton = document.getElementById('');
       Parameterbutton.click();
   };
</script> 

<!--Parameter Script-->
<script src="/js/StockControl.js"></script>
@include("script")

</body>

</html>

