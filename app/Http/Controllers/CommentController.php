<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;
use App\Client;
use Krucas\Notification\Facades\Notification;

class CommentController extends Controller
{
    
    public function getCreate($id_movie){

        $movie = Movie::findOrFail($id_movie);
        $clients = Client::All();
        $date = date("Y-m-d");

        return view('comment.create', array(    'movie'=>$movie,
                                                'clients'=>$clients,
                                                'date'=>$date
                                        ));
    } 
    
    public function getEdit($id_movie, $id_client){

        $comment = Comment::where([
	        	['id_movie','=',$id_movie],
	        	['id_client','=',$id_client],
        	])->get();
        $movie = Movie::findOrFail($id_movie);
        $client = Client::findOrFail($id_client);
        $date = date("Y-m-d");

    	return view('comment.edit', array( 	'comment'=>$comment,
                                            'movie'=>$movie,
                                            'client'=>$client,
                                            'date'=>$date
                                        ));
    }    

    public function postCreate($id_movie, Request $request){
    	
        Comment::where([
	        	['id_movie','=',$id_movie],
	        	['id_client','=',$request->input('client')],
	       	])->delete();

        $comment = new Comment;
        $comment->id_movie = $id_movie;
        $comment->id_client = $request->input('client');
        $comment->date_comment = date("Y-m-d");
        $comment->rate_movie = $request->input('rate');
        $comment->comment = $request->input('comment');
        $comment->save();

        Notification::success('Comentario añadido corretamente.' );

        return redirect('catalog/show/'.$id_movie);
    }
    
    public function putEdit($id_movie, $id_client, Request $request){

        $comment = Comment::where([
	        	['id_movie','=',$id_movie],
	        	['id_client','=',$id_client],
	       	])->first();
        $comment->date_comment = date("Y-m-d");
        $comment->rate_movie = $request->input('rate');
        $comment->comment = $request->input('comment');
        $comment->save();

        Notification::success('Comentario modificado corretamente.' );

        return redirect()->action('CatalogController@getShow', ['id' => $comment->id_movie]);

    }
    
    public function deleteComment($id_movie, $id_client){ 

        Comment::where([
	        	['id_movie','=',$id_movie],
	        	['id_client','=',$id_client],
        	])->delete();
        
        Notification::success('Comentario eliminado corretamente.' );
        
        return redirect(url()->previous());
    }
}
