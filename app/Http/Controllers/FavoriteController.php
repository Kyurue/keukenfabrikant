<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function add($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id', $post)->count();

        if($isFavorite == 0){
            $user->favorite_posts()->attach($post);

            toastr()->success('Post succesvol toegevoegd aan je favorieten.');
            return redirect()->back();
        }else {
            $matchThese = ['post_id' => $post, 'user_id' => $user->id];
            DB::table('post_user')->where($matchThese)->delete();

            toastr()->success('Post susscesvol verwijderd van je favorieten.');
            return redirect()->back();
        }
    }
}

