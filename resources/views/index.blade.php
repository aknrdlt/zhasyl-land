<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="yandex-verification" content="3ff68da4d23066b3" />
    <title>Govno Land</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.min.css" />
    
</head>
<body>
 <audio id="audioPlay" autoplay controls loop>
        <source src="{{ asset("storage/$link_music") }}" type="audio/mp3">
    </audio>
<script>
const body = document.querySelector('body');
body.addEventListener('scroll',function(){
    document.querySelector('#audioPlay').play();
});
body.dispatchEvent(new Event('scroll'));
</script>
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
                <a class="header__link" href="#sert">{{$block_menu[4]['word_' . app() -> getLocale()]}}</a>
                <a class="header__link" href="#paper">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
            </div>
            <div class="header__contacts desktop">
                    <a class="header__phone" href="tel:{{$block_menu[6]['word_' . app() -> getLocale()]}}">
                        <img src="img/phone-header.svg" alt="" />
                        {{$block_menu[6]['word_' . app() -> getLocale()]}}
                    </a>
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
                    <a class="header__link header__link-active" href="#about">{{$block_menu[0]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#company">{{$block_menu[1]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#steps">{{$block_menu[2]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#sert">{{$block_menu[4]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#paper">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
                </div>
                <div class="header__contacts">
                    <a class="header__phone" href="tel:{{$block_menu[6]['word_' . app() -> getLocale()]}}">
                        <img src="img/phone-header.svg" alt="" />
                        {{$block_menu[6]['word_' . app() -> getLocale()]}}
                    </a>
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
    <video autoplay loop muted playsinline id="myVideo"  src="{{ asset("storage/$link") }}" type="video/mp4">
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
                            <div class="about__item-hover">
                                Кронам деревьев нужны свет и воздух. Если их достаточно, для развития растений создаются идеальные условия. Чтобы цветение и урожай были лучше, ветки плодовых и декоративных деревьев и кустарников нужно регулярно обрезать.
                            </div>
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
                            {{$desc_articles[2]['word_' . app() -> getLocale()]}}
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

    <section class="modal">
        <div class="modal__inner">
            <div class="modal__descr">
                <div class="modal__close">X</div>
                Кронам деревьев нужны свет и воздух. Если их достаточно, для развития растений создаются идеальные условия. Чтобы цветение и урожай были лучше, ветки плодовых и декоративных деревьев и кустарников нужно регулярно обрезать.
                Кронам деревьев нужны свет и воздух. Если их достаточно, для развития растений создаются идеальные условия. Чтобы цветение и урожай были лучше, ветки плодовых и декоративных деревьев и кустарников нужно регулярно обрезать.
                Кронам деревьев нужны свет и воздух. Если их достаточно, для развития растений создаются идеальные условия. Чтобы цветение и урожай были лучше, ветки плодовых и декоративных деревьев и кустарников нужно регулярно обрезать.
            </div>
        </div>
    </section>
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
                    <a class="header__link " href="#about">{{$block_menu[1]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#company">{{$block_menu[2]['word_' . app() -> getLocale()]}}</a>
                    <a class="header__link" href="#works">{{$block_menu[4]['word_' . app() -> getLocale()]}} </a>
                    <a class="header__link" href="#sert">{{$block_menu[5]['word_' . app() -> getLocale()]}}</a>
                </div>
                <div class="header__contacts">
                   <a class="header__phone" href="tel:{{$block_menu[6]['word_' . app() -> getLocale()]}}">
                        <img src="img/footer-phone.svg" alt="" />
                        {{$block_menu[6]['word_' . app() -> getLocale()]}}
                    </a>
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
<div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=77770995007">
            <svg height="50px" viewBox="-1 0 512 512" width="50px" xmlns="http://www.w3.org/2000/svg"><path d="m10.894531 512c-2.875 0-5.671875-1.136719-7.746093-3.234375-2.734376-2.765625-3.789063-6.78125-2.761719-10.535156l33.285156-121.546875c-20.722656-37.472656-31.648437-79.863282-31.632813-122.894532.058594-139.941406 113.941407-253.789062 253.871094-253.789062 67.871094.0273438 131.644532 26.464844 179.578125 74.433594 47.925781 47.972656 74.308594 111.742187 74.289063 179.558594-.0625 139.945312-113.945313 253.800781-253.867188 253.800781 0 0-.105468 0-.109375 0-40.871093-.015625-81.390625-9.976563-117.46875-28.84375l-124.675781 32.695312c-.914062.238281-1.84375.355469-2.761719.355469zm0 0" fill="#e5e5e5"/><path d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0" fill="#fff"/><path d="m19.34375 492.625 33.277344-121.519531c-20.53125-35.5625-31.324219-75.910157-31.3125-117.234375.050781-129.296875 105.273437-234.488282 234.558594-234.488282 62.75.027344 121.644531 24.449219 165.921874 68.773438 44.289063 44.324219 68.664063 103.242188 68.640626 165.898438-.054688 129.300781-105.28125 234.503906-234.550782 234.503906-.011718 0 .003906 0 0 0h-.105468c-39.253907-.015625-77.828126-9.867188-112.085938-28.539063zm0 0" fill="#64b161"/><g fill="#fff"><path d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"/><path d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0" fill-rule="evenodd"/></g></svg>
        </a>
    </div>
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
