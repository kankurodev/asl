<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Google_Service_Plus;



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
    //Create function to log users in
    public function login() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Create new client
        $client= new \Google_Client();

        //Set the name of the application
        $client->setApplicationName("Web client 1");

        //Set the clientid from Google
        $client->setClientId("583088626738-n5o547akrq87rhvipmorjmdgn0g6qke1.apps.googleusercontent.com");

        //Set the client secret from Google
        $client->setClientSecret("kSh8mTSc7bNetE7UnHQNphrb");

        //Set the uri to be redirected to after user authorizes
        $client->setRedirectUri("http://localhost:8000/auth/google");

        //Add the scope of the google client (Google Plus)
        $client->addScope(Google_Service_Plus::PLUS_ME);

        //Create the url for the Auth
        $url= $client->createAuthUrl();

        //Render a Twig template and pass in the url
        return $this->render('login.html.twig', array('nav'=> $nav, 'page'=>'Profile','session'=>$this->session, "url"=> $url));
    }


    //Create Route using Annotations
    /**
     * @Route("/auth/google")
     */
    //Create function to log users out; passing in the Request
    public function googleAuth(Request $request) {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");


        //Create new client
        $client= new \Google_Client();

        //Set the name of the application
        $client->setApplicationName("Web client 1");

        //Set the clientid from Google
        $client->setClientId("583088626738-n5o547akrq87rhvipmorjmdgn0g6qke1.apps.googleusercontent.com");

        //Set the client secret from Google
        $client->setClientSecret("kSh8mTSc7bNetE7UnHQNphrb");

        //Set the uri to be redirected to after user authorizes
        $client->setRedirectUri("http://localhost:8000/auth/google");

        //Instantiate the OAuth service and pass in the client
        $service = new \Google_Service_Oauth2($client);

        //Capture the authentication code from Google
        $code=$client->authenticate($request->query->get("code"));

        //Set the access token
        $client->setAccessToken($code);

        //Retrieve the user's details
        $userDetails=$service->userinfo->get();

        //Set the session once the user is authenticated
        $this->session->set("loggedIn", true);

        //Render a Twig template and pass in the user's details
        return $this->render('profile.html.twig', array('nav'=> $nav, 'page'=>'Profile','session'=>$this->session, "user"=> $userDetails));

    }


    //Create Route using Annotations
    /**
     * @Route("/logout")
     */
    //Create function to log users out
    public function logout() {

        //Create navigation
        $nav = array("Home"=>"/", "Profile"=>"/profile", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "FAQ"=>"/faq");

        //Clear the session
        $this->session->clear();

        //Redirect to homepage
        return $this->redirect('/');

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