<?php

namespace Drupal\hello_world\Controller;


use Drupal\Component\Datetime\Time;


use Drupal\Core\Controller\ControllerBase;


class HelloController extends ControllerBase {


  public function content()
  {

    ini_set('date.timezone', 'America/Costa_Rica');
    $cero = strtotime('-0 Days');
    $hoy=(date('d/m/Y',$cero ));
    $uno = strtotime('-4 Days');
    $primeros=(date('d/m/Y',$uno ));
    $one = strtotime('-1 Days');

    $unos = strtotime('-2 Days');

    $ceros = strtotime('-3 Days');


    $response0 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$primeros&tcFechaFinal=$hoy&tcNombre=Nombre&tnSubNiveles=N");
    $data0 = (string) $response0->getBody()->getContents();
    $response5 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$primeros&tcFechaFinal=$hoy&tcNombre=Nombre&tnSubNiveles=N");
      $data5 = (string) $response5->getBody()->getContents();


           $xml5=explode(NUM_VALOR,$data5);
    $xml0=explode(NUM_VALOR,$data0);

    return array(



      '#type' => 'markup',
      '#markup' => $this->t('Vamos con todo!'),
      $form['Banco'] = array(
        '#type' => 'table',
        '#caption' => $this
          ->t('Cambio de dolar en el BCR'),
        '#header' => array(
          $this
            ->t('Fecha'),
          $this
            ->t('Compra'),
          $this
            ->t('Venta'),
        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(

          $this
            ->t(date('y-m-d',$cero)),
          $this
            ->t($xml0[1]),
          $this
            ->t($xml5[1]),
        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(

          $this
            ->t(date('y-m-d',$one)),
          $this
            ->t( $xml0[3]),
          $this
            ->t($xml5[3]),
        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(

          $this
            ->t(date('y-m-d',$unos)),
          $this
            ->t($xml0[5]),
          $this
            ->t($xml5[5]),
        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(

          $this
            ->t(date('y-m-d',$ceros)),
          $this
            ->t($xml0[7]),
          $this
            ->t($xml5[7]),

        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(

          $this
            ->t(date('y-m-d',$uno)),
          $this
            ->t($xml0[9]),
          $this
            ->t($xml5[9]),
        ),
      ),
    );
  }}

