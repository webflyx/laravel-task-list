<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style type="text/tailwindcss">
        .btn-primary {
            @apply border border-blue-400 bg-blue-400 px-4 py-2 rounded-full text-white shrink-0 hover:bg-blue-600 hover:border-blue-600
        }
        .btn-secondary {
            @apply border border-gray-400 px-4 py-2 rounded-lg hover:bg-gray-300
        }
        label {
            @apply font-medium mb-1 mt-5 block
        }
        input,textarea {
            @apply border border-gray-300 rounded-md block w-full px-4 py-2 focus-visible:border-blue-400 focus-visible:outline-none
        }
        .error-msg {
            @apply text-red-600 text-sm
        }
    </style>

    @yield('styles')
</head>

<body class="containers mx-auto max-w-lg my-12">
    @if (session()->has('success'))
        <div class="mb-6 border rounded-md border-green-600 px-5 py-2 bg-green-100">{{ session('success') }}</div>
    @endif
    <div class="flex justify-between items-center mb-6 gap-4">
        <h1 class="text-4xl font-semibold">@yield('title')</h1>
        @yield('title_side')
    </div>
    
    <div>@yield('content')</div>
</body>

</html>
