<x-app-layout>
    <div class="w-screen h-screen p-4 bg-slate-50">
        <div class="flex w-full h-full">
            <div class="overflow-hidden border-r border-slate-400 bg-slate-200 rounded-l-3xl" style="width: 450px; min-width:450px">
                <div class="flex flex-col h-full">
                    <div class="p-4">
                        <div class="flex items-center justify-between p-1 rounded-md bg-slate-100">
                            <img src="{{ asset('assets/img/user.png') }}" class="object-cover w-12 h-12 rounded-full cursor-pointer"
                                alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 cursor-pointer">
                                <path fill-rule="evenodd"
                                    d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="p-1 mt-1">
                            <input type="text" class="w-full h-8 border-none rounded-lg outline-none bg-slate-50 focus:ring-1 focus:ring-gray-500" placeholder="Recherche">
                        </div>
                    </div>
                    <div class="h-full overflow-y-scroll scrollbar-thin">
                        <div class="flex flex-col">
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                            @livewire('conversation-items')
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-slate-100 rounded-r-3xl">
             @livewire('messages')
            </div>
        </div>
    </div>
</x-app-layout>
