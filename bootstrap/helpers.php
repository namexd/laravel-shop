<?php
/**
 * Created by PhpStorm.
 * User: Xiaod <namexd@163.com>
 * Date: 2018/6/25
 * Time: 10:07
 */
function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}
