/* -------------------------------------------------------------------------- */
/* ---| simple-text-rotator.js |--------------------------------------------- */
/* -------------------------------------------------------------------------- */

! function (t) {
    var a = {
        animation: "dissolve",
        separator: ",",
        speed: 2e3
    };
    t.fn.textrotator = function (n) {
        var e = t.extend({}, a, n);
        return this.each(function () {
            var a = t(this),
                n = [];
            t.each(a.text().split(e.separator), function (t, a) {
                n.push(a)
            }), a.text(n[0]);
            var r = function () {
                switch (e.animation) {
                    case "dissolve":
                        a.animate({
                            textShadowBlur: 20,
                            opacity: 0
                        }, 500, function () {
                            s = t.inArray(a.text(), n), s + 1 == n.length && (s = -1), a.text(n[s + 1]).animate({
                                textShadowBlur: 0,
                                opacity: 1
                            }, 500)
                        });
                        break;
                    case "flip":
                        a.find(".back").length > 0 && a.html(a.find(".back").html());
                        var r = a.text(),
                            s = t.inArray(r, n);
                        s + 1 == n.length && (s = -1), a.html(""), t("<span class='front'>" + r + "</span>").appendTo(a), t("<span class='back'>" + n[s + 1] + "</span>").appendTo(a), a.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip").show().css({
                            "-webkit-transform": " rotateY(-180deg)",
                            "-moz-transform": " rotateY(-180deg)",
                            "-o-transform": " rotateY(-180deg)",
                            transform: " rotateY(-180deg)"
                        });
                        break;
                    case "flipUp":
                        a.find(".back").length > 0 && a.html(a.find(".back").html());
                        var r = a.text(),
                            s = t.inArray(r, n);
                        s + 1 == n.length && (s = -1), a.html(""), t("<span class='front'>" + r + "</span>").appendTo(a), t("<span class='back'>" + n[s + 1] + "</span>").appendTo(a), a.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip up").show().css({
                            "-webkit-transform": " rotateX(-180deg)",
                            "-moz-transform": " rotateX(-180deg)",
                            "-o-transform": " rotateX(-180deg)",
                            transform: " rotateX(-180deg)"
                        });
                        break;
                    case "flipCube":
                        a.find(".back").length > 0 && a.html(a.find(".back").html());
                        var r = a.text(),
                            s = t.inArray(r, n);
                        s + 1 == n.length && (s = -1), a.html(""), t("<span class='front'>" + r + "</span>").appendTo(a), t("<span class='back'>" + n[s + 1] + "</span>").appendTo(a), a.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube").show().css({
                            "-webkit-transform": " rotateY(180deg)",
                            "-moz-transform": " rotateY(180deg)",
                            "-o-transform": " rotateY(180deg)",
                            transform: " rotateY(180deg)"
                        });
                        break;
                    case "flipCubeUp":
                        a.find(".back").length > 0 && a.html(a.find(".back").html());
                        var r = a.text(),
                            s = t.inArray(r, n);
                        s + 1 == n.length && (s = -1), a.html(""), t("<span class='front'>" + r + "</span>").appendTo(a), t("<span class='back'>" + n[s + 1] + "</span>").appendTo(a), a.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube up").show().css({
                            "-webkit-transform": " rotateX(180deg)",
                            "-moz-transform": " rotateX(180deg)",
                            "-o-transform": " rotateX(180deg)",
                            transform: " rotateX(180deg)"
                        });
                        break;
                    case "spin":
                        a.find(".rotating").length > 0 && a.html(a.find(".rotating").html()), s = t.inArray(a.text(), n), s + 1 == n.length && (s = -1), a.wrapInner("<span class='rotating spin' />").find(".rotating").hide().text(n[s + 1]).show().css({
                            "-webkit-transform": " rotate(0) scale(1)",
                            "-moz-transform": "rotate(0) scale(1)",
                            "-o-transform": "rotate(0) scale(1)",
                            transform: "rotate(0) scale(1)"
                        });
                        break;
                    case "fade":
                        a.fadeOut(e.speed, function () {
                            s = t.inArray(a.text(), n), s + 1 == n.length && (s = -1), a.text(n[s + 1]).fadeIn(e.speed)
                        })
                }
            };
            setInterval(r, e.speed)
        })
    }
}(window.jQuery);