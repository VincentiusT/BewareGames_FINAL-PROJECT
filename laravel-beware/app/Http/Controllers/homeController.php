<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        if($request->has('find')){
            $dataBewareGame = \App\Models\games::where('name','LIKE','%'.$request->find.'%')->get();
        }
        else{
            $dataBewareGame = \App\Models\games::all();
        }
        return view('game.index',['dataBewareGame'=>$dataBewareGame]);
    }

    public function create(Request $request){
        $game = new \App\Models\games();
        $game->name = $request->input('name');
        $game->genre = $request->input('genre');
        $game->date = $request->input('date');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/game/',$filename);
            $game->image = $filename;
        }
        else{
            return $request;
            $game->image = '';
        }
         
        $game->save();
        return redirect('/game');
    }

    public function edit($id){
        $game = \App\Models\games::find($id);
        return view('game/edit',['game' => $game]);
    }

    public function update(Request $request, $id){
        $game = \App\Models\games::find($id);   

        $game->name = $request->input('name');
        $game->genre = $request->input('genre');
        $game->date = $request->input('date');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/game/',$filename);
            $game->image = $filename;
        }
        $game->update();
        return redirect('/game');
    }

    public function delete($id){
        $game = \App\Models\games::find($id);
        $game->delete($game);
        return redirect('/game');
    }

    public function about(){
        return view('about.about');
    }

    public function submit(Request $request){
        $game = new \App\Models\submittedGames();
        $game->name = $request->input('name');
        $game->genre = $request->input('genre');
        $game->description = $request->input('description');
        $game->link = $request->input('link');

        $game->save();
        return redirect('/');
    }
}
