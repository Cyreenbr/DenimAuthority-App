
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

     <!--Form-->
       <form method="POST" action="{{ url('/userstore') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <div class="form-group">
    <label>Services</label><br>
    @foreach($services as $service)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="service{{ $service->id }}" name="services[]" value="{{ $service->id }}">
            <label  for="service{{ $service->id }}">{{ $service->nom }}</label>
        </div>
    @endforeach
    </div>


    <button type="submit">Create User</button>
</form>

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
    <!-- ReportScript-->
      <script src="/js/serviceAchat.js"></script>
    <!---->
</body>

</html>

