<?php
    require "Usuario.Class.php";
    $usuario = new Usuario ();
    $dados = $usuario->lista();
?>

    <?php $title = "Listagem de Usuários"; ?>
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
                                        <h2>Listagem de Usuários</h2>
                                    </center>
                                </div>
                                <br><br>


                                <?php if($dados==null){ ?>
                                <p>Nenhum usuário cadastrado</p>

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
                                                                <th>RG</th>
                                                                <th>CPF</th>
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
                                                                        echo "<td>".$coluna['rg']."</td>";
                                                                        echo "<td>".$coluna['cpf']."</td>";
                                                                        echo "<td>".$coluna['email']."</td>";
																		echo "<td>".$coluna['login']."</td>";
																		echo "<td> ****** </td>";
                                                                        echo "<td>".$coluna['telefone']."</td>";
                                                                        echo "<td>".$coluna['endereco']."</td>";
                                                                        echo "<td>".$coluna['nivel']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Usuario_Editar.php?idusuario='.$coluna['idusuario'].'"> <input type="submit" class="btn btn-warning" value="Editar"/></a>  
                                                                            
                                                                         <a href="Usuario_Excluir.php?idusuario='.$coluna['idusuario'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
