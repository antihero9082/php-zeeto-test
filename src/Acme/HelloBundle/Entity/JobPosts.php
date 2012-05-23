<?php


namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\HelloBundle\Entity\JobPosts
 */
class JobPosts
{
    /**
     * var text $jobType
     */
    private $jobType;
    /**
     * @var text $content
     */
    private $content;

    /**
     * @var timestamp $createdAt
     */
    private $createdAt;

    /**
     * @var integer $id
     */
    private $id;
//for this or that


    /**
     * @var text $jobTitle
     */

    private $jobTitle;
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
     * @return text
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }
    /**
     * @return text;
     */
    public function getJobType()
    {
        return $this->jobType;
    }
    /**
     * @param $jobTitle string
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }
    /**
     * @param $jobType string
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
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