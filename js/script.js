


$(document).ready(function(){

    //ajax
    var default_content="";

    checkURL();
    $('ul li a').click(function (e){

            checkURL(this.hash);

    });

    default_content = $('#main').html();
    // default_menu= $('aside').html();
    // console.log(default_content);
    // console.log(default_menu);
    
    setInterval("checkURL()",250);

    //photos info

    // function showPhotos(){
    //     $(this).parent(".pic").find(".picInfo").slideToggle('fast'); 
    //     console.log("aaa");       
    // }

    // $(".pic").on("mouseenter", ".picImg", showPhotos);
    // $(".pic").on("mouseleave", ".picImg", showPhotos);


});

    var lasturl="";

   function checkURL(hash)
{
    if(!hash) hash=window.location.hash;
    
    if(hash != lasturl)
    {
        lasturl=hash;
        
        // FIX - if we've used the history buttons to return to the homepage,
        // fill the pageContent with the default_content
        
        if(hash==""){
            $('#main').html(default_content);
            // $('aside').html(default_menu);
        }
        
        
        else{
             loadPage(hash);
        }


       
    }
}

   function loadPage(url){
    url=url.replace("#","");
    console.log(url);
    $("#loading").css("visibility","visible");
    $.ajax({
        type: "POST",
        url: "php/load_page.php",
        data: "page="+url,
        dataType: "html",
        success: function(msg){
            if(parseInt(msg)!=0){
                // console.log("gh0");
                $("#main").html(msg);
                // $("aside").html(msg);
                $("loading").css('visibility','hidden');
            }
        }
    });
   }

	

    // //login form text

    // $(".logButton").on("click", function(){
    // 	// console.log("bb");
    // 	$.post($(".regForm").attr("action"), 
    // 		$(".regForm :input").serializeArray(),
    // 		function(info){
    // 			// console.log("aa");
    // 			$(".regForm").find("#res").text(info);
    // 			// console.log($("#result").html(info));
    // 		});
    // 	clearInput();
    // });
    // //stay the same page

    // $(".regForm").submit(function(){
    // 	// console.log("aa");
    // 	return false;

    // });

    // //clear input fields

    // function clearInput(){
    // 	// console.log("cc");
    // 	$(".regForm :input:text").each(function(){
    // 		$(this).val('');
    // 	});
    // 	$(".regForm :input:password").each(function(){
    // 		$(this).val('');
    // 	});
    // }



// });




