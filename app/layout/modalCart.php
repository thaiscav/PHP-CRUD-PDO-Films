<?php

//Souces:
//Validation: https://stackoverflow.com/questions/29038479/what-is-the-proper-way-to-validate-a-form-with-as-bootstrap-modal-using-jquery-p
//Cart exemple: https://bootsnipp.com/snippets/Pb45

?>

            <!--MODAL CART-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal fade" id="modal-container-cart" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!--MODAL HEADER-->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="cartLabel">Article(s) dans votre panier: </h4>
                                        </div>
                                        <!--FIN MODAL HEADER-->

                                        <!--MODAL BODY-->
                                        <div class="container-fluid modal-body" id="shopping-cart">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="container-fluid">
                                                        <a id="btnEmpty" class="pull-right btn btn-primary" href="app/controller/cartController.php?action=empty">Vider Panier</a>
                                                        <br>
                                                    </div>
                                                    <br>
                                        
                                                    <?php
                                                        if(isset($_SESSION["cart_item"])){
                                                        
                                                        $item_subtotal = 0;
                                                        $tvq = 5/100;
                                                        $tps = 9.975/100;
                                                        $item_total = 0;
                                                    ?>

                                                    <table class="table table-striped table-hover">
                                                        <thead>
                                                            <tr class="active">
                                                                <th><strong>Titre</strong></th>
                                                                <th><strong>Quantite</strong></th>
                                                                <th><strong>Prix Unit</strong></th>
                                                                <th><strong></strong></th>
                                                            </tr>	
                                                        </thead>
                                                        <?php		
                                                            foreach ($_SESSION["cart_item"] as $item){
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><strong><?php echo $item["titre"]; ?></strong></td>
                                                                <td><?php echo $item["quantite"]; ?>
                                                                <td><?php echo " $ ".$item["prix"]; ?></td>
                                                                <td>
                                                                    <a href="app/controller/cartController.php?action=remove&code_film=<?php echo $item["code_film"]; ?>" class="btnRemoveAction">
                                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <?php
                                                            $item_total += ($item["prix"]*$item["quantite"]);
                                                        }//fin foreach
                                                        ?>    

                                                    </table>

                                                        <hr>

                                                        <table class="tableblock col-sm-6 pull-right">
                                                        <tr>
                                                            <td><h5>Subtotal: </h5></td>
                                                            <td><h5><?php echo $item_total." $"; ?></h3></td>
                                                        </tr>
                                                        <tr>    
                                                            <td><h5>TVQ: </h5></td>
                                                            <td><h5><?php $item_total+=($item_total*$tvq); echo number_format($item_total*$tvq,2)." $"; ?></h5></td>
                                                        </tr>
                                                        <tr>        
                                                            <td><h5>TPS: </h5></td>
                                                            <td><h5><?php $item_total+=($item_total*$tvq); echo number_format($item_total*$tps,2). " $"; ?></h5></td>
                                                        </tr>
                                                        <tr class="info">             
                                                            <td><h3>TOTAL: </h3></td>
                                                            <td><h3><?php echo number_format($item_total,2)." $"; ?></h3></td>
                                                        </tr>
                                                    </table>

                                                    <div class="pull-right">
                                                        
                                                        <button type="button" class="btn btn-primary btn-lg" id="btnChekOut">
                                                        Passer la commande <span class="glyphicon glyphicon-play"></span>
                                                        </button>
                    
                                                        <a href="https://www.paypal.com/ca/home">
                                                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-44px.png" alt="PayPal" id="btnPaypal" onClick="redirectPP()">
                                                        </a>

                                                    </div>

                                                    <?php
                                                    }//fin if
                                                    else{
                                                        ?>
                                                        <table class="table table-striped  table-hover">
                                                            <thead>
                                                                <tr class="active">
                                                                    <th><strong>Titre</strong></th>
                                                                    <th><strong>Quantite</strong></th>
                                                                    <th><strong>Prix Unit</strong></th>
                                                                    <th><strong></strong></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="danger">
                                                                    <td colspan="4"><p>Votre panier est vide.</p></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    <?php
                                                    }
                                                    ?>                                         
                                                </div>
                                            </div>
                                        </div>
                                        <!--FIN MODAL BODY-->

                                        <!--MODAL FOOTER-->
                                        <div class="modal-footer">
                                            <div class="error">
                                            </div>
                                        </div>
                                        <!--FIN MODAL FOOTER-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--FIN MODAL CART-->
            