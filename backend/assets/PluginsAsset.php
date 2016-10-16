<?php
namespace backend\assets;
/**
 * Description of PluginsAsset
 * 后台所使用的资源包
 * @author Luis
 * @time 2016-08-28
 */
use yii\web\AssetBundle;
use yii\web\View;

class PluginsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    /**
     * 所需加载的css
     * @var array 
     */
    public $css = [
        /*================== BEGIN BASE CSS STYLE ==================*/
	    'static/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css',
	    'static/plugins/bootstrap/css/bootstrap.min.css',
        'static/plugins/font-awesome/css/font-awesome.min.css',
        'static/css/animate.min.css',
        'static/css/style.min.css',
        'static/css/style-responsive.min.css',
        'static/css/theme/default.css',
        /*================== END BASE CSS STYLE ==================*/
	    /*================== BEGIN PAGE LEVEL STYLE ==================*/
        'static/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css',
        'static/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
        'static/plugins/gritter/css/jquery.gritter.css',
        /*================== END PAGE LEVEL STYLE ==================*/
    ];
    
    /**
     * 所需加载的js
     * @var array 
     */
    public $js = [
        /*================== BEGIN BASE JS ==================*/
        'static/plugins/pace/pace.min.js',
        'static/plugins/jquery/jquery-1.9.1.min.js',
        'static/plugins/jquery/jquery-migrate-1.1.0.min.js',
        'static/plugins/jquery-ui/ui/minified/jquery-ui.min.js',
        'static/plugins/bootstrap/js/bootstrap.min.js',
        /*=======[if lt IE 9]=======*/
		'static/crossbrowserjs/html5shiv.js',
		'static/crossbrowserjs/respond.min.js',
		'static/crossbrowserjs/excanvas.min.js',
        /*=====![endif]=======*/
        'static/plugins/slimscroll/jquery.slimscroll.min.js',
        'static/plugins/jquery-cookie/jquery.cookie.js',
        /*================== END BASE JS ==================*/
        
        /*================== BEGIN PAGE LEVEL JS ==================*/
        'static/plugins/gritter/js/jquery.gritter.js',
        'static/plugins/sparkline/jquery.sparkline.js',
        'static/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js',
        'static/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js',
        'static/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
        'static/js/dashboard.min.js',
        'static/js/apps.min.js'
        /*================== END PAGE LEVEL JS ==================*/
    ];
    
    /**
     * 指定js文件加载在页面底部(最后加载js文件)
     * @var array 
     */
    public $jsOptions = [
        'position' => View::POS_END,
    ];
    
    /**
     * 添加依赖
     * @var type 
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    /**
     * 定义按需加载JS方法,注意加载顺序在最后
     * @param obj $view 视图对象
     * @param string $jsFile js文件路径
     */
    public static function addScript($view, $jsFile)
    {
        $view->registerJsFile($jsFile, [PluginsAsset::className(), 'depends' => 'backend\assets\PluginsAsset']);
    }
    
    /**
     * 定义按需加载css方法,注意加载顺序在最后
     * @param obj $view 视图对象
     * @param string $cssFile css文件路径
     */
    public static function addCss($view, $cssFile)
    {
        $view->registerCssFile($cssFile, [PluginsAsset::className(), 'depends' => 'backend\assets\PluginsAsset']);
    }
}
