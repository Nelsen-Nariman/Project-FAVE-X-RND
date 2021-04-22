<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function create(){
        return view('create');
    }

    public function landing(){
        return view('cinemov/landing-page');
    }

    public function index()
    {
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function store(Request $request)
    {
        // insert
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/images'), $new_name);
        
        Article::create([
            'judul' => $request->judul,
            'image' => $new_name,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'durasi' => $request->durasi
        ]);

        return redirect('/')->with('success', 'Data Success');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/images'), $new_name);

        Article::where('id', $id)
            ->update([
                'judul' => $request->judul,
                'image' => $new_name,
                'deskripsi' => $request->deskripsi,
                'tanggal' => $request->tanggal,
                'durasi' => $request->durasi
            ]);
        
        return redirect('/');
    }

    public function destroy($id)
    {
        $image = Article::find($id);
        Storage::delete('images/'. $image->image);
        Article::destroy($id);
        return redirect('/');
    }
}
