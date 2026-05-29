<?php

namespace app\admin\controller;

use think\Controller;

class KlineController extends Controller
{
    protected $ajaxSymbolKline = 'ajaxSymbolKline';
    protected $routeInfo = [];
    protected $module = 'admin';
    protected $controller = 'Kline';
    protected $action = 'ajaxSymbolKline';
    protected $langset = 'zh';
    protected $param = [];
    protected $get = [];
    protected $post = [];
    protected $request = [];
    protected $route = [];
    protected $put = null;
    protected $session = [];
    protected $file = [];
    protected $cookie = [];
    protected $server = [];
    protected $env = [];
    protected $header = [];

    public function index()
    {
        return 'Hello World';
    }

    public function ajaxSymbolKline()
    {
        $data = ['code' => 0, 'msg' => 'success'];
        return json($data);
    }

    public function testString()
    {
        $str = "function is a keyword";
        $str2 = 'function is also a keyword';
        $str3 = "string with { braces }";
        return $str . $str2 . $str3;
    }

    public function testComplex()
    {
        $result = [];
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $result[] = $i;
            }
        }
        return $result;
    }
}
