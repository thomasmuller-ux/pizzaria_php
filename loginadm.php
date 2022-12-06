<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pedidos.css">
</head>
<div id="igrame">
    <img src="./img/adm.png" alt="" id="igrame">
</div>
<div id="main-container">
    <div class="container">
      <div class="row">
            <div class="col-md-12">
                <h2>Login</h2>
                <p>Por favor, digite a senha de ADM</p>
                <label for="floatingInput">Senha de ADM</label>
                <input class="form-control" name="senha" id="floatingInput" type="password" placeholder="Digite a senha de ADM">
            </div>
            <div class="btn">
                <button class="montar" onclick="func()" id="entrarAdm">Entrar</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function func(){
        var senha = document.getElementById("floatingInput").value;
        if(senha == "info1234"){
            window.location.href = "dashboard.php";
        }else{
            alert("Essa senha não corresponde.");
        }
    }
</script>
</html>