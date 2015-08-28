<?php
// +--------------------------------------------------------------------------
// | Description :公共方法
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

function p( $arr ){

    echo '<pre>';
    var_dump( $arr );
    echo '</pre>';
}

function wlog( $arr ){

    return file_put_contents( Log_PATH . '/' . date('Y-m-d') , var_export( $arr , true ) . '\\n', FILE_APPEND);
}

/**
 * �Զ����������
 */
function sixErrorHandler($errno, $errstr, $errfile, $errline){

    switch ($errno) {
    case YAF\ERR\NOTFOUND\CONTROLLER:
    case YAF\ERR\NOTFOUND\MODULE:
    case YAF\ERR\NOTFOUND\ACTION:
         exit(MODULE_NAME . CONTROLLER_NAME . ACTION_NAME .'û���ҵ��ļ�');
    break;

    default:
        exit("Unknown error type: [$errno] $errstr<br />\n");
        break;
    }

    return true;
}
