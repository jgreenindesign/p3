<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getUser() {
        return view('pages.user');
    }

	/*public functions postGenerate(Request $request) {
		
	}*/

}

?>