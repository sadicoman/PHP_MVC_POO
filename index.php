<?php

    require('controller/controller.php');

    try {
        if(isset($_GET['page'])) {

            if($_GET['page'] == 'accueil') {
                home();
            }
            else if($_GET['page'] == 'avis') {
                if(isset($_POST['note']) && !empty($_POST['message'])) {
                    addTestimonials(htmlspecialchars($_POST['note']), htmlspecialchars($_POST['message']));
                }
                else {
                    testimonials();
                }
            }
            else {
                throw new Exception("Cette page n'existe pas ou a été supprimée.");
            }

        }
        else {
            home();
        }
    }
    catch(Exception $e) {
        $error = $e->getMessage();
        require('view/errorView.php');
    }