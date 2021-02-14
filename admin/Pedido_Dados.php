<?php
require "Pedido.Class.php";

        $idpedido = $_POST['idpedido']; 
    if ($idpedido == null) {
        $pedido = new Pedido ();
        $dados = $pedido->lista();            
    ?>


    <?php if($dados!=null){ ?>



    <table class="lista-dados">

        <div class="col-md-10">

            <div class="row">
                <div class="col-md-6">

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DATA</th>
                                    <th class='hidden-xs'>STATUS</th>
                                    <th class="hidden-xs">CLIENTE</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idpedido']."</td>"; 
                                                            echo "<td>".$coluna['datadopedido']."</td>";
                                                         /*----------------------STATUSPEDIDO------------------------*/
                                                            //echo "<td class='hidden-xs'>".$coluna['idstatuspedido']."</td>";                         
                                                            $idstat = $coluna['idstatuspedido']; 
                                                            include_once("conexao.php");         
                                                            
                                                            $consulta3 = "SELECT * FROM statuspedido WHERE idstatuspedido = $idstat";
                                                            $con = $conn->query($consulta3) or die($conn->error);

                                                             while($dados = $con->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["idstatuspedido"]. " > " .$dados["descricaostatus"]. " > " .$dados["datavalida"]." </td>";	
                                                             }
                                                             /* ----------------------------------------------------------- */
                                                           
                                                             /*----------------------CLIENTE------------------------*/
                                                            //echo "<td class='hidden-xs'>".$coluna['idclien']."</td>";
                                                            $idcli = $coluna['idclien']; 
                                                            //include_once("conexao.php");         
                                                            
                                                            $consulta = "SELECT idcliente, nome, cpf FROM cliente WHERE idcliente = $idcli";
                                                            $con = $conn->query($consulta) or die($conn->error);

                                                             while($dados = $con->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["idcliente"]. " > " .$dados["nome"]. " > " .$dados["cpf"]." </td>";	
                                                             }
                                                             /* ----------------------------------------------------------- */
                                                             
                                                             
												            
                                                                        echo '<td>                                                                             
                                                                           <a href="Pedido_Editar.php?idpedido='.$coluna['idpedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="Pedido_Excluir.php?idpedido='.$coluna['idpedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
                                                                         <br><br>
                                                                         </td>';
                                                                                                                                                                                                                        
                                                                        echo "</tr>";
                                                                        echo "</tr>";
                                                                    }

                        
                                                        ?>


                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </table>



    <?php }else{ 
        $pedido = new Pedido();
        $dados = $pedido->pesquisarPedido($idpedido);
        
?>

    <?php if($dados!=null){ ?>



    <table class="lista-dados">

        <div class="col-md-10">

            <div class="row">
                <div class="col-md-6">

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DATA</th>
                                    <th class='hidden-xs'>STATUS</th>
                                    <th class="hidden-xs">CLIENTE</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idpedido']."</td>"; 
                                                            echo "<td>".$coluna['datadopedido']."</td>";
                                                         /*----------------------STATUSPEDIDO------------------------*/
                                                            //echo "<td class='hidden-xs'>".$coluna['idstatuspedido']."</td>";                         
                                                            $idstat = $coluna['idstatuspedido']; 
                                                            include_once("conexao.php");         
                                                            
                                                            $consulta3 = "SELECT * FROM statuspedido WHERE idstatuspedido = $idstat";
                                                            $con = $conn->query($consulta3) or die($conn->error);

                                                             while($dados = $con->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["idstatuspedido"]. " > " .$dados["descricaostatus"]. " > " .$dados["datavalida"]." </td>";	
                                                             }
                                                             /* ----------------------------------------------------------- */
                                                           
                                                             /*----------------------CLIENTE------------------------*/
                                                            //echo "<td class='hidden-xs'>".$coluna['idclien']."</td>";
                                                            $idcli = $coluna['idclien']; 
                                                            //include_once("conexao.php");         
                                                            
                                                            $consulta = "SELECT idcliente, nome, cpf FROM cliente WHERE idcliente = $idcli";
                                                            $con = $conn->query($consulta) or die($conn->error);

                                                             while($dados = $con->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["idcliente"]. " > " .$dados["nome"]. " > " .$dados["cpf"]." </td>";	
                                                             }
                                                             /* ----------------------------------------------------------- */
                                                             
                                                             
												            
                                                                        echo '<td>                                                                             
                                                                           <a href="Pedido_Editar.php?idpedido='.$coluna['idpedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="Pedido_Excluir.php?idpedido='.$coluna['idpedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
                                                                         <br><br>
                                                                         </td>';
                                                                                                                                                                                                                        
                                                                        echo "</tr>";
                                                                        echo "</tr>";
                                                                    }

                        
                                                        ?>


                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </table>

    <?php } ?>
