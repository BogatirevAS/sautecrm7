<?php
/**
 * ç
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'Фильтры',
    'LBL_ADVANCED_SEARCH' => 'Расширенный фильтр',
    'LBL_BASIC_TYPE' => 'Базовый поиск',
    'LBL_ADVANCED_TYPE' => 'Расширенный поиск',
    'LBL_SYSOPTS_2' => 'Какой тип базы данных будет использоваться в системе?',
    'LBL_SYSOPTS_DB' => 'Тип базы данных',
    'LBL_SYSOPTS_DB_TITLE' => 'Тип базы данных',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Пожалуйста, исправьте следующие ошибки перед тем как продолжить:',
    'ERR_DB_VERSION_FAILURE' => ' Невозможно проверить версию БД.',
    'DEFAULT_CHARSET' => 'utf-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Укажите имя администратора системы',
    'ERR_ADMIN_PASS_BLANK' => 'Укажите пароль администратора системы',

    'ERR_CHECKSYS' => 'В процессе проверки совместимости были обнаружены ошибки. Для того, чтобы ваша система функционировала правильно, пожалуйста, выполните необходимые действия над пунктами, указанными ниже и повторите проверку или начните установку заново.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Не найдено: планировщик будет работать с ограниченной функциональностью',
    'ERR_CHECKSYS_IMAP' => 'Не найдено: для нормальной работы входящей почты и кампаний необходимо наличие IMAP-библиотек',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Установите это значение в ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M или более в php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Предупреждение: установлена защита от записи',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Неверная версия PHP. Установлена версия: (',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Ваша версия IIS не поддерживается. Вам необходимо установить версию, совместимую с текущей версией SuiteCRM. Обратитесь к разделу <b>Compatibility Matrix</b>, находящемуся в примечаниях к релизу, чтобы уточнить номер поддерживаемой версии IIS. Номер текущей версии: ',
    'ERR_CHECKSYS_FASTCGI' => 'Модуль FastCGI для исполнения PHP не установлен. Вам необходимо установить и настроить версию FastCGI, совместимую с текущей версией SuiteCRM. Обратитесь к разделу <b>Compatibility Matrix</b>, находящемуся в примечаниях к релизу, чтобы уточнить номер поддерживаемой версии FastCGI. Подробную информацию вы можете получить здесь: <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Для оптимального использования IIS / FastCGI SAPI, установите параметр fastcgi.logging в файле php.ini равным 0.',
    'LBL_DB_UNAVAILABLE' => 'База данных недоступна',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Поддержка базы данных не обнаружена. Убедитесь, что у вас есть необходимые драйвера для одного из следующих типов БД: MySQL или MS SQLServer. Вероятно, вам необходимо раскомментировать соответствующее расширение в файле php.ini, или перекомпилировать бинарный файл в соответствии с вашей версией PHP. Пожалуйста, обратитесь к руководству пользователя PHP за более подробной информацией о поддержке вашего типа БД.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Функции для работы с XML-парсером не обнаружены. Вероятно, вам необходимо раскомментировать соответствующее расширение в файле php.ini, или перекомпилировать бинарный файл в соответствии с вашей версией PHP. Пожалуйста, обратитесь к руководству пользователя PHP за более подробной информацией.',
    'ERR_CHECKSYS_MBSTRING' => 'Не найдена функция, связанная с расширением MBSTRING. <br/><br/>Вероятно, модуль MBSTRING не включён по умолчанию в PHP и должен быть активирован путём добавления опции --enable-mbstring при сборке PHP. Пожалуйста, обратитесь к руководству пользователя PHP за более подробной информацией.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Файл конфигурации существует, но он не доступен для записи. Пожалуйста, выполните необходимые шаги для того, чтобы сделать файл доступным для записи. В зависимости от типа вашей операционной системы вам потребуется либо сменить права доступа к файлу, путём выполнения команды chmod 766, либо, открыв контекстное меню, получить доступ к свойствам файла и снять отметку с опции read only.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Файл config_override. php существует, но он не доступен для записи. Пожалуйста, выполните необходимые шаги для того, чтобы сделать файл доступным для записи. В зависимости от типа вашей операционной системы вам потребуется либо сменить права доступа к файлу, путём выполнения команды "chmod 766", либо, открыв контекстное меню, получить доступ к свойствам файла и снять отметку с опции "read only".',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Указанная папка существует, но она не доступна для записи. Пожалуйста, выполните необходимые шаги для того, чтобы сделать папку доступной для записи. В зависимости от типа вашей операционной системы вам потребуется либо сменить права доступа к папке, путём выполнения команды "chmod 766", либо, открыв контекстное меню, получить доступ к её свойствам и снять отметку с опции "read only".',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Перечисленные файлы и папки не доступны для записи или отсутствуют и не могут быть созданы. В зависимости от типа вашей операционной системы для исправления ситуации вам потребуется либо сменить права доступа к файлу или родительской папке путём выполнения команды \"chmod 766\", либо, открыв контекстное меню, получить доступ к свойствам папки и снять отметку с опции  \"read only\", применив данное действие ко всем подпапкам.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Дополнительный файл конфигурации',
    'ERR_CHECKSYS_SAFE_MODE' => 'Безопасный режим включён(выключить эту опцию можно в php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Не обнаружена поддержка ZLib - необходима для повышения производительности при использовании zlib-сжатия.',
    'ERR_CHECKSYS_ZIP' => 'Не обнаружена поддержка ZIP - необходима для обработки сжатых файлов.',
    'ERR_CHECKSYS_PCRE' => 'Библиотека PCRE не обнаружена: данная библиотека необходима для обработки регулярных выражений в стиле Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Не обнаружена необходимая версия библиотеки PCRE: системе требуется библиотека  PCRE library 7.0 or above to process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'Неверный логин или пароль администратора БД (Ошибка  ',
    'ERR_DB_ADMIN_MSSQL' => 'Имя администратора базы данных и/или пароль указаны неверно. Невозможно соединиться с сервером: ',
    'ERR_DB_EXISTS_NOT' => 'Указанная база данных не существует',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'База данных уже существует. Чтобы установить систему с выбранной базой данных, перезапустите процесс установки и выберите параметр "Удалить и создать заново существующие таблицы SuiteCRM?". Для обновления системы используйте Мастер Обновлений в панели администратора. Пожалуйста, ознакомьтесь с документацией обновления расположенной почерпнуть в <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">здесь</a>.',
    'ERR_DB_EXISTS' => 'База данных с таким именем уже существует, нельзя создать ещё одну базу с таким же именем.',
    'ERR_DB_EXISTS_PROCEED' => 'База данных с подобным именем уже существует. --<br>Вы можете нажать на кнопку "Назад" и указать другое имя базы данных, или же вы можете нажать на кнопку "Далее" и продолжить установку, но в этом случае <strong> все таблицы в этой базе данных будут удалены.</strong>',
    'ERR_DB_HOSTNAME' => 'Имя хоста не может быть пустым',
    'ERR_DB_INVALID' => 'Выбран неверный тип базы данных',
    'ERR_DB_LOGIN_FAILURE' => 'Указанные сервер БД, логин и/или пароль пользователя БД неверны. Соединение не может быть установлено. Укажите правильные данные.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Указанные сервер БД, логин и/или пароль пользователя БД неверны. Соединение не может быть установлено. Укажите правильные данные.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Указанные сервер БД, логин и/или пароль пользователя БД неверны. Соединение не может быть установлено. Укажите правильные данные.',
    'ERR_DB_MYSQL_VERSION' => 'Версия MySQL (%s) не поддерживается. Ознакомьтесь с перечнем поддерживаемых версий в к текущему релизу.',
    'ERR_DB_NAME' => 'Название базы данных не может быть пустым.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Имя БД не может содержать следующие символы: '\\', '/', и '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Имя БД не может начинаться с цифры и с символов '#', '@', а также не может содержать следующие символы: пробел, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', и '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Имя БД может содержать только буквенно-цифровые символы, а также символы '#', '_' и '$'",
    'ERR_DB_PASSWORD' => 'Пароли для SuiteCRM не совпадают.',
    'ERR_DB_PRIV_USER' => 'Необходим логин администратора.',
    'ERR_DB_USER_EXISTS' => 'Пользователь с указанным именем уже существует. Нельзя создать ещё одного пользователя с таким же именем.',
    'ERR_DB_USER' => 'Имя пользователя SuagrCRM не может быть пустым.',
    'ERR_DBCONF_VALIDATION' => 'Пожалуйста, исправьте следующие ошибки:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Пароли пользователя базы данных SuiteCRM не совпадают.',
    'ERR_ERROR_GENERAL' => 'Были обнаружены следующие ошибки:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Невозможно удалить файл: ',
    'ERR_LANG_MISSING_FILE' => 'Невозможно найти файл: ',
    'ERR_LANG_NO_LANG_FILE' => 'Не найден языковой файл в include/language: ',
    'ERR_LANG_UPLOAD_1' => 'Загрузка не удалась. Пожалуйста, попробуйте ещё раз.',
    'ERR_LANG_UPLOAD_2' => 'Языковой пакет должны быть ZIP-архивом.',
    'ERR_LANG_UPLOAD_3' => 'PHP не может переместить временный файл в папку обновления',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Указана неверная папка для журналов.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Указанная папка для журналов недоступна для записи.',
    'ERR_NO_DIRECT_SCRIPT' => 'Не удалось обработать скрипт.',
    'ERR_NO_SINGLE_QUOTE' => 'Нельзя использовать одинарную кавычку для ',
    'ERR_PASSWORD_MISMATCH' => 'Пароли администратора для SuiteCRM не совпадают.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Невозможно записать в файл<span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Вы можете продолжить установку, создав файл config.php вручную и скопировав туда нижеследующий текст. Но обязательно убедитесь, что вы это сделали до перехода к следующему шагу.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Вы не забыли создать файл config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Предупреждение: невозможно произвести запись в файл config.php. Пожалуйста, убедитесь, что файл существует.',
    'ERR_PERFORM_HTACCESS_1' => 'Не могу записать в  ',
    'ERR_PERFORM_HTACCESS_2' => ' файл.',
    'ERR_PERFORM_HTACCESS_3' => 'Если вы хотите защитить ваш файл журнала от чтения его браузером, создайте файл .htaccess со следующей строкой:',
    'ERR_PERFORM_NO_TCPIP' => 'Невозможно подключиться к интернету. Когда соединение будет доступно, пожалуйста, зарегистрируйтесь по адресу: <a href="https://www.suitecrm.com">https://www.suitecrm.com</a>.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Указана неверная папка для файлов сессий.',
    'ERR_SESSION_DIRECTORY' => 'Указанная папка сессий недоступна для записи.',
    'ERR_SESSION_PATH' => 'Если вы решили указать собственную папку для файлов сессий - укажите её расположение',
    'ERR_SI_NO_CONFIG' => 'Вы не поместили файл config_si.php в корневую папку или же вы не определили переменную $sugar_config_si в файле config.php',
    'ERR_SITE_GUID' => 'Если вы решили указать собственный код приложения - укажите его',
    'ERROR_SPRITE_SUPPORT' => "Библиотека GD не обнаружена, функционал CSS-спрайтов не будет задействован.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Предупреждение: конфигурация PHP должна быть изменена, чтобы разрешить загрузку файлов размером более 6 МБ.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Максимальный размер загружаемого файла',
    'ERR_URL_BLANK' => 'URL не может быть пустым.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Невозможно определить расположение',
    'ERROR_MANIFEST_TYPE' => 'В файле manifest.php должен быть указан тип устанавливаемого пакета.',
    'ERROR_PACKAGE_TYPE' => 'В файле manifest.php указан нераспознаваемый тип пакета.',
    'ERROR_VERSION_INCOMPATIBLE' => 'Загружаемый файл не совместим с установленной версией SuiteCRM: ',

    'LBL_BACK' => 'Назад',
    'LBL_CANCEL' => 'Отмена',
    'LBL_ACCEPT' => 'Принимаю',
    'LBL_CHECKSYS_CACHE' => 'Подпапки папки Cache',
    'LBL_DROP_DB_CONFIRM' => 'База данных уже существует. Вы хотите продолжить и удалить текущие таблицы? Будут уничтожены все существующие данные.',
    'LBL_CHECKSYS_COMPONENT' => 'Основные компоненты',
    'LBL_CHECKSYS_CONFIG' => 'Файл config.php',
    'LBL_CHECKSYS_CURL' => 'Модуль cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Папка /custom',
    'LBL_CHECKSYS_DATA' => 'Подпапки папки /data',
    'LBL_CHECKSYS_IMAP' => 'Модуль IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Модуль MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'ОК (нет ограничения)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'ОК (ограниченно)',
    'LBL_CHECKSYS_MEM' => 'Лимит памяти PHP',
    'LBL_CHECKSYS_MODULE' => 'Подпапки и файлы модулей',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Недоступно',
    'LBL_CHECKSYS_OK' => 'Готово',
    'LBL_CHECKSYS_PHP_INI' => 'Расположение файла php.ini: ',
    'LBL_CHECKSYS_PHP_OK' => 'OK (вер. ',
    'LBL_CHECKSYS_PHPVER' => 'Версия PHP',
    'LBL_CHECKSYS_IISVER' => 'Версия IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Проверить',
    'LBL_CHECKSYS_STATUS' => 'Статус',
    'LBL_CHECKSYS_TITLE' => 'Проверка системных требований',
    'LBL_CHECKSYS_XML' => 'XML-парсинг',
    'LBL_CHECKSYS_ZLIB' => 'Модуль ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Модуль ZIP',
    'LBL_CHECKSYS_PCRE' => 'Библиотека PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Пожалуйста, настройте права доступа к следующим файлам/папкам:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Пожалуйста, настройте права доступа к следующим модулям и содержащимся в них файлам:',
    'LBL_CHECKSYS_UPLOAD' => 'Папка /upload',
    'LBL_CLOSE' => 'Закрыть',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'будет создана',
    'LBL_CONFIRM_DB_TYPE' => 'Тип базы данных',
    'LBL_CONFIRM_NOT' => 'не',
    'LBL_CONFIRM_TITLE' => 'Подтверждение параметров',
    'LBL_CONFIRM_WILL' => 'будет',
    'LBL_DBCONF_DB_DROP' => 'Удаление таблиц',
    'LBL_DBCONF_DB_NAME' => 'Название базы данных',
    'LBL_DBCONF_DB_PASSWORD' => 'Пароль базы данных',
    'LBL_DBCONF_DB_PASSWORD2' => 'Повтор пароля базы данных',
    'LBL_DBCONF_DB_USER' => 'Имя пользователя базы данных',
    'LBL_DBCONF_SUITE_DB_USER' => 'Имя пользователя базы данных',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Логин администратора базы данных',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Пароль администратора базы данных',
    'LBL_DBCONF_COLLATION' => 'Сравнение:',
    'LBL_DBCONF_CHARSET' => 'Кодировка',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Расширенная конфигурация базы данных',
    'LBL_DBCONF_DEMO_DATA' => 'Заполнить базу данных демонстрационными данными?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Демонстрация',
    'LBL_DBCONF_HOST_NAME' => 'Хост',
    'LBL_DBCONF_HOST_INSTANCE' => 'Экземпляр хоста',
    'LBL_DBCONFIG_SECURITY' => 'В целях безопасности необходим пользователь с административными, эксклюзивными правами доступа к базе данных SuiteCRM. Этот пользователь может быть создан сейчас или же вы можете указать уже существующего пользователя.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Указать существующего пользователя',
    'LBL_DBCONFIG_CREATE_DD' => 'Создать пользователя',
    'LBL_DBCONFIG_SAME_DD' => 'Создать из администратора',
    'LBL_DBCONF_TITLE' => 'Конфигурация базы данных',
    'LBL_DBCONF_TITLE_NAME' => 'Параметры базы данных',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Информация о пользователе базы данных',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Пароль',
    'LBL_DISABLED_DESCRIPTION_2' => 'После того, как все изменения были сделаны, вы можете нажать на кнопку "Пуск" для начала процесса установки. <i>По окончании установки значение переменной \'installer_locked\' должно быть равно \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Инсталлятор уже был однажды запущен. В целях безопасности возможность повторного запуска инсталлятора отключена. Если вы абсолютно уверены, что хотите запустить его ещё раз, пожалуйста, в файле config.php установите значение переменной \'installer_locked\' в  \'false\'. Строка должна выглядеть следующим образом:',
    'LBL_DISABLED_HELP_1' => 'За дополнительной информацией о процессе установки обращайтесь на сайт SuiteCRM<br>',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Форумы поддержки',
    'LBL_DISABLED_TITLE_2' => 'Установка SuiteCRM приостановлена',
    'LBL_HELP' => 'Помощь',
    'LBL_INSTALL' => 'Установить',
    'LBL_INSTALL_TYPE_TITLE' => 'Параметры установки',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Выберите тип установки',
    'LBL_INSTALL_TYPE_TYPICAL' => 'Обычная установка',
    'LBL_INSTALL_TYPE_CUSTOM' => 'Выборочная установка',
    'LBL_INSTALL_TYPE_MSG2' => 'Необходимо минимум информации для установки. Рекомендуется для начинающих пользователей.',
    'LBL_INSTALL_TYPE_MSG3' => 'Предоставляет дополнительные параметры для настройки процесса установки. Эти параметры так же будут доступны по окончании процесса установки в панели администратора. Рекомендуется для опытных пользователей.',
    'LBL_LANG_1' => 'На данной странице вы можете или установить языковой пакет, отличающийся от установленного по умолчанию, или нажать на кнопку "Вперёд" для продолжения процесса установки.',
    'LBL_LANG_BUTTON_COMMIT' => 'Установить',
    'LBL_LANG_BUTTON_REMOVE' => 'Удалить',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Деинсталлировать',
    'LBL_LANG_BUTTON_UPLOAD' => 'Загрузка',
    'LBL_LANG_NO_PACKS' => 'Нет установленных пакетов',
    'LBL_LANG_PACK_INSTALLED' => 'Следующие языковые пакеты были установлены: ',
    'LBL_LANG_PACK_READY' => 'Следующие языковые пакеты готовы к установке: ',
    'LBL_LANG_SUCCESS' => 'Языковой пакет успешно загружен',
    'LBL_LANG_TITLE' => 'Языковой пакет',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Производится установка SuiteCRM. Это может занять некоторое время.',
    'LBL_LANG_UPLOAD' => 'Загрузить языковой пакет',
    'LBL_LICENSE_ACCEPTANCE' => 'Лицензионное соглашение',
    'LBL_LICENSE_CHECKING' => 'Проверка совместимости',
    'LBL_LICENSE_CHKENV_HEADER' => 'Проверка системного окружения',
    'LBL_LICENSE_CHKDB_HEADER' => 'Проверка прав доступа к БД',
    'LBL_LICENSE_CHECK_PASSED' => 'Проверка совместимости успешно пройдена',
    'LBL_CREATE_CACHE' => 'Подготовка к установке...',
    'LBL_LICENSE_REDIRECT' => 'Перенаправление через ',
    'LBL_LICENSE_I_ACCEPT' => 'Я принимаю лицензионное соглашение',
    'LBL_LICENSE_PRINTABLE' => 'Версия для печати',
    'LBL_PRINT_SUMM' => 'Печать',
    'LBL_LICENSE_TITLE_2' => 'Лицензия SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'Афиноген',
    'LBL_LOCALE_NAME_LAST' => 'Пупкин',
    'LBL_LOCALE_NAME_SALUTATION' => 'Гн.',

    'LBL_ML_ACTION' => 'Действие',
    'LBL_ML_DESCRIPTION' => 'Описание',
    'LBL_ML_INSTALLED' => 'Дата установки',
    'LBL_ML_NAME' => 'Имя',
    'LBL_ML_PUBLISHED' => 'Дата публикации',
    'LBL_ML_TYPE' => 'Тип',
    'LBL_ML_UNINSTALLABLE' => 'Деинсталляция',
    'LBL_ML_VERSION' => 'Версия',
    'LBL_MSSQL' => 'MS SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (драйвер Microsoft SQL Server for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (расширение mysqli)',
    'LBL_NEXT' => 'Вперёд',
    'LBL_NO' => 'Нет',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Установка пароля администратора системы',
    'LBL_PERFORM_CONFIG_PHP' => 'Создание файла конфигурации',
    'LBL_PERFORM_CREATE_DB_1' => 'Создание базы данных ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>на</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Создание учётной записи в базе данных...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Добавление стандартных данных в БД',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Создание стандартных задач для планировщика',
    'LBL_PERFORM_DEFAULT_USERS' => 'Создание стандартных пользователей',
    'LBL_PERFORM_DEMO_DATA' => 'Заполнение базы данных демонстрационными данными (процесс может занять некоторое время)',
    'LBL_PERFORM_DONE' => 'Готово<br>',
    'LBL_PERFORM_FINISH' => 'Готово',
    'LBL_PERFORM_OUTRO_1' => 'Установка SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' завершена.',
    'LBL_PERFORM_OUTRO_3' => 'Установка заняла ',
    'LBL_PERFORM_OUTRO_4' => ' секунд.',
    'LBL_PERFORM_OUTRO_5' => 'Приблизительно использовано памяти: ',
    'LBL_PERFORM_OUTRO_6' => ' байт.',
    'LBL_PERFORM_SUCCESS' => 'Установка успешно завершена!',
    'LBL_PERFORM_TABLES' => 'Создание основных таблиц, таблиц аудита, добавление метаданных...',
    'LBL_PERFORM_TITLE' => 'Выполнение установки',
    'LBL_PRINT' => 'Печатать...',
    'LBL_REG_CONF_1' => 'Пожалуйста, потратьте немного вашего времени для заполнения указанной формы и регистрации установленной версии SuiteCRM. Полученная от вас информация НЕ будет передана третьим лицам.',
    'LBL_REG_CONF_3' => 'Спасибо за регистрацию. Нажмите на кнопку "Завершить" для того, чтобы начать работу в SuiteCRM. Для первого входа в систему вам понадобятся логин и пароль, которые вы указали на 2 шаге установки системы.',
    'LBL_REG_TITLE' => 'Регистрация',

    'LBL_REQUIRED' => '* Поля, обязательные для заполнения',

    'LBL_SITECFG_ADMIN_Name' => 'Имя администратора системы',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Повторный ввод пароля администратора',
    'LBL_SITECFG_ADMIN_PASS' => 'Пароль <em>администратора</em>',
    'LBL_SITECFG_APP_ID' => 'ID приложения',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => ' Перезапись сгенерированного ID приложения предотвращает доступ к новому экземпляру приложения из уже запущенного приложения. Если вы используете несколько копий SuiteCRM, то у них должен быть <u>идентичный</u> ID приложения.',
    'LBL_SITECFG_CUSTOM_ID' => 'Указать ваш личный ID приложения',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Использование другой папки для хранения файла журнала. Не принципиально, где именно будет находиться этот файл: доступ браузера к нему будет ограничен правилами, указанными в файле .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Использовать другую папку для файла журнала',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Создание отдельной папки для сохранения файлов сессий, что может увеличить надёжность сохранения сессионных данных.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Использовать другую папку для записи файлов сессий',
    'LBL_SITECFG_FIX_ERRORS' => 'Пожалуйста, исправьте следующие ошибки:',
    'LBL_SITECFG_LOG_DIR' => 'Папка файла журнала',
    'LBL_SITECFG_SESSION_PATH' => 'Папка файлов сессий (должна быть доступна для записи)',
    'LBL_SITECFG_SITE_SECURITY' => 'Дополнительные параметры защиты',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Система периодически проверяет наличие доступных обновлений.',
    'LBL_SITECFG_SUITE_UP' => 'Проверять доступные обновления автоматически?',
    'LBL_SITECFG_TITLE' => 'Конфигурация сайта',
    'LBL_SITECFG_TITLE2' => 'Параметры SuiteCRM',
    'LBL_SITECFG_SECURITY_TITLE' => 'Параметры безопасности',
    'LBL_SITECFG_URL' => 'URL дистрибутива SuiteCRM ',
    'LBL_SITECFG_ANONSTATS' => 'Отправлять анонимную статистику использования данного программного обеспечения?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'SuiteCRM отправляет анонимную статистику использования данного программного продукта в SuiteCRM Inc. каждый раз, когда система проверяет наличие доступных обновлений. Эта информация поможет нам лучше понять, каким образом используется приложение, и, как следствие, значительно улучшить программный продукт.',
    'LBL_SITECFG_URL_MSG' => 'Введите стартовый URL приложения. Например, ввод значения "localhost" означает разрешённый доступ к системе только с этого компьютера.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Введите название системы. Это название будет отображаться в заголовке браузера при работе пользователей в приложении.',
    'LBL_SITECFG_PASSWORD_MSG' => 'После установки системы необходимо войти в SuiteCRM под учётной записью администратора. После входа в систему вы можете сменить указанные при установке логин и пароль администратора системы.',
    'LBL_SITECFG_COLLATION_MSG' => 'Выберите параметры сортировки данных. На основе этих данных (с учётом используемого языка) будут созданы таблицы БД. Если выбранный язык интерфейса не требует указания каких-либо специальных параметров - оставьте стандартное значение.',
    'LBL_SPRITE_SUPPORT' => 'Поддержка CSS-спрайтов',
    'LBL_SYSTEM_CREDS' => 'Параметры доступа',
    'LBL_SYSTEM_ENV' => 'Системное окружение',
    'LBL_SHOW_PASS' => 'Показать пароли',
    'LBL_HIDE_PASS' => 'Спрятать пароли',
    'LBL_HIDDEN' => '<i>(скрыт)</i>',
    'LBL_STEP1' => 'Шаг 1 из 2 - Подготовка к установке',
    'LBL_STEP2' => 'Шаг 2 из 2 - Настройка конфигурации',
    'LBL_STEP' => 'Шаг',
    'LBL_TITLE_WELCOME' => 'Добро пожаловать в SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Вы готовы к установке?',
    'REQUIRED_SYS_COMP' => 'Необходимые системные компоненты',
    'REQUIRED_SYS_COMP_MSG' =>
        'Перед началом установки убедитесь, что у вас установлены необходимые версии следующих программных продуктов:<br>
<ul>
<li> СУБД (MySQL, MariaDB, SQL Server)</li>
<li> Веб-сервер (Apache, IIS)</li>
</ul>
Список поддерживаемых версий вы можете посмотреть на странице поддержки.<br>',
    'REQUIRED_SYS_CHK' => 'Проверка системы',
    'REQUIRED_SYS_CHK_MSG' =>
        'В процессе установки будет выполнена как проверка корректности настроек системы, так и наличие необходимых компонентов, в частности: <br><br>
<ul>
<li><b>Версия PHP</b> &#8211; должна быть совместима с устанавливаемой версией приложения</li>
<li><b>Переменные сессии</b> &#8211; должны работать правильно</li>
<li><b>Расширение MB Strings</b> &#8211; должно быть установлено и подключено в php.ini</li>
<li><b>СУБД</b> &#8211; должна быть установлена либо MySQL, либо MariaDB, либо SQL Server</li>
<li><b>Файл Config.php</b> &#8211; должен существовать и быть доступным для записи</li>
<li>Следующие папки устанавливаемого приложения должны быть доступны для записи:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</li>
<li>/upload</b></li></ul></li></ul>
Если на указанные папки не будут установлены необходимые права, то вы не сможете продолжить установку, о чём будет выдано соответствующее предупреждение. В этом случае измените права на папки и нажмите на кнопку <b>Проверить</b>. В случае успешной проверки вы сможете продолжить установку приложения.<br>',


    'REQUIRED_INSTALLTYPE' => 'Обычная или выборочная установка',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'После проверки системы вы можете выбрать обычную или выборочную установку приложения.<br><br>
Для обоих типов установки вам необходимо знать следующее:<br>
<ul>
<li> <b>Тип СУБД</b>, в которой будут храниться данные приложения  <ul><li>MySQL, MariaDB или MS SQL Server.<br><br></li></ul></li>
<li> <b>Имя веб-сервера</b>, на котором расположена СУБД
<ul><li>Если база данных расположена на локальном компьютере или на том же компьютере, что и веб-сервер, то в качестве имени может быть указан  <i>localhost</i>.<br><br></li></ul></li>
<li><b>Имя базы данных</b>, в которой будут храниться данные приложения </li>
<ul>
<li> Если вы хотите использовать уже существующую базу данных, то в процессе установки из неё будут удалены все таблицы.</li>
<li> Если  база данных ещё не существует, то она будет создана в процессе установки.<br><br></li>
</ul>
<li><b>Логин и пароль администратора базы данных</b> <ul><li>Администратор базы данных должен иметь возможность создавать таблицы и пользователей, а также иметь возможность записи в базу данных.</li><li>Свяжитесь с системным администратором, если база данных расположена не на вашем компьютере и/или вы не являетесь администратором базы данных.<br><br></ul></li></li>
<li> <b>Логин и пароль пользователя базы данных приложения</b>
</li>
<ul>
<li> В качестве пользователя может быть указан как администратор, так и другой существующий пользователь базы данных. </li>
<li> Если вы хотите создать нового пользователя базы данных, то вам будет предоставлена подобная возможность в процессе установки приложения. </li>
</ul></ul><p>

Для <b>выборочной</b> установки вам необходимо знать следующее:<br>
<ul>
<li> <b>URL</b>, который будет использоваться для доступа к приложению.
URL должен включать имя веб-сервера или имя компьютера или IP-адрес.<br><br></li>
<li> [Необязательно] <b>Путь к папке для хранения сессий</b>, если вы хотите использовать уникальную папку для сессий в случае использования общих серверов.<br><br></li>
<li> [Необязательно] <b>Путь к папке для хранения журнала</b>, если вы не хотите использовать стандартную папку.<br><br></li>
<li> [Необязательно] <b>ID приложения</b>, если вы хотите заменить автоматически созданный идентификатор, гарантирующий, что текущая сессия не используется другими экземплярами приложения.<br><br></li>
<li><b>Кодировка</b>, наиболее часто используемая при работе с приложением .<br><br></li></ul>
Более подробная информация содержится в руководстве пользователя.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Пожалуйста, перед началом установки прочтите данную информацию. Это поможет вам определить, готова ли ваша система к установке SuiteCRM.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Выберите язык системы',
    'LBL_WELCOME_SETUP_WIZARD' => 'Мастер установки',
    'LBL_WIZARD_TITLE' => 'Мастер установки SuiteCRM: Шаг ',
    'LBL_YES' => 'Да',

    'LBL_PATCHES_TITLE' => 'Установить последние обновления',
    'LBL_MODULE_TITLE' => 'Установить языковые пакеты',
    'LBL_PATCH_1' => 'Если вы желаете пропустить этот шаг, пожалуйста, нажмите на кнопку "Вперёд >>".',
    'LBL_PATCH_TITLE' => 'Обновление системы',
    'LBL_PATCH_READY' => 'Следующие обновления готовы к установке:',
    'LBL_SESSION_ERR_DESCRIPTION' => "Часть важной информации SuiteCRM хранит в файлах сессий.
<br><br>Для параметра <b>'session.save_path'</b> необходимо указать путь к папке сессий.<br>
<br> Настройте <a target=_new href='http://us2.php.net/manual/ru/function.session-save-path.php'>session.save_path</a> в указанном файле php.ini.",
    'LBL_SESSION_ERR_TITLE' => 'Ошибка в настройке сессий PHP',
    'LBL_SYSTEM_NAME' => 'Название системы',
    'LBL_COLLATION' => 'Параметры сортировки данных',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Название системы не может быть пустым',
    'LBL_PATCH_UPLOAD' => 'Загрузить обновление',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Требуется PHP версии 5 или выше.',
    'LBL_MINIMUM_PHP_VERSION' => 'Минимальная версия PHP - 5.1.0. Рекомендуемая версия PHP - 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Установленная версия PHP: ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Рекомендуемая версия PHP: 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'В PHP включён режим обратной совместимости. Для продолжения отключите параметр zend.ze1_compatibility_mode',
    'LBL_STREAM' => 'Возможность загрузки файлов на сервер',

    'advanced_password_new_account_email' => array(
        'subject' => 'SuiteCRM - информация о созданной учётной записи',
        'type' => 'системный',
        'description' => 'Данный шаблон используется при отправке пользователю письма, содержащего новый пароль для доступа к системе.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>В данном письме содержатся Ваш логин и временный пароль для доступа к SuiteCRM:</p><p>Логин: $contact_user_user_name </p><p>Пароль: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>После регистрации в системе настоятельно рекомендуется сменить данный временный пароль на новый.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Информация по созданной учётной записи:
Пользователь: $contact_user_user_name
Пароль: $contact_user_user_hash

$config_site_url

После входа в систему рекомендуется сменить указанный пароль на новый.',
        'name' => 'Автоматически созданный пароль электронной почты',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'SuiteCRM - сброс пароля пользователя',
        'type' => 'системный',
        'description' => "Данный шаблон используется при отправке пользователю письма, содержащего ссылку на страницу сброса пароля.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p> $contact_user_pwd_last_changed Вами был сделан запрос на сброс пароля. </p><p>Для сброса пароля перейдите по следующей ссылке:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '

Для вашей учётной записи был запрошен сброс пароля. Время запроса: $contact_user_pwd_last_changed


Для изменения пароля пройдите по следующей ссылке:

$contact_user_link_guid',
        'name' => 'Я забыл пароль электронной почты',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Код двухфакторной аутентификации',
        'type' => 'системный',
        'description' => "Шаблон, используемый для отправки кода двухфактурной аутентификации.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Код двухфакторной аутентификации: <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Код двухфакторной аутентификации: $code.',
        'name' => 'Письмо двухфакторной аутентификации',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Имя отправителя:',
    'LBL_FROM_ADDR' => '"От" (Адрес):',

    'LBL_WIZARD_SMTP_DESC' => 'Учётная запись исходящей почты будет использоваться для отправки исходящей почты, в том числе уведомлений о назначении ответственного, а также писем с информацией о новом пароле. Электронный адрес данной учётной записи будет фигурировать в получаемых письмах в качестве отправителя.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Почта',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Другое',
    'LBL_MAIL_SMTP_SETTINGS' => 'Настройка SMTP-сервера',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-сервер:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-порт:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-идентификацию?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Включить SSL/TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адрес:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Разрешить пользователям использовать данную учётную запись для отправки исходящей почты:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При выборе данной опции все пользователи смогут отправлять электронную почту (включая автоматические уведомления о назначении записей)<br>с использованием указанного здесь стандартного сервера исходящей почты.<br>В противном случае каждому пользователю при настройке учётной записи электронной почты необходимо вручную ввести настройки сервера исходящей почты.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учётная запись почты:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',


    'LBL_MAIL_SMTPUSER' => 'SMTP-пользователь:',
    'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Настройка логотипа',
    'LBL_WIZARD_SYSTEM_DESC' => 'Укажите название вашей организации и выберите логотип.',
    'SYSTEM_NAME_WIZARD' => 'Название:',
    'SYSTEM_NAME_HELP' => 'Данное название отображается в заголовке браузера.',
    'NEW_LOGO' => 'Выбрать логотип',
    'NEW_LOGO_HELP' => 'Допустимы следующие форматы изображений: PNG или JPG. Максимальная высота изображения - 170px, максимальная ширина - 450px. Любое загруженное изображение, размер которого будет превышать указанные значения, будет масштабировано до допустимых размеров.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Загрузить',
    'CURRENT_LOGO' => 'Текущий логотип:',
    'CURRENT_LOGO_HELP' => 'Этот логотип отображается в центре экрана входа в систему SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Выбор наборов модулей',
    'LBL_WIZARD_SCENARIO_DESC' => 'Выберите наборы модулей, с которыми необходимо работать в системе. Неотмеченные модули будут скрыты. При необходимости их можно будет отобразить после установки системы, воспользовавшись панелью администрирования.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'В файле конфигурации (config.php) не указан ни один набор модулей',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Региональные настройки',
    'LBL_WIZARD_LOCALE_DESC' => 'Укажите способ представления данных в системе, используя региональные настройки. По умолчанию будут использоваться именно эти настройки. При необходимости параметры можно настроить под каждого пользователя, указав необходимые значения в настройках профиля пользователя.',
    'LBL_DATE_FORMAT' => 'Формат даты:',
    'LBL_TIME_FORMAT' => 'Формат времени:',
    'LBL_TIMEZONE' => 'Часовой пояс:',
    'LBL_LANGUAGE' => 'Язык системы:',
    'LBL_CURRENCY' => 'Валюта:',
    'LBL_CURRENCY_SYMBOL' => 'Символ валюты:',
    'LBL_CURRENCY_ISO4217' => 'Трёхзначный код валюты:',
    'LBL_NUMBER_GROUPING_SEP' => 'Символ разделителя разрядов:',
    'LBL_DECIMAL_SEP' => 'Десятичный разделитель:',
    'LBL_NAME_FORMAT' => 'Формат имени:',
    'UPLOAD_LOGO' => 'Загрузка логотипа...',
    'ERR_UPLOAD_FILETYPE' => 'Файл изображения должен быть в формате JPEG или PNG. Загрузите новый файл с расширением .jpg или .png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ошибка загрузки.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Размер загружаемого файла превышает значение, указанное в параметре upload_max_filesize файла php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Размер загружаемого файла превышает значение, указанное в параметре MAX_FILE_SIZE HTML-формы.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Файл был загружен лишь частично.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Файл не был загружен.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Отсутствует временная папка.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Невозможно записать файл на диск.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Загрузка файла остановлена одним из расширений. PHP не предоставляет информацию о том, какое именно расширение остановило загрузку.',

    'LBL_INSTALL_PROCESS' => 'Идёт установка...',

    'LBL_EMAIL_ADDRESS' => 'Адрес E-mail:',
    'ERR_ADMIN_EMAIL' => ' Неверный адрес электронной почты администратора.',
    'ERR_SITE_URL' => 'Необходимо указать URL сайта.',

    'STAT_CONFIGURATION' => 'Настройка связей...',
    'STAT_CREATE_DB' => 'Создание базы данных...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Установка стандартных параметров...',
    'STAT_INSTALL_FINISH' => 'Завершение установки...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Установка завершена, <a href="%s">пожалуйста, войдите в систему...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Необходимо принять лицензионное соглашение',

    'LBL_MORE_OPTIONS_TITLE' => 'Дополнительные параметры',
    'LBL_START' => 'Пуск',
    'LBL_DB_CONN_ERR' => 'Ошибка базы данных',
    'LBL_OLD_PHP' => 'Обнаружена устаревшая версия PHP !',
    'LBL_OLD_PHP_MSG' => 'Рекомендуемая версия PHP: %s <br />Хотя SuiteCRM и допускает использование минимально поддерживаемой версии PHP (%s), но делать этого не рекомендуется, поскольку со времени выхода данной версии было исправлено множество ошибок.<br />Вы используете PHP версии %s, которая более не поддерживается: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Рекомендуется обновить установленную версию PHP, детали описаны на странице разработчика: <a href="http://php.net/migration70">http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Я предупреждён о возможных рисках и хочу продолжить установку.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Пользователь',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Название базы данных',
    'LBL_DBCONFIG_MSG3' => 'Укажите название базы данных.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Имя сервера',
    'LBL_DBCONFIG_MSG2' => 'Имя веб-сервера или хоста с базой данных (например, www.mydomain.com). Если БД установлена локально, для увеличения быстродействия, лучше использовать \'localhost\' вместо \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Укажите логин и пароль администратора базы данных. Администратор должен иметь соответствующие права на создание и запись в базе данных SuiteCRM.'
);
