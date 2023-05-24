
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

          <div class="row">
            @if (auth()->user()->services->contains('nom', 'Vente'))
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                   <a href="{{url('VentesDashboard')}}" class="nav-link" style="text-decoration: none; color: inherit;">      
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Dashboard Ventes</h2>
                   </a> 
                  </div>
                </div>
              </div> 
            @endif  
            @if (auth()->user()->services->contains('nom', 'Achat'))
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                   <a href="{{url('AchtsDashboard')}}" class="nav-link" style="text-decoration: none; color: inherit;">      
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-bar mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Dashboard Achats</h2>
                   </a> 
                  </div>
                </div>
              </div>
            @endif
            @if (auth()->user()->services->contains('nom', 'Stock')) 
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                   <a href="{{url('StockDashboard')}}" class="nav-link" style="text-decoration: none; color: inherit;">      
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-areaspline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Dashboard Stock</h2>
                   </a> 
                  </div>
                </div>
              </div>
            @endif
            @if (auth()->user()->services->contains('nom', 'Production')) 
             <a href="{{url('ProductionDashboard')}}" class="nav-link" style="text-decoration: none; color: inherit;">      
               <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-warning card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-pie mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Dashboard Production</h2> 
                  </div>
                </div>
              </div>
             </a> 
            @endif  
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

</body>

</html>

