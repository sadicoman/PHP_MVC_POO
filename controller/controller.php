<?php

    require('model/UserManager.php');
    require('model/TestimonialManager.php');

    function home() {
        $userManager        = new \MVC\User\UserManager();
        $requete            = $userManager->getUsers();

        require('view/listUserView.php');
    }

    function testimonials() {
        $testimonialManager = new \MVC\Testimonials\TestimonialManager();
        $requete            = $testimonialManager->getTestimonials();

        require('view/listTestimonialsView.php');
    }

    function addTestimonials($note, $message) {
        $testimonialManager = new \MVC\Testimonials\TestimonialManager();

        $result = $testimonialManager->postTestimonial($note, $message);

        if($result === false) {
            throw new Exception("Impossible d'ajouter votre avis pour le moment.");
        }
        else {
            header('location: index.php?page=avis');
            exit();
        }
    }