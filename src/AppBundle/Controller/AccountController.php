<?php

namespace AppBundle\Controller;

use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    /**
     * @Route("/account/{id}", requirements={"id": "\d+"})
     */
    public function indexAction(Request $request, $id)
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
        $contacts = $this->getDoctrine()->getRepository('AppBundle:Contact')->find($id);



        return $this->render('account/account.html.twig', array(
            'user' => $user,
            'contact' => $contacts,
            'age' => $this->calculate_age($user->getBirthDay())
        ));
    }

    function calculate_age($birthday) {
            $birthday_timestamp = strtotime($birthday->format('Y-m-d'));
            $age = date('Y') - date('Y', $birthday_timestamp);
            if (date('md', $birthday_timestamp) > date('md')) {
                $age--;
            }
            return $age;
    }
}