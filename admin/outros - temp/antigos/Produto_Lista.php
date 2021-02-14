<?php
    require "Produto.Class.php";

    $produtos = new Produtos ();
    $dados = $produtos->lista();
?>

    <?php $title = "Listagem de Produtos"; ?>
    <?php include "includes/header.php" ?>


    <section class="container-fluid">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">

                        <div class="panel-body">

                            <div class="container theme-showcase" role="main">

                                <div class="page-header">
                                    <center>
                                        <h2>Listagem de Produtos</h2>
                                    </center>
                                </div>
                                <br><br>


                                <?php if($dados==null){ ?>
                                <p>Nenhum produto cadastrado</p>

                                <?php } else{ ?>

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
                                                                <th>VALOR</th>
                                                                <th>MODELO</th>
                                                                <th>DETALHES</th>
                                                                <th>CATEGORIA</th>

                                                            </tr>
                                                        </thead>
                                                        <?php

                                                         foreach($dados as $dado => $coluna){
                                                                        echo "<tr>";
                                                                        echo "<td>".$coluna['idprodutos']."</td>"; 
                                                                        echo "<td>".$coluna['nome']."</td>";
                                                                        echo "<td>".$coluna['valor']."</td>";
                                                                        echo "<td>".$coluna['modelo']."</td>";
                                                                        echo "<td>".$coluna['detalhes']."</td>";																		
                                                                        
                                                                /*------- GAMBIARRA ATE ACHAR OUTRA SOLUCAO --------*/
                                                                                                                                                                                                                                                              
                                                                include_once("conexao.php");         
                                                                        $idcat = $coluna['idcategorias'];
                                                                        $consulta3 = "SELECT nome FROM categorias WHERE idcategorias = $idcat";
                                                                        $con3 = $conn->query($consulta3) or die($conn->error);

                                                                         while($dados = $con3->fetch_array()){
                                                                            
                                                                             echo "<td>".$dados["nome"]."</td>";	
                                                                        }         
                                                                         
                                                             /*----------------------------------------------------*/
                                                             
                                                                        echo '<td>                                                                             
                                                                          <a href="Produto_Editar.php?idprodutos='.$coluna['idprodutos'].'"> <input type="submit" class="btn btn-warning" value="Editar"/></a>  
                                                                            
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "includes/footer.php" ?>
