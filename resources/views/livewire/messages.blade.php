<div class="flex flex-col h-full overflow-hidden rounded-tr-3xl">
    <div class="w-full bg-slate-200">
        <div class="flex items-center justify-between p-1">
            <img src="{{ asset('assets/img/user.png') }}" class="object-cover w-12 h-12 rounded-full cursor-pointer"
                alt="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer">
                <path fill-rule="evenodd"
                    d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    <div class="w-full h-full p-3 overflow-y-scroll scrollbar-thin">
        <div class="flex justify-start my-2">
            <div class="p-2 text-sm text-gray-700 bg-blue-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
        <div class="flex justify-end my-2">
            <div class="p-2 text-sm text-gray-700 bg-slate-200 rounded-xl max-w-96 poppins-regular">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae dolore nesciunt, nulla
                modi ut iure veniam mollitia cupiditate. Magnam exercitationem soluta ullam ea itaque autem est nam
                inventore obcaecati!
            </div>
        </div>
    </div>
    <div x-data="{ isEmpty: true, texte: '' }" class="flex items-center w-full h-20 gap-2 px-6 bg-slate-300 rounded-br-3xl relative">
        {{-- File choice component --}}
        <div class="absolute border w-52 bg-slate-50 rounded-lg top-0 left-10 -translate-y-28 py-2 hidden">
            <div class="flex flex-col">
                <div
                    class="flex item-center gap-1 p-1 text-slate-500 hover:bg-slate-400 hover:text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <p>Image</p>
                </div>
                <div
                    class="flex item-center gap-1 p-1 text-slate-500 hover:bg-slate-400 hover:text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round"
                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <p>Video</p>
                </div>
                <div
                    class="flex item-center gap-1 p-1 text-slate-500 hover:bg-slate-400 hover:text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <p>Document</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8 cursor-pointer text-slate-700">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="w-8 h-8 cursor-pointer text-slate-700" viewBox="0 0 16 16">
            <path
                d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z" />
        </svg>
        <input type="text" data-emoji-picker="true" x-model="texte"
            class="w-full border-none rounded-lg outline-none bg-slate-200 placeholder:text-gray-700 focus:ring-1 focus:ring-gray-500"
            placeholder="Votre message" autofocus>
        <div class="w-8">
            <svg x-show="texte==''"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 cursor-pointer text-slate-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
            </svg>
            <svg x-show="texte!=''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 cursor-pointer text-slate-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
            </svg>
        </div>
    </div>
</div>
