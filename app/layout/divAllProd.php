<?php
//div root = body.php > #allProd
?>

                <!--Container Images-->
                <div class='gallery col-lg-12 col-md-12 col-sm-12 col-xs-12' id="div-images">
                    
                    <div align="center">
                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="1">Action</button>
                        <button class="btn btn-default filter-button" data-filter="2">Drame et répertoire</button>
                        <button class="btn btn-default filter-button" data-filter="3">Comédie</button>
                        <button class="btn btn-default filter-button" data-filter="4">Horreur</button>
                        <button class="btn btn-default filter-button" data-filter="5">Suspense</button>
                        <button class="btn btn-default filter-button" data-filter="6">Pour la famile</button>
                        <button class="btn btn-default filter-button" data-filter="7">Science</button>
                        <button class="btn btn-default filter-button" data-filter="8">Jeuesse</button>
                    </div>
                
                    <div class="alert alert-success" id="alertItemAdded">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Article ajouté au panier d'achat.</strong>
                    </div>
                
                    <?php
                    //cria obj
                    $table = new connexion();
                    //recebe formato arraylist key=>value
                    $product_array = $table->EXEC_QUERY("SELECT * FROM films ORDER BY code_film ASC");
                    //print_r($product_array);
                    $rep="";

                    if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){        
                        
            $rep .= '
                    <div class="col-lg-3 product-item filter '.$product_array[$key]["code_categ"].'" id="prod'.$key.'">                              
                        <form  method="GET" action="app/controller/cartController.php?action=add&code_film='.$product_array[$key]["code_film"].'" >
                            <div class="thumbnail containerOverlay">                
                                
                                <img id="myImg'.$key.'" src="'.$product_array[$key]["image"].'" class="image imageOverlay img-responsive" alt="img'.$key.'">
                                
                                <div class="middle">
                                    <div class="textOverlay">
                                        <p id="titleProd"><strong>'.$product_array[$key]["titre"].'</strong></p>
                                        <p id="priceProd">'.$product_array[$key]["prix"]. ' $</p>                                                                       
                                    </div>
                                </div> 

                                <div class="btn-ground text-center"> 

                                    <h4>Quantité:             
                                    <input id="btnQntd" type="number" class="btn" min="1" max="10" name="quantite" value="1"/>
                                    </h4>

                                    <input id="btnAddProd" type="submit" value="Ajouter au Panier" class="btn btn-primary btnAddAction"/>   

									<button class="btn btn-info" data-toggle="modal" data-target="#modal-preview"><i class="fa fa-eye"></i></button>
                                    <br>
                               </div>                        
                            </div>
                        </form>            
                    </div>';
                        }
                    }

                    echo $rep;
                    //close BD
                    //$gestor = null;
                    ?>

                </div>
                <!--Fin Container Images-->