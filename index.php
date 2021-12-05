<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>audio File Upload</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header class="header">
        <div class="profile">
            <img src="">
        </div>
        <figure>
            <h2></h2>
            <figcaption>Here's Your Fab Intro:</figcaption>
            <audio class="aud"
                controls
                src=" ">
                    Your browser does not support the
                    <code>audio</code> element.
            </audio>
        </figure>
    </header>
    <div class="form">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>Upload audio file:<br />
                <input type='file' accept="audio/*" placeholder="" class="profile-aud" name="audioFile">
            </label>
            <button type="submit" name="save_audio" value="upload audio">upload audio</button>
        </form>
    </div>

    <script src="/index.js"></script>
    <script src="/wavesurfer.js"></script>

    <div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
    </div>


</body>

</html>