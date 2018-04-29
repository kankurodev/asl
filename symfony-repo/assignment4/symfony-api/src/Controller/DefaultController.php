<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;



//Create the class
class DefaultController extends Controller {

    function __construct() {
        $session = new Session();
        $this->session = $session;
    }


    //Create Route using Annotations
    /**
     * @Route("/")
     */
    //Create function to run upon initial load (default function); display home page
    public function index() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('home.html.twig', array('nav'=> $nav, 'page'=>'Home','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/about")
     */
    //Create function to display about page
    public function about() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('about.html.twig', array('nav'=> $nav, 'page'=>'About','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/register")
     */
    //Create function to display register page
    public function register() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('register.html.twig', array('nav'=> $nav, 'page'=>'Register','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/contact")
     */
    //Create function to display contact page
    public function contact() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('contact.html.twig', array('nav'=> $nav, 'page'=>'Contact','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/faq")
     */
    //Create function to display FAQ page
    public function faq() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('faq.html.twig', array('nav'=> $nav, 'page'=>'FAQ','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/login")
     */
    //Create function to run upon initial load (default function); display home page
    public function login() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        $this->session->start();

        //Render a Twig template
        return $this->render('home.html.twig', array('nav'=> $nav, 'page'=>'Home','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/logout")
     */
    //Create function to run upon initial load (default function); display home page
    public function logout() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");


        $this->session->invalidate();

        //Render a Twig template
        return $this->render('home.html.twig', array('nav'=> $nav, 'page'=>'Home','session'=>$this->session));

    }


    //Create Route using Annotations
    /**
     * @Route("/profile")
     */
    //Create function to display profile page
    public function profile() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Render a Twig template
        return $this->render('profile.html.twig', array('nav'=> $nav, 'page'=>'Profile','session'=>$this->session));

    }

}

?>