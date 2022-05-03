export const initAppJQuryFunction = () => {
    
    if(jQuery(".option-tab-header").length) {
        var link = jQuery(".option-tab-header a");
        var content = jQuery(".option-tab-content > div");

        link.on("click", function(e) {
            e.preventDefault();

            var linkText = jQuery(this).attr("href");
            jQuery(this).addClass("current").parents().find("a").not(this).removeClass("current");

            if(linkText == "#") {
                jQuery(this).toggleClass("current-submenu-parent").parents().find("a").not(this).removeClass("current-submenu-parent");
            }
        
            var clickLink = jQuery(this);
            var getFirstLinkID = clickLink.next().find("li a").first().attr("href");


            content.each(function() {
                var $this = jQuery(this);
                var contentId = $this.attr("id");

                if(linkText === "#") {
                    var getFirstLinkID = clickLink.next().find("li a").first().attr("href");

                    if(getFirstLinkID.replace(/#/g,'') === contentId) {
                        $this.addClass("active").siblings().removeClass("active").addClass("disable");
                    }
                } else if (linkText.replace(/#/g,'') === contentId) {
                    $this.addClass("active").siblings().removeClass("active").addClass("disable");
                }
            });
        })
    }
};