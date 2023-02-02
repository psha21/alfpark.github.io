<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Отправка новой формы',
    'email_message' => 'У вас есть новая отправка формы',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'pstupak81@mail.ru',
    'to' => 'pstupak81@mail.ru'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>