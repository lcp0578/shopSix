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

class ErrorController extends Yaf_Controller_Abstract {

    // only display errors under DEV
    public function errorAction($exception){
        switch ($exception->getCode()) {
            case YAF_ERR_NOTFOUND_MODULE:
            case YAF_ERR_NOTFOUND_CONTROLLER:
            case YAF_ERR_NOTFOUND_ACTION:
            case YAF_ERR_NOTFOUND_VIEW:
                if(ENV == 'DEV'){
                    echo 404, ":", $exception->getMessage();
                }else{
                    file_put_contents(LOG_FILE, $exception->getMessage().PHP_EOL, FILE_APPEND);
                }
            break;

            default :
                if(ENV == 'DEV'){
                    echo 0, ":", $exception->getMessage();
                }else{
                    file_put_contents(LOG_FILE, $exception->getMessage().PHP_EOL, FILE_APPEND);
                }
            break;
        }
    }
}
