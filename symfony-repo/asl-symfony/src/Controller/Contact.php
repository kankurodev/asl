<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

//Create the class
class Contact extends Controller {


    //Create Route using Annotations
    /**
     * @Route("/contact")
     */

    //Create function to run upon initial load (default function)
    public function index() {

        //Create navigation
        $nav = array("Home"=>"/", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('home.html.twig', array('nav'=> $nav, 'page'=>'Contact', 'message'=>'Hello World!'));

    }

}

?>