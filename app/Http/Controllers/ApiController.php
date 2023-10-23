<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createUser(Request $request)
    {
        // Validasi data jika diperlukan
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Simpan data ke tabel Users
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = ($request->input('password'));
        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function getUsers()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    public function createArticle(Request $request)
    {
        // Validasi data jika diperlukan
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        // Simpan data ke tabel Articles
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();

        return response()->json(['message' => 'Article created successfully'], 201);
    }

}
