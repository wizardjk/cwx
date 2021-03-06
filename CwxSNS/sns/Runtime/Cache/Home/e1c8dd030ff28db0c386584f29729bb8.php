<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>中央民族大学04计算机系</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Public/css/base.css" type="text/css" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
</head>
<body>
<div id="trafficBox" class="trafficX clearfix" style="display:none;">
    <a href="javascript:void(0);" onclick="btnClose();" class="btn-close"><img src="close.png" alt="关闭" title="关闭" /></a>
    <table class="trafficTableX">
        <tr>
            <td><h4>起点<span id="startP">&nbsp;</span></h4></td>
            <td><h4>终点<span id="endP">&nbsp;</span></h4></td>
            <td><h4>&nbsp;</h4></td>
        </tr>
        <tr>
            <td>
                <select>
                    <option>郭汀峰</option>
                    <option>王建明</option>
                    <option>姜华</option>
                    <option>曾耀文</option>
                    <option>肖国盛</option>
                    <option>许磊</option>
                    <option>杨红波</option>
                    <option>张莹</option>
                    <option>张美玉</option>
                    <option>彭俊海</option>
                    <option>卢德亮</option>
                    <option>刘炽珍</option>
                    <option>张锦媛</option>
                    <option>尚宇</option>
                    <option>田智之/吴栋霞</option>
                    <option>马海印</option>
                    <option>付强</option>
                </select>
            </td>
                <td>
                <select>
                    <option>郭汀峰</option>
                    <option>王建明</option>
                    <option>姜华</option>
                    <option>曾耀文</option>
                    <option>肖国盛</option>
                    <option>许磊</option>
                    <option>杨红波</option>
                    <option>张莹</option>
                    <option>张美玉</option>
                    <option>彭俊海</option>
                    <option>卢德亮</option>
                    <option>刘炽珍</option>
                    <option>张锦媛</option>
                    <option>尚宇</option>
                    <option>田智之/吴栋霞</option>
                    <option>马海印</option>
                    <option>付强</option>
                </select>
            </td>
            <td><span class="btn"><a onclick="myBus();" href="javascript:void(0);">公交</a></span><span class="btn"><a onclick="myCar();" href="javascript:void(0);">自驾</a></span></td>
        </tr>
        <tr class="intro">
            <td>选起点：右键点击地图（下拉列表暂不可用）</td>
            <td>选终点：右键点击地图（下拉列表暂不可用）</td>
            <td>选择交通工具</td>
        </tr>
    </table>
</div>
<div class="container clearfix">
    <div id="btnFind" class="btn"><a href="javascript:void(0);" onclick="btnFind();">我要找人</a></div>
    <div id="myMap" class="wider"></div>
    <div id="sider">
        <div id="result" style="display:none;"></div>
        <div id="peoplelist">
        <dl>
            <dt><a href="javascript:void(0);" onclick="map.setViewport(ps2);map.closeInfoWindow();">雅园</a></dt>
            <dd><a href="javascript:void(0);" onmouseover="m2.openInfoWindow(infowin2);" onclick="map.centerAndZoom(p2, 19);m2.openInfoWindow(infowin2);">郭汀峰</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m3.openInfoWindow(infowin3);" onclick="map.centerAndZoom(p3, 19);m3.openInfoWindow(infowin3);">王建明</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m4.openInfoWindow(infowin4);" onclick="map.centerAndZoom(p4, 19);m4.openInfoWindow(infowin4);">姜华</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m5.openInfoWindow(infowin5);" onclick="map.centerAndZoom(p5, 19);m5.openInfoWindow(infowin5);">曾耀文</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m8.openInfoWindow(infowin8);" onclick="map.centerAndZoom(p8, 19);m8.openInfoWindow(infowin8);">肖国盛</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m9.openInfoWindow(infowin9);" onclick="map.centerAndZoom(p9, 19);m9.openInfoWindow(infowin9);">许磊</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m10.openInfoWindow(infowin10);" onclick="map.centerAndZoom(p10, 19);m10.openInfoWindow(infowin10);">杨红波</a></dd>

        </dl>
        <dl>
            <dt><a href="javascript:void(0);" onclick="map.setViewport(ps3);map.closeInfoWindow();">其他</a></dt>
            <dd><a href="javascript:void(0);" onmouseover="m1.openInfoWindow(infowin1);" onclick="map.centerAndZoom(p1, 18);m1.openInfoWindow(infowin1);">张莹</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m7.openInfoWindow(infowin7);" onclick="map.centerAndZoom(p7, 18);m7.openInfoWindow(infowin7);">张美玉</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m11.openInfoWindow(infowin11);" onclick="map.centerAndZoom(p11, 18);m11.openInfoWindow(infowin11);">彭俊海</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m14.openInfoWindow(infowin14);" onclick="map.centerAndZoom(p14, 18);m14.openInfoWindow(infowin14);">卢德亮</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m6.openInfoWindow(infowin6);" onclick="map.centerAndZoom(p6, 18);m6.openInfoWindow(infowin6);">刘炽珍</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m12.openInfoWindow(infowin12);" onclick="map.centerAndZoom(p12, 18);m12.openInfoWindow(infowin12);">张锦媛</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m13.openInfoWindow(infowin13);" onclick="map.centerAndZoom(p13, 18);m13.openInfoWindow(infowin13);">尚宇</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m15.openInfoWindow(infowin15);" onclick="map.centerAndZoom(p15, 18);m15.openInfoWindow(infowin15);">田智之/吴栋霞</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m16.openInfoWindow(infowin16);" onclick="map.centerAndZoom(p16, 18);m16.openInfoWindow(infowin16);">马海印</a></dd>
            <dd><a href="javascript:void(0);" onmouseover="m17.openInfoWindow(infowin17);" onclick="map.centerAndZoom(p17, 18);m17.openInfoWindow(infowin17);">付强</a></dd>
        </dl>
        </div>
    </div>
</div>
<div class="footer clearfix">
    <p>copyright by <a target="_blank" href="http://ui-love.net">UI-LOVE</a></p>
</div>
</body>
<script type="text/javascript" src="../Public/script/main.js"></script>
</html>