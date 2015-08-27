<?php
// +--------------------------------------------------------------------------
// | Description :过滤
// +--------------------------------------------------------------------------
// | Copyright (c) 2014-2015 http://www.sixsir.com All rights reserved.
// +--------------------------------------------------------------------------
// | Author: Persi <persi@sixsir.com> <http://www.sixsir.com>
// +--------------------------------------------------------------------------
// | Version:0.0.1                Date:2015/8/26
// +--------------------------------------------------------------------------

Class Filter{

    public static function int( $string ){

        return intval( $string );
    }

    public static function float( $string ){

        return floatval( $string );
    }
}
