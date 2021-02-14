<?php
$title ="Usuario Dados";
require "Usuario.Class.php";

        $nome = $_POST['nome']; 
    if ($nome == "") {
        $usuario = new Usuario();
        $dados = $usuario->lista();            
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
                                    <th class='hidden-xs'>RG</th>
                                    <th>CPF</th>
                                    <th class="hidden-xs">EMAIL</th>
                                    <th class="hidden-xs">LOGIN</th>
                                    <th class="hidden-xs">SENHA</th>
                                    <th class="hidden-xs hidden-sm">TELEFONE</th>
                                    <th class="hidden-xs hidden-sm hidden-md">ENDEREÇO</th>
                                    <th class="hidden-xs hidden-sm hidden-md">NÍVEL</th>


                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idusuario']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['rg']."</td>";
                                                            echo "<td>".$coluna['cpf']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['email']."</td>";
												            echo "<td class='hidden-xs'>".$coluna['login']."</td>";
															echo "<td class='hidden-xs'> ****** </td>";
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['telefone']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['endereco']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['nivel']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                           <a href="Usuario_Editar.php?idusuario='.$coluna['idusuario'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a> 
                                                                            
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



    <?php }else{ 
        $usuario = new Usuario();
        $dados = $usuario->pesquisarPorNome($nome);
        
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
                                    <th class='hidden-xs'>RG</th>
                                    <th>CPF</th>
                                    <th class="hidden-xs">EMAIL</th>
                                    <th class="hidden-xs">LOGIN</th>
                                    <th class="hidden-xs">SENHA</th>
                                    <th class="hidden-xs hidden-sm">TELEFONE</th>
                                    <th class="hidden-xs hidden-sm hidden-md">ENDEREÇO</th>
                                    <th class="hidden-xs hidden-sm hidden-md">NÍVEL</th>


                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idusuario']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['rg']."</td>";
                                                            echo "<td>".$coluna['cpf']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['email']."</td>";
												            echo "<td class='hidden-xs'>".$coluna['login']."</td>";
															echo "<td class='hidden-xs'> ****** </td>";
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['telefone']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['endereco']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['nivel']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Usuario_Editar.php?idusuario='.$coluna['idusuario'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                        
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

    <?php } ?>
