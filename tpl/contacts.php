<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">
<div class="top-block company-head">
    <div class="container-fluid">
        <div class="row" data-wb-role="tree" data-wb-from="lang" data-wb-branch="header">
            <div class="col-xl-6">
                <h1 class="top-block__title">
                    {{name}}
                </h1>
            </div>
            <div class="col-xl-6">
                <div class="contacts__desc">
                    <div class="row">
                        <div class="col-md-4 contacts__item">
                            <h3 class="contacts__h3">Звоните</h3>
                            <div>Тел. <a href="tel:+{{text2tel({{_sett.phone}})}}" class="linkWhite">{{_sett.phone}}</a></div>
                            <div>Моб. <a href="tel:+{{text2tel({{_sett.mobile}})}}" class="linkWhite">{{_sett.mobile}}</a></div>
                        </div>
                        <div class="col-md-4 contacts__item">
                            <h3 class="contacts__h3">Пишите</h3>
                            <div>Общая: <a href="mailto:{{_sett.email1}}" class="linkWhite">{{_sett.email1}}</a></div>
                            <div>Работа: <a href="mailto:{{_sett.email2}}" class="linkWhite">{{_sett.email2}}</a></div>
                        </div>
                        <div class="col-md-4 contacts__item">
                            <h3 class="contacts__h3">Приезжайте</h3>
                            <div>{{_sett.address}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px; /* The height is 400 pixels */
        width: 100%; /* The width is the width of the web page */
    }
</style>
<div class="map">
    <div id="map"></div>
</div>

<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>