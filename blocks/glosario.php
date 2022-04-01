<view>

    <section class="glosario container">
        <div class="page__title-container glosario__title-container">
            <h1 class="page__title">Глоссарий</h1>
        </div>

        <div class="glosario__container">
            <div class="glosario__search-section">
                <input class="glosario__search" type="search" id="search" name="search" placeholder="Найти" done="">

                <ul class="glosario__menu">
                    <wb-data wb="table=catalogs&item=projects&field=tree">
                    <li class="glosario__menu-item">
                        <a class="glosario__menu-link glosario__menu-link--current" data-type="all" href="javascript:void(0);">Все</a>
                    </li>
                    <wb-foreach wb-from="data">
                    <li class="glosario__menu-item" data-type="{{_id}}">
                        <a class="glosario__menu-link" data-type="{{_id}}" href="javascript:void(0);">{{name}}</a>
                    </li>
                    </wb-foreach>
                    </wb-data>
                </ul>
            </div>

            <ul class="glosario__item-list">
                <wb-foreach wb="table=glosario&sort=name">
                <li class="collapse-item" id="g{{_id}}" data-id="{{_id}}" data-type="{{tags}}" data-search="{{mb_strtolower({{name}})}}">
                    <div class="collapse-item__title-wrapper">
                        <h2 class="collapse-item__title">{{name}}</h2>
                        <button class="collapse-item__button button" type="button" aria-label="Развернуть">
                            <svg class="collapse-item__button-icon" width="16" height="16">
                                <use xlink:href="/assets/img/sprite.svg#cross"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="collapse-item__container">
                        <p class="collapse-item__description">
                            {{text}}
                        </p>
                    </div>
                </li>
                </wb-foreach>

            </ul>

            <ul class="glosario__collapse-menu">
                <wb-foreach wb="table=glosario&sort=name">
                    <li class="glosario__collapse-menu-item" data-type="{{tags}}" data-id="{{_id}}">
                        <wb-var wb-if="_idx == 0" active="glosario__collapse-menu-link--current" else="" />
                        <a class="glosario__collapse-menu-link {{_var.active}}" data-id="{{_id}}" href="javascript:void(0);">{{name}}</a>
                    </li>
                </wb-foreach>
            </ul>
        </div>

        <!--div class="page__spinner-block">
            <img class="page__spinner page__spinner--active" src="/assets/img/spinner.svg" alt="" aria-hidden="true">
        </div-->
        <script wb-app remove>
            $(".glosario__container").delegate("a.glosario__menu-link","click",function(){
                let type = $(this).attr('data-type');
                if (type == "all") {
                    $(this).parents('.glosario__container').find('.collapse-item').show();
                    $(this).parents('.glosario__container').find('.glosario__collapse-menu-item').show();
                } else {
                    $(this).parents('.glosario__container').find('.collapse-item').hide();
                    $(this).parents('.glosario__container').find('.collapse-item[data-type*='+type+']').show();
                    $(this).parents('.glosario__container').find('.glosario__collapse-menu-item').hide();
                    $(this).parents('.glosario__container').find('.glosario__collapse-menu-item[data-type*='+type+']').show();
                }
                $(this).parents('.glosario__menu').find('.glosario__menu-link').removeClass('glosario__menu-link--current');
                $(this).addClass('glosario__menu-link--current');
            });
            $(".glosario__collapse-menu").delegate("a.glosario__collapse-menu-link","click",function(){
                let active = $(".glosario__item-list").find(".collapse-item__container.active").height();
                let id = $(this).data("id");
                if (active == undefined) active = 0;
                let offset = 100 + active;

                $(this).parents('.glosario__collapse-menu').find('.glosario__collapse-menu-link').removeClass('glosario__collapse-menu-link--current');
                $(this).addClass('glosario__collapse-menu-link--current');
                $('html, body').animate({
                    scrollTop: parseInt($("#g"+id).offset().top - offset)
                }, 200);
                if (!$("#g"+id).hasClass('opened')) $("#g"+id).children().trigger('click');
            });
            $('.glosario__search').on('keyup',function(){
                $(this).trigger('change');
            });
            $('.glosario__search').on('change',function(){
                let str = $(this).val();
                str = str.toLowerCase();
                if (str.trim() > " ") {
                    $(this).parents('.glosario__container').find('.collapse-item').hide();
                    $(this).parents('.glosario__container').find('.collapse-item[data-search*='+str+']').show();
                } else {
                    $(this).parents('.glosario__container').find('.collapse-item').show();
                }
                let types = [];
                $(this).parents('.glosario__container').find('.glosario__collapse-menu-item').show();
                $(this).parents('.glosario__container').find('.collapse-item:not(:visible)').each(function(){
                    let id = $(this).data("id");
                    $(this).parents('.glosario__container').find('.glosario__collapse-menu-item[data-id='+id+']').hide();
                })
                $(this).parents('.glosario__container').find('.glosario__menu-item').hide();
                $(this).parents('.glosario__container').find('.collapse-item:visible').each(function(){
                    let that = this;
                    let type = $(this).data("type");
                    $.each(type,function(i,v){
                        $(that).parents('.glosario__container').find('.glosario__menu-item[data-type='+v+']').show();
                    })
                })

                str.trim() == "" ? $(this).parents('.glosario__container').find('.glosario__menu-item').show() : null;
            });

            var glosario_standalone = function() {
                let item = '{{_route.item}}';
                $(`.glosario__collapse-menu [data-id='${item}']`).trigger('click');
                console.log(item);

            }
            setTimeout(function(){
                glosario_standalone();
            }, 100);

        </script>
    </section>
    <wb-snippet wb="name=wbapp" />
</view>

<edit>
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <wb-include wb="form=glosario&mode=list"></wb-include>

</edit>