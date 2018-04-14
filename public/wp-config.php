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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'stK++p}rW_z$|rasbbPt+-`S:hB7NTY9 {-T/1;)<c?|Q;TMULAi@!j{t*2$;xaW');
define('SECURE_AUTH_KEY',  '%f9J(QJ$tB2Y?`G_:DLi|8Dp[OIf>Q.EvUCb7!s#~X%+_Vb,@yE%wgiN+;tw3$c%');
define('LOGGED_IN_KEY',    'B!$GWo[jBZ+(K,Fk|)A`@CJeqPs| CTB+7fM4mbJC;=8tMUWQl+dvYxDPh}r-V9f');
define('NONCE_KEY',        '$m!u.?Eq)||Eq/|^_)_1~|-LCC#pS%X%~BjmI27vwG!_NLR1o776?wN`[kXIv,HD');
define('AUTH_SALT',        '*t^=;cnU|-Ud|PeOa]Kk>}vJ5b:F]z~[c-jEOA,M q8]t1QFgDtMmJe|]|DsxjJ ');
define('SECURE_AUTH_SALT', '@9,/Zb@t{$Uv!)G=G3=%F0NsQkMzCT3ID2j5NmQBCtjHs#t=KXkV8Umtb44M(Y2Y');
define('LOGGED_IN_SALT',   'gE44lx.mckI{l,*:{2I2-*0||z/IA+=??*jxlU2 5%TP]X(?s!jM.oPuNL)Yf;7a');
define('NONCE_SALT',       'kQrnT23D}[$6)3YVXL-kTQQF5P7+ypJym5~7pkiE`Tg]CwYuH9H`w25zu.cML-k:');

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