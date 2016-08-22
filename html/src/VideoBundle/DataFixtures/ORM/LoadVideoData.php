<?php

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use src\VideoBundle\Entity\Post;

/**
 * Created by PhpStorm.
 * User: roland
 * Date: 18.08.2016
 * Time: 13:47
 */
class LoadVideoData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $video1 = new Post();
        $video1->setVideoUrl("https://www.youtube.com/embed/j--7UZYRqKw");

        $video2 = new Post();
        $video2->setVideoUrl("https://www.youtube.com/embed/3-EGACtj7C4");

        $video3 = new Post();
        $video3->setVideoUrl("https://www.youtube.com/embed/PxgmDwGDh08");

        $manager->persist($video1);
        $manager->persist($video2);
        $manager->persist($video3);
        $manager->flush();
    }

}