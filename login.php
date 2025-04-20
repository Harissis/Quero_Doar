<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Quero Doar!</title>
    <link rel="stylesheet" href="assets/style1.css">
    <link rel="icon" href="assets\images\icone.png" type="image/png">
</head>

<body>
    <div class="container">
        <div class="left-side">
            <img class="image-left" src="assets/images/imagemlogin.png" alt="Imagem à esquerda">
        </div>
        <div class="right-side">
            <form class="form" action="logar.php" method="post">
                <div class="card">
                    <div class="card-top">
                        <a href="index.php">
                            <img class="imglogin" src="assets/images/logocolorida.png" alt="Logo Colorida">
                        </a>
                        <h2 class="title">LOGIN</h2>
                    </div>

                    <div class="card-group">
                        <label>CPF ou CNPJ</label>
                        <input type="text" name="cpf_cnpj" id="cpf_cnpj"
                            oninput="this.value = this.value.replace(/[^\d]/g, '').replace(/^0+(\d)/, '$1');"
                            placeholder="Digite seu CPF ou CNPJ (apenas números)" required maxlength="14"
                            minlength="11" />

                        <div id="cpf_cnpj_error" style="color: red; display: none; font-size: small;">O CPF/CNPJ é
                            inválido por falta de caracteres.</div>

                        <script>
                            document.getElementById("cpfecnpj").addEventListener("blur", function () {
                                var input = this.value;
                                var errorDiv = document.getElementById("cpf_cnpj_error");
                                if (input.length < 11) {
                                    errorDiv.style.display = "block";
                                } else {
                                    errorDiv.style.display = "none";
                                }
                            });
                        </script>
                    </div>

                    <div class="card-group">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="card-group">
                        <label><input type="checkbox">Lembre-me</label>
                    </div>

                    <div class="card-group btn">
                        <button type="submit">ACESSAR</button>
                    </div>

                    <div class="card-group">
                        <p class="register-link">Não tem uma conta? <a href="#" class="register-link">Cadastre-se</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>