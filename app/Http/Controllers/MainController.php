<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke()
    {
				$notifications = \App\Notification::all();			
        return view('index', ["notifications" => $notifications]);
    }

		public function getStatus(Request $req){
			$hid = $req->input("hid");
			$button = \App\Button::where("hardwareId", "=", $hid)->first();
			return $button->locked;
		}

		public function lock(Request $req){
			$button_id = $req->route("id");
			$button = \App\Button::find($button_id);
			$button->timestamps = false;
			$button->locked = 0;
			$button->save();
			
			return redirect('/');
		}

		public function unlock(Request $req){
			$button_id = $req->route("id");
			$button = \App\Button::find($button_id);
			$button->timestamps = false;
			$button->locked = 1;
			$button->save();

			return redirect('/');
		}

		public function push(Request $req){
			$button = \App\Button::where("hardwareId", "=", $req->input("hid"))->first();
			$exists = \App\Notification::where("button_id", "=", $button->id)->where("signed", "=", 0);	
			if($exists->get()->count() === 0 ){
				$notification = new \App\Notification();
				$notification->signed = 0;
				$notification->button_id = $button->id;
				$notification->save();
			}else{
				return "notification already send";
			}
		}
}
