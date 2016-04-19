function Section() {
    this.inline = false;
    this.begin = 0;
    this.end = 0;
    this.visitCnt = 0;
}

var secHome = new Section();
var secAbout = new Section();
var secPortfolio = new Section();
var secBlog = new Section();
var secContact = new Section();
var maxCnt = -1;

var imgMax = 63;
var imgMin = 30;

function sectionFreqUpdate(section, inline) {
    if (inline) {
        if (!section.inline) {
            section.inline = true;
            section.begin = new Date();
        } else {
            console.log(new Date() - section.begin);
            if (new Date() - section.begin >= 2000) {
                section.visitCnt++;
                //section.begin = new Date();
            }
        }
        if (section == secContact) {
            //alert(here);
        }
    } else {
        if (section.inline) {
            /*if (new Date() - section.begin >= 2000) {
                section.visitCnt++;
                section.begin = new Date();
            }*/
            section.inline = false;
        }
    }
    updateMenuIcons();
}

function updateMenuIcons() {
    if (secHome.visitCnt > maxCnt)
        maxCnt = secHome.visitCnt;
    if (secAbout.visitCnt > maxCnt)
        maxCnt = secAbout.visitCnt;
    if (secPortfolio.visitCnt > maxCnt)
        maxCnt = secPortfolio.visitCnt;
    if (secBlog.visitCnt > maxCnt)
        maxCnt = secBlog.visitCnt;
    if (secContact.visitCnt > maxCnt)
        maxCnt = secContact.visitCnt;

    var homeSize = secHome.visitCnt/maxCnt*(imgMax - imgMin) + imgMin;
    $("#menu-img-home").width(homeSize).height(homeSize);

    var aboutSize = secAbout.visitCnt/maxCnt*(imgMax - imgMin) + imgMin;
    $("#menu-img-about").width(aboutSize).height(aboutSize);

    var portSize = secPortfolio.visitCnt/maxCnt*(imgMax - imgMin) + imgMin;
    $("#menu-img-portfolio").width(portSize).height(portSize);

    var blogSize = secBlog.visitCnt/maxCnt*(imgMax - imgMin) + imgMin;
    $("#menu-img-blog").width(blogSize).height(blogSize);

    var contSize = secContact.visitCnt/maxCnt*(imgMax - imgMin) + imgMin;
    $("#menu-img-contact").width(contSize).height(contSize);
}

$.fn.in_viewport = function () {
    var rect = this[0].getBoundingClientRect();
	return (
		(rect.height > 0 || rect.width > 0) &&
		rect.bottom >= 0 &&
		rect.right >= 0 &&
		rect.top <= (window.innerHeight || document.documentElement.clientHeight) - 100 && // -100 to delay animation start (not right after appearance)
		rect.left <= (window.innerWidth || document.documentElement.clientWidth)
	);
};


$.fn.scroll_aligned = function () {    
	var rect = this[0].getBoundingClientRect();
    
    return (
        // aligned if on page top (with epsilon offset of 180)
        (rect.top >= 0 && rect.top <= 180) ||
        // OR for elements that are on page bottom (if distance to bottom <= 300),
        // increase epsilon to 275 (since its impossible for them to be on page top)
        ((rect.top >= 0 && rect.top <= 330) && ($(document).height() - this.offset().top - this.height() <= 300))
    );
};

function animSetUp() {

        if ($('#home').in_viewport()) {
            $('.headertext').slideDown(700);
        }

        if ($('#about').in_viewport()) {
            $('#about').css("visibility", "visible");
            $('#about').animate({left: '10%'});
        }

        if ($('#group1').in_viewport()) {
            $('#group1 .text').slideDown(1000);
            $('#group1 .title').slideDown(1000);
            $('#group1 hr').slideDown(1000);
        }

        if ($('#group2').in_viewport()) {
            $('#group2 .text').css("visibility", "visible");
            $('#group2 .text').animate({left: '10%'}, 1000);
            $('#group2 .title').css("visibility", "visible");
            $('#group2 .title').animate({left: '10%'}, 1000);
            $('#group2 hr').css("visibility", "visible");
            $('#group2 hr').animate({left: '10%'}, 1000);
        }

        if ($('#skills').in_viewport()) {
            $('#skills').animate({'margin-top': '0'},1000);
        }

        if ($('#portfolio').in_viewport()) {
            $('#portfolio').animate({'margin-left': '0'});
        }

        if ($('#blog').in_viewport()) {
            $('#blog .news-post').animate({'margin-top': '0'}, 1000);
            $('#blog .blog-post').animate({'left': '0'}, 1000);
        }

        if ($('#section-zurich').in_viewport()) {
            $('#zurich').show().animate({'left': '10%'}, 1000);
        }

        if ($('#contact').in_viewport()) {
            $('#contact .contact-div').animate({'top': '0'}, 500);
        }

        /*sectionFreqUpdate(secHome, $('#home').scroll_aligned());
        sectionFreqUpdate(secAbout, $('#about-all').scroll_aligned());
        sectionFreqUpdate(secPortfolio, $('#portfolio').scroll_aligned());
        sectionFreqUpdate(secBlog, $('#blog').scroll_aligned());
        sectionFreqUpdate(secContact, $('#contact').scroll_aligned());*/

}

function updateAll() {
	sectionFreqUpdate(secHome, $('#home').scroll_aligned());
    sectionFreqUpdate(secAbout, $('#about-all').scroll_aligned());
    sectionFreqUpdate(secPortfolio, $('#portfolio').scroll_aligned());
    sectionFreqUpdate(secBlog, $('#blog').scroll_aligned());
    sectionFreqUpdate(secContact, $('#contact').scroll_aligned());
	setTimeout(updateAll, 2000);
}

$(document).ready(function() {

    // Hide elements which are animated by appearance
    $('.headertext').hide();

    $('#about').css("visibility", "hidden");

    $('#group1 .text').hide();
    $('#group1 .title').hide();
    $('#group1 hr').hide();

    $('#group2 .text').css("visibility", "hidden");
    $('#group2 .title').css("visibility", "hidden");
    $('#group2 hr').css("visibility", "hidden");

    $('#zurich').hide();

    // Animate elements visible on page load
    animSetUp();
	updateAll();
	
	/*setInterval(updateAll, 2000);*/

    $(window).scroll(function () {
            // Animate elements visible upon scrolling
            animSetUp();
    });
});

function updatePortfolio(selectedItem){
	$(".portfolio-part").each(function() {
		$(this).css("display", "inline-block");
	});
	
	if($(selectedItem).attr("name") != "ALL") {
		$(".portfolio-part[name!='"+ $(selectedItem).attr("name") +"']").each(function() {
			$(this).css("display", "none");
		});
	}
}
