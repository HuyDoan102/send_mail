<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Jobs\SendWelcomeEmail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function send()
    {
         Log::info("Request Cycle with Queues Begins");
        $this->dispatch(new SendWelcomeEmail());
        Log::info("Request Cycle with Queues Ends");
    }
}
