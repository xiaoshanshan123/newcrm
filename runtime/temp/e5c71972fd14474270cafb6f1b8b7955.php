<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"F:\www\public/../application/index\view\engine\update.html";i:1545461346;s:48:"F:\www\application\index\view\public\header.html";i:1545208666;}*/ ?>
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
        <form  method="post" action="<?php echo url('Disease/update'); ?>" class="layui-form">
        
          <div class="layui-form-item">
              <label for="name" class="layui-form-label">
                  <span class="x-red">*</span>疾病名：
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="name" value="<?php echo $res['name']; ?>" name="name" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
               <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>名称必须填写
              </div>
          </div>
          <div class="layui-form-item">
              <label for="intro" class="layui-form-label">
                  <span class="x-red">*</span>治疗项目： 
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="intro" name="xiangmu" value="<?php echo $res['xiangmu']; ?>" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>多个用空格隔开
              </div>
          </div>
          <div class="layui-form-item">
              <label for="intro" class="layui-form-label">
                  <span class="x-red">*</span>疾病简介： 
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="intro" name="intro" value="<?php echo $res['intro']; ?>" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
          </div>

            <div class="layui-form-item">
              <label class="layui-form-label">
                  <span class="x-red">*</span>选择医院
              </label>
              <div class="layui-input-inline">
                  <select id="hospital_id" name="hospital_id" class="valid">
                    <option value="#">选择医院</option>

                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($res['hospital_id'] == $vo['id']): ?>
                    <option value="<?php echo $vo['id']; ?>" selected="selected"><?php echo $vo['name']; ?></option>
                    <?php else: ?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                  </select>
              </div>
          </div>
          <div><input type="hidden" name="id" value="<?php echo $res['id']; ?>"></div>

          <div class="layui-form-item">
              <label for="intro" class="layui-form-label">
                  <span class="x-red">*</span>优先度 
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="intro" name="sort" value="<?php echo $res['sort']; ?>" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>越大越优先，负值在最后
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
          <input type="submit" value="提交" class="layui-btn">
          </div>
      </form>
    </div>
<script type="text/javascript">
    


</script>
   
  </body>

</html>
