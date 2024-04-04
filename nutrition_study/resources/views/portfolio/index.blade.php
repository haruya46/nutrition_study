<x-PrtTop-layout id="home">
<div class="main-top">
    <div>
        <h3>LCE</h3>
        <p>LCE（LinkCreativeEncourage）は繋がりで物を作り出すことで<br>間接的に社会的貢献し勇気と希望を与えます！</p>
    </div>
</div>
<div class="works" id="works">
    <h4>works</h4>
    <iframe class="youtube"width="560" height="315" src="https://www.youtube.com/embed/YWqQic3XVHY?si=d6SOg--0ZkFrPSx6" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <p>自己紹介動画</p>
</div>


<div class="service" id="service">
    <h4>service</h4>
    <div>

    </div>
    <div class="contact-btn">
        <div class="contact-btn-box">
            ご依頼はこちらから
        </div>
    </div>

</div>


<div class="about" id="about">
<h4>about</h4>
</div>


<div class="contact"id="contact">
    <h4>contact</h4>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">お問い合わせ</div>
    
                    <div class="card-body">
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
                                    <button type="submit" class="btn btn-primary">
                                        お問い合わせ内容の確認へ
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-PrtTop-layout>