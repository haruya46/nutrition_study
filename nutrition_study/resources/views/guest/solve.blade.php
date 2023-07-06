<x-appGuest-layout>
 <x-slot name="header">
      問題を解く(guest)
  </x-slot>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div id="app">
    @{{text}}
  </div>
  <script>
    el:"app"
    data{
      text:0
    }
  </script>
  </div>
</x-appGuest-layout>