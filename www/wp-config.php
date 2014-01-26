<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'shirerot');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GWyjc@|$G!ooKGISuPXbj%+d[]o>0bj[0RLoOjIKpw?wi[1+HbdSIigI]6~43.tr');
define('SECURE_AUTH_KEY',  'yzD+|fGZ3MY=[cjLih-+UD!XCQc/TH4OYc$1|=Y*,{}J0o&c|f:|%*zy1O?>FkLy');
define('LOGGED_IN_KEY',    'Y P+p@Z:^e;t`)U3:@i]ap5-08?H4+)Bj+U]7C{yb(o[~Qa6=Cst=l/+cFj-*@.{');
define('NONCE_KEY',        '0hueBVR EEhKC:Xa1sk?~9~JtSR-49mA9-Ayn!c/CWGpRIfvfq #Dh._;wJAf0?5');
define('AUTH_SALT',        'V9k_k)?fMO/6KsRPAl=+QBkREbBh6cjM|1}m7jDCj2oqDc-$sJ >AGpU3pE.d7:i');
define('SECURE_AUTH_SALT', ' $u5IS{7QbSpz^|:e+dok~y]|IY4yRv19k4S&H^B=jEcYUP%oWo E1x*}^WHQA!H');
define('LOGGED_IN_SALT',   'c{;my#f|7p-90 GM3@Vqc(_:YT5c6zp7.2h&Y+]bb)lf$oSHtdVR|ck}EL^jd!9S');
define('NONCE_SALT',       'gZ>?)}T.R<JU@fmf@+nyvv1{k&Tzh..M+R|$ttX)t|iqoCzG0 Yl+(D0.MXOIYSD');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
