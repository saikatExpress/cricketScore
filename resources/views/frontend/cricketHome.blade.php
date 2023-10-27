@extends('layout.master')


<style>
    .image-container {
        width: 300px;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    #zoom-image {
        width: 100%;
        height: 100%;
        transition: transform 0s;
        /* Set transition time to 0 seconds to remove animation */
    }

    #zoom-image:hover {
        transform: scale(1.025) rotate(0.02deg);
        transition: transform 3s cubic-bezier(0.19, 1, 0.22, 1);
    }
</style>


@section('content')
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


    <section>


        <div class="title_before">
            <h4>Cricket</h4>
        </div>


        <div class="cricketNews">
            <div class="cricket_sub_news">
                <div class="news_style">
                    <img class="cricket_sub_image" class="cricket_sub_image" src="{{ asset('images/logos/bcb.jpeg') }}"
                        alt="no image">
                    <p>Bangladesh Cricket Board have changed theire national team captain</p>
                </div>

                <div class="news_block">
                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/Untitldsdaed.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>

                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/Untsasaditled.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cricket_sub_news">
                <div class="news_style">
                    <img class="cricket_sub_image" src="{{ asset('images/logos/bcci.jpeg') }}" alt="no image">
                    <p>India Cricket Board announced theire upcoming series against <a href="">Australia</a></p>
                </div>

                <div class="news_block">
                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imagedfdsafdfs.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>

                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imageasfdsas.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cricket_sub_news">
                <div class="news_style">
                    <img class="cricket_sub_image" src="{{ asset('images/logos/Untitlesadd.jpeg') }}" alt="no image">
                    <p>A great series winner Autralia cricket against <a href="">England</a></p>
                </div>

                <div class="news_block">
                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imagsfadfes.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>

                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imasdsages.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cricket_sub_news">
                <div class="news_style">
                    <a href="">
                        <img class="cricket_sub_image" src="{{ asset('images/logos/Untitdfdsfled.jpeg') }}"
                            alt="no image">
                        <p>Virat Kohli pickup back to back century <a href="">West indies</a></p>
                    </a>
                </div>

                <div class="news_block">
                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imageasdadds.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>

                    <div class="sub_category_news">
                        <div>
                            <img class="sub_news_image" src="{{ asset('images/logos/imagesasad.jpeg') }}"
                                alt="">
                        </div>

                        <div class="news_info">
                            <p class="news_info_p">
                                <a href="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, expedita.
                                </a>
                            </p>
                            <span style="margin-left: 4px"><i style="font-size: 0.7rem;"
                                    class="fa-solid fa-square-share-nodes"></i></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>

        <div style="margin-top: 10px;">
            <div class="title_before">
                <h4>Top Team</h4>
            </div>

            <div class="image-container">
                <img src="{{ asset('images/logos/58732095.gif') }}" alt="Image" id="zoom-image">
            </div>

        </div>

        <div class="cricketNews">



        </div>
    </section>

    <script>
        // script.js
        const image = document.getElementById('rotate-image');

        image.addEventListener('mouseover', () => {
            image.style.transform = 'rotate(15deg)'; // Adjust the rotation angle as needed
        });

        image.addEventListener('mouseout', () => {
            image.style.transform = 'rotate(0deg)'; // Reset the rotation when not hovered
        });
    </script>
@endsection
