<?php
// +--------------------------------------------------------------------------
// | Description :系统插件
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/28
// +--------------------------------------------------------------------------

class SystemPlugin extends Yaf\Plugin_Abstract{

    public function routerStartup( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

    }
    public function routerShutdown( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

        define( 'MODULE_NAME' , ucfirst( $request->getModuleName() ) );
        define( 'CONTROLLER_NAME' , ucfirst( $request->getControllerName() ) );
        define( 'ACTION_NAME' , ucfirst( $request->getActionName() ) );
    }

    public function dispatchLoopStartup( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

    }
    public function preDispatch( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

    }
    public function postDispatch( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

    }
    public function dispatchLoopShutdown( Yaf\Request_Abstract $request, Yaf\Response_Abstract $response ){

    }
}

