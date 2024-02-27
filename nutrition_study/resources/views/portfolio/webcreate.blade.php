<x-PrtTop-layout>
    <x-slot name="header">
        web制作
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('guest.index')" :active="request()->routeIs('quiz.index')">
            管理栄養士国試験対策サイト
        </x-nav-link>
        <p>このサイトは知人が管理栄養士を目指しており、こんなサイトがあったらいいなという要望のもと作成しました</p>
    </div>





</x-PrtTop-layout>
