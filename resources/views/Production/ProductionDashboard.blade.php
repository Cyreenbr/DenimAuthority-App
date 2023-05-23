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

<div id="my-div">

 <iframe src="" id="DashboardProd" height="500px" width="100%" ></iframe>
 <iframe src="" id="DashboardDeuxiemeChoix" height="2000px" width="100%" ></iframe>

</div>                                          

<!--footer-->
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

<!--Parameter Script-->
<script src="/js/ProdControl.js"></script>
@include("script")

</body>

</html>

