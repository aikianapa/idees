<edit header="Блок - список услуг">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>

<view>

    <div class="container">
        <h2 class="sub-title"> Все услуги </h2>

        <wb-var menu="{{yongerSiteMenu()}}" />

        <wb-foreach wb="from=_var.menu&tpl=false">

            <div class="uslugi" wb-if="'{{name}}'=='services'">

                <wb-foreach wb="from=children&tpl=false">
                    <div class="uslugi-item" wb-if="'{{name}}'!=='services'">
                        <h3 class="sub-sub-title"> {{menu_title}} </h3>

                        <div class="ttext">
                        </div>
                        <div class="tlist">
                            <wb-foreach wb="table={{attach}}&tpl=false" wb-filter="{{attach_filter}}">
                                <a href="{{path}}" class="menu__sub-link">
                                    {{header}}
                                </a>
                            </wb-foreach>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </wb-foreach>
    </div>

</view>