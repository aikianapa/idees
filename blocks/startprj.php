<view>
    <section class="services-section container">
        <wb-var mb80="mb-80" wb-if="'{{btntext}}'==''" else=""></wb-var>
        <div class="services-section__container {{_var.mb80}}">
            <h2 class="services-section__title">{{header}}</h2>
        </div>
        <wb-include wb-tpl="services-category.inc.php" />
    </section>
</view>
<edit header="Категории услуг">
    <div>
        <wb-module wb="module=yonger&amp;mode=edit&amp;block=common.inc"></wb-module>
    </div>
    <div class="alert alert-info">
        Контент блока генерируется автоматически на основе существующих страниц в /services.
    </div>
</edit>