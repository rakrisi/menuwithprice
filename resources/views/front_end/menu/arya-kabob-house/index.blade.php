@extends('layouts.main')
    <div class="header" style="background-color: gray;">
        <label for="mn-mbl" class="body_btn"></label>
            <label class="mnmbl-label" for="mn-mbl"></label>
                <div class="hd-bar" style="background-color: gray;" >
                    <a class="logo" href="/">
                        <img src="{{ asset('user/front_end/images/icon.png')}}" alt="Menu With Price">
                    </a>
    </div>
    <div class="menu" style="background-color: gray;">
        <div class="menu_width">
            <a class="logo" href="/">
                <img src="{{ asset('user/front_end/images/icon.png')}}" alt="Menu With Price">
            </a>
            <ul class="m-list">
                <li class="ml-home">
                    <a href="/" class="active" style="background-color: gray;">
                        home
                    </a>
                </li>
                <li>
                    <a href="../../menu-and-price/" style="background-color: gray;">
                        all menus
                    </a>
                </li>
                <li>
                    <a href="../../restaurant-near-me/" style="background-color: gray;">
                        food near me
                    </a>
                </li>
                <li>
                    <a href="../../cuisine/" style="background-color: gray;">
                        Cuisine
                    </a>
                </li>
                <li>
                    <a href="../../nutrition/" style="background-color: gray;">
                        Nutrition
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content">
<div class="main tab-main">

<div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" href="https://www.menuwithprice.com/"><i itemprop="name">Menu With Price</i></a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="https://www.menuwithprice.com/menu-and-price/" itemprop="item"><i itemprop="name">Menu</i></a>
<meta itemprop="position" content="2">
</span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a href="https://www.menuwithprice.com/menu/arya-kabob-house/" itemprop="item"><i itemprop="name">Arya Kabob House Prices</i></a>
<meta itemprop="position" content="3">
</span> </div>

<div>
<h1><span>Arya Kabob House</span> Prices and Locations</h1>
</div>

<div class="star_div">
<div class="rating">
<form method="POST">
<input type="submit" id="starScore1" name="score" value="1" class="score"><label for="starScore1" class="star star1"></label>
<input type="submit" id="starScore2" name="score" value="2" class="score"><label for="starScore2" class="star star2"></label>
<input type="submit" id="starScore3" name="score" value="3" class="score"><label for="starScore3" class="star star3"></label>
<input type="submit" id="starScore4" name="score" value="4" class="score"><label for="starScore4" class="star star4"></label>
<input type="submit" id="starScore5" name="score" value="5" class="score"><label for="starScore5" class="star star5"></label>
</form>
</div>
<div class="score_star">
<span style="width:86%"></span>
</div>
<span class="score_span">
<span>4.3</span> based on
<span>140</span> votes
</span>
</div>

<div class="ads ads-top ads-brand"><div>
<style type="text/css">
.mwp_ads_1 { width: 100%; height: 252px; }
@media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
</style>
<ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f9b5a6cb17c0531d05b86de3-text/javascript"></script>
<script type="f9b5a6cb17c0531d05b86de3-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

<div class="brand">
<div class="brdt-list brct-logo-none"> <ul class="brct-list menu-brand-list">
<li id="dt-order">
<svg viewBox="0 0 1024 1024" class="icon-online" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><path d="M836.266667 392.533333C733.866667 392.533333 648.533333 307.2 648.533333 204.8S733.866667 17.066667 836.266667 17.066667 1024 102.4 1024 204.8s-85.333333 187.733333-187.733333 187.733333z m0-341.333333C750.933333 51.2 682.666667 119.466667 682.666667 204.8s68.266667 153.6 153.6 153.6S989.866667 290.133333 989.866667 204.8s-68.266667-153.6-153.6-153.6z" fill=""></path><path d="M836.266667 392.533333C781.653333 392.533333 750.933333 296.96 750.933333 204.8S781.653333 17.066667 836.266667 17.066667 921.6 112.64 921.6 204.8s-30.72 187.733333-85.333333 187.733333z m0-341.333333C815.786667 51.2 785.066667 112.64 785.066667 204.8s30.72 153.6 51.2 153.6S887.466667 296.96 887.466667 204.8s-30.72-153.6-51.2-153.6z" fill=""></path><path d="M989.866667 187.733333h-310.613334c-10.24 0-17.066667-6.826667-17.066666-17.066666s6.826667-17.066667 17.066666-17.066667H989.866667c10.24 0 17.066667 6.826667 17.066666 17.066667s-6.826667 17.066667-17.066666 17.066666zM989.866667 290.133333h-300.373334c-10.24 0-17.066667-6.826667-17.066666-17.066666s6.826667-17.066667 17.066666-17.066667H989.866667c10.24 0 17.066667 6.826667 17.066666 17.066667s-6.826667 17.066667-17.066666 17.066666zM358.4 1006.933333c-58.026667 0-102.4-44.373333-102.4-102.4s44.373333-102.4 102.4-102.4 102.4 44.373333 102.4 102.4-44.373333 102.4-102.4 102.4z m0-170.666666c-37.546667 0-68.266667 30.72-68.266667 68.266666s30.72 68.266667 68.266667 68.266667 68.266667-30.72 68.266667-68.266667-30.72-68.266667-68.266667-68.266666zM802.133333 1006.933333c-58.026667 0-102.4-44.373333-102.4-102.4s44.373333-102.4 102.4-102.4 102.4 44.373333 102.4 102.4-44.373333 102.4-102.4 102.4z m0-170.666666c-37.546667 0-68.266667 30.72-68.266666 68.266666s30.72 68.266667 68.266666 68.266667 68.266667-30.72 68.266667-68.266667-30.72-68.266667-68.266667-68.266666zM870.4 768H378.88c-68.266667 0-129.706667-51.2-143.36-119.466667L129.706667 119.466667H17.066667C6.826667 119.466667 0 112.64 0 102.4s6.826667-17.066667 17.066667-17.066667h129.706666c6.826667 0 13.653333 6.826667 17.066667 13.653334l105.813333 542.72c10.24 51.2 54.613333 92.16 109.226667 92.16h491.52c10.24 0 17.066667 6.826667 17.066667 17.066666s-6.826667 17.066667-17.066667 17.066667z" fill=""></path><path d="M256 665.6c-6.826667 0-13.653333-6.826667-17.066667-13.653333l-85.333333-409.6c0-3.413333 0-10.24 3.413333-13.653334s6.826667-6.826667 13.653334-6.826666h430.08c10.24 0 17.066667 6.826667 17.066666 17.066666s-6.826667 17.066667-17.066666 17.066667h-409.6l78.506666 372.053333 621.226667-78.506666 37.546667-136.533334c3.413333-10.24 10.24-13.653333 20.48-13.653333 10.24 3.413333 13.653333 10.24 13.653333 20.48L921.6 570.026667c-3.413333 6.826667-6.826667 10.24-13.653333 13.653333L256 665.6c3.413333 0 0 0 0 0z" fill=""></path></svg>
<a href="https://grubhub.vdcy.net/c/2456720/784198/8310" id="784198" target="_blank">Order Arya Kabob House with Grubhub</a>
<img height="0" width="0" src="https://grubhub.vdcy.net/i/2456720/784198/8310" style="position:absolute;visibility:hidden;" border="0" />

</li>
<li id="dt-cuisine">
<div class="cuisine">
<span>Cuisine:</span>
<a href="https://www.menuwithprice.com/cuisine/middle-eastern/">Middle Eastern</a>
<a href="https://www.menuwithprice.com/cuisine/afghan/">Afghan</a>
</div>
</li> </ul>
</div>
</div>



<div class="choose">
<h2>Choose My State</h2>
<input type="checkbox">
<label class="label">
<span class="more">More</span>
<span class="less">Less</span>
<span class="more-less"></span>
</label>
<div class="choose-list choose-state">
<a href="new-york/">NY</a> </div>
</div>

<div class="ads"><div>
<style type="text/css">
.mwp_ads_3 { width: 100%; height: 250px; }
@media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
@media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
</style>

<ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f9b5a6cb17c0531d05b86de3-text/javascript"></script>
<script type="f9b5a6cb17c0531d05b86de3-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>


</div>
</div>