<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | {{ config('app.name') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="flex h-screen items-center justify-center bg-gray-100 font-sans">
  <div class="w-full max-w-sm rounded-lg bg-white p-8 shadow-lg">
    <h2 class="mb-6 text-center text-2xl font-bold uppercase">Register</h2>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="mb-2 block text-sm text-gray-700" for="name">Name</label>
        <input class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" type="text" value="{{ old('name') }}" required>
        <x-input-error class="mt-1 text-red-500" :messages="$errors->get('name')" />
      </div>
      <div class="mb-4">
        <label class="mb-2 block text-sm text-gray-700" for="email">Email</label>
        <input class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" type="email" value="{{ old('email') }}" required>
        <x-input-error class="mt-1 text-red-500" :messages="$errors->get('email')" />
      </div>
      <div class="mb-6">
        <label class="mb-2 block text-sm text-gray-700" for="password">Password</label>
        <input class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" name="password" type="password" required>
        <x-input-error class="mt-1 text-red-500" :messages="$errors->get('password')" />
      </div>
      <div class="mb-6">
        <label class="mb-2 block text-sm text-gray-700" for="password_confirmation">Confirm Password</label>
        <input class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="password_confirmation" name="password_confirmation" type="password" required>
        <x-input-error class="mt-1 text-red-500" :messages="$errors->get('password_confirmation')" />
      </div>
      <button class="w-full rounded-lg bg-sky-500 py-2 text-white transition duration-200 hover:bg-sky-600" type="submit">Register</button>
      <a class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-rose-500 py-2 text-white transition duration-200 hover:bg-rose-600" href="{{ route('home') }}"><i class="fa-solid fa-arrow-left mr-2 text-sm"></i>Back to Home</a>
    </form>
    <p class="mt-6 text-center text-sm text-gray-700">Already have an account? <a class="text-blue-500 hover:underline" href="{{ route('login') }}">Login</a></p>
  </div>
</body>

</html>
