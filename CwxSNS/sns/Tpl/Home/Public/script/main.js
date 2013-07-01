function $(id){
    return document.getElementById(id);
}
function displayBlock(id){
    $(id).style.display = 'block';
}
function hiddenHidden(id){
    $(id).style.display = 'none';
}
//close btn
function btnClose(){
    displayBlock('peoplelist');
    hiddenHidden('result');
    displayBlock('btnFind');
    hiddenHidden('trafficBox');
    map.clearOverlays();
    map.addOverlay(m1);
    map.addOverlay(m2);
    map.addOverlay(m3);
    map.addOverlay(m4);
    map.addOverlay(m5);
    map.addOverlay(m6);
    map.addOverlay(m7);
    map.addOverlay(m8);
    map.addOverlay(m9);
    map.addOverlay(m10);
    map.addOverlay(m11);
    map.addOverlay(m12);
    map.addOverlay(m13);
    map.addOverlay(m14);
    map.addOverlay(m15);
    map.addOverlay(m16);
    map.setViewport(ps1);
    $('startP').innerHTML = '';
    startPoint = null;
    $('endP').innerHTML = '';
    endPoint = null;
    $('sider').style.width = '197px';
    $('myMap').style.width = '800px';
}
//find btn
function btnFind(){
    displayBlock('trafficBox');
    hiddenHidden('btnFind');
}
//map js
//三句话初始化地图
var map = new BMap.Map("myMap");
var point = new BMap.Point(116.404, 39.915);
map.centerAndZoom(point,14);

//增加滚轮缩放地图
map.enableScrollWheelZoom();

//添加控件
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl({isOpen: true}));
map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));

var startPoint;
var endPoint;
var menu = new BMap.ContextMenu();
var txtMenuItem = [
    {
        text:'选起点',
        callback:function(e){
            $('startP').innerHTML = e.lng + ',' + e.lat;
            startPoint = new BMap.Point(e.lng,e.lat);
        }
    },
    {
        text:'选终点',
        callback:function(e){
            $('endP').innerHTML = e.lng + ',' + e.lat;
            endPoint = new BMap.Point(e.lng,e.lat);
        }
    }
];
for(var i=0; i < txtMenuItem.length; i++){
    menu.addItem(new BMap.MenuItem(txtMenuItem[i].text,txtMenuItem[i].callback,100));
}
map.addContextMenu(menu);

//bus
function myBus(){
    map.clearOverlays();
    displayBlock('result');
    hiddenHidden('peoplelist');
    var transit = new BMap.TransitRoute(map, {renderOptions: {map: map, panel: 'result'}});
    transit.search(startPoint, endPoint);
    $('sider').style.width = '297px';
    $('myMap').style.width = '700px';
}
//car
function myCar(){
    map.clearOverlays();
    displayBlock('result');
    hiddenHidden('peoplelist');    
    var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, panel: 'result', autoViewport: true}});
    driving.search(startPoint, endPoint);
    startPoint.enableDragging();//开启起点拖拽功能
    endPoint.enableDragging();//开启终点拖拽功能
    $('sider').style.width = '297px';
    $('myMap').style.width = '700px';
}

//张莹
var p1 = new BMap.Point(116.41896,40.010856);
var m1 = new BMap.Marker(p1);
var lab1 = new BMap.Label("张莹",{offset:new BMap.Size(20,-10)});
map.addOverlay(m1);
m1.setLabel(lab1);
var content1 = '<div class="infowin"><p><b>张莹</b></p><p>金泉家园</p><p><a target="_blank" href="http://weibo.com/milkmap">weibo.com/milkmap</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="zhangying.jpg" /></div>';
var infowin1 = new BMap.InfoWindow(content1);
m1.addEventListener("click",function(){
    this.openInfoWindow(infowin1);
});
//郭汀峰
var p2 = new BMap.Point(116.417806,40.004292);
var m2 = new BMap.Marker(p2);
var lab2 = new BMap.Label("郭汀峰",{offset:new BMap.Size(20,-10)});
map.addOverlay(m2);
m2.setLabel(lab2);
var content2 = '<div class="infowin"><p><b>郭汀峰</b></p><p>雅园</p><p><a target="_blank" href="http://weibo.com/guotingfeng">weibo.com/guotingfeng</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="guotingfeng.jpg" /></div>';
var infowin2 = new BMap.InfoWindow(content2);
m2.addEventListener("click",function(){
    this.openInfoWindow(infowin2);
});
//王建明
var p3 = new BMap.Point(116.417936,40.00414);
var m3 = new BMap.Marker(p3);
var lab3 = new BMap.Label("王建明",{offset:new BMap.Size(20,-10)});
map.addOverlay(m3);
m3.setLabel(lab3);
var content3 = '<div class="infowin"><p><b>王建明</b></p><p>雅园</p><p><a target="_blank" href="http://weibo.com/u/2269441761">weibo.com/u/2269441761</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="wangjianming.jpg" /></div>';
var infowin3 = new BMap.InfoWindow(content3);
m3.addEventListener("click",function(){
    this.openInfoWindow(infowin3);
});
//姜华
var p4 = new BMap.Point(116.418327,40.004088);
var m4 = new BMap.Marker(p4);
var lab4 = new BMap.Label("姜华",{offset:new BMap.Size(20,-10)});
map.addOverlay(m4);
m4.setLabel(lab4);
var content4 = '<div class="infowin"><p><b>姜华</b></p><p>雅园</p><p><a target="_blank" href="http://weibo.com/u/2854074294">weibo.com/u/2854074294</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="jianghua.jpg" /></div>';
var infowin4 = new BMap.InfoWindow(content4);
m4.addEventListener("click",function(){
    this.openInfoWindow(infowin4);
});
//曾耀文
var p5 = new BMap.Point(116.418664,40.004164);
var m5 = new BMap.Marker(p5);
var lab5 = new BMap.Label("曾耀文",{offset:new BMap.Size(20,-10)});
map.addOverlay(m5);
m5.setLabel(lab5);
var content5 = '<div class="infowin"><p><b>曾耀文</b></p><p>雅园</p><p><a target="_blank" href="#">无新浪微博</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="zengyaowen.jpg" /></div>';
var infowin5 = new BMap.InfoWindow(content5);
m5.addEventListener("click",function(){
    this.openInfoWindow(infowin5);
});
//刘炽珍
var p6 = new BMap.Point(116.363583,40.014685);
var m6 = new BMap.Marker(p6);
var lab6 = new BMap.Label("刘炽珍",{offset:new BMap.Size(20,-10)});
map.addOverlay(m6);
m6.setLabel(lab6);
var content6 = '<div class="infowin"><p><b>刘炽珍</b></p><p>农业大学东校区家属院</p><p><a target="_blank" href="#">无新浪微博</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="liuchizhen.jpg" /></div>';
var infowin6 = new BMap.InfoWindow(content6);
m6.addEventListener("click",function(){
    this.openInfoWindow(infowin6);
});
//张美玉
var p7 = new BMap.Point(116.384896,40.004339);
var m7 = new BMap.Marker(p7);
var lab7 = new BMap.Label("张美玉",{offset:new BMap.Size(20,-10)});
map.addOverlay(m7);
m7.setLabel(lab7);
var content7 = '<div class="infowin"><p><b>张美玉</b></p><p>南沙滩</p><p><a target="_blank" href="http://weibo.com/u/1940475675">weibo.com/u/1940475675</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="zhangmeiyu.jpg" /></div>';
var infowin7 = new BMap.InfoWindow(content7);
m7.addEventListener("click",function(){
    this.openInfoWindow(infowin7);
});
//肖国盛
var p8 = new BMap.Point(116.418148,40.004325);
var m8 = new BMap.Marker(p8);
var lab8 = new BMap.Label("肖国盛",{offset:new BMap.Size(20,-10)});
map.addOverlay(m8);
m8.setLabel(lab8);
var content8 = '<div class="infowin"><p><b>肖国盛</b></p><p>雅园</p><p><a target="_blank" href="http://weibo.com/ethanxiao4u">weibo.com/ethanxiao4u</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="xiaoguosheng.jpg" /></div>';
var infowin8 = new BMap.InfoWindow(content8);
m8.addEventListener("click",function(){
    this.openInfoWindow(infowin8);
});
//许磊
var p9 = new BMap.Point(116.418251,40.00419);
var m9 = new BMap.Marker(p9);
var lab9 = new BMap.Label("许磊",{offset:new BMap.Size(20,-10)});
map.addOverlay(m9);
m9.setLabel(lab9);
var content9 = '<div class="infowin"><p><b>许磊</b></p><p>雅园</p><p><a target="_blank" href="#">无新浪微博</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="xulei.jpg" /></div>';
var infowin9 = new BMap.InfoWindow(content9);
m9.addEventListener("click",function(){
    this.openInfoWindow(infowin9);
});
//杨红波
var p10 = new BMap.Point(116.418449,40.004297);
var m10 = new BMap.Marker(p10);
var lab10 = new BMap.Label("杨红波",{offset:new BMap.Size(20,-10)});
map.addOverlay(m10);
m10.setLabel(lab10);
var content10 = '<div class="infowin"><p><b>杨红波</b></p><p>雅园</p><p><a target="_blank" href="http://weibo.com/u/1346491567">weibo.com/u/1346491567</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="yanghongbo.jpg" /></div>';
var infowin10 = new BMap.InfoWindow(content10);
m10.addEventListener("click",function(){
    this.openInfoWindow(infowin10);
});
//彭俊海
var p11 = new BMap.Point(116.304275,39.970501);
var m11 = new BMap.Marker(p11);
var lab11 = new BMap.Label("彭俊海",{offset:new BMap.Size(20,-10)});
map.addOverlay(m11);
m11.setLabel(lab11);
var content11 = '<div class="infowin"><p><b>彭俊海</b></p><p>蜂鸟社区</p><p><a target="_blank" href="http://weibo.com/u/2167619837">weibo.com/u/2167619837</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="pengjunhai.jpg" /></div>';
var infowin11 = new BMap.InfoWindow(content11);
m11.addEventListener("click",function(){
    this.openInfoWindow(infowin11);
});
//张锦媛
var p12 = new BMap.Point(116.519968,39.936383);
var m12 = new BMap.Marker(p12);
var lab12 = new BMap.Label("张锦媛",{offset:new BMap.Size(20,-10)});
map.addOverlay(m12);
m12.setLabel(lab12);
var content12 = '<div class="infowin"><p><b>张锦媛</b></p><p>华纺易城</p><p><a target="_blank" href="http://weibo.com/u/1869930297">weibo.com/u/1869930297</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="zhangjinyuan.jpg" /></div>';
var infowin12 = new BMap.InfoWindow(content12);
m12.addEventListener("click",function(){
    this.openInfoWindow(infowin12);
});
//尚宇
var p13 = new BMap.Point(116.34143,39.899505);
var m13 = new BMap.Marker(p13);
var lab13 = new BMap.Label("尚宇",{offset:new BMap.Size(20,-10)});
map.addOverlay(m13);
m13.setLabel(lab13);
var content13 = '<div class="infowin"><p><b>尚宇</b></p><p>荣丰小区</p><p><a target="_blank" href="http://weibo.com/u/2074348632">weibo.com/u/2074348632</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="shangyu.jpg" /></div>';
var infowin13 = new BMap.InfoWindow(content13);
m13.addEventListener("click",function(){
    this.openInfoWindow(infowin13);
});
//卢德亮
var p14 = new BMap.Point(116.328287,39.993475);
var m14 = new BMap.Marker(p14);
var lab14 = new BMap.Label("卢德亮",{offset:new BMap.Size(20,-10)});
map.addOverlay(m14);
m14.setLabel(lab14);
var content14 = '<div class="infowin"><p><b>卢德亮</b></p><p>科源社区</p><p><a target="_blank" href="http://weibo.com/weibo.com/ludeliang">weibo.com/ludeliang</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="ludeliang.jpg" /></div>';
var infowin14 = new BMap.InfoWindow(content14);
m14.addEventListener("click",function(){
    this.openInfoWindow(infowin14);
});
//田智之/吴栋霞
var p15 = new BMap.Point(116.409482,40.052386);
var m15 = new BMap.Marker(p15);
var lab15 = new BMap.Label("田智之/吴栋霞",{offset:new BMap.Size(20,-10)});
map.addOverlay(m15);
m15.setLabel(lab15);
var content15 = '<div class="infowin"><p><b>田智之/吴栋霞</b></p><p>佳运园</p><p><a target="_blank" href="#">无新浪微博</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="tzzwdx.jpg" /></div>';
var infowin15 = new BMap.InfoWindow(content15);
m15.addEventListener("click",function(){
    this.openInfoWindow(infowin15);
});
//马海印
var p16 = new BMap.Point(116.296726,40.03938);
var m16 = new BMap.Marker(p16);
var lab16 = new BMap.Label("马海印",{offset:new BMap.Size(20,-10)});
map.addOverlay(m16);
m16.setLabel(lab16);
var content16 = '<div class="infowin"><p><b>马海印</b></p><p>菊园</p><p><a target="_blank" href="http://weibo.com/u/1831661387">weibo.com/u/1831661387</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="mahaiyin.jpg" /></div>';
var infowin16 = new BMap.InfoWindow(content16);
m16.addEventListener("click",function(){
    this.openInfoWindow(infowin16);
});
//付强
var p17 = new BMap.Point(116.354628,39.885263);
var m17 = new BMap.Marker(p17);
var lab17 = new BMap.Label("付强",{offset:new BMap.Size(20,-10)});
map.addOverlay(m17);
m17.setLabel(lab17);
var content17 = '<div class="infowin"><p><b>付强</b></p><p>鸭子桥北里14号楼</p><p><a target="_blank" href="#">暂无微博/a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="fuqiang.jpg" /></div>';
var infowin17 = new BMap.InfoWindow(content17);
m17.addEventListener("click",function(){
    this.openInfoWindow(infowin17);
});

var ps1 = [p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17]; //全部
var ps2 = [p2,p3,p4,p5,p8,p9,p10]; //雅园
var ps3 = [p1,p6,p7,p11,p12,p13,p14,p15,p16,p17]; //其他
setTimeout(function(){
    map.setViewport(ps1);
}, 1000);