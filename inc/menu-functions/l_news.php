<?php
/**
 * DZCP - deV!L`z ClanPortal 1.7.0
 * http://www.dzcp.de
 * Menu: Last News
 */

function l_news() {
    $qry = common::$sql['default']->select("SELECT `id`,`titel`,`autor`,`datum`,`kat`,`public`,`timeshift` "
                      . "FROM `{prefix_news}` "
                      . "WHERE `public` = 1 AND `datum` <= ? ".(common::permission("intnews") ? "" : "AND `intern` = 0")." "
                      . "ORDER BY `id` DESC LIMIT ".settings::get('m_lnews').";",array(time()));

    $l_news = '';
    if(common::$sql['default']->rowCount()) {
        foreach($qry as $get) {
            $getkat = common::$sql['default']->fetch("SELECT `kategorie` FROM `{prefix_newskat}` WHERE `id` = ?;",array($get['kat']));
            $info = !settings::get('allowhover') == 1 ? '' : 'onmouseover="DZCP.showInfo(\''.common::jsconvert(stringParser::decode($get['titel'])).'\', \''.
                  _datum.';'._autor.';'._news_admin_kat.';'._comments_head.'\', \''.date("d.m.Y H:i", $get['datum'])._uhr.';'.
                common::fabo_autor($get['autor']).';'.common::jsconvert(stringParser::decode($getkat['kategorie'])).';'.
                common::cnt('{prefix_newscomments}',"WHERE `news` = ?","id",array($get['id'])).'\')" onmouseout="DZCP.hideInfo()"';

            $l_news .= show("menu/last_news", array("id" => $get['id'],
                                                    "titel" => common::cut(stringParser::decode($get['titel']),settings::get('l_lnews')),
                                                    "datum" => date("d.m.Y", $get['datum']),
                                                    "info" => $info));
        }
    }

    return empty($l_news) ? '<center style="margin:2px 0">'._no_entrys.'</center>' : '<table class="navContent" cellspacing="0">'.$l_news.'</table>';
}