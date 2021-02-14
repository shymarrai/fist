<?php
include_once("conexao.php");
$nome = $_POST["nome"];

    $sql = "select * from usuario where nome like '" . $nome . "%'";
    $consulta = $pdo->query($sql);
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Miniatura</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($consulta->rowCount() > 0) {
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>\n ";
                    echo "<td>\n" . $linha['cpf'] . "</td>";
                    echo "<td>\n" . $linha['nome'] . "</td>";
                    echo "<td>\n" . $linha['email'] . "</td>";
                    echo "<td >\n <img src='../imagemUsuario/min-p-" . $linha["imagem"] . "' class='img-circle' width='35' height='35'/></td>";
                    echo '<td> <a href="?pagina=vertudoFun&id=' . (md5("SenacPolitecnico").($linha["codigo"]+1998).md5("peppaPig490")) . '" class="btn btn-success">Ver tudo</a> <a href="?pagina=editarFun&id=' . (md5("SenacPolitecnico").($linha["codigo"]+1998).md5("peppaPig490")) . '" class="btn btn-primary">Editar</a> <a href="?pagina=excluirFun&id=' . (md5("SenacPolitecnico").($linha["codigo"]+1998).md5("peppaPig490")) . '" class="btn btn-danger">Apagar</a></td>';
                    echo '</tr>';
                }echo '</tbody> </table>';   
            }         
            else {
                echo '</tbody> </table>';
                echo "<span class='alert alert-danger col-md-12'>Nenhum Cliente encontrado!</span>"; 
            }
            ?>
