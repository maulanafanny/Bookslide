$(document).ready(function(){

    // side nav toggle button hide/show
    $("#aside-toggle-btn").click(function(){       
       $("#aside-nav, main").toggleClass("active");   
    }); 

    // aside nav dropdown caret icon rotate
    $("#aside-nav-ul .nav-link").click(function(){     
     $(this).find(".dropdown-caret-svg").toggleClass("rotate-svg");
    });
    
    // aside nav > nav link remove/add active class on click
    $("#aside-nav-ul .nav-link").click(function(){
        $("#aside-nav-ul .nav-link").removeClass("active");
        $(this).addClass("active");
    });

    // click on one dropdown second one automatically hide and change svg icon to
    $("#aside-nav-ul").on('click','.nav-item',function(){      
        const liElement = $(this);
        liElement.siblings().children().children(".dropdown-caret-svg").removeClass("rotate-svg");
        liElement.siblings().children(".aside-dropdown-menu").removeClass("show");
        if($(this).hasClass("active")){
            liElement.siblings().children(".aside-dropdown-menu").addClass("show");
        }
    });
    
    // counter for dashboard stat cards
    const counter = document.querySelectorAll('.counter');
    counter.forEach(function (counter) {
        let count = setInterval(updated);
        let init = 0;
        let max = counter.innerHTML;
        function updated() {
            counter.innerHTML = ++init;
            if (init == max) {
                clearInterval(count);
            }
        }
    })

    // product livesearch
    load_data();

    function load_data(search) {
        $.ajax({
            url: "/livesearch",
            method: "GET",
            data: {
                search: search
            },
            success: function (data) {
                $('#result').html(data);
            }
        });
    }
    
    $('#keyword').keyup(function (e) { 
        query = $(this).val();
        load_data(query);
    });

    $('#keyword').focus(function (e) { 
        e.preventDefault();
        $('#result').addClass('show');
    });

    $('#keyword').focusout(function (e) { 
        e.preventDefault();
        setTimeout(function () {
            $('#result').removeClass('show');
        }, 250)
    });

    $("#result").css({
        'width': ($(".search-input").width() - 43 + 'px')
    });

    window.onresize = function () {
        $("#result").css({
            'width': ($(".search-input").width() - 43 + 'px')
        });    
    }
});