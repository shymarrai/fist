<?php 
$title ="Listar / Pesquisa de Categorias"; ?>
<?php include "includes/header.php" ?>


<script>
    $(document).ready(function() {
        //pegar o valor do campo a cada tecla digitada
        $("#nome").keyup(function() {
            //alert('ok');
            var vnome = $("#nome").val(); //guardando na variavel vnome o valor do id nome
            //alert(vnome);
            //passar o valor do vnome para o arquivo que vai ao banco
            //url, dados, função de retorno
            $.post("Categorias_Dados.php", {
                    nome: vnome
                },
                function(saida) {
                    $("#conteudo").html(saida);
                });
        });
    });

</script>

<section class="container-fluid">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">

                    <div class="panel-body">

                        <div class=" theme-showcase" role="main">

                            <div class="page-header">
                                <center>
                                    <h2>Listar / Pesquisar Categoria</h2>
                                </center>
                            </div>
                            <br><br>
                            <div class="container form-group">
                                <form class="form-inline" autocomplete="off">
                                    <label class=" control-label">Informe o nome:</label> &nbsp;
                                    <input style="width:auto;" type="text" id="nome" class="form-control">
                                </form>
                            </div>

                            <br>
                            <hr>
                            <div class="form-group text-center">
                                <div id="conteudo">
                                    <!--Local onde serão exibidos os dados-->
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

<?php include "includes/footer.php"; ?>
