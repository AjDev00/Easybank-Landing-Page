<div class="px-20 py-10 bg-blue-950 flex flex-row justify-between">
    <div class="flex flex-row gap-36">
        <div class="flex flex-col gap-14">
            <div class="invert">
                @include('components.logo')
            </div>
            <div class="flex flex-row gap-3">
                <img src="{{ asset('images/facebook.svg') }}" class="w-6 h-6 invert font-bold">
                <img src="{{ asset('images/youtube.svg') }}" class="w-6 h-6 invert font-bold">
                <img src="{{ asset('images/twitter.svg') }}" class="w-6 h-6 invert font-bold">
                <img src="{{ asset('images/pinterest.svg') }}" class="w-6 h-6 invert font-bold">
                <img src="{{ asset('images/instagram.svg') }}" class="w-6 h-6 invert font-bold hover:bg-green-500">
            </div>
        </div>
        <div class="flex flex-row gap-28 text-white">
            <div class="flex flex-col gap-3">
                <div class="hover:text-green-500 duration-150 cursor-pointer">About</div>
                <div class="hover:text-green-500 duration-150 cursor-pointer">Contact</div>
                <div class="hover:text-green-500 duration-150 cursor-pointer">Blog</div>
            </div>
            <div class="flex flex-col gap-3">
                <div class="hover:text-green-500 duration-150 cursor-pointer">Careers</div>
                <div class="hover:text-green-500 duration-150 cursor-pointer">Support</div>
                <div class="hover:text-green-500 duration-150 cursor-pointer">Privacy Policy</div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-8 text-right">
        <div>
            @include('components.button')
        </div>
        <div class="text-white opacity-70">
            © EasyBank. All Rights Reserved
        </div>
    </div>
</div>