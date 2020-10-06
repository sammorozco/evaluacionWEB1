<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Punto3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <form action="punto3.php">
    </form>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EVALUACIÓN WEB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto1.php">Punto1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto2.php">Punto2</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="punto3.php">Punto3<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto4.php">Punto4</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                    <form class="mt-3" action="punto3.php" method="POST">
                        <h4>DESCUENTO</h4>
                        <div class="row">
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Costo ($)" name="costo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 btn-block" name="botonCalcular">CALCULAR DESCUENTO</button>
                    </form>

                    <?php  if(isset($_POST["botonCalcular"])): ?>
                        <h4 class="text-primary text-center">
                            <?php 
                                $cantidad=$_POST['cantidad'];
                                $costo=$_POST['costo'];
                            
                                if ($cantidad < 3) { 
                                    $valortotal= $costo;
                                    echo " El total sin descuento es: ".$valortotal;
                                } elseif ($cantidad = 3) { 
                                    $descuento= $costo *0.10;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 10% de descuento es: ".$valortotal;
                                } elseif ($cantidad >3 && $cantidad<=8) {
                                    $descuento= $costo *0.20;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 20% de descuento es: ".$valortotal;
                                } elseif ($cantidad > 8) {
                                    $descuento= $costo *0.50;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 50% de descuento es: ".$valortotal;
                                }  
                            ?>
                        </h4>
                    <?php endif ?>                 
                </div>
            </div>
        </div>
</body>
</html>