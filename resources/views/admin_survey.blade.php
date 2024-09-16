@extends('layouts.app')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <div class="img-profile rounded-circle" style="    background-color: #83f0a7;color: white;font-weight: bold;justify-content: center;text-align: center;">
                                   <span style="font-size: larger;">{{substr(Auth::user()->name, 0, 1)}}</span>
                                </div>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Survey Event</h1>
                    <p class="mb-4">Data ini mencakup informasi Grafik  survey dari pilihan pengguna.</p>

                   
                    <!-- @foreach($questions as $question)
                        @if($question->type == 'multiple_choice')
                            <div id="chart-{{ $question->id }}" style="max-width: 600px; margin: 20px auto;"></div>
                        @endif
                    @endforeach

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            @foreach($questions as $question)
                                @if($question->type == 'multiple_choice')
                                    const data{{ $question->id }} = @json($question->answers->map(function($answer) {
                                        return [
                                            'name' => $answer->answer_text,
                                            'value' => $answer->percentage ?? $answer->percentage.toFixed(2) // Keep percentage to 2 decimal places
                                        ];
                                    }));

                                    const options{{ $question->id }} = {
                                        series: data{{ $question->id }}.map(item => item.value),
                                        labels: data{{ $question->id }}.map(item => item.name),
                                        chart: {
                                            type: 'donut',
                                            height: 350
                                        },
                                        title: {
                                            text: '{{ $question->question_text }}'
                                        },
                                        dataLabels: {
                                            formatter: function(val) {
                                                return val.toFixed(2) + '%'; // Show percentage on the chart
                                            }
                                        },
                                        responsive: [{
                                            breakpoint: 480,
                                            options: {
                                                chart: {
                                                    width: '100%'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        }]
                                    };

                                    const chart{{ $question->id }} = new ApexCharts(document.querySelector('#chart-{{ $question->id }}'), options{{ $question->id }});
                                    chart{{ $question->id }}.render();
                                @endif
                            @endforeach
                        });
                    </script> -->


                    <div class="container mt-5">
        <div class="row">
            @foreach($questions as $question)
                @if($question->type == 'multiple_choice')
                    <div class="col-md-6 mb-4">
                        <div id="chart-{{ $question->id }}" style="max-width: 100%; margin: auto;"></div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @foreach($questions as $question)
                @if($question->type == 'multiple_choice')
                    const data{{ $question->id }} = @json($question->answers->map(function($answer) {
                        return [
                            'name' => $answer->answer_text,
                            'value' => $answer->percentage ?? parseFloat($answer->percentage).toFixed(2) // Ensure percentage is a float and fixed to 2 decimal places
                        ];
                    }));

                    const options{{ $question->id }} = {
                        series: data{{ $question->id }}.map(item => parseFloat(item.value)),
                        labels: data{{ $question->id }}.map(item => item.name),
                        chart: {
                            type: 'donut',
                            height: 350
                        },
                        legend: {
                            position: 'bottom', // Position legend below the chart
                            horizontalAlign: 'center',
                            floating: false,
                            fontSize: '14px',
                            offsetY: 10
                        },
                        title: {
                            text: '{{ $question->question_text }}',
                            align: 'center'
                        },
                        dataLabels: {
                            formatter: function(val) {
                                return val.toFixed(2) + '%'; // Display percentage on the chart
                            }
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: '100%'
                                },
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }]
                    };

                    const chart{{ $question->id }} = new ApexCharts(document.querySelector('#chart-{{ $question->id }}'), options{{ $question->id }});
                    chart{{ $question->id }}.render();
                @endif
            @endforeach
        });
    </script>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    // var options = {
    //       series: [44, 55, 41, 17, 15],
    //       chart: {
    //       type: 'donut',
    //     },
    //     responsive: [{
    //       breakpoint: 480,
    //       options: {
    //         chart: {
    //           width: 200
    //         },
    //         legend: {
    //           position: 'bottom'
    //         }
    //       }
    //     }]
    //     };

    // var chart = new ApexCharts(document.querySelector("#chart"), options);
    // chart.render();
    
       
});
</script>
@endsection