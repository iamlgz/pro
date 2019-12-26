<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>亳都人力资源 — 精选事务</title>
<link href="css/select2.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="js/search/area.js"></script>
<script type="text/javascript" src="js/search/location.js"></script>
<script type="text/javascript" src="js/search/select2.js"></script>
<script type="text/javascript" src="js/search/select2_locale_zh-CN.js"></script>

<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/ks-switch.pack.js"></script>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body class="bft_bg">
<!-- top内容开始 -->
{{--<div class="top">--}}

{{--</div>--}}

<section class="logo" style="" >
    <h1 style="font-size:1.4em;color:orangered;text-align: center;">亳都人力资源</h1>
    {{--<a href="/0372nh/"></a>--}}

    <div class="input-group col-md-3" style="margin-top:0px positon:relative;">

        <form action="/client">
            <input type="text" name="search" class="form-control"placeholder="输入岗位关键字查找" / >

            <span class="input-group-btn">
               <button class="btn btn-info btn-search">查找</button>
            </span>
        </form>



    </div>
</section>
<!-- top内容结束 -->

<div class="center_blank"></div>
<!-- 内容开始 -->
<div class="nr">
          <div class="bft_f">
          	<div class="bft_f_1">
            	<ul>
                	<li>区域</li>
                    <li>内容</li>
                    <li>报 酬</li>
                    <li>技能要求</li>
                    <li></li>
                </ul>
            </div>

              @foreach($res as $v)

                  <div class="bft_f_2">
                      <ul>
                          <li><span>{{$v->city}}</span></li>
                          <li>{{$v->title}}</li>
                          <li>{{$v->salary}}</li>
                          <li>{{$v->yq}}</li>
                          <li><a href="zzy.html"><img src="images/shenqing.jpg" /></a></li>
                      </ul>
                  </div>


              @endforeach



              {{$res->appends(['search'=>$search ?? ''])->links()}}
            {{--<div class="bft_f_3">--}}
            	{{--<ul>--}}
                	{{--<li>第<span>3</span>页</li>--}}
                    {{--<li><a href="#">首页</a></li>--}}
                    {{--<li><a href="#">上一页</a> </li>--}}
                    {{--<li><a href="#">下一页</a> </li>--}}
                    {{--<li><a href="#">尾页</a></li>--}}
                    {{--<li><a href="#">共5页</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
          {{--</div>--}}
          <!--   -->
           

          <!-- 友情链接开始 -->
          <div class="blank"></div>

    <!-- 友情链接结束 -->
    
    <!-- 底部内容开始 -->
	<div class="blank"></div>
    <div class="blank"></div>

		<!-- 底部内容结束 -->
    	</div>
        <div class="submenu"></div>
    	<!-- 搜索内容结束 -->
        
    </div>
	<!-- 帮众结束 -->
    
    
   
   
    
</div>
<!-- 内容结束 -->

<!-- alpha div -->
<div id="maskLayer" style="display:none;">
<iframe id="maskLayer_iframe" frameBorder=0 scrolling=no style="filter:alpha(opacity=50)"></iframe>
<div id="alphadiv" style="filter:alpha(opacity=50);-moz-opacity:0.5;opacity:0.5"></div>
	<div id="drag">
		<h3 id="drag_h"></h3>
		<div id="drag_con"></div><!-- drag_con end -->
	</div>
</div><!-- maskLayer end -->
</div>
<!-- alpha div end -->

</body>
</html>
