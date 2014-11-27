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
    public $simple_weekdays = array(
        'mon',
        'tue',
        'wed',
        'thi',
        'fri',
        'sat',
        'sun'
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
            $str = mb_strtolower(trim($str),'utf-8');
            $pattern[] = "/^(?:д|дом)$/i";
            $replacement[] = '';
            $pattern[] = "/^(?:ст|стр|строе|строен|строени|строение|ст-е|стр-е|с-ие|ст-ие|стр-ие|к|к-с|кор|корп|корпу|корпус|кор-с|ко-с|кр|кро|Зд)$/i";
            $replacement[] = 'с';
            $pattern[] = "/^(?:др|дроб|дробь|\\|д-бь)$/";
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

    public function parse_workdays($workdays)
    {
        $res = array();
        $keys = array_keys($workdays);
        if($workdays[$keys[0]]['always'])
        {
            $res['always'] = 1;
        }
        if($workdays[$keys[0]]['daily'] && count($workdays) == 1)
        {
            $arr = explode(':',$workdays[key($workdays)]['work_from']);
            unset($arr[2]);
            $res['daily']['from'] = implode(':', $arr);
            $arr = explode(':',$workdays[key($workdays)]['work_to']);
            unset($arr[2]);
            $res['daily']['to'] = implode(':', $arr);


        }
        elseif($workdays[$keys[0]]['daily'] && count($workdays) == 2)
        {

            if($workdays[$keys[0]]['work_to'] > $workdays[$keys[1]]['work_to'])
            {
                $arr = explode(':', $workdays[$keys[0]]['work_from']);
                unset($arr[2]);
                $res['daily']['from'] = implode(':', $arr);
                $arr = explode(':', $workdays[$keys[1]]['work_to']);
                unset($arr[2]);
                $res['daily']['to'] = implode(':', $arr);
            }
            else
            {
                $arr = explode(':', $workdays[$keys[1]]['work_from']);
                unset($arr[2]);
                $res['daily']['from'] = implode(':', $arr);
                $arr = explode(':', $workdays[$keys[0]]['work_to']);
                unset($arr[2]);
                $res['daily']['to'] = implode(':', $arr);
            }

        }
        else
        {
            $wd= $workdays;
            $workdays = array();
            foreach($wd as $v)
            {
                $workdays[$v['weekday']][] = $v;
            }

            foreach($workdays as $day => $v)
            {
                $next_weekday = $day != 'sun'? $this->simple_weekdays[array_keys($this->simple_weekdays, $day)[0] + 1] : 'mon';
                if(count($workdays[$next_weekday]) == 2)
                {
                    if(count($v) == 1)
                    {
                        $from = explode(':', $v[0]['work_from']);
                    }
                    else
                    {
                        $from = $v[0]['work_from'] == '00:00:00' ? explode(':', $v[1]['work_from']) : explode(':', $v[0]['work_from']);
                    }
                    $to = $workdays[$next_weekday][0]['work_from'] == '00:00:00' ? explode(':', $workdays[$next_weekday][0]['work_to']) : explode(':', $workdays[$next_weekday][1]['work_to']);
                }
                elseif(count($workdays[$next_weekday]) == 1)
                {
                    if(count($v) == 1)
                    {
                        $from = explode(':', $v[0]['work_from']);
                        $to = explode(':', $v[0]['work_to']);

                    }
                    else
                    {
                        if($v[0]['work_from'] == '00:00:00')
                        {
                                $from = explode(':', $v[1]['work_from']);
                                $to = explode(':', $v[1]['work_to']);
                        }
                        else
                        {
                            $from = explode(':', $v[0]['work_from']);
                            $to = explode(':', $v[0]['work_to']);
                        }
                    }
                }
                $res['schedule'][$this->weekdays[$day]]['from'] = $from[0];//.($from[1] == '00' ? "" : ":" . $from[1]);
                $res['schedule'][$this->weekdays[$day]]['to'] = $to[0];//.($to[1] == '00' ? "" : ":" . $to[1]);
//                $prev_weekday = $day != 'mon'? $this->weekdays[$this->simple_weekdays[array_keys($this->simple_weekdays, $day)[0] - 1]] : 'Вс';
//                $next_weekday = $day != 'sun'? $this->simple_weekdays[array_keys($this->simple_weekdays, $day)[0] + 1] : 'mon';
//                if(count($v) == 1)
//                {
//                    $arr = explode(':', $v[0]['work_from']);
//                    unset($arr[2]);
//                    if($arr[1] == '00')
//                        unset($arr[1]);
//                    $res['schedule'][$this->weekdays[$day]]['from'] = implode(':', $arr);
//                    $arr = explode(':', $v[0]['work_to']);
//                    unset($arr[2]);
//                    if($arr[1] == '00')
//                        unset($arr[1]);
//                    $res['schedule'][$this->weekdays[$day]]['to'] = implode(':', $arr);
//                }
//                elseif(count($v) == 2)
//                {
//                    print_r($v);
//                    if($v[0]['work_to'] < $v[1]['work_to'])
//                    {
//                        $arr = explode(':', $v[1]['work_from']);
//                        unset($arr[2]);
//                        if($arr[1] == '00')
//                            unset($arr[1]);
//                        $res['schedule'][$this->weekdays[$day]]['from'] = implode(':', $arr);
//                        if($v[1]['work_to'] != '23:59:59')
//                        {
//                            $arr = explode(':', $v[1]['work_to']);
//                            unset($arr[2]);
//                            if($arr[1] == '00')
//                                unset($arr[1]);
//                            $res['schedule'][$this->weekdays[$day]]['to'] = implode(':', $arr);
//                            $arr = explode(':', $v[0]['work_to']);
//                            unset($arr[2]);
//                            if($arr[1] == '00')
//                                unset($arr[1]);
//                            //$key = array_search($day,$this->simple_weekdays);
//                            $res['schedule'][$prev_weekday]['to'] = implode(':', $arr);
//                        }
//
//                    }
//                    else
//                    {
//                        $arr = explode(':', $v[0]['work_from']);
//                        unset($arr[2]);
//                        if($arr[1] == '00')
//                            unset($arr[1]);
//                        $res['schedule'][$this->weekdays[$day]]['from'] = implode(':', $arr);
//                        if($v[0]['work_to'] != '23:59:59')
//                        {
//                            $arr = explode(':', $v[0]['work_to']);
//                            unset($arr[2]);
//                            if($arr[1] == '00')
//                                unset($arr[1]);
//                            $res['schedule'][$this->weekdays[$day]]['to'] = implode(':', $arr);
//                            $arr = explode(':', $v[1]['work_to']);
//                            unset($arr[2]);
//                            if($arr[1] == '00')
//                                unset($arr[1]);
//                            //$key = array_search($day,$this->simple_weekdays);
//                            $res['schedule'][$prev_weekday]['to'] = implode(':', $arr);
//                        }
//                    }
//                }
                $key = array_search($day,$this->simple_weekdays);
//                //print_r($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]);
//                ///echo $prev_weekday;
                if($key > 1)
                {
                    if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['from'] == $res['schedule'][$this->weekdays[$day]]['from']
                        && $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['to'] == $res['schedule'][$this->weekdays[$day]]['to']
                    )
                    {
                        if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['from']  == $res['schedule'][$this->weekdays[$day]]['from']
                            && $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['to']  == $res['schedule'][$this->weekdays[$day]]['to'])
                        {
                            $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['miss'] = 1;
                            if(!$res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['miss'] == 1)
                                $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['first'] = 1;
                        }
                    }
                    if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['from'] == $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['from']
                        && $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]]['to'] == $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['to'])
                    {
                        if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['from']  != $res['schedule'][$this->weekdays[$day]]['from']
                            || $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['to']  != $res['schedule'][$this->weekdays[$day]]['to'])
                        {
                            $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]]['last'] = 1;
                        }
                    }
////                    if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]] == array() || $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 2]]] == 1)
////                    {
////                        if($res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]] == $res['schedule'][$this->weekdays[$day]])
////                        {
////                            $res['schedule'][$this->weekdays[$this->simple_weekdays[$key - 1]]] = 1;
////                        }
////                    }
               }
            }
        }

        //print_r($res);

        return $res;
    }

}