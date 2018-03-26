<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('vendor/panda-admin/admin.css') }}">
</head>
<body>
    <div id="app" class="columns">
        <div class="column is-2">
            <sidebar-component></sidebar-component>
        </div>

        <div class="column is-10">
            <router-view :key="$route.fullPath"></router-view>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('vendor/panda-admin/admin.js') }}"></script>
</body>
</html>