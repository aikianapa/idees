<view>
<section class="vacancies container">
  <div class="vacancies__title-container">
    <h1 class="page__title">Станьте частью нашей команды</h1>
    <wb-var tags="" />
    <wb-foreach wb="table=vacancies" wb-filter="active=on">
        <wb-var tags="{{_var.tags}}," wb-if="'{{_var.tags}}'>''"/>
        <wb-var tags="{{_var.tags}}{{tags}}" wb-if="'{{tags}}'>''"/>
    </wb-foreach>
    <wb-var tags='{{array_unique(explode(",",{{_var.tags}}))}}' />

    <ul class="vacancies__tags tags">
      <li class="tags__item">
        <button class="tag tag--active" type="button"
        data-ajax="{'target':'#vacanciesListing','filter_remove': 'tags' }">Все вакансии</button>
      </li>
      <wb-foreach wb-from="_var.tags">
      <li class="tags__item">
        <button class="tag" type="button"
        data-ajax="{'target':'#vacanciesListing','filter_add': { 'tags': {'$like' : '{{_val}}'} } }"
        >{{_val}}</button>
      </li>
      </wb-foreach>
    </ul>
  </div>

  <ul class="vacancies__list" id="vacanciesListing">
      <wb-foreach wb="table=vacancies&sort=_created:d" wb-filter="active=on">
    <li class="vacancies__item" data-tags="{{tags}}">
      <a class="vacancies__link" href="/vacancies/{{_id}}/{{wbFurlGenerate({{name}})}}">
        <span class="vacancies__name">{{name}}</span>
        <span class="vacancies__descr">
          <span>{{str_replace(","," / ",{{places}})}}<add wb-if="'{{distance}}'=='on'"> / Удаленка</add></span>
          <span>от {{number_format({{money}}, 0, "", " ")}} ₽</span>
        </span>
      </a>
    </li>
    </wb-foreach>
  </ul>
</section>
<wb-snippet wb="name=wbapp" />
<script wb-app>
    $('.vacancies__tags button').on('click',function(){
        $('.vacancies__tags button').removeClass('tag--active');
        $(this).addClass('tag--active');
    })
</script>
</view>
<edit header="Список вакансий">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <wb-include wb="form=vacancies&mode=list"></wb-include>
</edit>