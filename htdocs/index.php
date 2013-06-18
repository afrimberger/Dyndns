<?php
/*
 * DynDNS Server Script
 * Copyright (c) 2007 Nico Kaiser
 *  
 * http://siriux.net/
 */

/**
 * This script takes the same parameters as the original members.dyndns.org 
 * server does. It can update a BIND DNS server.
 * 
 * The syntax is described here:
 * http://www.dyndns.com/developers/specs/syntax.html
 * 
 * Remember: This script must be run as 
 *     http://members.dyndns.org/nic/update
 * 
 * @author Nico Kaiser <nico@siriux.net>
 * @version $Revision: 13 $
 */

error_reporting(E_ALL);
require_once(dirname(__FILE__) . '/classes/Dyndns.class.php');

$GLOBALS['dyndns'] =& new Dyndns();
$dyndns =& $GLOBALS['dyndns'];

@include(dirname(__FILE__). '/config.php');

$dyndns->init();

?>