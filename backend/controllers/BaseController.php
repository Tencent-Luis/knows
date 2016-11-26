<?php
namespace backend\controllers;
/**
 * Description of BaseController
 * 控制器父类
 * @author Lu
 * @time 2016-08-21
 */
use yii\web\Controller;

class BaseController extends Controller
{
    /**
     * 使用自定义layout
     * @var string 
     */
    public $layout = 'index';
}
