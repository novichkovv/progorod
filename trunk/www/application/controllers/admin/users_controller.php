<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 07.11.14
 * Time: 0:07
 */
class users_controller extends controller
{
    public function init()
    {
        switch($this->system->parts[1])
        {
            case "list":
                $user_groups_model = new default_model('user_groups');
                $groups = $user_groups_model->getAll();
                $groups_select = array();
                foreach($groups as $k => $v)
                {
                    $groups_select[$k]['value'] = $v['id'];
                    $groups_select[$k]['label'] = $v['name'];
                }
                $crud = new crud_extension($this);
                $params['creator'] = $this->user['id'];
                $params = array();
                $params['default_model'] = 'users';
                $params['col'] = 4;
                $params['sm'] = 6;
                $params['xs'] = 12;
                $params['fields']['mail'] = array(
                    'type' => 'text',
                    'label' => 'Email'
                );
                $params['fields']['password'] = array(
                    'type' => 'password',
                    'label' => 'Пароль',
                    'not_show' => true
                );
                $params['fields']['password2'] = array(
                    'type' => 'password',
                    'label' => 'Пароль еще раз',
                    'ignore' => true
                );
                $params['fields']['id_user_group'] = array(
                    'type' => 'select',
                    'value' => $groups_select,
                    'label' => 'Группа пользователей'
                );
                $crud->params($params);
            break;

            case "groups":
                $crud = new crud_extension($this);
                $params = array();
                $params['default_model'] = 'user_groups';
                $params['creator'] = $this->user['id'];
                $params['fields']['name'] = array(
                    'label' => 'Название группы'
                );
                $crud->params($params);
            break;


        }
    }
}