@extends('layout.master')

@section('content')
    <div class="bg-light">
        <div class="container">
            <h1>Edit Game Data</h1>
            <form action="/game/{{$game->id}}/update" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game name" value="{{$game->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Genre</label>
                    <input name="genre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game genre" value="{{$game->genre}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input name="date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game date" value="{{$game->date}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Logo</label>
                    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{$game->image}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <br>
        </div>
    </div>
@endsection

