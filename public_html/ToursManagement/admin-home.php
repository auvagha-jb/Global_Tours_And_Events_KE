<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
    <link href="css/admin-home.css" rel="stylesheet" type="text/css">
    <script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
    <script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
</head>
<body>
<header>
    <h1>COUNTRIES RECENTLY PACKAGED</h1>
</header>
<br>
<br>
<?php require './nav-bar.php';?>

<section id="map">
    <div id="mapdiv" style="width: 1000px; height: 600px;"></div>
    <div style="width: 1000px; font-size: 70%; padding: 5px 0; text-align: center; background-color: #7CB4E0; margin-top: 1px; color: #B4B4B7;"></div>
    <script type="text/javascript">
        var map = AmCharts.makeChart("mapdiv",{
            type: "map",
            theme: "dark",
            projection: "mercator",
            panEventsEnabled : true,
            backgroundColor : "#7CB4E0",
            backgroundAlpha : 1,
            zoomControl: {
                zoomControlEnabled : true
            },
            dataProvider : {
                map : "worldHigh",
                getAreasFromMap : true,
                areas :
                    [
                        {
                            "id": "AT",
                            "showAsSelected": true
                        },
                        {
                            "id": "BE",
                            "showAsSelected": true
                        },
                        {
                            "id": "DK",
                            "showAsSelected": true
                        },
                        {
                            "id": "FR",
                            "showAsSelected": true
                        },
                        {
                            "id": "DE",
                            "showAsSelected": true
                        },
                        {
                            "id": "IT",
                            "showAsSelected": true
                        },
                        {
                            "id": "LU",
                            "showAsSelected": true
                        },
                        {
                            "id": "NL",
                            "showAsSelected": true
                        },
                        {
                            "id": "ES",
                            "showAsSelected": true
                        },
                        {
                            "id": "CH",
                            "showAsSelected": true
                        },
                        {
                            "id": "GB",
                            "showAsSelected": true
                        },
                        {
                            "id": "BB",
                            "showAsSelected": true
                        },
                        {
                            "id": "BM",
                            "showAsSelected": true
                        },
                        {
                            "id": "CA",
                            "showAsSelected": true
                        },
                        {
                            "id": "CU",
                            "showAsSelected": true
                        },
                        {
                            "id": "JM",
                            "showAsSelected": true
                        },
                        {
                            "id": "MX",
                            "showAsSelected": true
                        },
                        {
                            "id": "US",
                            "showAsSelected": true
                        },
                        {
                            "id": "AR",
                            "showAsSelected": true
                        },
                        {
                            "id": "BR",
                            "showAsSelected": true
                        },
                        {
                            "id": "KM",
                            "showAsSelected": true
                        },
                        {
                            "id": "EG",
                            "showAsSelected": true
                        },
                        {
                            "id": "ET",
                            "showAsSelected": true
                        },
                        {
                            "id": "GH",
                            "showAsSelected": true
                        },
                        {
                            "id": "KE",
                            "showAsSelected": true
                        },
                        {
                            "id": "MG",
                            "showAsSelected": true
                        },
                        {
                            "id": "MU",
                            "showAsSelected": true
                        },
                        {
                            "id": "MA",
                            "showAsSelected": true
                        },
                        {
                            "id": "ZA",
                            "showAsSelected": true
                        },
                        {
                            "id": "TZ",
                            "showAsSelected": true
                        },
                        {
                            "id": "UG",
                            "showAsSelected": true
                        },
                        {
                            "id": "ZM",
                            "showAsSelected": true
                        },
                        {
                            "id": "CN",
                            "showAsSelected": true
                        },
                        {
                            "id": "MY",
                            "showAsSelected": true
                        },
                        {
                            "id": "MV",
                            "showAsSelected": true
                        },
                        {
                            "id": "QA",
                            "showAsSelected": true
                        },
                        {
                            "id": "SA",
                            "showAsSelected": true
                        },
                        {
                            "id": "AE",
                            "showAsSelected": true
                        },
                        {
                            "id": "AU",
                            "showAsSelected": true
                        }
                    ]
            },
            areasSettings : {
                autoZoom : true,
                color : "#B4B4B7",
                colorSolid : "#FFFFFF",
                selectedColor : "#FFFFFF",
                outlineColor : "#666666",
                rollOverColor : "#F4D03F",
                rollOverOutlineColor : "#000000"
            }
        });
    </script>
</section>

</body>
</html>