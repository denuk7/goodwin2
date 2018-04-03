<?php
/**
 * Created by PhpStorm.
 * User: Kompas
 * Date: 03.04.2018
 * Time: 17:49
 */

namespace App\Entity;
use App\Application\Sonata\UserBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deleted_at", timeAware=false, hardDelete=true)
 * @ORM\Table(name="order")
 */
class Order
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
  private $status;
  /**
   * @ORM\Column(type="datetime")
   */
  private $date_start;
  /**
   * @ORM\Column(type="datetime")
   */
  private $date_end;

  /**
   * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
   */
  private $deleted_at;

  /**
   * @var \DateTime $created
   *
   * @Gedmo\Timestampable(on="create")
   * @ORM\Column(type="datetime")
   */
  private $created_at;

  /**
   * @var \DateTime $updated
   *
   * @Gedmo\Timestampable(on="update")
   * @ORM\Column(type="datetime")
   */
  private $updated_at;

  /**
   * @var User $createdBy
   *
   * @Gedmo\Blameable(on="create")
   * @ORM\ManyToOne(targetEntity="App\Application\Sonata\UserBundle\Entity\User")
   * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
   */
  private $createdBy;

  /**
   * @var User $updatedBy
   *
   * @Gedmo\Blameable(on="update")
   * @ORM\ManyToOne(targetEntity="App\Application\Sonata\UserBundle\Entity\User")
   * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
   */
  private $updatedBy;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id): void
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * @param mixed $status
   */
  public function setStatus($status): void
  {
    $this->status = $status;
  }

  /**
   * @return mixed
   */
  public function getDateStart()
  {
    return $this->date_start;
  }

  /**
   * @param mixed $date_start
   */
  public function setDateStart($date_start): void
  {
    $this->date_start = $date_start;
  }

  /**
   * @return mixed
   */
  public function getDateEnd()
  {
    return $this->date_end;
  }

  /**
   * @param mixed $date_end
   */
  public function setDateEnd($date_end): void
  {
    $this->date_end = $date_end;
  }

  /**
   * @return mixed
   */
  public function getDeletedAt()
  {
    return $this->deleted_at;
  }

  /**
   * @param mixed $deleted_at
   */
  public function setDeletedAt($deleted_at): void
  {
    $this->deleted_at = $deleted_at;
  }

  /**
   * @return \DateTime
   */
  public function getCreatedAt(): \DateTime
  {
    return $this->created_at;
  }

  /**
   * @param \DateTime $created_at
   */
  public function setCreatedAt(\DateTime $created_at): void
  {
    $this->created_at = $created_at;
  }

  /**
   * @return \DateTime
   */
  public function getUpdatedAt(): \DateTime
  {
    return $this->updated_at;
  }

  /**
   * @param \DateTime $updated_at
   */
  public function setUpdatedAt(\DateTime $updated_at): void
  {
    $this->updated_at = $updated_at;
  }

  /**
   * @return User
   */
  public function getCreatedBy(): User
  {
    return $this->createdBy;
  }

  /**
   * @param User $createdBy
   */
  public function setCreatedBy(User $createdBy): void
  {
    $this->createdBy = $createdBy;
  }

  /**
   * @return User
   */
  public function getUpdatedBy(): User
  {
    return $this->updatedBy;
  }

  /**
   * @param User $updatedBy
   */
  public function setUpdatedBy(User $updatedBy): void
  {
    $this->updatedBy = $updatedBy;
  }

}