! function t(e, i, s) {
    function r(a, o) {
        if (!i[a]) {
            if (!e[a]) {
                var l = "function" == typeof require && require;
                if (!o && l) return l(a, !0);
                if (n) return n(a, !0);
                var c = new Error("Cannot find module '" + a + "'");
                throw c.code = "MODULE_NOT_FOUND", c
            }
            var h = i[a] = {
                exports: {}
            };
            e[a][0].call(h.exports, (function(t) {
                return r(e[a][1][t] || t)
            }), h, h.exports, t, e, i, s)
        }
        return i[a].exports
    }
    for (var n = "function" == typeof require && require, a = 0; a < s.length; a++) r(s[a]);
    return r
}({
    1: [function(t, e, i) {
        e.exports = {
            conf: ["acgp:classic:local"],
            datafile: "cache/data/iphone-compare/data.raw.json",
            site: {
                name: "iphone/compare",
                version: "ac",
                resources: {
                    images: "/v/${site.name}/${site.version}/images"
                }
            },
            build: {
                html: {
                    transforms: ["removeEmptyLines"]
                },
                js: {
                    babelifyDependencies: !0
                },
                copy: {
                    paths: [
                        ["./assets/**/*", "copyDest"],
                        ["./src/js/**/*.json", "html"]
                    ]
                }
            },
            ori: {
                enabled: !0,
                exclusion: "\\.(inc|json|js)$",
                secret: "e8eda2f62112abb7287350d7eedaf5b1fd6ff8f7a4423b790d5703e2d942b18e"
            }
        }
    }, {}],
    2: [function(t, e, i) {
        "use strict";
        var s = t(9),
            r = t(10),
            n = t(13),
            a = t(69).EventEmitterMicro,
            o = a.prototype,
            l = t(19),
            c = t(21),
            h = [l.BUSY, l.CHECKED, l.DISABLED, l.EXPANDED, l.HIDDEN, l.INVALID, l.PRESSED, l.SELECTED],
            u = function(t, e) {
                a.call(this), this._options = e || {}, this._selector = e.selector || ".navitem", this._allowMultiSelection = e.multiSelection || !1;
                var i = h.indexOf(e.state) > -1 ? e.state : l.SELECTED;
                this.el = t, this._navItems = t.querySelectorAll(this._selector), this._navItems = Array.prototype.slice.call(this._navItems), this._state = i, this._navKeys = {}, this.selectOption = this.selectOption.bind(this), this._handleKeyDown = this._handleKeyDown.bind(this), this._setup()
            };
        u.ONSELECT = "onSelect", u.ONFOCUS = "onFocus";
        var d = u.prototype = Object.create(o);
        d._setup = function() {
            for (var t = [c.ARROW_DOWN, c.ARROW_RIGHT], e = [c.ARROW_UP, c.ARROW_LEFT], i = [c.ENTER, c.SPACEBAR], s = 0; s < t.length; s++) this.addNavkey(t[s], this._arrowDown.bind(this, !0)), this.addNavkey(e[s], this._arrowDown.bind(this, null)), this.addNavkey(i[s], this.selectOption);
            this._setupNavItems()
        }, d._setupNavItems = function() {
            if (this._navItems.length) {
                for (var t = 0; t < this._navItems.length; t++) this._setTabbingByIndex(t);
                void 0 !== this.focusedNavItemIndex && void 0 !== this.selectedNavitemIndex || this.setSelectedItemByIndex(0, !0)
            }
        }, d._setTabbingByIndex = function(t) {
            var e = this._navItems[t];
            n(e.getAttribute(this._state)) && (this.focusedNavItemIndex = t, this.selectedNavitemIndex = t), n(e.getAttribute(l.DISABLED)) ? s(e) : r(e)
        }, d.start = function() {
            this._navItems.length < 1 || (this.el.addEventListener("keydown", this._handleKeyDown), this.el.addEventListener("click", this.selectOption))
        }, d.stop = function() {
            this.el.removeEventListener("keydown", this._handleKeyDown), this.el.removeEventListener("click", this.selectOption)
        }, d._handleKeyDown = function(t) {
            if (t.ctrlKey || t.altKey || t.metaKey) return !0;
            this._navKeys[t.keyCode] && this._navKeys[t.keyCode](t)
        }, d._arrowDown = function(t, e, i) {
            e.preventDefault(), this.previousNavItemIndex = this.focusedNavItemIndex, this.focusedNavItemIndex = this._calculateIndex(t, this.focusedNavItemIndex), this._navItems[this.focusedNavItemIndex].focus(), i || this.trigger(u.ONFOCUS, {
                event: e,
                index: this.focusedNavItemIndex,
                el: this._navItems[this.focusedNavItemIndex]
            })
        }, d.selectOption = function(t, e) {
            t.preventDefault();
            var i = this._navItems.indexOf(document.activeElement);
            i > -1 && document.activeElement !== this._navItems[this.focusedNavItemIndex] && (this.focusedNavItemIndex = i), this._allowMultiSelection ? this._toggleState() : (this._navItems[this.selectedNavitemIndex].setAttribute(this._state, "false"), this._navItems[this.focusedNavItemIndex].setAttribute(this._state, "true")), this.selectedNavitemIndex = this.focusedNavItemIndex, e || this.trigger(u.ONSELECT, {
                event: t,
                index: this.selectedNavitemIndex,
                el: this._navItems[this.selectedNavitemIndex]
            })
        }, d._toggleState = function() {
            var t = this._navItems[this.focusedNavItemIndex].getAttribute(this._state);
            n(t) ? this._navItems[this.focusedNavItemIndex].setAttribute(this._state, "false") : this._navItems[this.focusedNavItemIndex].setAttribute(this._state, "true")
        }, d._calculateIndex = function(t, e) {
            var i = e;
            if (!0 === t) {
                if (i = ++i >= this._navItems.length ? 0 : i, !n(this._navItems[i].getAttribute(l.DISABLED)) || this._navItems[i].hasAttribute("disabled")) return i
            } else if (i = --i < 0 ? this._navItems.length - 1 : i, !n(this._navItems[i].getAttribute(l.DISABLED)) || this._navItems[i].hasAttribute("disabled")) return i;
            return this._calculateIndex(t, i)
        }, d.updateNavItems = function() {
            var t = this.el.querySelectorAll(this._selector);
            this._navItems = Array.prototype.slice.call(t)
        }, d.addNavItem = function(t) {
            t && t.nodeType && this._navItems.indexOf(t) < 0 && (n(t.getAttribute(l.DISABLED)) || r(t), this._navItems.push(t))
        }, d.setSelectedItemByIndex = function(t, e) {
            this._allowMultiSelection || isNaN(this.selectedNavitemIndex) || this._navItems[this.selectedNavitemIndex].setAttribute(this._state, "false"), this.focusedNavItemIndex = t, this.selectedNavitemIndex = t, this._navItems[this.selectedNavitemIndex].setAttribute(this._state, "true"), e || this.trigger(u.ONSELECT, {
                event: null,
                index: this.focusedNavItemIndex,
                el: this._navItems[this.focusedNavItemIndex]
            })
        }, d.getSelectedItem = function() {
            return this._navItems[this.selectedNavitemIndex]
        }, d.getFocusedItem = function(t) {
            return this._navItems[this.focusedNavItemIndex]
        }, d.addNavkey = function(t, e) {
            "function" == typeof e && "number" == typeof t ? this._navKeys[t] = e : console.warn("incorrect types arguments were passed")
        }, d.removeNavkey = function(t) {
            delete this._navKeys[t]
        }, d.destroy = function() {
            for (var t in o.destroy.call(this), this.stop(), this.el = null, this._options = null, this._selector = null, this.focusedNavItemIndex = null, this.selectedNavitemIndex = null, this._navItems = null, this._state = null, this.selectOption = null, this._handleKeyDown = null, this._navKeys) this._navKeys.hasOwnProperty(t) && this.removeNavkey(t);
            this._navKeys = null
        }, e.exports = u
    }, {
        10: 10,
        13: 13,
        19: 19,
        21: 21,
        69: 69,
        9: 9
    }],
    3: [function(t, e, i) {
        "use strict";
        var s = t(8),
            r = t(12),
            n = t(18),
            a = function(t, e) {
                e = e || {}, this._tabbables = null, this._excludeHidden = e.excludeHidden, this._firstTabbableElement = e.firstFocusElement, this._lastTabbableElement = null, this._relatedTarget = null, this.el = t, this._handleOnFocus = this._handleOnFocus.bind(this)
            },
            o = a.prototype;
        o.start = function(t) {
            this.updateTabbables(), r(this.el, null, this._excludeHidden);
            let e = document.activeElement;
            this._firstTabbableElement ? this.el.contains(document.activeElement) || t || (this._firstTabbableElement.focus(), e = this._firstTabbableElement) : console.warn("this._firstTabbableElement is null, CircularTab needs at least one tabbable element."), this._relatedTarget = e, document.addEventListener("focus", this._handleOnFocus, !0)
        }, o.stop = function() {
            n(this.el), document.removeEventListener("focus", this._handleOnFocus, !0)
        }, o.updateTabbables = function() {
            this._tabbables = s.getTabbableElements(this.el, this._excludeHidden), this._firstTabbableElement = this._firstTabbableElement || this._tabbables[0], this._lastTabbableElement = this._tabbables[this._tabbables.length - 1]
        }, o._handleOnFocus = function(t) {
            if (this.el.contains(t.target)) this._relatedTarget = t.target;
            else {
                if (t.preventDefault(), this.updateTabbables(), this._relatedTarget === this._lastTabbableElement || null === this._relatedTarget) return this._firstTabbableElement.focus(), void(this._relatedTarget = this._firstTabbableElement);
                if (this._relatedTarget === this._firstTabbableElement && this._lastTabbableElement) return this._lastTabbableElement.focus(), void(this._relatedTarget = this._lastTabbableElement)
            }
        }, o.destroy = function() {
            this.stop(), this.el = null, this._tabbables = null, this._firstTabbableElement = null, this._lastTabbableElement = null, this._relatedTarget = null, this._handleOnFocus = null
        }, e.exports = a
    }, {
        12: 12,
        18: 18,
        8: 8
    }],
    4: [function(t, e, i) {
        "use strict";
        var s = t(21),
            r = 0,
            n = ["button", "checkbox", "listbox", "option", "menuitem", "menuitemradio", "menuitemcheckbox", "tab"],
            a = t(62),
            o = function() {
                this._elements = {}, this._callbacks = {}, this._bindEvents(), this._proxies = {}, this._setup()
            },
            l = o.prototype;
        l._bindEvents = function() {
            this._handleKeydown = this._handleKeydown.bind(this), this._handleHover = this._handleHover.bind(this)
        }, l._setup = function() {
            this._addProxy("click", this._clickProxy), this._addProxy("hover", this._hoverProxy)
        }, l._addProxy = function(t, e) {
            this._proxies[t] = this._proxies[t] || [], this._proxies[t].push(e)
        }, l._removeProxy = function(t, e) {
            if (this._proxies[t]) {
                var i = this._proxies[t].indexOf(e);
                i > -1 && this._proxies[t].splice(i, 1), 0 === this._proxies[t].length && delete this._proxies[t]
            }
        }, l.addEventListener = function(t, e, i) {
            this._proxies[e] && (this._proxies[e].forEach(function(s) {
                s.call(this, t, e, i)
            }.bind(this)), t.addEventListener(e, i))
        }, l.removeEventListener = function(t, e, i) {
            this._proxies[e] && (this._proxies[e].forEach(function(s) {
                s.call(this, t, e, i, !0)
            }.bind(this)), t.removeEventListener(e, i))
        }, l._clickProxy = function(t, e, i, s) {
            var r = t.getAttribute("role");
            n.indexOf(r) < 0 && a("element's role is not set to any of the following " + n.join(", ")), s ? (t.removeEventListener("keydown", this._handleKeydown), this._removeCallback(t, e, i)) : (t.addEventListener("keydown", this._handleKeydown), this._addCallback(t, e, i))
        }, l._hoverProxy = function(t, e, i, s) {
            s ? (t.removeEventListener("focus", this._handleHover, !0), t.removeEventListener("blur", this._handleHover, !0), i && this._removeCallback(t, e, i)) : (t.addEventListener("focus", this._handleHover, !0), t.addEventListener("blur", this._handleHover, !0), i && this._addCallback(t, e, i))
        }, l._handleKeydown = function(t) {
            if (t.ctrlKey || t.altKey || t.metaKey) return !0;
            t.keyCode !== s.SPACEBAR && t.keyCode !== s.ENTER || this._executeCallback(t, "click")
        }, l._handleHover = function(t) {
            "focus" === t.type ? t.currentTarget.classList.add("hover") : t.currentTarget.classList.remove("hover"), this._executeCallback(t, "hover")
        }, l._executeCallback = function(t, e) {
            var i = this._getCallbacksByElement(t.currentTarget, e);
            if (i)
                for (var s = 0; s < i.length; s++) i[s](t)
        }, l._addCallback = function(t, e, i) {
            var s = this._getIDByElement(t) || this._generateId();
            this._elements[s] = t, i instanceof Function && (this._callbacks[s] = this._callbacks[s] || {}, this._callbacks[s][e] = this._callbacks[s][e] || [], this._callbacks[s][e].push(i))
        }, l._removeCallback = function(t, e, i) {
            var s = this._getIDByElement(t),
                r = this._callbacks[s];
            if (r && r[e]) {
                var n = r[e].indexOf(i);
                r[e].splice(n, 1), 0 === r[e].length && (delete r[e], this._isEmpty(r) && (delete this._callbacks[s], delete this._elements[s]))
            }
        }, l._getIDByElement = function(t) {
            for (var e in this._elements)
                if (this._elements.hasOwnProperty(e) && this._elements[e] === t) return e
        }, l._getCallbacksByElement = function(t, e) {
            var i = this._getIDByElement(t);
            if (i) return this._callbacks[i][e]
        }, l._generateId = function() {
            return (++r).toString()
        }, l._isEmpty = function(t) {
            for (var e in t)
                if (t.hasOwnProperty(e)) return !1;
            return !0
        }, e.exports = new o
    }, {
        21: 21,
        62: 62
    }],
    5: [function(t, e, i) {
        "use strict";
        var s = t(19),
            r = t(22),
            n = t(10),
            a = t(9),
            o = t(13),
            l = t(2),
            c = l.prototype,
            h = function(t, e) {
                e = e || {}, l.call(this, t, {
                    selector: e.selector || "*[role=" + r.OPTION + "]",
                    state: e.state || s.SELECTED
                })
            },
            u = h.prototype = Object.create(c);
        u._setTabbingByIndex = function(t) {
            var e = this._navItems[t];
            o(e.getAttribute(this._state)) ? (this.focusedNavItemIndex = t, this.selectedNavitemIndex = t, this._enableElement(e)) : this._disableElement(e)
        }, u.setSelectedItemByIndex = function(t, e) {
            isNaN(this.selectedNavitemIndex) || this._disableElement(this._navItems[this.selectedNavitemIndex]), c.setSelectedItemByIndex.call(this, t, e), this._enableElement(this._navItems[this.selectedNavitemIndex])
        }, u.addNavItem = function(t) {
            t && t.nodeType && this._navItems.indexOf(t) < 0 && (o(t.getAttribute(s.DISABLED)) || this._disableElement(t), this._navItems.push(t))
        }, u._arrowDown = function(t, e) {
            c._arrowDown.call(this, t, e, !0), this.selectOption(e)
        }, u._enableElement = function(t) {
            n(t), t.setAttribute(this._state, "true")
        }, u._disableElement = function(t) {
            a(t), t.setAttribute(this._state, "false")
        }, u.selectOption = function(t) {
            a(this._navItems[this.selectedNavitemIndex]), c.selectOption.call(this, t), n(this._navItems[this.focusedNavItemIndex])
        }, e.exports = h
    }, {
        10: 10,
        13: 13,
        19: 19,
        2: 2,
        22: 22,
        9: 9
    }],
    6: [function(t, e, i) {
        "use strict";

        function s() {
            this._createElements(), this._bindEvents()
        }
        var r = s.prototype;
        r._bindEvents = function() {
            this._onResize = this._resize.bind(this)
        }, r._createElements = function() {
            this.span = document.createElement("span");
            var t = this.span.style;
            if (t.visibility = "hidden", t.position = "absolute", t.top = "0", t.zIndex = "-1", this.span.innerHTML = "&nbsp;", !window.ResizeObserver) {
                this.iframe = document.createElement("iframe");
                var e = this.iframe.style;
                e.position = "absolute", e.top = "0", e.left = "0", e.width = "100%", e.height = "100%", this.span.appendChild(this.iframe)
            }
            document.body.appendChild(this.span)
        }, r.detect = function(t) {
            this.originalSize = t || 17, this.currentSize = parseFloat(window.getComputedStyle(this.span)["font-size"]), this.currentSize > this.originalSize && this._onResize(), this.isDetecting || (window.ResizeObserver ? (this.resizeObserver = new ResizeObserver(this._onResize), this.resizeObserver.observe(this.span)) : this.iframe.contentWindow.addEventListener("resize", this._onResize), this.isDetecting = !0)
        }, r._resize = function() {
            this.currentSize = parseFloat(window.getComputedStyle(this.span)["font-size"]), this.originalSize < this.currentSize ? document.documentElement.classList.add("text-zoom") : document.documentElement.classList.remove("text-zoom"), window.dispatchEvent(new Event("resize")), window.dispatchEvent(new CustomEvent("resize:text-zoom", {
                detail: this
            }))
        }, r.getScale = function() {
            return this.currentSize / this.originalSize
        }, r.remove = function() {
            this.isDetecting && (this.resizeObserver && this.resizeObserver.unobserve(this.span), this.iframe && this.iframe.contentWindow.removeEventListener("resize", this._onResize), this.isDetecting = !1)
        }, r.destroy = function() {
            this.remove(), this.span && this.span.parentElement && this.span.parentElement.removeChild(this.span), this.span = null, this.iframe = null, this.resizeObserver = null
        }, e.exports = new s
    }, {}],
    7: [function(t, e, i) {
        "use strict";
        e.exports = {
            keyMap: t(21),
            ariaMap: t(19),
            roleMap: t(22),
            focusableElement: t(20),
            disableTabbable: t(9),
            enableTabbable: t(10),
            hideSiblingElements: t(12),
            showSiblingElements: t(18),
            hide: t(11),
            show: t(17),
            setAttributeForElements: t(15),
            setAttributes: t(16),
            removeAttributes: t(14),
            EventProxy: t(4),
            TabManager: t(8),
            ArrowNavigation: t(2),
            RoamingTabIndex: t(5),
            CircularTab: t(3),
            TextZoom: t(6)
        }
    }, {
        10: 10,
        11: 11,
        12: 12,
        14: 14,
        15: 15,
        16: 16,
        17: 17,
        18: 18,
        19: 19,
        2: 2,
        20: 20,
        21: 21,
        22: 22,
        3: 3,
        4: 4,
        5: 5,
        6: 6,
        8: 8,
        9: 9
    }],
    8: [function(t, e, i) {
        "use strict";
        var s = t(20),
            r = function() {
                this.focusableSelectors = s.selectors
            },
            n = r.prototype;
        n.isFocusableElement = function(t, e, i) {
            return !(e && !this._isDisplayed(t)) && (s.nodeName[t.nodeName] ? !t.disabled : !t.contentEditable || (i = i || parseFloat(t.getAttribute("tabindex")), !isNaN(i)))
        }, n.isTabbableElement = function(t, e) {
            if (e && !this._isDisplayed(t)) return !1;
            var i = t.getAttribute("tabindex");
            return i = parseFloat(i), isNaN(i) ? this.isFocusableElement(t, e, i) : i >= 0
        }, n._isDisplayed = function(t) {
            var e = t.getBoundingClientRect();
            return (0 !== e.top || 0 !== e.left || 0 !== e.width || 0 !== e.height) && "hidden" !== window.getComputedStyle(t).visibility
        }, n.getTabbableElements = function(t, e) {
            for (var i = t.querySelectorAll(this.focusableSelectors), s = i.length, r = [], n = 0; n < s; n++) this.isTabbableElement(i[n], e) && r.push(i[n]);
            return r
        }, n.getFocusableElements = function(t, e) {
            for (var i = t.querySelectorAll(this.focusableSelectors), s = i.length, r = [], n = 0; n < s; n++) this.isFocusableElement(i[n], e) && r.push(i[n]);
            return r
        }, e.exports = new r
    }, {
        20: 20
    }],
    9: [function(t, e, i) {
        "use strict";
        const s = t(15);
        e.exports = function(t) {
            s(t, "tabindex", "-1")
        }
    }, {
        15: 15
    }],
    10: [function(t, e, i) {
        "use strict";
        var s = t(8);
        let r = t => {
            s.isTabbableElement(t) || t.setAttribute("tabindex", "0")
        };
        e.exports = function(t) {
            t instanceof Node ? r(t) : t.forEach(t => {
                r(t)
            })
        }
    }, {
        8: 8
    }],
    11: [function(t, e, i) {
        "use strict";
        var s = t(19),
            r = t(8),
            n = function(t, e) {
                var i = t.getAttribute("data-original-" + e);
                i || (i = t.getAttribute(e) || "", t.setAttribute("data-original-" + e, i))
            };
        e.exports = function(t, e) {
            if (r.isFocusableElement(t, e)) n(t, "tabindex"), t.setAttribute("tabindex", "-1");
            else
                for (var i = r.getTabbableElements(t, e), a = i.length; a--;) n(i[a], "tabindex"), i[a].setAttribute("tabindex", "-1");
            n(t, s.HIDDEN), t.setAttribute(s.HIDDEN, "true")
        }
    }, {
        19: 19,
        8: 8
    }],
    12: [function(t, e, i) {
        "use strict";
        var s = t(11);
        e.exports = function t(e, i, r) {
            i = i || document.body;
            for (var n = e, a = e; n = n.previousElementSibling;) s(n, r);
            for (; a = a.nextElementSibling;) s(a, r);
            e.parentElement && e.parentElement !== i && t(e.parentElement, i, r)
        }
    }, {
        11: 11
    }],
    13: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return "string" == typeof t ? "true" === (t = t.toLowerCase()) : t
        }
    }, {}],
    14: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            let i;
            i = t instanceof NodeList ? t : [].concat(t), e = Array.isArray(e) ? e : [].concat(e), i.forEach(t => {
                e.forEach(e => {
                    t.removeAttribute(e)
                })
            })
        }
    }, {}],
    15: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i) {
            let s;
            "string" != typeof i && (i = i.toString()), s = t instanceof NodeList ? t : [].concat(t), s.forEach(t => {
                t.setAttribute(e, i)
            })
        }
    }, {}],
    16: [function(t, e, i) {
        "use strict";
        console.warn('"setAttributes" is deprecated, please use "setAttributeForElements" instead.'), e.exports = t(15)
    }, {
        15: 15
    }],
    17: [function(t, e, i) {
        "use strict";
        var s = t(14),
            r = t(19),
            n = "data-original-",
            a = function(t, e) {
                var i = t.getAttribute(n + e);
                null !== i && ("" === i ? s(t, e) : t.setAttribute(e, i), s(t, n + e))
            };
        e.exports = function(t) {
            a(t, "tabindex"), a(t, r.HIDDEN);
            for (var e = t.querySelectorAll("[".concat(n + "tabindex", "]")), i = e.length; i--;) a(e[i], "tabindex")
        }
    }, {
        14: 14,
        19: 19
    }],
    18: [function(t, e, i) {
        "use strict";
        var s = t(17);
        e.exports = function t(e, i) {
            i = i || document.body;
            for (var r = e, n = e; r = r.previousElementSibling;) s(r);
            for (; n = n.nextElementSibling;) s(n);
            e.parentElement && e.parentElement !== i && t(e.parentElement, i)
        }
    }, {
        17: 17
    }],
    19: [function(t, e, i) {
        "use strict";
        e.exports = {
            AUTOCOMPLETE: "aria-autocomplete",
            CHECKED: "aria-checked",
            DISABLED: "aria-disabled",
            EXPANDED: "aria-expanded",
            HASPOPUP: "aria-haspopup",
            HIDDEN: "aria-hidden",
            INVALID: "aria-invalid",
            LABEL: "aria-label",
            LEVEL: "aria-level",
            MULTILINE: "aria-multiline",
            MULTISELECTABLE: "aria-multiselectable",
            ORIENTATION: "aria-orientation",
            PRESSED: "aria-pressed",
            READONLY: "aria-readonly",
            REQUIRED: "aria-required",
            SELECTED: "aria-selected",
            SORT: "aria-sort",
            VALUEMAX: "aria-valuemax",
            VALUEMIN: "aria-valuemin",
            VALUENOW: "aria-valuenow",
            VALUETEXT: "aria-valuetext",
            ATOMIC: "aria-atomic",
            BUSY: "aria-busy",
            LIVE: "aria-live",
            RELEVANT: "aria-relevant",
            DROPEFFECT: "aria-dropeffect",
            GRABBED: "aria-grabbed",
            ACTIVEDESCENDANT: "aria-activedescendant",
            CONTROLS: "aria-controls",
            DESCRIBEDBY: "aria-describedby",
            FLOWTO: "aria-flowto",
            LABELLEDBY: "aria-labelledby",
            OWNS: "aria-owns",
            POSINSET: "aria-posinset",
            SETSIZE: "aria-setsize"
        }
    }, {}],
    20: [function(t, e, i) {
        "use strict";
        e.exports = {
            selectors: ["input", "select", "textarea", "button", "optgroup", "option", "menuitem", "fieldset", "object", "a[href]", "[tabindex]", "[contenteditable]"].join(","),
            nodeName: {
                INPUT: "input",
                SELECT: "select",
                TEXTAREA: "textarea",
                BUTTON: "button",
                OPTGROUP: "optgroup",
                OPTION: "option",
                MENUITEM: "menuitem",
                FIELDSET: "fieldset",
                OBJECT: "object",
                A: "a"
            }
        }
    }, {}],
    21: [function(t, e, i) {
        "use strict";
        e.exports = t(81)
    }, {
        81: 81
    }],
    22: [function(t, e, i) {
        "use strict";
        e.exports = {
            ALERT: "alert",
            ALERTDIALOG: "alertdialog",
            BUTTON: "button",
            CHECKBOX: "checkbox",
            DIALOG: "dialog",
            GRIDCELL: "gridcell",
            LINK: "link",
            LOG: "log",
            MARQUEE: "marquee",
            MENUITEM: "menuitem",
            MENUITEMCHECKBOX: "menuitemcheckbox",
            MENUITEMRADIO: "menuitemradio",
            OPTION: "option",
            PROGRESSBAR: "progressbar",
            RADIO: "radio",
            SCROLLBAR: "scrollbar",
            SLIDER: "slider",
            SPINBUTTON: "spinbutton",
            STATUS: "status",
            SWITCH: "switch",
            TAB: "tab",
            TABPANEL: "tabpanel",
            TEXTBOX: "textbox",
            TIMER: "timer",
            TOOLTIP: "tooltip",
            TREEITEM: "treeitem",
            COMBOBOX: "combobox",
            GRID: "grid",
            LISTBOX: "listbox",
            MENU: "menu",
            MENUBAR: "menubar",
            RADIOGROUP: "radiogroup",
            TABLIST: "tablist",
            TREE: "tree",
            TREEGRID: "treegrid",
            ARTICLE: "article",
            COLUMNHEADER: "columnheader",
            DEFINITION: "definition",
            DIRECTORY: "directory",
            DOCUMENT: "document",
            GROUP: "group",
            HEADING: "heading",
            IMG: "img",
            LIST: "list",
            LISTITEM: "listitem",
            MATH: "math",
            NOTE: "note",
            PRESENTATION: "presentation",
            REGION: "region",
            ROW: "row",
            ROWGROUP: "rowgroup",
            ROWHEADER: "rowheader",
            SEPARATOR: "separator",
            TOOLBAR: "toolbar",
            APPLICATION: "application",
            BANNER: "banner",
            COMPLEMENTARY: "complementary",
            CONTENTINFO: "contentinfo",
            FORM: "form",
            MAIN: "main",
            NAVIGATION: "navigation",
            SEARCH: "search"
        }
    }, {}],
    23: [function(t, e, i) {
        "use strict";
        const s = t(70),
            r = t(25),
            n = t(31),
            a = t(30),
            o = ["beforeCreate", "created", "beforeMount", "createItems", "itemsCreated", "mounted", "animateItem", "onItemChangeInitiated", "onItemChangeCompleted", "onResizeImmediate", "onBreakpointChange", "onResizeDebounced", "destroy"];
        class l extends s {
            constructor(t) {
                super(t), this.el = t.el, this.model = Object.assign({
                    options: t
                }, JSON.parse(JSON.stringify(r))), this.model.Item.ConstructorFunction = r.Item.ConstructorFunction, this.items = {}, o.forEach(t => {
                    this[t] = (...e) => {
                        this["__".concat(t)] && this["__".concat(t)].forEach(t => t.apply(this, e))
                    }
                }), this.on(r.Events.ITEM_CHANGE_INITIATED, this.onItemChangeInitiated), this.on(r.Events.ITEM_CHANGE_COMPLETED, this.onItemChangeCompleted), ["beforeCreate", "created", "beforeMount", "createItems"].forEach(e => this[e](t))
            }
        }
        l.withMixins = (...t) => {
            const e = class extends l {},
                i = e.prototype;
            return t.push(a, n), t.forEach(t => {
                for (const e in t) o.includes(e) ? (i["__".concat(e)] = i["__".concat(e)] || [], i["__".concat(e)].push(t[e])) : i[e] = t[e]
            }), e
        }, e.exports = l
    }, {
        25: 25,
        30: 30,
        31: 31,
        70: 70
    }],
    24: [function(t, e, i) {
        "use strict";
        const s = t(69).EventEmitterMicro,
            r = t(8),
            n = t(7).disableTabbable,
            a = {};
        "undefined" != typeof window && (a.draw = t(118), a.cancelDraw = t(116));
        e.exports = class extends s {
            constructor(t) {
                super(), this.contentHeight = 0, this.trayElHeight = 0, this.index = t.index, this.el = t.el, this.model = t.model, this.applyDraw = this.applyDraw.bind(this), this.childKeys = [], this.parentKey = "", this.setupItemElements(), this.measure(), this.setInitialState()
            }
            setupItemElements() {
                this.triggerEl = this.el.querySelector(this.model.Trigger.Selector, "button"), this.trayEl = this.el.querySelector(this.model.Tray.Selector), this.contentEl = this.el.querySelector(this.model.TrayContent.Selector);
                const t = this.el.querySelectorAll(this.model.Item.Selector);
                t.length && t.forEach(t => this.childKeys.push(t.dataset.accordionItem));
                const e = this.el.parentElement.closest(this.model.Item.Selector);
                e && (this.parentKey = e.dataset.accordionItem, this.parentExpanded = e.classList.contains(this.model.Item.ExpandedClassName)), this.childKeys.length ? this.tabbableEls = this.trayEl.querySelectorAll("[data-accordion-trigger]") : this.tabbableEls = r.getTabbableElements(this.trayEl, !1)
            }
            setInitialState() {
                let t = this.model.Item.InitialState;
                this.el.classList.contains(this.model.Item.ExpandedClassName) ? t = this.model.Item.ExpandedClassName : this.el.classList.contains(this.model.Item.CollapsedClassName) && (t = this.model.Item.CollapsedClassName), this.initialState = t, this.state = t, this.isExpanded() ? this.setExpandState() : (this.setCollapseState(), n(this.tabbableEls)), !1 === this.parentExpanded && n(this.tabbableEls)
            }
            setExpandState() {
                this.el.classList.remove(this.model.Item.AnimatingClassName, this.model.Item.CollapsedClassName), this.el.classList.add(this.model.Item.ExpandedClassName), this.triggerEl.setAttribute("aria-expanded", !0), this.trayEl.removeAttribute("aria-hidden"), this.state = this.model.Item.States.expanded
            }
            initiateExpand() {
                this.el.classList.remove(this.model.Item.ExpandedClassName, this.model.Item.CollapsedClassName), this.el.classList.add(this.model.Item.AnimatingClassName), this.state = this.model.Item.States.expanding, this.trigger(this.model.Item.Events[this.state], this)
            }
            completeExpand() {
                this.setExpandState(), this.trigger(this.model.Item.Events[this.state], this)
            }
            setCollapseState() {
                this.el.classList.remove(this.model.Item.ExpandedClassName, this.model.Item.AnimatingClassName), this.el.classList.add(this.model.Item.CollapsedClassName), this.triggerEl.setAttribute("aria-expanded", !1), this.trayEl.setAttribute("aria-hidden", !0), this.state = this.model.Item.States.collapsed
            }
            initiateCollapse() {
                this.el.classList.remove(this.model.Item.ExpandedClassName, this.model.Item.CollapsedClassName), this.el.classList.add(this.model.Item.AnimatingClassName), this.state = this.model.Item.States.collapsing, this.trigger(this.model.Item.Events[this.state], this)
            }
            completeCollapse() {
                this.setCollapseState(), this.trigger(this.model.Item.Events[this.state], this)
            }
            isExpandState() {
                return this.isExpanded() || this.isExpanding()
            }
            isCollapseState() {
                return this.isCollapsed() || this.isCollapsing()
            }
            isAnimating() {
                return this.isExpanding() || this.isCollapsing()
            }
            isExpanded() {
                return this.state === this.model.Item.States.expanded
            }
            isExpanding() {
                return this.state === this.model.Item.States.expanding
            }
            isCollapsed() {
                return this.state === this.model.Item.States.collapsed
            }
            isCollapsing() {
                return this.state === this.model.Item.States.collapsing
            }
            measure() {
                this.contentHeight = this.contentEl.offsetHeight
            }
            needsRedraw() {
                a.cancelDraw(this._rafID), this._rafID = a.draw(this.applyDraw, !0)
            }
            applyDraw() {
                this.trayEl.style.height = this.trayElHeight
            }
            setTrayElHeight(t, e, i) {
                this.trayElHeight = e ? "".concat(t).concat(e) : "".concat(t), i ? this.needsRedraw() : this.applyDraw()
            }
        }
    }, {
        116: 116,
        118: 118,
        69: 69,
        7: 7,
        8: 8
    }],
    25: [function(t, e, i) {
        "use strict";
        e.exports = {
            Container: {
                Selector: "[data-accordion]"
            },
            Item: {
                States: {
                    expanding: "expanding",
                    expanded: "expanded",
                    collapsing: "collapsing",
                    collapsed: "collapsed"
                },
                Events: {
                    expanding: "EXPAND_INITIATED",
                    expanded: "EXPAND_COMPLETED",
                    collapsing: "COLLAPSE_INITIATED",
                    collapsed: "COLLAPSE_COMPLETED"
                },
                ConstructorFunction: t(24),
                InitialState: "collapsed",
                Selector: "[data-accordion-item]",
                ExpandedClassName: "expanded",
                CollapsedClassName: "collapsed",
                AnimatingClassName: "animating"
            },
            Trigger: {
                Selector: "[data-accordion-trigger]"
            },
            ToggleAllButton: {
                States: {
                    collapseAll: "collapsed",
                    expandAll: "expanded"
                },
                Selector: "[data-accordion-toggle-all]",
                CollapseLabelSelector: ".accordion-toggle-all-collapse",
                ExpandLabelSelector: ".accordion-toggle-all-expand",
                HiddenClassName: "hidden"
            },
            Icon: {
                Template: t(26).template,
                Points: t(26).points,
                Selector: "[data-accordion-icon]",
                ShapeSelector: "[data-accordion-icon-shape]",
                ExpandAnimationSelector: '[data-accordion-animate="expand"]',
                CollapseAnimationSelector: '[data-accordion-animate="collapse"]'
            },
            Tray: {
                Selector: "[data-accordion-tray]"
            },
            TrayContent: {
                Selector: "[data-accordion-content]"
            },
            Events: {
                ITEM_CHANGE_INITIATED: "ITEM_CHANGE_INITIATED",
                ITEM_CHANGE_COMPLETED: "ITEM_CHANGE_COMPLETED"
            },
            Analytics: {
                Attributes: {
                    click: "data-analytics-click",
                    title: "data-analytics-title"
                },
                ToggleAllButton: {
                    StateString: {
                        collapseAll: "collapse",
                        expandAll: "expand"
                    }
                }
            }
        }
    }, {
        24: 24,
        26: 26
    }],
    26: [function(t, e, i) {
        "use strict";
        const s = {
                collapsed: "15 1.13 8.5 7.72 2 1.13",
                halfway: "15.85 4.42 8.5 4.42 1.15 4.42",
                expanded: "15 7.72 8.5 1.13 2 7.72"
            },
            r = '<svg class="accordion-icon-svg" viewBox="0 0 17 8.85">\n\t<polyline data-accordion-icon-shape stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" fill="none" fill-rule="evenodd" points="'.concat(s.collapsed, '">\n\t\t<animate\n\t\t\tdata-accordion-animate="expand"\n\t\t\tattributeName="points"\n\t\t\tvalues="').concat(s.collapsed, ";\n\t\t\t\t\t").concat(s.halfway, ";\n\t\t\t\t\t").concat(s.expanded, '"\n\t\t\tdur="320ms"\n\t\t\tbegin="indefinite"\n\t\t\tfill="freeze"\n\t\t\tkeyTimes="0;\n\t\t\t\t\t0.5;\n\t\t\t\t\t1"\n\t\t\tcalcMode="spline"\n\t\t\tkeySplines="0.12, 0, 0.38, 0;\n\t\t\t\t\t\t0.2, 1, 0.68, 1"\n\t\t/>\n\t\t<animate\n\t\t\tdata-accordion-animate="collapse"\n\t\t\tattributeName="points"\n\t\t\tvalues="').concat(s.expanded, ";\n\t\t\t\t\t").concat(s.halfway, ";\n\t\t\t\t\t").concat(s.collapsed, '"\n\t\t\tdur="320ms"\n\t\t\tbegin="indefinite"\n\t\t\tfill="freeze"\n\t\t\tkeyTimes="0;\n\t\t\t\t\t0.5;\n\t\t\t\t\t1"\n\t\t\tcalcMode="spline"\n\t\t\tkeySplines="0.2, 0, 0.68, 0;\n\t\t\t\t\t\t0.2, 1, 0.68, 1"\n\t\t/>\n\t</polyline>\n</svg>');
        e.exports = {
            points: s,
            template: r
        }
    }, {}],
    27: [function(t, e, i) {
        "use strict";
        e.exports = {
            beforeCreate() {
                this.analytics = {
                    attributes: Object.assign({}, this.model.Analytics.Attributes),
                    clickValues: {}
                }
            },
            itemsCreated() {
                Object.values(this.items).forEach(t => {
                    const e = t.triggerEl.getAttribute(this.analytics.attributes.click);
                    this.analytics.clickValues[t.key] = e, e && (t.isExpanded() && this.removeItemClickAttribute(t), this._bindAnalyticsItemEvents(t))
                })
            },
            onItemChangeCompleted() {
                this._updateToggleAllButtonClickAttribute()
            },
            destroy() {
                this.analytics = null
            },
            _bindAnalyticsItemEvents(t) {
                t.on(this.model.Item.Events.expanded, () => this.removeItemClickAttribute(t)), t.on(this.model.Item.Events.collapsed, () => this.setItemClickAttribute(t, this.analytics.clickValues[t.key]))
            },
            _updateToggleAllButtonClickAttribute() {
                this.toggleAllButton && this.toggleAllButton.toggleEls && this.toggleAllButton.toggleEls.forEach(t => {
                    const e = this.toggleAllButton.state,
                        i = this.model.Analytics.ToggleAllButton.StateString[e],
                        s = this.model.Analytics.ToggleAllButton.StateString.expandAll,
                        r = this.model.Analytics.ToggleAllButton.StateString.collapseAll;
                    let n = t.getAttribute(this.analytics.attributes.click),
                        a = t.getAttribute(this.analytics.attributes.title);
                    n && (n = this._replaceStateString(n, i, s, r), t.setAttribute(this.analytics.attributes.click, n)), a && (a = this._replaceStateString(a, i, s, r), t.setAttribute(this.analytics.attributes.title, a))
                })
            },
            _replaceStateString(t, e, ...i) {
                let s = t;
                for (let t of i) s.includes(t) && (s = s.replace(t, e));
                return s
            },
            setItemClickAttribute(t, e) {
                t.triggerEl.setAttribute(this.analytics.attributes.click, e)
            },
            removeItemClickAttribute(t) {
                t.triggerEl.removeAttribute(this.analytics.attributes.click)
            }
        }
    }, {}],
    28: [function(t, e, i) {
        "use strict";
        e.exports = {
            created() {
                this.onAnimationEnd = this.onAnimationEnd.bind(this), this.animateHeight = {
                    timeoutIDs: {},
                    expandedHeight: {}
                }
            },
            itemsCreated() {
                Object.values(this.items).forEach(t => {
                    t.isCollapsed() && t.setTrayElHeight(0, !1, !1)
                })
            },
            mounted() {
                Object.values(this.items).forEach(t => {
                    this.animateHeight.expandedHeight[t.key] = this.getExpandedHeight(t)
                })
            },
            onItemChangeInitiated(t) {
                this.animateHeight.timeoutIDs[t.item.key] = clearTimeout(this.animateHeight.timeoutIDs[t.item.key])
            },
            animateItem(t) {
                const e = t.item,
                    i = this.getDuration(e.contentHeight),
                    s = this.items[e.parentKey];
                e.setTrayElHeight(e.contentHeight, "px"), e.trayEl.style.transitionDuration = "".concat(i, "ms"), s && s.isAnimating() && (this.animateHeight.timeoutIDs[s.key] = clearTimeout(this.animateHeight.timeoutIDs[s.key]), this.animateParentItem(e, i)), e.isCollapsing() && requestAnimationFrame(() => {
                    e.setTrayElHeight(0)
                }), this.animateHeight.timeoutIDs[e.key] = setTimeout(this.onAnimationEnd, i, e)
            },
            onItemChangeCompleted(t) {
                const e = t.item;
                e.isExpandState() && e.setTrayElHeight("auto")
            },
            destroy() {
                for (const t of Object.values(this.animateHeight.timeoutIDs)) clearTimeout(t);
                this.animateHeight = null
            },
            onResizeDebounced() {
                Object.values(this.items).forEach(t => {
                    this.animateHeight.expandedHeight[t.key] = this.getExpandedHeight(t)
                })
            },
            onAnimationEnd(t) {
                this.trigger(this.model.Events.ITEM_CHANGE_COMPLETED, {
                    accordion: this,
                    item: t
                })
            },
            animateParentItem(t, e) {
                const i = this.items[t.parentKey];
                let s = this.animateHeight.expandedHeight[i.key];
                i.setTrayElHeight(s, "px"), i.trayEl.style.transitionDuration = "".concat(e, "ms"), this.animateHeight.timeoutIDs[i.key] = setTimeout(this.onAnimationEnd, e, i)
            },
            getExpandedHeight(t) {
                t.measure();
                let e = t.contentHeight;
                return t.childKeys.forEach(t => {
                    const i = this.items[t];
                    i.isCollapseState() && (i.measure(), e += i.contentHeight)
                }), e
            },
            getDuration(t) {
                return this.model.Tray.duration || Math.min(Math.max(t / 3 * 2, 400), 800)
            }
        }
    }, {}],
    29: [function(t, e, i) {
        "use strict";
        e.exports = {
            mounted() {
                Object.values(this.items).forEach(t => {
                    t.iconEl = t.el.querySelector(this.model.Icon.Selector), this.model.Icon.Template && (t.iconEl.innerHTML = this.model.Icon.Template), t.isExpanded() && t.iconEl.querySelector(this.model.Icon.ShapeSelector).setAttribute("points", this.model.Icon.Points.expanded), t.iconExpandAnimationEl = t.iconEl.querySelector(this.model.Icon.ExpandAnimationSelector), t.iconCollapseAnimationEl = t.iconEl.querySelector(this.model.Icon.CollapseAnimationSelector)
                })
            },
            animateItem(t) {
                const e = t.item;
                e.isExpandState() ? e.iconExpandAnimationEl.beginElement() : e.iconCollapseAnimationEl.beginElement()
            }
        }
    }, {}],
    30: [function(t, e, i) {
        "use strict";
        e.exports = {
            createItems() {
                if (this.items.length) this.itemsCreated();
                else {
                    if (!this.model.Item.ConstructorFunction) throw new ReferenceError("Accordion::AutoCreateItems - this.model.Item.ConstructorFunction is null");
                    0 === Object.keys(this.items).length && (this.items = {}, Array.from(this.el.querySelectorAll(this.model.Item.Selector)).forEach((t, e) => {
                        const i = this.model,
                            s = new this.model.Item.ConstructorFunction({
                                el: t,
                                index: e,
                                model: i
                            }),
                            r = t.dataset.accordionItem;
                        this.items[r] = s, this.items[r].key = r
                    }), this.itemsCreated())
                }
            }
        }
    }, {}],
    31: [function(t, e, i) {
        "use strict";
        e.exports = {
            beforeCreate() {
                if (document.body._animInfo) this.anim = document.body._animInfo.group.anim, this.model.pageMetrics = this.anim.model.pageMetrics;
                else {
                    const e = t(225);
                    this.viewportEmitterMicro = new e, this.viewportEmitterMicro.CHANGE_EVENTS = e.CHANGE_EVENTS
                }
            },
            itemsCreated() {
                this.model.options.gum || this._isVue || (this.anim ? (this.anim.on("ON_RESIZE_IMMEDIATE", this.onResizeImmediate), this.anim.on("ON_RESIZE_DEBOUNCED", this.onResizeDebounced), this.anim.on("ON_BREAKPOINT_CHANGE", this.onBreakpointChange)) : (window.addEventListener("resize", this.onResizeImmediate), this.viewportEmitterMicro.on(this.viewportEmitterMicro.CHANGE_EVENTS.VIEWPORT, this.onBreakpointChange)), document.fonts.ready.then(() => {
                    this.mounted()
                }))
            },
            onResizeImmediate() {
                this.anim || (window.clearTimeout(this._resizeTimeout), this._resizeTimeout = window.setTimeout(this.onResizeDebounced, 250))
            },
            destroy() {
                this.anim ? (this.anim.off("ON_RESIZE_IMMEDIATE", this.onResizeImmediate), this.anim.off("ON_RESIZE_DEBOUNCED", this.onResizeDebounced), this.anim.off("ON_BREAKPOINT_CHANGE", this.onBreakpointChange)) : (window.removeEventListener("resize", this.onResizeImmediate), this.viewportEmitterMicro.off(this.viewportEmitterMicro.CHANGE_EVENTS.VIEWPORT, this.onBreakpointChange))
            }
        }
    }, {
        225: 225
    }],
    32: [function(t, e, i) {
        "use strict";
        const s = t(7).enableTabbable,
            r = t(7).disableTabbable;
        e.exports = {
            onItemChangeInitiated(t) {
                const e = t.item;
                e.isExpandState() ? (e.initiateCollapse(), this.disableNestedTabbable(e)) : (e.initiateExpand(), this.enableNestedTabbable(e)), e.measure(), this.animateItem({
                    accordion: this,
                    item: e
                })
            },
            onItemChangeCompleted(t) {
                const e = t.item;
                e.isExpandState() ? e.completeExpand() : e.completeCollapse()
            },
            enableNestedTabbable(t) {
                s(t.tabbableEls), t.childKeys.forEach(t => {
                    this.items[t].isExpandState() && s(this.items[t].tabbableEls)
                })
            },
            disableNestedTabbable(t) {
                r(t.tabbableEls), t.childKeys.forEach(t => r(this.items[t].tabbableEls))
            }
        }
    }, {
        7: 7
    }],
    33: [function(t, e, i) {
        "use strict";
        e.exports = {
            toggleAllItems(t) {
                Object.values(this.items).forEach(e => {
                    t !== e.state && this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                        accordion: this,
                        item: e
                    })
                })
            }
        }
    }, {}],
    34: [function(t, e, i) {
        "use strict";
        const s = t(33);
        e.exports = Object.assign({}, s, {
            created() {
                this.onToggleButtonClick = this.onToggleButtonClick.bind(this), this.toggleAllButton = {}
            },
            beforeMount() {
                const t = Array.from(document.querySelectorAll(this.model.ToggleAllButton.Selector));
                this.toggleAllButton.toggleEls = t.filter(t => t.getAttribute("aria-controls") === this.el.id), this.toggleAllButton.collapseLabelEls = [], this.toggleAllButton.expandLabelEls = [], this.toggleAllButton.toggleEls.forEach(t => {
                    this.toggleAllButton.collapseLabelEls.push(t.querySelector(this.model.ToggleAllButton.CollapseLabelSelector)), this.toggleAllButton.expandLabelEls.push(t.querySelector(this.model.ToggleAllButton.ExpandLabelSelector))
                })
            },
            mounted() {
                this.updateToggleAllState(), this.toggleAllButton.toggleEls.forEach(t => {
                    t.removeAttribute("disabled"), t.removeAttribute("role"), t.addEventListener("click", this.onToggleButtonClick)
                })
            },
            destroy() {
                this.toggleAllButton.toggleEls.forEach(t => {
                    t.removeEventListener("click", this.onToggleButtonClick)
                }), this.toggleAllButton = null
            },
            onItemChangeInitiated() {
                this.updateToggleAllState()
            },
            onToggleButtonClick() {
                const t = this.model.ToggleAllButton.States[this.toggleAllButton.state];
                let e = !1;
                Object.values(this.items).forEach(t => {
                    t.isAnimating() && (e = !0)
                }), e || this.toggleAllItems(t)
            },
            updateToggleAllState() {
                Object.values(this.items).filter(t => t.isExpandState()).length === Object.keys(this.items).length ? (this.toggleAllButton.state = "collapseAll", this.showCollapseLabel()) : (this.toggleAllButton.state = "expandAll", this.showExpandLabel())
            },
            showCollapseLabel() {
                this.toggleAllButton.expandLabelEls.forEach(t => t.classList.add(this.model.ToggleAllButton.HiddenClassName)), this.toggleAllButton.collapseLabelEls.forEach(t => t.classList.remove(this.model.ToggleAllButton.HiddenClassName))
            },
            showExpandLabel() {
                this.toggleAllButton.collapseLabelEls.forEach(t => t.classList.add(this.model.ToggleAllButton.HiddenClassName)), this.toggleAllButton.expandLabelEls.forEach(t => t.classList.remove(this.model.ToggleAllButton.HiddenClassName))
            }
        })
    }, {
        33: 33
    }],
    35: [function(t, e, i) {
        "use strict";
        e.exports = {
            created() {
                this.toggleItem = this.toggleItem.bind(this)
            },
            mounted() {
                this.triggers = this.el.querySelectorAll(this.model.Trigger.Selector), this.triggers.forEach(t => {
                    t.removeAttribute("role"), t.addEventListener("click", this.toggleItem)
                })
            },
            destroy() {
                this.triggers.forEach(t => {
                    t.removeEventListener("click", this.toggleItem)
                }), this.triggers = null
            },
            toggleItem(t) {
                const e = t.currentTarget.parentElement.closest(this.model.Item.Selector).dataset.accordionItem,
                    i = this.items[e];
                this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                    accordion: this,
                    item: i
                })
            }
        }
    }, {}],
    36: [function(t, e, i) {
        "use strict";
        t(76), t(76);
        var s = t(37);
        e.exports = function() {
            var t, e = Array.prototype.slice.call(arguments),
                i = e.shift(e);
            if (i.classList && i.classList.add) i.classList.add.apply(i.classList, e);
            else
                for (t = 0; t < e.length; t++) s(i, e[t])
        }
    }, {
        37: 37,
        76: 76
    }],
    37: [function(t, e, i) {
        "use strict";
        var s = t(38);
        e.exports = function(t, e) {
            s(t, e) || (t.className += " " + e)
        }
    }, {
        38: 38
    }],
    38: [function(t, e, i) {
        "use strict";
        var s = t(39);
        e.exports = function(t, e) {
            return s(e).test(t.className)
        }
    }, {
        39: 39
    }],
    39: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return new RegExp("(\\s|^)" + t + "(\\s|$)")
        }
    }, {}],
    40: [function(t, e, i) {
        "use strict";
        var s = t(38),
            r = t(39);
        e.exports = function(t, e) {
            s(t, e) && (t.className = t.className.replace(r(e), "$1").trim())
        }
    }, {
        38: 38,
        39: 39
    }],
    41: [function(t, e, i) {
        "use strict";
        t(76), t(76);
        var s = t(40);
        e.exports = function() {
            var t, e = Array.prototype.slice.call(arguments),
                i = e.shift(e);
            if (i.classList && i.classList.remove) i.classList.remove.apply(i.classList, e);
            else
                for (t = 0; t < e.length; t++) s(i, e[t])
        }
    }, {
        40: 40,
        76: 76
    }],
    42: [function(t, e, i) {
        "use strict";
        e.exports = {
            assert: t(43),
            count: t(44),
            countReset: t(45),
            dir: t(46),
            dirxml: t(47),
            enabled: t(48),
            error: t(49),
            group: t(50),
            groupCollapsed: t(51),
            groupEnd: t(52),
            info: t(53),
            log: t(55),
            profile: t(56),
            profileEnd: t(57),
            table: t(58),
            time: t(59),
            timeEnd: t(60),
            trace: t(61),
            warn: t(62)
        }
    }, {
        43: 43,
        44: 44,
        45: 45,
        46: 46,
        47: 47,
        48: 48,
        49: 49,
        50: 50,
        51: 51,
        52: 52,
        53: 53,
        55: 55,
        56: 56,
        57: 57,
        58: 58,
        59: 59,
        60: 60,
        61: 61,
        62: 62
    }],
    43: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("assert")
    }, {
        54: 54
    }],
    44: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("count")
    }, {
        54: 54
    }],
    45: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("countReset")
    }, {
        54: 54
    }],
    46: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("dir")
    }, {
        54: 54
    }],
    47: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("dirxml")
    }, {
        54: 54
    }],
    48: [function(t, e, i) {
        "use strict";
        var s = !1,
            r = window || self;
        try {
            s = !!r.localStorage.getItem("f7c9180f-5c45-47b4-8de4-428015f096c0")
        } catch (t) {}
        e.exports = s
    }, {}],
    49: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("error")
    }, {
        54: 54
    }],
    50: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("group")
    }, {
        54: 54
    }],
    51: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("groupCollapsed")
    }, {
        54: 54
    }],
    52: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("groupEnd")
    }, {
        54: 54
    }],
    53: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("info")
    }, {
        54: 54
    }],
    54: [function(t, e, i) {
        "use strict";
        var s = t(48);
        e.exports = function(t) {
            return function() {
                if (s && "object" == typeof window.console && "function" == typeof console[t]) return console[t].apply(console, Array.prototype.slice.call(arguments, 0))
            }
        }
    }, {
        48: 48
    }],
    55: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("log")
    }, {
        54: 54
    }],
    56: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("profile")
    }, {
        54: 54
    }],
    57: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("profileEnd")
    }, {
        54: 54
    }],
    58: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("table")
    }, {
        54: 54
    }],
    59: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("time")
    }, {
        54: 54
    }],
    60: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("timeEnd")
    }, {
        54: 54
    }],
    61: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("trace")
    }, {
        54: 54
    }],
    62: [function(t, e, i) {
        "use strict";
        e.exports = t(54)("warn")
    }, {
        54: 54
    }],
    63: [function(t, e, i) {
        "use strict";
        var s = t(67),
            r = t(65);
        e.exports = function(t, e, i, n) {
            return e = r(t, e), s(t, e, i, n)
        }
    }, {
        65: 65,
        67: 67
    }],
    64: [function(t, e, i) {
        "use strict";
        var s = t(68),
            r = t(65);
        e.exports = function(t, e, i, n) {
            return e = r(t, e), s(t, e, i, n)
        }
    }, {
        65: 65,
        68: 68
    }],
    65: [function(t, e, i) {
        "use strict";
        var s = t(105);
        e.exports = function(t, e) {
            var i;
            return i = "tagName" in t ? t.tagName : t === window ? "window" : "document", s(e, i) || e
        }
    }, {
        105: 105
    }],
    66: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return void 0 !== (t = t || window.event).target ? t.target : t.srcElement
        }
    }, {}],
    67: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i, s) {
            return t.addEventListener ? t.addEventListener(e, i, !!s) : t.attachEvent("on" + e, i), t
        }
    }, {}],
    68: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i, s) {
            return t.removeEventListener ? t.removeEventListener(e, i, !!s) : t.detachEvent("on" + e, i), t
        }
    }, {}],
    69: [function(t, e, i) {
        "use strict";
        e.exports = {
            EventEmitterMicro: t(70)
        }
    }, {
        70: 70
    }],
    70: [function(t, e, i) {
        "use strict";

        function s() {
            this._events = {}
        }
        var r = s.prototype;
        r.on = function(t, e) {
            this._events[t] = this._events[t] || [], this._events[t].unshift(e)
        }, r.once = function(t, e) {
            var i = this;
            this.on(t, (function s(r) {
                i.off(t, s), void 0 !== r ? e(r) : e()
            }))
        }, r.off = function(t, e) {
            if (this.has(t)) {
                if (1 === arguments.length) return this._events[t] = null, void delete this._events[t];
                var i = this._events[t].indexOf(e); - 1 !== i && this._events[t].splice(i, 1)
            }
        }, r.trigger = function(t, e) {
            if (this.has(t))
                for (var i = this._events[t].length - 1; i >= 0; i--) void 0 !== e ? this._events[t][i](e) : this._events[t][i]()
        }, r.has = function(t) {
            return t in this._events != !1 && 0 !== this._events[t].length
        }, r.destroy = function() {
            for (var t in this._events) this._events[t] = null;
            this._events = null
        }, e.exports = s
    }, {}],
    71: [function(t, e, i) {
        "use strict";
        var s = {};
        e.exports = function(t, e, i) {
            if (t = t.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]"), i || !s.hasOwnProperty(t)) {
                var r = new RegExp("[\\?&]" + t + "=([^&#]*)").exec(location.search),
                    n = null === r ? e : decodeURIComponent(r[1].replace(/\+/g, " "));
                "true" !== n && "false" !== n || (n = "true" === n), isNaN(parseFloat(n)) || (n = parseFloat(n)), s[t] = n
            }
            return s[t]
        }
    }, {}],
    72: [function(t, e, i) {
        e.exports = function(t, e, i) {
            return e in t ? Object.defineProperty(t, e, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[e] = i, t
        }
    }, {}],
    73: [function(t, e, i) {
        e.exports = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }
    }, {}],
    74: [function(t, e, i) {
        var s = t(75);

        function r() {
            if ("function" != typeof WeakMap) return null;
            var t = new WeakMap;
            return r = function() {
                return t
            }, t
        }
        e.exports = function(t) {
            if (t && t.__esModule) return t;
            if (null === t || "object" !== s(t) && "function" != typeof t) return {
                default: t
            };
            var e = r();
            if (e && e.has(t)) return e.get(t);
            var i = {},
                n = Object.defineProperty && Object.getOwnPropertyDescriptor;
            for (var a in t)
                if (Object.prototype.hasOwnProperty.call(t, a)) {
                    var o = n ? Object.getOwnPropertyDescriptor(t, a) : null;
                    o && (o.get || o.set) ? Object.defineProperty(i, a, o) : i[a] = t[a]
                } return i.default = t, e && e.set(t, i), i
        }
    }, {
        75: 75
    }],
    75: [function(t, e, i) {
        function s(t) {
            return "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? e.exports = s = function(t) {
                return typeof t
            } : e.exports = s = function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            }, s(t)
        }
        e.exports = s
    }, {}],
    76: [function(t, e, i) {}, {}],
    77: [function(t, e, i) {
        "use strict";
        var s = t(69).EventEmitterMicro,
            r = t(67),
            n = t(68),
            a = t(102),
            o = t(79);

        function l(t) {
            this._keysDown = {}, this._DOMKeyDown = this._DOMKeyDown.bind(this), this._DOMKeyUp = this._DOMKeyUp.bind(this), this._context = t || document, r(this._context, "keydown", this._DOMKeyDown, !0), r(this._context, "keyup", this._DOMKeyUp, !0), s.call(this)
        }
        var c = l.prototype = a(s.prototype);
        c.onDown = function(t, e) {
            return this.on("keydown:" + t, e)
        }, c.onceDown = function(t, e) {
            return this.once("keydown:" + t, e)
        }, c.offDown = function(t, e) {
            return this.off("keydown:" + t, e)
        }, c.onUp = function(t, e) {
            return this.on("keyup:" + t, e)
        }, c.onceUp = function(t, e) {
            return this.once("keyup:" + t, e)
        }, c.offUp = function(t, e) {
            return this.off("keyup:" + t, e)
        }, c.isDown = function(t) {
            return t += "", this._keysDown[t] || !1
        }, c.isUp = function(t) {
            return !this.isDown(t)
        }, c.destroy = function() {
            return n(this._context, "keydown", this._DOMKeyDown, !0), n(this._context, "keyup", this._DOMKeyUp, !0), this._keysDown = null, this._context = null, s.prototype.destroy.call(this), this
        }, c._DOMKeyDown = function(t) {
            var e = this._normalizeKeyboardEvent(t),
                i = e.keyCode += "";
            this._trackKeyDown(i), this.trigger("keydown:" + i, e)
        }, c._DOMKeyUp = function(t) {
            var e = this._normalizeKeyboardEvent(t),
                i = e.keyCode += "";
            this._trackKeyUp(i), this.trigger("keyup:" + i, e)
        }, c._normalizeKeyboardEvent = function(t) {
            return new o(t)
        }, c._trackKeyUp = function(t) {
            this._keysDown[t] && (this._keysDown[t] = !1)
        }, c._trackKeyDown = function(t) {
            this._keysDown[t] || (this._keysDown[t] = !0)
        }, e.exports = l
    }, {
        102: 102,
        67: 67,
        68: 68,
        69: 69,
        79: 79
    }],
    78: [function(t, e, i) {
        "use strict";
        var s = t(77);
        e.exports = new s
    }, {
        77: 77
    }],
    79: [function(t, e, i) {
        "use strict";
        var s = t(80),
            r = ["keyLocation", "keyIdentifier"];

        function n(t) {
            var e;
            for (e in this.originalEvent = t, t) - 1 === r.indexOf(e) && "function" != typeof t[e] && (this[e] = t[e]);
            this.keyCode || (this.keyCode = this._getKeyCode()), this.location = void 0 !== this.originalEvent.location ? this.originalEvent.location : this.originalEvent.keyLocation
        }
        n.prototype = {
            preventDefault: function() {
                if ("function" == typeof this.originalEvent.preventDefault) return this.originalEvent.preventDefault();
                this.originalEvent.returnValue = !1
            },
            stopPropagation: function() {
                return this.originalEvent.stopPropagation()
            },
            _getKeyCode: function() {
                return s[this.code] || -1
            }
        }, e.exports = n
    }, {
        80: 80
    }],
    80: [function(t, e, i) {
        "use strict";
        e.exports = {
            Backspace: 8,
            Tab: 9,
            Enter: 13,
            NumpadEnter: 13,
            ShiftLeft: 16,
            ShiftRight: 16,
            ControlLeft: 17,
            ControlRight: 17,
            AltLeft: 18,
            AltRight: 18,
            CapsLock: 20,
            Escape: 27,
            PageUp: 33,
            PageDown: 34,
            End: 35,
            Home: 36,
            ArrowLeft: 37,
            ArrowUp: 38,
            ArrowRight: 39,
            ArrowDown: 40,
            Delete: 46,
            Digit0: 48,
            Digit1: 49,
            Digit2: 50,
            Digit3: 51,
            Digit4: 52,
            Digit5: 53,
            Digit6: 54,
            Digit7: 55,
            Digit8: 56,
            Digit9: 57,
            KeyA: 65,
            KeyB: 66,
            KeyC: 67,
            KeyD: 68,
            KeyE: 69,
            KeyF: 70,
            KeyG: 71,
            KeyH: 72,
            KeyI: 73,
            KeyJ: 74,
            KeyK: 75,
            KeyL: 76,
            KeyM: 77,
            KeyN: 78,
            KeyO: 79,
            KeyP: 80,
            KeyQ: 81,
            KeyR: 82,
            KeyS: 83,
            KeyT: 84,
            KeyU: 85,
            KeyV: 86,
            KeyW: 87,
            KeyX: 88,
            KeyY: 89,
            KeyZ: 90,
            Numpad0: 96,
            Numpad1: 97,
            Numpad2: 98,
            Numpad3: 99,
            Numpad4: 100,
            Numpad5: 101,
            Numpad6: 102,
            Numpad7: 103,
            Numpad8: 104,
            Numpad9: 105,
            NumpadMultiply: 106,
            NumpadAdd: 107,
            NumpadSubtract: 109,
            NumpadDecimal: 110,
            NumpadDivide: 111,
            NumpadEqual: 187,
            Backquote: 192,
            BracketLeft: 219,
            BracketRight: 221,
            Backslash: 220,
            Semicolon: 186,
            Quote: 222,
            Space: 32,
            Equal: 187,
            Comma: 188,
            Minus: 189,
            Period: 190,
            Slash: 191
        }
    }, {}],
    81: [function(t, e, i) {
        "use strict";
        e.exports = {
            BACKSPACE: 8,
            TAB: 9,
            ENTER: 13,
            SHIFT: 16,
            CONTROL: 17,
            ALT: 18,
            COMMAND: 91,
            CAPSLOCK: 20,
            ESCAPE: 27,
            PAGE_UP: 33,
            PAGE_DOWN: 34,
            END: 35,
            HOME: 36,
            ARROW_LEFT: 37,
            ARROW_UP: 38,
            ARROW_RIGHT: 39,
            ARROW_DOWN: 40,
            DELETE: 46,
            ZERO: 48,
            ONE: 49,
            TWO: 50,
            THREE: 51,
            FOUR: 52,
            FIVE: 53,
            SIX: 54,
            SEVEN: 55,
            EIGHT: 56,
            NINE: 57,
            A: 65,
            B: 66,
            C: 67,
            D: 68,
            E: 69,
            F: 70,
            G: 71,
            H: 72,
            I: 73,
            J: 74,
            K: 75,
            L: 76,
            M: 77,
            N: 78,
            O: 79,
            P: 80,
            Q: 81,
            R: 82,
            S: 83,
            T: 84,
            U: 85,
            V: 86,
            W: 87,
            X: 88,
            Y: 89,
            Z: 90,
            NUMPAD_ZERO: 96,
            NUMPAD_ONE: 97,
            NUMPAD_TWO: 98,
            NUMPAD_THREE: 99,
            NUMPAD_FOUR: 100,
            NUMPAD_FIVE: 101,
            NUMPAD_SIX: 102,
            NUMPAD_SEVEN: 103,
            NUMPAD_EIGHT: 104,
            NUMPAD_NINE: 105,
            NUMPAD_ASTERISK: 106,
            NUMPAD_PLUS: 107,
            NUMPAD_DASH: 109,
            NUMPAD_DOT: 110,
            NUMPAD_SLASH: 111,
            NUMPAD_EQUALS: 187,
            TICK: 192,
            LEFT_BRACKET: 219,
            RIGHT_BRACKET: 221,
            BACKSLASH: 220,
            SEMICOLON: 186,
            APOSTRAPHE: 222,
            APOSTROPHE: 222,
            SPACEBAR: 32,
            CLEAR: 12,
            COMMA: 188,
            DOT: 190,
            SLASH: 191
        }
    }, {}],
    82: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            var e;
            if ((t = t || window) === window) {
                if (e = window.pageXOffset) return e;
                t = document.documentElement || document.body.parentNode || document.body
            }
            return t.scrollLeft
        }
    }, {}],
    83: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            var e;
            if ((t = t || window) === window) {
                if (e = window.pageYOffset) return e;
                t = document.documentElement || document.body.parentNode || document.body
            }
            return t.scrollTop
        }
    }, {}],
    84: [function(t, e, i) {
        "use strict";
        e.exports = 8
    }, {}],
    85: [function(t, e, i) {
        "use strict";
        e.exports = 11
    }, {}],
    86: [function(t, e, i) {
        "use strict";
        e.exports = 1
    }, {}],
    87: [function(t, e, i) {
        "use strict";
        e.exports = 3
    }, {}],
    88: [function(t, e, i) {
        "use strict";
        var s = t(91);
        e.exports = function(t, e) {
            return !!s(t) && ("number" == typeof e ? t.nodeType === e : -1 !== e.indexOf(t.nodeType))
        }
    }, {
        91: 91
    }],
    89: [function(t, e, i) {
        "use strict";
        var s = t(88),
            r = t(84),
            n = t(85),
            a = t(86),
            o = t(87),
            l = [a, o, r, n],
            c = [a, o, r],
            h = [a, n];
        e.exports = {
            parentNode: function(t, e, i, r) {
                if (r = r || "target", (t || e) && !s(t, h)) throw new TypeError(i + ": " + r + " must be an Element, or Document Fragment")
            },
            childNode: function(t, e, i, r) {
                if (r = r || "target", (t || e) && !s(t, c)) throw new TypeError(i + ": " + r + " must be an Element, TextNode, or Comment")
            },
            insertNode: function(t, e, i, r) {
                if (r = r || "node", (t || e) && !s(t, l)) throw new TypeError(i + ": " + r + " must be an Element, TextNode, Comment, or Document Fragment")
            },
            hasParentNode: function(t, e, i) {
                if (i = i || "target", !t.parentNode) throw new TypeError(e + ": " + i + " must have a parentNode")
            }
        }
    }, {
        84: 84,
        85: 85,
        86: 86,
        87: 87,
        88: 88
    }],
    90: [function(t, e, i) {
        "use strict";
        var s = t(88),
            r = t(86);
        e.exports = function(t) {
            return s(t, r)
        }
    }, {
        86: 86,
        88: 88
    }],
    91: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return !(!t || !t.nodeType)
        }
    }, {}],
    92: [function(t, e, i) {
        "use strict";
        var s = t(89);
        e.exports = function(t) {
            return s.childNode(t, !0, "remove"), t.parentNode ? t.parentNode.removeChild(t) : t
        }
    }, {
        89: 89
    }],
    93: [function(t, e, i) {
        "use strict";
        e.exports = {
            Modal: t(94),
            Renderer: t(95),
            classNames: t(96),
            dataAttributes: t(97)
        }
    }, {
        94: 94,
        95: 95,
        96: 96,
        97: 97
    }],
    94: [function(t, e, i) {
        "use strict";
        var s = {
                addEventListener: t(63),
                removeEventListener: t(64),
                target: t(66)
            },
            r = {
                getScrollX: t(82),
                getScrollY: t(83)
            },
            n = {
                create: t(102),
                defaults: t(103)
            },
            a = t(78),
            o = t(81),
            l = t(69).EventEmitterMicro,
            c = t(95),
            h = {
                retainScrollPosition: !1
            };

        function u(t, e) {
            l.call(this), this.options = n.defaults(h, t), this.renderer = new c(e), this.opened = !1, this._keysToClose = [o.ESCAPE], this._attachedKeysToClose = [], this.close = this.close.bind(this)
        }
        var d = u.prototype = n.create(l.prototype);
        d.open = function() {
            this.options.retainScrollPosition && this._saveScrollPosition(), this.opened || (this._attachEvents(), this.trigger("willopen"), this.renderer.open(), this.opened = !0, this.trigger("open"))
        }, d.close = function(t) {
            var e, i;
            if (this.opened) {
                if (t && "click" === t.type && (e = s.target(t), i = this.renderer.options.dataAttributes.close, !e.hasAttribute(i))) return;
                this.trigger("willclose"), this._removeEvents(), this.renderer.close(), this.options.retainScrollPosition && this._restoreScrollPosition(), this.opened = !1, this.trigger("close")
            }
        }, d.render = function() {
            this.renderer.render()
        }, d.appendContent = function(t, e) {
            this.renderer.appendContent(t, e)
        }, d.removeContent = function(t) {
            this.renderer.removeContent(t)
        }, d.destroy = function() {
            for (var t in this._removeEvents(), this.renderer.destroy(), this) this.hasOwnProperty(t) && (this[t] = null)
        }, d.addKeyToClose = function(t) {
            -1 === this._keysToClose.indexOf(t) && (this._keysToClose.push(t), this._bindKeyToClose(t))
        }, d.removeKeyToClose = function(t) {
            var e = this._keysToClose.indexOf(t); - 1 !== e && this._keysToClose.splice(e, 1), this._releaseKeyToClose(t)
        }, d._bindKeyToClose = function(t) {
            -1 === this._attachedKeysToClose.indexOf(t) && (a.onUp(t, this.close), this._attachedKeysToClose.push(t))
        }, d._releaseKeyToClose = function(t) {
            var e = this._attachedKeysToClose.indexOf(t); - 1 !== e && (a.offUp(t, this.close), this._attachedKeysToClose.splice(e, 1))
        }, d._removeEvents = function() {
            this.renderer.modalElement && s.removeEventListener(this.renderer.modalElement, "click", this.close), this._keysToClose.forEach(this._releaseKeyToClose, this)
        }, d._attachEvents = function() {
            this.renderer.modalElement && s.addEventListener(this.renderer.modalElement, "click", this.close), this._keysToClose.forEach(this._bindKeyToClose, this)
        }, d._restoreScrollPosition = function() {
            window.scrollTo(this._scrollX || 0, this._scrollY || 0)
        }, d._saveScrollPosition = function() {
            this._scrollX = r.getScrollX(), this._scrollY = r.getScrollY()
        }, e.exports = u
    }, {
        102: 102,
        103: 103,
        63: 63,
        64: 64,
        66: 66,
        69: 69,
        78: 78,
        81: 81,
        82: 82,
        83: 83,
        95: 95
    }],
    95: [function(t, e, i) {
        "use strict";
        var s = {
                add: t(36),
                remove: t(41)
            },
            r = {
                defaults: t(103)
            },
            n = {
                remove: t(92),
                isElement: t(90)
            },
            a = {
                modalElement: null,
                contentElement: null,
                closeButton: null,
                classNames: t(96),
                dataAttributes: t(97)
            },
            o = function(t) {
                t = t || {}, this.options = r.defaults(a, t), this.options.classNames = r.defaults(a.classNames, t.classNames), this.options.dataAttributes = r.defaults(a.dataAttributes, t.dataAttributes), this.modalElement = this.options.modalElement, this.contentElement = this.options.contentElement, this.closeButton = this.options.closeButton
            },
            l = o.prototype;
        l.render = function() {
            return n.isElement(this.modalElement) || (this.modalElement = this.renderModalElement(this.options.classNames.modalElement)), n.isElement(this.contentElement) || (this.contentElement = this.renderContentElement(this.options.classNames.contentElement)), !1 !== this.closeButton && (n.isElement(this.closeButton) || (this.closeButton = this.renderCloseButton(this.options.classNames.closeButton)), this.modalElement.appendChild(this.closeButton)), this.modalElement.appendChild(this.contentElement), document.body.appendChild(this.modalElement), this.modalElement
        }, l.renderCloseButton = function(t) {
            var e;
            return t = t || this.options.classNames.closeButton, (e = this._renderElement("button", t)).setAttribute(this.options.dataAttributes.close, ""), e
        }, l.renderModalElement = function(t) {
            return t = t || this.options.classNames.modalElement, this._renderElement("div", t)
        }, l.renderContentElement = function(t) {
            return t = t || this.options.classNames.contentElement, this._renderElement("div", t)
        }, l.appendContent = function(t, e) {
            n.isElement(t) && (void 0 === arguments[1] ? this.contentElement.appendChild(t) : n.isElement(e) && e.appendChild(t))
        }, l.removeContent = function(t) {
            t ? this.modalElement.contains(t) && n.remove(t) : this._emptyContent()
        }, l.open = function() {
            var t = [document.documentElement].concat(this.options.classNames.documentElement),
                e = [this.modalElement].concat(this.options.classNames.modalOpen);
            s.add.apply(null, t), s.add.apply(null, e)
        }, l.close = function() {
            var t = [document.documentElement].concat(this.options.classNames.documentElement),
                e = [this.modalElement].concat(this.options.classNames.modalOpen);
            s.remove.apply(null, t), s.remove.apply(null, e)
        }, l.destroy = function() {
            var t = [document.documentElement].concat(this.options.classNames.documentElement);
            for (var e in this.modalElement && document.body.contains(this.modalElement) && (this.close(), document.body.removeChild(this.modalElement)), s.remove.apply(null, t), this) this.hasOwnProperty(e) && (this[e] = null)
        }, l._renderElement = function(t, e) {
            var i = document.createElement(t),
                r = [i];
            return e && (r = r.concat(e)), s.add.apply(null, r), i
        }, l._emptyContent = function() {
            this.contentElement.innerHTML = ""
        }, e.exports = o
    }, {
        103: 103,
        36: 36,
        41: 41,
        90: 90,
        92: 92,
        96: 96,
        97: 97
    }],
    96: [function(t, e, i) {
        "use strict";
        e.exports = {
            modalElement: "modal",
            modalOpen: "modal-open",
            documentElement: "has-modal",
            contentElement: "modal-content",
            closeButton: "modal-close"
        }
    }, {}],
    97: [function(t, e, i) {
        "use strict";
        e.exports = {
            close: "data-modal-close"
        }
    }, {}],
    98: [function(t, e, i) {
        "use strict";
        e.exports = {
            Modal: t(99),
            createStandardModal: t(101),
            createFullViewportModal: t(100)
        }
    }, {
        100: 100,
        101: 101,
        99: 99
    }],
    99: [function(t, e, i) {
        "use strict";
        var s = t(93).Modal,
            r = t(69).EventEmitterMicro,
            n = t(3);

        function a(t) {
            r.call(this), this.options = t || {}, this._modal = new s(t, this.options.renderer), this.opened = !1, this._render(), this.closeButton = this._modal.renderer.closeButton, this.modalElement = this._modal.renderer.modalElement, this.contentElement = this._modal.renderer.contentElement, this.modalElement.setAttribute("role", "dialog"), this.modalElement.setAttribute("aria-label", "Modal"), this.modalElement.setAttribute("aria-modal", "true"), this.modalElement.setAttribute("tabindex", "-1"), this.closeButton.setAttribute("aria-label", "Close"), this._circularTab = new n(this.modalElement), this._onWillOpen = this._onWillOpen.bind(this), this._onOpen = this._onOpen.bind(this), this._onWillClose = this._onWillClose.bind(this), this._onClose = this._onClose.bind(this), this._bindEvents()
        }
        var o = a.prototype = Object.create(r.prototype);
        o.open = function() {
            this._modal.open(), this.opened = this._modal.opened
        }, o.close = function() {
            this._modal.close()
        }, o.appendContent = function(t) {
            this._modal.appendContent(t)
        }, o.removeContent = function(t) {
            this._modal.removeContent(t)
        }, o.destroy = function() {
            for (var t in this._releaseEvents(), this._modal.destroy(), this._removeModalFocus(), this._circularTab.destroy(), this._focusObj = null, this) this.hasOwnProperty(t) && (this[t] = null)
        }, o.addKeyToClose = function(t) {
            this._modal.addKeyToClose(t)
        }, o.removeKeyToClose = function(t) {
            this._modal.removeKeyToClose(t)
        }, o._render = function() {
            this._modal.render(), this._modal.renderer.modalElement.setAttribute("aria-hidden", "true")
        }, o._bindEvents = function() {
            this._modal.on("willopen", this._onWillOpen), this._modal.on("open", this._onOpen), this._modal.on("willclose", this._onWillClose), this._modal.on("close", this._onClose)
        }, o._releaseEvents = function() {
            this._modal.off("willopen", this._onWillOpen), this._modal.off("open", this._onOpen), this._modal.off("willclose", this._onWillClose), this._modal.off("close", this._onClose)
        }, o._onWillOpen = function() {
            this.trigger("willopen")
        }, o._onOpen = function() {
            this.opened = this._modal.opened, this._giveModalFocus(), this.trigger("open")
        }, o._onWillClose = function() {
            this.trigger("willclose"), this._removeModalFocus()
        }, o._onClose = function() {
            this.opened = this._modal.opened, this.trigger("close")
        }, o._giveModalFocus = function() {
            this.modalElement.removeAttribute("aria-hidden"), this._activeElement = document.activeElement, this._circularTab.start(!0), setTimeout(function() {
                this.modalElement.focus()
            }.bind(this), 300)
        }, o._removeModalFocus = function() {
            this._circularTab.stop(), this.modalElement.setAttribute("aria-hidden", "true"), this._activeElement && (this._activeElement.focus(), this._activeElement = null)
        }, e.exports = a
    }, {
        3: 3,
        69: 69,
        93: 93
    }],
    100: [function(t, e, i) {
        "use strict";
        var s = t(99),
            r = t(93).classNames,
            n = {
                retainScrollPosition: !0,
                renderer: {
                    classNames: {
                        documentElement: [r.documentElement].concat("has-modal-full-viewport"),
                        modalElement: [r.modalElement].concat("modal-full-viewport")
                    }
                }
            };
        e.exports = function(t, e) {
            var i = new s(n),
                r = e || {};
            return t && i.appendContent(t), r.removeContainerPadding && i.modalElement.classList.add("remove-container-padding"), i
        }
    }, {
        93: 93,
        99: 99
    }],
    101: [function(t, e, i) {
        "use strict";
        var s = t(99),
            r = t(93).classNames,
            n = t(93).dataAttributes,
            a = {
                add: t(36)
            },
            o = {
                renderer: {
                    classNames: {
                        documentElement: [r.documentElement].concat("has-modal-standard"),
                        modalElement: [r.modalElement].concat("modal-standard")
                    }
                }
            };
        e.exports = function(t) {
            var e = new s(o);
            t && e.appendContent(t);
            var i = document.createElement("div"),
                r = document.createElement("div"),
                l = document.createElement("div"),
                c = document.createElement("div");
            return a.add(i, "content-table"), a.add(r, "content-cell"), a.add(l, "content-wrapper"), a.add(c, "content-padding", "large-8", "medium-10"), e.modalElement.setAttribute(n.close, ""), l.setAttribute(n.close, ""), r.setAttribute(n.close, ""), i.appendChild(r), r.appendChild(l), l.appendChild(c), e.modalElement.appendChild(i), c.appendChild(e.contentElement), c.appendChild(e.closeButton), e
        }
    }, {
        36: 36,
        93: 93,
        99: 99
    }],
    102: [function(t, e, i) {
        "use strict";
        var s = function() {};
        e.exports = function(t) {
            if (arguments.length > 1) throw new Error("Second argument not supported");
            if (null === t || "object" != typeof t) throw new TypeError("Object prototype may only be an Object.");
            return "function" == typeof Object.create ? Object.create(t) : (s.prototype = t, new s)
        }
    }, {}],
    103: [function(t, e, i) {
        "use strict";
        var s = t(104);
        e.exports = function(t, e) {
            if ("object" != typeof t) throw new TypeError("defaults: must provide a defaults object");
            if ("object" != typeof(e = e || {})) throw new TypeError("defaults: options must be a typeof object");
            return s({}, t, e)
        }
    }, {
        104: 104
    }],
    104: [function(t, e, i) {
        "use strict";
        t(76);
        var s = Object.prototype.hasOwnProperty;
        e.exports = function() {
            var t, e;
            return t = arguments.length < 2 ? [{}, arguments[0]] : [].slice.call(arguments), e = t.shift(), t.forEach((function(t) {
                if (null != t)
                    for (var i in t) s.call(t, i) && (e[i] = t[i])
            })), e
        }
    }, {
        76: 76
    }],
    105: [function(t, e, i) {
        "use strict";
        var s = t(109),
            r = t(106),
            n = t(108),
            a = t(107),
            o = {};
        e.exports = function t(e, i) {
            var l, c, h;
            if (i = i || "div", e = e.toLowerCase(), i in o || (o[i] = {}), e in (c = o[i])) return c[e];
            if (s(e, i)) return c[e] = e;
            if (e in r)
                for (h = 0; h < r[e].length; h++)
                    if (l = r[e][h], s(l.toLowerCase(), i)) return c[e] = l;
            for (h = 0; h < a.evt.length; h++)
                if (l = a.evt[h] + e, s(l, i)) return a.reduce(h), c[e] = l;
            return "window" !== i && n.indexOf(e) ? c[e] = t(e, "window") : c[e] = !1
        }
    }, {
        106: 106,
        107: 107,
        108: 108,
        109: 109
    }],
    106: [function(t, e, i) {
        "use strict";
        e.exports = {
            transitionend: ["webkitTransitionEnd", "MSTransitionEnd"],
            animationstart: ["webkitAnimationStart", "MSAnimationStart"],
            animationend: ["webkitAnimationEnd", "MSAnimationEnd"],
            animationiteration: ["webkitAnimationIteration", "MSAnimationIteration"],
            fullscreenchange: ["MSFullscreenChange"],
            fullscreenerror: ["MSFullscreenError"]
        }
    }, {}],
    107: [function(t, e, i) {
        "use strict";
        var s = ["-webkit-", "-moz-", "-ms-"],
            r = ["Webkit", "Moz", "ms"],
            n = ["webkit", "moz", "ms"],
            a = function() {
                this.initialize()
            },
            o = a.prototype;
        o.initialize = function() {
            this.reduced = !1, this.css = s, this.dom = r, this.evt = n
        }, o.reduce = function(t) {
            this.reduced || (this.reduced = !0, this.css = [this.css[t]], this.dom = [this.dom[t]], this.evt = [this.evt[t]])
        }, e.exports = new a
    }, {}],
    108: [function(t, e, i) {
        "use strict";
        e.exports = ["transitionend", "animationstart", "animationend", "animationiteration"]
    }, {}],
    109: [function(t, e, i) {
        "use strict";
        var s = {
            window: window,
            document: document
        };
        e.exports = function(t, e) {
            var i;
            return t = "on" + t, e in s || (s[e] = document.createElement(e)), t in (i = s[e]) || "setAttribute" in i && (i.setAttribute(t, "return;"), "function" == typeof i[t])
        }
    }, {}],
    110: [function(t, e, i) {
        "use strict";
        e.exports = {
            majorVersionNumber: "3.x"
        }
    }, {}],
    111: [function(t, e, i) {
        "use strict";
        var s, r = t(69).EventEmitterMicro,
            n = t(121),
            a = t(120);

        function o(t) {
            t = t || {}, r.call(this), this.id = a.getNewID(), this.executor = t.executor || n, this._reset(), this._willRun = !1, this._didDestroy = !1
        }(s = o.prototype = Object.create(r.prototype)).run = function() {
            return this._willRun || (this._willRun = !0), this._subscribe()
        }, s.cancel = function() {
            this._unsubscribe(), this._willRun && (this._willRun = !1), this._reset()
        }, s.destroy = function() {
            var t = this.willRun();
            return this.cancel(), this.executor = null, r.prototype.destroy.call(this), this._didDestroy = !0, t
        }, s.willRun = function() {
            return this._willRun
        }, s.isRunning = function() {
            return this._isRunning
        }, s._subscribe = function() {
            return this.executor.subscribe(this)
        }, s._unsubscribe = function() {
            return this.executor.unsubscribe(this)
        }, s._onAnimationFrameStart = function(t) {
            this._isRunning = !0, this._willRun = !1, this._didEmitFrameData || (this._didEmitFrameData = !0, this.trigger("start", t))
        }, s._onAnimationFrameEnd = function(t) {
            this._willRun || (this.trigger("stop", t), this._reset())
        }, s._reset = function() {
            this._didEmitFrameData = !1, this._isRunning = !1
        }, e.exports = o
    }, {
        120: 120,
        121: 121,
        69: 69
    }],
    112: [function(t, e, i) {
        "use strict";
        var s, r = t(70);

        function n(t) {
            t = t || {}, this._reset(), this.updatePhases(), this.eventEmitter = new r, this._willRun = !1, this._totalSubscribeCount = -1, this._requestAnimationFrame = window.requestAnimationFrame, this._cancelAnimationFrame = window.cancelAnimationFrame, this._boundOnAnimationFrame = this._onAnimationFrame.bind(this), this._boundOnExternalAnimationFrame = this._onExternalAnimationFrame.bind(this)
        }(s = n.prototype).frameRequestedPhase = "requested", s.startPhase = "start", s.runPhases = ["update", "external", "draw"], s.endPhase = "end", s.disabledPhase = "disabled", s.beforePhaseEventPrefix = "before:", s.afterPhaseEventPrefix = "after:", s.subscribe = function(t, e) {
            return this._totalSubscribeCount++, this._nextFrameSubscribers[t.id] || (e ? this._nextFrameSubscribersOrder.unshift(t.id) : this._nextFrameSubscribersOrder.push(t.id), this._nextFrameSubscribers[t.id] = t, this._nextFrameSubscriberArrayLength++, this._nextFrameSubscriberCount++, this._run()), this._totalSubscribeCount
        }, s.subscribeImmediate = function(t, e) {
            return this._totalSubscribeCount++, this._subscribers[t.id] || (e ? this._subscribersOrder.splice(this._currentSubscriberIndex + 1, 0, t.id) : this._subscribersOrder.unshift(t.id), this._subscribers[t.id] = t, this._subscriberArrayLength++, this._subscriberCount++), this._totalSubscribeCount
        }, s.unsubscribe = function(t) {
            return !!this._nextFrameSubscribers[t.id] && (this._nextFrameSubscribers[t.id] = null, this._nextFrameSubscriberCount--, 0 === this._nextFrameSubscriberCount && this._cancel(), !0)
        }, s.getSubscribeID = function() {
            return this._totalSubscribeCount += 1
        }, s.destroy = function() {
            var t = this._cancel();
            return this.eventEmitter.destroy(), this.eventEmitter = null, this.phases = null, this._subscribers = null, this._subscribersOrder = null, this._nextFrameSubscribers = null, this._nextFrameSubscribersOrder = null, this._rafData = null, this._boundOnAnimationFrame = null, this._onExternalAnimationFrame = null, t
        }, s.useExternalAnimationFrame = function(t) {
            if ("boolean" == typeof t) {
                var e = this._isUsingExternalAnimationFrame;
                return t && this._animationFrame && (this._cancelAnimationFrame.call(window, this._animationFrame), this._animationFrame = null), !this._willRun || t || this._animationFrame || (this._animationFrame = this._requestAnimationFrame.call(window, this._boundOnAnimationFrame)), this._isUsingExternalAnimationFrame = t, t ? this._boundOnExternalAnimationFrame : e || !1
            }
        }, s.updatePhases = function() {
            this.phases || (this.phases = []), this.phases.length = 0, this.phases.push(this.frameRequestedPhase), this.phases.push(this.startPhase), Array.prototype.push.apply(this.phases, this.runPhases), this.phases.push(this.endPhase), this._runPhasesLength = this.runPhases.length, this._phasesLength = this.phases.length
        }, s._run = function() {
            if (!this._willRun) return this._willRun = !0, 0 === this.lastFrameTime && (this.lastFrameTime = performance.now()), this._animationFrameActive = !0, this._isUsingExternalAnimationFrame || (this._animationFrame = this._requestAnimationFrame.call(window, this._boundOnAnimationFrame)), this.phase === this.disabledPhase && (this.phaseIndex = 0, this.phase = this.phases[this.phaseIndex]), !0
        }, s._cancel = function() {
            var t = !1;
            return this._animationFrameActive && (this._animationFrame && (this._cancelAnimationFrame.call(window, this._animationFrame), this._animationFrame = null), this._animationFrameActive = !1, this._willRun = !1, t = !0), this._isRunning || this._reset(), t
        }, s._onAnimationFrame = function(t) {
            for (this._subscribers = this._nextFrameSubscribers, this._subscribersOrder = this._nextFrameSubscribersOrder, this._subscriberArrayLength = this._nextFrameSubscriberArrayLength, this._subscriberCount = this._nextFrameSubscriberCount, this._nextFrameSubscribers = {}, this._nextFrameSubscribersOrder = [], this._nextFrameSubscriberArrayLength = 0, this._nextFrameSubscriberCount = 0, this.phaseIndex = 0, this.phase = this.phases[this.phaseIndex], this._isRunning = !0, this._willRun = !1, this._didRequestNextRAF = !1, this._rafData.delta = t - this.lastFrameTime, this.lastFrameTime = t, this._rafData.fps = 0, this._rafData.delta >= 1e3 && (this._rafData.delta = 0), 0 !== this._rafData.delta && (this._rafData.fps = 1e3 / this._rafData.delta), this._rafData.time = t, this._rafData.naturalFps = this._rafData.fps, this._rafData.timeNow = Date.now(), this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._onAnimationFrameStart(this._rafData);
            for (this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase), this._runPhaseIndex = 0; this._runPhaseIndex < this._runPhasesLength; this._runPhaseIndex++) {
                for (this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]].trigger(this.phase, this._rafData);
                this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase)
            }
            for (this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._onAnimationFrameEnd(this._rafData);
            this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase), this._willRun ? (this.phaseIndex = 0, this.phaseIndex = this.phases[this.phaseIndex]) : this._reset()
        }, s._onExternalAnimationFrame = function(t) {
            this._isUsingExternalAnimationFrame && this._onAnimationFrame(t)
        }, s._reset = function() {
            this._rafData || (this._rafData = {}), this._rafData.time = 0, this._rafData.delta = 0, this._rafData.fps = 0, this._rafData.naturalFps = 0, this._rafData.timeNow = 0, this._subscribers = {}, this._subscribersOrder = [], this._currentSubscriberIndex = -1, this._subscriberArrayLength = 0, this._subscriberCount = 0, this._nextFrameSubscribers = {}, this._nextFrameSubscribersOrder = [], this._nextFrameSubscriberArrayLength = 0, this._nextFrameSubscriberCount = 0, this._didEmitFrameData = !1, this._animationFrame = null, this._animationFrameActive = !1, this._isRunning = !1, this._shouldReset = !1, this.lastFrameTime = 0, this._runPhaseIndex = -1, this.phaseIndex = -1, this.phase = this.disabledPhase
        }, e.exports = n
    }, {
        70: 70
    }],
    113: [function(t, e, i) {
        "use strict";
        var s = t(115),
            r = function(t) {
                this.phase = t, this.rafEmitter = new s, this._cachePhaseIndex(), this.requestAnimationFrame = this.requestAnimationFrame.bind(this), this.cancelAnimationFrame = this.cancelAnimationFrame.bind(this), this._onBeforeRAFExecutorStart = this._onBeforeRAFExecutorStart.bind(this), this._onBeforeRAFExecutorPhase = this._onBeforeRAFExecutorPhase.bind(this), this._onAfterRAFExecutorPhase = this._onAfterRAFExecutorPhase.bind(this), this.rafEmitter.on(this.phase, this._onRAFExecuted.bind(this)), this.rafEmitter.executor.eventEmitter.on("before:start", this._onBeforeRAFExecutorStart), this.rafEmitter.executor.eventEmitter.on("before:" + this.phase, this._onBeforeRAFExecutorPhase), this.rafEmitter.executor.eventEmitter.on("after:" + this.phase, this._onAfterRAFExecutorPhase), this._frameCallbacks = [], this._currentFrameCallbacks = [], this._nextFrameCallbacks = [], this._phaseActive = !1, this._currentFrameID = -1, this._cancelFrameIdx = -1, this._frameCallbackLength = 0, this._currentFrameCallbacksLength = 0, this._nextFrameCallbacksLength = 0, this._frameCallbackIteration = 0
            },
            n = r.prototype;
        n.requestAnimationFrame = function(t, e) {
            return !0 === e && this.rafEmitter.executor.phaseIndex > 0 && this.rafEmitter.executor.phaseIndex <= this.phaseIndex ? this._phaseActive ? (this._currentFrameID = this.rafEmitter.executor.subscribeImmediate(this.rafEmitter, !0), this._frameCallbacks.push(this._currentFrameID, t), this._frameCallbackLength += 2) : (this._currentFrameID = this.rafEmitter.executor.subscribeImmediate(this.rafEmitter, !1), this._currentFrameCallbacks.push(this._currentFrameID, t), this._currentFrameCallbacksLength += 2) : (this._currentFrameID = this.rafEmitter.run(), this._nextFrameCallbacks.push(this._currentFrameID, t), this._nextFrameCallbacksLength += 2), this._currentFrameID
        }, n.cancelAnimationFrame = function(t) {
            this._cancelFrameIdx = this._nextFrameCallbacks.indexOf(t), this._cancelFrameIdx > -1 ? this._cancelNextAnimationFrame() : (this._cancelFrameIdx = this._currentFrameCallbacks.indexOf(t), this._cancelFrameIdx > -1 ? this._cancelCurrentAnimationFrame() : (this._cancelFrameIdx = this._frameCallbacks.indexOf(t), this._cancelFrameIdx > -1 && this._cancelRunningAnimationFrame()))
        }, n._onRAFExecuted = function(t) {
            for (this._frameCallbackIteration = 0; this._frameCallbackIteration < this._frameCallbackLength; this._frameCallbackIteration += 2) this._frameCallbacks[this._frameCallbackIteration + 1](t.time, t);
            this._frameCallbacks.length = 0, this._frameCallbackLength = 0
        }, n._onBeforeRAFExecutorStart = function() {
            Array.prototype.push.apply(this._currentFrameCallbacks, this._nextFrameCallbacks.splice(0, this._nextFrameCallbacksLength)), this._currentFrameCallbacksLength = this._nextFrameCallbacksLength, this._nextFrameCallbacks.length = 0, this._nextFrameCallbacksLength = 0
        }, n._onBeforeRAFExecutorPhase = function() {
            this._phaseActive = !0, Array.prototype.push.apply(this._frameCallbacks, this._currentFrameCallbacks.splice(0, this._currentFrameCallbacksLength)), this._frameCallbackLength = this._currentFrameCallbacksLength, this._currentFrameCallbacks.length = 0, this._currentFrameCallbacksLength = 0
        }, n._onAfterRAFExecutorPhase = function() {
            this._phaseActive = !1
        }, n._cachePhaseIndex = function() {
            this.phaseIndex = this.rafEmitter.executor.phases.indexOf(this.phase)
        }, n._cancelRunningAnimationFrame = function() {
            this._frameCallbacks.splice(this._cancelFrameIdx, 2), this._frameCallbackLength -= 2
        }, n._cancelCurrentAnimationFrame = function() {
            this._currentFrameCallbacks.splice(this._cancelFrameIdx, 2), this._currentFrameCallbacksLength -= 2
        }, n._cancelNextAnimationFrame = function() {
            this._nextFrameCallbacks.splice(this._cancelFrameIdx, 2), this._nextFrameCallbacksLength -= 2, 0 === this._nextFrameCallbacksLength && this.rafEmitter.cancel()
        }, e.exports = r
    }, {
        115: 115
    }],
    114: [function(t, e, i) {
        "use strict";
        var s = t(113),
            r = function() {
                this.events = {}
            },
            n = r.prototype;
        n.requestAnimationFrame = function(t) {
            return this.events[t] || (this.events[t] = new s(t)), this.events[t].requestAnimationFrame
        }, n.cancelAnimationFrame = function(t) {
            return this.events[t] || (this.events[t] = new s(t)), this.events[t].cancelAnimationFrame
        }, e.exports = new r
    }, {
        113: 113
    }],
    115: [function(t, e, i) {
        "use strict";
        var s = t(111),
            r = function(t) {
                s.call(this, t)
            };
        (r.prototype = Object.create(s.prototype))._subscribe = function() {
            return this.executor.subscribe(this, !0)
        }, e.exports = r
    }, {
        111: 111
    }],
    116: [function(t, e, i) {
        "use strict";
        var s = t(114);
        e.exports = s.cancelAnimationFrame("draw")
    }, {
        114: 114
    }],
    117: [function(t, e, i) {
        "use strict";
        var s = t(114);
        e.exports = s.cancelAnimationFrame("update")
    }, {
        114: 114
    }],
    118: [function(t, e, i) {
        "use strict";
        var s = t(114);
        e.exports = s.requestAnimationFrame("draw")
    }, {
        114: 114
    }],
    119: [function(t, e, i) {
        "use strict";
        var s = t(114);
        e.exports = s.requestAnimationFrame("external")
    }, {
        114: 114
    }],
    120: [function(t, e, i) {
        "use strict";
        var s = t(123).SharedInstance,
            r = t(110).majorVersionNumber,
            n = function() {
                this._currentID = 0
            };
        n.prototype.getNewID = function() {
            return this._currentID++, "raf:" + this._currentID
        }, e.exports = s.share("@marcom/ac-raf-emitter/sharedRAFEmitterIDGeneratorInstance", r, n)
    }, {
        110: 110,
        123: 123
    }],
    121: [function(t, e, i) {
        "use strict";
        var s = t(123).SharedInstance,
            r = t(110).majorVersionNumber,
            n = t(112);
        e.exports = s.share("@marcom/ac-raf-emitter/sharedRAFExecutorInstance", r, n)
    }, {
        110: 110,
        112: 112,
        123: 123
    }],
    122: [function(t, e, i) {
        "use strict";
        var s = t(114);
        e.exports = s.requestAnimationFrame("update")
    }, {
        114: 114
    }],
    123: [function(t, e, i) {
        "use strict";
        e.exports = {
            SharedInstance: t(124)
        }
    }, {
        124: 124
    }],
    124: [function(t, e, i) {
        "use strict";
        var s, r = window,
            n = r.AC,
            a = (s = {}, {
                get: function(t, e) {
                    var i = null;
                    return s[t] && s[t][e] && (i = s[t][e]), i
                },
                set: function(t, e, i) {
                    return s[t] || (s[t] = {}), s[t][e] = "function" == typeof i ? new i : i, s[t][e]
                },
                share: function(t, e, i) {
                    var s = this.get(t, e);
                    return s || (s = this.set(t, e, i)), s
                },
                remove: function(t, e) {
                    var i = typeof e;
                    if ("string" !== i && "number" !== i) s[t] && (s[t] = null);
                    else {
                        if (!s[t] || !s[t][e]) return;
                        s[t][e] = null
                    }
                }
            });
        n || (n = r.AC = {}), n.SharedInstance || (n.SharedInstance = a), e.exports = n.SharedInstance
    }, {}],
    125: [function(t, e, i) {
        "use strict";
        e.exports = {
            version: "3.6.5",
            major: "3.x",
            majorMinor: "3.6"
        }
    }, {}],
    126: [function(t, e, i) {
        "use strict";
        const s = t(69).EventEmitterMicro,
            r = t(133),
            n = t(128),
            a = t(129),
            o = t(131),
            l = t(149),
            c = t(150),
            h = t(151),
            u = t(125),
            d = {};
        "undefined" != typeof window && (d.update = t(122), d.cancelUpdate = t(117), d.external = t(119), d.draw = t(118));
        let p = null;
        class m extends s {
            constructor() {
                if (super(), p) throw "You cannot create multiple AnimSystems. You probably want to create multiple groups instead. You can have unlimited groups on a page";
                p = this, this.groups = [], this.scrollSystems = [], this.timeSystems = [], this.tweenGroup = null, this._forceUpdateRAFId = -1, this.initialized = !1, this.model = r, this.plugins = {
                    keyframe: [],
                    parser: []
                }, this.version = u.version, this._resolveReady = () => {}, this.ready = new Promise(t => this._resolveReady = t), this.onScroll = this.onScroll.bind(this), this.onResizedDebounced = this.onResizedDebounced.bind(this), this.onResizeImmediate = this.onResizeImmediate.bind(this)
            }
            initialize() {
                return this.initialized || "undefined" == typeof window || (this.initialized = !0, this.timeSystems = [], this.scrollSystems = [], this.groups = [], this.setupEvents(), this.initializeResizeFilter(), this.initializeModel(), this.createDOMGroups(), this.createDOMKeyframes(), this.tweenGroup = new h(null, this), this.groups.unshift(this.tweenGroup), this._resolveReady()), this.ready
            }
            use(t, e) {
                t.install(this, e)
            }
            remove() {
                return this.initialized ? Promise.all(this.groups.map(t => t.remove())).then(() => {
                    this.groups = null, this.scrollSystems = null, this.timeSystems = null, window.clearTimeout(r.RESIZE_TIMEOUT), window.removeEventListener("scroll", this.onScroll), window.removeEventListener("resize", this.onResizeImmediate), this._events = {}, this.initialized = !1, this.ready = new Promise(t => this._resolveReady = t)
                }) : (this.ready = new Promise(t => this._resolveReady = t), Promise.resolve())
            }
            destroy() {
                return this.remove()
            }
            createTimeGroup(t, e) {
                t instanceof HTMLElement || (t = (e = t || {}).el);
                let i = new c(t, this);
                return e && e.name && (i.name = e.name), this.groups.push(i), this.timeSystems.push(i), this.trigger(r.EVENTS.ON_GROUP_CREATED, i), i
            }
            createScrollGroup(t, e) {
                if (!t) throw "AnimSystem scroll based groups must supply an HTMLElement";
                let i = new l(t, this);
                return (e = e || {}).name && (i.name = e.name), e.getPosition && e.getMaxPosition && (i.getPosition = e.getPosition, i.createViewableRange = () => ({
                    a: 0,
                    d: e.getMaxPosition()
                })), i.getPosition = e.getPosition || i.getPosition, i.getPosition = e.getPosition || i.getPosition, this.groups.push(i), this.scrollSystems.push(i), this.trigger(r.EVENTS.ON_GROUP_CREATED, i), i
            }
            removeGroup(t) {
                return Promise.all(t.keyframeControllers.map(e => t.removeKeyframeController(e))).then(() => {
                    let e = this.groups.indexOf(t); - 1 !== e && this.groups.splice(e, 1), e = this.scrollSystems.indexOf(t), -1 !== e && this.scrollSystems.splice(e, 1), e = this.timeSystems.indexOf(t), -1 !== e && this.timeSystems.splice(e, 1), t.destroy()
                })
            }
            createDOMGroups() {
                document.body.setAttribute("data-anim-scroll-group", "body"), document.querySelectorAll("[data-anim-scroll-group]").forEach(t => this.createScrollGroup(t)), document.querySelectorAll("[data-anim-time-group]").forEach(t => this.createTimeGroup(t)), this.trigger(r.EVENTS.ON_DOM_GROUPS_CREATED, this.groups)
            }
            createDOMKeyframes() {
                let t = [];
                ["data-anim-keyframe", n.DATA_ATTRIBUTE, a.DATA_ATTRIBUTE, o.DATA_ATTRIBUTE].forEach((function(e) {
                    for (let i = 0; i < 12; i++) t.push(e + (0 === i ? "" : "-" + (i - 1)))
                }));
                for (let e = 0; e < t.length; e++) {
                    let i = t[e],
                        s = document.querySelectorAll("[" + i + "]");
                    for (let t = 0; t < s.length; t++) {
                        const e = s[t],
                            r = JSON.parse(e.getAttribute(i));
                        this.addKeyframe(e, r)
                    }
                }
                d.update(() => {
                    null !== this.groups && (this.groups.forEach(t => t.onKeyframesDirty({
                        silent: !0
                    })), this.groups.forEach(t => t.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, t)), this.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, this), this.groups.forEach(t => {
                        t.forceUpdate({
                            waitForNextUpdate: !1,
                            silent: !0
                        }), t.reconcile()
                    }), this.onScroll())
                }, !0)
            }
            initializeResizeFilter() {
                if (r.cssDimensionsTracker) return;
                const t = document.querySelector(".cssDimensionsTracker") || document.createElement("div");
                t.setAttribute("cssDimensionsTracker", "true"), t.style.position = "fixed", t.style.top = "0", t.style.width = "100%", t.style.height = "100vh", t.style.pointerEvents = "none", t.style.visibility = "hidden", t.style.zIndex = "-1", document.documentElement.appendChild(t), r.cssDimensionsTracker = t
            }
            initializeModel() {
                r.pageMetrics.windowHeight = r.cssDimensionsTracker.clientHeight, r.pageMetrics.windowWidth = r.cssDimensionsTracker.clientWidth, r.pageMetrics.scrollY = window.scrollY || window.pageYOffset, r.pageMetrics.scrollX = window.scrollX || window.pageXOffset, r.pageMetrics.breakpoint = r.getBreakpoint();
                let t = document.documentElement.getBoundingClientRect();
                r.pageMetrics.documentOffsetX = t.left + r.pageMetrics.scrollX, r.pageMetrics.documentOffsetY = t.top + r.pageMetrics.scrollY
            }
            setupEvents() {
                window.removeEventListener("scroll", this.onScroll), window.addEventListener("scroll", this.onScroll), window.removeEventListener("resize", this.onResizeImmediate), window.addEventListener("resize", this.onResizeImmediate)
            }
            onScroll() {
                r.pageMetrics.scrollY = window.scrollY || window.pageYOffset, r.pageMetrics.scrollX = window.scrollX || window.pageXOffset;
                for (let t = 0, e = this.scrollSystems.length; t < e; t++) this.scrollSystems[t].updateTimeline();
                this.trigger(r.PageEvents.ON_SCROLL, r.pageMetrics)
            }
            onResizeImmediate() {
                let t = r.cssDimensionsTracker.clientWidth,
                    e = r.cssDimensionsTracker.clientHeight;
                if (t === r.pageMetrics.windowWidth && e === r.pageMetrics.windowHeight) return;
                r.pageMetrics.windowWidth = t, r.pageMetrics.windowHeight = e, r.pageMetrics.scrollY = window.scrollY || window.pageYOffset, r.pageMetrics.scrollX = window.scrollX || window.pageXOffset;
                let i = document.documentElement.getBoundingClientRect();
                r.pageMetrics.documentOffsetX = i.left + r.pageMetrics.scrollX, r.pageMetrics.documentOffsetY = i.top + r.pageMetrics.scrollY, window.clearTimeout(r.RESIZE_TIMEOUT), r.RESIZE_TIMEOUT = window.setTimeout(this.onResizedDebounced, 250), this.trigger(r.PageEvents.ON_RESIZE_IMMEDIATE, r.pageMetrics)
            }
            onResizedDebounced() {
                d.update(() => {
                    let t = r.pageMetrics.breakpoint,
                        e = r.getBreakpoint();
                    if (e !== t) {
                        r.pageMetrics.previousBreakpoint = t, r.pageMetrics.breakpoint = e;
                        for (let t = 0, e = this.groups.length; t < e; t++) this.groups[t]._onBreakpointChange();
                        this.trigger(r.PageEvents.ON_BREAKPOINT_CHANGE, r.pageMetrics)
                    }
                    for (let t = 0, e = this.groups.length; t < e; t++) this.groups[t].forceUpdate({
                        waitForNextUpdate: !1
                    });
                    this.trigger(r.PageEvents.ON_RESIZE_DEBOUNCED, r.pageMetrics)
                }, !0)
            }
            forceUpdate({
                waitForNextUpdate: t = !0,
                silent: e = !1
            } = {}) {
                -1 !== this._forceUpdateRAFId && d.cancelUpdate(this._forceUpdateRAFId);
                let i = () => {
                    for (let t = 0, i = this.groups.length; t < i; t++) {
                        this.groups[t].forceUpdate({
                            waitForNextUpdate: !1,
                            silent: e
                        })
                    }
                    return -1
                };
                this._forceUpdateRAFId = t ? d.update(i, !0) : i()
            }
            addKeyframe(t, e) {
                let i = this.getGroupForTarget(t);
                return i = i || this.getGroupForTarget(document.body), i.addKeyframe(t, e)
            }
            addEvent(t, e) {
                let i = this.getGroupForTarget(t);
                return i = i || this.getGroupForTarget(document.body), i.addEvent(t, e)
            }
            getTimeGroupForTarget(t) {
                return this._getGroupForTarget(t, t => t instanceof c)
            }
            getScrollGroupForTarget(t) {
                return this._getGroupForTarget(t, t => !(t instanceof c))
            }
            getGroupForTarget(t) {
                return this._getGroupForTarget(t, () => !0)
            }
            getGroupByName(t) {
                return this.groups.find(e => e.name === t)
            }
            _getGroupForTarget(t, e) {
                if (t._animInfo && t._animInfo.group && e(t._animInfo.group)) return t._animInfo.group;
                let i = t;
                for (; i;) {
                    if (i._animInfo && i._animInfo.isGroup && e(i._animInfo.group)) return i._animInfo.group;
                    i = i.parentElement
                }
            }
            getControllerForTarget(t) {
                return t._animInfo && t._animInfo.controller ? t._animInfo.controller : null
            }
            addTween(t, e) {
                return this.tweenGroup.addKeyframe(t, e)
            }
        }
        e.exports = "undefined" == typeof window ? new m : window.AC.SharedInstance.share("AnimSystem", u.major, m), e.exports.default = e.exports
    }, {
        117: 117,
        118: 118,
        119: 119,
        122: 122,
        125: 125,
        128: 128,
        129: 129,
        131: 131,
        133: 133,
        149: 149,
        150: 150,
        151: 151,
        69: 69
    }],
    127: [function(t, e, i) {
        "use strict";
        const s = t(133);
        class r {
            constructor(t, e) {
                this._index = 0, this.keyframe = t, e && (this.name = e)
            }
            get start() {
                return this.keyframe.jsonProps.start
            }
            set index(t) {
                this._index = t
            }
            get index() {
                return this._index
            }
        }
        e.exports = class {
            constructor(t) {
                this.timeGroup = t, this.chapters = [], this.chapterNames = {}, this.currentChapter = null, this.tween = null, this.destroyed = !1
            }
            destroy() {
                this.destroyed = !0, this.tween && !this.tween.destroyed && this.tween.remove(), this.tween = null
            }
            addChapter(t) {
                const {
                    position: e,
                    name: i
                } = t;
                if (void 0 === e) throw ReferenceError("Cannot add chapter without target position.");
                t._impIsFirst || 0 !== this.chapters.length || this.addChapter({
                    position: 0,
                    _impIsFirst: !0
                });
                let s = this.timeGroup.addKeyframe(this, {
                    start: e,
                    end: e,
                    event: "Chapter"
                });
                this.timeGroup.forceUpdate({
                    waitForNextFrame: !1,
                    silent: !0
                });
                const n = new r(s, i);
                if (this.chapters.push(n), i) {
                    if (this.chapterNames.hasOwnProperty(i)) throw ReferenceError('Duplicate chapter name assigned - "'.concat(i, '" is already in use'));
                    this.chapterNames[i] = n
                }
                return this.chapters.sort((t, e) => t.start - e.start).forEach((t, e) => t.index = e), this.currentChapter = this.currentChapter || this.chapters[0], n
            }
            playToChapter(t) {
                let e;
                if (t.hasOwnProperty("index")) e = this.chapters[t.index];
                else {
                    if (!t.hasOwnProperty("name")) throw ReferenceError("Cannot play to chapter without target index or name");
                    e = this.chapterNames[t.name]
                }
                if (!e || this.currentChapter === e && !0 !== t.force) return;
                let i = t.ease || "easeInOutCubic";
                this.tween && this.tween.controller && (this.tween.remove(), i = t.ease || "easeOutQuint"), this.timeGroup.timeScale(t.timeScale || 1);
                const r = void 0 !== t.duration ? t.duration : this.getDurationToChapter(e),
                    n = this.timeGroup.time(),
                    a = e.start;
                let o = !1;
                return this.tween = this.timeGroup.anim.addTween({
                    time: n
                }, {
                    easeFunction: i,
                    duration: r,
                    time: [n, a],
                    onStart: () => {
                        this.destroyed || this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_INITIATED, {
                            player: this,
                            next: e
                        })
                    },
                    onDraw: t => {
                        if (this.destroyed) return;
                        let i = t.tweenProps.time.current;
                        this.timeGroup.time(i), t.keyframe.curvedT > .5 && !o && (o = !0, this.currentIndex = e.index, this.currentChapter = e, this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_OCCURRED, {
                            player: this,
                            current: e
                        }))
                    },
                    onComplete: () => {
                        this.destroyed || (this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_COMPLETED, {
                            player: this,
                            current: e
                        }), this.timeGroup.paused(!0), this.tween = null)
                    }
                }), this.tween
            }
            getDurationToChapter(t) {
                const e = this.chapters[t.index - 1] || this.chapters[t.index + 1];
                return Math.abs(e.start - t.start)
            }
        }
    }, {
        133: 133
    }],
    128: [function(t, e, i) {
        "use strict";
        const s = t(133),
            r = t(141),
            n = t(134),
            a = t(224),
            o = t(135),
            l = t(144),
            c = t(140),
            h = t(152),
            u = t(154),
            d = t(153),
            p = t(143),
            {
                cssAttributes: m,
                suffixFreeAttributes: f,
                domAttributes: g
            } = t(146);
        class y {
            constructor(t, e) {
                this.controller = t, this.anchors = [], this.jsonProps = e, this.ease = t.group.defaultEase, this.easeFunction = o.linear, this.start = 0, this.end = 0, this.localT = 0, this.curvedT = 0, this.id = 0, this.event = "", this.needsEventDispatch = !1, this.snapAtCreation = !1, this.isEnabled = !1, this.animValues = {}, this.breakpointMask = s.KeyframeDefaults.breakpointMask, this.disabledWhen = [], this.keyframeType = s.KeyframeTypes.Interpolation, this.hold = !1, this.preserveState = !1, this.markedForRemoval = !1;
                let i = !1;
                Object.defineProperty(this, "hidden", {
                    get: () => i,
                    set(e) {
                        i = e, t.group.keyframesDirty = !0
                    }
                }), this.uuid = p(), this.destroyed = !1
            }
            destroy() {
                this.destroyed = !0, this.controller = null, this.disabledWhen = null, this.anchors = null, this.jsonProps = null, this.easeFunction = null, this.animValues = null
            }
            remove() {
                return this.controller.removeKeyframe(this)
            }
            parseOptions(t) {
                this.jsonProps = t, t.relativeTo && console.error("KeyframeError: relativeTo has been removed. Use 'anchors' property instead. Found 'relativeTo':\"".concat(t.relativeTo, '"')), void 0 === t.end && void 0 === t.duration && (t.end = t.start), "" !== t.anchors && t.anchors ? (this.anchors = [], t.anchors = Array.isArray(t.anchors) ? t.anchors : [t.anchors], t.anchors.forEach((e, i) => {
                    let s = u(e, this.controller.group.element);
                    if (!s) {
                        let s = "";
                        return "string" == typeof e && (s = " Provided value was a string, so a failed attempt was made to find anchor with the provided querystring in group.element, or in the document."), void console.warn("Keyframe on", this.controller.element, " failed to find anchor at index ".concat(i, " in array"), t.anchors, ". Anchors must be JS Object references, Elements references, or valid query selector strings. ".concat(s))
                    }
                    this.anchors.push(s), this.controller.group.metrics.add(s)
                })) : (this.anchors = [], t.anchors = []), t.ease ? this.ease = parseFloat(t.ease) : t.ease = this.ease, t.hasOwnProperty("snapAtCreation") ? this.snapAtCreation = t.snapAtCreation : t.snapAtCreation = this.snapAtCreation, t.easeFunction || (t.easeFunction = s.KeyframeDefaults.easeFunctionString), t.breakpointMask ? this.breakpointMask = t.breakpointMask : t.breakpointMask = this.breakpointMask, t.disabledWhen ? this.disabledWhen = Array.isArray(t.disabledWhen) ? t.disabledWhen : [t.disabledWhen] : t.disabledWhen = this.disabledWhen, t.hasOwnProperty("hold") ? this.hold = t.hold : t.hold = this.hold, t.hasOwnProperty("preserveState") ? this.preserveState = t.preserveState : t.preserveState = s.KeyframeDefaults.preserveState, this.easeFunction = o[t.easeFunction], o.hasOwnProperty(t.easeFunction) || (t.easeFunction.includes("bezier") ? this.easeFunction = l.fromCSSString(t.easeFunction) : t.easeFunction.includes("spring") ? this.easeFunction = c.fromCSSString(t.easeFunction) : console.error("Keyframe parseOptions cannot find 'easeFunction' named '" + t.easeFunction + "'"));
                for (let e in t) {
                    if (-1 !== s.KeyframeJSONReservedWords.indexOf(e)) continue;
                    let i = t[e];
                    if (Array.isArray(i)) {
                        if (1 === i.length && (i[1] = i[0], i[0] = null), void 0 === this.controller.tweenProps[e] || !this.controller._ownerIsElement) {
                            let a = 0;
                            this.controller._ownerIsElement || (a = this.controller.element[e] || 0);
                            const o = e.startsWith("--");
                            let l = i[2] || (o || f.includes(e) ? void 0 : "px"),
                                c = this.controller.group.anim.plugins.keyframe.reduce((i, s) => i || s.parseProp.call(this, t, e), null);
                            if (!c && this.controller._ownerIsElement)
                                if (o || m.includes(e)) {
                                    let i = d(e),
                                        r = t.round || ["zIndex"].includes(i);
                                    a = parseFloat(this.controller.getTargetComputedStyle().getPropertyValue(i)), isNaN(a) && (a = 0), c = new n(a, s.KeyframeDefaults.epsilon, this.snapAtCreation, e, r, l), this.controller.cssAttributes.push(c)
                                } else g.includes(e) && (c = new r(a, s.KeyframeDefaults.epsilon, this.snapAtCreation, e, t.round, l), this.controller.domAttributes.push(c));
                            c || (c = new r(a, s.KeyframeDefaults.epsilon, this.snapAtCreation, e, t.round, l)), this.controller.tweenProps[e] = c
                        }
                        this.animValues[e] = this.controller.group.expressionParser.parseArray(this, i), this.controller.tweenProps[e].calculateEpsilon(t, this.animValues[e])
                    }
                }
                this.keyframeType = this.hold ? s.KeyframeTypes.InterpolationForward : s.KeyframeTypes.Interpolation, t.event && (this.event = t.event)
            }
            overwriteProps(t) {
                this.animValues = {};
                let e = Object.assign({}, this.jsonProps, t);
                this.controller.updateKeyframe(this, e)
            }
            updateLocalProgress(t) {
                if (this.start === this.end || t < this.start || t > this.end) return this.localT = t < this.start ? this.hold ? this.localT : 0 : t > this.end ? 1 : 0, void(this.curvedT = this.easeFunction(this.localT));
                const e = (t - this.start) / (this.end - this.start),
                    i = this.hold ? this.localT : 0;
                this.localT = a.clamp(e, i, 1), this.curvedT = this.easeFunction(this.localT)
            }
            reconcile(t) {
                this.controller.tweenProps[t].reconcile(this.animValues[t], this.curvedT) && (this.needsEventDispatch || (this.needsEventDispatch = !0, this.controller.keyframesRequiringDispatch.push(this)))
            }
            reset(t) {
                this.localT = t || 0;
                let e = this.ease;
                this.ease = 1;
                for (let t in this.animValues) this.reconcile(t);
                this.ease = e
            }
            onDOMRead(t) {
                let e = this.controller.tweenProps[t].update(this.animValues[t], this.curvedT, this.ease);
                return "" === this.event || this.needsEventDispatch || e && (this.needsEventDispatch = !0, this.controller.keyframesRequiringDispatch.push(this)), e
            }
            isInRange(t) {
                return t >= this.start && t <= this.end
            }
            setEnabled(t) {
                t = t || h(Array.from(document.documentElement.classList));
                let e = -1 !== this.breakpointMask.indexOf(s.pageMetrics.breakpoint),
                    i = !1;
                return this.disabledWhen.length > 0 && (i = this.disabledWhen.some(e => void 0 !== t[e])), this.isEnabled = e && !i, this.isEnabled
            }
            evaluateConstraints() {
                this.start = this.controller.group.expressionParser.parseTimeValue(this, this.jsonProps.start), this.end = this.controller.group.expressionParser.parseTimeValue(this, this.jsonProps.end), this.evaluateInterpolationConstraints()
            }
            evaluateInterpolationConstraints() {
                for (let t in this.animValues) {
                    let e = this.jsonProps[t];
                    this.animValues[t] = this.controller.group.expressionParser.parseArray(this, e)
                }
            }
        }
        y.DATA_ATTRIBUTE = "data-anim-tween", e.exports = y
    }, {
        133: 133,
        134: 134,
        135: 135,
        140: 140,
        141: 141,
        143: 143,
        144: 144,
        146: 146,
        152: 152,
        153: 153,
        154: 154,
        224: 224
    }],
    129: [function(t, e, i) {
        "use strict";
        const s = t(128),
            r = t(133),
            n = t(141);
        class a extends s {
            constructor(t, e) {
                super(t, e), this.keyframeType = r.KeyframeTypes.CSSClass, this._triggerType = a.TRIGGER_TYPE_CSS_CLASS, this.cssClass = "", this.friendlyName = "", this.style = {
                    on: null,
                    off: null
                }, this.toggle = r.KeyframeDefaults.toggle, this.isApplied = !1
            }
            parseOptions(t) {
                if (!this.controller._ownerIsElement) throw new TypeError("CSS Keyframes cannot be applied to JS Objects");
                if (t.x = void 0, t.y = void 0, t.z = void 0, t.scale = void 0, t.scaleX = void 0, t.scaleY = void 0, t.rotationX = void 0, t.rotationY = void 0, t.rotationZ = void 0, t.rotation = void 0, t.opacity = void 0, t.hold = void 0, void 0 !== t.toggle && (this.toggle = t.toggle), void 0 !== t.cssClass) this._triggerType = a.TRIGGER_TYPE_CSS_CLASS, this.cssClass = t.cssClass, this.friendlyName = "." + this.cssClass, void 0 === this.controller.tweenProps.targetClasses && (this.controller.tweenProps.targetClasses = {
                    add: [],
                    remove: []
                });
                else {
                    if (void 0 === t.style || !this.isValidStyleProperty(t.style)) throw new TypeError("KeyframeCSSClass no 'cssClass` property found. If using `style` property its also missing or invalid");
                    if (this._triggerType = a.TRIGGER_TYPE_STYLE_PROPERTY, this.style = t.style, this.friendlyName = "style", this.toggle = void 0 !== this.style.off || this.toggle, this.toggle && void 0 === this.style.off) {
                        this.style.off = {};
                        for (let t in this.style.on) this.style.off[t] = ""
                    }
                    void 0 === this.controller.tweenProps.targetStyles && (this.controller.tweenProps.targetStyles = {})
                }
                if (void 0 === t.end && (t.end = t.start), t.toggle = this.toggle, this._triggerType === a.TRIGGER_TYPE_CSS_CLASS) this.isApplied = this.controller.element.classList.contains(this.cssClass);
                else {
                    let t = getComputedStyle(this.controller.element);
                    this.isApplied = !0;
                    for (let e in this.style.on)
                        if (t[e] !== this.style.on[e]) {
                            this.isApplied = !1;
                            break
                        }
                }
                s.prototype.parseOptions.call(this, t), this.animValues[this.friendlyName] = [0, 0], void 0 === this.controller.tweenProps[this.friendlyName] && (this.controller.tweenProps[this.friendlyName] = new n(0, 1, !1, this.friendlyName)), this.keyframeType = r.KeyframeTypes.CSSClass
            }
            updateLocalProgress(t) {
                this.isApplied && !this.toggle || (this.start !== this.end ? !this.isApplied && t >= this.start && t <= this.end ? this._apply() : this.isApplied && this.toggle && (t < this.start || t > this.end) && this._unapply() : !this.isApplied && t >= this.start ? this._apply() : this.isApplied && this.toggle && t < this.start && this._unapply())
            }
            _apply() {
                if (this._triggerType === a.TRIGGER_TYPE_CSS_CLASS) this.controller.tweenProps.targetClasses.add.push(this.cssClass), this.controller.needsClassUpdate = !0;
                else {
                    for (let t in this.style.on) this.controller.tweenProps.targetStyles[t] = this.style.on[t];
                    this.controller.needsStyleUpdate = !0
                }
                this.isApplied = !0
            }
            _unapply() {
                if (this._triggerType === a.TRIGGER_TYPE_CSS_CLASS) this.controller.tweenProps.targetClasses.remove.push(this.cssClass), this.controller.needsClassUpdate = !0;
                else {
                    for (let t in this.style.off) this.controller.tweenProps.targetStyles[t] = this.style.off[t];
                    this.controller.needsStyleUpdate = !0
                }
                this.isApplied = !1
            }
            isValidStyleProperty(t) {
                if (!t.hasOwnProperty("on")) return !1;
                if ("object" != typeof t.on) throw new TypeError("KeyframeCSSClass `style` property should be in the form of: {on:{visibility:'hidden', otherProperty: 'value'}}");
                if (this.toggle && t.hasOwnProperty("off") && "object" != typeof t.off) throw new TypeError("KeyframeCSSClass `style` property should be in the form of: {on:{visibility:'hidden', otherProperty: 'value'}}");
                return !0
            }
            reconcile(t) {}
            onDOMRead(t) {}
            evaluateInterpolationConstraints() {}
        }
        a.TRIGGER_TYPE_CSS_CLASS = 0, a.TRIGGER_TYPE_STYLE_PROPERTY = 1, a.DATA_ATTRIBUTE = "data-anim-classname", e.exports = a
    }, {
        128: 128,
        133: 133,
        141: 141
    }],
    130: [function(t, e, i) {
        "use strict";
        const s = t(133),
            r = t(141),
            n = t(137),
            a = t(132),
            o = t(129),
            l = t(138),
            c = t(152),
            h = t(143),
            u = t(69).EventEmitterMicro,
            d = t(223),
            p = {};
        "undefined" != typeof window && (p.update = t(122), p.external = t(119), p.draw = t(118));
        const {
            transformAttributes: m,
            cssAttributes: f,
            domAttributes: g
        } = t(146), y = Math.PI / 180, v = {
            create: t(239),
            rotateX: t(240),
            rotateY: t(241),
            rotateZ: t(242),
            scale: t(243)
        };
        e.exports = class extends u {
            constructor(t, e) {
                super(), this._events.draw = [], this.uuid = h(), this.group = t, this.element = e, this._ownerIsElement = this.element instanceof Element, this._ownerIsElement ? this.friendlyName = this.element.tagName + "." + Array.from(this.element.classList).join(".") : this.friendlyName = this.element.friendlyName || this.uuid, this.element._animInfo = this.element._animInfo || new a(t, this), this.element._animInfo.controller = this, this.element._animInfo.group = this.group, this.element._animInfo.controllers.push(this), this.tweenProps = this.element._animInfo.tweenProps, this.eventObject = new n(this), this.needsStyleUpdate = !1, this.needsClassUpdate = !1, this.elementMetrics = this.group.metrics.add(this.element), this.attributes = [], this.cssAttributes = [], this.domAttributes = [], this.keyframes = {}, this._allKeyframes = [], this._activeKeyframes = [], this.keyframesRequiringDispatch = [], this.updateCachedValuesFromElement(), this.boundsMin = 0, this.boundsMax = 0, this.mat2d = new Float32Array(6), this.mat4 = v.create(), this.needsWrite = !0, this.onDOMWriteImp = this._ownerIsElement ? this.onDOMWriteForElement : this.onDOMWriteForObject
            }
            destroy() {
                if (this.element._animInfo) {
                    this.element._animInfo.controller === this && (this.element._animInfo.controller = null);
                    let t = this.element._animInfo.controllers.indexOf(this);
                    if (-1 !== t && this.element._animInfo.controllers.splice(t, 1), 0 === this.element._animInfo.controllers.length) this.element._animInfo = null;
                    else {
                        let t = this.element._animInfo.controllers.find(t => t.group !== t.group.anim.tweenGroup);
                        t && (this.element._animInfo.controller = t, this.element._animInfo.group = t.group)
                    }
                }
                this.eventObject.controller = null, this.eventObject.element = null, this.eventObject.keyframe = null, this.eventObject.tweenProps = null, this.eventObject = null, this.elementMetrics = null, this.group = null, this.keyframesRequiringDispatch = null;
                for (let t = 0; t < this._allKeyframes.length; t++) this._allKeyframes[t].destroy();
                this._allKeyframes = null, this._activeKeyframes = null, this.attributes = null, this.keyframes = null, this.element = null, this.tweenProps = null, this.destroyed = !0, super.destroy()
            }
            remove() {
                return this.group.removeKeyframeController(this)
            }
            updateCachedValuesFromElement() {
                if (!this._ownerIsElement) return;
                const t = this.getTargetComputedStyle(!0);
                let e = new DOMMatrix(t.getPropertyValue("transform")),
                    i = d(e),
                    n = s.KeyframeDefaults.epsilon;
                ["x", "y", "z"].forEach((t, e) => {
                    this.tweenProps[t] = new r(i.translation[e], n, !1, t)
                }), this.tweenProps.rotation = new r(i.rotation[2], n, !1, "rotation"), ["rotationX", "rotationY", "rotationZ"].forEach((t, e) => {
                    this.tweenProps[t] = new r(i.rotation[e], n, !1, t)
                }), this.tweenProps.scale = new r(i.scale[0], n, !1, "scale"), ["scaleX", "scaleY", "scaleZ"].forEach((t, e) => {
                    this.tweenProps[t] = new r(i.scale[e], n, !1, t)
                })
            }
            addKeyframe(t) {
                let e = l(t);
                if (!e) throw new Error("AnimSystem Cannot create keyframe for from options `" + t + "`");
                let i = new e(this, t);
                return i.parseOptions(t), i.id = this._allKeyframes.length, this._allKeyframes.push(i), i
            }
            needsUpdate() {
                for (let t = 0, e = this.attributes.length; t < e; t++) {
                    let e = this.attributes[t];
                    if (this.tweenProps[e].needsUpdate()) return !0
                }
                return !1
            }
            updateLocalProgress(t) {
                for (let e = 0, i = this.attributes.length; e < i; e++) {
                    let i = this.attributes[e],
                        s = this.keyframes[this.attributes[e]];
                    if (1 === s.length) {
                        s[0].updateLocalProgress(t);
                        continue
                    }
                    let r = this.getNearestKeyframeForAttribute(i, t);
                    r && r.updateLocalProgress(t)
                }
            }
            reconcile() {
                for (let t = 0, e = this.attributes.length; t < e; t++) {
                    let e = this.attributes[t],
                        i = this.getNearestKeyframeForAttribute(e, this.group.position.local);
                    i.updateLocalProgress(this.group.position.local), i.snapAtCreation && i.reconcile(e)
                }
            }
            determineActiveKeyframes(t) {
                t = t || c(Array.from(document.documentElement.classList));
                let e = this._activeKeyframes,
                    i = this.attributes,
                    s = {};
                this._activeKeyframes = [], this.attributes = [], this.keyframes = {};
                for (let e = 0; e < this._allKeyframes.length; e++) {
                    let i = this._allKeyframes[e];
                    if (i.markedForRemoval || i.hidden || !i.setEnabled(t))
                        for (let t in i.animValues) this.tweenProps[t].isActive = i.preserveState, i.preserveState && (s[t] = !0);
                    else {
                        this._activeKeyframes.push(i);
                        for (let t in i.animValues) this.keyframes[t] = this.keyframes[t] || [], this.keyframes[t].push(i), -1 === this.attributes.indexOf(t) && (s[t] = !0, this.attributes.push(t), this.tweenProps[t].isActive = !0)
                    }
                }
                this.attributes.forEach(t => this.tweenProps[t].isActive = !0), this.cssAttributes = this.attributes.filter(t => f.includes(t) || t.startsWith("--")).map(t => this.tweenProps[t]), this.domAttributes = this.attributes.filter(t => g.includes(t)).map(t => this.tweenProps[t]);
                let r = e.filter(t => -1 === this._activeKeyframes.indexOf(t));
                if (0 === r.length) return;
                let n = i.filter(t => -1 === this.attributes.indexOf(t) && !s.hasOwnProperty(t));
                if (0 !== n.length)
                    if (this.needsWrite = !0, this._ownerIsElement) p.external(() => {
                        let t = n.some(t => m.includes(t)),
                            e = t && Object.keys(s).some(t => m.includes(t));
                        t && !e && this.element.style.removeProperty("transform");
                        for (let t = 0, e = n.length; t < e; ++t) {
                            let e = n[t],
                                i = this.tweenProps[e],
                                s = i.isActive ? i.target : i.initialValue;
                            i.current = i.target = s, !i.isActive && f.includes(e) && (this.element.style[e] = null)
                        }
                        for (let t = 0, e = r.length; t < e; ++t) {
                            let e = r[t];
                            e instanceof o && !e.preserveState && e._unapply()
                        }
                    }, !0);
                    else
                        for (let t = 0, e = n.length; t < e; ++t) {
                            let e = this.tweenProps[n[t]];
                            e.current = e.target, e.isActive = !1
                        }
            }
            onDOMRead(t) {
                for (let e = 0, i = this.attributes.length; e < i; e++) {
                    let i = this.attributes[e],
                        s = this.getNearestKeyframeForAttribute(i, t);
                    s && s.onDOMRead(i) && (this.needsWrite = !0)
                }
            }
            onDOMWrite() {
                (this.needsWrite || this.needsClassUpdate || this.needsStyleUpdate) && (this.needsWrite = !1, this.onDOMWriteImp(), this.handleEventDispatch())
            }
            onDOMWriteForObject() {
                for (let t = 0, e = this.attributes.length; t < e; t++) {
                    let e = this.attributes[t];
                    this.element[e] = this.tweenProps[e].current
                }
            }
            onDOMWriteForElement(t = this.element.style) {
                this.handleStyleTransform(t);
                for (let e = 0, i = this.cssAttributes.length; e < i; e++) this.cssAttributes[e].set(t);
                for (let t = 0, e = this.domAttributes.length; t < e; t++) this.domAttributes[t].set(this.element);
                if (this.needsStyleUpdate) {
                    for (let t in this.tweenProps.targetStyles) null !== this.tweenProps.targetStyles[t] && (this.element.style[t] = this.tweenProps.targetStyles[t]), this.tweenProps.targetStyles[t] = null;
                    this.needsStyleUpdate = !1
                }
                this.needsClassUpdate && (this.tweenProps.targetClasses.add.length > 0 && this.element.classList.add.apply(this.element.classList, this.tweenProps.targetClasses.add), this.tweenProps.targetClasses.remove.length > 0 && this.element.classList.remove.apply(this.element.classList, this.tweenProps.targetClasses.remove), this.tweenProps.targetClasses.add.length = 0, this.tweenProps.targetClasses.remove.length = 0, this.needsClassUpdate = !1)
            }
            handleStyleTransform(t = this.element.style) {
                let e = this.tweenProps;
                if (e.z.isActive || e.rotationX.isActive || e.rotationY.isActive) {
                    const i = this.mat4;
                    i[0] = 1, i[1] = 0, i[2] = 0, i[3] = 0, i[4] = 0, i[5] = 1, i[6] = 0, i[7] = 0, i[8] = 0, i[9] = 0, i[10] = 1, i[11] = 0, i[12] = 0, i[13] = 0, i[14] = 0, i[15] = 1;
                    const s = e.x.current,
                        r = e.y.current,
                        n = e.z.current;
                    if (i[12] = i[0] * s + i[4] * r + i[8] * n + i[12], i[13] = i[1] * s + i[5] * r + i[9] * n + i[13], i[14] = i[2] * s + i[6] * r + i[10] * n + i[14], i[15] = i[3] * s + i[7] * r + i[11] * n + i[15], 0 !== e.rotation.current || 0 !== e.rotationZ.current) {
                        const t = (e.rotation.current || e.rotationZ.current) * y;
                        v.rotateZ(i, i, t)
                    }
                    if (0 !== e.rotationX.current) {
                        const t = e.rotationX.current * y;
                        v.rotateX(i, i, t)
                    }
                    if (0 !== e.rotationY.current) {
                        const t = e.rotationY.current * y;
                        v.rotateY(i, i, t)
                    }
                    1 === e.scale.current && 1 === e.scaleX.current && 1 === e.scaleY.current || v.scale(i, i, [e.scale.current, e.scale.current, 1]), t.transform = "matrix3d(" + i[0] + "," + i[1] + "," + i[2] + "," + i[3] + "," + i[4] + "," + i[5] + "," + i[6] + "," + i[7] + "," + i[8] + "," + i[9] + "," + i[10] + "," + i[11] + "," + i[12] + "," + i[13] + "," + i[14] + "," + i[15] + ")"
                } else if (e.x.isActive || e.y.isActive || e.rotation.isActive || e.rotationZ.isActive || e.scale.isActive || e.scaleX.isActive || e.scaleY.isActive) {
                    const i = this.mat2d;
                    i[0] = 1, i[1] = 0, i[2] = 0, i[3] = 1, i[4] = 0, i[5] = 0;
                    const s = e.x.current,
                        r = e.y.current,
                        n = i[0],
                        a = i[1],
                        o = i[2],
                        l = i[3],
                        c = i[4],
                        h = i[5];
                    if (i[0] = n, i[1] = a, i[2] = o, i[3] = l, i[4] = n * s + o * r + c, i[5] = a * s + l * r + h, 0 !== e.rotation.current || 0 !== e.rotationZ.current) {
                        const t = (e.rotation.current || e.rotationZ.current) * y,
                            s = i[0],
                            r = i[1],
                            n = i[2],
                            a = i[3],
                            o = i[4],
                            l = i[5],
                            c = Math.sin(t),
                            h = Math.cos(t);
                        i[0] = s * h + n * c, i[1] = r * h + a * c, i[2] = s * -c + n * h, i[3] = r * -c + a * h, i[4] = o, i[5] = l
                    }
                    e.scaleX.isActive || e.scaleY.isActive ? (i[0] = i[0] * e.scaleX.current, i[1] = i[1] * e.scaleX.current, i[2] = i[2] * e.scaleY.current, i[3] = i[3] * e.scaleY.current) : (i[0] = i[0] * e.scale.current, i[1] = i[1] * e.scale.current, i[2] = i[2] * e.scale.current, i[3] = i[3] * e.scale.current), t.transform = "matrix(" + i[0] + ", " + i[1] + ", " + i[2] + ", " + i[3] + ", " + i[4] + ", " + i[5] + ")"
                }
            }
            handleEventDispatch() {
                if (0 !== this.keyframesRequiringDispatch.length) {
                    for (let t = 0, e = this.keyframesRequiringDispatch.length; t < e; t++) {
                        let e = this.keyframesRequiringDispatch[t];
                        e.needsEventDispatch = !1, this.eventObject.keyframe = e, this.eventObject.pageMetrics = s.pageMetrics, this.eventObject.event = e.event, this.trigger(e.event, this.eventObject)
                    }
                    this.keyframesRequiringDispatch.length = 0
                }
                if (0 !== this._events.draw.length) {
                    this.eventObject.keyframe = null, this.eventObject.event = "draw";
                    for (let t = this._events.draw.length - 1; t >= 0; t--) this._events.draw[t](this.eventObject)
                }
            }
            updateAnimationConstraints() {
                for (let t = 0, e = this._activeKeyframes.length; t < e; t++) this._activeKeyframes[t].evaluateConstraints();
                this.attributes.forEach(t => {
                    1 !== this.keyframes[t].length && this.keyframes[t].sort(s.KeyframeComparison)
                }), this.updateDeferredPropertyValues()
            }
            refreshMetrics() {
                let t = new Set([this.element]);
                this._allKeyframes.forEach(e => e.anchors.forEach(e => t.add(e))), this.group.metrics.refreshCollection(t), this.group.keyframesDirty = !0
            }
            getTargetComputedStyle(t = !1) {
                return this._ownerIsElement ? ((t || void 0 === this.group.computedStyleCache[this.uuid]) && (this.group.computedStyleCache[this.uuid] = getComputedStyle(this.element)), this.group.computedStyleCache[this.uuid]) : null
            }
            updateDeferredPropertyValues() {
                for (let t = 0, e = this.attributes.length; t < e; t++) {
                    let e = this.attributes[t],
                        i = this.keyframes[e];
                    if (!(i[0].keyframeType > s.KeyframeTypes.InterpolationForward))
                        for (let t = 0, s = i.length; t < s; t++) {
                            let r = i[t];
                            null === r.jsonProps[e][0] && (0 === t ? r.jsonProps[e][0] = r.animValues[e][0] = this.tweenProps[e].current : r.animValues[e][0] = i[t - 1].animValues[e][1]), null === r.jsonProps[e][1] && (r.animValues[e][1] = t === s - 1 ? this.tweenProps[e].current : i[t + 1].animValues[e][0]), r.snapAtCreation && (r.jsonProps[e][0] = r.animValues[e][0], r.jsonProps[e][1] = r.animValues[e][1])
                        }
                }
            }
            getBounds(t) {
                this.boundsMin = Number.MAX_VALUE, this.boundsMax = -Number.MAX_VALUE;
                for (let e = 0, i = this.attributes.length; e < i; e++) {
                    let i = this.keyframes[this.attributes[e]];
                    for (let e = 0; e < i.length; e++) {
                        let s = i[e];
                        this.boundsMin = Math.min(s.start, this.boundsMin), this.boundsMax = Math.max(s.end, this.boundsMax), t.min = Math.min(s.start, t.min), t.max = Math.max(s.end, t.max)
                    }
                }
            }
            getNearestKeyframeForAttribute(t, e) {
                e = void 0 !== e ? e : this.group.position.local;
                let i = null,
                    s = Number.POSITIVE_INFINITY,
                    r = this.keyframes[t];
                if (void 0 === r) return null;
                let n = r.length;
                if (0 === n) return null;
                if (1 === n) return r[0];
                for (let t = 0; t < n; t++) {
                    let n = r[t];
                    if (n.isInRange(e)) {
                        i = n;
                        break
                    }
                    let a = Math.min(Math.abs(e - n.start), Math.abs(e - n.end));
                    a < s && (s = a, i = n)
                }
                return i
            }
            getAllKeyframesForAttribute(t) {
                return this.keyframes[t]
            }
            updateKeyframe(t, e) {
                t.parseOptions(e), t.evaluateConstraints(), this.group.keyframesDirty = !0, p.update(() => {
                    this.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t), this.group.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t)
                }, !0)
            }
            removeKeyframe(t) {
                return t.controller !== this ? Promise.resolve(null) : (t.markedForRemoval = !0, this.group.keyframesDirty = !0, new Promise(e => {
                    this.group.rafEmitter.executor.eventEmitter.once("before:draw", () => {
                        e(t), t.destroy();
                        let i = this._allKeyframes.indexOf(t); - 1 !== i && this._allKeyframes.splice(i, 1)
                    })
                }))
            }
            updateAnimation(t, e) {
                return this.group.gui && console.warn("KeyframeController.updateAnimation(keyframe,props) has been deprecated. Please use updateKeyframe(keyframe,props)"), this.updateKeyframe(t, e)
            }
        }
    }, {
        118: 118,
        119: 119,
        122: 122,
        129: 129,
        132: 132,
        133: 133,
        137: 137,
        138: 138,
        141: 141,
        143: 143,
        146: 146,
        152: 152,
        223: 223,
        239: 239,
        240: 240,
        241: 241,
        242: 242,
        243: 243,
        69: 69
    }],
    131: [function(t, e, i) {
        "use strict";
        const s = t(128),
            r = t(133),
            n = t(141);
        class a extends s {
            constructor(t, e) {
                super(t, e), this.keyframeType = r.KeyframeTypes.Event, this.isApplied = !1, this.hasDuration = !1, this.isCurrentlyInRange = !1
            }
            parseOptions(t) {
                t.x = void 0, t.y = void 0, t.scale = void 0, t.scaleX = void 0, t.scaleY = void 0, t.rotation = void 0, t.style = void 0, t.cssClass = void 0, t.rotation = void 0, t.opacity = void 0, t.hold = void 0, this.event = t.event, this.animValues[this.event] = [0, 0], void 0 === this.controller.tweenProps[this.event] && (this.controller.tweenProps[this.event] = new n(0, 1, !1, this.event)), super.parseOptions(t), this.keyframeType = r.KeyframeTypes.Event
            }
            updateLocalProgress(t) {
                if (this.hasDuration) {
                    let e = this.isCurrentlyInRange,
                        i = t >= this.start && t <= this.end;
                    if (e === i) return;
                    return this.isCurrentlyInRange = i, void(i && !e ? this._trigger(this.event + ":enter") : e && !i && this._trigger(this.event + ":exit"))
                }!this.isApplied && t >= this.start ? (this.isApplied = !0, this._trigger(this.event)) : this.isApplied && t < this.start && (this.isApplied = !1, this._trigger(this.event + ":reverse"))
            }
            _trigger(t) {
                this.controller.eventObject.event = t, this.controller.eventObject.keyframe = this, this.controller.trigger(t, this.controller.eventObject)
            }
            evaluateConstraints() {
                super.evaluateConstraints(), this.hasDuration = this.start !== this.end
            }
            reset(t) {
                this.isApplied = !1, this.isCurrentlyInRange = !1, super.reset(t)
            }
            onDOMRead(t) {}
            reconcile(t) {}
            evaluateInterpolationConstraints() {}
        }
        a.DATA_ATTRIBUTE = "data-anim-event", e.exports = a
    }, {
        128: 128,
        133: 133,
        141: 141
    }],
    132: [function(t, e, i) {
        "use strict";
        const s = t(142);
        e.exports = class {
            constructor(t, e, i = !1) {
                this.isGroup = i, this.group = t, this.controller = e, this.controllers = [], this.tweenProps = new s
            }
        }
    }, {
        142: 142
    }],
    133: [function(t, e, i) {
        "use strict";
        const s = {
            GUI_INSTANCE: null,
            ANIM_INSTANCE: null,
            VIEWPORT_EMITTER_ELEMENT: void 0,
            LOCAL_STORAGE_KEYS: {
                GuiPosition: "anim-ui.position",
                GroupCollapsedStates: "anim-ui.group-collapsed-states",
                scrollY: "anim-ui.scrollY-position",
                path: "anim-ui.path"
            },
            RESIZE_TIMEOUT: -1,
            BREAKPOINTS: [{
                name: "S",
                mediaQuery: "only screen and (max-width: 734px)"
            }, {
                name: "M",
                mediaQuery: "only screen and (max-width: 1068px)"
            }, {
                name: "L",
                mediaQuery: "only screen and (min-width: 1069px)"
            }],
            getBreakpoint: function() {
                for (let t = 0; t < s.BREAKPOINTS.length; t++) {
                    let e = s.BREAKPOINTS[t];
                    if (window.matchMedia(e.mediaQuery).matches) return e.name
                }
            },
            KeyframeDefaults: {
                ease: 1,
                epsilon: .05,
                preserveState: !1,
                easeFunctionString: "linear",
                easeFunction: "linear",
                hold: !1,
                snapAtCreation: !1,
                toggle: !1,
                breakpointMask: "SMLX",
                event: "",
                disabledWhen: [],
                cssClass: ""
            },
            KeyframeTypes: {
                Interpolation: 0,
                InterpolationForward: 1,
                CSSClass: 2,
                Event: 3
            },
            EVENTS: {
                ON_DOM_KEYFRAMES_CREATED: "ON_DOM_KEYFRAMES_CREATED",
                ON_DOM_GROUPS_CREATED: "ON_DOM_GROUPS_CREATED",
                ON_GROUP_CREATED: "ON_GROUP_CREATED",
                ON_KEYFRAME_UPDATED: "ON_KEYFRAME_UPDATED",
                ON_TIMELINE_START: "ON_TIMELINE_START",
                ON_TIMELINE_UPDATE: "ON_TIMELINE_UPDATE",
                ON_TIMELINE_COMPLETE: "ON_TIMELINE_COMPLETE",
                ON_CHAPTER_INITIATED: "ON_CHAPTER_INITIATED",
                ON_CHAPTER_OCCURRED: "ON_CHAPTER_OCCURRED",
                ON_CHAPTER_COMPLETED: "ON_CHAPTER_COMPLETED"
            },
            PageEvents: {
                ON_SCROLL: "ON_SCROLL",
                ON_RESIZE_IMMEDIATE: "ON_RESIZE_IMMEDIATE",
                ON_RESIZE_DEBOUNCED: "ON_RESIZE_DEBOUNCED",
                ON_BREAKPOINT_CHANGE: "ON_BREAKPOINT_CHANGE"
            },
            KeyframeJSONReservedWords: ["event", "cssClass", "style", "anchors", "start", "end", "epsilon", "easeFunction", "ease", "breakpointMask", "disabledWhen"],
            TweenProps: t(142),
            TargetValue: t(141),
            CSSTargetValue: t(134),
            pageMetrics: new function() {
                this.scrollX = 0, this.scrollY = 0, this.windowWidth = 0, this.windowHeight = 0, this.documentOffsetX = 0, this.documentOffsetY = 0, this.previousBreakpoint = "", this.breakpoint = ""
            },
            KeyframeComparison: function(t, e) {
                return t.start < e.start ? -1 : t.start > e.start ? 1 : 0
            }
        };
        e.exports = s
    }, {
        134: 134,
        141: 141,
        142: 142
    }],
    134: [function(t, e, i) {
        "use strict";
        const s = t(141),
            r = t(153);
        e.exports = class extends s {
            constructor(t, e, i, s, n = !1, a) {
                super(t, e, i, s = r(s), n, a)
            }
            set(t) {
                let e = this.current;
                this.round && (e = Math.round(e)), this.suffix && (e += this.suffix), t.setProperty(this.key, e)
            }
        }
    }, {
        141: 141,
        153: 153
    }],
    135: [function(t, e, i) {
        "use strict";
        e.exports = new class {
            constructor() {
                this.linear = function(t) {
                    return t
                }, this.easeInQuad = function(t) {
                    return t * t
                }, this.easeOutQuad = function(t) {
                    return t * (2 - t)
                }, this.easeInOutQuad = function(t) {
                    return t < .5 ? 2 * t * t : (4 - 2 * t) * t - 1
                }, this.easeInSin = function(t) {
                    return 1 + Math.sin(Math.PI / 2 * t - Math.PI / 2)
                }, this.easeOutSin = function(t) {
                    return Math.sin(Math.PI / 2 * t)
                }, this.easeInOutSin = function(t) {
                    return (1 + Math.sin(Math.PI * t - Math.PI / 2)) / 2
                }, this.easeInElastic = function(t) {
                    return 0 === t ? t : (.04 - .04 / t) * Math.sin(25 * t) + 1
                }, this.easeOutElastic = function(t) {
                    return .04 * t / --t * Math.sin(25 * t)
                }, this.easeInOutElastic = function(t) {
                    return (t -= .5) < 0 ? (.02 + .01 / t) * Math.sin(50 * t) : (.02 - .01 / t) * Math.sin(50 * t) + 1
                }, this.easeOutBack = function(t) {
                    return (t -= 1) * t * (2.70158 * t + 1.70158) + 1
                }, this.easeInCubic = function(t) {
                    return t * t * t
                }, this.easeOutCubic = function(t) {
                    return --t * t * t + 1
                }, this.easeInOutCubic = function(t) {
                    return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
                }, this.easeInQuart = function(t) {
                    return t * t * t * t
                }, this.easeOutQuart = function(t) {
                    return 1 - --t * t * t * t
                }, this.easeInOutQuart = function(t) {
                    return t < .5 ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t
                }, this.easeInQuint = function(t) {
                    return t * t * t * t * t
                }, this.easeOutQuint = function(t) {
                    return 1 + --t * t * t * t * t
                }, this.easeInOutQuint = function(t) {
                    return t < .5 ? 16 * t * t * t * t * t : 1 + 16 * --t * t * t * t * t
                }
            }
        }
    }, {}],
    136: [function(t, e, i) {
        "use strict";
        const s = t(133),
            r = (t, e) => null == t ? e : t;
        class n {
            constructor(t) {
                this.top = 0, this.bottom = 0, this.left = 0, this.right = 0, this.height = 0, this.width = 0
            }
            toString() {
                return "top:".concat(this.top, ", bottom:").concat(this.bottom, ", left:").concat(this.left, ", right:").concat(this.right, ", height:").concat(this.height, ", width:").concat(this.width)
            }
            toObject() {
                return {
                    top: this.top,
                    bottom: this.bottom,
                    left: this.left,
                    right: this.right,
                    height: this.height,
                    width: this.width
                }
            }
        }
        e.exports = class {
            constructor() {
                this.clear()
            }
            clear() {
                this._metrics = new WeakMap
            }
            destroy() {
                this._metrics = null
            }
            add(t) {
                let e = this._metrics.get(t);
                if (e) return e;
                let i = new n(t);
                return this._metrics.set(t, i), this._refreshMetrics(t, i)
            }
            get(t) {
                return this._metrics.get(t)
            }
            refreshCollection(t) {
                t.forEach(t => this._refreshMetrics(t, null))
            }
            refreshMetrics(t) {
                return this._refreshMetrics(t)
            }
            _refreshMetrics(t, e) {
                if (e = e || this._metrics.get(t), !(t instanceof Element)) return e.width = r(t.width, 0), e.height = r(t.height, 0), e.top = r(t.top, r(t.y, 0)), e.left = r(t.left, r(t.x, 0)), e.right = e.left + e.width, e.bottom = e.top + e.height, e;
                if (void 0 === t.offsetWidth) {
                    let i = t.getBoundingClientRect();
                    return e.width = i.width, e.height = i.height, e.top = s.pageMetrics.scrollY + i.top, e.left = s.pageMetrics.scrollX + i.left, e.right = e.left + e.width, e.bottom = e.top + e.height, e
                }
                e.width = t.offsetWidth, e.height = t.offsetHeight, e.top = s.pageMetrics.documentOffsetY, e.left = s.pageMetrics.documentOffsetX;
                let i = t;
                for (; i;) e.top += i.offsetTop, e.left += i.offsetLeft, i = i.offsetParent;
                return e.right = e.left + e.width, e.bottom = e.top + e.height, e
            }
        }
    }, {
        133: 133
    }],
    137: [function(t, e, i) {
        "use strict";
        e.exports = class {
            constructor(t) {
                this.controller = t, this.element = this.controller.element, this.keyframe = null, this.event = "", this.tweenProps = this.controller.tweenProps
            }
        }
    }, {}],
    138: [function(t, e, i) {
        "use strict";
        const s = t(133),
            r = t(128),
            n = t(131),
            a = t(129),
            o = function(t) {
                for (let e in t) {
                    let i = t[e];
                    if (-1 === s.KeyframeJSONReservedWords.indexOf(e) && Array.isArray(i)) return !0
                }
                return !1
            };
        e.exports = function(t) {
            if (void 0 !== t.cssClass || void 0 !== t.style) {
                if (o(t)) throw "CSS Keyframes cannot tween values, please use multiple keyframes instead";
                return a
            }
            if (o(t)) return r;
            if (t.event) return n;
            throw delete t.anchors, "Could not determine tween type based on ".concat(JSON.stringify(t))
        }
    }, {
        128: 128,
        129: 129,
        131: 131,
        133: 133
    }],
    139: [function(t, e, i) {
        "use strict";
        e.exports = class {
            constructor() {
                this.local = 0, this.localUnclamped = 0, this.lastPosition = 0
            }
        }
    }, {}],
    140: [function(t, e, i) {
        "use strict";
        const {
            map: s
        } = t(224), r = {};
        class n {
            constructor(t, e, i, s) {
                this.mass = t, this.stiffness = e, this.damping = i, this.initialVelocity = s, this.m_w0 = Math.sqrt(this.stiffness / this.mass), this.m_zeta = this.damping / (2 * Math.sqrt(this.stiffness * this.mass)), this.m_zeta < 1 ? (this.m_wd = this.m_w0 * Math.sqrt(1 - this.m_zeta * this.m_zeta), this.m_A = 1, this.m_B = (this.m_zeta * this.m_w0 - this.initialVelocity) / this.m_wd) : (this.m_wd = 0, this.m_A = 1, this.m_B = -this.initialVelocity + this.m_w0)
            }
            solve(t) {
                return 1 - (t = this.m_zeta < 1 ? Math.exp(-t * this.m_zeta * this.m_w0) * (this.m_A * Math.cos(this.m_wd * t) + this.m_B * Math.sin(this.m_wd * t)) : (this.m_A + this.m_B * t) * Math.exp(-t * this.m_w0))
            }
        }
        const a = /\d*\.?\d+/g;
        n.fromCSSString = function(t) {
            let e = t.match(a);
            if (4 !== e.length) throw "SpringEasing could not convert ".concat(cssString, " to spring params");
            let i = e.map(Number),
                o = new n(...i);
            const l = o.solve.bind(o);
            let c = 0;
            let h = function() {
                if (r[t]) return r[t];
                let e, i = 0;
                for (;;) {
                    c += 1 / 6;
                    if (1 === l(c)) {
                        if (i++, i >= 16) {
                            e = c * (1 / 6);
                            break
                        }
                    } else i = 0
                }
                return r[t] = e, r[t]
            }();
            return function(t) {
                return 0 === t || 1 === t ? t : l(s(t, 0, 1, 0, h))
            }
        }, e.exports = n
    }, {
        224: 224
    }],
    141: [function(t, e, i) {
        "use strict";
        e.exports = class {
            constructor(t, e, i, s, r = !1, n) {
                this.epsilon = parseFloat(e), this.snapAtCreation = i, this.initialValue = t, this.target = t, this.current = t, this.previousValue = t, this.isActive = !1, this.key = s, this.round = r, this.suffix = n
            }
            update(t, e, i) {
                this.target = t[0] + e * (t[1] - t[0]), this.previousValue = this.current, this.current += (this.target - this.current) * i;
                let s = this.delta(this.current, this.target);
                return s < this.epsilon && (this.current = this.target, s = 0), s > this.epsilon || 0 === s && this.previousValue !== this.current
            }
            reconcile(t, e) {
                return this.initialValue = t[0], this.update(t, e, 1)
            }
            needsUpdate() {
                return this.delta(this.current, this.target) > this.epsilon
            }
            delta(t, e) {
                return Math.abs(t - e)
            }
            calculateEpsilon(t, e) {
                if (t.epsilon) return void(this.epsilon = t.epsilon);
                let i = this.delta(e[0], e[1]),
                    s = Math.min(.001 * i, this.epsilon, .05);
                this.epsilon = Math.max(s, .001)
            }
            set(t) {
                let e = this.current;
                this.round && (e = Math.round(e)), this.suffix && (e += this.suffix), t[this.key] = e
            }
        }
    }, {}],
    142: [function(t, e, i) {
        "use strict";
        e.exports = class {}
    }, {}],
    143: [function(t, e, i) {
        "use strict";
        e.exports = () => Math.random().toString(16).slice(-4)
    }, {}],
    144: [function(t, e, i) {
        "use strict";
        const s = Math.abs;
        class r {
            constructor(t, e, i, s) {
                this.cp = new Float32Array(6), this.cp[0] = 3 * t, this.cp[1] = 3 * (i - t) - this.cp[0], this.cp[2] = 1 - this.cp[0] - this.cp[1], this.cp[3] = 3 * e, this.cp[4] = 3 * (s - e) - this.cp[3], this.cp[5] = 1 - this.cp[3] - this.cp[4]
            }
            sampleCurveX(t) {
                return ((this.cp[2] * t + this.cp[1]) * t + this.cp[0]) * t
            }
            sampleCurveY(t) {
                return ((this.cp[5] * t + this.cp[4]) * t + this.cp[3]) * t
            }
            sampleCurveDerivativeX(t) {
                return (3 * this.cp[2] * t + 2 * this.cp[1]) * t + this.cp[0]
            }
            solveCurveX(t) {
                var e, i, r, n, a, o;
                for (r = t, o = 0; o < 5; o++) {
                    if (n = this.sampleCurveX(r) - t, s(n) < 1e-5) return r;
                    if (a = this.sampleCurveDerivativeX(r), s(a) < 1e-5) break;
                    r -= n / a
                }
                if ((r = t) < (e = 0)) return e;
                if (r > (i = 1)) return i;
                for (; e < i;) {
                    if (n = this.sampleCurveX(r), s(n - t) < 1e-5) return r;
                    t > n ? e = r : i = r, r = .5 * (i - e) + e
                }
                return r
            }
            solve(t) {
                return this.sampleCurveY(this.solveCurveX(t))
            }
        }
        const n = /\d*\.?\d+/g;
        r.fromCSSString = function(t) {
            let e = t.match(n);
            if (4 !== e.length) throw "UnitBezier could not convert ".concat(t, " to cubic-bezier");
            let i = e.map(Number),
                s = new r(i[0], i[1], i[2], i[3]);
            return s.solve.bind(s)
        }, e.exports = r
    }, {}],
    145: [function(t, e, i) {
        "use strict";
        e.exports = class {
            constructor(t, e) {
                this.a = t.top - e, this.a < 0 && (this.a = t.top), this.b = t.top, this.d = t.bottom, this.c = Math.max(this.d - e, this.b)
            }
        }
    }, {}],
    146: [function(t, e, i) {
        "use strict";
        let s = ["borderRadius", "bottom", "fontSize", "fontWeight", "height", "left", "lineHeight", "marginBottom", "marginLeft", "marginRight", "marginTop", "maxHeight", "maxWidth", "opacity", "paddingBottom", "paddingLeft", "paddingRight", "paddingTop", "right", "top", "width", "zIndex", "strokeDashoffset"];
        s.push(...s.map(t => t.replace(/[A-Z]/g, t => "-" + t.toLowerCase())));
        e.exports = {
            transformAttributes: ["x", "y", "z", "scale", "scaleX", "scaleY", "rotation", "rotationX", "rotationY", "rotationZ"],
            cssAttributes: s,
            domAttributes: ["scrollLeft", "scrollTop", "scrollBy", "scrollTo", "currentTime"],
            suffixFreeAttributes: ["opacity", "z-index", "font-weight", "zIndex", "fontWeight", "scrollLeft", "scrollTop", "scrollBy", "scrollTo", "currentTime"]
        }
    }, {}],
    147: [function(t, e, i) {
        "use strict";
        const s = t(148),
            r = new(t(136));
        class n {
            constructor(t) {
                this.group = t, this.data = {
                    target: null,
                    anchors: null,
                    metrics: this.group.metrics
                }
            }
            parseArray(t, e) {
                return [this.parseExpression(t, e[0]), this.parseExpression(t, e[1])]
            }
            parseExpression(t, e) {
                if (!e) return null;
                if ("number" == typeof e) return e;
                if ("string" != typeof e) throw "Expression must be a string, received ".concat(typeof e, ": ").concat(e);
                return this.data.target = t.controller.element, this.data.anchors = t.anchors, this.data.keyframe = t.keyframe, this.group.anim.plugins.parser.reduce((i, s) => i || s.parseExpression.call(this, t, e), null) || n._parse(e, this.data)
            }
            parseTimeValue(t, e) {
                if ("number" == typeof e) return e;
                let i = this.group.expressionParser.parseExpression(t, e);
                return this.group.convertScrollPositionToTValue(i)
            }
            destroy() {
                this.group = null
            }
            static parse(t, e) {
                return (e = e || {}) && (r.clear(), e.target && r.add(e.target), e.anchors && e.anchors.forEach(t => r.add(t))), e.metrics = r, n._parse(t, e)
            }
            static _parse(t, e) {
                return s.Parse(t).execute(e)
            }
        }
        n.programs = s.programs, "undefined" != typeof window && (window.ExpressionParser = n), e.exports = n
    }, {
        136: 136,
        148: 148
    }],
    148: [function(t, e, i) {
        "use strict";
        const s = t(133),
            r = t(224),
            n = {},
            a = {
                smoothstep: (t, e, i) => (i = a.clamp((i - t) / (e - t), 0, 1)) * i * (3 - 2 * i),
                deg: t => 180 * t / Math.PI,
                rad: t => t * Math.PI / 180,
                random: (t, e) => Math.random() * (e - t) + t,
                atan: Math.atan2
            };
        Object.getOwnPropertyNames(Math).forEach(t => a[t] ? null : a[t.toLowerCase()] = Math[t]), Object.getOwnPropertyNames(r).forEach(t => a[t] ? null : a[t.toLowerCase()] = r[t]);
        let o = null;
        const l = "a",
            c = "ALPHA",
            h = "(",
            u = ")",
            d = "PLUS",
            p = "MINUS",
            m = "MUL",
            f = "DIV",
            g = "INTEGER_CONST",
            y = "FLOAT_CONST",
            v = ",",
            b = "EOF",
            _ = {
                NUMBERS: /\d|\d\.\d/,
                DIGIT: /\d/,
                OPERATOR: /[-+*/]/,
                PAREN: /[()]/,
                WHITE_SPACE: /\s/,
                ALPHA: /[a-zA-Z]|%/,
                ALPHANUMERIC: /[a-zA-Z0-9]/,
                OBJECT_UNIT: /^(t|l|b|r|%w|%h|%|h|w)$/,
                GLOBAL_METRICS_UNIT: /^(px|vh|vw)$/,
                ANY_UNIT: /^(t|l|b|r|%w|%h|%|h|w|px|vh|vw)$/,
                MATH_FUNCTION: new RegExp("\\b(".concat(Object.keys(a).join("|"), ")\\b"), "i")
            },
            E = function(t, e, i, s = "") {
                let r = e.slice(Math.max(i, 0), Math.min(e.length, i + 3)),
                    n = new Error("Expression Error. ".concat(t, ' in expression "').concat(e, '", near "').concat(r, '"'));
                throw console.error(n.message, o ? o.keyframe || o.target : ""), n
            },
            x = {
                round: 1,
                clamp: 3,
                lerp: 3,
                random: 2,
                atan: 2,
                floor: 1,
                ceil: 1,
                abs: 1,
                cos: 1,
                sin: 1,
                smoothstep: 3,
                rad: 1,
                deg: 1,
                pow: 2,
                calc: 1
            };
        class w {
            constructor(t, e) {
                this.type = t, this.value = e
            }
        }
        w.ONE = new w("100", 100), w.EOF = new w(b, null);
        class I {
            constructor(t) {
                this.type = t
            }
        }
        class A extends I {
            constructor(t, e) {
                super("UnaryOp"), this.token = this.op = t, this.expr = e
            }
        }
        class T extends I {
            constructor(t, e, i) {
                super("BinOp"), this.left = t, this.op = e, this.right = i
            }
        }
        class O extends I {
            constructor(t, e) {
                if (super("MathOp"), this.op = t, this.list = e, x[t.value] && e.length !== x[t.value]) throw new Error("Incorrect number of arguments for '".concat(t.value, "'. Received ").concat(e.length, ", expected ").concat(x[t.value]))
            }
        }
        class C extends I {
            constructor(t) {
                super("Num"), this.token = t, this.value = t.value
            }
        }
        class S extends I {
            constructor(t, e, i) {
                super("RefValue"), this.num = t, this.ref = e, this.unit = i
            }
        }
        class P extends I {
            constructor(t, e) {
                super("CSSValue"), this.ref = t, this.propertyName = e
            }
        }
        class D extends I {
            constructor(t, e) {
                super("PropValue"), this.ref = t, this.propertyName = e
            }
        }
        class N {
            constructor(t) {
                let e;
                for (this.text = t, this.pos = 0, this.char = this.text[this.pos], this.tokens = [];
                    (e = this.getNextToken()) && e !== w.EOF;) this.tokens.push(e);
                this.tokens.push(e)
            }
            advance() {
                this.char = this.text[++this.pos]
            }
            skipWhiteSpace() {
                for (; null != this.char && _.WHITE_SPACE.test(this.char);) this.advance()
            }
            name() {
                let t = "";
                for (; null != this.char && _.ALPHA.test(this.char);) t += this.char, this.advance();
                return new w(c, t)
            }
            number() {
                let t = "";
                for ("." === this.char && (t += this.char, this.advance()); null != this.char && _.DIGIT.test(this.char);) t += this.char, this.advance();
                if (null != this.char && "." === this.char)
                    for (t.includes(".") && E("Number appears to contain 2 decimal points", this.text, this.pos), t += this.char, this.advance(); null != this.char && _.DIGIT.test(this.char);) t += this.char, this.advance();
                return "." === t && E("Attempted to parse a number, but found only a decimal point", this.text, this.pos), t.includes(".") ? new w(y, parseFloat(t)) : new w(g, parseInt(t))
            }
            getNextToken() {
                for (; null != this.char;)
                    if (_.WHITE_SPACE.test(this.char)) this.skipWhiteSpace();
                    else {
                        if ("." === this.char || _.DIGIT.test(this.char)) return this.number();
                        if ("," === this.char) return this.advance(), new w(v, ",");
                        if (_.OPERATOR.test(this.char)) {
                            let t = "",
                                e = this.char;
                            switch (e) {
                                case "+":
                                    t = d;
                                    break;
                                case "-":
                                    t = p;
                                    break;
                                case "*":
                                    t = m;
                                    break;
                                case "/":
                                    t = f
                            }
                            return this.advance(), new w(t, e)
                        }
                        if (_.PAREN.test(this.char)) {
                            let t = "",
                                e = this.char;
                            switch (e) {
                                case "(":
                                    t = h;
                                    break;
                                case ")":
                                    t = u
                            }
                            return this.advance(), new w(t, e)
                        }
                        if (_.ALPHA.test(this.char)) return this.name();
                        E('Unexpected character "'.concat(this.char, '"'), this.text, this.pos)
                    } return w.EOF
            }
        }
        class k {
            constructor(t) {
                this.lexer = t, this.pos = 0
            }
            get currentToken() {
                return this.lexer.tokens[this.pos]
            }
            error(t, e = "") {
                E(t, e, this.lexer.text, this.pos)
            }
            consume(t) {
                let e = this.currentToken;
                return e.type === t ? this.pos += 1 : this.error("Invalid token ".concat(this.currentToken.value, ", expected ").concat(t)), e
            }
            consumeList(t) {
                t.includes(this.currentToken) ? this.pos += 1 : this.error("Invalid token ".concat(this.currentToken.value, ", expected ").concat(tokenType))
            }
            expr() {
                let t = this.term();
                for (; this.currentToken.type === d || this.currentToken.type === p;) {
                    const e = this.currentToken;
                    switch (e.value) {
                        case "+":
                            this.consume(d);
                            break;
                        case "-":
                            this.consume(p)
                    }
                    t = new T(t, e, this.term())
                }
                return t
            }
            term() {
                let t = this.factor();
                for (; this.currentToken.type === m || this.currentToken.type === f;) {
                    const e = this.currentToken;
                    switch (e.value) {
                        case "*":
                            this.consume(m);
                            break;
                        case "/":
                            this.consume(f)
                    }
                    t = new T(t, e, this.factor())
                }
                return t
            }
            factor() {
                if (this.currentToken.type === d) return new A(this.consume(d), this.factor());
                if (this.currentToken.type === p) return new A(this.consume(p), this.factor());
                if (this.currentToken.type === g || this.currentToken.type === y) {
                    let t = new C(this.currentToken);
                    if (this.pos += 1, _.OPERATOR.test(this.currentToken.value) || this.currentToken.type === u || this.currentToken.type === v || this.currentToken.type === b) return t;
                    if (this.currentToken.type === c && this.currentToken.value === l) return this.consume(c), new S(t, this.anchorIndex(), this.unit(_.ANY_UNIT));
                    if (this.currentToken.type === c) return "%a" === this.currentToken.value && this.error("%a is invalid, try removing the %"), new S(t, null, this.unit());
                    this.error("Expected a scaling unit type", "Such as 'h' / 'w'")
                } else {
                    if (_.OBJECT_UNIT.test(this.currentToken.value)) return new S(new C(w.ONE), null, this.unit());
                    if (this.currentToken.value === l) {
                        this.consume(c);
                        const t = this.anchorIndex();
                        if (_.OBJECT_UNIT.test(this.currentToken.value)) return new S(new C(w.ONE), t, this.unit())
                    } else if (this.currentToken.type === c) {
                        if ("calc" === this.currentToken.value) return this.consume(c), this.expr();
                        if ("css" === this.currentToken.value || "var" === this.currentToken.value || "prop" === this.currentToken.value) {
                            const t = "prop" !== this.currentToken.value ? P : D;
                            this.consume(c), this.consume(h);
                            const e = this.propertyName();
                            let i = null;
                            return this.currentToken.type === v && (this.consume(v), this.consume(c), i = this.anchorIndex()), this.consume(u), new t(i, e)
                        }
                        if (_.MATH_FUNCTION.test(this.currentToken.value)) {
                            const t = this.currentToken.value.toLowerCase();
                            if ("number" == typeof a[t]) return this.consume(c), new C(new w(c, a[t]));
                            const e = w[t] || new w(t, t),
                                i = [];
                            this.consume(c), this.consume(h);
                            let s = null;
                            do {
                                this.currentToken.value === v && this.consume(v), s = this.expr(), i.push(s)
                            } while (this.currentToken.value === v);
                            return this.consume(u), new O(e, i)
                        }
                    } else if (this.currentToken.type === h) {
                        this.consume(h);
                        let t = this.expr();
                        return this.consume(u), t
                    }
                }
                this.error("Unexpected token ".concat(this.currentToken.value))
            }
            propertyName() {
                let t = "";
                for (; this.currentToken.type === c || this.currentToken.type === p;) t += this.currentToken.value, this.pos += 1;
                return t
            }
            unit(t = _.ANY_UNIT) {
                const e = this.currentToken;
                if (e.type === c && t.test(e.value)) return this.consume(c), new w(c, e.value = e.value.replace(/%(h|w)/, "$1").replace("%", "h"));
                this.error("Expected unit type")
            }
            anchorIndex() {
                const t = this.currentToken;
                if (t.type === g) return this.consume(g), new C(t);
                this.error("Invalid anchor reference", ". Should be something like a0, a1, a2")
            }
            parse() {
                const t = this.expr();
                return this.currentToken !== w.EOF && this.error("Unexpected token ".concat(this.currentToken.value)), t
            }
        }
        class F {
            constructor(t) {
                this.parser = t, this.root = t.parse()
            }
            visit(t) {
                let e = this[t.type];
                if (!e) throw new Error("No visit method named, ".concat(e));
                return e.call(this, t)
            }
            BinOp(t) {
                switch (t.op.type) {
                    case d:
                        return this.visit(t.left) + this.visit(t.right);
                    case p:
                        return this.visit(t.left) - this.visit(t.right);
                    case m:
                        return this.visit(t.left) * this.visit(t.right);
                    case f:
                        return this.visit(t.left) / this.visit(t.right)
                }
            }
            RefValue(t) {
                let e = this.unwrapReference(t),
                    i = t.unit.value,
                    r = t.num.value;
                const n = o.metrics.get(e);
                switch (i) {
                    case "h":
                        return .01 * r * n.height;
                    case "t":
                        return .01 * r * n.top;
                    case "vh":
                        return .01 * r * s.pageMetrics.windowHeight;
                    case "vw":
                        return .01 * r * s.pageMetrics.windowWidth;
                    case "px":
                        return r;
                    case "w":
                        return .01 * r * n.width;
                    case "b":
                        return .01 * r * n.bottom;
                    case "l":
                        return .01 * r * n.left;
                    case "r":
                        return .01 * r * n.right
                }
            }
            PropValue(t) {
                return (null === t.ref ? o.target : o.anchors[t.ref.value])[t.propertyName]
            }
            CSSValue(t) {
                let e = this.unwrapReference(t);
                const i = getComputedStyle(e).getPropertyValue(t.propertyName);
                return "" === i ? 0 : F.Parse(i).execute(o)
            }
            Num(t) {
                return t.value
            }
            UnaryOp(t) {
                return t.op.type === d ? +this.visit(t.expr) : t.op.type === p ? -this.visit(t.expr) : void 0
            }
            MathOp(t) {
                let e = t.list.map(t => this.visit(t));
                return a[t.op.value].apply(null, e)
            }
            unwrapReference(t) {
                return null === t.ref ? o.target : (t.ref.value >= o.anchors.length && console.error("Not enough anchors supplied for expression ".concat(this.parser.lexer.text), o.target), o.anchors[t.ref.value])
            }
            execute(t) {
                return o = t, this.visit(this.root)
            }
            static Parse(t) {
                return n[t] || (n[t] = new F(new k(new N(t))))
            }
        }
        F.programs = n, e.exports = F
    }, {
        133: 133,
        224: 224
    }],
    149: [function(t, e, i) {
        "use strict";
        const s = t(69).EventEmitterMicro,
            r = t(224),
            n = t(152),
            a = t(133),
            o = t(132),
            l = t(139),
            c = t(145),
            h = t(136),
            u = t(147),
            d = t(130),
            p = {};
        "undefined" != typeof window && (p.create = t(111), p.update = t(122), p.draw = t(118));
        let m = 0;
        e.exports = class extends s {
            constructor(t, e) {
                super(), this.anim = e, this.element = t, this.name = this.name || t.getAttribute("data-anim-scroll-group"), this.isEnabled = !0, this.position = new l, this.metrics = new h, this.metrics.add(this.element), this.expressionParser = new u(this), this.boundsMin = 0, this.boundsMax = 0, this.timelineUpdateRequired = !1, this._keyframesDirty = !1, this.viewableRange = this.createViewableRange(), this.defaultEase = a.KeyframeDefaults.ease, this.keyframeControllers = [], this.updateProgress(this.getPosition()), this.onDOMRead = this.onDOMRead.bind(this), this.onDOMWrite = this.onDOMWrite.bind(this), this.gui = null, this.computedStyleCache = {}, this.destroyed = !1, this.finalizeInit()
            }
            finalizeInit() {
                this.element._animInfo = new o(this, null, !0), this.setupRAFEmitter()
            }
            destroy() {
                this.destroyed = !0, this.expressionParser.destroy(), this.expressionParser = null;
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].destroy();
                this.keyframeControllers = null, this.position = null, this.viewableRange = null, this.gui && (this.gui.destroy(), this.gui = null), this.metrics.destroy(), this.metrics = null, this.rafEmitter.destroy(), this.rafEmitter = null, this.anim = null, this.element._animInfo && this.element._animInfo.group === this && (this.element._animInfo.group = null, this.element._animInfo = null), this.element = null, this.isEnabled = !1, super.destroy()
            }
            removeKeyframeController(t) {
                return this.keyframeControllers.includes(t) ? (t._allKeyframes.forEach(t => t.markedForRemoval = !0), this.keyframesDirty = !0, new Promise(e => {
                    p.draw(() => {
                        const i = this.keyframeControllers.indexOf(t); - 1 !== i ? (this.keyframeControllers.splice(i, 1), t.onDOMWrite(), t.destroy(), this.gui && this.gui.create(), e()) : e()
                    })
                })) : Promise.resolve()
            }
            remove() {
                return this.anim.removeGroup(this)
            }
            clear() {
                return Promise.all(this.keyframeControllers.map(t => this.removeKeyframeController(t)))
            }
            setupRAFEmitter(t) {
                this.rafEmitter && this.rafEmitter.destroy(), this.rafEmitter = t || new p.create, this.rafEmitter.on("update", this.onDOMRead), this.rafEmitter.on("draw", this.onDOMWrite), this.rafEmitter.once("external", () => this.reconcile())
            }
            requestDOMChange() {
                return !!this.isEnabled && this.rafEmitter.run()
            }
            onDOMRead() {
                this.keyframesDirty && this.onKeyframesDirty();
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].onDOMRead(this.position.local)
            }
            onDOMWrite() {
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].onDOMWrite();
                this.needsUpdate() && this.requestDOMChange(), this.computedStyleCache = {}
            }
            needsUpdate() {
                if (this._keyframesDirty) return !0;
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                    if (this.keyframeControllers[t].needsUpdate()) return !0;
                return !1
            }
            addKeyframe(t, e) {
                let i = this.getControllerForTarget(t);
                return null === i && (i = new d(this, t), this.keyframeControllers.push(i)), this.keyframesDirty = !0, i.addKeyframe(e)
            }
            addEvent(t, e) {
                e.event = e.event || "Generic-Event-Name-" + m++;
                let i = void 0 !== e.end && e.end !== e.start;
                const s = this.addKeyframe(t, e);
                return i ? (e.onEnterOnce && s.controller.once(e.event + ":enter", e.onEnterOnce), e.onExitOnce && s.controller.once(e.event + ":exit", e.onExitOnce), e.onEnter && s.controller.on(e.event + ":enter", e.onEnter), e.onExit && s.controller.on(e.event + ":exit", e.onExit)) : (e.onEventOnce && s.controller.once(e.event, e.onEventOnce), e.onEventReverseOnce && s.controller.once(e.event + ":reverse", e.onEventReverseOnce), e.onEvent && s.controller.on(e.event, e.onEvent), e.onEventReverse && s.controller.on(e.event + ":reverse", e.onEventReverse)), s
            }
            forceUpdate({
                waitForNextUpdate: t = !0,
                silent: e = !1
            } = {}) {
                this.isEnabled && (this.refreshMetrics(), this.timelineUpdateRequired = !0, t ? this.keyframesDirty = !0 : this.onKeyframesDirty({
                    silent: e
                }))
            }
            onKeyframesDirty({
                silent: t = !1
            } = {}) {
                this.determineActiveKeyframes(), this.keyframesDirty = !1, this.metrics.refreshMetrics(this.element), this.viewableRange = this.createViewableRange();
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].updateAnimationConstraints();
                this.updateBounds(), this.updateProgress(this.getPosition()), t || this.updateTimeline(), this.gui && this.gui.create()
            }
            refreshMetrics() {
                let t = new Set([this.element]);
                this.keyframeControllers.forEach(e => {
                    t.add(e.element), e._allKeyframes.forEach(e => e.anchors.forEach(e => t.add(e)))
                }), this.metrics.refreshCollection(t), this.viewableRange = this.createViewableRange()
            }
            reconcile() {
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].reconcile()
            }
            determineActiveKeyframes(t) {
                t = t || n(Array.from(document.documentElement.classList));
                for (let e = 0, i = this.keyframeControllers.length; e < i; e++) this.keyframeControllers[e].determineActiveKeyframes(t)
            }
            updateBounds() {
                if (0 === this.keyframeControllers.length) return this.boundsMin = 0, void(this.boundsMax = 0);
                let t = {
                    min: Number.POSITIVE_INFINITY,
                    max: Number.NEGATIVE_INFINITY
                };
                for (let e = 0, i = this.keyframeControllers.length; e < i; e++) this.keyframeControllers[e].getBounds(t);
                let e = this.convertTValueToScrollPosition(t.min),
                    i = this.convertTValueToScrollPosition(t.max);
                i - e < a.pageMetrics.windowHeight ? (t.min = this.convertScrollPositionToTValue(e - .5 * a.pageMetrics.windowHeight), t.max = this.convertScrollPositionToTValue(i + .5 * a.pageMetrics.windowHeight)) : (t.min -= .001, t.max += .001), this.boundsMin = t.min, this.boundsMax = t.max, this.timelineUpdateRequired = !0
            }
            createViewableRange() {
                return new c(this.metrics.get(this.element), a.pageMetrics.windowHeight)
            }
            _onBreakpointChange(t, e) {
                this.keyframesDirty = !0, this.determineActiveKeyframes()
            }
            updateProgress(t) {
                this.hasDuration() ? (this.position.localUnclamped = (t - this.viewableRange.a) / (this.viewableRange.d - this.viewableRange.a), this.position.local = r.clamp(this.position.localUnclamped, this.boundsMin, this.boundsMax)) : this.position.local = this.position.localUnclamped = 0
            }
            performTimelineDispatch() {
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) this.keyframeControllers[t].updateLocalProgress(this.position.local);
                this.trigger(a.EVENTS.ON_TIMELINE_UPDATE, this.position.local), this.trigger("update", this.position.local), this.timelineUpdateRequired = !1, this.position.lastPosition !== this.position.local && (this.position.lastPosition <= this.boundsMin && this.position.localUnclamped > this.boundsMin ? (this.trigger(a.EVENTS.ON_TIMELINE_START, this), this.trigger("start", this)) : this.position.lastPosition >= this.boundsMin && this.position.localUnclamped < this.boundsMin ? (this.trigger(a.EVENTS.ON_TIMELINE_START + ":reverse", this), this.trigger("start:reverse", this)) : this.position.lastPosition <= this.boundsMax && this.position.localUnclamped >= this.boundsMax ? (this.trigger(a.EVENTS.ON_TIMELINE_COMPLETE, this), this.trigger("complete", this)) : this.position.lastPosition >= this.boundsMax && this.position.localUnclamped < this.boundsMax && (this.trigger(a.EVENTS.ON_TIMELINE_COMPLETE + ":reverse", this), this.trigger("complete:reverse", this))), null !== this.gui && this.gui.onScrollUpdate(this.position)
            }
            updateTimeline(t) {
                if (!this.isEnabled) return !1;
                void 0 === t && (t = this.getPosition()), this.updateProgress(t);
                let e = this.position.lastPosition === this.boundsMin || this.position.lastPosition === this.boundsMax,
                    i = this.position.localUnclamped === this.boundsMin || this.position.localUnclamped === this.boundsMax;
                if (!this.timelineUpdateRequired && e && i && this.position.lastPosition === t) return void(this.position.local = this.position.localUnclamped);
                if (this.timelineUpdateRequired || this.position.localUnclamped > this.boundsMin && this.position.localUnclamped < this.boundsMax) return this.performTimelineDispatch(), this.requestDOMChange(), void(this.position.lastPosition = this.position.localUnclamped);
                let s = this.position.lastPosition > this.boundsMin && this.position.lastPosition < this.boundsMax,
                    r = this.position.localUnclamped <= this.boundsMin || this.position.localUnclamped >= this.boundsMax;
                if (s && r) return this.performTimelineDispatch(), this.requestDOMChange(), void(this.position.lastPosition = this.position.localUnclamped);
                const n = this.position.lastPosition < this.boundsMin && this.position.localUnclamped > this.boundsMax,
                    a = this.position.lastPosition > this.boundsMax && this.position.localUnclamped < this.boundsMax;
                (n || a) && (this.performTimelineDispatch(), this.requestDOMChange(), this.position.lastPosition = this.position.localUnclamped), null !== this.gui && this.gui.onScrollUpdate(this.position)
            }
            _onScroll(t) {
                this.updateTimeline(t)
            }
            convertScrollPositionToTValue(t) {
                return this.hasDuration() ? r.map(t, this.viewableRange.a, this.viewableRange.d, 0, 1) : 0
            }
            convertTValueToScrollPosition(t) {
                return this.hasDuration() ? r.map(t, 0, 1, this.viewableRange.a, this.viewableRange.d) : 0
            }
            hasDuration() {
                return this.viewableRange.a !== this.viewableRange.d
            }
            getPosition() {
                return a.pageMetrics.scrollY
            }
            getControllerForTarget(t) {
                if (!t._animInfo || !t._animInfo.controllers) return null;
                if (t._animInfo.controller && t._animInfo.controller.group === this) return t._animInfo.controller;
                const e = t._animInfo.controllers;
                for (let t = 0, i = e.length; t < i; t++)
                    if (e[t].group === this) return e[t];
                return null
            }
            trigger(t, e) {
                if (void 0 !== this._events[t])
                    for (let i = this._events[t].length - 1; i >= 0; i--) void 0 !== e ? this._events[t][i](e) : this._events[t][i]()
            }
            set keyframesDirty(t) {
                this._keyframesDirty = t, this._keyframesDirty && this.requestDOMChange()
            }
            get keyframesDirty() {
                return this._keyframesDirty
            }
        }
    }, {
        111: 111,
        118: 118,
        122: 122,
        130: 130,
        132: 132,
        133: 133,
        136: 136,
        139: 139,
        145: 145,
        147: 147,
        152: 152,
        224: 224,
        69: 69
    }],
    150: [function(t, e, i) {
        "use strict";
        const s = t(149),
            r = t(127),
            n = t(224);
        let a = 0;
        const o = {};
        "undefined" != typeof window && (o.create = t(111));
        class l extends s {
            constructor(t, e) {
                t || ((t = document.createElement("div")).className = "TimeGroup-" + a++), super(t, e), this.name = this.name || t.getAttribute("data-anim-time-group"), this._isPaused = !0, this._repeats = 0, this._isReversed = !1, this._timeScale = 1, this._chapterPlayer = new r(this), this.now = performance.now()
            }
            finalizeInit() {
                if (!this.anim) throw "TimeGroup not instantiated correctly. Please use `AnimSystem.createTimeGroup(el)`";
                this.onPlayTimeUpdate = this.onPlayTimeUpdate.bind(this), super.finalizeInit()
            }
            progress(t) {
                if (void 0 === t) return 0 === this.boundsMax ? 0 : this.position.local / this.boundsMax;
                let e = t * this.boundsMax;
                this.timelineUpdateRequired = !0, this.updateTimeline(e)
            }
            time(t) {
                if (void 0 === t) return this.position.local;
                t = n.clamp(t, this.boundsMin, this.duration), this.timelineUpdateRequired = !0, this.updateTimeline(t)
            }
            play(t) {
                this.reversed(!1), this.isEnabled = !0, this._isPaused = !1, this.time(t), this.now = performance.now(), this._playheadEmitter.run()
            }
            reverse(t) {
                this.reversed(!0), this.isEnabled = !0, this._isPaused = !1, this.time(t), this.now = performance.now(), this._playheadEmitter.run()
            }
            reversed(t) {
                if (void 0 === t) return this._isReversed;
                this._isReversed = t
            }
            restart() {
                this._isReversed ? (this.progress(1), this.reverse(this.time())) : (this.progress(0), this.play(this.time()))
            }
            pause(t) {
                this.time(t), this._isPaused = !0
            }
            paused(t) {
                return void 0 === t ? this._isPaused : (this._isPaused = t, this._isPaused || this.play(), this)
            }
            onPlayTimeUpdate() {
                if (this._isPaused) return;
                let t = performance.now(),
                    e = (t - this.now) / 1e3;
                this.now = t, this._isReversed && (e = -e);
                let i = this.time() + e * this._timeScale;
                if (this._repeats === l.REPEAT_FOREVER || this._repeats > 0) {
                    let t = !1;
                    !this._isReversed && i > this.boundsMax ? (i -= this.boundsMax, t = !0) : this._isReversed && i < 0 && (i = this.boundsMax + i, t = !0), t && (this._repeats = this._repeats === l.REPEAT_FOREVER ? l.REPEAT_FOREVER : this._repeats - 1)
                }
                this.time(i);
                let s = !this._isReversed && this.position.local !== this.duration,
                    r = this._isReversed && 0 !== this.position.local;
                s || r ? this._playheadEmitter.run() : this.paused(!0)
            }
            updateProgress(t) {
                this.hasDuration() ? (this.position.localUnclamped = t, this.position.local = n.clamp(this.position.localUnclamped, this.boundsMin, this.boundsMax)) : this.position.local = this.position.localUnclamped = 0
            }
            updateBounds() {
                if (0 === this.keyframeControllers.length) return this.boundsMin = 0, void(this.boundsMax = 0);
                let t = {
                    min: Number.POSITIVE_INFINITY,
                    max: Number.NEGATIVE_INFINITY
                };
                for (let e = 0, i = this.keyframeControllers.length; e < i; e++) this.keyframeControllers[e].getBounds(t);
                this.boundsMin = 0, this.boundsMax = t.max, this.viewableRange.a = this.viewableRange.b = 0, this.viewableRange.c = this.viewableRange.d = this.boundsMax, this.timelineUpdateRequired = !0
            }
            setupRAFEmitter(t) {
                this._playheadEmitter = new o.create, this._playheadEmitter.on("update", this.onPlayTimeUpdate), super.setupRAFEmitter(t)
            }
            get duration() {
                return this.keyframesDirty && this.onKeyframesDirty({
                    silent: !0
                }), this.boundsMax
            }
            timeScale(t) {
                return void 0 === t ? this._timeScale : (this._timeScale = t, this)
            }
            repeats(t) {
                if (void 0 === t) return this._repeats;
                this._repeats = t
            }
            getPosition() {
                return this.position.local
            }
            addChapter(t) {
                return this._chapterPlayer.addChapter(t)
            }
            playToChapter(t) {
                return this._chapterPlayer.playToChapter(t)
            }
            convertScrollPositionToTValue(t) {
                return t
            }
            convertTValueToScrollPosition(t) {
                return t
            }
            hasDuration() {
                return this.duration > 0
            }
            destroy() {
                this._chapterPlayer.destroy(), this._playheadEmitter.destroy(), this._playheadEmitter = null, super.destroy()
            }
            get timelineProgress() {
                return this.progress()
            }
            set timelineProgress(t) {
                this.progress(t)
            }
            get progressValue() {
                return this.progress()
            }
            set progressValue(t) {
                this.progress(t)
            }
            get timeValue() {
                return this.time()
            }
            set timeValue(t) {
                this.time(t)
            }
        }
        l.REPEAT_FOREVER = -1, e.exports = l
    }, {
        111: 111,
        127: 127,
        149: 149,
        224: 224
    }],
    151: [function(t, e, i) {
        "use strict";
        const s = t(149),
            r = (t(127), t(224));
        let n = 0;
        const a = {};
        "undefined" != typeof window && (a.create = t(111));
        e.exports = class extends s {
            constructor(t, e) {
                t || ((t = document.createElement("div")).className = "TweenGroup-" + n++), super(t, e), this.name = "Tweens", this.keyframes = [], this._isPaused = !1, this.now = performance.now()
            }
            finalizeInit() {
                this.onTimeEmitterUpdate = this.onTimeEmitterUpdate.bind(this), this.removeExpiredKeyframeControllers = this.removeExpiredKeyframeControllers.bind(this), super.finalizeInit()
            }
            destroy() {
                this._timeEmitter.destroy(), this._timeEmitter = null, this._keyframes = [], super.destroy()
            }
            setupRAFEmitter(t) {
                this.now = performance.now(), this._timeEmitter = new a.create, this._timeEmitter.on("update", this.onTimeEmitterUpdate), this._timeEmitter.run(), super.setupRAFEmitter(t)
            }
            addKeyframe(t, e) {
                if (void 0 !== e.start || void 0 !== e.end) throw Error("Tweens do not have a start or end, they can only have a duration. Consider using a TimeGroup instead");
                if ("number" != typeof e.duration) throw Error("Tween options.duration is undefined, or is not a number");
                let i, s;
                e.start = (e.delay || 0) + this.position.localUnclamped, e.end = e.start + e.duration, e.preserveState = !0, e.snapAtCreation = !0, t._animInfo && (i = t._animInfo.group, s = t._animInfo.controller);
                let r = super.addKeyframe(t, e);
                return t._animInfo.group = i, t._animInfo.controller = s, e.onStart && r.controller.once("draw", t => {
                    t.keyframe = r, e.onStart(t), t.keyframe = null
                }), e.onDraw && r.controller.on("draw", t => {
                    t.keyframe = r, e.onDraw(t), t.keyframe = null
                }), this.removeOverlappingProps(r), this.keyframes.push(r), this._timeEmitter.willRun() || (this.now = performance.now(), this._timeEmitter.run()), r
            }
            removeOverlappingProps(t) {
                if (t.controller._allKeyframes.length <= 1) return;
                let e = Object.keys(t.animValues),
                    i = t.controller;
                for (let s = 0, r = i._allKeyframes.length; s < r; s++) {
                    const r = i._allKeyframes[s];
                    if (r === t) continue;
                    if (r.markedForRemoval) continue;
                    let n = Object.keys(r.animValues),
                        a = n.filter(t => e.includes(t));
                    a.length !== n.length ? a.forEach(t => delete r.animValues[t]) : r.markedForRemoval = !0
                }
            }
            onTimeEmitterUpdate(t) {
                if (this._isPaused || 0 === this.keyframeControllers.length) return;
                let e = performance.now(),
                    i = (e - this.now) / 1e3;
                this.now = e;
                let s = this.position.local + i;
                this.position.local = this.position.localUnclamped = s, this.onTimeUpdate()
            }
            onTimeUpdate() {
                for (let t = 0, e = this.keyframes.length; t < e; t++) this.keyframes[t].updateLocalProgress(this.position.localUnclamped);
                this.requestDOMChange(), this._timeEmitter.run(), null !== this.gui && this.gui.onScrollUpdate(this.position)
            }
            onDOMRead() {
                if (this.keyframesDirty && this.onKeyframesDirty(), 0 !== this.keyframes.length)
                    for (let t = 0, e = this.keyframes.length; t < e; t++) {
                        this.keyframes[t].controller.needsWrite = !0;
                        for (let e in this.keyframes[t].animValues) this.keyframes[t].onDOMRead(e)
                    }
            }
            onDOMWrite() {
                super.onDOMWrite(), this.removeExpiredKeyframes()
            }
            removeExpiredKeyframes() {
                let t = this.keyframes.length,
                    e = t;
                for (; t--;) {
                    let e = this.keyframes[t];
                    e.destroyed ? this.keyframes.splice(t, 1) : (e.markedForRemoval && (e.jsonProps.onComplete && 1 === e.localT && (e.controller.eventObject.keyframe = e, e.jsonProps.onComplete(e.controller.eventObject), e.jsonProps.onComplete = null), null !== this.gui && this.gui.isDraggingPlayhead || (e.remove(), this.keyframes.splice(t, 1))), 1 === e.localT && (e.markedForRemoval = !0))
                }
                this.keyframes.length === e && 0 !== this.keyframes.length || this._timeEmitter.executor.eventEmitter.once("after:draw", this.removeExpiredKeyframeControllers)
            }
            removeExpiredKeyframeControllers() {
                for (let t = 0, e = this.keyframeControllers.length; t < e; t++) {
                    let e = !0,
                        i = this.keyframeControllers[t];
                    for (let t = 0, s = i._allKeyframes.length; t < s; t++)
                        if (!i._allKeyframes[t].destroyed) {
                            e = !1;
                            break
                        } e && i.remove()
                }
            }
            updateBounds() {
                this.boundsMin = Math.min(...this.keyframes.map(t => t.start)), this.boundsMax = Math.max(...this.keyframes.map(t => t.end))
            }
            play() {
                this.isEnabled = !0, this._isPaused = !1, this.now = performance.now(), this._timeEmitter.run()
            }
            pause() {
                this._isPaused = !0
            }
            paused() {
                return this._isPaused
            }
            time(t) {
                if (void 0 === t) return this.position.local;
                this.position.local = this.position.localUnclamped = r.clamp(t, this.boundsMin, this.boundsMax), this.onTimeUpdate()
            }
            performTimelineDispatch() {}
            hasDuration() {
                return !0
            }
            getPosition() {
                return this.position.local
            }
            updateProgress(t) {}
            get duration() {
                return this.boundsMax
            }
        }
    }, {
        111: 111,
        127: 127,
        149: 149,
        224: 224
    }],
    152: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return t.reduce((t, e) => (t[e] = e, t), {})
        }
    }, {}],
    153: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return t.startsWith("--") ? t : t.replace(/[A-Z]/g, t => "-" + t.toLowerCase())
        }
    }, {}],
    154: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            if ("string" != typeof t) return t;
            try {
                return (e || document).querySelector(t) || document.querySelector(t)
            } catch (t) {
                return !1
            }
        }
    }, {}],
    155: [function(t, e, i) {
        "use strict";
        var s = t(73);
        Object.defineProperty(i, "__esModule", {
            value: !0
        }), i.default = void 0;
        let r = (0, s(t(156)).default)(),
            n = {};
        for (let t in r) {
            n[t] = {};
            for (let e in r[t]) "value" === e || r[t][e].button || (n[t][e] = r[t][e].render)
        }
        var a = n;
        i.default = a
    }, {
        156: 156,
        73: 73
    }],
    156: [function(t, e, i) {
        "use strict";
        var s = t(74);
        Object.defineProperty(i, "__esModule", {
            value: !0
        }), i.default = function() {
            let t = {
                products: {
                    value: {
                        render: "",
                        allowedType: !0
                    },
                    en: {
                        render: "",
                        allowedType: !0
                    },
                    remove: {
                        button: "remove",
                        render: "Remove Product",
                        allowedType: !0,
                        parent: [{
                            dataType: "products",
                            self: 1
                        }]
                    },
                    add: {
                        button: "add",
                        render: "Add Product",
                        allowedType: !0
                    }
                }
            };
            return t.featureItems = {
                component: {
                    options: ["text", "group", "checkbox", "image", "cta"],
                    allowedType: !0,
                    render: "text"
                },
                value: {
                    render: "",
                    allowedType: ["text", "image", "cta"]
                },
                link: {
                    render: "",
                    allowedType: ["cta"]
                },
                checkbox: {
                    options: ["false", "true"],
                    render: "false",
                    allowedType: ["checkbox"]
                },
                elevated: {
                    options: ["false", "true"],
                    render: "false",
                    allowedType: ["text"]
                },
                en: {
                    render: "",
                    allowedType: ["text", "cta", "image", "group"]
                },
                analytics: {
                    render: "",
                    allowedType: ["cta"]
                },
                aria: {
                    render: "",
                    allowedType: !0,
                    translate: !0
                },
                overrideFeature: {
                    render: "",
                    allowedType: ["text", "image"],
                    parent: [{
                        dataType: "features",
                        key: "display",
                        render: "true"
                    }],
                    translate: !0
                },
                template: {
                    options: [""].concat(r.featureItems),
                    render: null,
                    allowedType: !0
                },
                ac: {
                    options: [],
                    multiple: !0,
                    render: null,
                    allowedType: ["group"]
                },
                remove: {
                    button: "remove",
                    render: "remove",
                    allowedType: !0,
                    parent: [{
                        dataType: "featureItems",
                        key: "component",
                        render: "group"
                    }]
                },
                add: {
                    button: "Add Child",
                    render: "Add Child",
                    allowedType: ["group"]
                }
            }, t.features = {
                value: {
                    default: "",
                    allowedType: !0
                },
                en: {
                    render: "",
                    allowedType: !0
                },
                aria: {
                    render: "",
                    allowedType: !0,
                    translate: !0
                },
                display: {
                    options: ["false", "true"],
                    render: "false",
                    allowedType: !0
                },
                template: {
                    options: r.features,
                    render: null,
                    allowedType: !0
                },
                remove: {
                    button: "remove",
                    render: "Remove Feature",
                    allowedType: !0,
                    parent: [{
                        dataType: "specs",
                        children: 2
                    }]
                },
                add: {
                    button: "add",
                    render: "Add Feature",
                    allowedType: !0
                }
            }, t.specs = {
                value: {
                    render: "",
                    allowedType: !0
                },
                show: {
                    options: ["false", "true"],
                    render: "true",
                    allowedType: !0
                },
                aria: {
                    render: "",
                    allowedType: !0,
                    translate: !0
                },
                en: {
                    render: "",
                    allowedType: !0
                },
                ac: {
                    options: [],
                    multiple: !0,
                    render: null,
                    allowedType: !0
                },
                accordion: {
                    options: ["false", "true"],
                    render: "false",
                    allowedType: !0
                },
                analytics: {
                    render: "",
                    allowedType: !0
                },
                template: {
                    options: [""].concat(r.specs),
                    render: null,
                    allowedType: !0
                },
                remove: {
                    button: "remove",
                    render: "Remove Spec",
                    allowedType: !0,
                    parent: [{
                        dataType: "specs",
                        self: 1
                    }]
                },
                add: {
                    button: "add",
                    render: "Add Spec",
                    allowedType: !0
                }
            }, t.extraInfo = {
                value: {
                    render: "",
                    allowedType: !0
                },
                entryType: {
                    render: "",
                    allowedType: !0
                },
                remove: {
                    button: "remove",
                    render: "Remove extraInfo",
                    allowedType: !0,
                    parent: [{
                        dataType: "extraInfo",
                        self: 1
                    }]
                },
                add: {
                    button: "add",
                    render: "Add extraInfo",
                    allowedType: !0
                }
            }, t
        };
        var r = s(t(160))
    }, {
        160: 160,
        74: 74
    }],
    157: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }
        var a = t(265);
        let o = t(155).default;
        e.exports = function(t, e, i) {
            e = e || {};
            let s = function(t) {
                    if (!t.length) return null;
                    let e = [];
                    return Array.from(t).forEach(t => {
                        e.push(t.id)
                    }), e
                },
                r = function(t, e) {
                    return t && (t.dataset.aria || t.dataset.overrideFeature || t.parentElement.href) && (e.aria = t.dataset.aria || e.aria, e.overrideFeature = t.dataset.overrideFeature || e.overrideFeature, e.link = t.parentElement.getAttribute("href") || e.link), e
                },
                l = t => {
                    let i = t.dataset.editor,
                        s = t.id,
                        r = i ? JSON.parse(i) : e[s];
                    return r = ((t, e) => ((t ? Object.keys(t) : []).filter(i => {
                        let s = Object.prototype.hasOwnProperty.call(o[e], i);
                        return s || delete t[i], s
                    }), Object.assign({}, o[e], t)))(r, t.dataset.type), r
                },
                c = {},
                h = {
                    products: function(t) {
                        return {
                            dataType: t.dataset.type,
                            editor: l(t),
                            value: t.querySelector("[data-store-value]").innerHTML.trim(),
                            _id: t.id
                        }
                    },
                    specs: function(e, i) {
                        let n = t.querySelector('[data-id="'.concat(e.id, '"]')).querySelectorAll('[data-type = "'.concat(i, '"]')),
                            a = s(n),
                            o = e.querySelector("[data-store-value]");
                        return {
                            dataType: e.dataset.type,
                            editor: r(o, l(e)),
                            value: o.innerHTML.trim(),
                            _id: e.id,
                            children: a
                        }
                    },
                    features: function(e, i) {
                        let n = t.querySelectorAll('[data-id="'.concat(e.id, '"] > [data-type = "').concat(i, '"]')),
                            a = s(n),
                            o = e.querySelector("[data-store-value]");
                        return {
                            dataType: e.dataset.type,
                            editor: r(o, l(e)),
                            value: o.innerHTML.trim(),
                            _id: e.id,
                            children: a,
                            parentID: e.closest(".backport-group").dataset.id
                        }
                    },
                    featureItems: function(t, e) {
                        let i = t.querySelectorAll('[data-type="'.concat(e, '"]')),
                            n = s(i),
                            a = t.querySelector('[data-type="featureItems"]') ? null : t.querySelector("[data-store-value]"),
                            o = t.parentElement,
                            c = "featureItems" === o.dataset.type ? o.id : t.closest(".backport-row").dataset.id;
                        return {
                            dataType: t.dataset.type,
                            editor: r(a, l(t)),
                            value: a ? a.innerHTML.trim() : "",
                            _id: t.id,
                            children: n,
                            parentID: c,
                            featureID: t.closest(".backport-row").dataset.id,
                            specID: t.closest(".backport-group").dataset.id
                        }
                    },
                    extraInfo: function(t) {
                        return {
                            dataType: t.dataset.type,
                            editor: l(t),
                            value: t.querySelector("[data-store-value]").innerHTML.trim(),
                            _id: t.id
                        }
                    }
                };
            t.querySelectorAll("[data-type]").forEach(t => {
                let e, i = t.dataset;
                switch (i.type) {
                    case "specs":
                        e = "features";
                        break;
                    case "features":
                    case "featureItems":
                        e = "featureItems"
                }
                c[t.id] = h[i.type](t, e)
            }), i && (a(i.changes, (t, e) => {
                let s = c[e] ? c[e].value : "";
                c[e] = t, i.translateDataChangeID.indexOf(e) < 0 && (c[e].value = s)
            }), i.removedID.forEach(t => {
                delete c[t]
            }), i.translateDataChangeID.forEach(t => {
                let e = "[id='".concat(t, "'] [data-store-value]"),
                    s = i.element.querySelector(e);
                s && (i.changes[t].value = s.innerHTML.trim(), r(s, i.changes[t].editor))
            }));
            let u = {};
            a(c, (t, e) => {
                u[t.dataType] = u[t.dataType] || [], u[t.dataType].push(e)
            }), i && i.productsOrder && (u.products = i.productsOrder);
            return n(n({
                data: c
            }, u), {}, {
                extraInfoGroup: function(t, e) {
                    let i = {};
                    return t.forEach(t => {
                        let s = c[t].editor[e];
                        i[s] = i[s] || [], i[s].push(t)
                    }), i
                }(u.extraInfo, "entryType")
            })
        }
    }, {
        155: 155,
        265: 265,
        72: 72,
        73: 73
    }],
    158: [function(t, e, i) {
        "use strict";
        t(161);
        const s = t(169),
            r = t(159);
        let n = function(t) {
            t.preventDefault(), window.open(this.href, "chat", "width=375,height=773")
        };
        e.exports = t => {
            let e = document.querySelectorAll(".main .ac-gf-buystrip-info-cta-chat");
            if (e && e.forEach(t => {
                    t.addEventListener("click", n)
                }), window.location.search.match("debugging")) return {};
            s(t = t || "supplement.json", r)
        }
    }, {
        159: 159,
        161: 161,
        169: 169
    }],
    159: [function(t, e, i) {
        "use strict";
        const s = t(6),
            r = t(157),
            n = t(163),
            a = t(164),
            o = t(168),
            l = t(171),
            c = t(170);
        e.exports = async e => {
            let i;
            try {
                i = t("@marcom/ac-analytics")
            } catch (t) {}
            Vue.use(VueRouter);
            const h = new VueRouter({
                mode: "history",
                routes: [{
                    path: window.location.pathname
                }]
            });
            let u;
            if (window.location.search.match("preview")) {
                let t = window.localStorage.getItem("store");
                u = JSON.parse(t) || r(document.querySelector("#backport-data"), e)
            } else if (window.location.search.match("lang")) {
                let t = window.location.pathname.split("/")[1],
                    e = window.location.search.match(/lang=([a-z\-]+)/)[1],
                    i = await fetch("/compare-geo/".concat(t, "/").concat(e, ".json"));
                u = await i.json()
            } else u = r(document.querySelector("#backport-data"), e);
            let d = ((t, e) => {
                    if (window.location.search.match("debugging")) return {};
                    let i = {};
                    return t.forEach(t => {
                        let s = e[t].editor.entryType;
                        i[s] = i[s] || [], i[s].push(t)
                    }), i
                })(u.extraInfo, u.data),
                p = [];
            d["default-order"] && d["default-order"].slice(0, 3).forEach(t => {
                p.push(u.data[t].value)
            });
            let m = n(u, p),
                f = m || u.products.slice(0, 3);
            !m && p.length > 2 && (f = p);
            const g = new Vuex.Store({
                state: {
                    data: u.data,
                    products: u.products,
                    specs: u.specs,
                    features: u.features,
                    featureItems: u.featureItems,
                    activeProductsOrder: f,
                    extraInfo: d,
                    pathName: window.location.pathname,
                    refresh: -1,
                    prices: null
                },
                mutations: {
                    changeActiveProductsOrder: (t, e) => {
                        Vue.set(t.activeProductsOrder, e.index, e.value)
                    },
                    refresh: (t, e) => {
                        Vue.set(t, "refresh", e)
                    },
                    accordionUpdate: (t, e) => {
                        if (b)
                            for (let t in e)
                                if (e[t]) {
                                    if (!b.items[t]) {
                                        const i = b.model,
                                            s = new b.model.Item.ConstructorFunction({
                                                el: e[t],
                                                index: b.items.length,
                                                model: i
                                            });
                                        b.items[t] = s, b.items[t].key = t, b.itemsCreated()
                                    }
                                } else delete b.items[t]
                    },
                    updatePricingData: (t, e) => {
                        Vue.set(t, "prices", e)
                    }
                }
            });
            let y = t(182);
            Vue.mixin(y);
            let v = l.getTemplateContent("dynamic-price", u);
            if (v) {
                let t = c.getPriceIdFromStrings(v),
                    e = l.arrayToString(t, ",");
                c.fetchPrices(e).then(({
                    products: t
                }) => {
                    g.commit("updatePricingData", t)
                })
            }
            new Vue({
                el: "#compare",
                router: h,
                store: g
            });
            a(d, u.data), i && i.createBasicObserverSuite();
            let b = o();
            s.detect(), window.onpageshow = function(t) {
                if (t.persisted && -1 !== navigator.userAgent.indexOf("Safari")) {
                    let t = parseInt(g.state.refresh);
                    t++, g.commit("refresh", t)
                }
            }
        }
    }, {
        157: 157,
        163: 163,
        164: 164,
        168: 168,
        170: 170,
        171: 171,
        182: 182,
        6: 6,
        undefined: void 0
    }],
    160: [function(t, e, i) {
        "use strict";
        const s = {
            DEFAULT: "default",
            DROPDOWN: "dropdown",
            GALLERY: "gallery",
            TECH_SPEC: "tech-spec",
            COLUMN_SPAN_ROW: "column-span-row",
            TOGGLEALL: "accordion-toggle-all",
            MODAL: "modal",
            FEATURE_DEFAULT: "feature-default",
            ITEM_DEFAULT: "item-default",
            BADGE: "badge",
            PRICE: "price",
            BUY_BUTTON: "buy-button",
            IMAGE: "item-image",
            LINK: "item-link",
            LIST: "item-list",
            DYNAMIC_PRICE: "dynamic-price"
        };
        let r = {
            featureItemsTemplates: [s.ITEM_DEFAULT, s.BADGE, s.BUY_BUTTON, s.PRICE, s.DYNAMIC_PRICE, s.IMAGE, s.LINK, s.LIST],
            specsTemplates: [s.DEFAULT, s.DROPDOWN, s.GALLERY, s.MODAL, s.TECH_SPEC, s.COLUMN_SPAN_ROW, s.TOGGLEALL]
        };
        e.exports = {
            NAMES: s,
            featureItems: r.featureItemsTemplates,
            features: r.featureItemsTemplates,
            specs: r.specsTemplates
        }
    }, {}],
    161: [function(t, e, i) {
        "use strict";
        e.exports = {
            compare: t(172),
            AccordionToggleAll: t(185),
            Default: t(188),
            defaultContent: t(187),
            Dropdown: t(189),
            ProductGallery: t(191),
            Tecspec: t(192),
            Modal: t(190),
            feature: t(173),
            itemDefault: t(178),
            button: t(175),
            badge: t(174),
            price: t(181),
            image: t(177),
            link: t(179),
            list: t(180),
            DynamicPricing: t(176),
            ColumnSpanRow: t(186)
        }
    }, {
        172: 172,
        173: 173,
        174: 174,
        175: 175,
        176: 176,
        177: 177,
        178: 178,
        179: 179,
        180: 180,
        181: 181,
        185: 185,
        186: 186,
        187: 187,
        188: 188,
        189: 189,
        190: 190,
        191: 191,
        192: 192
    }],
    162: [function(t, e, i) {
        "use strict";
        let s, r, n = new(t(69).EventEmitterMicro),
            a = {
                interactionEvents: ["custom-event"]
            };
        try {
            r = t("@marcom/ac-analytics").observer.Event
        } catch (t) {}
        r && (s = new r(n, a));
        e.exports = {
            update: t => {
                n.trigger("custom-event", {
                    eVar79: t,
                    title: "combi-selector"
                })
            }
        }
    }, {
        69: 69,
        undefined: void 0
    }],
    163: [function(t, e, i) {
        "use strict";
        const s = t(171).query(),
            r = t(167),
            n = t(166),
            a = t(165);
        e.exports = (t, e) => {
            if (!s || !s.modelList) return;
            let i = e,
                o = [...new Set(s.modelList.split(","))];
            o.length > 3 && (o = o.slice(0, 3));
            let l = [],
                c = [];
            return o.forEach((s, r) => {
                t.products.forEach(r => {
                    let n = t.data[r];
                    if (s === n.editor.en) {
                        let s = e.indexOf(r);
                        s > -1 && i.splice(s, 1), l.push(r), c.push(t.data[r].value)
                    }
                })
            }), l = l.concat(i).slice(0, 3), c.length > 1 && (r(c), n(c), a()), l
        }
    }, {
        165: 165,
        166: 166,
        167: 167,
        171: 171
    }],
    164: [function(t, e, i) {
        "use strict";
        let s = (t, e, i) => {
            let s = "",
                r = "";
            return t.forEach((t, n) => {
                let a = e[t];
                i && (r = "<small>".concat("".padStart(n + 1, i), "</small> ")), s += '<li id="'.concat(a.editor.entryType, "-").concat(n + 1, '">').concat(r).concat(a.value, "</li>")
            }), s
        };
        e.exports = (t, e) => {
            let i, r, n = document.querySelector(".ac-gf-sosumi") || document.querySelector(".wcfooter-sosumi"),
                a = n.querySelectorAll(".additional-sosumi"),
                o = "";
            for (let i in t)
                if (t.hasOwnProperty(i) && /footnote/.test(i)) {
                    if (i.match("unnumbered")) {
                        o += "<ul>".concat(s(t[i], e), "</ul>");
                        continue
                    }
                    /^footnote([^a-zA-Z0-9\s\-_]+)/.test(i) ? o += "<ul>".concat(s(t[i], e, RegExp.$1), "</ul>") : o += "<ol>".concat(s(t[i], e), "</ol>")
                } n.innerHTML = o, a.forEach(t => {
                let e = t.querySelector("ul");
                "append" === t.dataset.mode ? "UL" === t.tagName || e ? r = e || t : (r = r || document.createElement("ul"), r.append(t)) : "UL" === t.tagName || e ? i = e || t : (i = i || document.createElement("ul"), i.append(t))
            }), i && n.prepend(i), r && n.append(r)
        }
    }, {}],
    165: [function(t, e, i) {
        "use strict";
        e.exports = () => {
            document.querySelector('[rel="canonical"]').href = "https://www.apple.com".concat(window.location.pathname).concat(window.location.search)
        }
    }, {}],
    166: [function(t, e, i) {
        "use strict";
        e.exports = t => {
            let e = document.head.querySelector("meta[name=Description]"),
                i = t.join(", ").concat(","),
                s = function() {
                    let t = document.head.querySelector("meta[property=ac-custom-local-desc-start]"),
                        e = document.head.querySelector("meta[property=ac-custom-local-desc-end]");
                    return {
                        descStart: t ? t.content : null,
                        descEnd: e ? e.content : null
                    }
                }();
            s.descStart && s.descEnd && null !== e && (e.setAttribute("name", "Description"), e.setAttribute("content", "".concat(s.descStart, " ").concat(i, " ").concat(s.descEnd)))
        }
    }, {}],
    167: [function(t, e, i) {
        "use strict";
        e.exports = t => {
            let e = document.querySelector("title"),
                i = e.innerText.split("-"),
                s = document.head.querySelector("meta[property=ac-custom-local-title-sep]"),
                r = s ? s.content : " vs ",
                n = t.join("".concat(r));
            e.innerText = "".concat(n, " - ").concat(i.pop())
        }
    }, {}],
    168: [function(t, e, i) {
        "use strict";
        const s = t(23),
            r = t(8),
            n = t(7).disableTabbable,
            a = t(27),
            o = t(28),
            l = t(29),
            c = t(32),
            h = t(35),
            u = t(34),
            d = t(25),
            p = {
                mounted() {
                    for (let t in this.items) {
                        let e = this.items[t];
                        e.el.addEventListener("focusin", () => {
                            e.tabbableEls = r.getFocusableElements(e.trayEl, !1), e.state === d.Item.States.collapsed && n(e.tabbableEls)
                        })
                    }
                }
            },
            m = s.withMixins(p, a, o, l, c, h, u);
        e.exports = () => {
            const t = document.querySelector("[data-accordion]");
            return new m({
                el: t
            })
        }
    }, {
        23: 23,
        25: 25,
        27: 27,
        28: 28,
        29: 29,
        32: 32,
        34: 34,
        35: 35,
        7: 7,
        8: 8
    }],
    169: [function(t, e, i) {
        "use strict";
        e.exports = (t, e) => {
            if (!t) return;
            t = [].concat(t);
            let i = [];
            return t.forEach(t => {
                i.push(function(t) {
                    return new Promise((e, i) => {
                        const s = new XMLHttpRequest;
                        s.onload = t => {
                            let i = s.responseText;
                            /<html/.test(i) ? e({}) : e(JSON.parse(i))
                        }, s.open("GET", t), s.send()
                    })
                }(t))
            }), Promise.all(i).then(t => {
                let i = [];
                if (t.forEach(t => {
                        i.push(t)
                    }), i = Object.assign({}, ...i), !e || "function" != typeof e) return i;
                e(i)
            })
        }
    }, {}],
    170: [function(t, e, i) {
        "use strict";
        const {
            fetchProducts: s
        } = t(209);
        e.exports = {
            getPriceIdFromStrings: function(t) {
                let e = /\{([^\s]+)\}/,
                    i = /\[([^\s]+)\]/;
                return t.filter(t => {
                    if (e.test(t)) return t
                }).map(t => {
                    if (e.test(t)) return i.test(t), RegExp.$1
                })
            },
            fetchPrices: function(t) {
                return s([t])
            }
        }
    }, {
        209: 209
    }],
    171: [function(t, e, i) {
        "use strict";
        e.exports = {
            className: function() {
                let t = Array.prototype.slice.call(arguments),
                    e = t.shift(),
                    i = t.join("-").trim().toLowerCase().replace(/[^a-zA-Z0-9]+/g, "-"),
                    s = "-" === i[0] ? 1 : 0,
                    r = "-" === i[i.length - 1] ? -1 : i.length;
                return i = i.slice(s, r), "".concat(e, "-").concat(i)
            },
            query: function() {
                let t;
                return window.location.search.replace(/^\?/, "").split("&").forEach(e => {
                    let i = e.split("=");
                    i.length > 1 && (t = t || {}, t[i[0]] = i[1])
                }), t
            },
            debounce: function(t, e) {
                let i;
                return function() {
                    let s = this,
                        r = arguments,
                        n = function() {
                            i = null, t.apply(s, r)
                        };
                    clearTimeout(i), i = setTimeout(n, e)
                }
            },
            findItemValuesForId: function(t, e) {
                let i = [];
                for (let s in e.data) {
                    let r = e.data[s];
                    (null == r ? void 0 : r.specID) !== t && (null == r ? void 0 : r.featureID) !== t || i.push(r.value)
                }
                return i
            },
            getTemplateContent: function(t, e) {
                let i = [];
                return e.featureItems.filter(s => {
                    e.data[s].editor.template === t && i.push(e.data[s].value)
                }), i
            },
            getIdForName: function(t, e) {
                let [i] = e.specs.filter(i => e.data[i].value === t);
                return i || ([i] = e.features.filter(i => e.data[i].value === t)), i
            },
            arrayToString: function(t, e) {
                return t.join("".concat(e))
            }
        }
    }, {}],
    172: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(238);
        const n = t(167),
            a = t(166),
            o = t(165);
        e.exports = Vue.component("compare", {
            template: '\n<div class="section section-compare-table">\n  <div class="compare-wrapper">\n    <div class="compare compare-table accordion" id="compare-accordion" role="table" :data-viewport="viewport" ref="compareTable" aria-labelledby="page-title" data-accordion>\n      <div role="rowgroup">\n        <div role="row" class="compare-header-row visuallyhidden">\n            <div role="columnheader">&nbsp;</div>\n            <div v-for="(productId) in activeProductsOrder"  role="columnheader">{{productDisplayNames(productId)}}</div>\n        </div>   \n      </div>\n      <keep-alive  v-for="specId in specs" :key="specId">\n        <component  :spec="getDataById(specId)" \n                    :columns="columns"  \n                    :activeProductsOrder = "activeProductsOrder"\n                    v-bind:is="currentComponent(specId)" \n                    :class="{\'hide-rowheader\': getDataById(specId).editor.show === \'false\'}"></component>\n      </keep-alive>\n    </div>\n  </div>\n  \x3c!--<modal></modal>--\x3e\n</div>\n',
            data: function() {
                return {
                    specs: this.$store.state.specs,
                    products: this.$store.state.products,
                    viewport: r.viewport,
                    columns: ["large", "xlarge"].indexOf(r.viewport) > -1 ? 3 : 2
                }
            },
            mounted() {
                r.on("change:viewport", t => {
                    this.viewport = t.to, ["large", "xlarge"].indexOf(this.viewport) > -1 ? this.columns = 3 : this.columns = 2, window.location.search && this.updateURL()
                })
            },
            computed: {
                activeProductsOrder() {
                    return this.$store.state.activeProductsOrder.slice(0, this.columns)
                }
            },
            methods: {
                productDisplayNames(t) {
                    return this.getDataById(t).value
                },
                currentComponent(t) {
                    return this.getDataById(t).editor.template || s.NAMES.DEFAULT
                },
                updateURL() {
                    let t = [],
                        e = [];
                    this.$store.state.activeProductsOrder.slice(0, this.columns).forEach(i => {
                        let s = this.getDataById(i),
                            r = s.editor.en;
                        t.push(r), e.push(s.value)
                    });
                    let i = t.join(",");
                    this.$router.push({
                        path: this.$store.state.pathName,
                        query: {
                            modelList: i
                        }
                    }), n(e), a(e), o()
                }
            }
        })
    }, {
        160: 160,
        165: 165,
        166: 166,
        167: 167,
        238: 238
    }],
    173: [function(t, e, i) {
        "use strict";
        let s = t(160);
        e.exports = Vue.component(s.NAMES.FEATURE_DEFAULT, {
            template: '\n<div role="cell gridcell" :class="[{\'first-child\':column ===0}, \'compare-column\', \'template-\' + currentComponent(feature, child)]">\n    <keep-alive>\n      <component :item="child" \n                 :index="index"\n                 :feature="feature" v-bind:is="currentComponent(feature, child)"></component>\n    </keep-alive>\n \n</div>\n',
            props: {
                column: Number,
                index: Number,
                feature: Object
            },
            computed: {
                child() {
                    return this.getDataById(this.feature.children[this.index])
                }
            },
            methods: {
                currentComponent(t, e) {
                    let i = t.editor.template || s.NAMES.ITEM_DEFAULT;
                    return e.editor.template && (i = e.editor.template), i
                }
            }
        })
    }, {
        160: 160
    }],
    174: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.BADGE, {
            template: '\n<figure v-if="item.children && item.children.length" class="icon-badge" :class="className(\'feature\', feature.editor.en)" :aria-label="getAriaLabel()">\n  <span v-for="featureItemId in item.children"  :class="badgeClass(featureItemId)" v-html="getDataById(featureItemId).value">\n  </span>\n</figure>\n<div v-else-if="item.editor.component === \'image\'" class="image-icon-wrapper">\n  <figure  class="image-icon" :class="className(\'image-icon\', item.editor.en)" :aria-label="getAriaLabel()"></figure>\n  <p v-html="item.value"></p>\n</div>\n<figure v-else class="icon-badge icon-mdash" :class="className(\'feature\', feature.editor.en)">\n    <p aria-hidden="true" class="mdash">&mdash;</p>\n    <p class="visuallyhidden">{{ariaNotAvailable()}}</p>\n</figure>',
            mixins: [r],
            mounted() {},
            computed: {
                copy() {
                    return this.$store.state.copy
                },
                features() {
                    return this.$store.state.features
                }
            },
            methods: {
                badgeClass(t) {
                    return "true" === this.getDataById(t).editor.elevated ? "badge-value" : "badge-copy"
                }
            }
        })
    }, {
        160: 160,
        183: 183
    }],
    175: [function(t, e, i) {
        "use strict";
        t(171);
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.BUY_BUTTON, {
            name: s.NAMES.BUY_BUTTON,
            template: '<a  v-if="item.value" :href="item.editor.link"\n   :aria-label="getAriaLabel()"\n   :data-analytics-title=" analyticsCTATitle(item, index)"\n   class="button" v-html="item.value"></a>',
            mixins: [r],
            mounted() {},
            props: {
                item: Object,
                feature: Object,
                index: Number
            },
            methods: {
                getValue() {
                    let t;
                    return "true" === this.feature.editor.display && (t = this.feature.value), "true" === this.feature.editor.display && this.item.editor.overrideFeature && (t = this.item.editor.overrideFeature), t
                }
            }
        })
    }, {
        160: 160,
        171: 171,
        183: 183
    }],
    176: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }
        let a = t(160),
            o = t(183);
        e.exports = Vue.component(a.NAMES.DYNAMIC_PRICE, {
            name: a.NAMES.DYNAMIC_PRICE,
            template: '\n\t<div v-if="hasPricing" class="has-pricing-content" :class="[{\'elevated\':item.elevated}]">\n\t\t<strong v-if="useFeatureValue()" v-html="useFeatureValue()"></strong>\n\t\t<span v-if="prices" v-html="priceText"></span>\n\t</div>\n\t<div v-else>\n\t\t<span aria-hidden="true" class="mdash">&mdash;</span>\n\t\t<span class="visuallyhidden" v-html="item.editor.aria"></span>\n\t</div>\n',
            mixins: [o],
            data: () => ({
                priceText: "",
                product: ""
            }),
            computed: n(n({}, Vuex.mapState(["prices"])), {}, {
                hasPricing() {
                    return this.getProductId(), !!this.prices && null != this.prices[this.product]
                }
            }),
            mounted() {
                this.item.value && this.updatePrices()
            },
            updated() {
                this.updatePrices()
            },
            methods: {
                updatePrices() {
                    let t = this.prices,
                        e = this.item.value;
                    if (!t) return;
                    if (this.getProductId(), !t.hasOwnProperty(this.product)) return;
                    let i = t[this.product].price.display.smart,
                        s = t[this.product].price.display.from,
                        r = !1;
                    /\[([^\s]+)\]/.test(this.product) && (this.product = RegExp.$1, r = !0), this.product ? (/^\s*\{/.test(e) && /\}\s*$/.test(e) ? this.priceText = s || i : this.priceText = e.replace(/\{[^\s]+\}/, i), this.$emit("dynamic-price", "valid-price")) : (r && (this.priceText = e.replace(/\{[^\s]+\}/, "")), this.$emit("dynamic-price", "no-price"))
                },
                getProductId() {
                    let t = this.item.value;
                    /\{([^\s]+)\}/.test(t) && (/\[([^\s]+)\]/.test(t), this.product = RegExp.$1)
                }
            }
        })
    }, {
        160: 160,
        183: 183,
        72: 72,
        73: 73
    }],
    177: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.IMAGE, {
            template: '\n    <figure class="image-block" :aria-label="getAriaLabel()">\n      <span :class="[className(getPrefix(), getProductAliasName(index)), \'image\']"></span>\n      <div class="typography-label" v-if="item.value" v-html="item.value"></div>\n    </figure>\n',
            mixins: [r],
            methods: {
                getPrefix() {
                    let t = this.feature.editor.en,
                        e = this.item.editor.overrideFeature;
                    return e && (t = e.trim()), t
                }
            }
        })
    }, {
        160: 160,
        183: 183
    }],
    178: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.ITEM_DEFAULT, {
            template: '\n    <div v-if="item.children && item.children.length" class="compare-column-group" :aria-label="getAriaLabel()">\n     <strong v-if="useFeatureValue()" v-html="useFeatureValue()"></strong>\n      <div v-for="childId in item.children" :key="childId"  :class="\'template-\'+ currentComponent(getDataById(childId))">\n        <keep-alive>\n          <component :id="childId" \n                     :item="getDataById(childId)" \n                     :feature="feature"\n                     :index="index"\n                     v-bind:is="currentComponent(getDataById(childId))" ></component>\n        </keep-alive>\n      </div>\n    </div>\n    <div v-else-if="item.value" :class="[{\'elevated\':item.editor.elevated === \'true\'}]" :aria-label="getAriaLabel()">\n      <strong v-if="useFeatureValue()" v-html="useFeatureValue()"></strong>\n      <span v-html="item.value"></span>\n    </div>\n    <div v-else>\n      <span aria-hidden="true" class="mdash">&mdash;</span>\n      <span class="visuallyhidden">{{ariaNotAvailable()}}</span>\n    </div>\n',
            mixins: [r],
            computed: {
                specs() {
                    return this.$store.state.specs
                }
            }
        })
    }, {
        160: 160,
        183: 183
    }],
    179: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.LINK, {
            template: '\n<a v-if="item.value" class="compare-link icon-wrapper"\n\t:href="item.editor.link"\n\t:aria-label="getAriaLabel()"\n\t:data-analytics-title="analyticsCTATitle(item, index)"\n>\n\t<span class="icon-copy" v-html="item.value"></span><span class="icon icon-after icon-chevronright"></span>\n</a>\n<div v-else class="compare-link">\n  <span aria-hidden="true" class="mdash">&mdash;</span>\n  <span class="visuallyhidden">{{ariaNotAvailable()}}</span>\n</div>\n',
            mixins: [r]
        })
    }, {
        160: 160,
        183: 183
    }],
    180: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.LIST, {
            template: '\n<ul class="with-list-bullet" v-if="item.children">\n  <li v-for="itemId in item.children" v-html="getDataById(itemId).value"></li>\n</ul>\n',
            mixins: [r]
        })
    }, {
        160: 160,
        183: 183
    }],
    181: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(183);
        e.exports = Vue.component(s.NAMES.PRICE, {
            template: '\n    <div v-if="item.children && item.children.length" :class="[\'compare-column-price-group\', dynamicPriceClass]" \n    :style="setColumnVar(item.children.length)" >\n      <div v-for="childId in item.children" :key="childId"  :class="\'template-\'+ currentComponent(getDataById(childId))">\n        <keep-alive>\n          <component :id="childId" \n                     :item="getDataById(childId)" \n                     :feature="feature"\n                     :index="index"\n                     v-bind:is="currentComponent(getDataById(childId))"\n                     v-on:dynamic-price="updateDynamicPriceClass"\n                      ></component>\n        </keep-alive>\n      </div>\n    </div>\n    <div v-else-if="item.value"  :class="[{\'elevated\':item.editor.elevated === \'true\'}]">\n       <strong v-if="useFeatureValue">{{useFeatureValue}}</strong>\n       <span v-html="item.value"></span>\n    </div>\n    <div v-else>\n      <span aria-hidden="true" class="mdash">&mdash;</span>\n      <span class="visuallyhidden">{{ariaNotAvailable()}}</span>\n    </div>\n',
            mixins: [r],
            props: {
                item: Object,
                feature: Object,
                index: Number
            },
            data: () => ({
                dynamicPriceClass: ""
            }),
            computed: {
                useFeatureValue() {
                    let t;
                    this.feature.editor.display && (t = this.feature.value);
                    let e = this.item.editor.overrideFeature;
                    return this.feature.editor.display && e && (t = e.trim()), t
                }
            },
            methods: {
                setColumnVar: t => "--price-column: ".concat(t / 2),
                updateDynamicPriceClass(t) {
                    this.dynamicPriceClass = t
                }
            }
        })
    }, {
        160: 160,
        183: 183
    }],
    182: [function(t, e, i) {
        "use strict";
        e.exports = {
            methods: {
                getDataById: function(t) {
                    return this.$store.state.data[t]
                }
            }
        }
    }, {}],
    183: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(160);
        e.exports = {
            props: {
                item: Object,
                feature: Object,
                index: Number
            },
            methods: {
                getProduct(t) {
                    let e = this.$store.state.products[t];
                    return this.getDataById(e)
                },
                getProductName(t) {
                    return this.getProduct(t).value
                },
                getProductAliasName(t) {
                    let e = this.getProduct(t);
                    return e.editor.en || console.warn("product does't have English Name value"), e.editor.en
                },
                useFeatureValue() {
                    let t;
                    "true" === this.feature.editor.display && (t = this.feature.value);
                    let e = this.item.editor.overrideFeature;
                    return "true" === this.feature.editor.display && e && (t = e.trim()), t
                },
                useFeatureEn() {
                    let t;
                    this.feature.editor.display && (t = this.feature.editor.en);
                    let e = this.item.editor.overrideFeature;
                    return this.feature.editor.display && e && (t = e.trim()), t
                },
                className() {
                    let t = arguments;
                    if (t[1]) return s.className.apply(this, t)
                },
                currentComponent(t) {
                    let e = this.item.editor.template || this.feature.editor.template || r.NAMES.ITEM_DEFAULT;
                    return t.editor.template && (e = t.editor.template), e
                },
                getAriaLabel(t, e) {
                    t = t || this.item, e = "number" == typeof e ? e : this.index;
                    let i = t.editor.aria || null;
                    return i && /\[product\]/.test(i) && (i = i.replace("[product]", this.getProductName(e))), i
                },
                ariaNotAvailable() {
                    return this.item.editor.aria ? this.item.editor.aria : this.$store.state.extraInfo["Not available"] ? this.getDataById(this.$store.state.extraInfo["Not available"]).value : "Not available"
                },
                analyticsCTATitle(t, e) {
                    if (t.editor.analytics) {
                        let i = t.editor.analytics;
                        if (i) return /\[product\]/.test(i) && (i = i.replace("[product]", this.getProductAliasName(e))), i.toLowerCase()
                    }
                    return ((t.editor.en || t.value) + " " + this.getProductAliasName(e)).toLowerCase().trim()
                }
            }
        }
    }, {
        160: 160,
        171: 171
    }],
    184: [function(t, e, i) {
        "use strict";
        const s = {
            engagement: {
                attribute: "data-analytics-section-engagement",
                prefix: "name:"
            },
            activitymap: {
                attribute: "data-analytics-activitymap-region-id",
                prefix: ""
            },
            default: {
                attribute: "data-analytics",
                prefix: ""
            }
        };
        e.exports = {
            props: {
                spec: Object,
                columns: Number,
                activeProductsOrder: Array
            },
            computed: {
                analytics() {
                    let t = {};
                    return this.spec.editor.ac ? (this.spec.editor.ac.forEach(e => {
                        s[e] || (e = "default"), t[s[e].attribute] = s[e].prefix + this.spec.editor.en
                    }), t) : null
                }
            }
        }
    }, {}],
    185: [function(t, e, i) {
        "use strict";
        let s = t(160);
        let r = t(184);
        e.exports = Vue.component(s.NAMES.TOGGLEALL, {
            template: '\n<div role="rowgroup" class="compare-section accordion-toggle-all" v-bind="analytics">\n    <div role="row" class="compare-row">\n    <div role="cell gridcell" class="compare-column" :aria-colspan="columns" >\n        <div class="accordion-toggle-all">\n            <button class="accordion-toggle-all-button link" \n\t\t\t\t\tdata-analytics-title="expand all accordions"\n\t\t\t\t\tdata-analytics-click="prop3:expand all accordions"\n\t\t\t\t\tdata-accordion-toggle-all\n\t\t\t\t\tdata-analytics-intrapage-link\n\t\t\t\t\taria-controls="compare-accordion" role="presentation">\n                <span class="accordion-toggle-all-expand hidden" :aria-label="ariaLabel(expand)">{{expand.value}}</span>\n                <span class="accordion-toggle-all-collapse hidden" :aria-label="ariaLabel(collapse)">{{collapse.value}}</span>\n            </button>\n        </div>\n    </div>\n    </div>   \n</div>\n',
            mixins: [r],
            computed: {
                expand() {
                    return this.spec.children && this.spec.children[0] ? this.getDataById(this.spec.children[0]) : (console.warn("GEO won't be able to localize toggle all button text. Please add a new spec in your editor for toggle all button text rendering. For details please refer to user guide accordion section"), {
                        value: "Expand all",
                        editor: {
                            aria: "Expand all accordion items"
                        }
                    })
                },
                collapse() {
                    return this.spec.children && this.spec.children[1] ? this.getDataById(this.spec.children[1]) : (console.warn("GEO won't be able to localize toggle all button text. Please add a new spec in your editor for toggle all button text rendering. For details please refer to user guide accordion section"), {
                        value: "Collapse all",
                        editor: {
                            aria: "Collapse all accordion items"
                        }
                    })
                }
            },
            methods: {
                ariaLabel: t => !!t.editor.aria && t.editor.aria
            }
        })
    }, {
        160: 160,
        184: 184
    }],
    186: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(160),
            n = t(184);
        e.exports = Vue.component(r.NAMES.COLUMN_SPAN_ROW, {
            template: '\n<div v-if="spec" role="rowgroup" :class="[\'compare-section\',sectionClass()]"\n   v-bind="analytics">\n    <div role="row" class="compare-row">\n      <div role="rowheader" v-if="canDisplay()" class="compare-rowheader compare-rowheader-style">\n        <span v-html="spec.value"></span>\n      </div>\n      <div role="rowheader" v-if="!canDisplay()"  class="compare-rowheader">\n        <span class="visuallyhidden" v-html="spec.value"></span>\n\t  </div>\n\t  <div role="cell gridcell" class="first-child compare-column template-column-span-row" :aria-colspan="columns" >\n\t\t  <div  v-for="row in items">\n\t\t\t\t  <div v-for = "item in row"" >\n\t\t\t\t\t\t<ul v-if="item.children">\n\t\t\t\t\t\t\t<li v-for="child in item.children" :class="createClass(child)" v-html="getDataById(child).value"></li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t  \t\t<div v-else v-html="item.value"></div>\n\t\t\t\t  </div>\t\t\n\t\t  </div>\n\t  </div>\n    </div>\n</div>\n',
            mixins: [n],
            computed: {
                items() {
                    let t = [];
                    return this.spec.children.forEach((e, i) => {
                        let s = [];
                        this.$store.state.products.forEach((t, e) => {
                            let r = this.getDataById(this.spec.children[i]),
                                n = this.getDataById(r.children[e]);
                            (n.value || n.children) && s.push(n)
                        }), t.push(s)
                    }), t
                }
            },
            methods: {
                sectionClass() {
                    let t = this.spec.editor.en;
                    if (t) return s.className("section", t)
                },
                canDisplay() {
                    return "false" !== this.spec.editor.show
                },
                createClass(t) {
                    let e = this.getDataById(t);
                    if (e.editor.en) return "item-" + e.editor.en
                }
            }
        })
    }, {
        160: 160,
        171: 171,
        184: 184
    }],
    187: [function(t, e, i) {
        "use strict";
        let s = t(184);
        e.exports = Vue.component("default-content", {
            template: '\n<div :class="{\'accordion-content\': accordion}" :data-accordion-content="accordion">\n    <div v-for="(featureId, index) in children" role="row" class="compare-row">\n    \n        <div role="rowheader" v-if="canDisplay() && index === 0" class="compare-rowheader compare-rowheader-style">\n            <span v-html="spec.value"></span>\n        </div>\n        <div role="rowheader" v-else-if="!canDisplay() && index === 0"  class="compare-rowheader">\n        </div>\n        \n        <div v-else role="rowheader" class="compare-rowheader"></div>\n        <feature-default v-for="(productId, column) in activeProductsOrder" \n                            :key="productId"\n                            :column ="column"\n                            :index="getProductIndex(productId)"\n                            :feature="getDataById(featureId)"/>\n    </div>\n</div>\n',
            mixins: [s],
            props: {
                children: Array,
                accordion: Boolean
            },
            methods: {
                canDisplay() {
                    return "false" !== this.spec.editor.show && !this.accordion
                },
                getProductIndex(t) {
                    return this.$store.state.products.indexOf(t)
                }
            }
        })
    }, {
        184: 184
    }],
    188: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(160),
            n = t(184);
        e.exports = Vue.component(r.NAMES.DEFAULT, {
            template: '\n<div v-if="spec && children.length" role="rowgroup" :class="[\'compare-section\',sectionClass()]"\n   v-bind="analytics" :data-accordion-item="accordionID()" :ref="accordionID()">\n\t<div v-if="accordion" role="row">\n   \t\t<div role="cell gridcell" :aria-colspan="columns" >\n\t\t\t<button \n\t\t\t\tdata-accordion-trigger\n\t\t\t\tdata-analytics-intrapage-link\n\t\t\t\t:data-analytics-title="analyticsTitle()"\n\t\t\t\t:data-analytics-click="analyticsClick()"\n\t\t\t\t:data-analytics-activitymap-region-id="activitymapID()"\n\t\t\t\tclass="accordion-button compare-rowheader-style"\n\t\t\t\t:id="\'accordion-button\' + spec._id"  \n\t\t\t\t:aria-controls="\'accordion-tray-\' + spec._id">\n\t\t\t\t<span class="accordion-title-text" v-html="stripeAnchorTag()"></span>\n\t\t\t\t<span class="accordion-icon" data-accordion-icon></span>\n\t\t\t</button>\n\t\t</div>\n\t</div>\n\t<div v-if="accordion" data-accordion-tray class="accordion-tray" :id="\'accordion-tray-\' + spec._id" :aria-labelledby="\'accordion-button\' + spec._id">\n\t\t<default-content\n\t\t\t:accordion = "accordion"\n\t\t\t:children= "children"\n\t\t\t:spec="spec"\n\t\t\t:activeProductsOrder=\'activeProductsOrder\' />\n\t</div>\n\t<default-content v-else \n\t\t:accordion = "accordion"\n\t\t:children= "children" \n\t\t:spec="spec" \n\t\t:activeProductsOrder=\'activeProductsOrder\' />\n</div>\n',
            mixins: [n],
            computed: {
                specs() {
                    return this.$store.state.specs
                },
                children() {
                    return this.spec.children.filter(t => this.renderRow(t))
                },
                accordion() {
                    return "true" === this.spec.editor.accordion
                }
            },
            updated: function() {
                this.$nextTick(() => {
                    this.accordion && this.$store.commit("accordionUpdate", this.$refs)
                })
            },
            methods: {
                renderRow(t) {
                    let e = !1;
                    return this.activeProductsOrder.every((i, s) => {
                        let r = this.getProductIndex(i),
                            n = this.getDataById(t),
                            a = this.getDataById(n.children[r]);
                        return !a.children && !a.value || (e = !0, !1)
                    }), e
                },
                getProductIndex(t) {
                    return this.$store.state.products.indexOf(t)
                },
                sectionClass() {
                    let t = this.spec.editor.en;
                    if (t) return s.className("section", t)
                },
                stripeAnchorTag() {
                    var t = this.spec.value.replace(/(<\s*)(a\s+href\s*=\s*)("|')([^"']+)("|')/gi, "$1span");
                    return t = t.replace(/<\/\s*a/gi, "</span")
                },
                analyticsTitle() {
                    return "open | ".concat(this.spec.editor.analytics)
                },
                analyticsClick() {
                    return "{'prop3:open': '".concat(this.spec.editor.analytics, "'}")
                },
                activitymapID() {
                    return this.spec.editor.en || null
                },
                accordionID() {
                    return !!this.accordion && "accordion-item-" + this.spec._id
                }
            }
        })
    }, {
        160: 160,
        171: 171,
        184: 184
    }],
    189: [function(t, e, i) {
        "use strict";
        let s = t(162),
            r = t(160),
            n = t(184);
        e.exports = Vue.component(r.NAMES.DROPDOWN, {
            template: '\n<div class="selector-table template-dropdown css-sticky" data-selector-table role="rowgroup" data-analytics-activitymap-region-id="sticky nav" :key="refresh">\n\t<div class="compare-row" role="row">\n\t\t\t<div role="rowheader"  class="compare-rowheader">\n        <span class="visuallyhidden" v-html="spec.value"></span>\n      </div>\n\t\t\t<div class="product-selector" v-for="(id, index) in selectors" :key="id" class="compare-column" :class="{\'first-child\':!index}" role="cell">\n\t\t\t\t<form class="selector-element" autocomplete="off">\n\t\t\t\t\t<select class="selector-dropdown" :id="labelID(index)" @change="onChange($event, index)">\n\t\t\t\t\t\t<optgroup v-for="optgroupId in spec.children" :key="optgroupId" :label="getDataById(optgroupId).value">\n\t\t\t\t\t\t\t<option v-for="optionId in getDataById(optgroupId).children"\n\t\t\t\t\t\t\t\t\tv-if="getDataById(optionId).editor.checkbox === \'true\'"\n\t\t\t\t\t\t\t\t\t:key="optionId"\n\t\t\t\t\t\t\t\t\t:value="getProductId(optionId, optgroupId)"\n\t\t\t\t\t\t\t\t\t:selected="isSelected(index, getProductId(optionId, optgroupId))"\n\t\t\t\t\t\t\t\t\t:aria-selected="isSelected(index, getProductId(optionId, optgroupId))" v-html="getDataById(getProductId(optionId, optgroupId)).value"></option>\n\t\t\t\t\t\t</optgroup>\n\t\t\t\t\t</select>\n\t\t\t\t\t<span class="selector-icon icon icon-chevrondown" aria-hidden="true"></span>\n\t\t\t\t</form>\n\t\t</div>\n  </div>\n</div>',
            mixins: [n],
            computed: {
                products() {
                    return this.$store.state.products
                },
                selectors() {
                    return this.$store.state.products.slice(0, this.columns)
                },
                refresh() {
                    return this.$store.state.refresh
                }
            },
            methods: {
                getProductId(t, e) {
                    let i = this.getDataById(e).children.indexOf(t);
                    return this.products[i]
                },
                isSelected(t, e) {
                    return this.activeProductsOrder[t] === e
                },
                onChange(t, e) {
                    let i = t.target.value,
                        s = this.$store.state.activeProductsOrder,
                        r = s.indexOf(i),
                        n = s[e];
                    if (r > -1) s[r] = n, Vue.set(this.$store.state.activeProductsOrder, r, n);
                    else
                        for (let t in this.$store.state.products)
                            if (t === i) break;
                    this.$store.commit("changeActiveProductsOrder", {
                        index: e,
                        value: i
                    }), this.$parent.$options.methods.updateURL.call(this), this.triggerAnalyticsEvent()
                },
                triggerAnalyticsEvent() {
                    let t = "";
                    for (let e = 0; e < this.columns; e++) t += this.getDataById(this.$store.state.activeProductsOrder[e]).value, e < this.columns - 1 && (t += " | ");
                    s.update(t)
                },
                labelID: t => "selector-".concat(t)
            }
        })
    }, {
        160: 160,
        162: 162,
        184: 184
    }],
    190: [function(t, e, i) {
        "use strict";
        let s = t(160),
            r = t(98).createStandardModal,
            n = t(184);
        e.exports = Vue.component(s.NAMES.MODAL, {
            template: '<div id="all-models" class="compare-modal">\n\t\t<h2 id="modal-header" class="typography-headline-reduced" v-html="spec.value"></h2>\n\t\t<div class="device-list">\n\t\t\t<div class="device-item" v-for="(productId, index ) in products">\n\t\t\t\t<div class="device-content" v-for="featureId in children" :class="\'template-\'+currentComponent(featureId, index)">\n\t\t\t\t\t<keep-alive >\n\t\t\t\t\t\t\t<component :item="item(featureId, index)" \n\t\t\t\t\t\t\t\t\t\t\t :index="index"\n\t\t\t\t\t\t\t\t\t\t\t :feature="feature(featureId)" v-bind:is="currentComponent(featureId, index)"></component>\n\t\t\t\t\t</keep-alive>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>',
            mixins: [n],
            computed: {
                products() {
                    return this.$store.state.products
                },
                children() {
                    return this.spec.children
                }
            },
            methods: {
                feature(t) {
                    return this.getDataById(t)
                },
                item(t, e) {
                    let i = this.feature(t).children[e];
                    return this.getDataById(i)
                },
                currentComponent(t, e) {
                    let i = this.feature(t),
                        r = this.item(t, e),
                        n = i.editor.template || s.NAMES.ITEM_DEFAULT;
                    return r.editor.template && (n = r.editor.template), n
                }
            },
            mounted() {
                if (this.initModal) return;
                this.initModal = !0;
                let t = this.analytics,
                    e = document.getElementById("all-models");
                this.modal = r(e), this.modal.modalElement.setAttribute("aria-labelledby", "modal-header");
                for (let e in t) t.hasOwnProperty(e) && this.modal.modalElement.setAttribute(e, t[e]);
                document.querySelector(".modal-trigger").addEventListener("click", () => {
                    requestAnimationFrame(() => {
                        this.modal.open()
                    })
                })
            }
        })
    }, {
        160: 160,
        184: 184,
        98: 98
    }],
    191: [function(t, e, i) {
        "use strict";
        let s, r = t(171),
            n = t(160);
        try {
            s = t("@marcom/ac-analytics").observer.Gallery
        } catch (t) {}
        let a = t(69),
            o = t(184),
            l = t(183);
        e.exports = Vue.component(n.NAMES.GALLERY, {
            template: '\n<div role="rowgroup" :class="[\'compare-section\',sectionClass(), \'template-gallery\']" v-bind="analytics">\n\t<div role="row" class="compare-row row-gallery">\n\t\t<div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">{{spec.value}}</span></div>\n\t\t<div role="cell gridcell" class="compare-column" v-for="(productId, index) in activeProductsOrder" :class="[{\'first-child\': index === 0}]">\t\n\t\t\t<a v-if="productLinks[productId]" \n\t\t\t   :href="productLinks[productId].editor.link" :class="[\'gallery\', \'gallery-\'+ getDataById(productId).editor.en]"\n\t\t\t   :data-analytics-title="analyticsCTATitle(productLinks[productId], productLinks[productId].index)" >\n\t\t\t  <span class="visuallyhidden">{{getAriaLabel(productLinks[productId], productLinks[productId].index)}}</span>\n\t\t\t\t<figure role="presentation" v-for="color in productColors[productId]" :key="color._id" class="gallery-image" \n\t\t\t\t:class="[renderActiveImageClass(productId, color.editor.en), {\'active\': isCurrent(productId, color.editor.en)}]">\n\t\t\t\t</figure>\n\t\t\t</a>\n\t\t\t<div v-else :class="[\'gallery\', \'gallery-\'+ getDataById(productId).editor.en]">\n\t\t\t\t<figure role="presentation" v-for="color in productColors[productId]" :key="color._id" class="gallery-image" \n\t\t\t\t:class="[renderActiveImageClass(productId, color.editor.en), {\'active\': isCurrent(productId, color.editor.en)}]">\n\t\t\t\t</figure>\n\t\t\t</div>\n\t\t\t<div :class="[\'colornav-wrapper\', \'colornav-wrapper-\'+ getDataById(productId).editor.en]">\n\t\t\t\t<ul class="colornav-items"  role="list">\n\t\t\t\t\t<li class="colornav-item" v-for="color in productColors[productId]" :key="color._id">\n\t\t\t\t\t\t\t<button class="colornav-link"\n\t\t\t\t\t\t\t:class="{\'current\': isCurrent(productId, color.editor.en)}"\n\t\t\t\t\t\t\t@click="updateSelectedColor(productId, color.editor.en, event)">\n\t\t\t\t\t\t\t<figure class="colornav-swatch" :class="className(\'colornav-swatch\', color.editor.en)">\n\t\t\t\t\t\t\t<figcaption class="colornav-label">{{color.value}}</figcaption>\n\t\t\t\t\t\t\t</figure>\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n',
            mixins: [o, l],
            mounted() {
                this.createAnalytics()
            },
            updated() {
                this.createAnalytics()
            },
            props: {
                spec: Object
            },
            data: function() {
                let t = {},
                    e = {},
                    i = {},
                    s = this.spec.children;
                this.$store.state.products.forEach((r, n) => {
                    e[r] = [], s.forEach(s => {
                        let a = this.getDataById(s),
                            o = a.children[n],
                            l = this.getDataById(o);
                        "true" === l.editor.checkbox && (t[r] = t[r] || a.editor.en, e[r].push(a)), l.editor.link && (l.index = n, i[r] = l)
                    })
                });
                let r = document.querySelector('meta[property="analytics-track"]').content.replace(" -", "").toLowerCase();
                return {
                    activeColor: t,
                    productColors: e,
                    productLinks: i,
                    pageName: r,
                    acAnalytics: {
                        events: {
                            UPDATE: "update",
                            UPDATE_COMPLETE: "update:complete"
                        }
                    }
                }
            },
            methods: {
                renderActiveImageClass(t, e) {
                    let i = ["image-compare", this.getDataById(t).editor.en, e];
                    return r.className.apply(this, i)
                },
                className() {
                    let t = arguments;
                    return r.className.apply(this, t)
                },
                isCurrent(t, e) {
                    return this.activeColor[t] === e
                },
                updateSelectedColor(t, e, i) {
                    this.activeColor[t] = e;
                    let s = "gallery-".concat(this.getDataById(t).editor.en, "-").concat(e);
                    if (s === this.acAnalytics[t].lastTrackedItem) return;
                    if (!this.acAnalytics[t].lastTrackedItem) {
                        let e = this.productColors[t][0].editor.en;
                        this.acAnalytics[t].lastTrackedItem = "gallery-".concat(this.getDataById(t).editor.en, "-").concat(e)
                    }
                    let r = {
                        incoming: {
                            id: s
                        },
                        outgoing: {
                            id: this.acAnalytics[t].lastTrackedItem
                        },
                        interactionEvent: i
                    };
                    this.acAnalytics[t].lastTrackedItem = s, this.acAnalytics[t].observer.gallery.trigger(this.acAnalytics.events.UPDATE_COMPLETE, r)
                },
                createObserver(t) {
                    let e = "gallery-".concat(this.getDataById(t).editor.en);
                    if (s) {
                        let t = new a.EventEmitterMicro;
                        return new s(t, {
                            galleryName: e,
                            beforeUpdateEvent: this.acAnalytics.events.UPDATE,
                            afterUpdateEvent: this.acAnalytics.events.UPDATE_COMPLETE,
                            trackAutoRotate: !0
                        })
                    }
                },
                createAnalytics() {
                    this.activeProductsOrder.forEach(t => {
                        this.acAnalytics[t] || (this.acAnalytics[t] = {}, this.acAnalytics[t].observer = this.createObserver(t))
                    })
                },
                sectionClass() {
                    let t = this.spec.editor.en;
                    if (t) return r.className("section", t)
                }
            }
        })
    }, {
        160: 160,
        171: 171,
        183: 183,
        184: 184,
        69: 69,
        undefined: void 0
    }],
    192: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(160),
            n = t(184);
        e.exports = Vue.component(r.NAMES.TECH_SPEC, {
            template: '\n<div v-if="spec" role="rowgroup" class="compare-section section-tech-specs template-tech-specs"\n   v-bind="analytics" ref="techspec">\n    <div  role="row" class="compare-row" :data-column="columns">\n    \t<div role="rowheader" class="compare-rowheader"></div>\n    \t<div v-for=" index in activeProductsIndex" role="cell gridcell" class="compare-column">\n\t\t\t\t\t<keep-alive v-for="featureId in children">\n\t\t\t\t\t\t\t<component :item="item(featureId, index)" \n\t\t\t\t\t\t\t\t\t\t\t :index="index"\n\t\t\t\t\t\t\t\t\t\t\t :feature="feature(featureId)" v-bind:is="currentComponent(featureId, index)" :class="\'template-\'+currentComponent(featureId, index)"></component>\n\t\t\t\t\t</keep-alive>\n\t\t\t\t \n\t\t\t\t</div>\n    </div>\n</div>\n',
            mixins: [n],
            mounted() {
                let t = s.debounce(this.addMarginToTable, 300);
                window.requestAnimationFrame(() => {
                    this.addMarginToTable()
                }), window.addEventListener("resize", t)
            },
            updated: function() {
                this.addMarginToTable()
            },
            computed: {
                products() {
                    return this.$store.state.products
                },
                activeProductsIndex() {
                    let t = [];
                    return this.activeProductsOrder.forEach(e => {
                        t.push(this.getProductIndex(e))
                    }), t
                },
                children() {
                    return this.spec.children
                }
            },
            methods: {
                getProductIndex(t) {
                    return this.products.indexOf(t)
                },
                feature(t) {
                    return this.getDataById(t)
                },
                item(t, e) {
                    let i = this.feature(t).children[e];
                    return this.getDataById(i)
                },
                currentComponent(t, e) {
                    let i = this.feature(t),
                        s = this.item(t, e),
                        n = i.editor.template || r.NAMES.ITEM_DEFAULT;
                    return s.editor.template && (n = s.editor.template), n
                },
                addMarginToTable() {
                    this.$refs.techspec.parentElement.style.marginBottom = this.$refs.techspec.clientHeight + "px"
                }
            }
        })
    }, {
        160: 160,
        171: 171,
        184: 184
    }],
    193: [function(t, e, i) {
        "use strict";
        const s = t(71),
            r = t(213),
            n = t(218),
            a = t(221),
            o = t(205),
            l = t(196),
            c = {
                endpoint: null,
                aliases: null,
                timeout: 5,
                dummyPrices: !1,
                method: "GET",
                switch: null
            };
        e.exports = class {
            constructor(t = [], e = {}) {
                this.ids = Array.isArray(t) ? t : [t], this._originalIDs = [...this.ids], this.identifierToAliasMap = {}, this.options = this._processOptions(e), this.itemsWithDummyPrice = [], this.identifierParam = {}
            }
            formatResponseItem() {
                throw new Error("not implemented")
            }
            getItemsFromResponse() {
                throw new Error("not implemented")
            }
            createDummyItem() {
                throw new Error("not implemented")
            }
            send() {
                return this._maybeForceError().then(() => this._request()).then(t => this._processResponse(t)).then(t => this._createProductObjects(t)).catch(t => this._handleError(t))
            }
            getKeys(t) {
                return this.identifierToAliasMap[t] || this.identifierToAliasMap["slug:".concat(t)] || [t]
            }
            loggData(t) {
                n.group("%cResults from Apple Online Store", "background-color:#27a33f;color:white;padding:2px 5px"), n.log(t), n.groupEnd(), n.enabled && this.itemsWithDummyPrice.length && (n.group("Dummy Prices"), n.warn("Using dummy prices for the following product identifiers: " + this.itemsWithDummyPrice.join(", ")), n.info("$777,777 â€” The API service may require authentication and/or authorization. \n$888,888 â€” The product identifer is currently unknown to the API service. \n$999,999 â€” The product identifier is known to the API service, but the price has yet to be set. \n"), n.groupEnd())
            }
            _createProductObjects(t) {
                const e = {};
                return Object.entries(t).forEach(([t, i]) => {
                    let s = null;
                    try {
                        s = this.formatResponseItem(t, i)
                    } catch (t) {
                        if ("InvalidDataError" !== t.name) throw t
                    }
                    this.getKeys(t).forEach(t => {
                        e[t] = s
                    })
                }), Object.defineProperty(e, "aliases", {
                    value: this.options.aliases
                }), this.loggData(e), new l(null, e)
            }
            _handleError(t) {
                const e = {};
                this.ids.forEach(t => e[t] = null);
                let i = new l(t, e);
                if (!t) return i;
                if (!Object.keys(o).some(e => t.name === e)) throw t;
                if ("UnexpectedError" === t.name && this.options.dummyPrices) {
                    const e = {};
                    this._originalIDs.forEach(t => {
                        e[t] = this.createDummyItem(t), this.itemsWithDummyPrice.push(t)
                    }), i = new l(t, e)
                }
                return t && "function" == typeof t.showHint && t.showHint(i.products), i
            }
            _maybeForceError() {
                return new Promise((t, e) => {
                    if (this.options.dummyPrices && "undefined" != typeof window && window.location.search.indexOf("39f4f1f5-c4a1-4a7c-ab30-085335a11146") > -1) {
                        const t = s("39f4f1f5-c4a1-4a7c-ab30-085335a11146", null);
                        e(t && o[t] && new o[t])
                    }
                    t()
                })
            }
            _processOptions(t) {
                if (!(t = Object.assign({}, c, t)).endpoint) throw new o.ConfigurationError({
                    type: "endpoint"
                });
                const e = t.aliases ? Object.entries(t.aliases) : [];
                return e.length && (this.identifierToAliasMap = e.reduce((t, [e, i]) => (t[i] = t[i] || [], t[i].push(e), t), {}), this.ids = this.ids.map(e => t.aliases[e] || e)), t
            }
            _processResponse(t) {
                let e = null,
                    i = null;
                switch (parseInt(t.getResponseHeader("x-rewrite-status"), 10) || t.status) {
                    case 404:
                        throw new o.ServiceNotFoundError;
                    case 503:
                        throw new o.ServiceUnavailableError;
                    case 400:
                        throw new o.UnexpectedError;
                    case 200:
                        if (i = a(t.responseText), null !== i && (e = this.getItemsFromResponse(i), e)) return e;
                    default:
                        throw new o.InvalidDataError
                }
            }
            _request() {
                return new Promise((t, e) => {
                    const i = new XMLHttpRequest;
                    i.withCredentials = !0, i.onloadend = t.bind(this, i), i.ontimeout = e.bind(this, new o.TimeoutError(this.options.timeout)), i.onerror = e.bind(this, new o.UnexpectedError), i.open(this.options.method, r(this.options.endpoint, this.identifierParam, this.ids), !0), i.timeout = 1e3 * (this.options.timeout || 0), i.send()
                })
            }
        }
    }, {
        196: 196,
        205: 205,
        213: 213,
        218: 218,
        221: 221,
        71: 71
    }],
    194: [function(t, e, i) {
        "use strict";
        const s = t(219),
            r = t(210),
            n = t(193);
        e.exports = class extends n {
            constructor(t, e) {
                super(t, e), this.identifierParam = "parts"
            }
            createDummyItem(t) {
                return s(t, "unauthorized")
            }
            formatResponseItem(t, e) {
                let i = null;
                return this.options.dummyPrices && "UNKNOWN" === e.type && (e = s(t, "unknown"), this.itemsWithDummyPrice.push(t)), i = new r(e), i.price && 999999 === i.price.value && this.itemsWithDummyPrice.push(t), i
            }
            getItemsFromResponse(t) {
                return t.items
            }
        }
    }, {
        193: 193,
        210: 210,
        219: 219
    }],
    195: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }
        const a = t(220),
            o = t(193),
            l = t(211);
        e.exports = class extends o {
            constructor(t, e) {
                super(t, n(n({}, e), {}, {
                    method: "POST"
                })), this.identifierParam = {
                    ids: "ids",
                    slugs: "slugs"
                }
            }
            createDummyItem(t) {
                return a(t, "unauthorized")
            }
            formatResponseItem(t, e) {
                let i = null;
                return this.options.dummyPrices && "UNKNOWN" === e.productName && (e = a(t, "unknown"), this.itemsWithDummyPrice.push(t)), i = new l(e), i.credit && 999999 === i.credit.value && this.itemsWithDummyPrice.push(t), i
            }
            getItemsFromResponse(t) {
                return t.ids
            }
        }
    }, {
        193: 193,
        211: 211,
        220: 220,
        72: 72,
        73: 73
    }],
    196: [function(t, e, i) {
        "use strict";
        e.exports = class {
            constructor(t = null, e = {}) {
                this.error = t, this.products = e
            }
        }
    }, {}],
    197: [function(t, e, i) {
        "use strict";
        const s = t(206),
            r = t(207),
            n = t(208),
            a = t(216),
            o = "Elements",
            l = "Hide",
            c = "HideAll",
            h = "MultipleElementsToHide",
            u = "Product",
            d = "SingleElementsToHide",
            p = "edupricing",
            m = "pricing",
            f = "tradein";
        e.exports = new class {
            getProductID(t, e) {
                const i = [];
                return e.forEach(e => {
                    i.push(e.dataset["".concat(t).concat(u)])
                }), [...new Set(i)]
            }
            setElements(t) {
                const e = [...document.querySelectorAll("[data-".concat(t, "-product]"))],
                    i = Array.prototype.slice.call(e).filter(t => "SCRIPT" !== t.tagName);
                this["".concat(t).concat(o)] = i
            }
            getSingleElementToHide(t) {
                const e = [...document.querySelectorAll("[data-".concat(t, "-hide]"))];
                this["".concat(t).concat(d)] = e
            }
            getMultipleElementsToHide(t) {
                const e = [...document.querySelectorAll("[data-".concat(t, "-hide-all]"))];
                this["".concat(t).concat(h)] = e
            }
            fetchProductInfo(t, e = {}) {
                let i, l;
                const c = this.getProductID(t, this["".concat(t).concat(o)]);
                return a(t).then(a => {
                    const o = Object.assign({}, a, e);
                    return t === m ? l = r(c, e) : t === p ? l = s(c, e) : t === f ? l = n(c, e) : i = "API not supported", i || l.then(t => ({
                        response: t,
                        options: o
                    }))
                })
            }
            getValueFromPath(t, e) {
                return t.replace(/\s+/g, "").replace(/\$\{([\w\d.]+)\}/g, (t, i) => i.split(".").reduce((t, e) => t && t[e] ? t[e] : "", e))
            }
            getproductID(t, e) {
                return t.dataset["".concat(e).concat(u)]
            }
            checkForProductNameKey(t, e) {
                return t && "productName" in t && "UNKNOWN" === e
            }
            checkForTypeKey(t, e) {
                return t && "type" in t && "UNKNOWN" === e
            }
            checkForSingleElementIDs(t, e, i, s) {
                const r = s.dataset["".concat(t).concat(l)],
                    n = i.products[r];
                r === this.getproductID(e, t) && ((n && !this.checkForProductNameKey(n, n.productName) && !this.checkForTypeKey(n, n.type) || e.innerText) && e.innerText || (s.style.display = "none"))
            }
            hideSingleElements(t, e, i) {
                this["".concat(i).concat(d)].forEach(s => {
                    const r = s.dataset["".concat(i).concat(l)],
                        n = e.products[r];
                    (!t.innerText || e.error || !n || this.checkForProductNameKey(n, n.productName) || this.checkForTypeKey(n, n.type)) && this.checkForSingleElementIDs(i, t, e, s)
                })
            }
            hideMultipleElements(t, e) {
                this["".concat(e).concat(h)].forEach(i => {
                    const s = i.dataset["".concat(e).concat(c)].split(",").every(e => !t.products[e] || this.checkForProductNameKey(t.products[e], t.products[e].productName) || this.checkForTypeKey(t.products[e], t.products[e].type));
                    (t.error || s) && (i.style.display = "none")
                })
            }
            handleProductInfo(t, e, i, s) {
                let r;
                if (!i.error || s.dummyPrices) {
                    const s = i.products[this.getproductID(e, t)],
                        n = (e.dataset.productTemplate || "").replace(/\$\{\s*([\w\d.]+)\s*\}/g, t => {
                            const e = this.getValueFromPath(t, s);
                            return e || (r = !0), e
                        });
                    s && !r ? (e.textContent = n, e.dataset.pricingLoaded = "", e.parentElement.classList.add("has-dynamic-content")) : this.handleError(e, i, t)
                } else this.handleError(e, i, t)
            }
            handleError(t, e, i) {
                this.getSingleElementToHide(i), this.hideSingleElements(t, e, i), this.getMultipleElementsToHide(i), this.hideMultipleElements(e, i), t.innerText || (t.style.display = "none")
            }
            fetchProductDataFromHTML(t, e) {
                return new Promise(i => {
                    this.setElements(t), this.fetchProductInfo(t, e).then(({
                        response: e,
                        options: s
                    }) => {
                        e && (this["".concat(t).concat(o)].forEach(i => this.handleProductInfo(t, i, e, s)), i(e.error))
                    }).catch(t => {
                        throw t
                    })
                })
            }
            loadEduPricingFromHTML(t) {
                return this.fetchProductDataFromHTML(p, t)
            }
            loadPricingFromHTML(t) {
                return this.fetchProductDataFromHTML(m, t)
            }
            loadTradeInFromHTML(t) {
                return this.fetchProductDataFromHTML(f, t)
            }
        }
    }, {
        206: 206,
        207: 207,
        208: 208,
        216: 216
    }],
    198: [function(t, e, i) {
        "use strict";
        e.exports = {
            mockPrices: {
                unauthorized: 777777,
                unknown: 888888
            }
        }
    }, {}],
    199: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor(t = {}) {
                let e;
                "endpoint" === t.type && (e = "Failed to fetch product prices: The API service endpoint was not specified."), super(e), this.name = "ConfigurationError", this.type = t.type
            }
            showHint() {
                "endpoint" === this.type && (s.warn(this.message + " This may be expected if this page's locale doesn't have an Apple Online Store."), s.info('If prices are expected for this locale, check that the API service endpoint is specified in HTML with %c<link rel="ac:pricing-endpoint" href="/path/to/endpoint">%c or the "fetchProducts" function\'s "endpoint" option.', "font-family:monospace", ""))
            }
        }
    }, {
        218: 218
    }],
    200: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor(t) {
                super(t || "Failed to fetch product price: The API service responded with an unexpected data format."), this.name = "InvalidDataError"
            }
            showHint() {
                s.warn(this.message)
            }
        }
    }, {
        218: 218
    }],
    201: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor() {
                super("Failed to fetch product prices: The API service responded with a status of 404 (Not Found)."), this.name = "ServiceNotFoundError"
            }
            showHint() {
                s.warn(this.message), s.info('Check the "href" value of the %c<link rel="ac:pricing-endpoint">%c tag or the "fetchProducts" function\'s "endpoint" option, if specified.', "font-family:monospace", "")
            }
        }
    }, {
        218: 218
    }],
    202: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor() {
                super("Failed to fetch product prices: The Apple Online Store is temporarily unavailable."), this.name = "ServiceUnavailableError"
            }
            showHint() {
                s.warn(this.message)
            }
        }
    }, {
        218: 218
    }],
    203: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor(t) {
                super("Failed to fetch product prices: The API service did not respond within " + t + " seconds, so the request was aborted."), this.name = "TimeoutError", this.timeoutValue = t
            }
            showHint() {
                s.warn(this.message)
            }
        }
    }, {
        218: 218
    }],
    204: [function(t, e, i) {
        "use strict";
        const s = t(218);
        e.exports = class extends Error {
            constructor() {
                super("Failed to fetch prices: An unexpected error occured."), this.name = "UnexpectedError"
            }
            showHint() {
                s.warn(this.message), s.info("The API service endpoint may require authentication and/or authorization.")
            }
        }
    }, {
        218: 218
    }],
    205: [function(t, e, i) {
        "use strict";
        e.exports = {
            ConfigurationError: t(199),
            ServiceNotFoundError: t(201),
            ServiceUnavailableError: t(202),
            TimeoutError: t(203),
            InvalidDataError: t(200),
            UnexpectedError: t(204)
        }
    }, {
        199: 199,
        200: 200,
        201: 201,
        202: 202,
        203: 203,
        204: 204
    }],
    206: [function(t, e, i) {
        "use strict";
        const s = t(216),
            r = t(196),
            n = t(194),
            a = t(217);
        e.exports = function(t = [], e = {}) {
            if (!t.length) {
                const t = new r;
                return Promise.resolve(t)
            }
            return s("edupricing").then(i => {
                if (i.switch) {
                    const e = a(i, t);
                    t = e
                }
                const s = Object.assign({}, i, e);
                return new n(t, s).send()
            })
        }
    }, {
        194: 194,
        196: 196,
        216: 216,
        217: 217
    }],
    207: [function(t, e, i) {
        "use strict";
        const s = t(216),
            r = t(196),
            n = t(194),
            a = t(217);
        e.exports = function(t = [], e = {}) {
            if (!t.length) {
                const t = new r;
                return Promise.resolve(t)
            }
            return s("pricing").then(i => {
                if (i.switch) {
                    const e = a(i, t);
                    t = e
                }
                const s = Object.assign({}, i, e);
                return new n(t, s).send()
            })
        }
    }, {
        194: 194,
        196: 196,
        216: 216,
        217: 217
    }],
    208: [function(t, e, i) {
        "use strict";
        const s = t(216),
            r = t(196),
            n = t(195),
            a = t(217);
        e.exports = function(t = [], e = {}) {
            if (!t.length) {
                const t = new r;
                return Promise.resolve(t)
            }
            return s("tradein").then(i => {
                if (i.switch) {
                    const e = a(i, t);
                    t = e
                }
                const s = Object.assign({}, i, e);
                return new n(t, s).send()
            })
        }
    }, {
        195: 195,
        196: 196,
        216: 216,
        217: 217
    }],
    209: [function(t, e, i) {
        "use strict";
        e.exports = Object.assign({
            applyPrices: t(197),
            fetchEduProducts: t(206),
            fetchProducts: t(207),
            fetchTradeIns: t(208),
            Product: t(210),
            TradeIn: t(211)
        }, t(205))
    }, {
        197: 197,
        205: 205,
        206: 206,
        207: 207,
        208: 208,
        210: 210,
        211: 211
    }],
    210: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }
        const a = t(215),
            o = t(222),
            l = t(200),
            c = (t = "id") => e => void 0 === e || o(e, e => ({
                [t]: e.isString,
                productName: e.isString,
                credit: e.isObject,
                "credit.value": e.isNumber,
                "credit.display": e.isObject,
                "credit.display.actual": e.isString,
                "credit.display.maxValue": e.isOptionalString,
                "credit.display.minValue": e.isOptionalString,
                "credit.display.range": e.isOptionalString,
                "credit.display.smart": e.isString,
                "credit.display.upto": e.isString,
                priceWithCreditApplied: e.isObject,
                "priceWithCreditApplied.value": e.isNumber,
                "priceWithCreditApplied.display.actual": e.isString,
                "priceWithCreditApplied.display.apr": e.isOptionalString,
                "priceWithCreditApplied.display.disclaimer": e.isOptionalString,
                "priceWithCreditApplied.display.from": e.isString,
                "priceWithCreditApplied.display.monthlyFrom": e.isOptionalString,
                "priceWithCreditApplied.display.monthlyPrice": e.isOptionalString,
                "priceWithCreditApplied.display.months": e.isOptionalString,
                "priceWithCreditApplied.display.perMonth": e.isOptionalString,
                "priceWithCreditApplied.display.perMonthActual": e.isOptionalString,
                "priceWithCreditApplied.display.perMonthSmart": e.isOptionalString,
                "priceWithCreditApplied.display.perMonthValue": e.isOptionalString,
                "priceWithCreditApplied.display.smart": e.isString
            })),
            h = (t = "id") => e => n(n({}, (t => ({
                id: t.isString,
                name: t.isString,
                type: t => ["WUIP", "PART"].includes(t),
                price: t.isObject,
                "price.value": t.isNumber,
                "price.display": t.isObject,
                "price.display.disclaimer": t.isOptionalString,
                "price.display.legal": t.isOptionalString,
                "price.display.actual": t.isString,
                "price.display.apr": t.isOptionalString,
                "price.display.monthlyFrom": t.isOptionalString,
                "price.display.monthlyPrice": t.isOptionalString,
                "price.display.months": t.isOptionalString,
                "price.display.perMonth": t.isOptionalString,
                "price.display.perMonthActual": t.isOptionalString,
                "price.display.perMonthSmart": t.isOptionalString,
                "price.display.perMonthValue": t.isOptionalString,
                "price.display.smart": t.isString,
                "price.display.from": (t, e) => "WUIP" === e.type ? "string" == typeof t : void 0 === t
            }))(e)), {}, {
                tradeIn: c(t)
            });
        class u {
            constructor(t) {
                if (!u.validate(t)) throw new l("Could not create Product, because the given JSON contains invalid data.");
                a(this, t)
            }
            get isWUIP() {
                return "WUIP" === this.type
            }
            get isPart() {
                return "PART" === this.type
            }
            static validate(t) {
                if (!t.tradeIn) return o(t, h);
                if (t.tradeIn.slug) return o(t, h("slug"));
                if (t.tradeIn.id) return o(t, h("id"));
                throw new Error("Cannot validate Product data.")
            }
        }
        e.exports = u
    }, {
        200: 200,
        215: 215,
        222: 222,
        72: 72,
        73: 73
    }],
    211: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }
        const a = t(215),
            o = t(222),
            l = t(200),
            c = (t = "id") => e => n(n({}, (t => ({
                productName: t.isString,
                productNameWithMaxPrice: t.isString,
                credit: t.isObject,
                "credit.value": t.isNumber,
                "credit.display": t.isObject,
                "credit.display.actual": t.isString,
                "credit.display.maxValue": t.isOptionalString,
                "credit.display.minValue": t.isOptionalString,
                "credit.display.range": t.isOptionalString,
                "credit.display.smart": t.isString,
                "credit.display.upto": t.isString
            }))(e)), {}, {
                [t]: e.isString
            });
        class h {
            constructor(t) {
                if (!h.validate(t)) throw new l("Could not create TradeIn, because the given JSON contains invalid data.");
                a(this, t)
            }
            static validate(t) {
                if (t.slug) return o(t, c("slug"));
                if (t.id) return o(t, c("id"));
                throw new Error("Cannot validate TradeIn data.")
            }
        }
        e.exports = h
    }, {
        200: 200,
        215: 215,
        222: 222,
        72: 72,
        73: 73
    }],
    212: [function(t, e, i) {
        "use strict";
        e.exports = function(t = []) {
            return Array.isArray(t) || (t = [t]), t.filter(t => "string" == typeof t).map(t => encodeURIComponent(String(t).trim())).join(",")
        }
    }, {}],
    213: [function(t, e, i) {
        "use strict";
        const s = t(212),
            r = /\?(.+)/,
            n = /(#.*)/;
        e.exports = function(t, e, i = []) {
            const a = !Array.isArray(i),
                o = [],
                l = [],
                c = t => {
                    t.match("^slug:") ? l.push((t => t.split(":")[1])(t)) : o.push(t)
                };
            if (a) c(i);
            else
                for (const t of i) c(t);
            const h = ((t = t.replace(n, "")).match(r) || [])[1];
            let u = t;
            if (i.length) {
                const t = ((t, e, i) => {
                        const s = !t.length && e.length,
                            r = t.length;
                        return "parts" === i ? i : s ? i.slugs : r ? i.ids : ""
                    })(o, l, e),
                    i = "".concat(s(o)).concat(((t, e) => {
                        const i = t.length && e.length,
                            r = !t.length && e.length;
                        return i ? "&slugs=".concat(s(e)) : r ? s(e) : ""
                    })(o, l));
                u += h ? "&" : "?", u = u.concat("".concat(t, "=").concat(i))
            }
            return u
        }
    }, {
        212: 212
    }],
    214: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            const i = t % 1 == 0 ? 0 : 2;
            return t > 9999 ? t.toLocaleString(e, {
                minimumFractionDigits: i,
                maximumFractionDigits: i
            }) : t.toFixed(i)
        }
    }, {}],
    215: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            Object.entries(e).forEach(([e, i]) => {
                t[e] || Object.defineProperty(t, e, {
                    enumerable: !0,
                    value: "object" == typeof i ? Object.freeze(JSON.parse(JSON.stringify(i))) : i
                })
            })
        }
    }, {}],
    216: [function(t, e, i) {
        "use strict";
        const s = t(122),
            r = t => document.querySelector('link[rel="ac:'.concat(t, '-endpoint"]')),
            n = (t, e) => (t => document.querySelectorAll('meta[name="ac:'.concat(t, '-alias"]')))(t).forEach(t => {
                const [i, s] = (t.getAttribute("content") || "").split("=");
                i && s && (e.aliases = e.aliases || {}, e.aliases[i] = s)
            }),
            a = (t, e) => (t => document.querySelectorAll('meta[name="ac:'.concat(t, '-disable"]')))(t).forEach(t => {
                const i = (t.getAttribute("content") || "").split(",");
                i && (e.switch = i)
            });
        e.exports = function(t) {
            return new Promise(e => {
                "undefined" != typeof window && window.document ? s(() => {
                    const i = {};
                    r(t) && (i.endpoint = (r(t).getAttribute("href") || "").trim()), n(t, i), a(t, i);
                    const s = document.querySelector('meta[name="ac:pricing-dummy"]');
                    s && (i.dummyPrices = "true" === (s.getAttribute("content") || "").trim()), e(i)
                }) : e({})
            })
        }
    }, {
        122: 122
    }],
    217: [function(t, e, i) {
        "use strict";
        var s = t(73)(t(72));

        function r(t, e) {
            var i = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var s = Object.getOwnPropertySymbols(t);
                e && (s = s.filter((function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), i.push.apply(i, s)
            }
            return i
        }

        function n(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = null != arguments[e] ? arguments[e] : {};
                e % 2 ? r(Object(i), !0).forEach((function(e) {
                    (0, s.default)(t, e, i[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : r(Object(i)).forEach((function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
                }))
            }
            return t
        }

        function a(t, e) {
            return Object.fromEntries(Object.entries(t).filter(([t, i]) => !e.includes(i)))
        }
        e.exports = function(t, e) {
            if (t.switch) {
                const i = t.switch.includes("true");
                if (i) return;
                if (!i) {
                    const i = t.switch,
                        s = function(t, e) {
                            if (t.aliases) return a(t.aliases, e)
                        }(t, i),
                        r = function(t, e, i) {
                            if (!e.aliases) {
                                return a(t.reduce((t, e) => n(n({}, t), {}, {
                                    [e]: e
                                }), {}), i)
                            }
                            const s = Object.keys(e.aliases);
                            return a(t.filter(t => !s.includes(t)).reduce((t, e) => n(n({}, t), {}, {
                                [e]: e
                            }), {}), i)
                        }(e, t, i),
                        o = n(n({}, s), r);
                    t.aliases = o;
                    return function(t, e) {
                        return Object.values(t).filter(t => !e.includes(t))
                    }(t.aliases, i)
                }
            }
        }
    }, {
        72: 72,
        73: 73
    }],
    218: [function(t, e, i) {
        "use strict";
        const s = t(42),
            r = "[ @marcom/pricing ]",
            n = Object.keys(s);
        let a = !1;
        for (let t = 0, i = n.length; t < i; t++) {
            const i = n[t],
                o = "function" == typeof s[i] ? s[i] : null;
            o && (e.exports[i] = function() {
                const t = Array.prototype.slice.call(arguments);
                a || "string" != typeof t[0] || (t[0] = "".concat(r, " ").concat(t[0])), "group" !== i && "groupCollapsed" !== i || (a = !0), "groupEnd" === i && (a = !1), o.apply(s, t)
            })
        }
        e.exports.enabled = s.enabled
    }, {
        42: 42
    }],
    219: [function(t, e, i) {
        "use strict";
        const {
            mockPrices: s
        } = t(198), r = t(214);
        e.exports = function(t, e, i = "en") {
            const n = parseFloat(s[e] || e || 0),
                a = r(n, i);
            return {
                id: t,
                name: "",
                type: "WUIP",
                price: {
                    value: n,
                    display: {
                        actual: "$" + Number(n).toLocaleString(i, {
                            minimumFractionDigits: 2
                        }),
                        smart: "$" + a,
                        from: "From $" + a,
                        monthlyFrom: "From $" + a + "/mo."
                    }
                }
            }
        }
    }, {
        198: 198,
        214: 214
    }],
    220: [function(t, e, i) {
        "use strict";
        const {
            mockPrices: s
        } = t(198), r = t(214);
        e.exports = function(t, e, i = "en") {
            const n = parseFloat(s[e] || e || 0),
                a = r(n, i);
            return {
                id: t,
                productName: "",
                productNameWithMaxPrice: "",
                credit: {
                    value: n,
                    display: {
                        actual: "$" + Number(n).toLocaleString(i, {
                            minimumFractionDigits: 2
                        }),
                        smart: "$" + a,
                        from: "From $" + a,
                        upto: "Up to $" + a
                    }
                }
            }
        }
    }, {
        198: 198,
        214: 214
    }],
    221: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            try {
                return JSON.parse(t)
            } catch (t) {
                return null
            }
        }
    }, {}],
    222: [function(t, e, i) {
        "use strict";
        const s = t(218),
            r = "www.apple.com" === window.location.host || "www.apple.com.cn" === window.location.host,
            n = {
                isString: t => "string" == typeof t,
                isOptionalString: t => !t || "string" == typeof t,
                isNumber: t => "number" == typeof t,
                isObject: t => "[object Object]" === Object.prototype.toString.call(t)
            };

        function a(t, e) {
            return e.split(".").reduce((t, e) => t && t[e], t)
        }
        e.exports = function(t, e) {
            if (r) return !0;
            "function" == typeof e && (e = e(n));
            const i = Object.entries(e);
            for (let e = 0, r = i.length; e < r; e++) {
                const [r, n] = i[e], o = r.indexOf(".") > -1 ? a(t, r) : t[r];
                if (!0 !== n.call(t, o, t)) return s.error('Schema property "'.concat(r, '" does not match response.')), !1
            }
            return !0
        }
    }, {
        218: 218
    }],
    223: [function(t, e, i) {
        "use strict";
        "undefined" != typeof window && (window.DOMMatrix = window.DOMMatrix || window.WebKitCSSMatrix || window.CSSMatrix || window.MSCSSMatrix);
        const s = 180 / Math.PI,
            r = t => Math.round(1e6 * t) / 1e6;

        function n(t) {
            return Math.sqrt(t[0] * t[0] + t[1] * t[1] + t[2] * t[2])
        }

        function a(t, e) {
            return 0 === e ? Array.from(t) : [t[0] / e, t[1] / e, t[2] / e]
        }

        function o(t, e) {
            return t[0] * e[0] + t[1] * e[1] + t[2] * e[2]
        }

        function l(t, e, i, s) {
            return [t[0] * i + e[0] * s, t[1] * i + e[1] * s, t[2] * i + e[2] * s]
        }

        function c(t) {
            const e = new Float32Array(4),
                i = new Float32Array(3),
                c = new Float32Array(3),
                h = new Float32Array(3);
            h[0] = t[3][0], h[1] = t[3][1], h[2] = t[3][2];
            const u = new Array(3);
            for (let e = 0; e < 3; e++) u[e] = t[e].slice(0, 3);
            i[0] = n(u[0]), u[0] = a(u[0], i[0]), c[0] = o(u[0], u[1]), u[1] = l(u[1], u[0], 1, -c[0]), i[1] = n(u[1]), u[1] = a(u[1], i[1]), c[0] /= i[1], c[1] = o(u[0], u[2]), u[2] = l(u[2], u[0], 1, -c[1]), c[2] = o(u[1], u[2]), u[2] = l(u[2], u[1], 1, -c[2]), i[2] = n(u[2]), u[2] = a(u[2], i[2]), c[1] /= i[2], c[2] /= i[2];
            const d = (p = u[1], m = u[2], [p[1] * m[2] - p[2] * m[1], p[2] * m[0] - p[0] * m[2], p[0] * m[1] - p[1] * m[0]]);
            var p, m;
            if (o(u[0], d) < 0)
                for (let t = 0; t < 3; t++) i[t] *= -1, u[t][0] *= -1, u[t][1] *= -1, u[t][2] *= -1;
            let f;
            return e[0] = .5 * Math.sqrt(Math.max(1 + u[0][0] - u[1][1] - u[2][2], 0)), e[1] = .5 * Math.sqrt(Math.max(1 - u[0][0] + u[1][1] - u[2][2], 0)), e[2] = .5 * Math.sqrt(Math.max(1 - u[0][0] - u[1][1] + u[2][2], 0)), e[3] = .5 * Math.sqrt(Math.max(1 + u[0][0] + u[1][1] + u[2][2], 0)), u[2][1] > u[1][2] && (e[0] = -e[0]), u[0][2] > u[2][0] && (e[1] = -e[1]), u[1][0] > u[0][1] && (e[2] = -e[2]), f = e[0] < .001 && e[0] >= 0 && e[1] < .001 && e[1] >= 0 ? [0, 0, r(180 * Math.atan2(u[0][1], u[0][0]) / Math.PI)] : function(t) {
                const [e, i, n, a] = t, o = e * e, l = i * i, c = n * n, h = e * i + n * a, u = a * a + o + l + c;
                return h > .49999 * u ? [0, 2 * Math.atan2(e, a) * s, 90] : h < -.49999 * u ? [0, -2 * Math.atan2(e, a) * s, -90] : [r(Math.atan2(2 * e * a - 2 * i * n, 1 - 2 * o - 2 * c) * s), r(Math.atan2(2 * i * a - 2 * e * n, 1 - 2 * l - 2 * c) * s), r(Math.asin(2 * e * i + 2 * n * a) * s)]
            }(e), {
                translation: h,
                rotation: f,
                eulerRotation: f,
                scale: [r(i[0]), r(i[1]), r(i[2])]
            }
        }
        e.exports = function(t) {
            t instanceof Element && (t = String(getComputedStyle(t).transform).trim());
            let e = new DOMMatrix(t);
            const i = new Array(4);
            for (let t = 1; t < 5; t++) {
                const s = i[t - 1] = new Float32Array(4);
                for (let i = 1; i < 5; i++) s[i - 1] = e["m".concat(t).concat(i)]
            }
            return c(i)
        }
    }, {}],
    224: [function(t, e, i) {
        "use strict";
        e.exports = {
            lerp: function(t, e, i) {
                return e + (i - e) * t
            },
            map: function(t, e, i, s, r) {
                return s + (r - s) * (t - e) / (i - e)
            },
            mapClamp: function(t, e, i, s, r) {
                var n = s + (r - s) * (t - e) / (i - e);
                return Math.max(s, Math.min(r, n))
            },
            norm: function(t, e, i) {
                return (t - e) / (i - e)
            },
            clamp: function(t, e, i) {
                return Math.max(e, Math.min(i, t))
            },
            randFloat: function(t, e) {
                return Math.random() * (e - t) + t
            },
            randInt: function(t, e) {
                return Math.floor(Math.random() * (e - t) + t)
            }
        }
    }, {}],
    225: [function(t, e, i) {
        "use strict";
        const s = t(69).EventEmitterMicro,
            r = [{
                name: "S",
                mediaQuery: "only screen and (max-width: 734px)"
            }, {
                name: "M",
                mediaQuery: "only screen and (min-width: 735px) and (max-width: 1068px)"
            }, {
                name: "L",
                mediaQuery: "only screen and (min-width: 1069px) and (max-width: 1440px)"
            }, {
                name: "X",
                mediaQuery: "only screen and (min-width: 1441px)"
            }],
            n = "only screen and (-webkit-min-device-pixel-ratio: 1.5), screen and (min-resolution: 1.5dppx), screen and (min-resolution: 144dpi)",
            a = "only screen and (orientation: portrait)";
        class o extends s {
            constructor(t = {}) {
                super(), this.BREAKPOINTS = t.breakpoints || r, this._setupProperties(), this._onRetinaChange = this._onRetinaChange.bind(this), this._onOrientationChange = this._onOrientationChange.bind(this), this.listenersAdded = {
                    orientation: !1,
                    retina: !1,
                    viewport: !1
                }
            }
            static get CHANGE_EVENTS() {
                return {
                    ORIENTATION: "change:orientation",
                    RETINA: "change:retina",
                    VIEWPORT: "change:viewport"
                }
            }
            on() {
                this._setupListeners(arguments[0]), super.on.apply(this, arguments)
            }
            _onRetinaChange() {
                this.trigger(o.CHANGE_EVENTS.RETINA, this)
            }
            _onOrientationChange() {
                this.trigger(o.CHANGE_EVENTS.ORIENTATION, this)
            }
            _setupProperties() {
                Object.defineProperty(this, "retina", {
                    get: () => window.matchMedia(n).matches
                }), Object.defineProperty(this, "orientation", {
                    get: () => window.matchMedia(a).matches ? "portrait" : "landscape"
                }), this.viewport = this.getBreakpoint()
            }
            _setupListeners(t) {
                if (t !== o.CHANGE_EVENTS.RETINA || this.listenersAdded.retina || (window.matchMedia(n).addListener(this._onRetinaChange), this.listenersAdded.retina = !0), t !== o.CHANGE_EVENTS.ORIENTATION || this.listenersAdded.orientation || (window.matchMedia(a).addListener(this._onOrientationChange), this.listenersAdded.orientation = !0), t === o.CHANGE_EVENTS.VIEWPORT && !this.listenersAdded.viewport) {
                    for (let t = 0; t < this.BREAKPOINTS.length; t++) {
                        let e = this.BREAKPOINTS[t];
                        window.matchMedia(e.mediaQuery).addListener(t => {
                            t.matches && (this.oldViewport = this.viewport, this.viewport = e.name, this.trigger(o.CHANGE_EVENTS.VIEWPORT, this))
                        })
                    }
                    this.listenersAdded.viewport = !0
                }
            }
            getBreakpoint() {
                for (let t = 0; t < this.BREAKPOINTS.length; t++) {
                    let e = this.BREAKPOINTS[t];
                    if (window.matchMedia(e.mediaQuery).matches) return e.name
                }
            }
        }
        e.exports = o
    }, {
        69: 69
    }],
    226: [function(t, e, i) {
        "use strict";
        e.exports = {
            majorVersionNumber: "3.x"
        }
    }, {}],
    227: [function(t, e, i) {
        "use strict";
        var s, r = t(69).EventEmitterMicro,
            n = t(233),
            a = t(232);

        function o(t) {
            t = t || {}, r.call(this), this.id = a.getNewID(), this.executor = t.executor || n, this._reset(), this._willRun = !1, this._didDestroy = !1
        }(s = o.prototype = Object.create(r.prototype)).run = function() {
            return this._willRun || (this._willRun = !0), this._subscribe()
        }, s.cancel = function() {
            this._unsubscribe(), this._willRun && (this._willRun = !1), this._reset()
        }, s.destroy = function() {
            var t = this.willRun();
            return this.cancel(), this.executor = null, r.prototype.destroy.call(this), this._didDestroy = !0, t
        }, s.willRun = function() {
            return this._willRun
        }, s.isRunning = function() {
            return this._isRunning
        }, s._subscribe = function() {
            return this.executor.subscribe(this)
        }, s._unsubscribe = function() {
            return this.executor.unsubscribe(this)
        }, s._onAnimationFrameStart = function(t) {
            this._isRunning = !0, this._willRun = !1, this._didEmitFrameData || (this._didEmitFrameData = !0, this.trigger("start", t))
        }, s._onAnimationFrameEnd = function(t) {
            this._willRun || (this.trigger("stop", t), this._reset())
        }, s._reset = function() {
            this._didEmitFrameData = !1, this._isRunning = !1
        }, e.exports = o
    }, {
        232: 232,
        233: 233,
        69: 69
    }],
    228: [function(t, e, i) {
        "use strict";
        var s, r = t(70);

        function n(t) {
            t = t || {}, this._reset(), this.updatePhases(), this.eventEmitter = new r, this._willRun = !1, this._totalSubscribeCount = -1;
            var e = null,
                i = null;
            "undefined" != typeof window ? (e = window.requestAnimationFrame, i = window.cancelAnimationFrame) : e = i = function() {}, this._requestAnimationFrame = e, this._cancelAnimationFrame = i, this._boundOnAnimationFrame = this._onAnimationFrame.bind(this), this._boundOnExternalAnimationFrame = this._onExternalAnimationFrame.bind(this)
        }(s = n.prototype).frameRequestedPhase = "requested", s.startPhase = "start", s.runPhases = ["update", "external", "draw"], s.endPhase = "end", s.disabledPhase = "disabled", s.beforePhaseEventPrefix = "before:", s.afterPhaseEventPrefix = "after:", s.subscribe = function(t, e) {
            return this._totalSubscribeCount++, this._nextFrameSubscribers[t.id] || (e ? this._nextFrameSubscribersOrder.unshift(t.id) : this._nextFrameSubscribersOrder.push(t.id), this._nextFrameSubscribers[t.id] = t, this._nextFrameSubscriberArrayLength++, this._nextFrameSubscriberCount++, this._run()), this._totalSubscribeCount
        }, s.subscribeImmediate = function(t, e) {
            return this._totalSubscribeCount++, this._subscribers[t.id] || (e ? this._subscribersOrder.splice(this._currentSubscriberIndex + 1, 0, t.id) : this._subscribersOrder.unshift(t.id), this._subscribers[t.id] = t, this._subscriberArrayLength++, this._subscriberCount++), this._totalSubscribeCount
        }, s.unsubscribe = function(t) {
            return !!this._nextFrameSubscribers[t.id] && (this._nextFrameSubscribers[t.id] = null, this._nextFrameSubscriberCount--, 0 === this._nextFrameSubscriberCount && this._cancel(), !0)
        }, s.getSubscribeID = function() {
            return this._totalSubscribeCount += 1
        }, s.destroy = function() {
            var t = this._cancel();
            return this.eventEmitter.destroy(), this.eventEmitter = null, this.phases = null, this._subscribers = null, this._subscribersOrder = null, this._nextFrameSubscribers = null, this._nextFrameSubscribersOrder = null, this._rafData = null, this._boundOnAnimationFrame = null, this._onExternalAnimationFrame = null, t
        }, s.useExternalAnimationFrame = function(t) {
            if ("boolean" == typeof t) {
                var e = this._isUsingExternalAnimationFrame;
                return t && this._animationFrame && (this._cancelAnimationFrame.call(window, this._animationFrame), this._animationFrame = null), !this._willRun || t || this._animationFrame || (this._animationFrame = this._requestAnimationFrame.call(window, this._boundOnAnimationFrame)), this._isUsingExternalAnimationFrame = t, t ? this._boundOnExternalAnimationFrame : e || !1
            }
        }, s.updatePhases = function() {
            this.phases || (this.phases = []), this.phases.length = 0, this.phases.push(this.frameRequestedPhase), this.phases.push(this.startPhase), Array.prototype.push.apply(this.phases, this.runPhases), this.phases.push(this.endPhase), this._runPhasesLength = this.runPhases.length, this._phasesLength = this.phases.length
        }, s._run = function() {
            if (!this._willRun) return this._willRun = !0, 0 === this.lastFrameTime && (this.lastFrameTime = performance.now()), this._animationFrameActive = !0, this._isUsingExternalAnimationFrame || (this._animationFrame = this._requestAnimationFrame.call(window, this._boundOnAnimationFrame)), this.phase === this.disabledPhase && (this.phaseIndex = 0, this.phase = this.phases[this.phaseIndex]), !0
        }, s._cancel = function() {
            var t = !1;
            return this._animationFrameActive && (this._animationFrame && (this._cancelAnimationFrame.call(window, this._animationFrame), this._animationFrame = null), this._animationFrameActive = !1, this._willRun = !1, t = !0), this._isRunning || this._reset(), t
        }, s._onAnimationFrame = function(t) {
            for (this._subscribers = this._nextFrameSubscribers, this._subscribersOrder = this._nextFrameSubscribersOrder, this._subscriberArrayLength = this._nextFrameSubscriberArrayLength, this._subscriberCount = this._nextFrameSubscriberCount, this._nextFrameSubscribers = {}, this._nextFrameSubscribersOrder = [], this._nextFrameSubscriberArrayLength = 0, this._nextFrameSubscriberCount = 0, this.phaseIndex = 0, this.phase = this.phases[this.phaseIndex], this._isRunning = !0, this._willRun = !1, this._didRequestNextRAF = !1, this._rafData.delta = t - this.lastFrameTime, this.lastFrameTime = t, this._rafData.fps = 0, this._rafData.delta >= 1e3 && (this._rafData.delta = 0), 0 !== this._rafData.delta && (this._rafData.fps = 1e3 / this._rafData.delta), this._rafData.time = t, this._rafData.naturalFps = this._rafData.fps, this._rafData.timeNow = Date.now(), this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._onAnimationFrameStart(this._rafData);
            for (this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase), this._runPhaseIndex = 0; this._runPhaseIndex < this._runPhasesLength; this._runPhaseIndex++) {
                for (this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]].trigger(this.phase, this._rafData);
                this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase)
            }
            for (this.phaseIndex++, this.phase = this.phases[this.phaseIndex], this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase), this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++) null !== this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]] && !1 === this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._didDestroy && this._subscribers[this._subscribersOrder[this._currentSubscriberIndex]]._onAnimationFrameEnd(this._rafData);
            this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase), this._willRun ? (this.phaseIndex = 0, this.phaseIndex = this.phases[this.phaseIndex]) : this._reset()
        }, s._onExternalAnimationFrame = function(t) {
            this._isUsingExternalAnimationFrame && this._onAnimationFrame(t)
        }, s._reset = function() {
            this._rafData || (this._rafData = {}), this._rafData.time = 0, this._rafData.delta = 0, this._rafData.fps = 0, this._rafData.naturalFps = 0, this._rafData.timeNow = 0, this._subscribers = {}, this._subscribersOrder = [], this._currentSubscriberIndex = -1, this._subscriberArrayLength = 0, this._subscriberCount = 0, this._nextFrameSubscribers = {}, this._nextFrameSubscribersOrder = [], this._nextFrameSubscriberArrayLength = 0, this._nextFrameSubscriberCount = 0, this._didEmitFrameData = !1, this._animationFrame = null, this._animationFrameActive = !1, this._isRunning = !1, this._shouldReset = !1, this.lastFrameTime = 0, this._runPhaseIndex = -1, this.phaseIndex = -1, this.phase = this.disabledPhase
        }, e.exports = n
    }, {
        70: 70
    }],
    229: [function(t, e, i) {
        "use strict";
        var s = t(231),
            r = function(t) {
                this.phase = t, this.rafEmitter = new s, this._cachePhaseIndex(), this.requestAnimationFrame = this.requestAnimationFrame.bind(this), this.cancelAnimationFrame = this.cancelAnimationFrame.bind(this), this._onBeforeRAFExecutorStart = this._onBeforeRAFExecutorStart.bind(this), this._onBeforeRAFExecutorPhase = this._onBeforeRAFExecutorPhase.bind(this), this._onAfterRAFExecutorPhase = this._onAfterRAFExecutorPhase.bind(this), this.rafEmitter.on(this.phase, this._onRAFExecuted.bind(this)), this.rafEmitter.executor.eventEmitter.on("before:start", this._onBeforeRAFExecutorStart), this.rafEmitter.executor.eventEmitter.on("before:" + this.phase, this._onBeforeRAFExecutorPhase), this.rafEmitter.executor.eventEmitter.on("after:" + this.phase, this._onAfterRAFExecutorPhase), this._frameCallbacks = [], this._currentFrameCallbacks = [], this._nextFrameCallbacks = [], this._phaseActive = !1, this._currentFrameID = -1, this._cancelFrameIdx = -1, this._frameCallbackLength = 0, this._currentFrameCallbacksLength = 0, this._nextFrameCallbacksLength = 0, this._frameCallbackIteration = 0
            },
            n = r.prototype;
        n.requestAnimationFrame = function(t, e) {
            return !0 === e && this.rafEmitter.executor.phaseIndex > 0 && this.rafEmitter.executor.phaseIndex <= this.phaseIndex ? this._phaseActive ? (this._currentFrameID = this.rafEmitter.executor.subscribeImmediate(this.rafEmitter, !0), this._frameCallbacks.push(this._currentFrameID, t), this._frameCallbackLength += 2) : (this._currentFrameID = this.rafEmitter.executor.subscribeImmediate(this.rafEmitter, !1), this._currentFrameCallbacks.push(this._currentFrameID, t), this._currentFrameCallbacksLength += 2) : (this._currentFrameID = this.rafEmitter.run(), this._nextFrameCallbacks.push(this._currentFrameID, t), this._nextFrameCallbacksLength += 2), this._currentFrameID
        }, n.cancelAnimationFrame = function(t) {
            this._cancelFrameIdx = this._nextFrameCallbacks.indexOf(t), this._cancelFrameIdx > -1 ? this._cancelNextAnimationFrame() : (this._cancelFrameIdx = this._currentFrameCallbacks.indexOf(t), this._cancelFrameIdx > -1 ? this._cancelCurrentAnimationFrame() : (this._cancelFrameIdx = this._frameCallbacks.indexOf(t), this._cancelFrameIdx > -1 && this._cancelRunningAnimationFrame()))
        }, n._onRAFExecuted = function(t) {
            for (this._frameCallbackIteration = 0; this._frameCallbackIteration < this._frameCallbackLength; this._frameCallbackIteration += 2) this._frameCallbacks[this._frameCallbackIteration + 1](t.time, t);
            this._frameCallbacks.length = 0, this._frameCallbackLength = 0
        }, n._onBeforeRAFExecutorStart = function() {
            Array.prototype.push.apply(this._currentFrameCallbacks, this._nextFrameCallbacks.splice(0, this._nextFrameCallbacksLength)), this._currentFrameCallbacksLength = this._nextFrameCallbacksLength, this._nextFrameCallbacks.length = 0, this._nextFrameCallbacksLength = 0
        }, n._onBeforeRAFExecutorPhase = function() {
            this._phaseActive = !0, Array.prototype.push.apply(this._frameCallbacks, this._currentFrameCallbacks.splice(0, this._currentFrameCallbacksLength)), this._frameCallbackLength = this._currentFrameCallbacksLength, this._currentFrameCallbacks.length = 0, this._currentFrameCallbacksLength = 0
        }, n._onAfterRAFExecutorPhase = function() {
            this._phaseActive = !1
        }, n._cachePhaseIndex = function() {
            this.phaseIndex = this.rafEmitter.executor.phases.indexOf(this.phase)
        }, n._cancelRunningAnimationFrame = function() {
            this._frameCallbacks.splice(this._cancelFrameIdx, 2), this._frameCallbackLength -= 2
        }, n._cancelCurrentAnimationFrame = function() {
            this._currentFrameCallbacks.splice(this._cancelFrameIdx, 2), this._currentFrameCallbacksLength -= 2
        }, n._cancelNextAnimationFrame = function() {
            this._nextFrameCallbacks.splice(this._cancelFrameIdx, 2), this._nextFrameCallbacksLength -= 2, 0 === this._nextFrameCallbacksLength && this.rafEmitter.cancel()
        }, e.exports = r
    }, {
        231: 231
    }],
    230: [function(t, e, i) {
        "use strict";
        var s = t(229),
            r = function() {
                this.events = {}
            },
            n = r.prototype;
        n.requestAnimationFrame = function(t) {
            return this.events[t] || (this.events[t] = new s(t)), this.events[t].requestAnimationFrame
        }, n.cancelAnimationFrame = function(t) {
            return this.events[t] || (this.events[t] = new s(t)), this.events[t].cancelAnimationFrame
        }, e.exports = new r
    }, {
        229: 229
    }],
    231: [function(t, e, i) {
        "use strict";
        var s = t(227),
            r = function(t) {
                s.call(this, t)
            };
        (r.prototype = Object.create(s.prototype))._subscribe = function() {
            return this.executor.subscribe(this, !0)
        }, e.exports = r
    }, {
        227: 227
    }],
    232: [function(t, e, i) {
        "use strict";
        var s = t(235).SharedInstance,
            r = t(226).majorVersionNumber,
            n = function() {
                this._currentID = 0
            };
        n.prototype.getNewID = function() {
            return this._currentID++, "raf:" + this._currentID
        }, e.exports = s.share("@marcom/ac-raf-emitter/sharedRAFEmitterIDGeneratorInstance", r, n)
    }, {
        226: 226,
        235: 235
    }],
    233: [function(t, e, i) {
        "use strict";
        var s = t(235).SharedInstance,
            r = t(226).majorVersionNumber,
            n = t(228);
        e.exports = s.share("@marcom/ac-raf-emitter/sharedRAFExecutorInstance", r, n)
    }, {
        226: 226,
        228: 228,
        235: 235
    }],
    234: [function(t, e, i) {
        "use strict";
        var s = t(230);
        e.exports = s.requestAnimationFrame("update")
    }, {
        230: 230
    }],
    235: [function(t, e, i) {
        "use strict";
        e.exports = {
            SharedInstance: t(236)
        }
    }, {
        236: 236
    }],
    236: [function(t, e, i) {
        "use strict";
        var s, r = "undefined" != typeof window ? window : {},
            n = r.AC,
            a = (s = {}, {
                get: function(t, e) {
                    var i = null;
                    return s[t] && s[t][e] && (i = s[t][e]), i
                },
                set: function(t, e, i) {
                    return s[t] || (s[t] = {}), s[t][e] = "function" == typeof i ? new i : i, s[t][e]
                },
                share: function(t, e, i) {
                    var s = this.get(t, e);
                    return s || (s = this.set(t, e, i)), s
                },
                remove: function(t, e) {
                    var i = typeof e;
                    if ("string" !== i && "number" !== i) s[t] && (s[t] = null);
                    else {
                        if (!s[t] || !s[t][e]) return;
                        s[t][e] = null
                    }
                }
            });
        n || (n = r.AC = {}), n.SharedInstance || (n.SharedInstance = a), e.exports = n.SharedInstance
    }, {}],
    237: [function(t, e, i) {
        "use strict";
        var s = t(69).EventEmitterMicro;
        const r = {};
        "undefined" != typeof window && (r.update = t(234));
        var n = "viewport-emitter",
            a = {
                removeNamespace: !0
            },
            o = "data-viewport-emitter-dispatch",
            l = "data-viewport-emitter-state",
            c = "only screen and (-webkit-min-device-pixel-ratio: 1.5), screen and (min-resolution: 1.5dppx), screen and (min-resolution: 144dpi)",
            h = "only screen and (orientation: portrait)",
            u = "only screen and (orientation: landscape)",
            d = "change:any",
            p = "change:orientation",
            m = "change:retina",
            f = "change:viewport";

        function g(t, e) {
            s.call(this), this._id = t || n, this._options = Object.assign({}, a, e), this._allowDOMEventDispatch = !1, this._allowElementStateData = !1, this._options.removeNamespace = "boolean" != typeof this._options.removeNamespace || this._options.removeNamespace, this._el = this._initViewportEl(this._id), this._resizing = !1, this._mediaQueryLists = {
                resolution: {
                    retina: window.matchMedia(c)
                },
                orientation: {
                    portrait: window.matchMedia(h),
                    landscape: window.matchMedia(u)
                }
            }, this._viewport = this._getViewport(this._options.removeNamespace), this._retina = this._getRetina(this._mediaQueryLists.resolution.retina), this._orientation = this._initOrientation(), this._addListeners(), this._updateElementStateData()
        }
        Object.defineProperty(g, "DOM_DISPATCH_ATTRIBUTE", {
            get: function() {
                return o
            }
        }), Object.defineProperty(g, "DOM_STATE_ATTRIBUTE", {
            get: function() {
                return l
            }
        });
        var y = g.prototype = Object.create(s.prototype);
        Object.defineProperty(y, "id", {
            get: function() {
                return this._id
            }
        }), Object.defineProperty(y, "element", {
            get: function() {
                return this._el
            }
        }), Object.defineProperty(y, "mediaQueryLists", {
            get: function() {
                return this._mediaQueryLists
            }
        }), Object.defineProperty(y, "viewport", {
            get: function() {
                return this._viewport
            }
        }), Object.defineProperty(y, "retina", {
            get: function() {
                return this._retina
            }
        }), Object.defineProperty(y, "orientation", {
            get: function() {
                return this._orientation
            }
        }), Object.defineProperty(y, "hasDomDispatch", {
            get: function() {
                return this._allowDOMEventDispatch
            }
        }), y.destroy = function() {
            for (var t in this._removeListeners(), this._options) this._options[t] = null;
            for (var e in this._mediaQueryLists) {
                var i = this._mediaQueryLists[e];
                for (var r in i) i[r] = null
            }
            this._id = null, this._el = null, this._viewport = null, this._retina = null, this._orientation = null, s.prototype.destroy.call(this)
        }, y._initViewportEl = function(t) {
            var e = document.getElementById(t);
            return e || ((e = document.createElement("div")).id = t, e = document.body.appendChild(e)), e.hasAttribute(o) || (e.setAttribute(o, ""), this._allowDOMEventDispatch = !0), e.hasAttribute(l) || (this._allowElementStateData = !0), e
        }, y._dispatch = function(t, e) {
            var i = {
                viewport: this._viewport,
                orientation: this._orientation,
                retina: this._retina
            };
            if (this._allowDOMEventDispatch) {
                var s = new CustomEvent(t, {
                        detail: e
                    }),
                    r = new CustomEvent(d, {
                        detail: i
                    });
                this._el.dispatchEvent(s), this._el.dispatchEvent(r)
            }
            this.trigger(t, e), this.trigger(d, i)
        }, y._addListeners = function() {
            this._onOrientationChange = this._onOrientationChange.bind(this), this._onRetinaChange = this._onRetinaChange.bind(this), this._onViewportChange = this._onViewportChange.bind(this), this._onViewportChangeUpdate = this._onViewportChangeUpdate.bind(this), this._mediaQueryLists.orientation.portrait.addListener(this._onOrientationChange), this._mediaQueryLists.orientation.landscape.addListener(this._onOrientationChange), this._mediaQueryLists.resolution.retina.addListener(this._onRetinaChange), window.addEventListener("resize", this._onViewportChange)
        }, y._removeListeners = function() {
            this._mediaQueryLists.orientation.portrait.removeListener(this._onOrientationChange), this._mediaQueryLists.orientation.landscape.removeListener(this._onOrientationChange), this._mediaQueryLists.resolution.retina.removeListener(this._onRetinaChange), window.removeEventListener("resize", this._onViewportChange)
        }, y._updateElementStateData = function() {
            if (this._allowElementStateData) {
                var t = JSON.stringify({
                    viewport: this._viewport,
                    orientation: this._orientation,
                    retina: this._retina
                });
                this._el.setAttribute(l, t)
            }
        }, y._getViewport = function(t) {
            var e = window.getComputedStyle(this._el, "::before").content;
            return e ? (e = e.replace(/["']/g, ""), t ? e.split(":").pop() : e) : null
        }, y._getRetina = function(t) {
            return t.matches
        }, y._getOrientation = function(t) {
            var e = this._orientation;
            if (t.matches) {
                return t.media.match(/portrait|landscape/)[0]
            }
            return e
        }, y._initOrientation = function() {
            var t = this._getOrientation(this._mediaQueryLists.orientation.portrait);
            return t || this._getOrientation(this._mediaQueryLists.orientation.landscape)
        }, y._onViewportChange = function() {
            this._resizing || (this._resizing = !0, r.update(this._onViewportChangeUpdate))
        }, y._onViewportChangeUpdate = function() {
            var t = this._viewport;
            if (this._viewport = this._getViewport(this._options.removeNamespace), t !== this._viewport) {
                var e = {
                    from: t,
                    to: this._viewport
                };
                this._updateElementStateData(), this._dispatch(f, e)
            }
            this._resizing = !1
        }, y._onRetinaChange = function(t) {
            var e = this._retina;
            if (this._retina = this._getRetina(t), e !== this._retina) {
                var i = {
                    from: e,
                    to: this._retina
                };
                this._updateElementStateData(), this._dispatch(m, i)
            }
        }, y._onOrientationChange = function(t) {
            var e = this._orientation;
            if (this._orientation = this._getOrientation(t), e !== this._orientation) {
                var i = {
                    from: e,
                    to: this._orientation
                };
                this._updateElementStateData(), this._dispatch(p, i)
            }
        }, e.exports = g
    }, {
        234: 234,
        69: 69
    }],
    238: [function(t, e, i) {
        "use strict";
        var s = t(237);
        e.exports = new s
    }, {
        237: 237
    }],
    239: [function(t, e, i) {
        "use strict";
        e.exports = function() {
            var t = new Float32Array(16);
            return t[0] = 1, t[1] = 0, t[2] = 0, t[3] = 0, t[4] = 0, t[5] = 1, t[6] = 0, t[7] = 0, t[8] = 0, t[9] = 0, t[10] = 1, t[11] = 0, t[12] = 0, t[13] = 0, t[14] = 0, t[15] = 1, t
        }
    }, {}],
    240: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i) {
            var s = Math.sin(i),
                r = Math.cos(i),
                n = e[4],
                a = e[5],
                o = e[6],
                l = e[7],
                c = e[8],
                h = e[9],
                u = e[10],
                d = e[11];
            e !== t && (t[0] = e[0], t[1] = e[1], t[2] = e[2], t[3] = e[3], t[12] = e[12], t[13] = e[13], t[14] = e[14], t[15] = e[15]);
            return t[4] = n * r + c * s, t[5] = a * r + h * s, t[6] = o * r + u * s, t[7] = l * r + d * s, t[8] = c * r - n * s, t[9] = h * r - a * s, t[10] = u * r - o * s, t[11] = d * r - l * s, t
        }
    }, {}],
    241: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i) {
            var s = Math.sin(i),
                r = Math.cos(i),
                n = e[0],
                a = e[1],
                o = e[2],
                l = e[3],
                c = e[8],
                h = e[9],
                u = e[10],
                d = e[11];
            e !== t && (t[4] = e[4], t[5] = e[5], t[6] = e[6], t[7] = e[7], t[12] = e[12], t[13] = e[13], t[14] = e[14], t[15] = e[15]);
            return t[0] = n * r - c * s, t[1] = a * r - h * s, t[2] = o * r - u * s, t[3] = l * r - d * s, t[8] = n * s + c * r, t[9] = a * s + h * r, t[10] = o * s + u * r, t[11] = l * s + d * r, t
        }
    }, {}],
    242: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i) {
            var s = Math.sin(i),
                r = Math.cos(i),
                n = e[0],
                a = e[1],
                o = e[2],
                l = e[3],
                c = e[4],
                h = e[5],
                u = e[6],
                d = e[7];
            e !== t && (t[8] = e[8], t[9] = e[9], t[10] = e[10], t[11] = e[11], t[12] = e[12], t[13] = e[13], t[14] = e[14], t[15] = e[15]);
            return t[0] = n * r + c * s, t[1] = a * r + h * s, t[2] = o * r + u * s, t[3] = l * r + d * s, t[4] = c * r - n * s, t[5] = h * r - a * s, t[6] = u * r - o * s, t[7] = d * r - l * s, t
        }
    }, {}],
    243: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e, i) {
            var s = i[0],
                r = i[1],
                n = i[2];
            return t[0] = e[0] * s, t[1] = e[1] * s, t[2] = e[2] * s, t[3] = e[3] * s, t[4] = e[4] * r, t[5] = e[5] * r, t[6] = e[6] * r, t[7] = e[7] * r, t[8] = e[8] * n, t[9] = e[9] * n, t[10] = e[10] * n, t[11] = e[11] * n, t[12] = e[12], t[13] = e[13], t[14] = e[14], t[15] = e[15], t
        }
    }, {}],
    244: [function(t, e, i) {
        "use strict";
        var s = t(264).Symbol;
        e.exports = s
    }, {
        264: 264
    }],
    245: [function(t, e, i) {
        "use strict";
        var s = t(252),
            r = t(267),
            n = t(268),
            a = t(270),
            o = t(258),
            l = t(275),
            c = Object.prototype.hasOwnProperty;
        e.exports = function(t, e) {
            var i = n(t),
                h = !i && r(t),
                u = !i && !h && a(t),
                d = !i && !h && !u && l(t),
                p = i || h || u || d,
                m = p ? s(t.length, String) : [],
                f = m.length;
            for (var g in t) !e && !c.call(t, g) || p && ("length" == g || u && ("offset" == g || "parent" == g) || d && ("buffer" == g || "byteLength" == g || "byteOffset" == g) || o(g, f)) || m.push(g);
            return m
        }
    }, {
        252: 252,
        258: 258,
        267: 267,
        268: 268,
        270: 270,
        275: 275
    }],
    246: [function(t, e, i) {
        "use strict";
        var s = t(255)();
        e.exports = s
    }, {
        255: 255
    }],
    247: [function(t, e, i) {
        "use strict";
        var s = t(246),
            r = t(276);
        e.exports = function(t, e) {
            return t && s(t, e, r)
        }
    }, {
        246: 246,
        276: 276
    }],
    248: [function(t, e, i) {
        "use strict";
        var s = t(244),
            r = t(257),
            n = t(262),
            a = s ? s.toStringTag : void 0;
        e.exports = function(t) {
            return null == t ? void 0 === t ? "[object Undefined]" : "[object Null]" : a && a in Object(t) ? r(t) : n(t)
        }
    }, {
        244: 244,
        257: 257,
        262: 262
    }],
    249: [function(t, e, i) {
        "use strict";
        var s = t(248),
            r = t(274);
        e.exports = function(t) {
            return r(t) && "[object Arguments]" == s(t)
        }
    }, {
        248: 248,
        274: 274
    }],
    250: [function(t, e, i) {
        "use strict";
        var s = t(248),
            r = t(272),
            n = t(274),
            a = {};
        a["[object Float32Array]"] = a["[object Float64Array]"] = a["[object Int8Array]"] = a["[object Int16Array]"] = a["[object Int32Array]"] = a["[object Uint8Array]"] = a["[object Uint8ClampedArray]"] = a["[object Uint16Array]"] = a["[object Uint32Array]"] = !0, a["[object Arguments]"] = a["[object Array]"] = a["[object ArrayBuffer]"] = a["[object Boolean]"] = a["[object DataView]"] = a["[object Date]"] = a["[object Error]"] = a["[object Function]"] = a["[object Map]"] = a["[object Number]"] = a["[object Object]"] = a["[object RegExp]"] = a["[object Set]"] = a["[object String]"] = a["[object WeakMap]"] = !1, e.exports = function(t) {
            return n(t) && r(t.length) && !!a[s(t)]
        }
    }, {
        248: 248,
        272: 272,
        274: 274
    }],
    251: [function(t, e, i) {
        "use strict";
        var s = t(259),
            r = t(260),
            n = Object.prototype.hasOwnProperty;
        e.exports = function(t) {
            if (!s(t)) return r(t);
            var e = [];
            for (var i in Object(t)) n.call(t, i) && "constructor" != i && e.push(i);
            return e
        }
    }, {
        259: 259,
        260: 260
    }],
    252: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            for (var i = -1, s = Array(t); ++i < t;) s[i] = e(i);
            return s
        }
    }, {}],
    253: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return function(e) {
                return t(e)
            }
        }
    }, {}],
    254: [function(t, e, i) {
        "use strict";
        var s = t(266);
        e.exports = function(t) {
            return "function" == typeof t ? t : s
        }
    }, {
        266: 266
    }],
    255: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return function(e, i, s) {
                for (var r = -1, n = Object(e), a = s(e), o = a.length; o--;) {
                    var l = a[t ? o : ++r];
                    if (!1 === i(n[l], l, n)) break
                }
                return e
            }
        }
    }, {}],
    256: [function(t, e, i) {
        (function(t) {
            "use strict";
            var i = "object" == typeof t && t && t.Object === Object && t;
            e.exports = i
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}],
    257: [function(t, e, i) {
        "use strict";
        var s = t(244),
            r = Object.prototype,
            n = r.hasOwnProperty,
            a = r.toString,
            o = s ? s.toStringTag : void 0;
        e.exports = function(t) {
            var e = n.call(t, o),
                i = t[o];
            try {
                t[o] = void 0;
                var s = !0
            } catch (t) {}
            var r = a.call(t);
            return s && (e ? t[o] = i : delete t[o]), r
        }
    }, {
        244: 244
    }],
    258: [function(t, e, i) {
        "use strict";
        var s = /^(?:0|[1-9]\d*)$/;
        e.exports = function(t, e) {
            var i = typeof t;
            return !!(e = null == e ? 9007199254740991 : e) && ("number" == i || "symbol" != i && s.test(t)) && t > -1 && t % 1 == 0 && t < e
        }
    }, {}],
    259: [function(t, e, i) {
        "use strict";
        var s = Object.prototype;
        e.exports = function(t) {
            var e = t && t.constructor;
            return t === ("function" == typeof e && e.prototype || s)
        }
    }, {}],
    260: [function(t, e, i) {
        "use strict";
        var s = t(263)(Object.keys, Object);
        e.exports = s
    }, {
        263: 263
    }],
    261: [function(t, e, i) {
        "use strict";
        var s = t(256),
            r = "object" == typeof i && i && !i.nodeType && i,
            n = r && "object" == typeof e && e && !e.nodeType && e,
            a = n && n.exports === r && s.process,
            o = function() {
                try {
                    var t = n && n.require && n.require("util").types;
                    return t || a && a.binding && a.binding("util")
                } catch (t) {}
            }();
        e.exports = o
    }, {
        256: 256
    }],
    262: [function(t, e, i) {
        "use strict";
        var s = Object.prototype.toString;
        e.exports = function(t) {
            return s.call(t)
        }
    }, {}],
    263: [function(t, e, i) {
        "use strict";
        e.exports = function(t, e) {
            return function(i) {
                return t(e(i))
            }
        }
    }, {}],
    264: [function(t, e, i) {
        "use strict";
        var s = t(256),
            r = "object" == typeof self && self && self.Object === Object && self,
            n = s || r || Function("return this")();
        e.exports = n
    }, {
        256: 256
    }],
    265: [function(t, e, i) {
        "use strict";
        var s = t(247),
            r = t(254);
        e.exports = function(t, e) {
            return t && s(t, r(e))
        }
    }, {
        247: 247,
        254: 254
    }],
    266: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return t
        }
    }, {}],
    267: [function(t, e, i) {
        "use strict";
        var s = t(249),
            r = t(274),
            n = Object.prototype,
            a = n.hasOwnProperty,
            o = n.propertyIsEnumerable,
            l = s(function() {
                return arguments
            }()) ? s : function(t) {
                return r(t) && a.call(t, "callee") && !o.call(t, "callee")
            };
        e.exports = l
    }, {
        249: 249,
        274: 274
    }],
    268: [function(t, e, i) {
        "use strict";
        var s = Array.isArray;
        e.exports = s
    }, {}],
    269: [function(t, e, i) {
        "use strict";
        var s = t(271),
            r = t(272);
        e.exports = function(t) {
            return null != t && r(t.length) && !s(t)
        }
    }, {
        271: 271,
        272: 272
    }],
    270: [function(t, e, i) {
        "use strict";
        var s = t(264),
            r = t(277),
            n = "object" == typeof i && i && !i.nodeType && i,
            a = n && "object" == typeof e && e && !e.nodeType && e,
            o = a && a.exports === n ? s.Buffer : void 0,
            l = (o ? o.isBuffer : void 0) || r;
        e.exports = l
    }, {
        264: 264,
        277: 277
    }],
    271: [function(t, e, i) {
        "use strict";
        var s = t(248),
            r = t(273);
        e.exports = function(t) {
            if (!r(t)) return !1;
            var e = s(t);
            return "[object Function]" == e || "[object GeneratorFunction]" == e || "[object AsyncFunction]" == e || "[object Proxy]" == e
        }
    }, {
        248: 248,
        273: 273
    }],
    272: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return "number" == typeof t && t > -1 && t % 1 == 0 && t <= 9007199254740991
        }
    }, {}],
    273: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            var e = typeof t;
            return null != t && ("object" == e || "function" == e)
        }
    }, {}],
    274: [function(t, e, i) {
        "use strict";
        e.exports = function(t) {
            return null != t && "object" == typeof t
        }
    }, {}],
    275: [function(t, e, i) {
        "use strict";
        var s = t(250),
            r = t(253),
            n = t(261),
            a = n && n.isTypedArray,
            o = a ? r(a) : s;
        e.exports = o
    }, {
        250: 250,
        253: 253,
        261: 261
    }],
    276: [function(t, e, i) {
        "use strict";
        var s = t(245),
            r = t(251),
            n = t(269);
        e.exports = function(t) {
            return n(t) ? s(t) : r(t)
        }
    }, {
        245: 245,
        251: 251,
        269: 269
    }],
    277: [function(t, e, i) {
        "use strict";
        e.exports = function() {
            return !1
        }
    }, {}],
    278: [function(t, e, i) {
        "use strict";
        t(171);
        let s = t(1);
        let r = '\n\t<div v-if="item.children && item.children.length" class="template-ar-quicklook">\n\t\t<p v-for="childId in item.children" class="quicklook-component" :class="className(\'quicklook\', getDataById(childId).editor.en)">\n\t\t\t<a rel="ar" :href="getDataById(childId).editor.link"\n\t\t\t\t:aria-label="getAriaLabel(childId)"\n\t\t\t\t:data-analytics-title="getAnalytics(childId)"\n\t\t\t\t:data-analytics-click="\'prop3:\' + getAnalytics(childId)"\n\t\t\t\tdata-analytics-intrapage-link\n\t\t\t>\n\t\t\t\t<img v-pre src="/v/iphone/compare/'.concat(s.site.version, '/images/shared/quicklook_placeholder__gg8e9wsg4qy6_large.jpg">\n\t\t\t\t<span v-html="getDataById(childId).value"></span>\n\t\t\t</a>\n\t\t</p>\n\t</div>\n'),
            n = t(183);
        e.exports = Vue.component("ar-quicklook", {
            name: "ar-quicklook",
            template: r,
            mixins: [n],
            methods: {
                getAnalytics: function(t) {
                    return this.getAriaLabel(t).toLowerCase()
                },
                getAriaLabel: function(t) {
                    let e = this.getDataById(t).editor.aria || null;
                    return e && /\[product\]/.test(e) && (e = e.replace("[product]", this.getProductName(this.index, !1))), e
                }
            }
        })
    }, {
        1: 1,
        171: 171,
        183: 183
    }],
    279: [function(t, e, i) {
        "use strict";
        t(171);
        let s = t(183);
        e.exports = Vue.component("badge-list", {
            name: "badge-list",
            template: '\n\t<div class="image-icon-wrapper" v-if="item.children">\n\t\t<figure v-if="item.editor.en" class="image-icon" :class="className(\'image-icon\', item.editor.en)" aria-hidden="true"></figure>\n\t\t<ul v-if="item.editor.en">\n\t\t\t<li v-for="itemId in item.children" v-html="getDataById(itemId).value" :class="badgeClass(itemId)" :aria-hidden="isHidden(itemId)"></li>\n\t\t</ul>\n\t\t<ul v-else class="icon-badge">\n\t\t\t<li v-for="itemId in item.children" v-html="getDataById(itemId).value" :class="badgeClass(itemId)" :aria-hidden="isHidden(itemId)"></li>\n\t\t</ul>\n\t</div>\n',
            mixins: [s],
            methods: {
                isHidden(t) {
                    return !!this.getDataById(t).editor.aria
                },
                badgeClass(t) {
                    return "true" === this.getDataById(t).editor.elevated ? "badge-value" : "badge-copy"
                }
            }
        })
    }, {
        171: 171,
        183: 183
    }],
    280: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(184);
        e.exports = Vue.component("carrier-list", {
            name: "carrier-list",
            template: '\n\t<div v-if="spec" role="rowgroup" :class="[\'compare-section\', sectionClass(), \'template-carrier-list\']" v-bind="analytics">\n\t\t<div role="row" class="compare-row">\n\t\t\t<div role="rowheader" v-if="canDisplay()" class="compare-rowheader compare-rowheader-style">\n\t\t\t\t<span v-html="spec.value"></span>\n\t\t\t</div>\n\t\t\t<div v-if="!canDisplay()" role="rowheader" class="compare-rowheader">\n\t\t\t\t<span class="visuallyhidden" v-html="spec.value"></span>\n\t\t\t</div>\n\n\t\t\t<div role="cell gridcell" class="first-child compare-column template-column-span-row" :aria-colspan="columns" >\n\t\t\t\t<div v-if="carriers" class="carrier-list">\n\t\t\t\t\t<div v-for="item in carriers" class="carrier-item">\n\t\t\t\t\t\t<figure :class="[\'image-carrier\', carrierImage(\'image-carrier\', item)]" aria-hidden="true"></figure>\n\t\t\t\t\t\t<span class="visuallyhidden" v-html="getDataById(item).value"></span>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n',
            mixins: [r],
            computed: {
                carriers() {
                    let t = [];
                    return this.spec.children.forEach((e, i) => {
                        let s = [];
                        this.$store.state.products.forEach((t, e) => {
                            let r = this.getDataById(this.spec.children[i]),
                                n = this.getDataById(r.children[e]);
                            n.children && (s = n.children)
                        }), t = s
                    }), t
                }
            },
            methods: {
                canDisplay() {
                    return "false" !== this.spec.editor.show
                },
                sectionClass() {
                    let t = this.spec.editor.en;
                    return t ? s.className("section", t) : null
                },
                carrierImage(t, e) {
                    return t + "-" + this.getDataById(e).editor.en
                }
            }
        })
    }, {
        171: 171,
        184: 184
    }],
    281: [function(t, e, i) {
        "use strict";
        let s = t(171),
            r = t(184),
            n = t(183);
        e.exports = Vue.component("column-span", {
            name: "column-span",
            template: '\n<div v-if="spec" role="rowgroup" :class="[\'compare-section\',sectionClass()]"\n\t v-bind="analytics">\n\t\t<div role="row" class="compare-row">\n\t\t\t<div role="rowheader" v-if="canDisplay()" class="compare-rowheader compare-rowheader-style">\n\t\t\t\t<span v-html="spec.value"></span>\n\t\t\t</div>\n\t\t\t<div role="rowheader" v-if="!canDisplay()"  class="compare-rowheader">\n\t\t\t\t<span class="visuallyhidden" v-html="spec.value"></span>\n\t\t\t</div>\n\n\t\t\t<div role="cell gridcell" class="first-child compare-column template-column-span" :aria-colspan="columns" >\n\t\t\t\t<div class="cell-content">\n\t\t\t\t\t<template v-for="row in items">\n\t\t\t\t\t\t<template v-for="item in row">\n\t\t\t\t\t\t\t<ul v-if="item.children">\n\t\t\t\t\t\t\t\t<template v-for="child in item.children">\n\t\t\t\t\t\t\t\t\t<li v-if="getDataById(child).editor.link" :class="createClass(child)">\n\t\t\t\t\t\t\t\t\t\t<a class="compare-link icon-wrapper"\n\t\t\t\t\t\t\t\t\t\t\t:href="getDataById(child).editor.link"\n\t\t\t\t\t\t\t\t\t\t\t:aria-label="getAriaLabel(getDataById(child))"\n\t\t\t\t\t\t\t\t\t\t\t:data-analytics-title="analyticsCTATitle(getDataById(child), index)"\n\t\t\t\t\t\t\t\t\t\t>\n\t\t\t\t\t\t\t\t\t\t\t<span class="icon-copy" v-html="getDataById(child).value"></span><span class="icon icon-after icon-chevronright"></span>\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t<li v-else v-html="getDataById(child).value" :class="createClass(child)"></li>\n\t\t\t\t\t\t\t\t</template>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t<p v-else-if="item.editor.link">\n\t\t\t\t\t\t\t\t<a class="compare-link icon-wrapper"\n\t\t\t\t\t\t\t\t\t:href="item.editor.link"\n\t\t\t\t\t\t\t\t\t:aria-label="getAriaLabel(item)"\n\t\t\t\t\t\t\t\t\t:data-analytics-title="analyticsCTATitle(item, index)"\n\t\t\t\t\t\t\t\t>\n\t\t\t\t\t\t\t\t\t<span class="icon-copy" v-html="item.value"></span><span class="icon icon-after icon-chevronright"></span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t<div v-else v-html="item.value"></div>\n\t\t\t\t\t\t</template>\n\t\t\t\t\t</template>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n',
            mixins: [r, n],
            computed: {
                items() {
                    let t = [];
                    return this.spec.children.forEach((e, i) => {
                        let s = [];
                        this.$store.state.products.forEach((t, e) => {
                            let r = this.getDataById(this.spec.children[i]),
                                n = this.getDataById(r.children[e]);
                            (n.value || n.children) && s.push(n)
                        }), t.push(s)
                    }), t
                }
            },
            methods: {
                sectionClass() {
                    let t = this.spec.editor.en;
                    return t ? s.className("section", t) : null
                },
                canDisplay() {
                    return "false" !== this.spec.editor.show
                },
                createClass(t) {
                    let e = this.getDataById(t);
                    return e.editor.en ? "item-" + e.editor.en : null
                }
            }
        })
    }, {
        171: 171,
        183: 183,
        184: 184
    }],
    282: [function(t, e, i) {
        "use strict";
        let s, r = t(171),
            n = t(69);
        try {
            s = t("@marcom/ac-analytics").observer.Gallery
        } catch (t) {}
        let a = t(184),
            o = t(183);
        e.exports = Vue.component("gallery-list", {
            name: "gallery-list",
            template: '\n<div role="rowgroup" :class="[\'compare-section\', sectionClass(), \'template-gallery\']"\n v-bind="analytics">\n\t<div role="row" class="compare-row row-gallery">\n\t\t<div role="rowheader" class="compare-rowheader"><span class="visuallyhidden">{{spec.value}}</span></div>\n\n\t\t<div role="cell gridcell" class="compare-column" v-for="(productId, index) in activeProductsOrder" :class="[{\'first-child\': index === 0}]">\n\n\t\t\t<a v-if="productLinks[productId]"\n\t\t\t\t:href="productLinks[productId].editor.link"\n\t\t\t\t:class="[\'gallery\', \'gallery-\'+ getDataById(productId).editor.en]"\n\t\t\t\t:data-analytics-title="analyticsCTATitle(productLinks[productId], productLinks[productId].index)"\n\t\t\t>\n\t\t\t\t<span class="visuallyhidden">{{getAriaLabel(productLinks[productId], productLinks[productId].index)}}</span>\n\t\t\t\t<figure v-for="color in productColors[productId]" :key="color._id" class="gallery-image" role="presentation"\n\t\t\t\t\t:class="[imageClass(productId, color.editor.en), {\'active\': isCurrentColor(productId, color.editor.en)}]">\n\t\t\t\t</figure>\n\t\t\t</a>\n\n\t\t\t<div v-else :class="[\'gallery\', \'gallery-\'+ getDataById(productId).editor.en]">\n\t\t\t\t<figure v-for="color in productColors[productId]" :key="color._id" class="gallery-image" role="presentation"\n\t\t\t\t\t:class="[imageClass(productId, color.editor.en), {\'active\': isCurrentColor(productId, color.editor.en)}]">\n\t\t\t\t</figure>\n\t\t\t</div>\n\n\t\t\t<div :class="[\'colornav-wrapper\', \'colornav-wrapper-\'+ getDataById(productId).editor.en]">\n\t\t\t\t<ul class="colornav-items" role="list" :aria-label="getGalleryAria(colorNavRow, productId)">\n\t\t\t\t\t<li v-for="color in productColors[productId]" :key="color._id" class="colornav-item">\n\t\t\t\t\t\t<button class="colornav-link"\n\t\t\t\t\t\t\t:class="{\'current\': isCurrentColor(productId, color.editor.en)}"\n\t\t\t\t\t\t\t:aria-selected="isCurrentColor(productId, color.editor.en)"\n\t\t\t\t\t\t\t@click="updateCurrentColor(productId, color.editor.en)"\n\t\t\t\t\t\t>\n\t\t\t\t\t\t\t<figure class="colornav-swatch" :class="className(\'colornav-swatch\', color.editor.en)">\n\t\t\t\t\t\t\t\t<figcaption v-if="isProductRed(color)" class="colornav-label">\n\t\t\t\t\t\t\t\t\t<span class="colornav-logo-productred colornav-logo-productred-centered" role="presentation"></span>\n\t\t\t\t\t\t\t\t\t<span class="colornav-label-hidden">{{color.value}}</span>\n\t\t\t\t\t\t\t\t</figcaption>\n\t\t\t\t\t\t\t\t<figcaption v-else class="colornav-label">{{color.value}}</figcaption>\n\t\t\t\t\t\t\t</figure>\n\t\t\t\t\t\t</button>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n',
            mixins: [a, o],
            mounted() {
                this.createGalleryAnalytics()
            },
            updated() {
                this.createGalleryAnalytics()
            },
            data: function() {
                let t = document.querySelector('meta[property="analytics-track"]').content.toLowerCase(),
                    e = {},
                    i = {},
                    s = {},
                    r = this.spec.children[0],
                    n = this.spec.children[1];
                return this.$store.state.products.forEach((t, a) => {
                    i[t] = [];
                    let o = this.getDataById(r).children[a],
                        l = this.getDataById(o).children,
                        c = [];
                    l.forEach(t => {
                        c.push(this.getDataById(t))
                    }), e[t] = c[0].editor.en, i[t] = c;
                    let h = this.getDataById(n).children[a],
                        u = this.getDataById(h);
                    u.editor.link && (u.index = a, s[t] = u)
                }), {
                    pageName: t,
                    colorNavRow: r,
                    activeColor: e,
                    productColors: i,
                    productLinks: s,
                    acAnalytics: {
                        events: {
                            UPDATE: "update",
                            UPDATE_COMPLETE: "update:complete"
                        }
                    }
                }
            },
            methods: {
                className() {
                    let t = arguments;
                    return r.className.apply(this, t)
                },
                sectionClass() {
                    let t = this.spec.editor.en;
                    return t ? r.className("section", t) : null
                },
                isProductRed: t => "red" === t.editor.en,
                imageClass(t, e) {
                    let i = ["image-compare", this.getDataById(t).editor.en, e];
                    return r.className.apply(this, i)
                },
                isCurrentColor(t, e) {
                    return this.activeColor[t] === e
                },
                updateCurrentColor(t, e) {
                    this.activeColor[t] = e;
                    let i = this.getDataById(t).editor.en,
                        s = "gallery-".concat(i, "-").concat(e);
                    if (s === this.acAnalytics[t].lastTrackedItem) return;
                    if (!this.acAnalytics[t].lastTrackedItem) {
                        let e = this.productColors[t][0].editor.en;
                        this.acAnalytics[t].lastTrackedItem = "gallery-".concat(i, "-").concat(e)
                    }
                    let r = {
                        incoming: {
                            id: s
                        },
                        outgoing: {
                            id: this.acAnalytics[t].lastTrackedItem
                        },
                        interactionEvent: event
                    };
                    this.acAnalytics[t].lastTrackedItem = s, this.acAnalytics[t].observer.gallery.trigger(this.acAnalytics.events.UPDATE_COMPLETE, r)
                },
                createObserver(t) {
                    let e = "gallery-".concat(this.getDataById(t).editor.en);
                    if (s) {
                        let t = new n.EventEmitterMicro;
                        return new s(t, {
                            galleryName: e,
                            beforeUpdateEvent: this.acAnalytics.events.UPDATE,
                            afterUpdateEvent: this.acAnalytics.events.UPDATE_COMPLETE,
                            trackAutoRotate: !0
                        })
                    }
                    return null
                },
                createGalleryAnalytics() {
                    this.activeProductsOrder.forEach(t => {
                        this.acAnalytics[t] || (this.acAnalytics[t] = {}, this.acAnalytics[t].observer = this.createObserver(t))
                    })
                },
                getGalleryAria(t, e) {
                    let i = this.getDataById(t).editor.aria;
                    return i ? i.replace("[product]", this.getDataById(e).value) : null
                }
            }
        })
    }, {
        171: 171,
        183: 183,
        184: 184,
        69: 69,
        undefined: void 0
    }],
    283: [function(t, e, i) {
        "use strict";
        const s = t(126);
        t(278), t(279), t(280), t(282), t(281);
        let r = t(158);
        s.initialize(), r()
    }, {
        126: 126,
        158: 158,
        278: 278,
        279: 279,
        280: 280,
        281: 281,
        282: 282
    }]
}, {}, [283]);