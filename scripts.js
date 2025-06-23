document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formulario");
  const telefoneInput = form.querySelector('input[name="telefone"]');
  const emailInput = form.querySelector('input[name="email"]');

  // Máscara de telefone (ex: (99) 99999-9999)
  telefoneInput.addEventListener("input", () => {
    let valor = telefoneInput.value.replace(/\D/g, "");
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");
    valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
    telefoneInput.value = valor.substring(0, 15);
  });

  // Validação simples de e-mail
  function emailValido(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  // Estilo visual
  function marcarInvalido(campo) {
    campo.style.border = "2px solid red";
  }

  function marcarValido(campo) {
    campo.style.border = "2px solid green";
  }

  form.addEventListener("submit", (e) => {
    const campos = form.querySelectorAll("input[required], select[required], textarea[required]");
    let valido = true;

    campos.forEach(campo => {
      if (!campo.value.trim()) {
        marcarInvalido(campo);
        valido = false;
      } else {
        marcarValido(campo);
      }
    });

    if (!emailValido(emailInput.value)) {
      marcarInvalido(emailInput);
      alert("🚨 Por favor, insira um e-mail válido.");
      emailInput.focus();
      e.preventDefault();
      return;
    }

    if (!valido) {
      alert("⚠️ Preencha todos os campos obrigatórios corretamente.");
      e.preventDefault();
      return;
    }

    // Confirmação final
    setTimeout(() => {
      alert("✅ Sua mensagem foi enviada com sucesso! Obrigado pelo contato.");
    }, 100);
  });
});
