<?php

  $num1 = filter_input(INPUT_POST,"N1");
  $num2 = filter_input(INPUT_POST,"N2");

  $soma = "";
      $soma = $num1+$num2;

  $multiplicacao = "";
      $multiplicacao = $num1*$num2;

 $subtracao = "";
      $subtracao = $num1-$num2;

 $divisao = "";
      $divisao = $num1/$num2;
  ?>

  <head>
    <meta charset="utf-8">
    <title>Questão 01</title>
  </head>
  <body>
    <form class="formulario" method="post">

    <label>Coloque o primeiro algarismo: 
    <input class="formulario-input" type="text" name="N1"/>
    </label><br />

    <label>Coloque o segundo algarismo: 
    <input class="formulario-input" type="text" name="N2"/>
    </label><br/>

    <input class="formulario-button" type="submit" name="btnCalcular" value="Calcular"/><br>

    <label>O resultado da soma de:<br><?=$soma;?></label><br>
      </form>

    <label>O resultado da subtracao de:<br><?=$subtracao;?></label><br>
      </form>

    <label>O resultado da divisao de:<br><?=$divisao;?></label><br>
      </form>

    <label>O resultado da multiplicacao de:<br><?=$multiplicacao;?></label><br>
      </form>

  </body>

</html>

<?php

  $prova1 = rand(0,10);
  $prova2 = rand(0,10);

  $resultado = ($prova1 + $prova2)/2;

  if ($resultado <= 3)

    $desempenho = "Péssimo";

  elseif($resultado <= 5)

    $desempenho = "Ruim";

  elseif($resultado <= 7)

    $desempenho = "Médio";

  elseif($resultado <= 8 )

    $desempenho = "Bom";

  else

    $desempenho = "Excelente";

  echo "Notas: $prova1 e $prova2.

  A média foi $resultado.

  Portanto, seu desempenho foi $desempenho";

?>
