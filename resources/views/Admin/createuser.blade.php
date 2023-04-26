<!DOCTYPE html>
<html lang="en">

<head>
  @include("css")

  <!-- jQuery-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

     <!--Form-->
     <div class="d-flex justify-content-center align-items-center">
     <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <h4 class="card-title">Nouveau utilisateur</h4>
                  <p class="card-description">
                    Ajouter un nouveau utilisateur
                  </p>
                          <x-jet-validation-errors class="mb-4" style="color:red;"/>
                   <form class="forms-sample" method="POST" action="{{ url('/userstore') }}">
                       @csrf
                    <div class="form-group">
                      <label for="name">Nom</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Adresse email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Mot de passe</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="confirmpassword">Confirme mot de passe</label>
                      <input type="password" class="form-control" id="confirmpassword" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                       <label>Services</label><br>
                          @foreach($services as $service)
                             <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label"  for="service{{ $service->id }}">
                                   <input type="checkbox" class="service-checkbox form-check-input" id="service{{ $service->id }}" name="services[]" value="{{ $service->id }}"> 
                                      {{ $service->nom }}
                                </label>
                             </div>
                           @endforeach
                    </div>
                    <blockquote class="blockquote" style="color:blue">
                       <div class="form-check">
                         <label class="form-check-label">
                            <input class="checkbox" type="checkbox" name="user_type" id="admin-checkbox" value="1">
                              Admin
                         </label>
                       </div>
                    </blockquote>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           </div>
            <!--FormEnd-->
          </div>  
      </div>  

    </div>  


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

    <!-- CheckBox -->
      <script src="/js/AdminCheckServicesCheck.js"></script>
</body>

</html>

