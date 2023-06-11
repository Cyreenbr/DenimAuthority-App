 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                   @if(url()->current() === "http://127.0.0.1:8000/VentesDashboard" || url()->current() === "http://127.0.0.1:8000/AchatsDashboard")
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2020')">2020</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw " onclick="afficherRapport('2021')">2021</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2022')">2022</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2023')">2023</button> 
                      </li>  
                    </ul>  
                   @endif  
                   @if(url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_achat" || url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_vente" ||  url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_production"  ||  url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_deuxi%C3%A9me_choix" )
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">                  
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2020')">2020</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw " onclick="afficherRapport('2021')">2021</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2022')">2022</button>
                      </li>
                      <li class="nav-item">    
                          <button type="button" class="btn btn-inverse-primary btn-lg btn-fw" onclick="afficherRapport('2023')">2023</button> 
                      </li>  
                    </ul>  
                   @endif 
                   @if(url()->current() === "http://127.0.0.1:8000/ProductionDashboard" )
                    <ul class="nav nav-tabs" role="tablist">
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
                
          @unless(request()->url() == 'http://127.0.0.1:8000/welcome' || request()->url() == 'http://127.0.0.1:8000' || request()->url() == 'http://127.0.0.1:8000/table_d%C3%A9tails_achat' || request()->url() == 'http://127.0.0.1:8000/table_d%C3%A9tails_vente' || request()->url() == 'http://127.0.0.1:8000/table_d%C3%A9tails_production' || request()->url() == 'http://127.0.0.1:8000/table_d%C3%A9tails_deuxi%C3%A9me_choix')
            <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark" id="print-button"><i class="icon-printer"></i> Print</a>
                      @if(url()->current() === "http://127.0.0.1:8000/StockDashboard" ) 
                       <a href="" class="btn btn-primary text-white me-0" id="lien-stock-export-pdf"><i class="icon-download"></i> Export</a>
                      @endif
                      @if(url()->current() === "http://127.0.0.1:8000/AchatsDashboard" ) 
                       <a href="" class="btn btn-primary text-white me-0" id="lien-export-pdf"><i class="icon-download"></i> Export</a>
                      @endif 
                      @if(url()->current() === "http://127.0.0.1:8000/VentesDashboard" ) 
                       <a href="" class="btn btn-primary text-white me-0" id="lien-export-pdf"><i class="icon-download"></i> Export</a>
                      @endif 
                      @if(url()->current() === "http://127.0.0.1:8000/ProductionDashboard" ) 
                       <a href="" class="btn btn-primary text-white me-0" id="lien-prod-export-pdf"><i class="icon-download"></i> Export </a>
                      @endif       
                    </div>
            </div>
          @endunless
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

