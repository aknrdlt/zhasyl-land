<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Zhasyl Land</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.min.css" />
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" href="">
                <img src="img/logo.svg" alt="" />
            </a>
            <div class="hamburger">
                <span></span>
            </div>
            <div class="header__links desktop">
                <a class="header__link " href="#about">{{$block_menu[0]['word_' . app() -> getLocale()]}}</a>
                <a class="header__link" href="#company">{{$block_menu[1]['word_' . app() -> getLocale()]}}</a>
                <a class="header__link" href="#steps">{{$block_menu[2]['word_' . app() -> getLocale()]}}</a>
                <a class="header__link" href="#works">{{$block_menu[3]['word_' . app() -> getLocale()]}} </a>
                <a class="header__link" href="#sert">{{$block_menu[4]['word_' . app() -> getLocale()]}}</a>
                <a class="header__link" href="#paper">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
            </div>
            <div class="header__contacts desktop">
                <a class="header__phone" href="tel:+77751231875">
                    <img src="img/phone-header.svg" alt="" />
                    {{$block_menu[6]['word_' . app() -> getLocale()]}}</a
                >
                <div class="language">
                    <div style="display: flex">
                        <h1 style="text-transform: uppercase">{{ Config::get('app.locale') }}</h1>
                        <div class="triangle"></div>
                    </div>
                    <div class="language_switch">
                        <div class="ru"><a href="locale/ru">ru</a></div>

                        <div class="kz"><a href="locale/kz">kz</a></div>

                    </div>

                </div>
            </div>
            <div class="header__burger-menu">
                <div class="header__links">
                    <a class="header__link header__link-active" href="">{{$block_menu[0]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="">{{$block_menu[1]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="">{{$block_menu[2]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="">{{$block_menu[3]['word_' . app() -> getLocale()]}} </a>
                    <a class="header__link" href="">{{$block_menu[4]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
                </div>
                <div class="header__contacts">
                    <a class="header__phone" href="tel:+77751231875">
                        <img src="img/phone-header.svg" alt="" />
                        {{$block_menu[6]['word_' . app() -> getLocale()]}}</a
                    >
                </div>
                <div class="language">
                    <div style="display: flex">
                        <h1 style="text-transform: uppercase">{{ Config::get('app.locale') }}</h1>
                        <div class="triangle"></div>
                    </div>
                    <div class="language_switch">
                        <div class="ru"><a href="locale/ru">ru</a></div>

                        <div class="kz"><a href="locale/kz">en</a></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<section class="main">
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset("storage/$link") }}" type="video/mp4">
    </video>
    <div class="main__inner">
        <div class="container">
            <div class="suptitle">{{$desc_banner[0]['word_' . app() -> getLocale()]}}</div>
            <div class="title">
                {{$desc_banner[1]['word_' . app() -> getLocale()]}}
            </div>
            <div class="subtitle">
                {{$desc_banner[2]['word_' . app() -> getLocale()]}}
            </div>
            <a href="#request">
                <button class="button">{{$desc_banner[3]['word_' . app() -> getLocale()]}}</button>
            </a>
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="suptitle">{{$desc_services[0]['word_' . app() -> getLocale()]}}</div>
            <div class="title">{{$desc_services[1]['word_' . app() -> getLocale()]}}</div>
            <div class="about__slider">
                @foreach($services as $service)
                    <div class="about__wrap">
                        <div class="about__item">
                            <div class="about__item-img">
                                <img src="{{Voyager::image($service -> image)}}" alt="" />
                            </div>
                            <span>{{$service['word_' . app() -> getLocale()]}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="works" id="works">

    <div class="works__inner">
        <div class="container">
            <div class="title">{{$desc_work[0]['word_' . app() -> getLocale()]}}</div>
            <div class="subtitle">
                {{$desc_work[1]['word_' . app() -> getLocale()]}}
            </div>
        </div>
        <div class="works__slider">
            @foreach($images_work as $image)
                <div class="works__item">
                    <img src="{{Voyager::image($image -> image)}}" alt="" />
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="company" id="company">
    <div class="container">
        <div class="company__inner">
            <div class="company__descr">
                <div class="suptitle">{{$desc_about_company[0]['word_' . app() -> getLocale()]}}</div>
                <div class="title">{{$desc_about_company[1]['word_' . app() -> getLocale()]}}</div>
                <div class="subtitle">
                    {{$desc_about_company[2]['word_' . app() -> getLocale()]}}
                </div>
                <div class="company__items">
                    <div class="company__item">
                        <div class="company__item-icon">
                            <img src="img/company-icon1.svg" alt="" />
                        </div>
                        {{$about_company[0]['word_' . app() -> getLocale()]}}
                    </div>
                    <div class="company__item">
                        <div class="company__item-icon">
                            <img src="img/company-icon2.svg" alt="" />
                        </div>
                        {{$about_company[1]['word_' . app() -> getLocale()]}}
                    </div>
                    <div class="company__item">
                        <div class="company__item-icon">
                            <img src="img/company-icon3.svg" alt="" />
                        </div>
                        {{$about_company[2]['word_' . app() -> getLocale()]}}
                    </div>
                </div>
            </div>
            <div class="company__img">
                <img src="{{Voyager::image($about_company[3] -> image)}}" alt="" />
                <div class="company__year">
                    <div>{{$about_company[3]['word_' . app() -> getLocale()]}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="steps"  id="steps">
    <div class="container">
        <div class="steps__inner">
            <div class="suptitle">{{$desc_job_order[0]['word_' . app() -> getLocale()]}} </div>
            <div class="title">{{$desc_job_order[1]['word_' . app() -> getLocale()]}}</div>
            <div class="steps__items">
                <div class="steps__item steps__item-arrow">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[0] -> image)}}" alt="" />
                        <div class="steps__item-count">1</div>
                    </div>
                    {{$job_order[0]['word_' . app() -> getLocale()]}}
                </div>
                <div class="steps__item steps__item-arrow">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[1] -> image)}}" alt="" />
                        <div class="steps__item-count">2</div>
                    </div>
                    {{$job_order[1]['word_' . app() -> getLocale()]}}
                </div>
                <div class="steps__item">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[2] -> image)}}" alt="" />
                        <div class="steps__item-count">3</div>
                    </div>
                    {{$job_order[2]['word_' . app() -> getLocale()]}}
                </div>
                <div class="steps__item steps__item-arrow">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[3] -> image)}}" alt="" />
                        <div class="steps__item-count">4</div>
                    </div>
                    {{$job_order[3]['word_' . app() -> getLocale()]}}
                </div>
                <div class="steps__item steps__item-arrow">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[4] -> image)}}" alt="" />
                        <div class="steps__item-count">5</div>
                    </div>
                    {{$job_order[4]['word_' . app() -> getLocale()]}}
                </div>
                <div class="steps__item">
                    <div class="steps__item-icon">
                        <img src="{{Voyager::image($job_order[5] -> image)}}" alt="" />
                        <div class="steps__item-count">6</div>
                    </div>
                    {{$job_order[5]['word_' . app() -> getLocale()]}}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company equinment">
    <div class="container">
        <div class="company__inner">
            <div class="company__descr">
                <div class="suptitle">{{$desc_instruments[0]['word_' . app() -> getLocale()]}}</div>
                <div class="title">{{$desc_instruments[1]['word_' . app() -> getLocale()]}}</div>
                <div class="subtitle">
                    {{$desc_instruments[2]['word_' . app() -> getLocale()]}}
                </div>
            </div>
            <div class="company__img eq__slider">
                @foreach($images_instruments as $image)
                    <div class="eq__wrap">
                        <img src="{{Voyager::image($image -> image)}}" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="sertificate" id="sert">
    <div class="container">
        <div class="sertificate__inner">
            <div class="suptitle">{{$desc_letter[0]['word_' . app() -> getLocale()]}}</div>
            <div class="title">{{$desc_letter[1]['word_' . app() -> getLocale()]}}</div>
            <div class="sertificate__slider">
                @foreach($images_letter as $image)
                    <div class="sertificate__item">
                        <img src="{{Voyager::image($image -> image)}}" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="paper" id="paper">
    <div class="container">
        <div class="paper__inner">
            <div class="suptitle">{{$desc_articles[0]['word_' . app() -> getLocale()]}}</div>
            <div class="title">{{$desc_articles[1]['word_' . app() -> getLocale()]}}</div>
            <div class="paper__items">
                @foreach($articles as $article)
                    <div class="paper__item">
                        <div class="paper__img">
                            <img src="{{Voyager::image($article -> image)}}" alt="" />
                        </div>
                        <div class="paper__date">
                            <img src="img/paper-date.svg" alt="" />
                            <span>{{date_format($article['created_at'], "m.d.y H:i")}}</span>
                        </div>
                        <div class="paper__title">
                            {{$article['word_' . app() -> getLocale()]}}
                        </div>
                        <div class="paper__more">
                            {{-- {{$desc_articles[2]['word_' . app() -> getLocale()]}} --}}
                            {{-- {{$article['link']}} --}}
                            <a href="#">
                                <img src="img/paper-more.svg"  alt="" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="request" id="request">
    <div class="container">
        <div class="request__inner">
            <div class="request__descr">
                <div class="suptitle">{{$desc_applications[0]['word_' . app() -> getLocale()]}}</div>
                <div class="title">{{$desc_applications[1]['word_' . app() -> getLocale()]}}</div>
                <div class="subtitle">
                    {{$desc_applications[2]['word_' . app() -> getLocale()]}}                </div>
            </div>
            <form class="request__form" method="get" action="/send">
                <input
                    name="name"
                    class="input"
                    type="text"
                    placeholder="{{$desc_applications[3]['word_' . app() -> getLocale()]}}"
                />
                <input
                    id="phone_input"
                    name="phone"
                    class="input"
                    type="text"
                    placeholder="{{$desc_applications[4]['word_' . app() -> getLocale()]}}"
                />
                <textarea
                    name="message"
                    class="textarea"
                    placeholder="{{$desc_applications[5]['word_' . app() -> getLocale()]}}"
                ></textarea>
                <button class="button">{{$desc_applications[6]['word_' . app() -> getLocale()]}}</button>
            </form>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="header__inner">
                <a class="header__logo" href="">
                    <img src="img/logo.svg" alt="" />
                </a>
                <div class="header__links">
                    <a class="header__link header__link-active" href="">{{$block_menu[0]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link " href="#about">{{$block_menu[0]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#company">{{$block_menu[1]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#steps">{{$block_menu[2]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#works">{{$block_menu[3]['word_' . app() -> getLocale()]}} </a>
                    <a class="header__link" href="#sert">{{$block_menu[4]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#paper">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
                </div>
                <div class="header__contacts">
                    <a class="header__phone" href="tel:+77751231875">
                        <img src="img/footer-phone.svg" alt="" />
                        {{$block_menu[6]['word_' . app() -> getLocale()]}}</a
                    >
                    <div class="language"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bg">
        <img src="img/footer-bg.svg" alt="" />
        <img src="img/footer-bg.svg" alt="" />
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/libs.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
        $("#phone_input").mask("+7 (999) 999-99-99");
    });
</script>
</body>
</html>
