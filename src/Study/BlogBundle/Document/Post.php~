<?php
// src/Study/BlogBundle/Document/Post.php
namespace Study\BlogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @MongoDB\Document(repositoryClass="Study\BlogBundle\Repository\PostRepository")
 */

class Post
{
	/**
	 * @MongoDB\Id
	 */
	protected $id;
	
	/**
	 * @MongoDB\ReferenceOne(targetDocument="Blog", inversedBy="posts")
	 */
	protected $blog;
	
	/**
	 * @MongoDB\String
	 *
	 */
	protected $title;
	
	/**
	 * @MongoDB\String
	 * 
	 */
	protected $shortDescription;
	
	/**
	 * @MongoDB\String
	 * 
	 */
	protected $fullDescription;
	
	/**
	 * @MongoDB\Int
	 * 
	 */
	protected $viewed;
	
	/**
	 * @MongoDB\String
	 * 
	 */
	protected $author;
	
	/**
	 *
	 * @MongoDB\String
	 */
	public $postImage;
	
	/**
	 *@Assert\File(maxSize="6000000")
	 */
	private $file;

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
	 * Saving $postImage temporary 
	 * @var type String
	 */
	private $temp;
	
	/**
	 * construct
	 * @author: Harrison
	 */
	public function __construct() {
		$this->setCreatedDate(new \DateTime('now'));
		$this->setUpdatedDate(new \DateTime('now'));
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
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string $shortDescription
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set fullDescription
     *
     * @param string $fullDescription
     * @return self
     */
    public function setFullDescription($fullDescription)
    {
        $this->fullDescription = $fullDescription;
        return $this;
    }

    /**
     * Get fullDescription
     *
     * @return string $fullDescription
     */
    public function getFullDescription()
    {
        return $this->fullDescription;
    }

    /**
     * Set viewed
     *
     * @param int $viewed
     * @return self
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
        return $this;
    }

    /**
     * Get viewed
     *
     * @return int $viewed
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
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
     * Set blog
     *
     * @param Study\BlogBundle\Document\Blog $blog
     * @return self
     */
    public function setBlog(\Study\BlogBundle\Document\Blog $blog)
    {
        $this->blog = $blog;
        return $this;
    }

    /**
     * Get blog
     *
     * @return Study\BlogBundle\Document\Blog $blog
     */
    public function getBlog()
    {
        return $this->blog;
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
	 * @MongoDB\PrePersist()
	 * @MongoDB\PreUpdate()
	 */
	public function preUpload()
	{
		if(null !== $this->getFile()) {
			//do whatever you want to generate a unique name
			$filename = sha1(uniqid(mt_rand(), true));
			$this->postImage = $filename . '.' . $this->getFile()->guessExtension();
		}
	}
	
	/**
	 * @MongoDB\PostPersist()
	 * @MongoDB\PostUpdate()
	 */
	public function upload()
	{
		if(null === $this->getFile()) {
			return;
		}
		
		$this->getFile()->move($this->getUploadRootDir(), $this->postImage);
		
		// check if we have an old image
		if(isset($this->temp)) {
			// delete the old image
			unlink($this->getUploadRootDir() . '/' . $this->temp);
			//clear the temp image path
			$this->temp = null;
		}
		$this->file = null;
	}
	
	/**
	 * @MongoDB\PostRemove()
	 */
	public function removeUpload()
	{
		if($file = $this->getAbsolutePath())
		{
			unlink($file);
		}
	}

	/**
     * Set postImage
     *
     * @param string $postImage
     * @return self
     */
    public function setPostImage($postImage)
    {
        $this->postImage = $postImage;
        return $this;
    }

    /**
     * Get postImage
     *
     * @return string $postImage
     */
    public function getPostImage()
    {
        return $this->postImage;
    }
	
	/**
	 * Sets file
	 * @param UploadedFile $file
	 */
	public function setFile(UploadedFile $file = null)
	{
		$this->file = $file;
		// check if we have an old image path
		if(isset($this->postImage)) {
			//store the old image to delete after the update
			$this->temp = $this->postImage;
			$this->postImage = null;
		}
		else {
			$this->postImage = "initial";
		}
	}
	
	/**
	 * Get file
	 * @return UploadedFile
	 */
	public function getFile()
	{
		return $this->file;
	}
	
	/**
	 * Get Absolute Path of Image
	 * @return type string
	 */
	public function getAbsolutePath()
	{
		return null === $this->postImage
			? null
			: $this->getUploadRootDir() . '/' . $this->postImage;
	}
	
	/**
	 * Get web path
	 * return type string
	 */
	public function getWebPath()
	{
		return null === $this->postImage
				? null
				: $this->getUploadDir() . '/' .$this->postImage;
	}
	
	/**
	 * Get Upload Directory
	 * @return type string
	 */
	protected function getUploadRootDir()
	{
		// the absolute directory path where uploaded
		//documents should be saved
		return __DIR__ . '/../../../../web/' . $this->getUploadDir();
	}
	
	/**
	 * Get name of directory uploaded
	 * @return type string
	 * @author Harrison <harrison@likipe.se>
	 */
	protected function getUploadDir()
	{
		// get rid of the __DIR__ so it doesn't screw up
		// When displaying uploaded doc/image in the view
		return 'uploads/postImages';
	}
}
