<?php
/**
 * DZCP - deV!L`z ClanPortal - Mainpage ( dzcp.de )
 * deV!L`z Clanportal ist ein Produkt von CodeKing,
 * geändert dürch my-STARMEDIA und Codedesigns.
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

setlocale(LC_ALL, "en_US.utf8");
$charset = 'utf-8';

$language_text['_perm_fileman'] = 'Uploads verwalten';

## Fileman ##
$language_text['_perm_fileman'] = 'manage uploads';
$language_text['_fileman_uploads_'] = '## Global ##';
$language_text['_fileman_group_'] = '## Groups ##';
$language_text['_fileman_public_'] = '## Public ##';
$language_text['_fileman_users_'] = '## User ##';
$language_text['_fileman_error_unknown'] = 'Unknown error';
$language_text['_fileman_error_zip_creating'] = 'Error creating zip archive.';
$language_text['_fileman_error_permissons'] = 'You have no permissions to make a change here';
$language_text['_fileman_error_permissons_root'] = 'Das ROOT-Verzeichnis kann nicht ge&auml;ndert werden!';
$language_text['_fileman_error_create_dir_invalid_path'] = 'Cannot create directory - path doesn\'t exist';
$language_text['_fileman_error_create_dir_failed'] = 'Error creating directory';
$language_text['_fileman_error_create_dir_exists_failed'] = 'Der Ordner "{$dir}" existiert bereits!';
$language_text['_fileman_error_cannot_delete_root'] = 'Cannot delete root folder';
$language_text['_fileman_error_cannot_delete_dir'] = 'Error deleting directory "{$dir}"';
$language_text['_fileman_error_delete_dir_invalid_path'] = 'Cannot delete directory - the path doesn\'t exist "{$dir}"';
$language_text['_fileman_error_rename_file'] = 'Error renaming file "{$dir}"';
$language_text['_fileman_error_rename_file_invalid_path'] = 'Cannot rename file - file doesn\'t exist "{$dir}"';
$language_text['_fileman_error_rename_dir'] = 'Error renaming folder "{$dir}"';
$language_text['_fileman_error_rename_dir_invalid_path'] = 'Cannot rename folder - folder doesn\'t exist "{$dir}"';
$language_text['_fileman_error_copy_dir_invalid_path'] = 'Cannot copy directory - folder doesn\'t exist "{$dir}"';
$language_text['_fileman_error_copy_dir'] = 'Error on folder copy "{$dir}"';
$language_text['_fileman_error_upload_extension'] = 'Dateitypen können nicht bearbeitet werden - ungültige extensions';
$language_text['_fileman_error_upload_all'] = 'Fehler beim uploaden einiger dateien';
$language_text['_fileman_error_upload_no_files'] = 'Keine Dateien zum uploaden oder Datei zu gross.';

## DEV ##
$language_text['_config_test_menu_template'] = 'Test in Template Menu';

## Allgemein ##
$language_text['_error_no_html5_vid'] = 'Your browser does not support the video tag.';
$language_text['_button_title_del'] = 'Delete';
$language_text['_button_title_edit'] = 'Edit';
$language_text['_button_title_zitat'] = 'Quote this entry';
$language_text['_button_title_comment'] = 'Comment this entry';
$language_text['_button_title_menu'] = 'Set to menu';
$language_text['_button_value_add'] = 'Insert';
$language_text['_button_value_addto'] = 'Add';
$language_text['_button_value_edit'] = 'Edit';
$language_text['_button_value_search'] = 'Search';
$language_text['_button_value_search1'] = 'Start search';
$language_text['_button_value_upload'] = 'Upload';
$language_text['_button_value_vote'] = 'Vote';
$language_text['_button_value_show'] = 'Show';
$language_text['_button_value_do_show'] = 'don`t Show';
$language_text['_button_value_send'] = 'Send';
$language_text['_button_value_reg'] = 'Register';
$language_text['_button_value_msg'] = 'Send message';
$language_text['_button_value_nletter'] = 'Send newsletter';
$language_text['_button_value_config'] = 'Save configuration';
$language_text['_button_value_clear'] = 'Clear database';
$language_text['_button_value_save'] = 'Save';
$language_text['_editor_from'] = 'From';
$language_text['intern'] = '<span class="fontWichtig">Internal</span>';
$language_text['_comments_head'] = 'Comments';
$language_text['_click_close'] = 'close';
$language_text['_lang_de'] = 'German';
$language_text['_lang_uk'] = 'English';
$language_text['_template'] = 'Template';
$language_text['_perm_editby'] = 'Editby verwalten';
$language_text['_private'] = 'Private';
$language_text['_group'] = 'Group';

## Lost Password ##
$language_text['_admin_lpwd_subj'] = 'Subject: Reset password';
$language_text['_admin_lpwd'] = 'Reset password template';

## ADDED / REDEFINED FOR 1.7.0
$language_text['_years'] = 'Years';
$language_text['_year'] = 'Year';
$language_text['_months'] = 'Months';
$language_text['_month'] = 'Month';
$language_text['_weeks'] = 'Weeks';
$language_text['_week'] = 'Week';
$language_text['_days'] = 'Days';
$language_text['_day'] = 'Day';
$language_text['_hours'] = 'Hours';
$language_text['_hour'] = 'Hour';
$language_text['_minutes'] = 'Minutes';
$language_text['_minute'] = 'Minute';
$language_text['_seconds'] = 'Seconds';
$language_text['_second'] = 'Second';

$language_text['_server_ip'] = 'Server-IP';
$language_text['_aktion'] = 'Action';
$language_text['_config_activate_user'] = 'Activate User';
$language_text['_profil_admin_locked'] = 'Account isn`t activated';
$language_text['_profil_locked'] = 'Your account isn`t activated, <a href="?index=user&amp;action=akl&do=send" target="_self">&lt; get activation mail &gt;</a>';
$language_text['_profil_closed'] = 'Your account is barred.';
$language_text['_admin_akl_regist_subj'] = 'Subject: account activation mail';
$language_text['_admin_akl_regist'] = 'account activation mail template';
$language_text['_reg_akl_invalid'] = 'This link for account activation is exhausted!';
$language_text['_reg_akl_valid'] = 'Your account has been activated!';
$language_text['_reg_akl_sended'] = 'Your activation-code sent to "{$email}", check your inbox';
$language_text['_reg_akl_email_nf'] = 'An account with this email doesn`t exist!';
$language_text['_reg_akl_locked'] = 'This account ist permanently banned!';
$language_text['_reg_akl_activated'] = 'Your Account is already activated';
$language_text['_lostpwd_valid_sended'] = 'An activation-code for your account sent to your email, check your inbox!';
$language_text['_info_reg_valid_akl'] = 'Registration complete!<br /><br /> Bitte aktiviere deinen Account &uuml;ber die Aktivierungs-eMail, die wir dir an deine E-Mail Adresse gesendet haben.<br /><br />Deine Zugangsdaten wurden dir an deine E-Mail Adresse "{$email}" versandt.';
$language_text['_info_reg_valid_akl_ad'] = 'Du hast dich erfolgreich registriert!<br /><br />Deinen Account wird nach einer Pr&uuml;fung durch die Administratoren dieser Seite aktiviert.<br /><br />Deine Zugangsdaten wurden dir an deine E-Mail Adresse "{$email}" versandt.';
$language_text['_button_value_activate'] = 'Aktivieren';
$language_text['_activate_code'] = 'Aktivierungscode';
$language_text['_activate_head'] = 'Account aktivieren';
$language_text['_perm_activateusers'] = 'Account Aktivierungen verwalten';
$language_text['_admin_akl_sended'] = 'gesendet';
$language_text['_admin_akl_activated'] = 'Activations';
$language_text['_actived'] = 'User account activated!';
$language_text['_button_title_akl'] = 'Activate account';
$language_text['_admin_akl_resend'] = 'Aktivierungslink wurde an "{$email}" versandt.';
$language_text['_akl'] = 'Aktivierungsmails';
$language_text['_akl_info'] = 'Sollen Aktivierungsmails bei Neuregistrierungen verwendet werden';
$language_text['_akl_send'] = 'Aktivierungsmail senden';
$language_text['_akl_only_admin'] = 'Nur &uuml;ber Administrator';
$language_text['_button_activate_user'] = 'User aktivieren';
$language_text['_button_del_user'] = 'User l&ouml;schen';
$language_text['_users_deleted'] = 'User gel&ouml;scht';
$language_text['_actived_all'] = 'User Accounts wurden aktiviert!';
$language_text['_config_c_cache'] = 'Cache';
$language_text['_config_c_cache_provider'] = 'Cache Provider';
$language_text['_config_c_cache_mem_host'] = 'Memcache Host';
$language_text['_config_c_cache_mem_port'] = 'Memcache Port';
$language_text['_default'] = 'Default';
$language_text['_smtp_host'] = 'SMTP Host';
$language_text['_smtp_port'] = 'SMTP Port';
$language_text['_smtp_username'] = 'SMTP Username';
$language_text['_smtp_passwort'] = 'SMTP Passwort';
$language_text['_smtp_tls_ssl'] = 'Verschl&uuml;sselung';
$language_text['_smtp_sendmail_path'] = 'Sendmail Path';
$language_text['_admin_eml_config_head'] = 'E-Mail Settings';
$language_text['_admin_eml_config_ext'] = 'Mail-Extension';
$language_text['_feeds'] = 'News Feeds *rss';
$language_text['_feeds_info'] = 'Switches the automatically RSS feeds to on or off';
$language_text['_pwd_encoder_algorithm'] = 'Algorithm';
$language_text['_pwd_encoder'] = 'Password-Hash Algorithm';
$language_text['_pwd_encoder_info'] = 'Which password hash algorithm to use, default is * SHA256';
$language_text['_iban'] = 'IBAN';
$language_text['_bic'] = 'BIC';
$language_text['_login_head_admin'] = 'Administrator Login';
$language_text['_no_entrys'] = 'No entrys';
$language_text['_profil_edit_almgr_link'] = '<a href="?action=editprofile&amp;show=almgr">Autologin editieren</a>';
$language_text['_almgrhead'] = 'Autologin verwalten';
$language_text['_almgr_host'] = 'Host';
$language_text['_almgr_ip'] = 'IP-Adresse';
$language_text['_almgr_create'] = 'Angelegt';
$language_text['_almgr_lused'] = 'Verwendet';
$language_text['_almgr_expires'] = 'G&uuml;ltig bis';
$language_text['_almgr_name'] = 'Ger&auml;tename';
$language_text['_almgr_edit_head'] = 'Autologin bearbeiten';
$language_text['_almgr_ssid'] = 'Session-ID';
$language_text['_almgr_pkey'] = 'Permanent-Key';
$language_text['_almgr_editd'] = 'Autologin erfolgreich bearbeitet';
$language_text['_almgr_add'] = '<a href="?action=editprofile&amp;show=almgr&amp;do=self_add">Dieses Ger&auml;t hinzuf&uuml;gen</a>';
$language_text['_almgr_remove'] = '<a href="?action=editprofile&amp;show=almgr&amp;do=self_remove">Dieses Ger&auml;t entfernen</a>';
$language_text['_info_almgr_deletet'] = 'Automatische Anmeldung wurde erfolgreich entfernt';
$language_text['_info_almgr_self_deletet'] = 'Dieses Ger&auml;t wurde erfolgreich entfernt';
$language_text['_info_almgr_self_added'] = 'Dieses Ger&auml;t wurde erfolgreich eingetragen';
$language_text['_profile_access_error'] = 'This profile is accessible only to members';
$language_text['_pedit_visibility_profile'] = 'My Profile';
$language_text['_paginator_previous'] = 'Previous';
$language_text['_paginator_next'] = 'Next';
$language_text['_admin_bezeichnung'] = 'Description';
$language_text['_custom_game_icon'] = 'Custom-Icon';
$language_text['_custom_game_icon_none'] = 'Not use custom icon';
$language_text['_addons'] = 'Add-ons';
$language_text['_capcha_sound_info'] = 'Click for Play Audio-CAPTCHA';
$language_text['_notification_error'] = 'Error';
$language_text['_notification_success'] = 'Success';
$language_text['_notification_notice'] = 'Notice';
$language_text['_notification_warning'] = 'Warning';
$language_text['_notification_custom'] = 'Custom';
$language_text['_color'] = 'Color';
$language_text['_description'] = 'Description';
$language_text['_replies'] = 'Replies';
$language_text['_no_entrys_found'] = '<tr>
  <td class="contentMainFirst" colspan="[colspan]" align="center">No entrys found</td>
</tr>';
$language_text['_admin_news_readed'] = 'Readed';
$language_text['_admin_news_refresh'] = 'Refresh';

//Forum
$language_text['_forum_stats_top5'] = 'Statistics and Top 5 Posters';
$language_text['_forum_who_is_online'] = 'Who is online?';
$language_text['_forum_last_post'] = 'View the latest post';
$language_text['_forum_online_info0'] = 'In total there are <b>{$users}</b> users online: <b>{$regs}</b> registered and <b>{$gast}</b> guests (based on users active over the past {$timer} minutes)';
$language_text['_forum_online_info1'] = 'Registered users';
$language_text['_forum_gast'] = 'guests';
$language_text['_forum_gaste'] = 'guests';
$language_text['_forum_regs'] = 'registered';
$language_text['_forum_reg'] = 'registered';
$language_text['_forum_ist'] = ''; //Not used
$language_text['_forum_sind'] = ''; //Not used
$language_text['_forum_total_posts'] = 'Total posts';
$language_text['_forum_total_topics'] = 'Total topics';
$language_text['_forum_total_members'] = 'Total members';
$language_text['_forum_newest_member'] = 'Our newest member';
$language_text['_forum_new_thread'] = 'New Thread';
$language_text['_forum_sort_bcc'] = 'Subject';
$language_text['_forum_sort_time'] = 'Creation Date';
$language_text['_forum_sort_by'] = 'Sort by';
$language_text['_forum_sort_descending'] = 'Descending';
$language_text['_forum_sort_ascending'] = 'Ascending';
$language_text['_forum_go'] = 'Go';
$language_text['_forum_from'] = 'From';
$language_text['_forum_admin_closed'] = 'Close vote';
$language_text['_forum_admin_editby'] = 'der Nachricht "<span class="fontWichtig">zuletzt editiert</span>" anh&auml;ngen?';
$language_text['_forum_thread_lpost'] = 'from {$nick}<br />at {$date}{lang msgID="uhr"}';
$language_text['_forum_search_word'] = 'Board search in...';

//Startpage
$language_text['_profil_startpage'] = 'Startseite';
$language_text['_config_startpage'] = 'Startseiten';
$language_text['_admin_startpage'] = 'Startseiten';
$language_text['_perm_startpage'] = 'Startseiten verwalten';
$language_text['_admin_startpage_url'] = 'Ziel URL';
$language_text['_admin_startpage_level'] = 'Sichtbar ab Level';
$language_text['_admin_startpage_name'] = 'Name';
$language_text['_admin_startpage_add_head'] = 'Neue Startseite anlegen';
$language_text['_admin_startpage_edit'] = 'Startseite bearbeiten';
$language_text['_admin_startpage_added'] = 'Startseite wurde erfogreich eingetragen';
$language_text['_admin_startpage_deleted'] = 'Startseite wurde erfogreich gel&ouml;scht';
$language_text['_admin_startpage_editd'] = 'Startseite wurde erfogreich editiert';
$language_text['_admin_startpage_no_name'] = 'Du hast keinen Namen eingegeben';
$language_text['_admin_startpage_no_url'] = 'Du hast keine URL eingegeben';
$language_text['_admin_startpage_add'] = 'Neue Startseite hinzuf�gen';

//IP Blocker
$language_text['_ipban_admin_head'] = 'IP Blocker';
$language_text['_config_ipban'] = 'IP Blocker';
$language_text['_confirm_del_ipban'] = 'Delete Record';
$language_text['_confirm_enable_ipban'] = 'Should the IP Ban for {$ip} be reactivated';
$language_text['_confirm_disable_ipban'] = 'Should the IP Ban for {$ip} be deactivated';
$language_text['_ipban_admin_deleted'] = 'The IP Ban has been successfully deleted!';
$language_text['_ipban_new_head'] = 'Add new IP Ban';
$language_text['_ipban_admin_added'] = ' The IP Ban has been successfully added';
$language_text['_ipban_edit_head'] = 'Edit IP Ban';
$language_text['_ipban_admin_edited'] = 'IP Ban has been successfully edited';
$language_text['_ipban_dis'] = 'Reason / Description';
$language_text['_ipban_add_new'] = 'New Record';
$language_text['_ipban_assuredness'] = 'Reliability';
$language_text['_ipban_reports'] = 'Reports';
$language_text['_ipban_lastten_global'] = 'Last 10 banned IPs by Stopforumspam.com ';
$language_text['_ipban_lastten_user'] = ' Last 10 banned IPs by User ';
$language_text['_ipban_search'] = 'IP Search';
$language_text['_ipban_error_pip'] = 'You cant ban private IP Addresses';
$language_text['_ipban_disable'] = 'Disable IP Ban';
$language_text['_ipban_enable'] = 'Enable IP Ban';
$language_text['_ip_empty'] = 'The IP is missing';
$language_text['_total_bans'] = 'Total Bans';
$language_text['_ipban_head_admin'] = 'IP-Bans';
$language_text['_perm_ipban'] = 'Manage IP-Bans';

## Navigation / Server ##
$language_text['_navi_gsv_players_online'] = 'Online';
$language_text['_navi_gsv_on_the_game'] = 'Players';
$language_text['_navi_gsv_view_players'] = 'View Players';
$language_text['_navi_gsv_game'] = 'Game';
$language_text['_navi_gsv_no_name_available'] = 'no Name available';
$language_text['_navi_gsv_no_players_available'] = 'no Players online';
$language_text['_navi_gsv_password'] = 'Password';

## ADDED / REDEFINED FOR 1.6.0 Final
$language_text['_txt_navi_main'] = 'Main Navigation';
$language_text['_txt_navi_clan'] = 'Clan Navigation';
$language_text['_txt_navi_misc'] = 'Misc Navigation';
$language_text['_txt_userarea'] = 'Userarea';
$language_text['_txt_vote'] = 'Vote';
$language_text['_txt_partners'] = 'Partners';
$language_text['_txt_sponsors'] = 'Sponsors';
$language_text['_txt_counter'] = 'Counter';
$language_text['_txt_l_news'] = 'News';
$language_text['_txt_ftopics'] = 'Topics';
$language_text['_txt_teams'] = 'Teams';
$language_text['_txt_template_switch'] = 'Switch Template';
$language_text['_txt_events'] = 'Events';
$language_text['_txt_kalender'] = 'Calendar';
$language_text['_txt_l_artikel'] = 'Articles';
$language_text['_txt_l_reg'] = 'new Users';
$language_text['_txt_motm'] = 'Member of the Moment';
$language_text['_txt_top_dl'] = 'Top Downloads';
$language_text['_txt_uotm'] = 'User of the Moment';

$language_text['_forum_kat'] = 'Categorie';

$language_text['_artikel_userimage'] = 'Own Articlepicture';
$language_text['_artikelpic_del'] = 'delete Articlepicture?';
$language_text['_artikelpic_deleted'] = 'Articlepicture successfully deleted';

$language_text['_news_userimage'] = 'Own Newspicture';
$language_text['_newspic_del'] = 'delete Newspicture?';
$language_text['_newspic_deleted'] = 'Newspicture successfully deleted';
$language_text['_max'] = 'max.';

$language_text['_perm_dlintern'] = 'View internal Downloads';

$language_text['_config_url_linked_head'] = 'URLs linking';

$language_text['_upload_error'] = 'Failed to upload the file!';
$language_text['_login_banned'] = 'Your account has been banned by administrator!';
$language_text['_lobby_no_mymessages'] = '<a href="../user/?action=msg">You have no new messages!</a>';

$language_text['_perm_protocol'] = 'can see admin protocol';
$language_text['_perm_support'] = 'can see support page';
$language_text['_perm_clear'] = 'clean database';
$language_text['_perm_forumkats'] = 'manage forums categories';
$language_text['_perm_impressum'] = 'manage impressum';
$language_text['_perm_config'] = 'manage configuration page';
$language_text['_perm_positions'] = 'manage user ranks';
$language_text['_perm_partners'] = 'manage partner';
$language_text['_perm_profile'] = 'manage profile fields';

## ADDED / REDEFINED FOR 1.5 Final
$language_text['_id_dont_exist'] = 'The requested ID does not exist!';

## ADDED / REDEFINED FOR 1.5.2
$language_text['_button_title_del_account'] = 'User-Account delete';
$language_text['_confirm_del_account'] = 'You really want to delete your Account on dzcp.de';
$language_text['_profil_del_account'] = 'Account delete';
$language_text['_info_account_deletet'] = 'Your Account has been successfully deleted!';
$language_text['_profil_del_admin'] = '<b>Deleting not possible!</b>';
$language_text['_news_get_timeshift'] = 'Timeshift News?';
$language_text['_news_timeshift_from'] = 'Show news from:';
$language_text['_placeholder'] = 'Template Placeholder';
$language_text['_menu_kats_head'] = 'Menu Categories';
$language_text['_menu_add_kat'] = 'Add new menu category';
$language_text['_confirm_del_menu'] = 'Dyo you really want to delet the menu category?';
$language_text['_menu_edit_kat'] = 'Edit menu category';
$language_text['_menukat_updated'] = 'The menu category has been successfully edited!';
$language_text['_menukat_inserted'] = 'The menu category has been successfully added!';
$language_text['_menukat_deleted'] = 'The menu category has been successfully deleted!';
$language_text['_menu_visible'] = 'visible for status';
$language_text['_menu_kat_info'] = 'The css classes for the link will be constructed from the template placeholder, automatically.<br />e.g. for the placeholder <i>[nav_main]</i>, the css class will be <i>a.navMain</i>';
$language_text['_admin_sqauds_roster'] = 'Team-Roster';
$language_text['_admin_squads_nav_info'] = 'This will put a direct link in the navigation, which target to full size of the Team.';
$language_text['_admin_squads_teams'] = 'Team-Show';
$language_text['_admin_squads_no_navi'] = 'Don\'t show';
$language_text['_config_cache_info'] = 'here you can set intervals, when teamspeak and gamserver will be reloaded. Outherwise the informations will be read from the cache.';
$language_text['_config_direct_refresh'] = 'Direct Forward';
$language_text['_config_direct_refresh_info'] = 'If activated, the site will be forwarded directly, instead of showing the status information.';
$language_text['_eintrag_titel_forum'] = '<a href="{$url}" title="Show this post"><span class="fontBold">#{$postid}</span></a> at {$datum} on {$zeit}{lang msgID="uhr"} {$edit} {$delete}';
$language_text['_eintrag_titel'] = '<span class="fontBold">#{$postid}</span> at {$datum} on {$zeit}{lang msgID="uhr"} {$edit} {$delete}';

## ADDED / REDEFINED FOR 1.5.1
$language_text['_config_double_post'] = 'Forum double post';
$language_text['_config_fotum_vote'] = 'Forum-Vote';
$language_text['_config_fotum_vote_info'] = '<div style="text-align: center;">Here you can specify whether a Forum-Vote also Vote to be displayed.</div>';

## ADDED / REDEFINED FOR 1.5
$language_text['_search_sites'] = 'Sites';
$language_text['_search_results'] = 'Search Results';
$language_text['_config_useradd_head'] = 'Add User';
$language_text['_config_adduser'] = 'Add User';
$language_text['_uderadd_info'] = 'The User has been successfully added';
$language_text['_useradd_head'] = 'Add new User';
$language_text['_useradd_about'] = 'Userdetails';
$language_text['_login_signup'] = 'Register';
$language_text['_login_lostpwd'] = 'Password?';
$language_text['_config_links'] = 'Links';
$language_text['_vote_menu_no_vote'] = 'no vote registered';
$language_text['_no_top_match'] = 'no top match registered!';
$language_text['_team_logo'] = 'Team Logo';
$language_text['_sq_banner'] = 'Teambanner';
$language_text['_forum_abo_title'] = 'Suscribe Thread';
$language_text['_forum_vote'] = 'Vote';
$language_text['_admin_user_clanhead_info'] = 'These permissions can be set <u>additional</u> to the permissions in the user ranks.';
$language_text['_user_noposi'] = '<option value="lazy" class="dropdownKat">no user rank</option>';
$language_text['_config_positions_boardrights'] = 'internal board permissions';
$language_text['_perm_contact'] = 'receive contact form';
$language_text['_perm_editkalender'] = 'manage calendar entries';
$language_text['_perm_forum'] = 'board admin';
$language_text['_perm_links'] = 'manage links';
$language_text['_perm_newsletter'] = 'manage newsletter';
$language_text['_perm_votesadmin'] = 'manage votes';
$language_text['_perm_artikel'] = 'manage articles';
$language_text['_perm_downloads'] = 'manage dowloads';
$language_text['_perm_editor'] = 'manage sites';
$language_text['_perm_editsquads'] = 'manage teams';
$language_text['_perm_editusers'] = 'can edit users';
$language_text['_perm_intnews'] = 'can read internal news';
$language_text['_perm_news'] = 'manage news';
$language_text['_perm_votes'] = 'can see internal votes';
$language_text['_config_positions_rights'] = 'Permissions';
$language_text['_config_positions'] = 'User Ranks';
$language_text['_admin_pos'] = 'User Ranks';
$language_text['_config_sponsors'] = 'Sponsors';
$language_text['_sponsors_admin_head'] = 'Sponsors';
$language_text['_sponsors_admin_add'] = 'Add Sponsor';
$language_text['_sponsor_added'] = 'The sponsor has been successfully registered!';
$language_text['_sponsor_edited'] = 'The sponsor has been successfully edited!';
$language_text['_sponsor_deleted'] = 'The sponsor has been successfully deleted!';
$language_text['_sponsor_name'] = 'Sponsorname';
$language_text['_sponsors_admin_name'] = 'Name';
$language_text['_sponsors_admin_site'] = 'Sponsor site';
$language_text['_sponsors_admin_addsite'] = 'To sponsorsite';
$language_text['_sponsors_admin_add_site'] = 'This banner will be displayed at the sponsor page';
$language_text['_sponsors_admin_upload'] = 'Pic-Upload';
$language_text['_sponsors_admin_url'] = 'or: Pic-URL';
$language_text['_sponsors_admin_banner'] = 'Rotation Banner';
$language_text['_sponsors_admin_addbanner'] = 'To Rotation-Banner';
$language_text['_sponsors_admin_add_banner'] = 'This banner will be displayed at the top of the rotationbanners';
$language_text['_sponsors_admin_box'] = 'Sponsor-Box';
$language_text['_sponsors_admin_addbox'] = 'To Sponsor-Box';
$language_text['_sponsors_admin_add_box'] = 'This banner will be displayed in the sponsors box';
$language_text['_sponsors_empty_name'] = 'Insert the name of the sponsor!';
$language_text['_sponsors_empty_beschreibung'] = 'You have to indicate a title tag!';
$language_text['_sponsors_empty_link'] = 'You have to indivate a link url!';
$language_text['_public'] = 'Public';
$language_text['_non_public'] = 'non Public';
$language_text['_no_public'] = '<b>unpublished</b>';
$language_text['_no_events'] = '<div style="text-align: center;">no events available</div>';
$language_text['_config_c_events'] = 'Menu: Events';
$language_text['_msg_all_leader'] = 'all Leader & Co-Leader';
$language_text['_msg_leader'] = 'Squad-Leader';
$language_text['_pos_nletter'] = 'Include this position in newsletter to Leader and Co-Leader';
$language_text['_pwd2'] = 'repeat password';
$language_text['_wrong_pwd'] = 'The password entered does not match';
$language_text['_info_reg_valid_pwd'] = 'You has been successfully registered and can login now with your access data!<br /><br />Your access data has been send to your email address [email], too.';
$language_text['_profil_pnmail'] = 'Email on new message';
$language_text['_admin_pn_subj'] = 'Subject: PN-Email';
$language_text['_admin_pn'] = 'PN-Email Template';
$language_text['_admin_fabo_npost_subj'] = 'Subject: Board Subscription: New Post';
$language_text['_admin_fabo_pedit_subj'] = 'Subject: Board Subscription: Post edit';
$language_text['_admin_fabo_tedit_subj'] = 'Subject: Board Subscription: Thread edit';
$language_text['_admin_fabo_npost'] = 'Board Subscription: New Post Template';
$language_text['_admin_fabo_pedit'] = 'Board Subscription: Post edit Template';
$language_text['_admin_fabo_tedit'] = 'Board Subscription: Thread edit Template';
$language_text['_foum_fabo_checkbox'] = 'Subscribe to this thread and for notification via e-mail about new posts?';
$language_text['_forum_fabo_do'] = 'E-Mail notification has been successfully edited!';
$language_text['_forum_vote_del'] = 'Delete Vote';
$language_text['_forum_vote_preview'] = 'Here the vote appears.';
$language_text['_forum_spam_text'] = '{$ltext}<p>&nbsp;</p><p>&nbsp;</p><span class="fontBold">Addendum by </span>{$autor}:<p>&nbsp;</p>{$ntext}';
####################################################################################
$language_text['_config_config'] = 'Global Settings';
$language_text['_config_dladmin'] = 'Downloads';
$language_text['_config_editor'] = 'Sites';
$language_text['_config_konto'] = 'Clancash';
$language_text['_config_dlkats'] = 'Download Categories';
$language_text['_config_nletter'] = 'Newsletter';
$language_text['_config_protocol'] = 'Adminprotocoll';
$language_text['_partnerbuttons_textlink'] = 'Textlink';
$language_text['_config_forum_subkats_add'] = '
    <form action="" method="get" onsubmit="DZCP.submitButton()">
      <input type="hidden" name="admin" value="forum" />
      <input type="hidden" name="do" value="newskat" />
      <input type="hidden" name="id" value="[id]" />
      <input id="contentSubmit" type="submit" class="submit" value="Insert sub-category" />
    </form>
';
$language_text['_msg_answer'] = 'Answer';
$language_text['_user_new_erase'] = '<form method="post" action="?action=userlobby"><input type="hidden" name="erase" value="1" /><input id="contentSubmit" type="submit" name="submit" class="submit" value="Mark all as readed" /></form>';
$language_text['_target'] = 'New window';
$language_text['_config_c_floods_what'] = 'Here you can adjust the time in secontds which a user have to wait<br />to write something new in this area';

## ADDED FOR 1.4.3
$language_text['_download_last_date'] = 'Last downloaded';

## EDITED FOR 1.4.1
$language_text['_ulist_normal'] = 'Rank &amp; Level';

## ADDED FOR 1.4.1
$language_text['_lobby_mymessages'] = '<a href="../user/?action=msg">You have <span class="fontWichtig">[cnt]</span> new messages!</a>';
$language_text['_lobby_mymessage'] = '<a href="../user/?action=msg">You have <span class="fontWichtig">1</span> new message!</a>';

## EDIT/ADDED FOR 1.4
$language_text['_protocol_action'] = 'Action';
$language_text['_protocol'] = 'Admin protocol';
$language_text['_button_title_del_protocol'] = 'Completely delete the protocol!';
$language_text['_protocol_deleted'] = 'The admin protocol was successfull deleted!';
$language_text['_vote_no_answer'] = 'You have to choose an answer!';
$language_text['_linkus_admin_edit'] = 'Edit linkus';
$language_text['_config_linkus'] = 'Linkus';
$language_text['_urls_linked_info'] = 'Convert text links into clickable hyperlinks';
$language_text['_sponsoren'] = 'Sponsors';
$language_text['_downloads'] = 'Downloads';
$language_text['_nachrichten'] = 'Messages';
$language_text['_edit_profile'] = 'Edit profile';
$language_text['_config_c_lartikel'] = 'Menu: Last article';
$language_text['_config_hover'] = 'Mouseover informations';
$language_text['_config_seclogin'] = 'Login securitycode';
$language_text['_config_hover_standard'] = 'Show standard informations';
$language_text['_config_hover_all'] = 'Show all informations';
$language_text['_error_vote_show'] = 'This is a public vote! Just internal votes can be shown detailed.';
$language_text['_login_pwd_dont_match'] = 'Loginname and/or password are invalid or account has been banned!';
$language_text['_sq_aktiv'] = 'Active';
$language_text['_sq_inaktiv'] = 'Inactive';
$language_text['_sq_sstatus'] = '<div style="text-align: center;">If checked, the team will be also shown in figtus form, etc</div>';
$language_text['_internal'] = 'Internal';
$language_text['_sticky'] = 'Important';
$language_text['_misc'] = 'Misc';
$language_text['_all'] = 'All';
$language_text['_admin_support_head'] = 'Support informations';
$language_text['_admin_support_info'] = 'The following informations are very helpful if you ask a support-question in the board of <a href="http://www.dzcp.de" target="_blank">www.dzcp.de</a>.';
$language_text['_config_support'] = 'Supportinformations';
$language_text['_search_con_or'] = 'OR-Operation';
$language_text['_search_con_and'] = 'AND-Operation';
$language_text['_search_head'] = 'Search';
$language_text['_search_word'] = 'Search in...';
$language_text['_search_forum_all'] = 'Search in all boards';
$language_text['_search_forum_hint'] = '(Through press the \'Strg key\', more<br />boards can be selected seperately)';
$language_text['_search_for_area'] = 'Searcharea';
$language_text['_search_type_full'] = 'Complete search';
$language_text['_search_type_title'] = 'Search in topics only';
$language_text['_search_type'] = 'Search type';
$language_text['_search_type_autor'] = 'Find authors';
$language_text['_search_type_text'] = 'Search in text and topics';
$language_text['_search_in'] = 'Search in...';
$language_text['_user_profile_of'] = 'Userprofile from ';
$language_text['_sites_not_available'] = 'The requested site does not exist!';
$language_text['_wrote'] = 'wrote';
$language_text['_voted_head'] = 'Already participated in the vote';
$language_text['_show_who_voted'] = 'Show user, who voted already';
$language_text['_no_live_status'] = 'No live status';
$language_text['_comment_edited'] = 'The comment was successfully edited!';
$language_text['_comments_edit'] = 'Edit comment';
$language_text['_forum_post_where_preview'] = '<a href="javascript:void(0)">[mainkat]</a> <span class="fontBold">Board:</span> <a href="javascript:void(0)">[wherekat]</a> <span class="fontBold">Thread:</span> <a href="javascript:void(0)">[wherepost]</a>';
$language_text['_aktiv_icon'] = '<img src="../inc/images/active.gif" alt="" class="icon" />';
$language_text['_inaktiv_icon'] = '<img src="../inc/images/inactive.gif" alt="" class="icon" />';
$language_text['_pn_write_forum'] = '<a href="../user/?action=msg&amp;do=pn&amp;id={$id}"><img src="{idir}/forum_pn.gif" alt="" title="write {$nick} a message" class="icon" /></a>';
$language_text['_uhr'] = 'h';
$language_text['_kalender_admin_head'] = 'Calendar - Events';
$language_text['_preview'] = 'Preview';
$language_text['_error_edit_post'] = 'You are not allowed to edit this entry!';
$language_text['_nletter_prev_head'] = 'Newsletter preview';
$language_text['_error_downloads_upload'] = 'There was an errow during the upload (filesize to big?)';
$language_text['_news_comments_prev'] = '<a href="javascript:void(0)">0 comments</a>';
$language_text['_only_for_admins'] = ' (IP is only visible for admins)';
$language_text['_content'] = 'Content';
$language_text['_rootadmin'] = 'Siteadmin';
$language_text['_nletter'] = 'Newsletter';
$language_text['_subject'] = 'Subject';
$language_text['_nletter_head'] = 'Write newsletter';
$language_text['_squad'] = 'Team';
$language_text['_confirm_del_vote'] = 'You really want to delete this vote?';
$language_text['_confirm_del_dl'] = 'You really want to deletethis download?';
$language_text['_confirm_del_entry'] = 'You really want to delete this entry?';
$language_text['_confirm_del_navi'] = 'You really want to delete this link?';
$language_text['_confirm_del_profil'] = 'You really want to delete this profile field?';
$language_text['_confirm_del_smiley'] = 'You really want to delete this smiley?';
$language_text['_confirm_del_kat'] = 'You really want to delete this category?';
$language_text['_confirm_del_artikel'] = 'You really want to delete this article?';
$language_text['_confirm_del_news'] = 'You really want to delete this news?';
$language_text['_confirm_del_site'] = 'You really want to delete this site?';
$language_text['_confirm_del_team'] = 'You really want to delete this team?';
$language_text['_confirm_del_ranking'] = 'You really want to delete this ranking?';
$language_text['_confirm_del_link'] = 'You really want to delete this link?';
$language_text['_confirm_del_sponsor'] = 'You really want to delete this sponsor?';
$language_text['_confirm_del_kalender'] = 'You really want to delete this event?';
$language_text['_link_type'] = 'Link type';
$language_text['_sponsor'] = 'Sponsor';
//-----------------------------------------------
$language_text['_main_info'] = 'Here you can set global settings like default language, default template, title of the site, etc...';
$language_text['_admin_eml_head'] = 'Emailtemplates';
$language_text['_admin_eml_info'] = 'Here you can edit the emailtemplates from different areas.<br />Make sure that you do not delete the placeholders in the triggers [...]!';
$language_text['_admin_reg_subj'] = 'Subject: Registration';
$language_text['_admin_pwd_subj'] = 'Subject: Lost password';
$language_text['_admin_nletter_subj'] = 'Subject: Newsletter';
$language_text['_admin_reg'] = 'Template for registration';
$language_text['_admin_pwd'] = 'Template for lost password';
$language_text['_admin_nletter'] = 'Template for newsletter';
$language_text['_result'] = 'Result';
$language_text['_opponent'] = 'Opponent';
$language_text['_played_at'] = 'Played at';
$language_text['_login_secure_help'] = 'To verify, put the two-digit number code in the inputfield.';
$language_text['_online_head_guests'] = 'Guests online';
$language_text['_admin_first'] = 'at first';
$language_text['_admin_squads_nav'] = 'Navigation';
$language_text['_admin_squad_show_info'] = 'Defined weather a team in the team overview is shown or not shown by default.';
//Edited
$language_text['_dl_getfile'] = 'download {$file} now';
$language_text['_partners_link_add'] = 'Insert partner button';
$language_text['_config_forum_kats_add'] = 'Insert category';
$language_text['_config_c_lnews'] = 'Menu: Last news';
$language_text['_msg_new'] = 'Write new message';
$language_text['_config_artikel'] = 'Article';
$language_text['_config_forum'] = 'Board categories';
$language_text['_config_gruppen'] = 'Groups';
$language_text['_config_news'] = 'News-/Article categories';
$language_text['_config_allgemein'] = 'Configuration';
$language_text['_config_impressum'] = 'Imprint';
$language_text['_config_downloads'] = 'Download categories';
$language_text['_config_newsadmin'] = 'News';
$language_text['_config_filebrowser'] = 'Filebrowser';
$language_text['_config_navi'] = 'Navigation';
$language_text['_config_online'] = 'Site administration';
$language_text['_config_partners'] = 'Partner buttons';
$language_text['_config_clear'] = 'Clear database';
$language_text['_config_profile'] = 'Profile fields';
$language_text['_config_votes'] = 'Votes';
$language_text['_config_kalender'] = 'Calendar';
$language_text['_config_einst'] = 'Attitudes';
$language_text['_profil_sig'] = 'Board signature';
$language_text['_akt_version'] = 'DZCP Version';
$language_text['_forum_searchlink'] = '- <a href="../search/">Board search</a> -';
$language_text['_msg_deleted'] = 'The message was successfully deleted!';
$language_text['_info_reg_valid'] = 'You successfully registered on this page!<br />Your password were send to your e-mail adress [email]';
$language_text['_edited_by'] = '<br /><br /><i>last edited by {$autor} at {$time}&nbsp;h</i>';
$language_text['_linkus_empty_text'] = 'You have to indicate an url of the banner!';
$language_text['_empty_news_title'] = 'You have to indicate a news headline!';
$language_text['_member_admin_votes'] = 'View internal votes';
$language_text['_member_admin_votesadmin'] = 'Admin: Votes';
$language_text['_msg_global_all'] = 'all members';
$language_text['_pos_empty_kat'] = 'You have to indicate a position!';
$language_text['_forum_lastpost'] = '<a href="?action=showthread&amp;id={$tid}&amp;page={$page}#p{$id}"><img src="../inc/images/forum_lpost.gif" alt="" title="Go to the last entry" class="icon" /></a>';
$language_text['_forum_addpost'] = 'New entry';
$language_text['_pn_write'] = '{$nick} a new message';
//--------------------------------------------\\
$language_text['_error_invalid_regcode'] = 'The entered safety code does not agree with the character sequence indicated in the diagram!';
$language_text['_error_invalid_regcode_mathematic'] = 'Your calculation result from security code is not correct!';
$language_text['_welcome_guest'] = ' <img src="../inc/images/flaggen/nocountry.gif" alt="" class="icon" /> <a class="welcome" href="../user/?action=register">Guest</a>';
$language_text['_online_head'] = 'User online';
$language_text['_online_whereami'] = 'Area';
$language_text['_back'] = '<a href="javascript: history.go(-1)" class="files">back</a>';

## EDITED/ADDED FOR v 1.3.3
$language_text['_level_info'] = 'By set the level "admin", the level can be unset by root admin only! (the one who installed the clanportal)!<br />Furthermore the owner this level has <span class="fontUnder">unrestricted</span> access to all administrative areas!';

## EDITED FOR v 1.3.1
$language_text['_related_links'] = 'related Links:';
$language_text['_profil_email2'] = 'E-mail #2';
$language_text['_profil_email3'] = 'E-mail #3';

## Begruessungen ##
$language_text['_welcome_18'] = 'Good evening,';
$language_text['_welcome_13'] = 'Good day,';
$language_text['_welcome_11'] = 'Good lunch,';
$language_text['_welcome_5'] = 'Good morning,';
$language_text['_welcome_0'] = 'Good night,';

## Monate ##
$language_text['_jan'] = 'January';
$language_text['_feb'] = 'February';
$language_text['_mar'] = 'March';
$language_text['_apr'] = 'April';
$language_text['_mai'] = 'May';
$language_text['_jun'] = 'June';
$language_text['_jul'] = 'July';
$language_text['_aug'] = 'August';
$language_text['_sep'] = 'September';
$language_text['_okt'] = 'October';
$language_text['_nov'] = 'November';
$language_text['_dez'] = 'Dezember';

## Globale Userraenge ##
$language_text['_status_banned'] = 'banned';
$language_text['_status_unregged'] = 'unregistered';
$language_text['_status_user'] = 'User';
$language_text['_status_trial'] = 'Trial';
$language_text['_status_member'] = 'Member';
$language_text['_status_admin'] = 'Admin';

## Userliste ##
$language_text['_acc_banned'] = 'Banned';
$language_text['_ulist_acc_banned'] = 'Banned accounts';

## Navigation: Kalender ##
$language_text['_kal_birthday'] = 'Birthday from ';
$language_text['_kal_event'] = 'Event: ';

## News ##
$language_text['_news_kommentar'] = 'Comment';
$language_text['_news_kommentare'] = 'Comments';
$language_text['_news_archiv'] = '<a href="?action=archiv">Archive</a>';
$language_text['_news_comments_write_head'] = 'Write new comment';
$language_text['_news_archiv_sort'] = 'Sort by';
$language_text['_news_archiv_head'] = 'News archive';
$language_text['_news_kat_choose'] = 'Choose category';

## Artikel ##
$language_text['_artikel_comments_write_head'] = 'Write new comment';

## Forum ##
$language_text['_forum_head'] = 'Board';
$language_text['_forum_topic'] = 'Topic';
$language_text['_forum_subtopic'] = 'Subtitle';
$language_text['_forum_lpost'] = 'Last entry';
$language_text['_forum_threads'] = 'Threads';
$language_text['_forum_thread'] = 'Thread';
$language_text['_forum_posts'] = 'Posts';
$language_text['_forum_cnt_threads'] = '<span class="fontBold">Amount of threads:</span> [threads]';
$language_text['_forum_cnt_posts'] = '<span class="fontBold">Amount of Posts:</span> [posts]';
$language_text['_forum_admin_head'] = 'Admin';
$language_text['_forum_admin_addsticky'] = 'mark as <span class="fontWichtig">important</span>?';
$language_text['_forum_katname_intern'] = '<span class="fontWichtig">Internal:</span> {$katname}';
$language_text['_forum_sticky'] = 'Important';
$language_text['_forum_global'] = 'Global';
$language_text['_forum_closed'] = 'Closed';
$language_text['_forum_head_skat_search'] = 'Search in this category';
$language_text['_forum_head_threads'] = 'Threads';
$language_text['_forum_replys'] = 'Answers';
$language_text['_forum_new_thread_head'] = 'Insert thread';
$language_text['_empty_topic'] = 'You have to indicate a topic!';
$language_text['_forum_newthread_successful'] = 'The thread was successfully registered to the board!';
$language_text['_forum_new_post_head'] = 'Add new post';
$language_text['_forum_newpost_successful'] = 'The post was successfully registered to the board!';
$language_text['_posted_by'] = '<span class="fontBold">&raquo;</span> ';
$language_text['_forum_post_where'] = '<a href="../forum/">[mainkat]</a> <span class="fontBold">Board:</span> <a href="?action=show&amp;id=[kid]">[wherekat]</a> <span class="fontBold">Thread:</span> <a href="?action=showthread&amp;id=[tid]">[wherepost]</a>';
$language_text['_forum_lpostlink'] = 'Last post';
$language_text['_forum_user_posts'] = '<span class="fontBold">posts:</span> {$posts}';
$language_text['_sig'] = '<br /><br /><hr />';
$language_text['_error_forum_closed'] = 'This thread is closed!';
$language_text['_forum_search_head'] = 'Board search';
$language_text['_forum_edit_post_head'] = 'Edit post';
$language_text['_forum_edit_thread_head'] = 'Edit thread';
$language_text['_forum_editthread_successful'] = 'The thread was successfully edited!';
$language_text['_forum_editpost_successful'] = 'The entry was successfully edited!';
$language_text['_forum_delpost_successful'] = 'The entry was successfully deleted!';
$language_text['_forum_admin_open'] = 'Thread is opened';
$language_text['_forum_admin_delete'] = 'Delete thread?';
$language_text['_forum_admin_close'] = 'Thread is closed';
$language_text['_forum_admin_moveto'] = 'Move thread to:';
$language_text['_forum_admin_thread_deleted'] = 'The thread was successfully deleted!';
$language_text['_forum_admin_do_move'] = 'The thread was successfully edited<br />and moved into the category <span class="fontWichtig">{$kat}</span>!';
$language_text['_forum_admin_modded'] = 'The thread was successfully edited!';
$language_text['_forum_search_what'] = 'Search for';
$language_text['_forum_search_kat'] = 'in category';
$language_text['_forum_search_suchwort'] = 'Keywords';
$language_text['_forum_search_inhalt'] = 'Content';
$language_text['_forum_search_kat_all'] = 'all Categories';
$language_text['_forum_search_results'] = 'Search results';
$language_text['_forum_online_head'] = 'Browsing the board';
$language_text['_forum_nobody_is_online'] = 'Right now no user is browsing the board!';

## Kalender ##
//-> Allgemein
$language_text['_kalender_head'] = 'Calendar';
$language_text['_montag'] = 'Monday';
$language_text['_dienstag'] = 'Tuesday';
$language_text['_mittwoch'] = 'Wednesday';
$language_text['_donnerstag'] = 'Thursday';
$language_text['_freitag'] = 'Friday';
$language_text['_samstag'] = 'Saturday';
$language_text['_sonntag'] = 'Sunday';

//-> Events
$language_text['_kalender_events_head'] = 'Events at {$datum}';
$language_text['_kalender_uhrzeit'] = 'Time';

//-> Admin
$language_text['_kalender_admin_head_add'] = 'Insert event';
$language_text['_kalender_admin_head_edit'] = 'Edit event';
$language_text['_kalender_event'] = 'Event';
$language_text['_kalender_error_no_time'] = 'You have to indcate the date and time for this event!';
$language_text['_kalender_error_no_title'] = 'You have to indicate a title!';
$language_text['_kalender_error_no_event'] = 'You have to describe this event!';
$language_text['_kalender_successful_added'] = 'The event was successfully registered!';
$language_text['_kalender_successful_edited'] = 'The event was successfully edited!';
$language_text['_kalender_deleted'] = 'The event was successfully deleted!';

## Umfragen ##
$language_text['_error_vote_closed'] = 'This vote is closed!';
$language_text['_votes_admin_closed'] = 'Close vote';
$language_text['_votes_head'] = 'Votes';
$language_text['_votes_stimmen'] = 'Voted';
$language_text['_votes_intern'] = '<span class="fontWichtig">Internal:</span> ';
$language_text['_votes_results_head'] = 'Vote results';
$language_text['_votes_results_head_vote'] = 'Answers';
$language_text['_vote_successful'] = 'You successfully participated in this vote!';
$language_text['_votes_admin_head'] = 'Insert Vote';
$language_text['_votes_admin_question'] = 'Question';
$language_text['_votes_admin_answer'] = 'Possible answers';
$language_text['_empty_votes_question'] = 'You have to indicate a question!';
$language_text['_empty_votes_answer'] = 'You have to indicate at least 2 answers!';
$language_text['_votes_admin_intern'] = 'internal vote';
$language_text['_vote_admin_successful'] = 'The vote was successfully registered!';
$language_text['_vote_admin_delete_successful'] = 'The vote was successfully deleted!';
$language_text['_vote_admin_successful_menu'] = 'The vote is successfully registered into the menu!';
$language_text['_vote_admin_menu_isintern'] = 'It`s impossible to set an internal vote into the menu!';
$language_text['_vote_legendemenu'] = 'Vote set into menu?<br />(Press icon to set/unset vote)';
$language_text['_votes_admin_edit_head'] = 'Edit vote';
$language_text['_vote_admin_successful_edited'] = 'The vote was successfully edited!';
$language_text['_vote_admin_successful_menu1'] = 'The menu was successfully unset from the menu!';
$language_text['_error_voted_again'] = 'You already participated in this vote!';

## Links/Sponsoren ##
$language_text['_links_head'] = 'Links';
$language_text['_links_admin_head'] = 'Insert link';
$language_text['_links_admin_head_edit'] = 'Edit link';
$language_text['_links_link'] = 'URL';
$language_text['_links_beschreibung'] = 'Description';
$language_text['_links_art'] = 'Type';
$language_text['_links_admin_textlink'] = 'Textlink';
$language_text['_links_admin_bannerlink'] = 'Bannerlink';
$language_text['_links_text'] = 'Banner URL';
$language_text['_links_empty_beschreibung'] = 'You have to indicate a description!';
$language_text['_links_empty_link'] = 'You have to indicate an url!';
$language_text['_link_added'] = 'The link was successfully registered!';
$language_text['_link_edited'] = 'The link was successfully edited!';
$language_text['_link_deleted'] = 'The link was successfully deleted!';
$language_text['_sponsor_head'] = 'Sponsors';

## Downloads ##
$language_text['_downloads_head'] = 'Downloads';
$language_text['_downloads_download'] = 'Download';
$language_text['_downloads_admin_head'] = 'Insert Download';
$language_text['_downloads_nofile'] = '<option value="lazy">- no file -</option>';
$language_text['_downloads_admin_head_edit'] = 'Edit download';
$language_text['_downloads_lokal'] = 'lokal file';
$language_text['_downloads_exist'] = 'File';
$language_text['_downloads_name'] = 'Download name';
$language_text['_downloads_url'] = 'File';
$language_text['_downloads_kat'] = 'Categorie';
$language_text['_downloads_empty_download'] = 'You have to indicate a download name!';
$language_text['_downloads_empty_url'] = 'You have to indicate a file!';
$language_text['_downloads_empty_beschreibung'] = 'You have to indicate a description!';
$language_text['_downloads_added'] = 'The download was successfully registered!';
$language_text['_downloads_edited'] = 'The download was successfully edited!';
$language_text['_downloads_deleted'] = 'The download was successfully deleted!';

$language_text['_dl_info'] = 'Download informations';
$language_text['_dl_file'] = 'File';
$language_text['_dl_files'] = 'Files';
$language_text['_dl_besch'] = 'Descriptopm';
$language_text['_dl_info2'] = 'File informations';
$language_text['_dl_size'] = 'Filesize';
$language_text['_dl_speed'] = 'Download speed';
$language_text['_dl_traffic'] = 'Caused traffic';
$language_text['_dl_loaded'] = 'Downloaded';
$language_text['_dl_date'] = 'Upload date';
$language_text['_dl_wait'] = 'Download of file: ';
$language_text['_dl_fileman'] = 'Open Fileman';

$language_text['_contact_pflichtfeld'] = '<span class="fontWichtig">*</span> = Required field';

## User ##
$language_text['_profil_head'] = '<span class="fontBold">Userprofile from {$nick}</span> [{$profilhits} times viewed]';
$language_text['_login_head'] = 'Login';
$language_text['_new_pwd'] = 'new password';
$language_text['_register_head'] = 'Registration';
$language_text['_register_confirm'] = 'Securitycode';
$language_text['_register_confirm_add'] = 'Enter code';
$language_text['_lostpwd_head'] = 'Send password';
$language_text['_profil_edit_head'] = 'Edit profile from {$nick}';
$language_text['_profil_clan'] = 'Clan';
$language_text['_profil_pic'] = 'Picture';
$language_text['_profil_contact'] = 'Contact';
$language_text['_profil_hardware'] = 'Hardware';
$language_text['_profil_about'] = 'About me';
$language_text['_profil_real'] = 'Name';
$language_text['_profil_city'] = 'City';
$language_text['_profil_bday'] = 'Birthday';
$language_text['_profil_age'] = 'Age';
$language_text['_profil_hobbys'] = 'Hobbys';
$language_text['_profil_motto'] = 'Slogan';
$language_text['_profil_hp'] = 'Homepage';
$language_text['_profil_sex'] = 'Sex';
$language_text['_profil_board'] = 'Mainboard';
$language_text['_profil_cpu'] = 'CPU';
$language_text['_profil_ram'] = 'RAM';
$language_text['_profil_graka'] = 'Videocard';
$language_text['_profil_monitor'] = 'Monitor';
$language_text['_profil_maus'] = 'Mouse';
$language_text['_profil_mauspad'] = 'Mousepad';
$language_text['_profil_hdd'] = 'HDD';
$language_text['_profil_headset'] = 'Headset';
$language_text['_profil_os'] = 'System';
$language_text['_profil_inet'] = 'Internet';
$language_text['_profil_job'] = 'Job';
$language_text['_profil_position'] = 'Position';
$language_text['_profil_exclans'] = 'Ex-Clans';
$language_text['_profil_status'] = 'Status';
$language_text['_aktiv'] = '<span class=fontGreen>active</span>';
$language_text['_inaktiv'] = '<span class=fontRed>inactive</span>';
$language_text['_male'] = 'male';
$language_text['_female'] = 'female';
$language_text['_profil_ppic'] = 'Profile picture';
$language_text['_profil_gamestuff'] = 'Gamestuff';
$language_text['_profil_userstats'] = 'Userstats';
$language_text['_profil_profilhits'] = 'Profile hits';
$language_text['_profil_forenposts'] = 'Posts in board';
$language_text['_profil_votes'] = 'participated votes';
$language_text['_profil_msgs'] = 'messages sent';
$language_text['_profil_logins'] = 'Logins';
$language_text['_profil_registered'] = 'Date of registration';
$language_text['_profil_last_visit'] = 'Last page visit';
$language_text['_profil_pagehits'] = 'Pagehits';
$language_text['_pedit_visibility'] = 'Visibility/Permissions';
$language_text['_pedit_perm_public'] = 'Public';
$language_text['_pedit_perm_user'] = 'User only';
$language_text['_pedit_perm_member'] = 'Member only';
$language_text['_pedit_perm_admin'] = 'Admin only';
$language_text['_pedit_perm_allow'] = '<option value="1" selected="selected">Allow</option><option value="0">Deny</option>';
$language_text['_pedit_perm_deny'] = '<option value="1">Allow</option><option value="0" selected="selected">Deny</option>';
$language_text['_profil_edit_pic'] = '<a href="../upload/?action=userpic">upload</a>';
$language_text['_profil_delete_pic'] = '<a href="../upload/?action=userpic&amp;do=deletepic">delete</a>';
$language_text['_profil_edit_ava'] = '<a href="../upload/?action=avatar">upload</a>';
$language_text['_profil_delete_ava'] = '<a href="../upload/?action=avatar&amp;do=delete">delete</a>';
$language_text['_pedit_male'] = '<option value="0">no indication</option><option value="1" selected="selected">male</option><option value="2">female</option>';
$language_text['_pedit_female'] = '<option value="0">no indication</option><option value="1">male</option><option value="2" selected="selected">female</option>';
$language_text['_pedit_sex_ka'] = '<option value="0">no indication</option><option value="1">male</option><option value="2">female</option>';
$language_text['_info_edit_profile_done'] = 'Your profile was successfully edited!';
$language_text['_delete_pic_successful'] = 'Your picture was successfully deleted!';
$language_text['_no_pic_available'] = 'No picture from you are available!';
$language_text['_profil_edit_profil_link'] = '<a href="?action=editprofile">Edit profile</a>';
$language_text['_profil_avatar'] = 'Avatar';
$language_text['_lostpwd_failed'] = 'Loginname and email address does not match!';
$language_text['_lostpwd_valid'] = 'A new password was generated and sent to you by e-mail!';
$language_text['_error_user_already_in'] = 'You are logged in already!';
$language_text['_user_is_banned'] = 'Your account is banned by a site admin.';
$language_text['_msghead'] = 'Messagecenter from {$nick}';
$language_text['_posteingang'] = 'Inbox';
$language_text['_postausgang'] = 'Outbox';
$language_text['_msg_title'] = 'Message';
$language_text['_msg_absender'] = 'From';
$language_text['_msg_empfaenger'] = 'To';
$language_text['_msg_answer_msg'] = 'Message from {$nick}';
$language_text['_msg_sended_msg'] = 'Message to {$nick}';
$language_text['_msg_answer_done'] = 'The message was successfuly sent!';
$language_text['_msg_titel'] = 'Write new message';
$language_text['_msg_titel_answer'] = 'Answer';
$language_text['_to'] = 'To';
$language_text['_or'] = 'or';
$language_text['_msg_to_just_1'] = 'You can indicate just one receiver!';
$language_text['_msg_not_to_me'] = 'You can`t write yourself!';
$language_text['_legende_readed'] = 'Message was read by receiver?';
$language_text['_legende_msg'] = 'New message';
$language_text['_msg_from_nick'] = 'Message from {$nick}';
$language_text['_msg_global_reg'] = 'all registered user';
$language_text['_msg_global_squad'] = 'following team:';
$language_text['_msg_bot'] = '<span class="fontBold">MsgBot</span>';
$language_text['_msg_global_who'] = 'Receiver';
$language_text['_msg_reg_answer_done'] = 'The message was successfully sent to all registered users!';
$language_text['_msg_member_answer_done'] = 'The message was successfully sent to all members!';
$language_text['_msg_squad_answer_done'] = 'The message was successfully sent to all members of the selected team!';
$language_text['_buddyhead'] = 'Buddies';
$language_text['_addbuddys'] = 'Add buddies';
$language_text['_buddynick'] = 'Buddy';
$language_text['_add_buddy_successful'] = 'The user was successfully added as buddy!';
$language_text['_buddys_legende_addedtoo'] = 'The user aded you as buddy, too';
$language_text['_buddys_legende_dontaddedtoo'] = 'The user didn`t added you as buddy, too';
$language_text['_buddys_delete_successful'] = 'The user was successfully deleted as buddy!';
$language_text['_buddy_added_msg'] = 'The user <span class="fontBold">{$user}</span> added you to his buddies!';
$language_text['_buddy_title'] = 'Buddies';
$language_text['_buddy_del_msg'] = 'The user <span class="fontBold">{$user}</span> deleted you from his buddies!';
$language_text['_ulist_lastreg'] = 'newest user';
$language_text['_ulist_online'] = 'Onlinestatus';
$language_text['_ulist_age'] = 'Age';
$language_text['_ulist_sex'] = 'Sex';
$language_text['_ulist_country'] = 'Nationality';
$language_text['_ulist_sort'] = 'Sort by:';
$language_text['_admin_user_edithead'] = 'Admin: Edit users';
$language_text['_admin_user_clanhead'] = 'Authorisation';
$language_text['_admin_user_squadhead'] = 'Team';
$language_text['_admin_user_personalhead'] = 'Personal';
$language_text['_admin_user_level'] = 'Level';
$language_text['_admin_user_edituser'] = 'Edit users';
$language_text['_admin_user_editsquads'] = 'Admin: Teams';
$language_text['_admin_user_editkalender'] = 'Admin: Calendar';
$language_text['_member_admin_newsletter'] = 'Admin: Newsletter';
$language_text['_member_admin_downloads'] = 'Admin: Downloads';
$language_text['_member_admin_links'] = 'Admin: Links';
$language_text['_member_admin_forum'] = 'Admin: Forum';
$language_text['_member_admin_intforum'] = 'View internal boards';
$language_text['_member_admin_news'] = 'Admin: News';
$language_text['_error_edit_myself'] = 'You can`t edit yourself!';
$language_text['_error_edit_admin'] = 'You are not allowed to edit admins!';
$language_text['_admin_level_banned'] = 'Ban account';
$language_text['_admin_user_identitat'] = 'Identity';
$language_text['_admin_user_get_identitat'] = '<a href="?action=admin&amp;do=identy&amp;id={$id}">take identity</a>';
$language_text['_identy_admin'] = 'You can`t take the identity from an admin!';
$language_text['_admin_squad_del'] = '<option value="delsq">- delete user out of this team -</option>';
$language_text['_admin_squad_nosquad'] = '<option class="dropdownKat" value="lazy">- user isn`t in a team -</option>';
$language_text['_admin_user_edited'] = 'The user successfully was edited!';
$language_text['_userlobby'] = 'Userlobby';
$language_text['_lobby_new'] = 'New stuff since your last page visit';
$language_text['_lobby_new_erased'] = 'You successfully marked everything as readed!';
$language_text['_last_forum'] = 'last 10 board posts';
$language_text['_lobby_forum'] = 'Board posts';
$language_text['_new_post_1'] = 'new post';
$language_text['_new_post_2'] = 'new posts';
$language_text['_new_thread'] = 'in thread ';
$language_text['_no_new_thread'] = 'New thread:';
$language_text['_new_eintrag_1'] = 'new entry';
$language_text['_new_eintrag_2'] = 'new entries';
$language_text['_lobby_user'] = 'Registered user';
$language_text['_new_users_1'] = 'new registered User';
$language_text['_new_users_2'] = 'new registered Users';
$language_text['_lobby_news'] = 'News';
$language_text['_lobby_new_news'] = 'new news';
$language_text['_lobby_newsc'] = 'News comments';
$language_text['_lobby_new_newsc_1'] = 'new comment';
$language_text['_lobby_new_newsc_2'] = 'new comments';
$language_text['_new_msg_1'] = 'new message';
$language_text['_new_msg_2'] = 'new messages';
$language_text['_lobby_votes'] = 'Votes';
$language_text['_new_vote_1'] = 'new Vote';
$language_text['_new_vote_2'] = 'new Votes';
$language_text['_user_delete_verify'] = '
<tr>
  <td class="contentHead"><span class="fontBold">Delete user</span></td>
</tr>
<tr>
  <td class="contentMainFirst" align="center">
    Are you sure to delete the user {$user}?<br />
    <span class="fontUnder">Every</span> activities from this user will be deleted, too!<br /><br />
    <a href="?action=admin&amp;do=delete&verify=yes&amp;id={$id}">Yes, delete {$user}!</a>
  </td>
</tr>';
$language_text['_user_deleted'] = 'The user successfully was deleted!';
$language_text['_userlobby_kal_today'] = 'Next event is';
$language_text['_userlobby_kal_not_today'] = 'Next event is at';
$language_text['_profil_country'] = 'Country';
$language_text['_profil_favos'] = 'Favorites';
$language_text['_profil_autor'] = 'Author';
$language_text['_profil_person'] = 'Person';
$language_text['_profil_sonst'] = 'Misc';
$language_text['_profil_url1'] = 'Page #1';
$language_text['_profil_url2'] = 'Page #2';
$language_text['_profil_url3'] = 'Page #3';
$language_text['_profil_ich'] = 'Description';

## Upload ##
$language_text['_upload_ext_error'] = 'Only jpg, gif or png files!';
$language_text['_upload_wrong_size'] = 'The uploaded file is bigger than allowed!!';
$language_text['_upload_no_data'] = 'You have to indicate a file!';
$language_text['_info_upload_success'] = 'The file was successfully uploaded!';
$language_text['_upload_info'] = 'Info';
$language_text['_upload_file'] = 'File';
$language_text['_upload_beschreibung'] = 'Description';
$language_text['_upload_button'] = 'upLoad';
$language_text['_upload_over_limit'] = 'You are not allowed to upload more pictuires! Delete present pictures to upload a new one!';
$language_text['_upload_file_exists'] = 'The uploaded file already exists! Rename the file and upload again or upload another file!';
$language_text['_upload_head'] = 'Upload userpic';
$language_text['_upload_userpic_info'] = ' Only jpg, gif or png files with a maximum filesize of {$userpicsize}KB!<br />The recommended dimension is 170px * 210px ';
$language_text['_upload_ava_head'] = 'Useravatar';
$language_text['_upload_userava_info'] = 'Only jpg, gif or png files with a maximum filesize of {$userpicsize}KB!<br />The recommended dimension is 100px * 100px ';
$language_text['_upload_newskats_head'] = 'Category pictures';
$language_text['_upload_usergallery_info'] = 'Only jpg, gif or png files with a maximum filesize of {$userpicsize}KB!';

## Unzugeordnet ##
$language_text['_config_maxwidth'] = 'Resize pictures automatically';
$language_text['_config_maxwidth_info'] = 'Here you can adjust at which width a picture will be resized!';
$language_text['_forum_top_posts'] = 'Top 5 poster';
$language_text['_user_cant_delete_admin'] = 'You can`t delete members or admins!';
$language_text['_no_entrys_yet'] = '<tr><td class="contentMainFirst" colspan="{$colspan}" align="center">No entry yetn!</td></tr>';
$language_text['_nav_no_ftopics'] = 'No entry yet!';
$language_text['_fopen'] = 'The webhoster of this site does not allow the function fopen() which is needed!';
$language_text['_and'] = 'and';
$language_text['_lobby_artikelc'] = 'Article comments';
$language_text['_lobby_new_art_1'] = 'new article';
$language_text['_lobby_new_art_2'] = 'new article';
$language_text['_lobby_new_artc_1'] = 'new comment';
$language_text['_lobby_new_artc_2'] = 'new comments';
$language_text['_profil_nletter'] = 'Receive newsletter?';
$language_text['_forum_admin_addglobal'] = '<span class="fontWichtig">Global</span> entry? (In all boards and subboards)';
$language_text['_forum_admin_global'] = '<span class="fontWichtig">Global</span> entry?';
$language_text['_admin_config_badword'] = 'Badwordfilter';
$language_text['_admin_config_badword_info'] = 'Here you can indicate the words, which will be filter and replaced with ***. The words have to be seperated with a comma!';
$language_text['_iplog_info'] = '<span class="fontBold">Note:</span> In case of security reasons your ip will be logged!';
$language_text['_logged'] = 'IP saved';
$language_text['_info_ip'] = 'IP Address';
$language_text['_nav_montag'] = 'Mo';
$language_text['_nav_dienstag'] = 'Tu';
$language_text['_nav_mittwoch'] = 'We';
$language_text['_nav_donnerstag'] = 'Th';
$language_text['_nav_freitag'] = 'Fr';
$language_text['_nav_samstag'] = 'Sa';
$language_text['_nav_sonntag'] = 'Su';
$language_text['_age'] = 'Age';
$language_text['_error_empty_age'] = 'You have to indicate your actual age!';
$language_text['_member_admin_intforums'] = 'internal board authorisation';
$language_text['_access'] = 'Authorisation';
$language_text['_error_no_access'] = 'You don`t have the rights to enter this area!';
$language_text['_artikel_show_link'] = '<a href="../artikel/?action=show&amp;id={$id}">{$titel}</a>';
$language_text['_ulist_bday'] = 'Birthday';
$language_text['_ulist_last_login'] = 'Last login';

## Impressum ##
$language_text['_impressum_head'] = 'Imprint';
$language_text['_impressum_autor'] = 'Author of the site';
$language_text['_impressum_domain'] = 'Domain:';
$language_text['_impressum_disclaimer'] = 'Disclaimer';
$language_text['_impressum_txt'] = '<blockquote>
<h2><span class="fontBold">1. Content</span></h2>
<br />
The author reserves the right not to be responsible for the topicality, correctness,
completeness or quality of the information provided. Liability claims regarding
damage caused by the use of any information provided, including any kind
of information which is incomplete or incorrect,will therefore be rejected.
<br />All offers are not-binding and without obligation. Parts of the pages or the complete
publication including all offers and information might be extended, changed
or partly or completely deleted by the author without separate announcement.
<br /><br />
<h2><span class="fontBold">2. Referrals and links</span></h2>
<br />
The author is not responsible for any contents linked or referred to from his pages - unless he has full knowledge of illegal contents and would be able to prevent the visitors of his site fromviewing those pages.
If any damage occurs by the use of information presented there, only the author of the respective pages might be liable, not the one who has linked to these pages. Furthermore the author is not liable for any postings or messages published by users of discussion boards, guestbooks or mailinglists provided on his page.
<br /><br />
<h2><span class="fontBold">3. Copyright</span></h2>
<br />
The author intended not to use any copyrighted material for the publication or, if not possible, to indicate the copyright of the respective object.
<br />
The copyright for any material created by the author is reserved. Any duplication or use of objects such as images, diagrams, sounds or texts in other
electronic or printed publications is not permitted without the author\'s agreement.
<br /><br />
<h2><span class="fontBold">4. Privacy policy<</span></h2>
<br />
If the opportunity for the input of personal or business data (email addresses, name, addresses) is given, the input of these data takes place voluntarily. The use and payment of all offered services are permitted - if and so far technically possible and reasonable - without specification of any personal data or under specification of anonymized data or an alias.
The use of published postal addresses, telephone or fax numbers and email addresses for marketing purposes is prohibited, offenders sending unwanted spam messages will be punished.
<br /><br />
<h2><span class="fontBold">5. Legal validity of this disclaimer</span></h2>
<br />
This disclaimer is to be regarded as part of the internet publication which you were referred from. If sections or individual terms of this statement are not legal or correct, the content or validity of the other parts remain uninfluenced by this fact.
</blockquote>';

## Admin ##
$language_text['_config_head'] = 'Administrative area';
$language_text['_config_empty_katname'] = 'You have to indicate a category description!';
$language_text['_config_katname'] = 'Category description';
$language_text['_config_set'] = 'The attitudes were successfully saved!';
$language_text['_config_forum_status'] = 'Status';
$language_text['_config_forum_head'] = 'Board categories';
$language_text['_config_forum_mainkat'] = 'Main category';
$language_text['_config_forum_subkathead'] = 'Sub categories from <span class="fontUnder">{$kat}</span>';
$language_text['_config_forum_subkat'] = 'Sub  category';
$language_text['_config_forum_subkats'] = '<span class="fontBold">{$topic}</span><br /><span class="fontItalic">{$subtopic}</span>';
$language_text['_config_forum_kat_head'] = 'Insert category';
$language_text['_config_forum_public'] = 'public';
$language_text['_config_forum_intern'] = 'internal';
$language_text['_config_forum_kat_added'] = 'The category was successfully registered!';
$language_text['_config_forum_kat_deleted'] = 'The category was successfully deleted!';
$language_text['_config_forum_kat_head_edit'] = 'Edit category';
$language_text['_config_forum_kat_edited'] = 'The category was successfully edited!';
$language_text['_config_forum_add_skat'] = 'Insert sub category';
$language_text['_config_forum_skatname'] = 'Sub category description';
$language_text['_config_forum_empty_skat'] = 'You have to indicate a sub category description!';
$language_text['_config_forum_skat_added'] = 'The sub category was successfully registered!';
$language_text['_config_forum_stopic'] = 'Subtitle';
$language_text['_config_forum_skat_edited'] = 'The sub category was successfully edited!';
$language_text['_config_forum_edit_skat'] = 'Edit sub category';
$language_text['_config_forum_skat_deleted'] = 'The sub category was successfully deleted!';
$language_text['_config_newskats_kat'] = 'Category';
$language_text['_config_newskats_head'] = 'News-/Article categories';
$language_text['_config_newskats_katbild'] = 'Category pic';
$language_text['_config_newskats_add'] = '<a href="?admin=news&amp;do=add">Insert category picture</a>';
$language_text['_config_newskat_deleted'] = 'The category was successfully deleted!';
$language_text['_config_newskats_add_head'] = 'Insert category';
$language_text['_config_newskats_added'] = 'The category was sucessfully registeredD!';
$language_text['_config_newskats_edit_head'] = 'Edit category';
$language_text['_config_newskats_edited'] = 'The category was successfully edited!';
$language_text['_config_impressum_head'] = 'Imprint';
$language_text['_config_impressum_domains'] = 'Domains';
$language_text['_config_impressum_autor'] = 'Author of this site';
$language_text['_news_admin_head'] = 'Newsarea';
$language_text['_admin_news_add'] = '<a href="?admin=newsadmin&amp;do=add">Insert news</a>';
$language_text['_admin_news_head'] = 'Insert news';
$language_text['_news_admin_kat'] = 'Category';
$language_text['_news_admin_klapptitel'] = 'Cliptitle';
$language_text['_news_admin_more'] = 'More';
$language_text['_empty_news'] = 'You have to indicate a news!';
$language_text['_news_sended'] = 'The news was successfully registered!';
$language_text['_admin_news_edit_head'] = 'Edit news';
$language_text['_news_edited'] = 'The news was successfully edited!';
$language_text['_news_deleted'] = 'The news was successfully deleted!';
$language_text['_member_admin_header'] = 'Teamarea';
$language_text['_member_admin_squad'] = 'Group';
$language_text['_member_admin_icon'] = 'Icon';
$language_text['_member_admin_add'] = '<a href="?admin=squads&amp;do=add">Insert team</a>';
$language_text['_admin_squad_deleted'] = 'The team was successfully deleted!';
$language_text['_member_admin_add_header'] = 'Insert team';
$language_text['_admin_squad_no_squad'] = 'You have to indicate a team`s name!';
$language_text['_admin_squad_add_successful'] = 'The team was successfully registered!';
$language_text['_admin_squad_edit_successful'] = 'The team was successfully edited!';
$language_text['_member_admin_edit_header'] = 'Edit team';
$language_text['_error_empty_clanname'] = 'You have to indicate your clan`s name!';
$language_text['_admin_dlkat'] = 'Download categories';
$language_text['_dl_add_new'] = '<a href="?admin=dl&amp;do=new">Insert new category</a>';
$language_text['_dl_new_head'] = 'Insert new download categorie';
$language_text['_dl_dlkat'] = 'Category';
$language_text['_dl_empty_kat'] = 'You have to indicate a category description!';
$language_text['_dl_admin_added'] = 'The download category was successfully registered!';
$language_text['_dl_admin_deleted'] = 'The download category was successfully deleted!';
$language_text['_dl_edit_head'] = 'Edit download category';
$language_text['_dl_admin_edited'] = 'The download category was successfully edited!';
$language_text['_config_global_head'] = 'Configuration';
$language_text['_config_c_limits'] = 'Limits';
$language_text['_config_c_limits_what'] = 'Here you can adjust the amount of entrys which will be maximum shown';
$language_text['_config_c_archivnews'] = 'News archive';
$language_text['_config_c_news'] = 'News';
$language_text['_config_c_banned'] = 'Banlist';
$language_text['_config_c_adminnews'] = 'Newsadmin';
$language_text['_config_c_userlist'] = 'Userlist';
$language_text['_config_c_comments'] = 'Newscomments';
$language_text['_config_c_fthreads'] = 'Board threads';
$language_text['_config_c_fposts'] = 'Board posts';
$language_text['_config_c_floods'] = 'Anti-Flooding';
$language_text['_config_c_forum'] = 'Board';
$language_text['_config_c_length'] = 'Length specifications';
$language_text['_config_c_length_what'] = 'Here you can adjust the maximum length of an entry (longer entries will be cutted automatically).';
$language_text['_config_c_newsadmin'] = 'Newsadmin: Title';
$language_text['_config_c_newsarchiv'] = 'Newsarchiv: Title';
$language_text['_config_c_forumtopic'] = 'Board: Topic';
$language_text['_config_c_forumsubtopic'] = 'Board: Subtopic';
$language_text['_config_c_topdl'] = 'Menu: Top Downloads';
$language_text['_config_c_ftopics'] = 'Menu: Last Forumtopics';
$language_text['_config_c_main'] = 'General configuration';
$language_text['_config_c_clanname'] = 'Clan`s name';
$language_text['_config_c_pagetitel'] = 'Site title';
$language_text['_config_c_language'] = 'Default language';
$language_text['_config_c_upicsize'] = 'Global: Pictureupload Size';
$language_text['_config_c_upicsize_what'] = 'allowed filesize of the pictures in KB (Newspicture, Userpicture etc.)';
$language_text['_config_c_regcode'] = 'Reg: Securitycodee';
$language_text['_config_c_regcode_what'] = 'User have to enter a securitycode during the registration';
$language_text['_pos_add_new'] = '<a href="?admin=positions&amp;do=new">Insert position</a>';
$language_text['_pos_new_head'] = 'Insert position';
$language_text['_pos_edit_head'] = 'Edit position';
$language_text['_pos_admin_edited'] = 'The position was successfully edited!';
$language_text['_pos_admin_deleted'] = 'The position was successfully deleted!';
$language_text['_pos_admin_added'] = 'The position was successfully registered!';
$language_text['_admin_nc'] = 'Newscomments';
$language_text['_admin_reg_info'] = 'Here you can djust, if users have to be registered to do stuff (write comments, download things, etc)';
$language_text['_admin_reg_head'] = 'Registration required';
$language_text['_config_zeichen_info'] = 'Here you can adjust, how many chars an entry can have.';
$language_text['_wartungsmodus_info'] = 'if set to \'on\' admins only can enter the site.';
$language_text['_navi_kat'] = 'Area';
$language_text['_navi_name'] = 'Link`s name';
$language_text['_navi_url'] = 'Forwarding';
$language_text['_navi_shown'] = 'Viewable';
$language_text['_navi_type'] = 'Type';
$language_text['_navi_wichtig'] = 'Mark';
$language_text['_navi_space'] = '<b>Blank line</b>';
$language_text['_navi_head'] = 'Navigation administration';
$language_text['_navi_add_head'] = 'Insert link';
$language_text['_navi_edit_head'] = 'Edit link';
$language_text['_navi_url_to'] = 'Weiterleiten nach';
$language_text['_posi'] = 'Position';
$language_text['_nach'] = 'after';
$language_text['_navi_no_name'] = 'You have to indicate a link`s name!';
$language_text['_navi_no_url'] = 'You have to indicate a target!';
$language_text['_navi_no_pos'] = 'You have to indicate a position!';
$language_text['_navi_added'] = 'The link was successfully registered!';
$language_text['_navi_deleted'] = 'The link was successfully deleted!';
$language_text['_navi_edited'] = 'The link was successfully edited!';
$language_text['_editor_head'] = 'Insert site';
$language_text['_editor_name'] = 'Site description';
$language_text['_editor_add_head'] = 'Insert site';
$language_text['_inhalt'] = 'Content';
$language_text['_allow'] = 'Allow';
$language_text['_deny'] = 'Deny';
$language_text['_editor_allow_html'] = 'allow HTML/BBCODE?';
$language_text['_editor_allow_php'] = 'allow PHP-Code?';
$language_text['_empty_editor_inhalt'] = 'You have to indicate a text!';
$language_text['_site_added'] = 'The site was successfully registered!';
$language_text['_editor_linkname'] = 'Linkname';
$language_text['_editor_deleted'] = 'The site was successfully deleted!';
$language_text['_editor_edit_head'] = 'Edit site';
$language_text['_site_edited'] = 'The site was successfully edited!';
$language_text['_partners_head'] = 'Partnerbuttons';
$language_text['_partners_button'] = 'Button';
$language_text['_partners_add_head'] = 'Insert partnerbutton';
$language_text['_partners_edit_head'] = 'Edit partnerbutton';
$language_text['_partners_added'] = 'The partnerbutton was successfully registered!';
$language_text['_partners_edited'] = 'The partnerbutton was successfully edited!';
$language_text['_partners_deleted'] = 'The partnerbutton was successfully deleted!';
$language_text['_clear_head'] = 'Clear database';
$language_text['_clear_news'] = 'Newsentrys?';
$language_text['_clear_forum'] = 'Boardentrys?';
$language_text['_clear_forum_info'] = 'Boardentrys which are marked as <span class="fontWichtig">important</span> won`t be deleted!';
$language_text['_clear_days'] = 'Delete entrys which are older than';
$language_text['_clear_what'] = 'days';
$language_text['_clear_deleted'] = 'The database was successfully cleared up!';
$language_text['_clear_error_days'] = 'You have to indicate the days when something is supposed to be deleted!';
$language_text['_error_unregistered'] = 'You have to be registered to use this function!';
$language_text['_seiten'] = 'Site:';
$language_text['_admin_artikel_add'] = '<a href="?admin=artikel&amp;do=add">insert article</a>';
$language_text['_artikel_add'] = 'Insert article';
$language_text['_artikel_added'] = 'The article was successfully registered';
$language_text['_artikel_edit'] = 'Edit article';
$language_text['_artikel_edited'] = 'The article was successfully edited!';
$language_text['_artikel_deleted'] = 'The article was successfully deleted!';
$language_text['_empty_artikel_title'] = 'You have to indicate a title!';
$language_text['_empty_artikel'] = 'You have to indicate an article!';
$language_text['_admin_artikel'] = 'Admin: Article';
$language_text['_config_c_martikel'] = 'Article';
$language_text['_config_c_madminartikel'] = 'Articleadmin';
$language_text['_reg_artikel'] = 'Articlecomments';
$language_text['_on'] = 'on';
$language_text['_off'] = 'off';
$language_text['_config_lreg'] = 'Menu: Last reg. user';
$language_text['_config_mailfrom'] = 'Email mailfrom';
$language_text['_config_mailfrom_info'] = 'This email address will be used for sent emails like newsletter, registration, etc!';

## Misc ##
$language_text['_error_have_to_be_logged'] = 'You havet to be logged in to use this feature!';
$language_text['_error_invalid_email'] = 'The indicated email address is invalid!';
$language_text['_error_invalid_url'] = 'The indicated homepage isn`t reachable!';
$language_text['_error_nick_exists'] = 'The indicated nickname is already in use!';
$language_text['_error_user_exists'] = 'The indicated loginname is already in use!';
$language_text['_error_passwords_dont_match'] = 'Passwords don\'t match!';
$language_text['_error_email_exists'] = 'The indicated email address is already in use!';
$language_text['_info_edit_profile_done_pwd'] = 'Your profile was successfully edited!';
$language_text['_error_select_buddy'] = 'You didn`t selected an user!';
$language_text['_error_buddy_self'] = 'You can`t add yourself as a buddy!';
$language_text['_error_buddy_already_in'] = 'You already added this user to your buddies list!';
$language_text['_error_msg_self'] = 'You can`t write yourself a message!';
$language_text['_error_back'] = 'back';
$language_text['_user_dont_exist'] = 'The requested user does not exist!';
$language_text['_error_fwd'] = 'forward';
$language_text['_error_wrong_permissions'] = 'You don`t have the right permissions to do this!';
$language_text['_error_flood_post'] = 'You just can write a new entry every {$sek} seconds!';
$language_text['_empty_titel'] = 'You have to indicate a title!';
$language_text['_empty_eintrag'] = 'You have to indicate an entry!';
$language_text['_empty_nick'] = 'You have to indicate a nick!';
$language_text['_empty_email'] = 'You have to indicate an email address!';
$language_text['_empty_user'] = 'You have to indicate a loginname!';
$language_text['_empty_to'] = 'You have to indicate a receiver!';
$language_text['_empty_url'] = 'You have to indicate an url!';
$language_text['_empty_datum'] = 'You have to indicate a date!';
$language_text['_site_sponsor'] = 'Sponsors';
$language_text['_site_user'] = 'User';
$language_text['_site_online'] = 'Visitors online';
$language_text['_site_member'] = 'Member';
$language_text['_site_forum'] = 'Board';
$language_text['_site_links'] = 'Links';
$language_text['_site_dl'] = 'Downloads';
$language_text['_site_news'] = 'News';
$language_text['_site_upload'] = 'Upload';
$language_text['_site_ulist'] = 'Userlist';
$language_text['_site_msg'] = 'Messages';
$language_text['_site_reg'] = 'Registration';
$language_text['_site_user_login'] = 'Login';
$language_text['_site_user_lostpwd'] = 'Lost pwd';
$language_text['_site_user_logout'] = 'Logout';
$language_text['_site_artikel'] = 'Article';
$language_text['_site_user_lobby'] = 'Userlobby';
$language_text['_site_user_profil'] = 'Userprofile';
$language_text['_site_user_editprofil'] = 'Edit profile';
$language_text['_site_user_buddys'] = 'Buddies';
$language_text['_site_impressum'] = 'Imprint';
$language_text['_site_votes'] = 'Votes';
$language_text['_site_config'] = 'Administrative area';
$language_text['_login'] = 'Login';
$language_text['_register'] = 'Registration';
$language_text['_userlist'] = 'Userlist';
$language_text['_news'] = 'News';
$language_text['_newsarchiv'] = 'Newsarchive';
$language_text['_links'] = 'Links';
$language_text['_impressum'] = 'Imprint';
$language_text['_contact'] = 'Contact';
$language_text['_artikel'] = 'Article';
$language_text['_dl'] = 'Downloads';
$language_text['_votes'] = 'Votes';
$language_text['_forum'] = 'Board';
$language_text['_squads'] = 'Teams';
$language_text['_editprofil'] = 'Edit profile';
$language_text['_logout'] = 'Logout';
$language_text['_msg'] = 'Messages';
$language_text['_lobby'] = 'Lobby';
$language_text['_buddys'] = 'Buddies';
$language_text['_admin_config'] = 'Admin';
$language_text['_head_online'] = 'Online';
$language_text['_head_visits'] = 'Visitors';
$language_text['_head_max'] = 'Max.';
$language_text['_cnt_user'] = 'User';
$language_text['_cnt_guests'] = 'Guests';
$language_text['_cnt_today'] = 'Today';
$language_text['_cnt_yesterday'] = 'Yesterday';
$language_text['_cnt_online'] = 'Online';
$language_text['_cnt_all'] = 'Total';
$language_text['_cnt_pperday'] = '&oslash; day';
$language_text['_cnt_perday'] = 'per day';
$language_text['_show'] = 'Show';
$language_text['_dont_show'] = 'Don`t show';
$language_text['_status'] = 'Status';
$language_text['_position'] = 'Position';
$language_text['_kind'] = 'Type';
$language_text['_cnt'] = '#';
$language_text['_pwd'] = 'Password';
$language_text['_loginname'] = 'Loginname';
$language_text['_email'] = 'Email';
$language_text['_hp'] = 'Homepage';
$language_text['_member'] = 'Member';
$language_text['_user'] = 'User';
$language_text['_gast'] = 'unregistered';
$language_text['_nothing'] = '<option value="lazy" class="dropdownKat">- change nothing -</option>';
$language_text['_pn'] = 'Message';
$language_text['_nick'] = 'Nick';
$language_text['_info'] = 'Info';
$language_text['_error'] = 'Error';
$language_text['_datum'] = 'Date';
$language_text['_legende'] = 'Legend';
$language_text['_link'] = 'Link';
$language_text['_linkname'] = 'Linkname';
$language_text['_url'] = 'URL';
$language_text['_admin'] = 'Admin';
$language_text['_hits'] = 'Hits';
$language_text['_hit'] = 'Hit';
$language_text['_map'] = 'Map';
$language_text['_game'] = 'Game';
$language_text['_autor'] = 'Author';
$language_text['_yes'] = 'Yes';
$language_text['_no'] = 'No';
$language_text['_maybe'] = 'Maybe';
$language_text['_beschreibung'] = 'Description';
$language_text['_admin_user_get_identy'] = 'You was successfully took the identity of {$nick}!';
$language_text['_comment_added'] = 'The comment was successfully registered!';
$language_text['_comment_deleted'] = 'The comment was successfullydeleted!';
$language_text['_stichwort'] = 'Keyword';
$language_text['_eintragen_titel'] = 'insert';
$language_text['_titel'] = 'Title';
$language_text['_answer'] = 'Answer';
$language_text['_eintrag'] = 'Entry';
$language_text['_weiter'] = 'forward';
$language_text['_site_contact'] = 'Contact form';
$language_text['_site_msg_new'] = 'You have new messages!<br />Click <a href="../user/?action=msg">here</a> to go to the message center!';
$language_text['_site_kalender'] = 'Calendar';
$language_text['_login_permanent'] = ' Autologin';
$language_text['_msg_del'] = 'Delete marked';
$language_text['_wartungsmodus'] = 'This website is closed in case of maintenance work!<br />Please try it again later!';
$language_text['_wartungsmodus_head'] = 'Maintenance modes';
$language_text['_kalender'] = 'Calender';
$language_text['_config_tmpdir'] = 'Standardtemplate';
$language_text['_navi_info'] = 'Every link names shown in "_" (like _admin_) are placeholders, which will be used for the several languages!';
$language_text['_member_admin_intnews'] = 'View internal news';
$language_text['_news_admin_intern'] = 'Internal News?';
$language_text['_news_sticky'] = '<span class="fontWichtig">Announcment:</span>';
$language_text['_news_get_sticky'] = 'Announce news?';
$language_text['_news_sticky_till'] = 'until:';
$language_text['_forum_lp_head'] = 'Last post';
$language_text['_forum_previews'] = 'Preview';
$language_text['_error_unregistered_nc'] = 'You have to be registered to write a comment!';
$language_text['_upload_partners_head'] = 'Partnerbuttons';
$language_text['_upload_partners_info'] = 'Only jpg, gif or png files. Recommended dimensions: 88px * 31px';