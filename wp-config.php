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
 * * Настройки MySQL
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
define( 'DB_NAME', 'u1627796_default' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'u1627796_default' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'mG9yJ4dG4x' );

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
define( 'AUTH_KEY',         'mnLUAU_W^j,x(_dNE9n53D)ecsBBrp-u[a HMNojG=;^&k,Us-g{S.}B]pL4Ia68' );
define( 'SECURE_AUTH_KEY',  'TnU~[j70/AF(OziBsTra6!SDR8xdL!VaDUQp/.RxMh4WU4>T(xD}qrV3Kpsk_G_5' );
define( 'LOGGED_IN_KEY',    'TH5k<Qm}/qThzY>OEU{q~T:[mLqFz-Tv6Ab:<4}bGxYgt%68Ye)cJ*jRvRmaFL(`' );
define( 'NONCE_KEY',        'VdORKl%R%bxq]MUe/E5`;J5:#Ud9`x=y=v ;x?{UAOr(UNQN;O[9(%, mwAB3[xA' );
define( 'AUTH_SALT',        'HP~lSOy>|{{-0Yaf(t}KcC)fvG[`P[TDz8r:Ut`T,nrJXwRd=CKz$J%P Iszl,Y;' );
define( 'SECURE_AUTH_SALT', 'RW]=fJ9grJ[x5( 4%Wg6w]K3+i}=B2*C-Sv];Y_Vhgly9$!7K&ZMroNdwd)UxMp&' );
define( 'LOGGED_IN_SALT',   '/~.SL)F_yZ%r-<W`0zKXy/p7*r:=?#p./~Ln1]A@x-;5[0zpzCR?3u}=+R]1J%z,' );
define( 'NONCE_SALT',       'oh0m4-ZE&p}~`<}!{%7^_;oGhTN%Y)<w.80sTsCFjqiys TaBK]w9-EpAdJT{*Hs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'check_';

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
