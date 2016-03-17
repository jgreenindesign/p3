<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\loremipsum;

class loremController extends Controller {
    /**
    * 
    */

    public function postLoremText(Request $request){

		$this->validate($request, [

			'liParagraphs' => 'required|max:9|numeric'

    	]);

    	$input = $request->input('liParagraphs');

    	/* Lorem Ipsum Generator */
    	$generator = new \Badcow\LoremIpsum\Generator();
    	/*return $generator;*/

		$paragraphs = $generator->getParagraphs($input);
		/*return View::make('pages.lorem-ipsum', array('paragraphs' => $paragraphs));*/
		return view('pages.lorem-ipsum')->with('paragraphs', $paragraphs);
    }

    public function getLoremPage() {
        return view('pages.lorem-ipsum');
    }
}