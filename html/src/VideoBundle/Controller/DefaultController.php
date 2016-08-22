<?php

namespace src\VideoBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * Matches /Video/*
     *
     * @Route("/Video",name="video_homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('VideoBundle:Post');
        $videos = $repository->findAll();

        return $this->render('VideoBundle:Default:index.html.twig', array('videos' => $videos));
    }
}
