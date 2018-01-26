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
define('DB_NAME', 'sale');

/** Имя пользователя MySQL */
define('DB_USER', 'sale');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'sale');

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
define('AUTH_KEY',         '@5Y[Z{HEx)0Dm!K~qMP/g=,Lp1LNlK7<7.jdrZvXx,QOZQ3q+BAf?7nl;f(GRiJ&');
define('SECURE_AUTH_KEY',  '>U-^vS0raBuTL,@}l[__F=w}H9Kn_;>-y*}Sb|)wDQ;<xhQ!`*r2;enXP#ETd~O&');
define('LOGGED_IN_KEY',    'clKONn3T}xh t74!Bi.O2a]{>Guw{!H58^6/*WWh{,N>I.^,j?Aq7p=R,#r:Hbm@');
define('NONCE_KEY',        ' D?fz6&?s.Nl,_Zwpvqs6<2j(7h`zpx`SNA6fV?hBWA/5}IO8,=V8?&TcYXbpr{!');
define('AUTH_SALT',        ',[=8$C2{Fw9CF2fCn$|#;@yKoY)mhDzGXo2S$8-tmUi0:qJpa{F$O%0i#aU c%_2');
define('SECURE_AUTH_SALT', 'SsY3:WdIn. H.F+%rpE|r|!?o0o!6s.`/@r[cB$))~m_NsXn%>k-l<hCj{]_j>ll');
define('LOGGED_IN_SALT',   'sFqOLEI4%/@$pdm<[NaF)`6Ha@dFk0h@};u4Y%V}.lMz(n?>A;9ZMKSVb& &9550');
define('NONCE_SALT',       'F0X}57+x0dB`>hGA;|(yL},Isp:b3U-|I|W DSHk@*12gWEdZ {+#Op$8Y:)g<<#');

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

if(is_admin()) {
    add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
    define( 'FS_CHMOD_DIR', 0751 );
}
