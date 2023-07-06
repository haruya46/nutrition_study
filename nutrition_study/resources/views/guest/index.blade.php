<x-appGuest-layout>
 <x-slot name="header">
      問題一覧(guest)
  </x-slot>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @foreach ($guests as $quiz)
      <div class="mx-4 sm:p-8">
        <div class="mt-4">
          <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
            <div class="mt-4">
              <a href="{{route('guest.show', $quiz) }}">
                <x-primary-button class="bg-teal-700 float-right">問題を解く</x-primary-button>
              </a>
              <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">{{ $quiz->note }}</h1>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-appGuest-layout>
