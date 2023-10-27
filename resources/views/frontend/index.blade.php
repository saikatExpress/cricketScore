@extends('layout/master')

@section('content')
    <div class="main_body_bar">
        <div class="body_top_bar">
            <h4 style="margin: 10px;">Scores</h4>
            <select name="" id="" style="margin: 10px;">
                <option value="" selected>Cricket</option>
                <option value="">Football</option>
                <option value="">Kabaddi</option>
            </select>
        </div>

        <div class="live_panel">
            <div style="overflow: scroll" class="live_matches d-flex m-2">
                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Newzeland tour of Bangladesh,2023 <br>
                                    <strong>1st ODI | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitsdadled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Unsdadtitled.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Bangladesh
                                    </div>
                                    <div>
                                        Newzeland
                                    </div>
                                </div>

                                <div style="margin-left: 30px;">
                                    <div>
                                        270/7 (50ov)
                                    </div>
                                    <div>
                                        272/7 (48.4ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            Newzeland won by 3 wickets !
                        </p>

                    </div>
                </a>

                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Australia tour of India,2023 <br>
                                    <strong>2nd ODI | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untsaditled.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Australia
                                    </div>
                                    <div>
                                        India
                                    </div>
                                </div>

                                <div style="margin-left: 30px;">
                                    <div>
                                        210/7 (40ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            Australia won the toss
                            and choose to bat first !
                        </p>

                    </div>
                </a>

                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Ireland tour of England,2023 <br>
                                    <strong>2nd ODI | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Usadsdntitled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitlesfddfd.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Ireland
                                    </div>
                                    <div>
                                        England
                                    </div>
                                </div>

                                <div style="margin-left: 30px;">
                                    <div>
                                        280/7 (50ov)
                                    </div>
                                    <div>
                                        281/5 (49.1ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            England won by 5 wickets !
                        </p>

                    </div>
                </a>

                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Indian Premier League,2023 <br>
                                    <strong>Match 111 | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untsaditled.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Australia
                                    </div>
                                    <div>
                                        India
                                    </div>
                                </div>

                                <div style="margin-left: 45px;">
                                    <div>
                                        210/7 (40ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            Australia won the toss
                            and choose to bat first !
                        </p>

                    </div>
                </a>

                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Indian Premier League,2023 <br>
                                    <strong>Match 111 | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untsaditled.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Australia
                                    </div>
                                    <div>
                                        India
                                    </div>
                                </div>

                                <div style="margin-left: 45px;">
                                    <div>
                                        210/7 (40ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            Australia won the toss
                            and choose to bat first !
                        </p>

                    </div>
                </a>

                <a href="">
                    <div class="scoreBoard_div">
                        <div class="d-flex items-center justify-between scoreBoard">
                            <div>
                                <p>
                                    Indian Premier League,2023 <br>
                                    <strong>Match 111 | 19 Sep 2023</strong>
                                </p>
                            </div>
                            <div class="d-flex live_match_icon">
                                <div class="live-match_div"></div>
                                <p>
                                    Live
                                </p>
                            </div>
                        </div>

                        <div class="sportInfo">
                            <div class="d-flex sport_by_country">
                                <div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untitled.png') }}" alt="">
                                    </div>
                                    <div>
                                        <img style="width: 30px; height:20px; border-radius:4px;"
                                            src="{{ asset('images/logos/Untsaditled.png') }}" alt="">
                                    </div>
                                </div>

                                <div style="margin-left:20px;">
                                    <div>
                                        Australia
                                    </div>
                                    <div>
                                        India
                                    </div>
                                </div>

                                <div style="margin-left: 45px;">
                                    <div>
                                        210/7 (40ov)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="margin-top: 10px; font-size:12px; padding:5px; margin-bottom:5px; text-align:center;">
                            Australia won the toss
                            and choose to bat first !
                        </p>

                    </div>
                </a>

            </div>
        </div>

        {{-- Ad Block --}}
        <div class="adImage">
            <img src="{{ asset('images/logos/58732095.gif') }}" alt="">
        </div>

        <div class="row">
            <div class="col-sm-5 news-feed">
                <img src="{{ asset('images/logos/Y6shkhk6wN.webp') }}" alt="">
                <h4>Jos Butler strikes again in England cricket team.He have announced <b>Ben Stokes</b> for
                    upcoming <strong>ODI World Cup</strong> 2023 in India</h4>
            </div>

            <div class="col-sm-3">

                <div class="top_news_block">
                    <div class="top-news">
                        <div>
                            <img style="width: 70px;height:60px;" src="{{ asset('images/Untitled.jpeg') }}"
                                alt="">
                        </div>
                        <a href="">

                            <div class="top_news_title">
                                <p>
                                    Newzealnd Cricket team declare there world cup squad.
                                </p>
                                <div class="d-flex top_news_footer">
                                    <p class="feature_title">Newa</p>
                                    <p><i class="fa-solid fa-square-share-nodes"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-news">
                        <div>
                            <img style="width: 70px;height:60px;" src="{{ asset('images/Untiddsatled.jpeg') }}"
                                alt="">
                        </div>
                        <a href="">

                            <div class="top_news_title">
                                <p>
                                    <b style="color:darkred;">Wanindu Hasaranga</b> ruled out world cup
                                    squad.
                                </p>
                                <div class="d-flex top_news_footer">
                                    <p class="feature_title">Features</p>
                                    <p><i class="fa-solid fa-square-share-nodes"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-news">
                        <div>
                            <img style="width: 70px;height:60px;" src="{{ asset('images/Untitdffdfled.jpeg') }}"
                                alt="">
                        </div>
                        <a href="">

                            <div class="top_news_title">
                                <p>
                                    Ravichandran Ashwin back into world cup squad.
                                </p>
                                <div class="d-flex top_news_footer">
                                    <p class="feature_title">Features</p>
                                    <p><i class="fa-solid fa-square-share-nodes"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-news">
                        <div>
                            <img style="width: 70px;height:60px;" src="{{ asset('images/Untitsadled.jpeg') }}"
                                alt="">
                        </div>
                        <a href="">

                            <div class="top_news_title">
                                <p>
                                    Bangladeshi batter <b style="color: darkred;">Tamim Iqbal</b> ruled out
                                    squad.
                                </p>
                                <div class="d-flex top_news_footer">
                                    <p class="feature_title">News</p>
                                    <p><i class="fa-solid fa-square-share-nodes"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-sm-3">
                <img style="margin-top: 25px;" src="{{ asset('images/logos/57885598.jpg') }}" alt="">
            </div>
        </div>


        <hr>


        <div class="row">

            <h4>Cricket</h4>

            <div class="col-md-4">
                <img style="width:100%; border-radius:4px;" src="{{ asset('images/Untisadsadsatled.jpeg') }}"
                    alt="">
                <h4 style="font-size: 16px;margin-top:6px;">ODI world cup 2023: Get complete squads for all
                    team</h4>
            </div>

            <div class="col-md-4">
                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/Untvcxvbcxvitled.jpeg') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Live streaming, ICC Men’s T20 World Cup 2024 Americas Regional Final begins
                                on
                                September
                                30 - full schedule
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/Untitsdsdaled.jpeg') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                <b style="color:darkred;">Naseem Shah</b> missed out for the upcoming world
                                cup
                                squad.This is very sad news
                                for pakistani cricket lovers.
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Dream 11 Predictions : Pranob Sidhu gives a prediction for the upcoming cricket
                            event.He already gave 5 predictions and won 3 predictions.
                        </a>
                    </p>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Live streaming <b style="color:darkred;">Bangladesh Women vs India Women</b>
                            .Live On <strong style="color:darkorange;">GTV</strong>
                        </a>
                    </p>
                </div>

            </div>
            <div class="col-md-4">
                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/Maharani_Usha_Raje_Cricket_Stadium_Indore_-_panoramio.jpg') }}"
                        alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Eden Garden! The biggest stadium for cricket game.Kolkata declares the <b
                                    style="color:darkred;">Ban vs Pak</b> held on this stadium.
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/Untitsdadaled.jpeg') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Ms dhoni just joined Dream 11 team after the IPL.He has biggest person of
                                this
                                club.Boys are really happy to see <b style="color:darkred;">MSD</b>
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="related_news_short">
                    <p id="myText">
                        <a href="">
                            Dream 11 Predictions : Pranob Sidhu gives a prediction for the upcoming cricket
                            event.He already gave 5 predictions and won 3 predictions.
                        </a>
                    </p>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Live streaming <b style="color:darkred;">Bangladesh Women vs India Women</b>
                            .Live On <strong style="color:darkorange;">GTV</strong>
                        </a>
                    </p>
                </div>


            </div>
        </div>

        {{-- Ad Block --}}
        <div class="adImage">
            <img src="{{ asset('images/logos/58732159.png') }}" alt="">
        </div>

        <div class="row">

            <h4>Football</h4>

            <div class="col-md-4">
                <img style="width:100%; border-radius:4px;" src="{{ asset('images/logos/qp4QRnZvB3.webp') }}"
                    alt="">
                <h4 style="font-size: 16px;margin-top:6px;">
                    <b style="color:darkred;">Ac Milan vs Fc Bercelona</b> on the biggest war in football
                    history.
                </h4>
            </div>

            <div class="col-md-4">
                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/PtNE1q2rJ3.webp') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Brentford vs Arsenal in Carabao Cup 2023-24 - watch live streaming in
                                India.Let's go for enjoy.
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/wPQiWuz1fD.webp') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Calcutta Football League 2023 points table: Know the leaders in the
                                standings.Around 60,000 people are visited.
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Dream 11 Predictions : Pranob Sidhu gives a prediction for the upcoming cricket
                            event.
                        </a>
                    </p>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Live streaming <b style="color:darkred;">Bangladesh Women vs India Women</b>
                            .Live On <strong style="color:darkorange;">GTV</strong>
                        </a>
                    </p>
                </div>

            </div>
            <div class="col-md-4">
                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/SxRhEcEkdb.webp') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Liverpool vs Leicester City in Carabao Cup 2023-24 - watch live streaming in
                                India.Ticket are available in bank.
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex releted_top_news">
                    <img src="{{ asset('images/VNYmDubLCg.webp') }}" alt="">
                    <div style="width: 70%;">
                        <a style="text-decoration: none;" href="">
                            <p style="margin-left:5px; font-size:12px; margin-bottom:0;text-align:justify;">
                                Manchester United begin Carabao Cup title defence against Crystal Palace -
                                watch live streaming in India
                            </p>
                        </a>
                        <div class="d-flex releted_top_news_footer">
                            <p>News</p>
                            <p><i class="fa-solid fa-square-share-nodes"></i></p>
                        </div>
                    </div>
                </div>

                <div class="related_news_short">
                    <p id="myText">
                        <a href="">
                            Dream 11 Predictions : Pranob Sidhu gives a prediction for the upcoming cricket
                            event.
                        </a>
                    </p>
                </div>

                <div class="related_news_short">
                    <p>
                        <a href="">
                            Live streaming <b style="color:darkred;">Bangladesh Women vs India Women</b>
                            .Live On <strong style="color:darkorange;">GTV</strong>
                        </a>
                    </p>
                </div>


            </div>
        </div>

    </div>



    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, rem cum! Tenetur id omnis voluptates
        pariatur qui, impedit architecto dolores quod quidem eius dolorem vero delectus quos iure excepturi
        aliquam.
    </div>
    </div>
    </div>
@endsection
