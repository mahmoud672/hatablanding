(function($) {

	"use strict";

    const activity = $("#activity");
    const other_activity = $(".other-activity")

    activity.on('click',function (){
        if (activity.val() === 'أخرى')
        {
            other_activity.show()
        }
        else
        {
            other_activity.hide();
        }
    });

})(jQuery);
