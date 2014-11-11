<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 16.10.14
 * Time: 18:57
 */
class test_controller extends controller
{
    public function init()
    {
        $years = array();
        for($i=1970; $i<=date('Y'); $i++)
        {
            if($i == 1985)
                $years['selected'] = array($i => $i);
            else $years[$i] = $i;
        }
        $crud = new crud_extension($this);
        $params = array();
        $params['col'] = 6;
        $params['xs'] = 12;
        $params['fields']['name'] = array(
            'label' => 'Имя',
            'col' => 6,
            'xs' => 12,
            'row_nclose' => true,
            'group_nclose' => true
        );
        $params['fields']['birthyear'] = array(
            'type' => 'select',
            'value' => $years,
            'label' => 'Год рождения',
            'placeholder' => 'Выберите год',
            'row_nopen' => true,
            'group_nopen' => true,
        );
        $params['fields']['description'] = array(
            'col' => 12,
            'type' => 'textarea',
            'label' => 'Описание',
            'cols' => '40',
            'rows' => '8',
            'placeholder' => 'Напишите пару слов о себе'
        );
        $params['fields']['education[]'] = array(
            'col' => 12,
            'inline' => true,
            'inner_group' => true,
            'ngroup' => true,
            'type' => 'checkbox',
            'right' => true,
            'value' => array(
                array(
                    'value' =>'nursery',
                    'label' =>'Детский сад',
                    'checked' => true
                    ),
                array(
                    'value' =>'school',
                    'label' =>'Школа',
                    'checked' => true,
                    'disabled' => true
                    ),
                array(
                    'value' =>'middle',
                    'label' =>'Среднее',

                ),
                array(
                    'value' =>'school',
                    'label' =>'Вуз',
                )
            ),
            'label'=>'Образование'
        );
        $params['fields']['gender'] = array(
            'inline' => true,
            'inner_group' => true,
            'type' => 'radio',
            'label' => 'Пол',
            'value' => array(
                array(
                'value' => 'male',
                'label' => 'М'
                ),
                array(
                'value' => 'female',
                'label' => 'Ж',
                'checked' => true
                ),
                array(
                'value' => 'middle',
                'label' => 'Ср',
                'disabled' => true
                ),
             )
        );
        //$crud->params($params);

        $simple_form = new crud_extension($this);
        $params = array();
        $params['default_model'] = 'users';
        //$params['user_template'] = true;
        $params['col'] = 4;
        $params['sm'] = 6;
        $params['xs'] = 12;
        $params['fields']['name'] = array('label' => 'Имя');
        $params['fields']['surname'] = array('label' => 'Фамилия');
        $params['fields']['mail'] = array('label' => 'E-mail');
        $params['fields']['password'] = array('label' => 'Пароль', 'type'=>'password', 'not_show'=>true);
        $params['fields']['password2'] = array('label' => 'Пароль еще раз', 'type'=>'password', 'ignore' => true);
        $simple_form->params($params);
    }
}