<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
//        sha1("12345",true);
//        crypt("12345","");
       echo md5(crypt(config("defaultPassword"), config("salt")));
//        $student = Db::table('test')->select();
//        return json([
//            "code" => 200,
//            "msg" => "success",
//            "student" => $student
//        ]);
    }

    public function lists()
    {
        $student = Db::table('test')->select();
        $date = ["name" => "张三", "age" => 20];
        $skill = ["html", "css", "js", "php"];
        $this->assign("person", $date);
        $this->assign("skill", $skill);
        $this->assign("student", $student);
        return $this->fetch();
    }
}
