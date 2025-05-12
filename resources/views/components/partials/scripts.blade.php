@push('scripts')
    <script data-id="websiteLoading">
        $(document).ready(function() {
            $('#websiteLoading').removeClass('isLoading-1');
            setTimeout(function() {

                var c = $('#websiteLoading');
                if (c.length > 0) {
                    //$('body').attr('id','body');
                    $('body').addClass('body');
                    $('#websiteLoading').addClass('isLoaded');
                    setTimeout(function() {
                        $('#websiteLoading').remove()
                    }, 1000);
                }

            }, 3000);
        });
        window.onload = function() {
            $('#websiteLoading').addClass('isLoaded');
            //$('body').attr('id','body');
            $('body').addClass('body');
            setTimeout(function() {
                $('#websiteLoading').remove()
            }, 500);
            $(document).keyup(function(e) {
                if ((e.ctrlKey || e.metaKey) && e.keyCode == 27) {
                    window.location.href = "?open=login";
                }
            });
        };
    </script>
    <script>
        var koSiteName = "PNI Masonry Services";
        $(function() {
            $(".koLeftMenuOpener").removeClass("invisible");
        })
    </script>
    <div id="searchHolder">
        <form method="get" action="">
            <div>Search</div>
            <input type="text" autocomplete="off" name="search" id="searchInput" class="form-control">
            <button type="submit" class="btn btn-color1"><i class="fas fa-search"></i></button>
            <button type="reset" class="btn btn-light" onclick="$('#searchHolder').removeClass('active')"><i
                    class="fas fa-times"></i></button>
        </form>
    </div>
    <script>
        var magnificPopupInit = function() {
            $('a.lightbox').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css">
    <script async src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"
        onload="magnificPopupInit()"></script>
    <script>
        var jQueryChecker_interval, jQueryChecker_count = 0;
        $(function() {
            jQueryChecker_interval = window.setInterval(function() {
                if (typeof window.$ === "undefined" && typeof window.jQuery === "function") {
                    console.log("jQuery ($) has been lost, restoring...");
                    window.$ = window.jQuery
                }
                jQueryChecker_count++;
                if (jQueryChecker_count > 10)
                    clearInterval(jQueryChecker_interval)
            }, 1000)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/instant.page@5.2.0/instantpage.min.js" type="module" defer></script>
    <script>
        var menuCaption = "Select a page";
    </script>
    <script type="text/javascript" src="//pnimasonryservices.com/inc/live.js?4.6.1" async></script>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" type="text/javascript">
    </script>
    <!-- AOS (Animate on Scroll) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js" defer></script>
    <script>
        $(function() {
            AOS.init({
                offset: -10,
                delay: 100,
                duration: 800,
                easing: 'ease',
                anchorPlacement: 'top-bottom'
            });
        })
    </script>
    <script>
        $(function(e) {
            var a = 400,
                s = e('#scrollToTop');
            e(window).scroll(function() {
                e(this).scrollTop() > a ? s.addClass('active') : s.removeClass('active')
            }), s.on('click', function(a) {
                s.removeClass('active');
                e('body,html').animate({
                    scrollTop: 0
                });
            })
        })
    </script>
    <script type="text/javascript" id="jsMenusSetup">
        window.addEventListener('load', function() {
            ddlevelsmenu.setup("1", "topbar", "0", "0");
        });
        function page_loader() {
            $('.loading-area').fadeOut(2000)
        };
        $(window).on('load', function () {
            page_loader()
        });

    </script>
@endpush
