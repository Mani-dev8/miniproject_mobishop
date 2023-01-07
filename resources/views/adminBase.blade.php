<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- GOOGLE-FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *:focus {
            outline: none;
        }

        * {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }
    </style>
    <title>Document</title>
</head>

<body class="w-[100vw] h-[100vh] font-rubic dar  ">
    <div class="dark:bg-zinc-900 h-full border ">
        <div class="flex h-full overflow-x-hidden">
            <div class="hidden xs:block h-full">
                <input type="checkbox" checked name="nav-toggle" id="" class="absolute w-10 h-10 z-20 peer/nav left-60 checked:left-0 opacity-0">
                <div class="absolute dark:text-white text-2xl left-60 top-2 m-2 peer-checked/nav:opacity-0">
                    <i class="fa-solid fa-circle-xmark "></i>
                </div>
                <div class="absolute dark:text-white text-xl left-2 top-2  m-2 peer-checked/nav:opacity-100 opacity-0">
                    <i class="fa-solid fa-bars "></i>
                </div>
                <div class="h-36 w-24 absolute  m-auto left-24 mt-10 rounded-full overflow-hidden peer-checked/nav:opacity-0">
                    <div class="h-24 w-24 overflow-hidden rounded-full border">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMJ4u2oBiaNxB-N3HCFTQR9e33O8ftn3B4dA&usqp=CAU" alt="" srcset="">
                    </div>
                    <h1 class="dark:text-white text-zinc-900 text-center uppercase mt-0.5">Mike</h1>
                    <h1 class="dark:text-zinc-300 text-zinc-400 text-center text-sm -mt-1">admin</h1>
                </div>
                <div class="h-full peer-checked/nav:w-12  rounded-tr-lg rounded-br-lg peer-checked/nav:transition-all w-72 overflow-hidden dark:bg-zinc-700 bg-zinc-100 text-white dark:text-white peer-checked/nav:pt-20 pt-52 ">

                    <div class="w-full h-14  relative  ">
                        <input type="radio" checked name="button" id="" class="w-full h-full absolute opacity-0 z-10 peer/mdbutton">
                        <div class="absolute h-full w-full peer-checked/mdbutton:transition-all  peer-checked/mdbutton:before:z-10 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 dark:bg-zinc-700 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-700 peer-checked/mdbutton:before:bg-zinc-100  peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:rounded-br-full peer-checked/mdbutton:after:z-20 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5  peer-checked/mdbutton:after:h-5 dark:peer-checked/mdbutton:after:bg-zinc-700 peer-checked/mdbutton:after:bg-zinc-100 peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:after:rounded-tr-full  ">
                        </div>
                        <div class="flex  flex-row h-full absolute  dark:peer-checked/mdbutton:bg-zinc-900   peer-checked/mdbutton:bg-white items-center rounded-l-full pl-4 w-11/12 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-900 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:-z-0  right-0 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5 peer-checked/mdbutton:after:h-5  dark:peer-checked/mdbutton:after:bg-zinc-900 peer-checked/mdbutton:after:bg-white peer-checked/mdbutton:before:bg-white peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:text-zinc-700 dark:peer-checked/mdbutton:text-white peer-checked/mdbutton:after:z-10  peer-checked/nav:text-zinc-900 text-zinc-400 dark:text-zinc-400 dark:peer-checked/nav:text-white">
                            <i class="fa-solid fa-house   mr-4"></i>
                            <h4 class="">Home</h4>
                        </div>
                    </div>
                    <div class="w-full h-14  relative  ">
                        <input type="radio" name="button" id="" class="w-full h-full absolute opacity-0 z-10 peer/mdbutton">
                        <div class="absolute h-full w-full peer-checked/mdbutton:transition-all  peer-checked/mdbutton:before:z-10 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 dark:bg-zinc-700 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-700 peer-checked/mdbutton:before:bg-zinc-100 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:rounded-br-full peer-checked/mdbutton:after:z-20 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5  peer-checked/mdbutton:after:h-5 dark:peer-checked/mdbutton:after:bg-zinc-700 peer-checked/mdbutton:after:bg-zinc-100 peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:after:rounded-tr-full  ">
                        </div>
                        <div class="flex  flex-row h-full absolute  dark:peer-checked/mdbutton:bg-zinc-900 peer-checked/mdbutton:bg-white items-center rounded-l-full pl-4 w-11/12 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-900 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:-z-0  right-0 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5 peer-checked/mdbutton:after:h-5  dark:peer-checked/mdbutton:after:bg-zinc-900 peer-checked/mdbutton:after:bg-white peer-checked/mdbutton:before:bg-white peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:text-zinc-700 dark:peer-checked/mdbutton:text-white peer-checked/mdbutton:after:z-10  peer-checked/nav:text-zinc-900 text-zinc-400 dark:text-zinc-400 dark:peer-checked/nav:text-white">
                            <i class="fa-solid fa-list-ul mr-4 "></i>
                            <h4 class="">Summary</h4>
                        </div>
                    </div>
                    <div class="w-full h-14  relative  ">
                        <input type="radio" name="button" id="" class="w-full h-full absolute opacity-0 z-10 peer/mdbutton">
                        <div class="absolute h-full w-full peer-checked/mdbutton:transition-all  peer-checked/mdbutton:before:z-10 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 dark:bg-zinc-700 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-700 peer-checked/mdbutton:before:bg-zinc-100 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:rounded-br-full peer-checked/mdbutton:after:z-20 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5  peer-checked/mdbutton:after:h-5 dark:peer-checked/mdbutton:after:bg-zinc-700 peer-checked/mdbutton:after:bg-zinc-100 peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:after:rounded-tr-full  ">
                        </div>
                        <div class="flex  flex-row h-full absolute  dark:peer-checked/mdbutton:bg-zinc-900 peer-checked/mdbutton:bg-white items-center rounded-l-full pl-4 w-11/12 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-900 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:-z-0  right-0 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5 peer-checked/mdbutton:after:h-5  dark:peer-checked/mdbutton:after:bg-zinc-900 peer-checked/mdbutton:after:bg-white peer-checked/mdbutton:before:bg-white peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:text-zinc-700 dark:peer-checked/mdbutton:text-white peer-checked/mdbutton:after:z-10  peer-checked/nav:text-zinc-900 text-zinc-400 dark:text-zinc-400 dark:peer-checked/nav:text-white">
                            <i class="fa-solid fa-box-open mr-4 "></i>
                            <h4 class="">Products</h4>
                        </div>
                    </div>
                    <div class="w-full h-14  relative  ">
                        <input type="radio" name="button" id="" class="w-full h-full absolute opacity-0 z-10 peer/mdbutton">
                        <div class="absolute h-full w-full peer-checked/mdbutton:transition-all  peer-checked/mdbutton:before:z-10 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 dark:bg-zinc-700 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-700 peer-checked/mdbutton:before:bg-zinc-100 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:rounded-br-full peer-checked/mdbutton:after:z-20 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5  peer-checked/mdbutton:after:h-5 dark:peer-checked/mdbutton:after:bg-zinc-700 peer-checked/mdbutton:after:bg-zinc-100 peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:after:rounded-tr-full  ">
                        </div>
                        <div class="flex  flex-row h-full absolute  dark:peer-checked/mdbutton:bg-zinc-900 peer-checked/mdbutton:bg-white items-center rounded-l-full pl-4 w-11/12 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-900 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:-z-0  right-0 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5 peer-checked/mdbutton:after:h-5  dark:peer-checked/mdbutton:after:bg-zinc-900 peer-checked/mdbutton:after:bg-white peer-checked/mdbutton:before:bg-white peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:text-zinc-700 dark:peer-checked/mdbutton:text-white peer-checked/mdbutton:after:z-10  peer-checked/nav:text-zinc-900 text-zinc-400 dark:text-zinc-400 dark:peer-checked/nav:text-white">
                            <i class="fa-solid fa-user mr-4 "></i>
                            <h4 class="">Accounts</h4>
                        </div>
                    </div>
                    <div class="w-full h-14  relative  ">
                        <input type="radio" name="button" id="" class="w-full h-full absolute opacity-0 z-10 peer/mdbutton">
                        <div class="absolute h-full w-full peer-checked/mdbutton:transition-all  peer-checked/mdbutton:before:z-10 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 dark:bg-zinc-700 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-700 peer-checked/mdbutton:before:bg-zinc-100 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:rounded-br-full peer-checked/mdbutton:after:z-20 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5  peer-checked/mdbutton:after:h-5 dark:peer-checked/mdbutton:after:bg-zinc-700 peer-checked/mdbutton:after:bg-zinc-100 peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:after:rounded-tr-full  ">
                        </div>
                        <div class="flex  flex-row h-full absolute  dark:peer-checked/mdbutton:bg-zinc-900 peer-checked/mdbutton:bg-white items-center rounded-l-full pl-4 w-11/12 peer-checked/mdbutton:before:absolute peer-checked/mdbutton:before:w-5 peer-checked/mdbutton:before:h-5 dark:peer-checked/mdbutton:before:bg-zinc-900 peer-checked/mdbutton:before:right-0 peer-checked/mdbutton:before:-top-5 peer-checked/mdbutton:before:-z-0  right-0 peer-checked/mdbutton:after:absolute peer-checked/mdbutton:after:w-5 peer-checked/mdbutton:after:h-5  dark:peer-checked/mdbutton:after:bg-zinc-900 peer-checked/mdbutton:after:bg-white peer-checked/mdbutton:before:bg-white peer-checked/mdbutton:after:right-0 peer-checked/mdbutton:after:-bottom-5 peer-checked/mdbutton:text-zinc-700 dark:peer-checked/mdbutton:text-white peer-checked/mdbutton:after:z-10  peer-checked/nav:text-zinc-900 text-zinc-400 dark:text-zinc-400 dark:peer-checked/nav:text-white">
                            <i class="fa-solid fa-gear mr-4 "></i>
                            <h4 class="">Settings</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full h-full overflow-y-scroll  dark:text-white">
                <div class="search h-12 w-full flex flex-row items-center">
                    <div class="logo text-center mx-2">LOGO</div>
                    <form class="flex ml-2">
                        <input placeholder="search here" class="pl-4 w-[40vw] dark:border-zinc-600 text-sm  max-w-[400px] dark:bg-black  sm:h-8 h-7 m-auto rounded-full border"></input>
                        <button type="submit">

                        </button>
                    </form>
                </div>
                <div class="main-dashboard pl-2 py-4 ">
                    <div class="flex flex-row  pl-2  sm:h-36 lg:h-[200px] xl:h-[220px] sm:min-h-[120px]  max-w-[100vw] pr-3% xs:pr-[10%] sm:pr-[8%] md:pr-[5%] lg:pr-[5%]  items-center  overflow-scroll  ">

                        <button class="m-auto dark:hover:bg-violet-700 bg-gradient-to-r  active:opacity-50 hover:from-blue-500 hover:to-blue-800 from-blue-400 to-blue-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
                            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class=" text-zinc-300 group-hover:text-zinc-200">
                                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                                    1,239
                                </h1>
                                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
                            </div>
                            <i class="fa-solid fa-cubes md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
                        </button>
                        <button class="  bg-gradient-to-r m-auto  active:opacity-50 hover:from-teal-400 hover:to-teal-800 from-teal-400 to-teal-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
                            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class=" text-zinc-300 group-hover:text-zinc-200">
                                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                                    1,239
                                </h1>
                                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
                            </div>
                            <i class="fa-solid fa-cubes md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
                        </button>
                        <button class=" bg-gradient-to-r m-auto active:opacity-50 hover:from-amber-500 hover:to-amber-800 from-amber-400 to-amber-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
                            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
                            <div class=" text-zinc-300 group-hover:text-zinc-200">
                                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                                    1,239
                                </h1>
                                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
                            </div>
                            <i class="fa-solid fa-cubes md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
                        </button>

                    </div>
                    <div class="cart flex flex-col md:flex-row   w-full  ">
                        <canvas id="myLine" class="m-auto md:max-w-[60vw] mx-2 my-8 md:max-h-[300px] lg:max-h-[400px]  dark:bg-white bg-zinc-100 rounded"></canvas>
                        <canvas id="myChart" class="md:mx-2 m-auto lg:max-w-[400px] lg:max-h-[400px] md:max-w-[300px] md:max-h-[300px] max-w-[250px] max-h-[250px]    bg-zinc-100 dark:bg-white rounded "></canvas>
                    </div>

                </div>
                <div class="flex lg:flex-row flex-col order-history my-4  px-4 w-[100%]  mb-20">
                    <div class="flex flex-row justify-between items-center lg:w-3/5 w-[95%]">
                        <h1 class="md:text-lg font-bold text-sm lg:text-base">Order Histroy</h1>
                        <form action="" class="h-full flex flex-row items-center">

                            <button type="submit" name="view all" class="dark:bg-zinc-100 dark:hover:bg-zinc-200 dark:text-black bg-zinc-500 py-1 md:py-1.5 hover:bg-zinc-700 hover:shadow-none px-4 rounded-sm shadow-md shadow-zinc-500 sm:mr-2 text-white md:text-sm text-xs lg:text-xs">View All</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottom-navigation" class="absolute bottom-0 h-12  w-full xs:hidden bg-violet-600  dark:bg-zinc-600 grid grid-cols-5 text-white  ">
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-20 h-full opacity-0 peer/button">
                <div class="transition-all  w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-violet-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-house  "></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -right-3 -top-0.5 rounded-tl-lg z-10 "></div>
                <div class="absolute bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Home</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-20 h-full opacity-0 peer/button">
                <div class="transition-all  w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-violet-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -right-3 -top-0.5 rounded-tl-lg z-10 "></div>
                <div class="absolute bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Summary</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-20 h-full opacity-0 peer/button">
                <div class="transition-all  w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-violet-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -right-3 -top-0.5 rounded-tl-lg z-10 "></div>
                <div class="absolute bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Products</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-20 h-full opacity-0 peer/button">
                <div class="transition-all  w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-violet-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -right-3 -top-0.5 rounded-tl-lg z-10 "></div>
                <div class="absolute bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Account</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-20 h-full opacity-0 peer/button">
                <div class="transition-all  w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-violet-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-violet-600 -right-3 -top-0.5 rounded-tl-lg z-10 "></div>
                <div class="absolute bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Settings</div>
            </div>



        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        const cline = document.getElementById('myLine');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['total Sell  ', 'Delivered',
                    'Out of stock'
                ],
                datasets: [{

                    data: [100, 54, 3],
                    borderWidth: 0,
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54,162,235,1)',
                        'rgba(255,206,86,1)',
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Orders Chart'
                    }
                }
            }
        });
        new Chart(cline, {
            type: 'line',

            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                fontSize: 12,
                datasets: [{
                    label: 'Total Sells/Month',

                    data: [10, 30, 20, 40, 45, 40, 50, 55, 55, 60, 55, 65],
                    borderWidth: 2,
                    borderColor: '#56FE0D',
                    fill: true,
                    tension: 0.2,

                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            // This more specific font property overrides the global property
                            font: {
                                size: 8,
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Monthly Sells Chart'
                    }
                },
                scales: {



                    x: {
                        border: {
                            color: '#56FE0D'
                        },
                        grid: {
                            tickColor: '#56FE0D'
                        },
                        ticks: {

                        },
                        title: {
                            display: true,
                            text: 'Month'
                        },


                    },
                    y: {
                        border: {
                            color: '#56FE0D'
                        },
                        grid: {
                            tickColor: '#56FE0D'
                        },
                        ticks: {
                            fontSize: 0,
                        },
                        title: {
                            display: true,
                            text: 'Orders'
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>