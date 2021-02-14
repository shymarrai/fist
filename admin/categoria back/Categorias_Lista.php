<?php
    require "Categorias.Class.php";
    $categorias = new Categorias ();
    $dados = $categorias->lista();
?>

    <?php $title = "Listagem de Categorias"; ?>
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
                                        <h2>Listagem das Categorias</h2>
                                    </center>
                                </div>
                                <br><br>


                                <?php if($dados==null){ ?>
                                <p>Nenhuma categoria cadastrada</p>

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
                                                                <th>DESCRICAO</th>
                                                                <th>MARCA</th>
                                                            </tr>
                                                        </thead>
                                                        <?php

                                                         foreach($dados as $dado => $coluna){
                                                                        echo "<tr>";
                                                                        echo "<td>".$coluna['idcategorias']."</td>"; 
                                                                        echo "<td>".$coluna['nome']."</td>";
                                                                        echo "<td>".$coluna['descricao']."</td>";
                                                                        echo "<td>".$coluna['marca']."</td>";
                                                                        
                                                                        echo '<td>                                                                             
                                                                          <a href="Categorias_Editar.php?idcategorias='.$coluna['idcategorias'].'"> <input type="submit" class="btn btn-warning" value="Editar"/></a>  
                                                                            
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "includes/footer.php" ?>
