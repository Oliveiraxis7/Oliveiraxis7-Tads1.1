<?php include('header.php'); ?>

<h2>Fale Conosco</h2>
<form action="enviar.php" method="POST" id="formulario">
  <input type="text" name="nome" placeholder="Nome completo" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <input type="tel" name="telefone" placeholder="Telefone" required>
  <select name="servico" required>
    <option value="">Tipo de Serviço</option>
    <option value="caminhao">Compra de Caminhão</option>
    <option value="seguro">Seguro</option>
  </select>
  <textarea name="mensagem" placeholder="Mensagem" required></textarea>
  <label><input type="checkbox" required> Aceito os termos</label>
  <button type="submit">Enviar</button>
</form>

<script src="scripts.js"></script>
<?php include('footer.php'); ?>
