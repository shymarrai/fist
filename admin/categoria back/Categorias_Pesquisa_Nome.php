<?php
require "Categorias.Class.php";

        $nome = $_POST['nome']; 
        $categorias = new Categorias();
        $dados = $categorias->pesquisarCategorias($nome);

?>

    <?php $title = "Pesquisa de Categorias"; ?>
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
                                                            
												echo "</tr>";
                                                
											
											}

								?>

                                                        <?php }                                                                        
                                    ?>
                                                </table>

                                                <a href="Categorias_Form_Pesquisa_Nome.php"> <input type="button" class="btn btn-info" value="Voltar"></a>

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
