<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loremController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getLorem() {
        return view('pages.lorem-ipsum');
    }

	/*public functions postGenerate(Request $request) {
		
	}*/

}

?>