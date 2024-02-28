import './bootstrap';

const url = 'http://localhost:8000/';

$(document).on('click', '.btnDislike', function(e) { 
    e.preventDefault();
    let imageid = $(this).data("id");
    let containerid = this.id;
    let counterContainer = $("#counterPost"+imageid);
    $("body").find('#'+containerid)
        .removeClass('bi-heart-fill text-danger btnDislike')
        .addClass("bi-heart btnLike");
    let counter = parseInt(counterContainer.text()) - 1;
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: url+"dislike/",
        data: {id:imageid},
        dataType: "json",
        success: function (response) {
            counterContainer.text(counter);
        },
        error: function(error){
            $("body").find('#'+containerid)
                .removeClass("bi-heart btnLike")
                .addClass('bi-heart-fill text-danger btnDislike');
        }
    });
});

$(document).on('click', '.btnLike', function(e) { 
    e.preventDefault();
    let imageid = $(this).data("id");
    let containerid = this.id;
    let counterContainer = $("#counterPost"+imageid);
    $("body").find('#'+containerid)
        .removeClass("bi-heart btnLike")
        .addClass('bi-heart-fill text-danger btnDislike');
    let counter = parseInt(counterContainer.text()) + 1;
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: url+"like/",
        data: {id:imageid},
        dataType: "json",
        success: function (response) {
            counterContainer.text(counter);
        },
        error: function(error){
            $("body").find('#'+containerid)
                .removeClass('bi-heart-fill text-danger btnDislike')
                .addClass("bi-heart btnLike");
        }
    });
});