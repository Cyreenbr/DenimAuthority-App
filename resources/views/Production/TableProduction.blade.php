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
      <iframe  name="report" id="Table" src="" width="1150" height="1500" frameborder="0"  toolbar="false"></iframe>                  </div>

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
<script src="/js/TablesControl.js"></script>
    
    <!---->
</body>
</html>
