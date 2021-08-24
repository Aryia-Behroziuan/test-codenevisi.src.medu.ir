<html lang="en"><head>
        <!-- Title -->
        <title>پاسخ ازمون برنامه نویسی ویندوز با تفکر الگوریتمی</title>
        <meta name="theme-color" content="#ffffff">

    
        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://banner2.cleanpng.com/20180503/pde/kisspng-meetme-the-meet-group-inc-android-online-chat-chat-room-logo-5aeaa6b7bacbe3.3335692215253275437651.jpg">
    
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
    
        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="public/css/one.css">
    
        <!-- CSS Front Template -->
        <link rel="stylesheet" href="public/css/tow.css">
        <script src="public/js/jquery.js"></script>

  </head>
  <body data-aos-easing="ease" data-aos-duration="650" data-aos-delay="0">
    <!-- ========== HEADER ========== -->
    
    <!-- ========== END HEADER ========== -->
  
    <!-- ========== MAIN CONTENT ========== -->
    
    <!-- ========== END MAIN CONTENT ========== -->

    
            <div style="text-align: right;" class="alert alert-primary" role="alert">
            خوش امدید از منو زیر پروژه هارا برسی کنید و کد ها را با هر کامپایلری کی میخواهید اجرا کنید <img style="width: 20px; height: 20px;" src="https://icon-library.com/images/it-security-icon/it-security-icon-1.jpg" alt="">
        
            </div>
    
    
            
    <div style="text-align: right;" class="container space-2 space-top-xl-3 space-bottom-lg-3">
    <h2 class="display-4">شرکت کننده میثم بهروزیان <span class="text-primary text-highlight-warning">891628</span></h2>
    <hr>

    
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="avatar avatar-circle mr-3">
            <span class="avatar-status avatar-sm-status avatar-success"></span>
            </div>
            <strong>دبیرستان شهیدین نوربخش</strong>
            <strong><a href="#">کد ملی مدیر تیم640938949</a></strong>
            <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"></path>
                </svg>
            </button>
        </div>

        <form id="formData" action="index.php?controller=Tow&method=run" method="post">

        <div style="text-align: right;" class="form-group">
            <label class="input-label" for="exampleFormControlInput1">طبقه مبداع</label>
            <input name="start" type="text" id="exampleFormControlInput1" class="form-control" placeholder="محل قرار گیری فعلی کابین اسانسور عدد">
        </div>

        <div style="text-align: right;" class="form-group">
            <label class="input-label" for="exampleFormControlInput1">به طبقه چندم میروید؟</label>
            <input name="stop" type="text" id="exampleFormControlInput1" class="form-control" placeholder="مقصد شما در کدام طقه است عدد وارد کنید">
        </div>




        <hr>

        <h3 id="display">درخواست خود را اجرا کنید در سرور</h3>
        <br>
        <a href="https://www.google.com" type="button" class="btn btn-soft-danger">بستن</a>
        <button type="submit" class="btn btn-soft-primary searchNow">ارسال درخواست</button>

        </form>
        <script>
            $(document).ready(function(){
                    $("#formData").on("submit", function(event){
                        event.preventDefault();
                        $('.searchNow').html('<div style="width: 22px; height: 22px;" class="spinner-border" role="status"><span class="sr-only">Sending...</span></div>&nbsp Saving...');
                
                        var formValues= $('#formData').serialize();
                
                        $.post("index.php?controller=Tow&method=run", formValues, function(data){
                            // Display the returned data in browser
                            $("#display").html(data.massage);
                            $(".searchNow").html('ارسال درخواست');

                        });
                    });
                });
        </script>


        




  
    <!-- ========== FOOTER ========== -->
    
    <!-- ========== END FOOTER ========== -->
  
    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed animated hs-go-to-prevent-event fadeOutDown" href="javascript:;" style="right: 15px; bottom: -15px;" data-hs-go-to-options="{
         &quot;offsetTop&quot;: 700,
         &quot;position&quot;: {
           &quot;init&quot;: {
             &quot;right&quot;: 15
           },
           &quot;show&quot;: {
             &quot;bottom&quot;: 15
           },
           &quot;hide&quot;: {
             &quot;bottom&quot;: -15
           }
         }
       }">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->
  
  
    <!-- JS Implementing Plugins -->
    <script src="public/js/vendor.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
  
    <!-- JS Front -->
    <script src="public/js/theme.min.js"></script>
    <script src="public/js/hs.autocomplete-local-search.js"></script>
  
    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF HEADER
        // =======================================================
        var header = new HSHeader($('#header')).init();
  
  
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
          desktop: {
            position: 'left'
          }
        }).init();
  
  
        // INITIALIZATION OF FANCYBOX
        // =======================================================
        $('.js-fancybox').each(function () {
          var fancybox = $.HSCore.components.HSFancyBox.init($(this));
        });
  
  
        // INITIALIZATION OF SLICK CAROUSEL
        // =======================================================
        $('.js-slick-carousel').each(function() {
          var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
        });
  
  
        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
          duration: 650,
          once: true
        });
  
  
        // INITIALIZATION OF GO TO
        // =======================================================
        $('.js-go-to').each(function () {
          var goTo = new HSGoTo($(this)).init();
        });
      });
    </script>
  
    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="public/js/polyfill.js"><\/script>');
    </script>
  
  
</body></html>