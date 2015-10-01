var portfolio;

//MODEL

function Portfolio(numOfItemsInView) {
    this.currentPos = 0;
    this.numOfItemsInView = numOfItemsInView; //int
    this.allCurrentItems;   //all items in the current portfolio - array of objects
    this.catSelected = "all";
    this.numOfPages;
    this.currentPage;
}

Portfolio.prototype.filter = function (category) {
    this.allCurrentItems = [];
    var tempArray = [];
    $.getJSON('js/portfolio-items.json', function (data) { //parse json into objects
        tempArray = data;
        for (var i = 0; i < tempArray.length; i++) {
            if (tempArray[i].categories.indexOf(category) !== -1) {
                portfolio.allCurrentItems.push(tempArray[i]);
            }
        }
        populate(0);
        portfolio.currentPage = 1;
        portfolio.currentPos = 0;
        var progress = portfolio.currentPage / portfolio.numOfPages * 100 + "%";
        $(".sr").html(portfolio.currentPage + "/" + portfolio.numOfPages);
        $(".progress-bar").css("width", progress);
    });
};

//Parse json data and populate HTML
function parseJson() {
    $.getJSON('js/portfolio-items.json', function (data) { //parse json into objects
        portfolio.allCurrentItems = data;
        populate(0);
    });
}

//Populate HTML items with data

$(".port-thumb").parent().append("<div class='loader-wrapper'><img src='img/ajax-loader.gif' class='loader'></div>"); //append ajax loader

function populate(pos) {
    portfolio.numOfPages = Math.ceil(portfolio.allCurrentItems.length / portfolio.numOfItemsInView);
    portfolio.currentPage = Math.ceil((1 / portfolio.numOfItemsInView) * (portfolio.currentPos + 1));
    progress = portfolio.currentPage / portfolio.numOfPages * 100 + "%";
    $(".sr").html(portfolio.currentPage + "/" + portfolio.numOfPages);
    $(".progress-bar").css("width", progress);
    $(".loader-wrapper").show();
    $(".port-thumb").remove();
    for (var i = 0; i < portfolio.numOfItemsInView; i++) {
        $(".port-box:eq(" + i + ") ").prepend("<img class='port-thumb img-responsive'>");
        if (portfolio.allCurrentItems[i + pos] !== undefined) {
            $(".port-thumb")[i].src = portfolio.allCurrentItems[i + pos].thumbURL;
            $(".port-title")[i].innerHTML = portfolio.allCurrentItems[i + pos].title;
            $(".port-skills")[i].innerHTML = portfolio.allCurrentItems[i + pos].skills;
            $(".port-type")[i].innerHTML = portfolio.allCurrentItems[i + pos].projectType;
            $(".port-button")[i].href = portfolio.allCurrentItems[i + pos].buttonURL;

            if (portfolio.allCurrentItems[i + pos].type === "static") {
                $(".port-button")[i].innerHTML = "screenshot";
                $(".port-button")[i].removeAttribute("href");
            } else {
                $(".port-button")[i].innerHTML = "live site";
                $(".port-button")[i].href = portfolio.allCurrentItems[i + pos].buttonURL;
            }
        }


        //hide the loader on image load
        $(".port-thumb:eq(" + i + ") ").load(function () {
            $(this).siblings(".loader-wrapper").hide();
            $(this).css("-webkit-filter", "opacity(1)").css("filter", "opacity(1)");
        });
    }
}





//FINAL FUNCTION TO CALL

function renderPortfolio(numOfItemsInView) {   //pass int and array with strings
    portfolio = new Portfolio(numOfItemsInView);
    parseJson();
}

//-----------------------------------------------------------//


//EVENT LISTENERS 

$('.port-filter').click(function () {
    if ($(this).html().toLowerCase() !== portfolio.catSelected) {
        $('.port-filter').css("border", "1px solid white");
        $(this).css("border", "1px solid black");
        portfolio.catSelected = $(this).html().toLowerCase();
        portfolio.filter($(this).html().toLowerCase());
    } else if ($(this).html().toLowerCase() === portfolio.catSelected) {
        $(this).css("border", "1px solid white");
        portfolio.catSelected = "all";
        parseJson();
        portfolio.currentPos = 0;
        portfolio.currentPage = 1;
    }
});


function scroll(direction) {
    if (direction === "right") {
        if (portfolio.currentPos < portfolio.allCurrentItems.length - portfolio.numOfItemsInView) {
            portfolio.currentPos += portfolio.numOfItemsInView;
            populate(portfolio.currentPos);
        }
    } else if (direction === "left") {
        if (portfolio.currentPos !== 0) {
            portfolio.currentPos -= portfolio.numOfItemsInView;
            populate(portfolio.currentPos);
        }
    }

}

$('.port-left').click(function () {
    scroll("left");
});

$('.port-right').click(function () {
    scroll("right");
});

$(".dh-container").on("swipeleft", function () {
    scroll("right");
});

$(".dh-container").on("swiperight", function () {
    scroll("left");
});


$(".port-button").click(function (event) {
    if ($(this).html() === "screenshot") {
        $('.port-modal').modal('toggle');
        $(".modal-title").html($(this).siblings("h3").html());

        for (var i = 0; i < portfolio.allCurrentItems.length; i++) {
            if (portfolio.allCurrentItems[i].title === $(".modal-title").html()) {
                $('.modal-body').children(".loader-wrapper").show();
                $('.modal-body').children('img').attr('src', portfolio.allCurrentItems[i].staticImage);

                $('.modal-body').children('img').load(function () {
                    $('.modal-body').children(".loader-wrapper").hide();
                    $('.modal-body').children('img').css("-webkit-filter", "opacity(1)").css("filter", "opacity(1)");
                });
            }
        }
    } else {
        event.preventDefault();
        window.open($(this).attr('href'), '_blank');
    }
});





