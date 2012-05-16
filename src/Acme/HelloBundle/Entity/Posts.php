<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\HelloBundle\Entity\Posts
 */
class Posts
{
    /**
     * @var text $content
     */
    private $content;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var integer $id
     */
    private $id;
//for this or that


    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
       $newContent = $this->prettyHtmlText($this->content);
       return $newContent;
    }
    
    private function prettyHtmlText($content)
    {
        $prettyContent = stripslashes($content);
        return $prettyContent;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
	

	

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        $prettyDate = date_format($this->createdAt,'F jS Y');
        return $prettyDate;
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
    
    public function _toString()
    {
        return $this->content;
    }
}