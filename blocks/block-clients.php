<view>
    <section class="page__section agency__clients-section">
        <h2 class="page__section-title container">
            {{title}}
        </h2>
        <wb-var clients1='{{explode(",",{{clients}})}}'></wb-var>
        <wb-var clients2='{{explode(",",{{clients2}})}}'></wb-var>
        <wb-var clients3='{{explode(",",{{clients3}})}}'></wb-var>
        <div class="agency__clients">
            <div class="agency__clients-wrapper">
                <ul class="agency__clients-list agency__clients-list--first">
                    <wb-foreach wb="from=_var.clients1&amp;tpl=false">
                        <li class="agency__client">{{_val}}</li>
                    </wb-foreach>
                </ul>
            </div>

            <div class="agency__clients-wrapper" wb-if="'{{clients2}}'>''">
                <ul class="agency__clients-list agency__clients-list--second">
                    <wb-foreach wb="from=_var.clients2&amp;tpl=false">
                        <li class="agency__client">{{_val}}</li>
                    </wb-foreach>
                </ul>
            </div>

            <div class="agency__clients-wrapper" wb-if="'{{clients3}}'>''">
                <ul class="agency__clients-list agency__clients-list--third">
                    <wb-foreach wb="from=_var.clients3&amp;tpl=false">
                        <li class="agency__client">{{_val}}</li>
                    </wb-foreach>
                </ul>
            </div>
        </div>
    </section>
</view>
<edit header="Виждет Клиенты">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Клиенты 1</label>
        <div class="col-sm-9">
            <input name="clients" wb="module=tagsinput" placeholder="Клиенты 1">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Клиенты 2</label>
        <div class="col-sm-9">
            <input name="clients1" wb="module=tagsinput" placeholder="Клиенты 2">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3">Клиенты 3</label>
        <div class="col-sm-9">
            <input name="clients2" wb="module=tagsinput" placeholder="Клиенты 3">
        </div>
    </div>
</edit>