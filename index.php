<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Snack 1</h2>
    <p>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.<br>
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.<br>
    Stampiamo a schermo tutte le partite con questo schema.<br>
    Olimpia Milano - Cantù | 55-60</p>
    <!-- // Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
        // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        // Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60 
    -->
    <?php 
        $matches = [
            [
                'team1' => 'Acqua S.Bernardo Cantù',
                'team2' => 'Oriora Pistoia',
                'point_team_1' => 70,
                'point_team_2' => 45
            ],
            [
                'team1' => 'Fortitudo Pompea Bologna',
                'team2' => 'Dolomiti Energia Trentino',
                'point_team_1' => 82,
                'point_team_2' => 83
            ],
            [
                'team1' => 'Pallacanestro Trieste',
                'team2' => 'Virtus Roma',
                'point_team_1' => 72,
                'point_team_2' => 33
            ],
            [
                'team1' => 'Openjobmetis Varese',
                'team2' => 'Germani Basket Brescia',
                'point_team_1' => 101,
                'point_team_2' => 99
            ],
        ];

        for ($i=0; $i < count($matches); $i++) { 
            echo $matches[$i]['team1']." - ".$matches[$i]['team2']." | ".$matches[$i]['point_team_1']." - ".$matches[$i]['point_team_2']."<br>";
        }
    ?>

    <h2>Snack 2</h2>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)<br>
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.<br>
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</p>
    <!-- // Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" 
    -->

    <?php 
        
        $name = $_GET['name'].'<br>';
        $mail = $_GET['mail'].'<br>';
        $age = $_GET['age'];

        if (strlen($name) > 3 && (strpos($mail, '@') !== false && strpos($mail, '.') !== false) && is_numeric($age)) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>

    <h2>Snack 3</h2>
    <p>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.</p>

    <?php 
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>

    <h2>Snack 4</h2>
    <p>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta.</p>

    <?php
        $numberArray = [];
        while (count($numberArray) < 15) {
            $number = rand(0, 15);

            if (!in_array($number, $numberArray)) {
                $numberArray[] = $number;
            }
        }
        var_dump($numberArray);
    ?>

    <h2>Snack 6</h2>    
    <p>Utilizzare questo array: https://pastebin.com/CkX3680A</a>. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.</p>

    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

    <div style="background: gray;">
        <?php
            for ($i = 0; $i < count($db['teachers']); $i++) {
                echo $db['teachers'][$i]['name'].' '.$db['teachers'][$i]['lastname'].'<br>';
            }
        ?>

    </div>
    <div style="background: green;">
        <?php
            for ($i = 0; $i < count($db['pm']); $i++) {
                echo $db['pm'][$i]['name'].' '.$db['pm'][$i]['lastname'].'<br>';
            }
        ?>
    </div>
</body>
</html>