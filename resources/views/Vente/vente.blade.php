
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

<div class="row" >
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card" >
                            <div class="card card-rounded">
                              <div class="card-body" >
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Nombre de commandes par année</h4>
                                   <!--<p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>-->
                                  </div>
                                
                                </div>
                                <!--  <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div> -->
                              <div class=" mt-3">
                                  <iframe id="rapportNbCdV" src="" width="650" height="400" frameborder="0" scrolling="no" toolbar="false"></iframe>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                                   
</div>





                        <div class="col-lg-4 d-flex flex-column">
                        
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Performance de livraison
                                  
                                      </h4>
                                    </div>
                                    <div class=" mt-3">
                                  <iframe id="rapportLivV" src="" width="300" height="280" frameborder="0" scrolling="no" toolbar="false"></iframe>
                              </div>                                 
                               
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        </div>
                        </div>
                        <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Repartition des réseaux</h4>
                  <div class=" mt-3">
                   <iframe id="rapportRepRes" src="" width="650" height="200" frameborder="0" scrolling="no" toolbar="false"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">top 5 modéles</h4>
                  <div class=" mt-3">
                     <iframe id="rapportTopMod" src="" width="650" height="200" frameborder="0" scrolling="no" toolbar="false"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div style="margin-top:20px;" class=" grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Top 5 clients et l'évolution de ces nombres de commandes</h4>
                  <div class=" mt-3">
                     <iframe id="topC" src="" width="1000" height="200" frameborder="0" scrolling="no" toolbar="false"></iframe>
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

    <!---->
          


</html>

