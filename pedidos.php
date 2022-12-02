<?php
  include_once("templates/header.php");
  include_once("process/pizza.php");
?>
  <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Peça sua pizza</h2>
          <form action="process/pizza.php" method="POST" id="pizza-form">
            <div class="form-group">
              <label for="borda">Borda:</label>
              <select name="borda" id="borda" class="form-control">
                <option value="">Selecione a borda</option>
                <?php foreach($bordas as $borda): ?>
                  <option value="<?= $borda["id"] ?>"><?= $borda["tipo"] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="massa">Massa:</label>
              <select name="massa" id="massa" class="form-control">
                <option value="">Selecione a massa</option>
                <?php foreach($massas as $massa): ?>
                  <option value="<?= $massa["id"] ?>"><?= $massa["tipo"] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="sabores">Sabores: (Máximo 3)</label>
              <select multiple name="sabores[]" id="sabores" class="form-control">
                <?php foreach($sabores as $sabor): ?>
                  <option value="<?= $sabor["id"] ?>"><?= $sabor["nome"] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Pedir">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>
