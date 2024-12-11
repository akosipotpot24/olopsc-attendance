<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OLOPSC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- Other necessary CSS links -->
  </head>
  <body>


    
    <x-header>
      @if(auth()->user() && auth()->user()->UserType === 'hslrc')
      <div class="col-lg-7 py-3 py-md-5">
          <h1 class="display-4">Good Day!</h1>
          <p class="lead text-muted">
              <!-- Display Date and Time -->
              <span id="current-date">{{ now()->format('F j, Y') }}</span>, 
              <span id="current-time">{{ now()->format('h:i:s A') }}</span>
          </p>
      </div>
      @endif
    </x-header>

    <!-- Add JavaScript for real-time updates -->
    <script>
        function updateTime() {
            const now = new Date();
            const dateOptions = { month: 'long', day: 'numeric', year: 'numeric' };
            const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };

            // Update the date and time every second
            document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', dateOptions);
            document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', timeOptions);
        }

        // Initial update
        updateTime();

        // Update every second
        setInterval(updateTime, 1000);
    </script>
  </body>
</html>
