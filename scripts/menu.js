
    $(document).ready(function(){
        $("#jMenu").jMenu({
            openClick : false,
            ulWidth : '220',
            absoluteTop: 'auto',
            effects : {
                effectTypeOpen : 'show',
                effectTypeClose : 'hide',
                transition: '.3s ease-in-out',
            },
            animatedText : true,
            paddingLeft: 5
        });
        $(".horizontal-menu").css("visibility", "visible");
    });
    
    
    $(function () {
        $('.navbar-toggle').click(function () {
            $('.navbar-nav').toggleClass('slide-in');
            $('.side-body').toggleClass('body-slide-in');
            $('#search').removeClass('in').addClass('collapse').slideUp(200);
            
            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').toggleClass('slide-in');
            
        });
        
    });
