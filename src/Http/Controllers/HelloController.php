<?php

namespace Jiny\Hello\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Jiny\Hello\Models\Hello;

use Illuminate\Support\Facades\Mail;
use Jiny\Hello\Mail\HelloMailable;

class HelloController extends Controller
{
    //
    public function index()
    {
        return view("hello::hello");
    }

    public function send(Request $request)
    {
        // 메일발송
        Mail::to("infohojin@gmail.com")
            ->send(new HelloMailable(
                $request->message,
                $request->name
            ));

        //return $request->all();
        Hello::create($request->all());
        return redirect( route('hello') );
    }
}
