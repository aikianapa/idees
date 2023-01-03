<view>

<section class="page__section">
  <h2 class="page__section-title">
    {{title}}
  </h2>

<ul class="agency__team-list" wb-tree="item=team">
    <li class="agency__team-item" wb-if="'{{active}}'=='on'">
      <figure class="agency__member">
        <div class="agency__member-photo-wrapper">
          <img class="agency__member-photo b-lazy loading"
               width="513" height="470"
               src="/thumbc/513x470/src/{{data.image.0.img}}"
               data-src="/thumbc/513x470/src/{{data.image.0.img}}"
               data-srcset="/thumbc/1026x940/src/{{data.image.0.img}} 2x"
               alt="Владимир Ильичёв">
        </div>

        <figcaption class="agency__member-name-container">
          <span class="agency__member-name">{{name}}</span>
          <span class="agency__member-role">{{data.position}}</span>
        </figcaption>
      </figure>
    </li>
  </ul>

  <div class="agency__link-container">
    <a class="button agency__download" href="/vacancies">
      <span class="button__icon-wrapper">
        <svg class="button__icon" width="24" height="24">
          <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
        </svg>
      </span>

      <span class="button__text">смотреть открытые вакансии</span>
    </a>
  </div>
</section>
</view>

<edit header="Виджет - Наша команда">
  <div>
    <wb-module wb="module=yonger&mode=edit&block=common.inc" />
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Заголовок</label>
    <div class="col-sm-9">
      <input class="form-control" type="text" name="title" placeholder="Заголовок">
    </div>
  </div>
  <div class="alert alert-info">
      <p>Список членов команды находится в справочнике <b>team</b></p>
    <a class="btn btn-primary" href="javascript:" data-ajax="{'url':'/cms/ajax/form/catalogs/edit/team','append':'modals'}">
        Редактировать справичник team
    </a>
  </div>
</edit>