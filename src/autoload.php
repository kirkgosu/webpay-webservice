<?php
require 'libs/php-wss-validation-master/wss/xmlseclibs.php';
require 'libs/php-wss-validation-master/wss/soap-wsse.php';
require 'libs/php-wss-validation-master/wss/soap-validation.php';

define('PRIVATE_KEY', dirname(__FILE__) . '/certs/597020000541.key');
define('CERT_FILE', dirname(__FILE__) . '/certs/597020000541.crt');
define('SERVER_CERT', dirname(__FILE__) . '/certs/tbk.pem');

require 'WebpaySoapClient.php'; //Abstracción de SoapClient para WebpayPlus
require 'WebpayService.php'; //Servicio WebpayPlus
require 'WebpayNormalTransaction.php'; //Transacciones