<?php
use App\EcomVisitor;
use App\EcomMessage;
use Illuminate\Http\Request;
use App\Events\AnswerPosted;
use App\Events\QueryPosted;
use App\Events\NewUserEntered;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('newMessage', function(Request $request){
	$visitor = EcomVisitor::where('name', $request ->name)->where('email',$request ->email)->where('phone',$request ->phone)->first();
	$visitor_id = $visitor->id;
	$message = new EcomMessage();
	$message ->message = $request->message;
	$message ->visitor_id = $visitor_id;
	$message->save();
	$message->class = 'recieved';
	event(new QueryPosted($message));

});
Route::post('register/user', function(Request $request){
	$exist_user = EcomVisitor::where('name', $request ->name)->where('email',$request ->email)->where('phone',$request ->phone)->first();
	if ($exist_user) {
		return $exist_user->id;
	}else {
		$user = new EcomVisitor();
		$user ->name = $request->name;
		$user ->email = $request->email;
		$user ->phone = $request->phone;
		$user->save();
		event(new NewUserEntered($user));
		return $user->id;
	}
	
});

Route::group(['middleware'=> 'role:admin'], function(){

});
Route::prefix('admin')->group(function () {
	Route::post('messages',function(Request $request){
		$id = $request->id;
		$messages = EcomMessage::where('visitor_id',$id)->get();
		foreach ($messages as $key => $message) {
			if ($message->user_id == null) {
				$message->class = 'recieved';
			}else{
				$message->class = 'sent';
			}
		}
		return $messages;
	});
	Route::post('newMessage',function(Request $request){
		$visitor_id = $request->visitor_id;
		$message = $request->message;
		$new_message = new EcomMessage();
		$new_message->message = $message;
		$new_message->user_id = 1;
		$new_message->visitor_id = $visitor_id;
		$new_message->save();
		$new_message->class = 'recieved';
		event(new AnswerPosted($new_message));		
		// return $message;
	});
});
