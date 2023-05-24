<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: black;
            color: red;
            font-size: 48px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div id="clock"></div>

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var time = hours + ":" + formatTime(minutes) + ":" + formatTime(seconds);
            document.getElementById("clock").innerHTML = time;
        }

        function formatTime(time) {
            if (time < 10) {
                return "0" + time;
            }
            return time;
        }

        setInterval(updateClock, 1000); // Update every 1 second
    </script>
</body>
</html>

