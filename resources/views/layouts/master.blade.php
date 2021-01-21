<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}" crossorigin="anonymous">

    @yield('styles')
</head>

<body>
    @if (1)
      <div class="container-xl">
        @include('partials/dashtopmenu')
        @yield('content')
      </div>
    @elseif (0)
      @include('partials/header')
      @include('partials/slider')
      <div class="container-xl">
        @yield('content')
        @include('partials/ofertas')
      </div>
    @else
      @include('partials/dashtopmenu')
      <div class="container-fluid">
        <div class="row">
          @include('partials/sidebar')
          @include('partials/dashcontent')
        </div>
      </div>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/cd9ca15c22.js" crossorigin="anonymous"></script>

{{--
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

    </script> --}}
    @yield('scripts')

</body>

</html>
