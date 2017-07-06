<?php
//div root = body.php > #gestionFilmDiv

	//CONTROLLER FILM:
		if(!empty($_GET["actionFilm"])) {

			//echo $_GET["actionFilm"];
			$table = null;
			$actionFilm = $_GET["actionFilm"];
			
			switch($actionFilm){

				case "confirmerInserer":
					//confirmerInserer();
					break;

				case "inserer":

					try{

						//incluir validacao = divSignup
						$code=$GET['code'];
						$titre=$GET['titre'];
						$realisateur=$GET['realisateur'];
						$descrip=$GET['descrip'];
						$categ=$GET['code_categ'];
						$duree=$GET['duree'];
						$prix=$GET['prix'];
						
						if( (isset($_FILES['image'])) && (isset($_FILES['preview'])) ){
							
							$image=$GET['image'];
							$preview=$GET['preview'];

						}

						//Check Donnes
						if($titre != "" || $realisateur != "" || $code_categ != "" || $prix != "" || $image != ""){

							$param = [
							":a" => $titre,
							":b" => $realisateur, 
							":c" => $descrip,
							":d" => $code_categ,
							":e" => $duree,
							":f" => $prix,
							":g" => $image,
							":h" => $preview
							];

							//instancia a class com new Film;

							//$table = new gestion();
							//$query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
							//VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
							//$table->EXEC_ALTER_QUERY($query ,$param);

							//enregistrer();
						

						}

					}
					catch(Exception $e) {

						echo '<p>Caught exception: ',  $e->getMessage(), "</p>";
					}

					break;

				case "confirmerEnlever":

					$code = $_GET['code_film'];
					//confirmerEnlever($code);
					break;

				case "enlever":

					$code=$_GET['code_film'];

					echo "CHECAR enlever film ".$code;

					try{
							
							require_once '../config/connexion.inc.php';
							$table = new connexion();
							$query = "DELETE FROM films WHERE code_film = $code";
							$table->EXEC_ALTER_QUERY($query); //decidir paramentro
							echo '<p>Sucess!</p>';

							require_once '../config/connexion.inc.php';
							lister();

						}
						catch(Exception $e) {

							echo '<p>Caught exception: ',  $e->getMessage(), "</p>";
						}
					break;
				
				case "confirmerModifier":	

					$code = $_GET['code_film'];

					try{

						require_once '../config/connexion.inc.php';
						$table = new connexion();
						$query = "SELECT * FROM films WHERE code_film = '$code'";
						$film  = $table->EXEC_QUERY($query);

						//confirmerModifier($code,$film);
						//testModifier($code,$film);
												
					}
					catch (Exception $e ){
						echo '<p>Caught exception: ',  $e->getMessage(), "</p>";
					}
						
					break;

				case "modifier":

					echo "ENREGISTRER MOD";

					try{

						//incluir validacao = divSignup
						$code=$_GET['code_film'];
						$titre=$_GET['titre'];
						$realisateur=$_GET['realisateur'];
						$descrip=$_GET['descrip'];
						$code_categ=$_GET['code_categ'];
						$duree=$_GET['duree'];
						$prix=$_GET['prix'];
						
						if( (isset($_FILES['image'])) && (isset($_FILES['preview'])) ){
							
							$image=$_GET['image'];
							$preview=$_GET['preview'];

						}

						//Check Donnes
							if($titre != "" || $realisateur != "" || $code_categ != "" || $prix != "" || $image != ""){

								$param = [
								":a" => $titre,
								":b" => $realisateur, 
								":c" => $descrip,
								":d" => $code_categ,
								":e" => $duree,
								":f" => $prix,
								":g" => $image,
								":h" => $preview
								];

								//require_once '../config/connexion.inc.php';
								//$table = new connexion();
								//$query = "INSERT INTO films(titre, realisateur, description, code_categ, duree, prix, image, preview) 
								//VALUES (:a, :b, :c, :d, :e, :f, :g, :h)";
								//$table->EXEC_ALTER_QUERY($query ,$param);

							}

						}
						catch(Exception $e) {

							echo '<p>Caught exception: ',  $e->getMessage(), "</p>";
						}
					break;
					
				default:				
				//lister();
					break;
			}
		}
		else{	

			lister();			
		}

	//FUNCTIONS:
	function lister(){

        $table = new connexion();
        $query = "SELECT * FROM films f INNER JOIN categories c ON c.code_categ = f.code_categ ORDER BY code_film ASC";
        $films = $table->EXEC_QUERY($query);
		//print_r($films);

		$rep="";

		$rep = '
			<div class="container">	
				<table class="table table-bordered table-hover table-responsive" id="tableFilm">
					<thead>
						<tr>
							<th>Code</th>
							<th>Titre</th>
							<th>Realisateur</th>
							<th>Description</th>
							<th>Code categorie</th>
							<th>Durée</th>
							<th>Prix</th>
							<th>Image Location</th>
							<th>Preview Location</th>
							<th colspan="2">
								<div class="container-fluid">

								<a class="btnModifierAction" href="app/layout/divGestionFilms.php?actionFilm=confirmerInserer" data-toggle="modal" data-target="#modal-insererFilm">
									<button class="btn btn-warning btn-md">Insérer Film  <i class="fa fa-check-square"></i></button>
								</a>
								
								</div>
							</th>                                   
						<tr>
					</thead>

			';

			if (!empty($films)) { 
				foreach($films as $key=>$value){        
				
				$rep .= '                   
						<tbody>			
							<tr id="'.$films[$key]["code_film"].'" name="film'.$films[$key]["code_film"].'">
								
								<td>
								'.$films[$key]["code_film"].'
								<input type="hidden" name="action" value="'.$films[$key]["code_film"].'">
								</td>											
								<td>'.$films[$key]["titre"].'</td>
								<td>'.$films[$key]["realisateur"].'</td>
								<td>'.$films[$key]["description"].'</td>
								<td>'.$films[$key]["code_categ"].'</td>
								<td>'.$films[$key]["duree"].'min</td>
								<td>'.$films[$key]["prix"].'$</td>
								<td>'.$films[$key]["image"].'</td>
								<td>'.$films[$key]["preview"].'</td>
								
								<td>
									<div class="container-fluid">

										<a href="app/layout/divGestionFilms.php?actionFilm=confirmerModifier&code_film='.$films[$key]["code_film"].'">
											<button class="btn btn-info btn-md"><i class="fa fa-pencil"></i> Div</button>
										</a>

										
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="'.$films[$key]["code_film"].'">Modal test</button>
										

										<a id="btnModifierAction" href="app/layout/divGestionFilms.php?actionFilm=confirmerModifier&code_film='.$films[$key]["code_film"].'" data-a="'.$films[$key]["code_film"].'" data-toggle="modal" data-target="#modal-modifFilm">
											<button class="btn btn-info btn-md"><i class="fa fa-pencil"></i> Modal default</button>
										</a>
										
										<a id="btnRemoveAction" href="app/layout/divGestionFilms.php?actionFilm=confirmerEnlever&code_film='.$films[$key]["code_film"].'" data-a="'.$films[$key]["code_film"].'" data-toggle="modal" data-target="#modal-enleverFilm">
											<button class="btn btn-danger btn-md"><i class="fa fa-trash-o"></i></button>
										</a>

									</div>							 
								</td>									
							</tr>			
						</tbody>                               
						';
				}
			}

				$rep .= '                       
				</table>			
			</div>
				';
			echo $rep;
	}//fin lister

	/*TEST AVEC UNE DIV
	//function testModifier($code,$film){

			echo '
						<div class="container">
							
								<form id="formModFilm" method="GET" action="app/layout/divGestionFilms.php?actionFilm=modifier" role="form" enctype="multipart/form-data">

									<div class="form-group">
										<label for="code_film"> Code: </label>
										<input class="form-control" type="text" name="code" value="'.$code.'" readonly>
									</div>
									
									<div class="form-group">
										<label for="titre">Titre: </label>
										<input class="form-control" type="text" name="titre" value="'.$film[0]["titre"].'" required>
									</div>

									<div class="form-group">
										<label for="realisateur">Realisateur: </label>
										<input class="form-control" type="text" name="realisateur" value="'.$film[0]["realisateur"].'" required>
									</div>

									<div class="form-group">
										<label for="description">Description: </label>
										<textarea class="form-control" type="text" rows="5" name="descrip" placeholder="'.$film[0]["description"].'"></textarea>
									</div>

									<div class="form-group">
										<label for="categorie">Categorie: </label>
										<input class="form-control" type="number" min="1" max="8" name="code_categ" value="'.$film[0]["code_categ"].'" required>
										<div class"help-block">1-Action | 2-Drame et répertoire | 3-Comédie ...</div>
									</div>

									<div class="form-group">
										<label for="duree">Durée: </label>
										<input class="form-control" type="number" min="10" max="220" name="duree" value="'.$film[0]["duree"].'">
									</div>

									<div class="form-group">
										<tlabe for="prix">Prix: </label>
										<input class="form-control" type="number" min="1" max="100" name="prix" value="'.$film[0]["prix"].'" required>
									</div>

									<div class="form-group">
										<tlabe for="image_location">Image location: </label>
										<input class="form-control" type="text" name="image_location" value="'.$film[0]["image"].'">
									</div>

									<div class="form-group">
										<tlabe for="preview_location">Preview location: </label>
										<input class="form-control" type="text" name="preview_location" value="'.$film[0]["preview"].'">
									</div>

									<div class="form-group">
										<label for="image">Image: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="image" value="Image">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>

									<div class="form-group">
										<label for="image">Preview: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="preview" value="preview">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>
								</form>
							</div>
		
							<div>

								<button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>

								<a class="btnModifAction" href="app/layout/divGestionFilms.php?actionFilm=modifier&code_film='.$code.'">
									<button class="btn btn-info"></i>Confirmer href</button>
								</a>

								<button type="button" name="modFilm-submit" id="modFilm-submit" class="form-control btn btn-info">Confirmer ajax click</button>
								<br>
								<input type="submit" name="modFilm-submit1" id="modFilm-submit1" class="btn btn-info" value="Confirmer submit">
			
							</div>
						';

	}*/
?>
<!-- Fin Functions -->	

			<!-- Modal Effacer -->
			<div id="modal-enleverFilm" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">

						<?php 
						
						function confirmerEnlever($code){

							echo '
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Enlever <strong>' .$code. '</strong></h4>
							</div>
							
							<div class="modal-body">
								<p>Effacer <strong>' .$code. '?</p>
							</div>

							<div class="modal-footer">

								<button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>

								<a class="btnRemoveAction" href="app/layout/divGestionFilms.php?actionFilm=enlever&code_film='.$code.'">
									<button class="btn btn-info btn-md"></i>Confirmer</button>
								</a>
							</div>';		
						}
						
						?>

					</div>
				</div>
			</div>
			<!-- Fin effacer -->

			<!-- Modal Inserer -->
			<div id="modal-insererFilm" class="modal fade" role="dialog">
				<div class="modal-dialog">

				<!-- Modal content-->
					<div class="modal-content">

						<?php 
						
						function confirmerInserer(){

							echo '
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Insérer</h4>
							</div>
							
							<div class="modal-body">
							
								<form name="formInserer" method="GET" action="app/layout/divGestionFilms.php" onSubmit="return envoyer(this);" enctype="multipart/form-data">
									
									<div class="form-group">
										<label for="titre">Titre: </label>
										<input class="form-control" type="text" name="titre" value="">
									</div>

									<div class="form-group">
										<label for="realisateur">Realisateur: </label>
										<input class="form-control" type="text" name="realisateur" value="">
									</div>

									<div class="form-group">
										<label for="description">Description: </label>
										<textarea class="form-control" type="text" rows="5" name="descrip" placeholder=""></textarea>
									</div>

									<div class="form-group">
										<label for="categorie">Categorie: </label>
										<input class="form-control" type="number" min="1" max="8" name="code_categ" value="">
										<div class"help-block">1-Action | 2-Drame et répertoire | 3-Comédie ...</div>
									</div>

									<div class="form-group">
										<label for="duree">Durée: </label>
										<input class="form-control" type="number" min="10" max="220" name="duree" value="">
									</div>

									<div class="form-group">
										<label for="prix">Prix: </label>
										<input class="form-control" type="number" min="1" max="100" name="prix" value="">
									</div>

									<div class="form-group">
										<tlabe for="image_location">Image location: </label>
										<input class="form-control" type="text" name="image_location" value="images/imageName.jpg">
									</div>

									<div class="form-group">
										<tlabe for="preview_location">Preview location: </label>
										<input class="form-control" type="text" name="preview_location" value="https://youtube.com">
									</div>

									<div class="form-group">
										<label for="image">Image: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="image" value="Image">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>

									<div class="form-group">
										<label for="image">Preview: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="preview" value="preview">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>

								</form>
							</div>

							<div class="modal-footer">

								<button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>

								<a class="btnInsererAction">
									<button class="btn btn-info btn-md"></i>Confirmer</button>
								</a>

							</div>
						';

						}
						?>

					</div>
				</div>
			</div>
			<!-- Fin Inserer -->

			<!-- Modal Modifier -->
			<div id="modal-modifFilm" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">MODAL Modifier product: <strong> <?php $film[0]["titre"]?> - code: <?php $code ?></strong></h4>
							</div>
							
							<div class=" container modal-body edit-content col-sm-6" >
							
								<form id="formModFilm" method="GET" action="app/layout/divGestionFilms.php?actionFilm=modifier" role="form" enctype="multipart/form-data">

									<div class="form-group">
										<label for="code_film"> Code: </label>
										<input class="form-control" type="text" name="code" value="<?php $code ?>" readonly>
									</div>
									
									<div class="form-group">
										<label for="titre">Titre: </label>
										<input class="form-control" type="text" name="titre" value=" <?php $film[0]["titre"] ?>" required>
									</div>

									<div class="form-group">
										<label for="realisateur">Realisateur: </label>
										<input class="form-control" type="text" name="realisateur" value=" <?php $film[0]["realisateur"] ?>" required>
									</div>

									<div class="form-group">
										<label for="description">Description: </label>
										<textarea class="form-control" type="text" rows="5" name="descrip" placeholder="<?php $film[0]["description"]?> "></textarea>
									</div>

									<div class="form-group">
										<label for="categorie">Categorie: </label>
										<input class="form-control" type="number" min="1" max="8" name="code_categ" value="<?php $film[0]["code_categ"] ?>" required>
										<div class"help-block">1-Action | 2-Drame et répertoire | 3-Comédie ...</div>
									</div>

									<div class="form-group">
										<label for="duree">Durée: </label>
										<input class="form-control" type="number" min="10" max="220" name="duree" value="<?php $film[0]["duree"]?>">
									</div>

									<div class="form-group">
										<tlabe for="prix">Prix: </label>
										<input class="form-control" type="number" min="1" max="100" name="prix" value="<?php $film[0]["prix"]?>" required>
									</div>

									<div class="form-group">
										<tlabe for="image_location">Image location: </label>
										<input class="form-control" type="text" name="image_location" value="<?php $film[0]["image"]?>">
									</div>

									<div class="form-group">
										<tlabe for="preview_location">Preview location: </label>
										<input class="form-control" type="text" name="preview_location" value="<?php $film[0]["preview"] ?>">
									</div>

									<div class="form-group">
										<label for="image">Image: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="image" value="Image">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>

									<div class="form-group">
										<label for="image">Preview: </label>
										<input type="hidden" name="MAX_FILE_SIZE" value="50000">
										<input type="file" name="preview" value="preview">
										<div class="help-block">(Image type <strong>JPG max 50Kb)</strong></div>
										<br>
									</div>
								</form>
							</div>
		
							<div class="modal-footer">

								<button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>

								<a class="btnModifAction" href="app/layout/divGestionFilms.php?actionFilm=modifier&code_film=' <?php $code ?>">
									<button class="btn btn-info"></i>Confirmer href</button>
								</a>

								<button type="button" name="modFilm-submit" id="modFilm-submit" class="form-control btn btn-info">Confirmer ajax click</button>
								<br>
								<input type="submit" name="modFilm-submit1" id="modFilm-submit1" class="btn btn-info" value="Confirmer submit">
			
							</div>

					</div>
				</div>
			</div>
			<!-- Fin Modifier -->


			
			<!-- Modal test -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modifier <strong id="code"></strong></h4>
						</div>
						<div class="modal-body edit-content">


							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
