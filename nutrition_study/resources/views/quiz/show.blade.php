<x-appGuest-layout>
    <x-slot name="header">
        問題を解く
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="mt-4">
                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                            {!! nl2br(htmlspecialchars($quiz->note)) !!}</h1>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data" method="get" action="{{ route('guest.show_answer', $quiz) }}">
                @csrf
                <div class="decoration-inherit my-2">
                    <div
                        class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <p class="text-lg">選択肢</p>
                        @foreach ($quiz->choices as $key => $choice)
                            <span
                                class="pl-5 text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{ $key + 1 }}.{{ $choice->note }}</span>
                            <input type="checkbox" name="{{ $choice->id }}" class="cursor-pointer">
                            @if ($choice->answer_flag == 1)
                                <span class="text-red-400 hidden" id="show-answer">正解</span>
                            @endif
                            <br>
                        @endforeach
                    </div>
                    {{-- <x-message :message="session('message')" /> --}}
                    @if (empty($correct_flag))
                        <a href="{{ route('guest.index', [$quiz, 100]) }}">
                            <x-secondary-button class="my-2" id="show-back">
                                戻る
                            </x-secondary-button>
                        </a>
                        <x-primary-button class="mt-4" id="#guest-show-submit">
                            送信する
                        </x-primary-button>
                    @elseif($correct_flag == 1)
                        <span class="p-2 text-x1 text-emerald-500 font-bold">正解です</span>
                        <div class="my-2">
                            <p
                                id="show-answer-commentary"class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                                <span class="text-lg">解説</span><br>{!! nl2br(htmlspecialchars($quiz->commentary)) !!}
                            </p>
                            <x-secondary-button class="my-2" id="show-answer-button">
                                答えを表示する
                            </x-secondary-button>
                            <a href="{{ route('guest.index', [$quiz, 100]) }}">
                                <x-secondary-button class="my-2" id="show-back">
                                    戻る
                                </x-secondary-button>
                            </a>
                        </div>
                    @elseif($correct_flag == 2)
                        <div class="my-2">
                            <span class="p-2 text-x1 text-red-500 font-bold">不正解です</span>
                            <p
                                id="show-answer-commentary"class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                                <span class="text-lg">解説</span><br>{!! nl2br(htmlspecialchars($quiz->commentary)) !!}
                            </p>
                            <x-secondary-button class="my-2" id="show-answer-button">
                                答えを表示する
                            </x-secondary-button>
                            <a href="{{ route('guest.index', [$quiz, 100]) }}">
                                <x-secondary-button class="my-2">
                                    戻る
                                </x-secondary-button>
                            </a>

                        </div>
                    @endif

                </div>
            </form>
        </div>
    </div>
</x-appGuest-layout>
