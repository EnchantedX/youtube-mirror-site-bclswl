<?php
error_reporting( E_ALL&~E_NOTICE );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $headtitle ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport" />
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link href="https://cdn.bootcss.com/Swiper/4.0.6/css/swiper.min.css" rel="stylesheet"> 
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
<script src="//cdn.bootcss.com/jqueryui/1.11.2/jquery-ui.js"></script>
<link href="//cdn.bootcss.com/video.js/5.20.4/alt/video-js-cdn.min.css" rel="stylesheet" />
<script src="//libs.cdnjs.net/video.js/5.20.4/video.min.js"></script>
<script type="text/javascript" src="./inc/4.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6545292450138667",
    enable_page_level_ads: true
  });
</script>
<link rel="stylesheet" href="./inc/theme.css" type="text/css">
<link rel="stylesheet" href="./inc/iconfont.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
<div class="container">
	<a class="navbar-brand" href="./"><i class="fa d-inline fa-youtube-play"></i><b>&nbsp;<?php echo TITLENAME ?></b></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
		<ul class="navbar-nav">
		</ul>
		<div id="custom-search-input">
		     <form action="search.php" style="margin-bottom:0px">
			<div class="input-group col-md-12">
			   
				<input type="text" name="q"  class="search-query form-control" id="youtube" placeholder="搜索 Youtube"><span class="input-group-btn"><button class="btn btn-danger" type="submit" style="z-index:4"><span class="fa d-inline fa-search"></span></button></span>
				</div>
			</form>
		<script >
$("#youtube").autocomplete({
    source: function(request, response){
        
        var query = request.term;
        
        $.ajax({
            url: "./ajax/autocomplete.php?q="+query,  
            dataType: 'jsonp',
            success: function(data, textStatus, request) { 
               response( $.map( data[1], function(item) {
                    return {
                        label: item[0],
                        value: item[0]
                    }
                }));
            }
        });
    },
    
});
</script>
		</div>
	</div>
</div>
</nav>
