$(document).ready(function () {
    var e = function (e) {
        var a = e.length ? e : $(e.target),
            t = a.data("output");
        window.JSON ? (window.JSON.stringify(a.nestable("serialize"))) : ("JSON browser support required for this demo.")
    };
    $("#nestable").nestable({
        group: 1
    }).on("change", e), $("#nestable2").nestable({
        group: 1
    }).on("change", e), e($("#nestable").data("output", $("#nestable-output"))), e($("#nestable2").data("output", $("#nestable2-output"))), $("#nestable-menu").on("click", function (e) {
        var a = $(e.target).data("action");
        "expand-all" === a && $(".dd").nestable("expandAll"), "collapse-all" === a && $(".dd").nestable("collapseAll")
    }), $("#nestable-menu-2").on("click", function (e) {
        var a = $(e.target).data("action");
        "expand-all" === a && $(".dd").nestable("expandAll"), "collapse-all" === a && $(".dd").nestable("collapseAll")
    }), $("#nestable3").nestable()
});