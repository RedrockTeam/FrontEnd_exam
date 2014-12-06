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
            return Redirect::to('./question');
        }
        else
        {
	            return View::make('login');
        }
    }

    //验证储存考核信息
    public function verify()
    {
        $info = Input::only('user_name', 'user_number');
        $user_name = $info['user_name'];
        $user_number = $info['user_number'];
        $ip = Request::getClientIp();
        $validator = Validator::make(
            array(
                'user_name' => $user_name,
                'user_number' => $user_number,
                'user_ip' => $ip,
            ),
            array(
                'user_name' => 'required',
                'user_number' => 'required|numeric',
                'user_ip' => 'required|ip',
            )
        );

        if ($validator->fails())
        {
            return Response::make('<h1>这么简单的登陆信息都能填错?</h1>', 403);
        }
        else
        {

            Session::put('user_name', $user_name);
            Session::put('user_number', $user_number);
            DB::table('user')->insert(array(
                                            'user_name' => $user_name,
                                            'user_number' => $user_number,
                                            'user_ip' => $ip,
                                            ));
               return Redirect::to('./question');
        }
    }

    //渲染答题页面
    public function question()
    {

        if($this->getCookie())
        {
            $user_number = Session::get('user_number');
            $data = DB::table('answer')->where('user_number', '=', $user_number)->get();
            return View::make('answer')->with('data', $data);
        }
        else {
            if (Session::get('user_number') && Session::get('user_name'))
            {
                $user_number = Session::get('user_number');
                $user_name = Session::get('user_name');

                if(DB::table('answer')->insert(array('user_number' => $user_number, 'start_time' => time()))) {
                    $data = DB::table('answer')->where('user_number', '=', $user_number)->get();
                    $response = View::make('answer')->with('data', $data);
                    return Response::make($response)->withCookie(Cookie::forever('user_name', $user_name));
                }

            }
            else
                return Redirect::to('./login');
        }

    }

    //储存答案
    public function answer()
    {
        if($this->getCookie())
        {
            $user_number = Session::get('user_number');

            $answer = $input = Input::except('submit');;
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
       if($num == 1)
           return true;
       elseif($num == 0)
           return false;
        else
            return Response::make('你完了!', 403);
    }

}
