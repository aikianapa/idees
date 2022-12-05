<?php
/*
<input class="form-control" wb="module=selectservices&value=path" name="links_link" placeholder="Ссылка">
в параметре value указывается поле, подставляемое в значение
*/

class modSelectservices
{
    public $app;
    public $dom;
    public function __construct($dom)
    {
        $this->app = &$dom->app;
        $this->dom = &$dom;
        $this->init();
    }

    public function init()
    {
        $ui = $this->app->fromFile(__DIR__.'/selectservices_ui.php');
        $this->dom->attr('name') > '' ? $ui->find('select')->attr('name', $this->dom->attr('name')) : null;
        $this->dom->attr('placeholder') > '' ? $ui->find('select')->attr('placeholder',$this->dom->attr('placeholder')) : null;
        $this->dom->is('[multiple]') ? $ui->find('select')->attr('multiple', 1) : null;
        isset($this->dom->params->value) && $this->dom->params->value>'' ? $ui->find('select option')->attr('value', '{{'.$this->dom->params->value.'}}') : null;
        $ui->fetch($this->dom->item);
        $this->dom->after($ui);
        $this->dom->remove();
    }
}
?>