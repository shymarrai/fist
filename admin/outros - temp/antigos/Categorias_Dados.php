<?php
require "Categorias.Class.php";

        $nome = $_POST['nome']; 
    if ($nome == "") {
        $categorias = new Categorias ();
        $dados = $categorias->lista();            
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
                                    <th>NOME</th>
                                    <th class='hidden-xs'>DESCRICAO</th>
                                    <th class='hidden-xs'>MARCA</th>


                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idcategorias']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['descricao']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['marca']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Categorias_Editar.php?idcategorias='.$coluna['idcategorias'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Categorias_Excluir.php?idcategorias='.$coluna['idcategorias'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $categorias = new Categorias ();
        $dados = $categorias->pesquisarCategorias($nome);
        
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
                                    <th>NOME</th>
                                    <th class='hidden-xs'>DESCRICAO</th>
                                    <th class='hidden-xs'>MARCA</th>


                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idcategorias']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['descricao']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['marca']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Categorias_Editar.php?idcategorias='.$coluna['idcategorias'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Categorias_Excluir.php?idcategorias='.$coluna['idcategorias'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
    </table>

    <?php } ?>
