<?php
// +--------------------------------------------------------------------------
// | Description :Bootstrap
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

class Bootstrap extends \Yaf\Bootstrap_Abstract{

    private $_config = null;
    /**
     * [_initDebug Debug模式]
     */
    public function _initDebug(){

        if( DEBUG ){
            ini_set( 'display_errors' , true );
            error_reporting( E_ALL );
        }else{
            ini_set( 'display_errors' , false );
            error_reporting( 0 );
        }
    }

    /**
     * [_initConfig 初始化配置]
     */
    public function _initConfig( Yaf\Dispatcher $dispatcher ) {

        $this->_config = Yaf\Application::app()->getConfig();
        Yaf\Registry::set( 'config' , $this->_config );

    }

    /**
     * [ _initFramework 初始化]
     * @return [type] [description]
     */
    public function _initFramework( Yaf\Dispatcher $dispatcher ){

        // 公共目录
        define( 'COMMON_PATH' , APPLICATION_PATH . 'common/' );
        // Log目录
        define( 'Log_PATH' , APP_PATH . 'log/' );
        // Library目录
        define( 'LIB_PATH' , APPLICATION_PATH . 'library/' );

        \Yaf\Loader::import( COMMON_PATH . 'function.php' );

    }

    /**
     * [_initSetErrorHandler 设置自定义错误处理函数]
     * @param  Yaf\Dispatcher $dispatcher [description]
     * @return [type]                     [description]
     */
    public function _initSetErrorHandler( Yaf\Dispatcher $dispatcher ){

        if( isset( $this->_config['application']['dispatcher']['throwException'] ) && $this->_config['application']['dispatcher']['throwException'] == true ){

            $dispatcher->setErrorHandler( 'sixErrorHandler' , E_ALL );
        }
    }

    public function _initPlugins( Yaf\Dispatcher $dispatcher ){

        $systemPlugin = new SystemPlugin();
        $dispatcher->registerPlugin( $systemPlugin );
    }

}
