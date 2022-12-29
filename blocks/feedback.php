<view>
<div class="feedback-page container">

  <div class="feedback-page__title-container">
    <h1 class="page__title">{{header}}</h1>
  </div>

  <ul class="feedback-page__list" id="feedbackList">
    <wb-var triple="1" />
    <wb-foreach wb="table=comments&sort=_created:d&size=3&bind=cms.list.feedback&more=true:ещё" wb-filter="active=on">
    <wb-var full="feedback-page__item--full" wb-if="'{{_var.triple}}'=='3'" />
    <wb-var text="feedback__text--single" wb-if="'{{_var.triple}}'=='3'" else="feedback__text--small" />
    <li class="feedback-page__item {{_var.full}}">
      <blockquote class="feedback">
        <h2 class="feedback__title">{{title}}</h2>

        <p class="feedback__text {{_var.text}}">
          {{text}}
        </p>

        <cite class="feedback__author">
              <img class="feedback__author-avatar" width="72" height="72" src="/thumbc/72x72/src{{avatar.0.img}}" data-srcset="/thumbc/144x144/src{{avatar.0.img}} 2x" alt="{{name}}" wb-if="'{{avatar}}'>''">
              <img class="feedback__author-avatar" width="72" height="72" src="/module/myicons/72/323232/users-06.svg" data-srcset="/assets/img/feedback1@2x.jpg 2x" alt="{{name}}" wb-if="'{{avatar}}'==''">
          <span class="feedback__name">{{name}}</span>
          <span class="feedback__role">{{position}}</span>
        </cite>

        <div class="feedback__actions">
          <a class="feedback__watch-link popup-video" wb-if="'{{youtube}}'>''" href="{{youtube}}" target="_blank" rel="noreferrer noopener nofollow">
            <svg class="feedback__watch-link-icon" width="24" height="24" aria-hidden="true">
              <use xlink:href="/assets/img/sprite.svg#play"></use>
            </svg>

            <span class="feedback__watch-link-text">смотреть отзыв</span>
          </a>

          <a class="feedback__facebook-link" wb-if="'{{facebook}}'>''" href="{{facebook}}" target="_blank" rel="noreferrer noopener nofollow">
            читать на facebook
          </a>
        </div>
      </blockquote>
    </li>
    <wb-var triple="1" wb-if="'{{_var.triple}}' > '3'" else="{{_var.triple*1 + 1}}" />
    </wb-foreach>
  </ul>

  <div class="page__spinner-block visually-hidden">
    <img class="page__spinner page__spinner--active" src="/assets/img/spinner.svg" alt="" aria-hidden="true">
  </div>
</div>

<script type="wbapp">
    function changeLink() {
        const moreBtn = document.querySelector('.page-link.more');
        moreBtn.innerHTML = `<span class="text-icon">загрузить еще</span> <span class="button__icon-wrapper"><svg class="button__icon" width="24" height="24"><use xlink:href="/assets/img/sprite.svg#arrow-right"></use></svg></span>`
        moreBtn.href = 'javascript:void(0)';
    }

    $("#feedbackList").bind("DOMSubtreeModified",function(){
        changeLink();
    });
    changeLink();
    $("#feedbackList").on('wb-ajax-start',function(ev,params) {
        if (params.target !== "#feedbackList") return;
        if (params._params !== undefined && params._params.more !== undefined) {
            $('.page__spinner-block').removeClass('visually-hidden');
        }
    });
    $("#feedbackList").on('wb-ajax-done',function(ev,params) {
        if (params.target !== "#feedbackList") return;
        if (params._params !== undefined && params._params.more !== undefined) {
            $('.page__spinner-block').addClass('visually-hidden');
        }
    });
</script>
</view>

<edit header="Список отзывов">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

</edit>