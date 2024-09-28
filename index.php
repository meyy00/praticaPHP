<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Seleção Brasileira de Futebol Feminino</h1>

    <?php
   
    $jogadoras = array("Marta", "Formiga", "Cristiane", "Debinha", "Andressa Alves",'Leticia izidoro', 'Luciana', 'Camila', 'Rafaelle', 'Tainara', 'Kethelen', 'Antonia', 'Lauren', 'Tamires', 'yasmin', 'bruninha', 'Ary Gomes', 'Luana');

   
    class Partida {
        public $adversario;
        public $gols_marcados; 
        public $gols_sofridos;
        public $vitoria;
        public $observacao; 

        public function __construct($adversario, $gols_marcados, $gols_sofridos, $vitoria, $observacao = null) {
            $this->adversario = $adversario;
            $this->gols_marcados = $gols_marcados;
            $this->gols_sofridos = $gols_sofridos;
            $this->vitoria = $vitoria;
            $this->observacao = $observacao;
        }

        public function getPlacar() {
            return $this->gols_marcados . "-" . $this->gols_sofridos;
        }
    }

    
    $partidas = array(
        new Partida("Argentina", 3, 1, true, "Ótima atuação"), 
        new Partida("Chile", 2, 0, true), 
        new Partida("Japão", 0, 2, false, "Jogo difícil"), 
    );

    echo "<h2>Jogadoras</h2>";
    echo "<ul>";
    foreach ($jogadoras as $jogadora) {
        echo "<li>$jogadora</li>";
    }
    echo "</ul>";

    // Listar as Partidas
    echo "<h2>Partidas</h2>";
    echo "<ul>";
    foreach ($partidas as $partida) {
        if ($partida->vitoria) {
            echo "<li>Vencemos contra {$partida->adversario} - Placar: {$partida->getPlacar()}</li>";
        } else {
            echo "<li>Perdemos contra {$partida->adversario} - Placar: {$partida->getPlacar()}</li>";
        }
        //observação
        if (!is_null($partida->observacao)) {
            echo " ({$partida->observacao})";
        }

        echo "</li>";
    }
    echo "</ul>";
    ?>

</html>