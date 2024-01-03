<div class="w-[25%] block h-screen bg-indigo-200">
    <div class="relative h-[100%]">
        <div class="flex flex-col h-[150px] justify-center items-center py-4 gap-3 lg:h-[100px] lg:flex lg:flex-row lg:justify-start lg:ms-5 lg:gap-4">
            <a href="#">
                <img src="{{ URL('images/tailwind-css.svg') }}" class="w-[50px] h-auto" alt="">
            </a>
            <span class="font-bold text-2xl text-gray-800 text-center">Admin Panel</span>
        </div>
        <div class="flex flex-col gap-4 md:items-start items-center md:justify-center px-3">
            <a href="#" class="sm:w-[95%] w-auto flex gap-3 items-center shadow-gray-400 mx-2 p-4 sm:rounded-lg rounded-full hover:bg-indigo-500">
                <img src="{{ URL('images/menu.png') }}" class="w-[20px] h-auto" alt="">
                <span class="text-[15px] font-semibold min-[600px]:block hidden">Item</span>
            </a>
            <a href="#" class="sm:w-[95%] w-auto flex gap-3 items-center shadow-gray-400 mx-2 p-4 sm:rounded-lg rounded-full hover:bg-indigo-500">
                <img src="{{ URL('images/list.png') }}" class="w-[20px] h-aut" alt="">
                <span class="text-[15px] font-semibold min-[600px]:block hidden">Category</span>
            </a>
        </div>
        <div class="sm:w-[85%] w-auto absolute bottom-[2rem] max-[600px]:left-[20px] left-5">
            <div class="inline text-start px-3">
                <a href="#" class=" flex gap-3 items-center shadow-gray-400 mx-2 p-4 sm:rounded-lg rounded-full hover:bg-indigo-500">
                    <img src="{{ URL('images/exit.png') }}" class="w-[20px] h-aut" alt="">
                    <span class="text-[15px] font-semibold sm:block hidden">Log Out</span>
                </a>
            </div>
        </div>
    </div>
</div>
