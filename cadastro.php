<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
    include_once '_head.php'
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Controle Financeiro : CADASTRO</h2>

                <h5>( Faça seu cadastro para acesso )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Novo usuário ? Faça seu cadastro </strong>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Seu nome" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Seu e-mail" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Cadastre sua senha (mínimo 6 digitos)" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Repita sua senha" />
                            </div>

                            <a href="index.php" class="btn btn-success ">Cadastre</a>
                            <hr />
                            Já possui uma conta ? <a href="login.php">Faça login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>