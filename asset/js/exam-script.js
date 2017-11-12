(function($, $window, $document) {

    $(document).ready(function(){
        console.log('mytest');

        $(".progress > div").addClass("progress-bar");


        //skill val

        var myskill = {
            "skill-html":20,
            "skill-css":30,
            "skill-js":80,
            "skill-php":70,
            "skill-mysql":35,
            "skill-ps":22,
            "skill-ai":33,
            "skill-uxui":44,
            "skill-nginx":70,
            "skill-apache":15,
            "skill-linux":20
            };

        $(".progress").each(function(){
            var thisSkill = $(this).attr("class").replace("progress ", "");

            $(this)
              .children(".progress-bar")
              .attr("aria-valuenow", myskill[thisSkill])
              .addClass("progress-bar-striped")
              .width(myskill[thisSkill] + "%")
              .text(myskill[thisSkill] + "%");

        });
        // var skill = $();    

    });


    


})(jQuery, jQuery(window), jQuery(document));
