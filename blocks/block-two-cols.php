<edit header="Блок - две колонки (текст и виджеты)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Подзаголовок</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="subtitle" placeholder="Подзаголовок"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Тэги</label>
        <div class="col-sm-9">
            <wb-multiinput name="tags"></wb-multiinput>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12">Текст</label>
        <div class="col-12">
            <textarea name="text" wb-module="summernote"></textarea>
        </div>
    </div>
    <div class="divider-text">Средняя стоимость и сроки</div>
    <div class="form-group row">
        <div class="col-2">
            <input class="form-control" name="prc_active" wb-module="switch">
        </div>
        <div class="col-5">
            <input class="form-control" type="text" name="prc_price" placeholder="Стоимость">
        </div>
        <div class="col-5">
            <input class="form-control" type="text" name="prc_term" placeholder="Срок">
        </div>
    </div>
    <div class="divider-text">Что потребуется от вас</div>
    <div class="form-group row">
        <div class="col-2">
            <input class="form-control" name="req_active" wb-module="switch">
        </div>
        <div class="col-10 mb-1">
            <input class="form-control" type="text" name="req_title" placeholder="Что потребуется от вас: *">
        </div>
        <div class="offset-2 col-10">
            <wb-multiinput name="req_list"></wb-multiinput>
        </div>
    </div>
    <div class="divider-text">Как начать сотрудничество</div>
    <div class="form-group row">
        <div class="col-2 mb-1">
            <input class="form-control" name="how_active" wb-module="switch">
        </div>
        <div class="col-10 mb-1">
            <input class="form-control" type="text" name="how_title" placeholder="Заголовок">
        </div>
        <div class="offset-2 col-10 mb-1">
            <textarea class="form-control" rows="auto" name="how_text" placeholder="Текст"></textarea>
        </div>
        <div class="offset-2 col-5 mb-1">
            <input class="form-control" type="text" name="how_btn" placeholder="Кнопка">
        </div>
        <div class="col-5">
            <input class="form-control" wb="module=yonger&mode=pageselect" type="text" name="how_link" placeholder="Ссылка">
        </div>
    </div>
    <div class="divider-text">Блок ссылок</div>
    <div class="form-group row">
        <div class="col-2 mb-1">
            <input class="form-control" name="links_active" wb-module="switch">
        </div>
        <div class="col-10 mb-1">
            <input class="form-control" name="links_title" placeholder="Заголовок ссылки">
        </div>
        <div class="offset-2 col-10 mb-1">
            <wb-multiinput name="links_links">
                <div class="col-sm-6">
                    <input class="form-control" name="links_header" placeholder="Заголовок ссылки">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" wb="module=selectservices&value=path" name="links_link" placeholder="Ссылка">
                </div>
            </wb-multiinput>
        </div>
    </div>
    <div class="form-group row mb-5 pb-5"></div>
</edit>

<view>

    <div class="container">

        <div class="two-side">

            <div class="two-side-1">
                <h1 class="title" wb-if="'{{title}}' > ''"> {{title}} </h1>
                <h1 class="title" wb-if="'{{title}}' == '' AND '{{_parent.name}}'>''"> {{_parent.name}} </h1>

                <div class="text-block block-corporate">
                    <h2 class="sub-title-text" wb-if="'{{subtitle}}' > ''"> {{subtitle}} </h2>
                    <h2 class="sub-title-text" wb-if="'{{subtitle}}' == '' && '{{_parent.descr}}'>''"> {{_parent.descr}} </h2>
                    <div class="ttext">
                        <wb-foreach wb="from=tags&tpl=false">
                        <div class="bggray" wb-if="'{{_val}}'>''">
                            {{_val}}
                        </div>
                        </wb-foreach>
                    </div>

                    <div class="formated text-block  block-preimush">
                        {{text}}
                    </div>
                    <wb-jq wb="
                    $dom->find('.formated p')->addClass('ttext2');
                    $dom->find('.formated h2')->addClass('sub-title');
                    $dom->find('.formated h3')->addClass('sub-sub-title');
                    "/>
                </div>
            </div>


            <div class="two-side-1-5">
            </div>
            <div class="two-side-2">

                <div class="bblock" wb-if="prc_active == 'on'">
                    <div class="btext"> Средняя стоимость и сроки </div>
                    <div class="bhtext"> Стоимость </div>
                    <div class="btext"> {{prc_price}} </div>
                    <div class="bhtext"> Сроки разработки </div>
                    <div class="btext"> {{prc_term}} </div>
                    <div class="ybutton zayav-button"> Отправить заявку </div>
                </div>


                <div class="bblock" wb-if="req_active == 'on'">
                    <div class="btext" wb-if="req_title == ''"> Что потребуется от Вас: * </div>
                    <div class="btext" wb-if="req_title > ''"> {{req_title}} </div>

                    <div class="tlist">
                        <wb-foreach wb="from=req_list&tpl=false">
                        <div>
                            — {{_val}};
                        </div>
                        </wb-foreach>
                    </div>

                    <div class="ttext3"> *Если у вас есть этот набор материалов — это упростит работу по проекту. Если нет, то не пугайтесь. Мы
                        поможем вам с их формированием. </div>
                </div>

                <div class="bblock" wb-if="how_active == 'on'">
                    <div class="btext" wb-if="how_title == ''">Как начать сотрудничество</div>
                    <div class="btext" wb-if="how_title > ''">{{how_title}}</div>
                    <div class="ttext3" wb-if="how_text == ''">
                        Здесь Вы найдете все необходимое для начала сотрудничества, сможете ознакомиться с условиями и скачать типовые документы
                        и изучить четко описанные действия.
                    </div>
                    <div class="ttext3" wb-if="how_text > ''">{{how_text}}</div>

                    <wb-var btn=" Посмотреть условия " wb-if="how_btn == ''" else="{{how_btn}}" />
                    <wb-var link="/" wb-if="how_link == ''" else="{{how_link}}" />
                    <a class="gbutton" href="{{_var.link}}">{{_var.btn}}</a>
                </div>


                <div class="bblock" wb-if="links_active == 'on'">
                    <div class="btext"> {{links_title}} </div>

                    <div class="tlist">
                        <wb-foreach wb="from=links_links&tpl=false">
                        <a href="{{links_link}}" wb-if="'{{links_link}}'>'' && '{{links_header}}'>''">
                            {{links_header}}
                        </a>
                        </wb-foreach>
                    </div>
                </div>
            </div>
        </div>

    </div>
</view>