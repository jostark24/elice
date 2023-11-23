<!DOCTYPE html>
<html>
<head>
  <meta lang="es" />
    <meta charset="utf-8" />
    <meta name="author" content="Jomare Developments"/>
    <meta name="description" content="Grupo Elice es una empresa Veracruzana dedicada a la obra eléctrica y en energías renovables, con presencia a lo largo de la República Mexicana." />
    <meta name="keywords" content="Sector energético, Energías renovables, Energía eléctrica, Electricidad, Conducción eléctrica, Energías alternas, Energía limpia, Conductividad eléctrica, Ramo energético, Energías renovables en Veracruz, Energías renovables en México, Energía eléctrica" />
    <meta name="robots" content="index,follow"/>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="contacto.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script src="js/smooth-scroll.min.js"></script>
  <link rel="icon" type="image/png" href="favico.png" />
  <title>Inicio | Grupo Elice</title>
</head>
<body>
 <nav class="navbar navbar-light sticky-top superior" id="menu">
  <div style="width: 50%; float: left;">
     <a href="index.php" class="navbar-brand">
      <img src="favico.png" id="logo" alt="Logo de Grupo Elice">
      <h1 class="d-inline-block align-top">Grupo Elice</h1>
     </a>
  </div>

  <div style="width: 50%; float: right;">
    
  </div>
</nav>
<div id="esquema">
   <nav id="titulo" class="animated bounceInLeft slow">
      <h3>Contacto</h3>
   </nav>
   <form action="enviar.php" method="post" id="formulario">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 form-group">
           <label for="nom" class="labs">Nombre*</label>
           <input type="text" name="nom" class="form-control inps" required>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 form-group">
           <label for="mail" class="labs">Correo electrónico*</label>
           <input type="email" name="mail" class="form-control inps" required>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 form-group">
           <label for="tel" class="labs">Teléfono</label>
           <input type="number" name="tel" class="form-control inps">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 form-group">
           <label for="empresa" class="labs">¿Cuál es el nombre de su empresa?</label>
           <input type="text" name="empresa" class="form-control inps">
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="asunto" class="labs">Asunto</label>
          <input type="text" name="asunto" class="form-control inps" value="Informes sobre el servicio de <?php echo $_COOKIE['servicio'];?>">
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="mensaje" class="labs">Mensaje</label>
          <textarea class="form-control inps" rows="10" required name="mensaje"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="rfc" class="labs">R.F.C</label>
          <input type="text" name="rfc" class="form-control inps" id="rf">
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="domi" class="labs">Domicilio</label>
          <input type="text" name="domi" class="form-control inps">
        </div>
      </div>
      <div class="row">
         <div class="col-6 mx-auto">
           <button type="submit" class="btn btn-primary btn-block bt">Enviar</button>
         </div>
      </div>
   </form>
</div>

  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>  
  <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
  <script type="text/javascript">
    document.getElementById('rf').maxLength = 13;
  </script>
</body>
</html>