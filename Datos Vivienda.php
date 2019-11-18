<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inserción de Vivienda</h1> 
    <br>
    <?php
    if($_POST){ 
  
        $tipovivienda = $_POST ['TipoVivienda'];
     print "Tipo: ".$tipovivienda;
        echo "<br>";

        $zona = $_POST['Zona'];
        print "Zona: ".$zona;
        echo "<br>";

        $direccion = $_POST['txtdireccion'];
        print "Dirección: ".$direccion;
        echo "<br>";

        $numerodormitorios = $_POST['1'];
        print "Número de Dormitorios: ".$numerodormitorios;
        echo "<br>";
    
        $precio = $_POST['txtPrecio'];
        print "Precio: ".$precio;
        echo "<br>";

        $tamaño = $_POST['txtTamaño'];
        print "Tamaño: ".$tamaño;
        echo "<br>";

        $extras = $_REQUEST['listaextras'];
        print "Extras: ";
        foreach ($extras as $variable) {
        print " ".$variable;
        }
        echo "<br>";

    }else {
        print "error";
    }
    

    ?>

    <br><br>
    <address>
    <a href="\index.php">Insertar otra vivienda</a>
    </address>
    <br><br>

    
</body>
</html>