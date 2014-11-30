<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 29.11.14
 * Time: 17:24
 */
class comments_controller extends controller
{
    public function init()
    {

    }

    public function after_auth()
    {
        $this->system->script = array('jquery.dataTables.min','ckeditor/ckeditor');
        $this->system->style = array('jquery.dataTables.min');
        if($this->system->city)
        {
            $comments_model = new comments_model('firm_comments', $this->system->city['alias']);
            $comments = $comments_model->getNewComments();
            $this->t->assign('comments', $comments);
        }

    }

    public function ajax()
    {
        switch($_REQUEST['action'])
        {
            case "edit_comment":
                $comments_model_name = $_POST['type'] . '_comments';
                $comments_model = new default_model($comments_model_name, $this->system->city['alias']);
                $row = array();
                $row['id'] = $_POST['id_comment'];
                $row['text'] = trim($_POST['text']);
                $comments_model->insert($row);
                exit;
            break;

            case "accept_comment":
                $comments_model_name = $_POST['type'] . '_comments';
                $comments_model = new default_model($comments_model_name, $this->system->city['alias']);
                $row = array();
                $row['id'] = $_POST['id_comment'];
                $row['status'] = 1;
                $comments_model->insert($row);
                exit;
            break;

            case "delete_comment":
                $comments_model_name = $_POST['type'] . '_comments';
                $comments_model = new default_model($comments_model_name, $this->system->city['alias']);
                $comments_model->deleteById($_POST['id_comment']);
                exit;
            break;

        }
    }
}