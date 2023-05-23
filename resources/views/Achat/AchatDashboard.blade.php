
<!DOCTYPE html>
<html lang="en">
<head>

  @include("css")

</head>
<body>
  
    <!-- navbar -->
         @include("navbar")


    <div class="container-fluid page-body-wrapper">
      <!--settings-panel-->
         @include("settingspanel") 

      <!--sidebar-->
         @include("sidebar")


<!--main-panel -->
      @include("mainpanel")


<div id="my-div">
 <iframe id="Dashboard" src="" height="2000px" width="100%" ></iframe>
</div>


<!-- footer -->
         @include("footer")
      </div>
    </div>
  </div>

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
<script src="/js/Vente&AchatControl.js"></script>
 @include("script")

</body>
</html>

