<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 05.11.14
 * Time: 19:29
 */
class common_controller extends controller
{
    public function init()
    {

    }
    public function after_auth()
    {
        $system_model = new default_model('system_routes');
        $tmp = $system_model->getByField('project', 'user', true, 'parent, position');
        $sidebar = array();
        foreach($tmp as $k => $v)
        {
            if(!$v['parent'])
                $sidebar[$v['id']] = $v;
            else
                $sidebar[$v['parent']]['children'][$v['id']] = $v;

        }
        $this->system->sidebar = $sidebar;
        $this->t->assign('sidebar', $this->system->sidebar);
    }
    public function last()
    {
        if(!$this->user['id'])
        {
            header('Location: http://' . DOMAIN);
            exit;
        }
    }

    public function ajax()
    {
        switch($_REQUEST['action'])
        {
            case 'ajax_image_upload':
                $upload_dir = ROOT_DIR . 'uploads' . DS . ( $_POST['dir'] ? $_POST['dir'] : 'temp' . DS );
                if(!file_exists($upload_dir))
                    mkdir($upload_dir, 0777);
                $ext = substr($_FILES['uploadfile']['name'],strpos($_FILES['uploadfile']['name'],'.'),strlen($_FILES['uploadfile']['name'])-1);
                $filetypes = array('.jpg','.gif','.bmp','.png','.JPG','.BMP','.GIF','.PNG','.jpeg','.JPEG');
                $file = $upload_dir . $_POST['name'].$ext;
                if(!in_array($ext,$filetypes))
                {
                    echo "<p>Данный формат файлов не поддерживается</p>";
                }
                else
                {
                    if (copy($_FILES['uploadfile']['tmp_name'], $file))
                    {
                        echo 'success';
                    }
                    else
                    {
                        echo "error";
                    }
                }
                exit;
            break;

            case 'ajax_multi_upload':
                $upload_dir = ROOT_DIR . 'uploads' . DS . ( $_POST['dir'] ? $_POST['dir'] : 'temp' . DS );
                $upload_path = SITE_DIR . 'uploads/' . ( $_POST['dir'] ? $_POST['dir'] : 'temp/' );
                if(!file_exists($upload_dir))
                    mkdir($upload_dir, 0777);
                $ext = substr($_FILES['uploadfile']['name'],strpos($_FILES['uploadfile']['name'],'.'),strlen($_FILES['uploadfile']['name'])-1);
                $filetypes = array('.jpg','.gif','.bmp','.png','.JPG','.BMP','.GIF','.PNG','.jpeg','.JPEG');
                $name =  rand().$_POST['name'];
                $file = $upload_dir .$name.$ext;
                if(!in_array($ext,$filetypes))
                {
                    echo "<p>Данный формат файлов не поддерживается</p>";
                }
                else
                {
                    if (copy($_FILES['uploadfile']['tmp_name'], $file))
                    {
                        $this->t->assign('path', $upload_path);
                        $this->t->assign('name', $name.$ext);
                        $this->t->display(TEMPLATE_DIR . 'ajax/multi_upload.tpl');
                    }
                    else
                    {
                        echo "error";
                    }
                }
                exit;
            break;

        }
    }
}