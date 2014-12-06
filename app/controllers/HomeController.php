<?php

/**
 * Class HomeController
 * 前端考核
 * @Author Lich
 * 2014-12-6 01:20:49
 */
class HomeController extends BaseController {

    //检测是否登陆并渲染登陆页面
    public function login()
    {
        if($this->getCookie())
        {
            return Redirect::to('/question');
        }
        else
        {
            return View::make('login');
        }
    }

    //验证储存考核信息
    public function verify()
    {
        $info = Input::all();
        $user_name = $info['user_name'];
        $user_number = $info['user_number'];
        $ip = $_SERVER["HTTP_CLIENT_IP"];
        $validator = Validator::make(
            array(
                'user_name' => $user_name,
                'user_number' => $user_number,
                'user_ip' => $ip,
            ),
            array(
                'user_name' => 'required',
                'user_number' => 'required|numeric|between:11,11',
                'user_ip' => 'required|ip',
            )
        );

        if ($validator->fails())
        {
            return Response::make('<h1>登陆都能填错?</h1>', 403);
        }
        else
        {
            Session::put('user_name', $user_name);
            Session::put('user_number', $user_number);
            Cookie::forever('user_name', $user_name);
            Auth::attempt(array('user_name' => $user_name, 'user_number' => $user_number,),true);
            DB::table('user')->insert(array(
                                    'user_name' => $user_name,
                                    'user_number' => $user_number,
                                    'user_ip' => $ip,
                                                ));
            return Redirect::intended('/qusetion');
        }
    }

    //渲染答题页面
    public function question()
    {
        if($this->getCookie())
        {
            return View::make('answer');
        }
        else{
            $user_number =  Session::get('user_number');
            DB::table('answer')->insert(array('user_number' => $user_number,'start_time'=>time()));
            return View::make('answer');
        }
    }

    //储存答案
    public function answer()
    {
        if($this->getCookie())
        {
            $user_number = Session::get('user_number');
            $answer = Input::all();
            DB::table('answer')->where('user_number', '=', $user_number)->update($answer);
            DB::table('answer')->where('user_number', '=', $user_number)->update(array('end_time' => time()));
            return Response::make('你已成功提交!', 200);
        }
        else
        {
            return Response::make('你作弊已经被抓住了!', 403);
        }
    }

    //检查cookie
    private function getCookie()
    {
       $user_name = Cookie::get('user_name');
       $num = DB::table('user')->where('user_name', '=', $user_name)->count();
       if($num>0)
           return true;
       else
           return false;
    }

}
