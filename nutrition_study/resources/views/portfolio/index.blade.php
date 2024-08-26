<x-PrtTop-layout id="home">
    <div class="content"id="about">
        <div>
            <h2>About</h2>
            <p>～私たちについて～</p>
        </div>
        <div>
            <div class="About-flex">
                @foreach ($profile_About as $profile_Abouts)
                <div class="about-content">
                    <img src="{{ asset('storage/images/' . $profile_Abouts->image) }}">
                </div>
                <div class="about-content">
                    <h1>{{ $profile_Abouts->name }}</h1>
                    <p class="mt-4 text-gray-600 py-4">{!! nl2br(htmlspecialchars($profile_Abouts->body)) !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="content"id="business">
        <div class="business-title">
            <h2>Business</h2>
            <p>～LCEで行っている事業を紹介～</p>
        </div>
        <div class="business">
            <div class="business-content">
                <h5>映像制作</h5>
                <p>youtubeの動画にあった動画編集～サムネイルの作成を行います！料金の見積もりのご依頼は下記のお問い合わせからお願いします</p>
                <a href="#contact">お問い合わせ</a>
            </div>
            <div class="business-content">
                <h5>システム開発＆web制作</h5>
                <p>私たちが得意としているlaravelを利用しホームページ制作～システム開発・業務効率化システムを開発することが可能です！料金の見積もりのご依頼は下記のお問い合わせからお願いします</p>
                <a href="#contact">お問い合わせ</a>
            </div>
            <div class="business-content">
                <h5>ProPro</h5>
                <p>1から学べるプログラミング教室を運営しております。現役のエンジニアから実際の工程通りに学ぶことができ、最終目標を転職の際に見劣りしないポートフォリオを作るのが目標となっております。</p>
                    <a href="https://kindnesshumor.com/?p=4688">詳細はこちら</a>
            </div>
        </div>
    </div>
    <div class="content" id="works">
        <div class="works-title">
            <h2>Works</h2>
            <p>～実績を紹介～</p>
        </div>
        <div>
            <div class="movie">
                <div class="movie-sample youtube">
                    <iframe src="https://www.youtube.com/embed/o6RUVVtKG2M?si=teaI5VvB2PrN-K1E"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="content"id="contact">
        <div>
            <h2>contact</h2>
            <p>すこしでも興味を持ってくれた人はこちらから</p>
        </div>
        <div class="contact-form">

            <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label for="title" class="font-semibold leading-none mt-4">件名</label>
                        <input type="text" name="title" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="title" value="{{old('title')}}" placeholder="Enter Title">
                    </div>
                </div>
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="title" class="font-semibold leading-none mt-4">名前</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" value="{{old('name')}}" placeholder="Enter Title">
                    </div>
                </div>
                <div class="md:flex items-center">
                    <div class="w-full flex flex-col">
                        <label for="email" class="font-semibold leading-none mt-4">メールアドレス</label>
                        <input type="text" name="email" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="email" value="{{old('email')}}" placeholder="Enter Email">
                    </div>
                </div>
    
                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold leading-none mt-4">本文</label>
                    <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                </div>
                <div class="contact-button">
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                </div>
                
            </form>
        </div>
    </div>
</x-PrtTop-layout>
