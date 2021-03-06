<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"F:\www\public/../application/index\view\engine\add.html";i:1545540571;s:48:"F:\www\application\index\view\public\header.html";i:1545208666;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.0</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>

</head>
  <body>
    <div class="x-body">
        <form  method="post" enctype='multipart/form-data' action="<?php echo url('Engine/add'); ?>" class="layui-form">
          
          <div class="layui-form-item">
              <label for="name" class="layui-form-label">
                  <span class="x-red">*</span>引擎名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="name" name="name" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>名称必须填写
              </div>
          </div>
          <div class="layui-form-item">
              <div class="layui-upload">
                <button type="button" class="layui-btn" id="test2">多图片上传</button> 
                <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                  预览图：
                  <div class="layui-upload-list" style="width: 100%" id="demo2"></div>
               </blockquote>
              </div>
          </div>
      <input type="hidden" id="engine_img" name="engine_img" value="">

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
          <input type="submit" value="提交" class="layui-btn">
          </div>
      </form>
    </div>
<script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>    
<script type="text/javascript">
        layui.use('upload', function(){
        var $ = layui.jquery
        ,upload = layui.upload;
             //多图片上传
          upload.render({
            elem: '#test2'
            ,url: '<?php echo url("Engine/upload"); ?>'
            ,accept:'engine_img'
            ,multiple: true
            ,before: function(obj){
              //预读本地文件示例，不支持ie8
              obj.preview(function(index, file, result){
                $('#demo2').append('<img style="width:100%;" src="'+ result +'" value="" alt="'+ file.name +'" class="layui-upload-img">')
              });
            }
            ,done: function(res){
              if(res.code == 0){
                return layer.msg('上传失败！');
              }
              $('#engine_img').val(res.savename);
            }
          })
});
</script>
   
  </body>

</html>
