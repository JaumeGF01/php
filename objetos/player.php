<?php
    class Player {
        private $Name;
        private $BirthDay;
        private $Country;
        private $Dorsal;
        private $Position;
        private $Goals;
        private $Matches;
        private $Minutes;
        private $YellowCard;
        private $RedCard;

    public function __construct($Name, $BirthDay, $Country, $Dorsal, $Position, $Goals, $Matches, $Minutes, $YellowCard, $RedCard){
        $this->Name = $Name;
        $this->BirthDay = $BirthDay;
        $this->Country = $Country;
        $this->Dorsal = $Dorsal;
        $this->Position = $Position;
        $this->Goals = $Goals;
        $this->Matches = $Matches;
        $this->Minutes = $Minutes;
        $this->YellowCard = $YellowCard;
        $this->RedCard = $RedCard;
    }

    public function Age(){
        $años = date("Y") - $this->BirthDay;
        return $años;
    }

    public function Score(){
        $goles = $this->Goals;
        $this->Goals = $goles + 1;
        return "Ha marcado un gol. Los goles actuales son: ". $this->Goals;
    }

    public function AddCard($color){
        if($color == 1){
            $tarjetas = $this->YellowCard;
            $this->YellowCard = $tarjetas + 1;
            return "El jugador ha recibido una tarjeta amarilla. Las tarjetas amarillas actuales son: ". $this->YellowCard;
        }else{
            $tarjetas = $this->RedCard;
            $this->RedCard = $tarjetas + 1;
            return "El jugador ha recibido una tarjeta roja. Las tarjetas rojas actuales son: ". $this->RedCard;
        }
    }

    public function PlayMinutes($min){
        $minutos = $this->Minutes;
        $this->Minutes = $minutos + $min;
        return "El jugador ha jugado más minutos. En total ha jugado: " . $this->Minutes . " Minutos";
    }

    public function Render(){
        return "<h3>Ficha del jugador:</h3>
        <table style = 'text-align: center; border: 1px solid black;'>
            <tr>
                <th>Nombre</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Dorsal</th>
                <th>Posición</th>
                <th>Goles</th>
                <th>Partidos Jugados</th>
                <th>Minutos jugados</th>
                <th>Tarjetas Amarillas</th>
                <th>Tarjetas Rojas</th>
            </tr>
            <tr>
                <td>$this->Name</td>
                <td>$this->BirthDay</td>
                <td>$this->Country</td>
                <td>$this->Dorsal</td>
                <td>$this->Position</td>
                <td>$this->Goals</td>
                <td>$this->Matches</td>
                <td>$this->Minutes</td>
                <td>$this->YellowCard</td>
                <td>$this->RedCard</td>
            </tr>
        </table>";
    }
}

    class Team {
        private $Name;
        private $players;
        private $Matches;
        private $won;
        private $lost;
        private $tie;
        private $scoreGoals;
        private $concededGoals;
        
        public function __construct($Name, $players, $Matches, $won, $lost, $tie, $scoreGoals, $concededGoals){
            $this->Name = $Name;
            $this->players = $players;
            $this->Matches = $Matches;
            $this->won = $won;
            $this->lost = $lost;
            $this->tie = $tie;
            $this->scoreGoals = $scoredGoals;
            $this->concededGoals = $concededGoals;
        }

        
    }

    $player = new Player("Jaume", 2001, "España", "21", "DEF", 30, 230, 12000, 1, 1);
    echo "Edad del jugador: " . $player->Age(). "<br>";
    echo $player->Score(). "<br>";
    echo $player->AddCard(0). "<br>";
    echo $player->PlayMinutes(90). "<br>";
    echo $player->Render();
?>