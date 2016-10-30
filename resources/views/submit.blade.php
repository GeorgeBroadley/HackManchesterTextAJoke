<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Submit a Joke | Text A Joke</title>
    <link href="./css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div class="sub-title">Submit a Joke</div>
                <form role="form" method="POST" action="{{ url('/submit') }}">
                    <div class="section-lead-paragraph">
                            {{ csrf_field() }}
                            <input class="form-input" placeholder="Joke Title" id="title" type="text" name="title" value="{{ old('title') }}" required>
                            <input class="form-input" placeholder="Joke Punchline" id="punchline" type="text" name="punchline" value="{{ old('punchline') }}" required>
                    </div>
                    <div class="section-button">
                        <a href="./"><button type="button">Home</button></a>
                        <button type="submit" class="submit-btn">Submit Joke</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
