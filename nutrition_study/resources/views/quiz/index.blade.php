<x-app-layout>
  <x-slot name="header">
      問題一覧(guest)


  </x-slot>

  {{-- 投稿一覧表示用のコード --}}
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @foreach ($quizes as $quiz)
      <div class="mx-4 sm:p-8">
        <div class="mt-4">
          <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
            <div class="mt-4">
              <a href="{{ route('quiz.edit', $quiz) }}">
                <x-primary-button class="bg-teal-700 float-right">編集</x-primary-button>
              </a>
              <form method="post" action="{{ route('quiz.destroy', $quiz) }}">
                @csrf
                @method('delete')
                <x-primary-button class="bg-red-700 float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除
                </x-primary-button>
              </form>
              <div class="text-lg border-solid border-blue-600 border-2 rounded p-2">
                <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{!! nl2br(htmlspecialchars($quiz->note)) !!}</h1>
              </div>    
              <div class="text-lg border-solid border-orange-600 border-2 rounded my-2 p-2">
                <p class="text-xl font-semibold ">選択肢</p>
                  @foreach ($quiz->choices as $key => $choice)
                    <span class="pl-5">{{$key+1}}.{{ $choice->note }}</span>
                    @if($choice->answer_flag ==1)
                    <span class="text-red-400">正解</span>
                    @endif
                    <br>
                  @endforeach
                  <p class="text-xl font-semibold">解説</p>
                  <p class="text-lg  font-semibold hover:underline cursor-pointer">{!! nl2br(htmlspecialchars($quiz->commentary)) !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</x-app-layout>

