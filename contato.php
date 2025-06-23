<?php include('header.php'); ?>

<main>
  <section class="contato">
    <h2>Fale Conosco</h2>
    <form action="enviar.php" method="POST" id="formulario">
      <div class="grupo">
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="grupo">
        <input type="tel" name="telefone" placeholder="Telefone" required>
        <select name="interesse" required>
          <option value="">Tipo de veículo</option>
          <option value="carro">Carro</option>
          <option value="caminhao">Caminhão</option>
        </select>
      </div>
      <textarea name="mensagem" placeholder="Sua mensagem" rows="4" required></textarea>
      <label class="checkbox"><input type="checkbox" required> Aceito os termos</label>
      <button type="submit" class="btn">Enviar</button>
    </form>
  </section>
</main>

<script src="scripts.js"></script>
<?php include('footer.php'); ?>
