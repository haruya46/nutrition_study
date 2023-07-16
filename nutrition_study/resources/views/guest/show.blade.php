<x-appGuest-layout>
 <x-slot name="header">
      問題を解く(guest)
  </x-slot>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
      <div class="mt-4">
        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <div class="mt-4">
            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{!! nl2br(htmlspecialchars($quiz->note)) !!}</h1>
          </div>
        </div>
        
      </div>
      <div class="decoration-inherit my-2">
        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <p class="text-lg">選択肢</p>
          @foreach ($quiz->choices as $key => $choice)
            <span class="pl-5 text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{$key+1}}.{{ $choice->note }}</span>
            <input type="checkbox" name="selection-answer" class="cursor-pointer">
            @if($choice->answer_flag ==1)
              <span class="text-red-400 hidden show-answer">正解</span>
            @endif   
            <br>
          @endforeach
        </div>
        <div class="my-2">
          <p id="show-answer-commentary"class="hidden bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
            <span class="text-lg">解説</span><br>{!! nl2br(htmlspecialchars($quiz->commentary)) !!}</p>
          <x-primary-button class="mt-4" id="guest-show-submit">
            送信する
          </x-primary-button>
          <x-primary-button class="hidden my-2" id="show-back" >
            <a href="{{ route('guest.index') }}">戻る</a>
          </x-primary-button>
        </div>
      </div>
    </div>
  </div>
</x-appGuest-layout>