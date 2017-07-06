          
    <?php

    //cria obj
        $table = new connexion();
        //recebe formato arraylist key=>value
        $donnes = $table->EXEC_QUERY("SELECT * FROM films");
        //print_r($donnes);
        $rep="";
        $codeProd;

        $taille=count($donnes);

                for($i = 0 ; $i < $taille  ; $i++){  

                    //if ($codeProd == $donnes[$i]["code_film"]){
                        
                        $rep = '<div class="col-xs-4 item-photo">
                                    <img src="images/1.jpg"/>
                                </div>
                                <div class="col-xs-5" style="border:0px solid gray">
                                    <h3>Samsung Galaxy S4 I337 16GB 4G LTE Unlocked GSM Android Cell Phone</h3> 
                                    <h6 class="title-price"><small>PRIX</small></h6>
                                    <h3 style="margin-top:0px;">U$S 399</h3>
                                </div>
                                <div class="section" style="padding-bottom:20px;">
                                    <h6 class="title-attr"><small>QUANTITÉ</small></h6>                    
                                <div>                               
                                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span>
                                </div>
                                    <input value="1" />
                                        <div class="btn-plus">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="section" style="padding-bottom:20px;">
                                    <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                                </div>   

                    ';
                        
                    // }

                    
                 }

                 echo $rep;
    ?>

               
 
                                        
    
            <div class="col-xs-9">

                <ul class="menu-items">
                    <li class="active">Detalle del producto</li>
                    <li>Garantía</li>
                    <li>Vendedor</li>
                    <li>Envío</li>
                </ul>

                <div style="width:100%;border-top:1px solid silver">
                    <p style="padding:15px;">
                        <small>
                        Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go. 
    
                        With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                        </small>
                    </p>
                    <small>
                        <ul>
                            <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                            <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                        </ul>  
                    </small>
                </div>

            </div> 