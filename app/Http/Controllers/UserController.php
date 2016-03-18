<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Faker\Factory as Faker;

class userController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getUser() {
        return view('pages.user');
    }


    public function postUsers(Request $request) {

    	$this->validate($request, [

    		'numberUsers' => 'required|max:99|numeric'

		]);

    	/* If the user enters 0 */
    	($request->input('numberUsers') == 0) 
    	? $inputNumber = 1
    	: $inputNumber = $request->input('numberUsers');
		
		$faker = Faker::create();
		$usersOutput = '';


		for($x = 0; $x < $inputNumber; $x++) {
			if ($x == 0) {
				$usersOutput .= "<div class='item active'>";	
			} else {
				$usersOutput .= "<div class='item'>";
			}
			
			$usersOutput .= "<img src=".$faker->imageUrl($width = 200, $height = 200)." class='center-block img-circle'>";
			$usersOutput .= "<h2 class='text-center'>".$faker->name."</h2>"; //Full Name

			if(isset($_POST['uName'])) {
				$usersOutput .= "<p><b>User Name:</b> ".$faker->userName."</p>"; //User Name
			}

			if(isset($_POST['uEmail'])) {
				$usersOutput .= "<p><b>Email:</b> ".$faker->safeEmail."</p>"; //Email
			}

			if(isset($_POST['uPassword'])) {
				$usersOutput .= 
					"<p><b>Password:</b> ".$faker->domainWord."-".$faker->domainWord."</p>"; //Password
			}

			if(isset($_POST['uProfile'])) {
				$usersOutput .= "<p><b>Bio:</b><br> ".$faker->text."</p>"; //Profile Info
			}
			$usersOutput .= "</div>";
		}

		/*return $usersOutput;*/
		return view('pages.user')->with('usersOutput', $usersOutput);

    }

}

?>