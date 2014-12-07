<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>

        body {
           background-color: rgb(250,235,215);
            line-height: 200%;
        }
          pre{
            border-left: 4px solid #de3859;
            border-radius: 5px;
            color: #DE3859;
            font-size: 1em;
            padding: 5px;
            font-family: Consolas, 'Liberation Mono', Courier, monospace;
            line-height: 100%;

        }
        code{

            border-radius: 5px;
            color: #DE3859;
            font-size: 1em;
            padding: 5px;
            font-family: Consolas, 'Liberation Mono', Courier, monospace;
            line-height: 100%;

        }
        #a{
            padding: 50px;
        }



</style>
<title>Document</title>
</head>
<body>
@foreach($data as $v)
<div id="a">
    <div>姓名：{{{$v['user_name']}}}</div>
    <div>学号: {{{$v['user_number']}}}</div>
    <div>ip: {{{$v['user_ip']}}}</div>
    <div>test1_1: <pre><code>{{{$v['test1_1']}}}</code></pre></div>
    <div>test1_2: <pre><code>{{{$v['test1_2']}}}</code></pre></div>
    <div>test1_3: <pre><code>{{{$v['test1_3']}}}</code></pre></div>
    <div>test2_1: <pre><code>{{{$v['test2_1']}}}</code></pre></div>
    <div>test3_1: <pre><code>{{{$v['test3_1']}}}</code></pre></div>
    <div>test3_2: <pre><code>{{{$v['test3_2']}}}</code></pre></div>
    <div>test3_3: <pre><code>{{{$v['test3_3']}}}</code></pre></div>
    <div>test4_1: <pre><code>{{{$v['test4_1']}}}</code></pre></div>
    <div>test4_2: <pre><code>{{{$v['test4_2']}}}</code></pre></div>
    <div>test5_1: <pre><code>{{{$v['test5_1']}}}</code></pre></div>
    <div>test5_2: <pre><code>{{{$v['test5_2']}}}</code></pre></div>
    <div>test5_3: <pre><code>{{{$v['test5_3']}}}</code></pre></div>
    <div>test5_4: <pre><code>{{{$v['test5_4']}}}</code></pre></div>
    <div>test6_1: <pre><code>{{{$v['test6_1']}}}</code></pre></div>
    <div>test6_2: <pre><code>{{{$v['test6_2']}}}</code></pre></div>
    <div>test7_1: <pre><code>{{{$v['test7_1']}}}</code></pre></div>
    <div>test8_1: <pre><code>{{{$v['test8_1']}}}</code></pre></div>
    <div>test8_2: <pre><code>{{{$v['test8_2']}}}</code></pre></div>
    <div>test8_3: <pre><code>{{{$v['test8_3']}}}</code></pre></div>
    <div>test9_1: <pre><code>{{{$v['test9_1']}}}</code></pre></div>
    <div>test10_1: <pre><code>{{{$v['test10_1']}}}</code></pre></div>
</div>
@endforeach
</body>
</html>