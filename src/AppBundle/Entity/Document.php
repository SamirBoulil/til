<?php

namespace AppBundle\Entity;

/**
 * Document
 */
class Document
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $baseline;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usersLike;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usersLike = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Document
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set baseline
     *
     * @param string $baseline
     *
     * @return Document
     */
    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;

        return $this;
    }

    /**
     * Get baseline
     *
     * @return string
     */
    public function getBaseline()
    {
        return $this->baseline;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Document
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Document
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return Document
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add usersLike
     *
     * @param \AppBundle\Entity\User $usersLike
     *
     * @return Document
     */
    public function addUsersLike(\AppBundle\Entity\User $usersLike)
    {
        $this->usersLike[] = $usersLike;

        return $this;
    }

    /**
     * Remove usersLike
     *
     * @param \AppBundle\Entity\User $usersLike
     */
    public function removeUsersLike(\AppBundle\Entity\User $usersLike)
    {
        $this->usersLike->removeElement($usersLike);
    }

    /**
     * Get usersLike
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersLike()
    {
        return $this->usersLike;
    }
}

