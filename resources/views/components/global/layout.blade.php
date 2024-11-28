<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Jobs Portal</title>
    <x-global.imports />
</head>

<body class="font-poppins bg-gray-200 overflow-x-hidden max-w-full">
    <x-global.toast/>
    {{$slot}}

</body>

</html>