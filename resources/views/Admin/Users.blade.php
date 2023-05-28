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
      <div class="main-panel">
        <div class="content-wrapper">

           <!--Table--> 
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des utilisateurs</h4>
                  <p class="card-description">
                    Nombre des utilisateurs :  {{ count($data) }} 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Utilisateur
                          </th>
                          <th>
                            Nom d'utilisateur
                          </th>
                          <th>
                            E-mail
                          </th>
                          <th>
                            Services
                          </th>
                        <!--  <th>
                            Performance
                          </th> 
                          <th>
                            date de création
                          </th> -->
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @include('Admin.users_partial', ['users' => $data])
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              <!--TableEnd-->

              <!--AddUser-->
         <div class="d-grid gap-2 col-3  mx-auto">  
          <a class="nav-link" href="{{ url('/createuser') }}">
            <button type="button" class="btn btn-primary btn-info btn-block">
                      <i class="ti-user"></i>               
                      Ajouter un utilisateur
            </button> 
          </a>    
         </div> 
              <!--AddUserEnd-->

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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  function searchByService(serviceId) {
  $.ajax({
    url: '/searchByService/' + serviceId,
    type: 'GET',
    success: function(response) {
      $('.table.table-striped tbody').html(response);
      var selectedService = getServiceName(serviceId);
      $('#messageDropdown').text(selectedService);
    },
    error: function(xhr) {
    }
  });
  }

  function getServiceName(serviceId) {
  var serviceNames = {
    '1': 'Service Achat',
    '2': 'Service Vente',
    '3': 'Service Stock',
    '4': 'Service Production'
  };

  return serviceNames[serviceId] || 'Tous les services';
  }
</script>

@include("script")
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>

</body>

</html>

