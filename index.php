<?php
include('header.php');
include('navbar.php');


?>

<body>
    <section>
        <script defer src="fils-rouge/js/modal.js"></script>




        <div id="modal" class="modal <?php if (!isset($_SESSION["accepte_cookies"]) || !$_SESSION["accepte_cookies"]) {
                                            echo 'visible';
                                        }
                                        ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button id="bouton-fermer" type="button" class="btn-close"></button>

                    </div>
                    <div class="modal-body">
                        <p>accepter les cookies ?</p>
                    </div>
                    <div class="modal-footer">
                        <a href='accepte-cookies.php' type="button" class="btn btn-primary">accepter</button>
                            <a href='parametrecookies.php' type="button" class="btn btn-primary">Paramétrer les cookies</a>




                    </div>
                </div>
            </div>
        </div>
    </section>
</body>