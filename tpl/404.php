<!doctype html>
<html lang="en" data-wb-role="formdata" data-wb-form="{{_form}}" data-wb-item="{{_item}}" data-wb-hide="wb">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">


<div class="top-block company-head page404">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 order-xl-last mb-5 mb-xl-0">
                <div class="page404__img-wrap text-center text-xl-right">
                    <img class="page404__img" src="img/svg/404.svg">
                </div>
            </div>
            <div class="col-xl-6">
                <h1 class="page404__title" data-wb-role="tree" data-wb-item="blogtags" data-wb-branch="{{tag}}" data-wb-hide="wb">
                    К сожалению эта страница не существует
                </h1>
                <div class="page404__text">
                    Вы ищете страницу, которая была перемещена или удалена. Пожалуйста, перейдите на главную страницу сайта.
                </div>
                <div class="text-center text-xl-left">
                    <a href="/" class="button button--white-outline">
                        Перейти на главную
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<meta data-wb-selector=".post-section img" data-wb-addclass="img-fluid">
<meta data-wb-selector=".post-section img" data-wb-removeattr="style">
<meta data-wb-selector="title" data-wb-html="Ошибка 404">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="footer.inc.php" data-wb-hide="*">
</body>
</html>