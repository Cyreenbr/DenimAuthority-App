
<!DOCTYPE html>
<html lang="en">

<head>
  @include("css")
  @include("cssChart")


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


                        <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Repartition d'articles par nature</h4>
                  <div class=" mt-3">
                  <iframe id="repArStock" src="" width="560" height="300" frameborder="0" scrolling="no" toolbar="false"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">top 5 articles stockés (par quantité)par nature</h4>

                <div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="selected-nature" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
    <button class="dropdown-item" name="NATURE" value="1D" onclick="afficherRapportTopTArStock('1D')">Doublure</button>
    <button class="dropdown-item" name="NATURE" value="1T" onclick="afficherRapportTopTArStock('1T')">Tissu</button>
    <button class="dropdown-item" name="NATURE" value="1F" onclick="afficherRapportTopTArStock('1F')">Fil</button>
    <div class="dropdown-divider"></div>
  </div>
</div>

</div>
</div>
                  <div class="mt-3">
                  <iframe id="topArstock" src="" width="420" height="250" frameborder="0" scrolling="no" toolbar="false"></iframe>

                </div>
                </div>
              </div>
            </div>
          </div>


          <div style="margin-top:20px;" class=" grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                

                  <div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="select-nature" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
    <button class="dropdown-item" name="NATURE" value="1D" onclick="afficherRapportArLentMv('1D')">Doublure</button>
    <button class="dropdown-item" name="NATURE" value="1T" onclick="afficherRapportArLentMv('1T')">Tissu</button>
    <button class="dropdown-item" name="NATURE" value="1F" onclick="afficherRapportArLentMv('1F')">Fil</button>
    <div class="dropdown-divider"></div>
  </div>
</div>

</div>
</div>
                  <div class=" mt-3">
                     <iframe id="ArLenMv" src="" width="1000" height="300" frameborder="0" scrolling="no" toolbar="false"></iframe>
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
      
      
      <script src="/js/nbreCDAnn.js"></script>
      <script src="/js/topCNbreCD.js"></script>
      <script src="/js/topModele.js"></script>
      <script src="/js/repReseau.js"></script>
      <script src="/js/livVente.js"></script>
      <script src="/js/topArstock.js"></script>
      <script src="/js/repArStock.js"></script>
      <script src="/js/ArLenMv.js"></script>




    <!---->
          


</html>

