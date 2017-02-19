<?php

$MerchantID = '';
$Amount = $_GET['amount']; //Amount will be based on Toman
$Authority = $_GET['Authority'];

if ($_GET['Status'] == 'OK') {

$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentVerification(
[
'MerchantID' => $MerchantID,
'Authority' => $Authority,
'Amount' => $Amount,
]
);
?>

<html>

<head>
<title>دونیت به MrNull</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v6.3.4/dist/font-face.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Lato:400,500,600,700|Open+Sans:400,500,600,700" rel="stylesheet" type="text/css">
<style>.clear-margin{margin:0;}.space-top{margin-top:10px;}.space-right{margin-right:10px;}.icon-left{margin-right:5px;}.icon-right{margin-left:5px;}.labels{word-spacing:5px;line-height:2;}.label-keyword{display:inline-block;background:#7eb0db;color:white;font-size:0.9em;padding:5px;border:1px solid #357ebd;}.link-disguise{color:inherit;}.link-disguise:hover{color:inherit;}@media (max-width: 992px) {.clear-margin-sm{margin-bottom:0;}}body{font-family:'Vazir', 'Lato',"Helvetica Neue",Helvetica,Arial,sans-serif;background:#f0f0f0;color:#333333;font-size:16px;}.text-bolder{font-weight:bold;}@media only screen {.container{max-width:50em;}}@media (max-width: 480px) {ul{padding-left:25px;}.background-details{display:block;}.background-details .icon{max-width:inherit;min-width:inherit;text-align:left;}.background-details .icon,.background-details .info{display:block;padding:10px 0;}.background-details .title{display:none;}.card-nested{padding:5px 0;}}.profile-card{display:table;width:100%;}.profile-pic{display:table-cell;vertical-align:top;padding:1rem 4rem 0 0;}.profile-pic img{width:100px;height:100px;}.contact-details{display:table-cell;}.contact-details .detail{display:inline-block;line-height:2;margin-right:2rem;}.contact-details .detail .icon{padding-right:7px;color:#888;}.contact-details .detail .info{font-size:0.8em;}.social-links{line-height:2.5;}.social-link{display:block;}.social-link span{display:inline-block;vertical-align:middle;}.social-link:hover,.social-link:focus{text-decoration:none;}.social-link .fa{text-align:center;width:2em;}.fa-github{color:#454545;}.fa-github:hover,.fa-github:focus{text-decoration:none;color:#2b2b2b;}.fa-twitter{color:#33ccff;}.fa-twitter:hover,.fa-twitter:focus{text-decoration:none;color:#00bfff;}.fa-rss{color:#f36f24;}.fa-rss:hover,.fa-rss:focus{text-decoration:none;color:#d8560c;}.fa-linkedin{color:#007bb6;}.fa-linkedin:hover,.fa-linkedin:focus{text-decoration:none;color:#005983;}.fa-skype{color:#12a5f4;}.fa-skype:hover,.fa-skype:focus{text-decoration:none;color:#0986ca;}.fa-stack-overflow{color:#8e8e92;}.fa-stack-overflow:hover,.fa-stack-overflow:focus{text-decoration:none;color:#747479;}.fa-soundcloud{color:#e8822d;}.fa-soundcloud:hover,.fa-soundcloud:focus{text-decoration:none;color:#cc6916;}.fa-pinterest{color:#bd091f;}.fa-pinterest:hover,.fa-pinterest:focus{text-decoration:none;color:#8c0717;}.fa-vimeo{color:#17b3e8;}.fa-vimeo:hover,.fa-vimeo:focus{text-decoration:none;color:#128fba;}.fa-behance{color:#2c98cf;}.fa-behance:hover,.fa-behance:focus{text-decoration:none;color:#2379a5;}.fa-codepen{color:#1c1c1c;}.fa-codepen:hover,.fa-codepen:focus{text-decoration:none;color:#020202;}.fa-foursquare{color:#fa4778;}.fa-foursquare:hover,.fa-foursquare:focus{text-decoration:none;color:#f91554;}.fa-reddit{color:#545454;}.fa-reddit:hover,.fa-reddit:focus{text-decoration:none;color:#3b3b3b;}.fa-spotify{color:#acd200;}.fa-spotify:hover,.fa-spotify:focus{text-decoration:none;color:#829f00;}.fa-dribbble{color:#ce366f;}.fa-dribbble:hover,.fa-dribbble:focus{text-decoration:none;color:#a82959;}.fa-facebook{color:#4b6daa;}.fa-facebook:hover,.fa-facebook:focus{text-decoration:none;color:#3b5687;}.fa-angellist{color:#000000;}.fa-angellist:hover,.fa-angellist:focus{text-decoration:none;color:#000000;}.fa-bitbucket{color:#205081;}.fa-bitbucket:hover,.fa-bitbucket:focus{text-decoration:none;color:#163758;}.fa-google-plus{color:#bf2a1d;}.fa-google-plus:hover,.fa-google-plus:focus{text-decoration:none;color:#932016;}.background-card h4{font-variant:small-caps;color:#777777;border-bottom:1px solid #eeeeee;padding-bottom:1em;margin-bottom:1em;line-height:1.2;}.background-card h4:not(:first-child){margin-top:2em;}h4>.fa,h4>.title{display:inline-block;vertical-align:baseline;}h4>.fa{width:4rem;}.content{line-height:1.5;}.card{background:#ffffff;border:1px solid #e6e6e6;border-radius:3px;padding:2em 3.5em;}.card-nested{padding:1.5rem 0 1.5rem 4.2rem;}.card-wrapper{padding:5px;}.enumeration:not(:last-child):after{content:", ";}.enumeration:last-child:after{content:".";}@media only screen and (max-width: 768px) {.profile-card{display:block;}.contact-details,.profile-pic{display:block;text-align:center;}.card-nested{padding-left:0;}}@media only screen and (max-width: 480px) {.contact-details .detail{display:block;}}.card-skills{position:relative;}.skill-info{margin-left:20px;}@media only screen and (min-width: 768px) {.skill{border-left:9px solid #555555;}.skill.beginner{height:50%;border-color:#e74c3c;}.skill.intermediate{height:70%;border-color:#f1c40f;}.skill.advanced{border-color:#5cb85c;}.skill.master{border-color:black;}}@media (max-width: 768px) {.quote{font-size:inherit;}}@media print {body{font-size:10pt;}a[href]:after{content:none!important;}.pagebreak{page-break-before:always;}.background-card h4:not(:first-child){margin-top:0!important;}.card{border:0;padding:0;}.container{max-width:100%;width:100%;}.contact-details .detail .icon{color:#888!important;}.background-card h4{padding-bottom:0.5em;margin-bottom:0.5em;margin-top:1em!important;}h4>.fa{display:none!important;}.card-nested{padding:.5rem 0 .5rem 0;}.labels{display:inline;}.skill-info{margin-left:0;}blockquote{font-size:100%;}}</style>
</head>

<body style="direction: rtl">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <div class="container">
    <section class="row">
    <div id="mainDiv" class="card-wrapper">
    <div class="card">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="text-align: center;">
                <?php if ($result->Status == 100) { ?>
                    <i class="fa fa-check" aria-hidden="true" style="color: #2ece47; font-size:24em;"></i>
                    <br>
                    <p style="font-size: 19px">کاربر گرامی: <strong><?php echo $_GET['name']; ?></strong></p>
                    <p style="font-size: 17px">تراکنش مورد نظر با شماره <strong><?php echo $result->RefID;?></strong> انجام شد!</p>
                    <p style="font-size: 17px">بهتر است شماره تراکنش را یادداشت کنید تا اگر جایی نیاز بود، آنرا ارائه دهید!</p>
                <?php } else if ($result->Status == 101) { ?>
                    <i class="fa fa-exclamation" aria-hidden="true" style="color: #f2e02d; font-size:24em;"></i>
                    <br>
                    <p style="font-size: 17px;">این تراکنش قبلا تایید شده است!</p>
                <?php } else { ?>
                    <i class="fa fa-times" aria-hidden="true" style="color: #f5543b; font-size:24em;"></i>
                    <br>
                    <p style="font-size: 17px;">تراکنش مورد نظر با مشکل مواجه شد!</p>
                <?php } ?>
                <br><br>
                <a href="/"> <i class="fa fa-home" aria-hidden="true"></i>
 بازگشت به صفحه اصلی</a>

            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    <script>
        $(document).ready(function(){
            //var viewH = $(document).height();
            var viewH = window.innerHeight;
            var cardH = $('#mainDiv').height();
            var final = (viewH - cardH) / 3;
            if (final > 0) {
                $('#mainDiv').css({'margin-top': final});
            }
        });
    </script>
</body>

</html>
<?php } else { ?>

    <html>

    <head>
    <title>دونیت به MrNull</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="https://cdn.rawgit.com/rastikerdar/vazir-font/v6.3.4/dist/font-face.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,500,600,700|Open+Sans:400,500,600,700" rel="stylesheet" type="text/css">
    <style>.clear-margin{margin:0;}.space-top{margin-top:10px;}.space-right{margin-right:10px;}.icon-left{margin-right:5px;}.icon-right{margin-left:5px;}.labels{word-spacing:5px;line-height:2;}.label-keyword{display:inline-block;background:#7eb0db;color:white;font-size:0.9em;padding:5px;border:1px solid #357ebd;}.link-disguise{color:inherit;}.link-disguise:hover{color:inherit;}@media (max-width: 992px) {.clear-margin-sm{margin-bottom:0;}}body{font-family:'Vazir', 'Lato',"Helvetica Neue",Helvetica,Arial,sans-serif;background:#f0f0f0;color:#333333;font-size:16px;}.text-bolder{font-weight:bold;}@media only screen {.container{max-width:50em;}}@media (max-width: 480px) {ul{padding-left:25px;}.background-details{display:block;}.background-details .icon{max-width:inherit;min-width:inherit;text-align:left;}.background-details .icon,.background-details .info{display:block;padding:10px 0;}.background-details .title{display:none;}.card-nested{padding:5px 0;}}.profile-card{display:table;width:100%;}.profile-pic{display:table-cell;vertical-align:top;padding:1rem 4rem 0 0;}.profile-pic img{width:100px;height:100px;}.contact-details{display:table-cell;}.contact-details .detail{display:inline-block;line-height:2;margin-right:2rem;}.contact-details .detail .icon{padding-right:7px;color:#888;}.contact-details .detail .info{font-size:0.8em;}.social-links{line-height:2.5;}.social-link{display:block;}.social-link span{display:inline-block;vertical-align:middle;}.social-link:hover,.social-link:focus{text-decoration:none;}.social-link .fa{text-align:center;width:2em;}.fa-github{color:#454545;}.fa-github:hover,.fa-github:focus{text-decoration:none;color:#2b2b2b;}.fa-twitter{color:#33ccff;}.fa-twitter:hover,.fa-twitter:focus{text-decoration:none;color:#00bfff;}.fa-rss{color:#f36f24;}.fa-rss:hover,.fa-rss:focus{text-decoration:none;color:#d8560c;}.fa-linkedin{color:#007bb6;}.fa-linkedin:hover,.fa-linkedin:focus{text-decoration:none;color:#005983;}.fa-skype{color:#12a5f4;}.fa-skype:hover,.fa-skype:focus{text-decoration:none;color:#0986ca;}.fa-stack-overflow{color:#8e8e92;}.fa-stack-overflow:hover,.fa-stack-overflow:focus{text-decoration:none;color:#747479;}.fa-soundcloud{color:#e8822d;}.fa-soundcloud:hover,.fa-soundcloud:focus{text-decoration:none;color:#cc6916;}.fa-pinterest{color:#bd091f;}.fa-pinterest:hover,.fa-pinterest:focus{text-decoration:none;color:#8c0717;}.fa-vimeo{color:#17b3e8;}.fa-vimeo:hover,.fa-vimeo:focus{text-decoration:none;color:#128fba;}.fa-behance{color:#2c98cf;}.fa-behance:hover,.fa-behance:focus{text-decoration:none;color:#2379a5;}.fa-codepen{color:#1c1c1c;}.fa-codepen:hover,.fa-codepen:focus{text-decoration:none;color:#020202;}.fa-foursquare{color:#fa4778;}.fa-foursquare:hover,.fa-foursquare:focus{text-decoration:none;color:#f91554;}.fa-reddit{color:#545454;}.fa-reddit:hover,.fa-reddit:focus{text-decoration:none;color:#3b3b3b;}.fa-spotify{color:#acd200;}.fa-spotify:hover,.fa-spotify:focus{text-decoration:none;color:#829f00;}.fa-dribbble{color:#ce366f;}.fa-dribbble:hover,.fa-dribbble:focus{text-decoration:none;color:#a82959;}.fa-facebook{color:#4b6daa;}.fa-facebook:hover,.fa-facebook:focus{text-decoration:none;color:#3b5687;}.fa-angellist{color:#000000;}.fa-angellist:hover,.fa-angellist:focus{text-decoration:none;color:#000000;}.fa-bitbucket{color:#205081;}.fa-bitbucket:hover,.fa-bitbucket:focus{text-decoration:none;color:#163758;}.fa-google-plus{color:#bf2a1d;}.fa-google-plus:hover,.fa-google-plus:focus{text-decoration:none;color:#932016;}.background-card h4{font-variant:small-caps;color:#777777;border-bottom:1px solid #eeeeee;padding-bottom:1em;margin-bottom:1em;line-height:1.2;}.background-card h4:not(:first-child){margin-top:2em;}h4>.fa,h4>.title{display:inline-block;vertical-align:baseline;}h4>.fa{width:4rem;}.content{line-height:1.5;}.card{background:#ffffff;border:1px solid #e6e6e6;border-radius:3px;padding:2em 3.5em;}.card-nested{padding:1.5rem 0 1.5rem 4.2rem;}.card-wrapper{padding:5px;}.enumeration:not(:last-child):after{content:", ";}.enumeration:last-child:after{content:".";}@media only screen and (max-width: 768px) {.profile-card{display:block;}.contact-details,.profile-pic{display:block;text-align:center;}.card-nested{padding-left:0;}}@media only screen and (max-width: 480px) {.contact-details .detail{display:block;}}.card-skills{position:relative;}.skill-info{margin-left:20px;}@media only screen and (min-width: 768px) {.skill{border-left:9px solid #555555;}.skill.beginner{height:50%;border-color:#e74c3c;}.skill.intermediate{height:70%;border-color:#f1c40f;}.skill.advanced{border-color:#5cb85c;}.skill.master{border-color:black;}}@media (max-width: 768px) {.quote{font-size:inherit;}}@media print {body{font-size:10pt;}a[href]:after{content:none!important;}.pagebreak{page-break-before:always;}.background-card h4:not(:first-child){margin-top:0!important;}.card{border:0;padding:0;}.container{max-width:100%;width:100%;}.contact-details .detail .icon{color:#888!important;}.background-card h4{padding-bottom:0.5em;margin-bottom:0.5em;margin-top:1em!important;}h4>.fa{display:none!important;}.card-nested{padding:.5rem 0 .5rem 0;}.labels{display:inline;}.skill-info{margin-left:0;}blockquote{font-size:100%;}}</style>
    </head>

    <body style="direction: rtl">
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <div class="container">
        <section class="row">
        <div id="mainDiv" class="card-wrapper">
        <div class="card">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="text-align: center;">
                    <i class="fa fa-exclamation" aria-hidden="true" style="color: #f2e02d; font-size:24em;"></i>
                    <br>
                    <p style="font-size: 17px;">تراکنش مورد نظر توسط کاربر کنسل شد!</p>
                    <br><br>
                    <a href="/"> <i class="fa fa-home" aria-hidden="true"></i>
     بازگشت به صفحه اصلی</a>
                </div>
            </div>
        </div>
        </div>
        </section>
        </div>
        <script>
            $(document).ready(function(){
                //var viewH = $(document).height();
                var viewH = window.innerHeight;
                var cardH = $('#mainDiv').height();
                var final = (viewH - cardH) / 3;
                if (final > 0) {
                    $('#mainDiv').css({'margin-top': final});
                }
            });
        </script>
    </body>

    </html>
<?php } ?>
