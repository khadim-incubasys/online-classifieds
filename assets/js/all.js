$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
});

$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
});


//function ads() {
//    this.title = arguments[0];
//    this.category = arguments[1];
//    this.image = arguments[2];
//    this.price = arguments[3];
//    this.location = arguments[4];
//}
//function post_add(item, base_url) {
//    var str = '<div class="block">';
//    str += ' <div class="image">';
//    str += '<img class="ad-img" src="' + base_url + 'assets/uploads/' + item.image + '" alt="" class="img-responsive">';
//    str += '</div>';
//    str += '<div class="text-wrap">';
//    str += '<a href="' + base_url + 'advertisement/view/' + item.title + '">';
//    str += '<span class="title">' + item.title + '</span>';
//    str += '</a>';
//    str += '<span class="price">Rs.' + item.price + '</span>';
//    str += '<span class="location">' + item.location + '</span>';
//    str += '</div>';
//    str += '<a class="buy" href="' + base_url + 'advertisement/buy/id">Buy</a>';
//    str += '</div>';
//    $('.ads').append(str);
//    return true;
//}
$(document).ready(function () {
    var base_url = $('#base_url').val();
    $("#login_form").parsley({trigger: "change"});
    $("#form").parsley({trigger: "change"});



    ///////////////////////////////////////
//    var category = ['Laptops', 'Mobiles', 'Cats', 'Dogs', 'LEDs', 'Electronics', 'Assesories-m', 'Asseories-l'];
//    var location = ['Lahore', 'Islamabad', 'Karachi', 'Peshawar', 'Multan', 'Faisalabad', 'Bahawalnagar', 'Kasur']
//
//    var ads_array = new Array();
//    ads_array[0] = new ads("Dell-3721", category[0], "laptop.jpg", 30, location[0]);
//    ads_array[1] = new ads("Samsung-s3", category[1], "mobile.jpg", 30, location[1]);
//    ads_array[2] = new ads("Italian-Billi", category[2], "cat.jpg", 30, location[2]);
//    ads_array[3] = new ads("Russian-Kutta", category[3], "dog.jpg", 30, location[3]);
//    ads_array[4] = new ads("Led-4100", category[4], "led.jpg", 30, location[4]);
//
//    for (i = 0; i < ads_array.length; i++) {
//        var item = ads_array[i];
//        post_add(item, base_url);
//    }
    /////////location/////////////
//    for (j = 0; j < location.length; j++) {
//        var loc = '<option value="' + i + '">' + location[j] + '</option>';
//        $('#select-location').append(loc);
//        loc = '<li><a href="' + base_url + 'advertisement/view_by_location/' + location[j] + '">' + location[j] + '</a></li>';
//        $('#location-footer').append(loc);
//    }

    ///////// categories//////////////
//    for (j = 0; j < category.length; j++) {
//        var cat = '<option value="' + j + '">' + category[j] + '</option>';
//        $('#select-category').append(cat);
//        cat = '<li><a href="' + base_url + 'category/view_all/' + category[j] + '">' + category[j] + '</a></li>';
//        $('#category-footer').append(cat);
//    }

    ///////// post new ad///////////////

//    $('.new-link').on('click', function () {
//        var item = new ads("Tablet-I9", "Tablets", "laptop2.jpg", 30, "Bahawalbagr");
//        post_add(item, base_url);
//        ads_array[ads_array.length] = item;
//    });
//    $('.buy').on('click', function () {
//        alert("This item purchase successfully.");
//    });

    ////////search functionality//////
//    $('.search-btn').on('click', function () {
//        var search_txt = $('.search-text').val();
//        var result = new Array();
//        for (i = 0; i < ads_array.length; i++) {
//            var item = ads_array[i];
//            // alert(search_txt===item.title);
//            if (search_txt === item.title) {
//                console.log('found at' + i);
//                result.push(item);
//            }
//        }
//        $('.ads').html("");
//        if (result.length === 0) {
//            //  alert("Not Found");
//            $('.ads').html("Not found");
//        }
//        for (j = 0; j < result.length; j++) {
//            post_add(result[j], base_url);
//        }
//
//    });
    ///////////// print 2 ////////////////////////////////////////////////////////////////
    $(".thumb img").hover(function () {
        var src = $(this).attr("src");
        //alert(src); 
        $("#ad-img-view").attr("src", src);
    });


    //////////////////////
    $(".trigger-login").on("click", function () {
        $('.login-popup').modal('show');
    });
    /////////////
    $(".buy-view").on("click", function () {
        var id = $(this).data("id");
        var html = '<div id="request">';
        html += '<p><input id="alt-email" type="email" name="email" placeholder="Alternative Email"> </p><br>';
        html += '<p><input id="alt-phone" type="text" name="phone" placeholder="Alternative Phone"></p>';
        html += "</div>"
        swal({title: 'Send Request To Buy',
            html: html,
            showCancelButton: true, confirmButtonText: 'Send', closeOnConfirm: false}, function () {
            swal.disableButtons();
            setTimeout(function () {
                $.ajax(
                        {
                            url: base_url + "advertisement/contact_to_buy",
                            type: "POST",
                            data: {ad_id: id, email: $("#alt-email").val(), phone: $("#alt-phone").val()},
                            success: function (data, textStatus, jqXHR)
                            {
//                                if ($('#is_rated').val() == 1) {
//                                    swal('Sent!', 'Email has been sent.', 'success');
//                                }
//                                else {

                                var rating = '<div id="rate-it"> Please Rate The Seller <span class="starRating">';
                                rating += '<input id="rating5" type="radio" name="rating" value="5">';
                                rating += '<label for="rating5">5</label>';
                                rating += '<input id="rating4" type="radio"  name="rating" value="4">';
                                rating += '<label for="rating4">4</label>';
                                rating += '<input id="rating3" type="radio" name="rating" value="3">';
                                rating += '<label for="rating3">3</label>';
                                rating += '<input id="rating2" type="radio" name="rating" value="2">';
                                rating += '<label for="rating2">2</label>';
                                rating += '<input id="rating1" type="radio" name="rating" value="1">';
                                rating += '<label for="rating1">1</label>';
                                rating += '</span> </div>';
                                swal({title: 'Email Sent Successfully',
                                    html: rating, showCancelButton: true, cancelButtonText: 'Ok',
                                    confirmButtonText: 'Submit', closeOnConfirm: false},
                                function () {
                                    swal.disableButtons();
                                    setTimeout(function () {
                                        $.ajax(
                                                {
                                                    url: base_url + "user/rate_it",
                                                    type: "POST",
                                                    data: {ad_id: id, user_id: $("#user_id").val(), stars: $('input[type="radio"]').val()},
                                                    success: function (data, textStatus, jqXHR)
                                                    {
                                                        /////
                                                    }
                                                }
                                        );
                                    }, 2000);
                                }
                                );
                                //}
                                // swal.
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                swal('Failed!', 'Something went wrong', 'fail');
                            }
                        });

            }, 2000);
        });
    });
/////////////////////////
    $("#login_form").submit(function (e)
    {
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: postData, //{"email":"dkjdk","password":"abc" },
                    success: function (data, textStatus, jqXHR)
                    {
                        var result = JSON.parse(data);
                        console.log(result);
                        if (result['result'] == true) {
                            $(".error").html();
                            var html = "<center><h2>Logged in Successfully</h2>";

                            $('.modal-body').html(html);
                            var delay = 1000; //Your delay in milliseconds

                            setTimeout(function () {
                                window.location = base_url + "advertisement";
                            }, delay);
                            //window.location.href=base_url+"user/login";
                        }
                        else {
                            $(".error").text(result['message']);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log("error");
                    }
                });
        e.preventDefault(); //STOP default action
        //  e.unbind(); //unbind. to stop multiple form submit.
    });

    $("#register_form").submit(function (e)
    {
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax(
                {
                    url: formURL,
                    type: "POST",
                    data: postData, //{"email":"dkjdk","password":"abc" },
                    success: function (data, textStatus, jqXHR)
                    {
                        var result = JSON.parse(data);
                        console.log(result);
                        if (result['result'] == true) {
                            $(".error").html();
                            var html = "<center><h2>Registered Successfully</h2>";
                            html += "<div>An email has been sent.Please verify, and Login </div> </center>";

                            $('.modal-body').html(html);
                            //window.location.href=base_url+"user/login";
                        }
                        else {
                            $(".error").text(result['message']);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log("error");
                    }
                });
        e.preventDefault(); //STOP default action
        //e.unbind(); //unbind. to stop multiple form submit.
    });

    $("#browse-img").change(function () {
        readURL(this);
    });
    //////////////////

    var base_url = $("#base_url").val();
    var url = base_url + "advertisement/upload_image";
    $('.fileupload').fileupload({
        url: url,
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(jpg|jpeg|png)$/i,
        autoUpload: true,
        thumbnails: false,
        add: function (e, data) {
            data.submit();
        },
        done: function (e, data) {
            console.log(data);
            $(this).siblings('input[type="hidden"]').val(data.result.files[0]['name']);
            $(this).siblings("img").attr('src', base_url + "assets/uploads/" + data.result.files[0]['name']);
        },
        fail: function (e) {
            console.log(e);
        }
    }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    /////////////////
    $(".search-filter").on("change", function () {
        var below_range = $('#below_range').val();
        var up_range = $('#up_range').val();
        var location = $('#location').val();
        var category = $('#category').val();
        var search_text = $('#search_text').val();
        console.log(location);
        $.ajax(
                {
                    url: base_url + "advertisement/search",
                    type: "get",
                    data: {below_range: below_range, up_range: up_range, category: category, location: location, search_text: search_text},
                    success: function (data, textStatus, jqXHR)
                    {
                        var result = JSON.parse(data);
                        console.log(result);
                        $("#results").html(result);
                        $('.pagination').css("display", "none");

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log("error");
                    }
                });
    });
    $('.search-btn').on('click', function () {

    });
    ///////////////

});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#browse-img-view').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}