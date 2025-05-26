<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    {{-- jQuery --}}
    <script src="{{ asset('lte/plugins/jquery/jquery.js') }}"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

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
