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

## Check PHP Version ##
if (version_compare(PHP_VERSION, '7.0.0', 'lt')) {
    die('DZCP required PHP 7.0.0 or newer!<p> Found PHP ' . PHP_VERSION);
}

#########################################
//-> Debug Console Settings Start
#########################################

define('show_loaded', false);
define('show_info', false);
define('show_warning', true);
define('show_dbc_debug', false);
define('show_deprecation_debug', true);
define('show_sessions_debug', false);
define('show_pdo_delete_debug', false);
define('show_pdo_update_debug', true);
define('show_pdo_insert_debug', true);
define('show_pdo_select_debug', false);
define('show_mail_debug', true);
define('show_settings_debug', false);

#############################################
############### Debug Console ###############
#############################################
define("EOL","\r\n");
define('DEBUG_LOADER', true);
class DebugConsole {
    private static $log_array = [[]];
    private static $file_data = '';
    private static $warning_enable = false;

    public static final function initCon() { 
        self::$log_array= [[]];
        self::$file_data=''; 
        if(!is_dir(basePath.'/inc/_logs_') ||
            !file_exists(basePath.'/inc/_logs_')) {
            @mkdir(basePath.'/inc/_logs_', 0777, true);
        }
    }

    public static final function insert_log($file,$msg,$back=false,$func="",$line=0)
    { if(view_error_reporting) self::$log_array[$file][] = ($line != 0 ? 'Line:"'.$line.'" => ' : "").($back ? $msg.$func : $func.$msg); }

    public static final function insert_successful($file,$func)
    { if(view_error_reporting) self::$log_array[$file][] = '<span style="color:#009900;">'.$func.'</span>'; }

    public static final function insert_error($file,$msg)
    { self::$log_array[$file][] = '<span style="color:#FF0000;">'.$msg.'</span>'; self::$warning_enable = true; }

    public static final function insert_loaded($file,$func)
    { if(show_loaded && view_error_reporting) self::$log_array[$file][] = '<span style="color:#009900;">'.$func.'</span>'; }

    public static final function insert_info($file,$info)
    { if(show_info && view_error_reporting) self::$log_array[$file][] = '<span style="color:#9900CC;">'.$info.'</span>'; }

    public static final function insert_sql_info($file,$info,$params)
    { self::$log_array[$file][] = '<span color="#2A3AEC">'.$info.' <p> Data for SQL-Query => '.json_encode($params).'</span>'; }
    
    public static final function insert_warning($file,$func)
    { if(show_warning && view_error_reporting) self::$log_array[$file][] = '<span style="color:#FFFF00;">'.$func.'</span>'; }
    
    public static final function get_warning_enable()
    { return self::$warning_enable; }

    public static final function sql_error_Exception($msg,$query,array $params = []) {
        $message = '#####################################################################'.EOL.
        'Datum   = '.date("d.m.y H:i", time()).EOL.
        'URL     = http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['PHP_SELF'].EOL.EOL.
        'PDO-Exception:'.EOL.
        'Message   = '.$msg.EOL.
        'Query   = '.$query.EOL.
        'Params   = '.json_encode($params).EOL.       
        '#####################################################################'.EOL.EOL;
        $fp = fopen(basePath."/inc/_logs_/sql_error.log", "a+");
        fwrite($fp, $message); fclose($fp);
    }
    
    public static final function save_log() {
        foreach(self::$log_array as $file => $msg_array)
        { foreach($msg_array as $msg) { self::$file_data .= strip_tags('"'.$file.'" => "'.$msg.'"')."\n"; } }
        if(!empty(self::$file_data)) file_put_contents(basePath.'/inc/_logs_/debug_'.date("s-i-h").'_'.date("d_m_Y").'.log', self::$file_data);
    }

    public static final function show_logs() {
        $data = ''; $color = 0; $i=0;
        foreach(self::$log_array as $file => $msg_array) {
            foreach($msg_array as $msg) {
                $set_color = ($color % 2) ? "#CCCCCC" : "#E6E6E6"; $color++;
                $data .= '<tr><td width="40%" bgcolor="'.$set_color.'"><b><div align="center"><span style="color:#000000;font-size:11px;">"'.$file.'"</span></div></b></td>
                <td width="60%" bgcolor="'.$set_color.'"><b><div align="center"><span style="color:#000000;font-size:11px;">"'.$msg.'"</span></div></b></td></tr>'; $i++;
            }
        }

        if(!$i) return '';
        return '<style type="text/css"><!-- .boxdebug { color: #000000; font-weight: bold;} -->
        </style><table bgcolor="#000000" width="100%" border="0" ><tr><td bgcolor="#00FF00"><span class="boxdebug" style="font-size:11px">Debug Log: ( '.$i.' Eintr&auml;ge )<a name="log" id="log"></a></span></td>
        </tr><tr><td><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="40%" bgcolor="#999999"><div align="center" class="boxdebug" style="font-size:11px">File/Code:</div></td>
        <td width="60%" bgcolor="#999999"><div align="center" class="boxdebug" style="font-size:11px">Action/Msg:</div></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0">
        '.$data.'</table></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="100%" bgcolor="#999999">&nbsp;</td></tr></table>';
    }

    public static final function wire_log($input_level, $input_maxlevel=9, $input_file_name='', $input_content = "",$input_customlevel = "") {
        $file = basePath."/inc/_logs_/".date("Y-m-d",time())."_".$input_file_name.".log"; $status = [];
        if ($input_maxlevel > 0) {
            $string =
            "#############################".EOL.
            "# <".$input_file_name.">-Logfile ".date("Y-m-d",time())." #".EOL.
            "# ========================= #".EOL.
            "# File created at: ".date("H:i:s",time())." #".EOL.
            "#############################".EOL.EOL;
            if (!file_exists($file)) {
                if (!$fileheader = fopen($file,"w")) {
                    $status["int"] = 3;
                    $status["str"] = "LOG_COULD_NOT_OPEN_FILE";
                    return $status;
                }

                if (!fwrite($fileheader,$string)) {
                    $status["int"] = 3;
                    $status["str"] = "LOG_COULD_NOT_WRITE_FILE";
                    return $status;
                }

                if (!fclose($fileheader)) {
                    $status["int"] = 4;
                    $status["str"] = "LOG_COULD_NOT_CLOSE_FILE";
                } else {
                    $status["int"] = 0;
                    $status["str"] = "LOG_OK";
                }
            }
        }

        switch($input_level) {

            /**** Wert:(OFF) ***********************************************************/
            case "off":
                $loglevel_int = 0;
                $loglevel_str = "";
                break;

                /**** Wert:ERROR ***********************************************************/
            case "error":
                $loglevel_int = 1;
                $loglevel_str = "ERROR";
                break;

                /**** Wert:SECURITY ********************************************************/
            case "security":
                $loglevel_int = 2;
                $loglevel_str = "SECURITY";
                break;

                /**** Wert:WARNING *********************************************************/
            case "warning":
                $loglevel_int = 3;
                $loglevel_str = "WARNING";
                break;

                /**** Wert:SESSION *********************************************************/
            case "session":
                $loglevel_int = 4;
                $loglevel_str = "SESSION";
                break;

                /**** Wert:STATUS **********************************************************/
            case "status":
                $loglevel_int = 5;
                $loglevel_str = "STATUS";
                break;

                /**** Wert:ACCESS **********************************************************/
            case "access":
                $loglevel_int = 6;
                $loglevel_str = "ACCESS";
                break;

                /**** Wert:CUSTOM1 *********************************************************/
            case "custom1":
                $loglevel_int = 7;
                $loglevel_str = "[C1:".$input_customlevel."]";
                break;

                /**** Wert:USTOM2 **********************************************************/
            case "custom2":
                $loglevel_int = 8;
                $loglevel_str = "[C2:".$input_customlevel."]";
                break;

                /**** Wert:DEBUG ***********************************************************/
            case "debug":
                $loglevel_int = 9;
                $loglevel_str = "DEBUG";
                break;

                /**** Wert:Off *************************************************************/
            default: // UNKNOWN
                $loglevel_int = 0;
                $loglevel_str = "";
                break;
        }

        if ($loglevel_int > 0 AND $loglevel_int <= $input_maxlevel) {
            $string = date("H:i:s",time())." ". $_SERVER["REMOTE_ADDR"]." [".$loglevel_str."]: ".$input_content.EOL;

            if (!$fileheader = fopen($file,"a")) {
                $status["int"] = 2;
                $status["str"] = "LOG_COULD_NOT_OPEN_FILE";
                return $status;
            }

            if (!fwrite($fileheader,$string)) {
                $status["int"] = 3;
                $status["str"] = "LOG_COULD_NOT_WRITE";
                return $status;
            }

            if (!fclose($fileheader)) {
                $status["int"] = 4;
                $status["str"] = "LOG_COULD_NOT_CLOSE_FILE";
            } else {
                $status["int"] = 0;
                $status["str"] = "LOG_OK";
            }
        }

        return $status;
    }
}

function dzcp_error_handler($code, $msg, $file, $line, $context) {
    $file = str_replace(basePath, '', $file);
    switch ($code) {
        case E_WARNING:
        case E_USER_WARNING:
            DebugConsole::insert_log("<b>WARNUNG:' ".$file." '</b>", $msg, false, "", $line);
        break;
        case E_NOTICE:
        case E_USER_NOTICE:
            DebugConsole::insert_log("<b>HINWEIS:' ".$file." '</b>", $msg, false, "", $line);
        break;
        case E_DEPRECATED:
            if(show_deprecation_debug)
                DebugConsole::insert_log("<b>VERALTET:' ".$file." '</b>", $msg, false, "", $line);
            break;
        default:
            DebugConsole::insert_log("Unbekannt:' ".$file." ' [".$code."]", $msg, false, "", $line);
        break;
    }

    return true;
}