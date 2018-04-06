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
use Sonata\CoreBundle\Form\Type\DatePickerType;
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
      ->add('date_start', DatePickerType::class, array(
        'dp_pick_time' => false,
        'dp_side_by_side'       => true,
        'dp_use_current'        => false,
        'dp_collapse'           => true,
        'dp_calendar_weeks'     => false,
        'dp_view_mode'          => 'days',
        'dp_min_view_mode'      => 'days',
        'format'=>'yyyy-MM-dd'
      ))
      ->add('date_end', DatePickerType::class, array(
        'dp_pick_time' => false,
        'dp_side_by_side'       => true,
        'dp_use_current'        => false,
        'dp_collapse'           => true,
        'dp_calendar_weeks'     => false,
        'dp_view_mode'          => 'days',
        'dp_min_view_mode'      => 'days',
        'format'=>'yyyy-MM-dd'
      ))
    ;
  }

  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
      ->add('status', null, array('template' => 'status_cell.html.twig'))
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