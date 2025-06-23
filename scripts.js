document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formulario");
  if (form) {
    const telefoneInput = form.querySelector('input[name="telefone"]');
    const emailInput = form.querySelector('input[name="email"]');

    telefoneInput.addEventListener("input", () => {
      let valor = telefoneInput.value.replace(/\D/g, "");
      valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");
      valor = valor.replace(/(\d{5})(\d)/, "$1-$2");
      telefoneInput.value = valor.substring(0, 15);
    });

    form.addEventListener("submit", (e) => {
      const campos = form.querySelectorAll("input[required], select[required], textarea[required]");
      let valido = true;

      campos.forEach(campo => {
        if (!campo.value.trim()) {
          campo.style.border = "2px solid red";
          valido = false;
        } else {
          campo.style.border = "2px solid green";
        }
      });

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
        alert("Informe um e-mail válido.");
        emailInput.focus();
        e.preventDefault();
        return;
      }

      if (!valido) {
        alert("Preencha todos os campos obrigatórios corretamente.");
        e.preventDefault();
      }
    });
  }

  // Modais com animação suave
  const abrir = document.querySelectorAll('.abrir-modal');
  const fechar = document.querySelectorAll('.fechar-modal');

  abrir.forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.modal;
      const modal = document.getElementById('modal-' + id);
      if (modal) {
        modal.classList.add('show');
        modal.style.display = 'flex';
      }
    });
  });

  fechar.forEach(btn => {
    btn.addEventListener('click', () => {
      const modal = btn.closest('.modal');
      modal.classList.remove('show');
      setTimeout(() => { modal.style.display = 'none'; }, 300);
    });
  });

  window.addEventListener('click', e => {
    if (e.target.classList.contains('modal')) {
      e.target.classList.remove('show');
      setTimeout(() => { e.target.style.display = 'none'; }, 300);
    }
  });
});
