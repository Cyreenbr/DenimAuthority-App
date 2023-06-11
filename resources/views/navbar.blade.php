 <nav class="navbar default-layout col-lg-12 col-12 p-0 h-5 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
        @unless(Route::currentRouteName() == 'profile.show')
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" id="navbar_button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        @endunless  
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{url('/welcome')}}">
            <img src="assets/images/DA-logo.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/welcome')}}">
            <img src="assets/images/DA-logo.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            
             @if(url()->current() === "http://127.0.0.1:8000/VentesDashboard" )
               <h1 class="welcome-text"> Tableau de bord <span class="text-black fw-bold">Ventes <span id="valeur-selectionnee"></span></span></h1>
             @else  
              @if(url()->current() === "http://127.0.0.1:8000/AchatsDashboard" )
               <h1 class="welcome-text"> Tableau de bord <span class="text-black fw-bold">Achats <span id="valeur-selectionnee"></span></span></h1>
              @else  
                @if(url()->current() === "http://127.0.0.1:8000/StockDashboard" )
                  <h1 class="welcome-text"> Tableau de bord <span class="text-black fw-bold">Stock <span id="valeur-selectionnee"></span></span></h1><span>13 Avril 2023</span>
                @else  
                  @if(url()->current() === "http://127.0.0.1:8000/ProductionDashboard" )
                     <h1 class="welcome-text"> Tableau de bord <span class="text-black fw-bold">Production <span id="valeur-selectionnee-prod"></span></span></h1>
                  @else   
                     @if(url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_production" )
                       <h1 class="welcome-text"> Table <span class="text-black fw-bold">Production <span id="valeur-selectionnee-table"></span></span></h1>
                     @else  
                        @if(url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_deuxi%C3%A9me_choix" )
                          <h1 class="welcome-text"> Table <span class="text-black fw-bold">Deuxiéme Choix <span id="valeur-selectionnee-table"></span></span></h1>
                        @else 
                          @if(url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_achat" )
                            <h1 class="welcome-text"> Table <span class="text-black fw-bold">Achat <span id="valeur-selectionnee-table"></span></span></h1>
                          @else   
                             @if(url()->current() === "http://127.0.0.1:8000/table_d%C3%A9tails_vente" )
                              <h1 class="welcome-text"> Table <span class="text-black fw-bold">Vente <span id="valeur-selectionnee-table"></span></span></h1>
                             @else   
                               <h1 class="welcome-text">Bonjour, <span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
                               <h3 class="welcome-sub-text">Vous trouvez tous vos Dashbaords içi</h3> 
             @endif
                @endif
                  @endif
                     @endif
                       @endif
                          @endif
                            @endif
                              @endif

                                </li>
        </ul>
        <ul class="navbar-nav ms-auto">
         @if(Route::currentRouteName() == 'Users')
          <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Tous les services </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" href="{{url('/users')}}">
                <p class="mb-0 font-weight-medium float-left">Tous les services</p>
              </a>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item preview-item" data-service-id="2" onclick="searchByService('2')" >
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Service Vente</p>
                </div>
              </button>
              <button class="dropdown-item preview-item" data-service-id="1" onclick="searchByService('1')">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Service Achat</p>
                </div>
              </button>
              <button class="dropdown-item preview-item" data-service-ide="3" onclick="searchByService('3')" >
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Service Stock</p>
                </div>
              </button>
              <button class="dropdown-item preview-item" data-service-id="4" onclick="searchByService('4')" >
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Service Production</p>
                </div>
              </button>
            </div>
          </li>
         @endif 
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          @if(Route::currentRouteName() == 'Users')
          <li class="nav-item">
            <form class="search-form" action="{{url('/search')}}" method="get">
              @csrf
              <i class="icon-search"></i>
              
              <input type="search" class="form-control" name="search" placeholder="Recherche" title="Search here">
             </form>
          </li>
          @endif
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ auth()->user()->profile_photo_url }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
               @unless(Route::currentRouteName() == 'profile.show')
                <img class="img-xs rounded-circle" style="height: 50px ; width:50px" src="{{ auth()->user()->profile_photo_url }}" alt="Profile image">
               @endunless   
                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
              <a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a href="{{ route('logout') }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Déconnexion</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>



 