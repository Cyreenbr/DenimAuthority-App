<!DOCTYPE html>
<html lang="en">

<head>
 <base href="/public">
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
        <!--form-->   
          <div class="row">
           <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier un Utilisateur</h4>
                  <p class="card-description">
                    ajout ou suppression des services
                  </p>
                  <form class="forms-sample"  action="{{url('/updateuser',$data->id)}}" method="post"  enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom d'utilisateur</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{$data->name}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adress E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$data->email}}" readonly>
                    </div>
                      <div class="form-group">
                       <label>Services</label><br>
                          @foreach($services as $service)
                             <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label"  for="service{{ $service->id }}">
                                   <input type="checkbox" class="form-check-input" id="service{{ $service->id }}" name="services[]" value="{{ $service->id }}"   @if($data->services->contains($service)) checked @endif> 
                                      {{ $service->nom }}
                                </label>
                             </div>
                           @endforeach
                      </div>
                  
                    <button type="submit" class="btn btn-primary me-2" value="Save">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           </div> 
          </div>  
         <!--EndForm-->

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

