 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/welcome')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        @if(Auth::user()->user_type == '1')
          <li class="nav-item nav-category">Administrateur</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Gestion des utilisateurs</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/users')}}">Tous les utilisateurs</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/createuser') }}">Créer un utilisateur</a></li>
              </ul>
            </div>
          </li>
        @endif

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Tableau de bord</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
            @if (auth()->user()->services->contains('nom', 'Achat'))
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('achat')}}">Achat</a></li>
              </ul>
            @endif
            @if (auth()->user()->services->contains('nom', 'Vente'))
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('vente')}}">Vente</a></li>
              </ul>
            @endif  
            @if (auth()->user()->services->contains('nom', 'Stock'))  
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('stock')}}">Stock</a></li>
              </ul>
            @endif  
            @if (auth()->user()->services->contains('nom', 'Production'))  
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('2emeChoix')}}">Production</a></li>
              </ul>
            @endif  
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
               @if (auth()->user()->services->contains('nom', 'Achat'))  
                <li class="nav-item"> <a class="nav-link" href="{{url('table_détails_achat')}}">Table d'achat</a></li>
               @endif   
               @if (auth()->user()->services->contains('nom', 'Vente'))                  
                <li class="nav-item"> <a class="nav-link" href="{{url('table_détails_vente')}}">Table de vente</a></li>
               @endif   
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Gérez votre compte</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Votre Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"> Profile </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"> Logout </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Denim Authority</li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.denimauthority.com/" target="_blank">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Site Web</span>
            </a>
          </li> 
        </ul>
      </nav>