<!doctype html>
<html lang="en" data-wb-role="formdata" data-wb-form="{{_form}}" data-wb-item="{{_item}}" data-wb-hide="wb">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<meta http-equiv="refresh" content="0;/404" data-wb-where='"{{active}}" = ""' data-wb-append="head">
<body class="preloader-body" data-wb-where='"{{active}}" = "on"'>
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">


<div class="top-block company-head">
    <div class="container-fluid">
        <div class="top-block__subtitle" data-wb-role="tree" data-wb-item="blogtags" data-wb-branch="{{tag}}" data-wb-hide="wb">
            {{name}}
        </div>
        <div class="row">
            <div class="col-xl-6">
                <h1 class="top-block__title">
                    {{header}}
                </h1>
            </div>
            <div class="col-xl-6">
                <div class="company-head__desc">
                    {{descr->strip_tags()}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="post-content">
    <div class="container-fluid">
                <div class="post-container">
                    <meta data-wb-role="variable" var="table" data-wb-if='_table = "news"' value="content" else="lang">
                    <div class="post-inner" data-wb-hide="wb" data-wb-role="tree" data-wb-from="{{_var.table}}" data-wb-children="false">
                        <section class="post-section post-section--top">
                            <div class="row">
                                <div class="col-lg post-left">
                                    <h2 class="post-h2">{{name}}</h2>
                                    {{data.text}}
                                </div>
                                <div class="col-lg-3 post-right">
                                    <div class="post-count">
                                        <div class="post-count__big" data-wb-where='"{{data.big}}">""' data-wb-hide="wb">{{data.big}}</div>
                                        <div class="post-count__text">
                                            {{data.norm}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    </div>
                </div>
</div>
    

<div class="subscription">
    <div class="container-fluid">
        <h2 class="subscription__title">
            Подписаться на рассылку
        </h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-md-0">
                <div class="subscription__subtitle">
                    Чтобы получать новые карточки себе на почту.
                </div>
                <form action="">
                    <div class="row no-gutters row-form-group">
                        <div class="col-md mb-2">
                            <div class="form-group">
                                <label class="form-group__text" for="subscription-mail">
                                    Введите свой email
                                </label>
                                <input type="text" class="form-control" id="subscription-mail">
                                <i class="la la-check form-group__check"></i>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <button class="button button--white-outline w-100">Подписаться</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="subscription__subtitle">
                    Поделиться
                </div>
                <div class="button-group">
                    <a href="/" class="button button--icon button--white-outline button--fb">
                        <img src="img/icon/fb.svg" alt="">
                    </a>
                    <a href="/" class="button button--icon button--white-outline button--vk">
                        <img src="img/icon/vk.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="see-also see-also--post">
    <div class="container-fluid">
        <h2 class="see-also__title">
            Читайте также:
        </h2>
        <div class="row see-also__row" data-wb-role="foreach" data-wb-form="news" data-wb-tpl="false" data-wb-limit="3" data-wb-rand="true" data-wb-where='id != "{{_route.item}}" AND active = "on"' data-wb-hide="wb">
            <div class="col-xl-4 see-also__item">
                <a href="/blog/{{id}}/" class="see-also__link">
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
<meta data-wb-selector=".post-section img" data-wb-addclass="img-fluid">
<meta data-wb-selector=".post-section img" data-wb-removeattr="style">
    
<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>