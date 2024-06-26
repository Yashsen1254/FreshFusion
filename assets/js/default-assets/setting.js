!(function (e) {
    "use strict";
    e(function () {
        e(".nav-settings").on("click", function () {
            e("#right-sidebar").toggleClass("open");
        }),
            e(".settings-close").on("click", function () {
                e("#right-sidebar,#theme-settings").removeClass("open");
            }),
            e("#settings-trigger").on("click", function () {
                e("#theme-settings").toggleClass("open");
            });
        var s = "sidebar-light sidebar-dark sidebar-color",
            i = e("body");
        e("#sidebar-light-theme").on("click", function () {
            i.removeClass(s), i.addClass("sidebar-light"), e(".sidebar-bg-options").removeClass("selected"), e(this).addClass("selected");
        }),
            e("#sidebar-dark-theme").on("click", function () {
                i.removeClass(s), i.addClass("sidebar-dark"), e(".sidebar-bg-options").removeClass("selected"), e(this).addClass("selected");
            }),
            e("#sidebar-color-theme").on("click", function () {
                i.removeClass(s), i.addClass("sidebar-color"), e(".sidebar-bg-options").removeClass("selected"), e(this).addClass("selected");
            });
    });
})(jQuery);
