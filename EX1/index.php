<?php $entries = [8, 44, 100, 61, 50, 20, 100, 150, 80, 4, 0, 55]; ?>
<?php require 'recherche.php'; ?>
<?php require 'Trie.php'; ?>
<?php require 'FizzBuzz.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = $_POST['data'];
    $result1 = rechercheSimple($data);
    $result2 = RechercheSequentielle($data);
    $result3 = RechercheDichotomique($data);
   
   
}
 $result4 = TriABulle();
 $result5 = TriInsertion();
 $result6 = FizzBuzz();
?>
<!doctype html>
<html lang="fr"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Test PHP Exercice 1</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <meta name="theme-color" content="#563d7c">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">

            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <strong>Apizee Exercices PHP</strong>
                    </a>

                </div>
            </div>
        </header>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1>1. Travaux pratiques sur des tableaux</h1>
                    <p>$entries = [8,44,100,61,50,20,100,150,80,4,0,55];</p>

                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <!-- Afficher tous les éléments d'un tableau -->
                        <div class="col-md-4">
                            <center><h4>Afficher tous les éléments d'un tableau</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        foreach ($entries as $k => $v) {

                                            echo '<li>' . $v . '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Calculer la moyenne des nombres contenus dans un tableau donné, -->
                        <div class="col-md-4">

                            <center><h4>Calculer la moyenne des nombres contenus dans un tableau donné,</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        $ArrayCount = count($entries);
                                        $total = 0;
                                        $moyene = 0;
                                        foreach ($entries as $k => $v) {
                                            $total += $v;
                                            $moyene = $total / $ArrayCount;
                                        }
                                        echo '<li>' . $moyene . '</li>';
                                        ?>

                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indiquer combien d'éléments sont supérieurs ou égaux à 50 -->
                        <div class="col-md-4">
                            <center><h4>Indiquer combien d'éléments sont supérieurs ou égaux à 50</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        $Count = 0;
                                        foreach ($entries as $k => $v) {
                                            if ($v >= 50) {
                                                $Count ++;
                                            }
                                        }
                                        echo '<li>' . $Count . ' Elements sont >= à 50</li>';
                                        ?>

                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tester si la valeur 100 est présente ou non, -->
                        <div class="col-md-4">
                            <center><h4>Tester si la valeur 100 est présente ou non,</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        $Cent = false;
                                        foreach ($entries as $k => $v) {
                                            if ($v == 100) {
                                                $Cent = true;
                                            }
                                        }
                                        if ($Cent) {
                                            echo '100 est présent';
                                        } else {
                                            echo '100 est pas présent';
                                        }
                                        ?>

                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Déterminer la meilleure valeur obtenue. -->
                        <div class="col-md-4">
                            <center><h4>Déterminer la meilleure valeur obtenue.</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        $valeur = 0;
                                        foreach ($entries as $k => $v) {
                                            if ($valeur < $v) {
                                                $valeur = $v;
                                            }
                                        } 

                                        echo 'La valeur la plus grande est: ' . $valeur;
                                        ?>

                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1>2. Algorithmes avancés sur les tableaux</h1>
                    <p>$entries = [8,44,61,50,6,20,100,67,150,80,4,0,55,9,37]; </p>

                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <!-- Proposer une méthode générale pour rechercher un élément dans un tableau -->
                        <div class="col-md-4">
                            <center><h4>Proposer une méthode générale pour rechercher un élément dans un tableau</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="data">Elément à rechercher</label>
                                            <input type="text" class="form-control" id="data" name="data">
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-sm btn-outline-primary">Recherché</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Proposer une méthode générale pour rechercher un élément dans un tableau -->
                        <div class="col-md-4">
                            <center><h4>Résultat recherche simple</h4>
                                <p>(in_array())</p>
                            </center>

                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">

                                    <?php
                                    if (!empty($result1)) {
                                        if ($result1['error']) {
                                            echo 'La valeur ' . $result1['data'] . ' ne se trouve pas dans le tableau';
                                        } else {
                                            echo 'La valeur ' . $result1['data'] . ' se trouve dans le tableau';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <center><h4>Résultat recherche séquentielle</h4>
                                <p>(Avec trie du tablau par ordre croissant)</p>
                            </center>

                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">

                                    <?php
                                    if (!empty($result2)) {
                                        if ($result2['error']) {
                                            echo 'La valeur ' . $result2['value'] . ' ne se trouve pas dans le tableau';
                                        } else {
                                            echo 'La valeur ' . $result2['value'] . ' se trouve dans le tableau en position ' . $result2['position'];
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <center><h4>Résultat recherche Dichotomique</h4>
                               
                            </center>

                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">

                                    <?php
                                    if (!empty($result3)) {
                                        if ($result3['error']) {
                                            echo 'La valeur ' . $result3['value'] . ' ne se trouve pas dans le tableau';
                                        } else {
                                            echo 'La valeur ' . $result3['value'] . ' se trouve dans le tableau en position ' . $result3['position'];
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <center><h4>Resultat tri a bull</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        foreach ($result4 as $k => $v) {

                                            echo '<li>' . $v . '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <center><h4>Resultat tri a Insertion</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        foreach ($result5 as $k => $v) {

                                            echo '<li>' . $v . '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                </div>
                

            </div>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1>3.Fizz Buzz</h1>
                    <p>Ecrire une fonction pour lister les nombres de 1 à 100 et affiche </p>

                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">   
                         <div class="col-md-4">
                            <center><h4>Fizz Buzz</h4></center>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <ul>    

                                        <?php
                                        foreach ($result6 as $k => $v) {

                                            echo '<li>'.$k.' =>' . $v . '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                

            </div>


        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    </body>
</html>