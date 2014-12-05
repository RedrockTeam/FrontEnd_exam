<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

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

    public function verify()
    {
        $info = Input::all();
        $user_name = $info['user_name'];
        $user_number = $info['user_num'];
        $ip = $_SERVER["HTTP_CLIENT_IP"];
        $validator = Validator::make(
            array(
                'user_name' => $user_name,
                'user_number' => $user_number,
                'user_ip' => $ip
            ),
            array(
                'user_name' => 'required',
                'user_number' => 'required|numeric|between:11,11',
                'user_ip' => 'required|ip'
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
                                    'user_ip' => $ip
                                                ));
            return Redirect::intended('/qusetion');
        }
    }

    public function question()
    {
        $user_number =  Session::get('user_number');
        DB::table('answer')->insert(array('user_number' => $user_number,'start_time'=>time()));
        return View::make('answer');
    }

    public function answer()
    {
        $user_number =  Session::get('user_number');
        $answer = Input::all();
        DB::table('answer')->where('user_number', '=', $user_number)->update($answer);
        DB::table('answer')->where('user_number', '=', $user_number)->update(array('end_time'=>time()));
        return Response::make('你已成功提交!', 200);
    }

    public function getCookie()
    {
       $user_name = Cookie::get('user_name');
       $num = DB::table('user')->where('user_name', '=', $user_name)->count();
       if($num>0)
           return true;
       else
           return false;
    }

}
