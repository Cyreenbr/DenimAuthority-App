 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                   @if(url()->current() === "http://127.0.0.1:8000/VentesDashboard" || url()->current() === "http://127.0.0.1:8000/AchatsDashboard")
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2017')">2017</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw " onclick="afficherRapport('2018')">2018</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2019')">2019</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2020')">2020</button> 
                      </li>  
                    </ul>  
                   @endif  
                   @if(url()->current() === "http://127.0.0.1:8000/ProductionDashboard" )
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" name="year" value="2020" class="btn btn-inverse-primary btn-lg btn-fw" onclick="GetYear('2020')">2020</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" name="year" value="2021" class="btn btn-inverse-primary btn-lg btn-fw " onclick="GetYear('2021')">2021</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" name="year" value="2022" class="btn btn-inverse-primary btn-lg btn-fw" onclick="GetYear('2022')">2022</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" name="year" value="2023" class="btn btn-inverse-primary btn-lg btn-fw" onclick="GetYear('2023')">2023</button> 
                      </li>  
                    </ul>  
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" class="btn btn-inverse-warning btn-lg btn-fw" onclick="GetJalon('PIQUAGE')">PIQUAGE</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-warning btn-lg btn-fw " onclick="GetJalon('LAVAGE')">LAVAGE</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-warning btn-lg btn-fw" onclick="GetJalon('EFFETS SPECIAUX')">EFFETS SPECIAUX</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-warning btn-lg btn-fw" onclick="GetJalon('FINITION')">FINITION</button> 
                      </li>  
                    </ul>  
                   @endif 
                   @if(url()->current() === "http://127.0.0.1:8000/StockDashboard" )
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('1F')">Fil</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw " onclick="afficherRapport('1D')">Doublure</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('1T')">Tissu</button>
                      </li>         
                    </ul>
                   @endif 
                    <!--
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Ce mois</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Vue d'ensemble</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                   -->
                
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark" id="print-button"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">               
  </div> 
   

<!--Print Script-->
<script>
   document.getElementById('print-button').addEventListener('click', function(e) {
      e.preventDefault();
      var divToPrint = document.getElementById('my-div').innerHTML;
      var printWindow = window.open('', '', 'height=500,width=500');
      printWindow.document.write('<html><head><title>Print</title></head><body>');
      printWindow.document.write(divToPrint);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
   });
</script>

