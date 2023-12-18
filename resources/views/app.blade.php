<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Inclure les fichiers CSS et JS de la bibliothèque -->
    <link rel="stylesheet" href="{{ asset('../../node_modules/intl-tel-input.min.css') }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <script src="{{ asset('../../node_modules/intl-tel-input.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#numero").intlTelInput({
                separateDialCode: true,
                initialCountry: "auto",
                preferredCountries: ["us", "gb", "fr"] // Liste des pays préférés
            });
        });
    </script>

</body>

</html>
