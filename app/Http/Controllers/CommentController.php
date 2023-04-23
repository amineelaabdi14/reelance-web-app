<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    
    public function comment(Request $req,$id){
        auth()->user()->comment()->create(["user_id"=>auth()->user()->id,"service_id"=>$id,"comment"=>$req->comment]);
        return redirect('service/'.$id);
    }
}
