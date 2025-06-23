<?php include('header.php'); ?>

<h2>Fale Conosco</h2>

<form action="enviar.php" method="POST" id="formulario">
  <input type="text" name="nome" placeholder="Seu nome" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <input type="tel" name="telefone" placeholder="Telefone" required>
  <select name="interesse" required>
    <option value="">Escolha o tipo de veículo</option>
    <option value="Caminhão">Caminhão</option>
    <option value="Carro">Carro</option>
  </select>
  <textarea name="mensagem" placeholder="Mensagem" required></textarea>
  <label><input type="checkbox" required> Aceito os termos</label>
  <button type="submit">Enviar</button>
</form>

<script src="scripts.js"></script>

<?php include('footer.php'); ?>
