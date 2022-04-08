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
define( 'DB_NAME', 'тест' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'TestUs' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'TestUs' );

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
define( 'AUTH_KEY',         '+Yt[ZZIA I]BL{l!]P81S5GUN/:TIaA[[a_X^H2|P #PDW4.`alG7A[`}K!-;?MN' );
define( 'SECURE_AUTH_KEY',  'Dg*WRH~^sTn~ i}|bd%OZu(t>u q)AQu8g&H{lgrx3O!_N.Jj7+ j;:$7z<aRj_E' );
define( 'LOGGED_IN_KEY',    'D:yH~S7{KL;pfu/^+Uk9=;;ejD{+6!d`ng,}uoLFul,93anj>,B0&Q.<?TISE8T]' );
define( 'NONCE_KEY',        '63w-M0&7lECUXYqQt/*^9(+K 1j1g*#`eQ)S/ZOKP,|b&[ZKQ9>)ACn%?{ ()y?Q' );
define( 'AUTH_SALT',        'OEmh$/:nP;IXD$v)uk[p@=,gK55b&H8Dso0e|`9.185WotP?OVsjUMa?^0C;Av@t' );
define( 'SECURE_AUTH_SALT', 'e &zK/nWqcfa[V59Pk}`zTCE#{nmp)eRSG$F&7fe3L/7D{(J1?^A%|&?>o0dKc!:' );
define( 'LOGGED_IN_SALT',   '{OszvH:0=7Q(ihEJ:@c#9&%DR/JSRsw|K+/#vYpRm#O?V 9ozAska>o_%2,qG]:1' );
define( 'NONCE_SALT',       'LIY1wkjs4uB<kcC=%Jx/`=qn.J9+]~`4UJZnb J2~E65* j++X%T3[i_=0YPP*a=' );

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
