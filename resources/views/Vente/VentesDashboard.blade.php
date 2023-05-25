
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

<div id="my-div">
 <iframe id="Dashboard" src="" height="2000px" width="100%" ></iframe>
</div>
          
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

   };
</script> 

<script src="/js/Vente&AchatControl.js"></script>
@include("script")

</body>

</html>

