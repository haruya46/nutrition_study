<x-appGuest-layout>
 <x-slot name="header">
      問題を解く(guest)
  </x-slot>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
      <div class="mt-4">
        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <div class="mt-4">
            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{ $quiz->note}}</h1>
          </div>
        </div>
        
      </div>
      <div class="bg-slate-900 text-amber-200">
        <p>選択肢</p>
          @foreach ($quiz->choices as $key => $choice)
            <span class="pl-5">{{$key+1}}.{{ $choice->note }}</span>
            <input type="checkbox" name="selection-answer">
            @if($choice->answer_flag ==1)
              <span class="text-red-400 hidden show-answer">正解</span>
            @endif
            
            <br>
          @endforeach
          <p id="show-answer-commentary"class="hidden">{{$quiz->commentary}}</p>
          <p id="guest-show-submit">答えを見る</p>
          <a href="{{ route('guest.index') }}"id="show-back" class="hidden">戻る</a>
      </div>
    </div>
  </div>
</x-appGuest-layout>