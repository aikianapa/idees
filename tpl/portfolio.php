<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">

<div class="top-block company-head" data-wb-role="tree" data-wb-from="lang" data-wb-branch="content">
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

<div class="portfolio">
    <div class="container-fluid">
        <div class="row" data-wb-role="foreach" data-wb-form="products" data-wb-more="#more" data-wb-size="{{_sett.portfolio_list}}" data-wb-sort="_created:d">
            <div class="col-lg-6 mb-5" data-wb-where='"{{active}}" = "on"' data-wb-hide="wb">
                <a href="/portfolio/{{id}}/" class="portfolio-card">
                    <div class="portfolio-card__bg">
                        <!--                        <img class="portfolio-card__img" src="/thumb/596x400/src/{{_image}}">-->
                        <div class="portfolio-card__img" style="background-image: url('/thumb/894x600/src/{{_image}}')"></div>
                    </div>
                    <div class="portfolio-card__wrap">
                        <div class="portfolio-card__category">
                            <div data-wb-role="foreach" data-wb-from="category" data-wb-tpl="false" data-wb-hide="*">
                                <nobr data-wb-role="tree" data-wb-item="products_category" data-wb-branch="{{_value}}" data-wb-children="false" data-wb-hide="*">
                                {{name}}<span data-wb-hide="*" data-wb-where='"{{%_ndx}}" < "{{count({{%%category}})}}" '>,&nbsp; </span>
                                </nobr>
                            </div>
                        </div>
                        <div class="portfolio-card__title">
                            {{header}}
                        </div>
                        <div class="portfolio-card__desc">
                            {{descr}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center pt-lg-5">
            <button id="more" class="button button--290 button--dark-outline">Показать больше кейсов</button>
        </div>
    </div>
</div>

<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html> 