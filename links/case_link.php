<?php
/**
 * DZCP - deV!L`z ClanPortal - Mainpage ( dzcp.de )
 * deV!L`z Clanportal ist ein Produkt von CodeKing,
 * geändert durch my-STARMEDIA und Codedesigns.
 *
 * Diese Datei ist ein Bestandteil von dzcp.de
 * Diese Version wurde speziell von Lucas Brucksch (Codedesigns) für dzcp.de entworfen bzw. verändert.
 * Eine Weitergabe dieser Datei außerhalb von dzcp.de ist nicht gestattet.
 * Sie darf nur für die Private Nutzung (nicht kommerzielle Nutzung) verwendet werden.
 *
 * Homepage: http://www.dzcp.de
 * E-Mail: info@web-customs.com
 * E-Mail: lbrucksch@codedesigns.de
 * Copyright 2017 © CodeKing, my-STARMEDIA, Codedesigns
 */

if (!defined('_Links')) exit();

$get = common::$sql['default']->fetch("SELECT `url`,`id` FROM `{prefix_links}` WHERE `id` = ?;", [(int)($_GET['id'])]);
if(common::count_clicks('link',$get['id']))
    common::$sql['default']->update("UPDATE `{prefix_links}` SET `hits` = (hits+1) WHERE `id` = ?;", [$get['id']]);

header("Location: ".stringParser::decode($get['url']));