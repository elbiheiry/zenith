<?php 

if (!function_exists('failed_validation')) {
    function failed_validation($error)
    {
        return response()->json($error , 400);;
    }
}

if (!function_exists('add_response')) {
    function add_response()
    {
        return response()->json('Data has been added successfully' , 200);;
    }
}

if (!function_exists('update_response')) {
    function update_response()
    {
        return response()->json('Data has been updated successfully' , 200);;
    }
}

if (!function_exists('error_response')) {
    function error_response()
    {
        return response()->json(
            app()->getLocale() == 'en' ? 'Error , please try again later' : 'حدث خطأ برجاء إعاده المحاوله مره أخري'
            , 400);;
    }
}
if (!function_exists('aurl')) {
    function aurl($path)
    {
        return asset('admin-assets/'.$path);
    }
}

if (!function_exists('surl')) {
    function surl($path)
    {
        return asset('site-assets/'.$path);
    }
}

if (!function_exists('locale')) {
    function locale()
    {
        return app()->getLocale();
    }
}