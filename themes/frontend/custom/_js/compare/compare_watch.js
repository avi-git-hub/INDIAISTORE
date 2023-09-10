function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#sticky-anchor-drop').offset().top;
  if (window_top > div_top) {
    $('#sticky-drop').addClass('stick');
  } else {
    $('#sticky-drop').removeClass('stick');
  }

  // var scroll = $(window).scrollTop();
  // console.log(scroll);
 
  if (window_top > 2750) {  
      $("#sticky-drop").addClass("sticky-remove");
  } else {
    $("#sticky-drop").removeClass("sticky-remove");
  }
}

$(function() {
  $(window).scroll(function(){
    sticky_relocate();
  });
  sticky_relocate();
});

window.mobileAndTabletCheck = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};

const isMobile = navigator.userAgentData.mobile; //resolves true/false

const reorderDOM = {
    selectorEls: null,
    headerEl: null,
    capturedEls: null,
    capturedElsQuery: null,
    clonedEls: [],
    cOrder: null,
    cMax: null,
    useStatic: null,
    selectorElsQuery: null,
    staticEl: null,
    staticElQuery: null,
    addListeners() {
      window.addEventListener("channel:reorder-dom", (e) => {
        (this.useStatic = e.detail.useStatic),
          (this.cOrder = e.detail.order),
          (this.cMax = e.detail.max),
          this.updateElements();
      });
    },
    updateElements() {
      !this.useStatic && this.updateSelectors(),
        !this.useStatic && this.updateHeadersAX(),
        !this.useStatic && this.updateRows(),
        this.useStatic && this.updateStatic();
    },
    arrayFromNodeList(e) {
      const t = [];
      return (
        e.forEach((e) => {
          t.push(e);
        }),
        t
      );
    },
    updateStatic() {
      this.clonedEls.forEach((e, t) => {
        const i = this.capturedEls[t],
          r = e.cloneNode(!0),
          s = r.querySelector("[role=rowheader]");
        let n = [];
        this.cOrder.forEach((e, t) => {
          const i = `[index="${e}"]`,
            s = r.querySelector(i).parentElement;
          n.push(s);
        }),
          n.reverse().forEach((e, t) => {
            e.setAttribute("added", !0), r.prepend(e);
          });
        for (let e = 0; e < r.children.length; e++) {
          const t = r.children[e];
          (t.style.order = "unset"), this.toggleVisibility(t, e < this.cMax);
        }
        r.prepend(s), r.setAttribute("added", !0), (i.innerHTML = r.innerHTML);
      });
    },
    updateHeadersAX() {
      let e = '<div role="columnheader">&nbsp;</div>';
      document.querySelectorAll(this.selectorElsQuery).forEach((t, i) => {
        const r = t.querySelector("[selected=true]").innerText.trim();
        "flex" === t.parentElement.parentElement.style.display &&
          (e += `<div role="columnheader">${r}</div>`);
      }),
        (this.headerEl.innerHTML = e);
    },
    updateSelectors() {
      document.querySelectorAll(this.selectorElsQuery).forEach((e, t) => {
        e.replaceWith(this.selectorEls[t]);
      }),
        this.cOrder.forEach((e, t) => {
          const i = this.selectorEls[t];
          let r = 0;
          for (let t = 0; t < i.options.length; t++) {
            const s = i.options[t],
              n = Number(s.value) === e;
            n && (r = t),
              s.removeAttribute("selected"),
              s.setAttribute("selected", n),
              s.removeAttribute("aria-selected"),
              s.setAttribute("aria-selected", n);
          }
          i.selectedIndex = r;
        });
      for (var e = 0; e < this.selectorEls.length; e++) {
        const t = this.selectorEls[e],
          i = e < this.cMax;
        this.toggleVisibility(t.parentElement.parentElement, i);
      }
    },
    updateRows() {
      this.clonedEls.forEach((e, t) => {
        const i = this.capturedEls[t],
          r = e.cloneNode(!0),
          s = r.querySelector("[role=rowheader]"),
          n = [];
        this.cOrder.forEach((e) => {
          const t = `[index="${e}"]`,
            i = r.querySelector(t).parentElement;
          n.push(i);
        }),
          n.reverse().forEach((e) => {
            r.prepend(e);
          });
        for (let e = 0; e < r.children.length; e++) {
          const t = r.children[e];
          (t.style.order = "unset"), this.toggleVisibility(t, e < this.cMax);
        }
        r.prepend(s), (i.innerHTML = r.innerHTML);
      });
    },
    toggleVisibility(e, t) {
      (e.style.visibility = t ? "visible" : "hidden"),
        (e.style.display = t ? "flex" : "none"),
        (e.style.order = "unset");
    },
    init(e, t, i, r, s) {
      (this.useStatic = s),
        (this.capturedEls = document.querySelectorAll(e)),
        (this.capturedElsQuery = e),
        (this.headerEl = document.querySelector(i)),
        (this.selectorEls = document.querySelectorAll(t)),
        (this.selectorElsQuery = t),
        (this.staticElQuery = r),
        (this.staticEl =
          this.useStatic &&
          document.querySelector(this.staticElQuery).cloneNode(!0)),
        (this.useStatic = s),
        (this.clonedEls = this.arrayFromNodeList(this.capturedEls)),
        this.addListeners();
    },
  },
  viewportManager = {
    nState: null,
    cState: null,
    init: function () {
      this.addListeners();
    },
    addListeners: function () {
      const e = {
        small: window.matchMedia("(max-width: 734px)"),
        medium: window.matchMedia("(min-width: 735px) and (max-width: 1068px)"),
        large: window.matchMedia("(min-width: 1069px)"),
      };
      Object.keys(e).forEach((t) => {
        const i = e[t];
        "function" != typeof i.addEventListener
          ? i.addListener(() => {
              i.matches && this.viewportObserve(t);
            })
          : i.addEventListener("change", () => {
              i.matches && this.viewportObserve(t);
            }),
          i.matches && this.viewportObserve(t);
      });
    },
    viewportObserve: function (e) {
      (this.nState = e),
        this.cState !== this.nState &&
          ((this.cState = this.nState), this.dispatch(this.cState));
    },
    dispatch: function (e) {
      const t = new CustomEvent("channel:viewport-change", { detail: e });
      window.dispatchEvent(t);
    },
  },
  selectorManager = {
    init: function (e, t) {
      document.querySelectorAll(e).forEach((e, t) => {
        e.addEventListener("change", () => {
          const i = e.selectedIndex,
            r = e.value,
            s = Number(e.options[i].getAttribute("value"));
          this.dispatch({ elIndex: t, selectedIndex: s, value: r });
        });
      });
    },
    dispatch: function (e) {
      const t = new CustomEvent("channel:user-select", { detail: e });
      window.dispatchEvent(t);
    },
  },
  dataManager = {
    order: null,
    viewportKey: null,
    viewportOrder: null,
    viewportMax: null,
    init: function (e, t) {
      (this.order = e), (this.useStatic = t), this.addListeners();
    },
    viewportChange(e) {
      (this.viewportKey = e),
        (this.viewportOrder = this.order[this.viewportKey]),
        (this.viewportMax = this.order.max[this.viewportKey]),
        this.dispatch({
          order: this.viewportOrder,
          max: this.viewportMax,
          useStatic: this.useStatic,
        });
    },
    flattenOrders() {
      (this.viewportOrder = this.order[this.viewportKey]),
        (this.viewportMax = this.order.max[this.viewportKey]),
        ["small", "medium", "large"].forEach((e) => {
          this.order[e] = this.viewportOrder;
        });
    },
    userSelect(e) {
      const { elIndex: t, selectedIndex: i } = e,
        r = this.viewportOrder[t],
        s = this.viewportOrder.find((e) => e === i),
        n = this.viewportOrder.indexOf(s);
      void 0 !== s
        ? ((this.viewportOrder[n] = r), (this.viewportOrder[t] = s))
        : (this.viewportOrder[t] = i),
        this.flattenOrders(),
        this.dispatch({
          order: this.viewportOrder,
          max: this.viewportMax,
          useStatic: this.useStatic,
        });
    },
    addListeners: function () {
      window.addEventListener("channel:user-select", (e) => {
        this.userSelect(e.detail);
      }),
        window.addEventListener("channel:user-refresh", (e) => {
          this.dispatch({
            order: this.viewportOrder,
            max: this.viewportMax,
            useStatic: this.useStatic,
          });
        }),
        window.addEventListener("channel:viewport-change", (e) => {
          this.viewportChange(e.detail),
            document.querySelectorAll(this.selectorElsQuery).forEach((e) => {
              e.blur();
            });
        });
    },
    dispatch: function (e) {
      const t = new CustomEvent("channel:reorder-dom", { detail: e });
      window.dispatchEvent(t);
    },
  },
  channelCompare = {
    inited: !1,
    init: function (e = null) {
      if (this.inited) return;
      let t;
      if (((this.isDev = window.location.host.indexOf("127.0.0.1") > -1), e))
        t = e;
      else if (!e) {
        const e = document.querySelector("[data-channel-html-compare]");
        if (!e)
          return void console.warn(
            "channelCompare: element[data-channel-html-compare not found]"
          );
        try {
          const i = e.getAttribute("data-channel-html-compare");
          t = JSON.parse(i);
        } catch (e) {
          return void console.warn("channelCompare: error parsing JSON", e);
        }
      }
      const i = t.order,
        r = t.headerEl,
        s = t.selectorEls,
        n = t.swapEls,
        a = t.staticEl,
        l = t.useStatic;
      reorderDOM.init(n, s, r, a, l),
        !l && selectorManager.init(s),
        dataManager.init(i, l),
        viewportManager.init(),
        (this.inited = !0);
    },
  };
window.addEventListener("pageshow", (e) => {
  const { persisted: t } = e;
  if (t)
    window.addEventListener("scroll", () => {
      const e = new CustomEvent("channel:user-refresh");
      window.dispatchEvent(e);
    });
  else {
    channelCompare.init(),
      document
        .querySelector(".channel-compare")
        .classList.remove("channel-compare--hidden");
  }
});
