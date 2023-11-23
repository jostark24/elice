<!DOCTYPE html>
<html>
<head>
  <?php
     require_once('php/metodos.php');
     $metodos= new metodos();
     $conexion= $metodos->conectarBD();
     $publicaciones= "SELECT * FROM post_fa ORDER by idpo DESC ";
     $posts= mysqli_query($conexion[0],$publicaciones);
  ?>
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
      <h3>Crear publicación</h3>
   </nav>
   <form action="publicar.php" method="post" id="formulario">
      
      <div class="row">
        <div class="col-12 form-group">
          <label for="frame" class="labs">Código IFrame</label>
          <textarea class="form-control inps" rows="10" required name="frame"></textarea>
        </div>
      </div>
      
      <div class="row">
         <div class="col-6 mx-auto">
           <button type="submit" class="btn btn-primary btn-block bt">Publicar</button>
         </div>
      </div>
   </form>
   <div id="tablas">
      <table class="table table-dark table-striped table-hover mx-auto" style="width:95%;">
                    <thead>
                        <tr>
                            <th scope="col">ID Publicación</th>
                            <th scope="col">Frame</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while($ob=mysqli_fetch_array($posts)) {?>
                        <tr>
                            <td>
                                <?php echo $ob['idpo'];?>
                            </td>
                            <td>
                                <p style="text-align:justify;"><?php echo $ob['iframe'] ;?></p>
                            </td>
                            <td>
                                <?php if($ob['estatus']==1)
                                        {
                                          echo 'PUBLICACIÓN ACTIVA';
                                      }
                                ?>
                            </td>
                            <td>
                                <a href="borrarNot.php?id=<?php echo $ob['idpo'];?>" role="button" class="btn btn-danger btn-block">Eliminar</a>
                            </td>
                        </tr>
                        <?php }?>

                    </tbody>
                </table>
   </div>
</div>

  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>  
  <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
  <script type="text/javascript">
    document.getElementById('rf').maxLength = 13;
  </script>
</body>
</html>