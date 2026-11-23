<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&0O8@<)?@]x5cs!9/l}NS?v[1vwIy7J-02[ ?fGxHK8;&&?^EU&DR[H/=b?YG$7%' );
define( 'SECURE_AUTH_KEY',  'dN9~l0 5> ql:bI6+df=dF~#*~!Ypl_}hl4U[@l]OPbTwk6ws}>VZLHt//m&Fd[r' );
define( 'LOGGED_IN_KEY',    '0&Qr?6kFY,eeT3(b5[{iJ$XlLfX;wS*>8VWxbDFX]vi/p55;O=grZ_ZG Dd}w[7B' );
define( 'NONCE_KEY',        'd}f<36S`rb<MN@vsk8uVKG|4jY,`NK>_Vm.`S4U1nZcW9Ng2L%q{l*g!5qYgT*;/' );
define( 'AUTH_SALT',        '_8SKY2F~7HY~fHGGO7,_CXxTxl}dJ7WxCWF0D/:0b#=`$CWPfz.N~+qWNB}<56AB' );
define( 'SECURE_AUTH_SALT', '|Hkk~dG]2$KOoF3EhaIeLA;UwJWLG0XLHAoU,m>*lg|>b2zsOvK@_[u/tS*wQN+N' );
define( 'LOGGED_IN_SALT',   'tl-.y0HT[O1uvvO(ut{xn:I/[4o@v=}@tF:7y9;R[ :@]??1WUk]uF&/WKhs!+(O' );
define( 'NONCE_SALT',       '@>9{93FBZyHXAm`x{>>N]{<o_?X$#x*u!P-wwZK_N;gB_J&z!?hdznVKa|d<DN4l' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
