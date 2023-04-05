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
        <!--form-->   
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample"  action="{{url('/updateuser',$data->id)}}" method="post"  enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nom d'utilisateur</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{$data->name}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adress E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$data->email}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="password" placeholder="Password" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary me-2" value="Save">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
</body>

</html>

