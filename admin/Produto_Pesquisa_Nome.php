<?php
require "Produto.Class.php";

        $nome = $_POST['nome']; 
        $produtos = new Produtos();
        $dados = $produtos->pesquisarProduto($nome);

?>

    <?php $title = "Pesquisa de Produto"; ?>
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
                                        <h2>Pesquisa por:
                                            <?php echo $nome; ?>
                                        </h2>
                                    </center>
                                </div>
                                <br><br>

                                <?php if(isset($dados)){

        ?>
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="panel-body">
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
                                                                        if($coluna['idcategorias'] == 1)
                                                                            echo "<td> Luxo </td>";
                                                                        elseif($coluna['idcategorias'] == 2)
                                                                            echo "<td> Casual </td>";
                                                                        elseif($coluna['idcategorias'] == 3)
                                                                            echo "<td> Outro </td>";                                                                                                                                                                                                       
                                                             /*----------------------------------------------------*/
                                                             
                                                                                                                                                                                                                        
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

                                                <a href="Produto_Form_Pesquisa_Nome.php"> <input type="button" class="btn btn-info" value="Voltar"></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- div nao fechada no header -->
    </div>

    <?php include "includes/footer.php" ?>
