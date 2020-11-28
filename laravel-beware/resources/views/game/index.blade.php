@extends('layout.master')

@section('content')
    <div class="bg-light">
        <div class="container">
            <br><br>
            <h1>Our Games!</h1>
            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-danger btn-round float-left" data-toggle="modal" data-target="#addGameForm">
                        Add New game
                    </button>
                </div>
                <div class="col-sm">
                    <form class="form-inline my-2 my-lg-0 float-left" method="GET" action="/game">
                        <input name="find" class="form-control mr-sm-2" type="search" placeholder="Search Game" aria-label="Search">
                        <button class="btn btn-outline-danger my-1 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            
            <br><br>
            <table class="table table-hover">
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Date</th>
                    <!-- <th>Action</th> -->
                </tr>
                @foreach($dataBewareGame as $game)
                <tr>
                    <td>
                        <img src="uploads/game/{{$game->image}}" id="tableLogo" class="img-center" alt="logo"> <br><br>
                        <a href="/game/{{$game->id}}/edit" class="btn btn-dark btn-sm btn-round"> E </a>
                        <a href="/game/{{$game->id}}/delete" class="btn btn-danger btn-sm btn-round " onclick="return confirm('Are you sure want to delete this?')"> X </a>
                    </td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->genre}}</td>
                    <td>{{$game->date}}</td>
                    <!-- <td>
                        
                    </td> -->
                </tr>
                @endforeach
            </table>

        </div>
        <br><br><br>
    </div>

        <!-- modal -->
        <div class="modal" id="addGameForm" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Game!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/game/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Genre</label>
                            <input name="genre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game genre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input name="date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game date  ">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Logo</label>
                            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
        