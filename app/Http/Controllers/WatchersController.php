<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Watcher;
use Illuminate\Http\Request;


class WatchersController extends Controller
{
    //methods for users to e able to watch a discussion by finding the discussion id. 
		public function watch($id)

    {

    	Watcher::create([

    		'discussion_id' => $id, //pass in the id of the discussion that will be watched. 
    		'user_id' => Auth::id() //pass in the id of the user watching after user has been verified. 

    	]);

    	session::flash('success', 'You are now watching this dicussion.');


    	return redirect()->back();//Here an email notification is specified for the user. 

    }

    //methods for users to e able to un_watch a discussion by finding the discussion id. 
		public function unwatch($id)

    {


    	$watcher = Watcher::where('discussion_id', $id)->where('user_id', Auth::id()); //

    	//When the user is found, it will then delete according to the selected ID.

    	$watcher->delete();


    	session::flash('success', 'You are no longer watching this relevant dicussion.');


    	return redirect()->back();//Here an email notification is specified for the user. 

    } 	

}
