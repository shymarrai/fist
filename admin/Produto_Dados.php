<?php
require "Produto.Class.php";

include_once("conexao.php");   /* PARA CHAMAR DADOS DE OUTRAS TABELAS */

        $idprodutos = $_POST['idprodutos']; 
       
    if ($idprodutos == "") {
        $produtos = new Produtos();
        $dados = $produtos->lista();            
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
                                    <th class='hidden-xs'>VALOR</th>
                                    <th class="hidden-xs">MODELO</th>
                                    <th class="hidden-xs">DETALHES</th>
                                    <th class="hidden-xs">QUANTIDADE</th>
                                    <th class="hidden-xs">CATEGORIA</th>
                                    <th class="hidden-xs">MARCA</th>
                                    <th class="hidden-xs">COLECAO</th>
                                    <th class="hidden-xs">IMAGEM 1</th>
                                    <th class="hidden-xs">IMAGEM 2</th>
                                    <th class="hidden-xs">IMAGEM 3</th>
                                    <th class="hidden-xs">IMAGEM 4</th>
                                    <th class="hidden-xs">PEDIDO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                             
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idprodutos']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['valor']."</td>";                                                            
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['modelo']."</td>";
												            echo "<td class='hidden-xs hidden-sm'>".$coluna['detalhes']."</td>";
                                                             echo "<td class='hidden-xs hidden-sm'>".$coluna['quantidade']."</td>";
                                                            /* CATEGORIA*/
                                                             //include_once("conexao.php");         
                                                            $idcat = $coluna['categoriasid'];
                                                            $consulta3 = "SELECT * FROM categorias WHERE idcategorias = $idcat";
                                                            $con3 = $conn->query($consulta3) or die($conn->error);

                                                             while($dados = $con3->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["nomecat"]."</td>";
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["marca"]."</td>";
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["colecao"]."</td>";
                                                                        } 
                                                             /*--------------*/
                                                            echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img1']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img2']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img3']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img4']."' width='50' height='auto' /></td>";	
                                                             
                                                              echo "<td class='hidden-xs hidden-sm'>".$coluna['idped']."</td>";
                                                                         
												                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Produto_Editar.php?idprodutos='.$coluna['idprodutos'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Produto_Excluir.php?idprodutos='.$coluna['idprodutos'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $produtos = new Produtos();
        $dados = $produtos->pesquisarProduto($idprodutos);
        
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
                                    <th class='hidden-xs'>VALOR</th>
                                    <th class="hidden-xs">MODELO</th>
                                    <th class="hidden-xs">DETALHES</th>
                                    <th class="hidden-xs">QUANTIDADE</th>
                                    <th class="hidden-xs">CATEGORIA</th>
                                    <th class="hidden-xs">MARCA</th>
                                    <th class="hidden-xs">COLECAO</th>
                                    <th class="hidden-xs">IMAGEM 1</th>
                                    <th class="hidden-xs">IMAGEM 2</th>
                                    <th class="hidden-xs">IMAGEM 3</th>
                                    <th class="hidden-xs">IMAGEM 4</th>
                                    <th class="hidden-xs">PEDIDO</th>

                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                             
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idprodutos']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['valor']."</td>";                                                            
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['modelo']."</td>";
												            echo "<td class='hidden-xs hidden-sm'>".$coluna['detalhes']."</td>";
                                                             echo "<td class='hidden-xs hidden-sm'>".$coluna['quantidade']."</td>";
                                                            /* CATEGORIA*/
                                                             //include_once("conexao.php");    
                                                             
                                                            $idcat = $coluna['categoriasid'];
                                                            $consulta3 = "SELECT * FROM categorias WHERE idcategorias = $idcat";
                                                            $con3 = $conn->query($consulta3) or die($conn->error);

                                                             while($dados = $con3->fetch_array()){
                                                                            
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["nomecat"]."</td>";
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["marca"]."</td>";
                                                                 echo "<td class='hidden-xs hidden-sm'>".$dados["colecao"]."</td>";
                                                                        } 
                                                             /*--------------*/
                                                            echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img1']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img2']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img3']."' width='50' height='auto' /></td>";	
                                                             echo "<td class='hidden-xs hidden-sm'><img src='img/".$coluna['img4']."' width='50' height='auto' /></td>";	
                                                             
                                                              echo "<td class='hidden-xs hidden-sm'>".$coluna['idped']."</td>";
                                                                         
												                                                                      
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Produto_Editar.php?idprodutos='.$coluna['idprodutos'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Produto_Excluir.php?idprodutos='.$coluna['idprodutos'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
