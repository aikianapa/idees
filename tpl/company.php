<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">

<div class="top-block company-head" data-wb-role="tree" data-wb-from="lang" data-wb-branch="content" data-wb-children="false" data-wb-hide="wb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <h1 class="top-block__title">
                    {{name}}
                </h1>
            </div>
            <div class="col-xl-6">
                <div class="company-head__desc">
                    {{data.text->strip_tags()}}
                </div>
            </div>
        </div>
    </div>
</div>

<div data-wb-role="tree" data-wb-from="lang" data-wb-branch="content" data-wb-parent="false" data-wb-children="false" data-wb-hide="*">
<div class="company-block company-{{id}}">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="company-block__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6" data-wb-where='"{{id}}" !=="clients" AND "{{id}}" !=="approach" AND "{{id}}" !=="experience"'>
                    <div class="company-about__subtitle" data-wb-where='"{{data.header}}">""' data-wb-hide="wb">
                        {{data.header}}
                    </div>
                    {{data.text}}
                </div>
                <div class="col-xl-6" data-wb-where='"{{id}}" =="clients"' data-wb-hide="wb">
                    <div class="row company-clients__row" data-wb-role="foreach" data-wb-from="data.images" data-wb-tpl="false" data-wb-hide="wb">
                        <div class="col col-md-4 col-lg-auto company-clients__item" data-wb-where='"{{visible}}"="1"' data-wb-hide="wb">
                            <div>
                                <img src="/uploads/{{_route.form}}/{{_route.item}}/{{img}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-wb-where='"{{id}}" =="approach"' data-wb-hide="wb">
                    <style>
                    .company-approach:before {
                            background-image: url(/uploads/{{_route.form}}/{{_route.item}}/{{data.images[1].img}});
                    }
                    @media (min-width: 768px) {
                        .company-approach:before {
                            background-image: url(/uploads/{{_route.form}}/{{_route.item}}/{{data.images[0].img}});
                        }
                    }
                    </style>
                    <div class="row company-block__row" data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="wb">
                        <div class="col-md-6 company-block__item">
                            <div class="company-block__item-title">
                                {{name}}
                            </div>
                            {{data.text}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-wb-where='"{{id}}" =="experience"' data-wb-hide="wb">
                    <div class="row company-block__row" data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="wb">
                        <div class="col-md-6 company-block__item">
                            <div class="company-block__item-title">
                                {{name}}
                            </div>
                            {{data.text}}
                        </div>
                    </div>
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
            <div class="company-block__subtitle company-experience__subtitle" data-wb-where='"{{id}}" =="experience"' data-wb-hide="wb">
                {{data.header}}
            </div>
        </div>
    </div>
</div>
</div>

<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>