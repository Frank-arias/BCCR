<?php


 namespace Drupal\drupalup_simple_form\Form;


   use Drupal\Core\Form\FormBase;
   use Drupal\Core\Form\FormStateInterface;

   /**
    * Our simple form class.
    */
   class SimpleForm extends FormBase{
     /**
      * {@inheritdoc}
      */

     public function getFormId() {

       return 'drupalup_simple_form';

     }

     /**
      * {@inheritdoc}
      */

     public function buildForm(array $form, FormStateInterface $form_state) {
       // TODO: Implement buildForm() method.
       $form['number_1'] = array(
         '#title' => t('First number'),
         '#type' => 'textfield',
       );
       $form['number_2'] = array(
         '#title' => t('second number'),
         '#type' => 'textfield',
       );
       $form['submit'] = array(
         '#type' => 'submit',
         '#value' => t('Submit'),
       );


       return $form;

     }
     /**
      * {@inheritdoc}
      */
public function submitForm(array &$form, FormStateInterface $form_state) {
  // TODO: Implement submitForm() method.
 $drupa=drupal_set_message($form_state->getValue('number_1')+$form_state->getValue('number_2'));


}
   }
