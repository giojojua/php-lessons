<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                document.getElementById('output').innerHTML = ''
            } else {
                // AJAX REQUEST
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById('output').innerHTML = this.responseText
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true)
                xmlhttp.send()
            }
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Search Users</h1>
    <form action="">
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        <p>
            Suggestions: <span id="output" style="font-weight: bold"></span>
        </p>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>