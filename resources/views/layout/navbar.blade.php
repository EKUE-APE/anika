<nav class="navbar navbar-side">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            
            <li>
                <a href="index.html"><i class="fa fa-dashboard" aria-hidden="true"></i>Tableau de bord</a>
            </li>
            
            <li>
                <a href="messages.html"><i class="fa fa-envelope-open" aria-hidden="true"></i>Messages</a>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Gestion annonces <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=""><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Recherche</a>
                    </li>
                    <li>
                        <a href="{{ route('acces') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter une Annonce</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter un dessert</a>
                    </li>
                   <li>
                        <a href=""><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter une entrée</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i>Localisation <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('addPays') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter un pays</a>
                    </li>
                    <li>
                        <a href="{{ url('addVille') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter une ville</a>
                    </li>
                   <li>
                        <a href="{{ url('addQuartier') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter un quartier</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-briefcase" aria-hidden="true"></i>Comptes <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('adduser') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Créer un Compte</a>
                    </li>
                    <li>
                        <a href="{{ url('comptes') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Comptes</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cog" aria-hidden="true"></i>Références <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('addReference') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Ajouter une référence </a>
                    </li>
                    <li>
                        <a href="{{ url('addNameRefe') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Créer un nom</a>
                    </li>
                   <li>
                        <a href="{{ url('allReference') }}"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>La Liste des Références</a>
                    </li>
                </ul>
            </li>
         
            <li>
                <a href="advertising.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Restauration</a>
            </li>
            
            <li>
                <a href="my-profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
            </li>
            
            <li>
                <a href="chatting.html"><i class="fa fa-comments-o" aria-hidden="true"></i>Chatting</a>
            </li>
            
            <li class="log-off">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true"></i>{{ __('DECONNEXION') }}</a>

              

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </li> 
        </ul>
    </div>
</nav>