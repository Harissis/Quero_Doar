<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets\images\icone.png" type="image/png">
    <title>Formulário de Coleta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background: white;
        }

        .left-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .left-side img {
            width: 100%;
            /* Define a largura como 100% do contêiner */
            height: auto;
            /* Ajusta a altura automaticamente, mantendo a proporção */
            object-fit: cover;
            /* Opcional, ajusta como a imagem se encaixa no contêiner */
        }


        .right-side {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            padding: 70px;
            background-color: #fff;
            border-radius: 8px;
            position: relative;
            box-sizing: border-box;
            text-align: center;
        }

        .logo-button {
            width: 130px;
            height: 65px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: bold;
            margin-top: 0;
        }

        .form-group {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 10px;
            padding: 0 10px;
        }

        label {
            margin-bottom: 4px;
            font-size: 13px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 12px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #FA5058;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            transition: background-color 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
        }

        button:hover {
            background-color: #ff3445;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 6px;
            cursor: pointer;
        }

        select::-ms-expand {
            display: none;
        }

        @media screen and (max-width: 600px) {
            body {
                flex-direction: column;
            }

            .left-side,
            .right-side {
                flex: none;
                width: 100%;
            }

            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr));">
    <div class="left-side">
        <img src="assets/images/imagemformulario.png" alt="Imagem de Fundo">
    </div>
    <div class="container">
        <a href="./index.php" style="margin-bottom: 40px;">
            <img src="assets/images/logocolorida.png" class="logo-button" />
        </a>
        <h2>Formulário de Doação</h2>
        <form action="https://formsubmit.co/harissisgrego123@gmail.com" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomeCompleto">Nome completo:</label>
                <input type="text" id="nomeCompleto" name="Nome Completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="estadoConservacao">Estado de Conservação:</label>
                <input type="text" id="estadoConservacao" name="Estado de Conservação" required>
            </div>
            <div class="form-group">
                <label for="tipoItem">Tipo de item:</label>
                <input type="text" id="tipoItem" name="Tipo de Item" required>
            </div>
            <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <input type="text" id="tamanho" name="Tamanho" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <div>
                    <input type="radio" id="masculino" name="Gênero" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="Gênero" value="Feminino" required>
                    <label for="feminino">Feminino</label>
                </div>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição do item:</label>
                <textarea id="descricao" name="Descrição do Item" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="coleta">Local de Coleta:</label>
                <select id="coleta" name="Local de Coleta" required>
                    <option value="" disabled selected>Selecione o local de coleta</option>
                    <option value="UniEvangélica">UniEvangélica</option>
                    <option value="Câmara Municipal de Anápolis">Câmara Municipal de Anápolis</option>
                    <option value="UBS Jundiaí">UBS Jundiaí</option>
                    <option value="Espaço da Oportunidade">Espaço da Oportunidade</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do item:</label>
                <input type="file" id="imagem" name="Imagem" accept="image/*" required>
            </div>
            <input type="hidden" name="_subject" value="Novo Formulário de Coleta Recebido!">
            <input type="hidden" name="_captcha" value="false">
            <input type="text" name="_honey" style="display:none">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>