<?php
    /**
     *
     * User: Administrator
     * Date: 2015/11/12
     * Time: 9:55
     */

?>




<div class="container">
    <div class="row" style="margin-top: 0px; border-top: 2px solid black;">
        <div class="col-lg-12 col-xs-12" style="color: black;">
            <br/>
            汉密哈顿烘焙连锁机构|广州华琳食品有限公司版权所有<br/>
            汉密哈顿微信公众平台:hamihadon2006<br/>
            官方网站:
            <a href="http://www.hamihaton.com" style="color: #004a70; ">http://www.hamihaton.com</a>
            (电脑版)<br/>
            股票上市挂牌代码：360629<br/>
            <a href="http://txjy.syggs.mofcom.gov.cn/manager/prosecute.do?method=add&id=3643843"
               style="color: #004a70;">国家商务部特许连锁经营企业备案号：0440100111400088</a><br/>
            24小时加盟热线：<a href="tel:4000012655" style="color: #004a70;">400-001-2655</a>　/
            <a href="tel:02038773687" style="color: #004a70;">020-38773687</a><br/>
            粤ICP备11107412号 Copyright©HAMIHATON<br/>
            广州公司：广州市天河北路233号中信广场5506<br/>
            成都分公司：成都市锦江区总府路2号《百盛》时代广场A座26楼<br/>
            中央工厂：广州市白云区齐富路金钟北工业区1号<br/>
            全国工业食品生产许可证(QS证)：4401 2401<br/><br/><br/><br/>

        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo __YK_CDN__?>js/vendor/jquery-1.11.0.min.js"></script>




<script>
    //    var s = $.get("localhost");

    //    home ry youshi fwxm mdxx jmhz



    var url = window.location.href;
    var arrays = url.split('=');

    if(arrays[1]){
        $("#home").removeClass('in active');

        $("#"+arrays[1]).addClass('in active');
    }


</script>


<script src="<?php echo __YK_CDN__?>js/vendor/core-1.0.5.js"></script>

<script src="<?php echo __YK_CDN__?>js/bootstrap.min.js"></script>
<script src="<?php echo __YK_CDN__?>js/jquery.mCustomScrollbar.min.js"></script>

<script src="<?php echo __YK_CDN__?>js/jquery.colorbox-min.js"></script>
<script src="<?php echo __YK_CDN__?>js/preloadCssImages.jQuery_v5.js"></script>
<script src="<?php echo __YK_CDN__?>js/jquery.stellar.min.js"></script>
<!--
* jQuery with jQuery Easing, and jQuery Transit JS
//-->
<script src="<?php echo __YK_CDN__?>js/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo __YK_CDN__?>js/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
<!--
* LayerSlider from Kreatura Media with Transitions
-->
<script src="<?php echo __YK_CDN__?>js/layerslider/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo __YK_CDN__?>js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo __YK_CDN__?>js/jquery.rivathemes.js"></script>
<script type="text/javascript">
    $('document').ready(function () {
        /*

         Home Page Layer Slider

         */
        $('#layerslider').layerSlider({
            skinsPath: 'css/layerslider/skins/',
            skin: 'fullwidth',
            thumbnailNavigation: 'hover',
            hoverPrevNext: false,
            responsive: false,
            responsiveUnder: 1170,
            sublayerContainer: 1170
        });
        /*

         Latest Projects Slider

         */
        $('#latest-projects').rivaSlider({
            visible: 4,
            selector: 'envor-project'
        });
        /*

         Our Partners Slider

         */
        $('#our-partners').rivaCarousel({
            visible: 5,
            selector: 'envor-partner-logo',
            mobile_visible: 1
        });
        /*

         Footer News Slider

         */
        $('#footer-news').rivaSlider({
            visible: 1,
            selector: 'envor-post-preview'
        });
        /*

         Testimonials #1 Carousel

         */
        $('#clients-testimonials').rivaCarousel({
            visible: 1,
            selector: 'envor-testimonials-1',
            mobile_visible: 1
        });
    });
</script>
<script src="js/envor.js"></script>
<script type="text/javascript">
    $('document').ready(function () {
         /*

         Preload Images

         */
        var imgs = new Array(), $imgs = $('img');
        for (var i = 0; i < $imgs.length; i++) {
            imgs[i] = new Image();
            imgs[i].src = $imgs.eq(i).attr('src');
        }
        Core.preloader.queue(imgs).preload(function () {
            var images = $('a').map(function () {
                return $(this).attr('href');
            }).get();
            Core.preloader.queue(images).preload(function () {
                $.preloadCssImages();
            })
        })
        $('#envor-preload').hide();
    });
    /*
     Google Analytics Code
     */
    /*
     Windows Phone 8 и Internet Explorer 10
     */
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style")
        msViewportStyle.appendChild(
            document.createTextNode(
                "@-ms-viewport{width:auto!important}"
            )
        )
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
    }
</script>





<script>

    $("#envor-mobile-menu-btn").show();
    $("#envor-mobile-menu").show();
</script>

</body>
</html>
