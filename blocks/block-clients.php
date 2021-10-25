<view>
  <section class="page__section">
    <h2 class="page__section-title container">
      Наши клиенты
    </h2>
    <wb-var clients='{{explode(",",{{clients}})}}' />
    <div class="agency__clients">
      <div class="agency__clients-wrapper">
        <ul class="agency__clients-list agency__clients-list--first">
          <wb-foreach wb="from=_var.clients&tpl=false">
            <li class="agency__client">{{_val}}</li>
          </wb-foreach>
        </ul>
      </div>

      <div class="agency__clients-wrapper">
        <ul class="agency__clients-list agency__clients-list--second">
          <wb-foreach wb="from=_var.clients&tpl=false">
            <li class="agency__client">{{_val}}</li>
          </wb-foreach>
        </ul>
      </div>

      <div class="agency__clients-wrapper">
        <ul class="agency__clients-list agency__clients-list--third">
          <wb-foreach wb="from=_var.clients&tpl=false">
            <li class="agency__client">{{_val}}</li>
          </wb-foreach>
        </ul>
      </div>
    </div>
  </section>
</view>

<edit header="Виждет Клиенты">
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
    <label class="col-sm-3">Клиенты</label>
    <div class="col-sm-9">
      <input name="clients" wb="module=tagsinput" placeholder="Клиенты">
    </div>
  </div>

</edit>