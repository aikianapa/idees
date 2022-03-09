<view>
   <section class="special__top-section container">
      <h1 class="page__title">Экспресс-запуск продукта c выгодой до 80%</h1>

      <ul class="special__tabs">
         <li class="special__tabs-item">
            <a class="special__tab-link special__tab-link--current" href="#">Экспресс-логотип</a>
         </li>
         <li class="special__tabs-item">
            <a class="special__tab-link" href="#">Экспресс-лендинг</a>
         </li>
         <li class="special__tabs-item">
            <a class="special__tab-link" href="#">Экспресс-презентация</a>
         </li>
      </ul>
   </section>

   <div class="special__tab-content">
      <section class="container">
         <div class="special__top-section-container">
            <p class="special__description">
               Создадим систему визуальной идентификации вашего проекта или услуги и оформим до 3 стандартных носителей на ваш выбор
            </p>

            <aside class="special__aside">
               <h2 class="special__aside-title">Сроки и стоимость</h2>

               <dl class="special__aside-params">
               <dt class="special__aside-params-name">Стоимость</dt>
               <dd class="special__aside-params-value">от 145 000 ₽</dd>

               <dt class="special__aside-params-name">Сроки разработки</dt>
               <dd class="special__aside-params-value">от 10 рабочих дней</dd>
               </dl>
            </aside>

            <div class="special__links-container">
               <a class="button special__contacts-button" href="#" download>
               <span class="button__icon-wrapper">
                  <svg class="button__icon" width="24" height="24">
                     <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                  </svg>
               </span>

               <span class="button__text">скачать договор</span>
               </a>

               <a class="button special__contacts-button" href="#" download>
               <span class="button__icon-wrapper">
                  <svg class="button__icon" width="24" height="24">
                     <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                  </svg>
               </span>

               <span class="button__text">скачать бриф</span>
               </a>
            </div>
         </div>

         <p class="special__label">Вы получите:</p>

         <ul class="special__list">
            <li class="special__item">
               <h3 class="special__item-title">Логотип*</h3>
               <p class="special__item-description">Одна версия логотипа (формат .ai)</p>
            </li>

            <li class="special__item">
               <h3 class="special__item-title">Брендбук</h3>
               <p class="special__item-description">Руководство по использованию логотипа: Логобук, фирменные цвета, фирменные шрифты, фирменный элемент

            </p></li><li class="special__item">
               <h3 class="special__item-title">Оформление</h3>
               <p class="special__item-description">3 стандартных носителя на выбор</p>
            </li>
         </ul>

         <p class="special__sub-text">* Опция: возможно увеличить число вариантов концепций логотипа. Каждый дополнительный вариант логотипа + 10 000 руб.</p>

      </section>

      <section class="page__section page__section--grey">
         <div class="container">
            <h2 class="page__section-title">Особенности услуги</h2>
         </div>

         <div class="special__slider-container">
            <div class="container">
               <ul class="special__slider">
               <li class="special__slider-item special__slider-item--active">Вы доверяете нашим специалистам и принимаете выполненную работу с первого раза</li>
               <li class="special__slider-item special__slider-item--active">Все тексты и материалы предоставляются клиентом  в утвержденном виде</li>
               <li class="special__slider-item special__slider-item--active">Домены и названия регистрируются, а хостинг покупается клиентом самостоятельно</li>
               <li class="special__slider-item special__slider-item--active">Мы выделяем в команду проекта опытных дизайнеров под руководством арт-директора</li>
               <li class="special__slider-item">При необходимости, клиент приобретает лицензии на шрифты, иллюстрации и изображения</li>
               </ul>

               <div class="special__slider-buttons">
               <button class="button special__slider-button" type="button" aria-label="Назад">
                  <span class="button__icon-wrapper">
                     <svg class="button__icon" width="24" height="24">
                     <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                     </svg>
                  </span>
               </button>

               <button class="button special__slider-button" type="button" aria-label="Вперед">
                  <span class="button__icon-wrapper">
                     <svg class="button__icon" width="24" height="24">
                     <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                     </svg>
                  </span>
               </button>
               </div>
            </div>
         </div>
      </section>


      <section class="page__section page__section--grey">
         <h2 class="visually-hidden">{{header}}</h2>
         <div class="special__section-container container">
            <p class="special__big-text">
            Вы получаете продукт от агентства высокого уровня, готовый к использованию. За счет четких условий, работа выполняется быстро и по выгодной цене. 
            </p>

            <p class="special__sub-descr">Вдумчивый, внимательный подход к каждому клиенту, с глубоким погружением в задачу. Динамичны и актуальны в своих решениях. Быстро, прогрессивно и с тонким пониманием, что необходимо заказчику.</p>

            <ul class="special__contacts">
                  <li class="special__contacts-item">
                     <span class="special__contacts-name">Почта для вопросов</span>
                     <a class="special__contacts-value" href="mailto:{{_sett.email}}">{{_sett.email}}</a>
                  </li>

                  <li class="special__contacts-item">
                     <span class="special__contacts-name">Телефон для связи</span>
                     <a class="special__contacts-value" href="tel:+{{wbDigitsOnly({{_var.phone}})}}">{{_sett.phone}}</a>
                  </li>
            </ul>
         </div>
      </section>

      <section class="page__section container">
         <h2 class="partners__section-title">
            Последовательность работы
         </h2>

         <ul class="partners__work-list">
            <li class="partners__work-item">
               <h3 class="partners__work-title">Старт</h3>
               <p class="partners__work-description text-break">Скачиваете шаблонный договор и бриф, заполняете и отправляете нам через форму заявки или на почту: info@idees.ru. Обратите внимание, что заполнить бриф необходимо очень подробно, чтобы команда попала в ваши ожидания</p>
            </li>
            <li class="partners__work-item">
               <h3 class="partners__work-title">Согласование</h3>
               <p class="partners__work-description text-break">Согласуем условия, подписываем договор, выставляем счет, который вы оплачиваете</p>
            </li>
            <li class="partners__work-item">
               <h3 class="partners__work-title">Брифование</h3>
               <p class="partners__work-description text-break">После получения полной предоплаты и сканов подписанных документов, менеджер проекта организует брифинг, задаст вам дополнительные вопросы для более точного понимания задачи</p>
            </li>
            <li class="partners__work-item">
               <h3 class="partners__work-title">Финал</h3>
               <p class="partners__work-description text-break">В течении срока указанного в договоре отправляем вам презентацию с готовым решением и акт, который нужно подписать и прислать нам до 3 дней с момента получения. После получения подписанного с вашей стороны акта, мы отправляем вам все результаты работ включая исходники.</p>
            </li>
         </ul>
      </section>

      <section class="page__section container">
         <h2 class="partners__section-title">
         Правки и доработки 
         </h2>
         <ul class="specail__fixes-list">
            <li class="special__fixes-item">
               <span class="special__fixes-text">Разработка платформы бренда и коммуникационной стратегии</span>
            </li>
            <li class="special__fixes-item">
               <span class="special__fixes-text">Создание фирменного стиля: название, логотип, брендбук и т.д</span>
            </li>
            <li class="special__fixes-item">
               <span class="special__fixes-text">Разработка корпоративного или промо сайта, веб-сервиса любой сложности</span>
            </li>
            <li class="special__fixes-item">
               <span class="special__fixes-text">Создаие иллюстраций, видео и фото контента. Любые носители стиля</span>
            </li>
            <li class="special__fixes-item">
               <span class="special__fixes-text">Осуществим полное дизайн-сопровождение вашего бренда</span>
            </li>
         </ul>
         <p class="special__fixes-sub">В случае, если результат потребует доработки, или увеличения объема работ, команда готова продолжить работу по ставке 2500 рублей в час. Согласуем и выполним доработки, за рамками услуги "Экспресс": внесем правки, разработаем новые носители, зарегистрируем название и т.д.</p>
      </section>
   </div>
   
</view>

<edit header="Экспресс дизайн">
   <div>
   <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
   </div>
</edit>