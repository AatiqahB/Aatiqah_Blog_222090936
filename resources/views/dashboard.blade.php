<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-stretch -mx-6"> 
                <div class="w-full lg:w-1/2 px-6"> 
                    <div class="overflow-hidden shadow-sm sm:rounded-lg h-full" style=" ackground-color:rgb(223,217,217);"> 
                        <div class="p-6 text-gray-900">
                            {!! __('<h1 class="text-2xl font-bold text-purple-900">Start Posting blogs now:</h1>
                            <p>Unleash your voice on our dynamic blogging platform and connect with a vibrant community eager to hear your stories, 
                                insights, and expertise.</p>
                                
                                <p>Whether you are an experienced writer or just starting, our site offers an easy-to-use interface,
                                personalized support, and the potential to reach thousands of readers.</p>
                                
                                <p>Dive into a world where your words matter, 
                                spark conversations, and inspire change. Share your passion, grow your audience, and become a part of something
                                bigger. Start blogging with us today and watch your influence soar!</p>') !!}
                            <div class="mt-10">
                                <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')" class="bg-purple-900 text-white py-2 px-4 rounded text-center hover:bg-purple-400">
                                    {{ __('Posts') }}
                                </x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 px-6">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg h-full bg-cover bg-center" style="background-image: url('/img/collage.png');"> 
                        <div class="p-6 text-gray-900">
                            {!! __('') !!}
                        </div>
                    </div>
                </div>
            </div> 
        </div>
</x-app-layout>
