<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.css">
    <title>Échecs</title>
</head>

<body>

    <div class="modal modal-retake" style="width: auto;">
        <div class="modal-background">
            <div class="modal-card">
                <form action="">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Parties récentes</p>
                        <button class="delete delete-modal-retake" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body" style="display: flex; justify-content: center;">
                        <div class="select is-multiple">
                            <select name="parties" id="parties" multiple size="5">

                            </select>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success">Reprendre</button>
                    </footer>
                </form>  
            </div>
        </div>
    </div>

    <form action="nouvellePartie.php" method="POST">
        <div class="field">
            <label class="label">Joueur 1</label>
            <div class="control">
                <input class="input" name="joueur1" type="text" placeholder="Jean" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Joueur 2</label>
            <div class="control">
                <input class="input" name="joueur2" type="text" placeholder="Fabrice" required>
            </div>
        </div>
        <div class="control">
            <button class="button is-link my-2" type="submit'" style="width: 100%;">Jouer une nouvelle partie</button>
        </div>
        <div class="control">
            <a class="button is-warning my-2 retake-button">Reprendre une ancienne partie</a>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('.retake-button').click(function() {
            $('.modal-retake').addClass('is-active');
        })
        $('.delete-modal-retake').click(function() {
            $('.modal-retake').removeClass('is-active');
        });

        $.ajax({
            method: "POST",
            url: "http://localhost:8080/SLAM5/echecs/getPartie.php",
            success: function(data){
                console.log(data);
                $.each(JSON.parse(data), function(index, element){
                    $("#parties").append('<option> partie ' + element.id + ' | ' + element.joueur1 + ' vs ' + element.joueur2 + '</option>');
                })
            }
        })
    </script>

</body>

</html>