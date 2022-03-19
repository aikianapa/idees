<view>
    <main class="page__main">

        <section class="container map">
            <h1 class="page__title page__title-container">Карта сайта</h1>

            <div class="">

                <ul class="map__section" wb-tree="call=yongerSiteMenu">
                    <li class="level-{{_lvl}}" wb-if="'{{id}}' !== '{{_var.pid}}'">
                        <a class="map__link" href="{{path}}">{{header.{{_sess.lang}}}}</a>
                        <wb-var newlvl="{{_lvl+1}}" />
                        <ul class="" wb-if="'{{attach}}'>''">
                            <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="active=on">
                            <li class="level-{{_var.newlvl}}">
                                <a class="map__link" href="{{_parent.path}}/{{wbFurlGenerate({{name}})}}">{{name}}</a></li>
                            </wb-foreach>
                        </ul>
                    </li>
                    <wb-var pid="{{id}}"/>
                </ul>
                <wb-jq wb=" $dom->find('.map__section > li')->addClass('map__section-title');
                            $dom->find('.map__section li ul')->addClass('map__list');
                            $dom->find('.map__section li ul > li')->addClass('map__list-item');" />

            </div>
        </section>

    </main>

</view>

<edit header="Карта сайта">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>