<div id="cookies" class="cookies" data-wb-where='"{{_COOK.wbcookies}}"="" AND "{{_SESS.user.wbcookies}}"=""' data-wb-hide="wb">
    <div class="cookies__text">
        Мы используем ваши файлы cookies для аналитики и изучения поведения на сайте, продолжая использовать этот сайт,
        вы соглашаетесь с нашей
        <a href="personal.html" target="_blank" class="link-black link-underline">Политикой конфиденциальности</a>
    </div>
    <button id="clearCookies" class="button-arrow button-arrow--default cbutton cbutton--effect-boris" onClick="var cookdate = new Date(new Date().getTime() + 60 * 1000 * 60 * 60 *24 *365 ); document.cookie = 'wbcookies = true; path=/; expires=\"' + cookdate + '\"'; $('#wb_cookies_alert').remove();">
        <div class="circle">
            <span class="icon arrow"></span>
        </div>
        <p class="button-text">Понятно</p>
    </button>
</div>