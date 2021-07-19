<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/game.css">
    <script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
    <title>Échecs</title>
</head>

<body onload="lancement()">
    <?php
    session_start();
    $idPartie = $_SESSION['idPartie'];
    $idJoueur1 = $_SESSION['idJoueur1'];
    $idJoueur2 = $_SESSION['idJoueur2'];
    ?>

    <div class="plateau">
        <div class="plateau-sup">
            <div class="coordonneesY">
                <div class="coordonnees">8</div>
                <div class="coordonnees">7</div>
                <div class="coordonnees">6</div>
                <div class="coordonnees">5</div>
                <div class="coordonnees">4</div>
                <div class="coordonnees">3</div>
                <div class="coordonnees">2</div>
                <div class="coordonnees">1</div>
            </div>

            <div class="jeu">
                <div class="cellule cellule-blanche">
                    <div class="tour noir simul">
                        <i class="fas fa-chess-rook fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="cavalier noir simul">
                        <i class="fas fa-chess-knight fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="fou noir simul">
                        <i class="fas fa-chess-bishop fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="dame noir simul">
                        <i class="fas fa-chess-queen fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="roi noir simul">
                        <i class="fas fa-chess-king fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="fou noir simul">
                        <i class="fas fa-chess-bishop fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="cavalier noir simul">
                        <i class="fas fa-chess-knight fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="tour noir simul">
                        <i class="fas fa-chess-rook fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion noir simul">
                        <i class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="simul"></div>
                </div>
                <div class="cellule cellule-blanche">
                    <div class="simul"></div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>
                <div class="cellule cellule-noire">
                    <div class="pion blanc simul">
                        <i style="color: white;" class="fas fa-chess-pawn fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="tour blanc simul">
                        <i style="color: white;" class="fas fa-chess-rook fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="cavalier blanc simul">
                        <i style="color: white;" class="fas fa-chess-knight fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="fou blanc simul">
                        <i style="color: white;" class="fas fa-chess-bishop fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="dame blanc simul">
                        <i style="color: white;" class="fas fa-chess-queen fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="roi blanc simul">
                        <i style="color: white;" class="fas fa-chess-king fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="fou blanc simul">
                        <i style="color: white;" class="fas fa-chess-bishop fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-noire">
                    <div class="cavalier blanc simul"><i style="color: white;" class="fas fa-chess-knight fa-3x"></i>
                    </div>
                </div>

                <div class="cellule cellule-blanche">
                    <div class="tour blanc simul"><i style="color: white;" class="fas fa-chess-rook fa-3x"></i>
                    </div>
                </div>

            </div>
        </div>

        <div class="coordonneesX">
            <div class="coordonnees">A</div>
            <div class="coordonnees">B</div>
            <div class="coordonnees">C</div>
            <div class="coordonnees">D</div>
            <div class="coordonnees">E</div>
            <div class="coordonnees">F</div>
            <div class="coordonnees">G</div>
            <div class="coordonnees">H</div>
        </div>
    </div>

    <div style="display: flex;">
        <div class="infos infos-joueur1">
            <div class="head">
                <p class="nom">
                    <?php
                    if (isset($_GET['joueur1'])) {
                        echo $_GET['joueur1'];
                    };
                    ?>
                </p>
            </div>
            <div class="temps-cumule">
                <p class="temps">81m 47s</p>
            </div>
        </div>

        <div class="infos infos-joueur2">
            <div class="head">
                <p class="nom">
                    <?php
                    if (isset($_GET['joueur2'])) {
                        echo $_GET['joueur2'];
                    };
                    ?>
                </p>
            </div>
            <div class="temps-cumule">
                <p class="temps">81m 47s</p>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>

        //pièces noires : 1 = tour, 2 = cavalier, 3 = fou, 4 = dame, 5 = roi, 6 pion
        //pièces blanches : -1 = tour, -2 = cavalier, -3 = fou, -4 = dame, -5 = roi, -6 pion
        //case vide = 0
        const miroir = [
            [1, 2, 3, 4, 5, 3, 2, 1],
            [6, 6, 6, 6, 6, 6, 6, 6],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [-6, -6, -6, -6, -6, -6, -6, -6],
            [-1, -2, -3, -4, -5, -3, -2, -1]
        ];

        choixPossible = [
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0]
        ];


        // 1 = joueur1 | 0 = joueur2
        var tour = 1

        var toutesLesCellules = $('.cellule')
        var toutesLesPieces = $('.simul, .noir, .blanc');

        // je draggable toutes les pièce du plateau
        $.each(toutesLesPieces, function(i, el){
            if($(el).hasClass('noir') || $(el).hasClass('blanc')){
                $(el).draggable({
                    containment: '.jeu',
                    revert: 'invalid',
                    grid: [87.5, 87.5]
                }).click(function(event){
                    event.preventDefault();
                    jouer(i, el);
                })
            }
        })

        // si c'est au joueur 1 de jouer, je désactive le draggable sur les pièces blanche
        // sinon, je désactive les pièces noires
        function lancement(){
            if(tour == 1){
                $.each(toutesLesPieces, function(i, el){
                    if($(el).hasClass('noir')){
                        $(el).draggable({
                            disabled: false
                        })
                    }else if($(el).hasClass('blanc')){
                        $(el).draggable({
                            disabled: true
                        })
                    } 
                })     
            }else{
                $.each(toutesLesPieces, function(i, el){
                    if($(el).hasClass('noir')){
                        $(el).draggable({
                            disabled: true
                        })
                    }else if($(el).hasClass('blanc')){
                        $(el).draggable({
                            disabled: false
                        })
                    } 
                })   
            }
        }

        

        var toutesLesCellules = $('.cellule')

        function jouer(i, el) {

            console.log('je lance la fonction jouer pour ' + el)

            if($(el).hasClass('fou') && ( $(el).hasClass('noir')|| $(el).hasClass('blanc') )){
                if($(el).hasClass('noir')){
                    if(i+7 >= 0 && i+7 <=63){
                        if(miroir[i+7] < 0){
                            choixPossible[i+7] = 2;
                        }else if(miroir[i+7] == 0){
                            choixPossible[i+7] = 1;
                        }
                    }
                    if(i+9 >= 0 && i+9 <=63){
                        if(miroir[i+9] < 0){
                            choixPossible[i+9] = 2;
                        }else if(miroir[i+9] == 0){
                            choixPossible[i+9] = 1;
                        }
                    }
                    if(i-7 >= 0 && i-7 <=63){
                        if(miroir[i-7] < 0){
                            choixPossible[i-7] = 2;
                        }else if(miroir[i-7] == 0){
                            choixPossible[i-7] = 1;
                        }
                    }
                    if(i-9 >= 0 && i-9 <=63){
                        if(miroir[i-9] < 0){
                            choixPossible[i-9] = 2;
                        }else if(miroir[i-9] == 0){
                            choixPossible[i-9] = 1;
                        }
                    }

                    for(var i = 0 ; i < 8 ; i++){
                        for(var j = 0 ; j < 8 ; j++){
                            if(choixPossible[i][j] == 1){
                                toutesLesPieces[i*8+j].droppable({
                                    accept: '.fou.noir'
                                })
                            }else if(choixPossible[i][j] == 2){
                                toutesLesPieces[i*8+j].droppable({
                                    accept: '.fou.noir'
                                })
                            }
                        }
                    }

                }else if($(el).hasClass('blanc')){
                    if(i+7 >= 0 && i+7 <=63){
                        if(miroir[i+7] > 0){
                            choixPossible[i+7] = 2;
                        }else if(miroir[i+7] == 0){
                            choixPossible[i+7] = 1;
                        }
                    }
                    if(i+9 >= 0 && i+9 <=63){
                        if(miroir[i+9] > 0){
                            choixPossible[i+9] = 2;
                        }else if(miroir[i+9] == 0){
                            choixPossible[i+9] = 1;
                        }
                    }
                    if(i-7 >= 0 && i-7 <=63){
                        if(miroir[i-7] > 0){
                            choixPossible[i-7] = 2;
                        }else if(miroir[i-7] == 0){
                            choixPossible[i-7] = 1;
                        }
                    }
                    if(i-9 >= 0 && i-9 <=63){
                        if(miroir[i-9] > 0){
                            choixPossible[i-9] = 2;
                        }else if(miroir[i-9] == 0){
                            choixPossible[i-9] = 1;
                        }
                    }

                    for(var i = 0 ; i < 8 ; i++){
                        for(var j = 0 ; j < 8 ; j++){
                            if(choixPossible[i][j] == 1){
                                toutesLesPieces[i*8+j].droppable({
                                    accept: '.fou.noir'
                                })
                            }else if(choixPossible[i][j] == 2){
                                toutesLesPieces[i*8+j].droppable({
                                    accept: '.fou.noir'
                                })
                            }
                        }
                    }
                }
            }else{
                if(i-9 >= 0 && i-9 <=63){
                    if(miroir[i-9] > 0){
                        choixPossible[i-9] = 2;
                    }else if(miroir[i-9] == 0){
                        choixPossible[i-9] = 1;
                    }
                }
                if(i-8 >= 0 && i-8 <=63){
                    if(miroir[i-8] > 0){
                        choixPossible[i-8] = 2;
                    }else if(miroir[i-8] == 0){
                        choixPossible[i-8] = 1;
                    }
                }
                if(i-7 >= 0 && i-7 <=63){
                    if(miroir[i-7] > 0){
                        choixPossible[i-7] = 2;
                    }else if(miroir[i-7] == 0){
                        choixPossible[i-7] = 1;
                    }
                }

                if(i-1 >= 0 && i-1 <=63){
                    if(miroir[i-1] > 0){
                        choixPossible[i-1] = 2;
                    }else if(miroir[i-1] == 0){
                        choixPossible[i-1] = 1;
                    }
                }
                if(i+1 >= 0 && i+1 <=63){
                    if(miroir[i+1] > 0){
                        choixPossible[i+1] = 2;
                    }else if(miroir[i+1] == 0){
                        choixPossible[i+1] = 1;
                    }
                }

                if(i+9 >= 0 && i+9 <=63){
                    if(miroir[i+9] > 0){
                        choixPossible[i+9] = 2;
                    }else if(miroir[i+9] == 0){
                        choixPossible[i+9] = 1;
                    }
                }
                if(i+8 >= 0 && i+8 <=63){
                    if(miroir[i+8] > 0){
                        choixPossible[i+8] = 2;
                    }else if(miroir[i+8] == 0){
                        choixPossible[i+8] = 1;
                    }
                }
                if(i+7 >= 0 && i+7 <=63){
                    if(miroir[i-7] > 0){
                        choixPossible[i+7] = 2;
                    }else if(miroir[i+7] == 0){
                        choixPossible[i+7] = 1;
                    }
                }
            }

            
                
        }

    </script>
</body>

</html>