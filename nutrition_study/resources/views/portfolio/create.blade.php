<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の新規作成
        </h2>
    </x-slot>
    
        {{-- 最初に作成した部分 --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                <p>ポートフォリオAbout</p>
                <form method="post" action="{{route('portfolio.portfoliostore')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                        <label for="name" class="font-semibold leading-none mt-4">名前</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" placeholder="Enter Title">
                        </div>
                    </div>
    
                    <div class="w-full flex flex-col">
                        <label for="body" class="font-semibold leading-none mt-4">本文</label>
                        <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                    </div>
    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">画像 </label>
                        <div>
                        <input id="image" type="file" name="image">
                        </div>
                    </div>

                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
        {{-- 最初に作成した部分ここまで --}}

</x-app-layout>