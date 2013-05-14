$(document).ready(function(){
	
        
        $(".image").each(function() {
        $(this).data("standardWidth", $(this).width());
    });

    $(".image").hover(function() {
        $(this).animate({
            width: "12%",'marginLeft': '+=15px','marginRight': '+=15px'
        }, 300 );
        
    }, function() {
        $(this).parent().children().each(function() {
            $(this).animate({
                width: $(this).data("standardWidth"),'marginLeft': '-=15px','marginRight': '-=15px'
            }, 300 );
    });
        });
        });