<?php 

if (!defined('ISCONSOLE')) {
    define("ISCONSOLE", PHP_SAPI == 'cli');
}

require_once('config.php');
require_once('helpers.php');
require_once('lib/idiorm.php');
require_once('db.php');
require_once('lib/HTMLPurifier/HTMLPurifier.standalone.php');
require_once('lib/urlify-master/URLify.php');
require_once('lib/class.HtmlTemplate.php');
require_once('lib/class.country.php');
require_once('lib/GoogleTranslate.php');
require_once('lib/class.upload.php-master/src/class.upload.php');
require_once('functions/func.global.php');
require_once('functions/func.email.php');
require_once('functions/func.admin.php');
require_once('functions/func.users.php');
require_once('functions/func.app.php');
require_once('seo-url.php');

