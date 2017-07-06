<?php

//div root = body.php > #signupdiv
//This div request cames from login.php > register_form_link > onclick="slideSignUpForm()"

//include("_head.php");
//include("_header.php");

if(!isset($_GET['register-submit']))
{
    showFormSignUp();

}// fin if
else{

        $utilisateur_nom = trim($_GET['nom']);
        $utilisateur_nom = strip_tags($utilisateur_nom);
        $utilisateur_nom = htmlspecialchars($utilisateur_nom);

        $utilisateur = trim($_GET['nomUtil']);
        $utilisateur = strip_tags($utilisateur);
        $utilisateur = htmlspecialchars($utilisateur);

        $courriel = trim($_GET['courriel']);
        $courriel = strip_tags($courriel);
        $courriel = htmlspecialchars($courriel);

        $mp = trim($_GET['mp']);
        $mp = strip_tags($mp);
        $mp = htmlspecialchars($mp);

        $mpconfirm = trim($_GET['mpconfirm']);
        $mpconfirm = strip_tags($mpconfirm);
        $mpconfirm = htmlspecialchars($mpconfirm);
  
        $erreur = false;

        if(isset($_FILES['avatar'])){
                $avatar = $_FILES['avatar'];
        }

        //Check Donnes
        if($utilisateur_nom != "" || $utilisateur != "" || $courriel != "" || $mp != "" || $mpconfirm != ""){	

            //Check mot de passe confirmation
            if ($mp == $mpconfirm){

                require_once '../config/connexion.inc.php';
                $gestion = new connexion();
                
                //Check if user exits
                $query = "SELECT nomUtil FROM utilisateurs WHERE nomUtil = '$utilisateur'";
                $rep = $gestion->EXEC_QUERY($query);

                    if($rep != null){

                        // print_r ($rep);
                        //echo '<div class="error"> Utilisateur exist déjà</div>';
                        //Recriar a pagina com msg de erro
                        //alertMembre();
                        $erreur = true;
                        //$userError = "Utilisateur exist déjà.";                                            
                    }

                //Check if e-mail exists
            }
            else{
                //echo '<div class="error"> Mot de passe diférent</div>';
                $erreur = true;
            }      
        }
        else{

            //echo '<div class="error"> Il faut remplir les informations</div>';
            $erreur = true;
        }

        //Check avatar
        if($avatar['name'] != "" && $avatar['type'] != "image/jpeg"){

                //echo '<div class="error"> Fichier image invalide</div>';
                $erreur = true;
        }
        else if($avatar['name'] != "" && $avatar['size'] > $_GET["MAX_FILE_SIZE"]){

                //echo '<div class="error"> Image trop grande</div>';
                $erreur = true;
        }
        
        //Insert
        if(!$erreur){
            
                require_once '../config/connexion.inc.php';
                $gestion = new connexion();

                //Check parametres de utilisateur
                $param = [
                    ":nom" => $utilisateur_nom,
                    ":courriel" => $courriel,
                    ":login" => $utilisateur,            
                    ":mp" => md5($mp),
                ];  

                $query = "INSERT INTO utilisateurs(nom, courriel, nomUtil, mp)
                VALUES (:nom, :courriel, :login, :mp)";
                $gestion->EXEC_ALTER_QUERY($query ,$param);

                echo "<br><br><br>".$membre;
                $membre = $user[0]['nom']; 
                sleep(1);
                           
                header("Location: ../../index.php?action=added");
        }
        else{

            //echo '<div class="error"> ERROR!!! </div>';
            header("Location: ../../index.php?action=erroRegister");
            exit;              

        }//fin else validation

}//fin else submit

function showFormSignUp(){

            $form = '
                <!--SIGNUP DIV FORM-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-login">

                                    <!--PANEL HEADING-->
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="active btn btn-warning" id="login-form-link" onclick="slideLoginForm()">Connexion</a>
                                                <h2>Devenir membre: </h2>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <!--FIN PANEL HEADING-->

                                    <!--PANEL BODY-->
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <!--ALERT PANEL-->
                                                <div class="alert alert-danger" id="alertInputRequired">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                    <strong>Vérifiez la confirmation de mot de passe.</strong>
                                                </div>

                                                <div class="alert alert-danger" id="alertUserExists">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                    <strong>Utilisateur exist déjà.</strong>
                                                </div>

                                                <div class="alert alert-success" id="alertMembreAdded">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                    <strong>Membre enregistré!</strong>
                                                </div>

                                                <!--FORM-->
                                                <form id="formSignUp" method="GET" role="form" action="app/layout/divSignup.php?action=signup" enctype="multipart/form-data">
                                                    
                                                    <div class="form-group">
                                                        <input type="text" name="nom" id="nom" tabindex="1" data-parsley-type="alphanum" class="form-control" placeholder="Nom" value="" data-parsley-required required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="nomUtil" id="nomUtil" tabindex="1" class="form-control" placeholder="Nom de utilisateur" value="" data-parsley-required required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="courriel" id="courriel" tabindex="1" class="form-control" placeholder="Courriel" value="" data-parsley-type="email" data-parsley-required required data-parsley-trigger="keyup">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="mp" id="mp" tabindex="2" class="form-control" placeholder="Mot de passe" required>
                                                        <br>
                                                        <input type="password" name="mpconfirm" id="confirm-mp" tabindex="2" class="form-control" placeholder="Confirmer mot de passe" required data-parsley-required data-parsley-equalto="#mp" data-parsley-trigger="keyup">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="50000">
                                                        <input type="file" name="avatar" value="Image">
                                                        <div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
                                                        <br>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-primary btnRegisterSubmit" value="Envoyer">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--Fin PANEL BODY-->
                                        
                                </div>    
                            </div>
                        </div>
                    </div>
                    <!--FIN SIGNUP DIV FORM-->';

        echo $form;
}//fin showFormSignUp

//include("_footer.php");

?>

        <!-- Modal MSG -->
			<div id="modal-alertMembreExits" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">

						<?php 
						
						function alertMembre(){

							echo '
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Alert:</h4>
							</div>
							
							<div class="modal-body">

                                <strong>Utilisateur exist déjà.</strong>
								
							</div>

							<div class="modal-footer">
								<a class="btnok">
									<button class="btn btn-info btn-md close" data-dismiss="modal"></i>Fermer</button>
								</a>
							</div>';		
						}
						
						?>

					</div>
				</div>
			</div>
			<!-- Fin MSG -->