<?php
$meta['name'] = array('string');
$meta['logourl'] = array('string');
// $meta['localname'] = array('string');
// $meta['jshidelocal'] = array('onoff');

$meta['server'] = array('string');
$meta['rootcas'] = array('string');
$meta['port'] = array('string');
$meta['samlValidate'] = array('onoff');

$meta['handlelogoutrequest'] = array('onoff');
$meta['handlelogoutrequestTrustedHosts'] = array('string');

// $meta['caslogout'] = array('onoff');
// $meta['autologin'] = array('onoff');
// an additional switch for logging out would need to be set otherwise the user will be loged in again after the logout.
$meta['autologinout'] = array('onoff');

// $meta['localusers'] = array('onoff');
$meta['minimalgroups'] = array('string');
