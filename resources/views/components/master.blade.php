@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>{{$title ?? 'Default Title'}}</title>
</head>

<body>
    <!-- Navigation Bar -->
    @include('partials.nav')


    <main>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                @include('partials.flashbag')    
            </div>
        
            {{ $slot}}
        </div>
    </main>

       


    <!--  FOOTER -->
    @include('partials.footer')

</body>

</html>
