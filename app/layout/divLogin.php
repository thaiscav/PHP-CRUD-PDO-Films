<?php
//div root = body.php > #logindiv
//This div request cames from menuSignUp.php > btn_login > onclick="openLoginForm()"


if(!isset($_GET['login-submit']))
{
    showFormLogin();

}// fin if
else{

        $utilisateur = trim($_GET['username']);
        $utilisateur = strip_tags($utilisateur);
        $utilisateur = htmlspecialchars($utilisateur);

        $mp = trim($_GET['password']);
        $mp = strip_tags($mp);
        $mp = htmlspecialchars($mp);
  
        $erreur = false;

         //Check Donnes
        if($utilisateur != "" && $mp != ""){

            $mpEncrip = md5($mp);

            //Check user
            require_once '../config/connexion.inc.php';
            $gestion = new connexion();
            $query = "SELECT * FROM utilisateurs WHERE nomUtil = '$utilisateur' AND mp = '$mpEncrip'";
            $user = $gestion->EXEC_QUERY($query);

            print_r($user);  

                if ($user[0]["nomUtil"] == $utilisateur){

                    //echo $user[0]["nomUtil"]."<br>";
                    //echo $utilisateur."<br>";

                        if ($user[0]["mp"] == $mpEncrip){

                            //echo $user[0]["mp"]."<br>";
                            //echo $mpEncrip."<br>";

                            //Login
                            $membre = $user[0]['nom'];
                            $erreur = false;
                            header("Location: ../../index.php?action=loged&membre=$membre");
                        }
                        else{   
                            //echo 'Mot de passe invalide';
                            $erreur = true;
                        }              
                }
                else{
                    //echo 'Utilisteur n`existe pas';
                    $erreur = true;
                }       
        }
        else{
            //echo '<div class="error"> Il faut remplir les informations</div>';
            $erreur = true;          
        }

        if ($erreur == true){

            header("Location: ../../index.php?action=erroLogin");
        }

}//fin else


function showFormLogin(){

            $form = '
            
                <!--Formulaires d`authentification-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-login">

                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" id="register-form-link" class="active btn btn-warning" onclick="slideSignUpForm()">Devenir membre</a>
                                                 <h2>Se connecter: </h2>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!--LOGIN FORM-->
                                                <form id="formLogin" method="GET" action="app/layout/divLogin.php?action=login" role="form">
                                                    
                                                    <div class="form-group">
                                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d`utilisateur" value="" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe" required>
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <input type="checkbox" tabindex="3" class="" name="remember" id="btn_rememberPass">
                                                        <label for="remember">Se rapeller de moi</label>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Connexion">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <a href="index.php" tabindex="5" class="forgot-password">J`ai oublié le mot de passe</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form><!--Fin LOGIN form-->
                                                
                                            </div>
                                        </div>
                                    </div><!--Fin panel body-->

                                </div>
                            </div>
                        </div>      
                    </div>
                <!--Fin Formulaires d`authentification-->

            ';

        echo $form;

}//fin showFormLogin

?>
            



                
                