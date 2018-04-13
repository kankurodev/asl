<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;



class DefaultController extends Controller {


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $data = array("title"=>"Home");

        return $this->render('./home.html.twig', $data);
    }

    /**
     * @Route("/registerForm", name="registerForm")
     */
    public function registerForm(Request $request) {

        $form = $this->createFormBuilder(null)
            ->setAction($this->generateUrl("registerForm"))
            ->add("name",TextType::class, array("required"=>true,"constraints"=>[
                new NotBlank(array("message"=>"Please do not leave blank!"))
            ]))
            ->add("email", TextType::class, array("required"=>true, "constraints"=>[
                new EmailConstraint(array("message"=>"Please enter a valid Email!")),
                new NotBlank(array("message"=>"Please do not leave blank!"))
            ]))
            ->add("myFile", FileType::class, array("constraints"=>[
                new File(array(
                    "maxSize"=>"2M",
                    "mimeTypes"=> [
                        "application/pdf",
                        "application/x-pdf"
                    ],
                    "mimeTypesMessage"=>"Please upload a valid PDF file!"
                ))
            ]))
            ->add("save", SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if($request->isMethod("POST")){

            if($form->isValid()) {

                $file = $form->get("myFile")->getData();
                $fileName = md5(uniqid()).".".$file->guessExtension();
                $file->move("/Users/tobyhorn/Documents/asl/asl/symfony-repo/week2/assets", $fileName);

                return $this->render("./regDone.html.twig", array("title"=>"Register"));

            }

        }

        return $this->render('./index.html.twig', array("title"=>"Register", "form"=>$form->createView()));

    }
}