<?php
/**
 * DZCP - deV!L`z ClanPortal 1.7.0
 * http://www.dzcp.de
 */

if(defined('_Artikel')) {
    $getkat = common::$sql['default']->fetch("SELECT `katimg` FROM `{prefix_newskat}` WHERE `id` = ?;",array(intval($_POST['kat'])));
    $links1 = ""; $links2 = ""; $links3 = ""; $links = "";
    if($_POST['url1']) {
        $rel = _related_links;
        $links1 = show(_artikel_link, array("link" => stringParser::decode($_POST['link1']),
                                            "url" => common::links(stringParser::decode($_POST['url1']))));
    }
    
    if($_POST['url2']) {
        $rel = _related_links;
        $links2 = show(_artikel_link, array("link" => stringParser::decode($_POST['link2']),
                                            "url" => common::links(stringParser::decode($_POST['url2']))));
    }
    
    if($_POST['url3']) {
        $rel = _related_links;
        $links3 = show(_artikel_link, array("link" => stringParser::decode($_POST['link3']),
                                            "url" => common::links(stringParser::decode($_POST['url3']))));
    }

    if(!empty($links1) || !empty($links2) || !empty($links3)) {
        $links = show(_artikel_links, array("link1" => $links1,
                                            "link2" => $links2,
                                            "link3" => $links3,
                                            "rel" => $rel));
    }

    $artikelimage = '../inc/images/newskat/'.stringParser::decode($getkat['katimg']);
    foreach(array("jpg", "gif", "png") as $tmpendung) {
        if(file_exists(basePath."/inc/images/uploads/artikel/".$get['id'].".".$tmpendung)) {
            $artikelimage = '../inc/images/uploads/artikel/'.$get['id'].'.'.$tmpendung;
            break;
        }
    }

    //BBCODE TEST
    $input = stringParser::decode($_POST['artikel'],false);

    $bbcode = new BBCode();
    $bbcode->SetTagMarker('[');
    $bbcode->SetAllowAmpersand(false);
    $bbcode->SetEnableSmileys(false);
    $bbcode->SetDetectURLs(true);
    $bbcode->SetPlainMode(false);

    $html = $bbcode->Parse($input);
    
    $index = show($dir."/show_more", array("titel" => $_POST['titel'],
                                           "id" => $get['id'],
                                           "comments" => "",
                                           "display" => "inline",
                                           "kat" => $artikelimage,
                                           "notification_page" => "",
                                           "showmore" => $showmore,
                                           "text" => $html,
                                           "datum" => date("j.m.y H:i")._uhr,
                                           "links" => $links,
                                           "autor" => common::autor(common::$userid)));

    common::update_user_status_preview();
    header('Content-Type: text/html; charset=utf-8');
    exit(utf8_encode('<table class="mainContent" cellspacing="1">'.$index.'</table>'));
}