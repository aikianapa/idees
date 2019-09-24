<!doctype html>
<html lang="en">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="head.inc.php" data-wb-hide="*">
<body class="preloader-body">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="loader.inc.php" data-wb-hide="*">
<meta data-wb-role="include" data-wb-src="template" data-wb-name="header.inc.php" data-wb-hide="*">

<div class="top-block services-head" data-wb-role="tree" data-wb-from="lang" data-wb-branch="header" data-wb-children="false" data-wb-hide="wb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <h1 class="top-block__title">
                    {{name}}
                </h1>
            </div>

            <div class="col-xl-6 pt-2">
                <div class="row services__buttons">
                    <div class="col-md-6 col-xl mb-4 mb-md-0">
                        <a href="#modal-application" class="button button--white button-sm-block" data-toggle="modal">Заполнить бриф</a>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <a href="#modal-requisites" class="button button--dark button-sm-block" data-toggle="modal">
                            <img src="img/download.svg" alt="" class="button__img">
                            <span>Реквизиты и документы</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="spec-offer" data-wb-role="formdata" data-wb-form="pages" data-wb-item="action" data-wb-hide="*">
<div class="spec-offer" data-wb-role="tree" data-wb-from="lang" data-wb-branch="special" data-wb-children="false" data-wb-hide="wb" data-wb-where='"{{active}}" = "on"'>
    <div class="container-fluid">
        <div class="spec-offer__container">
            <div class="spec-offer__close">
                <i class="la la-close"></i>
            </div>
            <div class="spec-offer__subtitle">
                {{name}}
            </div>
            <div class="row">
                <div class="col-xl-6">
                        {{data.text}}
                </div>
                <meta data-wb-selector="h2" data-wb-addclass="spec-offer__title" data-wb-hide="*">
                <div class="col-xl-6 spec-offer__right">
                    <button href="{{data.prop.link.value}}" class="spec-offer__btn button button--dark-outline" data-toggle="modal">{{data.prop.link.label}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="company-block services-choose" data-wb-role="tree" data-wb-from="lang" data-wb-branch="choose" data-wb-children="false" data-wb-hide="wb">
    <div class="container-fluid">
        <div class="position-relative">
            <div class="row">
                <div class="col-xl-6">
                    <div class="d-flex flex-column h-100">
                        <h2 class="company-block__title">
                            {{name}}
                        </h2>
                        <div class="company-block__subtitle services-choose__subtitle">
                           {{data.text}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row company-block__row" data-wb-role="tree" data-wb-from="children" data-wb-hide="wb">
                        <div class="col-md-6 company-block__item">
                            <div class="company-block__item-title">
                                {{name}}
                            </div>
                            {{data.text}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal modal--requisites fade p-0" id="modal-requisites" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="border-bottom">
                    <div class="row pb-4 pb-lg-5 align-items-center">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <h5 class="modal-title text-left">Реквизиты</h5>
                        </div>
                        <div class="col-lg-8 text-left">
                            <div class="d-md-inline-block mr-md-3 mr-xl-5 mb-3 mb-md-0">Скачать:</div>
                            <a target="_blank" href="/uploads/accounts.pdf" class="link-img mr-4 mb-3 mb-md-0">
                                <img src="img/pdf.svg" alt="" class="">
                                <span>Реквизиты</span>
                            </a>
                            <a target="_blank" href="/uploads/offer.pdf" class="link-img mr-4 mb-3 mb-md-0">
                                <img src="img/pdf.svg" alt="" class="">
                                <span>Договор</span>
                            </a>
                            <a target="_blank" href="/uploads/applications.pdf" class="link-img mr-4">
                                <img src="img/pdf.svg" alt="" class="">
                                <span>Приложение</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/close.svg" alt="">
                </button>
            </div>
            <div class="modal-body pt-0 pb-5">
                <div class="border-bottom p-lg-0 pb-2 pt-2">
                    <div class="row pb-4 pt-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="h4 text-white">Контактные данные</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Телефон
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="tel:+74993940646" class="linkWhite">+7 (499) 394-06-46</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Почта
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="mailto:info@idees.ru" class="linkWhite">info@idees.ru</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Сайт
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="http://www.idees.ru/" class="linkWhite">www.idees.ru</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Фактический адрес
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        Россия, Мос. обл.,
                                        Сергиев Посад, ул. Пионерская, д.6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom p-lg-0 pb-2 pt-2">
                    <div class="row pb-4 pt-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="h4 text-white">Основные реквизиты</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Индивидуальный предприниматель
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">Ильичев Владимир Витальевич</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        ОГРНИП
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">314760802400017</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Свидетельство
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">серия 76 № 002628584</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        ИНН
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        762201748012
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Юридический адрес
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        152000, Россия, Ярославская обл,
                                        Переславский р-н, с Берендеево,
                                        уч-к 1-й, д 43
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom p-lg-0 pb-2 pt-2">
                    <div class="row pb-4 pt-4">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="h4 text-white">Банковские реквизиты</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Наименование банка
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">ПАО «Сбербанк России» г. Москва</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Место нахождения
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">117997, Москва, ул. Вавилова, д.19</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Расчетный счет
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">40802810040000012670</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        Корреспондентский счет
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        30101810400000000225
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        БИК банка
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        044525225
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="textpale">
                                        ИНН / КПП
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        7707083893 / 775002002
                                    </div>
                                </div>
                            </div>
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