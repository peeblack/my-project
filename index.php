<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>BABIATORS TRY SUNGLASSES</title>
<link href="css/try-sunglasses.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mmenu.all.css" rel="stylesheet" type="text/css">
<!-- <link href="css/fontawesome-all.css" rel="stylesheet"> -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
<!-- <link rel="icon" type="image/png" sizes="32x32" href="images/ford.png"> -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script>
$(window).load(function(){

    $('#status').delay(200).fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(550).css({
      'overflow': 'visible'
    });

    // $(function(){
    //   $('.btu-search').click(function(){
    // 		$(this).toggleClass('open');
    // 		$(".m-search").slideToggle();
    // 	});
    // });
});
</script>
</head>
<div id="preloader" >
  <div id="status">
    <div class="ball">&nbsp;</div>
  </div>
</div>
<body>
  <div class="warp">
    <div class="pic-left"><img src="images/pic-try-float-left.png"/></div>
    <div class="pic-right"><img src="images/pic-try-float-right.png"/></div>
    <header class="clearfix">
      <div class="logo"><img src="images/logo.png"/></div>
    </header>
    <main class="bg1">
      <form method="post" action="try-sunglasses.php" enctype="multipart/form-data">
        <figure>
          <div class="h-topic">
            <h1 class="prompt-sb">เด็กๆของคุณ เหมาะกับแว่นรุ่นไหน</h1>
            <em></em>
            <h5 class="prompt-sb">อัพโหลดรูปเด็กๆของคุณ เพื่อทดลองสวมแว่นออนไลน์</h5>
          </div>
          <fieldset>
            <div class="form-group col-md-12 no-pad">
              <div class="input-group input-file" name="Fichier1">
                <span class="input-group-btn">
                  <div class="icon"><img src="images/try-icon1.png"/></div>
                  <button class="btn btn-default btn-choose prompt-r" type="button">Browse</button>
                </span>
                <input class="no-border browse prompt-r" type="text" class="form-control" placeholder='อัพโหลดภาพ' />
              </div>
            </div>
          </fieldset>
        </figure>
        <div class="btu bg-white"><input class="prompt-sb" name="" type="submit" value="Upload Picture" /></div>
      </form>
    </main>
    <footer class="bg2"><span></span></footer>
  </div>
  <script>
  $(document).ready(function() {

    function bs_input_file() {
  	$(".input-file").before(
  		function() {
  			if ( ! $(this).prev().hasClass('input-ghost') ) {
  				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
  				element.attr("name",$(this).attr("name"));
  				element.change(function(){
  					element.next(element).find('input').val((element.val()).split('\\').pop());
  				});
  				$(this).find("button.btn-choose").click(function(){
  					element.click();
  				});
  				$(this).find("button.btn-reset").click(function(){
  					element.val(null);
  					$(this).parents(".input-file").find('input').val('');
  				});
  				$(this).find('input').css("cursor","pointer");
  				$(this).find('input').mousedown(function() {
  					$(this).parents('.input-file').prev().click();
  					return false;
  				});
  				return element;
  			}
  		}
  	);
  }
  $(function() {
  	bs_input_file();
  });


  });
  </script>
  </body>
  </html>
