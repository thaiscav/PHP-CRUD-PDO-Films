
 <?php
//root = _header.php
 ?>
    <!--MEMBRE-->
    <li class="dropdown btn">
        <a class="dropdown-toggle" id="btn_gestionMembre" data-toggle="dropdown" href="#">
          <span class="glyphicon glyphicon-user"></span>
              Bienvenu(e) MEMBRE: <?php $membre ?>
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Modifier Informations</a></li>
          <li><a href="#" onclick="openConfigMembre()">Historique d'achats</a></li>
          <li><a href="index.php?action=logout" >Se déconnecter </a></li>
        </ul>
    </li> 
