// Slick
$(document).ready(function () {
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

// Quantity Box
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function () {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

});

// function wcqib_refresh_quantity_increments() {
//     jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
//         var c = jQuery(b);
//         c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
//     })
// }
// String.prototype.getDecimals || (String.prototype.getDecimals = function() {
//     var a = this,
//         b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
//     return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
// }), jQuery(document).ready(function() {
//     wcqib_refresh_quantity_increments()
// }), jQuery(document).on("updated_wc_div", function() {
//     wcqib_refresh_quantity_increments()
// }), jQuery(document).on("click", ".plus, .minus", function() {
//     var a = jQuery(this).closest(".quantity").find(".qty"),
//         b = parseFloat(a.val()),
//         c = parseFloat(a.attr("max")),
//         d = parseFloat(a.attr("min")),
//         e = a.attr("step");
//     b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
// });
