<?php
/**
 * Created by PhpStorm.
 * User: Kompas
 * Date: 29.03.2018
 * Time: 18:32
 */

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
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
  private $name;

  /**
   * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="category")
   */
  private $blogPosts;

  public function __construct()
  {
    $this->blogPosts = new ArrayCollection();
  }

  public function getBlogPosts()
  {
    return $this->blogPosts;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
}