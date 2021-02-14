<?php
require "ItemPedido.Class.php";

        $iditempedido = $_POST['iditempedido']; 
    if ($iditempedido == null) {
        $itempedido = new ItemPedido();
        $dados = $itempedido->lista();            
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
                                    <th>QUANTIDADE</th>
                                    <th class='hidden-xs'>VALOR</th>
                                    <th class="hidden-xs">IDPEDIDO</th>
                                    <th class="hidden-xs">IDPRODUTO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['iditempedido']."</td>"; 
                                                            echo "<td>".$coluna['qtd']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['valor']."</td>";                                                            
                                                            echo "<td class='hidden-xs'>".$coluna['idpedi']."</td>";
												            echo "<td class='hidden-xs'>".$coluna['idprod']."</td>";
															                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                           <a href="ItemPedido_Editar.php?iditempedido='.$coluna['iditempedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="ItemPedido_Excluir.php?iditempedido='.$coluna['iditempedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $itempedido = new Itempedido();
        $dados = $itempedido->pesquisarItemPedido($iditempedido);
        
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
                                    <th>QUANTIDADE</th>
                                    <th class='hidden-xs'>VALOR</th>
                                    <th class="hidden-xs">IDPEDIDO</th>
                                    <th class="hidden-xs">IDPRODUTO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['iditempedido']."</td>"; 
                                                            echo "<td>".$coluna['qtd']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['valor']."</td>";                                                            
                                                            echo "<td class='hidden-xs'>".$coluna['idpedi']."</td>";
												            echo "<td class='hidden-xs'>".$coluna['idprod']."</td>";
															                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                           <a href="ItemPedido_Editar.php?iditempedido='.$coluna['iditempedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="ItemPedido_Excluir.php?iditempedido='.$coluna['iditempedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
