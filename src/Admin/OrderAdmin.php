<?php
/**
 * Created by PhpStorm.
 * User: Kompas
 * Date: 03.04.2018
 * Time: 18:37
 */

namespace App\Admin;

use App\Entity\BlogPost;
use App\Entity\Order;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\Filter\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Category;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OrderAdmin  extends AbstractAdmin
{
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('status', TextType::class)
      ->add('date_start', DateType::class)
      ->add('date_end', DateType::class)
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
      ->add('status')
      ->add('date_start')
      ->add('date_end')
      ->add('created_at')
      ->add('created_by')
      ->add('updated_at')
      ->add('updated_by')
    ;
  }

  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
//    $datagridMapper
//      ->add('title')
//      ->add('category', null, [], EntityType::class, [
//        'class'    => Category::class,
//        'choice_label' => 'name',
//      ]);
  }

  public function toString($object)
  {
    return $object instanceof Order
      ? $object->getId()
      : 'New Order';
  }
}