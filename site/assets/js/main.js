

/* Анимация прокрутки*/
type="text/javascript">
    $(function(){
        $("a[href^='#']").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            return false;
        });
    });


 /* конец Анимации прокрутки*/
