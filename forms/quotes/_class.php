<?php
//use Nahid\JsonQ\Jsonq;

class quotesClass extends cmsFormsClass {
    public $app;

    function beforeItemSave(&$item) {
        $item['login'] = $this->app->vars('_sess.user.login');
        isset($item['status']) ? null : $item['status'] = 'new';
    }


    function afterItemSave(&$item)
    {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }


    function beforeItemShow(&$item)
    {
        $item['phone'] = wbPhoneFormat($item['phone']);
    }


    function submit()
    {
        $res = [];
        // $item = $this->app->vars('_post');
        $item = json_decode(file_get_contents('php://input'), true);
        // print(var_dump($item));
        if ($this->app->vars('_route.refferer')) {
            $html = $this->app->fromFile($this->app->vars('_route.refferer'));
            $msg = $this->app->fromString('<html><div class="mail"><h3>Заявка с сайта</h3></div></html>');
            $msgbody = $msg->find('.mail');
            foreach ($item as $fld => $val) {
                $value ='';
                if ($val > '' && $fld !== '__token' && $fld !== 'file') {
                    $field = $html->find(".zayavka [name={$fld}]")[0];
                    if ($field->is('.form__checkbox')) {
                        $label = $field->closest('fieldset')->find('legend')->text();
                        $value = $field->next('label')->text();
                    } elseif ($field->attr('placeholder') > '') {
                        $label = $field->attr('placeholder');
                        $value = $val;
                    } elseif (!$field->is('[type=file]')) {
                        $label = $fld;
                        $value = $val;
                    }
                    is_array($value) ? $value = implode("<br>",$value) : null;
                    if ($value > '') {
                        $msgbody->append('<div><b>'.$label.'</b>: '.$value.'</div>');
                    } 
                }
            }
        }

        header('Content-Type: application/json; charset=utf-8');
        if ($item['email'] == '') {
            $res = ['error'=>true, 'msg'=>'*** Unknown error ***'];
            return json_encode($res);
        }
        $qnum = $this->app->module('autoinc');
        $file = null;

        foreach ($item as $key => $value) {
            if (preg_match("/^project-|source-/", $key)) {
                $fld = explode('-', $key);
                isset($item[$fld[0]]) ? null : $item[$fld[0]] = [];
                $value == 'on' ? $item[$fld[0]][] = $fld[1] : null;
                unset($item[$key]);
            } elseif (is_string($value) && preg_match("/^data:.*;base64,/m", $value)) {
                $mime = substr($value, 0, 30);
                $base = strpos($mime, ';base64');
                $mime = substr($mime, 0, $base);
                $mime = substr($mime, 5);
                $atch = base64_decode(substr($value, $base + 8));
                $ext = $this->app->mimeExt($mime);
                $file = '/uploads/quotes/'.wbNewId().'.'.$ext;
                wbPutContents($this->app->vars('_env.path_app').$file, $atch);
                $item[$key] = [['img'=>$file,'title'=>'','alt'=>'']];
            }
        }
        $item['number'] = $qnum->inc('quotes', 'number', 1000);
        if (isset($msgbody)) {
            $msgbody->prepend('<h3>Заявка №'.$item['number'].'</h3>');
            $subj = $msg->find('.mail > h3')->text();
            $from = $item['email'].';'.$item['name'];
            $sent = $this->app->vars('_sett.quote_email') > '' ? $this->app->vars('_sett.quote_email') : $this->app->vars('_sett.email');
            $file = ($file > ' ') ? $this->app->vars('_env.path_app').$file : [];
            $this->app->mail($from, $sent, $subj, $msg->html(), $file);
        }

        $item['_created'] = date('Y-m-d H:i:s');
        $item = $this->app->itemSave('quotes', $item, true);
        $res = ['error'=>false,'item'=>$item];
        return json_encode($res);
    }

}
?>