<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mi primera aplicaion con PHP</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
    <script type="text/javascript" src="js/funciones.js"></script>


</head>

<body>
    <?php
        
        $nomCli = $_POST["nombreCliente"];
        $apeCli = $_POST["apellidoCliente"];
        $dirCli = $_POST["dirCliente"];
        $correo = $_POST["correo"];
        $telCli = $_POST["telCliente"];
        $fNac = $_POST["fechaNac"];

        $moto = $_POST["motos"];
        $modelo = $_POST["modelo"];
        $km = $_POST["kilometraje"];
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $fPed = $_POST["fechaPedido"];

       
       

    ?>


        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Bienvenido! <?php echo $nomCli ?></strong> <br> acabas de adquirir la motocicleta
            <?php echo $moto ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-inline-block bg-primary text-white">
                <div class="alert alert-dark" role="alert">
                    <div class="d-flex justify-content-center">
                        <h2>Tus datos</h2>
                    </div>

                </div>


                <div class="alert alert-primary" role="alert">
                    <div class="d-flex justify-content-center">
                        <?php echo 'Nombre: '. $nomCli ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo 'Apellido: '. $apeCli ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo 'Direccion: '. $dirCli ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo 'E-Mail: '. $correo ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo 'Telefono: '. $telCli ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo 'Fecha de nacimiento: '. $fNac ?>
                    </div>

                </div>
            </div>
            <div class="d-inline-block bg-primary text-white">
                <div class="d-inline-block bg-primary text-white">
                    <div class="alert alert-dark" role="alert">
                        <div class="d-flex justify-content-center">
                            <h2>Tu motocicleta</h2>
                        </div>

                    </div>


                    <div class="alert alert-primary" role="alert">
                        <div class="d-flex justify-content-center">
                            <?php echo 'Marca: '. $moto ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php echo 'Modelo: '. $modelo ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php echo 'Kilometraje: '. $km ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php echo 'Placa: '. $placa ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php echo 'Color: '. $color ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php echo 'Fecha de pedido: '. $fPed ?>
                        </div>
                    </div>
                </div>

                }



</body>

</html>