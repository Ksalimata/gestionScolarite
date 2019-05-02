<div class="col-md-3 left_col">
          <div class="">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('home')}}" class="site_title"><i class="fa fa-paw" style="color:#f16a30"></i> 
                <span style="color: #f16a30">GesScolarité!</span>
              </a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/ites_logo.jpeg')}}" alt="LOGO ITES" style="width: 136%;margin-left: 66%;">
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br/>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Etudiants <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('etudiant.create')}}">Inscription</a></li>
                      <li><a href="{{route('etudiant.index')}}">Liste etudiant</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Matières <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('matiere.index')}}">Liste Matière</a></li>
                      <li><a href="{{route('matiere.create')}}">Ajouter Matière</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Filières <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('filiere.create')}}">Ajouter filiere</a></li>
                      <li><a href="{{route('filiere.index')}}">Liste filière</a></li>
                    </ul>
                  </li>
                  <li>
                    <a>
                    <i class="fa fa-clone"></i>Classes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('classe.index')}}">Liste des classes</a></li>
                      <li><a href="{{route('classe.create')}}">Ajouter une classe</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-clone"></i>Niveau <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('niveau.index')}}">Liste des niveau</a></li>
                      <li><a href="{{route('niveau.create')}}">Ajouter un niveau</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
<style type="text/css">
  .nav.child_menu>li>a, .nav.side-menu>li>a {
    color: black;
  }
  .left_col{
    background-color:#f7f7f7;
  }
  li:hover{
    color: red;
        }
</style>

