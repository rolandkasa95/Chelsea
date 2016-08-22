<?php

namespace src\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="VideoUrl")
 * @ORM\Entity(repositoryClass="src\VideoBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     *
     * @var String
     */
    private $VideoUrl;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getVideoUrl()
    {
        return $this->VideoUrl;
    }

    /**
     * @param String $VideoUrl
     */
    public function setVideoUrl($VideoUrl)
    {
        $this->VideoUrl = $VideoUrl;
    }
}

