document.getElementById("formulario").addEventListener("submit", function (e) {
  const campos = document.querySelectorAll("input[required], textarea[required], select[required]");
  for (const campo of campos) {
    if (!campo.value) {
      alert("Por favor, preencha todos os campos obrigatórios.");
      campo.focus();
      e.preventDefault();
      return;
    }
  }
});
