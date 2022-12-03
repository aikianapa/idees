<?php
class modSelectcases
{
    public $app;
    public $dom;
    public function __construct($dom)
    {
        $this->app = &$dom->app;
        $this->dom = &$dom;
        $this->init();
    }

    function init() {
        $ui = $this->app->fromFile(__DIR__.'/selectcases_ui.php');
        $this->dom->attr('name') > '' ? $ui->find('select')->attr('name', $this->dom->attr('name')) : null;
        $this->dom->attr('name') === null ? null : $ui->find('select')->attr('multiple', 1);
        $ui->fetch($this->dom->item);
        $this->dom->after($ui);
        $this->dom->remove();
    }
}

?>