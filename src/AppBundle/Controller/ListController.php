<?php

namespace AppBundle\Controller;

use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $repository->findAll();

        return $this->render('default/home.html.twig', array(
            'users' => $users
        ));
    }


    /**
     * @Route("/generate", name="welcome")
     */
    public function generateAction() {
        $generate =  $this->get('my_generate');
        $data = $generate->generateDataMain();
        
        return $this->render('base.html.twig', array(
            'data' => $data
        ));
    }
}