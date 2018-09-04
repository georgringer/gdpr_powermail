<?php
defined('TYPO3_MODE') or die();

$tca = \GeorgRinger\Gdpr\Service\Tca::getInstance('tx_powermail_domain_model_mail');
$tca
    ->addRestriction('gdpr_restricted')
    ->add('after:receiver_mail');