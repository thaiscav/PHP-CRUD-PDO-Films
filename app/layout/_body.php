
<?php
//root = index.php
//Header MENU NAV
include("_header.php");

?>

  <br><br> 

    <!-- BODY containerBody = DIV PAGES-->
    <div id="containerBody">

        <div id="clearBodyDivs">

        <!--GESTION FILM DIV-->
        <div class="container" id="gestionFilmDiv">
            <hr class='prettyline'>
            <div class="row">    

                <?php
                include("app\layout\divGestionFilms.php");
                ?>
                
            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN GESTION FILM DIV-->

        <!--GESTION MEMBRE DIV-->
        <div class="container" id="gestionMembreDiv">
            <hr class='prettyline'>
            <div class="row">    

                <?php
                include("app\layout\divGestionMembre.php");
                ?>

            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN GESTION MEMBRE DIV -->
    
        <!--LOGIN DIV-->
        <div class="container" id="logindiv">
            <hr class='prettyline'>
            <div class="row">    

                <?php
                include("app\layout\divLogin.php"); 
                ?>

            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN LOGIN DIV-->

        <!--SINGUP DIV-->
        <div class="container" id="signupdiv">
            <hr class='prettyline'>
            <div class="row">     

                <?php
                include("app\layout\divSignup.php"); 
                ?>

            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN SINGUP DIV-->

        <!--DIV ALL PROD-->
        <div class="container" id="allProd">
            <hr class='prettyline'>
            <div class="row">   
                    
                <?php
                include("app\layout\divAllProd.php");
                ?>

            </div>
            <!--FIN ROW-->

             <?php include("app\layout\modalPreview.php"); ?>

            <hr class='prettyline'>
        </div>
        <!--FIN DIV ALL PROD-->

        <!--DIV CART-->
        <div class="container" id="panier">
            <hr class='prettyline'>
            <div class="row">

                <?php
                //include("app\layout\divPanier.php"); 
                ?>

            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN DIV CART-->  

        <!-- DIV DETAIL PROD-->
        <div class="container" id="detailProd">
            <hr class='prettyline'>
            <div class="row">

                <?php
                //include("app\layout\divDetailProd.php"); 
                ?>

            </div>
            <!--FIN ROW-->
            <hr class='prettyline'>
        </div>
        <!--FIN DIV DETAIL PROD-->   

        </div>

    </div>
    <!--FIN BODY containerBody DIV PAGES-->

    <br><br>
    