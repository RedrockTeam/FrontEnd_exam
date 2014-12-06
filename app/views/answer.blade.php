<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>前端第一次考核</title>
    {{HTML::style("assets/css/lib/bootstrap.min.css")}}
    {{HTML::style("assets/css/lib/bootstrap-responsive.min.css")}}
    {{--<link href="/assets/css/lib/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="/assets/css/lib/bootstrap-responsive.min.css" rel="stylesheet">--}}
    <style>
    section{
        margin: 30px 0;
    }

    .clearfix {
    			*zoom: 1;
    		}
    		.clearfix:before,.clearfix:after, .answer_zone {
    			display: table;
    			line-height: 0;
    			content: "";
    		}
    		.clearfix:after {
    			clear: both;
    		}

    		body{
    			padding: 50px;
    		}
    		#demo{
    		    width: 300px;
    		    height: 300px;
    		}
    		#demo div div.white{
    			width: 100px;
    			height: 100px;
    			float: left;
    		}
    		#demo div div.red{
    			width: 100px;
    			height: 100px;
    			float: left;
    			background-color: red;
    		}

            .answer_zone{
                width: 100%;
                min-height: 250px;
                margin: 15px 0;
            }

    		.answer_zone section{
                width: 230px;
                float:left;
                margin-left: 10px;
    		}

        .div1{
            width: 100px;
            height: 100px;
            outline: 1px solid #000;
             margin-bottom: 10px;
        }

        .div2 {
            width: 200px;
            height: 200px;
            outline: 1px solid #000;
            margin-bottom: 10px;
        }
        .div2 img{
            width: 100px;
            height: 100px;
        }
        .clock{
            position:fixed;
            top: 0;
            right : 0;
            width: 100px;
            height: 100px;
            outline: 1px solid #000;

        }
        .clock p {
            line-height: 80px;
            text-align: center;
            font-size: 16px;
             color: red;
        }

    </style>
</head>
<body>
<div class="container" style="">
<div class="clock">

    <p id="clock"></p>
</div>
<h2 style="margin-bottom: 30px;">红岩网校Web研发部 前端方向第一次考核</h2>
<p style="color: red; font-size: 20px;">温馨提示, 直接在页面中写代码, 关掉浏览器没有提交的代码可就没了呦, 没了就自己去哭吧 ~ ~</p>
<p style="color: red">所以, 最好的方式是在自己电脑写好, 然后再粘贴上去</p>
<p style="color: red">虽然只是10道题, 然后任务量还是很大的. 不要在一道题上花费太多时间, 能多做一些就多做一些</p>
<p style="color: red">可以覆盖以前答案, 但是完成时间以最后一次为准</p>
<p style="color: red"><?php echo $time = $data[0]['end_time']==null? (time() - $data[0]['start_time']):($data[0]['end_time'] - $data[0]['start_time']);?>秒</p>

<form method="post" action="./answer">
<section>
    <h1>Test1</h1>
    <div class="que">
    	<p>请用CSS制作出如图所示的十字架。</p>
    	<p>要求：使用尽可能少的class名</p>
    	<p>Q1.使用两个div完成</p>
    	<p>Q2.使用三个div完成</p>
    	<p>Q3.使用五个div完成（两种方法）</p>
    </div>
    <div id="demo" style="overflow: hidden;">

    	<div>
    		<div class="white"></div>
    		<div class="red"></div>
    		<div class="white"></div>
    		<div class="clearfix"></div>
    	</div>
    	<div>
    		<div class="red"></div>
    		<div class="red"></div>
    		<div class="red"></div>
    		<div class="clearfix"></div>
    	</div>
    	<div>
    		<div class="white"></div>
    		<div class="red"></div>
    		<div class="white"></div>
    		<div class="clearfix"></div>
    	</div>
    </div>

    <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test1_1" id="" cols="30" rows="10">{{$data[0]['test1_1']}}</textarea>
        </section>
        <section>
            <label for="test-2">Q2:</label>
            <textarea name="test1_2" id="" cols="30" rows="10">{{$data[0]['test1_2']}}</textarea>
        </section>

        <section>
            <label for="test-1">Q3:</label>
            <textarea name="test1_3" id="" cols="30" rows="10">{{$data[0]['test1_3']}}</textarea>
        </section>
    </div>

</section>

<section>
 <h1>Test2</h1>
    <pre><code>
    #A,.B{
    	width:200px;
    	height: 200px;
    }
    #A{
    	background: red;
    }
    .B{
    	background: blue;
    }
    .B #A{
    	background: yellow;
    }
    #A .B{
    	background: green;
    }


    &lt;div id="A"&gt;A
    	&lt;div class="B"&gt;B&lt;/div&gt;
    &lt;/div&gt;

    </code></pre>


    问: 文字 A 和 B 的颜色分别是什么?
    <div class="answer_zone">
            <section>
                <label for="test-1">Q1:</label>
                <textarea name="test2_1" id="" cols="30" rows="10">{{$data[0]['test2_1']}}</textarea>
            </section>
        </div>
</section>

<section>
    <h1>Test3</h1>
    <img src="{{URL::asset('/assets/img/2.png')}}" alt=""/>
    <p>假设浏览器的宽度就是为1170px, 请写出在一般文档流, 浮动, 和绝对定位情况下的实现方式</p>


        <div class="answer_zone">
            <section>
                <label for="test-1">Q1:</label>
                <textarea name="test3_1" id="" cols="30" rows="10">{{$data[0]['test3_1']}}</textarea>
            </section>
            <section>
                <label for="test-2">Q2:</label>
                <textarea name="test3_2" id="" cols="30" rows="10">{{$data[0]['test3_2']}}</textarea>
            </section>

            <section>
                <label for="test-1">Q3:</label>
                <textarea name="test3_3" id="" cols="30" rows="10">{{$data[0]['test3_3']}}</textarea>
            </section>
        </div>
</section>


<section>
<h1>Test4</h1>

<ul>
    <li>
    <p>写一段css，将1的颜色变为红色(不要改变html)</p>
    <pre><code>
    &lt;p&gt;1&lt;/p&gt;
    &lt;p&gt;1&lt;/p&gt;
    &lt;p&gt;1&lt;/p&gt;
    </code></pre>
    </li>
    <li>
        列举你所知道的css伪元素与伪类(请分类)

    </li>
</ul>

 <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test4_1" id="" cols="30" rows="10">{{$data[0]['test4_1']}}</textarea>
        </section>
        <section>
            <label for="test-2">Q2:</label>
            <textarea name="test4_2" id="" cols="30" rows="10">{{$data[0]['test4_2']}}</textarea>
        </section>
    </div>
</section>

<section>
    <h1>Test5</h1>

    <ul>
        <li>实现div高度自适应电脑屏幕</li>
        <li>background-position写出背景图片定位在左上角的三种实现方式</li>
    </ul>

    <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test5_1" id="" cols="30" rows="10">{{$data[0]['test5_1']}}</textarea>
        </section>
        <section>
            <label for="test-2">Q2:</label>
            <textarea name="test5_2" id="" cols="30" rows="10">{{$data[0]['test5_2']}}</textarea>
        </section>
        <section>
            <label for="test-2">Q3:</label>
            <textarea name="test5_3" id="" cols="30" rows="10">{{$data[0]['test5_3']}}</textarea>
            </section>
        <section>
            <label for="test-2">Q4:</label>
            <textarea name="test5_4" id="" cols="30" rows="10">{{$data[0]['test5_4']}}</textarea>
        </section>
    </div>
</section>


<section>
    <h1>Test 6</h1>
    <p>请将文字和图片垂直居中</p>
    <pre><code>
      .div1{
        width: 100px;
        height: 100px;
        outline: 1px solid #000;
         margin-bottom: 10px;
    }

    .div2 {
        width: 200px;
        height: 200px;
        outline: 1px solid #000;
        margin-bottom: 10px;
    }
    .div2 img{
        width: 100px;
        height: 100px;
    }

        &lt;div class=&quot;div1&quot;&gt;
            &lt;p&gt;前端方向考核&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;div2&quot;&gt;
            &lt;img src=&quot;{{URL::asset('/assetsimg/1.jpg')}};&quot; /&gt;
        &lt;/div&gt;
    </code></pre>

    <div class="div1">
        <p>前端方向考核</p>
    </div>
    <div class="div2">
        <img src="{{URL::asset('/assets/img/1.jpg')}}" />
    </div>

    <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test6_1" id="" cols="30" rows="10">{{$data[0]['test6_1']}}</textarea>
        </section>
        <section>
            <label for="test-2">Q2:</label>
            <textarea name="test6_2" id="" cols="30" rows="10">{{$data[0]['test6_2']}}</textarea>
        </section>
    </div>

</section>
<section>
    <h1>Test 7</h1>
    <pre><code>

    #demo_ling{
        width: 100px;
        height: 60px;
        outline: 1px solid #000;
    }

    #demo_ling p{
        margin: 10% 5%;
    }

    &lt;div id=&quot;demo_ling&quot;&gt;

        &lt;p&gt;恩，注意看我所在的位置。&lt;/p&gt;

    &lt;/div&gt;

    </code></pre>

    <p>问: p 标签的 margin 的 top, right, bottom, left 计算值最终是多少?</p>

    <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test7_1" id="" cols="30" rows="10">{{$data[0]['test7_1']}}</textarea>
        </section>
    </div>
</section>


<section>
    <h1>Test8</h1>

    <img src="{{URL::asset('/assets/img/1.png')}}" alt=""/>
    <p>使用3种方式实现上面的效果.</p>
    <p>要求:</p>
    <ul>
        <li>蓝色的部分宽度为100px 红色部分宽度不定, 为自适应宽度. 可以随着屏幕的大小变化而变化</li>
    </ul>
        <div class="answer_zone">
            <section>
                <label for="test-1">Q1:</label>
                <textarea name="test8_1" id="" cols="30" rows="10">{{$data[0]['test8_1']}}</textarea>
            </section>
            <section>
                <label for="test-2">Q2:</label>
                <textarea name="test8_2" id="" cols="30" rows="10">{{$data[0]['test8_2']}}</textarea>
            </section>
            <section>
                 <label for="test-3">Q3:</label>
                 <textarea name="test8_3" id="" cols="30" rows="10">{{$data[0]['test8_3']}}</textarea>
            </section>
        </div>

</section>



<section>
    <h1>Test9</h1>
    <p>
        将数组 arr = [21,33,41,2,12,33,4,56,27,10] 按从小到大的顺序重新排列并输入到数组 news =[] 中, 并使用reduce函数求出数组中所有值的和
    </p>
     <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test9_1" id="" cols="30" rows="10">{{$data[0]['test9_1']}}</textarea>
        </section>
    </div>
</section>

<section>
    <h1>Test 10</h1>
    <pre><code>
    console.log(value);  // value 1

    var value = "value1";

    function show(){
    	console.log(value);

    	var value = "value2";

    	(function(){
    		console.log(this.value); // value1
    	})();
    }

    show();

    </code></pre>

    <p>请解释为什么2个输出全是value1</p>
    <div class="answer_zone">
        <section>
            <label for="test-1">Q1:</label>
            <textarea name="test10_1" id="" cols="30" rows="10">{{$data[0]['test10_1']}}</textarea>
        </section>
    </div>

</section>

<section>
    <input type="submit" name="submit" class="btn btn-default" value="交卷咯..i"/>
</section>

</form>
</div>

</body>


<script src="{{URL::asset('/assets/js/timer.js')}}"></script>
<script src="{{URL::asset('/assets/js/lib/jquery.js')}}"></script>
<script src="{{URL::asset('/assets/js/jquery.snipets.js')}}"></script>
<script>
$(document).ready(function(){
$("pre.htmlCode").snippet("html");
    // Finds <pre> elements with the class "htmlCode"
    // and snippet highlights the HTML code within.
$("pre.styles").snippet("css",{style:"greenlcd"});
    // Finds <pre> elements with the class "styles"
    // and snippet highlights the CSS code within
    // using the "greenlcd" styling.
$("pre.js").snippet("javascript",{style:"random",transparent:true,showNum:false});
    // Finds <pre> elements with the class "js"
    // and snippet highlights the JAVASCRIPT code within
    // using a random style from the selection of 39
    // with a transparent background
    // without showing line numbers.

var time = new Timer(function(time){

    var minutes = parseInt(time / 60),
        second = time % 60;

	time = ( minutes >= 10 ? minutes : "0" + minutes ) + " : " + (second >= 10 ? second : "0" + second);

 	$("#clock").html(time);
});

time.start();


});


</script>
</html>