<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'assets/meta-tags.php'; ?>

    <title>Student Portal | Overview</title>

    <?php include 'assets/css-paths/common-css-paths.php'; ?>

    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        #lab {
            width: 1000px;
            overflow: hidden;
            padding-bottom: 70px;
            position: relative;
            margin: 0 auto;
            margin-bottom: 2.5em;
            background: rgb(236, 236, 236);

            -webkit-transition: all ease 500ms;
            -moz-transition: all ease 500ms;
            -o-transition: all ease 500ms;
            -ms-transition: all ease 500ms;
            transition: all ease 500ms;
        }

        h1 {
            font-family: bebas_neueregular ,sans-serif;
            font-size: 1.75em;
            padding: 0.2em 0 0.2em 0.2em;
            color: white;
            text-shadow: 0 0.06em 0 #424242;
            position: relative;
        }

        #lab h1 {
            background: #B0DAD4;
        }

        .beaker {
            -webkit-filter: drop-shadow(#424242 0px 1px 0px);
            border-bottom: 2em solid #FFF;
            border-left: 1em solid transparent;
            border-right: 1em solid transparent;
            border-radius: .5em;
            height: 0;
            width: 1em;
            position: absolute;
            right: 0.7em;
            bottom: 22%;
            font-size: 0.6em;
        }

        .beaker::before {
            border-left: .25em solid #FFF;
            border-radius: .25em;
            border-right: .25em solid #FFF;
            content: '';
            height: .25em;
            left: -.25em;
            position: absolute;
            top: -1em;
            width: 1em;
        }

        .beaker::after {
            border-left: .25em solid #FFF;
            border-right: .25em solid #FFF;
            content: '';
            height: 1em;
            left: 0;
            position: absolute;
            top: -1em;
            width: .5em;
        }

        .sectionheader {
            position: relative;
        }

        .lab_item {
            width: 200px;
            height: 230px;
            position: relative;
            display: inline-block;
        }

        .hexagon2 {
            position: absolute;
            width: 200px;
            height: 400px;
            top: -85px;
        }

        .hexagon {
            overflow: hidden;
            visibility: hidden;

            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            -ms-transform: rotate(120deg);
            transform: rotate(120deg);
            cursor: pointer;
        }

        .hexagon-in1 {
            overflow: hidden;
            width: 100%;
            height: 100%;

            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            transform: rotate(-60deg);
        }

        .hexagon-in2 {
            -webkit-box-shadow: inset 0 0 0 200px rgba(176, 218, 212, 0.48);
            box-shadow: inset 0 0 0 200px rgba(176, 218, 212, 0.48);
            overflow: hidden;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: 50%;

            -webkit-background-size: 125%;
            -moz-background-size: 125%;
            background-size: 125%;
            visibility: visible;

            -webkit-transform: rotate(-60deg);
            -moz-transform: rotate(-60deg);
            -o-transform: rotate(-60deg);
            -ms-transform: rotate(-60deg);
            transform: rotate(-60deg);

            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .hexagon-in2:hover {
            -webkit-box-shadow: inset 0 0 0 0px #B0DAD4;
            box-shadow: inset 0 0 0 0px #B0DAD4;
        }

        #lab article {
            padding-top: 1em;
            width: 820px;
            margin: 0 auto;
        }

        .lab_item:nth-child(7n-2) {
            margin-left: 101px;
        }

        .lab_item:nth-child(n+5) {
            margin-top: -55px;
        }

        @media (max-width: 1015px) {
            #lab {
                width: 100%;
            }

        }

        @media (max-width: 820px) {
            .lab_item:nth-child(5n-1) {
                margin-left: 102px;
            }

            .lab_item:nth-child(n+4) {
                margin-top: -62px;
            }

            .lab_item:nth-child(7n-2) {
                margin-left: 0px;
            }

            .lab_item:nth-child(n+5) {
                margin-top: -56px;
            }

            #lab article {
                width: 610px;
            }

        }

        @media (max-width: 640px) {
            #lab article {
                width: 405px;
            }

            .lab_item:nth-child(5n-1) {
                margin-left: 0px;
            }

            .lab_item:nth-child(3n) {
                margin-left: 102px;
            }

            .lab_item:nth-child(n+3) {
                margin-top: -56px;
            }

        }

        @media (max-width: 450px) {
            #lab article {
                width: 300px;
            }

            .lab_item:nth-child(3n) {
                margin-left: 0px;
            }

            .lab_item:nth-child(2n) {
                margin-left: 102px;
            }

            .lab_item:nth-child(n+2) {
                margin-top: -56px;
            }

        }

    </style>

</head>

<body>
	
	<div class="preloader"></div>

    <?php include 'includes/menus/menu.php'; ?>

    <div id="overview-portal" class="container">

        <section id="lab">
            <div class="sectionheader">	<h1>The lab</h1><div class="beaker"></div></div>
            <article>

                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url('http://placekitten.com/200/305');">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/200/320);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/200/310);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/200/300);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/300/300);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/300/400);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/500/500);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/600/600);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/700/700);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/250/300);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/230/300);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/280/300);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url(http://placekitten.com/290/300);">
                            </div>
                        </div>
                    </div>
                </div>



            </article>
        </section>

	</div> <!-- /container -->

	<?php include 'includes/footers/footer.php'; ?>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>
    <?php include 'assets/js-paths/tilejs-js-path.php'; ?>

	<script>
    Ladda.bind('.ladda-button', {timeout: 2000});
	</script>

</body>
</html>