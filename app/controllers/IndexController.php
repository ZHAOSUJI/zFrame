<?php
/**
 * User: suji.zhao
 * Email: zhaosuji@foxmail.com
 * Date: 2017/8/29 13:34
 */
namespace app\controllers;

use app\models\UserModel;

class IndexController extends Controller
{
    public function indexAction(){
        $model = new UserModel();
        echo $model->test();
    }
}