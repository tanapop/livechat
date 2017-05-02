<?php

return array (
  'dbHost' => '127.0.0.1',
  'dbPort' => '8889',
  'dbUser' => 'root',
  'dbPassword' => 'mysql16902',
  'dbName' => 'livechat',
  'superUser' => 'admin',
  'superPass' => 'giuseppe16902',
  'services' => 
  array (
    'mailer' => 
    array (
      'smtp' => 'true',
      'smtpSecure' => 'ssl',
      'smtpHost' => 'smtp.gmail.com',
      'smtpPort' => '465',
      'smtpUser' => 'mail.consiglio@gmail.com',
      'smtpPass' => 'gmail16902',
    ),
  ),
  'appSettings' => 
  array (
    'contactMail' => 'mail.consiglio@gmail.com',
  ),
);

?>