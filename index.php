<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> <!-- puxa a imagem de visualizar e esconder do site bootstrap-icons -->
        <link rel="stylesheet" href="css/stylelogin.css">
    </head>

    <body class="bg-light d-flex justify-content-center align-items-center vh-100">
        <script src="js/login2.js"></script>

            <form action="php/validaAcesso.php" method="POST">

                <div class="titulo">
                    <h1> Faça seu Login </h1>
                    <div class="barra-horizontal"></div>
                </div>

                <div class="mb-3">
                    <label for="iEmail" class="form-label">E-mail*</label>
                        <input 
                            type="email"
                            class="form-control"
                            id="iEmail"
                            name="nLogin"
                            placeholder="Digite seu e-mail"
                            maxlength="50"
                            required
                        >
                </div>

                <div class="mb-3">
                    <label for="iSenha" class="form-label">Senha*</label>

                    <div class="input-group">

                        <div class="input-senha">
                            <input type="password" id="iSenha" name="nSenha" placeholder="Digite sua senha" maxlength="8" required/>
                            <i class="bi bi-eye" id="iIcone1" onclick="toggleSenha()"></i> 
                        </div>
                    </div>
                </div>

                <div class="lembrar-me">
                    <input type="checkbox" id="cLembrar">
                    <p>Lembrar-me</p>
                </div>

                <button>ENTRAR</button>

                <p class="esqueceu">Esqueceu sua senha?</p>

            </form>
        </div>


</body>
</html>