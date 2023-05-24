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
                          </th> -->
                          <th>
                            date de création
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($data as $data)
                        <tr>
                          <td class="py-1">
                            <img src="{{ $data->profile_photo_url }}" alt="image"/>
                          </td>
                          <td>
                            {{$data->name}}
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                           <td>
                            @foreach ($data->services as $service)
                              {{ $service->nom }} &nbsp;
                            @endforeach
                          </td>
                         <!-- <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td> -->
                          <td>
                            {{$data->created_at}}
                          </td>
                          <td>
                           @if ($data->user_type == 0)
                             <a href="{{url('/deleteuser',$data->id)}}">
                               <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Supprimer</button>
                             </a> 
                              <a href="{{url('/updateuserView',$data->id)}}">
                                 <button type="button" class="btn btn-outline-info btn-fw btn-sm">Modifier</button>
                              </a>  
                           @else
                             Non autorisé
                           @endif
                          </td>
                        </tr>
                       @endforeach
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

@include("script")
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(session('success'))
        swal("Success", "{{ session('success') }}", "success");
    @endif
</script>

</body>

</html>

