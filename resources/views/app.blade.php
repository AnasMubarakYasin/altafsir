<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="b-ZxLe_--k-C8GOVwAqbgMSGcY72TNHPayzI-t31QK8" />
    <meta name="description" content="pencari tafsir khusus perencanaan wilayah dan kota" />

    <link rel="shortcut icon" href="{{ asset('/logo.png') }}" type="image/x-icon">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
