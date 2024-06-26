<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    <meta name="description" content="動画編集を依頼するならLCE 個人事業主の特権でどこよりもローコストで出来ます！まずはお問い合わせ！">
    <script>
      (function(d) {
        var config = {
          kitId: 'diq2pfe',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
      </script>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-3X6XFYD0WP"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-3X6XFYD0WP');
        </script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-right justify-items-end">
        <x-nav-link href="#home">
            homu
        </x-nav-link>
        <x-nav-link href="#works">
            works
        </x-nav-link>
        <x-nav-link href="#contact">
            contact
        </x-nav-link>
    </div>
    <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>


</html>
