<?php
session_start();
if (isset($_SESSION['active'])) {
    require_once 'public/header.php';
    require_once 'modales/modalproductos.php';
    require_once 'modales/modalcategoria.php';?>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/inicio.css" th:href="@{css/inicio.css}">
    </head>
    <body class="cover">
    <div class="card-body">
        <button type="button" class="btn_add btn4 btn"  data-toggle="modal" data-target="#ModalProducto"><i class="fas fa-plus-circle"></i> REGISTRAR PRODUCTO</button>
        <button type="button" class="btn_add btn4 btn"  data-toggle="modal" data-target="#ModalCategoria"><i class="fas fa-certificate"></i> REGISTRAR CATEGORIA</button>
    </div>
    
    <div class="row">
        <div class="col-lg-4">
        <?php 
            require_once 'tablas/tabla_productos.php';
        ?>
        </div>
        <br><br>
        <div class="col-lg-4">
        <?php 
            //require_once 'tablas/tabla_ventas.php';
        ?>
        </div>
    </div>
    </body>
</html>
<?php }else{
    header('Location: login.php');
    
    ?>
    
    <?php } ?>