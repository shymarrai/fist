<?php
require "Usuario.Class.php";

        $nome = $_POST['nome']; 
    if ($nome != "") {
        $usuario = new Usuario();
        $dados = $usuario->pesquisarPorNome($nome);
        

?>
    <?php 
$title ="Pesquisa de Usuário"; ?>
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
                                                            <th>EMAIL</th>
                                                            <th>LOGIN</th>
                                                            <th>SENHA</th>
                                                            <th>TELEFONE</th>
                                                            <th>ENDEREÇO</th>
                                                            <th>NÍVEL</th>

                                                        </tr>
                                                    </thead>
                                                    <?php
    
								
								 foreach($dados as $dado => $coluna){
												echo "<tr>";
												echo "<td>".$coluna['idusuario']."</td>"; 
												echo "<td>".$coluna['nome']."</td>";
												echo "<td>".$coluna['email']."</td>";
												echo "<td>".$coluna['login']."</td>"; 
												echo "<td>".$coluna['senha']."</td>";
												echo "<td>".$coluna['telefone']."</td>";
												echo "<td>".$coluna['endereco']."</td>";
												echo "<td>".$coluna['nivel']."</td>";
												
												echo "</tr>";
											
											}

								?>

                                                        <?php }
                                
                                ?>
                                                </table>
                                                <a href="Usuario_Form_Pesquisa_Nome.php"> <input type="button" class="btn btn-info" value="Voltar"></a>

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
    <?php } ?>
    <!-- div nao fechada no header -->
    </div>

    <?php include "includes/footer.php" ?>
