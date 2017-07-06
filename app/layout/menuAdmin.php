
 <?php
//root = _header.php
 ?>
    <!--ADMIN-->
    <li class="dropdown btn">
        <a class="a" id="btn_gestionAdmin" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
                Bienvenu(e) <?php $membre ?>
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a onClick="openGestionFilm()" >Gestion de Livres</a></li>
          <li><a onClick="openGestionMembre()" >Gestion de Membres</a></li>
          <li><a href="index.php?action=logout" >Se déconnecter </a></li>
        </ul>
    </li>