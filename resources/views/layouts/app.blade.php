<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Salt package</title>

    @if ($styles = \Salt\Nova\Nova::availableStyles(request()))
    <!-- Tool Styles -->
        @foreach($styles as $asset)
            <link href="{!! $asset->url() !!}" rel="stylesheet">
        @endforeach
    @endif
</head>
<body>
    @inertia 
    @if ($scripts = \Salt\Nova\Nova::availableScripts(request()))
        <!-- Tool Scripts -->
        @foreach ($scripts as $asset)
            <script src="{!! $asset->url() !!}"></script>
        @endforeach
    @endif
</body>
</html>
