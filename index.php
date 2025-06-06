<?php
include_once("standard_code/header.php");
?>

<div class="container-login row-verse">
    <div class="container-login-imagem">
    </div>
    <div class="container-login-cadastro">
        <h1 class="poppins-semibold">Seja bem-vindo</h1>
        <div class="box-login">
            <h2 class="poppins-regular">Cadastro</h2>
            <form class="column g-3 form-login">
                <div class="col-auto">
                    <label for="staticUser2" class="visually-hidden">Usuario</label>
                    <input type="text" class="form-control" id="staticUser2" placeholder="Usuario">
                </div>
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" class="form-control" id="staticEmail2" placeholder="Email">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Senha</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Senha">
                </div>
                <div class="col-auto button-form">
                    <button type="submit" class="btn btn-primary mb-3">Criar conta</button>
                </div>
            </form>
            <p class="text-login">Já possui um cadastro? <a class="link" onclick="toggleCad()">Fazer login</a></p>
        </div>
    </div>
</div>
<?php
include_once("standard_code/footer.php")
?>