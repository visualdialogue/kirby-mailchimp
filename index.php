<?php

namespace visualdialogue\Mailchimp;


\Kirby::plugin('visualdialogue/mailchimp', [

    'options' => [
        'formaction' => 'MAILCHIMP_FORM_URL',
        'botinputname' => 'BOT_INPUT_FIELD_NAME_ATTRIBUTE_VALUE'
    ],

    'snippets' => [
        'mailchimp-form' => __DIR__ . '/src/snippets/mailchimp-form.php'
    ]
    
]);