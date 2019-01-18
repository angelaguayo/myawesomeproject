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

</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">HCTchrome</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#c">cotizaciones</a>
    <a href="#c">clientes</a>
    <a href="#c">catalogo</a>
    <a href="#c">estadisticas</a>
    <a href="#c">precios</a>
    <a href="#c">locomotora</a>
  </div>
</div>

<div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div>
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
</body>
</html>
