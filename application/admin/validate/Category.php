<?php


namespace app\admin\validate;


use think\Validate;

class Category extends Validate
{
    protected $rule=[
        "cname"=>"require|chsAlphaNum",
        "cdesc"=>"require|chsAlphaNum"
    ];
    protected $message=[
        "cname.require"=>"分类名称必填",
        "canme.chsAlphaNum"=>"分类名称只能包含汉字、字母、数字",
        "cdesc.require"=>"描述必填",
        "cdesc.chsAlphaNum"=>"描述只能包含汉字、字母、数字",
    ];
}