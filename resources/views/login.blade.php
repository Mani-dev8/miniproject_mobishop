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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&family=VT323&display=swap" rel="stylesheet">

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

        .logo_bg {
            background: linear-gradient(to right, #008aff, #00ffe7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 5s linear infinite;
        }

        .login_box .login {
            /* background: linear-gradient(to right, #008aff, #00ffe7); */
            /* animation: anim_login 1.2s ease-in-out infinite; */
        }

        .login_box:hover .login {
            animation: none;

        }

        @keyframes anim_login {
            0% {
                translate: 0px;
            }

            50% {
                translate: 10px 0px;
            }

            100% {
                translate: 0px;
            }

        }

        @keyframes animate {

            0%,
            100% {
                filter: hue-rotate(0deg);
            }

            50% {
                filter: hue-rotate(360deg);
            }
        }
    </style>
    <title>Document</title>
</head>

<body class="font-rubic  text-white overflow-hidden" style="background-color: #242733;">
    <div class="logo_bg flex absolute h-fit  top-10 left-10 ">
        <i class="logo fa-solid fa-mobile text-7xl"></i>
        <span class="logo w-1.5 mx-2 rounded text-7xl ">|</span>
        <h1 class="logo font-extrabold text-7xl ">MobiShop</h1>
    </div>
    <div class=" min-h-[100vh]  flex  items-center flex-row ">
        <div class="login_box w-fit px-8 ml-16 border  bg-white rounded py-4 border-zinc-500 hover:shadow-none " style="box-shadow: -20px 20px 0px 0px rgba(113 113 122/0.7);">
            <div class="flex w-[410px] h-80 overflow-hidden relative">
                <div class="min-w-[420px] absolute left-0 login">
                    <div class="flex">
                        <h1 class="text-6xl font-vt323 scale-x-150 font-bold text-zinc-500 w-fit mr-2">W</h1>
                        <h1 class="text-6xl font-vt323 tracking-wide font-extrabold text-zinc-500">
                            elcome Back ...
                        </h1>
                    </div>
                    <h1 class="text-sm text-zinc-400">
                        enter your email and password
                    </h1>
                    <form action="/login_page" method="POST" enctype="multipart/form-data ">
                        @csrf
                        <div class="h-fit w-4/5 relative mt-8 flex">
                            <i class="fa-solid fa-envelope text-zinc-500 text-xl my-auto mr-4"></i>
                            <div class="w-4/5 h-fit relative">
                                <input type="email" name="login_email" class="text-black border text-sm h-7 border-zinc-400 rounded-sm pl-2 w-full" required>
                                <input type="radio" name="" class="w-full absolute h-7 left-0 peer checked:-z-10 z-20 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    email
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    enter email address ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-4/5 relative mt-8 flex">
                            <i class="fa-solid fa-key text-zinc-500 text-xl my-auto mr-4"></i>

                            <div class="w-4/5 h-fit">
                                <input type="radio" id="" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-">
                                <div class="flex w-full border border-zinc-400 rounded-sm items-center relative">
                                    <input type="checkbox" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                    <input type="password" name="login_password" class="pass text-black text-sm h-7  pl-2 " required>
                                    <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2"></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between items-center text-center mt-8">
                            <button type="submit" class=" bg-zinc-600 text-white hover:bg-zinc-800 px-7 rounded-sm  py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-zinc-500 active:shadow-none active:opacity-80"><span>Login &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>
                            <!-- <div class="w-fit h-fit relative">
                        <h1 class="text-rubic text-zinc-500  border m-auto cursor-pointer underline">dont have an account ?</h1>
                        <input type="checkbox" name="" id="" class="absolute w-20 z-20 h-6 left-0 bottom-0 peer/signup checked:-left-72 checked:-top-80">
                        <div class="w-[30rem] h-96 bg-white border absolute -top-80 -left-72 peer-checked/signup:block hidden">
                            <form action="" method="post" id="signup" enctype="multipart/form-data" class="absolute top-0 ">

                                <div class="h-fit w-4/5 relative mt-8 flex">
                                    <i class="fa-solid fa-envelope text-zinc-500 text-xl my-auto mr-4"></i>
                                    <div class="w-4/5 h-fit relative">
                                        <input type="email" name="email" class="text-black border text-sm h-7 border-zinc-400 rounded-sm pl-2 w-full" required>
                                        <input type="radio" name="" class="w-full absolute h-7 left-0 peer checked:-z-10 z-20 opacity-0">
                                        <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                            email
                                        </h1>
                                        <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                            enter email address ...
                                        </h1>
                                    </div>
                                </div>
                                <div class="h-fit w-4/5 relative mt-8 flex">
                                    <i class="fa-solid fa-key text-zinc-500 text-xl my-auto mr-4"></i>

                                    <div class="w-4/5 h-fit">
                                        <input type="radio" id="" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-">
                                        <div class="flex w-full border border-zinc-400 rounded-sm items-center relative">
                                            <input type="checkbox" name=""  class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                            <input type="password" name="email"  class="pass text-black text-sm h-7  pl-2 " required>
                                            <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2"></i>
                                            <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                        </div>
                                        <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                            password
                                        </h1>
                                        <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                            enter password ...
                                        </h1>
                                    </div>
                                </div>
                                <button for="signup" type="submit" class=" bg-zinc-600 text-white hover:bg-zinc-800 px-7 rounded-sm  py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-zinc-500 active:shadow-none active:opacity-80"><span>Login &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>
                            </form>
                        </div>
                    </div> -->
                        </div>
                    </form>
                    <div class="w-full border items-center flex mt-4">
                        <button class="btn_signup text-rubic text-zinc-500  border m-auto  underline">dont have an account ?</button>

                    </div>
                </div>
                <div class="min-w-[420px] min-h-[800px] overflow-visible absolute left-[105%] bg-white signup_box z-40 transition-all delay-300">

                    <div class=" ">
                        <button class="back absolute -top-1 border z-50 text-red-600 ">&lt;back</button>
                        <div class="flex mt-5">
                            <h1 class="text-6xl font-vt323 scale-x-150 font-bold text-zinc-500 w-fit mr-2">C</h1>
                            <h1 class="text-6xl font-vt323 tracking-wide font-extrabold text-zinc-500">
                                reate Account
                            </h1>

                        </div>
                    </div>
                    <!-- <h1 class="text-sm text-zinc-400">
                        enter your email and password
                    </h1> -->
                    <form action="" method="post" enctype="multipart/form-data ">

                        <div class="h-fit w-4/5 relative mt-4 flex">
                            <i class="fa-solid fa-envelope text-zinc-500 text-xl my-auto mr-4"></i>
                            <div class="w-4/5 h-fit relative">
                                <input type="email" name="email" class="text-black border text-sm h-7 border-zinc-400 rounded-sm pl-2 w-full" required>
                                <input type="radio" name="" class="w-full absolute h-7 left-0 z-20 peer checked:-z-10 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    email
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    enter email address ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-4/5 relative mt-8 flex">
                            <i class="fa-solid fa-key text-zinc-500 text-xl my-auto mr-4"></i>

                            <div class="w-4/5 h-fit">
                                <input type="radio" id="" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-">
                                <div class="flex w-full border border-zinc-400 rounded-sm items-center relative">
                                    <input type="checkbox" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                    <input type="password" name="email" class="pass text-black text-sm h-7  pl-2 " required>
                                    <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2"></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-4/5 relative mt-8 flex">
                            <i class="fa-solid fa-lock text-zinc-500 text-xl my-auto mr-4"></i>

                            <div class="w-4/5 h-fit">
                                <input type="radio" id="" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-">
                                <div class="flex w-full border border-zinc-400 rounded-sm items-center relative">
                                    <input type="checkbox" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                    <input type="password" name="email" class="pass text-black text-sm h-7  pl-2 " required>
                                    <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2"></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between items-center text-center mt-8">
                            <button type="submit" class=" bg-zinc-600 text-white hover:bg-zinc-800 px-7 rounded-sm  py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-zinc-500 active:shadow-none active:opacity-80"><span>Sign Up&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>
                            <!-- <div class="w-fit h-fit relative">
                        <h1 class="text-rubic text-zinc-500  border m-auto cursor-pointer underline">dont have an account ?</h1>
                        <input type="checkbox" name="" id="" class="absolute w-20 z-20 h-6 left-0 bottom-0 peer/signup checked:-left-72 checked:-top-80">
                        <div class="w-[30rem] h-96 bg-white border absolute -top-80 -left-72 peer-checked/signup:block hidden">
                            <form action="" method="post" id="signup" enctype="multipart/form-data" class="absolute top-0 ">

                                <div class="h-fit w-4/5 relative mt-8 flex">
                                    <i class="fa-solid fa-envelope text-zinc-500 text-xl my-auto mr-4"></i>
                                    <div class="w-4/5 h-fit relative">
                                        <input type="email" name="email" class="text-black border text-sm h-7 border-zinc-400 rounded-sm pl-2 w-full" required>
                                        <input type="radio" name="" class="w-full absolute h-7 left-0 peer checked:-z-10 z-20 opacity-0">
                                        <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                            email
                                        </h1>
                                        <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                            enter email address ...
                                        </h1>
                                    </div>
                                </div>
                                <div class="h-fit w-4/5 relative mt-8 flex">
                                    <i class="fa-solid fa-key text-zinc-500 text-xl my-auto mr-4"></i>

                                    <div class="w-4/5 h-fit">
                                        <input type="radio" id="" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-">
                                        <div class="flex w-full border border-zinc-400 rounded-sm items-center relative">
                                            <input type="checkbox" name=""  class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                            <input type="password" name="email"  class="pass text-black text-sm h-7  pl-2 " required>
                                            <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2"></i>
                                            <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                        </div>
                                        <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                            password
                                        </h1>
                                        <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                            enter password ...
                                        </h1>
                                    </div>
                                </div>
                                <button for="signup" type="submit" class=" bg-zinc-600 text-white hover:bg-zinc-800 px-7 rounded-sm  py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-zinc-500 active:shadow-none active:opacity-80"><span>Login &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>
                            </form>
                        </div>
                    </div> -->
                        </div>
                    </form>
                    <div class="w-full border items-center flex mt-4">


                    </div>
                </div>
            </div>
        </div>
        <div class="h-full w-1/2 overflow-hidden ">
            <img src="Vector 1.svg" height="1500px" width="1500px" class="absolute " style="top:-120px;rotate:5deg;left:600px;filter: drop-shadow(0px 0px 10px rgb(251 113 133));">
            <img src="-original-imaghxen343tbjgj-removebg-preview.png" alt="" srcset="" class="absolute h-[450px] top-48 left-[40rem]  " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27 / 1))">
            <img src="-original-imagg4xza5rehdqv-removebg-preview.png" alt="" srcset="" class="absolute h-[550px] top-[20rem] left-[56rem]  shadow-sm " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27 / 1))">
            <img src="black-pixel.png" alt="" srcset="" class="absolute h-[450px] top-[-5rem] left-[74rem] rounded-md " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27  / 1))">
        </div>
    </div>
    <script>
        document.addEventListener('click', (e) => {
            if (e.target.className.slice(0, 9) == 'show_pass') {
                console.log('yes');
                if (e.target.checked) {

                    e.target.parentNode.children[1].setAttribute('type', 'text')
                }
                else {
                    e.target.parentNode.children[1].setAttribute('type', 'password')
                }
            }
            console.log(e.target.className.slice(0, 9))
        })




        let showpass = document.getElementsByClassName('show_pass');
        let pass = document.getElementsByClassName('pass');

        // showpass.addEventListener('click', () => {
        //     console.log(pass)
        //     let a = showpass.checked;
        //     if (a == true) {
        //         pass.setAttribute("type", "text")
        //     } else {
        //         pass.setAttribute("type", "password")

        //     }

        // })

        let btn_signup = document.querySelector('.btn_signup');
        let back = document.querySelector('.back');
        back.addEventListener('click', () => {
            document.querySelector('.signup_box').style.left = "105%";
            document.querySelector('.login').style.display = "block";

            document.querySelector('.signup_box').style.display = "none";

        })
        btn_signup.addEventListener('click', () => {
            document.querySelector('.signup_box').style.display = "block";
            document.querySelector('.login').style.display = "none";

            document.querySelector('.signup_box').style.left = "0%";

        })
    </script>
</body>

</html>