<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="vivienda\st.css">
<body>
   <h1>Inserción de Vivienda</h1>
   <h2>Introduzca los datos de la vivienda:</h2>
   <form action="vivienda\Datos Vivienda.php" method="post">

   Tipo de Vivienda
   <select name="TipoVivienda">Tipo de Vivienda <br><br>
   <option value="Piso">Piso <br><br>
   <option value="Adosado">Adosado <br><br>
   <option value="Chalet">Chalet <br><br>
   <option value="Casa">Casa <br><br>
   </select>
   <br>
   <br>
   Zona
   <select name="Zona" id="">Zona
   <option value="Sur">Sur <br><br>
   <option value="Centro">Centro <br><br>
   <option value="Norte">Norte <br><br>
   <option value="Valles">Valles <br><br>
   </select>
   <br>
   <br>
   Direccion: <input type="text" name="txtdireccion" placeholder="Ingresa Direccion">
   <br><br>
   Número de Dormitorios: 
   1<input type="radio" name="1" VALUE="1" checked>
   2<input type="radio" name="1" VALUE="2" >
   3<input type="radio" name="1" VALUE="3" >
   4<input type="radio" name="1" VALUE="4" >
   5<input type="radio" name="1" VALUE="5" >
   <br><br>
   Precio en Dólares: <input type="number" name="txtPrecio" placeholder="Ingresa Precio" require=""> $
   <br><br>
   Tamaño: <input type="number" name="txtTamaño" placeholder="Ingresa Tamaño"> metros cruadrados
   <br><br>
   Extras (marque los que procedan): <input type="checkbox" name="listaextras[]" VALUE="Piscina">Piscina
       <input type="checkbox" name="listaextras[]" VALUE="Jardín">Jardín
       <input type="checkbox" name="listaextras[]" VALUE="Garage">Garage
        <br><br>
  Observaciones: <input type="text" name="txtobservaciones" 
  textarea rows="5" cols="20" name="observaciones" Escriba sus observaciones textarea>
  <br><br>
    <input type="submit" value="Insertar Vivienda">
   </option>
        
   </form>

</body>
</html>