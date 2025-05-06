<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="shortcut icon" href="https://shtheme.com/demosd/mivaanwp/wp-content/uploads/2023/08/fav.png">

    <title>Mivaan</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel="alternate" type="application/rss+xml" title="Mivaan &raquo; Feed" href="https://shtheme.com/demosd/mivaanwp/?feed=rss2" />
    <link rel="alternate" type="application/rss+xml" title="Mivaan &raquo; Comments Feed" href="https://shtheme.com/demosd/mivaanwp/?feed=comments-rss2" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/shtheme.com\/demosd\/mivaanwp\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='https://shtheme.com/demosd/mivaanwp/wp-includes/css/dist/block-library/style.min.css?ver=6.7.2' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/bootstrap.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-icons-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/bootstrap-icons.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-all-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/fontawesome.all.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/owl.carousel.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-theme-default-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/owl.theme.default.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mivaan-nice-select-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/nice-select.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/magnific-popup.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/jquery.fancybox.min.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mivaan-normalize-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/normalize.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/animate.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mivaan-style-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/style.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mivaan-responsive-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/css/responsive.css?ver=6.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mivaan-css-css' href='https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/style.css?ver=2023-08-04' type='text/css' media='all' />
    <link rel="https://api.w.org/" href="https://shtheme.com/demosd/mivaanwp/index.php?rest_route=/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://shtheme.com/demosd/mivaanwp/index.php?rest_route=/wp/v2/pages/42" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://shtheme.com/demosd/mivaanwp/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel="canonical" href="https://shtheme.com/demosd/mivaanwp/" />
    <link rel='shortlink' href='https://shtheme.com/demosd/mivaanwp/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://shtheme.com/demosd/mivaanwp/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fshtheme.com%2Fdemosd%2Fmivaanwp%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://shtheme.com/demosd/mivaanwp/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fshtheme.com%2Fdemosd%2Fmivaanwp%2F&#038;format=xml" />
    <style type="text/css" id="wp-custom-css">
        .helpline-image .helpline-shape {
            display: none;
        }

        .get-appointment-form.style-2 div.wpcf7-response-output {
            margin-bottom: 1em !important;
        }

        .blog-details-full .b-auth-section .left-a span a {
            color: var(--body-color);
        }

        .sidebar-blog-widgets .single-item .content span a {
            color: var(--body-color);
        }

        .blog-single-item .content .auth span a {
            color: var(--body-color);
        }
    </style>
</head>

<body id="post-42" class="home page-template page-template-page-templates page-template-home-1 page-template-page-templateshome-1-php page page-id-42">

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Start Header Area -->
    <header class="header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Top Left -->
                    <div class="col-lg-6">
                        <div class="header-left">
                            <a href="tel:55669988">Call Me (+55) -66 99 88</a>
                            <span>/</span>
                            <a href="mailto:info.Mivaan@gmail.com">info.Mivaan@gmail.com</a>
                        </div>
                    </div>
                    <!-- Header Top Right -->
                    <div class="col-lg-6">
                        <div class="header-right text-right">
                            <div class="social-icon">
                                <span><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></span>
                                <span><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></span>
                                <span><a href="https://www.dribbble.com/"><i class="fa-brands fa-dribbble"></i></a></span>
                                <span><a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a></span>
                            </div>
                            <div class="talk-btn">
                                <a href="https://shtheme.com/demosd/mivaanwp/?page_id=65">Let’s talk <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom -->
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-3 col-sm-4 col-5 align-self-center">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('storage/images/logo1.jpeg') }}" alt="Logo" style="width: 130px;">
                                <img src="{{ asset('storage/images/logo2.jpeg') }}" alt="Logo" style="width: 130px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-7 align-self-center">

                        <!-- Menu -->
                        <div class="menu">
                            <nav>
                                <ul class=" navigation clearfix ">
                                    <li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-67 dropdown active active"><a title="Home" href="/">Home </a>

                                    </li>
                                    <li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-83 dropdown"><a title="Pages" href="{{ route('aboutus') }}">About Us </a>
                                        <!-- <ul role="menu" class="sub-menu">
                                            <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="About Us" href="https://shtheme.com/demosd/mivaanwp/?page_id=48">About Us</a></li>
                                            <li id="menu-item-125" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-125 dropdown"><a title="Team" href="#">Team</a>
                                                <ul role="menu" class="sub-menu">
                                                    <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a title="Team" href="https://shtheme.com/demosd/mivaanwp/?page_id=50">Team</a></li>
                                                    <li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-team menu-item-123"><a title="Team Details" href="https://shtheme.com/demosd/mivaanwp/?team=donald-l-juarez">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a title="Appointment" href="https://shtheme.com/demosd/mivaanwp/?page_id=52">Appointment</a></li>
                                            <li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a title="Gallery" href="https://shtheme.com/demosd/mivaanwp/?page_id=54">Gallery</a></li>
                                            <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a title="Testimonials" href="https://shtheme.com/demosd/mivaanwp/?page_id=56">Testimonials</a></li>
                                            <li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a title="Faq" href="https://shtheme.com/demosd/mivaanwp/?page_id=58">Faq</a></li>
                                        </ul> -->
                                    </li>
                                    <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-84 dropdown"><a title="Services" href="#">Services </a>
                                        <ul role="menu" class="sub-menu">
                                            <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a title="Services" href="https://shtheme.com/demosd/mivaanwp/?page_id=60">Services</a></li>
                                            <li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-122"><a title="Service Details" href="https://shtheme.com/demosd/mivaanwp/?services=dental-caring">Service Details</a></li>
                                        </ul>
                                    </li>


                                    <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a title="Contact" href="{{ route('contactus') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Bottom Right -->
                        <div class="header-bottom-right">
                            <!-- Header Search -->
                            <div class="header-search">
                                <div class="header-search-icon" title="Search"></div>
                                <div class="header-top-search-form">
                                    <div class="header-top-search-form-full">
                                        <form>
                                            <input type="search" name="s" placeholder="Search Here..">
                                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Header Language -->
                            <div class="header-language">
                            </div>
                            <!-- Humbagar BTN -->
                            <div class="right-humbugur-btn">
                                <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/dot.png" alt="btn">
                            </div>
                        </div>
                        <!-- Menu OPen -->
                        <div class="canvas_open_full">
                            <div class="canvas_open">
                                <a href="javascript:void(0)">
                                    <i class="bi bi-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Mobile Menu Area -->
    <div class="mobile-menu-area">

        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay">

        </div>
        <div class="offcanvas_menu">
            <div class="offcanvas_menu_wrapper">
                <div class="canvas_close">
                    <a href="javascript:void(0)"><i class="bi bi-x-lg"></i></a>
                </div>
                <div class="mobile-logo">
                    <a href="https://shtheme.com/demosd/mivaanwp/">
                        <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="menu" class="text-left ">
                    <ul class="offcanvas_main_menu ">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-67 dropdown active active"><a title="Home" href="https://shtheme.com/demosd/mivaanwp/">Home </a>
                            <ul role="menu" class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-42 current_page_item menu-item-76 active"><a title="Home 1" href="https://shtheme.com/demosd/mivaanwp/">Home 1</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a title="Home 2" href="https://shtheme.com/demosd/mivaanwp/?page_id=44">Home 2</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a title="Home 3" href="https://shtheme.com/demosd/mivaanwp/?page_id=46">Home 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-83 dropdown"><a title="Pages" href="#">Pages </a>
                            <ul role="menu" class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="About Us" href="https://shtheme.com/demosd/mivaanwp/?page_id=48">About Us</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-125 dropdown"><a title="Team" href="#">Team</a>
                                    <ul role="menu" class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a title="Team" href="https://shtheme.com/demosd/mivaanwp/?page_id=50">Team</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-team menu-item-123"><a title="Team Details" href="https://shtheme.com/demosd/mivaanwp/?team=donald-l-juarez">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a title="Appointment" href="https://shtheme.com/demosd/mivaanwp/?page_id=52">Appointment</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a title="Gallery" href="https://shtheme.com/demosd/mivaanwp/?page_id=54">Gallery</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a title="Testimonials" href="https://shtheme.com/demosd/mivaanwp/?page_id=56">Testimonials</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a title="Faq" href="https://shtheme.com/demosd/mivaanwp/?page_id=58">Faq</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-84 dropdown"><a title="Services" href="#">Services </a>
                            <ul role="menu" class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a title="Services" href="https://shtheme.com/demosd/mivaanwp/?page_id=60">Services</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-122"><a title="Service Details" href="https://shtheme.com/demosd/mivaanwp/?services=dental-caring">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85 dropdown"><a title="Projects" href="#">Projects </a>
                            <ul role="menu" class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a title="Projects" href="https://shtheme.com/demosd/mivaanwp/?page_id=62">Projects</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-project menu-item-121"><a title="Project Details" href="https://shtheme.com/demosd/mivaanwp/?project=anxiety-in-children">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-86 dropdown"><a title="Blog" href="#">Blog </a>
                            <ul role="menu" class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a title="Blog Right Sidebar" href="https://shtheme.com/demosd/mivaanwp/?page_id=29">Blog Right Sidebar</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Blog Grid" href="https://shtheme.com/demosd/mivaanwp/?page_id=38">Blog Grid</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-87"><a title="Blog Details" href="https://shtheme.com/demosd/mivaanwp/?p=25">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a title="Contact" href="https://shtheme.com/demosd/mivaanwp/?page_id=65">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!-- End Mobile Menu Area -->
    <!-- Start Header Sidebar About Area -->
    <div class="off_canvars_overlay"></div>
    <div class="about-sidebar-section">
        <div class="about-sidebar-section-full">
            <div class="hide-sidebar">
                <i class="bi bi-x-lg"></i>
            </div>
            <div class="logo">
                <a href="https://shtheme.com/demosd/mivaanwp/">
                    <img src="https://shtheme.com/demosd/mivaanwp/wp-content/themes/mivaan/assets/img/white-logo.png" alt="logo">
                </a>
            </div>
            <div class="content">
                <p>Patanjali Wellness is operating under the blessings of Revered Swami Ramdevji Maharaj and the direction and guidance of Revered Acharya Balkrishnaji, Patanjali Wellness is an excellent and unique concept for providing holistic treatment through integrated use of Yoga (Mind-Body balance, Naturopathy(the ancient Indian art of healing), Panchkarma therapies(Body Detox), Acupressure and harmless herbs or medicinal plants..</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eveniet facere quae a, doloremque! Placeat explicabo vel enim?</p>
                <a class="button-1" href="https://shtheme.com/demosd/mivaanwp/?page_id=65">Contact Now <i class="fa-solid fa-arrow-right"></i></a>
                <div class="info">
                    <div class="info-single">
                        <div class="icon">
                            <i class="bi bi-pin-map"></i>
                        </div>
                        <div class="content">
                            <h4>Address</h4>
                            <span>California, Road, TX 70240</span>
                        </div>
                    </div>
                    <div class="info-single">
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email</h4>
                            <a href="mailto:example1234@gmail.com">example1234@gmail.com</a>
                        </div>
                    </div>
                    <div class="info-single">
                        <div class="icon">
                            <i class="bi bi-telephone-inbound"></i>
                        </div>
                        <div class="content">
                            <h4>Phone</h4>
                            <a href="tel:912355487548">+91 235 548 7548</a>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>