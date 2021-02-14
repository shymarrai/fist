<?php
require "Cliente.Class.php";

        $nome = $_POST['nome']; 
    if ($nome == "") {
        $cliente = new Cliente ();
        $dados = $cliente->lista();            
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
                                    <th class="hidden-xs">SENHA</th>
                                    <th class="hidden-xs">TELEFONE</th>
                                    <th class="hidden-xs hidden-sm">CEP</th>
                                    <th class="hidden-xs hidden-sm hidden-md">ENDEREÇO</th>
                                    <th class="hidden-xs hidden-sm hidden-md">CIDADE</th>
                                    <th class="hidden-xs hidden-sm hidden-md">ESTADO</th>


                                </tr>
                            </thead>
                            <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idcliente']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['rg']."</td>";
                                                            echo "<td>".$coluna['cpf']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['email']."</td>";												            
															echo "<td class='hidden-xs'> ****** </td>";
                                                            echo "<td class='hidden-xs'>".$coluna['telefone']."</td>"; 
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['cep']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['endereco']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['cidade']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['estado']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                         <a href="Cliente_Editar.php?idcliente='.$coluna['idcliente'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Cliente_Excluir.php?idcliente='.$coluna['idcliente'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
        $cliente = new Cliente ();
        $dados = $cliente->pesquisarPorNome($nome);
        
?>

    <?php if($dados!=null){ ?>

    <table class="lista-dados">

        <div class="col-md-10">

            <div class="row">
                <div class="col-md-6">

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
                                                        <th class='hidden-xs'>RG</th>
                                                        <th>CPF</th>
                                                        <th class="hidden-xs">EMAIL</th>
                                                        <th class="hidden-xs">SENHA</th>
                                                        <th class="hidden-xs">TELEFONE</th>
                                                        <th class="hidden-xs hidden-sm">CEP</th>
                                                        <th class="hidden-xs hidden-sm hidden-md">ENDEREÇO</th>
                                                        <th class="hidden-xs hidden-sm hidden-md">CIDADE</th>
                                                        <th class="hidden-xs hidden-sm hidden-md">ESTADO</th>


                                                    </tr>
                                                </thead>
                                                <?php

                                                         foreach($dados as $dado => $coluna){
                                                            echo "<tr>";
                                                            echo "<td>".$coluna['idcliente']."</td>"; 
                                                            echo "<td>".$coluna['nome']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['rg']."</td>";
                                                            echo "<td>".$coluna['cpf']."</td>";
                                                            echo "<td class='hidden-xs'>".$coluna['email']."</td>";												            
															echo "<td class='hidden-xs'> ****** </td>";
                                                            echo "<td class='hidden-xs'>".$coluna['telefone']."</td>"; 
                                                            echo "<td class='hidden-xs hidden-sm'>".$coluna['cep']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['endereco']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['cidade']."</td>";
                                                            echo "<td class='hidden-xs hidden-sm hidden-md'>".$coluna['estado']."</td>";
                                                                         
																			
                                                                      //echo "<td>".$coluna['senha']."</td>"; 
                                                                           
                                                                        echo '<td>                                                                             
                                                                          <a href="Cliente_Editar.php?idcliente='.$coluna['idcliente'].'"> <input type="submit" class="btn btn-primary" value="Visualizar"/></a>  
                                                                            
                                                                         <a href="Cliente_Excluir.php?idcliente='.$coluna['idcliente'].'"> <input type="submit" class="btn btn-danger" value="Excluir"/></a>
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
