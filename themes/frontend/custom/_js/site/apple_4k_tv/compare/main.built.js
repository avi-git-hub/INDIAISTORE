"use strict";

(function e(b, g, d) {
  function c(m, j) {
    if (!g[m]) {
      if (!b[m]) {
        var i = typeof require == "function" && require;
        if (!j && i) {
          return i(m, !0);
        }if (a) {
          return a(m, !0);
        }var k = new Error("Cannot find module '" + m + "'");
        throw k.code = "MODULE_NOT_FOUND", k;
      }var h = g[m] = { exports: {} };b[m][0].call(h.exports, function (l) {
        var o = b[m][1][l];
        return c(o ? o : l);
      }, h, h.exports, e, b, g, d);
    }return g[m].exports;
  }var a = typeof require == "function" && require;
  for (var f = 0; f < d.length; f++) {
    c(d[f]);
  }return c;
})({ 1: [function (b, c, a) {
    b("@marcom/ac-polyfills/Array/prototype.slice");
    b("@marcom/ac-polyfills/Element/prototype.classList");var d = b("./className/add");
    c.exports = function f() {
      var j = Array.prototype.slice.call(arguments);var h = j.shift(j);
      var g;if (h.classList && h.classList.add) {
        h.classList.add.apply(h.classList, j);return;
      }for (g = 0; g < j.length; g++) {
        d(h, j[g]);
      }
    };
  }, { "./className/add": 2, "@marcom/ac-polyfills/Array/prototype.slice": undefined, "@marcom/ac-polyfills/Element/prototype.classList": undefined }], 2: [function (b, c, a) {
    var d = b("./contains");
    c.exports = function f(h, g) {
      if (!d(h, g)) {
        h.className += " " + g;
      }
    };
  }, { "./contains": 3 }], 3: [function (b, c, a) {
    var f = b("./getTokenRegExp");
    c.exports = function d(h, g) {
      return f(g).test(h.className);
    };
  }, { "./getTokenRegExp": 4 }], 4: [function (b, c, a) {
    c.exports = function d(f) {
      return new RegExp("(\\s|^)" + f + "(\\s|$)");
    };
  }, {}], 5: [function (c, d, b) {
    var f = c("./contains");var g = c("./getTokenRegExp");d.exports = function a(i, h) {
      if (f(i, h)) {
        i.className = i.className.replace(g(h), "$1").trim();
      }
    };
  }, { "./contains": 3, "./getTokenRegExp": 4 }], 6: [function (d, f, c) {
    d("@marcom/ac-polyfills/Array/prototype.slice");
    d("@marcom/ac-polyfills/Element/prototype.classList");var b = d("./className/remove");
    f.exports = function a() {
      var j = Array.prototype.slice.call(arguments);var h = j.shift(j);
      var g;if (h.classList && h.classList.remove) {
        h.classList.remove.apply(h.classList, j);
        return;
      }for (g = 0; g < j.length; g++) {
        b(h, j[g]);
      }
    };
  }, { "./className/remove": 5, "@marcom/ac-polyfills/Array/prototype.slice": undefined, "@marcom/ac-polyfills/Element/prototype.classList": undefined }], 7: [function (c, d, b) {
    d.exports = function a(f) {
      f = f || window;
      if (f === window) {
        return window.scrollY || window.pageYOffset;
      }return f.scrollTop;
    };
  }, {}], 8: [function (b, c, a) {
    c.exports = 8;
  }, {}], 9: [function (b, c, a) {
    c.exports = 11;
  }, {}], 10: [function (b, c, a) {
    c.exports = 1;
  }, {}], 11: [function (b, c, a) {
    c.exports = 3;
  }, {}], 12: [function (c, d, a) {
    var f = c("./internal/validate");d.exports = function b(g, h) {
      f.insertNode(g, true, "insertBefore");
      f.childNode(h, true, "insertBefore");f.hasParentNode(h, "insertBefore");return h.parentNode.insertBefore(g, h);
    };
  }, { "./internal/validate": 14 }], 13: [function (b, c, a) {
    var d = b("../isNode");c.exports = function f(h, g) {
      if (!d(h)) {
        return false;
      }if (typeof g === "number") {
        return h.nodeType === g;
      }return g.indexOf(h.nodeType) !== -1;
    };
  }, { "../isNode": 15 }], 14: [function (g, d, j) {
    var b = g("./isNodeType");var c = g("../COMMENT_NODE");
    var k = g("../DOCUMENT_FRAGMENT_NODE");var i = g("../ELEMENT_NODE");var h = g("../TEXT_NODE");
    var m = [i, h, c, k];var f = " must be an Element, TextNode, Comment, or Document Fragment";
    var p = [i, h, c];var l = " must be an Element, TextNode, or Comment";var n = [i, k];var o = " must be an Element, or Document Fragment";
    var a = " must have a parentNode";d.exports = { parentNode: function parentNode(q, t, s, r) {
        r = r || "target";
        if ((q || t) && !b(q, n)) {
          throw new TypeError(s + ": " + r + o);
        }
      }, childNode: function childNode(q, t, s, r) {
        r = r || "target";
        if (!q && !t) {
          return;
        }if (!b(q, p)) {
          throw new TypeError(s + ": " + r + l);
        }
      }, insertNode: function insertNode(q, t, s, r) {
        r = r || "node";
        if (!q && !t) {
          return;
        }if (!b(q, m)) {
          throw new TypeError(s + ": " + r + f);
        }
      }, hasParentNode: function hasParentNode(q, s, r) {
        r = r || "target";
        if (!q.parentNode) {
          throw new TypeError(s + ": " + r + a);
        }
      } };
  }, { "../COMMENT_NODE": 8, "../DOCUMENT_FRAGMENT_NODE": 9, "../ELEMENT_NODE": 10, "../TEXT_NODE": 11, "./isNodeType": 13 }], 15: [function (b, c, a) {
    c.exports = function d(f) {
      return !!(f && f.nodeType);
    };
  }, {}], 16: [function (b, c, a) {
    c.exports = { EventEmitterMicro: b("./ac-event-emitter-micro/EventEmitterMicro") };
  }, { "./ac-event-emitter-micro/EventEmitterMicro": 17 }], 17: [function (b, c, a) {
    function f() {
      this._events = {};
    }var d = f.prototype;d.on = function (g, h) {
      this._events[g] = this._events[g] || [];this._events[g].unshift(h);
    };d.once = function (g, j) {
      var i = this;function h(k) {
        i.off(g, h);if (k !== undefined) {
          j(k);
        } else {
          j();
        }
      }this.on(g, h);
    };d.off = function (g, i) {
      if (!this.has(g)) {
        return;
      }if (arguments.length === 1) {
        this._events[g] = null;
        delete this._events[g];return;
      }var h = this._events[g].indexOf(i);if (h === -1) {
        return;
      }this._events[g].splice(h, 1);
    };d.trigger = function (g, j) {
      if (!this.has(g)) {
        return;
      }for (var h = this._events[g].length - 1; h >= 0; h--) {
        if (j !== undefined) {
          this._events[g][h](j);
        } else {
          this._events[g][h]();
        }
      }
    };
    d.has = function (g) {
      if (g in this._events === false || this._events[g].length === 0) {
        return false;
      }return true;
    };d.destroy = function () {
      for (var g in this._events) {
        this._events[g] = null;
      }this._events = null;
    };c.exports = f;
  }, {}], 18: [function (c, d, b) {
    var a = function a() {
      var h = "";
      var g;for (g = 0; g < arguments.length; g++) {
        if (g > 0) {
          h += ",";
        }h += arguments[g];
      }return h;
    };
    d.exports = function f(i, h) {
      h = h || a;var g = function g() {
        var j = arguments;var k = h.apply(this, j);
        if (!(k in g.cache)) {
          g.cache[k] = i.apply(this, j);
        }return g.cache[k];
      };g.cache = {};return g;
    };
  }, {}], 19: [function (f, d, h) {
    var a = f("./shared/stylePropertyCache");var i = f("./shared/getStyleTestElement");
    var b = f("./utils/toCSS");var k = f("./utils/toDOM");var j = f("./shared/prefixHelper");
    var c = function c(o, l) {
      var m = b(o);var n = l === false ? false : b(l);a[o] = a[l] = a[m] = a[n] = { dom: l, css: n };
      return l;
    };d.exports = function g(p) {
      var n;var l;var o;var m;p += "";if (p in a) {
        return a[p].dom;
      }o = i();p = k(p);l = p.charAt(0).toUpperCase() + p.substring(1);if (p === "filter") {
        n = ["WebkitFilter", "filter"];
      } else {
        n = (p + " " + j.dom.join(l + " ") + l).split(" ");
      }for (m = 0; m < n.length; m++) {
        if (typeof o.style[n[m]] !== "undefined") {
          if (m !== 0) {
            j.reduce(m - 1);
          }return c(p, n[m]);
        }
      }return c(p, false);
    };
  }, { "./shared/getStyleTestElement": 21, "./shared/prefixHelper": 22, "./shared/stylePropertyCache": 23, "./utils/toCSS": 25, "./utils/toDOM": 26 }], 20: [function (d, b, h) {
    var f = d("./getStyleProperty");
    var k = d("./shared/styleValueAvailable");var j = d("./shared/prefixHelper");var a = d("./shared/stylePropertyCache");
    var i = {};var l = /(\([^\)]+\))/gi;var g = /([^ ,;\(]+(\([^\)]+\))?)/gi;b.exports = function c(o, n) {
      var m;
      n += "";o = f(o);if (!o) {
        return false;
      }if (k(o, n)) {
        return n;
      }m = a[o].css;n = n.replace(g, function (q) {
        var p;
        var t;var s;var r;if (q[0] === "#" || !isNaN(q[0])) {
          return q;
        }t = q.replace(l, "");s = m + ":" + t;
        if (s in i) {
          if (i[s] === false) {
            return "";
          }return q.replace(t, i[s]);
        }p = j.css.map(function (u) {
          return u + q;
        });p = [q].concat(p);for (r = 0; r < p.length; r++) {
          if (k(o, p[r])) {
            if (r !== 0) {
              j.reduce(r - 1);
            }i[s] = p[r].replace(l, "");return p[r];
          }
        }i[s] = false;return "";
      });n = n.trim();return n === "" ? false : n;
    };
  }, { "./getStyleProperty": 19, "./shared/prefixHelper": 22, "./shared/stylePropertyCache": 23, "./shared/styleValueAvailable": 24 }], 21: [function (c, d, b) {
    var f;
    d.exports = function a() {
      if (!f) {
        f = document.createElement("_");
      } else {
        f.style.cssText = "";
        f.removeAttribute("style");
      }return f;
    };d.exports.resetElement = function () {
      f = null;
    };
  }, {}], 22: [function (b, d, a) {
    var i = ["-webkit-", "-moz-", "-ms-"];
    var f = ["Webkit", "Moz", "ms"];var h = ["webkit", "moz", "ms"];var c = function c() {
      this.initialize();
    };var g = c.prototype;g.initialize = function () {
      this.reduced = false;this.css = i;this.dom = f;
      this.evt = h;
    };g.reduce = function (j) {
      if (!this.reduced) {
        this.reduced = true;this.css = [this.css[j]];
        this.dom = [this.dom[j]];this.evt = [this.evt[j]];
      }
    };d.exports = new c();
  }, {}], 23: [function (b, c, a) {
    c.exports = {};
  }, {}], 24: [function (c, b, d) {
    var a = c("./stylePropertyCache");var f = c("./getStyleTestElement");
    var i = false;var k;var j;var g = function g() {
      var l;if (!i) {
        i = true;k = "CSS" in window && "supports" in window.CSS;
        j = false;l = f();try {
          l.style.width = "invalid";
        } catch (m) {
          j = true;
        }
      }
    };b.exports = function h(o, n) {
      var m;
      var l;g();if (k) {
        o = a[o].css;return CSS.supports(o, n);
      }l = f();m = l.style[o];if (j) {
        try {
          l.style[o] = n;
        } catch (p) {
          return false;
        }
      } else {
        l.style[o] = n;
      }return l.style[o] && l.style[o] !== m;
    };b.exports.resetFlags = function () {
      i = false;
    };
  }, { "./getStyleTestElement": 21, "./stylePropertyCache": 23 }], 25: [function (c, d, b) {
    var f = /^(webkit|moz|ms)/gi;
    d.exports = function a(h) {
      var g;if (h.toLowerCase() === "cssfloat") {
        return "float";
      }if (f.test(h)) {
        h = "-" + h;
      }return h.replace(/([A-Z]+)([A-Z][a-z])/g, "$1-$2").replace(/([a-z\d])([A-Z])/g, "$1-$2").toLowerCase();
    };
  }, {}], 26: [function (b, c, a) {
    var f = /-([a-z])/g;c.exports = function d(h) {
      var g;if (h.toLowerCase() === "float") {
        return "cssFloat";
      }h = h.replace(f, function (j, i) {
        return i.toUpperCase();
      });if (h.substr(0, 2) === "Ms") {
        h = "ms" + h.substring(2);
      }return h;
    };
  }, {}], 27: [function (c, d, b) {
    var g = c("@marcom/ac-prefixer/getStyleValue");
    var f = c("@marcom/ac-prefixer/getStyleProperty");var h = c("@marcom/ac-function/memoize");
    function a(j, i) {
      if (typeof i !== "undefined") {
        return !!g(j, i);
      } else {
        return !!f(j);
      }
    }d.exports = h(a);
    d.exports.original = a;
  }, { "@marcom/ac-function/memoize": 18, "@marcom/ac-prefixer/getStyleProperty": 19, "@marcom/ac-prefixer/getStyleValue": 20 }], 28: [function (b, d, a) {
    var g = b("@marcom/ac-event-emitter-micro").EventEmitterMicro;
    function c() {
      g.call(this);this._page = null;this.viewportPaddingRatio = 1;
    }var f = c.prototype = Object.create(g.prototype);
    c.prototype.constructor = c;f.getPage = function () {
      return this._page;
    };f.setPage = function (h) {
      this._page = h;
    };f.removePage = function (h) {
      if (h === this._page) {
        this._page = null;
      }
    };f.getViewportPadding = function () {
      return this.getPage().getWindowHeight() * this.viewportPaddingRatio;
    };f.deepRefreshAllElementMetrics = function () {
      this.trigger(c.prototype.DEEP_REFRESH_ALL_METRICS);
    };f.onPageHeightSettled = function (l, h) {
      var i = document.documentElement.scrollHeight;
      var j = 0;var h = h || 30;window.requestAnimationFrame(function k() {
        var m = document.documentElement.scrollHeight;
        if (i !== m) {
          j = 0;
        } else {
          j++;if (j >= h) {
            l();return;
          }
        }i = m;window.requestAnimationFrame(k);
      });
    };f.DEEP_REFRESH_ALL_METRICS = "page.deep_refresh_all_metrics";d.exports = new c();
  }, { "@marcom/ac-event-emitter-micro": 16 }], 29: [function (c, b, d) {
    var n = c("@marcom/ac-event-emitter-micro").EventEmitterMicro;
    var j = c("@marcom/ac-feature/cssPropertyAvailable");var g = c("@marcom/ac-dom-nodes/insertBefore");
    var k = c("@marcom/ac-dom-metrics/getScrollY");var h = c("@marcom/ac-classlist/add");
    var m = c("@marcom/ac-classlist/remove");var a = "css-sticky";var i = function i(p, o) {
      n.call(this);
      this.el = p;this.stuck = false;this._selectors = { placeholderID: o.placeholderID || o.className + "-sticky-placeholder", stuckClassName: o.stuckClassName || o.className + "-sticking" };
      this._createPlaceholder();this._featureDetection();this._updatePosition = this._updatePosition.bind(this);
      this._updatePlaceholderOffset = this._updatePlaceholderOffset.bind(this);window.addEventListener("scroll", this._updatePosition);
      document.addEventListener("touchmove", this._updatePosition);window.addEventListener("resize", this._updatePlaceholderOffset);
      window.addEventListener("orientationchange", this._updatePlaceholderOffset);if ("acStore" in window) {
        window.acStore.getStorefront().then(this._updatePlaceholderOffset);
        window.acStore.on("storefrontChange", this._updatePlaceholderOffset);
      }
    };i.create = function (p, o) {
      return new i(p, o);
    };var l = n.prototype;var f = i.prototype = Object.create(l);i.prototype.constructor = i;
    f._featureDetection = function () {
      var p = j("position", "sticky");var o = a;if (!p) {
        o = "no-" + o;
      }h(this.el, o);h(this.placeholder, o);
    };f._createPlaceholder = function () {
      this.placeholder = document.createElement("div");
      this.placeholder.id = this._selectors.placeholderID;g(this.placeholder, this.el);this._updatePlaceholderOffset();
    };f._updatePlaceholderOffset = function () {
      var o = this.placeholder.offsetTop;o += document.documentElement.offsetTop + document.body.offsetTop;
      if (o !== this._placeholderOffset) {
        this._placeholderOffset = o;this._updatePosition();
      }
    };f._updatePosition = function () {
      var o = k();if (o > this._placeholderOffset) {
        if (!this.stuck) {
          h(this.el, this._selectors.stuckClassName);
          h(this.placeholder, this._selectors.stuckClassName);this.stuck = true;this.trigger("stuck");
        }
      } else {
        if (this.stuck) {
          m(this.el, this._selectors.stuckClassName);m(this.placeholder, this._selectors.stuckClassName);
          this.stuck = false;this.trigger("unstuck");
        }
      }
    };b.exports = i;
  }, { "@marcom/ac-classlist/add": 1, "@marcom/ac-classlist/remove": 6, "@marcom/ac-dom-metrics/getScrollY": 7, "@marcom/ac-dom-nodes/insertBefore": 12, "@marcom/ac-event-emitter-micro": 16, "@marcom/ac-feature/cssPropertyAvailable": 27 }], 30: [function (c, d, b) {
    var h = c("@marcom/ac-jetpack-lib/utils/Page");
    var g = c("./components/SimpleSticky");var f = { initialize: function a() {
        this.initializeSticky();
      }, initializeSticky: function i() {
        var j = document.querySelector("[data-selector-table]");
        if (j) {
          new g(j, { className: "selector-table", stuckClassName: "is-sticking" });
        }
      } };h.onPageHeightSettled(function () {
      f.initialize();
    });
  }, { "./components/SimpleSticky": 29, "@marcom/ac-jetpack-lib/utils/Page": 28 }] }, {}, [30]);