<?php
/**
 * User: suji.zhao
 * Email: zhaosuji@foxmail.com
 * Date: 2017/8/29 12:35
 */
header("Content-type: text/html; charset=utf-8");

//设置框架模式
defined('MODE') or define('MODE', 'dev');

require_once './core/core.php';
require_once './core/register.php';
Core::run();