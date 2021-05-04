<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <script>
            var route_check_user_answers = "{{ route('check_user_answers') }}";
            var route_create_category = "{{ route('admin_create_category') }}";
            var route_edit_category = "{{ route('admin_edit_category') }}";

            var route_create_tests_group = "{{ route('admin_create_tests_group') }}";
            var route_tests_groups_from_category_id = "{{ route('get_tests_groups_from_category_id') }}";
            var route_edit_tests_group = "{{ route('admin_edit_tests_group') }}";

            var route_categories_from_id = "{{ route('categories_from_id') }}";
            var route_edit_test = "{{ route('admin_edit_test') }}";
            var route_create_test = "{{ route('admin_create_test') }}";
        </script>
        <div id="app">
            @include('admin.navbar')

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @stack('scripts')
    </body>
</html>
