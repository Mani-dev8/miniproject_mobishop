@extends('welcome')
@section('content')
<section class="cart">
    <div class="w-full dark:bg-gray-50 bg-black">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between border-b ">

                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">My Cart</h1>
                <div class="flex ">
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <div class="flex relative items-center mr-1 ">
                            <i class="fa-sharp fa-solid fa-house   text-xs sm:text-sm lg:text-base  dark:text-black text-white "></i>
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base ">Home</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <span class="text-xs sm:text-sm lg:text-base">Cart</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                </div>
            </div>
            <div class="h-1/2 w-full  flex flex-row ">
                <div class="lg:w-2/3 w-full flex justify-between items-center text-center ">
                    <div class="flex items-center ">
                        <h1 class=" text-white dark:text-black mr-2 sm:text-lg  text-xs font-bold ">Products</h1>

                    </div>
                    <button class="w-40 text-red-500 hover:text-red-400  hover:font-semibold border px-2 py-1 text-xs sm:text-sm border-red-500 "> <i class="fa-solid fa-angle-left"></i> Continue Shopping</button>
                </div>
                <div class="lg:min-w-[330px] xl:w-1/3"></div>
            </div>
        </div>

    </div>
    <div class="w-full dark:bg-black">
        <div class="flex  xl:w-[1280px] justify-between  w-auto flex-row m-auto px-4 xl:px-0">

            <div class="lg:w-8/12 w-full  mt-6  ">
                <div class="flex py-4 flex-row w-full border-b border-zinc-300 dark:border-zinc-700 justify-between ">
                    <div class="flex  flex-row w-fit items-start">
                        <img src="iphonex.png" alt="" class=" w-24 sm:w-[25%]" srcset="">

                        <div class="flex h-full  text-black dark:text-white flex-row text-left  ml-4 ">
                            <div class="m-auto ">
                                <div class=" text-sm sm:text-base md:text-lg font-semibold font-mono">
                                    iPhone X
                                </div>
                                <div class="  mt-0.5 text-xs sm:text-sm md:text-base">
                                    8 GB RAM
                                </div>
                                <div class=" -mt-0.5  text-xs sm:text-sm md:text-base">
                                    white
                                </div>
                                <div class="md:text-xl font-mono font-bold sm:text-base text-sm">
                                    $499
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center   ">
                        <div class=" flex flex-col ">
                            <h1 class="text-black font-semibold dark:text-white text-bold  text-xs sm:text-sm ">
                                Quantity
                            </h1>

                            <form action="" class="flex flex-col">
                                <input type="number" min="0" id="pin" name="pin" class="focus:outline-none border bg-transparent dark:text-white md:p-1 p-0.5 lg:p-2 my-2 lg:w-32 md:w-28 sm:w-24 w-16  sm:py-1 rounded-sm border-zinc-600 text-xs sm:text-sm focus:border-red-400 focus:border-opacity-60 " maxlength="2" size="2" required oninvalid="this.setCustomValidity('Enter Quantity')" oninput="this.setCustomValidity('')" />
                                <button type="submit" class="text-red-500 hover:text-red-400  active:opacity-60 text-xs sm:text-sm lg:text-base text-left ">
                                    <i class="fa-regular fa-circle-xmark text-xs  "></i>
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flex py-4 flex-row w-full border-b border-zinc-300 dark:border-zinc-700 justify-between ">
                    <div class="flex  flex-row w-fit items-start">
                        <img src="iphonex.png" alt="" class=" w-24 sm:w-[25%]" srcset="">

                        <div class="flex h-full  text-black dark:text-white flex-row text-left  ml-4 ">
                            <div class="m-auto ">
                                <div class=" text-sm sm:text-base md:text-lg font-semibold font-mono">
                                    iPhone X
                                </div>
                                <div class="  mt-0.5 text-xs sm:text-sm md:text-base">
                                    8 GB RAM
                                </div>
                                <div class=" -mt-0.5  text-xs sm:text-sm md:text-base">
                                    white
                                </div>
                                <div class="md:text-xl font-mono font-bold sm:text-base text-sm">
                                    $499
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center   ">
                        <div class=" flex flex-col ">
                            <h1 class="text-black font-semibold dark:text-white text-bold  text-xs sm:text-sm ">
                                Quantity
                            </h1>
                            <input type="number" min="0" id="pin" name="pin" class="focus:outline-none border bg-transparent dark:text-white md:p-1 p-0.5 lg:p-2 my-2 lg:w-32 md:w-28 sm:w-24 w-16  sm:py-1 rounded-sm border-zinc-600 text-xs sm:text-sm focus:border-red-400 focus:border-opacity-60 " maxlength="2" size="2">
                            <button class="text-red-500 hover:text-red-400  active:opacity-60 text-xs sm:text-sm lg:text-base text-left ">
                                <i class="fa-regular fa-circle-xmark text-xs  "></i>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex py-4 flex-row w-full border-b border-zinc-300 dark:border-zinc-700 justify-between ">
                    <div class="flex  flex-row w-fit items-start">
                        <img src="iphonex.png" alt="" class=" w-24 sm:w-[25%]" srcset="">

                        <div class="flex h-full  text-black dark:text-white flex-row text-left  ml-4 ">
                            <div class="m-auto ">
                                <div class=" text-sm sm:text-base md:text-lg font-semibold font-mono">
                                    iPhone X
                                </div>
                                <div class="  mt-0.5 text-xs sm:text-sm md:text-base">
                                    8 GB RAM
                                </div>
                                <div class=" -mt-0.5  text-xs sm:text-sm md:text-base">
                                    white
                                </div>
                                <div class="md:text-xl font-mono font-bold sm:text-base text-sm">
                                    $499
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center   ">
                        <div class=" flex flex-col ">
                            <h1 class="text-black font-semibold dark:text-white text-bold  text-xs sm:text-sm ">
                                Quantity
                            </h1>
                            <input type="number" min="0" id="pin" name="pin" class="focus:outline-none border bg-transparent dark:text-white md:p-1 p-0.5 lg:p-2 my-2 lg:w-32 md:w-28 sm:w-24 w-16  sm:py-1 rounded-sm border-zinc-600 text-xs sm:text-sm focus:border-red-400 focus:border-opacity-60 " maxlength="2" size="2">
                            <button class="text-red-500 hover:text-red-400  active:opacity-60 text-xs sm:text-sm lg:text-base text-left ">
                                <i class="fa-regular fa-circle-xmark text-xs  "></i>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex py-4 flex-row w-full border-b border-zinc-300 dark:border-zinc-700 justify-between ">
                    <div class="flex  flex-row w-fit items-start">
                        <img src="iphonex.png" alt="" class=" w-24 sm:w-[25%]" srcset="">

                        <div class="flex h-full  text-black dark:text-white flex-row text-left  ml-4 ">
                            <div class="m-auto ">
                                <div class=" text-sm sm:text-base md:text-lg font-semibold font-mono">
                                    iPhone X
                                </div>
                                <div class="  mt-0.5 text-xs sm:text-sm md:text-base">
                                    8 GB RAM
                                </div>
                                <div class=" -mt-0.5  text-xs sm:text-sm md:text-base">
                                    white
                                </div>
                                <div class="md:text-xl font-mono font-bold sm:text-base text-sm">
                                    $499
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center   ">
                        <div class=" flex flex-col ">
                            <h1 class="text-black font-semibold dark:text-white text-bold  text-xs sm:text-sm ">
                                Quantity
                            </h1>
                            <input type="number" min="0" id="pin" name="pin" class="focus:outline-none border bg-transparent dark:text-white md:p-1 p-0.5 lg:p-2 my-2 lg:w-32 md:w-28 sm:w-24 w-16  sm:py-1 rounded-sm border-zinc-600 text-xs sm:text-sm focus:border-red-400 focus:border-opacity-60 " maxlength="2" size="2">
                            <button class="text-red-500 hover:text-red-400  active:opacity-60 text-xs sm:text-sm lg:text-base text-left ">
                                <i class="fa-regular fa-circle-xmark text-xs  "></i>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-3/12 min-w-[300px] hidden lg:block transition-all -mt-24 p-4  group/category  bg-white  dark:bg-black shadow-lg  dark:shadow-gray-700">
                <div class="dark:text-white border-b dark:border-gray-500 pb-3  group-hover/category:text-red-500 text-center  text-black font-semibold  mt-2 ">Subtotal
                    <h1 class="text-gray-700 mt-2 dark:text-gray-100 md:text-lg lg:text-2xl font-mono  ">$499<span class="text-sm md:text-lg ">.25</span> </h1>

                </div>
                <div class="flex text-black dark:text-white mt-6">
                    <div class="text-black dark:text-white bg-gradient-to-r mr-4 from-red-400 to-red-600 px-2 rounded text-center text-sm pb-0.5">
                        note
                    </div>
                    Additional Comments
                </div>
                <textarea name="" id="" rows="5" class="ext-black dark:text-white bg-transparent border w-full border-transparent p-3 focus:border-red-400  focus:border-opacity-60 border-zinc-600 focus:outline-none my-2 rounded-sm"></textarea>
                <div class="w-full">
                    <!-- relative  before:rounded-lg before:absolute dark:before:bg-gray-600  before:w-full before:h-[1px] before:bottom-0 -->

                    <div class="flex w-full  group/promo   transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                        <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="checkbox" name="category" id="">
                        <i class="fa-sharp fa-solid p-1 rounded-full peer-checked:bg-opacity-70 peer-checked:bg-red-500  fa-chevron-up dark:text-white absolute right-2  text-sm peer-checked:rotate-180"></i>
                        <div class="peer-checked:h-auto h-4">
                            <h1 class=" absolute dark:text-white text-sm  group-hover/promo:text-red-400 group-hover/promo:underline ">Promocode</h1>


                        </div>


                        <div class=" hidden  absoute peer-checked:mt-4 pt-3   transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2   ">
                            <div class="w-full items-center relative mt-4 flex h-8 ">
                                <input type="text" class="w-full focus:outline-none  border h-full bg-transparent dark:text-white px-2">
                                <i class="dark:text-white text-black  absolute fa-solid fa-magnifying-glass right-2"></i>
                                </input>
                            </div>

                        </div>
                    </div>


                </div>
                <button class="active:opacity-70 rounded bg-red-500 shadow-md  shadow-red-400 hover:shadow-none hover:bg-red-600 text-white text-center px-2 py-2  w-full">
                    <i class="fa-regular fa-credit-card text-white"></i> Proceed to checkout
                </button>
            </div>
        </div>
</section>
@endsection