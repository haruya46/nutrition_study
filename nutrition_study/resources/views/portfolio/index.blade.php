<x-PrtTop-layout id="home">
<div class="main">

</div>
<div class="main-top">
    <div>
        <h3>LCE</h3>
        <p>LCE（LinkCreativeEncourage）は繋がりで物を作り出すことで<br>間接的に社会的貢献し勇気と希望を与えます！</p>
    </div>
</div>
<div class="works" id="works">
    <h4>works</h4>
        <div class="btn works-btn movie-btn">
        <p> 動画編集</p>
        </div>
    <div>
        <div class="movie">
            <div class="movie-sample youtube">
                <iframe src="https://www.youtube.com/embed/YWqQic3XVHY?si=IXFx3dyARnaUdHzL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>自己紹介動画</p>
            </div>
            <h5>Shorts</h5>
            <div class="movie-sample">
                <iframe src="https://www.youtube.com/embed/O6oKUuvmudQ" title="犬田布岬の神秘体験" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <p>犬田布岬の神秘体験 Instagramリール動画用</p>
            </div>
        </div>
        <div class="web-site">
            <div class="btn works-btn movie-btn">
                <p>web制作</p>
            </div>
            <div>
                <p>管理栄養士国家試験対策サイト</p>
                <p>知人が管理栄養士の勉強のために自分が問題にしたいものを記入しいつでも携帯一つで学習をできるようにしたいという思いを受け作りました</p>
                <x-nav-link :href="route('guest.index')" :active="request()->routeIs('quiz.index')">
                    サイトを見る
                </x-nav-link>
            </div>
            <div>
                <p>株式会社reach様</p>
                <p>（株）reach様よりホームページの作成の依頼をいただきWordpressを使用したホームページを作成いたしました</p>
                <a href="https://www.reach-staff.jp/"></a>
                <x-nav-link href="https://www.reach-staff.jp/">
                    サイトを見る
                </x-nav-link>
            </div>
        </div>

    </div>
</div>

<div class="contact"id="contact">
    <h4>contact</h4>
                        <form method="POST" action="{{ route('portfolio.confirm') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">メールアドレス</label>
    
                                <div class="col-md-9">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="contact" class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                                <div class="col-md-9">
                                    <textarea id="contact" class="form-control  @error('contact') is-invalid @enderror" name="contact" cols="30" rows="10"></textarea>
    
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn">
                                        内容を確認して送信する
                                    </button>
                                </div>
                            </div>
                        </form>
</div>
</x-PrtTop-layout>