<?php
// +--------------------------------------------------------------------------
// | Description :默认 Index 控制器
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

class IndexController extends Controller{

    public function indexAction(){
        p( date( 'Y-m-d H:i:s' ) );
        p(time());
        p( strtotime( '+1 day' , time()) );
        p( date( 'Y-m-d' ,strtotime( '+547 day' , time() ) ) );
        die;
    }
}
