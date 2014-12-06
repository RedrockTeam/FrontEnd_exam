<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>前端第一次考核</title>

    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>
<div class="container" style="width: 800px;">
<h2 style="margin-bottom: 30px;">红岩网校Web研发部 前端方向第一次考核</h2>
 <form method="post" id="target" class="form-horizontal" action="/verify">
                  <fieldset><div><!-- Form Name -->
    </div><div class="component"><!-- Text input-->
    <div class="control-group">
      <label class="control-label" for="user_name">用户名</label>
      <div class="controls">
        <input id="user_name" name="user_name" type="text" placeholder="你的用户名" class="input-xlarge">

      </div>
    </div>
    </div><div class="component"><!-- Text input-->
    <div class="control-group">
      <label class="control-label" for="user_number">学号</label>
      <div class="controls">
        <input id="user_number" name="user_number" type="text" placeholder="学号" class="input-xlarge" required="">

      </div>
    </div>
    </div><div class="component"><!-- Button -->
    <div class="control-group">
      <label class="control-label" for="submit"></label>
      <div class="controls">
        <button id="submit" name="submit" class="btn btn-default">submit</button>
      </div>
    </div>
    </div></fieldset>

    </form>
</div>


</body>
 <script data-main="assets/js/main-built.js" src="assets/js/lib/require.js" ></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-13083321-13', 'minikomi.github.io');
      ga('send', 'pageview');

    </script>
</html>