<?php
require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midstreet – sisarustrio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/midstreet/css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <section>
        <div class="hero-header">
            <h1>Sisarustrio 15 vuoden keikkailukokemuksella</h1>
        </div>
        <div class="hero-images">
            <div class="person">
                <img class="person-img" src="/midstreet/images/vince.png" alt="Vinsentti Koivula">
                <p class="person-name">VINSENTTI KOIVULA</p>
                <p>kitara, laulu</p>
                <div>
                    <a href="https://open.spotify.com/artist/1F6iX5EmHWwmWrlJtVXNUc?si=jBrWbhfnQWWX0KmbGgb8tA" target="_blank" rel="noopener noreferrer"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,0C5.373,0,0,5.373,0,12c0,6.628,5.373,12,12,12c6.628,0,12-5.372,12-12C24,5.373,18.628,0,12,0z M17.503,17.308     c-0.216,0.354-0.676,0.464-1.028,0.249c-2.818-1.722-6.365-2.111-10.542-1.157c-0.403,0.092-0.804-0.16-0.896-0.562     c-0.092-0.402,0.159-0.804,0.563-0.895c4.571-1.045,8.492-0.595,11.655,1.338C17.608,16.495,17.719,16.956,17.503,17.308z      M18.972,14.041c-0.271,0.44-0.847,0.578-1.287,0.308c-3.225-1.982-8.142-2.557-11.958-1.398C5.233,13.1,4.71,12.821,4.56,12.327     c-0.149-0.495,0.13-1.016,0.624-1.167c4.358-1.323,9.776-0.682,13.48,1.594C19.104,13.025,19.242,13.601,18.972,14.041z      M19.098,10.638C15.23,8.341,8.85,8.13,5.157,9.251c-0.593,0.18-1.22-0.155-1.4-0.748c-0.18-0.593,0.155-1.22,0.748-1.4     c4.239-1.287,11.285-1.038,15.738,1.605c0.533,0.317,0.708,1.005,0.392,1.538C20.32,10.779,19.63,10.955,19.098,10.638z" fill="white" />
                        </svg></a>
                </div>
            </div>
            <div class="person">
                <img class="person-img" src="/midstreet/images/vertti.png" alt="Vertti Koivula">
                <p class="person-name">VERTTI KOIVULA</p>
                <p>basso, laulu</p>
                <div>
                    <a href="https://on.soundcloud.com/Xm1fHcLnn3PQnK6Szk" target="_blank" rel="noopener noreferrer"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21,1H11A3,3,0,0,0,8,4V14.026A4.948,4.948,0,0,0,5,13a5,5,0,1,0,5,5V4a1,1,0,0,1,1-1H21a1,1,0,0,1,1,
                        1V14.026A4.948,4.948,0,0,0,19,13a5,5,0,1,0,5,5V4A3,3,0,0,0,21,1ZM5,21a3,3,0,1,1,3-3A3,3,0,0,1,5,21Zm14,0a3,3,
                        0,1,1,3-3A3,3,0,0,1,19,21Z" fill="white" />
                        </svg></a>
                </div>
            </div>
            <div class="person">
                <img class="person-img" src="/midstreet/images/viia.png" alt="Viia Koivula">
                <p class="person-name">VIIA KOIVULA</p>
                <p>laulu, koskettimet</p>

                <div>
                    <a href="https://open.spotify.com/artist/0dJlEUqherv8Fo2S7sJo21?si=z441hrcVS9iCJ31Kv2ffAA" target="_blank" rel="noopener noreferrer"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,0C5.373,0,0,5.373,0,12c0,6.628,5.373,12,12,12c6.628,0,12-5.372,12-12C24,5.373,18.628,0,12,0z M17.503,17.308     c-0.216,0.354-0.676,0.464-1.028,0.249c-2.818-1.722-6.365-2.111-10.542-1.157c-0.403,0.092-0.804-0.16-0.896-0.562     c-0.092-0.402,0.159-0.804,0.563-0.895c4.571-1.045,8.492-0.595,11.655,1.338C17.608,16.495,17.719,16.956,17.503,17.308z      M18.972,14.041c-0.271,0.44-0.847,0.578-1.287,0.308c-3.225-1.982-8.142-2.557-11.958-1.398C5.233,13.1,4.71,12.821,4.56,12.327     c-0.149-0.495,0.13-1.016,0.624-1.167c4.358-1.323,9.776-0.682,13.48,1.594C19.104,13.025,19.242,13.601,18.972,14.041z      M19.098,10.638C15.23,8.341,8.85,8.13,5.157,9.251c-0.593,0.18-1.22-0.155-1.4-0.748c-0.18-0.593,0.155-1.22,0.748-1.4     c4.239-1.287,11.285-1.038,15.738,1.605c0.533,0.317,0.708,1.005,0.392,1.538C20.32,10.779,19.63,10.955,19.098,10.638z" fill="white" />
                        </svg></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-song-list">
        <div class="song-list-container">
            <h3>BIISILISTAA</h3>
            <div class="song-list-scrollable">
                <?php include 'listFiles.php'; ?>
            </div>
        </div>
    </section>

    <section class="slider-container">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide1" src="..//images/band1.jpg" alt="Heavy metal bassist">
                <img id="slide2" src="../images/band2.jpg" alt="Rock singer">
                <img id="slide3" src="../images/band3.jpg" alt="Man playing guitar">
            </div>
            <div class="slider-nav">
                <a href="#slide1"></a>
                <a href="#slide2"></a>
                <a href="#slide3"></a>

            </div>
        </div>

    </section>

    <section>
        <div class="the-band">
            <h1>OTA YHTEYTTÄ</h1>
            <div class="contact-icon">
                <a class="contact-icon" href="https://mail.google.com/mail/?view=cm&fs=1&to=midstreetband@gmail.com" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="2rem">
                        <path d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z" />
                    </svg></a>

                <a class="contact-icon" href="#" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="2rem">
                        <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                        <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                        <circle cx="18.406" cy="5.594" r="1.44" />
                    </svg></a>

                <a class="contact-icon" href="www.facebook.com/midstreetband" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" width="2rem">
                        <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                    </svg></a>
            </div>
        </div>
    </section>


    <footer>
        <div>
            <p>Copyright Vertti Koivula 2025</p>
        </div>
    </footer>

    <script src="../js/preventHrefJump.js"></script>
</body>

</html>