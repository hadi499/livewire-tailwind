<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Laravel Tailwind' }}</title>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        /* trix-toolbar [data-trix-button-group="block-tools"] {
            display: none;
        } */

        .trix-button--icon-increase-nesting-level {
            display: none !important;

        }

        .trix-button--icon-decrease-nesting-level {
            display: none !important;

        }

        .trix-button--icon-heading-1 {
            display: none !important;

        }

        .trix-button--icon-code {
            display: none !important;

        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="flex">

        <x-sidebar />
        {{ $slot }}
    </div>

</body>

</html>