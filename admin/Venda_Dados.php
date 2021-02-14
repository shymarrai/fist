<?php
$title ="Venda Dados";
require "Venda.Class.php";

        $idvenda = $_POST['idvenda']; 
    if ($idvenda == "") {
        $venda = new Venda();
        $dados = $venda->lista();            
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
                                    <!--<th>TOTAL</th>
                                    <th class='hidden-xs'>FRETE</th>-->
                                    <th class="hidden-xs">ID CLIENTE</th>
                                    <th class="hidden-xs">ID USUARIO</th>
                                    <th class="hidden-xs">ID PEDIDO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idvenda']."</td>"; 
                                                           // echo "<td>".$coluna['totvenda']."</td>";
                                                            //echo "<td class='hidden-xs'>".$coluna['frete']."</td>";                                                                                                                      
												            echo "<td>".$coluna['idcli']."</td>";															
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['idu']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['pedidoid']."</td>";
                                                            
                                                                        echo '<td>                                                                             
                                                                           <a href="Venda_Editar.php?idvenda='.$coluna['idvenda'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="Venda_Excluir.php?idvenda='.$coluna['idvenda'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $venda = new Venda();
        $dados = $venda->pesquisarPorNome($idvenda);
        
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
                                    <!--<th>TOTAL</th>
                                    <th class='hidden-xs'>FRETE</th>-->
                                    <th class="hidden-xs">ID CLIENTE</th>
                                    <th class="hidden-xs">ID USUARIO</th>
                                    <th class="hidden-xs">ID PEDIDO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idvenda']."</td>"; 
                                                           // echo "<td>".$coluna['totvenda']."</td>";
                                                            //echo "<td class='hidden-xs'>".$coluna['frete']."</td>";                                                                                                                      
												            echo "<td>".$coluna['idcli']."</td>";															
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['idu']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['pedidoid']."</td>";
                                                            
                                                                        echo '<td>                                                                             
                                                                           <a href="Venda_Editar.php?idvenda='.$coluna['idvenda'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="Venda_Excluir.php?idvenda='.$coluna['idvenda'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
