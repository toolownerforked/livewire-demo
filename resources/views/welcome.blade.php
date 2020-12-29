<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>jQuery UI Checkboxradio - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        window.addEventListener('data-loaded', () => {
            $("input").checkboxradio();
        });
    </script>
    @livewireStyles
</head>

<body>
    <div class="widget">
        <h2>Radio Group</h2>
        @livewire('radio-group')
    </div>
    @livewireScripts
</body>

</html>
