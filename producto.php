<?php
	$nombre = 'Camisita Cheta';
	$descripcion = 'este producto tiene muchas cosas locas';
	$stock = rand(0,6); //para probar
	$precio = rand(1000, 50000) /100; //una forma de generar números con decimales azarosos
	$precio_iva = number_format($precio * 1.21, 2); //http://php.net/manual/en/function.number-format.php
	$imagen = 'assets/ec_guy.jpg';


  $formulario = 'formulario_sin_stock.html';
  if($stock >= 1){
    $formulario = 'formulario_con_stock.html';
  }

  $stock_mensaje = "Queda $stock unidad";
  if($stock > 1){
    $stock_mensaje = "Quedan $stock unidades";
  } 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Ecommerce Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--template-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Inicio</a>
        </div>
        <div class="collapse navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="" style="">Productos</a></li>
                
                <li><a href="#" class="" contenteditable="false">Ingresar</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Productos</h1>
            <p class="lead">Productos en venta. Llame ya</p>
        </div>
        <div class="container">
            <div class="menu row">
                <div class="product col-sm-12">
                    <a href="#"><img class="img-responsive" src="<?php echo $imagen; ?>"></a>
                    <div class="mensajes">
                      <?php
                        if( $stock > 3){
                          echo '<span class="label label-success">Producto disponible</span>';  
                        } else if( $stock > 0){
                          
                          //puedo concatenar Strings...
                          //echo '<span class="label label-warning">Quedan solo '.$stock.' unidades!</span>';
                          
                          //si quiero imprimir comillas dobles dentro de un String con reemplazos, necesito escapearlas haciendo \"
                          //de otra forma PHP entiende que quiero cerrar el string
                          echo "<span class=\"label label-warning\">$stock_mensaje!</span>";  
                        } else {
                          echo '<span class="label label-danger">No hay stock</span>';  
                        }
                      ?>
                    </div>
					<hr>
                    <h2><?php echo $nombre; ?></h2>
                    <p><?php echo $descripcion; ?></p>
                    <hr>
                  	<h2 class="text-right">$<?php echo $precio_iva; ?> <small>(iva incluído)</small></h2>

                    <hr>

                    
                    <?php
                    include($formulario);
                    ?>
                    
                    
                   
                   <hr>
                    
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#reviews">Opiniones</a></li>
                        <li><a data-toggle="tab" href="#details">Detalles</a></li>
                    </ul>
                  
                  	<div class="tab-content">
                      <div class="tab-pane active" id="reviews">
                      
                        <h4>Opinión de compradores</h4>
                        <ul class="list-unstyled">
                          <li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
                          <li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                        </ul>
                      
                      </div>
                      <div class="tab-pane" id="details"><h4>Información del producto</h4></div>
                     </div>

                     <hr>
                
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
</div>
<!--/template-->
	<!-- script references -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>