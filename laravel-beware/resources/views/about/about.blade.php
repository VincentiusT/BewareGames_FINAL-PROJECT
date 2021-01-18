@extends('layout.master')

@section('content')
<div class="bg-about">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <br><br><br>
                        <h3 class="text-left text-dark">hey there! we are, </h3>
                        <h3 class="bigFont text-left text-dark">Beware!</h3>
                        <strong class="text-left text-dark">we make mobile games beyond imagination and creativity together with you!</strong>
                        <p class="text-left text-dark">we are developers and publishers for games. We develop and publish our games on google playstore. Not only us, 
                            you guys can also submit your games to this website and there's a chance that your game will be picked and published on our platform!</p>
                    </div>
                    <div class="col-sm">
                        <br><br><br>
                        <div class="btn-round bg-black box-transparant">
                            <br><br>
                            <img src="images/Logo2.png" class="img-center" id="logo" alt="logo">
                        </div>
                    </div>
                </div>   
                <div>
                    <br><br><br><br>
                    <!-- <a href="https://www.instagram.com/gamesbybeware/">
                        <div class="circle">
                            <img src="images/insta.png" alt="insta" id="emailLogo">
                        </div>
                    </a> -->

                    <button class="btn circle"><img src="images/email.png" onclick="location.href='https://www.instagram.com/gamesbybeware/'" id="emailLogo" alt="email"></button>
                    <button class="btn circle"><img src="images/insta.png" onclick="location.href='https://www.instagram.com/gamesbybeware/'" id="emailLogo" alt="email"></button>
                    <button class="btn circle"><img src="images/phone.png" onclick="location.href='https://www.instagram.com/gamesbybeware/'" id="emailLogo" alt="email"></button>
                    <button class="btn circle"><img src="images/playstoreBW.png" onclick="location.href='https://play.google.com/store/apps/developer?id=Beware!&hl=en_US&gl=US'" id="emailLogo" alt="email"></button>
                </div>
                
            </div>

            <br><br><br>
@endsection