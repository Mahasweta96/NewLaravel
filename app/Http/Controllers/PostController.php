<?php

namespace App\Http\Controllers;

use DB;
use App\post;


class PostController
{
	public function show($slug)
	{
		$post = post::where('slug',$slug)->first();
		
   // $posts = [
    //   'my-first-post' => 'Hello, this is my first blog post',
   //    'my-second-post' => 'Now I am hetting the hang of this blogged thing  //  ];

   //if (! array_key_exists($post, $posts)) {
   	//abort(404,'sorry, that post was not found,');
  // }
if (! $post){
	abort(404);
}
 
   return view('post',[ 
    'post' => $post
        ]);
   

   } 
}