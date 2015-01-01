<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 11.12.14
 * Time: 19:51
 */
session_start();
require_once('config.php');
if(!isset($_POST['export']))
{
    echo ('
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="'.SITE_DIR.'css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="'.SITE_DIR.'css/style.css">
<link rel="stylesheet" type="text/css" href="'.SITE_DIR.'css/dataTables.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dataTables.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/jquery.flot.time.js"></script>
    </head>
    <body>
    ');
}
if(!$_SESSION['login'])
{
    echo ('
    <br><br><br><br><br><br><br>
    <div class="row">
        <form name="login" action="controller.php" method="post">
        <div class="col-xs-offset-4 col-xs-4">
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    <h4 class="panel-title">Log In</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>
                            Login
                        </label>
                        <input type="text" name="login" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                            Password
                        </label>
                        <input type="password" name="password"  class="form-control">
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="submit" class="btn btn-success" name="login_btn" value="login">
                    <a href="' . SITE_DIR . '" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
    ');
}
if($_SESSION['login'] == 'admin')
{
    $query = 'select count(user_id) from login_users group by date(sdate) order by sdate';
    $res = mysqli_query($con, $res);
    $graph = array();
    while($row = $res->fetch_assoc())
    {
        $graph[] = $res;
    }
    $con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = 'SELECT * FROM login_users ORDER BY user_id DESC';
    $res = mysqli_query($con, $query);

    if(isset($_POST['export']))
    {
        $string = 'firstname;email;date' . "\n";

        while($row = $res->fetch_assoc())
        {
            $string .= $row['username'] . ';' . $row['email'] . ';' . date('Y-m-d H:i', strtotime($row['sdate'])) . "\n";

        }
        header('Content-type:application/csv');
        header('Content-Disposition:attachment;filename=detox_subscribers_'.date('y-m-d').'.csv');
        echo $string;
        exit;
    }
    echo '
<br><br><br>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">21 Days Detox Program Subscribers</h3>
                </div>
                <div class="panel-body">
                <div class="table">
                <table class="table table-bordered" id="data_table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
			                <th>Emails sent</th>
                            <th>Sign Up Date</th>
                        </tr>
                    </thead>
                    <tbody>
    ';
    while($row = $res->fetch_assoc())
    {
         echo '
                        <tr>
                            <td>
                                ' . $row['name'] . '
                            </td>
                            <td>
                                ' . $row['username'] . '
                            </td>
                            <td>
                                ' . $row['email'] . '
                            </td>
				            <td>
                                ' . $row['sent'] . '
                            </td>
                            <td>
                                ' . date('M d, Y H:i', strtotime($row['sdate'])) . '
                            </td>
                        </tr>
         ';
    }
    echo '
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
<div class="col-md-8 col-md-offset-2 col-md-offset-1 col-sm-10">
        <form action="" method="post">
            <button class="btn btn-lg btn-default" type="submit" name="export"><i class="glyphicon glyphicon-download-alt"></i> Export in CSV</button>
        </form>
</div>
    </div>
    ';
}


?>
<script type="text/javascript">
jQuery(document).ready(function()
{
jQuery('#data_table').DataTable({
    "aaSorting" : []
});
    <script type="text/javascript">
    $(function () {
        var paid = [];


        paid.push([(new Date(2014, 12, 18)).getTime(), 1024]);


        paid.push([(new Date(2014, 12, 19)).getTime(), 615]);


        paid.push([(new Date(2014, 12, 20)).getTime(), 281]);


        paid.push([(new Date(2014, 12, 21)).getTime(), 186]);


        paid.push([(new Date(2014, 12, 22)).getTime(), 153]);


        paid.push([(new Date(2014, 12, 23)).getTime(), 475]);


        paid.push([(new Date(2014, 12, 24)).getTime(), 292]);


        paid.push([(new Date(2014, 12, 25)).getTime(), 436]);


        paid.push([(new Date(2014, 12, 26)).getTime(), 360]);


        paid.push([(new Date(2014, 12, 27)).getTime(), 195]);


        paid.push([(new Date(2014, 12, 28)).getTime(), 102]);


        paid.push([(new Date(2014, 12, 29)).getTime(), 75]);


        paid.push([(new Date(2014, 12, 30)).getTime(), 190]);


        paid.push([(new Date(2014, 12, 31)).getTime(), 89]);


        paid.push([(new Date(2015, 1, 1)).getTime(), 29]);


        var plot = $.plot($("#simple_graph"),
            [ { data: paid, label: "Paid" } ],
            {
                colors: [ "#6db6ee", "#95c832", "#993eb7", "#3ba3aa"],
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] },
                        lineWidth: 1.5 },
                    points: {
                        show: true,
                        radius: 2.5,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        lineWidth: 1.1 }
                },
                grid: { hoverable: true, clickable: true },
                legend: {
                    show: true
                },
                xaxis: {
                    min: (new Date(2014, 12, 18)).getTime(),
                    max: (new Date(2015, 1, 1)).getTime(),
                    mode: "time",
                    tickSize: [1,"day"],
                    monthNames: ["дек", "янв", "фев","мар","апр","май","июн","июл","авг","сен","окт","ноя"],
                    tickLength: 0,
                    axisLabel: 'Day',
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 11,
                    axisLabelPadding: 5
                }
            });

        function showTooltip(x, y, contents, areAbsoluteXY) {
            var rootElt = 'body';

            $('<div id="tooltip" class="chart-tooltip">' + contents + '</div>').css( {
                top: y - 50,
                left: x - 9,
                opacity: 0.9
            }).prependTo(rootElt).show();
        };

        var previousPoint = null;
        $("#simple_graph").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if ($("#simple_graph").length > 0) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);
                        var date = new Date(parseInt(x));
                        var day = date.getDate();
                        month = date.getMonth();
                        showTooltip(item.pageX, item.pageY,
                            item.series.label + " за " + (parseInt(day)<10 ? '0' + day : day) + '/' + (parseInt(month)<10 ? '0' + month : month) + ": " + parseInt(y));
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            }
        });

        $("#simple_graph").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });
    });

    $(function () {
        var created = [];


        created.push([(new Date(2014, 12, 18)).getTime(), 15765]);


        created.push([(new Date(2014, 12, 19)).getTime(), 5827]);


        created.push([(new Date(2014, 12, 20)).getTime(), 2856]);


        created.push([(new Date(2014, 12, 21)).getTime(), 1842]);


        created.push([(new Date(2014, 12, 22)).getTime(), 1735]);


        created.push([(new Date(2014, 12, 23)).getTime(), 19961]);


        created.push([(new Date(2014, 12, 24)).getTime(), 4395]);


        created.push([(new Date(2014, 12, 25)).getTime(), 7388]);


        created.push([(new Date(2014, 12, 26)).getTime(), 4672]);


        created.push([(new Date(2014, 12, 27)).getTime(), 2206]);


        created.push([(new Date(2014, 12, 28)).getTime(), 1442]);


        created.push([(new Date(2014, 12, 29)).getTime(), 1244]);


        created.push([(new Date(2014, 12, 30)).getTime(), 5108]);


        created.push([(new Date(2014, 12, 31)).getTime(), 1229]);


        created.push([(new Date(2015, 1, 1)).getTime(), 525]);


        var plot = $.plot($("#simple_graph_created"),
            [ {data: created, label: 'Created'} ],
            {
                colors: ["#ee7951", "#6db6ee", "#95c832", "#993eb7", "#3ba3aa"],
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] },
                        lineWidth: 1.5 },
                    points: {
                        show: true,
                        radius: 2.5,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        lineWidth: 1.1 }
                },
                grid: { hoverable: true, clickable: true },
                legend: {
                    show: true
                },
                xaxis: {
                    min: (new Date(2014, 12, 18)).getTime(),
                    max: (new Date(2015, 1, 1)).getTime(),
                    mode: "time",
                    tickSize: [1,"day"],
                    monthNames: ["дек", "янв", "фев","мар","апр","май","июн","июл","авг","сен","окт","ноя"],
                    tickLength: 0,
                    axisLabel: 'Day',
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 11,
                    axisLabelPadding: 5
                }
            });

        function showTooltip(x, y, contents, areAbsoluteXY) {
            var rootElt = 'body';

            $('<div id="tooltip" class="chart-tooltip">' + contents + '</div>').css( {
                top: y - 50,
                left: x - 9,
                opacity: 0.9
            }).prependTo(rootElt).show();
        };

        var previousPoint = null;
        $("#simple_graph_created").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if ($("#simple_graph").length > 0) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);
                        var date = new Date(parseInt(x));
                        var day = date.getDate();
                        month = date.getMonth();
                        showTooltip(item.pageX, item.pageY,
                            item.series.label + " за " + (parseInt(day)<10 ? '0' + day : day) + '/' + (parseInt(month)<10 ? '0' + month : month) + ": " + parseInt(y));
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            }
        });

        $("#simple_graph_created").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });
    });

    $(function () {
        var data = [];


        data[data.length] = { label: "Грозовая Колесница", data: 32 }


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 253 }


        data[data.length] = { label: "Грозовая Колесница", data: 7 }


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 1576 }


        data[data.length] = { label: "Гороскоп совместимости", data: 25 }


        data[data.length] = { label: "Гороскоп на два месяца", data: 4 }


        data[data.length] = { label: "Гороскоп на 2015г.", data: 8 }


        data[data.length] = { label: "Звезда Удачи", data: 9 }


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 67 }


        data[data.length] = { label: "Звезда Удачи", data: 4 }


        data[data.length] = { label: "Соединение Солнца и Юпитера - Печать Удачи", data: 1 }


        data[data.length] = { label: "Персональная консультация", data: 8 }


        data[data.length] = { label: "Зимнее солнцестояние", data: 354 }


        data[data.length] = { label: "Прогноз на декабрь и январь", data: 1 }


        data[data.length] = { label: "Звезда Удачи", data: 5 }


        data[data.length] = { label: "Золотая Подкова", data: 962 }


        data[data.length] = { label: "Малый парад планет", data: 1 }


        data[data.length] = { label: "Золотая Подкова", data: 587 }


        data[data.length] = { label: "Золотая Подкова", data: 294 }


        data[data.length] = { label: "Астрособытия января", data: 254 }


        data[data.length] = { label: "Консультация Кармическая Цепь", data: 1 }



        $.plot($("#donut"), data,
            {
                series: {
                    pie: {
                        show: true,
                        innerRadius: 0.5,
                        radius: 1,
                        label: {
                            show: false,
                            radius: 2/3,
                            formatter: function(label, series){
                                return '<div style="font-size:11px;text-align:center;padding:4px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';
                            },
                            threshold: 0.1
                        }
                    }
                },
                legend: {
                    show: true,
                    noColumns: 1, // number of colums in legend table
                    labelFormatter: null, // fn: string -> string
                    labelBoxBorderColor: "#000", // border color for the little label boxes
                    container: null, // container (as jQuery object) to put legend in, null means default on top of graph
                    position: "ne", // position of default legend container within plot
                    margin: [5, 10], // distance from grid edge to default legend container within plot
                    backgroundColor: "#ffffff", // null means auto-detect
                    backgroundOpacity: 1 // set to 0 to avoid background
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                colors: ["#ee7951", "#6db6ee", "#95c832", "#993eb7", "#3ba3aa"]
            });
        $("#donut").bind("plothover", pieHover);
        $("#donut").bind("plotclick", pieClick);

    });

    function pieHover(event, pos, obj)
    {
        //$("#donut_result").html('20%');
        if (!obj)
            return;
        percent = parseFloat(obj.series.percent).toFixed(2);
        var points = obj.datapoint.toString();
        var point = points.split(',');
        $("#donut_result").html(percent+'%<br />' + point[2] + 'шт.');
        $("#service_name").html(obj.series.label);
    }
    function pieClick(event, pos, obj)
    {
        if (!obj)
            return;
        percent = parseFloat(obj.series.percent).toFixed(2);
        var points = obj.datapoint.toString();
        var point = points.split(',');
        alert(''+obj.series.label+': '+percent+'% - ' + point[2] + 'шт.' );
    }


    $(function () {
        var data = [];


        data[data.length] = { label: "Гороскоп совместимости", data: 18 };


        data[data.length] = { label: "Грозовая Колесница", data: 415 };


        data[data.length] = { label: "Прогноз на декабрь и январь", data: 152 };


        data[data.length] = { label: "Малый парад планет", data: 22 };


        data[data.length] = { label: "Гороскоп на 2015г.", data: 302 };


        data[data.length] = { label: "Малый парад планет", data: 11 };


        data[data.length] = { label: "Звезда Удачи", data: 93 };


        data[data.length] = { label: "Грозовая Колесница", data: 95 };


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 1162 };


        data[data.length] = { label: "Тау-квадрат", data: 12 };


        data[data.length] = { label: "Финансовый гороскоп", data: 36 };


        data[data.length] = { label: "Квадрат Марса и Нептуна", data: 2 };


        data[data.length] = { label: "Ворота золушки", data: 30 };


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 466 };


        data[data.length] = { label: "Малый парад планет", data: 15 };


        data[data.length] = { label: "Звезда Удачи", data: 94 };


        data[data.length] = { label: "Гороскоп совместимости", data: 4165 };


        data[data.length] = { label: "Лунное затмение", data: 3 };


        data[data.length] = { label: "Астрособытия ноября", data: 7 };


        data[data.length] = { label: "Большой Крест", data: 1 };


        data[data.length] = { label: "Зимнее Солнцестоянее", data: 18688 };


        data[data.length] = { label: "Консультация Кармическая Цепь", data: 13 };


        data[data.length] = { label: "Звезда Удачи", data: 81 };


        data[data.length] = { label: "Соединение Солнца и Юпитера - Печать Удачи", data: 2 };


        data[data.length] = { label: "Астрологическая консультация о карьере и финансах", data: 7 };


        data[data.length] = { label: "Гороскоп на два месяца", data: 237 };


        data[data.length] = { label: "Персональная консультация", data: 73 };


        data[data.length] = { label: "Ворота Золушки", data: 23 };


        data[data.length] = { label: "Королевская Венера - Жребий Любви!", data: 3 };


        data[data.length] = { label: "Квадрат Марса и Нептуна", data: 4 };


        data[data.length] = { label: "Зимнее солнцестояние", data: 5952 };


        data[data.length] = { label: "Загадка судьбы", data: 2 };


        data[data.length] = { label: "Расклад таро на 5 карт", data: 5 };


        data[data.length] = { label: "Соединение Солнца и Юпитера - Печать Удачи", data: 1 };


        data[data.length] = { label: "Финансовый календарь", data: 1 };


        data[data.length] = { label: "Затмение Ворона", data: 1 };


        data[data.length] = { label: "Астрособытия сентября", data: 2 };


        data[data.length] = { label: "Перст Судьбы", data: 3 };


        data[data.length] = { label: "Кармическая цепь", data: 1 };


        data[data.length] = { label: "Золотая Подкова", data: 25274 };


        data[data.length] = { label: "Прогноз на 3 месяца", data: 1 };


        data[data.length] = { label: "Кармическая Ось", data: 4 };


        data[data.length] = { label: "Королевская Венера - Жребий Любви!", data: 2 };


        data[data.length] = { label: "Финансовый календарь", data: 2 };


        data[data.length] = { label: "Соединение Венеры с Сердцем Льва", data: 1 };


        data[data.length] = { label: "Соединение Солнца и Юпитера - Печать Удачи", data: 2 };


        data[data.length] = { label: "Соединение Венеры с Сердцем Льва", data: 1 };


        data[data.length] = { label: "Золотая Подкова", data: 7755 };


        data[data.length] = { label: "Финансовый календарь", data: 2 };


        data[data.length] = { label: "Ворота Золушки", data: 1 };


        data[data.length] = { label: "Золотая Подкова", data: 5052 };


        data[data.length] = { label: "Кармическая Цепь", data: 3 };


        data[data.length] = { label: "Королевская Венера - Жребий Любви!", data: 1 };


        data[data.length] = { label: "Астрособытия января", data: 5646 };


        data[data.length] = { label: "Щит Давида", data: 3 };


        data[data.length] = { label: "Звёздный мост", data: 17 };


        data[data.length] = { label: "Астрособытия января", data: 11 };


        data[data.length] = { label: "Звёздный мост", data: 7 };


        data[data.length] = { label: "Гороскоп совместимости", data: 1 };


        data[data.length] = { label: "Астрособытия ноября", data: 1 };


        data[data.length] = { label: "Звёздный мост", data: 2 };



        $.plot($("#donut_created"), data,
            {
                series: {
                    pie: {
                        show: true,
                        innerRadius: 0.5,
                        radius: 1,
                        label: {
                            show: false,
                            radius: 2/3,
                            formatter: function(label, series, data){
                                return '<div style="font-size:11px;text-align:center;padding:4px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%<br />' + data + '</div>';
                            },
                            threshold: 0.1
                        }
                    }
                },
                legend: {
                    show: true,
                    noColumns: 1, // number of colums in legend table
                    labelFormatter: null, // fn: string -> string
                    labelBoxBorderColor: "#000", // border color for the little label boxes
                    container: null, // container (as jQuery object) to put legend in, null means default on top of graph
                    position: "ne", // position of default legend container within plot
                    margin: [5, 10], // distance from grid edge to default legend container within plot
                    backgroundColor: "#ffffff", // null means auto-detect
                    backgroundOpacity: 1 // set to 0 to avoid background
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
                colors: ["#ee7951", "#6db6ee", "#95c832", "#993eb7", "#3ba3aa"]
            });
        $("#donut_created").bind("plothover", pieHoverCreated);
        $("#donut_created").bind("plotclick", pieClickCreated);

    });

    function pieHoverCreated(event, pos, obj)
    {
        //$("#donut_result").html('20%');
        if (!obj)
            return;
        percent = parseFloat(obj.series.percent).toFixed(2);
        var points = obj.datapoint.toString();
        var point = points.split(',');
        $("#donut_result_created").html(percent+'%<br />' + point[2] + 'шт.');
        $("#service_name_created").html(obj.series.label);
    }
    function pieClickCreated(event, pos, obj)
    {
        if (!obj)
            return;
        var points = obj.datapoint.toString();
        var point = points.split(',');
        percent = parseFloat(obj.series.percent).toFixed(2);
        alert(''+obj.series.label+': '+percent+'% - ' + point[2] + 'шт.' );
    }
    //////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////


    ///////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////

    setInterval(function(){
        $("#simple_graph, #simple_graph_created").css('height', '275px');
        $("#simple_graph_created.date_range .flot-x-axis.flot-x1-axis.xAxis.x1Axis div, #simple_graph.date_range .flot-x-axis.flot-x1-axis.xAxis.x1Axis div").css('max-width', '39px');
        $(".dashboard_donuts .graph-standard").each(function(){
            $(this).height($(this).find('.legend table').height() + 100);
        });
    }, 1000);
});
</script>
</body>
</html>