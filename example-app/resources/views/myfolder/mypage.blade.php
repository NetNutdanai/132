<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exhibition</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto:wght@300;400;500;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        .center {
            text-align: center;
        }

        .nav-wrapper {
            display: flex;
            position: relative;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            width: 90%;
            height: 80px;
            border-radius: 0 0 15px 15px;
            padding: 0 25px;
            z-index: 2;
            background: #005baa;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            color: white;
            text-transform: uppercase;
            font-size: 25px;
        }

        .nav-tabs {
            display: flex;
            font-weight: 600;
            font-size: 18px;
            list-style: none;
        }

        .nav-tab:not(:last-child) {
            padding: 10px 25px;
            margin: 0;
            /* border-right: 1px solid #eee; */
        }

        .nav-tab:last-child {
            padding: 10px 0 0 25px;
        }

        .nav-tab,
        .menu-btn {
            cursor: pointer;
            color: white;
        }

        .hidden {
            display: none;
        }

        @media screen and (max-width: 1107px) {
            .nav-container {
                position: fixed;
                display: none;
                overflow-y: auto;
                z-index: -1;
                top: 0;
                right: 0;
                width: 280px;
                height: 100%;
                background: #fff;
                box-shadow: -1px 0 2px rgba(0, 0, 0, 0.2);
            }

            .nav-tabs {
                flex-direction: column;
                align-items: flex-end;
                margin-top: 80px;
                width: 100%;
            }

            .nav-tab:not(:last-child) {
                padding: 20px 25px;
                margin: 0;
                border-right: unset;
                border-bottom: 1px solid #f5f5f5;
            }

            .nav-tab:last-child {
                padding: 15px 25px;
            }

            .menu-btn {
                position: relative;
                display: block;
                margin: 0;
                width: 20px;
                height: 15px;
                cursor: pointer;
                z-index: 2;
                padding: 10px;
                border-radius: 10px;
            }

            .menu-btn .menu {
                display: block;
                width: 100%;
                height: 2px;
                border-radius: 2px;
                background: #111;
            }

            .menu-btn .menu:nth-child(2) {
                margin-top: 4px;
                opacity: 1;
            }

            .menu-btn .menu:nth-child(3) {
                margin-top: 4px;
            }

            #menuToggle:checked+.menu-btn .menu {
                transition: transform 0.2s ease;
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(1) {
                transform: translate3d(0, 6px, 0) rotate(45deg);
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(2) {
                transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0);
                opacity: 0;
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(3) {
                transform: translate3d(0, -6px, 0) rotate(-45deg);
            }

            #menuToggle:checked~.nav-container {
                z-index: 1;
                display: flex;
                animation: menu-slide-left 0.3s ease;
            }

            @keyframes menu-slide-left {
                0% {
                    transform: translateX(200px);
                }

                to {
                    transform: translateX(0);
                }
            }
        }

        /* HEADER SECTION ENDS */

        main {
            position: relative;
            width: calc(min(90rem, 90%));
            margin: 0 auto;
            min-height: 82.2vh;
            column-gap: 3rem;
            padding-block: min(20vh, 3rem);
        }

        .bg {
            position: fixed;
            top: -4rem;
            left: -12rem;
            z-index: -1;
            opacity: 0;
        }

        .bg2 {
            position: fixed;
            bottom: -2rem;
            right: -3rem;
            z-index: -1;
            width: 9.375rem;
            opacity: 0;
        }

        main>div span {
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 1rem;
            color: #717171;
        }

        main>div h1 {
            text-transform: capitalize;
            letter-spacing: 0.8px;
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);
            background-color: #005baa;
            background-image: linear-gradient(45deg, #005baa, #000000);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
        }

        main>div hr {
            display: block;
            background: #005baa;
            height: 0.25rem;
            width: 6.25rem;
            border: none;
            margin: 1.125rem 0 1.875rem 0;
        }

        main>div p {
            line-height: 1.6;
        }

        main a {
            display: inline-block;
            text-decoration: none;
            text-transform: uppercase;
            color: #717171;
            font-weight: 500;
            background: #fff;
            border-radius: 3.125rem;
            transition: 0.3s ease-in-out;
        }

        main .primary-button {
            display: inline-block;
            text-decoration: none;
            text-transform: uppercase;
            color: white;
            font-weight: 500;
            background: #005fbc;
            border-radius: 3.125rem;
            transition: 0.3s ease-in-out;
            border: none;
        }

        main .primary-button:hover {
            color: #005fbc;
            background-color: white;
        }

        main>div>a {
            border: 2px solid #c2c2c2;
            margin-top: 2.188rem;
            padding: 0.625rem 1.875rem;
        }

        main>div>a:hover {
            border: 0.125rem solid #005baa;
            color: #005baa;
        }

        .swiper {
            width: 100%;
            padding-top: 3.125rem;
        }

        .swiper-pagination-bullet,
        .swiper-pagination-bullet-active {
            background: #fff;
        }

        .swiper-pagination {
            bottom: 1.25rem !important;
        }

        .swiper-slide {
            width: 18.75rem;
            height: 28.125rem;
            display: flex;
            flex-direction: column;
            justify-content: end;
            align-items: self-start;
            border-radius: 16px;
        }

        .swiper-slide h2 {
            color: #fff;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-size: 1.4rem;
            line-height: 1.4;
            margin-bottom: 0.625rem;
            padding: 0 0 0 1.563rem;
            text-transform: uppercase;
        }

        .swiper-slide p {
            color: #dadada;
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            padding: 0 1.563rem;
            line-height: 1.6;
            font-size: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .swiper-slide a {
            margin: 1.25rem 1.563rem 3.438rem 1.563rem;
            padding: 0.438em 1.875rem;
            font-size: 0.9rem;
        }

        .swiper-slide a:hover {
            color: #005baa;
        }

        .swiper-slide div {
            display: none;
            opacity: 0;
            padding-bottom: 0.625rem;
        }

        .swiper-slide-active div {
            display: block;
            opacity: 1;
        }

        .swiper-slide--one {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("https://www.shutterstock.com/image-vector/application-smartphone-business-graph-analytics-260nw-1583248045.jpg") no-repeat 50% 50%/cover;
            border-radius: 16px;
        }

        .swiper-slide--two {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("https://sm.pcmag.com/pcmag_uk/gallery/t/the-best-f/the-best-free-software-for-2024_92a8.jpg") no-repeat 50% 50%/cover;
            border-radius: 16px;
        }

        .swiper-slide--three {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("https://dkreativo.es/wp-content/uploads/2023/04/software-a-medida.jpg") no-repeat 50% 50%/cover;
            border-radius: 16px;
        }

        .swiper-slide--four {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNIpa4SWsMio_D7A1xFAX087EwHSm3PD5Fb3MIBzlxOeSCJg1mSsFgT-4i6qDg-pJoiU0&usqp=CAU") no-repeat 50% 50%/cover;
            border-radius: 16px;
        }

        .swiper-slide--five {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("https://images.yourstory.com/cs/1/b3cc3444ab5e11e88691f70342131e20/Whatissoftwareandtypesofsoftwarewithexamples1575272423828jpg") no-repeat 50% 50%/cover;
            border-radius: 16px;
        }

        .swiper-3d .swiper-slide-shadow-left,
        .swiper-3d .swiper-slide-shadow-right {
            background-image: none;
        }

        @media screen and (min-width: 48rem) {
            main {
                display: flex;
                align-items: center;
            }

            .bg,
            .bg2 {
                opacity: 0.1;
            }
        }

        @media screen and (min-width: 93.75rem) {
            .swiper {
                width: 85%;
            }
        }

        /* FOOTER SECTION STARTS */
        footer {
            display: flex;
            position: relative;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            margin: auto;
            width: 90%;
            height: 80px;
            border-radius: 15px 15px 0px 0px;
            padding: 0 25px;
            z-index: 2;
            background: #005baa;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        footer .footer-tg {
            color: white;
        }
    </style>
</head>

<body>
    <!-- !สำหรับ NavBar -->
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <span class="logo">Online Exhibition</span>
            </div>
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                        <li class="nav-tab">Home</li>
                        <li class="nav-tab">Products</li>
                        <li class="nav-tab">Services</li>
                        <li class="nav-tab">FAQ</li>
                        <li class="nav-tab">Contact</li>
                        <li class="nav-tab">Careers</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- !สำหรับ NavBar -->

    <!-- !สำหรับ Content Text หน้าหลักและ  ปุ่มล็อกอิน และปุ่มสมัคร -->
    <main>
        <div>
            <h1>Online Exhibition</h1>
            <hr>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta cupiditate eos velit provident, cumque
                harum molestias nisi dolore nemo fugiat repellendus, deserunt corrupti fuga consequuntur.</p>
            <a href="#" class ="primary-button">SIGN IN</a>
            <a href="#">SIGN UP</a>
        </div>
        <!-- !สำหรับ Content Text หน้าหลักและ  ปุ่มล็อกอิน และปุ่มสมัคร -->

        <!-- !สำหรับแสดง รูปที่เป็นสไลด์-->
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide--one">
                    <div>
                        <h2>ผลงานที่ 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo quidem tenetur ea sunt
                            culpa reiciendis ex fuga minima consectetur veritatis.</p>
                        <a href="#" target="_blank">View</a>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--two">
                    <div>
                        <h2>ผลงานที่ 2</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tenetur quasi dicta, itaque
                            necessitatibus eligendi repellendus quia quas velit aliquid quis assumenda nam debitis,
                            accusantium ipsum optio dignissimos, illo fugiat!
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Seahorse" target="_blank">View</a>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--three">

                    <div>
                        <h2>ผลงานที่ 3</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam qui animi distinctio
                            praesentium inventore alias quis repellendus, error, et nihil possimus suscipit odio quam?
                            Dolorum.
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">View</a>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--four">

                    <div>
                        <h2>ผลงานที่ 4</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque recusandae eligendi
                            consequuntur dignissimos perferendis quisquam qui suscipit non maiores repudiandae, nobis
                            explicabo architecto harum nemo perspiciatis accusantium labore distinctio velit.
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Shark" target="_blank">View</a>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--five">

                    <div>
                        <h2>ผลงานที่ 5</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta officiis officia sit culpa
                            recusandae eos animi amet consectetur harum nostrum!
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Dolphin" target="_blank">View</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- !สำหรับแสดง รูปที่เป็นสไลด์-->

    </main>
    <footer>
        <p class="footer-tg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident.</p>
    </footer>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>
    <script src="./script.js"></script>
    <script src="./script.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 3,
                slideShadows: true
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 2
                },
                1560: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>

</html>
