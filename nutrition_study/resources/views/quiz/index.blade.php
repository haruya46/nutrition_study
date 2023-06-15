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
              <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{ $quiz->note }}</h1>
            </div>
            <div class="bg-slate-900 text-amber-200">

              <p>選択肢</p>
              @foreach ($quiz->choices as $key => $choice)
                <span class="pl-5">{{$key+1}}.{{ $choice->note }}</span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-app-layout>