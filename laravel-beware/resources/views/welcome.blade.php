@extends('layout.master')

@section('content')
        <!-- header -->
        <div class=" bg-banner-image slider">
            <br><br><br><br><br><br><br>
            <div class="container">
                
                <h3 class="text-center bigFont text-light">Welcome Developers and Gamers!</h3>
                <p class="text-center text-light">Submit your games and there is a chance your games will be selected to be published on our platform!</p>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-danger btn-round btn-lg" data-toggle="modal" data-target="#submitGameForm">Submit your game now!</button>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <!-- introduce us -->
        <div class=" bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <br><br><br>
                        <h3 class="text-left text-dark">Introduce Us,</h3>
                        <h3 class="bigFont text-left text-dark">Beware!</h3>
                        <p class="text-left text-dark">we make mobile games beyond imagination and creativity together with you!</p>
                        we make..
                        <ul>
                            <li>mobile games</li>
                            <li>casual and simple game</li>
                            <li>much more!</li>
                        </ul>
                        <button type="button" class="btn btn-danger btn-round" onclick="location.href='/about'"> about us!</button>
                    </div>
                    <div class="col-sm">
                        <br><br><br>
                        <div class="btn-round bg-black">
                            <br><br>
                            <img src="images/Logo2.png" class="img-center" id="logo" alt="logo">
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <!-- our games -->
        <div class="bg-light">
            <div class="container">
                <br><br><br>
                <h3 class="bigFont text-left text-dark">Check our Games!</h3>
                <table class="table">
                    <tr>
                        <th>Logo</th> 
                        <th>Games</th>
                        <th>Genre</th>
                        <th>Download</th>
                    </tr>
                    <tr>
                        <td><img src="images/bounceBallLogo.png" id="tableLogo" alt="Bounce Ball"></td>
                        <td>Bounce Ball</td>
                        <td>Casual</td>
                        <td><a href="https://play.google.com/store/apps/details?id=com.beware.BounceBall&hl=en_US&gl=US" target="_blank">
                            <img src="images/download.png" id="downloadLogo" alt="download">
                        </a></td>
                    </tr>
                    <tr>
                        <td><img src="images/backHomeLogo.png" id="tableLogo" alt="Bounce Ball"></td>
                        <td>Back Home</td>
                        <td>Casual</td>
                        <td><a href="https://play.google.com/store/apps/details?id=com.beware.BounceBall&hl=en_US&gl=US" target="_blank">
                            <img src="images/download.png" id="downloadLogo" alt="download">
                        </a></td>
                    </tr>
                    <tr>
                        <td><img src="images/24Logo.png" id="tableLogo" alt="Bounce Ball"></td>
                        <td>24!</td>
                        <td>Casual</td>
                        <td><a href="https://play.google.com/store/apps/details?id=com.Beware.game24&hl=en_US&gl=US" target="_blank">
                            <img src="images/download.png" id="downloadLogo" alt="download">
                        </a></td>
                    </tr>
                    <tr>
                        <td><img src="images/hopeLogo.png" id="tableLogo" alt="Bounce Ball"></td>
                        <td>Hope</td>
                        <td>Casual</td>
                        <td><a href="https://play.google.com/store/apps/details?id=com.Beware.Hope&hl=en_US&gl=US" target="_blank">
                            <img src="images/download.png" id="downloadLogo" alt="download">
                        </a></td>
                    </tr>
                </table>
                <p>We have lot of games, and we are still developing more for you! Check out our other games on playstore!</p>
                <button type="button" class="btn btn-danger btn-round" onclick="location.href='/game'"> More games!</button>
                <br><br><br><br><br>
            </div> 

        </div>

        <!-- modal -->
        <div class="modal" id="submitGameForm" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit your Game!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/submit" method="POST" enctype="multipart/form-data">
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
                            <label for="exampleInputEmail1">Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game description  ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Download Link</label>
                            <input name="link" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter game link  ">
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
