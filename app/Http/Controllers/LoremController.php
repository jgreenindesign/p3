<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*use Badcow\loremipsum;*/

class loremController extends Controller {
    /**
    * 
    */

    public function postLoremText(Request $request){

		$this->validate($request, [

			'paragraphs' => 'required|max:9|numeric'

    	]);

    	$input = $request->input('paragraphs');

    	/* Lorem Ipsum Generator 
    	$generator = new \Badcow\LoremIpsum\Generator();

		$paragraphs = $generator->getParagraphs($input);*/

        $paragraphs = lorem($input);

        return view('pages.lorem-ipsum')->with('paragraphs', $paragraphs);
    }

    public function getLoremPage() {
        return view('pages.lorem-ipsum');
    }
}