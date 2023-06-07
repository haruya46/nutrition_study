<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            問題作成
        </h2>
    </x-slot>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
            <form method="post" action="{{route('quiz.store')}}" enctype="multipart/form-data">
 @csrf
                    <div class="w-full flex flex-col">
                        <label for="note" class="font-semibold leading-none mt-4">問題文</label>
                        <textarea name="note" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="note" cols="30" rows="10"></textarea>
                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

</x-app-layout>