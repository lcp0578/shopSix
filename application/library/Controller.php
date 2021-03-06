<?php
// +--------------------------------------------------------------------------
// | Description :控制器
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/6/26
// +--------------------------------------------------------------------------

class Controller extends \Yaf\Controller_Abstract{

    // 禁止自动渲染
    protected function disableView(){

        \Yaf\Dispatcher::getInstance()->disableView();
    }

    protected function ajaxReturn( array $arr ){

        $this->disableView();
        exit( json_encode( $arr ) );
    }
}
