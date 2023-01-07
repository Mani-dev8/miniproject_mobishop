@extends('welcome')
@section('content')

<section class="dark:bg-zinc-900 ">
    <div class="lg:flex w-full lg:h-[500px] xl:h-[520px]  md:h-80 sm:h-64 h-52    py-2 px-4 lg:px-16 mb-10 pt-16">
        <div class="lg:w-3/12 lg:h-full lg:flex lg:flex-col hidden justify-between relative mr-1  ">
            <div class="w-full  flex  h-[32%] lg:scale-x-90  bg-red-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png " class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-red-500 hover:text-red-300 mt-1 hover:underline ">
                            Shop now >
                        </button>
                </div>
            </div>
            <div class="w-full flex  h-[32%]   lg:scale-x-90 bg-blue-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png " class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-blue-500 hover:text-blue-300 mt-1 hover:underline ">
                            Shop now 👉 
                        </button>
                </div>
            </div>
            <div class="w-full flex  h-[32%]  lg:scale-x-90 bg-green-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png " class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-green-500 hover:text-green-300 mt-1 hover:underline ">
                            Shop now >
                        </button>
                </div>
            </div>
        </div>
        <div class="lg:w-9/12 w-full h-full min-h-[170px] sm:min-h-[210px] swiper swipeBanner  ">

            <div class=" h-full w-full relative swiper-wrapper">
                <!-- 
                        <div class="absolute flex a w-full h-full bg-blue-400">
                            <div class="w-1/2 ">

                            </div>
                            <div class="w-1/2 ">

                            </div>
                        </div> 
                        -->
                <div class="swiper-slide  w-full dark:md:bg-gray-500 dark:md:bg-opacity-10 flex  dark:text-white">
                    <div class="w-1/2  group      ">
                        <div class=" lg:mt-40 xl:mt-48 md:mt-14 sm:mt-10 mt-6 xl:pl-28 lg:pl-20 md:pl-14 sm:pl-10 pl-5 ">
                            <h1 class="font-thin text-sm sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text tracking-wide  m-auto mb-2 ">Check our huge</h1>
                            <h1 class="font-semibold text-2xl sm:text-3xl  md:text-4xl tracking-wide lg:text-5xl xl:text-6xl  m-auto mb-2">Smartphones</h1>
                            <h1 class="font-thin md:text-sm lg:text-base xl:text-lg text-xs  m-auto">& Accessories collection</h1>
                            <button type="submit " class="bg-gray-800 mt-4 group-hover:scale-110 text-white transition-all group-hover:ring border border-transparent group-hover:border-gray-50  group-hover:ring-gray-500 w-fit md:p-1 active:opacity-80
                                    dark:text-black dark:bg-gray-50 dark:group-hover:border-gray-800 dark:group-hover:ring-gray-300
                                    
                                    ">
                                <h1 class="w-fit border border-transparent text-center p-1 sm:text-base text-sm"> Shop Now ></h1>
                            </button>
                        </div>

                    </div>
                    <div class="w-1/2 h-full  flex flex-row items-center">
                        <img src="banner\phone-banner-PhotoRoom.png-PhotoRoom.png" class="h-full m-auto  lg:h-96" alt="" srcset="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=" lg:hidden lg:justify-evenly flex flex-row   ml-[5vw]  sm:ml-[7.5vw] sm:w-[85vw]  overflow-scroll select-none  ">
        <div class="pt-2 pl-2 flex flex-row  sm:w-1/3 min-w-fit  scale-90 bg-red-300 bg-opacity-20">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="h-32 w-32 xs:h-36 xs:w-36 " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500 ">Next Gen</h1>
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500  "><span class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class=" text-red-500 hover:text-red-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>
        <div class="pt-2 pl-2 flex flex-row  sm:w-1/3 min-w-fit  scale-90 bg-blue-300 bg-opacity-20">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="h-32 w-32 xs:h-36 xs:w-36 " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500 ">Next Gen</h1>
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500  "><span class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class=" text-blue-500 hover:text-blue-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>
        <div class="pt-2 pl-2 flex flex-row  sm:w-1/3 min-w-fit  scale-90 bg-green-300 bg-opacity-20">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="h-32 w-32 xs:h-36 xs:w-36 " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500 ">Next Gen</h1>
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500  "><span class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class=" text-green-500 hover:text-green-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>


    </div>
    <!-- PRODUCT-ITEM-SECTION-START -->
    <div class="pt-2 px-10 sm:px-16 group/pro mb-16 border ">
        <div class="flex mt-6 mb-3 flex-row justify-between before:absolute ">
            <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/pro:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900 before:absolute before:w-[90vw] before:h-[0.5px] before:mb-[1px] before:bg-zinc-500 md:before:-bottom-6 before:-bottom-4  before:-z-0">Trending</span> Products</span></div>
            <button class="z-20 border h-fit hover:ring hover:ring-gray-700 dark:hover:ring dark:hover:ring-gray-50 border-transparent hover:border-white dark:hover:border-black flex flex-row px-2 dark:text-zinc-300 active:opacity-80 dark:active:ring-2 lg:py-1  dark:active:ring-gray-400 text-white dark:bg-zinc-700 bg-gray-700 text-center font-thin sm:text-base text-sm py-0.5">More <span class="md:block hidden mx-1">products</span>></button>
        </div>
        <div class="grid grid-cols-2 gap-2 mb-20  lg:gap-6 sm:grid-cols-3 md:grid-cols-4">
            <div class="w-full group hover:z-30 hover:bg-gray-100 dark:hover:bg-gray-200  dark:hover:bg-opacity-20 h-fit dark:text-white relative">
                <div class="absolute -left-1 top-3 px-2 h-7 text-xs bg-red-500 text text-white font-rubic text-center flex items-center lg:text-sm font-bold"> <span class="m-auto">50% off</span></div>
                <button class="absolute right-1 top-1 lg:m-3 sm:m-2">
                    <input type="checkbox" name="" class="peer opacity-0 absolute top-0.5 right-0.5 w-full h-full z-10" id="">
                    <svg class="absolute hidden dark:block text-xl dark:peer-checked:opacity-0 dark:opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="25" height="25">
                        <path d="M48.6 85.4 15.7 52.8c-1.4-1.3-2.5-2.8-3.5-4.4-5.4-8.9-4-20.3 3.5-27.7C20 16.4 25.8 14 31.9 14c9.6 0 15.6 5.6 18.1 8.8 2.5-3.2 8.5-8.8 18.1-8.8 6.1 0 11.9 2.4 16.2 6.7 7.4 7.4 8.9 18.8 3.5 27.7-1 1.6-2.1 3.1-3.5 4.4L51.4 85.4c-.8.8-2 .8-2.8 0zM31.9 18c-5.1 0-9.8 2-13.4 5.5-6.1 6.1-7.3 15.5-2.9 22.8.8 1.3 1.8 2.6 2.9 3.7L50 81.2 81.5 50c1.1-1.1 2.1-2.3 2.9-3.7 4.4-7.4 3.3-16.8-2.9-22.8C77.9 20 73.1 18 68.1 18c-7.2 0-13.2 3.9-16.4 9.3-.8 1.3-2.7 1.3-3.5 0-3.1-5.4-9.1-9.3-16.3-9.3z" fill="#fff" class="color000 svgShape"></path>
                        <path fill="#0000ff" d="M944-370v1684H-840V-370H944m8-8H-848v1700H952V-378z" class="color00F svgShape"></path>
                    </svg>
                    <svg class="absolute dark:hidden block peer-checked:opacity-0 opacity-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="25" height="25">
                        <path d="M48.6 85.4 15.7 52.8c-1.4-1.3-2.5-2.8-3.5-4.4-5.4-8.9-4-20.3 3.5-27.7C20 16.4 25.8 14 31.9 14c9.6 0 15.6 5.6 18.1 8.8 2.5-3.2 8.5-8.8 18.1-8.8 6.1 0 11.9 2.4 16.2 6.7 7.4 7.4 8.9 18.8 3.5 27.7-1 1.6-2.1 3.1-3.5 4.4L51.4 85.4c-.8.8-2 .8-2.8 0zM31.9 18c-5.1 0-9.8 2-13.4 5.5-6.1 6.1-7.3 15.5-2.9 22.8.8 1.3 1.8 2.6 2.9 3.7L50 81.2 81.5 50c1.1-1.1 2.1-2.3 2.9-3.7 4.4-7.4 3.3-16.8-2.9-22.8C77.9 20 73.1 18 68.1 18c-7.2 0-13.2 3.9-16.4 9.3-.8 1.3-2.7 1.3-3.5 0-3.1-5.4-9.1-9.3-16.3-9.3z" fill="#000" class="color000 svgShape"></path>
                        <path fill="#0000ff" d="M944-370v1684H-840V-370H944m8-8H-848v1700H952V-378z" class="color00F svgShape"></path>
                    </svg>
                    <svg class=" peer-checked:opacity-100 opacity-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="25" height="25">
                        <path fill="#f05542" d="M5.301 3.002c-.889-.047-1.759.247-2.404.893-1.29 1.292-1.175 3.49.26 4.926l.515.515L8.332 14l4.659-4.664.515-.515c1.435-1.437 1.55-3.634.26-4.926-1.29-1.292-3.483-1.175-4.918.262l-.516.517-.517-.517C7.098 3.438 6.19 3.049 5.3 3.002z" class="colorf05542 svgShape"></path>
                    </svg>
                </button>
                <img src="iphonex.png " alt="" srcset="">
                <div class="p-2 px-5 font-rubic">
                    <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                    <h1 class="text-sm  sm:text-base ">iPhone X</h1>
                    <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-bold ">$549</h1>

                </div>
                <div class="transition-all hidden md:block dark:group-focus::bg-gray-200 delay-100 text-center h-0 overflow-hidden absolute   group-hover:h-20  group-hover:bg-gray-100 dark:group-hover:bg-gray-200 dark:group-hover:bg-opacity-20   w-full ">
                    <button type="submit " class="uppercase  border w-10/12 py-1 text-sm dark:bg-gray-200 bg-gray-800 text-white dark:text-black "> Add to Cart</button>
                    <button type="submit " class="uppercase  mt-2 border w-10/12 py-1 text-sm  dark:text-white text-black border-gray-600 dark:border-gray-200"> Add to Cart</button>
                </div>
            </div>


        </div>
    </div>
    <!-- LIMITED -DEALS START -->
    <div class="w-full border font-rubic dark:text-white py-2 px-10 sm:px-16 ">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/pro:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900     before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] before:bg-zinc-500 md:before:-bottom-6 before:-bottom-4  before:-z-0  ">Newly released</span> Smartphones</span></div>
    </div>
    <div class="flex flex-row py-2 px-10 sm:px-16 group ">
        <div class="w-1/2   flex flex-row justify-end items-baseline md:mb-24 mb-16 ">
            <img src="limited/limited-nothing.png" class="h-[30vw] lg:h-96 mt-5 " alt="" srcset="">
        </div>
        <div class="w-1/2 h-auto md:pt-10 flex flex-col justify-evenly dark:text-white">

            <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-6xl font-semibold font-mono  ">
                Phone (1)
            </h1>
            <h1 class="xs:text-xs text-[9px] sm:text-sm md:text-base overflow-hidden lg:text-lg xl:text-xl md:w-80 lg:w-96">
                Less distractions. More soul.
                Just pure instinct, formed as a machine.
                Phone (1) can bring us back. To us.
            </h1>
            <button type="submit " class="bg-gray-800 mt-4 group-hover:scale-110 text-white transition-all group-hover:ring border border-transparent group-hover:border-gray-50  group-hover:ring-gray-500 w-fit md:p-1 active:opacity-80 group-hover:animate-bounce
                                    dark:text-black dark:bg-gray-50 dark:group-hover:border-gray-800 dark:group-hover:ring-gray-300
                                    
                                    ">
                <h1 class="w-fit border border-transparent text-center sm:p-1 p-0.5 sm:text-base text-xs "> Shop Now ></h1>
            </button>

        </div>
    </div>
    <!-- SHOP-BY-BRAND -->
    <div class="w-full px-5 py-2 xs:px-10 sm:px-16 md:mb-24 mb-16 group/brand">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/brand:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900 before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] dark:before:bg-zinc-500 before:bg-zinc-300 md:before:-bottom-6 before:-bottom-4  before:-z-0 ">Shop by</span> Brand</span></div>
        <div class="border   overflow-scroll ">

            <div class="flex flex-row justify-between w-full h-64 border">
                <div class="h-full max-w-[800px] bg-zinc-700 border">
                    <img src="iphonex.png" alt="" srcset="">
                </div>
                <div class="h-full max-w-[800px] border bg-zinc-700">
                    <img src="iphonex.png" alt="" srcset="">
                </div>
                <div class="h-full max-w-[800px] border bg-zinc-700">
                    <img src="iphonex.png" alt="" srcset="">
                </div>
            </div>

        </div>
    </div>
    <!-- BESTSELLER-NEWARRIVAL-TOPRATED -->
    <div class="w-full px-5 py-2 xs:px-10 sm:px-16">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/pro:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900 before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] before:bg-zinc-500 md:before:-bottom-6 before:-bottom-4  before:-z-0 ">Newly released</span> Smartphones</span></div>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            <div class="best-seller group mx-1">

                <div class="flex flex-row my-1 dark:bg-gray-50 cursor-pointer dark:bg-opacity-0 dark:hover:bg-opacity-20">
                    <img src="iphonex.png" alt="" srcset="" class="h-20">

                    <div class="flex flex-col justify-center">
                        <h1 class=" text-xs sm:text-sm md:text-base font-semibold dark:text-white  ">Samsung a52 5g</h1>
                        <div class="text-sm sm:text-base text-red-500 dark:text-red-300 md:text-lg">$499</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection