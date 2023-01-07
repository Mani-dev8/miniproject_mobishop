@extends('welcome')
@section('content')
<section class="shop w-full dark:bg-black  ">
    <div class="w-full dark:bg-gray-50 bg-black">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between border-b ">

                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">Shop</h1>
                <div class="flex ">
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <div class="relative mr-7  ">
                            <i class="fa-sharp fa-solid fa-house -mr-6 text-sm md:text-base  dark:text-black text-white "></i>
                        </div>
                        <span class="text-sm md:text-base">Home</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <span class="text-sm md:text-base">Shop</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                </div>
            </div>
            <div class="h-1/2 w-full  flex flex-row ">
                <div class="lg:min-w-[330px] xl:w-1/3"></div>
                <div class="lg:w-2/3 w-full flex justify-between items-center text-center">
                    <div class="flex items-center ">
                        <h1 class="font-thin text-white dark:text-black mr-2 lg:text-sm  xs:text-xs text-[9px]">Sort by</h1>
                        <div class="flex relative  items-center dark:bg-black bg-white p-1 w-fit  ">
                            <input type="checkbox" class=" h-full cursor-pointer  w-full  absolute opacity-0 peer z-10" name="" id="">
                            <div class=" uppercase w-full cursor-pointer lg:text-sm xs:text-xs text-[9px]  dark:text-gray-300 text-gray-500 mr-2 ">low -high price</div>
                            <div class="cursor-pointer peer-checked:rotate-180 text-[10px] dark:text-white lg:text-xs   mt-0.5">▲</div>
                            <div class=" peer-checked:border    border-black dark:border-gray-50    -left-0 flex-col mt-24 absolute w-full   peer-checked:text-black peer-checked:h-fit h-0 overflow-hidden ">
                                <form action="selCategory" class="flex  flex-col items-start bg-gray-50 ">
                                    <button type="submit" name="category" value="redmi" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left lg:text-sm xs:text-xs text-[9px]"> low-high price</button>
                                    <button type="submit" name="category" value="oneplus" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left lg:text-sm xs:text-xs text-[9px]"> oneplus</button>
                                </form>
                            </div>
                        </div>
                        <span class="dark:text-black text-white font-thin lg:text-sm  xs:text-xs text-[8px]"> &nbsp;of 28 products</span>
                    </div>
                    <div class="flex  h-fit flex-row items-center text-center">
                        <button class="text-gray-400 text-2xl font-thin active:opacity-50 dark:hover:text-black hover:font-normal mx-3">
                            &lt;
                        </button>
                        <h1 class=" text-sm tracking-widest text-white dark:text-black font-mono">4/5</h1>
                        <button class="text-gray-400 text-2xl font-thin active:opacity-50 dark:hover:text-black hover:font-normal mx-3">&gt;</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="flex  xl:w-[1280px] w-auto flex-row m-auto px-4 xl:px-0">
            <div class="w-3/12 min-w-[300px] hidden lg:block transition-all -mt-24 p-4  group/category  bg-white  dark:bg-black shadow-lg  dark:shadow-gray-700">
                <div class="dark:text-white group-hover/category:text-red-500  text-black font-semibold ">Categories
                </div>
                <div class="w-full">
                    <!-- relative  before:rounded-lg before:absolute dark:before:bg-gray-600  before:w-full before:h-[1px] before:bottom-0 -->

                    <div class="flex w-full     transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                        <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="radio" name="category" id="">

                        <div class="peer-checked:h-auto h-4">
                            <h1 class=" absolute dark:text-white text-sm  peer-hover:text-red-400 peer-hover:underline ">Smartphone</h1>
                            <h1 class="dark:text-white absolute right-2 font-thin  rotate-180 scale-x-150 peer-checked:rotate-0 peer-hover:text-red-400 ">^</h1>
                        </div>


                        <div class=" hidden  absoute peer-checked:mt-4 pt-3   transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2   ">
                            <div class="w-full items-center relative mt-4 flex h-8 ">
                                <input type="text" class="w-full focus:outline-none  border h-full bg-transparent dark:text-white px-2">
                                <i class="dark:text-white text-black  absolute fa-solid fa-magnifying-glass right-2"></i>
                                </input>
                            </div>
                            <div class="px-2 group mt-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group mt-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group mt-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group mt-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="w-full pb-2">
                    <div class="flex w-full  transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                        <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="radio" name="category" id="">

                        <h1 class=" absolute dark:text-white text-sm  peer-hover:text-red-400 peer-hover:underline ">Smartphone</h1>
                        <h1 class="dark:text-white absolute right-2 font-thin  rotate-180 scale-x-150 peer-checked:rotate-0 peer-hover:text-red-400 ">^</h1>


                        <div class="mb-4 hidden  absoute peer-checked:mt-4 pt-3   transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2 ">
                            <div class="w-full items-center relative mt-4 flex h-8 ">
                                <input type="text" class="w-full  border h-full bg-transparent dark:text-white px-2">
                                <i class="dark:text-white text-black absolute fa-solid fa-magnifying-glass right-2"></i>
                                </input>
                            </div>
                            <div class="px-2 group my-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group my-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group my-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                            <div class="px-2 group my-3 flex justify-between">
                                <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="lg:w-8/12 w-full m-auto  mt-12  grid grid-cols-2 md:grid-cols-3">
                <div class="w-full group hover:z-30 hover:bg-gray-100 dark:hover:bg-zinc-900   h-fit dark:text-white relative">
                    <button class="absolute  right-1 top-1 lg:m-3 sm:m-2">
                        <input type="checkbox" name="" class="peer opacity-0 absolute  top-0.5 right-0.5 h-5 w-5 z-10" id="">
                        <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>


                        <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
                        </input>
                    </button>
                    <img src="iphonex.png " alt="" srcset="">
                    <div class="p-2 px-5">
                        <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                        <h1 class="text-sm  sm:text-base ">iPhone X</h1>
                        <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-bold font-mono">$549</h1>

                    </div>
                    <div class="transition-all hidden md:block dark:group-focus::bg-gray-200 delay-100 text-center h-0 overflow-hidden absolute   group-hover:h-20  group-hover:bg-gray-100  z-10 dark:group-hover:bg-zinc-900    w-full ">
                        <button type="submit " class="uppercase  border w-10/12 py-1 text-sm dark:bg-gray-200 bg-gray-800 text-white dark:text-black "> Add to Cart</button>
                        <button type="submit " class="uppercase  mt-2 border w-10/12 py-1 text-sm  dark:text-white text-black border-gray-600 dark:border-gray-200"> Add to Cart</button>
                    </div>
                </div>
                <div class="w-full group hover:z-30 hover:bg-gray-100 dark:hover:bg-zinc-900   h-fit dark:text-white relative">
                    <button class="absolute  right-1 top-1 lg:m-3 sm:m-2">
                        <input type="checkbox" name="" class="peer opacity-0 absolute  top-0.5 right-0.5 h-5 w-5 z-10" id="">
                        <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>


                        <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
                        </input>
                    </button>
                    <img src="iphonex.png " alt="" srcset="">
                    <div class="p-2 px-5">
                        <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                        <h1 class="text-sm  sm:text-base ">iPhone X</h1>
                        <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-bold font-mono">$549</h1>

                    </div>
                    <div class="transition-all hidden md:block dark:group-focus::bg-gray-200 delay-100 text-center h-0 overflow-hidden absolute   group-hover:h-20  group-hover:bg-gray-100  z-10 dark:group-hover:bg-zinc-900    w-full ">
                        <button type="submit " class="uppercase  border w-10/12 py-1 text-sm dark:bg-gray-200 bg-gray-800 text-white dark:text-black "> Add to Cart</button>
                        <button type="submit " class="uppercase  mt-2 border w-10/12 py-1 text-sm  dark:text-white text-black border-gray-600 dark:border-gray-200"> Add to Cart</button>
                    </div>
                </div>
                <div class="w-full group hover:z-30 hover:bg-gray-100 dark:hover:bg-zinc-900   h-fit dark:text-white relative">
                    <button class="absolute  right-1 top-1 lg:m-3 sm:m-2">
                        <input type="checkbox" name="" class="peer opacity-0 absolute  top-0.5 right-0.5 h-5 w-5 z-10" id="">
                        <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>


                        <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
                        </input>
                    </button>
                    <img src="iphonex.png " alt="" srcset="">
                    <div class="p-2 px-5">
                        <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                        <h1 class="text-sm  sm:text-base ">iPhone X</h1>
                        <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-bold font-mono">$549</h1>

                    </div>
                    <div class="transition-all hidden md:block dark:group-focus::bg-gray-200 delay-100 text-center h-0 overflow-hidden absolute   group-hover:h-20  group-hover:bg-gray-100  z-10 dark:group-hover:bg-zinc-900    w-full ">
                        <button type="submit " class="uppercase  border w-10/12 py-1 text-sm dark:bg-gray-200 bg-gray-800 text-white dark:text-black "> Add to Cart</button>
                        <button type="submit " class="uppercase  mt-2 border w-10/12 py-1 text-sm  dark:text-white text-black border-gray-600 dark:border-gray-200"> Add to Cart</button>
                    </div>
                </div>
                <div class="w-full group hover:z-30 hover:bg-gray-100 dark:hover:bg-zinc-900   h-fit dark:text-white relative">
                    <button class="absolute  right-1 top-1 lg:m-3 sm:m-2">
                        <input type="checkbox" name="" class="peer opacity-0 absolute  top-0.5 right-0.5 h-5 w-5 z-10" id="">
                        <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>


                        <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
                        </input>
                    </button>
                    <img src="iphonex.png " alt="" srcset="">
                    <div class="p-2 px-5">
                        <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                        <h1 class="text-sm  sm:text-base ">iPhone X</h1>
                        <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-bold font-mono">$549</h1>

                    </div>
                    <div class="transition-all hidden md:block dark:group-focus::bg-gray-200 delay-100 text-center h-0 overflow-hidden absolute   group-hover:h-20  group-hover:bg-gray-100  z-10 dark:group-hover:bg-zinc-900    w-full ">
                        <button type="submit " class="uppercase  border w-10/12 py-1 text-sm dark:bg-gray-200 bg-gray-800 text-white dark:text-black "> Add to Cart</button>
                        <button type="submit " class="uppercase  mt-2 border w-10/12 py-1 text-sm  dark:text-white text-black border-gray-600 dark:border-gray-200"> Add to Cart</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection