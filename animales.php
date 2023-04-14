<?php
class Animal{
    public function roar(){
        echo "El ";
    }   
}

class Gato extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function roar(){
        echo $this->nombre."miaguea, MIAU!!";
    }
}


class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function roar(){
        echo $this->nombre."ladra, Wau!!";
    }
}


class Vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function roar(){
        echo $this->nombre."le hace MU!!";
    }
}

class Abecedario extends Animal{
    public $abecedario;
    public function __construct($abecedario)
    {
        $this->abecedario = $abecedario;
    }
    public function roar(){
        //quise usar un ciclo for para el abecedario, pero da un error y ya no me dio tiempo
        echo $this->abecedario."a-b-c-d-e-f-g-h-i-j-k-m-n-l-o-p-q-r-s-t-u-v-w-x-y-z";
    }
}

function roarAnimal(Animal $animal){
    $animal->roar();
}

$gato = new Gato("gato");
$perro = new Perro("perro");
$vaca = new Vaca("vaca");
$abecedario = new Abecedario("abecedario"); 
if (isset($_POST['gato'])) {
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato)?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}else if(isset($_POST['perro'])) {
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro)?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}else if(isset($_POST['vaca'])) {
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca)?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}else if(isset($_POST['abecedario'])) {
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($abecedario)?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
?>