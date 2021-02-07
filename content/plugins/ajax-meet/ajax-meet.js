$(document).ready(function () {
    $('.inscriptionButton').click(function (e) {
        e.preventDefault();


        // meet_id = $(this).data('id');
        meet_id = $('.id-getter').data('id');
        
        console.log(meet_id);

        $.ajax(
            {
                type: "POST",
                dataType: "json",
                url: ajaxurl,
                data: { action: 'do_ajax', meet_id: meet_id }
            }).done(
                function (response) {

                    $("#result").addClass("alert alert-success");
                    $("#login").css("visibility", "hidden");
                    $("#result").css("visibility", "visible");
                    
                }
            ).fail(
                function (response) {
                    console.log('Erreur: ' + response);
                }
            )
    });
});