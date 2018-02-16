<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", name="created_time")
     */
    private $createdTime;
    
    /**
     * @ORM\Column(type="text")
     */
    private $story;
    
    /**
     * @ORM\Column(type="text")
     */
    private $message;
    
    /**
     * @ORM\Column(type="string", length=250, name="from_name")
     */
    private $fromName;
    
    /**
     * @ORM\Column(type="integer", name="from_id")
     */
    private $fromId;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $likes;
    
    /**
     * @ORM\Column(type="string", length=250, name="fb_id")
     */
    private $fbId;
    
    public function getId() {
        return $this->id;
    }

    public function getCreatedTime() {
        return $this->createdTime;
    }

    public function getStory() {
        return $this->story;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getFromName() {
        return $this->fromName;
    }

    public function getFromId() {
        return $this->fromId;
    }

    public function getLikes() {
        return $this->likes;
    }
    
    public function getFbId() {
        return $this->fbId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCreatedTime($createdTime) {
        $this->createdTime = $createdTime;
    }

    public function setStory($story) {
        $this->story = $story;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setFromName($fromName) {
        $this->fromName = $fromName;
    }

    public function setFromId($fromId) {
        $this->fromId = $fromId;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }
    
    public function setFbId($fbId) {
        $this->fbId = $fbId;
    }
    
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="post")
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }
}
