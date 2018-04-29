<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

//Create the class
class DefaultController extends Controller {


    //Create Route using Annotations
    /**
     * @Route("/")
     */

    //Create function to run upon initial load (default function)
    public function index() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('home.html.twig', array('nav'=> $nav, 'page'=>'Home'));

    }

    //Create Route using Annotations
    /**
     * @Route("/about")
     */

    //Create function to run upon initial load (default function)
    public function about() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('about.html.twig', array('nav'=> $nav, 'page'=>'About'));

    }

    //Create Route using Annotations
    /**
     * @Route("/register")
     */

    //Create function to run upon initial load (default function)
    public function register() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('register.html.twig', array('nav'=> $nav, 'page'=>'Register'));

    }

    //Create Route using Annotations
    /**
     * @Route("/contact")
     */

    //Create function to run upon initial load (default function)
    public function contact() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('contact.html.twig', array('nav'=> $nav, 'page'=>'Contact'));

    }

    //Create Route using Annotations
    /**
     * @Route("/faq")
     */

    //Create function to run upon initial load (default function)
    public function faq() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('faq.html.twig', array('nav'=> $nav, 'page'=>'FAQ'));

    }

    //Create Route using Annotations
    /**
     * @Route("/profile")
     */

    //Create function to run upon initial load (default function)
    public function profile() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('profile.html.twig', array('nav'=> $nav, 'page'=>'Profile'));

    }

}
?>