@if(isset($message))
<div class="border px-4 py-3 rounded relative bg-green-100 border-green-400 text-green-700">
    {{$message}}
</div>
{{-- ↓ --}}
{{-- <div class="my-2">
    <p id="show-answer-commentary"class="hidden bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
      <span class="text-lg">解説</span><br>{!! nl2br(htmlspecialchars($note)) !!}</p>
    <x-primary-button class="mt-4" id="guest-show-submit">
      送信する
    </x-primary-button>
    <a href="{{ route('guest.index') }}">
      <x-primary-button class="hidden my-2" id="show-back" >
        戻る
      </x-primary-button>
    </a>
  </div> --}}
{{-- ↑ --}}
@endif

