<!-- if you need user information, just put them into the $_SESSION variable and output them here -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 5px;
}

.header a {
  float: left;
  color: black;
  text-align: right;
  padding: 12px;
  text-decoration: none;
  font-size: 14px;
  line-height: 20px;
  border-radius: 2px;
}

.header a.logo {
  font-size: 22px;

}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: right;
  }

  .header-center {
    float: none;
  }
}




#tabla {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tabla td, #tabla th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tabla tr:nth-child(even){background-color: #f2f2f2;}

#tabla tr:hover {background-color: #ddd;}

#tabla th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">HCTchrome <?php echo $_SESSION['user_name']; ?> </a>
  <a href="index.php?logout">Logout</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="/views/cotizaciones.php">cotizaciones</a>
    <a href="/views/clientes.php">clientes</a>
    <a href="/views/catalogo.php">catalogo</a>
    <a href="/views/estadisticas.php">estadisticas</a>
    <a href="/views/precios.php">precios</a>
    <a href="views/locomotoras.php">locomotora</a>
  </div>
</div>

<!-- Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

 because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true"
<a href="index.php?logout">Logout</a> -->





<body>

  <?php
  // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
  $link = new PDO('mysql:host=localhost;dbname=login', 'root', '');

  ?>

  <table id="tabla" class="table table-striped">

  		<thead>
  		<tr>
  			<th>REFERENCIA</th>
  			<th>CONCEPTO</th>
  			<th>HH</th>
        <th>PRECIOHH</th>
  			<th>PRECIO_MATERIAL</th>
  			<th>ACTIVO</th>

  		</tr>
  		</thead>
  <?php foreach ($link->query('SELECT * from listado') as $row){ ?>
  <tr>
  	<td><?php echo $row['referencia'] ?></td>
      <td><?php echo $row['concepto'] ?></td>
      <td><?php echo $row['hh'] ?></td>
      <td><?php echo $row['preciohh'] ?></td>
        <td><?php echo $row['precio_material'] ?></td>
        <td><?php echo $row['activo'] ?></td>
   </tr>
  <?php
  	}
  ?>
  </table>

</body>
</body>
</html>
