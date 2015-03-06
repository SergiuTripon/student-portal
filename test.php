<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'assets/meta-tags.php'; ?>

    <title>Student Portal | Overview</title>

    <?php include 'assets/css-paths/common-css-paths.php'; ?>

    <style>
        body{
            font-family: 'Open Sans', arial, sans-serif;
            background:rgb(123, 158, 158);

        }
        *{
            margin:0;
            padding:0;
        }
        #categories{
            overflow:hidden;
            width:90%;
            margin:0 auto;
        }
        .clr:after{
            content:"";
            display:block;
            clear:both;
        }
        #categories li{
            position:relative;
            list-style-type:none;
            width:27.85714285714286%; /* = (100-2.5) / 3.5 */
            padding-bottom: 32.16760145166612%; /* =  width /0.866 */
            float:left;
            overflow:hidden;
            visibility:hidden;

            -webkit-transform: rotate(-60deg) skewY(30deg);
            -ms-transform: rotate(-60deg) skewY(30deg);
            transform: rotate(-60deg) skewY(30deg);
        }
        #categories li:nth-child(3n+2){
            margin:0 1%;
        }
        #categories li:nth-child(6n+4){
            margin-left:0.5%;
        }
        #categories li:nth-child(6n+4), #categories li:nth-child(6n+5), #categories li:nth-child(6n+6) {
            margin-top: -6.9285714285%;
            margin-bottom: -6.9285714285%;

            -webkit-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            -ms-transform: translateX(50%) rotate(-60deg) skewY(30deg);
            transform: translateX(50%) rotate(-60deg) skewY(30deg);
        }

        #categories li *{
            position:absolute;
            visibility:visible;
        }
        #categories li > div{
            width:100%;
            height:100%;
            text-align:center;
            color:#fff;
            overflow:hidden;

            -webkit-transform: skewY(-30deg) rotate(60deg);
            -ms-transform: skewY(-30deg) rotate(60deg);
            transform: skewY(-30deg) rotate(60deg);

            -webkit-backface-visibility:hidden;

        }

        /* HEX CONTENT */
        #categories li img{
            left:-100%; right:-100%;
            width: auto; height:100%;
            margin:0 auto;
        }

        #categories div h1, #categories div p{
            width:90%;
            padding:0 5%;
            background-color:#008080; background-color: rgba(0, 128, 128, 0.8);
            font-family: 'Raleway', sans-serif;

            -webkit-transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
            -ms-transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
            transition: top .2s ease-out, bottom .2s ease-out, .2s padding .2s ease-out;
        }
        #categories li h1{
            bottom:110%;
            font-style:italic;
            font-weight:normal;
            font-size:1.5em;
            padding-top:100%;
            padding-bottom:100%;
        }
        #categories li h1:after{
            content:'';
            display:block;
            position:absolute;
            bottom:-1px; left:45%;
            width:10%;
            text-align:center;
            z-index:1;
            border-bottom:2px solid #fff;
        }
        #categories li p{
            padding-top:50%;
            top:110%;
            padding-bottom:50%;
        }


        /* HOVER EFFECT  */

        #categories li div:hover h1 {
            bottom:50%;
            padding-bottom:10%;
        }

        #categories li div:hover p{
            top:50%;
            padding-top:10%;
        }

    </style>

</head>

<body>
	
	<div class="preloader"></div>

    <?php include 'includes/menus/menu.php'; ?>

    <div id="overview-portal" class="container">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>

        <ul id="categories" class="clr">
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2878/10944255073_973d2cd25c.jpg" alt=""/>
                    <h1>This is a title a bit longer</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2827/10384422264_d9c7299146.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6217/6216951796_e50778255c.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>

            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6092/6227418584_d5883b0948.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li><li>
                <div>
                    <img src="https://farm4.staticflickr.com/3766/12953056854_b8cdf14f21.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6139/5986939269_10721b8017.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7163/6822904141_50277565c3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3771/13199704015_72aa535bd7.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2878/10944255073_973d2cd25c.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2827/10384422264_d9c7299146.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6217/6216951796_e50778255c.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6092/6227418584_d5883b0948.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3766/12953056854_b8cdf14f21.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2878/10944255073_973d2cd25c.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm3.staticflickr.com/2827/10384422264_d9c7299146.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6217/6216951796_e50778255c.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6092/6227418584_d5883b0948.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3766/12953056854_b8cdf14f21.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6139/5986939269_10721b8017.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7163/6822904141_50277565c3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3771/13199704015_72aa535bd7.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6139/5986939269_10721b8017.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7163/6822904141_50277565c3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm4.staticflickr.com/3771/13199704015_72aa535bd7.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li>
                <div>
                    <img src="https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
            <li class="pusher"></li>
            <li>
                <div>
                    <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt=""/>
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </div>
            </li>
        </ul>

	</div> <!-- /container -->

	<?php include 'includes/footers/footer.php'; ?>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>
    <?php include 'assets/js-paths/tilejs-js-path.php'; ?>

	<script>
    Ladda.bind('.ladda-button', {timeout: 2000});
	</script>

</body>
</html>
