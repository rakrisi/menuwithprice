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
    <a href="https://www.menuwithprice.com/menu-and-price/" itemprop="item"><i itemprop="name">Menu</i></a>
    <meta itemprop="position" content="2">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/aandw/" itemprop="item"><i itemprop="name">A&W Restaurant Prices</i></a>
    <meta itemprop="position" content="3">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/aandw/alabama/" itemprop="item"><i itemprop="name">Alabama</i></a>
    <meta itemprop="position" content="4">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/aandw/alabama/birmingham/" itemprop="item"><i itemprop="name">Birmingham</i></a>
    <meta itemprop="position" content="5">
    </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="https://www.menuwithprice.com/menu/aandw/alabama/birmingham/310558/" itemprop="item"><i itemprop="name">310558</i></a>
    <meta itemprop="position" content="6">
    </span> </div>
    
    <h1 style="color:blue;"><span style="color:blue;">A&W Restaurant</span> Prices in Birmingham, AL 35235</h1>
    
    <div class="star_div">
    <div class="rating">
    <form method="POST">
    <input type="submit" id="starScore1" name="score" value="1" class="score">
    <label for="starScore1" class="star star1"></label>
    <input type="submit" id="starScore2" name="score" value="2" class="score">
    <label for="starScore2" class="star star2"></label>
    <input type="submit" id="starScore3" name="score" value="3" class="score">
    <label for="starScore3" class="star star3"></label>
    <input type="submit" id="starScore4" name="score" value="4" class="score">
    <label for="starScore4" class="star star4"></label>
    <input type="submit" id="starScore5" name="score" value="5" class="score">
    <label for="starScore5" class="star star5"></label>
    </form>
    </div>
    <div class="score_star">
    <span style="width:78%"></span>
    </div>
    <span class="score_span">
    <span>3.9</span> based on
    <span>483</span> votes
    </span>
    </div>
    
    <div class="ads ads-top"><div>
    <style type="text/css">
    .mwp_ads_1 { width: 100%; height: 252px; }
    @media (min-width:768px) { .mwp_ads_1 { width: 100%; height: 100px; } }
    </style>
    <ins class="adsbygoogle mwp_ads_1" style="display:inline-block" data-ad-client="ca-pub-6371063963738592" data-ad-slot="8669735678"></ins>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="441593d65f4abd6a8c9a0d9c-text/javascript"></script>
    <script type="441593d65f4abd6a8c9a0d9c-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    </div>
    
    <div class="brand brct-detail">
    <a class="brand-logo" href="https://www.menuwithprice.com/menu/aandw/">
    <img src="{{ asset('user/front_end/images/brand_logo/aandw.png')}}" alt="A&W Restaurant near me">
    </a>
    <div class="brdt-list">
    <ul class="brct-list">
    <li ><a href="http://maps.google.com/?daddr=1674+Gadsen+Hwy%2C+Birmingham%2C+AL" target="_blank"><b>Address:</b>1674 Gadsen Hwy, Birmingham, AL</a>
    <a href="tel:(205)%20661-3381"><b>Phone Number:</b>(205) 661-3381</a>
    
    </li>
    
 <li ><a href="https://www.menuwithprice.com/menu/aandw/"><b>Menu:</b>A&W Restaurant Menu</a>
 <a href="https://www.menuwithprice.com/nutrition/aandw/"><b>Nutrition:</b>A&W Restaurant Nutrition</a>
    
 </li>
     <li id="dt-cuisine">
    <div class="cuisine">
    <span>Cuisine:</span>
    <b>
    <a href="https://www.menuwithprice.com/burgers-near-me/">Burger</a> </b><b>
    <a href="https://www.menuwithprice.com/cuisine/ice-cream/">Ice Cream</a>
    </b><b>
    <a href="https://www.menuwithprice.com/cuisine/hot-dogs/">Hot Dogs</a>
    </b> </div>
    </li> </ul>
    </div>
    </div>
    
    
    <div class="hours">
    <h2 style="color:blue;">A&W Hours | A&W Opening & Closing Hours</h2>
    <ul class="hours-list">
    <li class="regular_hours_empty">
    <p>Hours may fluctuate. For detailed hours of operation, please contact the store directly.</p>
    </li></ul> </div>
    
    </div>
    
    <div class="prices food-detail-peice">
    <h2 style="color:blue;">A&W Menu with Price in Birmingham</h2> <table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Combos</td></tr>
    <tr class="pt-subtitle">
    <td>Includes Choice of One Side and Regular Drink</td>
    </tr> </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Papa Burger</td><td>$6.99</td><td></td></tr><tr class="tr"><td>Original Bacon Double Cheeseburger</td><td>$6.99</td><td></td></tr><tr class="tr"><td>Grilled or Crispy Chicken</td><td>$6.99</td><td></td></tr><tr class="tr"><td>Coney Dog</td><td>$5.69</td><td></td></tr><tr class="tr"><td>Original Bacon Cheeseburger</td><td>$6.39</td><td></td></tr><tr class="tr"><td>Cheeseburger</td><td>$5.39</td><td></td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Sides</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Cheese Curds</td><td>$3.29</td><td>Individual</td></tr><tr class="tr"><td>Cheese Curds</td><td>$5.08</td><td>Premium</td></tr><tr class="tr"><td>Chili Cheese Fries</td><td>$2.99</td><td>Individual</td></tr><tr class="tr"><td>Chili Cheese Fries</td><td>$3.78</td><td>Premium</td></tr><tr class="tr"><td>Fries</td><td>$1.89</td><td>Individual</td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Draft A&W Root Beer</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Draft A&W Root Beer</td><td>$1.69</td><td>Small</td></tr><tr class="tr"><td>Draft A&W Root Beer</td><td>$1.89</td><td>Regular</td></tr><tr class="tr"><td>Draft A&W Root Beer</td><td>$2.09</td><td>Large</td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Floats & Freezes</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Float</td><td>$2.89</td><td>Small</td></tr><tr class="tr"><td>Float</td><td>$2.99</td><td>Regular</td></tr><tr class="tr"><td>Float</td><td>$3.29</td><td>Large</td></tr><tr class="tr"><td>Freeze</td><td>$2.89</td><td>Small</td></tr><tr class="tr"><td>Freeze</td><td>$2.99</td><td>Regular</td></tr><tr class="tr"><td>Freeze</td><td>$3.29</td><td>Large</td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Handspun Shakes</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Chocolate, Strawberry, or Vanilla</td><td>$3.59</td><td>Regular</td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Classic Treats</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Polar Swirl</td><td>$2.99</td><td></td></tr><tr class="tr"><td>Sundae</td><td>$2.89</td><td></td></tr><tr class="tr"><td>Soft Serve Cone</td><td>$1.29</td><td></td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Better Your Combo</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Float it</td><td>$1.50</td><td></td></tr><tr class="tr"><td>Shake it</td><td>$2.00</td><td></td></tr><tr class="tr"><td>Freeze it</td><td>$2.00</td><td></td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Kid's Meals</td></tr>
    <tr class="pt-subtitle">
    <td>Meal Includes Kid's Side, Kid's Drink & Special Prize</td>
    </tr> </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Cheeseburger</td><td>$3.99</td><td></td></tr><tr class="tr"><td>Hamburger</td><td>$3.99</td><td></td></tr><tr class="tr"><td>Hot Dog</td><td>$3.99</td><td></td></tr><tr class="tr"><td>Corn Dog Nuggets</td><td>$3.99</td><td></td></tr><tr class="tr"><td>Chicken Strips</td><td>$3.99</td><td></td></tr> </tbody>
    </table><table class="prc-table default-table">
    <tbody>
    <tr class="prc-th"><td style="background-color:lightblue;">Drinks</td></tr>
    </tbody>
    </table>
    <table class="prc-table default-table">
    <tbody>
    <tr class="tr"><td>Soft Drink</td><td>$1.89</td><td>Small</td></tr><tr class="tr"><td>Soft Drink</td><td>$1.99</td><td>Regular</td></tr><tr class="tr"><td>Soft Drink</td><td>$2.19</td><td>Large</td></tr><tr class="tr"><td>Tea</td><td>$2.79</td><td>Half Gallon</td></tr><tr class="tr"><td>A&W Root Beer</td><td>$2.99</td><td>Half Gallon</td></tr> </tbody>
    </table> </div>
    
    <div class="ads"><div>
    </div>
    </div> 
    
    </div>
@endsection