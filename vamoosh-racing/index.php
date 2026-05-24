<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <title>VamooshRacing</title>

    <link rel="stylesheet" href="app.css" type="text/css"/>
    <script>
        function $_GET(item) {
            var svalue = location.search.match(new RegExp("[\?\&]" + item + "=([^\&]*)(\&?)","i"));
            return svalue ? svalue[1] : svalue;
        }
        var supportedLanguages = ["en", "en_US", "es", "it", "pt", "zh"];
        var defaultLanguage = "en";
        var language = $_GET('lang');
        if (!language) {
            language = $_GET('language');
            if (!language) {
                language = document.getElementsByTagName("html")[0].getAttribute("lang");
                if (!language) {
                    language = navigator.language || navigator.userLanguage;
                    if (language) {
                        language = language.toLowerCase();
                        if (language.indexOf("us") >= 0) language = "en_US";
                        if (supportedLanguages.indexOf(language) < 0) language = defaultLanguage;
                    } else {
                        language = defaultLanguage;
                    }
                }
            }
        }



        var pocoyoOnClickURL = "https://www.pocoyo.com/en/funny-games";
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        var googleFontFamilies = ['Open Sans'];
        var customFontFamilies = [];
        var inGameFontFamilies = googleFontFamilies.slice().concat(customFontFamilies);
        WebFont.load({
            custom: {
                families: customFontFamilies
            },
            google: {
                families: googleFontFamilies
            }
        });
    </script>
    <script src="keymaster.js"></script>
    <script src="lib/js/phaser.min.js"></script>
    <script src="out.js"></script>

</head>
<body>
<div id="orientationDiv"></div>
</body>
</html>