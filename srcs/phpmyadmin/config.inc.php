<?php

$cfg['blowfish_secret'] = 'jeuto4kjcugre8gjernodr9gjoiu4nui';
if ($_SERVER['HTTP_X_FORWARDED_HOST'])
    $cfg['PmaAbsoluteUri'] = "http://${_SERVER['HTTP_HOST']}/phpmyadmin/";

$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'mysql-svc:3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg ['TempDir'] = '/var/www/phpmyadmin/tmp';
