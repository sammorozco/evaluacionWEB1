<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<form action="punto2.php">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="punto2.php">Punto2<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto3.php">Punto3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto3.php">Punto4</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>
<main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                <form class="mt-3" action="punto2.php" method="POST">
                    <h4>INDICE DE MASA CORPORAL</h4>
                    <div class="row">
                        <div class="col">
                        <input type="number" class="form-control" placeholder="Peso(Kg)" name="peso">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Altura(mt)" name="altura">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="botonCalcular">CALCULAR</button>
                </form>

                <?php  if(isset($_POST["botonCalcular"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $peso=$_POST['peso'];
                            $altura=$_POST['altura'];
                            $alturatotal = $altura*$altura;
                            $IMC= $peso / $alturatotal;

                            $IMCredondeada = round($IMC, 2);
                            echo("Tu índice de masa corporal es de: ".$IMCredondeada);
                            
                            $IMC = $peso / $alturatotal;
                            if ($IMC < 18.5) {
                                echo " Peso insuficiente";
                            } elseif ($IMC >= 18.5 && $IMC<25) {
                                echo " Normopeso";
                            } elseif ($IMC >= 25 && $IMC<27) {
                                echo " Sobrepeso Grado I";
                            } elseif ($IMC >= 27 && $IMC<30) {
                                echo " Sobrepeso Grado II (Preobesidad)";
                            } elseif ($IMC >= 30 && $IMC<35) {
                                echo " Obesidad de tipo I";
                            } elseif ($IMC >= 35 && $IMC<40) {
                                echo " Obesidad de tipo II";
                            } elseif ($IMC >= 40 && $IMC<50) {
                                echo " Obesidad de tipo III (mórbida)";
                            } elseif ($IMC >= 50) {
                                echo " Obesidad de tipo IV (Extrema)";
                            }
                        ?>
                    </h4>

                <?php endif ?>
                    

                </div>
            </div>
        </div>
    </main>
</body>
</html>