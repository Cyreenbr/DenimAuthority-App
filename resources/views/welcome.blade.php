
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

    @include("script")

</body>

</html>

