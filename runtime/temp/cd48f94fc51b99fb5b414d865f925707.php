<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\phpStudy\WWW\crm.aicheyide.com\addons\third\view\index\index.html";i:1522401587;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>第三方登录 - <?php echo $site['name']; ?></title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <h2>第三方登录</h2>
            <hr>
            <div class="well">
                <div class="row">
                    <div class="col-xs-4">
                        <a target="_blank" href="<?php echo addon_url('third/index/connect',[':platform'=>'qq']); ?>" class="btn btn-block btn-info">
                            <i class="fa fa-qq"></i> QQ登录
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a target="_blank" href="<?php echo addon_url('third/index/connect',[':platform'=>'wechat']); ?>" class="btn btn-block btn-success">
                            <i class="fa fa-wechat"></i> 微信登录
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a target="_blank" href="<?php echo addon_url('third/index/connect',[':platform'=>'weibo']); ?>" class="btn btn-block btn-danger">
                            <i class="fa fa-weibo"></i> 微博登录
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {

            });
        </script>
    </body>
</html>
