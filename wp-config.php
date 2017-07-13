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
define('DB_NAME', 'portfol');

/** Имя пользователя MySQL */
define('DB_USER', 'len');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'opros');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jn=O$K2Y}=zzEPWqy$*z&,xcaq*`On!n%/+fw,@(4I^7:!It.sKwK1ZAU8lp5)=Y');
define('SECURE_AUTH_KEY',  '-_vwx<!.lJ*k-M1W?n`L/Ef {A&{DSIV|-DM*`)1VdXH870Uy:]`r!5h5zI7W::*');
define('LOGGED_IN_KEY',    'qFt<SLBdqe)bwh3/(H{&B{N,,~8K^ew:L[jkX0+2t~f**|w#k=OSy/aGP0hzSo^Z');
define('NONCE_KEY',        ',Q]TP;&>IeR8:|4JoNt:u:gVUch]pYI0mI.?H2enp}x:f<8X)*|v;3`48t>f)&r,');
define('AUTH_SALT',        '+ R_<Rw4{#H>aRFnH5NvV-wuD}4m$HK[_s?pz/KhYiimm.2Jo[4~1wg6 {^R}9_W');
define('SECURE_AUTH_SALT', '9su):$UH;3`4}%Bsyt*aYea(YdC5hv>?<]HT|QMgD7{g@d(pM:d*u?u^;^)K,kA9');
define('LOGGED_IN_SALT',   'Jm8G@x5PU}JpF2}jv,c_`J{M!q.esEQ9M1@KhXcixbYNbCr(g=muEbO_pciT|SBK');
define('NONCE_SALT',       'Xmp+~L2~R3$2Q;R2RF&GcM$R<m70bj*c~[f0)4QA|wV`lPGZFXuH}%E,P]epD6:Z');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
