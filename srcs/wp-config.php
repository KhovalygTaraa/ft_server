<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '9lO|CooZ=yAqQA-.3w4NW(8I^.%|x:dV`/ #_mA/,05M%Cw9SkX31-QDrQ[l3l?p');
	define('SECURE_AUTH_KEY',  ':d(R(H1LN88Q&eHg-=7W=fa,y9RyB`m{,bx5fE(bj&8o(r*5/9{z7o2| ~4@>MOr');
	define('LOGGED_IN_KEY',    '/TqD$W P8$)s!N4zzFBxBPXSY;mO|)9j#~D&90R!u|+F~41U%M<C|MtoE1EyaprJ');
	define('NONCE_KEY',        ';NJ[sv)O:{T-|E|B>*=v2NRj[;++0<F`ZJOM[$w(V|G-nk}]q}-yFaE^N8MQ<aBz');
	define('AUTH_SALT',        '|_3B.9o?|urd}c rY4{H0)qt;o<>kJ!zE@+Qbvf-N7L*ok_+O+[.N`.&:gIRONVT');
	define('SECURE_AUTH_SALT', '5eb@% o^xy|K]1^ZU$UdHkXRQgG-pRj^N-ceg6I.#-?28Wbkz}U{{yylx4 _-^-)');
	define('LOGGED_IN_SALT',   'l41do:7M9gETH;?r_HqE_C+;zP0#f3&d/Mc2r+@:U56${64oev,2j5{!|d*3:]7_');
	define('NONCE_SALT',       '4jZ=Nks^?yTdc&em,,My!3Gk-O[Mi7J+|HlVGO~V9goB0!7}H_!]CZ1.kbJt)$y*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
