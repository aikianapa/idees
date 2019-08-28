<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">


<div class="top-block company-head">
    <div class="container-fluid" data-wb-role="tree" data-wb-from="lang" data-wb-branch="content" data-wb-hide="wb">
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

<div class="blog-list">
    <div class="container-fluid">
        <div class="row" data-wb-role="foreach" data-wb-form="news" data-wb-sort="date:d" data-wb-size="3" data-wb-more="#moreNews">
            <meta data-wb-role="variable" var="col" data-wb-if='"{{_ndx}}"="3"' value="col-12" else="col-lg-6">
            <div class="{{_var.col}} mb-5" data-wb-where='"{{active}}"="on"'>
                <a href="/blog/{{id}}/" class="blog-card">
                    <div class="blog-card__bg" style="background-image: url('{{_image}}')"></div>
                    <div class="blog-card__category" data-wb-role="tree" data-wb-item="blogtags" data-wb-branch="{{tag}}" data-wb-hide="wb">
                        {{name}}
                    </div>
                    <div class="blog-card__wrap">
                        <div class="blog-card__title">
                            {{header}}
                        </div>
                        <div class="blog-card__text">
                            {{descr}}
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="text-center pt-lg-5">
            <button id="moreNews" class="button button--290 button--dark-outline">Показать больше статей</button>
        </div>
    </div>
</div>
<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>