<view>
    <section class="gray-box">
            <div class="container">
                <h2 class="sub-title">{{title}}</h2>

                <div class="three-columns">
                    <wb-foreach wb="from=list&tpl=false">
                        <div class="etap-block">
                            <h3 class="sub-sub-title etap"><div class="etap-num"> {{_ndx}} </div>{{list_title}}</h3>
                            <div class="ttext etap">{{list_text}}</div>
                        </div>
                    </wb-foreach>
                </div>
            </div>
    </section>
</view>

<edit header="Список номер+заголовок+текст (серый фон)">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group">
        <label for="my-input">Заголовок</label>
        <input class="form-control col-12" type="text" name="title" placeholder="Заголовок" />
    </div>
    <wb-multiinput name="list">
        <input class="form-control tx-semibold col-12 mb-1" name="list_title" placeholder="Заголовок">
        <textarea class="form-control col-12" rows="auto" name="list_text" placeholder="Текст"></textarea>
    </wb-multiinput>
</edit>