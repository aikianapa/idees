<!doctype html>
<html lang="en" class="html-index">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="body-index preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">
<div id="fullpage">
    <div id="moveDown" class="scroll-button">
        <div class="mouse"></div>
        <p>Прокрутить вниз</p>
    </div>

    <div data-wb-role="tree" data-wb-from="lang" data-wb-hide="*">

        <div class="section" id="section{{_idx}}" data-anchor="{{id}}"
            style="background-image: url('/uploads/{{_route.form}}/{{_route.item}}/{{data.image[0].img}}')"
            data-wb-where='"{{substr({{id}},0,6)}}"="screen"' data-wb-hide="wb">
            <div class="container-fluid d-flex align-items-center h-100">
                <div class="slider-main__content">
                    <div class="slider-main__title" data-wb-where='_ndx = 1'>
                        <div class="ms-slider" data-wb-where='"{{count({{data.taglist}})}}">"0"' data-wb-hide="wb">
                            <ul class="ms-slider__words" data-wb-role="foreach" tafa-wb-tpl="false" data-wb-from="data.taglist" data-wb-hide="wb">
                                <li class="ms-slider__word">{{tag}}</li>
                            </ul>
                        </div>
                        <span class="slider-main__toptitle" data-wb-where='"{{name}}">""' data-wb-hide="wb">
                            {{name}}
                        </span>
                        <br>
                        <span class="slider-main__title" data-wb-where='"{{data.header}}">""' data-wb-hide="wb">
                            {{data.header}}
                        </span>
                    </div>
                    <a href="{{data.url}}" class="slider-main__title" data-wb-where='_ndx > 1'>
                        <span class="slider-main__toptitle" data-wb-where='"{{name}}">""' data-wb-hide="wb">
                            {{name}}
                        </span>
                        <br>
                        <span class="slider-main__title" data-wb-where='"{{data.header}}">""' data-wb-hide="wb">
                            {{data.header}}
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="section section--see-also" id="section{{_idx}}" data-anchor="{{id}}" data-wb-where='"{{id}}"="see-also"' data-wb-hide="wb">
            <div class="see-also__container container-fluid d-flex align-items-center h-100">
                <div class="slider-main__content">
                    <h2 class="see-also__title">
                        {{name}}
                    </h2>
                    <div class="row see-also__row" data-wb-role="foreach" dafa-wb-tpl="false" data-wb-form="news" data-wb-sord="date:d" data-wb-where='active="on" AND home="on"'>
                        <div class="col-xl-4 see-also__item">
                            <a href="/blog/{{id}}" class="see-also__link">
                                <div class="see-also__item-sub" data-wb-role="tree" data-wb-item="blogtags" data-wb-branch="{{tag}}" data-wb-hide="wb">
                                    {{name}}
                                </div>
                                <div class="see-also__item-title" data-mh="my-group">
                                    {{header}}
                                </div>
                                <div class="see-also__desc">
                                    {{descr}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>
