<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    {{-- ↓ログイン済みのユーザーにはこのナビゲーション --}}
    @auth
      @include('layouts.navigation')
    @endauth
    {{-- ↑ログイン済みのユーザーにはこのナビゲーション --}}
    {{-- ↓ログイン未のユーザーにはこのナビゲーション --}}
    @guest
      @include('layouts.guestnavi')

    @endguest
    {{-- ↑ログイン未のユーザーにはこのナビゲーション --}}

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6">
          <h2
            class="font-semibold text:xs lg:text-xl
                    first-letter:text-gray-800
                    lg:pl-36">
            {{ $header }}
          </h2>
          <div class="fixed z-10 top-20 right-64">
            <x-message :message="session('message')" />
            <x-input-error class="mb-4" :messages="$errors->all()" />
          </div>
        </div>
      </header>
    @endif
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

=======
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
>>>>>>> haruya
</html>
