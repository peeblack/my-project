<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>BABIATORS TRY SUNGLASSES</title>
<link href="css/try-sunglasses.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mmenu.all.css" rel="stylesheet" type="text/css">
<link href="css/slick.css" rel="stylesheet" type="text/css" />
<link href="css/slick-theme.css" rel="stylesheet" type="text/css" />
<!-- <link href="css/fontawesome-all.css" rel="stylesheet"> -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
<!-- <link rel="icon" type="image/png" sizes="32x32" href="images/ford.png"> -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/konva.min.js"></script>
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

    // EAALzfGOr4F4BAGV5iGTm4OBeOUas7GciONJyBMSHWkZCZAC6kffnIMWOnIaT9yZAa0zBOScynSRAUUX71awhKE5l2GYbvGoEZCFCpGpkSV0UpJZBwDRgqrGs1KNId7k61P6BW15JdnZCLGQSZAkhSDimOEGWMGoGOHZCH422vAiY4wZDZD
});
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '830665527124062',
      //autoLogAppEvents : true,
      //xfbml            : true,
      version          : 'v2.12'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>
<div id="preloader" >
  <div id="status">
    <div class="ball">&nbsp;</div>
  </div>
</div>
<body>
  <?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
  require_once('classupload/class.upload.php');
  $upload_image = new upload($_FILES['Fichier1']);

    if ( $upload_image->uploaded ) {

          $upload_image->file_new_name_body = date('Ymdhis');
          $upload_image->process("data-files/");


          if( $upload_image->processed ) {
              $image_name =  $upload_image->file_dst_name ;
              $upload_image->image_resize         = true ;
              $upload_image->image_x              = 500;
              //$upload_image->image_y        = $h;
              $upload_image->image_ratio_y        = true;
              $upload_image->clean();
          }//end newname
              $upload="data-files/".$image_name;


    }//end i

  }
  ?>
  <div class="warp">
    <header class="clearfix">
      <div class="logo"><img src="images/logo.png"/></div>
    </header>
    <main class="bg1">
      <div class="pic relative">
        <div class="text1"><img src="images/pic-try-float-detail1.png"/></div>
        <div class="text2"><img src="images/pic-try-float-detail2.png"/></div>
        <div class="f-pic"><div id="container"></div></div>
      </div>
      <div class="try-slide bg-white">
        <div class="frame">
          <div class="try-style">
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-1.png');"><img src="images/product1-1.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-2.png');"><img src="images/product1-2.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-3.png');"><img src="images/product1-3.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-4.png');"><img src="images/product1-4.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-5.png');"><img src="images/product1-5.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product1-6.png');"><img src="images/product1-6.png"/></a>
            </div>

            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-1.png');"><img src="images/product2-1.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-2.png');"><img src="images/product2-2.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-3.png');"><img src="images/product2-3.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-4.png');"><img src="images/product2-4.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-5.png');"><img src="images/product2-5.png"/></a>
            </div>
            <div>
              <a href="javascript:;" class="pic" onclick="changeImage('images/product2-6.png');"><img src="images/product2-6.png"/></a>
            </div>

          </div>
        </div>
      </div>
    </main>
    <footer class="bg-footer"><a class="share prompt-sb" href="javascript:;" onclick="fbs_click(this)" >Share on facebook</a></footer>
  </div>
  <script type="text/javascript" src="js/slick.js"></script>
  <script>
  $(document).ready(function() {

    $('.try-style').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 950,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
      ]
    });

  });
  </script>
  <script>
  /*
    var width = window.innerWidth;
    var height = window.innerHeight;
*/
var width = 500;
var height = 500;
    function update(activeAnchor) {
        var group = activeAnchor.getParent();

        var topLeft = group.get('.topLeft')[0];
        var topRight = group.get('.topRight')[0];
        var bottomRight = group.get('.bottomRight')[0];
        var bottomLeft = group.get('.bottomLeft')[0];
        var image = group.get('Image')[0];

        var anchorX = activeAnchor.getX();
        var anchorY = activeAnchor.getY();

        // update anchor positions
        switch (activeAnchor.getName()) {
            case 'topLeft':
                topRight.setY(anchorY);
                bottomLeft.setX(anchorX);
                break;
            case 'topRight':
                topLeft.setY(anchorY);
                bottomRight.setX(anchorX);
                break;
            case 'bottomRight':
                bottomLeft.setY(anchorY);
                topRight.setX(anchorX);
                break;
            case 'bottomLeft':
                bottomRight.setY(anchorY);
                topLeft.setX(anchorX);
                break;
        }

        image.position(topLeft.position());

        var width = topRight.getX() - topLeft.getX();
        var height = bottomLeft.getY() - topLeft.getY();
        if(width && height) {
            image.width(width);
            image.height(height);
        }
    }
    function addAnchor(group, x, y, name) {
        var stage = group.getStage();
        var layer = group.getLayer();

        var anchor = new Konva.Circle({
            x: x,
            y: y,
            stroke: '#666',
            fill: '#ddd',
            strokeWidth: 0,
            radius: 0,
            name: name,
            draggable: true,
            dragOnTop: false
        });

        anchor.on('dragmove', function() {
            update(this);
            layer.draw();
        });
        anchor.on('mousedown touchstart', function() {
            group.setDraggable(false);
            this.moveToTop();
        });
        anchor.on('dragend', function() {
            group.setDraggable(true);
            layer.draw();
        });
        // add hover styling
        anchor.on('mouseover', function() {
            var layer = this.getLayer();
            document.body.style.cursor = 'pointer';
            this.setStrokeWidth(4);
            layer.draw();
        });
        anchor.on('mouseout', function() {
            var layer = this.getLayer();
            document.body.style.cursor = 'default';
            this.setStrokeWidth(2);
            layer.draw();
        });

        group.add(anchor);
    }

    var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
    });

    var layer = new Konva.Layer();
    stage.add(layer);

    // darth vader
    var darthVaderImg = new Konva.Image({
        width: 500,
        height: 500
    });

    // yoda
    var yodaImg = new Konva.Image({
        width: 345,
        height: 138
    });

    var darthVaderGroup = new Konva.Group({
        x: 0,
        y: 0,
        draggable: false
    });
    layer.add(darthVaderGroup);
    darthVaderGroup.add(darthVaderImg);
    addAnchor(darthVaderGroup, 0, 0, 'topLeft');
    addAnchor(darthVaderGroup, 500, 0, 'topRight');
    addAnchor(darthVaderGroup, 500, 500, 'bottomRight');
    addAnchor(darthVaderGroup, 0, 500, 'bottomLeft');

    var yodaGroup = new Konva.Group({
        x: 120,
        y: 110,
        draggable: true
    });
    layer.add(yodaGroup);
    yodaGroup.add(yodaImg);
    addAnchor(yodaGroup, 0, 0, 'topLeft');
    addAnchor(yodaGroup, 345, 0, 'topRight');
    addAnchor(yodaGroup, 345, 138, 'bottomRight');
    addAnchor(yodaGroup, 0, 138, 'bottomLeft');

    var imageObj1 = new Image();
    imageObj1.onload = function() {
        darthVaderImg.image(imageObj1);
        layer.draw();
    };
    //imageObj1.src = 'images/model.jpg';
    imageObj1.src = '<?php echo $upload ?>';

    var imageObj2 = new Image();
    imageObj2.onload = function() {
        yodaImg.image(imageObj2);
        layer.draw();
    };
    imageObj2.src = 'images/product1-1.png';

    //เปลี่ยนแว่น
    function changeImage(element) {
    imageObj2.src = element;
    }


    function downloadURI(uri, name) {

            var link = document.createElement("a");

            link.download = name;
            link.href = uri;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            delete link;
        }

        document.getElementById('save').addEventListener('click', function () {

            var dataURL = stage.toDataURL();
            downloadURI(dataURL, 'stage.png');
        }, false);

    function getBase64() {
      $.ajax({
         url: 'upload-image-ajax.php',
         type: 'POST',
         data: {base64: stage.toDataURL()},
         success: function(file_path) {
          
            if(file_path) {
              console.log('call facebook api');

              FB.ui(
              {
                method: 'feed',
                name: 'Facebook Dialogs',
                link: 'http://localhost/',
                picture: 'http://fbrell.com/f8.jpg',
                caption: 'Reference Documentation',
                description: 'Dialogs provide a simple, consistent interface for applications to interface with users.'
              },
              function(response) {
                if (response && response.post_id) {
                  alert('Post was published.');
                } else {
                  alert('Post was not published.');
                }
              }
            );
              
            }

         }
      });
    }

  </script>


  </body>
  </html>
