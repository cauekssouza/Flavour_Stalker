function Validar() {
    var senha = document.getElementById("nova_senha").value;
    var confirmar_senha = document.getElementById("confirmar_senha").value;

    // Senha
    if (senha == "") {
        console.log("Campo Vazio");
        return false; // Retornar falso se o campo estiver vazio
    } else {
        // Validate password length using regular expression
        var passwordRegex = /^.{8,}$/;
        if (!passwordRegex.test(senha)) {
            if (senha.length < 8) {
                alert("Senha Muito Curta");
            } else {
                alert("Senha Muito Longa");
            }
            return false;
        }

        // Confirmar senha
        if (confirmar_senha != senha) {
            alert("As Senhas não Coincidem");
            return false; // Retornar falso se as senhas não coincidirem
        } else {
            alert("Senha Correta");
            // Redirecionar apenas se a senha estiver correta
            window.location.href = "login.php";
            return true; // Retornar verdadeiro se a senha estiver correta
        }
    }
}
