<?php include('header.php'); ?>

<main>
  <section class="contato">
    <h2>Fale Conosco</h2>
    <form action="enviar.php" method="POST" id="formulario">
      <input type="text" name="nome" placeholder="Nome completo" required>
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="tel" name="telefone" placeholder="Telefone" required>
      <select name="interesse" required>
        <option value="">Tipo de veículo</option>
        <option value="carro">Carro</option>
        <option value="caminhao">Caminhão</option>
      </select>
      <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
      <label><input type="checkbox" required> Aceito os termos</label>
      <button type="submit">Enviar</button>
    </form>
  </section>
</main>

<script src="scripts.js"></script>

<?php include('footer.php'); ?>
