<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<!-- richiamo i file contenenti le classi di oggetti e i dati -->
<?php
require __DIR__ . '/Models/movie.php';
require __DIR__ . '/Models/genre.php';
require __DIR__ . '/db.php';
?>

<!-- layout -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
main {
    height: calc(100% - 69px);
    background: color: #212529;
}

.card {
    min-height: 280px;
    background-color: #171718;
}

.container {
    max-width: 900px;
}

header {
    background-color: #212529;
}

h3 {
    color: #d7d7d7;
}

p {
    color: gray;
}
</style>

<body class="vh-100">

    <div id="header" class="text-center text-black py-2">
        <h1 class="pb-3">Movies Info</h1>
    </div>
    <!-- /#header -->

    <main class="bg-black">
        <div class="container h-100">
            <div class="row g-3 h-100">
                <?php foreach ($Movies as $Movie) :?>
                <div class="col-4 my-5">
                    <div class="card px-2 py-4">
                        <h3><?php echo $Movie->name ?></h3>
                        <p>Genre:
                            <span>
                                <?php foreach ($Movie->genres as $singleGenre) :?>
                                <?php echo $singleGenre->diffGenre ?>
                                <?php endforeach; ?>
                            </span>
                        </p>

                        <p>Description: <?php echo $Movie->description ?></p>
                        <p>Duration: <?php echo $Movie->duration ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>
    <!-- /#main -->

</body>

<!-- Bootstrap JavaScript Libraries -->
<script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>