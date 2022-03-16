<view>
    <section class="page__section products__advantage-section container">
        <h2 class="page__section-title">
            {{header}}
        </h2>

        <ul class="products__advantage-list">
            <wb-foreach wb-from="cards">
                <li class="products__advantage-item">
                    {{_val}}
                </li>
            </wb-foreach>

        </ul>
    </section>
</view>

<edit header="Блок текстовых карточек">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="cards"></wb-multiinput>
</edit>