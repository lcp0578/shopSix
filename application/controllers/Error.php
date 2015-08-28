<?php
// +--------------------------------------------------------------------------
// | Description :Error
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

class ErrorController extends Yaf\Controller_Abstract {

    /**
    * 此时可通过$request->getException()获取到发生的异常
    */
    public function errorAction() {
        $exception = $this->getRequest()->getException();

        try {
            throw $exception;
        } catch (Yaf_Exception_LoadFailed $e) {
            //加载失败
            exit( $e->getMessage() );
        } catch (Yaf_Exception $e) {
            //其他错误
            exit( $e->getMessage() );
        }
    }
}
