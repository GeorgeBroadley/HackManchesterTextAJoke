<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>{{ $joke }} | Text A Joke</title>
    <link href="./css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div class="sub-title">{{ $joke }}</div>
                <div class="section-lead-paragraph">
                    {{ $punchline }}
                    <br />
                    <a href="#">Report Joke</a>
                </div>
                <div class="section-button">
                    <a href="./"><button>Another!</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
