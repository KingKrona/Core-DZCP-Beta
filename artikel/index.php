<?php
/**
 * DZCP - deV!L`z ClanPortal 1.7.0
 * http://www.dzcp.de
 */

## OUTPUT BUFFER START ##
include("../inc/buffer.php");

## INCLUDES ##
include(basePath."/inc/common.php");

## SETTINGS ##
$where = _site_artikel;
$dir = "artikel";
define('_Artikel', true);
$smarty = common::getSmarty(); //Use Smarty

## SECTIONS ##
$action = empty($action) ? 'default' : $action;
if (file_exists(basePath . "/artikel/case_" . $action . ".php")) {
    require_once(basePath . "/artikel/case_" . $action . ".php");
}

## INDEX OUTPUT ##
$title = common::$pagetitle." - ".$where;
common::page($index, $title, $where);