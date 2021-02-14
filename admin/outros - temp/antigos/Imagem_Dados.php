<?php
require "Imagem.Class.php";

include_once("conexao.php");   /* PARA CHAMAR DADOS DE OUTRAS TABELAS */

        $idimagem = $_POST['idimagem']; 
       
    if ($idimagem == null) {
        $imagem = new Imagem();
        $dados = $imagem->lista();            
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
                                    <th>IMAGEM</th>
                                    <th class='hidden-xs'>ID PRODUTOS</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idimagem']."</td>"; 
                                                            echo "<td><img src='./img/".$coluna['img']."' width='200' height='auto' /></td>";
                                                            echo "<td class='hidden-xs'>".$coluna['idprodutos']."</td>";                           
                                                           
                                                                         
												                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Imagem_Editar.php?idimagem='.$coluna['idimagem'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Imagem_Excluir.php?idimagem='.$coluna['idimagem'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $imagem = new Imagem();
        $dados = $imagem->pesquisarImagem($idimagem);
        
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
                                    <th>IMAGEM</th>
                                    <th class='hidden-xs'>ID PRODUTOS</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idimagem']."</td>"; 
                                                            echo "<td><img src='./img/".$coluna['img']."'></td>";
                                                            echo "<td class='hidden-xs'>".$coluna['idprodutos']."</td>";                           
                                                           
                                                                         
												                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Imagem_Editar.php?idimagem='.$coluna['idimagem'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Imagem_Excluir.php?idimagem='.$coluna['idimagem'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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

    <?php }?>
