<?php
/**
 * Created by PhpStorm.
 * User: Kompas
 * Date: 29.03.2018
 * Time: 18:36
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog_post")
 */
class BlogPost
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer")
   */
  private $id;
  /**
   * @ORM\Column(type="string")
   */
  private $title;
  /**
   * @ORM\Column(type="text")
   */
  private $body;
  /**
   * @ORM\Column(type="boolean")
   */
  private $draft = false;

  /**
   * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogPosts")
   */
  private $category;

  public function setCategory(Category $category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getDraft()
  {
    return $this->draft;
  }

  public function setDraft($draft)
  {
    $this->draft = $draft;
  }


}