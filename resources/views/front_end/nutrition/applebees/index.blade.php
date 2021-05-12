@extends('layouts.main')
@section('content')
    
<div class="content">
    <div class="main">
    
    <div class="bread-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://www.menuwithprice.com/"><i itemprop="name">Menu With Price</i></a>
    <meta itemprop="position" content="1">
    </span>
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/nutrition/" itemprop="item"><i itemprop="name">Nutrition</i></a>
    <meta itemprop="position" content="2">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/nutrition/applebees/" itemprop="item"><i itemprop="name">Applebee's Nutrition </i></a>
    <meta itemprop="position" content="3">
    </span> </div>
    
    <h1>Applebee's Nutrition Facts</h1>
    
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
    <span style="width:52%"></span>
    </div>
    <span class="score_span">
    <span>2.6</span> based on
    <span>1,466</span> votes
    </span>
    </div>
    
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f5575bded75dfe64680e492c-text/javascript"></script>
    <script type="f5575bded75dfe64680e492c-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="brand">
    <a class="brand-logo" href="https://www.menuwithprice.com/nutrition/applebees/"><img src="{{ asset('user/front_end/images/brand_logo/applebees.png')}}" alt="Applebee's nutrition"></a>
    <div class="brdt-list">
    <ul class="brct-list menu-brand-list brct-detail">
    <li id="dt-menu"><a href="https://www.menuwithprice.com/menu/applebees/">Applebee's Menu</a></li> <li id="dt-addr">
    <div>
    <a href="https://www.menuwithprice.com/menu/applebees/">Applebee's Locations</a>
    </div>
    </li> <li id="dt-cuisine">
    <div class="cuisine">
    <span>Cuisine:</span>
    <a href="https://www.menuwithprice.com/cuisine/american-new/">American</a>
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
    <a href="../../menu/applebees/alabama/">AL</a><a href="https://www.menuwithprice.com/menu/applebees/alaska/">AK</a><a href="https://www.menuwithprice.com/menu/applebees/arizona/">AZ</a><a href="https://www.menuwithprice.com/menu/applebees/arkansas/">AR</a><a href="https://www.menuwithprice.com/menu/applebees/california/">CA</a><a href="https://www.menuwithprice.com/menu/applebees/colorado/">CO</a><a href="https://www.menuwithprice.com/menu/applebees/connecticut/">CT</a><a href="https://www.menuwithprice.com/menu/applebees/delaware/">DE</a><a href="https://www.menuwithprice.com/menu/applebees/florida/">FL</a><a href="https://www.menuwithprice.com/menu/applebees/georgia/">GA</a><a href="https://www.menuwithprice.com/menu/applebees/idaho/">ID</a><a href="https://www.menuwithprice.com/menu/applebees/illinois/">IL</a><a href="https://www.menuwithprice.com/menu/applebees/indiana/">IN</a><a href="https://www.menuwithprice.com/menu/applebees/iowa/">IA</a><a href="https://www.menuwithprice.com/menu/applebees/kansas/">KS</a><a href="https://www.menuwithprice.com/menu/applebees/kentucky/">KY</a><a href="https://www.menuwithprice.com/menu/applebees/louisiana/">LA</a><a href="https://www.menuwithprice.com/menu/applebees/maine/">ME</a><a href="https://www.menuwithprice.com/menu/applebees/maryland/">MD</a><a href="https://www.menuwithprice.com/menu/applebees/massachusetts/">MA</a><a href="https://www.menuwithprice.com/menu/applebees/michigan/">MI</a><a href="https://www.menuwithprice.com/menu/applebees/minnesota/">MN</a><a href="https://www.menuwithprice.com/menu/applebees/mississippi/">MS</a><a href="https://www.menuwithprice.com/menu/applebees/missouri/">MO</a><a href="https://www.menuwithprice.com/menu/applebees/montana/">MT</a><a href="https://www.menuwithprice.com/menu/applebees/nebraska/">NE</a><a href="https://www.menuwithprice.com/menu/applebees/nevada/">NV</a><a href="https://www.menuwithprice.com/menu/applebees/new-hampshire/">NH</a><a href="https://www.menuwithprice.com/menu/applebees/new-jersey/">NJ</a><a href="https://www.menuwithprice.com/menu/applebees/new-mexico/">NM</a><a href="https://www.menuwithprice.com/menu/applebees/new-york/">NY</a><a href="https://www.menuwithprice.com/menu/applebees/north-carolina/">NC</a><a href="https://www.menuwithprice.com/menu/applebees/north-dakota/">ND</a><a href="https://www.menuwithprice.com/menu/applebees/ohio/">OH</a><a href="https://www.menuwithprice.com/menu/applebees/oklahoma/">OK</a><a href="https://www.menuwithprice.com/menu/applebees/oregon/">OR</a><a href="https://www.menuwithprice.com/menu/applebees/pennsylvania/">PA</a><a href="https://www.menuwithprice.com/menu/applebees/rhode-island/">RI</a><a href="https://www.menuwithprice.com/menu/applebees/south-carolina/">SC</a><a href="https://www.menuwithprice.com/menu/applebees/south-dakota/">SD</a><a href="https://www.menuwithprice.com/menu/applebees/tennessee/">TN</a><a href="https://www.menuwithprice.com/menu/applebees/texas/">TX</a><a href="https://www.menuwithprice.com/menu/applebees/utah/">UT</a><a href="https://www.menuwithprice.com/menu/applebees/vermont/">VT</a><a href="https://www.menuwithprice.com/menu/applebees/virginia/">VA</a><a href="https://www.menuwithprice.com/menu/applebees/washington/">WA</a><a href="https://www.menuwithprice.com/menu/applebees/west-virginia/">WV</a><a href="https://www.menuwithprice.com/menu/applebees/wisconsin/">WI</a><a href="https://www.menuwithprice.com/menu/applebees/wyoming/">WY</a> </div>
    </div>
    
    
    <div class="ads"><div style="text-align:center;">
    <style type="text/css">
    .mwp_ads_2 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_2 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_2 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_2" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="4099935279"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f5575bded75dfe64680e492c-text/javascript"></script>
    <script type="f5575bded75dfe64680e492c-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="nutri-agen food-detail-peice">
    <h2>Applebee's Nutrition Facts</h2>
    
    <table>
    <tbody>
    <tr>
    <th>Food</th>
    <th class="tdblock">Calories</th>
    <th class="td">Protein (g)</th>
    <th class="td">Fat (g)</th>
    <th class="more"> </th>
    </tr>
    <tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2949-add-american-cheese/"><p>Add American Cheese</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">150</td>
    <td class="td">8</td>
    <td class="td">12</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2949-add-american-cheese/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2953-12-oz-ribeye-steak-without-sides/"><p>12 oz. Ribeye Steak without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">500</td>
    <td class="td">63</td>
    <td class="td">28</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2953-12-oz-ribeye-steak-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2957-9-oz-house-sirloin-steak-without-sides/"><p>9 oz. House Sirloin Steak without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">330</td>
    <td class="td">45</td>
    <td class="td">17</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2957-9-oz-house-sirloin-steak-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2966-4-cheese-mac-and-cheese-with-honey-pepper-chicken-tenders/"><p>4-Cheese Mac & Cheese with Honey Pepper Chicken Tenders</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">1830</td>
    <td class="td">77</td>
    <td class="td">92</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2966-4-cheese-mac-and-cheese-with-honey-pepper-chicken-tenders/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2975-add-cheddar-cheese/"><p>Add Cheddar Cheese</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">90</td>
    <td class="td">5</td>
    <td class="td">7</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2975-add-cheddar-cheese/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2977-7-oz-house-sirloin-steak-without-sides/"><p>7 oz. House Sirloin Steak without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">270</td>
    <td class="td">34</td>
    <td class="td">15</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2977-7-oz-house-sirloin-steak-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2980-12-oz-new-york-strip-steak-without-sides/"><p>12 oz. New York Strip Steak without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">480</td>
    <td class="td">65</td>
    <td class="td">25</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2980-12-oz-new-york-strip-steak-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2982-add-bacon/"><p>Add Bacon</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">100</td>
    <td class="td">6</td>
    <td class="td">8</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2982-add-bacon/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2993-add-swiss-cheese/"><p>Add Swiss Cheese</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">160</td>
    <td class="td">11</td>
    <td class="td">13</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2993-add-swiss-cheese/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/2996-appetizer-crosscut-ribs-sauce-honey-bbq/"><p>Appetizer Crosscut Ribs Sauce, Honey BBQ</p>
    <span> </span></a>
    </td>
    <td class="tdblock">230</td>
    <td class="td">1</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/2996-appetizer-crosscut-ribs-sauce-honey-bbq/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3004-american-blt-sandwich-without-sides/"><p>American BLT Sandwich without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">1010</td>
    <td class="td">36</td>
    <td class="td">64</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3004-american-blt-sandwich-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3015-add-chili-and-cheese-to-fries/"><p>Add Chili & Cheese to Fries</p>
    <span> </span></a>
    </td>
    <td class="tdblock">190</td>
    <td class="td">12</td>
    <td class="td">13</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3015-add-chili-and-cheese-to-fries/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3017-appetizter-crosscut-ribs-without-sauce/"><p>Appetizter Crosscut Ribs without sauce</p>
    <span> </span></a>
    </td>
    <td class="tdblock">350</td>
    <td class="td">28</td>
    <td class="td">22</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3017-appetizter-crosscut-ribs-without-sauce/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3021-add-monterey-jack/"><p>Add Monterey Jack</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">80</td>
    <td class="td">4</td>
    <td class="td">6</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3021-add-monterey-jack/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3026-appetizer-crosscut-ribs-sauce-sweet-asian-chile/"><p>Appetizer Crosscut Ribs Sauce, Sweet Asian Chile</p>
    <span> </span></a>
    </td>
    <td class="tdblock">240</td>
    <td class="td">3</td>
    <td class="td">2</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3026-appetizer-crosscut-ribs-sauce-sweet-asian-chile/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3038-appetizer-crosscut-ribs-sauce-smoky-chipotle/"><p>Appetizer Crosscut Ribs Sauce, Smoky Chipotle</p>
    <span> </span></a>
    </td>
    <td class="tdblock">190</td>
    <td class="td">1</td>
    <td class="td">4</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3038-appetizer-crosscut-ribs-sauce-smoky-chipotle/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3098-apple-chimi-cheesecake/"><p>Apple Chimi Cheesecake</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">890</td>
    <td class="td">15</td>
    <td class="td">36</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3098-apple-chimi-cheesecake/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3110-applebees-riblets-basket-sauce-honey-bbq/"><p>Applebee's Riblets Basket Sauce, Honey BBQ</p>
    <span> </span></a>
    </td>
    <td class="tdblock">230</td>
    <td class="td">1</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3110-applebees-riblets-basket-sauce-honey-bbq/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3112-applebees-riblets-basket-sauce-smoky-chipotle/"><p>Applebee's Riblets Basket Sauce, Smoky Chipotle</p>
    <span> </span></a>
    </td>
    <td class="tdblock">190</td>
    <td class="td">1</td>
    <td class="td">4</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3112-applebees-riblets-basket-sauce-smoky-chipotle/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3116-applebees-riblets-platter-sauce-smoky-chipotle/"><p>Applebee's Riblets Platter Sauce, Smoky Chipotle</p>
    <span> </span></a>
    </td>
    <td class="tdblock">320</td>
    <td class="td">2</td>
    <td class="td">6</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3116-applebees-riblets-platter-sauce-smoky-chipotle/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3117-applebees-riblets-basket-sauce-sweet-asian-chile/"><p>Applebee's Riblets Basket Sauce, Sweet Asian Chile</p>
    <span> </span></a>
    </td>
    <td class="tdblock">160</td>
    <td class="td">2</td>
     <td class="td">1.5</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3117-applebees-riblets-basket-sauce-sweet-asian-chile/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3122-applebees-riblets-platter-sauce-honey-bbq/"><p>Applebee's Riblets Platter Sauce, Honey BBQ</p>
    <span> </span></a>
    </td>
    <td class="tdblock">380</td>
    <td class="td">2</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3122-applebees-riblets-platter-sauce-honey-bbq/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3125-applebees-riblets-basket-without-sauce-or-fries/"><p>Applebee's Riblets Basket without sauce or fries</p>
    <span> </span></a>
    </td>
    <td class="tdblock">410</td>
    <td class="td">41</td>
    <td class="td">26</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3125-applebees-riblets-basket-without-sauce-or-fries/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3137-bar-snack-bone-in-wings-dressing-bleu-cheese/"><p>Bar Snack Bone-In Wings Dressing, Bleu Cheese</p>
    <span> </span></a>
    </td>
    <td class="tdblock">240</td>
    <td class="td">1</td>
    <td class="td">25</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3137-bar-snack-bone-in-wings-dressing-bleu-cheese/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3139-bacon-vinaigrette/"><p>Bacon Vinaigrette</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">180</td>
    <td class="td">1</td>
    <td class="td">10</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3139-bacon-vinaigrette/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3142-baked-haddock/"><p>Baked Haddock</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">810</td>
    <td class="td">44</td>
    <td class="td">32</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3142-baked-haddock/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3153-baked-potato-loaded/"><p>Baked Potato, Loaded</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">410</td>
    <td class="td">10</td>
     <td class="td">24</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3153-baked-potato-loaded/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3159-applebees-riblets-platter-sauce-sweet-asian-chile/"><p>Applebee's Riblets Platter Sauce, Sweet Asian Chile</p>
    <span> </span></a>
    </td>
    <td class="tdblock">320</td>
    <td class="td">5</td>
    <td class="td">2.5</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3159-applebees-riblets-platter-sauce-sweet-asian-chile/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3161-baked-potato-regular/"><p>Baked Potato, Regular</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">340</td>
    <td class="td">6</td>
    <td class="td">18</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3161-baked-potato-regular/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3162-applebees-riblets-platter-without-sauce-or-fries/"><p>Applebee's Riblets Platter without sauce or fries</p>
    <span> </span></a>
    </td>
    <td class="tdblock">720</td>
    <td class="td">66</td>
    <td class="td">46</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3162-applebees-riblets-platter-without-sauce-or-fries/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3163-bar-snack-bone-in-wings-sauce-hot-buffalo/"><p>Bar Snack Bone-In Wings Sauce, Hot Buffalo</p>
    <span> </span></a>
    </td>
    <td class="tdblock">110</td>
    <td class="td">0</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3163-bar-snack-bone-in-wings-sauce-hot-buffalo/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3169-bar-snack-bone-in-wings-sauce-honey-bbq/"><p>Bar Snack Bone-In Wings Sauce, Honey BBQ</p>
    <span> </span></a>
    </td>
    <td class="tdblock">110</td>
    <td class="td">1</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3169-bar-snack-bone-in-wings-sauce-honey-bbq/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3174-bar-snack-bone-in-wings-sauce-classic-buffalo/"><p>Bar Snack Bone-In Wings Sauce, Classic Buffalo</p>
     <span> </span></a>
    </td>
    <td class="tdblock">110</td>
    <td class="td">0</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3174-bar-snack-bone-in-wings-sauce-classic-buffalo/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3180-bar-snack-bone-in-wings-sauce-sweet-asian-chile/"><p>Bar Snack Bone-In Wings Sauce, Sweet Asian Chile</p>
    <span> </span></a>
    </td>
    <td class="tdblock">120</td>
    <td class="td">2</td>
    <td class="td">1</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3180-bar-snack-bone-in-wings-sauce-sweet-asian-chile/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3182-bar-snack-bone-in-wings-dressing-ranch/"><p>Bar Snack Bone-In Wings Dressing, Ranch</p>
    <span> </span></a>
    </td>
    <td class="tdblock">210</td>
    <td class="td">1</td>
    <td class="td">22</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3182-bar-snack-bone-in-wings-dressing-ranch/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3202-bar-snack-housemade-sweet-and-spicy-pickles/"><p>Bar Snack Housemade Sweet & Spicy Pickles</p>
    <span> </span></a>
    </td>
    <td class="tdblock">110</td>
    <td class="td">2</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3202-bar-snack-housemade-sweet-and-spicy-pickles/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3206-bar-snack-churro-smores/"><p>Bar Snack Churro S'mores</p>
    <span> </span></a>
    </td>
    <td class="tdblock">580</td>
    <td class="td">7</td>
    <td class="td">10</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3206-bar-snack-churro-smores/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3212-battered-fish-sandwich-without-sides/"><p>Battered Fish Sandwich without sides</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">820</td>
    <td class="td">21</td>
    <td class="td">57</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3212-battered-fish-sandwich-without-sides/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3218-bar-snack-green-bean-crispers/"><p>Bar Snack Green Bean Crispers</p>
    <span> </span></a>
    </td>
    <td class="tdblock">530</td>
    <td class="td">4</td>
    <td class="td">43</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3218-bar-snack-green-bean-crispers/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3219-bar-snack-pot-stickers/"><p>Bar Snack Pot Stickers</p>
    <span> </span></a>
    </td>
    <td class="tdblock">300</td>
    <td class="td">8</td>
    <td class="td">12</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3219-bar-snack-pot-stickers/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3222-bar-snack-chips-and-salsa/"><p>Bar Snack Chips & Salsa</p>
    <span> </span></a>
    </td>
    <td class="tdblock">510</td>
    <td class="td">8</td>
    <td class="td">24</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3222-bar-snack-chips-and-salsa/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3233-bar-snack-double-crunch-bone-in-wings-thai/"><p>Bar Snack Double Crunch Bone-In Wings, Thai</p>
    <span> </span></a>
    </td>
    <td class="tdblock">500</td>
    <td class="td">27</td>
    <td class="td">35</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3233-bar-snack-double-crunch-bone-in-wings-thai/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3237-barqs-root-beer/"><p>Barq's Root Beer</p>
    <span> </span></a>
    </td>
    <td class="tdblock">110</td>
    <td class="td">0</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3237-barqs-root-beer/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3246-bar-snack-double-crunch-bone-in-wings-without-sauce-or-dressing/"><p>Bar Snack Double Crunch Bone-In Wings without sauce or dressing</p>
    <span> </span></a>
    </td>
    <td class="tdblock">300</td>
    <td class="td">25</td>
    <td class="td">20</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3246-bar-snack-double-crunch-bone-in-wings-without-sauce-or-dressing/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3263-blackberry-quencher-lemonade/"><p>Blackberry Quencher Lemonade</p>
    <span> </span></a>
    </td>
    <td class="tdblock">160</td>
    <td class="td">0</td>
    <td class="td">0</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3263-blackberry-quencher-lemonade/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3265-boneless-and-bone-in-wings-dressing-bleu-cheese/"><p>Boneless & Bone-In Wings Dressing, Bleu Cheese</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">240</td>
    <td class="td">1</td>
    <td class="td">25</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3265-boneless-and-bone-in-wings-dressing-bleu-cheese/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3266-bleu-cheese-dressing/"><p>Bleu Cheese Dressing</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">240</td>
    <td class="td">1</td>
    <td class="td">25</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3266-bleu-cheese-dressing/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3268-blackened-tilapia/"><p>Blackened Tilapia</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">450</td>
    <td class="td">31</td>
    <td class="td">17</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3268-blackened-tilapia/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3283-blue-ribbon-brownie/"><p>Blue Ribbon Brownie</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">1670</td>
    <td class="td">28</td>
    <td class="td">78</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3283-blue-ribbon-brownie/"><b>></b></a></td>
    </tr><tr>
    <td>
    <a href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/"><p>Blue Ribbon Brownie Bite</p>
    <span>1 serving</span></a>
    </td>
    <td class="tdblock">380</td>
    <td class="td">5</td>
    <td class="td">18</td>
    <td class="more"><a href="https://www.menuwithprice.com/nutrition/applebees/3299-blue-ribbon-brownie-bite/"><b>></b></a></td>
    </tr> </tbody>
    </table>
    
     
    
    <div class="ads ads-bottom"><div>
    <style type="text/css">
    .mwp_ads_3 { width: 100%; height: 250px; }
    @media (min-width:336px) { .mwp_ads_3 { width: 100%; height: 280px; } }
    @media (min-width:768px) { .mwp_ads_3 { width: 100%; height: 100px; } }
    </style>
    
    <ins class="adsbygoogle mwp_ads_3" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="1006868077"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="f5575bded75dfe64680e492c-text/javascript"></script>
    <script type="f5575bded75dfe64680e492c-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    
    </div>
    
    </div> </div>
    </div>
@endsection