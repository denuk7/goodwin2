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
    $cacheKey = '123';

    $cachedItem = $this->get('cache.app')->getItem($cacheKey);

    if (false === $cachedItem->isHit()) {
      $cachedItem->set($cacheKey, 'some value');
      $this->get('cache.app')->save($cachedItem);
    }

    return $this->render('test.html.twig', [
      'hit' => $cachedItem->isHit(),
    ]);
  }
}