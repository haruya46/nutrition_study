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
            <input type="checkbox" v-model={{$key+1}}>
            <br>
          @endforeach
      </div>
    </div>
  </div>
  
</x-appGuest-layout>