<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="index.php" method="post">
        <div class="container p-3">
            <div class="row">
                <div class="col-4 p-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="height: 300px;" src="img/gato.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gato</h5>
                            <p class="card-text">apachurrale abajo.</p>
                            <input class="btn btn-primary" type="submit" value="reproducir" name="gato">
                        </div>
                    </div>
                </div>

                <div class="col-4 p-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="height: 300px;" src="img/perro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Perro</h5>
                            <p class="card-text">apachurrale abajo.</p>
                            <input class="btn btn-primary" type="submit" value="reproducir" name="perro">
                        </div>
                    </div>
                </div>

                <div class="col-4 p-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="height: 300px;" src="img/vaca.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Vaca</h5>
                            <p class="card-text">apachurrale abajo.</p>
                            <input class="btn btn-primary" type="submit" value="reproducir" name="vaca">
                        </div>
                    </div>
                </div>

                <div class="col-4 p-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" style="height: 200px;" src="img/abc.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Abecedario</h5>
                            <p class="card-text">apachurrale abajo.</p>
                            <input class="btn btn-primary" type="submit" value="reproducir" name="abecedario">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
include_once('animales.php');
?>