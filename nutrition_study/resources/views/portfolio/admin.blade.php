<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオサイト管理
        </h2>

    </x-slot>

    {{-- 投稿一覧表示用のコード --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($profile_About as $profile_Abouts)
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{ $profile_Abouts->name }}</h1>
                            <hr class="w-full">
                            <p class="mt-4 text-gray-600 py-4">{!! nl2br(htmlspecialchars($profile_Abouts->body)) !!}</p>
                            <div>
                                <img src="{{ asset('storage/images/'.$profile_Abouts->image)}}" class="mx-auto" style="height:300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>