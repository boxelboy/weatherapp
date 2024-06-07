<div>
    <style>
        :root{
            --primary: #8224e3;
            --secondary: #00ca9f;
            --font: verdana;
            --transition-duration: 1s;
        }
        body {
            background: linear-gradient(-45deg, var(--primary), var(--secondary), var(--primary), var(--secondary));
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }
        main {
            background-color: rgba(255, 255, 255, 0);
            border-radius: .25em;
            box-shadow: none;
            box-sizing: border-box;
            left: 50%;
            padding: 10vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
            font-family: var(--font);
            color: #fff;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

    </style>

    <main>
        <section>
            <h2 id="time"></h2>
            <div id="weather"><?= $temp ?>&deg;C | <?= $weather ?></div>
        </section>
    </main>

    <script>
        function updateTime() {
            const now = new Date();
            const date = now.toLocaleDateString('en-gb', {weekday: 'long', month: 'long', day: 'numeric'});
            const time = now.toLocaleTimeString();

            document.getElementById('time').innerHTML = `${date}<br>${time}`;

        }
        setInterval(updateTime, 1000);
    </script>

</div>
<?php /**PATH /Users/chris.saunders/Projects/nativephp/resources/views/weather.blade.php ENDPATH**/ ?>