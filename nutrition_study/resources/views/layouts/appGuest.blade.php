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
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.guestnavi')


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

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> haruya
