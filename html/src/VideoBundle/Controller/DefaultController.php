<?php

namespace VideoBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use VideoBundle\Entity\Post;

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

    /**
     * Matches /VideoAddition/*
     *
     * @Route("/VideoAddition",name="videoAddition")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $newVideo = new Post();
        $newVideo->setVideoUrl('https://www.youtube.com/watch?v=CS-85i409PM');

        $form = $this->createFormBuilder($newVideo)
            ->add('VideoUrl', TextType::class, array('label' => "New Video Url: "))
            ->add('save', SubmitType::class, array('label' => 'Add new Video'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newVideo = $form->getData();
            $newVideo->setVideoUrl(str_replace("watch?v=","embed/",$newVideo->getVideoUrl()));


            $manager = $this->getDoctrine()->getManager();

            $manager->persist($newVideo);
            $manager->flush();

            return $this->redirectToRoute('video_homepage');
        }

        return $this->render('VideoBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
