<?php

namespace ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $materia = $em->getRepository('ApplicationBundle:Materia')->findOneById(1);


        return $this->render('ApplicationBundle:Default:index.html.twig');
    }
}
