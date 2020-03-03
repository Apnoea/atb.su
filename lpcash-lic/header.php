<?
ob_start();
?>
<div class="landing2">
    <header>
        <div class="header">
            <div class="header-logo">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/styles/landing2/img/logo.svg" alt="">
                </a>
            </div>
            <div class="header-contacts">
                <div class="txt">
                    <a href="tel:88007758888" class="phone callibri_phone">8 (800) 775-88-88</a>
                    Бесплатный звонок по&nbsp;России
                </div>
                <a href="tel:88007758888" class="icon"></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
    <div class="top_banner">
        <div class="inner">
            <div class="top_banner-title">Получите до 10 млн ₽</div>
            <div class="top_banner-block">
                <div class="top_banner-block-item">
                    <div class="top_banner-block-item-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/styles/landing2/img/top_banner_svg1.svg" alt="Нужен только паспорт">
                    </div>
                    <div class="top_banner-block-item-desc">
                        Нужен только паспорт
                    </div>
                </div>
                <div class="top_banner-block-item">
                    <div class="top_banner-block-item-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/styles/landing2/img/top_banner_svg2.svg" alt="Индивидуальная ставка">
                    </div>
                    <div class="top_banner-block-item-desc">
                        Индивидуальная ставка
                    </div>
                </div>
                <div class="top_banner-block-item">
                    <div class="top_banner-block-item-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/styles/landing2/img/top_banner_svg3.svg" alt="Быстрое оформление заявки">
                    </div>
                    <div class="top_banner-block-item-desc">
                        Быстрое оформление&nbsp;заявки
                    </div>
                </div>
            </div>
            <div class="top_banner-button">
                <a class="button apply btn_sbmt" href="#">Оформить заявку на кредит</a>
            </div>
        </div>
    </div>
</div>
<?
$header = ob_get_contents();
ob_end_clean();
$APPLICATION->AddViewContent('header', $header);
?>