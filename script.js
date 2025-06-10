document.getElementById("formulario").addEventListener("submit", function(event) {
    let email = document.getElementById("email").value;
    let senha = document.getElementById("senha").value;
    let cpf = document.getElementById("cpf").value;
    let telefone = document.getElementById("telefone").value;
    let erro = "";

    if (!email.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)) {
        erro += "Email inválido.\n";
    }
    if (senha.length < 6) {
        erro += "A senha deve ter pelo menos 6 caracteres.\n";
    }
    if (!cpf.match(/^\d{11}$/)) {
        erro += "CPF inválido.\n";
    }
    if (!telefone.match(/^\d{10,11}$/)) {
        erro += "Telefone inválido.\n";
    }

    if (erro !== "") {
        alert(erro);
        event.preventDefault();
    }
});
