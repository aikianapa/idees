<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
  <div>
    <wb-module wb="module=yonger&mode=render&view=header" />
  </div>

    <main class="page__main">

    <section>
    <div class="vacancy container" wb-if="'{{active}}'=='on'">
        <h1 class="page__title">{{name}}</h1>
        <title>Вакансия - {{name}}</title>
        <div class="vacancy__container">
            <section class="vacancy__content">
                <p class="text-break">{{text}}</p>

                <h3>Задачи</h3>
                <ul>
                    <wb-foreach wb="from=tasks">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>

                <h3>Требования</h3>

                <ul>
                    <wb-foreach wb="from=skils">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>

                <h3>Условия</h3>

                <ul>
                    <wb-foreach wb="from=enviroment">
                        <li>{{_val}}</li>
                    </wb-foreach>
                </ul>
            </section>

            <aside class="vacancy__contacts">
                <h2 class="vacancy__contacts-title">Контакты отдела HR:</h2>
                <ul class="vacancy__contacts-list">
                    <li class="vacancy__contacts-item" wb-if="'{{_sett.phone}}'> ''">
                        <a class="vacancy__contacts-link" href="tel:+{{wbDigitsOnly({{_sett.phone}})}}" target="_blank">{{_sett.phone}}</a>
                    </li>
                    <li class="vacancy__contacts-item">
                        <a class="vacancy__contacts-link" href="email:{{_sett.email}}" target="_blank">{{_sett.email}}</a>
                    </li>
                    <li class="vacancy__contacts-item" wb-if="'{{_sett.telegram}}'>''">
                        <a class="vacancy__contacts-link" href="https://t.me/{{_sett.telegram}}" target="_blank">@{{_sett.telegram}}</a>
                    </li>
                </ul>

                <a class="button vacancy__contacts-button" href="#vacancy-form">
                    <span class="button__icon-wrapper">
                        <svg class="button__icon" width="24" height="24">
                            <use xlink:href="/assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </span>

                    <span class="button__text">отправить заявку</span>
                </a>
            </aside>

        </div>
    </div>
    </section>

    <section>
        <wb-module wb="module=yonger&mode=render&view=form-vacancy" />
    </section>    
    
    </main>


    <wb-module wb="module=yonger&mode=render&view=footer" />

</body>

</html>