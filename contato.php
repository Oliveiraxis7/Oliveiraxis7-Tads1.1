<?php include('header.php'); ?>

<main>
  <section class="contato">
    <h2>Fale Conosco</h2>
    <form action="https://formspree.io/f/xzzgkpzv" method="POST" id="formulario">
      <div class="linha">
        <div class="campo">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="campo">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
        </div>
      </div>
      <div class="linha">
        <div class="campo">
          <label for="telefone">Telefone</label>
          <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
        </div>
        <div class="campo">
          <label for="interesse">Interesse</label>
          <select id="interesse" name="interesse" required>
            <option value="">Selecione</option>
            <option value="carro">Carro</option>
            <option value="caminhao">Caminhão</option>
          </select>
        </div>
      </div>
      <div class="campo">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="4" placeholder="Digite sua mensagem..." required></textarea>
      </div>

      <!-- (anti-spam) -->
      <input type="text" name="_gotcha" style="display:none">

      <!-- Redirecionamento opcional após envio -->

      <div class="termos">
        <label><input type="checkbox" required> Aceito os termos e condições.</label>
      </div>
      <button type="submit" class="btn">Enviar</button>
    </form>
  </section>
</main>

<?php include('footer.php'); ?>
