<?php
require "Cliente.Class.php";

        $nome = $_POST['nome']; 
        $cliente = new Cliente();
        $dados = $cliente->pesquisarPorNome($nome);

?>

    <?php $title = "Pesquisa de Cliente"; ?>
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
                                                            <th>RG</th>
                                                            <th>CPF</th>
                                                            <th>EMAIL</th>
                                                            <th>SENHA</th>
                                                            <th>TELEFONE</th>
                                                            <th>CEP</th>
                                                            <th>ENDEREÇO</th>
                                                            <th>CIDADE</th>
                                                            <th>ESTADO</th>
                                                        </tr>
                                                    </thead>
                                                    <?php
    
								
								 foreach($dados as $dado => $coluna){
												echo "<tr>";
												echo "<td>".$coluna['idcliente']."</td>"; 
                                                echo "<td>".$coluna['nome']."</td>";
                                                echo "<td>".$coluna['rg']."</td>";
                                                echo "<td>".$coluna['cpf']."</td>";
                                                echo "<td>".$coluna['email']."</td>";
												echo "<td> ****** </td>";
                                                echo "<td>".$coluna['telefone']."</td>";
                                                echo "<td>".$coluna['cep']."</td>";            
                                                echo "<td>".$coluna['endereco']."</td>";
                                                echo "<td>".$coluna['cidade']."</td>"; 
                                                echo "<td>".$coluna['estado']."</td>";
                                                                         																			
                                                //echo "<td>".$coluna['senha']."</td>";												
                                                                                                 
												echo "</tr>";
                                                
											
											}

								?>

                                                        <?php }                                                                        
                                    ?>
                                                </table>

                                                <a href="Cliente_Form_Pesquisa_Nome.php"> <input type="button" class="btn btn-info" value="Voltar"></a>

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
