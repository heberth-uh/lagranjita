<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita</title>
    <link rel="stylesheet" href="../../css/mystyles.css">
    <script>
    
        document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
            });
        });
        });

    </script>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{url('/producto/')}}">
                <h1 class="title is-4 has-text-primary">LaGranjita</h1>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>
    </nav>
    <div class="container is-fullhd my-6">
        <div class="columns">
            <div class="column is-2-desktop">
            </div>
            
            <div class="column is-8-desktop">
                @yield('content')
            </div>
            
            <div class="column is-2-desktop">
            </div>
        </div>
    </div>

</body>

</html>