<?php
require "StatusPedido.Class.php";

        $idstatuspedido = $_POST['idstatuspedido']; 
    if ($idstatuspedido == "") {
        $statuspedido = new Statuspedido ();
        $dados = $statuspedido->lista();            
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
                                    <th>DESCRICAO</th>
                                    <th class='hidden-xs'>DATA</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idstatuspedido']."</td>"; 
                                                            echo "<td>".$coluna['descricaostatus']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['datavalida']."</td>";
                                                            
                                                             echo '<td>                                                                             
                                                                 <a href="StatusPedido_Editar.php?idstatuspedido='.$coluna['idstatuspedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                <a href="StatusPedido_Excluir.php?idstatuspedido='.$coluna['idstatuspedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
                                                                         <br><br>
                                                                         </td>';
                                                                                                                                                                                                                        
                                                                echo "</tr>";
                                                                echo "</tr>";
                                                            }
                            
                            }?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </table>



    <?php }else{ 
        $statuspedido = new Statuspedido ();
        $dados = $statuspedido->pesquisarStatus($idstatuspedido);
        
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
                                    <th>DESCRICAO</th>
                                    <th class='hidden-xs'>DATA</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idstatuspedido']."</td>"; 
                                                            echo "<td>".$coluna['descricaostatus']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['datavalida']."</td>";
                                                            
                                                            echo '<td>                                                                             
                                                                 <a href="StatusPedido_Editar.php?idstatuspedido='.$coluna['idstatuspedido'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
                                                                <a href="StatusPedido_Excluir.php?idstatuspedido='.$coluna['idstatuspedido'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
                                                                         <br><br>
                                                                         </td>';
                                                                                                                                                                                                                        
                                                                echo "</tr>";
                                                                echo "</tr>";
                                                            }
                            
                            }?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </table>

    <?php } ?>
