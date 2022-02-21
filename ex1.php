<html>
    <h1>Tabuada TOP DAS GALAXIA</h1>
    <form action="ex1.php" method="GET">
        <label for="">Valor</label>
        <input type="number" min=0 max=10 name="Valor"
        value="<?php 
        if(isset($_GET["Valor"])) 
        echo $_GET['Valor'];
        ?>" min=0 max=10>
        <input type="submit">
    </form>
</html>
<?php
 if(isset($_GET["Valor"])){
 $valor = $_GET["Valor"];

for($i=1; $i<=10; $i++):
    echo "$i * $Valor =" .
     ($i*$Valor) . "<br/>";
 endfor;
}


