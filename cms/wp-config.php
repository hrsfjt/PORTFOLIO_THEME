<?php
define('DB_HOST', 'cmsdb');
define('DB_NAME', 'cms_db');
define('DB_USER', 'cms_user');
define('DB_PASSWORD', 'secrets');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('WP_SITEURL', 'http://localhost:8080/cms');
define('WP_HOME', 'http://localhost:8080');

define('AUTH_KEY', '_8-^WA!pC{YWAgM (GI~hMgoEqxYi 0|%~=$XACt;A0[6G{?ThuH05MDg?f{L1#:');
define('SECURE_AUTH_KEY', 'y{X;?u{!=DK9Ie0Cs6*V=e`Oy~[VnnT&Vx9zR3PI[.F1:k^`mUt|SfX?$El&Sv1P');
define('LOGGED_IN_KEY', '8Y+*WIuv5liUWr*y:J5#^vDCyfj4;0R|+VkXnp]RfP^UCe;>XVAf>/T`6n$)?RwV');
define('NONCE_KEY', 'n_+Zycfy:a%jZAx~fc6@66)evaVS{*8:[L5iv%kXL#5~?32:HZ-@wzp KY!,T2Do');
define('AUTH_SALT', 'n(t7N6Y &fha.:6!{]$;%o)IFa`e|;Ev-[#jfA!vT6O>G1s5Csy*}BZ9~[CBAu;2');
define('SECURE_AUTH_SALT', 'n$E%k`~ix&z]|([<F)Hra*.^oVtXel,t#bT[=#LE!ipv[YpA.g.-:5&`)>YpdH>j');
define('LOGGED_IN_SALT', 'iv3Ht&T@T|dw&X%5h{Wskd`d%z)e1atq6Drzr6!1Apr(]iA^>-RmNKe~-jIOq@v2');
define('NONCE_SALT', 'H*ODqUS*-#1y-S~xUjEMHH?1e^}HE #h}=o@%4qIlccD[eJd/[gcN!6r04%0Wsy{');

define('GOOGLE_ANALYTICS_ID', '');
define('FB_APP_ID', '');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

define('FORCE_SSL_LOGIN', false);
define('FORCE_SSL_ADMIN', false);
$_SERVER['HTTPS'] = 'off';

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
?>
