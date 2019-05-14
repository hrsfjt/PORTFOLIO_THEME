<?php
define('DB_HOST', 'mysql');
define('DB_NAME', 'wp_db');
define('DB_USER', 'wp_user');
define('DB_PASSWORD', 'secrets');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY', 'qR~bP4_x:[o#Tys>EbL8bgC{$dtFYhGyy=.ty9}>!o.wn|NNkBg=cLwV~LPI`{2?');
define('SECURE_AUTH_KEY', '+F4OiVl%s&h5tz1#)T.]F4-,xN,&9r>4!/bzc !9:d+IdS+nGvx8S3Z8h.P;U%e@');
define('LOGGED_IN_KEY', 'yw1yqxQ2|!-i@)&Q}U(!$Y8K2I+rHz~1*SrpG4| dph4/a({oiLm[&HI>D2[iceg');
define('NONCE_KEY', 'C.kZ*mwiHKjXed*M0yp=0il&-CaZRKTh2.?c!pkN%<ooZXgSNH`.uh:^S7:XJBpy');
define('AUTH_SALT', '&8iy3O5>) (Oqk;,K6x^rT+t/;Fc93L< E3$7Qs5d8!zM|-pAYH2J=M7S?k!O{%=');
define('SECURE_AUTH_SALT', 'v[wo]iTR)s<%:Jjpui=;uoFU:]%^i%n#w$DI^+=,%OviA?s>F/[u_PCahg2ccPI_');
define('LOGGED_IN_SALT', 'EnH8IpjpHc%0%CjkK>9T7UP{v1!yr8#AMSNo[wx#P>v.#,P5jA<Cto4U7i7b.RD9');
define('NONCE_SALT', 'ppRd]LH!$,}KF(@ohtNS{)TPD1=yN)lB1ds<VUT=#K{``Kq*3g.CB:(a^gAgV6)|');
$table_prefix = 'wp_';
define('WP_DEBUG', true);
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once ABSPATH . 'wp-settings.php';
