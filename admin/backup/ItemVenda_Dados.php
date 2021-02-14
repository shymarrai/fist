<?php
require "ItemVenda.Class.php";

        $iditemvenda = $_POST['iditemvenda']; 
    if ($iditemvenda == "") {
        $itemvenda = new ItemVenda();
        $dados = $itemvenda->lista();            
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
                                    <th>Data Venda</th>
                                    <th class='hidden-xs'>Prazo</th>
                                    <th class="hidden-xs">Id Pedido</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['iditemvenda']."</td>"; 
                                                            echo "<td>".$coluna['datavenda']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['prazo']."</td>";                                                            
                                                            echo "<td class='hidden-xs'>".$coluna['idpedi']."</td>";
												            
                                                                        echo '<td>                                                                             
                                                                           <a href="ItemVenda_Editar.php?iditemvenda='.$coluna['iditemvenda'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="ItemVenda_Excluir.php?iditemvenda='.$coluna['iditemvenda'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $itemvenda = new ItemVenda();
        $dados = $itemvenda->pesquisarPorNome($iditemvenda);
        
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
                                    <th>Data Venda</th>
                                    <th class='hidden-xs'>Prazo</th>
                                    <th class="hidden-xs">Id Pedido</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['iditemvenda']."</td>"; 
                                                            echo "<td>".$coluna['datavenda']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['prazo']."</td>";                                                            
                                                            echo "<td class='hidden-xs'>".$coluna['idpedi']."</td>";
												            
                                                                        echo '<td>                                                                             
                                                                           <a href="ItemVenda_Editar.php?iditemvenda='.$coluna['iditemvenda'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                         <a href="ItemVenda_Excluir.php?iditemvenda='.$coluna['iditemvenda'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
