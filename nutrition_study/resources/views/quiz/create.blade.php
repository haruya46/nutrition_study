<x-app-layout>
  <x-slot name="header">


    問題作成

  </x-slot>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
      <form method="post" action="{{ route('quiz.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="w-full flex flex-col">
          <label for="note" class="font-semibold leading-none mt-4">問題文</label>

          <textarea name="note" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="note" rows="10" required></textarea>
        </div>
        <div class="w-full flex flex-col">
          <label class="font-semibold leading-none mt-4">選択</label>
          <!-- <textarea name="choice1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="choice1" cols="20" rows="1" required></textarea> -->
          <!--ここから選択肢を５個を一度に登録する処理-->
          {{$choicesId=1;}}
          @while( $choicesId <= 5)
            <textarea name={{$choicesId}} class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" rows="1" required></textarea>
            {{$choicesId +=1;}}
          @endwhile
          <!--ここまで-->
        </div>
        

        <x-primary-button class="mt-4">
          送信する
        </x-primary-button>

      </form>
    </div>
  </div>


</x-app-layout>

