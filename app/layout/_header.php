 <body> 
 <?php
//root = body.php
//fin de BODY MAIN se trouve dans footer.php

        if(isset($_GET['action'] )){

            $action = $_GET['action'];

            switch ($action){

                case "logout":
                    $membre = null;
                break;

                case "erroLogin":
                    $membre = null;
                    echo '<br><br><br><div class="alert alert-danger" id="alert1">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                             <strong>Login invalide.</strong>
                        </div>';
                break;

                case "erroRegister";
                    $membre = null;
                    echo '<br><br><br><div class="alert alert-danger" id="alert2">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                             <strong>Enregistrement invalide</strong>
                        </div>';                      
                break;

                case "added":
                    $membre = null;
                    echo '<br><br><br><div class="alert alert-success" id="alert3">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Membre enregistré! Veullez se connecter.</strong>
                        </div>';
                break;

                case "loged":
                    $membre = $_GET['membre'];
                break;

                default: 
                    $membre = null;
            }

            
           
            //echo "action =" .$action. " membre = " . $membre;
        }
        else{
            $membre = null; 
        }
 ?>

 <!--BODY MAIN-->

   <!--NAVBAR containerMenu-->  
    <div class="navbar navbar-inverse navbar-fixed-top navbar8" id="containerMenu">
        
        <!--LOGO-->
        <div class="container" id="logo">
            <div class="navbar-header">
                <a class="navbar-brand text-hide" href="index.php">x</a>
            </div>
        </div>
        <!--FIN LOGO-->

        <!--MENU BAR LATERAL LINK-->
        <div class="pull-left" id="menuVert">
            <span id="menulink" onclick="openNav()">&#9776; MENU</span>
            <?php include("menuNav.php"); ?>                   
        </div> 
        <!--FIN MENU BAR LATERAL LINK-->

        <!--CART MODAL LINK-->
        <div class="pull-right" id="menuHoriz1">
            <a id="modal-cart" href="#modal-container-cart" class="btn" role="button" data-toggle="modal"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a>
        </div>
        <!-- FIN CART MODAL LINK-->

        <!--MENU SESSION LINKS-->
     
        <div class="pull-right" id="menuHoriz2">
            <?php

                switch ($membre)
                {
                    case null:
                        include("menuSignup.php");
                        break;
                        
                    case "admin":
                        //include("menuAdmin.php"); 

                        echo '<!--ADMIN-->
                                <li class="dropdown btn">
                                    <a class="a" id="btn_gestionAdmin" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span>
                                            Bienvenu(e): '.$membre.'
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a onClick="openGestionFilm()">Gestion de Films</a></li>
                                    <li><a onClick="openGestionMembre()">Gestion de Membres</a></li>
                                    <li><a href="index.php?action=logout">Se déconnecter </a></li>
                                    </ul>
                                </li>';
                        break;

                    default:
                        //include("menuMembre.php");

                        echo '<!--MEMBRE-->
                                <li class="dropdown btn">
                                    <a class="dropdown-toggle" id="btn_gestionMembre" data-toggle="dropdown" href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                        Bienvenu(e): '.$membre.'<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a href="#">Modifier Informations - à implementer</a></li>
                                    <li><a href="#">Historique d`achats - à implementer</a></li>
                                    <li><a href="index.php?action=logout">Se déconnecter </a></li>
                                    </ul>
                                </li> ';

                        break;
                } 
            ?>
        </div>
        <!--FIN MENU SESSION LINKS-->

    </div>
    <!-- fin NAVBAR containerMenu -->  

    <?php include("modalCart.php"); ?>
