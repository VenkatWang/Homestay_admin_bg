<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\JWT;

// 应用公共文件

//1.获取 token
//1.1 GET token
//1.2 POST token
//1.3 header token  头信息中携带
//2.解析 token  JWT::verify
//2.1成功
//2.2失败
function checkToken()
{
    $get_token = request()->get("token");
    $post_token = request()->post("token");
    $header_token = request()->header("token");
    if ($get_token) {
        $token = $get_token;
    } elseif ($post_token) {
        $token = $post_token;
    } elseif ($header_token) {
        $token = $header_token;
    } else {
//        code码授权失败一般用401
        json(["code" => 404, "msg" => "token不能为空"], "401")->send();
//        不适用return而使用exit,没有权限则全部退出
        exit();
    }
    $tokenResult = JWT::verify($token, config("jwtkey"));
    if (!$tokenResult) {
        json(["code" => 404, "msg" => "token验证失败"], "401")->send();
        exit();
    }
//    ? $token  $tokenResult
    request()->id = $tokenResult["id"];
    request()->username = $tokenResult["username"];
}