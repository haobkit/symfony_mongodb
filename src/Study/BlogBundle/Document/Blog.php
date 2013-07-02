<?php
// src/Study/BlogBundle/Document/Blog.php
namespace Study\BlogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @MongoDB\Document(repositoryClass="Study\BlogBundle\Repository\BlogRepository")
 */

class Blog
{	
	/**
	 * @MongoDB\Id
	 */
	protected $id;
	
	/**
	 * @MongoDB\String
	 *
	 */
	protected $title;
	
	//protected $slug;

	/**
	 *
	 * @MongoDB\String
	 */
	protected $description;
	
	/**
	 *
	 * @MongoDB\Date
	 */
	protected $createdDate;
	
	/**
	 *
	 * @MongoDB\Date
	 */
	protected $updatedDate;
	
	/**
	 *
	 * @MongoDB\ReferenceMany(targetDocument="Blog", mappedBy="blog")
	 */
    protected $posts;
	
	/**
	 * @MongoDB\Boolean
	 */
    protected $deleted;
	
	/**
	 * construct
	 */
	public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
		$this->deleted = false;
		$this->createdDate = new \DateTime('now');
		$this->updatedDate = new \DateTime('now');
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdDate
     *
     * @param date $createdDate
     * @return self
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return date $createdDate
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param date $updatedDate
     * @return self
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;
        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return date $updatedDate
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return self
     */
    public function setDeleted($deleted = false)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean $deleted
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
	
	/**
	 * @MongoDB\PrePersist
	 */
	
	public function prePersist()
	{
		$this->setCreatedDate(new \DateTime('now'));
		$this->setUpdatedDate(new \DateTime('now'));
	}
	
	/**
	 * @MongoDB\PreUpdate
	 */
	public function preUpdate()
	{
		$this->setUpdatedDate(new \DateTime('now'));
	}

    /**
     * Add posts
     *
     * @param Study\BlogBundle\Document\Blog $posts
     */
    public function addPost(\Study\BlogBundle\Document\Blog $posts)
    {
        $this->posts[] = $posts;
    }

    /**
     * Remove posts
     *
     * @param Study\BlogBundle\Document\Blog $posts
     */
    public function removePost(\Study\BlogBundle\Document\Blog $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection $posts
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
