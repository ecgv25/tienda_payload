<?php


// remove all session variables
//session_unset();

// destroy the session
////session_destroy();


/*session_start();

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';



$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day*/

?>


<!DOCTYPE html>
<html class="js svg flexbox csstransforms" lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#da2f0c">
  <link rel="canonical" href="https:// .myshopify.com/"><title> </title><!-- /snippets/social-meta-tags.liquid -->




<meta property="og:site_name" content=" ">
<meta property="og:url" content="https:// .myshopify.com/">
<meta property="og:title" content=" ">
<meta property="og:type" content="website">
<meta property="og:description" content=" ">





<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content=" ">
<meta name="twitter:description" content=" ">


  <link href="inicio_files/theme.css" rel="stylesheet" type="text/css" media="all">

  <script type="text/javascript" async="" src="inicio_files/trekkie.js"></script><script>
    var theme = {
      strings: {
        addToCart: "Agregar al carrito",
        soldOut: "Agotado",
        unavailable: "No disponible",
        regularPrice: "Precio habitual",
        sale: "Oferta",
        showMore: "Ver más",
        showLess: "Mostrar menos",
        addressError: "No se puede encontrar esa dirección",
        addressNoResults: "No results for that address",
        addressQueryLimit: "Se ha excedido el límite de uso de la API de Google . Considere la posibilidad de actualizar a un \u003ca href=\"https:\/\/developers.google.com\/maps\/premium\/usage-limits\"\u003ePlan Premium\u003c\/a\u003e.",
        authError: "Hubo un problema de autenticación con su cuenta de Google Maps.",
        newWindow: "Abre en una nueva ventana.",
        external: "Abre sitio externo.",
        newWindowExternal: "Abre sitio externo externo en una nueva ventana."
      },
      moneyFormat: "${{amount}}"
    }

    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
  </script><script src="inicio_files/lazysizes.js" async="async"></script>
  <script src="inicio_files/vendor.js" defer="defer"></script>
  <script src="inicio_files/theme.js" defer="defer"></script>

  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/7025229860/digital_wallets/dialog">
<script id="shopify-features" type="application/json">{"accessToken":"8d6bb905092ad978af9760556ce2a56e","betas":[],"domain":" .myshopify.com","shopId":7025229860,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.es.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = " .myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"Debut","id":17233707044,"theme_store_id":796,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script id="__st">var __st={"a":7025229860,"offset":-14400,"reqid":"e39013ac-100e-41a2-967d-dd4bc7965777","pageurl":" .myshopify.com\/","t":"prospect","u":"5945aaea7023","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = " .myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now())
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":7025229860,"isMerchantRequest":true,"themeId":17233707044,"themeCityHash":6220097990094326032}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.01},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"home"}
        );
      
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script><script async="" src="inicio_files/shop_events_listener-acf771159f9849ef6e5265782c99efe8b9940621.js"></script>
<script>document.addEventListener('DOMContentLoaded', function() {
  const adminBarInjector = new Shopify.AdminBarInjector({
    targetNode: document.body,
    iframeSrc: 'https:// .myshopify.com/admin/bar?customize_label=editar+p%C3%A1gina+de+inicio&customize_url=%2Fadmin%2Fthemes%2F17233707044%2Feditor%23%2F',
    permanentDomain: ' .myshopify.com',
  });

  adminBarInjector.init();
});</script>
<script integrity="sha256-DBz+azZCyGu5gK0LKY2/n3wGonECQmpgH9W9oypMXP0=" defer="defer" src="inicio_files/express_buttons-0c1cfe6b3642c86bb980ad0b298dbf9f7c06a27102426.js" crossorigin="anonymous"></script>
<script integrity="sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=" defer="defer" src="inicio_files/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70e.js" crossorigin="anonymous"></script>
<script integrity="sha256-uJ3PGilCEVr7Px4laKeveGQQ5vpkAjQ6QLmUh3IGADE=" defer="defer" src="inicio_files/admin_bar_injector-b89dcf1a2942115afb3f1e2568a7af786410e6fa64.js" crossorigin="anonymous"></script>


</head>

<body class="template-index">

  <a class="in-page-link visually-hidden skip-link" href="#MainContent">Ir directamente al contenido</a>

  <div id="SearchDrawer" class="search-bar drawer drawer--top" role="dialog" aria-modal="true" aria-label="Buscar">
    <div class="search-bar__table">
      <div class="search-bar__table-cell search-bar__form-wrapper">
        <form class="search search-bar__form" action="/search" method="get" role="search">
          <input class="search__input search-bar__input" type="search" name="q" placeholder="Buscar" aria-label="Buscar">
          <button class="search-bar__submit search__submit btn--link" type="submit">
            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
            <span class="icon__fallback-text">Buscar</span>
          </button>
        </form>
      </div>
      <div class="search-bar__table-cell text-right">
        <button type="button" class="btn--link search-bar__close js-drawer-close">
          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 40 40"><path d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z" class="layer"></path></svg>
          <span class="icon__fallback-text">Cerrar</span>
        </button>
      </div>
    </div>
  </div>

  <div id="shopify-section-header" class="shopify-section">
  <style>
    

    
      .site-header__logo-image {
        margin: 0;
      }
    
  </style>


<div data-section-id="header" data-section-type="header-section">
  
    
      <style>
        .announcement-bar {
          background-color: #162950;
        }

        .announcement-bar--link:hover {
          

          
            
            background-color: #254586;
          
        }

        .announcement-bar__message {
          color: #ffffff;
        }
      </style>

      
        <div class="announcement-bar">
      

        <p class="announcement-bar__message"></p>

      
        </div>
      

    
  

  <header class="site-header border-bottom logo--left" role="banner">
    <div class="grid grid--no-gutters grid--table site-header__mobile-nav">
      

      <div class="grid__item medium-up--one-quarter logo-align--left">
        
        
          <h1 class="h2 site-header__logo">
        
          
            <a class="site-header__logo-link" href="https:// .myshopify.com/"> </a>
          
        
          </h1>
        
      </div>

      
        <nav class="grid__item medium-up--one-half small--hide" id="AccessibleNav" role="navigation">
          <ul class="site-nav list--inline " id="SiteNav">
  



    
      <li class="site-nav--active">
        <a href=" index.php" class="site-nav__link site-nav__link--main site-nav__link--active" aria-current="page">
          <span class="site-nav__label">Inicio</span>
        </a>
      </li>
    
  



    
      <li>
        <a href=" index.php" class="site-nav__link site-nav__link--main">
          <span class="site-nav__label">Catálogo</span>
        </a>
      </li>
    
  



    
      <li>
        <a href="contactanos.html" class="site-nav__link site-nav__link--main">
          <span class="site-nav__label">Contáctanos</span>
        </a>
      </li>
    
  



    
   

    
</ul>

        </nav>
      

      <div class="grid__item medium-up--one-quarter text-right site-header__icons">
        <div class="site-header__icons-wrapper">
          <div class="site-header__search site-header__icon">
            <form action="/search" method="get" class="search-header search" role="search">
  <input class="search-header__input search__input" type="search" name="q" placeholder="Buscar" aria-label="Buscar">
  <button class="search-header__submit search__submit btn--link site-header__icon" type="submit">
    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
    <span class="icon__fallback-text">Buscar</span>
  </button>
</form>

          </div>

          <button type="button" class="btn--link site-header__icon site-header__search-toggle js-drawer-open-top" aria-controls="SearchDrawer" aria-expanded="false" aria-haspopup="dialog">
            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
            <span class="icon__fallback-text">Buscar</span>
          </button>

          

          <a href="#" class="site-header__icon site-header__cart">
            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 37 40"><path d="M36.5 34.8L33.3 8h-5.9C26.7 3.9 23 .8 18.5.8S10.3 3.9 9.6 8H3.7L.5 34.8c-.2 1.5.4 2.4.9 3 .5.5 1.4 1.2 3.1 1.2h28c1.3 0 2.4-.4 3.1-1.3.7-.7 1-1.8.9-2.9zm-18-30c2.2 0 4.1 1.4 4.7 3.2h-9.5c.7-1.9 2.6-3.2 4.8-3.2zM4.5 35l2.8-23h2.2v3c0 1.1.9 2 2 2s2-.9 2-2v-3h10v3c0 1.1.9 2 2 2s2-.9 2-2v-3h2.2l2.8 23h-28z"></path></svg>
            <span class="icon__fallback-text">Carrito</span>
            
              <div id="CartCount" class="site-header__cart-count">
                <span>2</span>
                <span class="icon__fallback-text medium-up--hide">artículos</span>
              </div>
            
          </a>

          

          
            <button type="button" class="btn--link site-header__icon site-header__menu js-mobile-nav-toggle mobile-nav--open" aria-controls="MobileNav" aria-expanded="false" aria-label="Menú">
              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" viewBox="0 0 37 40"><path d="M33.5 25h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0-11.5h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0 23h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2z"></path></svg>
              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 40 40"><path d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z" class="layer"></path></svg>
            </button>
          
        </div>

      </div>
    </div>

    <nav class="mobile-nav-wrapper medium-up--hide" role="navigation">
      <ul id="MobileNav" class="mobile-nav">
        
<li class="mobile-nav__item border-bottom">
            
              <a href="https:// .myshopify.com/" class="mobile-nav__link mobile-nav__link--active" aria-current="page">
                <span class="mobile-nav__label">Inicio</span>
              </a>
            
          </li>
        
<li class="mobile-nav__item border-bottom">
            
              <a href="https:// .myshopify.com/collections/all" class="mobile-nav__link">
                <span class="mobile-nav__label">Catálogo</span>
              </a>
            
          </li>
        
<li class="mobile-nav__item border-bottom">
            
              <a href="https:// .myshopify.com/pages/contactanos" class="mobile-nav__link">
                <span class="mobile-nav__label">Contactanos</span>
              </a>
            
          </li>
        
<li class="mobile-nav__item border-bottom">
            
              <a href="https:// .myshopify.com/" class="mobile-nav__link mobile-nav__link--active" aria-current="page">
                <span class="mobile-nav__label">Politicas</span>
              </a>
            
          </li>
        
<li class="mobile-nav__item">
            
              <a href="https:// .myshopify.com/" class="mobile-nav__link mobile-nav__link--active" aria-current="page">
                <span class="mobile-nav__label">Protección al Consumidor</span>
              </a>
            
          </li>
        
        
      </ul>
    </nav>
  </header>

  
</div>



<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": " ",
  
  "sameAs": [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    ""
  ],
  "url": "https:// .myshopify.com"
}
</script>


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": " ",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:// .myshopify.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:// .myshopify.com"
    }
  </script>



</div>

  <div class="page-container drawer-page-content" id="PageContainer">

    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
      <!-- BEGIN content_for_index --><div id="shopify-section-hero" class="shopify-section index-section index-section--flush"><div class="hero hero--x-large box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_180x.jpg?v=1551195425 180w 60h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_360x.jpg?v=1551195425 360w 120h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_540x.jpg?v=1551195425 540w 180h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_720x.jpg?v=1551195425 720w 240h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_900x.jpg?v=1551195425 900w 300h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1080x.jpg?v=1551195425 1080w 360h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1296x.jpg?v=1551195425 1296w 432h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1512x.jpg?v=1551195425 1512w 504h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1728x.jpg?v=1551195425 1728w 576h,
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX.jpg?v=1551195425 1920w 640h" data-parent-fit="cover" style="background-position: center center; background-image: url(inicio_files/page-header.jpg);">
   
  <div class="hero__inner">
    <div class="page-width text-center">
      
      
      
    </div>
  </div>
<picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_180x.jpg?v=1551195425 180w 60h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_360x.jpg?v=1551195425 360w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_540x.jpg?v=1551195425 540w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_720x.jpg?v=1551195425 720w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_900x.jpg?v=1551195425 900w 300h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1080x.jpg?v=1551195425 1080w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1296x.jpg?v=1551195425 1296w 432h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1512x.jpg?v=1551195425 1512w 504h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1728x.jpg?v=1551195425 1728w 576h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX.jpg?v=1551195425 1920w 640h" sizes="2325px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_180x.jpg?v=1551195425 180w 60h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_360x.jpg?v=1551195425 360w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_540x.jpg?v=1551195425 540w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_720x.jpg?v=1551195425 720w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_900x.jpg?v=1551195425 900w 300h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1080x.jpg?v=1551195425 1080w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1296x.jpg?v=1551195425 1296w 432h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1512x.jpg?v=1551195425 1512w 504h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_1728x.jpg?v=1551195425 1728w 576h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX.jpg?v=1551195425 1920w 640h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="2325px"></picture></div>

<noscript>
  <div class="hero hero--x-large" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB1UEtGbvfsK1RjSszbq6AqBXXaX_2048x.jpg?v=1551195425'); background-position: center center;"></div>
</noscript>




</div><div id="shopify-section-featured-collections" class="shopify-section index-section"><div class="page-width">
  
    <div class="section-header text-center">
      <h2>Colección destacada</h2>
    </div>
  

<ul class="grid grid--uniform grid--view-items">
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <p class="grid-view-item__link grid-view-item__image-container full-width-link" href="#">
    <span class="visually-hidden">T1 Smart Wristband Woman Fitness Bracelet Heart Rate Blood Pressure Monitor Fitness Tracker Watch Pedometer Sport Band for IOS</span>
  </p>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1160765407268 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1160765407268 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1160765407268 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1160765407268 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1160765407268" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1160765407268" class="grid-view-item__image lazyautosizes lazyloaded" src="imagenes/product-image-883267002_1024x1024@2x.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="T1 Smart Wristband Woman Fitness Bracelet Heart Rate Blood Pressure Monitor Fitness Tracker Watch Pedometer Sport Band for IOS" data-srcset="imagenes/product-image-883267002_1024x1024@2x.jpg"> 
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0070/2522/9860/products/product-image-883266993_345x345@2x.jpg?v=1551226643" alt="T1 Smart Wristband Woman Fitness Bracelet Heart Rate Blood Pressure Monitor Fitness Tracker Watch Pedometer Sport Band for IOS" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true">T1 Smart Wristband Woman Fitness Bracelet Heart Rate Blood Pressure Monitor Fitness Tracker Watch Pedometer Sport Band for IOS</div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 9200.50
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 9200.50
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <a class="grid-view-item__link grid-view-item__image-container full-width-link" href="pruebaprod.php">
    <span class="visually-hidden">Kotion EACH G2000 Computer Stereo Gaming Headphones Best casque Deep Bass Game Earphone Headset with Mic LED Light for PC Gamer</span>
  </a>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1160763277348 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1160763277348 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1160763277348 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1160763277348 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1160763277348" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1160763277348" class="grid-view-item__image lazyautosizes lazyloaded" src="inicio_files/product-image-647219130_300x300.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="Kotion EACH G2000 Computer Stereo Gaming Headphones Best casque Deep Bass Game Earphone Headset with Mic LED Light for PC Gamer" data-srcset="imagenes/product-image-647219132_1024x1024@2x.jpg>
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="imagenes/product-image-647219132_1024x1024@2x.jpg" alt="Kotion EACH G2000 Computer Stereo Gaming Headphones Best casque Deep Bass Game Earphone Headset with Mic LED Light for PC Gamer" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true"><a href="pruebaprod.php">Kotion EACH G2000 Computer Stereo Gaming Headphones Best casque Deep Bass Game Earphone Headset with Mic LED Light for PC Gamer</a></div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 20.00
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 20.00
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <p class="grid-view-item__link grid-view-item__image-container full-width-link" href="#">
    <span class="visually-hidden">CRENOVA Video Projector Support Full HD 1080P Wireless Wired Sync Display With WIFI Home Theater Movie LED Projector Beamer</span>
  </p>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1159847215140 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1159847215140 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1159847215140 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1159847215140 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1159847215140" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1159847215140" class="grid-view-item__image lazyautosizes lazyloaded" src="imagenes/product-image-893524820_1024x1024@2x.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="CRENOVA Video Projector Support Full HD 1080P Wireless Wired Sync Display With WIFI Home Theater Movie LED Projector Beamer" data-srcset="imagenes/product-image-893524820_1024x1024@2x.jpg">
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="imagenes/product-image-893524820_1024x1024@2x.jpg" alt="CRENOVA Video Projector Support Full HD 1080P Wireless Wired Sync Display With WIFI Home Theater Movie LED Projector Beamer" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true">CRENOVA Video Projector Support Full HD 1080P Wireless Wired Sync Display With WIFI Home Theater Movie LED Projector Beamer</div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 7200.50
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 7200.50
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <p class="grid-view-item__link grid-view-item__image-container full-width-link" href="#">
  </p>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1159822508068 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1159822508068 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1159822508068 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1159822508068 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1159822508068" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1159822508068" class="grid-view-item__image lazyautosizes lazyloaded" src="imagenes/product-image-909644578_1024x1024@2x.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="ROCK 5A USB Type C Cable For Huawei Mate 20 P20 For Samsung S9 S8 Xiaomi Charging Quick Charge 4.0 USB C Cable Supercharge SFCP" data-srcset="imagenes/product-image-909644578_1024x1024@2x.jpg">
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0070/2522/9860/products/product-image-909644572_345x345@2x.jpg?v=1551195956" alt="ROCK 5A USB Type C Cable For Huawei Mate 20 P20 For Samsung S9 S8 Xiaomi Charging Quick Charge 4.0 USB C Cable Supercharge SFCP" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true">ROCK 5A USB Type C Cable For Huawei Mate 20 P20 For Samsung S9 S8 Xiaomi Charging Quick Charge 4.0 USB C Cable Supercharge SFCP</div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 4200.50
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 4200.50
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <p class="grid-view-item__link grid-view-item__image-container full-width-link" href="#">
  </p>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1159808876580 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1159808876580 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1159808876580 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1159808876580 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1159808876580" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1159808876580" class="grid-view-item__image lazyautosizes lazyloaded" src="imagenes/product-image-909604998_1024x1024@2x.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="New arrival DOOGEE Y8 Android 9.0 Smartphone 6.1" fhd="" 19:9="" display="" 3400mah="" mtk67393gb="" ram="" 16gb="" rom="" 4g="" lte="" mobile"="" data-srcset="imagenes/product-image-909604998_1024x1024@2x.jpg">
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="#"FHD 19:9 Display 3400mAh MTK67393GB RAM 16GB ROM 4G LTE Mobile" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true">New arrival DOOGEE Y8 Android 9.0 Smartphone 6.1"FHD 19:9 Display 3400mAh MTK67393GB RAM 16GB ROM 4G LTE Mobile</div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 1390.50
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 1390.50
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
      <li class="grid__item grid__item--featured-collections small--one-half medium-up--one-third">
        <div class="grid-view-item product-card">
  <p class="grid-view-item__link grid-view-item__image-container full-width-link" href="#">
    <span class="visually-hidden">EDIFIER G4 PRO Gaming Headphone Virtual 7.1 Surround Sound Magic Voice Function 17 million RGB Lights Retractable BoomMicophone</span>
  </p>

  
  

    <style>
  
  
  @media screen and (min-width: 750px) { 
    #ProductCardImage-featured-collections-1159800651812 {
      max-width: 345px;
      max-height: 345.0px;
    }
    #ProductCardImageWrapper-featured-collections-1159800651812 {
      max-width: 345px;
      max-height: 345.0px;
    }
   } 
  
  
    
    @media screen and (max-width: 749px) {
      #ProductCardImage-featured-collections-1159800651812 {
        max-width: 750px;
        max-height: 750px;
      }
      #ProductCardImageWrapper-featured-collections-1159800651812 {
        max-width: 750px;
      }
    }
  
</style>

  

  <div id="ProductCardImageWrapper-featured-collections-1159800651812" class="grid-view-item__image-wrapper product-card__image-wrapper js">
    <div style="padding-top:100.0%;">
      <img id="ProductCardImage-featured-collections-1159800651812" class="grid-view-item__image lazyautosizes lazyloaded" src="inicio_files/product-image-909635370_300x300.jpg" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="EDIFIER G4 PRO Gaming Headphone Virtual 7.1 Surround Sound Magic Voice Function 17 million RGB Lights Retractable BoomMicophone" data-srcset="inicio_files/product-image-909635370_300x300.jpg">
    </div>
  </div>

  <noscript>
    
    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0070/2522/9860/products/product-image-909635370_345x345@2x.jpg?v=1551194868" alt="EDIFIER G4 PRO Gaming Headphone Virtual 7.1 Surround Sound Magic Voice Function 17 million RGB Lights Retractable BoomMicophone" style="max-width: 345.0px;">
  </noscript>

  <div class="h4 grid-view-item__title product-card__title" aria-hidden="true">EDIFIER G4 PRO Gaming Headphone Virtual 7.1 Surround Sound Magic Voice Function 17 million RGB Lights Retractable BoomMicophone</div>

  <!-- snippet/product-price.liquid -->

<dl class="price" data-price="">

  
    <div class="price__vendor">
      <dt>
        <span class="visually-hidden">Vendedor</span>
      </dt>
      <dd>
         
      </dd>
    </div>
  

  <div class="price__regular">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio habitual</span>
    </dt>
    <dd>
      <span class="price-item price-item--regular" data-regular-price="">
        
          
      USD 1350.50
          
        
      </span>
    </dd>
  </div>
  <div class="price__sale">
    <dt>
      <span class="visually-hidden visually-hidden--inline">Precio de oferta</span>
    </dt>
    <dd>
      <span class="price-item price-item--sale" data-sale-price="">
      USD 1350.50
      </span>
      <span class="price-item__label" aria-hidden="true">Oferta</span>
    </dd>
  </div>
</dl>


</div>

      </li>
    
  </ul>

  
    <hr class="hr--invisible" aria-hidden="true">
    <div class="text-center">
      
    </div>
  

</div>




</div><div id="shopify-section-slideshow" class="shopify-section index-section index-section--flush index-section--slideshow"><div data-section-id="slideshow" data-section-type="slideshow-section"><div id="SlideshowWrapper-slideshow" class="slideshow-wrapper" role="region" aria-label="slideshow" aria-describedby="slideshow-info" tabindex="-1">
      <div class="slideshow slideshow--medium slick-initialized slick-slider slick-dotted" id="Slideshow-slideshow" data-autorotate="false" data-speed="5000" data-adapt-height="false" data-slide-nav-a11y="Cargar diapositiva [slide_number]"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3042px;"><div class="slideshow__slide slideshow__slide--slideshow-0 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1521px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" id="slickSlide00" tabindex="-1">
            
              <div class="slideshow__image box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_180x.jpg?v=1551196113 180w 61h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_360x.jpg?v=1551196113 360w 122h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_540x.jpg?v=1551196113 540w 183h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_720x.jpg?v=1551196113 720w 244h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_900x.jpg?v=1551196113 900w 305h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1080x.jpg?v=1551196113 1080w 366h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1296x.jpg?v=1551196113 1296w 439h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1512x.jpg?v=1551196113 1512w 512h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1728x.jpg?v=1551196113 1728w 585h,
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf.jpg?v=1551196113 1920w 650h" data-parent-fit="contain" style="background-position: center center; background-image: url(inicio_files/HTB155SudaLN8KJjSZFKq6z7NVXaf.jpg);">
                <div class="slideshow__overlay"></div>
              <picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_180x.jpg?v=1551196113 180w 61h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_360x.jpg?v=1551196113 360w 122h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_540x.jpg?v=1551196113 540w 183h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_720x.jpg?v=1551196113 720w 244h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_900x.jpg?v=1551196113 900w 305h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1080x.jpg?v=1551196113 1080w 366h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1296x.jpg?v=1551196113 1296w 439h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1512x.jpg?v=1551196113 1512w 512h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1728x.jpg?v=1551196113 1728w 585h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf.jpg?v=1551196113 1920w 650h" sizes="1918.0327868852462px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_180x.jpg?v=1551196113 180w 61h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_360x.jpg?v=1551196113 360w 122h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_540x.jpg?v=1551196113 540w 183h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_720x.jpg?v=1551196113 720w 244h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_900x.jpg?v=1551196113 900w 305h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1080x.jpg?v=1551196113 1080w 366h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1296x.jpg?v=1551196113 1296w 439h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1512x.jpg?v=1551196113 1512w 512h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_1728x.jpg?v=1551196113 1728w 585h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf.jpg?v=1551196113 1920w 650h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="1918.0327868852462px"></picture></div>
            

            <noscript>
              <div class="slideshow__image" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB155SudaLN8KJjSZFKq6z7NVXaf_2048x.jpg?v=1551196113'); background-position: center center;">
                
              </div>
            </noscript>

            <div class="slideshow__text-wrap slideshow__text-wrap--desktop">
              <div class="slideshow__text-content slideshow__text-content--vertical-center text-center">
                <div class="page-width">
                  
</div>
              </div>
            </div>
          </div><div class="slideshow__slide slideshow__slide--1492095993817 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1521px; position: relative; left: -1521px; top: 0px; z-index: 998; opacity: 0;" id="slickSlide01" tabindex="-1">
            
              <div class="slideshow__image js">
                <div class="placeholder-background">
                  
                  <svg class="placeholder-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1052 400"><path d="M727.6 121.3c-8.3 0-15-6.7-15-15s6.7-15 15-15 15 6.7 15 15-6.7 15-15 15zm0-28.1c-7.2 0-13 5.8-13 13s5.8 13 13 13 13-5.8 13-13-5.8-13-13-13zm-183.5 62.1c-8.3 0-15-6.7-15-15s6.7-15 15-15 15 6.7 15 15-6.7 15-15 15zm0-28.1c-7.2 0-13 5.8-13 13s5.8 13 13 13 13-5.8 13-13-5.8-13-13-13zm235.5 236.1c-8.3 0-15-6.7-15-15s6.7-15 15-15 15 6.7 15 15-6.7 15-15 15zm0-28c-7.2 0-13 5.8-13 13s5.8 13 13 13 13-5.8 13-13-5.8-13-13-13zM43.9 47.9c-8.3 0-15-6.7-15-15s6.7-15 15-15 15 6.7 15 15-6.7 15-15 15zm0-28c-7.2 0-13 5.8-13 13s5.8 13 13 13 13-5.8 13-13-5.8-13-13-13zm252.3 236c-8.3 0-15-6.7-15-15s6.7-15 15-15 15 6.7 15 15-6.7 15-15 15zm0-28c-7.2 0-13 5.8-13 13s5.8 13 13 13 13-5.8 13-13-5.8-13-13-13zm706.2-190.7c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zM764.7 283.5c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zM525 40.9c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm37.7 327.7c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zM50.9 276.5c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.5 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.6-6-6-6zM93.6 68.7c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm194.1-13.8c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-14c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm534.9 45c-2.3 0-4.2-1.9-4.2-4.2s1.9-4.2 4.2-4.2c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.5-3.2-3.2-3.2zm-124 31.9c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2s4.2 1.9 4.2 4.2c0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zM544.1 44.1c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.5-3.2-3.2-3.2zM310.2 268.5c-2.3 0-4.2-1.9-4.2-4.2s1.9-4.2 4.2-4.2c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zm-9.1-213.3c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zM26.6 64.9c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zm776.9 268c-2.3 0-4.2-1.9-4.2-4.2s1.9-4.2 4.2-4.2c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.5-3.2-3.2-3.2zm-234.9 13.1c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zm-528.4-75c-2.3 0-4.2-1.9-4.2-4.2s1.9-4.2 4.2-4.2 4.2 1.9 4.2 4.2-1.8 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zm980.9-3.2c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2zM463.5 272c-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2zm0-7.4c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2 3.2-1.4 3.2-3.2-1.5-3.2-3.2-3.2zm564.4-88.1L897.9 9.1c-.4-.5-1.2-.5-1.6 0L766.2 176.4c-.2.3-.3.8-.1 1.2.2.3.5.7.9.7h260.1c.4 0 .7-.3.9-.7.2-.4.1-.8-.1-1.1zm-156.5-16.7l-4.8 1.5c-1.8-13.9 2.7-25.4 13.2-34.1.2-.2.2-.5.1-.7-.2-.2-.5-.2-.7-.1-10.9 9-15.4 20.9-13.5 35.2-.5.2-1.1.4-1.7.5-1.2.4-2.3.8-3.5 1.2-.7-3.3-1.4-6.2-2.2-8.7-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6.8 2.5 1.5 5.4 2.2 8.7-1.7.6-3.4 1.1-5.1 1.7-5.6-22.4-9.8-21.8-35.3-18.4-3.2.4-6.8.9-10.8 1.4-4.1.5-7.1-.2-9.1-2.1-1.4-1.4-2.3-3.3-2.7-5.5l1.8-2.3c-.1.2-.2.5-.1.8.2.5.7.7 1.2.5.5-.2.7-.7.5-1.2-.2-.5-.7-.7-1.2-.5-.1 0-.2.1-.3.2l2.5-3.2c.2 2.5.9 4.6 2.4 6.1 1.5 1.4 3.5 2.2 6.3 2.2.8 0 1.7-.1 2.6-.2.3 0 .5-.3.4-.6s-.3-.5-.6-.4c-3.8.5-6.4-.1-8.1-1.7-1.5-1.5-2.1-3.9-2.2-6.6l4.2-5.4c9.4-.2 18.1-.9 26-2.1.3 0 .5-.3.4-.6 0-.3-.3-.5-.6-.4-7.5 1.2-15.9 1.9-25 2.1l1.3-1.6c.4.5 1 .8 1.6.8.2 0 .5 0 .7-.1 1.1-.4 1.6-1.6 1.2-2.6-.2-.6-.6-1-1.2-1.2l1.3-1.6c9.1-.6 19.9-1.8 29.8-4.2 22.2-5.3 29.6-19.6 35.6-31.2 4.8-9.3 8.4-16.1 18-13.8l-1.3 6.7c-.1.5.2 1.1.8 1.2h.2c.5 0 .9-.3 1-.8l1.3-6.7c3.7.9 7.1 1.6 10.3 2.2l-1.3 6.4c-.1.5.2 1.1.8 1.2h.2c.5 0 .9-.3 1-.8l1.3-6.4c3 .6 5.8 1.1 8.3 1.6.7.1 1.4.3 2.1.4l-1.3 6.5c-.1.5.2 1.1.8 1.2h.2c.5 0 .9-.3 1-.8l1.3-6.5c4 .8 7.4 1.5 10.2 2.3l-1.2 6.2c-.1.5.2 1.1.8 1.2h.2c.5 0 .9-.3 1-.8l1.2-6c5 1.8 8.2 4.3 10.2 9 0 .1.1.2.1.3 1.6 3.9 2.5 9.3 2.8 16.9-1.5.1-3.3.2-5.3.4-.3 0-.5.3-.5.5 0 .3.2.5.5.5 2-.2 3.8-.3 5.2-.4.1 1.3.1 2.7.1 4.2-3.3.2-14.3.8-26.8 3.4-20.1 4.2-34.3 11.1-42.2 20.5-5.8 7-8 15.2-6.7 24.3zm-61.6-36.2c.4 0 .7.3.9.7.2.5-.1 1.1-.6 1.3-.5.2-1.1-.1-1.3-.6l1-1.4zm87.3-112.3l61.2 78.8c-4.5-.2-8.8-.7-12.7-1.9-2.3-5.2-6-7.9-11.5-9.9l.5-2.6c.1-.5-.2-1.1-.8-1.2-.5-.1-1.1.2-1.2.8l-.5 2.4c-2.9-.9-6.3-1.6-10.2-2.3l.4-2.1c.1-.5-.2-1.1-.8-1.2-.5-.1-1.1.2-1.2.8l-.4 2.1c-.7-.1-1.4-.3-2.1-.4-2.5-.5-5.2-1-8.2-1.6l.4-2.2c.1-.5-.2-1.1-.8-1.2-.5-.1-1.1.2-1.2.8l-.4 2.2c-3.2-.6-6.6-1.4-10.3-2.2l.4-2c.1-.5-.2-1.1-.8-1.2-.5-.1-1.1.2-1.2.8l-.4 1.9c-4.8-1.1-8.3-.3-11.1 1.8l-7.3-1.5c-.4-.1-.9.1-1.1.5-.2.3-3.9 7.6-1.2 14.9-5.7 11-13.1 24.2-33.8 29.2-9.1 2.2-19 3.4-27.6 4l83.9-107.5zm-14.6 62.2c-2.4 2.5-4.4 5.9-6.3 9.7-.9-4.6.6-9.1 1.3-10.7l5 1zm-2.9 63.5c9.4-11.3 27.5-17 41-19.9 14.7-3.1 27.4-3.4 27.5-3.4.5 0 1-.5 1-1-.2-10.1-1-17.1-2.7-22.2 3.6.9 8.2 1.5 13.4 1.6l30.5 39.3c-10.9 5.2-22 9.7-33.4 13.5-15.6 5.2-25.8 5.8-36.7 6.4-11.7.6-24.8 1.4-46.9 7.9-1.1-8.4 1-15.9 6.3-22.2zm-89.5 10.4c.1.4.1.9.2 1.3l1.8-2.3 2.9-3.8c.6 1.9 1.5 3.7 2.9 5 2.4 2.4 6.1 3.3 10.7 2.7 4-.5 7.6-1 10.8-1.4 25.6-3.5 27.9-3.7 33.1 17.1-15.8 5-27.4 8.2-35.6 10.2h-15.5c-5.7-8-8.2-19.1-9.4-29.6l-1.8 2.2c1.2 9.7 3.6 19.4 8.6 27.4h-29.9l21.2-27.4c.1-.5.1-.9 0-1.4L767 177.2l23.1-29.8zm85.1 28.8l6.8-2.5.9 2.5h-7.7zm-2.9 0h-28.7c7.8-3 14.7-4.9 20.6-6.9 6.1-2.1 11.1-3.8 14.6-4.8l2.9 8.1-9.4 3.6zm152.8 0h-140l-4.4-12.1c20.6-5 33.8-5.7 47.8-6.4 2.1-.1 4.3-.2 6.5-.4 8.8-.5 30.2-5.7 59.6-20.5l-1.2-1.6c-28.9 14.5-49.9 19.6-58.5 20.1-2.2.1-4.4.2-6.5.3-14.3.7-27.8 1.4-49 6.6-.1 0-.2 0-.3.1h-.1c-3.7.9-8.9 2.8-15.4 5-7.4 2.5-16.6 5.8-26.9 8.8h-11.2c9.6-3 22.4-6.4 39.2-12 27.6-9.3 42.6-10.2 55.7-10.9 11-.6 21.4-1.2 37.2-6.5 11.7-3.9 23-8.5 34.1-13.8l1.8 2.3 1.2 1.6c.3-.1.6-.3.9-.4l.1.1 31.5 40.7-31.5-40.6c-.3.2-.6.3-.9.4l30.3 39.2z"></path><path d="M855 149.4c.1.2.3.3.4.3.1 0 .2 0 .2-.1.2-.1.3-.4.2-.7-6.3-12.2-16.4-10.7-34.7-8.1-1.4.2-2.9.4-4.4.6-.3 0-.5.3-.4.6 0 .3.3.5.6.4 1.5-.2 3-.4 4.4-.6 17.9-2.6 27.8-4 33.7 7.6zm28.3-25.4c.1.1.3.2.4.2.1 0 .2 0 .3-.1 12.1-8.1 30.3-13.5 53.9-15.9.3 0 .5-.3.4-.5 0-.3-.3-.5-.5-.4-23.8 2.4-42 7.8-54.3 16-.3.2-.3.5-.2.7zm3.1-30.9c.3-.1.4-.4.3-.6-.1-.3-.4-.4-.6-.3-3 1-5.5 2.9-7.2 5.5-1.8 2.8-11.5 16.9-25.4 22.2-4.9 1.8-10.4 3.4-16.4 4.5-.3.1-.4.3-.4.6 0 .2.3.4.5.4h.1c6.1-1.2 11.6-2.7 16.5-4.6 14.2-5.4 24.1-19.7 25.9-22.6 1.6-2.4 4-4.2 6.7-5.1zm4.3-.6c.4 0 .9 0 1.3.1l22.1 2.6h.1c.2 0 .5-.2.5-.4 0-.3-.2-.5-.4-.6l-22.1-2.7c-.5-.1-.9-.2-1.4-.2-.3 0-.5.3-.5.6-.1.2.1.6.4.6zm26.5 2.5c0 .3.2.5.4.6 4.6.5 8.3 3.9 9.2 8.4l.3 1.6c0 .2.3.4.5.4h.1c.3-.1.4-.3.4-.6l-.3-1.6c-1-4.9-5.1-8.6-10.1-9.2-.2 0-.4.2-.5.4z"></path><ellipse transform="rotate(-20.016 944.06 109.69)" cx="944.1" cy="109.7" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 939.31 110.263)" cx="939.4" cy="110.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 914.644 113.925)" cx="914.7" cy="113.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 924.99 112.103)" cx="925" cy="112.1" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 928.9 111.65)" cx="928.9" cy="111.7" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 909.974 115.297)" cx="910" cy="115.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 899.37 118.964)" cx="899.4" cy="119" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 894.725 120.853)" cx="894.7" cy="120.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 874.344 136.748)" cx="874.4" cy="136.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 881.238 129.294)" cx="881.3" cy="129.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 885.095 126.307)" cx="885.1" cy="126.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 872.082 140.004)" cx="872.1" cy="140" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 868.997 149.4)" cx="869" cy="149.4" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 868.683 152.79)" cx="868.7" cy="152.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 855.214 156.368)" cx="855.2" cy="156.4" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 853.88 152.703)" cx="853.9" cy="152.7" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 847.56 144.56)" cx="847.6" cy="144.6" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 843.473 142.673)" cx="843.5" cy="142.7" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 827.555 143.41)" cx="827.6" cy="143.4" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 832.317 142.79)" cx="832.3" cy="142.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 811.065 145.516)" cx="811.1" cy="145.5" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 816.355 144.84)" cx="816.4" cy="144.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 800.762 142.79)" cx="800.8" cy="142.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 930.208 105.774)" cx="930.3" cy="105.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 929.345 101.854)" cx="929.4" cy="101.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 927.505 98.355)" cx="927.6" cy="98.4" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 925.4 95.16)" cx="925.4" cy="95.2" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 921.753 93.307)" cx="921.8" cy="93.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 917.842 92.26)" cx="917.9" cy="92.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 913.847 91.802)" cx="913.8" cy="91.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 910.554 91.235)" cx="910.6" cy="91.3" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 906.513 90.77)" cx="906.5" cy="90.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 901.752 90.09)" cx="901.8" cy="90.1" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 897.63 89.598)" cx="897.6" cy="89.6" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 893.483 89.146)" cx="893.5" cy="89.2" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 889.072 88.807)" cx="889.1" cy="88.8" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 884.517 89.494)" cx="884.5" cy="89.5" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 880.373 91.976)" cx="880.4" cy="92" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 877.565 94.954)" cx="877.6" cy="95" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 872.024 102.866)" cx="872" cy="102.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-20.016 869.188 105.844)" cx="869.2" cy="105.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 861.102 113.444)" cx="861.2" cy="113.5" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 857.688 115.7)" cx="857.8" cy="115.7" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 848.15 119.605)" cx="848.2" cy="119.6" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 843.256 120.825)" cx="843.5" cy="120.9" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 834.034 122.542)" cx="834.4" cy="122.6" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 829.758 123.153)" cx="830.1" cy="123.2" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 818.873 124.066)" cx="819.2" cy="124.1" rx=".9" ry=".9"></ellipse><ellipse transform="rotate(-6.8 814.146 124.62)" cx="814.4" cy="124.6" rx=".9" ry=".9"></ellipse><path d="M874.7 100.6c.2 0 .5 0 .7-.1.5-.2.9-.6 1.1-1.1.2-.5.3-1 .1-1.6-.2-.5-.6-.9-1.1-1.1-.5-.2-1-.3-1.6-.1-1.1.4-1.6 1.6-1.2 2.6.4.9 1.1 1.4 2 1.4zm-.4-3c.1 0 .2-.1.4-.1.1 0 .3 0 .4.1.2.1.4.3.5.6.1.3.1.5 0 .8-.1.2-.3.4-.6.5-.5.2-1.1-.1-1.3-.6-.2-.5.1-1.1.6-1.3zm-10.2 13.5c.3.1.6.2.9.2.2 0 .5 0 .7-.1 1.1-.4 1.6-1.6 1.2-2.6-.2-.5-.6-.9-1.1-1.1-.5-.2-1-.3-1.6-.1-.5.2-.9.6-1.1 1.1-.2.5-.3 1-.1 1.6.3.4.6.8 1.1 1zm0-2.3c.1-.2.3-.4.6-.5.1 0 .2-.1.4-.1.1 0 .3 0 .4.1.2.1.4.3.5.6.2.5-.1 1.1-.6 1.3-.3.1-.5.1-.8 0-.2-.1-.4-.3-.5-.6-.2-.2-.2-.5 0-.8zm-11.3 10.4c.2 0 .5 0 .7-.1 1.1-.4 1.6-1.6 1.2-2.6-.4-1.1-1.6-1.6-2.6-1.2-.5.2-.9.6-1.1 1.1-.2.5-.3 1-.1 1.6.3.7 1.1 1.2 1.9 1.2zm-.9-2.5c.1-.2.3-.4.6-.5.1 0 .2-.1.4-.1.4 0 .8.3 1 .7.2.5-.1 1.1-.6 1.3-.5.2-1.1-.1-1.3-.6-.3-.2-.3-.5-.1-.8zm-13.8 6.4c.3.1.6.2.9.2.2 0 .5 0 .7-.1.5-.2.9-.6 1.1-1.1.2-.5.3-1 .1-1.6-.2-.5-.6-.9-1.1-1.1-.5-.2-1-.3-1.6-.1-1.1.4-1.6 1.6-1.2 2.6.2.5.6.9 1.1 1.2zm.5-2.8c.1 0 .2-.1.4-.1.1 0 .3 0 .4.1.2.1.4.3.5.6.1.3.1.5 0 .8-.1.2-.3.4-.6.5-.3.1-.5.1-.8 0-.2-.1-.4-.3-.5-.6-.2-.6.1-1.2.6-1.3zm-13.1 1.4c-.5-.2-1-.3-1.6-.1-1.1.4-1.6 1.6-1.2 2.6.3.8 1.1 1.3 1.9 1.3.2 0 .5 0 .7-.1.5-.2.9-.6 1.1-1.1.2-.5.3-1 .1-1.6-.2-.4-.5-.8-1-1zm0 2.3c-.1.2-.3.4-.6.5-.5.2-1.1-.1-1.3-.6-.2-.5.1-1.1.6-1.3.1 0 .2-.1.4-.1.1 0 .3 0 .4.1.2.1.4.3.5.6.2.2.2.5 0 .8zm30.3 35.3c-1 .3-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.5-.2.8-.5 1-1 .2-.4.2-1 .1-1.4-.2-.5-.5-.8-1-1-.4-.3-.9-.3-1.4-.1zm1.4 2.1c-.1.2-.3.4-.5.4-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.1.3.1.5 0 .7zm13.2-4.3c-.4-1-1.4-1.5-2.4-1.1-1 .3-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.5-.2.8-.5 1-1 .2-.5.3-1 .1-1.4zm-1 1c-.1.2-.3.4-.5.4s-.4.1-.7 0c-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.1.2.1.5 0 .7zm2.5-13.5c-.3-1-1.4-1.5-2.4-1.1-1 .4-1.5 1.4-1.1 2.4.3.8 1 1.2 1.7 1.2.2 0 .4 0 .6-.1 1.1-.4 1.6-1.4 1.2-2.4zm-1.4 1.4c-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.1.5-.1 1-.5 1.1zm8.5-12.4c.2-.4.2-1 .1-1.4-.3-1-1.4-1.5-2.4-1.1-1 .4-1.5 1.4-1.1 2.4.3.8 1 1.2 1.7 1.2.2 0 .4 0 .6-.1.5-.3.9-.6 1.1-1zm-.9-.5c-.1.2-.3.4-.5.4-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.1.3.1.5 0 .7zm10.5-11.3c-1 .4-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.5-.2.8-.5 1-1 .2-.4.2-1 .1-1.4-.4-1-1.5-1.5-2.4-1.1zm1.4 2.1c-.1.2-.3.4-.5.4-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.1.2.1.4 0 .7zm14.9-8.3c-.4-.2-1-.2-1.4-.1-.5.2-.8.5-1 1-.2.4-.2 1-.1 1.4.3.8 1 1.2 1.7 1.2.2 0 .4 0 .6-.1 1-.4 1.5-1.4 1.1-2.4-.1-.4-.4-.8-.9-1zm-.5 2.5c-.4.2-.9-.1-1.1-.5-.1-.2-.1-.4 0-.7.1-.2.3-.4.5-.4.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.2.4 0 .9-.5 1.1zm17.1-5.7c-.3-1-1.4-1.5-2.4-1.1-1 .4-1.5 1.4-1.1 2.4.3.8 1 1.2 1.7 1.2.2 0 .4 0 .6-.1 1-.3 1.5-1.4 1.2-2.4zm-1.5 1.5c-.4.2-.9-.1-1.1-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.2.4 0 .9-.5 1.1zm14.4-4.7c-.4-.2-1-.2-1.4-.1-.5.2-.8.5-1 1-.2.4-.2 1-.1 1.4.3.8 1 1.2 1.7 1.2.2 0 .4 0 .6-.1 1-.3 1.5-1.4 1.1-2.4-.1-.4-.4-.7-.9-1zm-.5 2.5c-.4.2-.9-.1-1.1-.5-.1-.2-.1-.4 0-.7.1-.2.3-.4.5-.4.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.2.5 0 1-.5 1.1zM853 147.5c-.2-.5-.5-.8-1-1-.4-.2-1-.2-1.4-.1-.5.2-.8.5-1 1-.2.4-.2 1-.1 1.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.9-.4 1.4-1.5 1.1-2.4zm-1.5 1.4c-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.1-.2-.1-.4 0-.7.1-.2.3-.4.5-.4.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.2.4 0 .9-.5 1.1zm-11.4-7.2c-.3-1-1.4-1.5-2.4-1.1-1 .4-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.5-.2.8-.5 1-1 .3-.4.3-.9.1-1.4zm-.9 1c-.1.2-.3.4-.5.4-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.1.3.1.5 0 .7zm-17-.4c-.4-.2-1-.2-1.4-.1-1 .3-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1 1-.3 1.5-1.4 1.1-2.4-.2-.4-.6-.8-1-1zm-.5 2.5c-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.1 0 .2 0 .4.1s.4.3.4.5c.2.5-.1 1-.5 1.1zm-14.8 0c-.4-1-1.4-1.5-2.4-1.1-1 .3-1.5 1.4-1.1 2.4.2.5.5.8 1 1 .2.1.5.2.8.2.2 0 .4 0 .6-.1.5-.2.8-.5 1-1 .2-.5.2-1 .1-1.4zm-1 1c-.1.2-.3.4-.5.4-.2.1-.4.1-.7 0-.2-.1-.4-.3-.4-.5-.2-.4.1-.9.5-1.1.1 0 .2-.1.3-.1.3 0 .7.2.8.6.1.2.1.5 0 .7zM986.7 210.2h-170c-.6 0-1 .4-1 1v170c0 .6.4 1 1 1h170c.6 0 1-.4 1-1v-170c0-.5-.4-1-1-1zm-126.5 104c2.3.8 33.8 12.3 71.3 30.6 8.6 4.2 16.7 8.4 24.1 12.3v.1c.1.1.3.2.4.2h.1c8.7 4.6 16.4 9 22.8 12.7.1.1.3.2.4.2.1 0 .2 0 .3-.1-.1.1-.1.1-.2.1 2.3 1.3 4.3 2.5 6.3 3.6v6.2h-34.4c-.1 0-.2.1-.3.1h-.2c-.1 0-.3-.1-.4-.1h-10.7c-8.5-3-16.8-6.7-24.7-10.6-22.8-11.2-46.8-27.4-67.3-41.8-.1-.1-.2-.2-.3-.2-2.9-2-5.7-4-8.5-6-8.1-5.7-15.2-10.8-21.2-14.7v-4.6c5 2.8 10.3 6.5 16.5 10.8.1.1.2.1.3.1.2 0 .3-.1.4-.2.2-.2 0-.5-.2-.7-6.5-4.5-12-8.3-17-11.1v-.5c1 .2.9.3 1.3.5 28.5 12.1 39.7 13.1 41.2 13.1zm27.3-46.9c-2.6-3.4-3.9-6.7-4.5-9.6 3.6 4.8 8.4 7.7 9.4 8.3.2 2.1.5 4.2.9 6.5v.1c0 .1 0 .3.1.4.4 2.6 1 5.3 1.7 8.1 0 .1.1.1.1.2.1.1.2 0 .4 0-.1 0-.3.2-.4.1 1.4 5.6 3.4 11.7 6.1 17.7.6.2.9.3 1 .3.2 0 .4.2.4.5 0-.2-.2-.4-.4-.4 0 0-.4-.1-1-.2-2.7-.7-10.6-3.2-18.6-8.3-.6-.8-1.1-1.4-1.5-2l9.7-1.1c.4 0 .8-.4.9-.8s-.1-.9-.5-1.1c-6.8-3.8-10.1-14.1-11.1-17.8l6.5.8c.4 0 .8-.1 1-.5.1-.4 0-.9-.2-1.2zm-4.8-17.2l4.3 2.1c.3.1.6.1.9 0s.5-.4.5-.7c.4-2.1-2.5-8.6-3.7-11 .4-2.1 1.8-4.4 3.5-6.6-1.1 7.1 3.1 13.6 3.7 14.5-.3 4.4-.4 10 .2 16.4-1.8-1.2-6.6-4.5-9.6-9.4-.2-2.3 0-4.2.2-5.3zm14.6 1.6c.4.3.9.3 1.3-.1l8.4-7.9c.2.6.4 1.3.6 2-2.2 2.7-10.5 13-13.7 24.3-1.2-8.8-1.2-16.4-.8-21.9.4-1.5 2.9-9.8 7.1-14.3 1 1.5 1.8 2.9 1.9 3.5.3 1.6-2.7 8.6-5 13.1-.3.5-.2 1 .2 1.3zm42.3-20.1c6.3 3.4 10.1 9.3 14.1 15.5 4.4 6.7 8.9 13.7 16.9 17.6.1.1.3.1.4.1.4 0 .7-.2.9-.6.2-.5 0-1.1-.5-1.3-7.5-3.7-11.9-10.4-16.1-16.9-1.7-2.7-3.5-5.4-5.5-7.9 1.9 1.4 3.7 2.7 5.6 4.1 4.2 3.1 8.4 6.3 13.6 9.3.3.2.6.4.9.5 1.4.8 2.7 1.6 4.2 2.3.4.2.9.4 1.3.6 3.5 1.7 7.1 3 10.1 4.2V353c-17-9.3-41-22.1-70.2-35.2l-1 .7.9-.7 8.9-6.9c.4-.3.5-.8.3-1.2-.2-.4-.7-.7-1.1-.6l-7.5 1.6 5.2-7.9c.3-.4.2-.9-.1-1.2-.3-.3-.8-.4-1.2-.1l-5.5 3.4c1.4-2.6 3.3-5.8 3.9-6.8 3.7-6.3 1.5-14.7-.9-23.6-.6-2.2-1.2-4.5-1.7-6.7-.1-.4-.4-.7-.9-.8-.4 0-.8.2-1 .5l-6.8 13.4c.3-3.4 1.4-9.2 4.9-17.4 1.8-4.2-2.4-18.4-3.3-21.4.7-.8 1.3-1.5 1.7-2 1.6-1.9 5.8-5.8 11.2-8.3 6.7-3.2 12.8-3.2 18.3-.2zM958 356.2l13.1-9c.8.4 1.6.9 2.5 1.3l-13.1 9c-.9-.4-1.7-.8-2.5-1.3zm-6.9-3.6l13.1-9c2 1.1 4 2.1 5.9 3.1l-13.1 9c-1.9-1-3.9-2.1-5.9-3.1zm-51.6-41.9c0-.2-.1-.4-.3-.5l-1.4-1.2 4.6-.1c.5 0 .8-.3 1-.8.1-.4-.1-.9-.5-1.1-8.7-4.7-14.5-9.9-18-13.7 8.1 4.7 15.6 6.9 16.9 6.9.3 1 1 1.2 1 1.8v.2c.6 1.1 1.1 2.3 1.7 3.5 0 .1 0 .1.1.2 1.7 3.1 3.6 6.3 5.7 9.5-3.6-1.6-7.2-3.2-10.8-4.7zm-5.3-38.2c2.5-11.4 10.8-22.2 13.6-25.7.4 1.4.8 2.9 1.1 4.4-2.5 2.7-11.7 13.8-13.7 26.7-.3-1.8-.7-3.6-1-5.4zm1.8 8.5c.7-13.1 10.1-24.8 13.2-28.5 1 4.4 1.5 8.6.8 10.1-6.5 15.1-5.1 22.2-5 22.5.1.4.4.7.9.8.4 0 .8-.2 1-.5l7.4-14.6c.4 1.4.7 2.8 1.1 4.1.1.2.1.4.2.6-.9 4-4.4 17.4-12.4 25.5-3.3-6.9-5.6-13.6-7.2-20 0 .1 0-.1 0 0zm20.5 16c-1.1 1.8-5.8 10.2-5.8 10.3-.2.4-.2.9.2 1.2.3.3.8.4 1.2.1l5-3.1-4 6.1c-.2.3-.2.8 0 1.1.2.3.6.5 1 .4l5.6-1.2-6.3 4.8c-.6-.3-1.3-.6-1.9-.8.1-.1 0-.3 0-.5-2.2-3.3-4.2-6.6-6-9.8 6.3-5.5 10.6-14.7 12.4-19.2.5 4 .3 7.6-1.4 10.6zm-11.5 7.7c-.5-.9-.9-1.9-1.4-2.8 7.4-7.3 11.1-18.9 12.5-24.4.6 2.4 1.2 4.7 1.5 6.9-1.3 3.4-5.8 14.3-12.6 20.3zm-2.5-3c0-.1.1-.2.1-.2 0 .1-.1.2-.1.2zm9.5 16.6l-13.4 9.2-2.7-1.2 13.4-9.2 2.7 1.2zm1.1.5c.9.4 1.8.8 2.6 1.2l-13.2 9.1c-.1 0-.1.1-.1.1l-2.7-1.2 13.4-9.2zm3.7 1.7c2.1 1 4.2 1.9 6.3 2.9l-13.3 9.1c-2.2-1-4.3-1.9-6.4-2.8l13.4-9.2zm7.4 3.3c.9.4 1.7.8 2.6 1.2l-13.2 9.1c-.9-.4-1.8-.8-2.6-1.2l13.2-9.1zm3.6 1.7c2.1 1 4.2 2 6.2 2.9l-13.2 9.1c-2.1-1-4.2-2-6.3-2.9l13.3-9.1zm7.3 3.5c.9.4 1.7.8 2.6 1.2l-13.1 9.1c-.9-.4-1.7-.8-2.6-1.2l13.1-9.1zm3.6 1.7c2.1 1 4.1 2 6.1 3l-13.1 9c-2.1-1-4.1-2-6.2-3l13.2-9zm7.2 3.5c4.8 2.4 9.4 4.7 13.8 7l-13.1 9c-4.4-2.3-9-4.6-13.8-6.9l13.1-9.1zm14.7 7.5c.8.4 1.7.9 2.5 1.3l-13.1 9c-.8-.4-1.7-.9-2.5-1.3l13.1-9zm-67.1-98.2c.4-3.3.8-5.1.9-5.2 0 0 .8-3.6 3.6-7.7.6.8 1.1 1.6 1.6 2.3-2.9 2.9-4.9 7.3-6.1 10.6zm-.1-5.4s-.1.3-.2.7c-.4-2.7-.7-7.2 1.1-10.8.1-.1.1-.3 0-.4.3-.2.5-.5.7-.6.7.9 1.5 1.9 2.2 2.9-2.9 4.2-3.8 8-3.8 8.2zm-.7 3.5c-.2 1.4-.4 3.1-.6 5.1-1.4-2.5-4.3-8.5-2.4-14.5 1.1-1.2 2.2-2.4 3.2-3.3-2 5.6-.3 12-.2 12.7zm-4.8 44.5l-8.6 1c-.3 0-.6.2-.8.5s-.1.7 0 .9c.2.4 5.6 9.7 20.2 18.4l-3.5.1c-.4 0-.8.3-.9.7-.1.3-.1.6.1.9-8.5-3.5-17.3-7-26.3-10.5 3.2-6.7 7.6-14.6 12.8-21.8 1.6 3.5 3.9 7.2 7 9.8zm20.4 30.6l-13.4 9.3c-17.2-7.3-29.6-12-33.1-13.3.1-.2.2-.5.3-.7.9-2.3 2.7-6.7 5.2-12 14.4 5.4 28.1 11 41 16.7zm-90.6 63.5v-59.5c12 4.2 26.9 8.2 28.8 8.7-1.7-1.2-3.3-2.3-4.9-3.5-5.9-1.7-15.9-4.5-23.9-7.4v-9.2c6 3.9 12.6 8.7 20.1 13.9l3.9 2.7c1.6 1.1 3.2 2.3 4.9 3.4h.5-.5c20.5 14.4 44.6 30.8 67.6 42 6.4 3.2 13.1 5.8 20 8.8H817.7zm0-79.5c-.1 0-.2-.1-.3-.1.1.1.2.1.3.1zm-1 0v-.3l.1.1-.1.2.1 1.2c.2.1.4.3.6.4-.3-.1-.7-.2-.7-.4v-1.2zm170 69l-1 .7v1.3c0-.2-.8-.4-1.1-.6l-1.4.9 1.4-.9 1.1-.7 1-.7v-1.2 1.2zm0-13.9v1.2l-1 .7v3.1l-8.6 5.9.9.6 7.7-5.3v-.1l1-.6V360v1.2l-1 .7v3.1l-5.3 3.6.9.6 4.4-3v-.1l1-.6v-1.2 1.2l-1 .7v2.9l-.1.1-2 1.4c-.8-.4-1.6-.9-2.4-1.4-.3-.2-.6-.4-1-.6-.8-.4-1.6-.9-2.4-1.4-.3-.2-.6-.4-1-.6-.8-.4-1.6-.9-2.4-1.4-.3-.2-.6-.4-1-.5-3.7-2.1-7.8-4.4-12.1-6.7l13.1-9 .4-.3-.4.3c4 2.2 7.1 4.2 11.1 6.1.2.3 1.2.4 1.2.7zm0-96.3l-.1-.1v-.1l-.9-.3v-.1c0 .1 1 .2 1 .3v.3zm0-2.1c0-.1 0-.1 0 0v-.2c0-.1-.7-.2-1-.3v-.1c-3-1-5.7-2.1-8.7-3.5-.6-.3-1.2-.5-1.8-.8-1.4-.7-2.8-1.5-4.1-2.2-3.9-2.3-7.5-5-11.3-7.8-3.4-2.5-6.8-5-10.6-7.4-2.6-1.8-5.5-3.6-8.6-5.3-13.8-7.5-27.7 3.8-31.9 8.8-.5.6-1.2 1.5-2.1 2.5-.1.1-.1.2-.1.2l-5.4 5.1c1.5-3.5 3.2-7.7 2.8-9.5-.5-2.9-7.2-11.2-8-12.1-.2-.2-.4-.3-.7-.4-.3 0-.5.1-.7.2-.4.4-10.6 8.7-11.8 15.8 0 .2 0 .4.1.6 1.4 3 2.8 6.5 3.4 8.5l-3.8-1.9c-.3-.1-.6-.1-.8 0-.3.1-.5.3-.6.6-.1.4-2.7 8.6 3.6 18.3l-5.7-.7c-.3 0-.6.1-.9.3-.2.2-.3.6-.2.9.1.3.7 3.4 2.3 7.2-.2.1-.4.2-.5.3-5.5 7.4-10 15.7-13.3 22.7-.7-.3-1.4-.5-2.1-.8-.5-.2-1.1.1-1.3.6s.1 1.1.6 1.3c.6.2 1.3.5 1.9.7-2.5 5.3-4.2 9.6-5.2 12-.2.4-.3.8-.4 1-2.7-.3-14.3-2-39.9-12.7-.7-.3-1.1-.6-2.1-.8v-86.4h168v44.6c0 .1 1 .2 1 .4v.3z"></path><path d="M986.7 357v-1.3c0-.2-1-.4-1-.6v1.4l-12 8.2c.3.2.6.4.9.5l11.1-7.6v-.1l1-.5zm-140.9-35.6c2.7 1.9 5.4 3.8 8.3 5.8.1.1.2.1.3.1.2 0 .3-.1.4-.2.2-.2.1-.5-.1-.7-2.8-2-5.6-3.9-8.3-5.8l-2.2-1.6c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7l2.2 1.6zm105.3 57.9c-12.3-4.3-22.7-8.5-31.8-13-20.5-10-41.2-23.8-57-34.6-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7 15.8 10.9 36.5 24.7 57.1 34.8 9.1 4.4 19.4 8.9 31.6 12.9h.6c.1 0 .2 0 .2-.1h.1c.1 0 .1-.1.1-.2.1-.1 0-.5-.3-.6zm-56-97.8c0-.1-.1-.3-.1-.4v.1c0 .1 0 .2.1.3zM776.7 224.3L648 60.4c-.4-.5-1.2-.5-1.6 0l-128.7 164c-.3.4-.3.9 0 1.2l128.7 164c.2.2.5.4.8.4s.6-.1.8-.4l128.7-164c.3-.4.3-.9 0-1.3zm-129.5 163l-87.1-111 13.9 4.1h.3c.4 0 .8-.3 1-.7l17.2-57.6c2.9 4.3 10.5 16.8 17.5 35.4 8.5 22.6 13.8 34.7 31.1 41.9 13.2 5.5 34.3 8.1 67 10.4l-60.9 77.5zM543.5 255.2l33.9 10.1-1.9 6.2-25.1-7.5-6.9-8.8zm5.8-61.8l-3.9-1.2 4.3-5.5 24.6 7.3c3.4 2.9 6.8 6.1 10.3 9.8l-24.7-7.4c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l26.3 7.8c2.5 2.7 4.9 5.6 7.3 8.7-.1 0-.2.1-.3.1l-50.5-15.1.5-3.7 1.9-2.4 4.3 1.3h.1c.2 0 .4-.1.5-.4.1.2-.1-.1-.4-.2zm1.1-7.5l4.4-5.6c4.8 2.7 10.9 6.7 17.6 12.2l-22-6.6zm38 42.6l-18.7-5.6c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l18.7 5.6-1.9 6.2-47.2-14.1 1-6.5 22.6 6.7h.1c.2 0 .4-.1.5-.4.1-.3-.1-.5-.3-.6l-22.7-6.8 1-6.5 49.1 14.7-1.9 6.4zm-8.6 28.7l-44-13.1 1-6.5 37.1 11.1h.1c.2 0 .4-.1.5-.4.1-.3-.1-.5-.3-.6l-37.3-11.1 1-6.5 46 13.7-4.1 13.4zm4.3-14.3L538 229.1l1-6.5 47 14-1.9 6.3zm6.4-21.6l-49.3-14.7 1-6.5 50.2 15-1.9 6.2zm-50.7-21.9l.5.1-1 6.5-.7-.2c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l.9.3-1 6.5-.7-.2c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l.9.3-1 6.5-.7-.2c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l.9.3-1 6.5-.7-.2c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l.9.3-1 6.5-.6-.2c-.3-.1-.5.1-.6.3-.1.3.1.5.3.6l.8.2-.9 6-14.2-17.9 20.1-25.6zm-4.2 45.7l43.9 13.1-1.9 6.2-35.2-10.5-6.8-8.7v-.1zm39.6 27.4l-1.7 5.7-15.6-4.7-6.4-8.1 23.7 7.1zm36.6-15.6c-8-21.3-17-34.7-18.7-37.2l1.2-4.1c5.7 7.6 11 16.5 15.7 26.8 2.4 5.4 4.5 10.4 6.3 14.9 13.6 32.9 17.5 42.5 95.9 47.1l-2.8 3.6c-78-5.6-82.6-11.2-97.6-51.1zm6.4-.4c-1.8-4.4-3.9-9.5-6.4-14.9-16.2-36.1-41.5-54.7-55.8-62.8l41.1-52.4c-1.8 4.7-3.5 8.8-5 12.4-7.8 19.1-10.7 26.2-2.3 39 10.7 16.1 27.2 32.1 41.5 28.4 6.1-1.6 10.1-6.7 10.8-13.9.4-4.2.7-8.8 1-13.6 1-15.5 2.3-34.9 7-55.8 3.8-16.9 12.7-16.1 26-15 2.3.2 4.6.4 6.9.5l3.4 4.3c-1.5 12.4-5.2 44.2-6.2 66.8-3 70 9.2 77.6 32.7 85.8 8.9 3.1 15.6 7.4 20.1 12.7l-19.3 24.6c-78.4-4.7-82.2-13.9-95.5-46.1zm-6.8-148.2c24.6 5.9 34.3 12.3 36.8 14.2-4.8 21.1-6 40.5-7 56.1-.3 4.8-.6 9.3-1 13.6-.6 6.3-3.9 10.8-9.3 12.1-8.7 2.2-23.6-3.9-39.3-27.6-.5-.7-.9-1.4-1.3-2.1 10.6 15.3 22.4 24.1 32.3 24.1h1.1c.3 0 .5-.3.5-.5 0-.3-.3-.5-.5-.5-10.4.7-23.3-9.2-34.5-26.6-.2-.2-.5-.3-.7-.1-3.6-8.7-.7-15.7 5.7-31.3 2.1-5 4.6-11.2 7.3-18.5l9.9-12.9zm70-2.1c-1.7-.1-3.5-.3-5.1-.4-13.1-1.1-23.6-2-27.9 15.5-3-2.2-12.7-8.3-36.3-14l35.1-44.8 34.2 43.7zm32.3 157.1c-23.3-8.2-34.4-15.2-31.4-83.9.9-21.4 4.3-51.1 5.9-64.6L774.6 225l-40.3 51.3c-4.6-5.4-11.5-9.8-20.6-13z"></path><path d="M632.9 193.5c.2 0 .3-.1.4-.2 1.5-2.2 2.5-4.9 2.8-8 .3-3.6.6-7.6.9-11.4 0-.3-.2-.5-.5-.5-.2 0-.5.2-.5.5-.3 3.8-.6 7.7-.9 11.4-.3 2.9-1.1 5.4-2.6 7.5-.2.2-.1.5.1.7.1-.1.2 0 .3 0zm4.2-28.6s.1 0 0 0c.3 0 .5-.2.5-.5.7-9.7 1.8-21.4 4-34.1 0-.3-.1-.5-.4-.6-.3 0-.5.1-.6.4-2.3 12.7-3.3 24.4-4.1 34.2.1.3.4.5.6.6zM508.7 10.2h-183c-.6 0-1 .4-1 1v181c0 .6.4 1 1 1h183c.6 0 1-.4 1-1v-181c0-.5-.4-1-1-1zm-1 181h-181v-179h181v16H504c-.6 0-1.3.6-1.3 1.1v3.9h-91c-2.5-3-3.7-4.6-3.7-4.7-.2-.4-.7-.6-1.1-.5l-10.8 3.1c-.3.1-.5.2-.6.5s-.2.6-.1.8c0 .1.1-.3.3.7h-7v-3.9c0-.6-.4-1.1-.9-1.1h-17.3c-.6 0-.7.6-.7 1.1v3.9h-25.1c-1.8 0-2.9 1.3-2.9 3.2v15.2c0 12.1-1.5 24.4-2.8 37.5-1.4 14.3-3 29-3 44.5 0 12.5 2.3 17.8 5.9 25.8 1 2.3 2.3 4.9 3.6 8 0 .1.1.2.1.3.1.2 0 .5.1.7 2.3 5.2 7.6 8.9 13.6 8.9h148.4v14zM417.6 52.5l5.7-7.4 4.1 3.1 4.1 3.1-5.7 7.4-8.2-6.2zm6.9 7.8l-.8 1-3.3-2.5.8-1 3.3 2.5zm-8.1-6.2l3.3 2.5-.8 1-3.3-2.5.8-1zm-18.6-21.3l9-2.6c1.3 1.9 5.8 7.8 14.9 13.8l-5.6 7.3c-12.9-9.2-17.1-16.1-18.3-18.5zm26.7 10.7l.7-1 3.3 2.5-.7 1-3.3-2.5zm4.8 3.7l.7-1 3.3 2.5-.7 1-3.3-2.5zm3.7 5.4l10.4 8-2.1 2.7-3.6 4.7-10.4-8 5.7-7.4zm-.9 14.1c.1-.1.1-.2.2-.3l4.2 3.2-.5.7c-.3.4-.3 1.1.2 1.4.2.1.4.2.6.2.3 0 .6-.1.8-.4l9.1-11.9c.3-.4.3-1.1-.2-1.4-.4-.3-1.1-.3-1.4.2l-.4.6-4.2-3.2.1-.1c.5-.7 1.3-1.1 2.2-1.2.9-.1 1.7.1 2.4.6l49.1 37.7c1.4 1.1 1.7 3.1.6 4.5-1.1-.8-2.2-1.5-3.3-2.3l.4-.5c.3-.4.3-1.1-.2-1.4-.4-.3-1.1-.3-1.4.2l-1 1.3-6.9 9-1.1 1.5c-.3.4-.3 1.1.2 1.4.2.1.4.2.6.2.3 0 .6-.1.8-.4l.6-.7 1.9 1.2c.6.4 1.3.8 1.9 1.2-.3 0-.6.1-.8.4-.5.7-1.3 1.1-2.2 1.2-.9.1-1.7-.1-2.4-.6l-49.1-37.7c-.7-.5-1.1-1.3-1.2-2.2-.4-.9-.1-1.7.4-2.4zm54.3 38.3l-1.9-1.1 5.7-7.4c2.3 1.6 4.7 3.2 6.9 4.7 3.6 2.5 6.6 5 10.6 7.3v10c-7-3.9-13.5-8.4-21.3-13.5zm11.9-5.4c-.6-.4-1.3-.8-1.9-1.2 1.7-2.3 1.2-5.5-1-7.2l-49.1-37.7c-1.1-.9-2.5-1.2-3.9-1-1.4.2-2.6.9-3.5 2 0 .1-.1.1-.1.2l-4.7-3.6 1.3-1.7c.3-.4.3-1.1-.2-1.4l-4.1-3.1.3-.4c.3-.4.3-1.1-.2-1.4-.4-.3-1.1-.3-1.4.2l-.3.4-4.1-3.1c-.2-.2-.5-.2-.7-.2-.3 0-.5.2-.7.4l-1.4 1.8v.1c-3.8-2.5-6.8-5.2-9.1-7.2h94.2V106c-3-2-6.2-4.2-9.4-6.4zm6.7-66.4h-.3v-3h3v3H505zm-118.3-3v3h-15v-3h15zM346.5 169c.1 0 .1 0 0 0zm46.4-32.1c.1.2.3.4.3.6s-.2.4-.3.6c.1-.2.2-.4.2-.6s-.1-.5-.2-.6zm.2 22.3c.1.1.3.1.5.1s.3-.1.5-.1h12.1c.1.1.3.1.5.1s.3-.1.5-.1h.6v2h-.4c-.2-.2-.4-.3-.7-.3s-.5.1-.7.3h-11.6c-.2-.2-.4-.3-.7-.3s-.5.1-.7.3h-.2v-2h.3zm6.6-19.4c-.6 0-1 .4-1 1v.4h-4v-19h11v19h-5v-.4c0-.5-.4-1-1-1zm-1 3.4v7.4c-.2-.1-.4-.1-.6.1-1.1 1.1-1.1 2.9 0 4 .6.6 1.3.8 2 .8s1.5-.3 2-.8c1.1-1.1 1.1-2.9 0-4-.2-.2-.5-.2-.7 0s-.2.5 0 .7c.7.7.7 1.9 0 2.6-.7.7-1.9.7-2.6 0-.7-.7-.7-1.8-.1-2.5v.4c0 .6.4 1 1 1s1-.4 1-1v-8.6h5v9.9c-.1.1-.1.3-.1.4s0 .3.1.4v3.3h-11v-3.7c0 .2 0 .4-.2.5.1-.1.2-.3.2-.5v-10.3h4zm-4 15.4c0 .2-.1.3-.3.4.1-.1.2-.3.3-.4zm11.1-5.8c.1-.4.4-.6.8-.6-.3 0-.6.3-.8.6zm3.2 4.4h-1.3v-3h2.6c.6 0 1.4-.1 1.4-.7v-11.7c0-.6-.9-.6-1.4-.6h-2.6v-3.1c0 .2.3.1.7.1h75.1c.1 0 .3.2.3.2v2.8h-2.6c-.6 0-1.4.1-1.4.6v11.7c0 .6.8.7 1.4.7h2.6v3h-1.3c-.6 0-.7.6-.7 1.1v3.6c0 .6.1 1.3.7 1.3h1.3v6.4c0 .3.1.6.4.8l6 4.8h-88.9l-.5.4c-.2.1-.4.2-.6.2.2 0 .4-.1.6-.2l.5-.4 6.1-4.8c.2-.2.4-.5.4-.8v-6.4h1.3c.6 0 .7-.7.7-1.3v-3.6c-.1-.5-.3-1.1-.8-1.1zm-1.3-5v-9h2v9h-2zm77.5 7h12.1c.1.1.3.1.5.1s.3-.1.5-.1h.5v2h-.3c-.2-.2-.4-.3-.7-.3s-.5.1-.7.3h-11.6c-.2-.2-.4-.3-.7-.3s-.5.1-.7.3h-.3v-2h.5c.1.1.3.1.5.1s.3 0 .4-.1zm-.5-7c.5 0 .9.5 1 1-.1-.4-.5-1-1-1zm13.1 0c-.5 0-.9.5-1 1v-.1c0-.5.4-.9 1-.9zm-.4-15c0-.6.4-.9 1-.9-.5-.1-.9.4-1 .9zm-.5 21.6c-.1-.1-.1-.3-.1-.5-.1.2 0 .4.1.5zm-.2-17.6h-4v-.4c0-.6-.4-1-1-1s-1 .4-1 1v.4h-5v-19h11v19zm-6 2v8.6c0 .6.4 1 1 1s1-.4 1-1v-.3c.5.7.5 1.7-.2 2.4s-1.9.7-2.6 0c-.7-.7-.7-1.9 0-2.6.2-.2.2-.5 0-.7s-.5-.2-.7 0c-1.1 1.1-1.1 2.9 0 4 .6.6 1.3.8 2 .8s1.5-.3 2-.8c1.1-1.1 1.1-2.9 0-4-.1-.1-.3-.2-.5-.1v-7.3h4v14h-11v-14h5zm6.1 18.4c0 .1-.1.2-.1.4 0-.2 0-.3.1-.4zm-.1 1.6v6l-5.5 4.4-5.5-4.4v-6h11zm-13-11h-2v-9h2v9zm-89 11h11v6l-5.5 4.4-5.5-4.4v-6zm-.2-1.7zm13 0c.1.1.2.2.2.5 0-.2-.1-.4-.2-.5zm-.1-2.5c.2-.2.3-.4.3-.6 0 .2-.1.5-.3.6zm-14.7-6.8h-2v-9h2v9zm0-13.9v2.9H390c-.6 0-1.2.1-1.2.6v11.7c0 .6.7.7 1.2.7h2.8v3h-1.5c-.6 0-.5.6-.5 1.1v3.6c0 .6 0 1.3.5 1.3h1.5v6.4c0 .3.1.6.3.8l6 4.8h-39.7c-5.3 0-9.8-3.2-11.8-7.7-.1-.2 0-.5-.1-.7-.1-.3-.2-.5-.3-.8-.3-1.2-.4-2.5-.4-3.7v-26.7c2 1.8 4.7 2.6 7.8 2.6h37.5c.2 0 .6.2.6.1s.1-.1.1-.1l-.1.1zm115 36.9h-15.4l-.5.4c-.2.1-.4.2-.6.2.2 0 .4-.1.6-.2l.5-.4 6-4.8c.2-.2.4-.5.4-.8v-6.4h1.4c.6 0 .6-.7.6-1.3v-3.6c0-.6-.1-1.1-.6-1.1h-1.4v-3h2.7c.6 0 1.3-.1 1.3-.7v-11.7c0-.6-.8-.6-1.3-.6h-2.7v-3h9v37zm-9-23v-9h2v9h-2zm9-20.5v-.3c-.1.1-.1.2-.1.3v.2c0 .1 0 .2.1.3v4h-9v-14h2.9c.6 0 1-.4 1-1s-.4-1-1-1h-20.8c-.6 0-1 .4-1 1s.4 1 1 1h2.9v14.3s-.2-.3-.3-.3h-75.1c-.3 0-.7.4-.7.6v-14.6h2.8c.6 0 1-.4 1-1s-.4-1-1-1h-20.8c-.6 0-1 .4-1 1s.4 1 1 1h3v14.4s0 .1.1.1l-.1-.1v-.1c0-.1-.4-.4-.6-.4h-37.5c-6.2 0-10.8-4.9-10.8-11.1V51.6c0 10.5-1 21.1-2 32.2v41.3c0 3.2 1 6.2 3 8.5v25.6c-.5-.2-.7-.4-.9-.7-3.6-8-5.8-12.9-5.9-25 0-15.4 1.6-30.1 3-44.3.2-1.8-.3-3.6.7-5.5 1-11.1 1.8-21.7 1.8-32.2 0-.5-.3-1-.8-1h.1c.6 0 1 .4 1 1V36.4c0-.7.1-1.2.9-1.2h51c.4 0 .7-.3.9-.6-.3-.6-.6-1.1-.7-1.4.2 0 .4.8.7 1.4 1.8 3.2 6.5 9.8 18.3 18.2l-1.4 1.8c-.2.2-.2.5-.2.7 0 .3.2.5.4.7l4.1 3.1-.3.4c-.3.4-.3 1.1.2 1.4.2.1.4.2.6.2.3 0 .6-.1.8-.4l.3-.4 4.1 3.1c.2.1.4.2.6.2.3 0 .6-.1.8-.4l1.4-1.8 4.7 3.6c-.1.1-.2.1-.3.3-.9 1.1-1.2 2.5-1 3.9.2 1.4.9 2.6 2 3.5l49.1 37.7c.9.7 2 1.1 3.2 1.1h.7c1.4-.2 2.6-.9 3.5-2 .2-.3.2-.7.1-1-.1-.2-.2-.3-.3-.4.1.1.4.3.4.4 7 4.6 13.6 8.7 19.6 12.3v10.6c.1-.1.2-.2.4-.2-.3 0-.5.4-.6.5z"></path><path d="M345.6 168.4s.1 0 0 0c0-.1 0 0 0 0zm100.2-89.6c.3 0 .6-.1.8-.4l.5-.7 25.6 19.6-.5.7c-.3.4-.3 1.1.2 1.4.2.1.4.2.6.2.3 0 .6-.1.8-.4l9.1-11.9c.3-.4.3-1.1-.2-1.4-.4-.3-1.1-.3-1.4.2l-.4.6-25.6-19.6.4-.6c.3-.4.3-1.1-.2-1.4-.4-.3-1.1-.3-1.4.2l-1 1.3-6.9 9-1.1 1.5c-.3.4-.3 1.1.2 1.4 0 .3.2.3.5.3zm8.2-10.1l25.6 19.6-5.7 7.5-25.6-19.6 5.7-7.5zm-104.8 39.7c.3 0 .5-.2.5-.5V90.6c0-.3-.2-.5-.5-.5s-.5.2-.5.5V108c0 .2.2.4.5.4zm34.7 22.8h-26.3c-4.4 0-7.8-3.3-7.8-7.7v-7.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v7.8c0 4.9 3.9 8.7 8.8 8.7h26.3c.3 0 .5-.2.5-.5s-.3-.5-.5-.5zm74.2 0h-43c-.3 0-.5.2-.5.5s.2.5.5.5h43c.3 0 .5-.2.5-.5s-.3-.5-.5-.5zm18.3 0h-11.9c-.3 0-.5.2-.5.5s.2.5.5.5h11.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5z"></path><g><path d="M529.9 380.5L398.8 210.7c-.4-.5-1.2-.5-1.6 0L266.1 380.5c-.2.3-.3.8-.1 1.1.2.3.5.6.9.6h262.2c.4 0 .7-.3.9-.6.2-.3.2-.8-.1-1.1zm-166-84c5.9-2.7 10.1-3.7 15.6-1.7 5.9 2.2 8.2 5.8 10.6 11.9-.6 1.1-1.1 2.2-1.6 3.3l-13.1-4.3-12.6-5.4h-.1c.4-1.3.7-2.6 1-3.8h.2zm95.4 49c-.5-.2-1.1.1-1.3.6 0 .1-.1.3-.1.4 0-.1 0-.3.1-.4.2-.5.8-.8 1.3-.6l1.1.4c1-1.8 1.8-3.6 2.5-5.5s1.3-3.9 1.7-5.9l2.7 1-4.3 11.4-2.7-1-1-.4zm1.8-5.8c-3.6 9.6-10.7 17.3-20 21.5-9.3 4.2-19.6 4.5-29.1.9-19.7-7.4-29.7-29.7-22.3-49.5 3.6-9.6 10.7-17.3 20-21.5 5-2.3 10.3-3.4 15.7-3.4 4.5 0 9.1.8 13.4 2.5 19.6 7.4 29.7 29.6 22.3 49.5zm-100.9-38.2c-3.6 9.6-10.7 17.3-20 21.5-8.9 4.1-18.9 4.5-28.1 1.3l2.2-2.8c3.4 1 6.8 1.6 10.3 1.6 4.9 0 9.7-1 14.3-3.1 8.5-3.9 15-10.8 18.3-19.7 3.9-10.5 2.5-21.7-2.9-30.6l2.2-2.8c6.3 10 8.1 22.7 3.7 34.6zm-23.1-9.7l14 5.9-8.1-2.8c-2.2-.8-4.5-1.4-6.8-1.9l.9-1.2zm5.2 5l13.1 4.4h.2c-3.3 7.9-9.4 14.2-17.3 17.8-7.5 3.4-15.7 3.9-23.5 1.6l20-25.9c2.5.7 5.1 1.3 7.5 2.1zm14.5 1.3c-.1-.1-.2-.2-.4-.3l-18-7.6 15.1-19.6c4.8 8 6.2 18 3.3 27.5zm-47 27.6c.2 0 .4.1.6.2.1.1.3.1.4.1 4.5 1.6 9.1 2.5 13.7 2.5 5.6 0 11.2-1.2 16.5-3.6 9.5-4.3 16.7-11.9 20.7-21.5l13 4.3 12.7 5.4c-7 20.6 3.5 43.2 23.9 50.9 4.6 1.7 9.4 2.6 14.1 2.6 3.5 0 7.4-.5 10.4-1.4 1-.2 1.4-.4 2-.6v-.3.3c1.4-.5 2.7-1 4.1-1.6.5-.2.9-.4 1.4-.7.9 2.9 1.6 5.8 2 8.8.2 1.4-.3 2.8-1.5 3.7-1.1.9-2.6 1.1-3.9.5-1.5-.6-2.5-2.2-2.4-3.8 0-.5.1-1 .1-1.6.1-1.4.2-3.2.2-5.3-.7.2-1.3.4-2 .6 0 1.8-.1 3.3-.2 4.6 0 .6-.1 1.2-.1 1.7-.1 2.5 1.3 4.8 3.6 5.8.8.3 1.5.5 2.3.5 1.3 0 2.6-.4 3.6-1.3 1.7-1.3 2.5-3.4 2.2-5.6-.5-3.2-1.2-6.4-2.2-9.5v-.1c-.2-.5-.7-.8-1.3-.7-.4.1-.7.5-.7.9 0-.4.3-.7.7-.9.5-.2 1.1.1 1.3.7v.1c5.9-3.3 10.8-8 14.3-13.7l3.9 1.5c.1 0 .2.1.4.1.1 0 .3 0 .4-.1.2-.1.4-.3.5-.6l5-13.3c.2-.5-.1-1.1-.6-1.3l-3.9-1.5c2.9-18.6-7.4-37.3-25.6-44.2-10-3.8-20.9-3.4-30.7 1-7.3 3.3-13.3 8.6-17.5 15.3-2-4.9-4.6-9.2-11.2-11.6-6.3-2.4-11.2-.9-16 1.2 1.6-10.3-.9-20.6-6.5-28.9L398 213l129.1 167.2H269l41.8-54.1c-.1-.1-.3-.1-.4-.2-.3-.1-.5-.1-.6-.2L267 381.2l42.8-55.5z"></path><path d="M437.6 293.3c-8.7-3.3-18.1-3-26.6.9s-15 10.8-18.3 19.7c-6.8 18.1 2.4 38.4 20.4 45.2 4 1.5 8.1 2.3 12.3 2.3 4.9 0 9.7-1 14.3-3.1 8.5-3.9 15-10.8 18.3-19.7 6.7-18.2-2.4-38.5-20.4-45.3zm-24.2 64.8c-17.1-6.4-25.9-25.3-20.3-42.6.1 0 .1.1.2.1l12.7 5.3c7.8 3.3 14.7 8 20.6 13.8v.1c5.2 6.1 8.2 14.1 8.9 23.5 0 .1 0 .2.1.3-7.2 2.4-15 2.2-22.2-.5zm25.8-.9c-.6.3-1.1.5-1.7.7-.4-5-1.4-9.6-3.1-13.8 2.5 3.7 4.7 7.6 6.4 11.8.1.1.1.2.2.3-.5.4-1.1.7-1.8 1zm17.8-19.1c-2.7 7.3-7.7 13.3-14.2 17.2v-.1c-6.9-16.4-19.6-29.2-35.9-36.1l-8-3.4 58.5 19.7c.1 0 .2.1.3.1h.3c-.4.9-.7 1.8-1 2.6zm1.3-4.3c-.1-.1-.2-.2-.4-.3l-63-21.3c-.2-.1-.4-.1-.5 0 3.4-7.7 9.4-13.7 17-17.2 4.4-2 9.2-3 13.9-3 4 0 8 .7 11.9 2.2 16.1 6.1 24.9 23.2 21.1 39.6z"></path></g><g><path d="M299.4 186.4L161.8 11.1c-.4-.5-1.2-.5-1.6 0L22.5 186.4c-.3.4-.3.9 0 1.2l137.6 175.3c.2.2.5.4.8.4s.6-.1.8-.4l137.6-175.3c.4-.3.4-.9.1-1.2zm-71.6-52.5l-2.3-3.7c-.1-.1-.1-.2-.1-.4 0 .1.1.3.1.4l2.3 3.7 3.7 6c-.7 2.7-.5 5.3.6 7.2.9 1.6 2.4 2.8 4.4 3.3.8.2 1.7.4 2.5.6 3.4.7 6.3 1.2 7 5 .1.5.5.8 1 .8h.2c.1 0 .3-.1.4-.1.3 3.8.2 7.9-.2 12-.7 6.8-1.8 13.2-3.3 19.1l-.6 2.3-.9 3.3c-1.9 6.2-4.2 12-6.9 17.3l-7.9-76.8zm-2.6-12.4c0 .1.1.3.1.4l1.5 2.5 10.9 17.9c.3.5.1 1.2-.4 1.5-.2.1-.5.2-.8.1-.3-.1-.5-.2-.7-.5l-8.6-14.2-.5-4.9-1.5-2.5v-.3zm9.1 23c.4.7 1.1 1.2 1.9 1.4.2.1.5.1.7.1.6 0 1.1-.2 1.6-.4 1.4-.9 1.9-2.8 1-4.2l-1.9-3.1c1.2-.4 2.3-.3 3.4.4 3 1.9 5.2 7.5 6.1 14.6-1.6-3-5-3.7-7.8-4.2-.8-.2-1.6-.3-2.4-.5-1.5-.4-2.5-1.2-3.2-2.4-.6-1-.8-2.2-.7-3.6l1.3 1.9zm10 49.9l1.8-6.3v-.1c1.5-6 2.6-12.3 3.2-19.1 1.4-14.8-1.6-28.3-7.2-31.9-1.7-1.1-3.6-1.3-5.6-.5l-9.5-15.6c-.1-.2-.3-.4-.6-.4l-.7-6.4c-.2-2.3-2.1-3.8-4.4-3.8h-36.7c-2-3-4.2-4.9-6.4-6.2v-.1c-1.4-20.5-5.9-40.4-12.9-56.1-4-9.1-8.8-16.6-14.1-22.3l9.7-12.3L297.4 187l-56.9 72.5-4.2-41.8c3.6-8.6 6.1-16.7 8-23.3zM200 174.8c.1-1.1.1-2.3.2-3.4.1.2.4.3.6.4l1.1.2-1.4 7.9-5.7-1-5.7-1 1.4-7.9 1.1.2h.3c-.2 2.1-.4 3.2-.4 3.3 0 .3 0 .5.2.8s.4.4.6.4l6.5 1.1h.2c.2 0 .4-.1.6-.2.3-.3.4-.5.4-.8zm7.3 8.4l-6.1-.9 6.1.9-2.6 34.7c-.1.8-.5 1.5-1.1 2-.6.5-1.4.7-2.2.5l-26.9-4.7c-.8-.1-1.5-.6-1.9-1.3-.4-.7-.6-1.5-.4-2.3l9.5-33.5 6.2 1.1 9.2 1.6-2.6-.5 2.6.5 4.1.9h.1-.1l-4.1-.9 4.1.7-4.1-.7 4.1.7 6.1 1.2zm-9.2-9.7l-4.4-.8c.6-4 2.4-19.5-.7-38.7.6.2 1.1.4 1.7.5 0-.1-.1-.2-.1-.3-.1-.5.2-1.1.7-1.2h.4-.4c-.5.1-.8.7-.7 1.2 0 .1.1.2.1.3 2.2 8.1 4.4 21.3 3.4 39zm-29.4-58.4c-.8-2.4-1.1-4.7-.6-6.5.2 1.1.7 2.1.7 3.1 0 .1.2.2.3.3 0 .1.2.2.3.3 0 .1.1.1.1.2 4.8 8.7 20.9 12.8 30.3 15.2l1 .2v6.3c-23.1-5.9-30.3-13.6-32.1-19.1zm13 16.7l-.2-2c.1 0 .2.1.2.1v1.9zm-1.4-4.6c.5 0 .9.3 1 .8v.1c-.1-.5-.5-.9-1-.9zm3.1 37.8c.1.7-.1 1.1-.6 1.6-.4.5-1.1.6-1.7.6h-14.7c-.7 0-1.3-.1-1.7-.6-.4-.5-.6-.9-.6-1.6l4-35.8h11.2l4.1 35.8zm6.1-41.2h-.2.2zm-1.3-1.4c0 .2.1.4.1.6 0-.2-.2-.5-.3-.7-1.4-.5-2.3-1-4.3-1.6v-3.2c0-.6-.2-1.3-.7-1.3h-4.1l-.1.2v.1c0-1.5 0-3-.1-4.5.1.1.3.2.4.2h3.1c2.5 3 5.1 6.3 6 10.2zm-9.6-12.1v-.1c0-.5 0-1.1-.1-1.6.5.5 1.1.7 1.7 1.7H179c-.1-.1-.2-.1-.4 0zm.2 7.9c-.1 0-.2-.1-.3-.1 0 0 0-.1.1-.1.2.1.4.2.7.2h2.4v1.6c-1-.4-1.5-.6-2.4-1.6h-.5zm-2-1.2c-2.4-1.6-4.4-3.4-5.6-5.6 0 0 0-.1-.1-.1-.1-2.8-.3-5.6-.5-8.5v-.1c-2.2-28.5-10.4-56-24-71.3l3.3-4.2c5.9 6.4 10.4 14.2 13.6 21.5 8.4 18.7 13.2 43.6 13.3 68.3zm13.9 5.9c-2-2.7-4-6.7-6.8-10.7 2.8 4 5 8 6.5 10.7h-.1s.2.1.3.1c0 0 .1 0 .1-.1zm-.4-.1c-.6-3.9-3-7.6-5.4-10.6 2.4 3 4.7 6.6 5.4 10.6zM83.8 110l61-77.7c.2.3.5.5.7.8 4.6 5.3 8.2 11.7 10.9 17.6 6.4 14.2 10.7 32.7 12.3 51.9v.2c-.7.9-2.4 3.4-2.7 7.4 0 0 0-.1 0 0H85l60.4-77.1c-.2-.3-.5-.5-.7-.7l-61 77.8-1.6 2-1.4 1.6 1.4-1.8 1.7-2zm-5.1 8.2v13.5l-.4-3.8c-.1-.5-.5-.7-1-.7h-5.6l6.7-9h.3zM68.8 129l1.6-2 2.6-3.3-2.6 3.5-1.6 2-4.3 5.3-.2 1.9 5.7-7.3h6.3l4 35.9c.1.7-.1 1.1-.6 1.6-.4.5-1.1.6-1.7.6H63.5c-.7 0-1.3-.1-1.7-.6-.4-.5-.6-1.1-.6-1.7l3.2-28.5.2-1.9 4.2-5.5zm9.9 128.5L23.3 187l.1-.1 55.3 70.3.8 1 8.5 11.1-8.5-10.8-.8-1zm153 14.8l-.8-.4-5.7 7.4h-58.9c-2.5 0-5 1.4-7.6 2h-.2 65.2L161 361l-62.6-79.7h14.7c-.5 0-.9-.5-1-1v-.1c.1.5.5.8 1 .8h.1c1-.2 2.2-.3 3.4-.5-1.3.2-2.4.4-3.4.6-.1 0-.1.1-.1.1h45.3c-.5 0-.9-.4-1-.9v-.4.3c.1.5.5.7 1 .7.1 0 .1.1.2.1 2.6-.6 5.2-1.9 7.6-1.9 38.9-11 58-35.7 68.3-57.7l-.4-3.9c-3 6.9-6.8 14-11.7 20.9-14.7 20.5-36.3 33.7-64.2 40.7l-.1-.1c-.1 0-.2.1-.3.1h-31.4c28.6-5 81.3-17.1 107.7-61.7l-.4-3.6c-28.7 51.8-93.1 61.2-117.4 64.7-1.2.2-2.4.6-3.4.6 0 0 0-.1-.1-.1s-.3.1-.4.1H96.8l-16-21h39.7c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H80l-55.4-70.4L62 139.3l.2-1.8-.2 1.9-2.8 25.3c-.1 1.2.3 2.4 1.1 3.3.8.9 2 1.3 3.2 1.3h14.7c1.2 0 2.4-.4 3.2-1.3.8-.9 1.2-2.1 1.1-3.3L79 133.4c.2.3.5.5.8.5.6 0 1-.4 1-1v-15.3c0-.6-.2-1.3-.7-1.3H80l3.6-4H166v-1.9c0 .6-.1.9 0 1.9h.1c.5 0 .9-.5 1-1v.1c0 .6-.4.9-1 .9h-.1c.1 1 .3 2.1.7 3.4.1.3.2.6.3.6h.2c.6 0 1 .6 1 1.1v-.1c0-.5-.5-1.1-1-1.1h-.2s-.1.1-.1 0h-2.3c-.6 0-.9.7-.9 1.3v15.3c0 .6.4 1 1 1s1-.4 1-1v-14.6h1.4c.2 0 .3-.1.5-.2 0 .1.1.2.1.2l.2-.2c-.1.1-.1.2-.2.2 1.8 3.2 4.8 5.9 8.9 8.9h-9.4c-.5 0-.9.3-1 .8l-4.1 36.8c-.1 1.2.3 2.3 1.1 3.2.8.9 2 1.3 3.2 1.3h14.7c1.2 0 2.4-.4 3.2-1.3.8-.9 1.2-2.1 1.1-3.3l-3.5-31.3c.2.3.5.5.8.5.6 0 1-.4 1-1v-2c2 .9 4.5 1.8 7 2.6v-.4c-.1-.5.3-1.1.8-1.2-.5.1-.9.6-.8 1.2 0 .1 0 .3.1.4 2.5 15.1 2 28 1.4 34.9 0 0-.1 0-.1-.1l-2.1-.4c-.3 0-.5 0-.7.2-.2.2-.4.4-.4.6l-1.6 8.9-6.1-1.1-3.9-.7c-.5-.1-1.1.3-1.2.8-.1.5.3 1.1.8 1.2l2.8.5-9.4 33.4c-.4 1.3-.1 2.7.6 3.9s1.9 1.9 3.3 2.2l26.9 4.7c.3 0 .6.1.8.1 1.1 0 2.1-.3 3-1 1.1-.8 1.8-2.1 1.9-3.4l2.6-34.5 2.8.5h.2c.5 0 .9-.3 1-.8.1-.5-.3-1.1-.8-1.2l-9.9-1.8 1.6-8.9c0-.3 0-.5-.2-.7-.2-.2-.4-.4-.6-.4l-2.1-.4c-.4-.1-.7.1-.9.3.5-15.5-1.4-27.2-3.3-34.9 1.3.4 2.7.7 4.1 1.1h.2c.2 0 .7-.1.8-.2.2-.2.6-.5.6-.8V127c0-.5-.5-.9-1-1l-1.6-.4c-2.1-.5-4.6-1.2-7.1-1.9.1.4-.1.9-.5 1.1-.1.1-.3.1-.5.1.1 0 .3 0 .4-.1.4-.2.6-.7.5-1.1l-.1-.1c-1.3-2.7-3.8-7.4-6.7-11.4h35.2c1.2 0 2.3.8 2.4 2l10 99.7.3 3.5v.1l.4 3.9 4.1 40.4-7.1 9.1-15.4-10.2c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7l15.3 10.1.8.7z"></path><path d="M201.4 207.1c-.3 0-.5.2-.5.5l-.5 7.1c0 .1-.1.3-.2.4-.1.1-.3.1-.4.1l-12.7-2.2-6.6-1.2-2.6-.5c-.1 0-.3-.1-.3-.2-.1-.1-.1-.3-.1-.4l5.3-18.7c.1-.3-.1-.5-.3-.6-.3-.1-.5.1-.6.3l-5.3 18.7c-.1.4 0 .8.2 1.2.2.4.6.6 1 .7l2.6.5 6.6 1.2 12.7 2.2h.3c.3 0 .7-.1.9-.3.3-.3.5-.6.6-1.1l.5-7.1c-.1-.3-.3-.5-.6-.6zm-18.2-18.9h.1c.2 0 .4-.1.5-.4l1-3.7 14.5 2.6c.3 0 .5-.1.6-.4 0-.3-.1-.5-.4-.6l-15-2.6c-.3 0-.5.1-.6.4l-1.2 4.1c.1.3.3.5.5.6zm18.6 14.5c.3 0 .5-.2.5-.5l.9-12c0-.3-.2-.5-.5-.5s-.5.2-.5.5l-.9 12c0 .3.2.5.5.5zm-24.9 54.5h-18.2c-.3 0-.5.2-.5.5s.2.5.5.5h18.2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-18-139.5c0-.3-.2-.5-.5-.5h-42.5c-.3 0-.5.2-.5.5s.2.5.5.5h42.5c.3 0 .5-.2.5-.5zm-93.8 45.6c.1.1.2 0 .4 0h10.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H66l1.4-12.6c0-.3-.2-.4-.4-.4-.3 0-.5.2-.6.5L65 163.1c-.1.1 0 .1.1.2zm2.4-18.7c.1 0 .1 0 0 0 .3 0 .5-.2.6-.4l1.2-10.9c0-.3-.2-.5-.4-.6-.3 0-.5.2-.6.4L67.1 144c0 .3.2.6.4.6zm100.7 18.7c.1.1.2 0 .4 0h6.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.9l.5-3.9c0-.3-.2-.4-.4-.4-.3 0-.5.2-.6.5l-.5 4.7.1.1zm1.8-12.7s0 .1 0 0c.3 0 .5-.2.6-.4l1.9-17c0-.3-.2-.5-.4-.6-.3 0-.5.2-.6.4l-1.9 17c-.1.4.1.6.4.6zm-62.6-33.4H89.1c-.3 0-.5.2-.5.5s.2.5.5.5h18.2c.3 0 .5-.2.5-.5s-.1-.5-.4-.5z"></path></g></svg>
                </div>
                <div class="slideshow__overlay"></div>
              </div>
            

            <noscript>
              <div class="slideshow__image">
                
                  <div class="placeholder-background">
                    
                    <svg class="placeholder-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1052 400"><path d="M103 177.9c0-.3-.2-.5-.4-.7-.2-.2-.5-.2-.8-.2l-13.4 3.1c-.3.1-.6.3-.7.6l-.7 2c-.7 1.9-2.6 2.6-3.6 2.9-1.2.3-2.5.6-3.8.9-6.3 1.5-14.1 3.3-21.4 6.6-6.8-6.3-12.7-11.1-15.7-13.5-.5-.4-1.2-.6-1.8-.5-.6.1-1.1.4-1.5.8-.5.3-2.1 1.5-2.8 3.7-2.9 9.4 1.8 15.3 7 19.9-4.9 5.5-8.1 12.9-8.1 22.9 0 36.1 20.1 42.8 33.4 47.3 8.1 2.7 12.7 4.5 12.7 9.6 0 5.4-5.4 7.2-12.8 9.7-14.1 4.7-33.3 11.1-33.3 47.2 0 10.2 3.3 17.7 8.4 23.2-5.3 4.6-10.2 10.6-7.3 20.1.7 2.2 2.2 3.3 2.8 3.7.4.4.9.7 1.5.8h.3c.5 0 1.1-.2 1.5-.5 3.1-2.4 9.2-7.4 16.1-13.9 7.2 3.2 14.9 5 21 6.4 1.4.3 2.6.6 3.8.9 1.1.3 2.9 1 3.6 2.9l.7 2c.1.3.4.6.7.6l13.4 3.1h.2c.2 0 .4-.1.6-.2.2-.2.4-.4.4-.7 6.9-50.3.2-77.3-3.8-93.4-1.3-5.3-2.3-9.2-2.3-12.1s.9-6.8 2.3-12.1c4.1-15.9 10.7-42.8 3.8-93.1zm-64.8 6.4c.5-1.8 2-2.6 2-2.7l.3-.3c.1-.1.2-.2.3-.2.1 0 .2 0 .3.1 2.8 2.3 8.5 6.8 15 12.8-4.2 2.1-8.1 4.7-11.5 8-6.5-5.7-8.4-11-6.4-17.7zm3 201.6c-.1.1-.3.1-.3.1-.1 0-.2 0-.3-.2l-.3-.3s-1.5-.9-2-2.7c-2.1-6.9-.1-12.1 6.8-18.1 3.4 3.3 7.4 5.8 11.6 7.9-6.8 6.3-12.5 11-15.5 13.3zM95 283.3c0 3.2 1 7.1 2.3 12.6 3.9 15.8 10.5 42.3 3.9 91.5l-11.8-2.7-.5-1.5c-.7-2-2.6-3.5-5-4.2-1.2-.3-2.5-.6-3.9-.9-16-3.7-42.8-10-42.8-37.9 0-34.6 18.5-40.8 32-45.3 7.6-2.5 14.2-4.7 14.2-11.6 0-6.8-6.5-8.9-14.1-11.5-13.5-4.5-32.1-10.7-32.1-45.4 0-27.9 26.8-34.2 42.8-37.9 1.4-.3 2.7-.6 3.9-.9 2.5-.6 4.3-2.1 5-4.2l.5-1.5 11.8-2.7c6.6 49.3 0 75.7-3.9 91.5-1.3 5.5-2.3 9.4-2.3 12.6z"/><path d="M96 372c-1.6 0-2.5 2.8-2.5 5.6s.8 5.6 2.5 5.6 2.5-2.8 2.5-5.6-.9-5.6-2.5-5.6zm0 10.2c-.6 0-1.5-1.8-1.5-4.6s.9-4.6 1.5-4.6 1.5 1.8 1.5 4.6-.9 4.6-1.5 4.6zm0-187.5c1.6 0 2.5-2.8 2.5-5.6s-.8-5.6-2.5-5.6-2.5 2.8-2.5 5.6c0 2.9.9 5.6 2.5 5.6zm0-10.1c.6 0 1.5 1.8 1.5 4.6s-.9 4.6-1.5 4.6-1.5-1.8-1.5-4.6.9-4.6 1.5-4.6zM83.5 296.7c-18.6.8-43.3 5.7-43.3 40.1 0 10.6 3.2 19 9.4 24.8 5 4.7 14.3 9.9 31 9.9 1.8 0 3.6-.1 5.6-.2 6.5-.4 11.9-4.9 13.4-11.1 1.6-6.5 6.1-29.8-4.5-56-1.9-4.7-6.6-7.6-11.6-7.5zm-42.3 40.1c0-33.2 23.8-38.2 41.9-39-.1.2-.2.3-.2.6.2 4.8.4 9.3.6 13.7-.1 23.6-15.1 33.9-28.4 43-2 1.4-3.9 2.6-5.7 4-.2.2-.4.4-.4.6-5.2-5.6-7.8-13.3-7.8-22.9zm8.9 24c.2 0 .3-.1.4-.2 1.8-1.3 3.6-2.6 5.6-3.9 10.8-7.4 23.8-16.3 28-33.3.4 5.8.8 11.1 1.1 15.7-4.8 8.6-12.2 17.7-22.6 27.8-.3.2-.3.6-.3.9-4.5-1.5-8.7-3.7-12.2-6.9.1-.1.1-.1 0-.1zm36 9.5c-5.5.4-14 .3-22-2 9.5-9.3 16.5-17.8 21.4-25.8 1.4 16.4 2.6 26.8 2.6 26.9 0 .2.1.4.2.5-.7.3-1.4.4-2.2.4zm12.5-10.4c-1.1 4.5-4.3 7.9-8.5 9.5v-.2c0-.1-1.4-11.8-2.9-30-.6-7.5-1.3-16.7-1.8-27.3v-.6c0-.1 0-.2-.1-.2-.2-4.1-.4-8.4-.5-12.9 0-.2-.1-.3-.2-.5 4.1.3 7.8 2.9 9.4 6.8 10.7 25.9 6.2 49 4.6 55.4zm1-153c-1.6-6.2-7-10.7-13.4-11.1-20.3-1.3-31.1 4.6-36.6 9.7-6.2 5.8-9.4 14.2-9.4 24.8 0 34.3 24.7 39.3 43.3 40.1h.5c4.8 0 9.3-3 11.1-7.5 10.6-26.2 6.1-49.5 4.5-56zM81 196.6c1.9 0 3.6.1 5.1.2.8.1 1.6.2 2.4.4-.2.2-.3.4-.3.6 0 .1-1.2 10.5-2.6 26.9-4.9-8.1-12-16.5-21.4-25.8-.1-.1-.1-.1-.2-.1 5.8-1.7 11.9-2.2 17-2.2zm-39.8 33.7c0-9.6 2.6-17.3 7.8-22.8 0 .3.1.6.4.8 1.7 1.3 3.5 2.5 5.4 3.8 13.6 9.4 29.1 20.1 28.1 45.6-.2 4.2-.2 7.3-.3 11.2 0 .2.1.3.1.5-18.1-.9-41.5-6.1-41.5-39.1zm43.2 39.1c.1-.1.2-.3.2-.5 0-3.9.1-7 .3-11.2 1-26.6-15.6-38.1-29-47.3-1.9-1.3-3.6-2.5-5.3-3.7-.2-.1-.4-.2-.6-.2l.2-.2c3.5-3.3 7.8-5.5 12.3-7-.2.4-.1.8.2 1.1 10.4 10.2 17.8 19.3 22.7 28.1 3 5.4 4.7 10.3 5.1 14.6.6 7.1 1.2 13 2 20.4 0 .4.4.8.8.8-1.9 3-5.3 4.9-8.9 5.1zm10-7.5c-.7-6.8-1.3-12.5-1.9-19.1-.4-4.5-2.2-9.6-5.2-15.1 1.4-18 2.8-29.6 2.8-29.7v-.3c4.2 1.6 7.4 5 8.5 9.5 1.6 6.3 6 29.1-4.2 54.7zM204.6 71.5c16 0 29.1-13 29.1-29.1s-13-29.1-29.1-29.1-29.1 13-29.1 29.1 13.1 29.1 29.1 29.1zm0-57.1c15.5 0 28.1 12.6 28.1 28.1 0 15.5-12.6 28.1-28.1 28.1S176.5 58 176.5 42.5c0-15.5 12.6-28.1 28.1-28.1z"/><path d="M227.5 42.7c0 .3.2.5.5.5h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H228c-.3 0-.5.3-.5.5zm-49.4.5h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm26.2 22.2c-.3 0-.5.2-.5.5V69c0 .3.2.5.5.5s.5-.2.5-.5v-3.1c0-.3-.2-.5-.5-.5zm0-45.9c.3 0 .5-.2.5-.5v-3.1c0-.3-.2-.5-.5-.5s-.5.2-.5.5V19c0 .3.2.5.5.5zm12.4 42.9c-.1-.2-.4-.3-.7-.2-.2.1-.3.4-.2.7l1.6 2.7c.1.2.3.2.4.2.1 0 .2 0 .2-.1.2-.1.3-.4.2-.7l-1.5-2.6zm-24.2-39.9c.1.2.3.2.4.2.1 0 .2 0 .2-.1.2-.1.3-.4.2-.7l-1.6-2.7c-.1-.2-.4-.3-.7-.2-.2.1-.3.4-.2.7l1.7 2.8zm-8.3 31.1l-2.8 1.6c-.2.1-.3.4-.2.7.1.2.3.2.4.2.1 0 .2 0 .2-.1l2.8-1.6c.2-.1.3-.4.2-.7 0-.1-.4-.2-.6-.1zm40.6-22.3c.1 0 .2 0 .2-.1l2.8-1.6c.2-.1.3-.4.2-.7-.1-.2-.4-.3-.7-.2l-2.8 1.6c-.2.1-.3.4-.2.7.1.2.3.3.5.3zm3 24l-2.8-1.6c-.2-.1-.5-.1-.7.2-.1.2-.1.5.2.7l2.8 1.6c.1 0 .2.1.2.1.2 0 .3-.1.4-.2.2-.4.2-.7-.1-.8zm-46.4-25.7l2.8 1.6c.1 0 .2.1.2.1.2 0 .3-.1.4-.2.1-.2.1-.5-.2-.7l-2.8-1.6c-.2-.1-.5-.1-.7.2s.1.5.3.6zm11.8 32.6c-.2-.1-.5-.1-.7.2l-1.6 2.8c-.1.2-.1.5.2.7.1 0 .2.1.2.1.2 0 .3-.1.4-.2l1.6-2.8c.2-.4.1-.7-.1-.8zM216 22.7c.1 0 .2.1.2.1.2 0 .3-.1.4-.2l1.6-2.8c.1-.2.1-.5-.2-.7-.2-.1-.5-.1-.7.2l-1.6 2.8c0 .1.1.4.3.6zm-12.9 19.1s.1 0 .1.1c-.1.2-.1.5-.1.7l1.4 11.2c.1 1.1.4 2.2.9 3.2l.9 1.9c.1.2.3.3.5.3h.1c.2 0 .4-.2.4-.4l.3-2.1c.2-1.1.2-2.4.1-3.6l-1.2-10h13.2c2 0 4 0 5.9-.5.2-.1.4-.1.4-.4 0-.2-.2-.4-.4-.4-1.9-.5-3.9-.7-5.9-.7h-14c-.3-.3-.7-.4-1.2-.3-.3 0-.5.1-.7.3 0 0 0-.1-.1-.1l-18.1-14.8c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7l18.1 14.8zm16.5.4c1.1 0 2.2-.2 3.3 0-1.1.2-2.2 0-3.3 0h-13.4 13.4z"/><path d="M211.3 38.3c.3 0 .5-.2.5-.5V27c0-.3-.2-.5-.5-.5s-.5.2-.5.5v10.9c0 .2.2.4.5.4zm-3-2.1c.3 0 .5-.2.5-.5v-6.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v6.5c0 .2.2.5.5.5zm-57.7-2h5.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.9c-.3 0-.5.2-.5.5s.2.5.5.5zm-8.1 5h2.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.4c-.3 0-.5.2-.5.5s.3.5.5.5zm13.1 4.5c0 .3.2.5.5.5h2.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.8c-.2 0-.5.3-.5.5zm-13.8 6.5h4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4c-.3 0-.5.2-.5.5s.2.5.5.5zm6.9 0h1.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-1.5c-.3 0-.5.2-.5.5s.3.5.5.5zm-34.9-16h5.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.9c-.3 0-.5.2-.5.5s.2.5.5.5zm-6.4 0h2.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.1c-.3 0-.5.2-.5.5s.3.5.5.5zm-11.3 0h5.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.3c-.3 0-.5.2-.5.5s.2.5.5.5zm20.4 9.5c0 .3.2.5.5.5h7.7c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H117c-.3 0-.5.3-.5.5zm-4.8.5h2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2c-.3 0-.5.2-.5.5s.3.5.5.5zm-11.8 5.5c0 .3.2.5.5.5h5.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.5c-.3 0-.5.3-.5.5zM83.3 34.2h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.1c-.3 0-.5.2-.5.5s.3.5.5.5zm9 4h4.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.1c-.3 0-.5.2-.5.5s.3.5.5.5zm-9.5 1h2.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.4c-.3 0-.5.2-.5.5s.2.5.5.5zm-9.2-1h4.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.1c-.3 0-.5.2-.5.5s.2.5.5.5zm14 11.5c0 .3.2.5.5.5h1.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-1.5c-.3 0-.5.3-.5.5z"/><path d="M54.8 56.8v-.3c0-.1-.2-.3-.2-.3h5.2v1.5c0 1.3 1 2.5 2.3 2.5h6.7c1.3 0 2-1.2 2-2.5v-1.4h57v1.3c0 1.3 1.2 2.5 2.5 2.5h6.7c1.3 0 2.8-1.2 2.8-2.5v-1.5h28.5c.5 3 3.1 6 6.4 6h3.3c5.3 7 13.5 12.1 22.9 13.2.4 1.7 1.9 3 3.7 3s3.4-1.4 3.7-3.1c9.5-1.1 17.7-6 23-13.4.2.1.3.3.5.3h3.4c2.8 0 5.2-2 6.1-5H283l79.2.1c2.2 0 4.4-.6 6.3-1.8 4.5-3 10-7.5 10-12.6s-5.4-9.7-10-12.6c-1.9-1.2-4-1.8-6.3-1.8l-120.5.1c-.5-3.1-3.1-5.4-6.4-5.4h-3.8c-.1 0-.2-.1-.3-.1-6-8.2-15.7-13.5-26.7-13.5-10.9 0-20.6 5.6-26.6 13.6h-3.3c-2.8 0-5.2 2-6.1 4h-28.8V26c0-1.3-1.4-2.8-2.8-2.8h-6.7c-1.3 0-2.5 1.4-2.5 2.8v1.3h-57V26c0-1.3-.6-2.8-2-2.8H62c-1.3 0-2.3 1.4-2.3 2.8v1.2h-5V27c0-3.3-2.8-5.7-6.1-5.7H31.2c-3.3 0-6.4 2.4-6.4 5.7v29.8c0 3.3 3.1 5.5 6.4 5.5h17.5c3.3-.1 6.1-2.3 6.1-5.5zm149.8 20.4c-1.2 0-2.3-.8-2.7-1.9.9.1 1.8.1 2.7.1s1.8 0 2.7-.1c-.4 1.1-1.4 1.9-2.7 1.9zM367.4 32c3.4 2.2 9.1 6.6 9.1 11 0 2.8-2.3 5.4-4.8 7.6-.1-.1-.2-.4-.4-.4h-7.1c-.3 0-.5.2-.5.5s.2.5.5.5h6.6c-1.2 1-2.3 1.9-3.3 2.6-1.5 1-3.3 1.6-5.2 1.6l-120.4.1V35.2h2.7c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.7v-3.7h120.4c1.7 0 3.5.5 5.1 1.5zm-132-6.8c2.5 0 4.4 1.8 4.4 4.2v25.9c0 2.5-2 4.8-4.4 4.8h-2.8c3.2-5 5-11.1 5-17.5s-1.8-12.5-5-17.5h2.8zm-30.8-13.7c17.1 0 31 13.9 31 31s-13.9 31-31 31-31-13.9-31-31 13.9-31 31-31zm-30 13.7h2c-3.2 5-5 11.1-5 17.5s1.8 12.5 5 17.5h-2c-2.5 0-4.9-2.4-4.9-4.8V29.5c.1-2.5 2.5-4.3 4.9-4.3zm-6.8 4v20h-2.3c-.3 0-.5.2-.5.5s.2.5.5.5h2.3v4h-28v-25h28zm-30 28.6c0 .2-.2.4-.4.4h-7.1c-.2 0-.4-.2-.4-.4V25.7c0-.2.2-.4.4-.4h7.1c.2 0 .4.2.4.4v32.1zm-10-28.4v7.9h-4.1c-.3 0-.5.2-.5.5s.2.5.5.5h4.1v16.1h-57v-25h57zm-58 28.4c0 .2-.2.4-.4.4h-7.1c-.2 0-.4-.2-.4-.4V25.7c0-.2.2-.4.4-.4h7.1c.2 0 .4.2.4.4v32.1zm-10-3.6H49c-1.9 0-3.2-1.4-3.2-3.2v-5.6c0-.1-.2-.1-.2-.1h7.2v2.6c0 .6.4 1 1 1s1-.4 1-1v-12c0-.6-.4-1-1-1s-1 .4-1 1v2.3h-7v-5.5c0-1.8 1.4-3.5 3.2-3.5h10.8v25zm-16-21.5v5.5h-13V27.4c0-.7.5-1.1 1.2-1.1h15.9c.7 0 1.3 0 1.3 1H49c-3-.1-5.2 2.5-5.2 5.4zm-13.4 7.5h22.4v3H30.4c-.4 0-.6-.6-.6-1v-.8c0-.3.2-1.2.6-1.2zm.4 5h12.9s.1 0 .1.1V51c0 3 2.3 5.2 5.2 5.2h.2c0 1-.6 1-1.3 1H32c-.7 0-1.2-.1-1.2-.9V45.2zm-4 11.6V27c0-2.2 2.2-3.7 4.4-3.7h17.5c2.2 0 4.1 1.6 4.1 3.7v.3h-2.6c0-1-1.1-2-2.3-2H32c-1.3 0-2.2.8-2.2 2.1v11.5c-1 .3-2 1.4-2 2.6v.8c0 1.3 1 2.3 2 2.6v11.5c0 1.3.9 1.9 2.2 1.9h15.9c1.3 0 2.3-1 2.3-2h2.4s.1.2.1.3v.3c0 2.2-1.9 3.5-4.1 3.5H31.2c-2.2-.2-4.4-1.5-4.4-3.6z"/><path d="M246.9 51.2h5.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.9c-.3 0-.5.2-.5.5s.2.5.5.5zm25.5 0h3.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.9c-.3 0-.5.2-.5.5s.3.5.5.5zm5.8-4.5c0 .3.2.5.5.5h2.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.4c-.2 0-.5.3-.5.5zm-22.4-5.5h5.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.3c-.3 0-.5.2-.5.5s.3.5.5.5zm16.4-.5c0 .3.2.5.5.5h7.2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-7.2c-.3 0-.5.3-.5.5zm38.3-5.5h5.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-5.9c-.3 0-.5.2-.5.5s.3.5.5.5zm47.9 16h2.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.3c-.3 0-.5.2-.5.5s.2.5.5.5zm-7.9-5h-2.4c-.3 0-.5.2-.5.5s.2.5.5.5h2.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm13.1-5h4.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.1c-.3 0-.5.2-.5.5s.2.5.5.5zm-4.1-6h1.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-1.5c-.3 0-.5.2-.5.5s.2.5.5.5zm-14.6 0h8.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-8.9c-.3 0-.5.2-.5.5s.2.5.5.5zm-11.7 0h2.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.8c-.3 0-.5.2-.5.5s.2.5.5.5zm-52.6 15.5c0 .3.2.5.5.5h2.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.3c-.3 0-.5.3-.5.5zm34.8 0c0 .3.2.5.5.5h2.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.3c-.3 0-.5.3-.5.5zm-17-4c0 .3.2.5.5.5h2.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.3c-.3 0-.5.3-.5.5zm-2.6-5.5h4.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.5c-.3 0-.5.2-.5.5s.3.5.5.5zm41.5 9H335c-.3 0-.5.2-.5.5s.2.5.5.5h2.3c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-2.3-3.5c0-.3-.2-.5-.5-.5h-2.4c-.3 0-.5.2-.5.5s.2.5.5.5h2.4c.3 0 .5-.2.5-.5zm-5.9-5.5h4.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.5c-.3 0-.5.2-.5.5s.2.5.5.5zm-38.9 5c1.7 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2-3.2 1.5-3.2 3.2 1.4 3.2 3.2 3.2zm0-4.4c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.6-1.2-1.2.5-1.2 1.2-1.2zm16.1 4.4c1.7 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2-3.2 1.4-3.2 3.2 1.5 3.2 3.2 3.2zm0-4.4c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2-1.2-.5-1.2-1.2.6-1.2 1.2-1.2zm16.2 4.4c1.7 0 3.2-1.4 3.2-3.2s-1.4-3.2-3.2-3.2-3.2 1.4-3.2 3.2 1.4 3.2 3.2 3.2zm0-4.4c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2zm13 1.2c0 1.7 1.4 3.2 3.2 3.2s3.2-1.4 3.2-3.2-1.4-3.2-3.2-3.2-3.2 1.5-3.2 3.2zm3.1-1.2c.6 0 1.2.5 1.2 1.2s-.5 1.2-1.2 1.2c-.6 0-1.2-.5-1.2-1.2s.6-1.2 1.2-1.2zM76.4 43.7c0 .3.2.5.5.5h4.7c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-4.7c-.2 0-.5.3-.5.5zm196.1-8.5h2.9c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-2.9c-.3 0-.5.2-.5.5s.3.5.5.5zm-66.5 280c-.2-.2-.5-.2-.7-.1-.2.2-.2.5-.1.7 1 1.2 2.1 2.3 3.2 3.3.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.2-.5 0-.7-1-.9-2.1-1.9-3.1-3.1zm59.6-21.8c0-5.2-1.1-10.2-3.3-14.8-.1-.2-.4-.4-.7-.2-.2.1-.4.4-.2.7 2.2 4.5 3.2 9.3 3.2 14.4 0 18.4-15 33.3-33.3 33.3-7.1 0-13.8-2.2-19.5-6.3-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7 5.9 4.2 12.8 6.5 20.1 6.5 18.9 0 34.3-15.4 34.3-34.4zm-6.9-18.9c.1.1.3.2.4.2.1 0 .2 0 .3-.1.2-.2.3-.5.1-.7-1-1.4-2-2.7-3.2-4-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7 1.1 1.3 2.2 2.6 3.1 3.9zm-12.6-10.9c2.3 1.1 4.4 2.5 6.3 4.1.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.1-.5-.1-.7-2-1.7-4.2-3.1-6.5-4.2-.2-.1-.5 0-.7.2-.1.2 0 .5.3.7zm-48.2 29.8c0-18.4 15-33.3 33.3-33.3 3.2 0 6.5.5 9.5 1.4.3.1.5-.1.6-.3.1-.3-.1-.5-.3-.6-3.2-.9-6.5-1.4-9.8-1.4-18.9 0-34.3 15.4-34.3 34.3 0 2.1.2 4.3.6 6.3 0 .2.3.4.5.4h.1c.3-.1.5-.3.4-.6-.4-2-.6-4.1-.6-6.2zm1.6 10c-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6.7 2.3 1.7 4.6 2.9 6.7.1.2.3.3.4.3.1 0 .2 0 .2-.1.2-.1.3-.4.2-.7-1.2-2-2.1-4.2-2.8-6.5z"/><path d="M231.3 315c11.9 0 21.6-9.7 21.6-21.6s-9.7-21.6-21.6-21.6-21.6 9.7-21.6 21.6 9.7 21.6 21.6 21.6zm0-41.1c4.6 0 8.8 1.6 12.1 4.3l-10 12.1c-.2.2-.1.5.1.7.1.1.2.1.3.1.1 0 .3-.1.4-.2l10-12.1c4.1 3.6 6.7 8.8 6.7 14.7 0 10.8-8.8 19.6-19.6 19.6-4.5 0-8.6-1.5-11.9-4.1l10-12.1c.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1l-10 12.1c-1.2-1-2.2-2.1-3.1-3.4l.1-.1 19.4-23.5c.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1L215 304.2c-2-3.1-3.2-6.7-3.2-10.6-.1-11 8.7-19.7 19.5-19.7zm44.7 19.5c0 2.3.4 4.5 1.2 6.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.6-.8-2-1.1-4.2-1.1-6.3 0-10 8.1-18.1 18.1-18.1 6.4 0 12.4 3.4 15.6 8.9.1.2.4.3.7.2.2-.1.3-.4.2-.7-3.4-5.8-9.7-9.4-16.5-9.4-10.6-.1-19.2 8.5-19.2 19zm19.2 18.2c-5.7 0-10.9-2.6-14.4-7.1-.2-.2-.5-.3-.7-.1-.2.2-.3.5-.1.7 3.7 4.7 9.2 7.4 15.2 7.4 10.6 0 19.1-8.6 19.1-19.1 0-1.3-.1-2.6-.4-3.9-.1-.3-.3-.4-.6-.4-.3.1-.4.3-.4.6.2 1.2.4 2.4.4 3.7 0 10-8.1 18.2-18.1 18.2zm99.6-44.4c0-.6-.4-1-1-1h-43c-.6 0-1 .4-1 1v53c0 .6.4 1 1 1h43c.6 0 1-.4 1-1v-53zm-1 52h-42v-51h42v51z"/><path d="M379.8 271.7c0-.3-.2-.5-.5-.5h-12c-.3 0-.5.2-.5.5v43c0 .3.2.5.5.5h12c.3 0 .5-.2.5-.5v-43zm-12 .5h11v42h-11v-42zm-142 36.9c.1.1.2.1.3.1.1 0 .3-.1.4-.2l18.3-22.3c.2-.2.1-.5-.1-.7s-.5-.1-.7.1l-18.3 22.3c-.1.2-.1.6.1.7zm85.5-53.5c.3 0 .5-.2.5-.5v-8.9l4.6.7c.3 0 .6-.1.6-.4 0-.3-.1-.5-.4-.6l-5.1-.8c-.1 0-.4 0-.5.1-.1.1-.2.2-.2.4v9.5c0 .3.2.5.5.5zm11.9-7.7l15.6 2.4h.1c.2 0 .5-.2.5-.4 0-.3-.1-.5-.4-.6l-15.6-2.4c-.3 0-.5.1-.6.4 0 .3.1.6.4.6zm16.1 60.4c-.3 0-.5.2-.5.5v26.3c0 .3.2.5.5.5s.5-.2.5-.5v-26.3c0-.3-.2-.5-.5-.5zm0-20.5c-.3 0-.5.2-.5.5v13.9c0 .3.2.5.5.5s.5-.2.5-.5v-13.9c0-.2-.2-.5-.5-.5zm-28-17.2c.3 0 .5-.2.5-.5v-9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v9c0 .3.2.5.5.5zm-16.1 37.5c-3.2 0-6.2-1-8.7-2.8-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7 2.7 2 5.9 3 9.3 3 8.6 0 15.7-7 15.7-15.7 0-1.7-.3-3.4-.8-5-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6.5 1.5.8 3.1.8 4.7-.1 8.1-6.7 14.7-14.8 14.7zm0-30.3c-8.6 0-15.7 7-15.7 15.7 0 2.8.8 5.6 2.2 8 .1.2.3.2.4.2.1 0 .2 0 .3-.1.2-.1.3-.4.2-.7-1.4-2.3-2.1-4.9-2.1-7.5 0-8.1 6.6-14.7 14.7-14.7 4.3 0 8.4 1.9 11.2 5.2.2.2.5.2.7.1.2-.2.2-.5.1-.7-3-3.5-7.4-5.5-12-5.5zm-82.5 57.4c.3.1.6.2.9.2.7 0 1.5-.4 1.8-1.1.5-1 .1-2.2-.9-2.7s-2.2-.1-2.7.9-.1 2.2.9 2.7zm-.1-2.2c.2-.5.8-.7 1.3-.5.5.2.7.8.5 1.3-.2.5-.8.7-1.3.5-.5-.2-.7-.8-.5-1.3z"/><path d="M447.3 179.2h-11.5v-1.5c0-.6-.4-1.5-.9-1.5H135.2c-.6 0-1.5.9-1.5 1.5v7.5h-2.4c-.6 0-.6.4-.6.9v203.2c0 .6 0 .9.6.9h308.4c.6 0 1-.3 1-.9v-4.1h6.5c.6 0 1.5-.5 1.5-1V179.9c.1-.6-.8-.7-1.4-.7zm-311.5-1h298v7h-298v-7zm280 21.6h-1.3c-.3 0-.5.2-.5.5s.3.5.5.5l.4.2c.2 0 .4.3.6.3.1 0 .3-.5.3-.5v127h-.1c-.4 0-1.1.2-2.8 1.6-.2.2-.2.5-.1.7.1.1.2.2.4.2.1 0 .2 0 .3-.1 1.6-1.3 2.1-1.4 2.2-1.4v-.5.5h.1v59.6H178.6c2.6-3 2.2-7.2.3-10-1.8-2.6-4.8-4.5-9-5.7-1-.3-2.1-.5-3.1-.7-2-.4-4-.9-5.9-1.7-2.5-1.1-5.1-3.4-5.3-6.5 0-.5 0-1.1.1-1.7.1-1.5.3-3-.7-4.2-1.6-2-4.8-1.1-7.1.7l-.3.3c-1.7 1.4-3.6 2.9-5.6 2.4-.2 0-.1 0-.2.1-2.1 1.5-6.9 1.8-8.9.2v-50.3c0-.1.8-.2 1.9-.4.3 0 .4-.3.3-.6 0-.3-.1-.5-.4-.4-.9.1-1.8.3-1.8.4V275h-.1.1c.2 0 .3-.1.4-.3.1-.3.2-.5-.1-.7-.2-.1-.3-.2-.3-.3V256c3 .6 5.6 1.2 8.3 1.7 3 .6 6.1 1.3 9.4 1.9 3.9.8 8.1 2 9.5 5.3 1.4 3.4-.9 7.1-2.8 10.5l-.5.9c-2.5 4.3-3.2 9.9.5 12.2 1.3.8 2.8 1 4.3 1.3 2.1.3 3.9.6 4.6 2.2.4.8.4 1.6.3 2.5-.1.8-.2 1.7-.3 2.5-.2 1.6-.4 3.2-.3 4.8.2 2.4 1.3 5.3 4 6.3.5.2 1 .3 1.6.3 1.6 0 3.7-.6 5-1.6.2-.1.5-.3.5-.4v32.7c0 5.4 4.4 10 9.8 10h11.1c-.1 0-.2.1-.2.3v.2c0 1 .2 1.9.7 2.9.1.2.3.3.5.3.1 0 .1 0 .2-.1.2-.1.4-.4.2-.7-.4-.8-.6-1.7-.6-2.5v-.1c0-.2-.1-.3-.2-.3H214v6.4c0 .6.5.6 1.1.6h15.3c.6 0 .7-.1.7-.6v-6.4h57.3c-.1 0-.3.7-.6 1.1-.2.2-.1.5.1.7.1.1.2.1.3.1.1 0 .3 0 .4-.1.4-.5.7-.7.8-1.7h17.3c.1 0 .1-.1.2-.1l34-5.3c2.5-.4 4.3-2.6 4.3-5.1v-3.5h54.9c1.7 0 3.1-1.1 3.1-2.7v-78.1c0-1.7-1.4-3.2-3.1-3.2h-54.9v-3.1c0-2.6-1.8-4.7-4.3-5.1l-14.7-2.3c-.3-1.1-.3-2.1.1-2.9 1-2 4-2.9 6.9-3.9 2.4-.8 4.6-1.5 5.7-2.7l.9-1.2c.3-.5.6-.9.9-1.3 1.1-1.1 3.1-1.6 5.2-1.2 1.6.3 3.2 1 4.5 2.1.8.7 1.5 1.5 2.3 2.4 1.6 1.8 3.2 3.7 5.7 4.2 1.5.3 3.8.1 5.4-1.1.9-.7 1.5-1.6 1.6-2.6.1-.9-.2-1.8-.4-2.5l-.9-2.4c-.6-1.6-1.3-3.2-1.6-4.9-1-5.7 3.8-7.2 8.8-8.8 1.1-.4 2.3-.7 3.4-1.1 2.3-.9 3.5-2.3 3.2-3.7-.3-1.3-1.6-1.9-2.5-2.3-1.5-.6-3.1-1-4.7-1.3-.4-.1-.8-.1-1.2-.2-1.1-.2-2.1-.3-3.1-.7-2.6-.9-4.7-3-6.5-4.8-1.6-1.6-2.5-2.6-2.7-4.8-.5-5.9 6.6-7 11.6-8h11.1c0 1-.1 1.2-.4 1.6-.1.2-.1.5.2.7.1 0 .2.1.2.1.2 0 .3-.1.4-.3.3-.6.5-1.3.5-2.1l1.2.3c.2 0 .4-.2.5-.2H416v12.7zm-175 35.4v2h-36v-2h36zm65 5v30.1c-3-1.5-6.8-2.4-10.6-2.4-11.3 0-20.9 7.4-24.2 17.6-1.2-5.9-3.6-11.4-7-16l3.4-3.1c.9-.8 1-2.3.2-3.2l-1.2-1.3c-.8-.9-2.3-1-3.2-.2l-3.3 3c-7.3-7.3-17.4-11.9-28.6-11.9-6.7 0-13 1.6-18.6 4.5l-3.1-4.7c-.3-.5-.9-.6-1.4-.3l-4.4 2.9c-.2.1-.4.4-.4.6s0 .5.1.8l3 4.6c-9.6 7.4-15.8 19-15.8 32 0 10.1 3.7 19.4 9.9 26.5l-4.3 4.6c-.2.2-.3.5-.3.7 0 .3.1.5.3.7l3.9 3.6c.2.2.4.3.7.3.3 0 .5-.1.7-.3l4.2-4.5c1.5 1.2 3.2 2.4 4.9 3.4l-1.8 4c-.7 1.6 0 3.6 1.6 4.3l2.5 1.2c.4.2.9.3 1.4.3 1.2 0 2.4-.7 2.9-1.9l1.9-4.1c.5.2 1.1.3 1.6.5l-.6 3.5c-.2 1.2.6 2.4 1.9 2.6l1.8.3h.4c1.1 0 2-.8 2.2-1.9l.5-3.3c1.4.1 2.8.2 4.2.2 19.6 0 36.1-14.1 39.7-32.7 3.3 10.2 12.9 17.6 24.2 17.6 3.9 0 7.5-.9 10.8-2.4-.1.1-.2.2-.2.4v30.4H186.4c-4.3 0-7.8-3.7-7.8-8v-91.6c0-4.3 3.5-7.4 7.8-7.4h119.4zm-11-6h-3v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-2v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-2v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-3v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-2v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-2v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-3v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-2v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9h-3v-6.6s.4-.4.5-.4h29.5c.1 0 0 .4 0 .4v6.6zm-30 1h30v.1l-3.4 1.9h-22.7l-3.9-2zm75.4 9.8c1.5.2 2.6 1.5 2.6 3.1v90.8c0 1.6-1.1 2.9-2.6 3.1l-33.4 5.1v-30.2c0-.3-.2-.5-.5-.5h-.1c8.5-4.1 14.4-12.8 14.4-22.9 0-9.8-5.6-18.4-13.8-22.6v-31l33.4 5.1zm4.6 8.2h54.9c.6 0 1.1.6 1.1 1.2v78.1c0 .6-.5.7-1.1.7h-54.9v-80zm-26.2 40.2c0 12.9-10.5 23.4-23.4 23.4s-23.4-10.5-23.4-23.4 10.5-23.4 23.4-23.4 23.4 10.5 23.4 23.4zm-96.7 39.4c1.4.3 2.8.6 4.2.8l-.5 3.3c-.1.7-.8 1.1-1.4 1l-1.8-.3c-.7-.1-1.1-.8-1-1.4l.5-3.4zm-15.7-10.2l-2.3-2.1c-6.9-7-11.2-16.5-11.2-27.1 0-12.8 6.3-24.1 15.9-31.1l2.8-1.9c5.8-3.5 12.5-5.5 19.8-5.5 21.2 0 38.5 17.3 38.5 38.5s-17.3 38.5-38.5 38.5c-9.5 0-18.2-3.5-25-9.3zm12.1 9.2l-1.9 4c-.5 1.1-1.9 1.6-3 1.1l-2.5-1.2c-1.1-.5-1.6-1.9-1.1-3l1.8-3.9c2.2 1.2 4.4 2.2 6.7 3zm-15.7-9.8c.6.6 1.2 1.1 1.8 1.7l-3.4 3.7-2.4-2.2 3.5-3.7.5.5zm7.8-63.3c-.8.5-1.5.9-2.2 1.5l-2.4-3.6 2.7-1.8 2.4 3.7-.5.2zm50.1 6.8l3.3-3c.5-.5 1.3-.4 1.8.1l1.2 1.3c.5.5.4 1.3-.1 1.8l-3.4 3c-.8-1.1-1.8-2.1-2.8-3.2zm-44.7 83.7h3c-.2 0 0 .1 0 .3v2.7c0 .3.2.5.5.5s.5-.2.5-.5v-2.7c0-.2-.5-.3-.7-.3h3.2c-.2 0-.5.1-.5.3v2.7c0 .3.2.5.5.5s.5-.2.5-.5v-2.7c0-.2 0-.3-.2-.3h3.2c-.2 0 0 .1 0 .3v2.7c0 .3.2.5.5.5s.5-.2.5-.5v-2.7c0-.2-.4-.3-.6-.3h2.6v5h-13v-5zm147.7-162c-4.1 1-8 3.2-7.6 8.1.2 2.5 1.2 3.7 2.9 5.4 1.9 1.9 4.1 4.1 6.9 5.1 1.1.4 2.2.5 3.3.7.4.1.8.1 1.2.2 1.5.3 3.1.7 4.5 1.2 1.2.5 1.8.9 1.9 1.6.3 1.3-1.7 2.2-2.5 2.6-1 .4-2.1.8-3.3 1.1-5 1.6-10.7 3.3-9.5 9.9.3 1.8 1 3.4 1.6 5.1.3.8.6 1.5.9 2.3.2.6.5 1.4.4 2.1-.1.8-.5 1.4-1.2 1.9-1.3 1-3.3 1.2-4.6.9-2.2-.4-3.6-2.1-5.2-3.9-.8-.9-1.6-1.8-2.4-2.5-1.4-1.2-3.1-2-4.9-2.3-2.4-.5-4.7.1-6.1 1.5-.4.4-.8.9-1.1 1.4-.3.4-.5.8-.8 1.1-.9 1.1-3 1.7-5.3 2.4-3.1 1-6.3 2-7.5 4.4-.5.9-.5 2-.3 3.1l-18.3-2.6c-.1 0-.1.2-.2.2h-11.5l1.7-1.4s0-.2.1-.2.1-.1.1-.2.1-.1.1-.2 0-.1.1-.2v-8.6c0-1.1-.8-2.3-2-2.3h-29.5c-1.2 0-2.5 1.3-2.5 2.3v8.3l.2.1c0 .1.1.1.1.2s.1.1.1.2.1.1.1.2.1.1.2.1c0 0 0 .3.1.3l1.7 1.4H243v-4.5c0-.6-.8-.5-1.4-.5H222v-2.5c0-.5-.2-.9-.7-1l-22.9-3 1.9-2.1c.4-.4.4-1-.1-1.4l-10.1-9.2c-.4-.4-1-.3-1.4.1l-3.2 3.5c-.2.2-.3.5-.3.7 0 .3.1.5.3.7l10.1 9.2s.1 0 .1.1l.1.1c.1 0 .1.1.2.1 0 0-.1 0 0 0l23.8 3.1v1.6h-16.3c-.6 0-.7 0-.7.5v4.5h-16.2c-5.4 0-9.8 4-9.8 9.4v56.5c0 .1-.2.3-.2.4.1.7-.5 1.2-.9 1.6-1.5 1.1-4.2 1.7-5.6 1.2-2.2-.9-3.2-3.5-3.3-5.5-.1-1.5.1-3 .3-4.6.1-.8.2-1.7.3-2.6.1-.9.1-2-.4-3-1-2-3.2-2.4-5.4-2.7-1.4-.2-2.9-.4-3.9-1.1-3.5-2.2-2-7.7-.1-10.8l.5-.9c2.1-3.5 4.4-7.5 2.9-11.3-1.5-3.8-6.1-5.1-10.3-5.9-3.3-.6-6.3-1.3-9.3-1.9-2.8-.6-5.5-1.2-8.5-1.8v-67.9h230.6zm-176 31.1l1.8-2 8.6 7.8-1.8 2-8.6-7.8zm-54.7 144.1c2 1.5 7.1 1 9.3-.4 2.3.6 4.4-1.2 6.1-2.6l.3-.3c1.5-1.2 4.3-2.5 5.7-.8.7.9.6 2.1.5 3.5-.1.6-.1 1.2-.1 1.8.2 3.6 3.1 6.2 5.9 7.4 1.9.9 4.1 1.4 6.1 1.8 1 .2 2 .5 3 .7 4 1.1 6.8 2.9 8.5 5.3 1.7 2.5 2.1 6.7-.4 9-.1.1-.2.4-.1.4h-44.7v-25.8zm306 25.8h-22v-201h22v201zm8-5h-6V186.1c0-.6-.4-.9-1-.9h-4v-4h11v202z"/><path d="M420.4 196.2h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm5.1 12h-5.1c-.3 0-.5.2-.5.5s.2.5.5.5h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-5.1 13h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm5.1 24h-5.1c-.3 0-.5.2-.5.5s.2.5.5.5h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-5.1-11h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm0 25h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm0 12h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm5.1 12h-5.1c-.3 0-.5.2-.5.5s.2.5.5.5h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-5.1 13h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm0 13h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm5.1 11h-5.1c-.3 0-.5.2-.5.5s.2.5.5.5h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-5.1 14h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm0 12h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5zm5.1 12h-5.1c-.3 0-.5.2-.5.5s.2.5.5.5h5.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-2 12h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm0 13h-3.1c-.3 0-.5.2-.5.5s.2.5.5.5h3.1c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-27-15.2c-.2-.7-.5-1.4-.6-2-.2-1.5.2-3 .7-4.4l.1-.3c.3-.7.6-1.5.7-2.3.4-2.7-1.1-5.6-3.6-6.7-4.8-2.2-7.3 1.6-9.8 5.3-1.9 2.8-3.8 5.7-6.8 6-2.6.2-5.1.2-7.7-.2-1.2-.2-2.2-.4-3.1-.9-1.6-1.1-2.3-3.1-2.9-5.1-.1-.4-.2-.8-.4-1.1-.5-1.4-1.1-2.7-1.8-4-.5-.9-1.4-2.1-2.7-2.4-.9-.2-1.8.2-2.6.6-.3.1-.6.3-.9.4-2.3.7-3-.2-4-1.5-.4-.5-.9-1.1-1.4-1.6-2.1-1.8-4.5-2-6.8-2-3.5 0-9.8.8-12 5.7-.7 1.6-.9 3.3-1 4.9l-.3 2.7c-.5 3.8-1 7.7.9 11.1.3.5.6 1 .9 1.4.5.7.9 1.3 1.2 2.1.3.7.4 1.5.6 2.4.2 1.1.4 2.2 1 3.2 1.6 2.8 6.7 4.3 10.5 4 2.9-.2 4.8-1.4 5.5-3.4.3-.9.4-1.9.4-2.9.1-1.8.2-2.9 1.2-3.3 1.2-.6 3.8-.1 8.9 5.2 2 2.1 4.8 3.5 7.7 3.8.2 0 .5 0 .7.1.6.1 1.1.1 1.6.2 1.1.3 1.7 1.1 2.4 1.9.6.7 1.2 1.4 2.1 1.9 1.1.5 2.4.7 3.6.7 2.5 0 5.1-.7 5.8-.9.9-.3 1.8-.7 2.7-1.1 1.7-.9 2.7-2.1 2.8-3.4 0-.5-.1-1.1-.2-1.6 0-.2-.1-.4-.1-.6-.5-3.3 1.1-3.9 3.2-4.7 1.5-.5 3.1-1.1 3.9-2.9.6-1.5.1-2.9-.4-4.3zm-.5 3.9c-.6 1.3-1.9 1.8-3.3 2.3-2.1.8-4.5 1.7-3.8 5.8 0 .2.1.4.1.6.1.4.2.9.2 1.3-.1 1.2-1.3 2.1-2.2 2.6-.8.4-1.6.8-2.5 1-2.6.8-6.5 1.4-8.7.3-.7-.4-1.2-1-1.8-1.6-.7-.9-1.5-1.8-2.9-2.2-.6-.2-1.2-.2-1.8-.3-.2 0-.5 0-.7-.1-2.6-.3-5.2-1.6-7.1-3.5-1.5-1.5-5.5-5.7-8.7-5.7-.5 0-.9.1-1.3.3-1.6.7-1.7 2.5-1.8 4.2 0 .9-.1 1.8-.3 2.6-.8 2.1-3.3 2.6-4.7 2.7-3.8.3-8.4-1.4-9.6-3.5-.5-.9-.7-1.9-.9-2.9-.2-.9-.3-1.7-.7-2.6-.3-.8-.8-1.5-1.3-2.2-.3-.5-.6-.9-.8-1.4-1.7-3.2-1.2-6.9-.8-10.5.1-.9.2-1.9.3-2.8.1-1.5.3-3.1.9-4.5 2.1-4.5 8.5-5.1 11.1-5.1 2.1 0 4.3.2 6.1 1.8.5.4.9.9 1.3 1.4 1.1 1.4 2.2 2.8 5.1 1.9.3-.1.7-.3 1-.4.7-.3 1.4-.6 2-.5.9.2 1.6 1.1 2 1.9.7 1.2 1.3 2.5 1.7 3.8.1.4.2.7.4 1.1.7 2.2 1.4 4.4 3.3 5.6 1 .7 2.3.9 3.5 1.1 2.6.4 5.3.4 7.9.2 3.5-.3 5.5-3.4 7.5-6.5 2.4-3.6 4.4-6.8 8.5-4.9 2.1 1 3.4 3.4 3 5.7-.1.7-.4 1.4-.6 2.1l-.1.3c-.6 1.5-1.1 3.2-.8 4.9.1.7.4 1.5.7 2.2.6 1.2 1.1 2.4.6 3.5zm-75.2-11.6c-1.3-.5-2.4-.5-3.5.1-2.4 1.3-3.7 4.9-4.5 8-.5 2.1-1.3 4.9-.3 7.4.6 1.4 1.9 2.6 3.4 3 .3.1.7.1 1 .1.8 0 1.5-.3 2.1-.7.1-.1.1-.2.2-.3.2-.8.4-1.7.6-2.5.8-3.6 1.6-7 3-10.4.2-.6.6-1.3.5-2.1-.2-1.1-1.1-2.1-2.5-2.6zm1.1 4.4c-1.5 3.5-2.2 6.9-3 10.5-.2.8-.3 1.5-.5 2.3-.6.4-1.3.5-2.1.3-1.2-.3-2.3-1.3-2.7-2.4-.8-2-.3-4.2.3-6.7.4-1.7 1.6-6.1 4-7.4.4-.2.9-.3 1.3-.3s.9.1 1.4.3c.4.2 1.7.7 1.8 1.8-.1.5-.3 1-.5 1.6zm-17.3-9.3c-.9-.1-1.6-.3-2.1-.5-.7-.3-1.1-.8-1.6-1.3-.7-.9-1.6-1.9-3.8-1.6-1.6.2-3.2 1.1-4 2.4-.6.9-.8 2-.4 3 .5 1.5 1.6 2.3 2.7 3.2.7.5 1.3 1 1.8 1.6.6.8 1.1 1.6 1.6 2.5.7 1.2 1.4 2.5 2.6 3.6.5.5 1.3 1.1 2.2 1.1h.3c1.6-.3 2.1-2.3 2.3-3 .3-1.1.7-2.2 1.2-3.2.9-2.1 1.8-4.1.9-5.7-.5-1.1-1.7-1.7-3.7-2.1zm1.9 7.3c-.5 1.1-1 2.3-1.3 3.4-.3 1.4-.8 2.1-1.5 2.2-.5.1-1-.2-1.7-.8-1.1-1-1.7-2.2-2.4-3.4-.5-.9-1-1.8-1.7-2.7-.5-.7-1.3-1.2-1.9-1.7-1-.8-2-1.5-2.4-2.7-.2-.7-.1-1.4.3-2.1.7-1 2-1.8 3.2-1.9h.5c1.3 0 1.8.6 2.4 1.3.5.6 1 1.2 1.9 1.6.6.3 1.4.4 2.3.5l.1-.5-.1.5c1.6.3 2.6.8 3 1.5.9 1.2.1 3-.7 4.8z"/><path d="M370.4 354.9c1.5.4 3.3.9 5.1.9h.5c3.1-.1 5.4-1.2 7.1-3.3.9-1.2 1.4-2.4 1.8-3.7.5-1.4.9-2.6 1.9-3.6 1.8-1.9 2.6-3.9 2.1-5.2-.3-.7-1.2-1.6-3.4-1.6s-4.4 1.2-6.5 2.3c-1.2.6-2.3 1.2-3.3 1.5-.9.3-1.9.5-2.8.8-1.7.4-3.5.8-5.1 1.8-2.7 1.7-3 3.5-2.8 4.8.1 2.3 2.4 4.5 5.4 5.3zm-2.3-9.3c1.4-.9 3.1-1.3 4.8-1.7 1-.2 1.9-.5 2.9-.8 1.1-.4 2.2-1 3.4-1.7 2.1-1.1 4.2-2.2 6.1-2.2h.1c.9 0 2.1.2 2.4 1 .4.9-.3 2.6-1.9 4.1-1.2 1.2-1.7 2.6-2.1 4-.4 1.2-.8 2.4-1.6 3.4-1.5 1.9-3.5 2.8-6.3 3-1.8.1-3.6-.4-5.2-.8-2.6-.8-4.6-2.7-4.9-4.6-.2-1.3.6-2.6 2.3-3.7zM343.8 219c.6 0 1-.4 1-1v-18.4c0-.6-.4-1-1-1s-1 .4-1 1V218c0 .5.4 1 1 1zm-5 4.8c.6 0 1-.4 1-1v-28.1c0-.6-.4-1-1-1s-1 .4-1 1v28.1c0 .6.4 1 1 1zm-190.5 85.8c0-1.6-1.3-3-3-3s-3 1.3-3 3 1.3 3 3 3 3-1.4 3-3zm-4.9 0c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2c-1.2 0-2-.9-2-2zm123 42.3c-1.6 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3-1.4-3-3-3zm0 5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-1 2-2 2zm125.2-148.1c0 1.6 1.3 3 3 3s3-1.3 3-3c0-1.6-1.3-3-3-3s-3 1.3-3 3zm3-2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM200.2 375.3c-1 0-1.9.8-1.9 1.9 0 1 .8 1.9 1.9 1.9s1.9-.8 1.9-1.9c0-1.1-.8-1.9-1.9-1.9zm0 2.7c-.5 0-.9-.4-.9-.9s.4-.9.9-.9.9.4.9.9-.4.9-.9.9zm25.3-8.5c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 3c-.5 0-1-.4-1-1 0-.5.4-1 1-1s1 .4 1 1-.4 1-1 1zm164.7-135.7c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 3c-.5 0-1-.4-1-1 0-.5.4-1 1-1s1 .4 1 1c0 .5-.5 1-1 1zm-30.6.9c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 3c-.5 0-1-.4-1-1 0-.5.4-1 1-1 .5 0 1 .4 1 1 0 .5-.4 1-1 1zM221.5 372.3l-1.2.9c-.2.2-.3.5-.1.7.1.1.3.2.4.2.1 0 .2 0 .3-.1l1.2-.9c.2-.2.2-.5.1-.7-.2-.2-.5-.3-.7-.1zm-3.8 2.5c-.9.5-1.9.8-2.9 1-.3.1-.4.3-.4.6.1.2.3.4.5.4h.1c1.1-.3 2.1-.6 3.1-1.1.2-.1.4-.4.2-.7-.1-.2-.4-.3-.6-.2zm-5.9 1.4h-3.2c-.3 0-.5.2-.5.5s.2.5.5.5h3.2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-6.3 0c-.5 0-1 0-1.5.1-.3 0-.5.3-.5.5 0 .3.2.5.5.5.5 0 1-.1 1.5-.1.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm-8.5-1.3c-.4-.2-.8-.5-1.3-.7-.2-.1-.5-.1-.7.1-.2.2-.1.5.1.7.4.3.9.6 1.3.8.1 0 .2.1.2.1.2 0 .4-.1.4-.3.3-.3.3-.6 0-.7zm-5.7-4.6c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7.8.8 1.5 1.5 2.2 2.1.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.2-.5 0-.7-.8-.5-1.5-1.2-2.2-2zm-3.7-4.2l-.3-.3c-.2-.2-.5-.2-.7-.1-.2.2-.2.5-.1.7l.3.3c.6.7 1.1 1.3 1.7 2 .1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5.1-.7-.6-.7-1.1-1.3-1.7-2zm-4.3-4.9c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7.6.6 1.3 1.3 2 2.2.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5 0-.7-.7-.9-1.3-1.6-2-2.3zm-32.4-24.1l-.8-.3c-.7-.2-1.3-.5-2-.8-.3-.1-.5 0-.7.3-.1.3 0 .5.3.7.7.3 1.4.5 2.1.8l.8.3h.2c.2 0 .4-.1.5-.3-.1-.3-.2-.6-.4-.7zm-9.7-13.9c-.2-.1-.5-.1-.7.2l-.2.3c-.5.8-1 1.7-1.3 2.4-.1.2 0 .5.2.7h.2c.2 0 .4-.1.5-.3.3-.7.8-1.5 1.3-2.3l.2-.3c.1-.2.1-.5-.2-.7zm1-1.7c.1 0 .1.1.2.1.2 0 .4-.1.4-.3.5-1 .9-1.9 1.2-2.9.1-.3-.1-.5-.3-.6-.3-.1-.5.1-.6.3-.3.9-.6 1.8-1.1 2.7-.2.2-.1.5.2.7zm3.1 13.3c-1-.5-1.8-1-2.6-1.5-.2-.1-.5-.1-.7.1-.2.2-.1.5.1.7.8.5 1.6 1 2.7 1.5.1 0 .2.1.2.1.2 0 .4-.1.4-.3.3-.2.2-.5-.1-.6zm8.4 3.5c-.2-.1-.5 0-.7.2-.1.2 0 .5.2.7 1 .5 1.7 1 2.4 1.6.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.2-.5 0-.7-.7-.6-1.6-1.2-2.6-1.7zm5.5 7.7c.3-.1.4-.3.4-.6-.3-1.1-.8-2-1.5-2.9-.2-.2-.5-.2-.7-.1-.2.2-.2.5-.1.7.6.7 1 1.5 1.3 2.5.1.2.3.4.5.4h.1zm.8 2.4c0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5v.4c.1.9.1 1.8.3 2.7 0 .2.3.4.5.4h.1c.3 0 .5-.3.4-.6-.1-.9-.2-1.7-.3-2.6v-.3zm3.2 7.4c-1-.5-1.6-1-2-1.7l-.4.2-.4.3c.4.9 1.2 1.5 2.5 2.1h.2c.2 0 .4-.1.5-.3 0-.2-.2-.5-.4-.6zm-23.9-26.7c0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5.1 1 .6 2 1.5 2.9.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5 0-.7-.7-.7-1.1-1.5-1.2-2.3zm38.1 29.4c-.1.3.1.5.4.6 1.2.2 2.1.5 2.6.9l.4-.4.2-.4c-.6-.5-1.6-.8-3-1.1-.3-.1-.6.1-.6.4zm-8.5-1.4c-1.1-.1-2.1-.3-2.9-.5-.3-.1-.5.1-.6.4s.1.5.4.6c.9.2 1.9.3 3 .5h.1c.2 0 .5-.2.5-.4 0-.3-.2-.6-.5-.6zm6 .6c-.7-.1-1.5-.1-2.3-.2l-.7-.1c-.3 0-.5.2-.5.5s.2.5.5.5l.7.1c.8.1 1.6.1 2.3.2h.1c.3 0 .5-.2.5-.4-.1-.3-.3-.6-.6-.6zm-31.1-44c0 .5-.1 1-.1 1.5 0 .3.2.5.4.6h.1c.2 0 .5-.2.5-.4.1-.5.1-1 .1-1.5 0-.3-.2-.5-.5-.5-.2-.2-.5 0-.5.3zm1.7-10.8c-.3.1-.4.3-.4.6.1.5.2 1 .4 1.5.1.2.3.4.5.4h.1c.3-.1.4-.3.4-.6-.1-.5-.2-1-.3-1.4-.1-.4-.4-.5-.7-.5zm-7.2-28.1c.3-.1.4-.3.4-.6-.1-.3-.3-.4-.6-.4l-.4.1c-.8.2-1.6.4-2.3.5-.3 0-.5.3-.4.6 0 .3.2.4.5.4h.1c.8-.1 1.7-.3 2.5-.5l.2-.1zm7.7 2.4c.4.5.7 1 .9 1.6.1.2.3.3.5.3h.2c.3-.1.4-.4.2-.7-.3-.6-.6-1.1-1-1.7-.2-.3-.4-.5-.6-.7-.2-.2-.5-.2-.7-.1s-.2.5-.1.7l.6.6zm1.6 4.1v.2c0 .7-.1 1.5-.3 2.4-.1.3.1.5.4.6h.1c.2 0 .4-.2.5-.4.3-1 .4-1.9.4-2.7v-.3c0-.3-.2-.5-.5-.5-.4.2-.7.4-.6.7zm-2.5 19.8c.1 0 .1 0 0 0 .3 0 .5-.3.5-.6-.1-.9-.2-1.9-.2-2.8 0-.3-.3-.5-.5-.5-.3 0-.5.2-.5.5 0 .9.1 1.9.2 2.9.1.3.3.5.5.5zm-1.4-26.2c.2 0 .4-.1.4-.3.1-.2 0-.5-.2-.7-.8-.4-1.8-.7-2.8-.7h-.2c-.3 0-.5.2-.5.5s.3.5.5.5h.2c.8 0 1.6.2 2.3.5.1.2.2.2.3.2zm1.2 20.3c.3 0 .5-.1.5-.3.1-.9.2-1.8.4-2.7.1-.3-.1-.5-.4-.6-.3 0-.5.1-.6.4-.2 1-.3 1.8-.4 2.7 0 .4.2.5.5.5zm1.6-5.6l.9-2.7c.1-.3-.1-.5-.3-.6s-.6.1-.6.3c-.3.8-.6 1.7-.9 2.7-.1.3.1.5.3.6h.1c.2.1.4-.1.5-.3zm83.6 79.8c-.6.2-1.1.5-1.4.9-.2.2-.2.5 0 .7.1.1.2.1.3.1.1 0 .3-.1.4-.2.3-.3.6-.5 1.1-.7.3-.1.4-.4.3-.7-.1-.1-.4-.2-.7-.1zm24.6-7.8c-.3-.1-.5 0-.7.2l-.3.8c-.3.6-.5 1.2-.8 1.8-.1.2 0 .5.2.7.1 0 .1.1.2.1.2 0 .4-.1.4-.3.3-.6.6-1.2.8-1.8l.3-.8c.2-.3.1-.6-.1-.7zm2.5-4.6c-.7.6-1.3 1.3-1.9 2.3-.1.2-.1.5.2.7.1.1.2.1.3.1.2 0 .3-.1.4-.2.5-.8 1.1-1.5 1.7-2 .2-.2.2-.5.1-.7-.2-.3-.5-.4-.8-.2zm-5.8 9.7c-.6.8-1.2 1.4-1.9 1.8-.2.1-.3.5-.1.7.1.1.3.2.4.2.1 0 .2 0 .3-.1.8-.5 1.5-1.2 2.2-2 .2-.2.1-.5-.1-.7-.3-.1-.6-.1-.8.1zm-9.8 2.6l-1.2-.1c-.5 0-1.1-.1-1.7-.1-.3 0-.5.2-.5.5s.2.5.5.5c.5 0 1.1.1 1.6.1l1.2.1c.3 0 .5-.2.5-.5.1-.3-.1-.5-.4-.5zm5.5.1c-.4.1-1 .1-1.6.1h-1.2c-.3 0-.5.2-.5.5s.2.5.5.5h1.2c.6 0 1.2 0 1.7-.1.3 0 .5-.3.4-.6 0-.2-.2-.4-.5-.4zm-11.2-.6H233c-.3 0-.5.5-.5.7 0 .3.2.7.5.7.9 0 1.8-.3 2.8-.2.3 0 .5-.3.5-.6.1-.2-.1-.6-.4-.6zm25.6-13.4c-.5 0-1.1.1-1.6.3-.3.1-.4.3-.4.6.1.2.3.4.5.4h.1c.4-.1.9-.2 1.4-.2.3 0 .5-.3.5-.5s-.2-.6-.5-.6zm12.1 2c-.9-.4-1.9-.7-2.9-1-.3-.1-.5.1-.6.4-.1.3.1.5.4.6 1 .3 1.9.6 2.8.9h.2c.2 0 .4-.1.5-.3-.1-.2-.2-.5-.4-.6zm2.6 1.5c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7.8.6 1.5 1.2 2.1 2 .1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5.1-.7-.7-.9-1.4-1.6-2.3-2.2zM301 384c-.8-.2-1.8-.4-3-.6-.3 0-.5.2-.6.4 0 .3.2.5.4.6 1.2.2 2.1.3 2.9.5h.1c.2 0 .4-.2.5-.4.1-.2 0-.4-.3-.5zm-6-1c-1.2-.2-2.1-.3-2.9-.5-.3-.1-.5.1-.6.4-.1.3.1.5.4.6.8.2 1.8.4 3 .5h.1c.2 0 .5-.2.5-.4 0-.3-.2-.5-.5-.6zm-5.6-1.4c-.8-.4-1.5-.9-2.2-1.5l-.1-.1c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l.1.1c.7.7 1.5 1.3 2.4 1.7.1 0 .1.1.2.1.2 0 .4-.1.4-.3.2-.3.1-.6-.1-.7zM284 375c-.1-.3-.4-.4-.7-.3-.3.1-.4.4-.3.7.4 1 .9 1.9 1.4 2.7.1.2.3.2.4.2.1 0 .2 0 .3-.1.2-.1.3-.5.2-.7-.5-.6-.9-1.5-1.3-2.5zm-1-2.7c-.2-.8-.4-1.5-.7-2.3l-.2-.6c-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6l.2.6c.2.8.4 1.5.7 2.3.1.2.3.4.5.4h.1c.3-.2.4-.5.3-.7zm20.9 12.8c-.2-.1-.5 0-.7.2-.1.2 0 .5.2.7.9.5 1.6 1 2.2 1.7.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5 0-.7-.6-.9-1.4-1.5-2.4-2zm-22.6-18.6c-.4-1.1-.8-2-1.2-2.8-.1-.2-.4-.3-.7-.2-.2.1-.3.4-.2.7.4.8.8 1.7 1.1 2.7.1.2.3.3.5.3h.2c.3-.2.4-.4.3-.7zM280 353c0-.3-.2-.5-.5-.5h-.6c-.8 0-1.6 0-2.4-.1-.3 0-.5.2-.5.5s.2.5.5.5c.8 0 1.6.1 2.4.1h.6c.3 0 .5-.2.5-.5zm5.3-1.3c-.8.3-1.7.5-2.8.6-.3 0-.5.3-.4.6 0 .3.2.4.5.4h.1c1.2-.1 2.2-.4 3-.7.3-.1.4-.4.3-.6s-.5-.4-.7-.3zm-11.7.5c-.8-.1-1.4-.2-1.9-.2-.5-.1-.9-.1-1.1-.1-.3 0-.5.2-.5.5s.2.5.5.5c.2 0 .5 0 1 .1s1.2.1 2 .2c.3 0 .5-.2.5-.5-.1-.2-.3-.5-.5-.5zm-68.9 10.2c.1.2.3.4.5.4h.1c.3-.1.4-.3.4-.6-.2-1-.6-1.9-1.2-2.9-.1-.2-.5-.3-.7-.2-.2.1-.3.5-.2.7.6.9.9 1.7 1.1 2.6zm-2.9-6.5c-.4-.5-.8-.9-1.2-1.4-.2-.2-.5-.2-.7-.1-.2.2-.2.5-.1.7.4.5.8.9 1.2 1.4.3.3.5.6.8.9.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5.1-.7-.2-.3-.5-.6-.8-.9zm2.3 12.2c.7-.8 1.5-1.6 1.7-2.8 0-.3-.1-.5-.4-.6-.3 0-.5.1-.6.4-.2.9-.8 1.6-1.4 2.2-.2.2-.2.5 0 .7.1.1.2.1.3.1.1.1.3.1.4 0zm-2.1 1.5c-.2-.1-.5-.1-.7.1-.6.9-.9 1.9-1 3 0 .3.2.5.5.5s.5-.2.5-.5c.1-.9.4-1.8.9-2.6.1-.1.1-.4-.2-.5zm-61.4-60c.3-.1.4-.4.3-.7-.1-.3-.3-.4-.6-.3 0 0-.2 0-.4.1-.5.1-1.5.2-2.6.3-.3 0-.5.3-.4.6 0 .2.2.4.5.4h.1c1.1-.2 2-.3 2.5-.3s.5 0 .6-.1zm228.9-85.7c.1 0 .2.1.3.1.2 0 .3-.1.4-.2.4-.7 1.1-1.4 1.9-2 .2-.2.3-.5.1-.7-.2-.2-.5-.3-.7-.1-.9.7-1.7 1.5-2.1 2.3-.2.2-.1.5.1.6zm3.1 7.1c.8.3 1.8.5 3 .7h.1c.2 0 .5-.2.5-.4 0-.3-.1-.5-.4-.6-1.2-.2-2.1-.4-2.8-.7-.3-.1-.5 0-.6.3-.2.4 0 .7.2.7zm12.2 1.3c-.3-.1-.5.1-.6.3s.1.5.3.6c1 .3 1.8.8 2.4 1.3.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.2-.5 0-.7-.7-.5-1.7-1-2.8-1.4zm-14.5-2.7c.1 0 .2 0 .3-.1.2-.2.2-.5 0-.7-.5-.5-.8-1.1-.9-1.8 0-.2-.1-.4-.1-.6 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5s.1.5.1.8c.2.9.6 1.6 1.2 2.2.1.1.2.2.4.2zm4.1-9.4c.1 0 .2 0 .2-.1.8-.4 1.7-.8 2.7-1.2.3-.1.4-.4.3-.6-.1-.3-.4-.4-.6-.3-1 .4-2 .8-2.8 1.3-.2.1-.3.4-.2.7 0 .1.2.2.4.2zm10.8-4.2c.1.2.3.4.5.4h.1c1-.2 1.9-.5 2.8-.7h.1c.3-.1.4-.3.4-.6-.1-.3-.3-.4-.6-.4h-.1c-.9.2-1.8.4-2.8.7-.3 0-.4.3-.4.6zm-5.4 1c-.3.1-.4.4-.3.6.1.2.3.3.5.3h.2c.9-.3 1.9-.6 2.9-.9.3-.1.4-.4.3-.6-.1-.3-.4-.4-.6-.3-1.1.3-2.1.6-3 .9zm-1.1 14.7v-.2l.1-.3z"/><path d="M381.6 232.6s.1 0 0 0c.3 0 .5-.2.6-.4 0-.3-.1-.5-.4-.6-1-.2-2-.3-3-.4l-.1.3-.1.7c1.1.1 2 .2 3 .4zm9.9-17.7h.1c2.2-.6 2.9-1 2.9-1.6 0-.1 0-.3-.1-.4-.2-.2-.5-.3-.7-.1-.2.1-.2.3-.2.4-.2.1-.7.4-2.1.7-.3.1-.4.3-.4.6.1.2.3.4.5.4zm-19.1 27l-3 .2c-.3 0-.5.3-.5.6s.2.5.5.5l3-.3c.3 0 .5-.3.5-.6s-.2-.4-.5-.4zm-6 .4c-1.5.1-2.4.2-3 .4-.3.1-.4.3-.4.6 0 .2.3.4.5.4h.1c.6-.1 1.5-.2 2.9-.3.3 0 .5-.3.5-.5-.1-.4-.4-.6-.6-.6zm12-.9l-3 .3c-.3 0-.5.3-.5.5 0 .3.2.5.5.5l3-.3c.3 0 .5-.3.4-.6s-.2-.5-.4-.4zm5.8-1c-.8.2-1.7.4-2.9.6-.3 0-.5.3-.4.6 0 .2.3.4.5.4h.1c1.2-.2 2.2-.4 3-.6.3-.1.4-.4.3-.6-.1-.3-.3-.5-.6-.4zm-39.7-2.1h-1.2c-.7 0-1.3 0-1.9.1-.3 0-.5.3-.4.6 0 .3.2.4.5.4h.1c.5-.1 1.1-.1 1.8-.1h1.2c.3 0 .5-.2.5-.5-.1-.2-.3-.5-.6-.5zm-6.1.9c-1.1.5-1.9 1.3-2.4 2.2-.1.2 0 .5.2.7.1 0 .2.1.2.1.2 0 .4-.1.4-.3.4-.7 1-1.3 2-1.7.3-.1.4-.4.2-.7s-.4-.5-.6-.3zm15 1.2c-.3-.1-.5 0-.7.3-.1.3 0 .5.3.7 1.1.5 2 1 2.4 1.4.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.2-.5 0-.7-.6-.9-1.8-1.5-2.7-1.8zm-2.9-1.1c-1-.3-2-.5-3-.7-.3-.1-.5.1-.6.4 0 .3.1.5.4.6 1 .2 1.9.4 2.9.7h.1c.2 0 .4-.1.5-.4.1-.2 0-.5-.3-.6zm27.2-48.7c-.1-.3-.4-.4-.6-.3l-.2.1c-1 .4-2 .7-2.5 1.7-.1.2 0 .5.2.7.1 0 .2.1.2.1.2 0 .3-.1.4-.3.4-.6 1.1-.9 2-1.2l.2-.1c.2-.2.4-.5.3-.7zm.6 9.1c.8.4 1.8.8 2.8 1.2h.2c.2 0 .4-.1.5-.3.1-.3 0-.5-.3-.7-1-.4-1.9-.8-2.8-1.2-.3-.1-.5 0-.7.3-.1.3.1.6.3.7zm-3.1-4.6c-.1-.3-.3-.4-.6-.4-.3.1-.4.3-.4.6.2.8.5 1.7 1 2.7.1.2.2.2.3.3.1 0 .2.1.2.1.2 0 .3-.1.4-.2.1-.2.1-.5-.1-.7-.3-.9-.7-1.7-.8-2.4zm14.2 9.3c2.7 1.1 2.9 1.1 3 1.1.3 0 .5-.2.5-.5s-.2-.5-.5-.5c0 0-.4-.1-2.7-1-.3-.1-.5 0-.7.3 0 .2.2.5.4.6zm-5.6-2.3c.9.4 1.9.8 2.8 1.2h.2c.2 0 .4-.1.5-.3.1-.3 0-.5-.3-.7-.9-.4-1.8-.8-2.8-1.2-.3-.1-.5 0-.7.3 0 .3.1.6.3.7zm19.2 1.7c.1 0 .2 0 .2-.1.9-.5 1.8-.9 2.7-1.2.3-.1.4-.4.3-.6s-.4-.4-.6-.3c-1 .4-1.9.8-2.8 1.3-.2.1-.3.4-.2.7 0 .1.2.2.4.2zm-4.9 3.4c.1 0 .2 0 .3-.1.7-.6 1.4-1.3 2.3-1.8.2-.2.3-.5.1-.7-.2-.2-.5-.3-.7-.1-.9.6-1.7 1.3-2.4 1.9-.2.2-.2.5 0 .7.1.1.3.1.4.1zm10.5-5.6h.1c1-.3 1.9-.5 2.9-.6.3 0 .5-.3.4-.6 0-.3-.3-.5-.6-.4-1 .1-2 .4-3 .6-.3.1-.4.3-.4.6.1.2.3.4.6.4zm-14.8 38.6c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7.7.8 1.5 1.5 2.2 2.1.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.1-.5-.1-.7-.7-.6-1.4-1.3-2.1-2zm4.6 3.5c-.2-.1-.5 0-.7.2-.1.2 0 .5.2.7.8.4 1.5.7 2.2 1l.5.2h.2c.2 0 .4-.1.5-.3.1-.3 0-.5-.3-.7l-.5-.2c-.6-.3-1.4-.6-2.1-.9zm10.3 34.1c0 .2.3.4.5.4h.1c.3 0 .5-.3.4-.6-.1-.9-.2-1.9-.2-2.9 0-.3-.2-.5-.5-.5s-.5.2-.5.5c0 1.2.1 2.2.2 3.1zm.6-15c0 .9-.1 1.8-.2 3 0 .3.2.5.5.5s.5-.2.5-.5c.1-1.2.2-2.1.2-3 0-.3-.2-.5-.5-.5-.2 0-.5.2-.5.5zm1.1 17.7c-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6.3 1 .8 1.9 1.3 2.8.1.2.3.2.4.2.1 0 .2 0 .3-.1.2-.1.3-.4.2-.7-.6-.7-1-1.6-1.3-2.5zm-1.8-8.8c0 .3.2.5.5.5s.5-.2.5-.4l.3-3c0-.3-.2-.5-.4-.5-.3 0-.5.2-.5.4-.3 1-.4 2-.4 3zm6.2 16.6c.1.1.2.1.3.1.1 0 .3-.1.4-.2.2-.2.1-.5-.1-.7-.8-.6-1.5-1.3-2.1-2-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7.6.7 1.4 1.4 2.2 2.1zm-5.5-31.9c-.3.1-.4.3-.4.6.2.9.3 1.8.4 2.9 0 .3.2.4.5.4s.5-.2.5-.5c-.1-1.1-.2-2.1-.4-3-.1-.4-.4-.5-.6-.4zm-5.4-10.2c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7.8.5 1.5 1.1 2.1 1.9.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.3-.5.1-.7-.7-.8-1.5-1.5-2.3-2.1zm4.1 7.9c.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.6-.4-1-.8-2-1.2-2.8-.1-.2-.4-.3-.7-.2-.2.1-.3.4-.2.7.4.7.8 1.6 1.1 2.6zm-3.4 106.5c-.3-1-.6-1.9-.8-2.8-.1-.3-.3-.4-.6-.4-.3.1-.4.3-.4.6.2.9.4 1.9.8 3 .1.2.3.3.5.3h.2c.2-.2.4-.5.3-.7zm-1.7 19.6c-.7.7-1.4 1.4-2.1 2-.2.2-.2.5-.1.7.1.1.2.2.4.2.1 0 .2 0 .3-.1.7-.6 1.5-1.3 2.2-2.1.2-.2.2-.5 0-.7-.2-.3-.5-.3-.7 0zm-1.6-30.6h.2c.3-.1.4-.4.3-.6-.3-.8-.4-1.5-.4-2.4v-.4c0-.3-.2-.5-.5-.5s-.5.2-.5.5v.5c0 1.1.2 1.9.5 2.7 0 .1.2.2.4.2zm.8 1.9c-.3.1-.4.4-.3.6.3.9.5 1.8.6 2.9 0 .2.3.4.5.4h.1c.3 0 .5-.3.4-.6-.2-1.1-.4-2-.6-3-.1-.3-.4-.4-.7-.3zm-3.6 32.6c-.9.8-1.6 1.5-2.1 2.3-.2.2-.1.5.1.7.1.1.2.1.3.1.2 0 .3-.1.4-.2.5-.7 1.1-1.3 2-2.1.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7-.1zm2.8-40.4h.1c.2 0 .4-.1.5-.4.1-.3.2-.5.3-.8 0 0 .1-.3 1.1-1.6.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1-1.2 1.4-1.3 1.8-1.3 1.9l-.3.9c0 .2.1.5.4.6zm4.8 23.2h.1c.3-.1.4-.4.3-.6-.3-1-.6-1.9-1-2.9-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6.3.9.7 1.9 1 2.8 0 .2.2.4.5.4zm4.6-35.5c-.7.7-1.4 1.4-2.1 2.2-.2.2-.2.5 0 .7.1.1.2.1.3.1.1 0 .3-.1.4-.2.7-.7 1.4-1.5 2.1-2.1.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0zm-4.5 43.4c-.3-.1-.5.1-.6.3-.1.5-.3 1.1-.5 1.6-.1.4-.3.7-.5 1.1-.1.2 0 .5.2.7.1 0 .2.1.2.1.2 0 .4-.1.4-.3.2-.4.4-.8.5-1.2.2-.6.4-1.2.5-1.7.2-.3.1-.5-.2-.6zm-1.7-36.1c.1.1.2.1.3.1.1 0 .3-.1.4-.2.6-.7 1.3-1.5 2-2.2.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0-.7.8-1.4 1.5-2 2.3-.2.2-.2.5 0 .7zm2.1 30.1c-.3 0-.5.3-.4.5 0 .5.1.9.1 1.4 0 .5 0 1-.1 1.5 0 .3.2.5.4.5h.1c.3 0 .5-.2.5-.4.1-.5.1-1.1.1-1.6s0-1-.1-1.5c-.1-.2-.3-.4-.6-.4zM229.5 202.2c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.5.3-.9.5-1.2.9zm.5 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.3.1.4.3.4zm5.9-3.2c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.5.3-.9.5-1.2.9zm.5 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.3.1.4.3.4zm73.6-15.4c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.5.2-.9.5-1.2.9zm.5 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.2.1.4.3.4zm5.9 5.1c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.5.2-.9.5-1.2.9zm.5 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.3.1.4.3.4zm-156.3-5.2c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.6.3-1 .5-1.2.9zm.4 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.3.1.4.3.4zm-6.6-25.3c-.2.3-.4.9 0 1.7.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.6.2-1 .5-1.2.9zm.4 10.5h.2c.3-.1.4-.4.3-.7-.2-.5-.1-.7 0-.8.2-.4.9-.5 1.1-.6.2 0 .4-.2.4-.4s-.1-.4-.2-.5c-.7-.4-1.1-2.5-1.2-3.9 0-.3-.3-.5-.5-.5-.3 0-.5.3-.5.5 0 .5.2 2.7 1.1 4-.4.2-.7.4-1 .8-.2.3-.4.9 0 1.7-.1.2.1.4.3.4zm733-29.5V61.3c0-3.9-2.7-7.1-6.5-7.1h-97.8c-.6 0-.7.5-.7 1.1v142.5c0 .6.2 1.5.7 1.5h97.8c3.8-.1 6.5-3.7 6.5-7.6zm-103-135.5h96.5c2.8 0 4.5 2.3 4.5 5.1v130.4c0 2.8-1.8 5.5-4.5 5.5h-96.5v-141z"/><path d="M835.4 91.3c4.9 0 9.6 1.9 13.2 5.3.4.4 1 .4 1.4 0s.4-1 0-1.4c-3.9-3.8-9.1-5.8-14.6-5.8-11.6 0-21.1 9.5-21.1 21.1 0 1.8.2 3.5.6 5.2.1.5.5.8 1 .8h.2c.5-.1.9-.7.7-1.2-.4-1.5-.6-3.1-.6-4.7.1-10.7 8.6-19.3 19.2-19.3zm0 40.3c2.2 0 4.4-.3 6.5-1 .5-.2.8-.7.6-1.3-.2-.5-.7-.8-1.3-.6-1.9.6-3.9.9-5.9.9-6.5 0-12.5-3.2-16-8.7-.3-.5-.9-.6-1.4-.3-.5.3-.6.9-.3 1.4 4 6 10.6 9.6 17.8 9.6zm12-4c.2 0 .4-.1.6-.2 5.3-4 8.5-10.3 8.5-16.9 0-4-1.1-7.9-3.2-11.2-.3-.5-.9-.6-1.4-.3-.5.3-.6.9-.3 1.4 1.9 3 2.9 6.6 2.9 10.2 0 6.1-2.8 11.7-7.7 15.3-.4.3-.5 1-.2 1.4.2.2.5.3.8.3z"/><path d="M844.9 121.8c.1 0 .2 0 .3-.1 1.8-1.6 3.3-3.7 4.1-5.9.1-.3 0-.5-.3-.6-.3-.1-.5 0-.6.3-.8 2.1-2.1 4-3.8 5.5-.2.2-.2.5 0 .7 0 0 .2.1.3.1zm4.4-11.3c0 .3.2.5.5.5s.5-.2.5-.5c0-8.2-6.7-14.9-14.9-14.9-1.3 0-2.5.2-3.8.5-.3.1-.4.3-.4.6.1.3.3.4.6.4 1.1-.3 2.3-.4 3.5-.4 7.8-.2 14 6.1 14 13.8zM827 98.1c-2.9 2-5.1 5-6 8.4-.1.3.1.5.4.6h.1c.2 0 .4-.1.5-.4.9-3.2 2.9-6 5.6-7.8.2-.2.3-.5.1-.7-.2-.2-.5-.2-.7-.1zm-5.3 15.2c-.1-.3-.3-.4-.6-.4-.3.1-.4.3-.4.6 1.4 6.9 7.6 11.9 14.6 11.9 1 0 2-.1 3-.3.3-.1.4-.3.4-.6-.1-.3-.3-.4-.6-.4-.9.2-1.9.3-2.8.3-6.5 0-12.2-4.7-13.6-11.1zm-18.9 49.9h65v2h-65zm0-86h65v2h-65zm8 93h49v1h-49zm57.6-43.6c-1.7-.4-3.7-.1-5.6.9-.3.2-.5.3-.8.5.3-.7.5-1.5.7-2.2.1.1.2.1.4.1.2.1.5.2.8.2.4 0 .8-.1 1.2-.4.6-.4.9-.9 1.2-1.4.9-1.5 1.4-3.2 1.4-4.9 0-.2-.1-.3-.2-.4-.1-.1-.3-.1-.4-.1-.8.2-1.5.5-2.1 1 .2-.8.2-1.7-.1-2.6-.4-1.7-1.3-3-2.5-3.8-.1-.1-.3-.1-.4 0-.1.1-.3.2-.3.3-.5 1.6-.6 3.4-.3 5.1v.2c-.5-.6-1.1-1-1.8-1.3-.1-.1-.3-.1-.4 0-.1.1-.2.2-.3.4-.3 1.7-.1 3.5.5 5.1.1.3.2.6.4.9-.5-.7-1.1-1.2-1.8-1.6-.1-.1-.3-.1-.4 0-.1.1-.3.2-.3.3-.5 1.8-.5 3.7-.2 5.6-.3-.6-.7-1.2-1.1-1.7-.1-.1-.3-.2-.4-.2-.2 0-.3.1-.4.2-1.2 2-2 4.2-2.2 6.5-.1-1-.4-1.9-.8-2.8-.1-.1-.2-.2-.4-.3-.2 0-.3 0-.4.1-1.7 1.6-3.1 3.5-4 5.7 0-.8-.1-1.6-.2-2.4 0-.2-.1-.3-.3-.4-.1-.1-.3-.1-.4 0-2 .9-3.6 2.7-4.5 5.1-.9 2.1-.9 4.2-.2 5.8-.8.2-1.7.3-2.5.4-.3 0-.5.3-.5.5 0 .3.2.5.5.5 1.1-.1 2.1-.3 3.1-.5 0 0 0 .1.1.1v.1c-.1 1 .4 2 1.3 2.6.8.6 1.8.8 2.6.9.8.1 1.7.2 2.5.2 1.8 0 3.6-.3 5.4-.9.1-.1.3-.2.3-.3 0-.1 0-.3-.1-.4-1.2-1.8-3.3-3.2-5.9-3.7-.4-.1-.8-.2-1.3-.2.9-.4 1.7-.8 2.6-1.2 0 0 0 .1.1.1v.1c.1.9.8 1.8 1.8 2.3.7.3 1.6.4 2.3.4h.4c2.6-.1 5.2-.8 7.4-2.1.1-.1.2-.2.2-.4s0-.3-.1-.4c-1.5-1.5-3.8-2.4-6.4-2.5-.8 0-1.5 0-2.2.2.9-.7 1.7-1.4 2.5-2.2v.1c.4.8 1.2 1.4 2.2 1.5h.4c.8 0 1.5-.2 2-.4 2.2-.8 4.2-2.2 5.8-3.9.1-.1.1-.3.1-.4 0-.2-.1-.3-.3-.4-1.7-.9-3.9-1-6.2-.4-.4.1-.8.3-1.2.5.5-.7 1-1.5 1.5-2.3.4.5 1.1.7 1.8.7h.4c.8-.1 1.5-.5 2.1-.9 1.8-1.2 3.3-2.8 4.3-4.6.1-.1.1-.3 0-.4-.1-.1-.2-.2-.4-.2zm-15.1 20.9c-2.2.6-4.5.8-6.7.4-.7-.1-1.5-.3-2.2-.7-.6-.4-1-1.1-.9-1.7 0-.1 0-.2-.1-.3 1.7-1 3.9-.8 5-.5 2 .5 3.8 1.5 4.9 2.8zm2.3-6.7c2 .1 3.9.7 5.2 1.8-2 1-4.2 1.6-6.4 1.6-.7 0-1.5 0-2.2-.3-.7-.3-1.1-.9-1.2-1.4 0-.1 0-.2-.1-.3 1.5-1.3 3.5-1.4 4.7-1.4zm8-19.3l-.1.1c0-.1 0-.1.1-.1zm1.9 2.3c-.2.4-.5.8-.9 1.1-.3.2-.8.3-1 .1h-.1c-.1-1.1.5-2.2.8-2.8.7-1 1.5-1.7 2.4-2.1-.1 1.3-.5 2.5-1.2 3.7zm-3-9c.7.7 1.3 1.6 1.5 2.8.2.7.3 1.9-.2 2.9h-.1c-.1 0-.3 0-.4-.1h-.1c-.2-.1-.3-.2-.4-.4-.3-.4-.4-.9-.5-1.3-.2-1.3-.1-2.6.2-3.9zm-2.6 4.2c.8.5 1.5 1.4 2 2.5.2.5.4 1.2.4 2-.1.3-.1.6-.2.9h-.1c-.3.1-.7-.1-1-.3-.3-.3-.5-.8-.7-1.2-.4-1.2-.5-2.5-.4-3.9zm.4 5.8c.4.4 1 .7 1.5.7-.2.7-.4 1.4-.6 2 0-.3-.1-.6-.2-.9-.2-.8-.5-1.5-.9-2.1 0 .2.1.3.2.3zm-2.2-1c.9.7 1.6 1.8 2 3.1.2.8.5 2.2-.1 3.4h-.2c-.4.1-.8-.1-1.1-.5-.3-.4-.5-1-.6-1.5-.3-1.5-.3-3 0-4.5zm-.2 6.6c.4.5 1 .8 1.6.9-.5.9-1.1 1.8-1.7 2.7.1-.5.1-.9.1-1.4 0-.9-.1-1.7-.3-2.5.2.1.3.2.3.3zm-3.9 3c.2-1.9.8-3.8 1.7-5.5.9 1.2 1.3 2.8 1.3 4.6 0 1-.2 2.8-1.4 4.1-.1 0-.1-.1-.2-.1-.5-.1-1-.5-1.2-1.1-.3-.6-.3-1.4-.2-2zm-1.4 3.9c.2-.8.4-1.6.4-2.4 0 .3.1.5.2.8.3.8.9 1.4 1.7 1.6-1.2 1.2-2.5 2.2-3.9 3.1.6-.7 1.2-1.8 1.6-3.1zm-4.6-.2c.8-2.1 2-4 3.6-5.5.6 1.6.6 3.5 0 5.5-.3 1.1-1.1 3-2.8 4l-.2-.2c-.5-.2-.9-.9-1-1.6-.1-.8.2-1.6.4-2.2zm-5.1 1.7c.8-1.9 2-3.4 3.4-4.2.3 2.2 0 4.4-.6 6.5-.2.6-.5 1.4-1 2-.5.5-1.2.8-1.8.6h-.3c-.7-1.8-.1-3.8.3-4.9zm3.7 2.6c.1-.3.2-.7.3-1 .3.6.7 1.2 1.3 1.4h.1l.1.1c-.9.4-1.7.8-2.6 1.1.4-.5.6-1.1.8-1.6zm13.7-6.5c1.7-.5 3.4-.5 4.8 0-1.4 1.4-3.1 2.5-4.9 3.1-.5.2-1.3.4-1.9.4-.6-.1-1.2-.4-1.4-.9 0-.1-.1-.1-.1-.2.8-1.4 2.5-2.1 3.5-2.4zm3.5-3.8c-.4.3-1 .6-1.6.7-.6.1-1.1-.1-1.4-.5 0-.1-.1-.1-.1-.1.1-.2.1-.3.2-.5v-.1c.6-1.1 1.7-1.9 2.4-2.3 1.4-.8 2.8-1.1 4.1-1-.8 1.6-2.1 2.8-3.6 3.8zm-57.4.9c.5.3 1.3.8 2.1.8h.3c.7 0 1.3-.3 1.8-.7.4.8.9 1.6 1.5 2.3-.4-.2-.8-.3-1.2-.5-2.2-.7-4.4-.5-6.2.4-.1.1-.2.2-.3.4s0 .3.1.4c1.6 1.7 3.6 3.1 5.8 3.9.6.2 1.3.4 2 .4h.4c1-.1 1.8-.7 2.2-1.5v-.1c.8.8 1.6 1.5 2.5 2.2-.7-.1-1.4-.2-2.2-.2-2.6.1-4.8 1-6.3 2.5-.1.1-.2.3-.1.4 0 .2.1.3.2.4 2.3 1.3 4.8 2 7.4 2.1h.4c.7 0 1.5-.1 2.3-.4 1-.5 1.7-1.3 1.8-2.3v-.1s0-.1.1-.1c.8.5 1.7.9 2.6 1.2-.4 0-.8.1-1.3.2-2.6.6-4.7 1.9-5.9 3.8-.1.1-.1.3-.1.4.1.1.2.3.3.3 1.7.6 3.5.9 5.3.9.9 0 1.7-.1 2.6-.2.8-.1 1.8-.3 2.6-.9.9-.6 1.4-1.6 1.3-2.6v-.1s0-.1.1-.1c1 .2 2 .4 3.1.5.3 0 .5-.2.5-.5s-.2-.5-.5-.5c-.9-.1-1.7-.2-2.5-.4.7-1.6.6-3.7-.3-5.8-1-2.4-2.6-4.2-4.5-5.1-.1-.1-.3-.1-.4 0-.1.1-.2.2-.3.4-.1.8-.2 1.6-.2 2.4-.9-2.2-2.3-4.1-4.1-5.7-.1-.1-.3-.1-.4-.1-.2 0-.3.1-.4.3-.4.8-.7 1.8-.8 2.8-.2-2.3-1-4.6-2.2-6.5-.1-.1-.2-.2-.4-.2-.1 0-.3 0-.4.2-.5.5-.8 1.1-1.1 1.7.4-1.8.3-3.8-.2-5.6 0-.1-.2-.3-.3-.3-.1-.1-.3 0-.4 0-.7.4-1.3 1-1.8 1.6.2-.3.3-.6.4-.9.6-1.6.7-3.4.4-5.1 0-.2-.1-.3-.3-.4-.1-.1-.3-.1-.4 0-.7.3-1.2.7-1.8 1.3v-.2c.3-1.7.2-3.5-.4-5.1 0-.1-.2-.3-.3-.3-.1-.1-.3 0-.4.1-1.2.8-2.1 2.1-2.5 3.8-.2.9-.2 1.8-.1 2.6-.7-.5-1.4-.9-2.1-1-.2 0-.3 0-.4.1-.1.1-.2.2-.2.4.1 1.7.6 3.4 1.5 4.9.3.4.6 1 1.2 1.4.4.3.8.4 1.2.4.3 0 .6-.1.8-.2.1 0 .3 0 .4-.1.2.8.4 1.5.7 2.2-.2-.2-.5-.3-.8-.5-1.9-1-3.8-1.4-5.6-.9-.2 0-.3.1-.3.3-.1.1-.1.3 0 .4 1.2 1.6 2.7 3.2 4.5 4.4zm13.4 10.4c-.1.6-.5 1.1-1.2 1.4-.7.3-1.6.3-2.2.3-2.2-.1-4.4-.6-6.4-1.6 1.3-1.1 3.1-1.7 5.2-1.8 1.1 0 3.2.1 4.7 1.4 0 .2 0 .2-.1.3zm7.6 3.1c.1.6-.3 1.3-.9 1.7-.7.5-1.5.6-2.2.7-2.2.4-4.6.2-6.7-.4 1.1-1.3 2.8-2.3 4.9-2.8 1.1-.3 3.3-.5 5 .5-.1.1-.1.2-.1.3zm-13.4-8c-.2.5-.7.8-1.4.9-.7.1-1.4-.1-2-.3-1.8-.7-3.5-1.7-4.9-3.1 1.4-.5 3.1-.5 4.8 0 1 .3 2.7 1 3.6 2.4 0 0-.1 0-.1.1zm10.5-3c1.5.9 2.7 2.3 3.4 4.2.4 1.1 1 3.1.3 4.9h-.3c-.6.1-1.2-.1-1.8-.6-.5-.5-.8-1.3-1.1-2-.5-2-.7-4.3-.5-6.5zm-.6 5.8c.1.3.2.7.3 1 .2.5.4 1.2.8 1.7-.9-.3-1.8-.7-2.6-1.1 0 0 .1 0 .1-.1h.1c.6-.3 1.1-.8 1.3-1.5zm-4.7-8.7c1.6 1.5 2.8 3.4 3.6 5.5.2.6.5 1.4.4 2.2-.1.7-.5 1.3-1 1.6-.1 0-.2.1-.2.2-1.7-1-2.5-2.9-2.8-4-.6-2-.6-3.9 0-5.5zm-1.4 3.3c.1.8.2 1.6.4 2.4.4 1.3.9 2.3 1.7 3.2-1.4-.9-2.8-2-4-3.1.7-.2 1.3-.8 1.7-1.6.1-.3.2-.6.2-.9zm-2.7-7c1 1.7 1.6 3.6 1.7 5.5.1.6.1 1.3-.2 2-.2.6-.7 1-1.2 1.1-.1 0-.2 0-.2.1-1.2-1.2-1.4-3.1-1.4-4.1 0-1.8.4-3.4 1.3-4.6zm-2 2.2c-.2.8-.3 1.6-.2 2.5 0 .5.1 1 .1 1.4-.6-.9-1.2-1.7-1.7-2.7.6-.1 1.2-.4 1.6-.9 0-.1.1-.2.2-.3zm-.4-6.3c.3 1.5.3 3 0 4.5-.1.5-.3 1-.6 1.5-.3.4-.7.6-1.1.5h-.2c-.6-1.2-.3-2.6-.1-3.4.4-1.3 1.1-2.4 2-3.1zm-2.9 2.9c-.1.3-.1.4-.2.7-.2-.7-.4-1.2-.6-2.2.5 0 1.1-.1 1.5-.5.1-.1.2-.1.2-.2-.4.6-.7 1.4-.9 2.2zm-2.6-5.2zm3.7-2.4c.1 1.3-.1 2.6-.5 3.9-.1.4-.3.9-.7 1.2-.3.3-.7.4-1 .3h-.1c-.1-.3-.1-.6-.2-.9 0-.8.2-1.5.4-2 .6-1.1 1.3-2 2.1-2.5zm-4.2-1.5c.3-1.1.8-2.1 1.5-2.8.3 1.3.4 2.6.1 3.9-.1.4-.2.9-.5 1.3-.1.2-.3.3-.4.4h-.1c-.1.1-.3.1-.4.1h-.2c-.3-1-.1-2.2 0-2.9zm.6 7.4h-.1c-.3.1-.7.1-1-.1-.4-.3-.7-.7-.9-1-.7-1.1-1.1-2.4-1.3-3.7.9.4 1.7 1.1 2.4 2.1.4.5 1 1.5.9 2.7zm.1 3.4c.7.4 1.8 1.1 2.4 2.3v.1c.1.2.1.3.2.5-.1 0-.1.1-.1.1-.3.4-.8.5-1.3.5-.6-.1-1.2-.4-1.6-.7-1.5-.9-2.7-2.2-3.7-3.7 1.3-.2 2.8.1 4.1.9zm28 49.6c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4s4.4-2 4.4-4.4c-.1-2.5-2-4.4-4.4-4.4zm0 7.7c-1.9 0-3.4-1.5-3.4-3.4s1.5-3.4 3.4-3.4 3.4 1.5 3.4 3.4-1.6 3.4-3.4 3.4zm44.7-3.6c-.3-.1-.5.1-.6.4-.1.2.1.4.2.6 0 .2.1.4.3.5.1 0 .1.1.2.1.2 0 .4-.1.4-.3.1-.2.1-.5 0-.8 0-.3-.2-.4-.5-.5zm3 4.1c-.3-.1-.5.1-.6.4-.1.2.1.4.2.6 0 .2.1.4.3.5.1 0 .1.1.2.1.2 0 .4-.1.4-.3.1-.2.1-.5 0-.8 0-.3-.2-.5-.5-.5zm-.4-8h.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-.5c-.3 0-.5.2-.5.5s.3.5.5.5zm-3.1 14.2l-.8-.3c-.3-.1-.5 0-.6.3-.1.3 0 .5.3.6l.8.3h.2c.2 0 .4-.1.5-.3 0-.2-.1-.5-.4-.6zm-8.9 1.1c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l.5.5c.1.1.2.1.4.1.1 0 .3 0 .4-.1.2-.2.2-.5 0-.7l-.6-.5zm42.8-122.6c-21.5 21.5-21.5 56.6 0 78.1 10.8 10.8 24.9 16.2 39.1 16.2 14.1 0 28.3-5.4 39.1-16.2 18.8-18.8 21.2-48 7.1-69.5l27.9-27.9c.8-.8 1.3-1.9 1.3-3.1 0-1.2-.5-2.3-1.3-3.1L1017 36c-1.7-1.7-4.5-1.7-6.2 0L983 63.9c-21.4-14.2-50.6-11.8-69.5 7zm76.8 76.8c-14.4 14.4-35.2 18.8-53.5 13.2l.6-.6c.2-.2.2-.5 0-.7s-.5-.2-.7 0l-.8.8c-.1.1-.1.1-.1.2-7.6-2.5-14.8-6.8-20.8-12.9-20.8-20.8-20.8-54.6 0-75.3 10.4-10.4 24-15.6 37.7-15.6 13.6 0 27.3 5.2 37.7 15.6 20.6 20.7 20.6 54.5-.1 75.3zm22-110.3c.9-.9 2.4-.9 3.3 0l9.6 9.6c.4.4.7 1 .7 1.7 0 .6-.2 1.2-.7 1.7L997.6 78c-1.8-2.5-3.7-4.8-5.9-7s-4.6-4.2-7-5.9l27.6-27.7z"/><path d="M952.6 61.1c-13.1 0-25.3 5.1-34.6 14.3-3.7 3.7-6.8 7.9-9.1 12.5l-1.1-1.1c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7l1.1 1.1c.1.1.2.1.3.1-.7 1.5-1.3 2.9-1.9 4.5l-.8-.8c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7l.8.8c.1.1.2.1.4.1h.1c-1.7 5.1-2.7 10.5-2.7 16 0 13.1 5.1 25.3 14.3 34.6s21.5 14.3 34.6 14.3c11.1 0 21.6-3.7 30.2-10.5v.3c.1.3.1.6 0 .9-.1.3-.3.5-.6.7-.3.1-.4.4-.3.7.1.2.3.3.5.3h.2c.5-.2.9-.7 1.1-1.2.2-.6.2-1.2-.1-1.7-.1-.1-.2-.2-.4-.3 1.3-1.1 2.6-2.2 3.8-3.4 9.2-9.2 14.3-21.5 14.3-34.6s-5.1-25.3-14.3-34.6-21.3-14.4-34.4-14.4zm33.9 82.8c-9 9-21.1 14-33.9 14-12.8 0-24.8-5-33.9-14-9-9-14-21.1-14-33.9 0-12.8 5-24.8 14-33.9 5.9-5.9 13.1-10.1 20.9-12.3-6.7 2.1-13.1 5.9-18.4 11.2-17.1 17.1-17.9 44.6-1.8 62.6.4.4 1 .4 1.4.1.4-.4.4-1 .1-1.4-15.4-17.2-14.7-43.5 1.7-59.9 17-17 44.7-17 61.7 0s17 44.7 0 61.7c-5.7 5.7-12.8 9.7-20.6 11.6-.5.1-.9.7-.7 1.2.1.5.5.8 1 .8h.2c8.1-2 15.6-6.1 21.5-12.1 15.9-15.9 17.6-40.6 5.1-58.4 6.3 8.3 9.7 18.3 9.7 28.9 0 12.7-5 24.7-14 33.8zm22.2-90c.1 0 .1 0 0 0 .3 0 .5-.2.6-.4l.3-1.9c0-.3-.1-.5-.4-.6-.3-.1-.5.1-.6.4l-.3 1.9c0 .2.2.5.4.6zm11.1-.1c.1.1.2.1.3.1.2 0 .3-.1.4-.2.2-.2.1-.5-.1-.7l-2.3-1.5c-.2-.2-.5-.1-.7.1-.2.2-.1.5.1.7l2.3 1.5zm-27.4 6.8c-.2-.2-.5-.2-.7 0l-1.1 1.1c-.2.2-.2.5 0 .7.1.1.2.1.4.1s.3 0 .4-.1l1.1-1.1c.1-.2.1-.5-.1-.7zm16.3 2.8c.1.1.2.1.4.1s.3 0 .4-.1c.2-.2.2-.5 0-.7l-.4-.4c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7l.3.4zm-6.1-9.6c.1 0 .3 0 .4-.1l1.1-1.1c.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0l-1.1 1.1c-.2.2-.2.5 0 .7.1.1.2.1.3.1zm-8.3 15.4c.1.1.2.1.4.1s.3 0 .4-.1c.2-.2.2-.5 0-.7l-.4-.4c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7l.3.4zm9.5 48.7h.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-.8c-.3 0-.5.2-.5.5s.2.5.5.5zm-2.4-21.1c.2.8.3 1.6.9 1.8.1 0 .2.1.3.1.2 0 .3 0 .5-.2s.3-.5.1-.7c-.1-.2-.4-.3-.6-.2-.1-.2-.2-.7-.2-1 0-.2-.1-.5-.1-.7-.1-.3-.3-.4-.6-.4-.3.1-.4.3-.4.6 0 .2 0 .4.1.7zm-2.2-9.2c.4-.1.5-.1.7.2.1.1.2.2.4.2.1 0 .2 0 .3-.1.2-.2.3-.5.1-.7-.6-.8-1.2-.6-1.6-.6-.4.1-.5.1-.7-.2-.2-.2-.5-.3-.7-.1-.2.2-.3.5-.1.7.6.8 1.2.7 1.6.6zm-27.6-24.4c.1.1.2.1.4.1s.3 0 .4-.1c.2-.2.2-.5 0-.7l-1.5-1.5c-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7l1.4 1.5zm-11.8-2.9c.1 0 .3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0l-.4.4c-.2.2-.2.5 0 .7 0 0 .2.1.3.1zm-13.7-1.5c.1 0 .3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0l-.4.4c-.2.2-.2.5 0 .7.1 0 .2.1.3.1zm-29.2 14c.1 0 .3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0l-.4.4c-.2.2-.2.5 0 .7.1.1.2.1.3.1zm-6.4 7.4c.1.1.2.1.4.1s.3 0 .4-.1c.2-.2.2-.5 0-.7l-.8-.8c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l.7.8zm-8.3 22.1l-.4.4c-.2.2-.2.5 0 .7.1.1.2.1.4.1s.3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.3-.2-.6-.2-.8 0zm.3 21.1h-.8c-.3 0-.5.2-.5.5s.2.5.5.5h.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm9.9 16.7h-.8c-.3 0-.5.2-.5.5s.2.5.5.5h.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm7.3 7.9c-.1-.3-.4-.4-.6-.3-.3.1-.4.4-.3.6l.4 1.1c.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.6l-.5-1.1zm8.3 7.4l-.4.4c-.2.2-.2.5 0 .7.1.1.2.1.4.1s.3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.3-.2-.7-.2-.8 0zm47.4.6l-2.6-.4c-.3 0-.5.1-.6.4 0 .3.1.5.4.6l2.6.4h.1c.2 0 .5-.2.5-.4.1-.3-.1-.6-.4-.6zm20.8-18.8l-.4.4c-.2.2-.2.5 0 .7.1.1.2.1.4.1s.3 0 .4-.1l.4-.4c.2-.2.2-.5 0-.7-.3-.2-.6-.2-.8 0zm3.1-6.1l-.8.8c-.2.2-.2.5 0 .7.1.1.2.1.4.1s.3 0 .4-.1l.8-.8c.2-.2.2-.5 0-.7s-.6-.2-.8 0z"/><path d="M956.7 150.8c-11.1.8-21.9-2.6-30.5-9.6-.4-.3-1.1-.3-1.4.1-.3.4-.3 1.1.1 1.4 8.1 6.6 18.2 10.1 28.6 10.1 1.1 0 2.2 0 3.3-.1.6 0 1-.5.9-1.1 0-.4-.5-.8-1-.8zm14.3-10.9c.1 0 .2 0 .2-.1 2.3-1.2 4.5-2.7 6.4-4.4.2-.2.2-.5.1-.7-.2-.2-.5-.2-.7-.1-1.9 1.7-4 3.1-6.3 4.3-.2.1-.3.4-.2.7.1.2.3.3.5.3zm-47-54.6c3.7-5 8.8-9 14.5-11.5.3-.1.4-.4.3-.7-.1-.3-.4-.4-.7-.3-5.9 2.6-11 6.7-14.9 11.9 0 0 0 .1-.1.1-.2-.1-.3-.1-.5-.1-.3 0-.5.2-.5.5s.2.5.5.5.6.3.6.6-.3.6-.6.6-.6-.3-.6-.6-.2-.5-.5-.5-.5.2-.5.5c0 .9.7 1.6 1.6 1.6.9 0 1.6-.7 1.6-1.6 0-.4-.1-.7-.3-.9l.1-.1zm-262.1 31.6c6.6 0 13.2-1.7 18.9-4.8.2-.1.3-.4.2-.7-.1-.2-.4-.3-.7-.2-5.6 3.1-12 4.7-18.5 4.7-21.4 0-38.7-17.4-38.7-38.7 0-21.4 17.4-38.7 38.7-38.7s38.7 17.4 38.7 38.7c0 12-5.4 23.1-14.8 30.5-.2.2-.3.5-.1.7.2.2.5.3.7.1 9.6-7.6 15.2-19 15.2-31.2 0-21.9-17.8-39.7-39.7-39.7s-39.7 17.8-39.7 39.7c0 21.8 17.8 39.6 39.8 39.6z"/><path d="M661.9 46.6c-16.9 0-30.6 13.7-30.6 30.6 0 16.9 13.7 30.6 30.6 30.6 16.9 0 30.6-13.7 30.6-30.6 0-16.9-13.8-30.6-30.6-30.6zm0 59.2c-15.8 0-28.6-12.8-28.6-28.6s12.8-28.6 28.6-28.6 28.6 12.8 28.6 28.6-12.9 28.6-28.6 28.6zm51.3-65.2c5.5 0 9.9-4.5 9.9-10s-4.5-9.9-9.9-9.9-10 4.5-10 9.9 4.5 10 10 10zm0-17.9c4.4 0 7.9 3.6 7.9 7.9 0 4.4-3.6 8-7.9 8-4.4 0-8-3.6-8-8 0-4.3 3.6-7.9 8-7.9z"/><path d="M643.4 60.7c.1 0 .3-.1.4-.2 1.9-2.1 4.1-3.8 6.5-5.1.2-.1.3-.4.2-.7-.1-.2-.4-.3-.7-.2-2.5 1.4-4.8 3.1-6.8 5.3-.2.2-.2.5 0 .7.1.2.3.2.4.2zm28 39.1c-3 1.3-6.2 1.9-9.6 1.9-4.7 0-9.1-1.3-12.8-3.6l7.9-9.6c.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1l-7.9 9.7c-1.6-1-3-2.3-4.3-3.6l16.9-20.6c.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1l-16.8 20.5c-3.7-4.3-6-9.9-6-16 0-4.6 1.3-9.1 3.7-13 .1-.2.1-.5-.2-.7-.2-.1-.5-.1-.7.2-2.5 4.1-3.9 8.8-3.9 13.6 0 14.1 11.5 25.6 25.6 25.6 3.5 0 6.8-.7 10-2 .3-.1.4-.4.3-.7 0-.5-.3-.6-.6-.5zm13.7-13.2c-.3-.1-.5 0-.7.3-1.4 3.3-3.7 6.4-6.4 8.8-.2.2-.2.5 0 .7.1.1.2.2.4.2.1 0 .2 0 .3-.1 2.9-2.5 5.2-5.7 6.7-9.1.1-.4-.1-.7-.3-.8z"/><path d="M661.9 51.6c-1.8 0-3.7.2-5.5.6-.3.1-.4.3-.4.6s.3.4.6.4c1.7-.4 3.5-.6 5.3-.6 6.8 0 12.9 2.8 17.4 7.2l-18 22c-.2.2-.1.5.1.7.1.1.2.1.3.1.1 0 .3-.1.4-.2l18-21.9c4 4.4 6.5 10.2 6.5 16.7 0 .3.2.5.5.5s.5-.2.5-.5c-.2-14.1-11.6-25.6-25.7-25.6z"/><path d="M759.7 46.1l-11.4-15.5c-.1-.1-.4-.2-.4-.3v-5.8c0-1.4-1.1-2.3-2.5-2.3h-2.5v-6.8c0-.6-.4-1.2-.9-1.2h-12.7c-.6 0-1.4.6-1.4 1.2v6.8h.3l-4.8-12.1c-.2-.4-.5-.9-.9-.9h-77.6c-.4 0-.9.3-1.1.6l-7 11.4V16c0-.6-.1-.7-.6-.7h-5.4v-1.8c0-.6-.2-1.2-.7-1.2h-7.6c-.6 0-.6.7-.6 1.2v1.8h-5.5c-.6 0-1.5.2-1.5.7v6.3h-6l1.9-2.1s0-.2.1-.2c0-.1.1-.2.1-.2 0-.1-.1-.2 0-.3l-.1-.1v-6.8c0-1-.7-2.2-1.8-2.2h-24.5c-1.1 0-1.7 1.2-1.7 2.2v6.8l-.1.1v.2c0 .1.1.1.1.2 0 0 0 .2.1.3l1.9 2.1h-7.5c-1.4 0-2.4.8-2.4 2.3v100.3c0 1.4 1 2.4 2.4 2.4h168.1c1.4 0 2.5-1 2.5-2.4V42.6l5.9 7.9c.2.2.4.4.7.4h.2c.2 0 .4-.1.6-.2l4.4-3.2c.1-.4.2-1-.1-1.4zm-29.9-29.9h11v6h-1.9l-.1-.5v-3.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.5c0 .1.2.5.2.5h-2l-.2-.5v-3.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.5c0 .1.2.5.3.5h-2l-.2-.5v-3.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.5c0 .1.3.5.4.5h-2.4v-6zm-106-2h5v1h-5v-1zm-7 3h18v5h-1v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-2v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-2v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-1v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-2v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-2v-2.8c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.8h-2v-5zm-8-4.5v4.6h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-1v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-1v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-2.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.5h-2v-4.6h24zm-24 6.2v-.6h24v.6l-2.7 3.4h-18.5l-2.8-3.4zm-7.6 5.3h60.1c.4 0 .7-.4.9-.7l7.2-12.3h76.3l4.8 12.1c.2.4.5.9.9.9h17.9c.3 0 .5 0 .5.3v20.7h-51.7c-8.2-8-19.7-13.5-32.3-13.5s-24 5.5-32.3 13.5h-12.8c-.2 0-.4.2-.6.3-2.1-3.9-6.3-6.6-11.1-6.6-4.7 0-8.8 2.3-11 6.3h-17.4V24.5c.2-.3.3-.3.6-.3zm129.1 74.1c3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4-6.4-2.9-6.4-6.4 2.9-6.4 6.4-6.4zm-44.4-64.5c12.1 0 23.1 5 31 13.1l.3.3c7.5 7.8 12.1 18.4 12.1 30 0 23.9-19.4 43.3-43.3 43.3s-43.3-19.4-43.3-43.3c-.2-23.9 19.3-43.4 43.2-43.4zM605.1 41c5.9 0 10.6 4.8 10.6 10.6s-4.8 10.6-10.6 10.6-10.6-4.8-10.6-10.6S599.2 41 605.1 41zm140.2 84.2H619.9c.1 0-.1 0-.1-.1v-2.3c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.3c0 .1.3.1.3.1h-41.9c-.3 0-.4-.1-.4-.4V47.2h16.4c-.5 1-.8 2.8-.8 4.3 0 7 5.7 12.7 12.6 12.7 7 0 12.6-5.7 12.6-12.7 0-1.5-.3-3.3-.8-4.3h10.8c-7 8-11.2 18.5-11.2 29.9 0 25 20.3 45.4 45.3 45.4 14.7 0 27.9-7.1 36.1-18v.2c0 4.6 3.8 8.4 8.4 8.4 4.6 0 8.4-3.7 8.4-8.4s-3.8-8.4-8.4-8.4c-1.4 0-2.7.4-3.9 1 3-6.1 4.7-13 4.7-20.2 0-11.4-4.2-21.9-11.2-29.9h49.8v77.6c.2.3 0 .4-.3.4zm9.4-76.7l-6.6-8.9c-.1-.1-.4-.2-.4-.3v-5.9l9.6 13-2.6 2.1z"/><path d="M706.3 108.5c2.1 0 3.8-1.7 3.8-3.8 0-.3-.2-.5-.5-.5s-.5.2-.5.5c0 1.6-1.3 2.8-2.8 2.8s-2.8-1.3-2.8-2.8 1.3-2.8 2.8-2.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5c-2.1 0-3.8 1.7-3.8 3.8s1.7 3.8 3.8 3.8z"/><circle cx="713.2" cy="30.6" r="3.2"/><path d="M605.1 59.6c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm0-14c3.3 0 6 2.7 6 6s-2.7 6-6 6-6-2.7-6-6 2.7-6 6-6zm136.2 32c.3 0 .5-.2.5-.5v-3.9c0-.3-.2-.5-.5-.5s-.5.2-.5.5v3.9c0 .3.2.5.5.5zm0 11.2c.3 0 .5-.2.5-.5v-2.4c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.4c0 .3.2.5.5.5zm0 7.7c.3 0 .5-.2.5-.5v-4.1c0-.3-.2-.5-.5-.5s-.5.2-.5.5V96c0 .2.2.5.5.5zm0 13.9c.3 0 .5-.2.5-.5v-2.6c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.6c0 .3.2.5.5.5zm0 9.7c-.3 0-.5.2-.5.5v4.2c0 .3.2.5.5.5s.5-.2.5-.5v-4.2c0-.2-.2-.5-.5-.5zm-6-3.2c-.3 0-.5.2-.5.5v2.5c0 .3.2.5.5.5s.5-.2.5-.5v-2.5c0-.3-.2-.5-.5-.5zm-13 3.2c-.3 0-.5.2-.5.5v1.9c0 .3.2.5.5.5s.5-.2.5-.5v-1.9c0-.2-.2-.5-.5-.5zm7-3.3c-.3 0-.5.2-.5.5v2.6c0 .3.2.5.5.5s.5-.2.5-.5v-2.6c0-.2-.2-.5-.5-.5zm-121 1.7c-.3 0-.5.2-.5.5v2.6c0 .3.2.5.5.5s.5-.2.5-.5V119c0-.3-.2-.5-.5-.5zm-11 3.7c-.3 0-.5.2-.5.5v1.9c0 .3.2.5.5.5s.5-.2.5-.5v-1.9c0-.3-.2-.5-.5-.5zm-8-30.7c-.3 0-.5.2-.5.5v1.6c0 .3.2.5.5.5s.5-.2.5-.5V92c0-.3-.2-.5-.5-.5zm0 10.6c-.3 0-.5.2-.5.5v1.6c0 .3.2.5.5.5s.5-.2.5-.5v-1.6c0-.3-.2-.5-.5-.5zm0 8.3c-.3 0-.5.2-.5.5v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.3-.2-.5-.5-.5zm0 7.8c-.3 0-.5.2-.5.5v2.9c0 .3.2.5.5.5s.5-.2.5-.5v-2.9c0-.3-.2-.5-.5-.5zm-7-38.5c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5s.5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zm0-12.5c-.3 0-.5.2-.5.5v2.9c0 .3.2.5.5.5s.5-.2.5-.5v-2.9c0-.3-.2-.5-.5-.5zm0 19c-.3 0-.5.2-.5.5v1.2c0 .3.2.5.5.5s.5-.2.5-.5v-1.2c0-.3-.2-.5-.5-.5zm0 8.5c-.3 0-.5.2-.5.5v6c0 .3.2.5.5.5s.5-.2.5-.5v-6c0-.2-.2-.5-.5-.5zm0 26.5c-.3 0-.5.2-.5.5v3.2c0 .3.2.5.5.5s.5-.2.5-.5v-3.2c0-.3-.2-.5-.5-.5zm186.3 66h-2.8c-3.3 0-6 2.5-6 5.8v170.7l6.4 22.9c.1.4.5.7 1 .7s.8-.3 1-.7l6.5-22.9c0-.1.1-.2.1-.3V193.1c0-3.4-2.9-5.9-6.2-5.9zm-.8 168.4V210.7c0-.3-.2-.5-.5-.5s-.5.2-.5.5v144.7l-5 6V209.2h11V359l-5 1.6v-5zm-6-150.4h11v3h-11v-3zm11-1h-11v-4h11v4zm-7.1-15h2.8c2.2 0 4.2 1.6 4.2 3.8v6.2h-11V193c.1-2.2 1.8-3.8 4-3.8zm1.5 193.2l-1.5-5.2h2.9l-1.4 5.2zm1.7-6.2h-3.5l-3.6-12.9v-.3l5-6v4.3c0 .2 0 .3.1.4.1.1.4.1.5.1l5.3-1.8v3.3l-3.8 12.9zm-16.9-221h-5.2v-6.7c0-.6 0-1.3-.5-1.3h-16.7c-.6 0-.8.7-.8 1.3v80.1c0 .6.2.6.8.6h.2v115.5c0 .6.6 1.5 1.1 1.5h14c.6 0 .9-.9.9-1.5V229.2h.5c.6 0 .5-.1.5-.6v-17c1 1.1 2.4 1.6 3.7 1.6h1.5c.6 0 .8-.3.8-.8v-56.3c0-.6-.3-.9-.8-.9zm-21.2-6h14v78h.1-14.1v-78zm13 195h-12v-115h12v115zm7-133h-.3c-1 0-1.7-.6-1.7-1.7v-1.7c0-1 .7-1.8 1.7-1.8.2 0 .3 0 .3-.1v5.3zm0-7.1c0-.1-.4-.1-.6-.1-1.4 0-2.4.7-3.4 1.8v-48.5h4v46.8zm-7.9 142.1h-10c-.6 0-1 .4-1 1s.4 1 1 1h10c.6 0 1-.4 1-1s-.4-1-1-1zm-42.7-187h-16.8c-.1 0-.7.4-.7.4v-1.1c0-1.1-.6-2.3-1.8-2.3h-4.3c-1.1 0-1.9 1.2-1.9 2.3v1.2c0-.1-.5-.5-.7-.5h-87.3v-3.5c0-1.2-.5-2.5-1.7-2.5h-5.7c-1.2 0-2.6 1.4-2.6 2.5v3.5H572c-2.4 0-4.3 2.3-4.3 4.7v206.9c0 2.4 1.9 4.4 4.3 4.4h5.7V390c0 .4.2.7.5.9.1.1.3.1.4.1.2 0 .4-.1.6-.2l3.2-2.2 3.2 2.2c.3.2.5.2.8.1.3-.2.3-.5.3-.9v-14.8H674c.2 0 .7-.2.7-.3v1.2c0 1.2.8 2.1 1.9 2.1h4.3c1.1 0 1.8-.9 1.8-2.1V375s.5.2.7.2h16.8c7 0 12.6-5.8 12.6-12.8V172.3c0-7-5.6-13.1-12.6-13.1zm-121.4-3.4c0-.1.6-.5.6-.5h5.7c.1 0-.3.5-.3.5v3.5h-6v-3.5zm6 232.3l-2-1.5c-.3-.2-.6-.2-1 0l-2 1.5v-12.9h5v12.9zm89.3-14.9h-3.3v-1.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.5h-97.7c-1.3 0-2.3-1.1-2.3-2.4V163.9c0-1.3 1-2.7 2.3-2.7h102c.2 0 .7.3.7.2v211.9c0-.1-.5-.1-.7-.1zm6.7 2.9c0 .1-.1.1 0 0l-3.9.1s-.1 0-.1-.1V158.3s0-.1.1-.1h3.8s.1 0 .1.1v217.8zm30-13.7c0 5.9-4.6 10.8-10.6 10.8h-5.4v-2.7c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.7h-10.3c-.1 0-.7-.1-.7 0V161.5s.5-.3.7-.3h16.8c5.9 0 10.6 5.2 10.6 11.1v190.1z"/><path d="M580.3 339.7c-.3 0-.5.2-.5.5V363c0 .3.2.5.5.5s.5-.2.5-.5v-22.8c0-.2-.2-.5-.5-.5zm0-170.5c-.3 0-.5.2-.5.5v157c0 .3.2.5.5.5s.5-.2.5-.5v-157c0-.3-.2-.5-.5-.5zm127 177.7c.3 0 .5-.2.5-.5v-2.2c0-.3-.2-.5-.5-.5s-.5.2-.5.5v2.2c0 .3.2.5.5.5zm0 5c.3 0 .5-.2.5-.5v-1.1c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.1c0 .3.2.5.5.5zm0 2.6c-.3 0-.5.2-.5.5v2.7c0 .3.2.5.5.5s.5-.2.5-.5V355c0-.3-.2-.5-.5-.5zm-6 1.1c-.3 0-.5.2-.5.5v1.1c0 .3.2.5.5.5s.5-.2.5-.5v-1.1c0-.3-.2-.5-.5-.5zm0 13.3c-.3 0-.5.2-.5.5v1.1c0 .3.2.5.5.5s.5-.2.5-.5v-1.1c0-.3-.2-.5-.5-.5zm-7.5-30.7c-.3 0-.5.2-.5.5v.9c0 .3.2.5.5.5s.5-.2.5-.5v-.9c0-.2-.2-.5-.5-.5zm-7.5-2.9c.3 0 .5-.2.5-.5v-1.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.5c0 .3.2.5.5.5zm0 31.7c-.3 0-.5.2-.5.5v2.2c0 .3.2.5.5.5s.5-.2.5-.5v-2.2c0-.3-.2-.5-.5-.5zm15-5.6c-.3 0-.5.2-.5.5v2.5c0 .3.2.5.5.5s.5-.2.5-.5v-2.5c0-.2-.2-.5-.5-.5zm-15-20.2c.3 0 .5-.2.5-.5v-1.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.5c0 .2.2.5.5.5zm0 6.3c.3 0 .5-.2.5-.5v-1.5c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.5c0 .3.2.5.5.5zm-21 18.6c-.3 0-.5.2-.5.5v3.1c0 .3.2.5.5.5s.5-.2.5-.5v-3.1c0-.3-.2-.5-.5-.5zm-9 4.1c-.3 0-.5.2-.5.5v1.1c0 .3.2.5.5.5s.5-.2.5-.5v-1.1c0-.3-.2-.5-.5-.5zm51-63.8c.3 0 .5-.2.5-.5v-1.6c0-.3-.2-.5-.5-.5s-.5.2-.5.5v1.6c0 .2.2.5.5.5zm-.5-17.4v1.6c0 .3.2.5.5.5s.5-.2.5-.5V289c0-.3-.2-.5-.5-.5s-.5.2-.5.5zm-122.5-97.3c-.3 0-.5.2-.5.5v157c0 .3.2.5.5.5s.5-.2.5-.5v-157c0-.3-.2-.5-.5-.5zm-117.8-20.5h1.3v52.9c0 4.2 3.4 8.1 7.6 8.1h9.5l3.1 9.7c1 3.4 4.1 5.3 7.7 5.3h21.8c3.5 0 6.6-1.9 7.7-5.3l3.1-9.7h9.5c4.2 0 8.1-3.9 8.1-8.1v-52.9h.8c4 0 7.2-2.9 7.2-6.9v-31.1h1.7c2.2 0 4.3-1.3 4.3-3.5V33.2c0-2.2-2.1-4-4.3-4h-.7v-1.8c0-3.2-2.9-6.2-6.1-6.2h-84.2c-3.2 0-5.7 2.9-5.7 6.2v1.8h-1.1c-2.2 0-3.9 1.8-3.9 4v96.5c0 2.2 1.6 3.5 3.9 3.5h1.1v31.1c-.1 4.1 3.5 6.9 7.6 6.9zm3.3 33h41.6c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-41.6v-6h4.3c-.1 0-.3.2-.3.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2.1-.4 0-.4h4.7c-.1 0 .3.2.3.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.6-.4-.7-.4h4.7c-.1 0 0 .2 0 .4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.2-.4-.3-.4h4.7c-.1 0-.4.2-.4.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2.1-.4 0-.4h4.7c-.1 0 .3.2.3.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.5-.4-.6-.4h4.7c-.1 0-.1.2-.1.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.2-.4-.3-.4h4.7c-.1 0-.4.2-.4.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2.2-.4.1-.4h4.7c-.1 0 .2.2.2.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.5-.4-.6-.4h4.7c-.1 0-.1.2-.1.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.1-.4-.2-.4h4.7c-.1 0-.5.2-.5.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2.2-.4.1-.4h4.7c-.1 0 .2.2.2.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.4-.4-.5-.4h4.7c-.1 0-.2.2-.2.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2-.1-.4-.2-.4h4.7c-.1 0-.5.2-.5.4v3.5c0 .3.2.5.5.5s.5-.2.5-.5v-3.5c0-.2.3-.4.2-.4h4.8v6H518c-.3 0-.5.2-.5.5s.2.5.5.5h25.7v15h-74v-15zm74-8h-74v-15h74v15zm-53.9 45.2l-2.9-9.1h27.2l-1.7 13h-16.8c-2.7-.1-5.1-1.4-5.8-3.9zm23.5 3.8l1.7-13h4.1l-3.4 13h-2.4zm9.8-3.8c-.8 2.5-3.1 3.9-5.8 3.9h-.6l3.4-13h5.9l-2.9 9.1zm14.5-11.2h-62.4c-3.1 0-5.6-3-5.6-6.1v-2.9h74v2.9c.1 3.1-2.9 6.1-6 6.1zm6.1-51h-74v-8h74v8zm2.8-10h-80.2c-2.9 0-5.7-2-5.7-4.9v-8.1h52.5c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-52.5v-9h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h5v6.5c0 .3.2.5.5.5s.5-.2.5-.5v-6.5h4v9h-32.4c-.3 0-.5.2-.5.5s.2.5.5.5h32.4v8.1c.1 2.9-2.1 4.9-5.1 4.9zm5.2-24h-91v-12h91v12zm-11.5-45.1c-.3 0-.5.2-.5.5v5.6h-84v-57h102v57h-17v-5.6c0-.2-.2-.5-.5-.5zm-79.5-72.7c0-2.1 1.5-4.2 3.7-4.2h84.2c2.1 0 4.1 2 4.1 4.2v1.8h-92v-1.8zm-3.2 3.8h97.8c1.1 0 2.3.9 2.3 2v12h-31c-.3 0-.5.2-.5.5s.2.5.5.5h31v2h-102v-2h63.6c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-63.6v-12c.1-1.1.8-2 1.9-2zm-1.8 98.5v-22.5h12v8.7c0 .3.2.5.5.5s.5-.2.5-.5v-8.7h4v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h4v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h5v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h16v8.7c0 .3.2.5.5.5s.5-.2.5-.5v-8.7h10v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h9v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h17v5.6c0 .3.2.5.5.5s.5-.2.5-.5v-5.6h17v22.5c0 1.1-1.2 1.5-2.3 1.5h-97.8c-1.2 0-1.9-.4-1.9-1.5z"/><path d="M540.2 119c1 0 1.9-.8 1.9-1.9s-.8-1.9-1.9-1.9-1.9.8-1.9 1.9.8 1.9 1.9 1.9zm0-2.7c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9zm-72.3 6.8c1.3 0 2.4-1.1 2.4-2.4 0-1.3-1.1-2.4-2.4-2.4-1.3 0-2.4 1.1-2.4 2.4 0 1.4 1.1 2.4 2.4 2.4zm0-3.7c.8 0 1.4.6 1.4 1.4s-.6 1.4-1.4 1.4-1.4-.6-1.4-1.4.6-1.4 1.4-1.4zm-279.4 15c.2 2.2 2.1 3.8 4.3 3.8h6.9c2.4 0 4.1-1.8 4.1-4.2 10 .9 21.3 4 33.4 7.2 14.7 3.9 29.8 8 42.1 8 7.3 0 13.6-1.4 18.4-5.1 6.1-4.7 9.2-12.6 9.2-24.1s-3-19.4-9.1-24.1c-12.8-9.8-37.1-3.4-60.5 2.9-12.1 3.2-23.4 6.3-33.4 7.2v-.1c0-2.4-1.7-4.7-4.1-4.7h-6.9c-2.2 0-4.1 1.9-4.3 4-.3 0-.5 0-.8-.1h-.1c-19.8-5-49.6-27.2-52.9-30.5-.4-.4-1-.4-1.4 0l-6.8 7c-.2.2-.3.5-.3.8s.2.6.4.7c7.3 5.3 16.2 9.7 24.7 13.2-20.6-5.4-40.7-9.3-52-.7-6.1 4.7-9.1 12.6-9.1 24.1 0 11.5 3 19.4 9.1 24.1 4.8 3.7 11.1 5.1 18.4 5.1 12.3 0 27.3-4.1 42-8 10.2-2.5 19.9-5.2 28.7-6.5zm-33.5-4.1c-13.5 3.4-24.2 6-29.5 1.9-2.8-2.2-4.1-6.2-4.1-12.2s1.3-10.1 4.1-12.2c2-1.5 4.6-2.1 7.9-2.1 5.7 0 13.1 1.9 21.7 4 3.4.8 7 1.7 10.7 2.5 7.3 1.8 15 3.4 23 4.2v7.2c-8 .8-15.7 2.4-23 4.2-3.7.8-7.4 1.7-10.8 2.5zM124.9 107c-3 2.4-4.5 6.6-4.5 13s1.5 10.6 4.5 13c2.1 1.7 5 2.3 8.5 2.3 1.1 0 2.4-.1 3.6-.2-8.5 1.7-15.4 2-19.5-1.1-3.2-2.5-4.8-7-4.8-14s1.6-11.5 4.8-14c2.3-1.7 5.3-2.4 9-2.4 3.1 0 6.6.5 10.4 1.2-5.1-.5-9.2-.1-12 2.2zm63.9 7.3c-12-1.3-24.3-4.5-34.9-7.4-16.8-4.6-30.1-8.2-37.5-2.6-3.8 2.9-5.6 8-5.6 15.6s1.8 12.7 5.6 15.6c2.7 2 6.1 2.9 10.2 2.9 7.2 0 16.6-2.5 27.3-5.4 10.6-2.9 22.9-6.1 34.9-7.4v2.5c-14 1.6-27.8 6.3-39.9 10.5-16.9 5.8-31.5 10.7-39.6 4.9-5-3.6-7.5-11.3-7.5-23.5s2.4-19.9 7.5-23.5c2.6-1.8 5.7-2.6 9.5-2.6 8.1 0 18.7 3.6 30.2 7.5 12.1 4.1 25.9 8.8 39.9 10.5v2.4zm53.2-4.7c13.5-3.4 24.2-6 29.5-1.9 2.8 2.2 4.1 6.2 4.1 12.2s-1.3 10.1-4.1 12.2c-5.4 4.2-16 1.5-29.5-1.9-3-.8-6.4-1.6-9.8-2.4-9-2.3-18.4-4.2-28.4-4.8v-6.4c10-.6 19.4-2.5 28.4-4.8 3.4-.6 6.8-1.4 9.8-2.2zm21.7 25.7c3.5 0 6.3-.7 8.5-2.3 3-2.4 4.5-6.6 4.5-13s-1.5-10.6-4.5-13c-2.8-2.2-6.9-2.7-11.9-2.2 8.4-1.7 15.2-1.9 19.3 1.2 3.2 2.5 4.8 7 4.8 14s-1.6 11.5-4.8 14c-4.1 3.1-11 2.9-19.4 1.2 1.2 0 2.4.1 3.5.1zm-59.9-10.1c14 .8 27.5 4.5 39.5 7.8 10.7 2.9 20 5.4 27.2 5.4 4.1 0 7.6-.8 10.3-2.9 3.8-2.9 5.6-8 5.6-15.6s-1.8-12.7-5.6-15.6c-7.3-5.6-20.7-2-37.5 2.6-12 3.3-25.5 7-39.5 7.8v-2.5c16-1 30.9-6.3 44.5-10.9 16.9-5.8 31.5-10.7 39.6-4.9 5 3.6 7.5 11.3 7.5 23.5s-2.4 19.9-7.5 23.5c-8.1 5.8-22.8.8-39.6-4.9-13.5-4.6-28.5-9.8-44.5-10.9v-2.4zm33.9-24.5c22.9-6.1 46.7-12.5 58.7-3.3 5.6 4.3 8.4 11.7 8.4 22.5s-2.7 18.2-8.3 22.5c-12 9.2-35.8 2.9-58.8-3.3-12.2-3.3-23.9-6.4-33.9-7.3v-3.2c16 1 30.7 6.2 44.2 10.8 11.6 4 22.2 7.6 30.4 7.6 3.9 0 7.3-.8 10.1-2.8 5.3-3.8 7.9-11.8 7.9-24.4s-2.6-20.5-7.9-24.4c-8.5-6.1-23.4-1-40.5 4.8-13.5 4.6-28.1 9.8-44.1 10.8v-3c9.9-.9 21.6-4 33.8-7.3zm-46.9 5.2c0-1.3.7-2.7 2-2.7h6.9c1.3 0 2.1 1.4 2.1 2.7V134c0 1.3-.8 2.2-2.1 2.2h-6.9c-1.3 0-2-.9-2-2.2v-28.1zm-56.7-29c4.6 3.9 22.7 17.4 39.6 25.3-9.1-2.7-30.5-9.7-45-19.8l5.4-5.5zm-33.5 65.6c-5.6-4.3-8.4-11.7-8.4-22.5s2.7-18.2 8.4-22.5c12.1-9.2 35.8-2.9 58.7 3.3 5.8 1.6 11.8 3.2 17.4 4.4.2 0 .3.1.4.1h.2c4.8 1.3 8.5 2 11.5 2.4v3.1c-14-1.6-27.6-6.3-39.6-10.4-17.1-5.8-32-10.9-40.5-4.8-5.3 3.8-8 11.8-8 24.4s2.6 20.5 7.9 24.4c2.7 2 6.1 2.8 10 2.8 8.2 0 18.9-3.6 30.5-7.6 12.1-4.1 25.6-8.8 39.6-10.4v3.3c-9 1.3-19 4-29.4 6.8-22.8 6.1-46.7 12.4-58.7 3.2zm874 99.8c-6.2 0-11.3 5.1-11.3 11.3s5.1 11.3 11.3 11.3 11.3-5.1 11.3-11.3-5.1-11.3-11.3-11.3zm0 20.6c-5.1 0-9.3-4.2-9.3-9.3s4.2-9.3 9.3-9.3 9.3 4.2 9.3 9.3-4.2 9.3-9.3 9.3z"/><path d="M968.3 253.6c0-3.5 2.8-6.3 6.3-6.3.3 0 .5-.2.5-.5s-.2-.5-.5-.5c-4 0-7.3 3.3-7.3 7.3 0 1.9.8 3.8 2.1 5.2.1.1.2.1.4.1s.3 0 .4-.1c.2-.2.2-.5 0-.7-1.3-1.3-1.9-2.8-1.9-4.5zm10.7-5.2c-.2.2-.2.5 0 .7 1.2 1.2 1.8 2.8 1.8 4.4 0 3.5-2.8 6.3-6.3 6.3-.3 0-.5.2-.5.5s.2.5.5.5c4 0 7.3-3.3 7.3-7.3 0-1.9-.8-3.8-2.1-5.2-.2-.1-.5-.1-.7.1z"/><path d="M993 238.6l.9-.9c.8-.8 1-1.8.6-2.9-.4-1.1-1.4-1.6-2.6-1.6h-17.3c-11.4 0-20.6 9.1-20.6 20.5s9.3 20.6 20.6 20.6 20.6-9.3 20.6-20.7c0-4.8-1.7-9.3-4.5-12.8l.8-.8c1.4 1.1 13 10.5 10.9 24.3-.1.5.3 1.1.8 1.1h.2c.5 0 .9-.4 1-.9 2.3-14.4-9.1-24.1-11.4-25.9zm-18.4 33.6c-10.3 0-18.6-8.4-18.6-18.6s8.4-18.6 18.6-18.6 18.6 8.4 18.6 18.6-8.3 18.6-18.6 18.6zm8.8-37h8.5c.5 0 .7.2.7.3 0 .1.2.4-.2.8l-3 3.1c-1.7-1.7-3.7-3.2-6-4.2zm-52.5-40.9c-6.2 0-11.3 5.1-11.3 11.3 0 6.2 5.1 11.3 11.3 11.3s11.3-5.1 11.3-11.3c0-6.2-5-11.3-11.3-11.3zm0 20.6c-5.1 0-9.3-4.2-9.3-9.3s4.2-9.3 9.3-9.3 9.3 4.2 9.3 9.3-4.1 9.3-9.3 9.3z"/><path d="M930.9 198.4c-.3 0-.5.2-.5.5s.2.5.5.5c3.5 0 6.3 2.8 6.3 6.3 0 1.4-.5 2.8-1.3 3.9-.2.2-.1.5.1.7.1.1.2.1.3.1.1 0 .3-.1.4-.2 1-1.3 1.5-2.8 1.5-4.5 0-4.1-3.2-7.3-7.3-7.3zm0 13.5c-3.5 0-6.3-2.8-6.3-6.3 0-1.6.6-3 1.6-4.2.2-.2.2-.5 0-.7-.2-.2-.5-.2-.7 0-1.2 1.3-1.9 3.1-1.9 4.9 0 4 3.3 7.3 7.3 7.3.3 0 .5-.2.5-.5s-.2-.5-.5-.5z"/><path d="M961 201.1c.1 0 .2.1.3.1.4 0 .8-.3.9-.7.2-.5-.1-1.1-.6-1.3-5.7-2-11.3-7.4-12.4-8.5l1-1c.8-.8 1-1.9.6-2.9-.4-1.1-1.4-1.6-2.6-1.6h-17.3c-11.4 0-20.6 9.1-20.6 20.5s9.3 20.6 20.6 20.6 20.6-9.3 20.6-20.7c0-4.8-1.7-9.3-4.5-12.8l.8-.8c1.3 1.4 7 7 13.2 9.1zm-30.1 23.2c-10.3 0-18.6-8.4-18.6-18.6 0-10.3 8.4-18.6 18.6-18.6 10.3 0 18.6 8.4 18.6 18.6.1 10.2-8.3 18.6-18.6 18.6zm8.8-37.1h8.5c.5 0 .7.3.7.4 0 .1.2.5-.2.8l-3 3.1c-1.6-1.8-3.7-3.3-6-4.3zm67.6-12c-11.4 0-20.6 9.3-20.6 20.6 0 11.4 9.3 20.6 20.7 20.6 4.8 0 9.3-1.7 12.8-4.5l.8.8c-1.3 1.2-6.8 7-9 13.1-.2.5.1 1.1.6 1.3.1 0 .2.1.3.1.4 0 .8-.3.9-.7 2-5.7 7.4-11.3 8.5-12.4l1 1c.5.5 1.2.8 1.9.8.4 0 .6-.1 1-.2 1.1-.4 1.6-1.4 1.6-2.6v-17.3c0-11.4-9.2-20.6-20.5-20.6zm-18.6 20.6c0-10.3 8.4-18.6 18.6-18.6 10.3 0 18.6 8.4 18.6 18.6 0 10.3-8.4 18.6-18.6 18.6-10.2 0-18.6-8.3-18.6-18.6zm37.1 17.4c0 .5-.3.7-.4.7-.1 0-.5.2-.8-.2l-3.1-3c1.8-1.7 3.3-3.8 4.3-6.1v8.6z"/><path d="M1007.4 184.5c-6.2 0-11.3 5.1-11.3 11.3 0 6.2 5.1 11.3 11.3 11.3s11.3-5.1 11.3-11.3c0-6.2-5.1-11.3-11.3-11.3zm0 20.6c-5.1 0-9.3-4.2-9.3-9.3s4.2-9.3 9.3-9.3c5.1 0 9.3 4.2 9.3 9.3s-4.2 9.3-9.3 9.3z"/><path d="M1013.7 195.8c0 3.5-2.8 6.3-6.3 6.3-1.4 0-2.8-.5-3.9-1.3-.2-.2-.5-.1-.7.1s-.1.5.1.7c1.3 1 2.8 1.5 4.5 1.5 4 0 7.3-3.3 7.3-7.3 0-.3-.2-.5-.5-.5s-.5.2-.5.5zm-6.3-6.3c1.6 0 3 .6 4.2 1.6.2.2.5.2.7 0 .2-.2.2-.5 0-.7-1.3-1.2-3.1-1.9-4.9-1.9-4 0-7.3 3.3-7.3 7.3 0 .3.2.5.5.5s.5-.2.5-.5c0-3.5 2.8-6.3 6.3-6.3zm-34.5 150.7H944c.2 0-.2-.7-.2-.9v-17.9c0-.2.2-.4.1-.6l-9.4-14.3h.3v-17.2c0-.2-.2-.4-.3-.5l-8.2-12.7c0-.1-.5-.1-.5-.2v-15.7c0-.2.2-.4.1-.6l-5.5-11.4h10.9c.6 0 1.5-.2 1.5-.8v-4.8c0-.6-.9-1.5-1.5-1.5h-83.4c-.6 0-1.1.9-1.1 1.5v4.8c0 .6.6.8 1.1.8h10.9l-1.9 4h-32.2v-26.9c0-.6-.4-1-1-1s-1 .4-1 1v26.9h-11c-.3 0-.5.2-.5.5s.2.5.5.5h11v86.1c0 .3.4.9.5.9h-17.1c-7.9 0-14.5 6.1-14.5 14v17.3c0 7.9 6.6 14.6 14.5 14.6h56.4c-.2 0-.3 0-.3.3 0 2.2 1.8 3.7 4.1 3.7h45.8c2.2 0 4.1-1.5 4.1-3.7 0-.3-.1-.3-.3-.3h56.8c7.9 0 13.8-6.7 13.8-14.6v-17.3c.3-7.8-5.6-14-13.6-14zm-31.4-20h-24.2c-.3 0-.5.2-.5.5s.2.5.5.5h24.9l-.4.5v17.6c0 .3.6.9.8.9H836.7c.2 0 .1-.7.1-.9v-17.6l.4-.7c.1.2.3.2.5.2h9.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-9.4v.2l8.4-12.2h87l8.4 12zm-9.8-32H896c-.3 0-.5.2-.5.5s.2.5.5.5h36.4l.5.3v16.7h-86v-16.7l.2-.3c.1.1.2 0 .3 0H867c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-19.4l6.7-11H925l6.7 11zm-82.9-45h82v3h-82v-3zm69.4 5l5.5 11H915c-.3 0-.5.2-.5.5s.2.5.5.5h9.1l-.3.2v14.8h-69v-14.8l.2-.2h39c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-38.3l5.5-11h57zm-93.4 91.1v-86.1h31.7l-3.4 6.5c-.1.1-.2.3-.2.5v15.7c0 .1 0 .1-.1.2l-7.9 12.7c-.1.2-.1.3-.1.5v17.2l-9.7 14.3c-.1.2-.2.4-.2.6v17.9c0 .3.2.9.4.9h-10.4c.1 0-.1-.7-.1-.9zm89.6 47.2c0 1.1-.9 1.7-2.1 1.7h-45.8c-1.1 0-2.1-.6-2.1-1.7 0-.3-.1-.3-.3-.3h50.4s-.1.1-.1.3zm70.4-14.6c0 6.8-5.5 12.3-12.3 12.3H806.1c-6.8 0-12.3-5.5-12.3-12.3v-17.3c0-6.8 5.5-12.3 12.3-12.3h166.3c6.8 0 12.3 5.5 12.3 12.3v17.3z"/><path d="M906.5 320.2h-53.9c-.3 0-.5.2-.5.5s.2.5.5.5h53.9c.3 0 .5-.2.5-.5s-.3-.5-.5-.5zm-18.5-32h-14c-.3 0-.5.2-.5.5s.2.5.5.5h14c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm10.7-28h11.2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-11.2c-.3 0-.5.2-.5.5s.2.5.5.5zm63.9 88.5c-8 0-14.5 6.5-14.5 14.5s6.5 14.5 14.5 14.5 14.5-6.5 14.5-14.5-6.5-14.5-14.5-14.5zm0 26.9c-6.9 0-12.5-5.6-12.5-12.5s5.6-12.5 12.5-12.5 12.5 5.6 12.5 12.5-5.6 12.5-12.5 12.5z"/><path d="M962.6 355.8c-4.1 0-7.4 3.3-7.4 7.4 0 4.1 3.3 7.4 7.4 7.4s7.4-3.3 7.4-7.4c0-4.1-3.3-7.4-7.4-7.4zm0 13.8c-3.5 0-6.4-2.9-6.4-6.4 0-3.5 2.9-6.4 6.4-6.4s6.4 2.9 6.4 6.4c0 3.5-2.8 6.4-6.4 6.4zm-141.5 9.6h-5.3c-9 0-16.3-7.5-16.3-16.5s7.3-16.5 16.3-16.5H847c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-31.2c-9.6 0-17.3 7.9-17.3 17.5s7.8 17.5 17.3 17.5h5.3c.3 0 .5-.2.5-.5s-.3-.5-.5-.5zm128.9 0h-31l-4.7-5.6c-3.4-4.1-8.3-6.4-13.7-6.4h-22c-5.1 0-9.9 2-13.2 5.8l-5.6 6.2h-22.9c-.3 0-.5.2-.5.5s.2.5.5.5H860c.1 0 .3 0 .4-.1l5.7-6.4c3.2-3.6 7.7-5.5 12.5-5.5h22c5 0 9.7 2.1 12.9 6l4.9 5.9c.1.1.2.1.4.1H950c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm13.4-34h-22.3c-.3 0-.5.2-.5.5s.2.5.5.5h22.3c7.3 0 13.7 5.1 15.7 12.1.1.2.3.5.5.5h.1c.3-.1.4-.5.3-.8-2-7.4-8.9-12.8-16.6-12.8zm-101.4 1h63.2c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H862c-.3 0-.5.2-.5.5s.2.5.5.5zM341.1 74.6c-1.7.3-3.3 2-3.3 3.9v46.6c0 3.8 3 6.9 7 7.5v9.1c0 3.6 2.2 6.5 5.6 6.5H366l1.2 5.3c.5 2.2 2.2 3.7 4.1 3.7h26.1c1.9 0 3.6-1.5 4.1-3.7l1.2-5.3h15.6c3.4 0 6.4-3 6.4-6.5v-9.1c3-.6 6-3.7 6-7.5V78.5c0-1.9-1.5-3.5-3.2-3.9-.1-2.9-3.2-5.4-6.7-5.4h-73c-3.5 0-6.6 2.5-6.7 5.4zm4.2 42.9c.3 0 .5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h5v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h5v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h5v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h4v5.8c0 .3.2.5.5.5s.5-.2.5-.5v-5.8h5v9h-89v-9h5v5.8c0 .3.2.5.5.5zm23.9 35.6l-1.1-4.9h23.5l-.8 7h-19.5c-1 0-1.8-.8-2.1-2.1zm22.6 2.1l.8-7h3.5l-1.6 7h-2.7zm7.8-2.1c-.3 1.3-1.2 2.1-2.1 2.1h-1.9l1.6-7h3.6l-1.2 4.9zm18.8-6.9h-67.9c-2.3 0-3.6-2.1-3.6-4.5v-3.5H394c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-47.3v-5h76v5H399c-.3 0-.5.2-.5.5s.2.5.5.5h23.7v3.5c.1 2.4-2.1 4.5-4.3 4.5zm4.9-16h-77.9c-2.8 0-5.6-2.1-5.6-5.1v-3.9h89v3.9c0 3.1-2.6 5.1-5.5 5.1zm5.5-51.7v8.7h-63.9c-.3 0-.5.2-.5.5s.2.5.5.5h63.9v21h-89v-21h19c.3 0 .5-.2.5-.5s-.2-.5-.5-.5h-19v-8.7c0-1 1.2-2.3 2.1-2.3h84.9c1 0 2 1.3 2 2.3zm-3.4-4.3h-82.1c.2-1 2.1-3 4.5-3h73c2.5 0 4.5 2 4.6 3zm79.8 208.3c-21 0-38.2 17.1-38.2 38.2s17.1 38.2 38.2 38.2c21 0 38.2-17.1 38.2-38.2s-17.1-38.2-38.2-38.2zm26.3 63l-3.3-3.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3c-6.5 6.1-15.2 9.9-24.8 9.9-9.6 0-18.4-3.8-24.8-9.9l3.3-3.3c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3c-6.1-6.5-9.9-15.2-9.9-24.8 0-9.6 3.8-18.4 9.9-24.8l3.3 3.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-3.3-3.3c6.5-6.1 15.2-9.9 24.8-9.9 9.6 0 18.4 3.8 24.8 9.9l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l3.3-3.3c6.1 6.5 9.9 15.2 9.9 24.8 0 9.6-3.8 18.3-9.9 24.8z"/><path d="M520.4 303.5l2.1-2.1-.4 4.4c0 .2.1.4.3.5h.2c.1 0 .3-.1.4-.1l3.1-3.1c.2-.2.2-.5 0-.7s-.5-.2-.7 0l-2.1 2.1.4-4.4c0-.2-.1-.4-.3-.5-.2-.1-.4 0-.6.1l-3.1 3.1c-.2.2-.2.5 0 .7s.5.2.7 0zm-30.1 32.1c-.5-.5-1.1-.6-1.7-.3-.6.3-.9.9-.9 1.5l.2 2.5c0 .3-.2.5-.3.5-.1 0-.3.1-.6-.1l-1.3-1.3c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l1.3 1.3c.3.3.7.4 1.1.4.2 0 .4 0 .6-.1.6-.3.9-.9.9-1.5l-.2-2.5c0-.3.2-.5.3-.5.1 0 .3-.1.6.1l1.3 1.3c.2.2.5.2.7 0s.2-.5 0-.7l-1.3-1.3z"/><path d="M550.4 267.8c-2-2-5.3-2-7.3 0 0 0-.1.1-.1.2l-2.2 3.3c-1.1 1.6-.8 3.8.5 5.2l3.4 3.4-1.6 1.6c-4-3.3-9.9-3.1-13.6.7 0 0 0 .1-.1.1-7-4.4-15.3-7-24.2-7-25.1 0-45.5 20.4-45.5 45.5s20.4 45.5 45.5 45.5 45.5-20.4 45.5-45.5c0-8.8-2.6-17.1-6.9-24.1 0 0 .1 0 .1-.1 3.7-3.7 3.9-9.6.7-13.6l1.6-1.6 3.4 3.4c.8.8 1.9 1.2 2.9 1.2.8 0 1.6-.2 2.3-.7l3.3-2.2c.1 0 .1-.1.2-.1 2-2 2-5.3 0-7.3l-7.9-7.9zm-45.2 96.3c-24 0-43.5-19.5-43.5-43.5s19.5-43.5 43.5-43.5 43.5 19.5 43.5 43.5-19.5 43.5-43.5 43.5zm37.4-69.2c-.7-1.1-1.5-2.1-2.4-3.1.6-.7 1.2-1.4 1.7-2.1.2-.2.1-.5-.1-.7-.2-.2-.5-.1-.7.1-.4.6-1 1.3-1.5 1.9-2.5-2.9-5.4-5.5-8.5-7.7 3.2-3 8.1-2.9 11.3.1 0 0 0 .1.1.1.6.6.5 2-.2 3.7-.1.2 0 .5.2.7h.2c.2 0 .4-.1.5-.3.4-.9.6-1.7.7-2.4 1.6 3.2 1.2 7.1-1.3 9.7zm14.2-13.5l-3.2 2.1c-.8.6-2 .4-2.7-.3l-3.4-3.4 1.1-1.1c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-1.1 1.1-3.4-3.4c-.7-.7-.8-1.9-.3-2.7l2.1-3.2c1.2-1.2 3.2-1.1 4.4.1l7.8 7.8c1.3 1.2 1.3 3.2.1 4.4z"/><path d="M478.9 290.2c.1 0 .2 0 .3-.1 3.1-2.7 6.6-4.8 10.4-6.4.3-.1.4-.4.3-.7-.1-.3-.4-.4-.7-.3-3.9 1.6-7.4 3.8-10.6 6.5-.2.2-.2.5-.1.7.2.2.3.3.4.3zm13.4 68.5c-6.1-2.1-11.7-5.7-16.2-10.4-.2-.2-.5-.2-.7 0-.2.2-.2.5 0 .7 4.6 4.8 10.3 8.5 16.6 10.6h.2c.2 0 .4-.1.5-.3 0-.2-.2-.5-.4-.6zm26.3-.2c-4.3 1.5-8.8 2.3-13.4 2.3-2.6 0-5.1-.2-7.6-.7-.3-.1-.5.1-.6.4-.1.3.1.5.4.6 2.5.5 5.2.7 7.8.7 4.7 0 9.3-.8 13.7-2.3.3-.1.4-.4.3-.6 0-.3-.3-.5-.6-.4zm-13.4-79c-3.6 0-7.1.5-10.6 1.4-.3.1-.4.3-.4.6.1.3.3.4.6.4 3.3-.9 6.8-1.3 10.3-1.3 17.3 0 32.5 11 38.1 27.3.1.2.3.3.5.3h.2c.3-.1.4-.4.3-.6-5.6-16.8-21.3-28.1-39-28.1zm11.9 42.9l-5.3.9c.3-.8.5-1.7.5-2.6s-.2-1.8-.5-2.6l7.9 1.3h.1c.2 0 .5-.2.5-.4 0-.3-.1-.5-.4-.6l-8.6-1.4c-.2-.3-.4-.5-.6-.8l-4.4-26.5c-.1-.5-.5-.8-1-.8s-.9.4-1 .8l-4.4 26.5c-.2.3-.4.5-.6.8l-6.7 1.1c-.3 0-.5.3-.4.6 0 .2.3.4.5.4h.1l6-1c-.3.8-.5 1.7-.5 2.6 0 .9.2 1.8.5 2.6l-3-.5c-.3 0-.5.1-.6.4 0 .3.1.5.4.6l3.7.6c.2.3.4.5.6.8l4.4 26.5c.1.5.5.8 1 .8s.9-.4 1-.8l4.4-26.5c.2-.3.4-.5.6-.8l6.1-1c.3 0 .5-.3.4-.6-.1-.2-.4-.4-.7-.4zm-17-1.7c0-2.8 2.3-5.1 5.1-5.1s5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1-5.1-2.3-5.1-5.1zm3.8-16.8l2.3-2.3.5 2.7-3.4 3.4.6-3.8zm4.4 10.4c-.9-.5-2-.7-3.1-.7-.5 0-1.1.1-1.6.2l3.9-3.9.8 4.4zm-5.4-4.8l3.9-3.9.5 3.1-5.2 5.2.8-4.4zm2.3-13.7l.8 4.6-1.8 1.8 1-6.4zm0 49.8l-3.1-18.5c.9.5 2 .7 3.1.7s2.2-.3 3.1-.7l-3.1 18.5z"/><path d="M526.9 319.6l-3.9-.6c-.3 0-.5.1-.6.4 0 .3.1.5.4.6l3.9.6s.1 0 .1.1-.1.1-.1.1l-7.4 1.2c-.3 0-.5.3-.4.6 0 .2.3.4.5.4h.1l7.4-1.2c.6-.1 1-.6 1-1.1s-.5-1.1-1-1.1zm-34.5 2.7l-8.6-1.4s-.1 0-.1-.1.1-.1.1-.1l5.8-1c.3 0 .5-.3.4-.6 0-.3-.3-.5-.6-.4l-5.8 1c-.6.1-1 .6-1 1.1s.4 1 1 1.1l8.6 1.4h.1c.2 0 .5-.2.5-.4.1-.3-.1-.6-.4-.6zM796 39.2h171.1c2.6 0 4.7-2 4.7-4.6V15.4c0-2.6-2.1-5.1-4.7-5.1H796.4v.3c-.1 0-.2.1-.3.2 0 0 0 .1-.1.1L782.3 18c-.2.1-.3.2-.4.4l-5.1 1.1c-1.7.2-3 2.1-3 4.2v3.5c0 2.2 1.3 4 2.9 4.2l5.7 1.2 13.6 6.6zm173.8-23.8v19.3c0 1.5-1.2 2.6-2.7 2.6H802.4l2.2-.7c.4-.1.6-.5.7-.9 0-.4-.2-.8-.5-1l-6.5-3.3 9.5-7.2c.3-.3.5-.7.3-1.1s-.5-.7-.9-.7l-6.2-.1 1.2-2.6c.2-.5 0-.8-.4-1l-.9-.3h128.4c.3 0 .5-.2.5-.5s-.2-.5-.5-.5H799.7c-.1 0 0-.2-.1-.1l-1.8-1.4v-3.4h169.3c1.5-.3 2.7 1.4 2.7 2.9zm-186 4l12-6.1v2.8c0 .3 0 .7.3.9l4 2.5-1.5 3.2c-.1.3-.1.7 0 .9.2.3.5.5.8.5l4.9.1-8.5 6.5c-.3.2-.4.5-.4.9 0 .3.2.6.5.8l5.8 2.9-5.2 1.8-12.7-6.1V19.4zm-8 7.7v-3.5c0-1.3.7-2.2 1.3-2.3l4.7-.9v10l-4.7-1c-.6-.1-1.3-1-1.3-2.3z"/><path d="M941 18.2h22c.8 0 1.8.2 1.8 1v11.6c0 .8-.9 1.3-1.8 1.3h-99.4c-.3 0-.5.2-.5.5s.2.5.5.5H963c1.4 0 2.8-1 2.8-2.3V19.3c0-1.4-1.4-2-2.8-2h-22c-.3 0-.5.2-.5.5s.2.4.5.4zm-89.2 14H809c-.3 0-.5.2-.5.5s.2.5.5.5h42.8c.3 0 .5-.2.5-.5s-.2-.5-.5-.5zm131.3 102.1c1.2 0 2.2-1 2.2-2.2s-1-2.2-2.2-2.2c-.7 0-1.3.3-1.7.8-.2.2-.2.5.1.7.2.2.5.2.7-.1.2-.3.6-.4 1-.4.7 0 1.2.6 1.2 1.2s-.6 1.2-1.2 1.2c-.4 0-.9-.2-1.1-.6-.1-.2-.5-.3-.7-.2-.2.1-.3.4-.2.7.4.7 1.1 1.1 1.9 1.1zm4.8-3.7c-.2.3-.6.3-.8.1-.1-.1-.2-.2-.2-.4s0-.3.1-.4c.2-.3.6-.3.8-.1.2.2.5.1.7-.1.2-.2.1-.5-.1-.7-.7-.5-1.7-.3-2.2.4-.5.7-.3 1.7.4 2.2.3.2.6.3.9.3.5 0 1-.2 1.3-.7.2-.2.1-.5-.1-.7-.3-.1-.7-.1-.8.1zm-.6-3.8c.9 0 1.6-.7 1.6-1.6s-.7-1.6-1.6-1.6c-.3 0-.5.2-.5.5s.2.5.5.5.6.3.6.6-.3.6-.6.6-.6-.3-.6-.6-.2-.5-.5-.5-.5.2-.5.5c0 .8.7 1.6 1.6 1.6zm-64.1-34.9c-.2.3-.6.3-.8.1-.1-.1-.2-.2-.2-.4s0-.3.1-.4c.1-.1.2-.2.4-.2s.3 0 .4.1c.2.2.5.1.7-.1.2-.2.1-.5-.1-.7-.3-.2-.8-.3-1.2-.3-.4.1-.8.3-1 .6s-.3.8-.3 1.2c.1.4.3.8.6 1 .3.2.6.3.9.3.5 0 1-.2 1.3-.7.2-.2.1-.5-.1-.7-.3-.1-.6-.1-.7.2z"/></svg>
                  </div>
                
              </div>
            </noscript>

            <div class="slideshow__text-wrap slideshow__text-wrap--desktop">
              <div class="slideshow__text-content slideshow__text-content--vertical-center text-center">
                <div class="page-width">
                  
                    <ul class="slideshow__text-content-list"><li>
                          <h2 class="h1 mega-title slideshow__title">
                            Diapositiva de imagen
                          </h2>
                        </li><li>
                          <span class="mega-subtitle slideshow__subtitle">
                            Cuenta la historia de tu marca a través de videos e imágenes
                          </span>
                        </li></ul>
                  
</div>
              </div>
            </div>
          </div></div></div></div>
      <div class="slideshow__controls"><div class="slideshow__arrows" style="width:131px">
            <button class="slideshow__arrow slideshow__arrow-left" aria-label="Anterior diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 7 11"><path d="M5.5.037a1.5 1.5 0 0 1 1.06 2.56l-2.94 2.94 2.94 2.94a1.5 1.5 0 0 1-2.12 2.12l-4-4a1.5 1.5 0 0 1 0-2.12l4-4A1.5 1.5 0 0 1 5.5.037z" fill="#fff" class="layer"></path></svg></button>
            <button class="slideshow__arrow slideshow__arrow-right" aria-label="Siguiente diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 7 11"><path d="M1.5 11A1.5 1.5 0 0 1 .44 8.44L3.38 5.5.44 2.56A1.5 1.5 0 0 1 2.56.44l4 4a1.5 1.5 0 0 1 0 2.12l-4 4A1.5 1.5 0 0 1 1.5 11z" fill="#fff"></path></svg></button>
          <ul class="slick-dots" style="display: block;"><li class="slick-active" aria-hidden="false" id="slickDot00"><a href="#SlideshowWrapper-slideshow" aria-label="Cargar diapositiva 1" data-slide-number="0" aria-current="true" aria-controls="slickSlide00"></a></li><li id="slickDot01"><a href="#SlideshowWrapper-slideshow" aria-label="Cargar diapositiva 2" data-slide-number="1" aria-controls="slickSlide01"></a></li></ul></div></div>
    </div>
    <div class="slideshow__text-wrap slideshow__text-wrap--mobile" style="display: block;">
      
        <div class="slideshow__arrows slideshow__arrows--mobile">
          <button class="slideshow__arrow slideshow__arrow-left" aria-label="Anterior diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 7 11"><path d="M5.5.037a1.5 1.5 0 0 1 1.06 2.56l-2.94 2.94 2.94 2.94a1.5 1.5 0 0 1-2.12 2.12l-4-4a1.5 1.5 0 0 1 0-2.12l4-4A1.5 1.5 0 0 1 5.5.037z" fill="#fff" class="layer"></path></svg></button>
          <button class="slideshow__arrow slideshow__arrow-right" aria-label="Siguiente diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 7 11"><path d="M1.5 11A1.5 1.5 0 0 1 .44 8.44L3.38 5.5.44 2.56A1.5 1.5 0 0 1 2.56.44l4 4a1.5 1.5 0 0 1 0 2.12l-4 4A1.5 1.5 0 0 1 1.5 11z" fill="#fff"></path></svg></button>
        <ul class="slick-dots" style="display: block;"><li class="slick-active-mobile" id="slickDot02"><a href="#SlideshowWrapper-slideshow" aria-label="Cargar diapositiva 1" data-slide-number="0" aria-controls="slickSlide02"></a></li><li id="slickDot03"><a href="#SlideshowWrapper-slideshow" aria-label="Cargar diapositiva 2" data-slide-number="1" aria-controls="slickSlide03"></a></li></ul></div>
      
<div class="slideshow__text-content slideshow__text-content--mobile slideshow__text-content--mobile-1 text-center" style="display: none;">
            <div class="page-width"><h2 class="h1 mega-title slideshow__title slideshow__title--mobile">
                  Diapositiva de imagen
                </h2><span class="mega-subtitle slideshow__subtitle slideshow__subtitle--mobile">
                  Cuenta la historia de tu marca a través de videos e imágenes
                </span></div>
          </div></div>
</div>


</div><div id="shopify-section-1492096252560" class="shopify-section index-section"><div class="page-width">
  
    <div class="section-header text-center">
      <h2>Nuestros Productos</h2>
    </div>
  

  

  <div class="collection-grid">
    <ul class="grid grid--uniform">
      
        <li class="grid__item small--one-half medium-up--one-third">

<div class="collection-grid-item">
  <a href="https:// .myshopify.com/collections/frontpage" class="collection-grid-item__link">
    
      <div class="collection-grid-item__overlay box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_180x.jpg?v=1551224667 180w 180h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_360x.jpg?v=1551224667 360w 360h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_540x.jpg?v=1551224667 540w 540h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569.jpg?v=1551224667 569w 569h" data-parent-fit="cover" style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_360x.jpg?v=1551224667&quot;);">
      <picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_180x.jpg?v=1551224667 180w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_360x.jpg?v=1551224667 360w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_540x.jpg?v=1551224667 540w 540h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569.jpg?v=1551224667 569w 569h" sizes="343px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_180x.jpg?v=1551224667 180w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_360x.jpg?v=1551224667 360w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_540x.jpg?v=1551224667 540w 540h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569.jpg?v=1551224667 569w 569h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="343px"></picture></div>
      <noscript>
        <div class="collection-grid-item__overlay" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/collections/613KxEeRa-L._SX569_1024x1024.jpg?v=1551224667')"></div>
      </noscript>
    

    <div class="collection-grid-item__title-wrapper">
      <div class="collection-grid-item__title h3">
        
          Favoritos
        
      </div>
    </div>
  </a>
</div>

        </li>
      
        <li class="grid__item small--one-half medium-up--one-third">

<div class="collection-grid-item">
  <a href="#" class="collection-grid-item__link">
    
      <div class="collection-grid-item__overlay box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_180x.jpg?v=1551224414 180w 180h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_360x.jpg?v=1551224414 360w 359h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_540x.jpg?v=1551224414 540w 539h,
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003.jpg?v=1551224414 640w 639h" data-parent-fit="cover" style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_360x.jpg?v=1551224414&quot;);">
      <picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_180x.jpg?v=1551224414 180w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_360x.jpg?v=1551224414 360w 359h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_540x.jpg?v=1551224414 540w 539h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003.jpg?v=1551224414 640w 639h" sizes="343px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_180x.jpg?v=1551224414 180w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_360x.jpg?v=1551224414 360w 359h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_540x.jpg?v=1551224414 540w 539h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003.jpg?v=1551224414 640w 639h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="343px"></picture></div>
      <noscript>
        <div class="collection-grid-item__overlay" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/collections/3-5mm-Gaming-headphone-Earphone-Gaming-Headset-Headphone-Xbox-One-Headset-with-microphone-for-pc-ps4.jpg_640x640_3ce297bd-d815-417c-8150-c935f4364003_1024x1024.jpg?v=1551224414')"></div>
      </noscript>
    

    <div class="collection-grid-item__title-wrapper">
      <div class="collection-grid-item__title h3">
        
          Rebajas
        
      </div>
    </div>
  </a>
</div>

        </li>
      
        <li class="grid__item small--one-half medium-up--one-third">

<div class="collection-grid-item">
  <a href="#" class="collection-grid-item__link">
    
      <div class="collection-grid-item__overlay box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_180x.jpg?v=1551224888 180w 120h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_360x.jpg?v=1551224888 360w 240h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_540x.jpg?v=1551224888 540w 360h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_720x.jpg?v=1551224888 720w 480h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_900x.jpg?v=1551224888 900w 600h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1080x.jpg?v=1551224888 1080w 720h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1296x.jpg?v=1551224888 1296w 864h,
    
    
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500.jpg?v=1551224888 1500w 1000h" data-parent-fit="cover" style="background-image: url(&quot;https://cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_540x.jpg?v=1551224888&quot;);">
      <picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_180x.jpg?v=1551224888 180w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_360x.jpg?v=1551224888 360w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_540x.jpg?v=1551224888 540w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_720x.jpg?v=1551224888 720w 480h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_900x.jpg?v=1551224888 900w 600h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1080x.jpg?v=1551224888 1080w 720h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1296x.jpg?v=1551224888 1296w 864h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500.jpg?v=1551224888 1500w 1000h" sizes="514.5px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_180x.jpg?v=1551224888 180w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_360x.jpg?v=1551224888 360w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_540x.jpg?v=1551224888 540w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_720x.jpg?v=1551224888 720w 480h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_900x.jpg?v=1551224888 900w 600h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1080x.jpg?v=1551224888 1080w 720h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1296x.jpg?v=1551224888 1296w 864h, //cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500.jpg?v=1551224888 1500w 1000h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="514.5px"></picture></div>
      <noscript>
        <div class="collection-grid-item__overlay" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/collections/61UeUwwxEsL._SL1500_1024x1024.jpg?v=1551224888')"></div>
      </noscript>
    

    <div class="collection-grid-item__title-wrapper">
      <div class="collection-grid-item__title h3">
        
          Ofertas
        
      </div>
    </div>
  </a>
</div>

        </li>
      
    </ul>
  </div>

  
</div>




</div><div id="shopify-section-1551225318301" class="shopify-section  index-section index-section--flush index-section--slideshow"><div data-section-id="1551225318301" data-section-type="slideshow-section"><div id="SlideshowWrapper-1551225318301" class="slideshow-wrapper" role="region" aria-label="slideshow" aria-describedby="slideshow-info" tabindex="-1">
      <div class="slideshow slideshow--adapt slick-initialized slick-slider slick-dotted" id="Slideshow-1551225318301" data-autorotate="false" data-speed="5000" data-adapt-height="true" data-slide-nav-a11y="Cargar diapositiva [slide_number]" data-min-aspect-ratio="3.0" style="height: 507px;"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3042px;"><div class="slideshow__slide slideshow__slide--1551225318301-0 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1521px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" id="slickSlide10" tabindex="-1">
            
              <div class="slideshow__image box ratio-container js lazyloaded" data-bgset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_180x.jpg?v=1551195452 180w 60h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_360x.jpg?v=1551195452 360w 120h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_540x.jpg?v=1551195452 540w 180h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_720x.jpg?v=1551195452 720w 240h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_900x.jpg?v=1551195452 900w 300h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1080x.jpg?v=1551195452 1080w 360h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1296x.jpg?v=1551195452 1296w 432h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1512x.jpg?v=1551195452 1512w 504h,
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1728x.jpg?v=1551195452 1728w 576h,
    
    
    
    
    
    
    
    
    
    //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA.jpg?v=1551195452 1920w 640h" data-parent-fit="contain" style="background-position: center center; background-image: url(inicio_files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1728x.jpg);">
                
              <picture style="display: none;"><source data-srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_180x.jpg?v=1551195452 180w 60h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_360x.jpg?v=1551195452 360w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_540x.jpg?v=1551195452 540w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_720x.jpg?v=1551195452 720w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_900x.jpg?v=1551195452 900w 300h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1080x.jpg?v=1551195452 1080w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1296x.jpg?v=1551195452 1296w 432h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1512x.jpg?v=1551195452 1512w 504h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1728x.jpg?v=1551195452 1728w 576h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA.jpg?v=1551195452 1920w 640h" sizes="1521px" srcset="//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_180x.jpg?v=1551195452 180w 60h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_360x.jpg?v=1551195452 360w 120h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_540x.jpg?v=1551195452 540w 180h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_720x.jpg?v=1551195452 720w 240h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_900x.jpg?v=1551195452 900w 300h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1080x.jpg?v=1551195452 1080w 360h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1296x.jpg?v=1551195452 1296w 432h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1512x.jpg?v=1551195452 1512w 504h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_1728x.jpg?v=1551195452 1728w 576h, //cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA.jpg?v=1551195452 1920w 640h"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="1521px"></picture></div>
            

            <noscript>
              <div class="slideshow__image" style="background-image: url('//cdn.shopify.com/s/files/1/0070/2522/9860/files/HTB14P8QbyLrK1Rjy1zdq6ynnpXaA_2048x.jpg?v=1551195452'); background-position: center center;">
                
              </div>
            </noscript>

            <div class="slideshow__text-wrap slideshow__text-wrap--desktop">
              <div class="slideshow__text-content slideshow__text-content--vertical-center text-center">
                <div class="page-width">
                  
</div>
              </div>
            </div>
          </div><div class="slideshow__slide slideshow__slide--1551225318301-1 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1521px; position: relative; left: -1521px; top: 0px; z-index: 998; opacity: 0;" id="slickSlide11" tabindex="-1">
            
              <div class="slideshow__image js">
                <div class="placeholder-background">
                  
               
                  </div>
                
              </div>
            </noscript>

            <div class="slideshow__text-wrap slideshow__text-wrap--desktop">
              <div class="slideshow__text-content slideshow__text-content--vertical-center text-center">
                <div class="page-width">
                  
                    <ul class="slideshow__text-content-list"><li>
                          <h2 class="h1 mega-title slideshow__title">
                            Diapositiva de imagen
                          </h2>
                        </li><li>
                          <span class="mega-subtitle slideshow__subtitle">
                            Cuenta la historia de tu marca a través de videos e imágenes
                          </span>
                        </li></ul>
                  
</div>
              </div>
            </div>
          </div></div></div></div>
      <div class="slideshow__controls"><div class="slideshow__arrows" style="width:131px">
            <button class="slideshow__arrow slideshow__arrow-left" aria-label="Anterior diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 7 11"><path d="M5.5.037a1.5 1.5 0 0 1 1.06 2.56l-2.94 2.94 2.94 2.94a1.5 1.5 0 0 1-2.12 2.12l-4-4a1.5 1.5 0 0 1 0-2.12l4-4A1.5 1.5 0 0 1 5.5.037z" fill="#fff" class="layer"></path></svg></button>
            <button class="slideshow__arrow slideshow__arrow-right" aria-label="Siguiente diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 7 11"><path d="M1.5 11A1.5 1.5 0 0 1 .44 8.44L3.38 5.5.44 2.56A1.5 1.5 0 0 1 2.56.44l4 4a1.5 1.5 0 0 1 0 2.12l-4 4A1.5 1.5 0 0 1 1.5 11z" fill="#fff"></path></svg></button>
          <ul class="slick-dots" style="display: block;"><li class="slick-active" aria-hidden="false" id="slickDot10"><a href="#SlideshowWrapper-1551225318301" aria-label="Cargar diapositiva 1" data-slide-number="0" aria-current="true" aria-controls="slickSlide10"></a></li><li id="slickDot11"><a href="#SlideshowWrapper-1551225318301" aria-label="Cargar diapositiva 2" data-slide-number="1" aria-controls="slickSlide11"></a></li></ul></div></div>
    </div>
    <div class="slideshow__text-wrap slideshow__text-wrap--mobile" style="display: block;">
      
        <div class="slideshow__arrows slideshow__arrows--mobile">
          <button class="slideshow__arrow slideshow__arrow-left" aria-label="Anterior diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 7 11"><path d="M5.5.037a1.5 1.5 0 0 1 1.06 2.56l-2.94 2.94 2.94 2.94a1.5 1.5 0 0 1-2.12 2.12l-4-4a1.5 1.5 0 0 1 0-2.12l4-4A1.5 1.5 0 0 1 5.5.037z" fill="#fff" class="layer"></path></svg></button>
          <button class="slideshow__arrow slideshow__arrow-right" aria-label="Siguiente diapositiva"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 7 11"><path d="M1.5 11A1.5 1.5 0 0 1 .44 8.44L3.38 5.5.44 2.56A1.5 1.5 0 0 1 2.56.44l4 4a1.5 1.5 0 0 1 0 2.12l-4 4A1.5 1.5 0 0 1 1.5 11z" fill="#fff"></path></svg></button>
        <ul class="slick-dots" style="display: block;"><li class="slick-active-mobile" id="slickDot12"><a href="#SlideshowWrapper-1551225318301" aria-label="Cargar diapositiva 1" data-slide-number="0" aria-controls="slickSlide12"></a></li><li id="slickDot13"><a href="#SlideshowWrapper-1551225318301" aria-label="Cargar diapositiva 2" data-slide-number="1" aria-controls="slickSlide13"></a></li></ul></div>
      
<div class="slideshow__text-content slideshow__text-content--mobile slideshow__text-content--mobile-1 text-center" style="display: none;">
            <div class="page-width"><h2 class="h1 mega-title slideshow__title slideshow__title--mobile">
                  Diapositiva de imagen
                </h2><span class="mega-subtitle slideshow__subtitle slideshow__subtitle--mobile">
                  Cuenta la historia de tu marca a través de videos e imágenes
                </span></div>
          </div></div>
</div>


</div><!-- END content_for_index -->

    </main>

    <div id="shopify-section-footer" class="shopify-section">
<style>
  .site-footer__hr {
    border-bottom: 1px solid #cfcfcf;
  }

  .site-footer p,
  .site-footer h4,
  .site-footer small {
    color: #3d3d3d;
  }

  .site-footer {
    background-color: #e8e8e8;
  }

  .site-footer a:hover {
    color: #636363;
  }
</style>

<footer class="site-footer" role="contentinfo">
  <div class="page-width">
    <div class="site-footer__content"><div class="site-footer__item
                    
                    site-footer__item--one-quarter
                    ">
          <div class="site-footer__item-inner site-footer__item-inner--link_list"><p class="h4">Enlaces rápidos</p><ul class="site-footer__linklist
                            "><li class="site-footer__linklist-item">
                        <a href="#">
                          Búsqueda
                        </a>
                      </li></ul></div>
        </div><div class="site-footer__item
                    
                    site-footer__item--one-quarter
                    ">
          <div class="site-footer__item-inner site-footer__item-inner--text"><p class="h4">Habla sobre tu negocio</p><div class="site-footer__rte
                              ">
                      <p>Comparte detalles de la tienda, promociones o contenido de la marca con tus clientes.</p>
                  </div></div>
        </div><div class="site-footer__item
                    
                    site-footer__item--one-quarter
                    site-footer-newsletter__one-half">
          <div class="site-footer__item-inner site-footer__item-inner--newsletter"><p class="h4">Boletín</p><div class="site-footer__newsletter
                          "><form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="contact-form" novalidate="novalidate"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
<input type="hidden" name="contact[tags]" value="newsletter">
                    <div class="input-group ">
                      <input type="email" name="contact[email]" id="ContactFooter-email" class="input-group__field newsletter__input" placeholder="Dirección de correo electrónico" aria-label="Dirección de correo electrónico" aria-required="true" required="" autocorrect="off" autocapitalize="off">
                      <span class="input-group__btn">
                        <button type="button" class="btn newsletter__submit" name="commit" id="Subscribe">
                          <span class="newsletter__submit-text--large">Suscribir</span>
                        </button>
                      </span>
                    </div>
                    
                  </form>
                </div></div>
        </div></div>
  </div>

  <hr class="site-footer__hr">

  <div class="page-width">
    <div class="grid grid--no-gutters small--text-center">
      <div class="grid__item one-half small--one-whole"><div class="small--hide">
            <small class="site-footer__copyright-content">© 2019, <a href="https:// .myshopify.com/" title=""> </a></small>
            <small class="site-footer__copyright-content site-footer__copyright-content-powered-by"><a target="_blank" rel="noopener" href="#" aria-describedby="a11y-new-window-external-message"></a></small>
          </div></div>

      <div class="grid__item one-half small--one-whole">
        
      </div>
      <div class="grid__item medium-up--hide">
        <small class="site-footer__copyright-content">© 2019, <a href="https:// .myshopify.com/" title=""> </a></small>
        <small class="site-footer__copyright-content site-footer__copyright-content--powered-by"><a target="_blank" rel="noopener" href="http://es.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore" aria-describedby="a11y-new-window-external-message">http://es.shopify.com</a></small>
      </div>
    </div>
  </div>
</footer>




</div>

    <div id="slideshow-info" class="visually-hidden" aria-hidden="true">Utiliza
 las flechas izquierda/derecha para navegar por la presentación o 
deslízate hacia la izquierda/derecha si usas un dispositivo móvil</div>

  </div>

  <ul hidden="">
    <li id="a11y-refresh-page-message">elegir una selección de resultados en una actualización de página completa</li>
    <li id="a11y-selection-message">presiona la tecla de espacio y luego las teclas de flecha para hacer una selección</li>
  </ul>


<iframe src="inicio_files/dialog.html" style="position: fixed; top: 0px; left: 0px; z-index: 99999; height: 0px; width: 0px; border: 0px none;" scrolling="no" tabindex="-1" aria-hidden="true"></iframe><ul hidden="true"><li id="a11y-new-window-message">Abre en una nueva ventana.</li><li id="a11y-external-message">Abre sitio externo.</li><li id="a11y-new-window-external-message">Abre sitio externo externo en una nueva ventana.</li></ul><iframe title="Shopify Admin Bar" id="admin-bar-iframe" src="https:// .myshopify.com/admin/bar?customize_label=editar+p%C3%A1gina+de+inicio&amp;customize_url=%2Fadmin%2Fthemes%2F17233707044%2Feditor%23%2F" sandbox="allow-same-origin allow-scripts" style="position: fixed; bottom: 0; left: 0; z-index: 2147483647; width: 80px; height: 80px; border: none;"></iframe></body></html>

<?php
session_start();
$value = 123123123;
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$value;
?>