<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*" class="header-black">


    
<main data-wb-role="tree" data-wb-from="content" data-wb-children="false" data-wb-hide="*">
    <section class="parallax" data-parallax="scroll" data-image-src="{{_image}}" data-wb-where='"{{_idx}}" = "0"'></section>
    
    <div class="portfolio-bg portfolio-bg--white" id="#topBlock" data-wb-where='id = "block-top" AND "{{data.visible}}" = "on"'>
        <div class="container-fluid">
            <h2 class="portfolio-bg__title mb-5">
                {{%name}}
            </h2>
            <div class="row mb-5 company-block__right-row align-items-center">
                <div class="col-xl-6">
                    <div class="case-desc">
                        <div class="case-desc__item">Клиент: {{%client}}</div>
                        <div class="case-desc__item">Вид работ: 
                            <div data-wb-role="foreach" data-wb-from="%category" data-wb-tpl="false" data-wb-hide="*">
                                <nobr data-wb-role="tree" data-wb-item="products_category" data-wb-branch="{{_value}}" data-wb-children="false" data-wb-hide="wb">
                                {{name}}<span data-wb-hide="*" data-wb-where='"{{%_ndx}}" < "{{count({{%%%category}})}}" '>, </span>
                                </nobr>
                            </div>
                        </div>
                        <div class="case-desc__item">Сайт: {{%site}}</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="case-category" data-wb-role="foreach" data-wb-json='{{json_encode({{explode(",",{{%tags}})}})}}' data-wb-tpl="false" data-wb-where='"{{%tags}}">""' data-wb-hide="wb">
                        <div class="case-category__item">{{_value}}</div>
                    </div>
                </div>
            </div>
            <div class="row company-block__right-row" data-wb-role="tree" data-wb-from="%content" data-wb-branch="block-top" data-wb-children="false" data-wb-hide="wb">
                <div class="col-xl-6">
                    <h2 class="portfolio-bg__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
        </div>
    </div>
    
    
    <div class="portfolio-bg portfolio-bg--white" data-wb-where='id = "block-top" AND "{{data.visible}}" = "on"'>
        <div class="container-fluid" data-wb-role="tree" data-wb-from="%content" data-wb-branch="block-top" data-wb-parent="false" data-wb-hide="wb">
            <div class="row company-block__right-row" data-wb-where='"{{data.visible}}" = "on"'>
                <div class="col-xl-6">
                    <h2 class="portfolio-bg__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
        </div>
    </div>
    
    <div class="portfolio-bg portfolio-bg--gray" data-wb-where='id = "block-grey" AND "{{data.visible}}" = "on"'>
        <div class="container-fluid" data-wb-role="tree" data-wb-from="%content" data-wb-branch="block-grey" data-wb-children="false" data-wb-hide="wb">
            <div class="row company-block__right-row">
                <div class="col-xl-6">
                    <h2 class="portfolio-bg__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
            <div data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="*">
            <div class="row company-block__right-row" data-wb-where='"{{data.visible}}" = "on"' >
                <div class="col-xl-6">
                    <h2 class="portfolio-bg__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
            </div>
        </div>
    </div>

    <div class="portfolio-before" data-wb-where='id = "before-after" AND "{{data.visible}}" = "on"'>
        <div class="container-fluid" data-wb-role="tree" data-wb-from="%content" data-wb-branch="before-after" data-wb-children="false" data-wb-hide="wb">
            <div id='container1' class='twentytwenty-container'>
                <img src='/uploads/{{_form}}/{{_item}}/{{data.before[0].img}}'>
                <img src='/uploads/{{_form}}/{{_item}}/{{data.after[0].img}}'>
            </div>
        </div>
    </div>
    
    <div class="company-block company-block--gray" data-wb-where='id = "block-bottom" AND "{{data.visible}}" = "on"'>
        <div class="container-fluid" data-wb-role="tree" data-wb-from="%content" data-wb-branch="block-bottom" data-wb-children="false" data-wb-hide="wb">
            <div class="row company-block__right-row">
                <div class="col-xl-6">
                    <h2 class="company-block__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
            <div data-wb-role="foreach" data-wb-from="children" data-wb-tpl="false" data-wb-hide="*">
            <div class="row company-block__right-row" data-wb-where='"{{data.visible}}" = "on"' >
                <div class="col-xl-6">
                    <h2 class="portfolio-bg__title">
                        {{name}}
                    </h2>
                </div>
                <div class="col-xl-6">
                    {{data.text}}
                </div>
                <meta data-wb-selector="p" data-wb-addclass="company-about__desc">
            </div>
            </div>
        </div>
    </div>
    
    <section class="portfolio-video" data-wb-where='id = "block-video" AND "{{data.visible}}" = "on" AND "{{data.video}}" > ""'>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="{{data.video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="portfolio-photo" data-wb-where='"{{%images[1].visible}}"="1" AND "{{_idx}}" = "1"' data-wb-hide="wb">
        <img src="/uploads/{{_form}}/{{_item}}/{{%images[1].img}}" alt="">
    </section>
    
    <section class="portfolio-photo" data-wb-where='"{{%images[2].visible}}"="1" AND "{{_idx}}" = "2"' data-wb-hide="wb">
        <img src="/uploads/{{_form}}/{{_item}}/{{%images[2].img}}" alt="">
    </section>
    
    <section class="portfolio-photo" data-wb-where='"{{%images[3].visible}}"="1" AND "{{_idx}}" = "3"' data-wb-hide="wb">
        <img src="/uploads/{{_form}}/{{_item}}/{{%images[3].img}}" alt="">
    </section>
    
</main>

<div data-wb-role="foreach" data-wb-tpl="false" data-wb-from="images" data-wb-hide="wb">
    <section class="parallax" data-wb-where='"{{%images[{{_idx}}].visible}}"="1" AND "{{_idx}}" > "3" AND "{{_idx}}" < "{{count({{%images}}) - 1}}"' data-parallax="scroll" data-image-src="/uploads/{{_form}}/{{_item}}/{{%images[{{_idx}}].img}}"></section>
</div>


<div id="portfolio-nav" class="portfolio-nav portfolio-nav--hide">
        <div class="container-fluid">
            <div data-wb-role="foreach" data-wb-tpl="false" data-wb-form="products" data-wb-hide="*" data-wb-size="false">
                <meta data-wb-role="variable" var="_first" value="{{id}}" data-wb-where='"{{_ndx}}" = "1"'>
                <meta data-wb-role="variable" var="_last" value="{{id}}">
                <meta data-wb-role="variable" var="_prev" value="{{id}}" data-wb-where='"{{id}}" < "{{_item}}"'>
                <meta data-wb-role="variable" var="_next" value="{{id}}" data-wb-where='"{{id}}" > "{{_item}}" AND "{{_var._next}}"=""'>
            </div>
            <meta data-wb-role="variable" var="_prev" value="{{_var._last}}"  data-wb-where='"{{_var._prev}}" = ""' data-wb-hide="*" >
            <meta data-wb-role="variable" var="_next" value="{{_var._first}}"  data-wb-where='"{{_var._next}}" = ""' data-wb-hide="*" >

            <div class="row">
                <div class="col-6 col-md-auto col-lg text-md-left text-center"><a href="/portfolio/{{_var._prev}}" class="w-xs-100 button button--dark-outline"><i class="la la-arrow-left mr-lg-2"></i><span class="d-none d-lg-inline">Предыдущий проект</span></a></div>
                <div class="col-6 col-md-auto order-md-last col-lg text-center text-md-right"><a href="/portfolio/{{_var._next}}" class="w-xs-100 button button--dark-outline"><span class="d-none d-lg-inline">Следующий проект</span><i class="la la-arrow-right ml-lg-2"></i></a></div>
                <div class="col-md mt-3 mt-md-0 text-center"><a href="/portfolio" class="w-xs-100 button button--dark-outline">Вернуться в портфолио</a></div>
            </div>
        </div>
    </div>
<div class="portfolio-nav-stop"></div>

<div class="bg-white pb-5">

    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-12">
                <div class="size-h3 mb-5">
                    Похожие работы
                </div>
            </div>
            <div data-wb-role="foreach" data-wb-form="products" data-wb-tpl="false" data-wb-limit="4" data-wb-rand="true" data-wb-hide="*" data-wb-where='"{{active}}"="on"'>
                <div class="col-lg-6 col-xl-6 portfolio-card__col mb-5">
                    <a href="/portfolio/{{id}}/" class="portfolio-card portfolio-card--similar">
                        <div class="portfolio-card__bg" style="background-color: #E1CC17">
                            <img class="portfolio-card__img" src="/thumb/596x400/src/{{_image}}" data-wb-where='"{{_image}}">""'>
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
        </div>
    </div>
</div>
<div  data-wb-append="body" data-wb-hide="*">
    <script src="/tpl/js/libs/parallax.min.js"></script>
    <script src="/tpl/js/libs/portfolio-scroll.js"></script>
    <script src="/tpl/js/libs/jquery.event.move.js"></script>
    <script src="/tpl/js/libs/jquery.twentytwenty.js"></script>
    <script data-wb-append="body">
        $(window).load(function() {
            $("#container1").twentytwenty();
        });
    </script>
</div>
<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html> 