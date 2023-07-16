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
          <!--ここから選択肢を５個を一度に登録する処理-->
          @php
            $choicesId=array(
              '1'=>'choices1',
              '2'=>'choices2',
              '3'=>'choices3',
              '4'=>'choices4',
              '5'=>'choices5');
          @endphp
          @foreach( $choicesId as $key=>$choice)
            {{$key}}
            <input type="checkbox" name={{$key}}>
            <textarea name={{$choice}} class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" rows="1" required></textarea>
          @endforeach
          <!--ここまで-->
          <label class="font-semibold leading-none mt-4">解説</label>
          <textarea name="commentary" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" rows="10" required></textarea>
        </div>
        

        <x-primary-button class="mt-4">
          送信する
        </x-primary-button>

      </form>
    </div>
  </div>


</x-app-layout>

