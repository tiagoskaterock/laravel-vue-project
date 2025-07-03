<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    {{-- jQuery --}}
    <script src="{{ asset('lte/plugins/jquery/jquery.js') }}"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">

    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @inertia

    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.js') }}"></script>

    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.js') }}"></script>
</body>
</html>
