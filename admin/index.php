<?php
 $title =  "Fist Admin";
include "includes/header.php" ?>

    <div class="col-md-10 bg">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Bem Vindo Ao Sistema Restrito, Sr(a)
                            <strong><?php
    	                       include_once("conexao.php");
                                $log = $_SESSION['login'];
                                $result_nuser = "SELECT nome FROM usuario WHERE login = '$log'";
                                $resultado_nuser= mysqli_query($conn, $result_nuser);
                                $row_nuser = mysqli_fetch_assoc($resultado_nuser);	

                            echo $row_nuser['nome']; ?>! </strong></div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <img class="responsive" src="images/fundo.jpg" style="width:100%;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM ESQR DADOS -->
    </div>

    <?php include "includes/footer.php" ?>
