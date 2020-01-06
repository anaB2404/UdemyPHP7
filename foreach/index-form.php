<form>

    <input type="text" name="nome" value="">
    <input type="date" name="nascimento" value="">
    <input type="submit" value="Enviar">

</form>

<?php
    
       if(isset($_GET)) {
            foreach ($_GET as $key => $value) {
            
            echo "Nome dos campos: ".$key."<br>";
            echo "Valor dos campos: ".$value;
            echo "<hr>";
        }
    }


?>
