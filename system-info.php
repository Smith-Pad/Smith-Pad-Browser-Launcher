<html>

<head>
    <title>Interface Options</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="src/index.css" rel="stylesheet">
    <link href="src/font-sizes.css" rel="stylesheet">
    <link href="src/buttons.css" rel="stylesheet">
    <link href="src/layouts.css" rel="stylesheet">
</head>

<body>
    <ul> <a href="menu.php" class="FOIL-button-small color-is-red">CLOSE</a>
         <a href="system-info.php" class="FOIL-button-small color-is-blue">System Info</a>
    </ul>
    <div class="content color-one">
        <h1> System Info</h1>
    </div>
    <div class="content color-two">
        <p id="demo">
            <script>
                var txt = /*Leave this one blank */ "";
                   // window.js
               txt += "<p>Browser CodeName: " + navigator.appCodeName + "</p>";
               txt += "<p>Browser Name or based on : " + navigator.appName + "</p>";
               txt += "<p>Browser Version: " + navigator.appVersion + "</p>";
               txt += "<p>Cookies Enabled: " + navigator.cookieEnabled + "</p>";
               txt += "<p>Browser Language: " + navigator.language + "</p>";
               txt += "<p>Browser Online: " + navigator.onLine + "</p>";
               txt += "<p>Platform: " + navigator.platform + "</p>";
               txt += "<p>User-agent header: " + navigator.userAgent + "</p>";
               txt += "<p>Vendor:" + navigator.vendor +"</p>";
               txt += "<p>Java :" + navigator.javaEnabled +"</p>";

               document.getElementById("demo").innerHTML = txt;
                       </script>



        </p>
    </div>
</body>

</html>
