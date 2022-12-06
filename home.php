<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}
include_once("process/pizza.php");
$method = $_SERVER["REQUEST_METHOD"];

  
  if($method === "GET") {

    $saboresQuery = $conexao->query("SELECT * FROM sabores;");

    $sabores = $saboresQuery->fetchAll();

    $pedidos1Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 1;");

    $pedidos1 = $pedidos1Query->fetchAll();

    $pedidos2Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 2;");

    $pedidos2 = $pedidos2Query->fetchAll();

    $pedidos3Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 3;");

    $pedidos3 = $pedidos3Query->fetchAll();

    $pedidos4Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 4;");

    $pedidos4 = $pedidos4Query->fetchAll();

    $pedidos5Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 5;");

    $pedidos5 = $pedidos5Query->fetchAll();

    $pedidos6Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 6;");

    $pedidos6 = $pedidos6Query->fetchAll();

    $pedidos7Query = $conexao->query("select count(sabor_id) from pizza_sabor where sabor_id = 7;");

    $pedidos7 = $pedidos7Query->fetchAll();

  }
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['', 'Pedidos'],
      ['<?php print_r($sabores[0]['nome'])?>',  <?php print_r($pedidos1[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[1]['nome'])?>',  <?php print_r($pedidos2[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[2]['nome'])?>',  <?php print_r($pedidos3[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[3]['nome'])?>',  <?php print_r($pedidos4[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[4]['nome'])?>',  <?php print_r($pedidos5[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[5]['nome'])?>',  <?php print_r($pedidos6[0]["count(sabor_id)"])?>],
      ['<?php print_r($sabores[6]['nome'])?>',  <?php print_r($pedidos7[0]["count(sabor_id)"])?>],
    ]);

    var options = {
      title: '',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="./img/pngtree-cartoon-yellow-pizza-illustration-png-image_4634672-removebg-preview.png" type="png">
    <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
    <title>Pizzaria do João</title>
</head>
<body>
    <header>
            <div class="content">
                <div class="logo">
                    <img src="./img/pngtree-cartoon-yellow-pizza-illustration-png-image_4634672-removebg-preview.png" alt="Cupcake">
                    <h3>Pizzaria do João</h3>
                </div>
                <ul class="list-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#cardapio">Cardápio</a></li>
                    <li><a href="#contatos">Pedidos</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                </ul>

                <div class="menu-toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>

            </div>
        
    </header>

    <section class="first-section" id="home">
        
    <div class="conteudo-principal">
            <h1>Faça seu pedido na Pizzaria do João</h1>
            <h2>As melhores pizzas de Taquara</h2>
            <div class="btn">
                <button class="montar"><a href="pedidos.php">Pedir</a></button>
            </div>
    </div>    
    </section>       

    <section class="cardapio" id="cardapio">
        <h2>Cardápio</h2>

            <div class="itens-cardapio">
                <div class="4queijos">
                    <img src="./img/quatroqueijos.png" alt="frango">
                    <div class="info">
                        <h3>4 Queijos</h3>
                    </div>   
                </div>
                <div class="frango">
                    <img src="./img/frangocomcatupiry.png" alt="calabresa">
                    <div class="info">
                        <h3>Frango com Catupiry</h3>
                    </div> 
                
                </div>
                <div class="calabresa">
                    <img src="./img/calabresaa.png" alt="portuguesa">
                    <div class="info">
                        <h3>Calabresa</h3>
                    </div> 
                
                </div>
                <div class="lombinho">
                    <img src="./img/lombinho.png" alt="strogonoff">
                    <div class="info">
                        <h3>Lombinho</h3>
                    </div> 
                
                </div>
                <div class="file">
                    <img src="./img/filecheddar.png" alt="strogonoff">
                    <div class="info">
                        <h3>Filé com Cheddar</h3>
                    </div> 
                
                </div>
                <div class="portuguesa">
                    <img src="./img/portuguesa.png" alt="strogonoff">
                    <div class="info">
                        <h3>Portuguesa</h3>
                    </div> 
                
                </div>
                <div class="margherita">
                    <img src="./img/margherita.png" alt="strogonoff">
                    <div class="info">
                        <h3>Margherita</h3>
                    </div> 
                
            </div>   
            </div>

    </section>
    <section class="cardapio" id="grafic">
        <h2>Pizzas mais pedidas</h2>
        <div id="curve_chart" style="width: 900px; height: 500px;"></div>
    </section>
    <footer>
        <h4>Desenvolvido por -> Lívia Thomasi Pinto</h4>
    </footer>

    <script src="./js/script.js"></script>
</body>
</html>