<?php
/**
 * Created by PhpStorm.
 * User: пк
 * Date: 30.09.14
 * Time: 18:30
 */
class tools_module
{
    public $weekdays = array(
        'mon' => 'Пн',
        'tue' => 'Вт',
        'wed' => 'Ср',
        'thi' => 'Чт',
        'fri' => 'Пт',
        'sat' => 'Сб',
        'sun' => 'Вс'
    );
    public function idArray($result = array())
    {
        $res = array();
        foreach($result as $v)
        {
            $res[$v['id']] = $v;
        }
        return $res;
    }

    public function filterStreets($street)
    {
        $street = strtr($street, array('.'=>' ', ',' => ''));
        if($street)
            $street = explode(' ', $street);
        else return false;
        $res = array();
        foreach($street as $k => $str)
        {
            $str = $this->mb_ucfirst(trim($str));
            $pattern[] = "/^(?:Ул|Ули|Улиц|Улица|У-ца|Ул-ца)$/i";
            $replacement[] = '';
            $pattern[] = "/^(?:Пр|Пд|Про|Прое|Пр-зд|Прз|Прзд|П-д|Пр-д)$/i";
            $replacement[] = 'проезд';
            $pattern[] = "/^(?:Пр-т|Пт|П-т|Просп|Пр-кт|Проспе)$/i";
            $replacement[] = 'проспект';
            $pattern[] = "/^(?:Б-р|Бр|Бул|Блв|Бл|Буль|Бульв|Бул-р|Блвр|Бвр)$/i";
            $replacement[] = 'бульвар';
            $pattern[] = "/^(?:П-к|Пер-к|Пере-к|Переул|Переуло)$/i";
            $replacement[] = 'переулок';
            $pattern[] = "/^(?:П-й|Перв|Первый|Первой|Пер-й|1ый|1ой|1-ый|1-ой|1-й)$/i";
            $replacement[] = '1й';
            $pattern[] = "/^(?:Вт|Второй|Втор|Вт-й|2ой|2-ой|2-й)$/i";
            $replacement[] = '2й';
            $pattern[] = "/^(?:Трет|Тр|Тр-й|Третий|Третьей|3ий|3ей|3-ей|3-ий|3-й)$/i";
            $replacement[] = '3й';
            $pattern[] = "/^(?:Четв|Чет-й|Четв-й|Чт|4ой|4-ый|4-ой|4-й)$/i";
            $replacement[] = '4й';
            $pattern[] = "/^(?:Пят|Пя-й|Пя-ой|5ый|5ой|5-ый|5-ой|5-й)$/i";
            $replacement[] = '5й';
            $pattern[] = "/^(?:Года|Г-а)$/i";
            $replacement[] = 'г.';
            $res[$k] = trim(preg_replace($pattern, $replacement, $str));
            if($res[$k] == '')unset($res[$k]);
        }
        if(isset($res) && $res != '')
            return implode(' ',$res);
        else
            return false;

    }
    public function filterBuildings($building)
    {
        $building = strtr($building, array('.'=>' ', ',' => ''));
        if($building)
            $building = explode(' ', $building);
        else return false;
        $res = array();
        foreach($building as $k => $str)
        {
            $str = $this->mb_ucfirst(trim($str));
            $pattern[] = "/^(?:Д|Дом)$/i";
            $replacement[] = '';
            $pattern[] = "/^(?:С|Ст|Стр|Строе|Строен|Строени|Строение|Ст-е|Стр-е|С-ие|Ст-ие|Стр-ие|К|К-с|Кор|Корп|Корпу|Корпус|Кор-с|Ко-с|Др|Дро|Дроб|Дробь|Д-бь|\\|Зд)$/i";
            $replacement[] = '/';
            $res[$k] = trim(preg_replace($pattern, $replacement, $str));
            if($res[$k] == '')unset($res[$k]);
        }
        if(isset($res) && $res != '')
            return implode(' ',$res);
        else
            return false;

    }

    public function mb_ucfirst($str, $enc = 'utf-8')
    {
        return mb_strtoupper(mb_substr($str, 0, 1, $enc), $enc).mb_substr($str, 1, mb_strlen($str, $enc), $enc);
    }


}