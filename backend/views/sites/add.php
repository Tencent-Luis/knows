<?php
use yii\helpers\Url;
use backend\assets\PluginsAsset;
PluginsAsset::register($this);
PluginsAsset::addCss($this, '@web/static/plugins/select2/select2.css');
PluginsAsset::addCss($this, '@web/static/plugins/parsley/src/parsley.css');
PluginsAsset::addScript($this, '@web/static/plugins/select2/select2.min.js');
PluginsAsset::addScript($this, '@web/static/plugins/parsley/dist/parsley.js');
PluginsAsset::addScript($this, '@web/javascript/sites/add.js');
?>
<!-- begin page-header -->
<h1 class="page-header">站点添加</h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">站点添加</h4>
        </div>
        <div class="panel-body">
            <form id="sites_form" class="form-horizontal" data-parsley-validate="true" action="<?= Url::toRoute(['sites/add']); ?>">
                <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken; ?>">
                <div class="form-group">
                    <label class="col-md-2 control-label">站点名称 * </label>
                    <div class="col-md-9">
                        <input type="text" name="site_name" class="form-control" placeholder="站点名称" data-parsley-required="true" data-parsley-required-message="请输入站点名称!" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">站点地址 * </label>
                    <div class="col-md-9">
                        <input type="text" name="site_address" class="form-control" placeholder="站点地址" data-parsley-required="true" data-parsley-required-message="请输入站点地址!" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">状态 * </label>
                    <div class="col-md-9">
                        <select id="site_status" class="form-control js-select2" data-parsley-required="true" data-parsley-required-message="请选择站点状态!">
                            <option value="">请选择状态</option>
                            <?php foreach($siteStatus as $key => $value){ ?>
                            <option value="<?= $key; ?>"><?= $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">上线时间</label>
                    <div class="col-md-5">
                        <div class="input-group date form_datetime" data-date="2013-02-21T15:25:00Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
                            <input size="16" name="site_online_time" type="text" class="form-control" placeholder="上线时间" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                        <input type="hidden" id="dtp_input1" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-sm btn-success">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end panel -->
</div>