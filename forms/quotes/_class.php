<?php
//use Nahid\JsonQ\Jsonq;

class quotesClass extends cmsFormsClass {
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
        $item = $this->app->vars('_post');


        if ($this->app->vars('_route.refferer')) {
            $html = $this->app->fromFile($this->app->vars('_route.refferer'));
            $msg = $this->app->fromString('<html><div class="mail"></div></html>');
            //echo $html;
            $msgbody = $msg->find('.mail');
            foreach ($item as $fld => $val) {
                if ($val > '' && $fld !== '__token') {
                    $field = $html->find("[name={$fld}]")[0];
                    if ($field->is('.form__checkbox')) {
                        $label = $field->closest('fieldset')->find('legend')->text();
                        $value = $field->next('label')->text();
                    } elseif ($field->is('.form__text-field')) {
                        $label = $field->prev('label')->text();
                        $value = &$val;
                    } elseif (!$field->is('[type=file]')) {
                        $label = $fld;
                        $value = &$val;
                    }
                    $line = '<div><b>'.$label.'</b>: '.$value.'</div>';
                    $msgbody->append($line);
                }
            }
        }


        header('Content-Type: application/json; charset=utf-8');
        if ($item['email'] == '') {
            $res = ['error'=>true,'msg'=>'Unknown error'];
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
            } elseif (preg_match("/^data:.*;base64,/m", $value)) {
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
            $this->app->mail($from, $sent, $subj, $msg->html());
        }

        $item['_created'] = date('Y-m-d H:i:s');
        $item = $this->app->itemSave('quotes', $item, true);

        $res = ['error'=>false,'item'=>$item];
        return json_encode($res);
    }

}
?>