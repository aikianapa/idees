<view>
    <section class="page__section agency__clients-section">
        <h2 class="page__section-title container">
            {{title}}
        </h2>
        <wb-var clients='{{explode(",",{{clients}})}}'></wb-var>
        <div class="agency__clients">
            <div class="agency__clients-wrapper">
                <ul class="agency__clients-list agency__clients-list--first">
                    <wb-foreach wb="from=_var.clients&amp;tpl=false">
                        <li class="agency__client">{{_val}}</li>
                    </wb-foreach>
                </ul>
            </div>

            <div class="agency__clients-wrapper">
                <ul class="agency__clients-list agency__clients-list--second">
                    <wb-foreach wb="from=_var.clients&amp;tpl=false">
                        <li class="agency__client">{{_val}}</li>
                    </wb-foreach>
                </ul>
            </div>

            <div class="agency__clients-wrapper">
                <ul class="agency__clients-list agency__clients-list--third">
                    <wb-foreach wb="from=_var.clients&amp;tpl=false">
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
        <label class="col-sm-3">Клиенты</label>
        <div class="col-sm-9">
            <input name="clients" wb="module=tagsinput" placeholder="Клиенты">
        </div>
    </div>
</edit>