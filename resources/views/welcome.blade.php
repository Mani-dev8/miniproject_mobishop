<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>MobiShop</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ZOOM -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.6.1/jquery.zoom.min.js" integrity="sha512-xhvWWTTHpLC+d+TEOSX2N0V4Se1989D03qp9ByRsiQsYcdKmQhQ8fsSTX3KLlzs0jF4dPmq0nIzvEc3jdYqKkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- FOOTER-ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FOOTER-STYLING-START -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;

            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */

        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .container {
            padding-top: 70px;
            max-width: 100%;
            margin: auto;
        }

        .row {

            display: flex;

            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            color: white;




        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {

            width: fit-content;


            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50%;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {

            text-transform: capitalize;

            text-decoration: none;
            font-weight: 300;



            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {



            padding-left: 8px;
        }

        .footer-col .social-links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            list-style: none;

        }

        .footer-col .social-links li {
            margin: 0 10px 0px 0px;
        }

        .footer-col .social-links .social {
            display: flex;
            flex-direction: row;
            height: 36px;
            width: 36px;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            margin: 0 10px 0px 0;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            transition: 0.5s ease;
            font-size: 30px;
            text-decoration: none;
            position: relative;
        }

        .footer-col .social-links .social:hover {
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-size: 40px;
        }

        .footer-col .social-icons .social::before {
            content: '';
            position: absolute;
            z-index: -1;
            height: 78px;
            width: 78px;

            border-radius: 50%;
            background: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            transform: scale(1);
            transition: 0.5s ease-in-out;
        }

        .footer-col .social-icons li .social:hover::before {
            transform: scale(8);

        }

        .fab {
            font-size: 20px
        }

        /*responsive*/
        @media(max-width:767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
                padding-left: 40px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 50%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        @media (max-width: 420px) {
            .footer-col {
                width: 100%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        *:focus {
            outline: none;
        }
    </style>
    <!-- Fonts -->

</head>

<body class="dar">

    <div>

        <!-- HEADER START-->
        <!-- DESKTOP -->
        <section class="dark:bg-zinc-900 px-4 xl:px-0 ">
            <div class="hidden md:flex py-6  xl:w-[90vw] w-auto m-auto  border-b dark:border-zinc-500">
                <a href="home">
                    <h1 class="font-bold text-2xl dark:text-gray-200 md:h-7  lg:h-8 ">MOBISHOP</h1>
                </a>
                <div class="hidden md:flex ">
                    <div class="relative w-full   " style="margin-left:1rem">
                        <div class="flex border ">
                            <div class=" pointer-events-none  absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg aria-hidden="true" class="h-5  w-5 text-gray-500 dark:text-gray-400  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="--darkreader-inline-fill: currentColor;" data-darkreader-inline-fill="">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input id="txtSearch" placeholder="Search Products" class="block md:text-xs   md:w-54 lg:w-64   dark:bg-gray-50  pl-10 text-sm dark:text-gray-900 focus:border-gray-400 focus:ring-2 dark:focus:ring-gray-300 border-gray-600 bg-gray-700 text-white   dark:placeholder-gray-400 dark:focus:border-gray-400  focus:ring-gray-600" style="margin:1px">

                            </input>

                            <button type="submit" class="md:h-7 active:opacity-70 md:w-7 lg:w-8 lg:h-8  m-auto  p-2 text-sm font-medium text-gray-100 bg-gray-900  border border-gray-900 rounded hover:bg-gray-700 hover:text-white focus:ring-2 dark:text-white focus:outline-none focus:ring-gray-300 dark:bg-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-400">
                                <svg class="md:w-4 lg:w-5 -ml-0.5 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="justify-between      w-full flex ">
                    <div class=" block ml-5 h-7 mt-0.5 lg:h-8 border  dark:hover:bg-gray-800 dark:hover:text-white hover:text-black dark:bg-gray-50 dark:border-gray-200 border-gray-800 relative pl-2">
                        <div class="flex  items-center  h-full w-28 mr-2 ">
                            <input type="checkbox" class=" h-full cursor-pointer w-28 absolute opacity-0 peer z-10" name="" id="">
                            <div class=" uppercase w-full cursor-pointer lg:text-sm  md:text-xs">All Category</div>
                            <div class="cursor-pointer peer-checked:rotate-180 md:text-xs lg:text-sm transition-all delay-75 mt-0.5">▲</div>
                            <div class=" peer-checked:border  border-black dark:border-gray-50    -left-0 flex-col mt-24 absolute w-full peer-checked:text-black peer-checked:h-fit h-0 overflow-hidden ">
                                <form action="selCategory" class="flex flex-col items-start bg-gray-50">
                                    <button type="submit" name="category" value="redmi" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left"> redmi</button>
                                    <button type="submit" name="category" value="oneplus" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left"> oneplus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="flex relative">
                            <div class="  w-8 ml-4 ">

                                <svg class="absolute bottom-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25">
                                    <path d="M24 8c-4.42 0-8 3.58-8 8 0 4.41 3.58 8 8 8s8-3.59 8-8c0-4.42-3.58-8-8-8zm0 20c-5.33 0-16 2.67-16 8v4h32v-4c0-5.33-10.67-8-16-8z" fill="#000000" class="color000 svgShape"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </svg>
                                <svg class="absolute opacity-0 dark:opacity-100 bottom-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25">
                                    <path d="M24 8c-4.42 0-8 3.58-8 8 0 4.41 3.58 8 8 8s8-3.59 8-8c0-4.42-3.58-8-8-8zm0 20c-5.33 0-16 2.67-16 8v4h32v-4c0-5.33-10.67-8-16-8z" fill="#ffff" class="color000 svgShape"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </svg>
                            </div>
                            <div class="block">
                                <h1 class=" font-thin dark:text-white text-xs lg:text-xs">Hello Sign In</h1>
                                <h1 class=" dark:text-white text-xs font-bold lg:text-xs">My Account</h1>
                            </div>
                        </div>
                        <button class="cart hover:border-red-400 border focus:border-red-400 active:opacity-80 border-transparent items-center bg-gray-200 dark:bg-gray-700 ml-4 p-0.5 justify-center align-middle justify-items-center  rounded-full w-8 h-8">
                            <div class="relative ml-0.5  w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25" class=" absolute  bottom-0 opacity-0 dark:opacity-100">
                                    <g fill="#134563" class="color134563 svgShape">
                                        <path d="M48.5 45.7H18.2c-.5 0-.9-.2-1.1-.6-.3-.4-.3-.9-.1-1.3l2.6-6.6L17 12.6H8.6V9.8h9.6c.7 0 1.3.5 1.4 1.2l2.8 26.1c0 .2 0 .4-.1.7l-2 5h28.2v2.9" fill="#fff" class="color000 svgShape"></path>
                                        <path d="m21.3 38.8-.6-2.7 31.9-6.6V18.2h-33v-2.8H54c.8 0 1.4.6 1.4 1.4v13.8c0 .7-.5 1.2-1.1 1.3l-33 6.9M49.9 54c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5 5.5 2.5 5.5 5.5-2.5 5.5-5.5 5.5zm0-8.3c-1.5 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.3-2.8-2.8-2.8zm-33 8.3c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5 5.5 2.5 5.5 5.5-2.5 5.5-5.5 5.5zm0-8.3c-1.5 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.3-2.8-2.8-2.8z" fill="#fff" class="color000 svgShape"></path>
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25" class=" absolute  bottom-0 opacity-100 dark:opacity-0">
                                    <g fill="#134563" class="color134563 svgShape">
                                        <path d="M48.5 45.7H18.2c-.5 0-.9-.2-1.1-.6-.3-.4-.3-.9-.1-1.3l2.6-6.6L17 12.6H8.6V9.8h9.6c.7 0 1.3.5 1.4 1.2l2.8 26.1c0 .2 0 .4-.1.7l-2 5h28.2v2.9" fill="#000" class="color000 svgShape"></path>
                                        <path d="m21.3 38.8-.6-2.7 31.9-6.6V18.2h-33v-2.8H54c.8 0 1.4.6 1.4 1.4v13.8c0 .7-.5 1.2-1.1 1.3l-33 6.9M49.9 54c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5 5.5 2.5 5.5 5.5-2.5 5.5-5.5 5.5zm0-8.3c-1.5 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.3-2.8-2.8-2.8zm-33 8.3c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5 5.5 2.5 5.5 5.5-2.5 5.5-5.5 5.5zm0-8.3c-1.5 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.3-2.8-2.8-2.8z" fill="#000" class="color000 svgShape"></path>
                                    </g>
                                </svg>
                                <div class="absolute -top-1 -right-1 rounded-full h-4 w-4 bg-red-500  text-center   text-white overflow-hidden font-thin" style="font-size: 9.5px;">
                                    <h1 class="m-auto " style="margin-top: 1px;">100</h1>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- DESKTOP -->
        <!-- HEADER END -->
        @yield('content')
        <!-- HERO-START -->

        <!-- HERO-END -->

        <!-- FOOTER-SECTION-START -->
        <footer class="footer  dark:bg-black ">
            <div class="container md:pl-6 lg:pl-12   bg-opacity-10 dark:bg-opacity-10">
                <div class="row">
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">company</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">about us</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">our services</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">privacy policy</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">get help</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">FAQ</a></li>
                            <li><a href="#" class="text-xs sm:text-sm  md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black ">shipping</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">returns</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">order status</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">online shop</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">watch</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">bag</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">shoes</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">follow us</h4>

                        <div class="social-links">
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class=" social text-xs sm:text-sm md:text-base"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Facebook</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Tweeter</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Instagram</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex flex-row group my-1  items-center ">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Linkedin</a>

                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <!-- DARK-MODE END -->


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        // var swiper = new Swiper(".swipeBanner", {
        //     slidesPerView: 1,
        //     spaceBetween: 30,
        //     loop: true,
        //     autoplay: {
        //         delay: 2500,
        //         disableOnInteraction: false,
        //     },
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     }
        // });
        $('.imgzoom').zoom({
            on: 'grab',
            zoom_area_width: 600,
            autoplay_interval: 3000,

        })
    </script>

</body>


</html>