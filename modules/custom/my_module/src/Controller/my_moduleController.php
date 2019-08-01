<?php

namespace Drupal\my_module\Controller;


use Drupal\Component\Datetime\Time;


use Drupal\Core\Controller\ControllerBase;


class my_moduleController extends ControllerBase {


  public function test()
  {



    return array(
      '#markup' => t('Creacion de un nuevo modulo con exito'),

);
  }}

