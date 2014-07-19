<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Form\FormBase;

/**
* Iform 
*/
class Iform extends FormBase
{

    public function buildForm(array $form, array &$form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => 'Name',
            '#default_value' => 'Simon',
            '#required' => true,
            '#description' => 'Your name.',
        ];

        $form['mail'] = [
            '#type' => 'email',
            '#title' => 'Email',
            '#default_value' => 'simon@gmail.com',
        ];

        $form['actions']['submit'] = ['#type' => 'submit', '#value' => 'Send'];

        return $form;
    }

    public function getFormId()
    {
        return 'hello.iform';
    }

    public function submitForm(array &$form, array &$form_state)
    {
        $msg = l("Hello {$form_state['values']['name']}", 'mailto:' . $form_state['values']['mail']);
        drupal_set_message($msg);
    }

    public function validateForm(array &$form, array &$form_state)
    {
        if (strpos($form_state['values']['mail'], '@gmail.com')) {
            $this->setFormError('mail', $form_state, 'Please do not use Google Mail');
        }
    }

}