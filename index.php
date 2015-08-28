<?php
// +--------------------------------------------------------------------------
// | Description :ShopSix 入口文件
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

header( 'content-Type:text/html;charset=utf-8;' );

define( 'DEBUG' , true );

define( 'APP_PATH' , realpath( __DIR__ ) . '/' );
// 应用目录
define( 'APPLICATION_PATH' , realpath( APP_PATH . 'application' ) . '/' );

$app = new Yaf\Application( APP_PATH . 'conf/application.ini' );

$app->bootstrap()->run();
