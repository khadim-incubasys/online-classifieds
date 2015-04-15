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

 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    

function ads() {
    this.title = arguments[0];
    this.category = arguments[1];
    this.image = arguments[2];
    this.price = arguments[3];
    this.location = arguments[4];
}
function post_add(item,base_url){
    var str = '<div class="block">';
        str += ' <div class="image">';
        str += '<img class="ad-img" src="' + base_url + 'assets/uploads/' + item.image + '" alt="" class="img-responsive">';
        str += '</div>';
        str += '<div class="text-wrap">';
        str += '<a href="' + base_url + 'advertisement/view/'+item.title+'">';
        str += '<span class="title">' +item.title + '</span>';
        str += '</a>';
        str += '<span class="price">Rs.'+item.price+'</span>';
        str += '<span class="location">' + item.location + '</span>';
        str += '</div>';
        str += '<a class="buy" href="' + base_url + 'advertisement/buy/id">Buy</a>';
        str += '</div>';
        $('.ads').append(str);
        return true;
}
$(document).ready(function () {
    var base_url = $('#base_url').val();
    $("#form").parsley({trigger: "change"});
    
    
    
    ///////////////////////////////////////
    var category = ['Laptops', 'Mobiles', 'Cats', 'Dogs', 'LEDs','Electronics', 'Assesories-m', 'Asseories-l'];
    var location = ['Lahore', 'Islamabad', 'Karachi', 'Peshawar', 'Multan','Faisalabad', 'Bahawalnagar', 'Kasur']
    
    var ads_array = new Array();
    ads_array[0] = new ads("Dell-3721", category[0], "laptop.jpg", 30, location[0]);
    ads_array[1] = new ads("Samsung-s3", category[1], "mobile.jpg", 30, location[1]);
    ads_array[2] = new ads("Italian-Billi", category[2], "cat.jpg", 30, location[2]);
    ads_array[3] = new ads("Russian-Kutta", category[3], "dog.jpg", 30, location[3]);
    ads_array[4] = new ads("Led-4100", category[4], "led.jpg", 30, location[4]);

    for (i = 0; i < ads_array.length; i++) {
        var item = ads_array[i];
        post_add(item,base_url);
    }
    /////////location/////////////
    for (j = 0; j < location.length; j++) {
        var loc = '<option value="' + i + '">' + location[j] + '</option>';
        $('#select-location').append(loc);
        loc = '<li><a href="' + base_url + 'advertisement/view_by_location/' + location[j] + '">' + location[j] + '</a></li>';
        $('#location-footer').append(loc);
    }

    ///////// categories//////////////
    for (j = 0; j < category.length; j++) {
        var cat = '<option value="' + j + '">' + category[j] + '</option>';
        $('#select-category').append(cat);
        cat = '<li><a href="' + base_url + 'category/view_all/' + category[j] + '">' + category[j] + '</a></li>';
        $('#category-footer').append(cat);
    }
    
    ///////// post new ad///////////////

    $('.new-link').on('click', function () {
        var item = new ads("Tablet-I9", "Tablets", "laptop2.jpg", 30, "Bahawalbagr");
        post_add(item,base_url);
        ads_array[ads_array.length]=item;
    });
    $('.buy').on('click', function () {
        alert("This item purchase successfully.");
    });
    
    ////////search functionality//////
    $('.search-btn').on('click', function () {
       var search_txt =$('.search-text').val();
       var result=new Array();
        for(i=0;i<ads_array.length;i++){
            var item=ads_array[i];
           // alert(search_txt===item.title);
            if(search_txt===item.title){
                console.log('found at'+i);
                result.push(item);
            }
        }
         $('.ads').html("");
        if(result.length===0){
          //  alert("Not Found");
            $('.ads').html("Not found");
        }
        for (j=0;j<result.length;j++){
            post_add(result[j],base_url);
        }
           
    });
    ///////////// print 2 /////////
   $(".thumb img").on("click",function(){
       var src=$(this).attr("src");
      //alert(src); 
      $("#ad-img-view").attr("src",src);
   });
    
    ///////////////
});