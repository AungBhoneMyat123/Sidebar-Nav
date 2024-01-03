<div class="w-[75%]">
    <nav class="border-b-2 shadow-lg shadow-gray-200">
        <div class="flex justify-between my-3 mx-5">
            <img src="{{ URL('images/toggle.png') }}" class="w-[20px] h-auto cursor-pointer" alt="">
            <a href="#">
                <img src="{{ URL('images/user.png') }}" class="w-[20px] h-auto" alt="">
            </a>
        </div>
    </nav>
    @include('layouts.ItemList')
</div>
