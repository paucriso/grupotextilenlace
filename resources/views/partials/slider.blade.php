<!-- LOAD JQUERY LIBRARY -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> --}}

<!-- LOADING FONTS AND ICONS -->
<link href="//fonts.googleapis.com/css?family=Roboto:400%2C700&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >


{{-- <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"> --}}
<link rel="stylesheet" href="text/css" href="{{asset('css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="css/rs6.css">
<!-- REVOLUTION LAYERS STYLES -->
            <!-- REVOLUTION JS FILES -->

<script>
window.RS_MODULES = window.RS_MODULES || {};
window.RS_MODULES.modules = window.RS_MODULES.modules || {};
window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
window.RS_MODULES.defered = true;
window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
window.RS_MODULES.type = 'compiled';
</script>
        <script src="js/rbtools.min.js"></script>
                <script src="js/rs6.min.js"></script>

<script>function setREVStartSize(e){
//window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
        pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
        e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
        if(e.layout==="fullscreen" || e.l==="fullscreen")
            newh = Math.max(e.mh,window.RSIH);
        else{
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
            e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

            var nl = new Array(e.rl.length),
                ix = 0,
                sl;
            e.tabw = e.tabhide>=pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
            e.tabh = e.tabhide>=pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
            var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
            newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        var el = document.getElementById(e.c);
        if (el!==null && el) el.style.height = newh+"px";
        el = document.getElementById(e.c+"_wrapper");
        if (el!==null && el) {
            el.style.height = newh+"px";
            el.style.display = "block";
        }
    } catch(e){
        console.log("Failure at Presize of Slider:" + e)
    }
//});
};</script>


<!-- START Slider 1 REVOLUTION SLIDER 6.7.10 -->
<p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="slider-1" data-source="gallery"
    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
    <rs-module id="rev_slider_2_1" style="" data-version="6.7.10">
        <rs-slides style="overflow: hidden; position: absolute;">
            <rs-slide style="position: absolute;" data-key="rs-2" data-title="slide_1"
                data-thumb="{{asset('storage/images/slideshow_bg-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                <img src="{{asset('storage/images/slideshow_bg.jpg')}}" alt="" title="slideshow_bg.jpg" width="1440" height="550"
                    class="rev-slidebg tp-rs-img" data-no-retina>
                <!--						--><rs-zone id="rrzb_2" class="rev_row_zone_bottom" style="z-index: 4;"><!--

                    --><rs-row id="slider-2-slide-2-layer-0" data-type="row"
                        data-xy="xo:50px,37px,28px,17px;yo:50px,37px,28px,17px;" data-text="s:20,15,11,6;l:0,18,13,8;"
                        data-cbreak="3" data-rsp_bd="off" data-padding="r:40,30,23,14;l:40,30,23,14;"
                        data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:5000;" style="z-index:6;"><!--
                        --><rs-column id="slider-2-slide-2-layer-1" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,left,center;" data-rsp_bd="off" data-column="w:41.67%;a:middle;"
                            data-padding="t:10;r:10;b:10;l:10;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:5000;"
                            style="z-index:7;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-2-layer-7" data-type="text" data-color="#076a9f"
                                data-rsp_ch="on" data-xy="xo:2,1,0,0;yo:86,64,48,29;" data-pos="r"
                                data-text="w:normal;s:42,31,23,18;l:44,33,25,20;fw:700;a:left,left,left,center;"
                                data-dim="minh:0,none,none,none;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:8;font-family:'Roboto';text-transform:uppercase;">CAMISAS Y BLUSAS A LA
                                MEDIDA
                            </rs-layer><!--

                            --><rs-layer id="slider-2-slide-2-layer-9" data-type="text" data-color="#374151"
                                data-rsp_ch="on" data-xy="" data-pos="r"
                                data-text="w:normal;s:16,14,12,14;l:24,18,14,18;ls:1,0,0,0;a:inherit;"
                                data-dim="w:514px,387px,294px,436px;minh:0px,none,none,none;"
                                data-margin="t:10,8,6,4;b:10,8,6,4;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:7;font-family:'Roboto';">Diseñamos su imagen empresarial. Diseño de todo
                                tipo de camisas a la medida con la mejor calidad a un excelente precio.
                            </rs-layer><!--

                            --><a id="slider-2-slide-2-layer-3" class="rs-layer" href="{{route('pages.contacto')}}"
                                target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="xo:6,4,3,1;yo:340,256,194,119;" data-pos="r"
                                data-text="w:normal;s:16,12,12,16;l:25,18,14,20;ls:2px,1px,0px,0px;a:left,left,left,center;"
                                data-disp="inline-block" data-margin="t:10,8,6,4;"
                                data-padding="t:8,6,5,3;r:16,12,9,6;b:8,6,5,3;l:16,12,9,6;"
                                data-border="bor:12px,12px,12px,12px;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:6;background-color:#cf143d;font-family:'Roboto';display:inline-block;">CONTÁCTANOS
                            </a><!--
                        --></rs-column><!--

                        --><rs-column id="slider-2-slide-2-layer-2" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,center,center;" data-rsp_bd="off" data-column="w:58.33%;"
                            data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:5000;" style="z-index:6;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-2-layer-8" data-type="image" data-rsp_ch="on"
                                data-xy="xo:0,-4,-3,-1;yo:0,-111,-84,-51;" data-pos="r"
                                data-text="w:normal;s:20,15,11,6;l:0,18,13,8;"
                                data-dim="w:770px,658px,499px,319px;h:515px,440px,334px,213px;"
                                data-disp="inline-block" data-frame_0="x:50,37,28,17;" data-frame_1="sp:1000;"
                                data-frame_999="o:0;st:w;" style="z-index:6;display:inline-block;"><img
                                    src="{{asset('storage/images/Group-5.png')}}" alt="" class="tp-rs-img" width="770"
                                    height="515" data-no-retina>
                            </rs-layer><!--
                        --></rs-column><!--
                    --></rs-row><!--
                --></rs-zone><!--
--> </rs-slide>
            <rs-slide style="position: absolute;" data-key="rs-3" data-title="slide_1"
                data-thumb="{{asset('storage/images/slideshow_bg-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                <img src="{{asset('storage/images/slideshow_bg.jpg')}}" alt="" title="slideshow_bg.jpg" width="1440"
                    height="550" class="rev-slidebg tp-rs-img" data-no-retina>
                <!--						--><rs-zone id="rrzb_3" class="rev_row_zone_bottom" style="z-index: 4;"><!--

                    --><rs-row id="slider-2-slide-3-layer-0" data-type="row"
                        data-xy="xo:50px,37px,28px,17px;yo:50px,37px,28px,17px;" data-text="s:20,15,11,6;l:0,18,13,8;"
                        data-cbreak="3" data-rsp_bd="off" data-padding="r:40,30,23,14;l:40,30,23,14;"
                        data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;"><!--
                        --><rs-column id="slider-2-slide-3-layer-1" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,left,center;" data-rsp_bd="off" data-column="w:41.67%;a:middle;"
                            data-padding="t:10;r:10;b:10;l:10;" data-frame_0="o:1;"
                            data-frame_999="o:0;st:w;sA:9000;" style="z-index:7;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-3-layer-7" data-type="text" data-color="#076a9f"
                                data-rsp_ch="on" data-xy="xo:2,1,0,0;yo:86,64,48,29;" data-pos="r"
                                data-text="w:normal;s:42,31,23,18;l:44,33,25,20;fw:700;a:left,left,left,center;"
                                data-dim="minh:0,none,none,none;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:8;font-family:'Roboto';text-transform:uppercase;">Mezclilla de Calidad
                                Industrial
                            </rs-layer><!--

                            --><rs-layer id="slider-2-slide-3-layer-9" data-type="text" data-color="#374151"
                                data-rsp_ch="on" data-xy="" data-pos="r"
                                data-text="w:normal;s:16,14,12,14;l:24,18,14,18;ls:1,0,0,0;a:inherit;"
                                data-dim="w:514px,387px,294px,436px;minh:0px,none,none,none;"
                                data-margin="t:10,8,6,4;b:10,8,6,4;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:7;font-family:'Roboto';">Somos fabricantes y confeccionamos prendas de
                                mezclilla de calidad industrial y en variados modelos.
                            </rs-layer><!--

                            --><a id="slider-2-slide-3-layer-3" class="rs-layer" href="{{route('pages.contacto')}}"
                                target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="xo:6,4,3,1;yo:340,256,194,119;" data-pos="r"
                                data-text="w:normal;s:16,12,12,16;l:25,18,14,20;ls:2px,1px,0px,0px;a:left,left,left,center;"
                                data-disp="inline-block" data-margin="t:10,8,6,4;"
                                data-padding="t:8,6,5,3;r:16,12,9,6;b:8,6,5,3;l:16,12,9,6;"
                                data-border="bor:12px,12px,12px,12px;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:6;background-color:#cf143d;font-family:'Roboto';display:inline-block;">CONTÁCTANOS
                            </a><!--
                        --></rs-column><!--

                        --><rs-column id="slider-2-slide-3-layer-2" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,center,center;" data-rsp_bd="off" data-column="w:58.33%;"
                            data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-3-layer-8" data-type="image" data-rsp_ch="on"
                                data-xy="xo:0,-4,-3,-1;yo:0,-111,-84,-51;" data-pos="r"
                                data-text="w:normal;s:20,15,11,6;l:0,18,13,8;"
                                data-dim="w:778px,658px,499px,319px;h:550px,440px,334px,213px;"
                                data-disp="inline-block" data-frame_0="x:50,37,28,17;" data-frame_1="sp:1000;"
                                data-frame_999="o:0;st:w;" style="z-index:6;display:inline-block;"><img
                                    src="{{asset('storage/images/mezclilla-slider.png')}}" alt="" class="tp-rs-img"
                                    width="778" height="550" data-no-retina>
                            </rs-layer><!--
                        --></rs-column><!--
                    --></rs-row><!--
                --></rs-zone><!--
--> </rs-slide>
            <rs-slide style="position: absolute;" data-key="rs-4" data-title="slide_1"
                data-thumb="{{asset('storage/images/slideshow_bg-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                <img src="{{asset('storage/images/slideshow_bg.jpg')}}" alt="" title="slideshow_bg.jpg" width="1440"
                    height="550" class="rev-slidebg tp-rs-img" data-no-retina>
                <!--						--><rs-zone id="rrzb_4" class="rev_row_zone_bottom" style="z-index: 4;"><!--

                    --><rs-row id="slider-2-slide-4-layer-0" data-type="row"
                        data-xy="xo:50px,37px,28px,17px;yo:50px,37px,28px,17px;" data-text="s:20,15,11,6;l:0,18,13,8;"
                        data-cbreak="3" data-rsp_bd="off" data-padding="r:40,30,23,14;l:40,30,23,14;"
                        data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;"><!--
                        --><rs-column id="slider-2-slide-4-layer-1" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,left,center;" data-rsp_bd="off" data-column="w:41.67%;a:middle;"
                            data-padding="t:10;r:10;b:10;l:10;" data-frame_0="o:1;"
                            data-frame_999="o:0;st:w;sA:9000;" style="z-index:7;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-4-layer-7" data-type="text" data-color="#076a9f"
                                data-rsp_ch="on" data-xy="xo:2,1,0,0;yo:86,64,48,29;" data-pos="r"
                                data-text="w:normal;s:42,31,23,18;l:44,33,25,20;fw:700;a:left,left,left,center;"
                                data-dim="minh:0,none,none,none;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:8;font-family:'Roboto';text-transform:uppercase;">Playeras, polos,
                                sudaderas
                            </rs-layer><!--

                            --><rs-layer id="slider-2-slide-4-layer-9" data-type="text" data-color="#374151"
                                data-rsp_ch="on" data-xy="" data-pos="r"
                                data-text="w:normal;s:16,14,12,14;l:24,18,14,18;ls:1,0,0,0;a:inherit;"
                                data-dim="w:514px,387px,294px,436px;minh:0px,none,none,none;"
                                data-margin="t:10,8,6,4;b:10,8,6,4;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:7;font-family:'Roboto';">Ofrecemos una amplia gama de modelos y colores.
                                Podemos fabricar la prenda que necesites.
                            </rs-layer><!--

                            --><a id="slider-2-slide-4-layer-3" class="rs-layer" href="{{route('pages.contacto')}}"
                                target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="xo:6,4,3,1;yo:340,256,194,119;" data-pos="r"
                                data-text="w:normal;s:16,12,12,16;l:25,18,14,20;ls:2px,1px,0px,0px;a:left,left,left,center;"
                                data-disp="inline-block" data-margin="t:10,8,6,4;"
                                data-padding="t:8,6,5,3;r:16,12,9,6;b:8,6,5,3;l:16,12,9,6;"
                                data-border="bor:12px,12px,12px,12px;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:6;background-color:#cf143d;font-family:'Roboto';display:inline-block;">CONTÁCTANOS
                            </a><!--
                        --></rs-column><!--

                        --><rs-column id="slider-2-slide-4-layer-2" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,center,center;" data-rsp_bd="off" data-column="w:58.33%;"
                            data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-4-layer-8" data-type="image" data-rsp_ch="on"
                                data-xy="xo:0,-4,-3,-1;yo:0,-111,-84,-51;" data-pos="r"
                                data-text="w:normal;s:20,15,11,6;l:0,18,13,8;"
                                data-dim="w:771px,658px,499px,319px;h:510px,440px,334px,213px;"
                                data-disp="inline-block" data-frame_0="x:50,37,28,17;" data-frame_1="sp:1000;"
                                data-frame_999="o:0;st:w;" style="z-index:6;display:inline-block;"><img
                                    src="{{asset('storage/images/playeras-slide.png')}}" alt="" class="tp-rs-img" width="771"
                                    height="510" data-no-retina>
                            </rs-layer><!--
                        --></rs-column><!--
                    --></rs-row><!--
                --></rs-zone><!--
--> </rs-slide>
            <rs-slide style="position: absolute;" data-key="rs-5" data-title="slide_1"
                data-thumb="{{asset('storage/images/slideshow_bg-50x100.jpg')}}" data-in="o:0;" data-out="a:false;">
                <img src="{{asset('storage/images/slideshow_bg.jpg')}}" alt="" title="slideshow_bg.jpg" width="1440"
                    height="550" class="rev-slidebg tp-rs-img" data-no-retina>
                <!--						--><rs-zone id="rrzb_5" class="rev_row_zone_bottom" style="z-index: 4;"><!--

                    --><rs-row id="slider-2-slide-5-layer-0" data-type="row"
                        data-xy="xo:50px,37px,28px,17px;yo:50px,37px,28px,17px;" data-text="s:20,15,11,6;l:0,18,13,8;"
                        data-cbreak="3" data-rsp_bd="off" data-padding="r:40,30,23,14;l:40,30,23,14;"
                        data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;"><!--
                        --><rs-column id="slider-2-slide-5-layer-1" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,left,center;" data-rsp_bd="off" data-column="w:41.67%;a:middle;"
                            data-padding="t:10;r:10;b:10;l:10;" data-frame_0="o:1;"
                            data-frame_999="o:0;st:w;sA:9000;" style="z-index:7;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-5-layer-7" data-type="text" data-color="#076a9f"
                                data-rsp_ch="on" data-xy="xo:2,1,0,0;yo:86,64,48,29;" data-pos="r"
                                data-text="w:normal;s:42,31,23,18;l:44,33,25,20;fw:700;a:left,left,left,center;"
                                data-dim="minh:0,none,none,none;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:8;font-family:'Roboto';text-transform:uppercase;">Indumentaria de
                                seguridad
                            </rs-layer><!--

                            --><rs-layer id="slider-2-slide-5-layer-9" data-type="text" data-color="#374151"
                                data-rsp_ch="on" data-xy="" data-pos="r"
                                data-text="w:normal;s:16,14,12,14;l:24,18,14,18;ls:1,0,0,0;a:inherit;"
                                data-dim="w:514px,387px,294px,436px;minh:0px,none,none,none;"
                                data-margin="t:10,8,6,4;b:10,8,6,4;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:7;font-family:'Roboto';">Personalizamos tu indumentaria acordes con las
                                necesidades de tu empresa.
                            </rs-layer><!--

                            --><a id="slider-2-slide-5-layer-3" class="rs-layer" href="{{route('pages.contacto')}}"
                                target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="xo:6,4,3,1;yo:340,256,194,119;" data-pos="r"
                                data-text="w:normal;s:16,12,12,16;l:25,18,14,20;ls:2px,1px,0px,0px;a:left,left,left,center;"
                                data-disp="inline-block" data-margin="t:10,8,6,4;"
                                data-padding="t:8,6,5,3;r:16,12,9,6;b:8,6,5,3;l:16,12,9,6;"
                                data-border="bor:12px,12px,12px,12px;" data-frame_0="x:-50,-37,-28,-17;"
                                data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
                                style="z-index:6;background-color:#cf143d;font-family:'Roboto';display:inline-block;">CONTÁCTANOS
                            </a><!--
                        --></rs-column><!--

                        --><rs-column id="slider-2-slide-5-layer-2" data-type="column" data-xy="xo:50px;yo:50px;"
                            data-text="a:left,left,center,center;" data-rsp_bd="off" data-column="w:58.33%;"
                            data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:6;width:100%;"><!--
                            --><rs-layer id="slider-2-slide-5-layer-8" data-type="image" data-rsp_ch="on"
                                data-xy="xo:0,-4,-3,-1;yo:0,-111,-84,-51;" data-pos="r"
                                data-text="w:normal;s:20,15,11,6;l:0,18,13,8;"
                                data-dim="w:780px,658px,499px,319px;h:514px,440px,334px,213px;"
                                data-disp="inline-block" data-frame_0="x:50,37,28,17;" data-frame_1="sp:1000;"
                                data-frame_999="o:0;st:w;" style="z-index:6;display:inline-block;"><img
                                    src="{{asset('storage/images/seguridad-slide.png')}}" alt="" class="tp-rs-img" width="780"
                                    height="514" data-no-retina>
                            </rs-layer><!--
                        --></rs-column><!--
                    --></rs-row><!--
                --></rs-zone><!--
--> </rs-slide>
        </rs-slides>
    </rs-module>
    <script></script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->


<script>
    var	tpj = jQuery;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider21"] = {once: RS_MODULES.modules["revslider21"]!==undefined ? RS_MODULES.modules["revslider21"].once : undefined, init:function() {
        window.revapi2 = window.revapi2===undefined || window.revapi2===null || window.revapi2.length===0  ? document.getElementById("rev_slider_2_1") : window.revapi2;
        if(window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length==0) { window.revapi2initTry = window.revapi2initTry ===undefined ? 0 : window.revapi2initTry+1; if (window.revapi2initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider21"].init()}); return;}
        window.revapi2 = jQuery(window.revapi2);
        if(window.revapi2.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_2_1"); return;}
        revapi2.revolutionInit({
                revapi:"revapi2",
                DPR:"dpr",
                sliderLayout:"fullwidth",
                duration:"5000ms",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:"1360,1024,778,480",
                gridheight:"550,500,350,350",
                perspective:600,
                perspectiveType:"global",
                editorheight:"550,500,350,350",
                responsiveLevels:"1240,1024,778,480",
                progressBar:{disableProgressBar:true},
                navigation: {
                    wheelCallDelay:1000,
                    onHoverStop:false,
                    arrows: {
                        enable:true,
                        style:"ares",
                        left: {
                            h_offset:10
                        },
                        right: {
                            h_offset:10
                        }
                    },
                    bullets: {
                        enable:true,
                        tmp:"",
                        style:"hermes"
                    }
                },
                viewPort: {
                    global:false,
                    globalDist:"-200px",
                    enable:false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
        });

    }} // End of RevInitScript
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>



<style>#rev_slider_2_1_wrapper .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_2_1_wrapper .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_2_1_wrapper .uranus.tparrows.rs-touchhover:before{opacity:0.75}#rev_slider_2_1_wrapper .hermes.tp-bullets{}#rev_slider_2_1_wrapper .hermes .tp-bullet{overflow:hidden; border-radius:50%; width:16px; height:16px; background-color:rgba(0,0,0,0); box-shadow:inset 0 0 0 2px #ffffff; -webkit-transition:background 0.3s ease; transition:background 0.3s ease; position:absolute}#rev_slider_2_1_wrapper .hermes .tp-bullet.rs-touchhover{background-color:rgba(0,0,0,0.21)}#rev_slider_2_1_wrapper .hermes .tp-bullet:after{content:' '; position:absolute; bottom:0; height:0; left:0; width:100%; background-color:#ffffff; box-shadow:0 0 1px #ffffff; -webkit-transition:height 0.3s ease; transition:height 0.3s ease}#rev_slider_2_1_wrapper .hermes .tp-bullet.selected:after{height:100%}</style>
<script type="text/javascript">window.RVS ??= {}; window.RVS.ENV ??= {}; window.RVS.ENV.TRANSITIONPACK_URL = "https://demosandbox.site/wordpress/wp-content/plugins/revslider-transitionpack-addon/";</script>
