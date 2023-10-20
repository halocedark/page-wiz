<?php


// pagewiz_asset
if ( !function_exists("pagewiz_asset") )
{
    function pagewiz_asset($path)
    {
        return asset("packages/halocedark/page-wiz/{$path}");
    }
}
