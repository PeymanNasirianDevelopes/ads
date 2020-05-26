
        
   $(function () {
  
//       $('#logout').on('click',function(){
//            $.ajax({
//        url: siteurl + "account/logout",
//        type: 'POST',
//        dataType: 'json',
//        data: {},
//        success: function (data) {
//            if(data.id=='1'){
//                 window.location.replace(siteurl + 'account/index');
//                 window.location.href = siteurl + 'account/index';
//            }
//            
//        }  
//    });
//       });
            AOS.init({
                delay: 50,
                once: true
            });

//            $(".step-carousel").owlCarousel({
//                rtl: true,
//                margin: 50,
//                responsiveClass: true,
//                autoplay: true,
//                autoplaySpeed: 500,
//                responsive: {
//                    0: {
//                        items: 2,
//                        center: true,
//                        loop: true
//                    },
//                    768: {
//                        items: 5
//                    },
//                    992: {
//                        items: 6,
//                        margin: 60,
//                        //mouseDrag:false
//                    }
//                }
//            });
//
//            $(".feature-carousel").owlCarousel({
//                rtl: true,
//                margin: 50,
//                responsive: {
//                    0: {
//                        items: 1,
//                        loop: true,
//                        autoplay: true,
//                        autoplayTimeout: 2000,
//                        autoplayHoverPause: true
//                    },
//                    768: {
//                        items: 3,
//                        //mouseDrag: false
//                    }
//                }
//            });
//
//            $(".testimonial-carousel").owlCarousel({
//                rtl: true,
//                margin: 50,
//                responsive: {
//                    0: {
//                        items: 1,
//                        loop: true,
//                        autoplay: true,
//                        autoplayTimeout: 3000,
//                        autoplayHoverPause: true
//                    },
//                    768: {
//                        items: 3,
//                        margin: 0
//                    }
//                }
//            });
  window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-101108363-3');
        
         setTimeout(function () {
                var st = document.createElement('style');
                st.innerText = 'i.material-icons {font-size: 24px !important;}'
                document.body.appendChild(st);
            }, 2000);
            
               WebFontConfig = {
            google: { families: ['Material+Icons'] }
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
        
        
        });

//
        $.getJSON("index/resumes").done(function (res) {            
            $('#resume-number').attr('data-value', res.count);               
            $('#resume-number').incrementalCounter({ digits: 'auto' });
        });
        
        
        
//        let transformedLNRData = [];
//const xhrLNR = new XMLHttpRequest();
//xhrLNR.addEventListener('load', function () {
//    transformedLNRData = JSON.parse(this.responseText).map((textRow) => {
//        return {
//            'loanNote': textRow.loanNote,
//            'reference': textRow.reference,
//            'interestRate': new Big(textRow.interestRate),
//            'initialPrincipal': new Big(textRow.initialPrincipal),
//            'currentBalance': new Big(textRow.currentBalance)
//        };
//    });
//});
////xhrLNR.open('GET', 'https://codepen.io/s5b/pen/1455fa236018d0a6f54651482e97f011.js');
//xhrLNR.open('GET', 'https://crossorigin.me/https://www.dropbox.com/s/dvin1alvc4l5nvd/data-LNR.json');
//xhrLNR.send();
//        