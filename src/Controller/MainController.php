<?php
/**
 * Created by PhpStorm.
 * User: Kompas
 * Date: 17.04.2018
 * Time: 15:57
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends AbstractController
{
  /**
   * @Route("/test", name="test")
   */
  public function test()
  {
    return new JsonResponse('TEST');
  }
}