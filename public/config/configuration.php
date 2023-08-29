<?php

class Config {
    private static $info = array();
    public static function set($key, $value) {
        self::$info[$key] = $value;
    }
    public static function get($key) {
        return self::$info[$key];
    }
    public static function getAll() {
        return self::$info;
    }
}

########################################################################################################################
$config = array();                                                                                                     #
                                                                                                                       #
//DO NOT EDIT ABOVE THIS                                                                                               #
                                                                                                                       #
# Edit below this ######################################################################################################
$config['title'] = 'FAWE schematic download'                              ; # Title of the web page                    #
# ============== # Styles: 8bit, dark, default, shadow, phanaticd, orange, green, clean, grey, frame. # ============== #
$config['style'] = "dark"                                                 ; # The style to use (see styles folder)     #
//If you like a specific style: $config['style'] = 'default'                                                           #
                                                                                                                       #
$config['navtitle'] = 'Clipboard Upload:'							      ; # The text in the navbar				   #
$config['header1'] = 'Anonymous Schematic Upload/Download'			      ; # The big text on the web page			   #
$config['serverip'] = 'mc.xjeggu.tk'									  ;	# The server IP to display on the web page #
$config['home']  = 'https://www.spigotmc.org/resources/13932/'            ; # The website for the home link            #
$config['wiki'] = 'https://github.com/boy0001/FastAsyncWorldedit/wiki'    ; # Wiki                                     #
$config['issues']='https://github.com/boy0001/FastAsyncWorldedit/issues'  ; # Issue tracker                            #
$config['support'] = 'https://discord.gg/ngZCzbU'            		      ; # Support                                  #
$config['privacy'] = 'https://empcraft.com/?privacy'            		  ; # Privacy policy                           #
                                                                                                                       #
# e.g. array('192.168.1.10')                                                                                           #
$config['required_ips']   = array()                                       ; # To authorize all servers use array()     #
                                                                                                                       #
$config['size']  = 100000000                                              ; # Max file size                            #
                                                                                                                       #
$config['allow-delete']  = true                                           ; # Allow file deletion requests             #
$config['file-types']  = array("schem","schematic","zip","nbt")           ; # Allow file types                         #
########################################################################################################################

// DO NOT EDIT BELOW THIS
foreach($config as $var => $val) {
    Config::set($var, $val);
}
unset($config);
?>