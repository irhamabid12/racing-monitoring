<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .i4ewOd-pzNkMb-haAclf {
            display: none;
        }
    </style>
</head>
<style>
    .user-logo {
        width: 100;
        /* Adjust the size as needed */
        height: 100px;
        /* Adjust the size as needed */
        border-radius: 50%;
        object-fit: cover;
        background-color: gray;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-speedometer fs-3"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5">
        <div class="card shadow-sm mb-3 w-100 p-3">
            <div class="row">
                <div class="col-md-2 align-self-center">
                    <div class="row">
                        <div class="col">
                            <img src="img/user-logo.jpg" alt="User Logo" class="img-fluid rounded-circle">
                        </div>
                        <div class="col">
                            <h5 class="text-dark">Username</h5>
                            <p class="card-text fs-8"><small class="text-body-secondary">device ID</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row g-0">
                        <div class="col text-center">
                            <h1 class="card-title text-primary" id="speed">0</h1>
                            <p class="card-text">Km/h</p>
                            <p class="card-text text-body-secondary fst-italic fw-bold"><small
                                    class="text-body-secondary">Speed</small></p>
                        </div>
                        <div class="col text-center">
                            <h1 class="card-title text-secondary" id="rpm">0</h1>
                            <p class="card-text">RPM</p>
                            <p class="card-text text-body-secondary fst-italic fw-bold"><small
                                    class="text-body-secondary">Cadence</small></p>
                        </div>
                        <div class="col text-center">
                            <h1 class="card-title text-success" id="bpm">0</h1>
                            <p class="card-text">beats/m</p>
                            <p class="card-text text-body-secondary fst-italic fw-bold"><small
                                    class="text-body-secondary">Heart Beat</small></p>
                        </div>
                        <div class="col text-center">
                            <h1 class="card-title text-danger"id="tilt">0</h1>
                            <p class="card-text">&deg;</p>
                            <p class="card-text text-body-secondary fst-italic fw-bold"><small
                                    class="text-body-secondary">Tilt</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 align-self-center">
                    <div class="col text-center">
                        <p class="card-text">Status</p>
                        <h4 class="card-title text-success" id="status"><i class="bi bi-dash-circle"></i> Inactive
                        </h4>
                        <p class="card-text text-muted"><small class="text-body-secondary">Time: <span id="timer">00:00:00</span></small></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card shadow">
            <div class="card-body">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NIUNaf6Bzk7_6KbOSlRUvlzuUOxVn5E&ehbc=2E312F&noprof=1" width="100%" height="480"></iframe>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="profileModalLabel">User Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td width="30%"><strong>Name</strong></td>
                                <td>: {{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>: {{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Api Key</strong></td>
                                <td>: {{ Auth::user()->api_token }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('5b9b8656baa3d9694cf2', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(event) {
            document.getElementById("speed").innerHTML = event.data.speed ?? 0;
            document.getElementById("rpm").innerHTML = event.data.cadence ?? 0;
            document.getElementById("bpm").innerHTML = event.data.heartbeat ?? 0;;
            // document.getElementById("tilt").innerHTML = event.data.tilt ?? 0;
            startTimer();

            // Clear any existing timeout and set a new one to stop the timer after 10 seconds of inactivity
            if (eventTimeout) {
                clearTimeout(eventTimeout);
            }
            eventTimeout = setTimeout(stopTimer, 3000); // Stop the timer if no events are received for 10 seconds
        });

        let hours = 0;
        let minutes = 0;
        let seconds = 0;
        let timerInterval = null;
        let eventTimeout = null;

        function updateTimer() {
            seconds++;
            if (seconds === 60) {
                seconds = 0;
                minutes++;
                if (minutes === 60) {
                    minutes = 0;
                    hours++;
                }
            }

            const formattedHours = String(hours).padStart(2, '0');
            const formattedMinutes = String(minutes).padStart(2, '0');
            const formattedSeconds = String(seconds).padStart(2, '0');
            const currentTime = `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;

            document.getElementById('timer').textContent = currentTime;
        }

        function startTimer() {
            if (!timerInterval) {
                timerInterval = setInterval(updateTimer, 1000);
                document.getElementById("status").innerHTML = '<i class="bi bi-check-circle"></i> Active';
            }
        }

        function stopTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
                document.getElementById("status").innerHTML = '<i class="bi bi-x-circle"></i> Inactive';
            }
        }
    </script>
</body>

</html>
