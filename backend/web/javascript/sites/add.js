/* 
 * 站点管理添加页js
 * @author luis
 * @time 2016-10-15
 */
$(function(){
    //select2插件
    $('.js-select2').select2();
    //时间插件
    $(".form_datetime").datetimepicker({
        todayHighlight: true,
        autoclose: true,
        todayBtn: true,
        startDate: new Date()
    });
    //ajax提交表单
    $('#savebtn').bind('click', function(){
        var formInstance = $('#sites_form').parsley();
        var bool = formInstance.validate();
        if(bool)
        {
            $.ajax({
                type: 'POST',
                url: '/sites/add',
                data: $('#sites_form').serialize(),
                dataType: 'json',
                success: function(response){
                    console.log('aa');
                }
            });
        }
    });
});