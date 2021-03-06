<?php
/**
 * taskPHP
 * @author     码农<8044023@qq.com>,cqcqphper 小草<cqcqphper@163.com>
 * @copyright  taskPHP
 * @license    https://git.oschina.net/cqcqphper/taskPHP
 */
date_default_timezone_set( 'Asia/Chongqing');
//版本号
define('ML_VERSION', '1.0');
//是否cli模式
define("IS_CLI", (PHP_SAPI=='cli') ? true : false);
//分割符
define("DS", DIRECTORY_SEPARATOR);
//项目跟目录
define("APP_ROOT", substr(dirname(__FILE__),0,-5));
//任务跟目录
define("TASKS_PATH", APP_ROOT.DS."tasks");
//系统内核跟目录
define("CORE_PATH", APP_ROOT.DS."core");
//日志跟目录
define("LOGS_PATH", APP_ROOT.DS."logs");
//php文件后缀
define("EXT", ".php");
//兼容PHP5.3.x
if (version_compare(PHP_VERSION, '5.4.0') < 0) {
    function trait_exists($traitname, $autoload = false){
        return false;
    }
}

// 载入Loader类
require_once CORE_PATH.DS."lib".DS."Loader".EXT;
$locator = \core\lib\Locator::getInstance();
//注册
$locator->register();