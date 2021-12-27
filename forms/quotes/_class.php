<?php
//use Nahid\JsonQ\Jsonq;

class quotesClass extends cmsFormsClass {
    function beforeItemSave(&$item) {
        $item['login'] = $this->app->vars('_sess.user.login');
        isset($item['status']) ? null : $item['status'] = 'new';
    }


    function beforeItemShow(&$item)
    {
        $item['phone'] = wbPhoneFormat($item['phone']);
    }

    function submit() {
        header('Content-Type: application/json; charset=utf-8');
        $res = [];
        $item = $this->app->vars('_post');
        if ($item['email'] == '') {
            $res = ['error'=>true,'msg'=>'Unknown error'];
            return json_encode($res);
        }
        $qnum = $this->app->module('autoinc');
        foreach($item as $key => $value) {
            if (preg_match("/^project-|source-/",$key)) {
                $fld = explode('-', $key);
                isset($item[$fld[0]]) ? null : $item[$fld[0]] = [];
                $value == 'on' ? $item[$fld[0]][] = $fld[1] : null;
                unset($item[$key]);
            } else if (preg_match("/^data:.*;base64,/m",$value)) {
                
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
        $item = $this->app->itemSave('quotes', $item, true);
        $res = ['error'=>false,'item'=>$item];
        return json_encode($res);

    }
}
?>