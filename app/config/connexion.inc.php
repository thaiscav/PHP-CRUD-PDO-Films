<?php

require("config.php");

class connexion{

        public function EXEC_QUERY($query, $param = null){
                //SELECT

                $result = null;
                //$gestor = null;

                //Conecta

                //echo "<br><br>conectou";
                
                $con = new PDO(
                        'mysql:host='.$GLOBALS['host'].
                        ';dbname='.$GLOBALS['bd'].
                        ';charset='.$GLOBALS['charset'],
                        $GLOBALS['user'],
                        $GLOBALS['pass'],
                        array(PDO::ATTR_PERSISTENT => TRUE)
                );

                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //Execute query

                if ($param != null) {
                        $gestor = $con->prepare($query);
                        $gestor->execute($param);
                        $result = $gestor->fetchAll(PDO::FETCH_ASSOC);

                        //echo "<br><br>query executada - ";
                        //print_r($result);
                }
                else{
                        $gestor = $con->prepare($query);
                        $gestor->execute();
                        $result = $gestor->fetchAll(PDO::FETCH_ASSOC);

                        //print_r($result);
                        //echo "<br><br>param null";
                }

                //fechar conec
                $con = null;
                $gestor->closeCursor();

                return $result;

        }//fin function EXEC_QUERY

        public function EXEC_ALTER_QUERY($query, $param = null){

                //INSERT, UPDATE, DELETE
                $gestor = null;

                //Conecta           
                $con = new PDO(
                        'mysql:host='.$GLOBALS['host'].
                        ';dbname='.$GLOBALS['bd'].
                        ';charset='.$GLOBALS['charset'],
                        $GLOBALS['user'],
                        $GLOBALS['pass'],
                        array(PDO::ATTR_PERSISTENT => TRUE)
                );

                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //Comunicacao com condiçao pendente, se n tiver erro ele executa
                //Execute query
                $con ->beginTransaction();
                
                try{

                        if ($param != null) {
                                $gestor = $con->prepare($query);
                                $gestor->execute($param);
                        }
                        else{
                                $gestor = $con->prepare();
                                $gestor->execute();
                        }

                        //Se n tem erro ele comita
                        $con->commit();
                        
                //echo '<p>Alteration done</p><hr>';

                }
                catch (PDOException $e) {
                        echo '<p>Caught exception: ',  $e->getMessage(), "</p>";
                        $con->rollBack();
                }
                
                $con = null;
                $gestor->closeCursor();


        }//fin function EXEC_NON_QUERY

}//fin class       
?>