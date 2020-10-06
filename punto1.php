<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</head>
<body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EVALUACIÓN WEB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <form action="punto1.php">
    </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="punto1.php">Punto1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto2.php">Punto2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto3.php">Punto3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="punto4.php">Punto4</a>
                    </li>
                </ul>
            </div>
        </nav>
        </header>
        <main>
            <form class="mt-4" action="Punto1.php" method="POST">
                <div class = "container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Numero1" name="numero1">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Numero2" name="numero2">
                        </div>
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="form-group">
                        <br>
                        <label for="seleccione operador">Seleccione Operador</label>
                            <select class="form-control" name="seleccioneoperador">
                                <option>Suma</option>
                                <option>Resta</option>
                                <option>Multiplicacion</option>
                                <option>Division</option>
                            </select>
                    </div>    
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3" name="botoncalcular">Calcular</button>
                </div>
            </form>
            <?php
              if(isset($_POST["botonCalcular"])); ?>
                    <h4 class="text-primary text-center">
                <?php 
                $total = $_POST["seleccioneoperador"];
                switch($total)
                {
                    case "Suma";
                    echo $_POST["numero1"] + $_POST["numero2"];
                    break;

                    case "Resta";
                    echo $_POST["numero1"] - $_POST["numero2"];
                    break;

                    case "Multiplicacion";
                    echo $_POST["numero1"] * $_POST["numero2"];
                    break;

                    case "Division";
                    echo $_POST["numero1"] / $_POST["numero2"];
                    break;
                }
                    
                ?>
        </main>
        <footer>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>