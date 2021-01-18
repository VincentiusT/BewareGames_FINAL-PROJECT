@extends('layout.master')

@section('content')
    <div class="bg-light">
        <div class="container">
            <br><br>
            <h1>Submitted Games!</h1>
            <div class="row">
                <div class="col-sm">
                    
                </div>
                <div class="col-sm">
                    <!-- <form class="form-inline my-2 my-lg-0 float-left" method="GET" action="/submittedGame">
                        <input name="find" class="form-control mr-sm-2" type="search" placeholder="Search Game" aria-label="Search">
                        <button class="btn btn-outline-danger my-1 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
            
            <br><br>
            <table class="table table-hover">
                <tr>
                    <!-- <th>Logo</th> -->
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>link</th>
                    <!-- <th>Action</th> -->
                </tr>
                @foreach($dataSubmittedGame as $game)
                <tr>
                    <!-- <td>
                        <img src="uploads/game/{{$game->logo}}" id="tableLogo" class="img-center" alt="logo"> <br><br>
                    </td> -->
                    <td>{{$game->name}}</td>
                    <td>{{$game->genre}}</td>
                    <td>{{$game->description}}</td>
                    <td><a href="{{$game->link}}">link</a></td>
                    <!-- <td>
                        
                    </td> -->
                </tr>
                @endforeach
            </table>

        </div>
        <br><br><br>
    </div>

    <!-- <button class="bottom-right btn-round bg-black text-light">See My Submitted Game!</button> -->

    <!-- <div class="fix-footer text-center">
        <button type="button" class="btn bg-black btn-round btn-lg text-light" data-toggle="modal" data-target="#submitGameForm">See your game submissions</button>
    </div> -->
@endsection
        