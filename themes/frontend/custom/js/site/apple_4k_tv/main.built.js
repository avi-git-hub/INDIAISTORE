(function e(b,g,d){function c(m,j){if(!g[m]){if(!b[m]){var i=typeof require=="function"&&require;
if(!j&&i){return i(m,!0)}if(a){return a(m,!0)}var k=new Error("Cannot find module '"+m+"'");
throw k.code="MODULE_NOT_FOUND",k}var h=g[m]={exports:{}};b[m][0].call(h.exports,function(l){var o=b[m][1][l];
return c(o?o:l)},h,h.exports,e,b,g,d)}return g[m].exports}var a=typeof require=="function"&&require;
for(var f=0;f<d.length;f++){c(d[f])}return c})({1:[function(b,c,a){b("@marcom/ac-polyfills/Array/prototype.slice");
b("@marcom/ac-polyfills/Element/prototype.classList");var d=b("./className/add");
c.exports=function f(){var j=Array.prototype.slice.call(arguments);var h=j.shift(j);
var g;if(h.classList&&h.classList.add){h.classList.add.apply(h.classList,j);return
}for(g=0;g<j.length;g++){d(h,j[g])}}},{"./className/add":3,"@marcom/ac-polyfills/Array/prototype.slice":undefined,"@marcom/ac-polyfills/Element/prototype.classList":undefined}],2:[function(b,c,a){c.exports={add:b("./className/add"),contains:b("./className/contains"),remove:b("./className/remove")}
},{"./className/add":3,"./className/contains":4,"./className/remove":6}],3:[function(b,c,a){var d=b("./contains");
c.exports=function f(h,g){if(!d(h,g)){h.className+=" "+g}}},{"./contains":4}],4:[function(b,c,a){var f=b("./getTokenRegExp");
c.exports=function d(h,g){return f(g).test(h.className)}},{"./getTokenRegExp":5}],5:[function(b,c,a){c.exports=function d(f){return new RegExp("(\\s|^)"+f+"(\\s|$)")
}},{}],6:[function(c,d,b){var f=c("./contains");var g=c("./getTokenRegExp");d.exports=function a(i,h){if(f(i,h)){i.className=i.className.replace(g(h),"$1").trim()
}}},{"./contains":4,"./getTokenRegExp":5}],7:[function(b,d,a){b("@marcom/ac-polyfills/Element/prototype.classList");
var f=b("./className/contains");d.exports=function c(h,g){if(h.classList&&h.classList.contains){return h.classList.contains(g)
}return f(h,g)}},{"./className/contains":4,"@marcom/ac-polyfills/Element/prototype.classList":undefined}],8:[function(b,c,a){c.exports={add:b("./add"),contains:b("./contains"),remove:b("./remove"),toggle:b("./toggle")}
},{"./add":1,"./contains":7,"./remove":9,"./toggle":10}],9:[function(d,f,c){d("@marcom/ac-polyfills/Array/prototype.slice");
d("@marcom/ac-polyfills/Element/prototype.classList");var b=d("./className/remove");
f.exports=function a(){var j=Array.prototype.slice.call(arguments);var h=j.shift(j);
var g;if(h.classList&&h.classList.remove){h.classList.remove.apply(h.classList,j);
return}for(g=0;g<j.length;g++){b(h,j[g])}}},{"./className/remove":6,"@marcom/ac-polyfills/Array/prototype.slice":undefined,"@marcom/ac-polyfills/Element/prototype.classList":undefined}],10:[function(c,d,b){c("@marcom/ac-polyfills/Element/prototype.classList");
var f=c("./className");d.exports=function a(j,i,k){var h=(typeof k!=="undefined");
var g;if(j.classList&&j.classList.toggle){if(h){return j.classList.toggle(i,k)}return j.classList.toggle(i)
}if(h){g=!!k}else{g=!f.contains(j,i)}if(g){f.add(j,i)}else{f.remove(j,i)}return g
}},{"./className":2,"@marcom/ac-polyfills/Element/prototype.classList":undefined}],11:[function(b,c,a){c.exports={EventEmitterMicro:b("./ac-event-emitter-micro/EventEmitterMicro")}
},{"./ac-event-emitter-micro/EventEmitterMicro":12}],12:[function(b,c,a){function f(){this._events={}
}var d=f.prototype;d.on=function(g,h){this._events[g]=this._events[g]||[];this._events[g].unshift(h)
};d.once=function(g,j){var i=this;function h(k){i.off(g,h);if(k!==undefined){j(k)
}else{j()}}this.on(g,h)};d.off=function(g,i){if(!this.has(g)){return}if(arguments.length===1){this._events[g]=null;
delete this._events[g];return}var h=this._events[g].indexOf(i);if(h===-1){return
}this._events[g].splice(h,1)};d.trigger=function(g,j){if(!this.has(g)){return}for(var h=this._events[g].length-1;
h>=0;h--){if(j!==undefined){this._events[g][h](j)}else{this._events[g][h]()}}};
d.has=function(g){if(g in this._events===false||this._events[g].length===0){return false
}return true};d.destroy=function(){for(var g in this._events){this._events[g]=null
}this._events=null};c.exports=f},{}],13:[function(c,d,b){var g=c("./ac-clock/Clock"),f=c("./ac-clock/ThrottledClock"),a=c("./ac-clock/sharedClockInstance");
a.Clock=g;a.ThrottledClock=f;d.exports=a},{"./ac-clock/Clock":14,"./ac-clock/ThrottledClock":15,"./ac-clock/sharedClockInstance":16}],14:[function(c,d,b){c("@marcom/ac-polyfills/Function/prototype.bind");
c("@marcom/ac-polyfills/requestAnimationFrame");var g;var f=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var a=new Date().getTime();function h(){f.call(this);this.lastFrameTime=null;this._animationFrame=null;
this._active=false;this._startTime=null;this._boundOnAnimationFrame=this._onAnimationFrame.bind(this);
this._getTime=Date.now||function(){return new Date().getTime()}}g=h.prototype=new f(null);
g.start=function(){if(this._active){return}this._tick()};g.stop=function(){if(this._active){window.cancelAnimationFrame(this._animationFrame)
}this._animationFrame=null;this.lastFrameTime=null;this._active=false};g.destroy=function(){this.stop();
this.off();var j;for(j in this){if(this.hasOwnProperty(j)){this[j]=null}}};g.isRunning=function(){return this._active
};g._tick=function(){if(!this._active){this._active=true}this._animationFrame=window.requestAnimationFrame(this._boundOnAnimationFrame)
};g._onAnimationFrame=function(k){if(this.lastFrameTime===null){this.lastFrameTime=k
}var l=k-this.lastFrameTime;var j=0;if(l>=1000){l=0}if(l!==0){j=1000/l}if(this._firstFrame===true){l=0;
this._firstFrame=false}if(j===0){this._firstFrame=true}else{var i={time:k,delta:l,fps:j,naturalFps:j,timeNow:this._getTime()};
this.trigger("update",i);this.trigger("draw",i)}this._animationFrame=null;this.lastFrameTime=k;
if(this._active!==false){this._tick()}else{this.lastFrameTime=null}};d.exports=h
},{"@marcom/ac-event-emitter-micro":11,"@marcom/ac-polyfills/Function/prototype.bind":undefined,"@marcom/ac-polyfills/requestAnimationFrame":undefined}],15:[function(c,d,b){c("@marcom/ac-polyfills/requestAnimationFrame");
var g;var a=c("./sharedClockInstance"),f=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;
function h(j,i){if(j===null){return}f.call(this);i=i||{};this._fps=j||null;this._clock=i.clock||a;
this._lastThrottledTime=null;this._clockEvent=null;this._boundOnClockDraw=this._onClockDraw.bind(this);
this._boundOnClockUpdate=this._onClockUpdate.bind(this);this._clock.on("update",this._boundOnClockUpdate)
}g=h.prototype=new f(null);g.setFps=function(i){this._fps=i;return this};g.getFps=function(){return this._fps
};g.start=function(){this._clock.start();return this};g.stop=function(){this._clock.stop();
return this};g.isRunning=function(){return this._clock.isRunning()};g.destroy=function(){this._clock.off("update",this._boundOnClockUpdate);
this._clock.destroy.call(this)};g._onClockUpdate=function(i){if(this._lastThrottledTime===null){this._lastThrottledTime=this._clock.lastFrameTime
}var j=i.time-this._lastThrottledTime;if(!this._fps){throw new TypeError("FPS is not defined.")
}if(Math.ceil(1000/j)>=this._fps+2){return}this._clockEvent=i;this._clockEvent.delta=j;
this._clockEvent.fps=1000/j;this._lastThrottledTime=this._clockEvent.time;this._clock.once("draw",this._boundOnClockDraw);
this.trigger("update",this._clockEvent)};g._onClockDraw=function(){this.trigger("draw",this._clockEvent)
};d.exports=h},{"./sharedClockInstance":16,"@marcom/ac-event-emitter-micro":11,"@marcom/ac-polyfills/requestAnimationFrame":undefined}],16:[function(b,c,a){var d=b("./Clock");
c.exports=new d()},{"./Clock":14}],17:[function(c,d,b){var g=c("./utils/addEventListener");
var a=c("./shared/getEventType");d.exports=function f(k,i,j,h){i=a(k,i);return g(k,i,j,h)
}},{"./shared/getEventType":22,"./utils/addEventListener":26}],18:[function(d,f,c){var a=d("./utils/dispatchEvent");
var b=d("./shared/getEventType");f.exports=function g(j,i,h){i=b(j,i);return a(j,i,h)
}},{"./shared/getEventType":22,"./utils/dispatchEvent":27}],19:[function(b,c,a){c.exports={addEventListener:b("./addEventListener"),dispatchEvent:b("./dispatchEvent"),preventDefault:b("./preventDefault"),removeEventListener:b("./removeEventListener"),stop:b("./stop"),stopPropagation:b("./stopPropagation"),target:b("./target")}
},{"./addEventListener":17,"./dispatchEvent":18,"./preventDefault":20,"./removeEventListener":21,"./stop":23,"./stopPropagation":24,"./target":25}],20:[function(c,d,a){d.exports=function b(f){f=f||window.event;
if(f.preventDefault){f.preventDefault()}else{f.returnValue=false}}},{}],21:[function(d,f,c){var b=d("./utils/removeEventListener");
var a=d("./shared/getEventType");f.exports=function g(k,i,j,h){i=a(k,i);return b(k,i,j,h)
}},{"./shared/getEventType":22,"./utils/removeEventListener":28}],22:[function(c,f,b){var d=c("@marcom/ac-prefixer/getEventType");
f.exports=function a(j,i){var h;var g;if("tagName" in j){h=j.tagName}else{if(j===window){h="window"
}else{h="document"}}g=d(i,h);if(g){return g}return i}},{"@marcom/ac-prefixer/getEventType":271}],23:[function(d,g,b){var a=d("./stopPropagation");
var c=d("./preventDefault");g.exports=function f(h){h=h||window.event;a(h);c(h);
h.stopped=true;h.returnValue=false}},{"./preventDefault":20,"./stopPropagation":24}],24:[function(c,d,b){d.exports=function a(f){f=f||window.event;
if(f.stopPropagation){f.stopPropagation()}else{f.cancelBubble=true}}},{}],25:[function(b,c,a){c.exports=function d(f){f=f||window.event;
return(typeof f.target!=="undefined")?f.target:f.srcElement}},{}],26:[function(b,c,a){c.exports=function d(i,g,h,f){if(i.addEventListener){i.addEventListener(g,h,!!f)
}else{i.attachEvent("on"+g,h)}return i}},{}],27:[function(b,c,a){b("@marcom/ac-polyfills/CustomEvent");
c.exports=function d(i,h,g){var f;if(i.dispatchEvent){if(g){f=new CustomEvent(h,g)
}else{f=new CustomEvent(h)}i.dispatchEvent(f)}else{f=document.createEventObject();
if(g&&"detail" in g){f.detail=g.detail}i.fireEvent("on"+h,f)}return i}},{"@marcom/ac-polyfills/CustomEvent":undefined}],28:[function(b,c,a){c.exports=function d(i,g,h,f){if(i.removeEventListener){i.removeEventListener(g,h,!!f)
}else{i.detachEvent("on"+g,h)}return i}},{}],29:[function(b,c,a){c.exports=8},{}],30:[function(b,c,a){c.exports=11
},{}],31:[function(b,c,a){c.exports=9},{}],32:[function(b,c,a){c.exports=1},{}],33:[function(b,c,a){c.exports=3
},{}],34:[function(b,c,a){var d=b("../isNode");c.exports=function f(h,g){if(!d(h)){return false
}if(typeof g==="number"){return(h.nodeType===g)}return(g.indexOf(h.nodeType)!==-1)
}},{"../isNode":38}],35:[function(g,d,j){var b=g("./isNodeType");var c=g("../COMMENT_NODE");
var k=g("../DOCUMENT_FRAGMENT_NODE");var i=g("../ELEMENT_NODE");var h=g("../TEXT_NODE");
var m=[i,h,c,k];var f=" must be an Element, TextNode, Comment, or Document Fragment";
var p=[i,h,c];var l=" must be an Element, TextNode, or Comment";var n=[i,k];var o=" must be an Element, or Document Fragment";
var a=" must have a parentNode";d.exports={parentNode:function(q,t,s,r){r=r||"target";
if((q||t)&&!b(q,n)){throw new TypeError(s+": "+r+o)}},childNode:function(q,t,s,r){r=r||"target";
if(!q&&!t){return}if(!b(q,p)){throw new TypeError(s+": "+r+l)}},insertNode:function(q,t,s,r){r=r||"node";
if(!q&&!t){return}if(!b(q,m)){throw new TypeError(s+": "+r+f)}},hasParentNode:function(q,s,r){r=r||"target";
if(!q.parentNode){throw new TypeError(s+": "+r+a)}}}},{"../COMMENT_NODE":29,"../DOCUMENT_FRAGMENT_NODE":30,"../ELEMENT_NODE":32,"../TEXT_NODE":33,"./isNodeType":34}],36:[function(c,d,b){var g=c("./internal/isNodeType");
var a=c("./DOCUMENT_FRAGMENT_NODE");d.exports=function f(h){return g(h,a)}},{"./DOCUMENT_FRAGMENT_NODE":30,"./internal/isNodeType":34}],37:[function(c,d,b){var g=c("./internal/isNodeType");
var a=c("./ELEMENT_NODE");d.exports=function f(h){return g(h,a)}},{"./ELEMENT_NODE":32,"./internal/isNodeType":34}],38:[function(b,c,a){c.exports=function d(f){return !!(f&&f.nodeType)
}},{}],39:[function(c,d,b){var f=/^\[object (HTMLCollection|NodeList|Object)\]$/;
d.exports=function a(g){if(!g){return false}if(typeof g.length!=="number"){return false
}if(typeof g[0]==="object"&&(!g[0]||!g[0].nodeType)){return false}return f.test(Object.prototype.toString.call(g))
}},{}],40:[function(c,d,b){var f=c("./internal/validate");d.exports=function a(g){f.childNode(g,true,"remove");
if(!g.parentNode){return g}return g.parentNode.removeChild(g)}},{"./internal/validate":35}],41:[function(b,c,a){c.exports={getStyle:b("./getStyle"),setStyle:b("./setStyle")}
},{"./getStyle":42,"./setStyle":44}],42:[function(c,d,b){var f=c("@marcom/ac-prefixer/getStyleProperty");
var g=c("@marcom/ac-prefixer/stripPrefixes");d.exports=function a(){var k=Array.prototype.slice.call(arguments);
var p=k.shift(k);var m=window.getComputedStyle(p);var l={};var o;var h;var n;var j;
if(typeof k[0]!=="string"){k=k[0]}for(j=0;j<k.length;j++){o=k[j];h=f(o);if(h){o=g(h);
n=m[h];if(!n||n==="auto"){n=null}if(n){n=g(n)}}else{n=null}l[o]=n}return l}},{"@marcom/ac-prefixer/getStyleProperty":273,"@marcom/ac-prefixer/stripPrefixes":281}],43:[function(c,d,b){d.exports=function a(j){var h;
var g;var f;if(!j&&j!==0){return""}if(Array.isArray(j)){return j+""}if(typeof j==="object"){h="";
g=Object.keys(j);for(f=0;f<g.length;f++){h+=g[f]+"("+j[g[f]]+") "}return h.trim()
}return j}},{}],44:[function(d,f,c){var a=d("@marcom/ac-prefixer/getStyleCSS");
var g=d("@marcom/ac-prefixer/getStyleProperty");var b=d("./internal/normalizeValue");
f.exports=function h(o,l){var k="";var j;var n;var i;var m;var p;if(typeof l!=="object"){throw new TypeError("setStyle: styles must be an Object")
}for(n in l){m=b(l[n]);if(!m&&m!==0){i=g(n);if("removeAttribute" in o.style){o.style.removeAttribute(i)
}else{o.style[i]=""}}else{j=a(n,m);if(j!==false){k+=" "+j}}}if(k.length){p=o.style.cssText;
if(p.charAt(p.length-1)!==";"){p+=";"}p+=k;o.style.cssText=p}return o}},{"./internal/normalizeValue":43,"@marcom/ac-prefixer/getStyleCSS":272,"@marcom/ac-prefixer/getStyleProperty":273}],45:[function(c,d,b){var g=c("@marcom/ac-dom-nodes/isElement");
var a=c("./matchesSelector");var h=c("./internal/validate");d.exports=function f(m,j,i,l){var k=[];
h.childNode(m,true,"ancestors");h.selector(j,false,"ancestors");if(i&&g(m)&&(!j||a(m,j))){k.push(m)
}l=l||document.body;if(m!==l){while((m=m.parentNode)&&g(m)){if(!j||a(m,j)){k.push(m)
}if(m===l){break}}}return k}},{"./internal/validate":47,"./matchesSelector":48,"@marcom/ac-dom-nodes/isElement":37}],46:[function(b,c,a){c.exports=window.Element?(function(d){return d.matches||d.matchesSelector||d.webkitMatchesSelector||d.mozMatchesSelector||d.msMatchesSelector||d.oMatchesSelector
}(Element.prototype)):null},{}],47:[function(g,c,i){g("@marcom/ac-polyfills/Array/prototype.indexOf");
var o=g("@marcom/ac-dom-nodes/isNode");var b=g("@marcom/ac-dom-nodes/COMMENT_NODE");
var k=g("@marcom/ac-dom-nodes/DOCUMENT_FRAGMENT_NODE");var j=g("@marcom/ac-dom-nodes/DOCUMENT_NODE");
var h=g("@marcom/ac-dom-nodes/ELEMENT_NODE");var f=g("@marcom/ac-dom-nodes/TEXT_NODE");
var a=function(r,q){if(!o(r)){return false}if(typeof q==="number"){return(r.nodeType===q)
}return(q.indexOf(r.nodeType)!==-1)};var m=[h,j,k];var n=" must be an Element, Document, or Document Fragment";
var p=[h,f,b];var l=" must be an Element, TextNode, or Comment";var d=" must be a string";
c.exports={parentNode:function(q,t,s,r){r=r||"node";if((q||t)&&!a(q,m)){throw new TypeError(s+": "+r+n)
}},childNode:function(q,t,s,r){r=r||"node";if(!q&&!t){return}if(!a(q,p)){throw new TypeError(s+": "+r+l)
}},selector:function(q,t,s,r){r=r||"selector";if((q||t)&&typeof q!=="string"){throw new TypeError(s+": "+r+d)
}}}},{"@marcom/ac-dom-nodes/COMMENT_NODE":29,"@marcom/ac-dom-nodes/DOCUMENT_FRAGMENT_NODE":30,"@marcom/ac-dom-nodes/DOCUMENT_NODE":31,"@marcom/ac-dom-nodes/ELEMENT_NODE":32,"@marcom/ac-dom-nodes/TEXT_NODE":33,"@marcom/ac-dom-nodes/isNode":38,"@marcom/ac-polyfills/Array/prototype.indexOf":undefined}],48:[function(d,f,c){var g=d("@marcom/ac-dom-nodes/isElement");
var i=d("./internal/validate");var a=d("./internal/nativeMatches");var h=d("./shims/matchesSelector");
f.exports=function b(k,j){i.selector(j,true,"matchesSelector");if(!g(k)){return false
}if(!a){return h(k,j)}return a.call(k,j)}},{"./internal/nativeMatches":46,"./internal/validate":47,"./shims/matchesSelector":51,"@marcom/ac-dom-nodes/isElement":37}],49:[function(c,d,a){var h=c("./internal/validate");
var b=c("./shims/querySelector");var g=("querySelector" in document);d.exports=function f(i,j){j=j||document;
h.parentNode(j,true,"querySelector","context");h.selector(i,true,"querySelector");
if(!g){return b(i,j)}return j.querySelector(i)}},{"./internal/validate":47,"./shims/querySelector":52}],50:[function(b,c,a){b("@marcom/ac-polyfills/Array/prototype.slice");
var h=b("./internal/validate");var g=b("./shims/querySelectorAll");var f=("querySelectorAll" in document);
c.exports=function d(i,j){j=j||document;h.parentNode(j,true,"querySelectorAll","context");
h.selector(i,true,"querySelectorAll");if(!f){return g(i,j)}return Array.prototype.slice.call(j.querySelectorAll(i))
}},{"./internal/validate":47,"./shims/querySelectorAll":53,"@marcom/ac-polyfills/Array/prototype.slice":undefined}],51:[function(c,d,b){var f=c("../querySelectorAll");
d.exports=function a(l,g){var k=l.parentNode||document;var h=f(g,k);var j;for(j=0;
j<h.length;j++){if(h[j]===l){return true}}return false}},{"../querySelectorAll":50}],52:[function(b,c,a){var d=b("./querySelectorAll");
c.exports=function f(h,i){var g=d(h,i);return g.length?g[0]:null}},{"./querySelectorAll":53}],53:[function(c,b,f){c("@marcom/ac-polyfills/Array/prototype.indexOf");
var j=c("@marcom/ac-dom-nodes/isElement");var h=c("@marcom/ac-dom-nodes/isDocumentFragment");
var k=c("@marcom/ac-dom-nodes/remove");var d="_ac_qsa_";var i=function(n,l){var m;
if(l===document){return true}m=n;while((m=m.parentNode)&&j(m)){if(m===l){return true
}}return false};var g=function(l){if("recalc" in l){l.recalc(false)}else{document.recalc(false)
}window.scrollBy(0,0)};b.exports=function a(l,n){var p=document.createElement("style");
var q=d+(Math.random()+"").slice(-6);var m=[];var o;n=n||document;document[q]=[];
if(h(n)){n.appendChild(p)}else{document.documentElement.firstChild.appendChild(p)
}p.styleSheet.cssText="*{display:recalc;}"+l+'{ac-qsa:expression(document["'+q+'"] && document["'+q+'"].push(this));}';
g(n);while(document[q].length){o=document[q].shift();o.style.removeAttribute("ac-qsa");
if(m.indexOf(o)===-1&&i(o,n)){m.push(o)}}document[q]=null;k(p);g(n);return m}},{"@marcom/ac-dom-nodes/isDocumentFragment":36,"@marcom/ac-dom-nodes/isElement":37,"@marcom/ac-dom-nodes/remove":40,"@marcom/ac-polyfills/Array/prototype.indexOf":undefined}],54:[function(b,c,a){c.exports={Clip:b("./ac-clip/Clip")}
},{"./ac-clip/Clip":55}],55:[function(c,b,d){c("@marcom/ac-polyfills/Array/isArray");
var g=c("@marcom/ac-object/create");var l=c("@marcom/ac-easing").createPredefined;
var a=c("@marcom/ac-clock");var j=c("@marcom/ac-easing").Ease;var k=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var i="ease";function h(o,n,q,m){m=m||{};this._options=m;this._isYoyo=m.yoyo;this._direction=1;
this._timeScale=1;this._loop=m.loop||0;this._loopCount=0;this._target=o;this.duration(n);
this._delay=(m.delay||0)*1000;this._remainingDelay=this._delay;this._progress=0;
this._clock=m.clock||a;this._playing=false;this._getTime=Date.now||function(){return new Date().getTime()
};this._propsTo=q||{};this._propsFrom=m.propsFrom||{};this._onStart=m.onStart||null;
this._onUpdate=m.onUpdate||null;this._onDraw=m.onDraw||null;this._onComplete=m.onComplete||null;
var p=m.ease||i;this._ease=(typeof p==="function")?new j(p):l(p);this._start=this._start.bind(this);
this._update=this._update.bind(this);this._draw=this._draw.bind(this);this._isPrepared=false;
h._add(this);k.call(this)}var f=h.prototype=g(k.prototype);h.COMPLETE="complete";
h.PAUSE="pause";h.PLAY="play";f.play=function(){if(!this._playing){this._playing=true;
if(this._delay===0||this._remainingDelay===0){this._start()}else{if(!this._isPrepared){this._setDiff();
this._updateProps()}this._startTimeout=setTimeout(this._start,this._remainingDelay/this._timeScale);
this._delayStart=this._getTime()}}return this};f.pause=function(){if(this._playing){if(this._startTimeout){this._remainingDelay=this._getTime()-this._delayStart;
clearTimeout(this._startTimeout)}this._stop();this.trigger(h.PAUSE,this)}return this
};f.destroy=function(){this.pause();this._options=null;this._target=null;this._storeTarget=null;
this._ease=null;this._clock=null;this._propsTo=null;this._propsFrom=null;this._storePropsTo=null;
this._storePropsFrom=null;this._propsDiff=null;this._propsEase=null;this._onStart=null;
this._onUpdate=null;this._onDraw=null;this._onComplete=null;h._remove(this);k.prototype.destroy.call(this);
return this};f.reset=function(){if(!this._isPrepared){return}this._stop();this._resetLoop(this._target,this._storeTarget);
this._direction=1;this._loop=this._options.loop||0;this._loopCount=0;this._propsFrom=this._storePropsFrom;
this._propsTo=this._storePropsTo;this._progress=0;this._setStartTime();if(this._onUpdate){this._onUpdate.call(this,this)
}if(this._onDraw){this._onDraw.call(this,this)}return this};f.playing=function(){return this._playing
};f.target=function(){return this._target};f.duration=function(m){if(m!==undefined){this._duration=m;
this._durationMs=(m*1000)/this._timeScale;if(this._playing){this._setStartTime()
}}return this._duration};f.timeScale=function(m){if(m!==undefined){this._timeScale=m;
this.duration(this._duration)}return this._timeScale};f.currentTime=function(m){if(m!==undefined){return this.progress(m/this._duration)*this._duration
}return(this.progress()*this._duration)};f.progress=function(m){if(m!==undefined){this._progress=Math.min(1,Math.max(0,m));
this._setStartTime();if(!this._isPrepared){this._setDiff()}if(this._playing&&m===1){this._completeProps();
if(this._onUpdate){this._onUpdate.call(this,this)}if(this._onDraw){this._onDraw.call(this,this)
}this._complete()}else{this._updateProps();if(this._onUpdate){this._onUpdate.call(this,this)
}if(this._onDraw){this._onDraw.call(this,this)}}}return this._progress};f._resetLoop=function(n,m){var o;
for(o in m){if(m.hasOwnProperty(o)){if(m[o]!==null){if(typeof m[o]==="object"){this._resetLoop(n[o],m[o])
}else{n[o]=m[o]}}}}};f._cloneObjects=function(){var o={};var n={};var m={};this._cloneObjectsLoop(this._target,this._propsTo,this._propsFrom,o,n,m);
return{target:o,propsTo:n,propsFrom:m}};f._cloneObjectsLoop=function(p,t,s,r,n,m){var o;
var q;for(q in s){if(s.hasOwnProperty(q)&&t[q]===undefined&&p[q]!==undefined){r[q]=p[q];
n[q]=p[q];m[q]=s[q]}}for(q in t){if(p.hasOwnProperty(q)){o=typeof p[q];if(p[q]!==null&&o==="object"){if(Array.isArray(p[q])){r[q]=[];
n[q]=[];m[q]=[]}else{r[q]={};n[q]={};m[q]={}}this._cloneObjectsLoop(p[q],t[q]||{},s[q]||{},r[q],n[q],m[q])
}else{if(t[q]!==null&&o==="number"){r[q]=p[q];n[q]=t[q];if(s&&s[q]!==undefined){m[q]=s[q]
}}}}}};f._prepareProperties=function(){if(!this._isPrepared){var m=this._cloneObjects();
this._storeTarget=m.target;this._propsTo=m.propsTo;this._storePropsTo=this._propsTo;
this._propsFrom=m.propsFrom;this._storePropsFrom=this._propsFrom;this._isPrepared=true
}};f._setStartTime=function(){this._startTime=this._getTime()-(this.progress()*this._durationMs)
};f._setDiff=function(){if(!this._isPrepared){this._prepareProperties()}this._propsDiff={};
this._setDiffLoop(this._propsTo,this._propsFrom,this._target,this._propsDiff)};
f._setDiffLoop=function(r,q,o,n){var m;var p;for(p in r){if(r.hasOwnProperty(p)){m=typeof r[p];
if(r[p]!==null&&m==="object"){q[p]=q[p]||{};n[p]=n[p]||{};this._setDiffLoop(r[p],q[p],o[p],n[p])
}else{if(m==="number"&&o[p]!==undefined){if(q[p]!==undefined){o[p]=q[p]}else{q[p]=o[p]
}n[p]=r[p]-o[p]}else{r[p]=null;q[p]=null}}}}};f._start=function(){this._startTimeout=null;
this._remainingDelay=0;this._setStartTime();this._clock.on("update",this._update);
this._clock.on("draw",this._draw);if(!this._clock.isRunning()){this._clock.start()
}this._setDiff();this._playing=true;this._running=true;if(this._onStart){this._onStart.call(this,this)
}this.trigger(h.PLAY,this)};f._stop=function(){this._playing=false;this._running=false;
this._clock.off("update",this._update);this._clock.off("draw",this._draw)};f._updateProps=function(){var m;
if(this._direction===1){m=this._ease.getValue(this._progress)}else{m=1-this._ease.getValue(1-this._progress)
}this._updatePropsLoop(this._propsTo,this._propsFrom,this._target,this._propsDiff,m)
};f._updatePropsLoop=function(r,q,o,n,m){var p;for(p in r){if(r.hasOwnProperty(p)&&r[p]!==null){if(typeof r[p]!=="number"){this._updatePropsLoop(r[p],q[p],o[p],n[p],m)
}else{o[p]=q[p]+(n[p]*m)}}}};f._completeProps=function(){this._completePropsLoop(this._propsTo,this._target)
};f._completePropsLoop=function(o,m){var n;for(n in o){if(o.hasOwnProperty(n)&&o[n]!==null){if(typeof o[n]!=="number"){this._completePropsLoop(o[n],m[n])
}else{m[n]=o[n]}}}};f._complete=function(){if(this._isYoyo&&((this._loop>0&&this._loopCount<=this._loop)||(this._loop===0&&this._loopCount===0))){this._propsFrom=(this._direction===1)?this._storePropsTo:this._storePropsFrom;
this._propsTo=(this._direction===1)?this._storePropsFrom:this._storePropsTo;this._direction*=-1;
if(this._direction===-1){++this._loopCount}this.progress(0);this._start()}else{if(this._loopCount<this._loop){++this._loopCount;
this.progress(0);this._start()}else{this.trigger(h.COMPLETE,this);if(this._onComplete){this._onComplete.call(this,this)
}if(this._options&&this._options.destroyOnComplete){this.destroy()}}}};f._update=function(m){if(this._running){this._progress=(m.timeNow-this._startTime)/this._durationMs;
if(this._progress>=1){this._progress=1;this._running=false;this._completeProps()
}else{this._updateProps()}if(this._onUpdate){this._onUpdate.call(this,this)}}};
f._draw=function(m){if(this._onDraw){this._onDraw.call(this,this)}if(!this._running){this._stop();
if(this._progress===1){this._complete()}}};h._instantiate=function(){this._clips=[];
return this};h._add=function(m){this._clips.push(m)};h._remove=function(n){var m=this._clips.indexOf(n);
if(m>-1){this._clips.splice(m,1)}};h.getAll=function(o){if(o!==undefined){var m=[];
var n=this._clips.length;while(n--){if(this._clips[n].target()===o){m.push(this._clips[n])
}}return m}return Array.prototype.slice.call(this._clips)};h.destroyAll=function(o){var m=this.getAll(o);
if(this._clips.length===m.length){this._clips=[]}var n=m.length;while(n--){m[n].destroy()
}return m};h.to=function(o,n,p,m){m=m||{};if(m.destroyOnComplete===undefined){m.destroyOnComplete=true
}return new h(o,n,p,m).play()};h.from=function(p,o,m,n){n=n||{};n.propsFrom=m;if(n.destroyOnComplete===undefined){n.destroyOnComplete=true
}return new h(p,o,n.propsTo,n).play()};b.exports=h._instantiate()},{"@marcom/ac-clock":13,"@marcom/ac-easing":78,"@marcom/ac-event-emitter-micro":86,"@marcom/ac-object/create":259,"@marcom/ac-polyfills/Array/isArray":undefined}],56:[function(b,c,a){var d=b("./ac-color/Color");
d.decimalToHex=b("./ac-color/static/decimalToHex");d.hexToDecimal=b("./ac-color/static/hexToDecimal");
d.hexToRgb=b("./ac-color/static/hexToRgb");d.isColor=b("./ac-color/static/isColor");
d.isHex=b("./ac-color/static/isHex");d.isRgb=b("./ac-color/static/isRgb");d.isRgba=b("./ac-color/static/isRgba");
d.mixColors=b("./ac-color/static/mixColors");d.rgbaToArray=b("./ac-color/static/rgbaToArray");
d.rgbToArray=b("./ac-color/static/rgbToArray");d.rgbToDecimal=b("./ac-color/static/rgbToDecimal");
d.rgbToHex=b("./ac-color/static/rgbToHex");d.rgbToHsl=b("./ac-color/static/rgbToHsl");
d.rgbToHsv=b("./ac-color/static/rgbToHsv");d.rgbaToObject=b("./ac-color/static/rgbaToObject");
d.rgbToObject=b("./ac-color/static/rgbToObject");d.shortToLongHex=b("./ac-color/static/shortToLongHex");
c.exports={Color:d}},{"./ac-color/Color":57,"./ac-color/static/decimalToHex":59,"./ac-color/static/hexToDecimal":60,"./ac-color/static/hexToRgb":61,"./ac-color/static/isColor":62,"./ac-color/static/isHex":63,"./ac-color/static/isRgb":64,"./ac-color/static/isRgba":65,"./ac-color/static/mixColors":66,"./ac-color/static/rgbToArray":67,"./ac-color/static/rgbToDecimal":68,"./ac-color/static/rgbToHex":69,"./ac-color/static/rgbToHsl":70,"./ac-color/static/rgbToHsv":71,"./ac-color/static/rgbToObject":72,"./ac-color/static/rgbaToArray":73,"./ac-color/static/rgbaToObject":74,"./ac-color/static/shortToLongHex":75}],57:[function(d,a,q){var h=d("./helpers/cssColorNames");
var m=d("./static/hexToRgb");var l=d("./static/isColor");var f=d("./static/isHex");
var b=d("./static/isRgba");var p=d("./static/mixColors");var k=d("./static/rgbaToArray");
var n=d("./static/rgbToArray");var s=d("./static/rgbToDecimal");var i=d("./static/rgbToHex");
var c=d("./static/rgbaToObject");var j=d("./static/rgbToObject");var o=d("./static/shortToLongHex");
function r(t){if(!l(t)&&!h.nameToRgbObject[t]){throw new Error(t+" is not a supported color.")
}this._setColor(t)}var g=r.prototype;g._setColor=function(t){this._color={};if(f(t)){this._color.hex=o(t);
this._color.rgb={color:m(t)}}else{if(b(t)){this._color.rgba={color:t};var v=this.rgbaObject();
this._color.rgb={color:"rgb("+v.r+", "+v.g+", "+v.b+")"}}else{if(h.nameToRgbObject[t]){var u=h.nameToRgbObject[t];
this._color.rgb={object:u,color:"rgb("+u.r+", "+u.g+", "+u.b+")"}}else{this._color.rgb={color:t}
}}}};g.rgb=function(){return this._color.rgb.color};g.rgba=function(){if(this._color.rgba===undefined){var t=this.rgbObject();
this._color.rgba={color:"rgba("+t.r+", "+t.g+", "+t.b+", 1)"}}return this._color.rgba.color
};g.hex=function(){if(this._color.hex===undefined){this._color.hex=i.apply(this,this.rgbArray())
}return this._color.hex};g.decimal=function(){if(this._color.decimal===undefined){this._color.decimal=s(this.rgb())
}return this._color.decimal};g.cssName=function(){return h.rgbToName[this.rgb()]||null
};g.rgbArray=function(){if(this._color.rgb.array===undefined){this._color.rgb.array=n(this.rgb())
}return this._color.rgb.array};g.rgbaArray=function(){if(this._color.rgba===undefined){this.rgba()
}if(this._color.rgba.array===undefined){this._color.rgba.array=k(this.rgba())}return this._color.rgba.array
};g.rgbObject=function(){if(this._color.rgb.object===undefined){this._color.rgb.object=j(this.rgb())
}return this._color.rgb.object};g.rgbaObject=function(){if(this._color.rgba===undefined){this.rgba()
}if(this._color.rgba.object===undefined){this._color.rgba.object=c(this.rgba())
}return this._color.rgba.object};g.getRed=function(){return this.rgbObject().r};
g.getGreen=function(){return this.rgbObject().g};g.getBlue=function(){return this.rgbObject().b
};g.getAlpha=function(){if(this._color.rgba===undefined){return 1}return this.rgbaObject().a
};g.setRed=function(t){if(t!==this.getRed()){this._setColor("rgba("+t+", "+this.getGreen()+", "+this.getBlue()+", "+this.getAlpha()+")")
}return this.rgbObject().r};g.setGreen=function(t){if(t!==this.getGreen()){this._setColor("rgba("+this.getRed()+", "+t+", "+this.getBlue()+", "+this.getAlpha()+")")
}return this.rgbObject().g};g.setBlue=function(t){if(t!==this.getBlue()){this._setColor("rgba("+this.getRed()+", "+this.getGreen()+", "+t+", "+this.getAlpha()+")")
}return this.rgbObject().b};g.setAlpha=function(t){if(t!==this.getAlpha()){this._setColor("rgba("+this.getRed()+", "+this.getGreen()+", "+this.getBlue()+", "+t+")")
}return this.rgbaObject().a};g.mix=function(t,u){var v=j(p(this.rgb(),t,u));this._setColor("rgba("+v.r+", "+v.g+", "+v.b+", "+this.getAlpha()+")");
return this.rgb()};g.clone=function(){return new r(this.rgb())};a.exports=r},{"./helpers/cssColorNames":58,"./static/hexToRgb":61,"./static/isColor":62,"./static/isHex":63,"./static/isRgba":65,"./static/mixColors":66,"./static/rgbToArray":67,"./static/rgbToDecimal":68,"./static/rgbToHex":69,"./static/rgbToObject":72,"./static/rgbaToArray":73,"./static/rgbaToObject":74,"./static/shortToLongHex":75}],58:[function(b,c,a){var d={"rgb(240, 248, 255)":"aliceblue","rgb(250, 235, 215)":"antiquewhite","rgb(0, 0, 0)":"black","rgb(0, 0, 255)":"blue","rgb(0, 255, 255)":"cyan","rgb(0, 0, 139)":"darkblue","rgb(0, 139, 139)":"darkcyan","rgb(0, 100, 0)":"darkgreen","rgb(0, 206, 209)":"darkturquoise","rgb(0, 191, 255)":"deepskyblue","rgb(0, 128, 0)":"green","rgb(0, 255, 0)":"lime","rgb(0, 0, 205)":"mediumblue","rgb(0, 250, 154)":"mediumspringgreen","rgb(0, 0, 128)":"navy","rgb(0, 255, 127)":"springgreen","rgb(0, 128, 128)":"teal","rgb(25, 25, 112)":"midnightblue","rgb(30, 144, 255)":"dodgerblue","rgb(32, 178, 170)":"lightseagreen","rgb(34, 139, 34)":"forestgreen","rgb(46, 139, 87)":"seagreen","rgb(47, 79, 79)":"darkslategray","rgb(50, 205, 50)":"limegreen","rgb(60, 179, 113)":"mediumseagreen","rgb(64, 224, 208)":"turquoise","rgb(65, 105, 225)":"royalblue","rgb(70, 130, 180)":"steelblue","rgb(72, 61, 139)":"darkslateblue","rgb(72, 209, 204)":"mediumturquoise","rgb(75, 0, 130)":"indigo","rgb(85, 107, 47)":"darkolivegreen","rgb(95, 158, 160)":"cadetblue","rgb(100, 149, 237)":"cornflowerblue","rgb(102, 205, 170)":"mediumaquamarine","rgb(105, 105, 105)":"dimgray","rgb(106, 90, 205)":"slateblue","rgb(107, 142, 35)":"olivedrab","rgb(112, 128, 144)":"slategray","rgb(119, 136, 153)":"lightslategray","rgb(123, 104, 238)":"mediumslateblue","rgb(124, 252, 0)":"lawngreen","rgb(127, 255, 212)":"aquamarine","rgb(127, 255, 0)":"chartreuse","rgb(128, 128, 128)":"gray","rgb(128, 0, 0)":"maroon","rgb(128, 128, 0)":"olive","rgb(128, 0, 128)":"purple","rgb(135, 206, 250)":"lightskyblue","rgb(135, 206, 235)":"skyblue","rgb(138, 43, 226)":"blueviolet","rgb(139, 0, 139)":"darkmagenta","rgb(139, 0, 0)":"darkred","rgb(139, 69, 19)":"saddlebrown","rgb(143, 188, 143)":"darkseagreen","rgb(144, 238, 144)":"lightgreen","rgb(147, 112, 219)":"mediumpurple","rgb(148, 0, 211)":"darkviolet","rgb(152, 251, 152)":"palegreen","rgb(153, 50, 204)":"darkorchid","rgb(154, 205, 50)":"yellowgreen","rgb(160, 82, 45)":"sienna","rgb(165, 42, 42)":"brown","rgb(169, 169, 169)":"darkgray","rgb(173, 255, 47)":"greenyellow","rgb(173, 216, 230)":"lightblue","rgb(175, 238, 238)":"paleturquoise","rgb(176, 196, 222)":"lightsteelblue","rgb(176, 224, 230)":"powderblue","rgb(178, 34, 34)":"firebrick","rgb(184, 134, 11)":"darkgoldenrod","rgb(186, 85, 211)":"mediumorchid","rgb(188, 143, 143)":"rosybrown","rgb(189, 183, 107)":"darkkhaki","rgb(192, 192, 192)":"silver","rgb(199, 21, 133)":"mediumvioletred","rgb(205, 92, 92)":"indianred","rgb(205, 133, 63)":"peru","rgb(210, 105, 30)":"chocolate","rgb(210, 180, 140)":"tan","rgb(211, 211, 211)":"lightgray","rgb(216, 191, 216)":"thistle","rgb(218, 165, 32)":"goldenrod","rgb(218, 112, 214)":"orchid","rgb(219, 112, 147)":"palevioletred","rgb(220, 20, 60)":"crimson","rgb(220, 220, 220)":"gainsboro","rgb(221, 160, 221)":"plum","rgb(222, 184, 135)":"burlywood","rgb(224, 255, 255)":"lightcyan","rgb(230, 230, 250)":"lavender","rgb(233, 150, 122)":"darksalmon","rgb(238, 232, 170)":"palegoldenrod","rgb(238, 130, 238)":"violet","rgb(240, 255, 255)":"azure","rgb(240, 255, 240)":"honeydew","rgb(240, 230, 140)":"khaki","rgb(240, 128, 128)":"lightcoral","rgb(244, 164, 96)":"sandybrown","rgb(245, 245, 220)":"beige","rgb(245, 255, 250)":"mintcream","rgb(245, 222, 179)":"wheat","rgb(245, 245, 245)":"whitesmoke","rgb(248, 248, 255)":"ghostwhite","rgb(250, 250, 210)":"lightgoldenrodyellow","rgb(250, 240, 230)":"linen","rgb(250, 128, 114)":"salmon","rgb(253, 245, 230)":"oldlace","rgb(255, 228, 196)":"bisque","rgb(255, 235, 205)":"blanchedalmond","rgb(255, 127, 80)":"coral","rgb(255, 248, 220)":"cornsilk","rgb(255, 140, 0)":"darkorange","rgb(255, 20, 147)":"deeppink","rgb(255, 250, 240)":"floralwhite","rgb(255, 215, 0)":"gold","rgb(255, 105, 180)":"hotpink","rgb(255, 255, 240)":"ivory","rgb(255, 240, 245)":"lavenderblush","rgb(255, 250, 205)":"lemonchiffon","rgb(255, 182, 193)":"lightpink","rgb(255, 160, 122)":"lightsalmon","rgb(255, 255, 224)":"lightyellow","rgb(255, 0, 255)":"magenta","rgb(255, 228, 225)":"mistyrose","rgb(255, 228, 181)":"moccasin","rgb(255, 222, 173)":"navajowhite","rgb(255, 165, 0)":"orange","rgb(255, 69, 0)":"orangered","rgb(255, 239, 213)":"papayawhip","rgb(255, 218, 185)":"peachpuff","rgb(255, 192, 203)":"pink","rgb(255, 0, 0)":"red","rgb(255, 245, 238)":"seashell","rgb(255, 250, 250)":"snow","rgb(255, 99, 71)":"tomato","rgb(255, 255, 255)":"white","rgb(255, 255, 0)":"yellow","rgb(102, 51, 153)":"rebeccapurple"};
var f={aqua:{r:0,g:255,b:255},aliceblue:{r:240,g:248,b:255},antiquewhite:{r:250,g:235,b:215},black:{r:0,g:0,b:0},blue:{r:0,g:0,b:255},cyan:{r:0,g:255,b:255},darkblue:{r:0,g:0,b:139},darkcyan:{r:0,g:139,b:139},darkgreen:{r:0,g:100,b:0},darkturquoise:{r:0,g:206,b:209},deepskyblue:{r:0,g:191,b:255},green:{r:0,g:128,b:0},lime:{r:0,g:255,b:0},mediumblue:{r:0,g:0,b:205},mediumspringgreen:{r:0,g:250,b:154},navy:{r:0,g:0,b:128},springgreen:{r:0,g:255,b:127},teal:{r:0,g:128,b:128},midnightblue:{r:25,g:25,b:112},dodgerblue:{r:30,g:144,b:255},lightseagreen:{r:32,g:178,b:170},forestgreen:{r:34,g:139,b:34},seagreen:{r:46,g:139,b:87},darkslategray:{r:47,g:79,b:79},darkslategrey:{r:47,g:79,b:79},limegreen:{r:50,g:205,b:50},mediumseagreen:{r:60,g:179,b:113},turquoise:{r:64,g:224,b:208},royalblue:{r:65,g:105,b:225},steelblue:{r:70,g:130,b:180},darkslateblue:{r:72,g:61,b:139},mediumturquoise:{r:72,g:209,b:204},indigo:{r:75,g:0,b:130},darkolivegreen:{r:85,g:107,b:47},cadetblue:{r:95,g:158,b:160},cornflowerblue:{r:100,g:149,b:237},mediumaquamarine:{r:102,g:205,b:170},dimgray:{r:105,g:105,b:105},dimgrey:{r:105,g:105,b:105},slateblue:{r:106,g:90,b:205},olivedrab:{r:107,g:142,b:35},slategray:{r:112,g:128,b:144},slategrey:{r:112,g:128,b:144},lightslategray:{r:119,g:136,b:153},lightslategrey:{r:119,g:136,b:153},mediumslateblue:{r:123,g:104,b:238},lawngreen:{r:124,g:252,b:0},aquamarine:{r:127,g:255,b:212},chartreuse:{r:127,g:255,b:0},gray:{r:128,g:128,b:128},grey:{r:128,g:128,b:128},maroon:{r:128,g:0,b:0},olive:{r:128,g:128,b:0},purple:{r:128,g:0,b:128},lightskyblue:{r:135,g:206,b:250},skyblue:{r:135,g:206,b:235},blueviolet:{r:138,g:43,b:226},darkmagenta:{r:139,g:0,b:139},darkred:{r:139,g:0,b:0},saddlebrown:{r:139,g:69,b:19},darkseagreen:{r:143,g:188,b:143},lightgreen:{r:144,g:238,b:144},mediumpurple:{r:147,g:112,b:219},darkviolet:{r:148,g:0,b:211},palegreen:{r:152,g:251,b:152},darkorchid:{r:153,g:50,b:204},yellowgreen:{r:154,g:205,b:50},sienna:{r:160,g:82,b:45},brown:{r:165,g:42,b:42},darkgray:{r:169,g:169,b:169},darkgrey:{r:169,g:169,b:169},greenyellow:{r:173,g:255,b:47},lightblue:{r:173,g:216,b:230},paleturquoise:{r:175,g:238,b:238},lightsteelblue:{r:176,g:196,b:222},powderblue:{r:176,g:224,b:230},firebrick:{r:178,g:34,b:34},darkgoldenrod:{r:184,g:134,b:11},mediumorchid:{r:186,g:85,b:211},rosybrown:{r:188,g:143,b:143},darkkhaki:{r:189,g:183,b:107},silver:{r:192,g:192,b:192},mediumvioletred:{r:199,g:21,b:133},indianred:{r:205,g:92,b:92},peru:{r:205,g:133,b:63},chocolate:{r:210,g:105,b:30},tan:{r:210,g:180,b:140},lightgray:{r:211,g:211,b:211},lightgrey:{r:211,g:211,b:211},thistle:{r:216,g:191,b:216},goldenrod:{r:218,g:165,b:32},orchid:{r:218,g:112,b:214},palevioletred:{r:219,g:112,b:147},crimson:{r:220,g:20,b:60},gainsboro:{r:220,g:220,b:220},plum:{r:221,g:160,b:221},burlywood:{r:222,g:184,b:135},lightcyan:{r:224,g:255,b:255},lavender:{r:230,g:230,b:250},darksalmon:{r:233,g:150,b:122},palegoldenrod:{r:238,g:232,b:170},violet:{r:238,g:130,b:238},azure:{r:240,g:255,b:255},honeydew:{r:240,g:255,b:240},khaki:{r:240,g:230,b:140},lightcoral:{r:240,g:128,b:128},sandybrown:{r:244,g:164,b:96},beige:{r:245,g:245,b:220},mintcream:{r:245,g:255,b:250},wheat:{r:245,g:222,b:179},whitesmoke:{r:245,g:245,b:245},ghostwhite:{r:248,g:248,b:255},lightgoldenrodyellow:{r:250,g:250,b:210},linen:{r:250,g:240,b:230},salmon:{r:250,g:128,b:114},oldlace:{r:253,g:245,b:230},bisque:{r:255,g:228,b:196},blanchedalmond:{r:255,g:235,b:205},coral:{r:255,g:127,b:80},cornsilk:{r:255,g:248,b:220},darkorange:{r:255,g:140,b:0},deeppink:{r:255,g:20,b:147},floralwhite:{r:255,g:250,b:240},fuchsia:{r:255,g:0,b:255},gold:{r:255,g:215,b:0},hotpink:{r:255,g:105,b:180},ivory:{r:255,g:255,b:240},lavenderblush:{r:255,g:240,b:245},lemonchiffon:{r:255,g:250,b:205},lightpink:{r:255,g:182,b:193},lightsalmon:{r:255,g:160,b:122},lightyellow:{r:255,g:255,b:224},magenta:{r:255,g:0,b:255},mistyrose:{r:255,g:228,b:225},moccasin:{r:255,g:228,b:181},navajowhite:{r:255,g:222,b:173},orange:{r:255,g:165,b:0},orangered:{r:255,g:69,b:0},papayawhip:{r:255,g:239,b:213},peachpuff:{r:255,g:218,b:185},pink:{r:255,g:192,b:203},red:{r:255,g:0,b:0},seashell:{r:255,g:245,b:238},snow:{r:255,g:250,b:250},tomato:{r:255,g:99,b:71},white:{r:255,g:255,b:255},yellow:{r:255,g:255,b:0},rebeccapurple:{r:102,g:51,b:153}};
c.exports={rgbToName:d,nameToRgbObject:f}},{}],59:[function(c,d,b){d.exports=function a(f){return"#"+(f).toString(16)
}},{}],60:[function(c,d,a){d.exports=function b(f){return parseInt(f.substr(1),16)
}},{}],61:[function(d,f,c){var a=d("./shortToLongHex");f.exports=function b(h){h=a(h);
var g=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(h);return g?"rgb("+parseInt(g[1],16)+", "+parseInt(g[2],16)+", "+parseInt(g[3],16)+")":null
}},{"./shortToLongHex":75}],62:[function(c,f,b){var h=c("./isRgb");var g=c("./isRgba");
var a=c("./isHex");f.exports=function d(i){return a(i)||h(i)||g(i)}},{"./isHex":63,"./isRgb":64,"./isRgba":65}],63:[function(c,d,b){d.exports=function a(g){var f=/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i;
return f.test(g)}},{}],64:[function(b,c,a){c.exports=function d(g){var f=/^rgb\(\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5]),\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5]),\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])\s*\)$/;
return f.exec(g)!==null}},{}],65:[function(b,c,a){c.exports=function d(g){var f=/^rgba\(\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5]),\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5]),\s*([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5]),\s*(0(\.\d+)?|1(\.0+)?)\s*\)$/;
return f.exec(g)!==null}},{}],66:[function(d,f,c){var b=d("./isHex");var a=d("./hexToRgb");
var h=d("./rgbToObject");f.exports=function g(n,m,l){n=b(n)?a(n):n;m=b(m)?a(m):m;
n=h(n);m=h(m);var k=n.r+((m.r-n.r)*l);var j=n.g+((m.g-n.g)*l);var i=n.b+((m.b-n.b)*l);
return"rgb("+Math.round(k)+", "+Math.round(j)+", "+Math.round(i)+")"}},{"./hexToRgb":61,"./isHex":63,"./rgbToObject":72}],67:[function(b,c,a){var d=b("./rgbToObject");
c.exports=function f(g){var h=d(g);return[h.r,h.g,h.b]}},{"./rgbToObject":72}],68:[function(d,f,b){var c=d("./hexToDecimal");
var h=d("./rgbToArray");var g=d("./rgbToHex");f.exports=function a(i){var j=g.apply(this,h(i));
return c(j)}},{"./hexToDecimal":60,"./rgbToArray":67,"./rgbToHex":69}],69:[function(b,c,a){c.exports=function d(i,h,f){return"#"+((1<<24)+(i<<16)+(h<<8)+f).toString(16).slice(1)
}},{}],70:[function(c,d,b){d.exports=function a(f,m,o){if(arguments.length!==3){return false
}f/=255;m/=255;o/=255;var p=Math.max(f,m,o);var j=Math.min(f,m,o);var n=p+j;var q=p-j;
var k;var t;var i=(n/2);if(p===j){k=t=0}else{t=i>0.5?q/(2-p-j):q/n;switch(p){case f:k=(m-o)/q;
break;case m:k=2+((o-f)/q);break;case o:k=4+((f-m)/q);break}k*=60;if(k<0){k+=360
}}return([k,Math.round(100*t),Math.round(100*i)])}},{}],71:[function(c,d,a){d.exports=function b(f,m,n){if(arguments.length!==3){return false
}var i=f/255;var j=m/255;var p=n/255;var o=Math.max(i,j,p);var k=Math.min(i,j,p);
var l;var u;var t=o;var q=o-k;u=o===0?0:q/o;if(o===k){l=0}else{switch(o){case i:l=(j-p)/q+(j<p?6:0);
break;case j:l=(p-i)/q+2;break;case p:l=(i-j)/q+4;break}l/=6}return[Math.round(360*l),Math.round(100*u),Math.round(100*t)]
}},{}],72:[function(b,c,a){c.exports=function d(g){var h=/rgb\((\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3})\)/;
var f=h.exec(g);return{r:Number(f[1]),g:Number(f[2]),b:Number(f[3])}}},{}],73:[function(b,c,a){var f=b("./rgbaToObject");
c.exports=function d(g){var h=f(g);return[h.r,h.g,h.b,h.a]}},{"./rgbaToObject":74}],74:[function(b,c,a){c.exports=function d(g){var h=/rgba\(\s*(\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3}),\s*(0(\.\d+)?|1(\.0+)?)\s*\)/;
var f=h.exec(g);return{r:Number(f[1]),g:Number(f[2]),b:Number(f[3]),a:Number(f[4])}
}},{}],75:[function(c,d,b){d.exports=function a(g){var f=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;
g=g.replace(f,function(i,k,j,h){return"#"+k+k+j+j+h+h});return g}},{}],76:[function(d,f,c){var b=d("./utils/getBoundingClientRect");
f.exports=function a(g,i){var h;if(i){h=b(g);return{width:h.width,height:h.height}
}return{width:g.offsetWidth,height:g.offsetHeight}}},{"./utils/getBoundingClientRect":77}],77:[function(c,d,b){d.exports=function a(f){var g=f.getBoundingClientRect();
return{top:g.top,right:g.right,bottom:g.bottom,left:g.left,width:g.width||g.right-g.left,height:g.height||g.bottom-g.top}
}},{}],78:[function(b,c,a){c.exports={createBezier:b("./ac-easing/createBezier"),createPredefined:b("./ac-easing/createPredefined"),createStep:b("./ac-easing/createStep"),Ease:b("./ac-easing/Ease")}
},{"./ac-easing/Ease":79,"./ac-easing/createBezier":80,"./ac-easing/createPredefined":81,"./ac-easing/createStep":82}],79:[function(b,c,a){var g="Ease expects an easing function.";
function f(i,h){if(typeof i!=="function"){throw new TypeError(g)}this.easingFunction=i;
this.cssString=h||null}var d=f.prototype;d.getValue=function(h){return this.easingFunction(h,0,1,1)
};c.exports=f},{}],80:[function(b,c,a){b("@marcom/ac-polyfills/Array/prototype.every");
var f=b("./Ease");var h=b("./helpers/KeySpline");var d="Bezier curve expects exactly four (4) numbers. Given: ";
c.exports=function g(j,p,i,o){var q=Array.prototype.slice.call(arguments);var m=q.every(function(r){return(typeof r==="number")
});if(q.length!==4||!m){throw new TypeError(d+q)}var n=new h(j,p,i,o);var k=function(t,r,u,s){return n.get(t/s)*u+r
};var l="cubic-bezier("+q.join(", ")+")";return new f(k,l)}},{"./Ease":79,"./helpers/KeySpline":83,"@marcom/ac-polyfills/Array/prototype.every":undefined}],81:[function(c,a,d){var i=c("./createStep");
var f=c("./helpers/cssAliases");var b=c("./helpers/easingFunctions");var h=c("./Ease");
var g='Easing function "%TYPE%" not recognized among the following: '+Object.keys(b).join(", ");
a.exports=function j(k){var l;if(k==="step-start"){return i(1,"start")}else{if(k==="step-end"){return i(1,"end")
}else{l=b[k]}}if(!l){throw new Error(g.replace("%TYPE%",k))}return new h(l,f[k])
}},{"./Ease":79,"./createStep":82,"./helpers/cssAliases":84,"./helpers/easingFunctions":85}],82:[function(d,f,c){var g=d("./Ease");
var b="Step function expects a numeric value greater than zero. Given: ";var a='Step function direction must be either "start" or "end" (default). Given: ';
f.exports=function h(i,l){l=l||"end";if(typeof i!=="number"||i<1){throw new TypeError(b+i)
}if(l!=="start"&&l!=="end"){throw new TypeError(a+l)}var k=function(q,m,r,p){var o=r/i;
var n=Math[(l==="start")?"floor":"ceil"](q/p*i);return m+o*n};var j="steps("+i+", "+l+")";
return new g(k,j)}},{"./Ease":79}],83:[function(b,c,a){
/*! MIT License
 *
 * KeySpline - use bezier curve for transition easing function
 * Copyright (c) 2012 Gaetan Renaudeau <renaudeau.gaetan@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */
function d(o,l,n,j){this.get=function(p){if(o===l&&n===j){return p
}return g(k(p),l,j)};function i(p,q){return 1-3*q+3*p}function h(p,q){return 3*q-6*p
}function f(p){return 3*p}function g(r,p,q){return((i(p,q)*r+h(p,q))*r+f(p))*r}function m(r,p,q){return 3*i(p,q)*r*r+2*h(p,q)*r+f(p)
}function k(s){var q=s;for(var r=0;r<4;++r){var t=m(q,o,n);if(t===0){return q}var p=g(q,o,n)-s;
q-=p/t}return q}}c.exports=d},{}],84:[function(c,d,b){var a={linear:"cubic-bezier(0, 0, 1, 1)",ease:"cubic-bezier(0.25, 0.1, 0.25, 1)","ease-in":"cubic-bezier(0.42, 0, 1, 1)","ease-out":"cubic-bezier(0, 0, 0.58, 1)","ease-in-out":"cubic-bezier(0.42, 0, 0.58, 1)","ease-in-cubic":"cubic-bezier(0.55, 0.055, 0.675, 0.19)","ease-out-cubic":"cubic-bezier(0.215, 0.61, 0.355, 1)","ease-in-out-cubic":"cubic-bezier(0.645, 0.045, 0.355, 1)","ease-in-quad":"cubic-bezier(0.55, 0.085, 0.68, 0.53)","ease-out-quad":"cubic-bezier(0.25, 0.46, 0.45, 0.94)","ease-in-out-quad":"cubic-bezier(0.455, 0.03, 0.515, 0.955)","ease-in-quart":"cubic-bezier(0.895, 0.03, 0.685, 0.22)","ease-out-quart":"cubic-bezier(0.165, 0.84, 0.44, 1)","ease-in-out-quart":"cubic-bezier(0.77, 0, 0.175, 1)","ease-in-quint":"cubic-bezier(0.755, 0.05, 0.855, 0.06)","ease-out-quint":"cubic-bezier(0.23, 1, 0.32, 1)","ease-in-out-quint":"cubic-bezier(0.86, 0, 0.07, 1)","ease-in-sine":"cubic-bezier(0.47, 0, 0.745, 0.715)","ease-out-sine":"cubic-bezier(0.39, 0.575, 0.565, 1)","ease-in-out-sine":"cubic-bezier(0.445, 0.05, 0.55, 0.95)","ease-in-expo":"cubic-bezier(0.95, 0.05, 0.795, 0.035)","ease-out-expo":"cubic-bezier(0.19, 1, 0.22, 1)","ease-in-out-expo":"cubic-bezier(1, 0, 0, 1)","ease-in-circ":"cubic-bezier(0.6, 0.04, 0.98, 0.335)","ease-out-circ":"cubic-bezier(0.075, 0.82, 0.165, 1)","ease-in-out-circ":"cubic-bezier(0.785, 0.135, 0.15, 0.86)","ease-in-back":"cubic-bezier(0.6, -0.28, 0.735, 0.045)","ease-out-back":"cubic-bezier(0.175, 0.885, 0.32, 1.275)","ease-in-out-back":"cubic-bezier(0.68, -0.55, 0.265, 1.55)"};
a.easeIn=a["ease-in"];a.easeOut=a["ease-out"];a.easeInOut=a["ease-in-out"];a.easeInCubic=a["ease-in-cubic"];
a.easeOutCubic=a["ease-out-cubic"];a.easeInOutCubic=a["ease-in-out-cubic"];a.easeInQuad=a["ease-in-quad"];
a.easeOutQuad=a["ease-out-quad"];a.easeInOutQuad=a["ease-in-out-quad"];a.easeInQuart=a["ease-in-quart"];
a.easeOutQuart=a["ease-out-quart"];a.easeInOutQuart=a["ease-in-out-quart"];a.easeInQuint=a["ease-in-quint"];
a.easeOutQuint=a["ease-out-quint"];a.easeInOutQuint=a["ease-in-out-quint"];a.easeInSine=a["ease-in-sine"];
a.easeOutSine=a["ease-out-sine"];a.easeInOutSine=a["ease-in-out-sine"];a.easeInExpo=a["ease-in-expo"];
a.easeOutExpo=a["ease-out-expo"];a.easeInOutExpo=a["ease-in-out-expo"];a.easeInCirc=a["ease-in-circ"];
a.easeOutCirc=a["ease-out-circ"];a.easeInOutCirc=a["ease-in-out-circ"];a.easeInBack=a["ease-in-back"];
a.easeOutBack=a["ease-out-back"];a.easeInOutBack=a["ease-in-out-back"];d.exports=a
},{}],85:[function(d,b,F){var J=d("../createBezier");var w=J(0.25,0.1,0.25,1).easingFunction;
var g=J(0.42,0,1,1).easingFunction;var C=J(0,0,0.58,1).easingFunction;var x=J(0.42,0,0.58,1).easingFunction;
var u=function(Q,O,R,P){return R*Q/P+O};var h=function(Q,O,R,P){return R*(Q/=P)*Q+O
};var N=function(Q,O,R,P){return -R*(Q/=P)*(Q-2)+O};var D=function(Q,O,R,P){if((Q/=P/2)<1){return R/2*Q*Q+O
}return -R/2*((--Q)*(Q-2)-1)+O};var i=function(Q,O,R,P){return R*(Q/=P)*Q*Q+O};
var a=function(Q,O,R,P){return R*((Q=Q/P-1)*Q*Q+1)+O};var j=function(Q,O,R,P){if((Q/=P/2)<1){return R/2*Q*Q*Q+O
}return R/2*((Q-=2)*Q*Q+2)+O};var o=function(Q,O,R,P){return R*(Q/=P)*Q*Q*Q+O};
var m=function(Q,O,R,P){return -R*((Q=Q/P-1)*Q*Q*Q-1)+O};var p=function(Q,O,R,P){if((Q/=P/2)<1){return R/2*Q*Q*Q*Q+O
}return -R/2*((Q-=2)*Q*Q*Q-2)+O};var y=function(Q,O,R,P){return R*(Q/=P)*Q*Q*Q*Q+O
};var v=function(Q,O,R,P){return R*((Q=Q/P-1)*Q*Q*Q*Q+1)+O};var z=function(Q,O,R,P){if((Q/=P/2)<1){return R/2*Q*Q*Q*Q*Q+O
}return R/2*((Q-=2)*Q*Q*Q*Q+2)+O};var c=function(Q,O,R,P){return -R*Math.cos(Q/P*(Math.PI/2))+R+O
};var L=function(Q,O,R,P){return R*Math.sin(Q/P*(Math.PI/2))+O};var B=function(Q,O,R,P){return -R/2*(Math.cos(Math.PI*Q/P)-1)+O
};var G=function(Q,O,R,P){return(Q===0)?O:R*Math.pow(2,10*(Q/P-1))+O};var A=function(Q,O,R,P){return(Q===P)?O+R:R*(-Math.pow(2,-10*Q/P)+1)+O
};var r=function(Q,O,R,P){if(Q===0){return O}else{if(Q===P){return O+R}else{if((Q/=P/2)<1){return R/2*Math.pow(2,10*(Q-1))+O
}}}return R/2*(-Math.pow(2,-10*--Q)+2)+O};var l=function(Q,O,R,P){return -R*(Math.sqrt(1-(Q/=P)*Q)-1)+O
};var f=function(Q,O,R,P){return R*Math.sqrt(1-(Q=Q/P-1)*Q)+O};var I=function(Q,O,R,P){if((Q/=P/2)<1){return -R/2*(Math.sqrt(1-Q*Q)-1)+O
}return R/2*(Math.sqrt(1-(Q-=2)*Q)+1)+O};var E=function(S,Q,U,R){var O=1.70158;
var T=0;var P=U;if(S===0){return Q}else{if((S/=R)===1){return Q+U}}if(!T){T=R*0.3
}if(P<Math.abs(U)){P=U;O=T/4}else{O=T/(2*Math.PI)*Math.asin(U/P)}return -(P*Math.pow(2,10*(S-=1))*Math.sin((S*R-O)*(2*Math.PI)/T))+Q
};var H=function(S,Q,U,R){var O=1.70158;var T=0;var P=U;if(S===0){return Q}else{if((S/=R)===1){return Q+U
}}if(!T){T=R*0.3}if(P<Math.abs(U)){P=U;O=T/4}else{O=T/(2*Math.PI)*Math.asin(U/P)
}return P*Math.pow(2,-10*S)*Math.sin((S*R-O)*(2*Math.PI)/T)+U+Q};var t=function(S,Q,U,R){var O=1.70158;
var T=0;var P=U;if(S===0){return Q}else{if((S/=R/2)===2){return Q+U}}if(!T){T=R*(0.3*1.5)
}if(P<Math.abs(U)){P=U;O=T/4}else{O=T/(2*Math.PI)*Math.asin(U/P)}if(S<1){return -0.5*(P*Math.pow(2,10*(S-=1))*Math.sin((S*R-O)*(2*Math.PI)/T))+Q
}return P*Math.pow(2,-10*(S-=1))*Math.sin((S*R-O)*(2*Math.PI)/T)*0.5+U+Q};var s=function(R,P,S,Q,O){if(O===undefined){O=1.70158
}return S*(R/=Q)*R*((O+1)*R-O)+P};var q=function(R,P,S,Q,O){if(O===undefined){O=1.70158
}return S*((R=R/Q-1)*R*((O+1)*R+O)+1)+P};var k=function(R,P,S,Q,O){if(O===undefined){O=1.70158
}if((R/=Q/2)<1){return S/2*(R*R*(((O*=(1.525))+1)*R-O))+P}return S/2*((R-=2)*R*(((O*=(1.525))+1)*R+O)+2)+P
};var K=function(Q,O,R,P){if((Q/=P)<(1/2.75)){return R*(7.5625*Q*Q)+O}else{if(Q<(2/2.75)){return R*(7.5625*(Q-=(1.5/2.75))*Q+0.75)+O
}else{if(Q<(2.5/2.75)){return R*(7.5625*(Q-=(2.25/2.75))*Q+0.9375)+O}}}return R*(7.5625*(Q-=(2.625/2.75))*Q+0.984375)+O
};var n=function(Q,O,R,P){return R-K(P-Q,0,R,P)+O};var M=function(Q,O,R,P){if(Q<P/2){return n(Q*2,0,R,P)*0.5+O
}return K(Q*2-P,0,R,P)*0.5+R*0.5+O};b.exports={linear:u,ease:w,easeIn:g,"ease-in":g,easeOut:C,"ease-out":C,easeInOut:x,"ease-in-out":x,easeInCubic:i,"ease-in-cubic":i,easeOutCubic:a,"ease-out-cubic":a,easeInOutCubic:j,"ease-in-out-cubic":j,easeInQuad:h,"ease-in-quad":h,easeOutQuad:N,"ease-out-quad":N,easeInOutQuad:D,"ease-in-out-quad":D,easeInQuart:o,"ease-in-quart":o,easeOutQuart:m,"ease-out-quart":m,easeInOutQuart:p,"ease-in-out-quart":p,easeInQuint:y,"ease-in-quint":y,easeOutQuint:v,"ease-out-quint":v,easeInOutQuint:z,"ease-in-out-quint":z,easeInSine:c,"ease-in-sine":c,easeOutSine:L,"ease-out-sine":L,easeInOutSine:B,"ease-in-out-sine":B,easeInExpo:G,"ease-in-expo":G,easeOutExpo:A,"ease-out-expo":A,easeInOutExpo:r,"ease-in-out-expo":r,easeInCirc:l,"ease-in-circ":l,easeOutCirc:f,"ease-out-circ":f,easeInOutCirc:I,"ease-in-out-circ":I,easeInBack:s,"ease-in-back":s,easeOutBack:q,"ease-out-back":q,easeInOutBack:k,"ease-in-out-back":k,easeInElastic:E,"ease-in-elastic":E,easeOutElastic:H,"ease-out-elastic":H,easeInOutElastic:t,"ease-in-out-elastic":t,easeInBounce:n,"ease-in-bounce":n,easeOutBounce:K,"ease-out-bounce":K,easeInOutBounce:M,"ease-in-out-bounce":M}
},{"../createBezier":80}],86:[function(b,c,a){c.exports={EventEmitterMicro:b("./ac-event-emitter-micro/EventEmitterMicro")}
},{"./ac-event-emitter-micro/EventEmitterMicro":87}],87:[function(b,c,a){function f(){this._events={}
}var d=f.prototype;d.on=function(g,h){this._events[g]=this._events[g]||[];this._events[g].unshift(h)
};d.once=function(g,j){var i=this;function h(k){i.off(g,h);if(k!==undefined){j(k)
}else{j()}}this.on(g,h)};d.off=function(g,i){if(!this.has(g)){return}var h=this._events[g].indexOf(i);
if(h===-1){return}this._events[g].splice(h,1)};d.trigger=function(g,j){if(!this.has(g)){return
}for(var h=this._events[g].length-1;h>=0;h--){if(j!==undefined){this._events[g][h](j)
}else{this._events[g][h]()}}};d.has=function(g){if(g in this._events===false||this._events[g].length===0){return false
}return true};d.destroy=function(){for(var g in this._events){this._events[g]=null
}this._events=null};c.exports=f},{}],88:[function(g,d,h){g("./helpers/Float32Array");
var c=g("./helpers/transitionEnd");var i=g("@marcom/ac-clip").Clip;var k=g("./clips/ClipEasing");
var f=g("./clips/ClipInlineCss");var j=g("./clips/ClipTransitionCss");function b(n,m,o,l){if(n.nodeType){if(c===undefined||(l&&l.inlineStyles)){return new f(n,m,o,l)
}return new j(n,m,o,l)}return new k(n,m,o,l)}for(var a in i){if(typeof i[a]==="function"&&a.substr(0,1)!=="_"){b[a]=i[a].bind(i)
}}b.to=function(n,m,o,l){l=l||{};if(l.destroyOnComplete===undefined){l.destroyOnComplete=true
}return new b(n,m,o,l).play()};b.from=function(o,n,l,m){m=m||{};m.propsFrom=l;if(m.destroyOnComplete===undefined){m.destroyOnComplete=true
}return new b(o,n,m.propsTo,m).play()};d.exports=b},{"./clips/ClipEasing":91,"./clips/ClipInlineCss":92,"./clips/ClipTransitionCss":93,"./helpers/Float32Array":96,"./helpers/transitionEnd":105,"@marcom/ac-clip":54}],89:[function(b,c,a){c.exports=b("./timeline/Timeline")
},{"./timeline/Timeline":107}],90:[function(b,c,a){c.exports={Clip:b("./Clip"),Timeline:b("./Timeline")}
},{"./Clip":88,"./Timeline":89}],91:[function(b,a,c){var k=b("@marcom/ac-object/clone");
var g=b("@marcom/ac-object/create");var n=b("@marcom/ac-easing").createPredefined;
var l=b("../helpers/isCssCubicBezierString");var f=b("../helpers/BezierCurveCssManager");
var i=b("@marcom/ac-clip").Clip;var j=b("@marcom/ac-easing").Ease;function m(q,p,r,o){if(o&&l(o.ease)){o.ease=f.create(o.ease).toEasingFunction()
}o=o||{};this._propsEase=o.propsEase||{};i.call(this,q,p,r,o)}var h=i.prototype;
var d=m.prototype=g(h);d.reset=function(){var p=h.reset.call(this);if(this._clips){var o=this._clips.length;
while(o--){this._clips[o].reset()}}return p};d.destroy=function(){if(this._clips){var o=this._clips.length;
while(o--){this._clips[o].destroy()}this._clips=null}this._eases=null;this._storeOnUpdate=null;
return h.destroy.call(this)};d._prepareProperties=function(){var o=0;var r={};var p={};
var s={};var v;var u;if(this._propsEase){for(v in this._propsTo){if(this._propsTo.hasOwnProperty(v)){u=this._propsEase[v];
if(l(u)){u=f.create(u).toEasingFunction()}if(u===undefined){if(r[this._ease]===undefined){r[this._ease]={};
p[this._ease]={};s[this._ease]=this._ease.easingFunction;o++}r[this._ease][v]=this._propsTo[v];
p[this._ease][v]=this._propsFrom[v]}else{if(typeof u==="function"){r[o]={};p[o]={};
r[o][v]=this._propsTo[v];p[o][v]=this._propsFrom[v];s[o]=u;o++}else{if(r[u]===undefined){r[u]={};
p[u]={};s[u]=u;o++}r[u][v]=this._propsTo[v];p[u][v]=this._propsFrom[v]}}}}if(o>1){var q=k(this._options||{},true);
var t=this._duration*0.001;this._storeOnUpdate=this._onUpdate;this._onUpdate=this._onUpdateClips;
q.onStart=null;q.onUpdate=null;q.onDraw=null;q.onComplete=null;this._clips=[];for(u in r){if(r.hasOwnProperty(u)){q.ease=s[u];
q.propsFrom=p[u];this._clips.push(new i(this._target,t,r[u],q))}}u="linear";this._propsTo={};
this._propsFrom={}}else{for(v in s){if(s.hasOwnProperty(v)){u=s[v]}}}if(u!==undefined){this._ease=(typeof u==="function")?new j(u):n(u)
}}return h._prepareProperties.call(this)};d._onUpdateClips=function(q){var o=(this._direction===1)?q.progress():1-q.progress();
var p=this._clips.length;while(p--){this._clips[p].progress(o)}if(typeof this._storeOnUpdate==="function"){this._storeOnUpdate.call(this,this)
}};a.exports=m},{"../helpers/BezierCurveCssManager":95,"../helpers/isCssCubicBezierString":101,"@marcom/ac-clip":54,"@marcom/ac-easing":78,"@marcom/ac-object/clone":258,"@marcom/ac-object/create":259}],92:[function(f,c,g){var l=f("@marcom/ac-dom-styles/setStyle");
var b=f("../helpers/convertToStyleObject");var d=f("../helpers/convertToTransitionableObjects");
var i=f("@marcom/ac-object/create");var j=f("../helpers/removeTransitions");var m=f("./ClipEasing");
function a(p,o,q,n){n=n||{};this._el=p;this._storeOnStart=n.onStart||null;this._storeOnDraw=n.onDraw||null;
this._storeOnComplete=n.onComplete||null;n.onStart=this._onStart;n.onDraw=this._onDraw;
n.onComplete=this._onComplete;m.call(this,{},o,q,n)}var k=m.prototype;var h=a.prototype=i(k);
h.play=function(){var n=k.play.call(this);if(this._remainingDelay!==0){l(this._el,b(this._target))
}return n};h.reset=function(){var n=k.reset.call(this);l(this._el,b(this._target));
return n};h.destroy=function(){this._el=null;this._completeStyles=null;this._storeOnStart=null;
this._storeOnDraw=null;this._storeOnComplete=null;return k.destroy.call(this)};
h.target=function(){return this._el};h._prepareProperties=function(){var q=d(this._el,this._propsTo,this._propsFrom);
this._target=q.target;this._propsFrom=q.propsFrom;this._propsTo=q.propsTo;j(this._el,this._target);
var o=(this._isYoyo)?this._propsFrom:this._propsTo;this._completeStyles=b(o);if(this._options.removeStylesOnComplete!==undefined){var r;
var p=this._options.removeStylesOnComplete;if(typeof p==="boolean"&&p){for(r in this._completeStyles){if(this._completeStyles.hasOwnProperty(r)){this._completeStyles[r]=null
}}}else{if(typeof p==="object"&&p.length){var n=p.length;while(n--){r=p[n];if(this._completeStyles.hasOwnProperty(r)){this._completeStyles[r]=null
}}}}}return k._prepareProperties.call(this)};h._onStart=function(n){if(this.playing()&&this._direction===1&&this._delay===0){l(this._el,b(this._propsFrom))
}if(typeof this._storeOnStart==="function"){this._storeOnStart.call(this,this)}};
h._onDraw=function(n){l(this._el,b(this._target));if(typeof this._storeOnDraw==="function"){this._storeOnDraw.call(this,this)
}};h._onComplete=function(n){l(this._el,this._completeStyles);if(typeof this._storeOnComplete==="function"){this._storeOnComplete.call(this,this)
}};c.exports=a},{"../helpers/convertToStyleObject":98,"../helpers/convertToTransitionableObjects":99,"../helpers/removeTransitions":102,"./ClipEasing":91,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-object/create":259}],93:[function(k,b,y){var d=k("@marcom/ac-dom-styles/setStyle");
var f=k("@marcom/ac-dom-styles/getStyle");var c=k("../helpers/convertToStyleObject");
var p=k("../helpers/convertToTransitionableObjects");var x=k("@marcom/ac-object/clone");
var n=k("@marcom/ac-object/create");var u=k("@marcom/ac-easing").createPredefined;
var m=k("../helpers/isCssCubicBezierString");var v=k("../helpers/removeTransitions");
var j=k("../helpers/transitionEnd");var o=k("../helpers/waitAnimationFrames");var w=k("../helpers/BezierCurveCssManager");
var a=k("@marcom/ac-clip").Clip;var s=k("./ClipEasing");var t=k("@marcom/ac-page-visibility").PageVisibilityManager;
var g="ease";var i="%EASE% is not a supported predefined ease when transitioning with Elements and CSS transition. If you need to use %EASE% then pass the inlineStyle:true option.";
var l="Function eases are not supported when using CSS transitions with Elements. Either use a cubic-bezier string (e.g. 'cubic-bezier(0, 0, 1, 1)' or pass the inlineStyle option as `true` to render styles each frame instead of using CSS transitions.";
function h(B,A,C,z){z=z||{};this._el=B;this._storeEase=z.ease;if(typeof this._storeEase==="function"){throw new Error(l)
}this._storeOnStart=z.onStart||null;this._storeOnComplete=z.onComplete||null;z.onStart=this._onStart.bind(this);
z.onComplete=this._onComplete.bind(this);this._stylesTo=x(C,true);this._stylesFrom=(z.propsFrom)?x(z.propsFrom,true):{};
this._propsEase=(z.propsEase)?x(z.propsEase,true):{};if(m(z.ease)){z.ease=w.create(z.ease).toEasingFunction()
}a.call(this,{},A,{},z);this._propsFrom={}}var q=a.prototype;var r=h.prototype=n(q);
r.play=function(){var z=q.play.call(this);if(this._direction===1&&this.progress()===0&&this._remainingDelay!==0){this._applyStyles(0,c(this._stylesFrom))
}return z};r.reset=function(){var z=q.reset.call(this);this._stylesClip.reset();
this._applyStyles(0,c(this._styles));return z};r.destroy=function(){t.off("changed",this._onVisibilityChanged);
this._removeTransitionListener();this.off("pause",this._onPaused);this._onPaused();
this._stylesClip.destroy();this._stylesClip=null;this._el=null;this._propsArray=null;
this._styles=null;this._stylesFrom=null;this._stylesTo=null;this._completeStyles=null;
this._storeOnStart=null;this._storeOnComplete=null;this._onTransitionEnded=null;
return q.destroy.call(this)};r.target=function(){return this._el};r.duration=function(A){var z=q.duration.call(this,A);
if(A===undefined){return z}if(this.playing()){this.progress(this._progress)}return z
};r.progress=function(z){var A=q.progress.call(this,z);if(z===undefined){return A
}z=(this._direction===1)?z:1-z;this._stylesClip.progress(z);this._applyStyles(0,c(this._styles));
if(this.playing()){this._isWaitingForStylesToBeApplied=true;o(this._setStylesAfterWaiting,2)
}return A};r._prepareProperties=function(){var B=p(this._el,this._stylesTo,this._stylesFrom);
this._styles=B.target;this._stylesTo=B.propsTo;this._stylesFrom=B.propsFrom;var C=this._storeEase||g;
this._eases={};this._propsArray=[];var E;this._styleCompleteTo=c(this._stylesTo);
this._styleCompleteFrom=c(this._stylesFrom);this._propsEaseKeys={};var D;for(D in this._stylesTo){if(this._stylesTo.hasOwnProperty(D)){this._propsArray[this._propsArray.length]=D;
if(this._propsEase[D]===undefined){if(this._eases[C]===undefined){E=this._convertEase(C);
this._eases[C]=E.css}this._propsEaseKeys[D]=C}else{if(this._eases[this._propsEase[D]]===undefined){E=this._convertEase(this._propsEase[D]);
this._eases[this._propsEase[D]]=E.css;this._propsEaseKeys[D]=this._propsEase[D];
this._propsEase[D]=E.js}else{if(m(this._propsEase[D])){this._propsEaseKeys[D]=this._propsEase[D];
this._propsEase[D]=this._eases[this._propsEase[D]]["1"].toEasingFunction()}}}}}this._onPaused=this._onPaused.bind(this);
this.on("pause",this._onPaused);this._setOtherTransitions();this._currentTransitionStyles=this._otherTransitions;
this._completeStyles=c((this._isYoyo)?this._stylesFrom:this._stylesTo);if(this._options.removeStylesOnComplete!==undefined){var A=this._options.removeStylesOnComplete;
if(typeof A==="boolean"&&A){for(D in this._stylesTo){this._completeStyles[D]=null
}}else{if(typeof A==="object"&&A.length){var z=A.length;while(z--){this._completeStyles[A[z]]=null
}}}}this._onTransitionEnded=this._onTransitionEnded.bind(this);this._setStylesAfterWaiting=this._setStylesAfterWaiting.bind(this);
this._onVisibilityChanged=this._onVisibilityChanged.bind(this);t.on(t.CHANGED,this._onVisibilityChanged);
this._stylesClip=new s(this._styles,1,this._stylesTo,{ease:this._options.ease,propsFrom:this._stylesFrom,propsEase:this._options.propsEase});
a._remove(this._stylesClip);return q._prepareProperties.call(this)};r._convertEase=function(B){if(typeof B==="function"){throw new Error(l)
}var z;var A;if(m(B)){z=w.create(B);A=z.toEasingFunction()}else{var C=u(B);if(C.cssString===null){throw new Error(i.replace(/%EASE%/g,B))
}z=w.create(C.cssString);A=B}return{css:{"1":z,"-1":z.reversed()},js:A}};r._complete=function(){if((this._isWaitingForStylesToBeApplied||this._isTransitionEnded||!this._isListeningForTransitionEnd)&&this.progress()===1){this._isWaitingForStylesToBeApplied=false;
q._complete.call(this)}};r._onTransitionEnded=function(){this._isTransitionEnded=true;
this._complete()};r._addTransitionListener=function(){if(!this._isListeningForTransitionEnd&&this._el&&this._onTransitionEnded){this._isListeningForTransitionEnd=true;
this._isTransitionEnded=false;this._el.addEventListener(j,this._onTransitionEnded)
}};r._removeTransitionListener=function(){if(this._isListeningForTransitionEnd&&this._el&&this._onTransitionEnded){this._isListeningForTransitionEnd=false;
this._isTransitionEnded=false;this._el.removeEventListener(j,this._onTransitionEnded)
}};r._applyStyles=function(B,z){if(B>0){var C="";var A={};var D;for(D in this._eases){if(this._eases.hasOwnProperty(D)){A[D]=this._eases[D][this._direction].splitAt(this.progress()).toCSSString()
}}for(D in this._stylesTo){if(this._stylesTo.hasOwnProperty(D)){C+=D+" "+B+"ms "+A[this._propsEaseKeys[D]]+" 0ms, "
}}this._currentTransitionStyles=C.substr(0,C.length-2);if(!this._doStylesMatchCurrentStyles(z)){this._addTransitionListener()
}else{this._removeTransitionListener()}}else{this._currentTransitionStyles="";this._removeTransitionListener()
}z.transition=this._getOtherClipTransitionStyles()+this._currentTransitionStyles;
d(this._el,z)};r._doStylesMatchCurrentStyles=function(B){var A=f.apply(this,[this._el].concat([this._propsArray]));
var z;for(z in B){if(B.hasOwnProperty(z)&&A.hasOwnProperty(z)&&B[z]!==A[z]){return false
}}return true};r._setStylesAfterWaiting=function(){this._isWaitingForStylesToBeApplied=false;
if(this.playing()){var A=this._durationMs*(1-this.progress());var z=(this._direction>0)?this._styleCompleteTo:this._styleCompleteFrom;
this._applyStyles(A,z)}};r._setOtherTransitions=function(){v(this._el,this._stylesTo);
var z=a.getAll(this._el);var A=z.length;while(A--){if(z[A]!==this&&z[A].playing()&&z[A]._otherTransitions&&z[A]._otherTransitions.length){this._otherTransitions=z[A]._otherTransitions;
return}}this._otherTransitions=f(this._el,"transition").transition;if(this._otherTransitions===null||this._otherTransitions==="all 0s ease 0s"){this._otherTransitions=""
}};r._getTransitionStyles=function(){var z=this._getOtherClipTransitionStyles();
if(this._otherTransitions.length){z+=this._otherTransitions}else{if(z.length){z=z.substr(0,z.length-2)
}}return z};r._getOtherClipTransitionStyles=function(){var B="";var z=a.getAll(this._el);
var A=z.length;while(A--){if(z[A]!==this&&z[A].playing()&&z[A]._currentTransitionStyles&&z[A]._currentTransitionStyles.length){B+=z[A]._currentTransitionStyles+", "
}}return B};r._onVisibilityChanged=function(z){if(this.playing()&&!z.isHidden){this._update({timeNow:this._getTime()});
var A=this.progress();if(A<1){this.progress(A)}}};r._onPaused=function(A){var z=f.apply(this,[this._el].concat([this._propsArray]));
z.transition=this._getTransitionStyles();this._removeTransitionListener();d(this._el,z)
};r._onStart=function(z){var A=(this._direction===1&&this.progress()===0&&this._delay===0)?2:0;
if(A){this._isWaitingForStylesToBeApplied=true;this._applyStyles(0,this._styleCompleteFrom)
}o(this._setStylesAfterWaiting,A);if(typeof this._storeOnStart==="function"){this._storeOnStart.call(this,this)
}};r._onComplete=function(z){this._removeTransitionListener();this._completeStyles.transition=this._getTransitionStyles();
d(this._el,this._completeStyles);if(typeof this._storeOnComplete==="function"){this._storeOnComplete.call(this,this)
}};b.exports=h},{"../helpers/BezierCurveCssManager":95,"../helpers/convertToStyleObject":98,"../helpers/convertToTransitionableObjects":99,"../helpers/isCssCubicBezierString":101,"../helpers/removeTransitions":102,"../helpers/transitionEnd":105,"../helpers/waitAnimationFrames":106,"./ClipEasing":91,"@marcom/ac-clip":54,"@marcom/ac-dom-styles/getStyle":42,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-easing":78,"@marcom/ac-object/clone":258,"@marcom/ac-object/create":259,"@marcom/ac-page-visibility":269}],94:[function(c,d,a){var g=c("@marcom/ac-easing").createBezier;
function b(i,h){this.manager=h;this.p1={x:i[0],y:i[1]};this.p2={x:i[2],y:i[3]};
this._isLinear=(this.p1.x===this.p1.y)&&(this.p2.x===this.p2.y);this._cacheSplits={}
}var f=b.prototype;f.splitAt=function(k){if(this._isLinear){return this}k=Math.round(k*40)/40;
if(k===0){return this}else{if(this._cacheSplits[k]!==undefined){return this._cacheSplits[k]
}}var q=[this.p1.x,this.p2.x];var n=[this.p1.y,this.p2.y];var m=0;var o=k;var i=0;
var p=1;var j=this._getStartX(k,q);while(o!==j&&m<1000){if(o<j){p=k}else{i=k}k=i+((p-i)*0.5);
j=this._getStartX(k,q);++m}var l=this._splitBezier(k,q,n);var r=this._normalize(l);
var h=this.manager.create(r);this._cacheSplits[o]=h;return h};f.reversed=function(){var h=this.toArray();
return this.manager.create([0.5-(h[2]-0.5),0.5-(h[3]-0.5),0.5-(h[0]-0.5),0.5-(h[1]-0.5)])
};f.toArray=function(){return[this.p1.x,this.p1.y,this.p2.x,this.p2.y]};f.toCSSString=function(){return"cubic-bezier("+this.p1.x+", "+this.p1.y+", "+this.p2.x+", "+this.p2.y+")"
};f.toEasingFunction=function(){return g.apply(this,this.toArray()).easingFunction
};f._getStartX=function(m,h){var l=m-1;var k=m*m;var j=l*l;var i=k*m;return i-3*k*l*h[1]+3*m*j*h[0]
};f._splitBezier=function(m,h,n){var l=m-1;var k=m*m;var j=l*l;var i=k*m;return[i-3*k*l*h[1]+3*m*j*h[0],i-3*k*l*n[1]+3*m*j*n[0],k-2*m*l*h[1]+j*h[0],k-2*m*l*n[1]+j*n[0],m-l*h[1],m-l*n[1]]
};f._normalize=function(h){return[(h[2]-h[0])/(1-h[0]),(h[3]-h[1])/(1-h[1]),(h[4]-h[0])/(1-h[0]),(h[5]-h[1])/(1-h[1])]
};d.exports=b},{"@marcom/ac-easing":78}],95:[function(c,d,a){var b=c("./BezierCurveCss");
function g(){this._instances={}}var f=g.prototype;f.create=function(k){var j;if(typeof k==="string"){j=k.replace(/ /g,"")
}else{j="cubic-bezier("+k.join(",")+")"}if(this._instances[j]===undefined){if(typeof k==="string"){k=k.match(/\d*\.?\d+/g);
var h=k.length;while(h--){k[h]=Number(k[h])}}this._instances[j]=new b(k,this)}return this._instances[j]
};d.exports=new g()},{"./BezierCurveCss":94}],96:[function(b,c,a){if(typeof window.Float32Array==="undefined"){window.Float32Array=function(){}
}},{}],97:[function(f,g,d){var a=f("@marcom/ac-dom-metrics/getDimensions");var c=f("./splitUnits");
var b={translateX:"width",translateY:"height"};function i(j,l,m){this._transform=j;
var k;var n;var o;for(o in m){if(m.hasOwnProperty(o)&&typeof this._transform[o]==="function"){k=c(m[o]);
if(k.unit==="%"){n=this._convertPercentToPixelValue(o,k.value,l)}else{n=k.value
}this._transform[o].call(this._transform,n)}}}var h=i.prototype;h._convertPercentToPixelValue=function(m,l,k){m=b[m];
var j=a(k);if(j[m]){l*=0.01;return j[m]*l}return l};h.toArray=function(){return this._transform.toArray()
};h.toCSSString=function(){return this._transform.toCSSString()};g.exports=i},{"./splitUnits":103,"@marcom/ac-dom-metrics/getDimensions":76}],98:[function(b,c,a){c.exports=function d(h){var g={};
var f;var i;for(i in h){if(h.hasOwnProperty(i)&&h[i]!==null){if(h[i].isColor){if(h[i].isRgb){g[i]="rgb("+Math.round(h[i].r)+", "+Math.round(h[i].g)+", "+Math.round(h[i].b)+")"
}else{if(h[i].isRgba){g[i]="rgba("+Math.round(h[i].r)+", "+Math.round(h[i].g)+", "+Math.round(h[i].b)+", "+h[i].a+")"
}}}else{if(i==="transform"){f=(h[i].length===6)?"matrix":"matrix3d";g[i]=f+"("+h[i].join(",")+")"
}else{if(!h[i].unit){g[i]=h[i].value}else{g[i]=h[i].value+h[i].unit}}}}}return g
}},{}],99:[function(h,d,j){var m=h("@marcom/ac-dom-styles/getStyle");var o=h("@marcom/ac-object/clone");
var f=h("./splitUnits");var b=h("./toCamCase");var c=h("@marcom/ac-color").Color;
var l=h("@marcom/ac-feature/cssPropertyAvailable");var i=h("@marcom/ac-transform").Transform;
var a=h("./TransformMatrix");var n=function(s){if(c.isRgba(s)){s=new c(s).rgbaObject();
s.isRgba=true}else{s=new c(s).rgbObject();s.isRgb=true}s.isColor=true;return s};
var r=function(s){if(s.isRgb){s.isRgb=false;s.isRgba=true;s.a=1}};var q=function(t,s,u){if(t.isRgba||s.isRgba||u.isRgba){r(t);
r(s);r(u)}};var p=function(s){return[s[0],s[1],0,0,s[2],s[3],0,0,0,0,1,0,s[4],s[5],0,1]
};var k=function(t,s,u){if(t.transform.length===16||s.transform.length===16||u.transform.length===16){if(t.transform.length===6){t.transform=p(t.transform)
}if(s.transform.length===6){s.transform=p(s.transform)}if(u.transform.length===6){u.transform=p(u.transform)
}}};d.exports=function g(u,A,z){var w={};A=o(A,true);z=o(z,true);var t;var B;var x;
var y;var v=l("transform");var s;for(s in A){if(A.hasOwnProperty(s)&&A[s]!==null){if(s==="transform"){if(v){B=new i();
t=m(u,"transform")["transform"]||"none";B.setMatrixValue(t);x=new a(new i(),u,A[s])
}if(x&&x.toCSSString()!==B.toCSSString()){y=new a(z[s]?new i():B.clone(),u,z[s]);
w[s]=B.toArray();A[s]=x.toArray();z[s]=y.toArray()}else{w[s]=null;A[s]=null}}else{t=m(u,s)[b(s)]||z[s];
if(c.isColor(t)){w[s]=n(t);z[s]=(z[s]!==undefined)?n(z[s]):o(w[s],true);A[s]=n(A[s])
}else{w[s]=f(t);z[s]=(z[s]!==undefined)?f(z[s]):o(w[s],true);A[s]=f(A[s])}}}}for(s in z){if(z.hasOwnProperty(s)&&z[s]!==null&&(A[s]===undefined||A[s]===null)){if(s==="transform"){if(v){B=new i();
B.setMatrixValue(getComputedStyle(u).transform||getComputedStyle(u).webkitTransform||"none");
y=new a(new i(),u,z[s])}if(y&&y.toCSSString()!==B.toCSSString()){x=new a(B.clone());
w[s]=B.toArray();A[s]=x.toArray();z[s]=y.toArray()}else{w[s]=null;A[s]=null;z[s]=null
}}else{t=m(u,s)[b(s)];if(c.isColor(t)){w[s]=n(t);A[s]=o(w[s],true);z[s]=n(z[s])
}else{w[s]=f(t);z[s]=f(z[s]);A[s]=o(w[s],true)}}}if(w[s]&&w[s].isColor){q(w[s],z[s],A[s])
}}if(w.transform){k(w,z,A)}return{target:w,propsTo:A,propsFrom:z}}},{"./TransformMatrix":97,"./splitUnits":103,"./toCamCase":104,"@marcom/ac-color":56,"@marcom/ac-dom-styles/getStyle":42,"@marcom/ac-feature/cssPropertyAvailable":116,"@marcom/ac-object/clone":258,"@marcom/ac-transform":400}],100:[function(b,c,a){c.exports=function d(j){if(j.transitionProperty){var m="";
var h=j.transitionProperty.split(", ");var k=j.transitionDuration.split(", ");var l=j.transitionTimingFunction.replace(/\d+[,]+[\s]/gi,function(i){return i.substr(0,i.length-1)
}).split(", ");var f=j.transitionDelay.split(", ");var g=h.length;while(g--){m+=h[g]+" "+k[g]+" "+l[g]+" "+f[g]+", "
}return m.substr(0,m.length-2)}return false}},{}],101:[function(c,d,b){d.exports=function a(f){return typeof f==="string"&&f.substr(0,13)==="cubic-bezier("
}},{}],102:[function(d,f,c){var h=d("@marcom/ac-dom-styles/setStyle");var a=d("@marcom/ac-dom-styles/getStyle");
var g=d("./getShorthandTransition");f.exports=function b(l,n){var m=a(l,"transition","transition-property","transition-duration","transition-timing-function","transition-delay");
m=m.transition||g(m);if(m&&m.length){m=m.split(",");var k=0;var o;var j=m.length;
while(j--){o=m[j].trim().split(" ")[0];if(n[o]!==undefined){m.splice(j,1);++k}}if(k){if(m.length===0){m=["all"]
}h(l,{transition:m.join(",").trim()})}}}},{"./getShorthandTransition":100,"@marcom/ac-dom-styles/getStyle":42,"@marcom/ac-dom-styles/setStyle":44}],103:[function(c,d,b){d.exports=function a(i){i=String(i);
if(i.indexOf(" ")>-1){throw new Error("Shorthand CSS is not supported. Please use longhand CSS only.")
}var h=/(\d*\.?\d*)(.*)/;var f=1;if(i&&i.substr(0,1)==="-"){i=i.substr(1);f=-1}var g=String(i).match(h);
return{value:Number(g[1])*f,unit:g[2]}}},{}],104:[function(c,d,b){d.exports=function a(g){var f=function(i,j,k,h){return(k===0)&&(h.substr(1,3)!=="moz")?j:j.toUpperCase()
};return g.replace(/-(\w)/g,f)}},{}],105:[function(d,f,c){var a;f.exports=(function b(){if(a){return a
}var g;var h=document.createElement("fakeelement");var i={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};
for(g in i){if(h.style[g]!==undefined){a=i[g];return a}}})()},{}],106:[function(d,f,b){var a=d("@marcom/ac-page-visibility").PageVisibilityManager;
f.exports=function c(k,i){if(i){var j=function(l){if(a.isHidden){setTimeout(l,16)
}else{window.requestAnimationFrame(l)}};var h=0;var g=function(){if(h===i){k.call(this)
}else{++h;j(g)}};g()}else{k.call(this)}}},{"@marcom/ac-page-visibility":269}],107:[function(c,a,d){var h=c("@marcom/ac-object/create");
var i=c("@marcom/ac-clip").Clip;var f=c("./TimelineClip");var b=c("./TimelineCallback");
var l=c("./TimelineItemList");var k=i.prototype;function j(m){m=m||{};m.ease=m.ease||"linear";
m.destroyOnComplete=false;this.options=m;i.call(this,{t:0},0,{t:1},m);this._itemList=new l()
}var g=j.prototype=h(k);j.prototype.constructor=j;g._update=function(m){k._update.call(this,m);
this._render()};g.progress=function(m){k.progress.call(this,m);if(m!==undefined){this._render()
}return this._progress};g._render=function(){if(this._itemList.length===0){return
}var p=this._target.t*this._duration;var m=this._itemList.head;var n=m;while(n){n=m.next;
var o=(p-m.position);m.currentTime(o);m=n}};g.addClip=function(o,n){n=(n===undefined)?this.duration():n;
var m=o._delay/1000;this._itemList.append(new f(o,n+m));this._updateDuration()};
g.addCallback=function(n,m){m=(m===undefined)?this.duration():m;this._itemList.append(new b(n,m));
this._updateDuration()};g.remove=function(m){var n=this._itemList.getItem(m);if(n){this._itemList.remove(n);
this._updateDuration()}};g._updateDuration=function(){var m=this._itemList.head;
var n=m.position+m.duration();this._itemList.forEach(function(p){var o=p.position+p.duration();
if(o>=n){m=p;n=o}});this.duration(n)};g.destroy=function(){var m=this._itemList.head;
while(m){var n=m;m=n.next;this._itemList.remove(n)}this._duration=0;return k.destroy.call(this)
};a.exports=j},{"./TimelineCallback":108,"./TimelineClip":109,"./TimelineItemList":110,"@marcom/ac-clip":54,"@marcom/ac-object/create":259}],108:[function(b,c,a){function f(h,g){this.callback=h;
this._delay=0;this.position=g;this._hasTriggered=false;this.prev=null;this.next=null
}var d=f.prototype;d.duration=function(){return 0};d.currentTime=function(g){if(g>=0&&!this._hasTriggered){this.callback();
this._hasTriggered=true}if(g<0&&this._hasTriggered){this.callback();this._hasTriggered=false
}return 0};c.exports=f},{}],109:[function(b,c,a){function f(h,g){this.clip=h;this.position=g;
this.duration=this.clip.duration.bind(this.clip);this.lastProgress=-1;this.prev=null;
this.next=null}var d=f.prototype;d.currentTime=function(h){var g=Math.min(1,Math.max(0,h/this.clip._duration));
if(g!==g){g=1}if(this.lastProgress===g){return this.lastProgress}if(this.lastProgress===0||g===0||this.lastProgress===-1){if(this.clip._storeOnStart){this.clip._storeOnStart(this.clip)
}}this.clip._playing=(g*this.clip._duration===this.clip._duration);this.lastProgress=this.clip.progress(g);
return this.lastProgress};d.destroy=function(){this.clip.destroy();this.prev=null;
this.next=null;this.duration=null};c.exports=f},{}],110:[function(b,c,a){var h=b("./TimelineClip");
var f=b("./TimelineCallback");var g=function(){this.head=null;this.tail=null;this.length=0
};var d=g.prototype;d.append=function(i){i.prev=null;i.next=null;if(this.tail){this.tail.next=i;
i.prev=this.tail}else{this.head=i}this.tail=i;this.length++};d.remove=function(i){if(i===this.head){this.head=this.head.next
}else{if(i===this.tail){this.tail=this.tail.prev}}if(i.prev){i.prev.next=i.next
}if(i.next){i.next.prev=i.prev}i.next=i.prev=null;if(this.head===null){this.tail=null
}this.length--};d.getItem=function(i){var j=this.head;while(j){var k=j;if((k instanceof h&&k.clip===i)||(k instanceof f&&k.callback===i)){return k
}j=k.next}return null};d.forEach=function(m){var j=0;var k=this.head;while(k){var l=k;
m(l,j,this.length);k=l.next}};d.destroy=function(){while(this.head){var i=this.head;
this.remove(i);i.destroy()}};c.exports=g},{"./TimelineCallback":108,"./TimelineClip":109}],111:[function(b,c,a){c.exports={canvasAvailable:b("./canvasAvailable"),continuousScrollEventsAvailable:b("./continuousScrollEventsAvailable"),cookiesAvailable:b("./cookiesAvailable"),cssLinearGradientAvailable:b("./cssLinearGradientAvailable"),cssPropertyAvailable:b("./cssPropertyAvailable"),cssViewportUnitsAvailable:b("./cssViewportUnitsAvailable"),elementAttributeAvailable:b("./elementAttributeAvailable"),eventTypeAvailable:b("./eventTypeAvailable"),isDesktop:b("./isDesktop"),isHandheld:b("./isHandheld"),isRetina:b("./isRetina"),isTablet:b("./isTablet"),localStorageAvailable:b("./localStorageAvailable"),mediaElementsAvailable:b("./mediaElementsAvailable"),mediaQueriesAvailable:b("./mediaQueriesAvailable"),prefersReducedMotion:b("./prefersReducedMotion"),sessionStorageAvailable:b("./sessionStorageAvailable"),svgAvailable:b("./svgAvailable"),threeDTransformsAvailable:b("./threeDTransformsAvailable"),touchAvailable:b("./touchAvailable"),webGLAvailable:b("./webGLAvailable")}
},{"./canvasAvailable":112,"./continuousScrollEventsAvailable":113,"./cookiesAvailable":114,"./cssLinearGradientAvailable":115,"./cssPropertyAvailable":116,"./cssViewportUnitsAvailable":117,"./elementAttributeAvailable":118,"./eventTypeAvailable":119,"./isDesktop":121,"./isHandheld":122,"./isRetina":123,"./isTablet":124,"./localStorageAvailable":125,"./mediaElementsAvailable":126,"./mediaQueriesAvailable":127,"./prefersReducedMotion":128,"./sessionStorageAvailable":129,"./svgAvailable":130,"./threeDTransformsAvailable":131,"./touchAvailable":132,"./webGLAvailable":133}],112:[function(b,c,a){var g=b("./helpers/globals");
var f=b("@marcom/ac-function/once");var d=function(){var h=g.getDocument();var i=h.createElement("canvas");
return !!(typeof i.getContext==="function"&&i.getContext("2d"))};c.exports=f(d);
c.exports.original=d},{"./helpers/globals":120,"@marcom/ac-function/once":135}],113:[function(c,f,b){var d=c("@marcom/ac-useragent");
var a=c("./touchAvailable").original;var g=c("@marcom/ac-function/once");function h(){return(!a()||(d.os.ios&&d.os.version.major>=8)||d.browser.chrome)
}f.exports=g(h);f.exports.original=h},{"./touchAvailable":132,"@marcom/ac-function/once":135,"@marcom/ac-useragent":405}],114:[function(c,d,b){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function a(){var k=false;var h=g.getDocument();
var j=g.getNavigator();try{if("cookie" in h&&!!j.cookieEnabled){h.cookie="ac_feature_cookie=1";
k=(h.cookie.indexOf("ac_feature_cookie")!==-1);h.cookie="ac_feature_cookie=; expires=Thu, 01 Jan 1970 00:00:01 GMT;"
}}catch(i){}return k}d.exports=f(a);d.exports.original=a},{"./helpers/globals":120,"@marcom/ac-function/once":135}],115:[function(c,d,b){var g=c("@marcom/ac-prefixer/getStyleValue");
var f=c("@marcom/ac-function/once");function a(){var h=["linear-gradient(to bottom right, #9f9, white)","linear-gradient(top left, #9f9, white)","gradient(linear, left top, right bottom, from(#9f9), to(white))"];
return h.some(function(i){return !!g("background-image",i)})}d.exports=f(a);d.exports.original=a
},{"@marcom/ac-function/once":135,"@marcom/ac-prefixer/getStyleValue":274}],116:[function(c,d,b){var g=c("@marcom/ac-prefixer/getStyleValue");
var f=c("@marcom/ac-prefixer/getStyleProperty");var h=c("@marcom/ac-function/memoize");
function a(j,i){if(typeof i!=="undefined"){return !!g(j,i)}else{return !!f(j)}}d.exports=h(a);
d.exports.original=a},{"@marcom/ac-function/memoize":134,"@marcom/ac-prefixer/getStyleProperty":273,"@marcom/ac-prefixer/getStyleValue":274}],117:[function(b,c,a){var f=b("@marcom/ac-prefixer/getStyleValue");
var d=b("@marcom/ac-function/once");function g(){return !!f("margin","1vw 1vh")
}c.exports=d(g);c.exports.original=g},{"@marcom/ac-function/once":135,"@marcom/ac-prefixer/getStyleValue":274}],118:[function(b,d,a){var f=b("./helpers/globals");
var g=b("@marcom/ac-function/memoize");function c(h,j){var i=f.getDocument();var k;
j=j||"div";k=i.createElement(j);return(h in k)}d.exports=g(c);d.exports.original=c
},{"./helpers/globals":120,"@marcom/ac-function/memoize":134}],119:[function(c,f,b){var a=c("@marcom/ac-prefixer/getEventType");
var g=c("@marcom/ac-function/memoize");function d(i,h){return !!a(i,h)}f.exports=g(d);
f.exports.original=d},{"@marcom/ac-function/memoize":134,"@marcom/ac-prefixer/getEventType":271}],120:[function(b,c,a){c.exports={getWindow:function(){return window
},getDocument:function(){return document},getNavigator:function(){return navigator
}}},{}],121:[function(d,f,b){var a=d("./touchAvailable").original;var h=d("./helpers/globals");
var g=d("@marcom/ac-function/once");function c(){var i=h.getWindow();return(!a()&&!i.orientation)
}f.exports=g(c);f.exports.original=c},{"./helpers/globals":120,"./touchAvailable":132,"@marcom/ac-function/once":135}],122:[function(f,g,c){var d=f("./isDesktop").original;
var a=f("./isTablet").original;var h=f("@marcom/ac-function/once");function b(){return(!d()&&!a())
}g.exports=h(b);g.exports.original=b},{"./isDesktop":121,"./isTablet":124,"@marcom/ac-function/once":135}],123:[function(b,c,a){var d=b("./helpers/globals");
c.exports=function f(){var g=d.getWindow();return("devicePixelRatio" in g&&g.devicePixelRatio>=1.5)
}},{"./helpers/globals":120}],124:[function(f,g,c){var d=f("./isDesktop").original;
var i=f("./helpers/globals");var h=f("@marcom/ac-function/once");var b=600;function a(){var k=i.getWindow();
var j=k.screen.width;if(k.orientation&&k.screen.height<j){j=k.screen.height}return(!d()&&j>=b)
}g.exports=h(a);g.exports.original=a},{"./helpers/globals":120,"./isDesktop":121,"@marcom/ac-function/once":135}],125:[function(c,d,a){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function b(){var j=g.getWindow();var i=false;
try{i=!!(j.localStorage&&j.localStorage.non_existent!==null)}catch(h){}return i
}d.exports=f(b);d.exports.original=b},{"./helpers/globals":120,"@marcom/ac-function/once":135}],126:[function(b,c,a){var g=b("./helpers/globals");
var d=b("@marcom/ac-function/once");function f(){var h=g.getWindow();return("HTMLMediaElement" in h)
}c.exports=d(f);c.exports.original=f},{"./helpers/globals":120,"@marcom/ac-function/once":135}],127:[function(c,d,b){c("@marcom/ac-polyfills/matchMedia");
var g=c("./helpers/globals");var f=c("@marcom/ac-function/once");function a(){var i=g.getWindow();
var h=i.matchMedia("only all");return !!(h&&h.matches)}d.exports=f(a);d.exports.original=a
},{"./helpers/globals":120,"@marcom/ac-function/once":135,"@marcom/ac-polyfills/matchMedia":undefined}],128:[function(b,c,a){var f=b("./helpers/globals");
function d(){var h=f.getWindow();var g=h.matchMedia("(prefers-reduced-motion)");
return !!(g&&g.matches)}c.exports=d},{"./helpers/globals":120}],129:[function(c,d,b){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function a(){var j=g.getWindow();var h=false;
try{if("sessionStorage" in j&&typeof j.sessionStorage.setItem==="function"){j.sessionStorage.setItem("ac_feature","test");
h=true;j.sessionStorage.removeItem("ac_feature","test")}}catch(i){}return h}d.exports=f(a);
d.exports.original=a},{"./helpers/globals":120,"@marcom/ac-function/once":135}],130:[function(c,d,b){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function a(){var h=g.getDocument();return !!h.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")
}d.exports=f(a);d.exports.original=a},{"./helpers/globals":120,"@marcom/ac-function/once":135}],131:[function(b,c,a){var g=b("@marcom/ac-prefixer/getStyleValue");
var d=b("@marcom/ac-function/once");function f(){return !!(g("perspective","1px")&&g("transform","translateZ(0)"))
}c.exports=d(f);c.exports.original=f},{"@marcom/ac-function/once":135,"@marcom/ac-prefixer/getStyleValue":274}],132:[function(c,d,b){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function a(){var j=g.getWindow();var h=g.getDocument();
var i=g.getNavigator();return !!(("ontouchstart" in j)||(j.DocumentTouch&&h instanceof j.DocumentTouch)||(i.maxTouchPoints>0)||(i.msMaxTouchPoints>0))
}d.exports=f(a);d.exports.original=a},{"./helpers/globals":120,"@marcom/ac-function/once":135}],133:[function(c,d,b){var g=c("./helpers/globals");
var f=c("@marcom/ac-function/once");function a(){var h=g.getDocument();var i=h.createElement("canvas");
if(typeof i.getContext==="function"){return !!(i.getContext("webgl")||i.getContext("experimental-webgl"))
}return false}d.exports=f(a);d.exports.original=a},{"./helpers/globals":120,"@marcom/ac-function/once":135}],134:[function(c,d,b){var a=function(){var h="";
var g;for(g=0;g<arguments.length;g++){if(g>0){h+=","}h+=arguments[g]}return h};
d.exports=function f(i,h){h=h||a;var g=function(){var j=arguments;var k=h.apply(this,j);
if(!(k in g.cache)){g.cache[k]=i.apply(this,j)}return g.cache[k]};g.cache={};return g
}},{}],135:[function(b,c,a){c.exports=function d(g){var f;return function(){if(typeof f==="undefined"){f=g.apply(this,arguments)
}return f}}},{}],136:[function(b,c,a){c.exports=function d(f,h){var g=null;return function(){if(g===null){f.apply(this,arguments);
g=setTimeout(function(){g=null},h)}}}},{}],137:[function(d,f,c){var b=d("./utils/getBoundingClientRect");
f.exports=function a(g,i){var h=1;if(i){h=b(g).width/g.offsetWidth}return{width:g.scrollWidth*h,height:g.scrollHeight*h}
}},{"./utils/getBoundingClientRect":147}],138:[function(b,c,a){arguments[4][76][0].apply(a,arguments)
},{"./utils/getBoundingClientRect":147,dup:76}],139:[function(g,h,f){var c=g("./getDimensions");
var d=g("./utils/getBoundingClientRect");var b=g("./getScrollX");var a=g("./getScrollY");
h.exports=function i(j,o){var l;var n;var m;var k;if(o){l=d(j);n=b();m=a();return{top:l.top+m,right:l.right+n,bottom:l.bottom+m,left:l.left+n}
}k=c(j,o);l={top:j.offsetTop,left:j.offsetLeft,width:k.width,height:k.height};while((j=j.offsetParent)){l.top+=j.offsetTop;
l.left+=j.offsetLeft}return{top:l.top,right:l.left+l.width,bottom:l.top+l.height,left:l.left}
}},{"./getDimensions":138,"./getScrollX":143,"./getScrollY":144,"./utils/getBoundingClientRect":147}],140:[function(c,f,b){var a=c("./getDimensions");
var g=c("./getPixelsInViewport");f.exports=function d(j,k){var i=g(j,k);var h=a(j,k).height;
return(i/h)}},{"./getDimensions":138,"./getPixelsInViewport":141}],141:[function(c,d,b){var a=c("./getViewportPosition");
d.exports=function f(h,k){var j=document.documentElement.clientHeight;var g=a(h,k);
var i;if(g.top>=j||g.bottom<=0){return 0}i=(g.bottom-g.top);if(g.top<0){i+=g.top
}if(g.bottom>j){i-=g.bottom-j}return i}},{"./getViewportPosition":145}],142:[function(d,f,c){var a=d("./getDimensions");
var b=d("./utils/getBoundingClientRect");f.exports=function g(i,l){var k;var h;
var j;if(l){k=b(i);if(i.offsetParent){h=b(i.offsetParent);k.top-=h.top;k.left-=h.left
}}else{j=a(i,l);k={top:i.offsetTop,left:i.offsetLeft,width:j.width,height:j.height}
}return{top:k.top,right:k.left+k.width,bottom:k.top+k.height,left:k.left}}},{"./getDimensions":138,"./utils/getBoundingClientRect":147}],143:[function(c,d,b){d.exports=function a(f){var g;
f=f||window;if(f===window){g=window.pageXOffset;if(!g){f=document.documentElement||document.body.parentNode||document.body
}else{return g}}return f.scrollLeft}},{}],144:[function(c,d,b){d.exports=function a(f){var g;
f=f||window;if(f===window){g=window.pageYOffset;if(!g){f=document.documentElement||document.body.parentNode||document.body
}else{return g}}return f.scrollTop}},{}],145:[function(g,h,f){var i=g("./getPagePosition");
var d=g("./utils/getBoundingClientRect");var c=g("./getScrollX");var b=g("./getScrollY");
h.exports=function a(k,n){var j;var m;var l;if(n){j=d(k);return{top:j.top,right:j.right,bottom:j.bottom,left:j.left}
}j=i(k);m=c();l=b();return{top:j.top-l,right:j.right-m,bottom:j.bottom-l,left:j.left-m}
}},{"./getPagePosition":139,"./getScrollX":143,"./getScrollY":144,"./utils/getBoundingClientRect":147}],146:[function(b,d,a){var g=b("./getPixelsInViewport");
var c=b("./getPercentInViewport");d.exports=function f(j,k,h){var i;h=h||0;if(typeof h==="string"&&h.slice(-2)==="px"){h=parseInt(h,10);
i=g(j,k)}else{i=c(j,k)}return(i>0&&i>=h)}},{"./getPercentInViewport":140,"./getPixelsInViewport":141}],147:[function(b,c,a){arguments[4][77][0].apply(a,arguments)
},{dup:77}],148:[function(b,c,a){arguments[4][11][0].apply(a,arguments)},{"./ac-event-emitter-micro/EventEmitterMicro":149,dup:11}],149:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],150:[function(d,c,g){var m=d("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var j=d("@marcom/ac-dom-events/utils/addEventListener");var b=d("@marcom/ac-dom-events/utils/removeEventListener");
var i=d("@marcom/ac-object/create");var f=d("./internal/KeyEvent");var k="keydown";
var l="keyup";function a(n){this._keysDown={};this._DOMKeyDown=this._DOMKeyDown.bind(this);
this._DOMKeyUp=this._DOMKeyUp.bind(this);this._context=n||document;j(this._context,k,this._DOMKeyDown,true);
j(this._context,l,this._DOMKeyUp,true);m.call(this)}var h=a.prototype=i(m.prototype);
h.onDown=function(n,o){return this.on(k+":"+n,o)};h.onceDown=function(n,o){return this.once(k+":"+n,o)
};h.offDown=function(n,o){return this.off(k+":"+n,o)};h.onUp=function(n,o){return this.on(l+":"+n,o)
};h.onceUp=function(n,o){return this.once(l+":"+n,o)};h.offUp=function(n,o){return this.off(l+":"+n,o)
};h.isDown=function(n){n+="";return this._keysDown[n]||false};h.isUp=function(n){return !this.isDown(n)
};h.destroy=function(){b(this._context,k,this._DOMKeyDown,true);b(this._context,l,this._DOMKeyUp,true);
this._keysDown=null;this._context=null;m.prototype.destroy.call(this);return this
};h._DOMKeyDown=function(o){var n=this._normalizeKeyboardEvent(o);var p=n.keyCode+="";
this._trackKeyDown(p);this.trigger(k+":"+p,n)};h._DOMKeyUp=function(o){var n=this._normalizeKeyboardEvent(o);
var p=n.keyCode+="";this._trackKeyUp(p);this.trigger(l+":"+p,n)};h._normalizeKeyboardEvent=function(n){return new f(n)
};h._trackKeyUp=function(n){if(this._keysDown[n]){this._keysDown[n]=false}};h._trackKeyDown=function(n){if(!this._keysDown[n]){this._keysDown[n]=true
}};c.exports=a},{"./internal/KeyEvent":152,"@marcom/ac-dom-events/utils/addEventListener":26,"@marcom/ac-dom-events/utils/removeEventListener":28,"@marcom/ac-event-emitter-micro":148,"@marcom/ac-object/create":259}],151:[function(c,d,b){var a=c("./Keyboard");
d.exports=new a()},{"./Keyboard":150}],152:[function(c,d,b){var a=["keyLocation"];
function f(g){this.originalEvent=g;var h;for(h in g){if(a.indexOf(h)===-1&&typeof g[h]!=="function"){this[h]=g[h]
}}this.location=(this.originalEvent.location!==undefined)?this.originalEvent.location:this.originalEvent.keyLocation
}f.prototype={preventDefault:function(){if(typeof this.originalEvent.preventDefault!=="function"){this.originalEvent.returnValue=false;
return}return this.originalEvent.preventDefault()},stopPropagation:function(){return this.originalEvent.stopPropagation()
}};d.exports=f},{}],153:[function(b,c,a){c.exports={BACKSPACE:8,TAB:9,ENTER:13,SHIFT:16,CONTROL:17,ALT:18,COMMAND:91,CAPSLOCK:20,ESCAPE:27,PAGE_UP:33,PAGE_DOWN:34,END:35,HOME:36,ARROW_LEFT:37,ARROW_UP:38,ARROW_RIGHT:39,ARROW_DOWN:40,DELETE:46,ZERO:48,ONE:49,TWO:50,THREE:51,FOUR:52,FIVE:53,SIX:54,SEVEN:55,EIGHT:56,NINE:57,A:65,B:66,C:67,D:68,E:69,F:70,G:71,H:72,I:73,J:74,K:75,L:76,M:77,N:78,O:79,P:80,Q:81,R:82,S:83,T:84,U:85,V:86,W:87,X:88,Y:89,Z:90,NUMPAD_ZERO:96,NUMPAD_ONE:97,NUMPAD_TWO:98,NUMPAD_THREE:99,NUMPAD_FOUR:100,NUMPAD_FIVE:101,NUMPAD_SIX:102,NUMPAD_SEVEN:103,NUMPAD_EIGHT:104,NUMPAD_NINE:105,NUMPAD_ASTERISK:106,NUMPAD_PLUS:107,NUMPAD_DASH:109,NUMPAD_DOT:110,NUMPAD_SLASH:111,NUMPAD_EQUALS:187,TICK:192,LEFT_BRACKET:219,RIGHT_BRACKET:221,BACKSLASH:220,SEMICOLON:186,APOSTRAPHE:222,APOSTROPHE:222,SPACEBAR:32,CLEAR:12,COMMA:188,DOT:190,SLASH:191}
},{}],154:[function(d,f,b){var g=d("./ac-browser/BrowserData");var a=/applewebkit/i;
var h=d("./ac-browser/IE");var c=g.create();c.isWebKit=function(i){var j=i||window.navigator.userAgent;
return j?!!a.test(j):false};c.lowerCaseUserAgent=navigator.userAgent.toLowerCase();
if(c.name==="IE"){c.IE={documentMode:h.getDocumentMode()}}f.exports=c},{"./ac-browser/BrowserData":155,"./ac-browser/IE":156}],155:[function(b,c,a){b("@marcom/ac-polyfills/Array/prototype.filter");
b("@marcom/ac-polyfills/Array/prototype.some");var d=b("./data");function f(){}f.prototype={__getBrowserVersion:function(h,i){var g;
if(!h||!i){return}var j=d.browser.filter(function(k){return k.identity===i});j.some(function(m){var k=m.versionSearch||i;
var l=h.indexOf(k);if(l>-1){g=parseFloat(h.substring(l+k.length+1));return true
}});return g},__getName:function(g){return this.__getIdentityStringFromArray(g)
},__getIdentity:function(g){if(g.string){return this.__matchSubString(g)}else{if(g.prop){return g.identity
}}},__getIdentityStringFromArray:function(g){for(var k=0,h=g.length,j;k<h;k++){j=this.__getIdentity(g[k]);
if(j){return j}}},__getOS:function(g){return this.__getIdentityStringFromArray(g)
},__getOSVersion:function(i,l){if(!i||!l){return}var k=d.os.filter(function(m){return m.identity===l
})[0];var g=k.versionSearch||l;var j=new RegExp(g+" ([\\d_\\.]+)","i");var h=i.match(j);
if(h!==null){return h[1].replace(/_/g,".")}},__matchSubString:function(h){var g=h.subString;
if(g){var i=g.test?!!g.test(h.string):h.string.indexOf(g)>-1;if(i){return h.identity
}}}};f.create=function(){var g=new f();var h={};h.name=g.__getName(d.browser);h.version=g.__getBrowserVersion(d.versionString,h.name);
h.os=g.__getOS(d.os);h.osVersion=g.__getOSVersion(d.versionString,h.os);return h
};c.exports=f},{"./data":157,"@marcom/ac-polyfills/Array/prototype.filter":undefined,"@marcom/ac-polyfills/Array/prototype.some":undefined}],156:[function(b,c,a){c.exports={getDocumentMode:function(){var d;
if(document.documentMode){d=parseInt(document.documentMode,10)}else{d=5;if(document.compatMode){if(document.compatMode==="CSS1Compat"){d=7
}}}return d}}},{}],157:[function(b,c,a){c.exports={browser:[{string:window.navigator.userAgent,subString:"Edge",identity:"Edge"},{string:window.navigator.userAgent,subString:/silk/i,identity:"Silk"},{string:window.navigator.userAgent,subString:/(android).*(version\/[0-9+].[0-9+])/i,identity:"Android"},{string:window.navigator.userAgent,subString:"Chrome",identity:"Chrome"},{string:window.navigator.userAgent,subString:"OmniWeb",versionSearch:"OmniWeb/",identity:"OmniWeb"},{string:window.navigator.userAgent,subString:/mobile\/[^\s]*\ssafari\//i,identity:"Safari Mobile",versionSearch:"Version"},{string:window.navigator.vendor,subString:"Apple",identity:"Safari",versionSearch:"Version"},{prop:window.opera,identity:"Opera",versionSearch:"Version"},{string:window.navigator.vendor,subString:"iCab",identity:"iCab"},{string:window.navigator.vendor,subString:"KDE",identity:"Konqueror"},{string:window.navigator.userAgent,subString:"Firefox",identity:"Firefox"},{string:window.navigator.vendor,subString:"Camino",identity:"Camino"},{string:window.navigator.userAgent,subString:"Netscape",identity:"Netscape"},{string:window.navigator.userAgent,subString:"MSIE",identity:"IE",versionSearch:"MSIE"},{string:window.navigator.userAgent,subString:"Trident",identity:"IE",versionSearch:"rv"},{string:window.navigator.userAgent,subString:"Gecko",identity:"Mozilla",versionSearch:"rv"},{string:window.navigator.userAgent,subString:"Mozilla",identity:"Netscape",versionSearch:"Mozilla"}],os:[{string:window.navigator.platform,subString:"Win",identity:"Windows",versionSearch:"Windows NT"},{string:window.navigator.platform,subString:"Mac",identity:"OS X"},{string:window.navigator.userAgent,subString:"iPhone",identity:"iOS",versionSearch:"iPhone OS"},{string:window.navigator.userAgent,subString:"iPad",identity:"iOS",versionSearch:"CPU OS"},{string:window.navigator.userAgent,subString:/android/i,identity:"Android"},{string:window.navigator.platform,subString:"Linux",identity:"Linux"}],versionString:window.navigator.userAgent||window.navigator.appVersion||undefined}
},{}],158:[function(b,c,a){c.exports={PointerTracker:b("./ac-pointer-tracker/PointerTracker")}
},{"./ac-pointer-tracker/PointerTracker":159}],159:[function(b,a,f){var n=b("@marcom/ac-browser");
var l=b("@marcom/ac-dom-events");var k=b("@marcom/ac-dom-styles");var h=b("@marcom/ac-object/create");
var c=n.os==="Android"||(n.name==="IE"&&n.version<=8);var j=b("@marcom/ac-feature/touchAvailable")();
var m=b("@marcom/ac-event-emitter-micro").EventEmitterMicro;function d(p,q,o){this._el=p;
o=o||{};this._lockVertical=o.lockVertical!==false;this._swipeThreshold=o.swipeThreshold||d.DEFAULT_SWIPE_THRESHOLD;
this._pointerEvents=q||{};this._trackHover=o.trackHover;if(!this._trackHover){this._pointerEvents.down=this._pointerEvents.down||((j)?d.TOUCH_EVENTS.down:d.MOUSE_EVENTS.down);
this._pointerEvents.up=this._pointerEvents.up||((j)?d.TOUCH_EVENTS.up:d.MOUSE_EVENTS.up)
}else{this._pointerEvents.down=this._pointerEvents.down||d.MOUSE_EVENTS.over;this._pointerEvents.up=this._pointerEvents.up||d.MOUSE_EVENTS.out
}this._pointerEvents.out=this._pointerEvents.out||((j)?d.TOUCH_EVENTS.out:d.MOUSE_EVENTS.out);
this._pointerEvents.move=this._pointerEvents.move||((j)?d.TOUCH_EVENTS.move:d.MOUSE_EVENTS.move);
this._onMouseDown=this._onMouseDown.bind(this);this._onMouseUp=this._onMouseUp.bind(this);
this._onMouseOut=this._onMouseOut.bind(this);this._onMouseMove=this._onMouseMove.bind(this);
m.call(this);l.addEventListener(this._el,this._pointerEvents.down,this._onMouseDown);
this._setCursorStyle("grab")}d.START="start";d.END="end";d.UPDATE="update";d.SWIPE_RIGHT="swiperight";
d.SWIPE_LEFT="swipeleft";d.DEFAULT_SWIPE_THRESHOLD=(c)?2:8;d.TOUCH_EVENTS={down:"touchstart",up:"touchend",out:"mouseout",move:"touchmove"};
d.MOUSE_EVENTS={down:"mousedown",up:"mouseup",out:"mouseout",move:"mousemove",over:"mouseover"};
var i=m.prototype;var g=d.prototype=h(i);g.destroy=function(){if(this._isDragging){this._onMouseUp()
}l.removeEventListener(this._el,this._pointerEvents.down,this._onMouseDown);this._setCursorStyle(null);
this._el=null;this._pointerEvents=null;this._lockVertical=null;this._swipeThreshold=null;
this._checkForTouchScrollY=null;this._isDragging=null;this._currentX=null;this._currentY=null;
this._velocityX=null;this._velocityY=null;this._lastX=null;this._lastY=null;return i.destroy.call(this)
};g._onMouseDown=function(o){if(this._isDragging){return}this._isDragging=true;
this._setCursorStyle("grabbing");l.removeEventListener(this._el,this._pointerEvents.down,this._onMouseDown);
l.addEventListener(document.body,this._pointerEvents.up,this._onMouseUp);l.addEventListener(document,this._pointerEvents.out,this._onMouseOut);
l.addEventListener(document.body,this._pointerEvents.move,this._onMouseMove);this._checkForTouchScrollY=this._lockVertical&&!!(o.touches&&o.touches[0]);
if(this._checkForTouchScrollY){this._lastY=this._getTouchY(o)}var p=this._storeAndGetValues(o);
this._velocityX=p.diffX=0;this._velocityY=p.diffY=0;this.trigger(d.START,p)};g._onMouseUp=function(o){if(!this._isDragging){return
}this._isDragging=false;this._setCursorStyle("grab");l.addEventListener(this._el,this._pointerEvents.down,this._onMouseDown);
l.removeEventListener(document.body,this._pointerEvents.up,this._onMouseUp);l.removeEventListener(document,this._pointerEvents.out,this._onMouseOut);
l.removeEventListener(document.body,this._pointerEvents.move,this._onMouseMove);
var q;if(this._checkForTouchScrollY||this._trackHover){q=null}else{if(this._velocityX>this._swipeThreshold){q=d.SWIPE_LEFT
}else{if((this._velocityX*-1)>this._swipeThreshold){q=d.SWIPE_RIGHT}}}var p=this._storeAndGetValues(o);
p.swipe=q;this.trigger(d.END,p);if(q&&!this._trackHover){this.trigger(q,p)}};g._onMouseOut=function(o){o=(o)?o:window.event;
var p=o.relatedTarget||o.toElement;if(!p||p.nodeName==="HTML"){this._onMouseUp(o)
}};g._onMouseMove=function(o){if(this._checkForTouchScrollY&&this._isVerticalTouchMove(o)){this._onMouseUp(o);
return}l.preventDefault(o);this.trigger(d.UPDATE,this._storeAndGetValues(o))};g._storeAndGetValues=function(o){if(o===undefined){return{}
}this._currentX=this._getPointerX(o);this._currentY=this._getPointerY(o);this._velocityX=this._lastX-this._currentX;
this._velocityY=this._lastY-this._currentY;var p={x:this._currentX,y:this._currentY,lastX:this._lastX,lastY:this._lastY,diffX:this._velocityX,diffY:this._velocityY,interactionEvent:o};
this._lastX=this._currentX;this._lastY=this._currentY;return p};g._getPointerX=function(o){if(o.pageX){return o.pageX
}else{if(o.touches&&o.touches[0]){return o.touches[0].pageX}else{if(o.clientX){return o.clientX
}}}return 0};g._getPointerY=function(o){if(o.pageY){return o.pageY}else{if(o.touches&&o.touches[0]){return o.touches[0].pageY
}else{if(o.clientY){return o.clientY}}}return 0};g._getTouchX=function(o){if(o.touches&&o.touches[0]){return o.touches[0].pageX
}return 0};g._getTouchY=function(o){if(o.touches&&o.touches[0]){return o.touches[0].pageY
}return 0};g._isVerticalTouchMove=function(p){var o=this._getTouchX(p);var s=this._getTouchY(p);
var r=Math.abs(o-this._lastX);var q=Math.abs(s-this._lastY);this._checkForTouchScrollY=(r<q);
return this._checkForTouchScrollY};g._setCursorStyle=function(o){k.setStyle(this._el,{cursor:o})
};a.exports=d},{"@marcom/ac-browser":154,"@marcom/ac-dom-events":19,"@marcom/ac-dom-styles":41,"@marcom/ac-event-emitter-micro":148,"@marcom/ac-feature/touchAvailable":132,"@marcom/ac-object/create":259}],160:[function(c,d,a){var b=(function(){var h=["","-webkit-","-moz-","-o-","-ms-"];
var f={"animation-delay":"transitionend","-o-animation-delay":"oTransitionEnd","-moz-animation-delay":"transitionend","-webkit-animation-delay":"webkitTransitionEnd","-ms-animation-delay":"transitionend"};
var l={"animation-delay":"animationstart","-o-animation-delay":"oanimationstart","-moz-animation-delay":"animationstart","-webkit-animation-delay":"webkitAnimationStart","-ms-animation-delay":"MSAnimationStart"};
var i={"animation-delay":"animationiteration","-o-animation-delay":"oanimationiteration","-moz-animation-delay":"animationiteration","-webkit-animation-delay":"webkitAnimationIteration","-ms-animation-delay":"MSAnimationIteration"};
var o={"animation-delay":"animationend","-o-animation-delay":"oanimationend","-moz-animation-delay":"animationend","-webkit-animation-delay":"webkitAnimationEnd","-ms-animation-delay":"MSAnimationEnd"};
var g=document.createElement("_");var j=["","-webkit-","-moz-","-o-","-ms-"];function n(r){for(var p=0;
p<j.length;p++){var q=h[p]+r;if(g.style[q]!==undefined){return q}}return undefined
}var m=["-webkit-","","-moz-","-o-","-ms-"];function k(r){for(var p=0;p<m.length;
p++){var q=m[p]+r;if(g.style[q]!==undefined){return q}}return undefined}return{filter:k("filter"),transform:n("transform"),transformOrigin:n("transform-origin"),transition:n("transition"),transitionDelay:n("transition-delay"),transitionDuration:n("transition-duration"),transitionProperty:n("transition-property"),transitionTimingFunction:n("transition-timing-function"),transitionEnd:f[n("animation-delay")],animation:n("animation"),animationDelay:n("animation-delay"),animationDirection:n("animation-direction"),animationDuration:n("animation-duration"),animationFillMode:n("animation-fill-mode"),animationIterationCount:n("animation-iteration-count"),animationName:n("animation-name"),animationTimingFunction:n("animation-timing-function"),animationPlayState:n("animation-play-state"),animationStart:l[n("animation-delay")],animationIteration:i[n("animation-delay")],animationEnd:o[n("animation-delay")]}
}());d.exports=b},{}],161:[function(d,f,b){var c=d("@marcom/ac-eclipse").Clip;var a=d("@marcom/ac-feature/cssPropertyAvailable");
f.exports=function g(i,l,k,j,h){if(a("opacity")){h=h||{};if(j){h.autoplay=(h.autoplay===false)?h.autoplay:true;
h.propsFrom=h.propsFrom||{};h.propsFrom.opacity=l;if(h.autoplay){return c.to(i,j,{opacity:k},h)
}return new c(i,j,{opacity:k},h)}i.style.opacity=k;if(typeof h.onStart==="function"){h.onStart()
}if(typeof h.onComplete==="function"){h.onComplete()}}else{i.style.visibility=(k)?"visible":"hidden";
if(typeof h.onStart==="function"){h.onStart()}if(typeof h.onComplete==="function"){h.onComplete()
}}}},{"@marcom/ac-eclipse":90,"@marcom/ac-feature/cssPropertyAvailable":116}],162:[function(f,g,c){var d=f("@marcom/ac-eclipse").Clip;
var b=f("@marcom/ac-feature/cssPropertyAvailable");g.exports=function a(i,j,h){var k=1;
h=h||{};if(b("opacity")){if(j){h.autoplay=(h.autoplay===false)?h.autoplay:true;
if(h.autoplay){return d.to(i,j,{opacity:k},h)}return new d(i,j,{opacity:k},h)}i.style.opacity=k;
if(typeof h.onStart==="function"){h.onStart()}if(typeof h.onComplete==="function"){h.onComplete()
}}else{i.style.visibility="visible";if(typeof h.onStart==="function"){h.onStart()
}if(typeof h.onComplete==="function"){h.onComplete()}}}},{"@marcom/ac-eclipse":90,"@marcom/ac-feature/cssPropertyAvailable":116}],163:[function(d,f,b){var c=d("@marcom/ac-eclipse").Clip;
var a=d("@marcom/ac-feature/cssPropertyAvailable");f.exports=function g(i,j,h){var k=0;
h=h||{};if(a("opacity")){if(j){h.autoplay=(h.autoplay===false)?h.autoplay:true;
if(h.autoplay){return c.to(i,j,{opacity:k},h)}return new c(i,j,{opacity:k},h)}i.style.opacity=k;
if(typeof h.onStart==="function"){h.onStart()}if(typeof h.onComplete==="function"){h.onComplete()
}}else{i.style.visibility="hidden";if(typeof h.onStart==="function"){h.onStart()
}if(typeof h.onComplete==="function"){h.onComplete()}}}},{"@marcom/ac-eclipse":90,"@marcom/ac-feature/cssPropertyAvailable":116}],164:[function(d,f,b){var c=d("@marcom/ac-eclipse").Clip;
var g=d("@marcom/ac-dom-styles");f.exports=function a(k,h,o,l,j){j=j||{};j.autoplay=(j.autoplay===false)?j.autoplay:true;
var i=j.onStart||null;var n=j.onComplete||null;var m;m={transform:{translateX:h+"px",translateY:o+"px"}};
if(l){j.onStart=function(){k.style.willChange="transform";if(i!==null){i.call(this)
}};j.onComplete=function(){k.style.willChange="";if(n!==null){n.call(this)}};if(j.autoplay){return c.to(k,l,m,j)
}return new c(k,l,m,j)}g.setStyle(k,m);if(typeof j.onStart==="function"){j.onStart()
}if(typeof j.onComplete==="function"){j.onComplete()}}},{"@marcom/ac-dom-styles":41,"@marcom/ac-eclipse":90}],165:[function(f,g,b){var d=f("@marcom/ac-browser-prefixed");
var c=f("@marcom/ac-transform").Transform;var a=f("./move");g.exports=function h(l,i,m,k){var j=new c();
j.setMatrixValue(getComputedStyle(l)[d.transform]);return a(l,i,j.getTranslateY(),m,k)
}},{"./move":164,"@marcom/ac-browser-prefixed":160,"@marcom/ac-transform":400}],166:[function(d,f,b){var c=d("@marcom/ac-eclipse").Clip;
f.exports=function a(g,o,k,i,r){r=r||{};r.autoplay=(r.autoplay===false)?r.autoplay:true;
var h=g===window;var q;var n;if(h){q=g.pageXOffset;n=g.pageYOffset}else{q=g.scrollLeft;
n=g.scrollTop}var m={x:q,y:n};var p={x:o,y:k};if(typeof r.onDraw==="function"){var l=r.onDraw
}var j=function(s){if(h){g.scrollTo(m.x,m.y)}else{g.scrollLeft=m.x;g.scrollTop=m.y
}if(l){l.call(this,s)}};r.onDraw=j;if(r.autoplay){return c.to(m,i,p,r)}return new c(m,i,p,r)
}},{"@marcom/ac-eclipse":90}],167:[function(c,d,b){var a=c("./scroll");d.exports=function f(k,g,l,j){var i=k===window;
var h;if(i){h=k.pageYOffset}else{h=k.scrollTop}return a(k,g,h,l,j)}},{"./scroll":166}],168:[function(b,a,f){var d=b("@marcom/ac-classlist");
var j=b("./singletons/analyticsManager");var h=b("@marcom/ac-object/create");var l=b("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var c=b("./Item");function i(m){m=m||{};this._wrapAround=m.wrapAround||false;this._itemType=m.itemType||c;
this._items=[];this._itemsIdLookup={};this.showNext=this.showNext.bind(this);this.showPrevious=this.showPrevious.bind(this);
this._update=this._update.bind(this);this._updateItems=this._updateItems.bind(this);
l.call(this);if(m.startAt){this._startAt(m.startAt)}i._add(this,m.analyticsOptions)
}i.FADE="fade";i.FADE_SELECTOR="[data-ac-gallery-fade]";i.SLIDE="slide";i.SLIDE_SELECTOR="[data-ac-gallery-slide]";
i.UPDATE="update";i.UPDATE_COMPLETE="update:complete";var k=l.prototype;var g=i.prototype=h(k);
g.addItem=function(n,m){if(n.nodeType){n=new this._itemType(n)}else{if(this._items.indexOf(n)>-1){return n
}}if(typeof m==="number"){this._items.splice(m,0,n)}else{this._items.push(n)}if(this._items.length===1){n.show();
this._setCurrentItem(n)}else{n.hide();if(this.getNextItem()===n){this._setNextItem(n)
}if(this.getPreviousItem()===n){this._setPreviousItem(n)}}if(n.getElementId()!==null){this._itemsIdLookup[n.getElementId()]=n
}n.on(c.SELECTED,this._update);return n};g.removeItem=function(q,p){p=p||{};if(typeof q==="number"){q=this._items[q]
}var o=this._items.indexOf(q);if(o>-1){var m=this.getNextItem();var n=this.getPreviousItem();
this._items.splice(o,1);q.off(c.SELECTED,this._update);if(m===q){this._setNextItem(this.getNextItem())
}if(n===q){this._setPreviousItem(this.getPreviousItem())}}if(q===this._currentItem&&this._items.length&&p.setCurrentItem!==false){this._update({item:this._items[0]});
this._setLastItem(null)}if(p.destroyItem&&q.getElement()){q.destroy()}return q};
g.show=function(n,m){if(typeof n==="number"){n=this._items[n]}else{if(typeof n==="string"){n=this._itemsIdLookup[n]
}}if(n){m=m||{};this._update({item:n,interactionEvent:m.interactionEvent})}return n||null
};g.showNext=function(m){var n=this.getNextItem();if(n){this.show(n,m)}return n
};g.showPrevious=function(m){var n=this.getPreviousItem();if(n){this.show(n,m)}return n
};g.isInView=function(){return this._currentItem&&this._currentItem.isInView()};
g.getTotalItems=function(){return this._items.length};g.getItems=function(){return this._items
};g.getItem=function(m){if(typeof m==="number"){return this.getItemAt(m)}else{if(typeof m==="string"){return this.getItemById(m)
}}};g.getItemAt=function(m){return this._items[m]||null};g.getItemById=function(m){return this._itemsIdLookup[m]||null
};g.getItemIndex=function(m){return this._items.indexOf(m)};g.getCurrentItem=function(){return this._currentItem||null
};g.getLastItem=function(){return this._lastItem||null};g.getNextItem=function(){var n;
var m=this._items.indexOf(this._currentItem);if(m<this._items.length-1){n=this._items[m+1]
}else{if(this._wrapAround){n=this._items[0]}}return n||null};g.getPreviousItem=function(){var n;
var m=this._items.indexOf(this._currentItem);if(m>0){n=this._items[m-1]}else{if(this._wrapAround){n=this._items[this._items.length-1]
}}return n||null};g.getId=function(){return this._id};g.destroy=function(m){m=m||{};
if(m.destroyItems===undefined){m.destroyItems=true}this._setCurrentItem(null);if(m.destroyItems){var n;
while(this._items.length){n=this._items[0];n.off(c.SELECTED,this._update);this.removeItem(n,{destroyItem:true,setCurrentItem:false})
}}this._items=null;this._itemsIdLookup=null;i._remove(this);return k.destroy.call(this)
};g._startAt=function(m){var n=this._items[m];if(n&&(this._currentItem!==n)){this._currentItem.hide();
this._setCurrentItem(n);this._currentItem.show();this.trigger(i.UPDATE,this._items)
}};g._setCurrentItem=function(m){if(this._currentItem&&this._currentItem.getElement()&&this._currentItem!==m){d.remove(this._currentItem.getElement(),c.CSS_CURRENT_ITEM);
this._setLastItem(this._currentItem)}this._currentItem=m;if(this._currentItem&&this._currentItem.getElement()){d.add(this._currentItem.getElement(),c.CSS_CURRENT_ITEM);
this._setNextItem(this.getNextItem());this._setPreviousItem(this.getPreviousItem())
}};g._setLastItem=function(m){if(this._lastItem&&this._lastItem.getElement()&&this._lastItem!==m){d.remove(this._lastItem.getElement(),c.CSS_LAST_ITEM)
}this._lastItem=m;if(this._lastItem&&this._lastItem.getElement()){d.add(this._lastItem.getElement(),c.CSS_LAST_ITEM)
}};g._setNextItem=function(m){if(this._nextItem&&this._nextItem.getElement()&&this._nextItem!==m){d.remove(this._nextItem.getElement(),c.CSS_NEXT_ITEM)
}this._nextItem=m;if(this._nextItem&&this._nextItem.getElement()){d.add(this._nextItem.getElement(),c.CSS_NEXT_ITEM)
}};g._setPreviousItem=function(m){if(this._previousItem&&this._previousItem.getElement()&&this._previousItem!==m){d.remove(this._previousItem.getElement(),c.CSS_PREVIOUS_ITEM)
}this._previousItem=m;if(this._previousItem&&this._previousItem.getElement()){d.add(this._previousItem.getElement(),c.CSS_PREVIOUS_ITEM)
}};g._updateItems=function(n,m){if(n.outgoing[0]){n.outgoing[0].hide()}n.incoming[0].show();
if(!m){this.trigger(i.UPDATE_COMPLETE,n)}};g._update=function(m){var o=this._currentItem!==m.item;
if(o){this._setCurrentItem(m.item)}var n={incoming:[m.item],outgoing:(this._lastItem)?[this._lastItem]:[],interactionEvent:m.interactionEvent||null};
if(o){this.trigger(i.UPDATE,n)}this._updateItems(n,!o)};i._instantiate=function(){this._galleries=[];
this._idCounter=0;return this};i._add=function(n,m){this._galleries.push(n);n._id=++this._idCounter;
j.add(n,m)};i._remove=function(m){var n=this._galleries.indexOf(m);if(n>-1){this._galleries.splice(n,1);
j.remove(m)}};i.getAll=function(){return Array.prototype.slice.call(this._galleries)
};i.getAllInView=function(){var n=[];var m=this._galleries.length;while(m--){if(this._galleries[m].isInView()){n.push(this._galleries[m])
}}return n};i.destroyAll=function(){var m=this._galleries.length;while(m--){this._galleries[m].destroy()
}this._galleries=[]};a.exports=i._instantiate()},{"./Item":169,"./singletons/analyticsManager":183,"@marcom/ac-classlist":8,"@marcom/ac-event-emitter-micro":148,"@marcom/ac-object/create":259}],169:[function(m,b,s){var c=m("@marcom/ac-classlist");
var i=m("@marcom/ac-dom-events/addEventListener");var k=m("@marcom/ac-dom-events/removeEventListener");
var l=m("@marcom/ac-dom-events/preventDefault");var h=m("@marcom/ac-dom-metrics/isInViewport");
var a=m("@marcom/ac-dom-metrics/getPercentInViewport");var r=m("@marcom/ac-dom-traversal/querySelectorAll");
var n=m("@marcom/ac-object/create");var g=m("./singletons/tabManager");var q=m("@marcom/ac-keyboard/keyMap");
var o=m("@marcom/ac-event-emitter-micro").EventEmitterMicro;var f=m("@marcom/ac-keyboard");
var j="current";function d(u,t){this._el=u;t=t||{};this._triggerKeys=[];this._triggerEls={};
this._isShown=false;this._isACaption=(t.isACaption===undefined)?false:t.isACaption;
this._onKeyboardInteraction=this._onKeyboardInteraction.bind(this);this._onTriggered=this._onTriggered.bind(this);
if(!this._isACaption){this._el.setAttribute("role","tabpanel")}this._focusableEls=r(g.focusableSelectors,u);
o.call(this)}d.CSS_CURRENT_ITEM="ac-gallery-currentitem";d.CSS_LAST_ITEM="ac-gallery-lastitem";
d.CSS_NEXT_ITEM="ac-gallery-nextitem";d.CSS_PREVIOUS_ITEM="ac-gallery-previousitem";
d.SELECTED="selected";d.SHOW="show";d.HIDE="hide";var p=d.prototype=n(o.prototype);
p.show=function(){this._isShown=true;this._addCurrentClassToTriggers();this._setTabIndexOnFocusableItems(null);
this._el.removeAttribute("aria-hidden");this.trigger(d.SHOW,this)};p.hide=function(){this._isShown=false;
this._removeCurrentClassFromTriggers();this._setTabIndexOnFocusableItems("-1");
this._el.setAttribute("aria-hidden","true");this.trigger(d.HIDE,this)};p.addElementTrigger=function(v,u){u=u||"click";
if(this._triggerEls[u]===undefined){this._triggerEls[u]=[]}var t=this._triggerEls[u].indexOf(v);
if(t<0){v.setAttribute("role","tab");v.setAttribute("tabindex","0");var w=this.getElementId();
if(w){v.setAttribute("aria-controls",w)}w=v.getAttribute("id");if(w&&this._el.getAttribute("aria-labelledby")===null){this._el.setAttribute("aria-labelledby",w)
}i(v,u,this._onTriggered);this._triggerEls[u].push(v);if(this._isShown){v.setAttribute("aria-selected","true");
c.add(v,j)}else{v.setAttribute("aria-selected","false")}}};p.removeElementTrigger=function(v,u){u=u||"click";
if(this._triggerEls[u]===undefined){return}var t=this._triggerEls[u].indexOf(v);
if(t>-1){this._cleanElementTrigger(v,u)}if(this._triggerEls[u].length===0){this._triggerEls[u]=undefined
}};p.addKeyTrigger=function(u){if(typeof u==="string"){u=q[u.toUpperCase()]}if(typeof u==="number"){var t=this._triggerKeys.indexOf(u);
if(t<0){f.onDown(u,this._onKeyboardInteraction);this._triggerKeys.push(u)}}};p.removeKeyTrigger=function(u){if(typeof u==="string"){u=q[u.toUpperCase()]
}if(typeof u==="number"){var t=this._triggerKeys.indexOf(u);if(t>-1){f.offDown(u,this._onKeyboardInteraction);
this._triggerKeys.splice(t,1)}}};p.removeAllTriggers=function(){var u;var t=this._triggerKeys.length;
while(t--){u=this._triggerKeys[t];f.offDown(u,this._onKeyboardInteraction)}this._triggerKeys=[];
var w;var v;for(v in this._triggerEls){t=this._triggerEls[v].length;while(t--){w=this._triggerEls[v][t];
this._cleanElementTrigger(w,v)}}this._triggerEls={}};p.isInView=function(){if(this._el){return h(this._el)
}return false};p.percentageInView=function(){if(this._el){return a(this._el)}return 0
};p.getElement=function(){return this._el};p.getElementId=function(){if(this._elId!==undefined){return this._elId
}this._elId=this._el.getAttribute("id")||null;return this._elId};p.destroy=function(){if(this._isShown){this._isShown=null;
c.remove(this._el,d.CSS_CURRENT_ITEM,d.CSS_LAST_ITEM,d.CSS_NEXT_ITEM,d.CSS_PREVIOUS_ITEM);
this._removeCurrentClassFromTriggers()}this.removeAllTriggers();this._setTabIndexOnFocusableItems(null);
this._el.removeAttribute("aria-hidden");this._el.removeAttribute("role");this._el.removeAttribute("aria-labelledby");
this._isACaption=null;this._triggerKeys=null;this._triggerEls=null;this._el=null
};p._addCurrentClassToTriggers=function(){var v;var u;var t;for(u in this._triggerEls){t=this._triggerEls[u].length;
while(t--){v=this._triggerEls[u][t];v.setAttribute("aria-selected","true");c.add(v,j)
}}};p._removeCurrentClassFromTriggers=function(){var v;var u;var t;for(u in this._triggerEls){t=this._triggerEls[u].length;
while(t--){v=this._triggerEls[u][t];v.setAttribute("aria-selected","false");c.remove(v,j)
}}};p._cleanElementTrigger=function(u,t){u.removeAttribute("aria-selected");u.removeAttribute("role");
u.removeAttribute("tabindex");u.removeAttribute("aria-controls");k(u,t,this._onTriggered);
if(this._isShown){c.remove(u,j)}};p._onKeyboardInteraction=function(t){if(this.isInView()){this._onTriggered(t)
}};p._setTabIndexOnFocusableItems=function(u){var t=u===null;var w=[];this._currentTabbableEls=this._currentTabbableEls||g.getTabbable(this._focusableEls);
if(!t){w=g.getTabbable(this._focusableEls);this._currentTabbableEls=w}var v=this._currentTabbableEls.length;
while(v--){if(t){this._currentTabbableEls[v].removeAttribute("tabindex")}else{this._currentTabbableEls[v].setAttribute("tabindex",u)
}}};p._onTriggered=function(t){l(t);this.trigger(d.SELECTED,{item:this,interactionEvent:t})
};b.exports=d},{"./singletons/tabManager":184,"@marcom/ac-classlist":8,"@marcom/ac-dom-events/addEventListener":17,"@marcom/ac-dom-events/preventDefault":20,"@marcom/ac-dom-events/removeEventListener":21,"@marcom/ac-dom-metrics/getPercentInViewport":140,"@marcom/ac-dom-metrics/isInViewport":146,"@marcom/ac-dom-traversal/querySelectorAll":50,"@marcom/ac-event-emitter-micro":148,"@marcom/ac-keyboard":151,"@marcom/ac-keyboard/keyMap":153,"@marcom/ac-object/create":259}],170:[function(d,a,g){var h=d("./helpers/extendProto");
var j=d("./Gallery");var b=d("./auto/AutoGallery");var i=d("./fade/FadeGallery");
var l=d("./fade/FadeItem");var c=d("./slide/SlideGallery");var k=d("./slide/SlideItem");
var f=d("./Item");j.create=d("./factories/create");j.autoCreate=d("./factories/autoCreate");
j.extend=h;b.extend=h;i.extend=h;l.extend=h;c.extend=h;k.extend=h;f.extend=h;a.exports={Gallery:j,AutoGallery:b,FadeGallery:i,FadeGalleryItem:l,SlideGallery:c,SlideGalleryItem:k,Item:f,ToggleNav:d("./navigation/ToggleNav")}
},{"./Gallery":168,"./Item":169,"./auto/AutoGallery":172,"./factories/autoCreate":173,"./factories/create":174,"./fade/FadeGallery":175,"./fade/FadeItem":176,"./helpers/extendProto":177,"./navigation/ToggleNav":182,"./slide/SlideGallery":185,"./slide/SlideItem":186}],171:[function(b,d,a){var i;
try{i=b("ac-analytics").observer.Gallery}catch(h){}var g="data-analytics-gallery-id";
function c(){this._observers={}}var f=c.prototype;f.add=function(j,l){var m=j.getId();
if(!i||this._observers[m]){return}l=l||{};if(!l.galleryName){l.galleryName=this._getAnalyticsId(j,l.dataAttribute)||m
}if(!l.beforeUpdateEvent){l.beforeUpdateEvent="update"}if(!l.afterUpdateEvent){l.afterUpdateEvent="update:complete"
}var k=new i(j,l);if(k.gallery){this._observers[m]=k}};f.remove=function(j){var k=j.getId();
if(!i||!this._observers[k]){return}if(typeof this._observers[k].destroy==="function"){this._observers[k].destroy()
}this._observers[k]=null};f._getAnalyticsId=function(j,k){if(typeof j.getElement==="function"){k=k||g;
var l=j.getElement();return l.getAttribute(k)||l.getAttribute("id")}return null
};d.exports=c},{"ac-analytics":undefined}],172:[function(p,b,I){p("@marcom/ac-polyfills/requestAnimationFrame");
var c=p("@marcom/ac-classlist");var k=p("@marcom/ac-dom-events/addEventListener");
var n=p("@marcom/ac-dom-events/removeEventListener");var o=p("@marcom/ac-dom-events/preventDefault");
var w=p("@marcom/ac-dom-styles");var g=p("@marcom/ac-dom-traversal/querySelector");
var F=p("@marcom/ac-dom-traversal/querySelectorAll");var r=p("@marcom/ac-object/create");
var G=p("@marcom/ac-dom-metrics/getContentDimensions");var x=p("@marcom/ac-keyboard/keyMap");
var E=p("./../helpers/selectElementFromDataAttributeValue");var q=p("./../helpers/selectElementThatHasDataAttribute");
var m=p("./../helpers/inputHasFocus");var j=p("@marcom/ac-function/throttle");var l=p("@marcom/ac-feature/touchAvailable");
var t=p("./../Gallery");var d=p("@marcom/ac-keyboard");var z=p("@marcom/ac-page-visibility").PageVisibilityManager;
var i=p("@marcom/ac-pointer-tracker").PointerTracker;var v=p("./../navigation/ToggleNav");
var B="disabled";var A=3;var f=0.5;var y="[data-ac-gallery-item]";var D=0.12;var C=p("../templates/paddlenav.js");
var H="No element supplied.";var J='Container element needed when autoPlay is on. Use the "container" option when you instantiate your gallery.';
var h='Captions datatag needed when enableCaptions is on. Use the "data-related-gallery" tag (with an ID of the related captions container) on your gallery container to automatically use captions.';
function s(O,M){M=M||{};if(!O||O.nodeType===undefined){throw new Error(H)}this._el=O;
t.call(this,M);this._itemHeights=[];this._itemHeightsLookup={};this._toggleNavDuration=M.toggleNavDuration;
this._isRightToLeft=(M.rightToLeft===undefined)?w.getStyle(O,"direction").direction==="rtl":M.rightToLeft;
this._keyboardThrottleDelay=((M.keyboardThrottleDelay===undefined)?D:M.keyboardThrottleDelay)*1000;
this._resizeContainer=!!M.resizeContainer;this._setUpContainerAutoResize(M.resizeContainerOnUpdate);
this._createToggleNav();this._addPaddleNav(M.addPaddleNav);this._isACaptionsGallery=O.getAttribute("data-ac-gallery-captions")==="";
this._addItems(M.itemSelector||y);if(!this._wrapAround){this._updatePaddleNavState()
}if(M.enableArrowKeys!==false){this._enableArrowKeys=true;this._addKeyboardListener()
}if(M.updateOnWindowResize!==false){this._onWindowResize=this._onWindowResize.bind(this);
k(window,"resize",this._onWindowResize)}this._componentsContainer=document.getElementById(M.container);
if(M.startAt){this._startAt(M.startAt)}this.stopAutoPlay=this.stopAutoPlay.bind(this);
if(M.autoPlay){if(!this._componentsContainer){throw new Error(J)}var L=(typeof M.autoPlay==="number")?M.autoPlay:A;
this.startAutoPlay(L)}if(M.deeplink!==false){var P=this._getDeeplinkedItem();if(P&&P!==this._currentItem){this.show(P)
}}if(this._containerResizeDuration!==false){var K=this._itemHeightsLookup[this._currentItem.getElementId()];
if(K){this._setElHeight(K)}}if(this._toggleNav){this._toggleNav.start()}this._setUpSwiping(M.touch&&l(),M.desktopSwipe);
if(this._componentsContainer){this._componentsContainer.setAttribute("tabIndex",-1)
}var N=O.getAttribute("data-related-gallery");if(N){this._captionsContainer=document.querySelector(N)
}if(M.enableCaptions){if(!this._captionsContainer){throw new Error(h)}this._captionsOptions=M.captionsOptions?M.captionsOptions:false;
this.enableCaptions()}}s.RESIZED="resized";s.UPDATE=t.UPDATE;s.UPDATE_COMPLETE=t.UPDATE_COMPLETE;
var a=t.prototype;var u=s.prototype=r(a);u.addItem=function(M,K){if(M.nodeType){var L=this._isACaptionsGallery;
M=new this._itemType(M,{isACaption:L})}else{if(this._items.indexOf(M)>-1){return M
}}if(this._resizeContainer){this._storeItemHeight(M,this._containerResizeDuration===false)
}this._addItemTriggers(M);return a.addItem.call(this,M,K)};u.removeItem=function(M,L){if(this._resizeContainer){var K=this._itemHeights.length;
while(K--){if(this._itemHeights[K].item===M){this._itemHeights.splice(K,1);if(K===0&&this._itemHeights.length){this._setElHeight(this._itemHeights[0].height)
}}}}return a.removeItem.call(this,M,L)};u.startAutoPlay=function(L,K){K=K||{};this._isAutoPlaying=true;
this._autoPlayDelay=(L||A)*1000;this._cancelAutoPlayOnInteraction=(K.cancelOnInteraction===undefined)?true:K.cancelOnInteraction;
setTimeout(this._onAutoPlayToNextItem.bind(this),this._autoPlayDelay);if(this._cancelAutoPlayOnInteraction){this.on(t.UPDATE,this.stopAutoPlay)
}if(this._componentsContainer){k(this._componentsContainer,"focus",this.stopAutoPlay,true);
k(this._componentsContainer,"touchend",this.stopAutoPlay,true);k(this._componentsContainer,"click",this.stopAutoPlay,true)
}else{throw new Error(J)}};u.stopAutoPlay=function(){this._isAutoPlaying=false;
if(this._cancelAutoPlayOnInteraction){this.off(t.UPDATE,this.stopAutoPlay)}if(this._componentsContainer){n(this._componentsContainer,"focus",this.stopAutoPlay,true);
n(this._componentsContainer,"touchend",this.stopAutoPlay,true);n(this._componentsContainer,"click",this.stopAutoPlay,true)
}};u.getElement=function(){return this._el};u.getToggleNav=function(){return this._toggleNav||null
};u.resize=function(L,K){if(this._resizeContainer){this._itemHeights=[];var M=this._items.length;
while(M--){this._storeItemHeight(this._items[M],false)}if(this._containerResizeDuration!==false){this._setElHeight(this._itemHeightsLookup[this._currentItem.getElementId()])
}else{this._setElHeight(this._itemHeights[0].height)}}if(this._toggleNav){this._toggleNav.resize()
}this.trigger(s.RESIZED,this)};u.enableKeyboard=function(){if(!this._enableArrowKeys){this._enableArrowKeys=true;
this._addKeyboardListener()}};u.disableKeyboard=function(){if(this._enableArrowKeys){this._enableArrowKeys=false;
d.offDown(x.ARROW_RIGHT,this._rightArrowFunc);d.offDown(x.ARROW_LEFT,this._leftArrowFunc)
}};u.enableTouch=function(){if(!this._touchSwipe){this._setUpSwiping(true,false)
}};u.disableTouch=function(){if(this._touchSwipe){this._touchSwipe.off(i.END,this._onSwipeEnd);
this._touchSwipe.destroy();this._touchSwipe=null}};u.enableDesktopSwipe=function(){if(!this._clickSwipe){this._setUpSwiping(false,true)
}};u.disableDesktopSwipe=function(){if(this._clickSwipe){this._clickSwipe.off(i.END,this._onSwipeEnd);
this._clickSwipe.destroy();this._clickSwipe=null}};u.enableCaptions=function(){if(!this._galleryWithCaptions){this._initCaptionsGallery(this._captionsContainer,this._captionsOptions)
}};u.disableCaptions=function(){if(this._galleryWithCaptions){this._galleryWithCaptions.destroy()
}};u.destroy=function(L){if(this._isAutoPlaying){this.stopAutoPlay()}if(this._componentsContainer){n(this._componentsContainer,"focus",this.stopAutoPlay,true);
n(this._componentsContainer,"touchend",this.stopAutoPlay,true);n(this._componentsContainer,"click",this.stopAutoPlay,true)
}if(this._resizeContainer){w.setStyle(this._el,{height:null,transition:null})}if(this._enableArrowKeys){d.offDown(x.ARROW_RIGHT,this._rightArrowFunc);
d.offDown(x.ARROW_LEFT,this._leftArrowFunc)}var K;if(this._previousButtons){K=this._previousButtons.length;
while(K--){n(this._previousButtons[K],"click",this._onPaddlePrevious)}this._setPaddleDisabledState(this._previousButtons,false)
}if(this._nextButtons){K=this._nextButtons.length;while(K--){n(this._nextButtons[K],"click",this._onPaddleNext)
}this._setPaddleDisabledState(this._nextButtons,false)}if(this._dynamicPaddleNav){this._el.removeChild(this._dynamicPaddleNav)
}if(this._hasPaddleNavStateHandler){this.off(t.UPDATE,this._updatePaddleNavState)
}this.disableTouch();this.disableDesktopSwipe();this.disableCaptions();if(this._toggleNav){this._toggleNav.destroy();
this._toggleNav=null}n(window,"resize",this._onWindowResize);this._el=null;this._itemHeights=null;
this._itemHeightsLookup=null;this._resizeContainer=null;this._isRightToLeft=null;
this._enableArrowKeys=null;this._previousButtons=null;this._onPaddlePrevious=null;
this._nextButtons=null;this._onPaddleNext=null;this._isACaptionsGallery=null;this._componentsContainer=null;
this._galleryWithCaptions=null;this._captionsContainer=null;this._captionsOptions=null;
return a.destroy.call(this,L)};u._getDeeplinkedItem=function(){var M=window.location.hash.substr(1);
var L;var K=this._items.length;while(K--){L=this._items[K];if(M===L.getElementId()){return L
}}return null};u._addItems=function(L){var Q;var K;var O=/(^\[).*(\]$)/.test(L);
if(O){L=L.replace(/\[|\]/g,"");K=q(L,this._el)}else{K=F(L,this._el)}var M=0;var P=K.length;
var N=this._isACaptionsGallery;for(M;M<P;M++){Q=new this._itemType(K[M],{isACaption:N});
this.addItem(Q);this._addItemTriggers(Q)}};u._createToggleNav=function(){var M=this._getElementId();
var K='[data-ac-gallery-togglenav="'+M+'"], [data-ac-gallery-tabnav="'+M+'"]';var L=g(K);
if(L){this._toggleNav=new v(L,this,{duration:this._toggleNavDuration})}};u._addItemTriggers=function(O,K){var M=E("data-ac-gallery-trigger",O.getElementId());
if(K&&K.length){M=M.concat(K)}var L=0;var N=M.length;for(L;L<N;L++){O.addElementTrigger(M[L]);
if(this._toggleNav){this._toggleNav.addTrigger(M[L],O)}}};u._addPaddleNav=function(O){var M;
var Q=this._getElementId();if(O){var N=(typeof O==="string")?O:C;N=N.replace(/%ID%/g,this._getElementId());
this._dynamicPaddleNav=document.createElement("div");this._dynamicPaddleNav.innerHTML=N;
this._el.insertBefore(this._dynamicPaddleNav,this._el.firstChild)}this._previousButtons=E("data-ac-gallery-previous-trigger",Q);
this._nextButtons=E("data-ac-gallery-next-trigger",Q);var K=this._el.getAttribute("aria-label")||"";
if(K.length){K="("+K+")"}this._onPaddlePrevious=this._onPaddleInteraction.bind(null,this.showPrevious);
M=this._previousButtons.length;if(M){var P=this._el.getAttribute("data-ac-gallery-previouslabel");
if(P&&K.length){if(this._isRightToLeft){P=K+" "+P}else{P+=" "+K}}while(M--){if(P&&this._previousButtons[M].getAttribute("aria-label")===null){this._previousButtons[M].setAttribute("aria-label",P)
}k(this._previousButtons[M],"click",this._onPaddlePrevious)}}this._onPaddleNext=this._onPaddleInteraction.bind(null,this.showNext);
M=this._nextButtons.length;if(M){var L=this._el.getAttribute("data-ac-gallery-nextlabel");
if(L&&K.length){if(this._isRightToLeft){L=K+" "+L}else{L+=" "+K}}while(M--){if(L&&this._nextButtons[M].getAttribute("aria-label")===null){this._nextButtons[M].setAttribute("aria-label",L)
}k(this._nextButtons[M],"click",this._onPaddleNext)}}if(this._nextButtons.length||this._previousButtons.length){this._hasPaddleNavStateHandler=true;
this._updatePaddleNavState=this._updatePaddleNavState.bind(this);this.on(t.UPDATE,this._updatePaddleNavState)
}};u._onPaddleInteraction=function(L,K){o(K);L.call(null,{interactionEvent:K})};
u._updatePaddleNavState=function(){if(!this._wrapAround){var K=this._items.indexOf(this._currentItem);
if(K===0&&this._previousButtons.length){this._setPaddleDisabledState(this._previousButtons,true);
this._setPaddleDisabledState(this._nextButtons,false)}else{if(K===this._items.length-1&&this._nextButtons.length){this._setPaddleDisabledState(this._nextButtons,true);
this._setPaddleDisabledState(this._previousButtons,false)}else{this._setPaddleDisabledState(this._previousButtons,false);
this._setPaddleDisabledState(this._nextButtons,false)}}}else{this._setPaddleDisabledState(this._previousButtons,false);
this._setPaddleDisabledState(this._nextButtons,false)}};u._setPaddleDisabledState=function(M,K){var L=M.length;
while(L--){M[L].disabled=K;if(K){c.add(M[L],B)}else{c.remove(M[L],B)}}};u._addKeyboardListener=function(){if(this._enableArrowKeys){this._onKeyboardInteraction=this._onKeyboardInteraction.bind(this);
var K;var L;if(this._isRightToLeft){K=this.showPrevious;L=this.showNext}else{K=this.showNext;
L=this.showPrevious}this._rightArrowFunc=j(this._onKeyboardInteraction.bind(null,K),this._keyboardThrottleDelay);
this._leftArrowFunc=j(this._onKeyboardInteraction.bind(null,L),this._keyboardThrottleDelay);
d.onDown(x.ARROW_RIGHT,this._rightArrowFunc);d.onDown(x.ARROW_LEFT,this._leftArrowFunc)
}};u._onKeyboardInteraction=function(M,L){if(this.isInView()&&!m()){var K=t.getAllInView();
if(K.length>1){K.sort(function(O,N){O=(O._enableArrowKeys)?O.getCurrentItem().percentageInView():0;
N=(N._enableArrowKeys)?N.getCurrentItem().percentageInView():0;return N-O});if(this!==K[0]){return
}}M.call(null,{interactionEvent:L})}};u._setUpSwiping=function(L,K){this._onSwipeEnd=this._onSwipeEnd.bind(this);
if(L){this._touchSwipe=new i(this._el,i.TOUCH_EVENTS);this._touchSwipe.on(i.END,this._onSwipeEnd)
}if(K){this._clickSwipe=new i(this._el,i.MOUSE_EVENTS);this._clickSwipe.on(i.END,this._onSwipeEnd)
}};u._onSwipeEnd=function(L){var P;var K=L.interactionEvent;var N=K.type!=="touchend"||K.type!=="touchstart"||K.type!=="touchmove";
if(N){var O={type:"touchmove",target:K.target,srcElement:K.srcElement}}var M={interactionEvent:O||K};
if(L.swipe===i.SWIPE_RIGHT){P=(this._isRightToLeft)?this.showNext:this.showPrevious
}else{if(L.swipe===i.SWIPE_LEFT){P=(this._isRightToLeft)?this.showPrevious:this.showNext
}}if(P){return P.call(this,M)}K=null;return null};u._getElementId=function(){if(this._elementId===undefined){this._elementId=this._el.getAttribute("id")
}return this._elementId};u._setUpContainerAutoResize=function(K){if(typeof K==="number"){this._containerResizeDuration=K
}else{if(K){this._containerResizeDuration=f}else{this._containerResizeDuration=false
}}if(this._containerResizeDuration!==false){this._resizeContainer=true;this._updateContainerSize=this._updateContainerSize.bind(this);
this.on(t.UPDATE,this._updateContainerSize)}};u._updateContainerSize=function(L){var K=this._itemHeightsLookup[L.incoming[0].getElementId()];
if(K){this._setElHeight(K,this._containerResizeDuration)}};u._storeItemHeight=function(L,M){var K=G(L.getElement());
this._itemHeights.push({item:L,height:K.height});this._itemHeightsLookup[L.getElementId()]=K.height;
this._itemHeights.sort(function(O,N){return N.height-O.height});if(M&&this._itemHeights[0].item===L){this._setElHeight(K.height)
}};u._setElHeight=function(K,M){var L={height:K+"px"};if(M){L.transition="height "+M+"s"
}else{L.transition=null}w.setStyle(this._el,L)};u._initCaptionsGallery=function(K,L){if(!K){return
}this._galleryWithCaptions=t.create(K,"fade",L?L:{crossFade:true});if(this._enableArrowKeys){this._galleryWithCaptions._enableArrowKeys=false
}this.on(t.UPDATE,function(M){var N=this.getItemIndex(M.incoming[0]);this._galleryWithCaptions.show(N)
}.bind(this))};u._onAutoPlayToNextItem=function(){if(this._isAutoPlaying){if(!z.isHidden&&this._currentItem.isInView()){if(this._cancelAutoPlayOnInteraction){this.off(t.UPDATE,this.stopAutoPlay)
}var K=this.showNext();if(K!==null){if(this._cancelAutoPlayOnInteraction){this.on(t.UPDATE,this.stopAutoPlay)
}setTimeout(this._onAutoPlayToNextItem.bind(this),this._autoPlayDelay)}}else{setTimeout(this._onAutoPlayToNextItem.bind(this),this._autoPlayDelay)
}}};u._onWindowResize=function(K){window.requestAnimationFrame(function(){if(this._el){this.resize()
}}.bind(this))};b.exports=s},{"../templates/paddlenav.js":188,"./../Gallery":168,"./../helpers/inputHasFocus":179,"./../helpers/selectElementFromDataAttributeValue":180,"./../helpers/selectElementThatHasDataAttribute":181,"./../navigation/ToggleNav":182,"@marcom/ac-classlist":8,"@marcom/ac-dom-events/addEventListener":17,"@marcom/ac-dom-events/preventDefault":20,"@marcom/ac-dom-events/removeEventListener":21,"@marcom/ac-dom-metrics/getContentDimensions":137,"@marcom/ac-dom-styles":41,"@marcom/ac-dom-traversal/querySelector":49,"@marcom/ac-dom-traversal/querySelectorAll":50,"@marcom/ac-feature/touchAvailable":132,"@marcom/ac-function/throttle":136,"@marcom/ac-keyboard":151,"@marcom/ac-keyboard/keyMap":153,"@marcom/ac-object/create":259,"@marcom/ac-page-visibility":269,"@marcom/ac-pointer-tracker":158,"@marcom/ac-polyfills/requestAnimationFrame":undefined}],173:[function(c,b,d){var h=c("./create");
var j=c("./../helpers/selectElementThatHasDataAttribute");var i=c("./../Gallery");
var a=i.FADE_SELECTOR.replace(/\[|\]/g,"");var g=i.SLIDE_SELECTOR.replace(/\[|\]/g,"");
b.exports=function f(l){l=l||{};var m=l.context||document.body;var n;var k;n=j(g,m);
k=n.length;while(k--){h(n[k],i.SLIDE,l)}n=j(a,m);k=n.length;while(k--){h(n[k],i.FADE,l)
}return i.getAll()}},{"./../Gallery":168,"./../helpers/selectElementThatHasDataAttribute":181,"./create":174}],174:[function(d,b,f){var i=d("./../fade/FadeGallery");
var k=d("./../Gallery");var c=d("./../slide/SlideGallery");var j="%TYPE% is not a supported gallery type and el has no gallery data attribute.";
var a=k.FADE_SELECTOR.replace(/\[|\]/g,"");var h=k.SLIDE_SELECTOR.replace(/\[|\]/g,"");
b.exports=function g(o,n,m){var l;if(typeof n==="string"){if(n===k.SLIDE){l=c}else{if(n===k.FADE){l=i
}}}if(l===undefined){if(o.getAttribute(h)!==null){l=c}else{if(o.getAttribute(a)!==null){l=i
}}}if(l===undefined){throw new Error(j.replace(/%TYPE%/g,n))}return new l(o,m)}
},{"./../Gallery":168,"./../fade/FadeGallery":175,"./../slide/SlideGallery":185}],175:[function(c,a,f){var j=c("@marcom/ac-object/clone");
var h=c("@marcom/ac-object/create");var d=c("./FadeItem");var b=c("./../auto/AutoGallery");
var k=0.5;function i(n,m){m=j(m)||{};m.itemType=m.itemType||d;this._fadeDuration=m.duration||k;
m.toggleNavDuration=(m.toggleNavDuration===undefined)?this._fadeDuration:m.toggleNavDuration;
this._crossFade=m.crossFade;this._zIndexCount=m.startZIndex||1;this._ease=m.ease;
if(m.resizeContainerOnUpdate===true){m.resizeContainerOnUpdate=this._fadeDuration
}this._onItemShowComplete=this._onItemShowComplete.bind(this);b.call(this,n,m);
if(this._currentItem){this._currentItem.fadeIn(0)}}i.RESIZED=b.RESIZED;i.UPDATE=b.UPDATE;
i.UPDATE_COMPLETE=b.UPDATE_COMPLETE;var l=b.prototype;var g=i.prototype=h(l);g.addItem=function(o,m){if(o.nodeType){o=new this._itemType(o)
}var n=l.addItem.call(this,o,m);if(o!==this._currentItem){o.fadeOut()}else{o.fadeIn(0)
}return n};g.destroy=function(m){var n=l.destroy.call(this,m);this._fadeDuration=null;
this._crossFade=null;this._zIndexCount=null;this._ease=null;this._onItemShowComplete=null;
return n};g._startAt=function(m){var n=this._items[m];if(n&&(this._currentItem!==n)){this._currentItem.fadeOut(0);
this._currentItem.hide();this._setCurrentItem(n);this._currentItem.show();this._currentItem.fadeIn(0);
this.trigger(i.UPDATE,this._items)}};g._onItemShowComplete=function(o){if(o&&o.target()!==this._currentItem.getElement()){if(!this._currentItem.isFading()){this._currentItem.fadeIn(this._fadeDuration,this._ease,++this._zIndexCount,this._onItemShowComplete)
}return}var n;var m=this._items.length;while(m--){n=this._items[m];if(n!==this._currentItem){n.fadeOut()
}}if(this._incomingOutgoingItems){this.trigger(i.UPDATE_COMPLETE,this._incomingOutgoingItems)
}};g._updateItems=function(n,m){if(m){return}if(this._crossFade){var o=(m)?null:this.trigger.bind(this,i.UPDATE_COMPLETE,n);
n.outgoing[0].fadeOut(this._fadeDuration*0.99,this._ease);n.incoming[0].fadeIn(this._fadeDuration,this._ease,++this._zIndexCount,o)
}else{this._incomingOutgoingItems=(m)?false:n;if(!n.outgoing[0].isFading()){n.incoming[0].fadeIn(this._fadeDuration,this._ease,++this._zIndexCount,this._onItemShowComplete)
}}n.outgoing[0].hide();n.incoming[0].show()};a.exports=i},{"./../auto/AutoGallery":172,"./FadeItem":176,"@marcom/ac-object/clone":258,"@marcom/ac-object/create":259}],176:[function(b,a,g){var k=b("@marcom/ac-dom-styles/setStyle");
var j=b("@marcom/ac-object/create");var f=b("@marcom/ac-solar/fade");var l=b("@marcom/ac-solar/fadeIn");
var i=b("@marcom/ac-solar/fadeOut");var d=b("./../Item");function c(o,n){d.call(this,o,n);
k(o,{position:"absolute"})}c.SELECTED=d.SELECTED;c.SHOW=d.SHOW;c.HIDE=d.HIDE;var m=d.prototype;
var h=c.prototype=j(m);h.fadeIn=function(n,o,q,p){if(n){k(this._el,{zIndex:q||1});
this._destroyCurrentClip();this._clip=f(this._el,0,1,n,{ease:o,onComplete:p})}else{l(this._el,0);
k(this._el,{zIndex:q||1})}};h.fadeOut=function(n,o){if(n){this._destroyCurrentClip();
this._clip=i(this._el,n,{ease:o})}else{i(this._el,0)}};h.isFading=function(){return !!(this._clip&&this._clip.playing())
};h.destroy=function(){k(this._el,{position:null,opacity:null,zIndex:null});m.destroy.call(this);
this._destroyCurrentClip();this._clip=null};h._destroyCurrentClip=function(){if(this.isFading()){this._clip.destroy()
}};a.exports=c},{"./../Item":169,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-object/create":259,"@marcom/ac-solar/fade":161,"@marcom/ac-solar/fadeIn":162,"@marcom/ac-solar/fadeOut":163}],177:[function(c,f,b){var d=c("@marcom/ac-object/create");
var g=c("@marcom/ac-object/extend");f.exports=function a(k){var i=this;var j=function(){i.apply(this,arguments)
};var h=d(this.prototype);j.prototype=g(h,k);g(j,this);return j}},{"@marcom/ac-object/create":259,"@marcom/ac-object/extend":261}],178:[function(d,f,c){var b=d("@marcom/ac-dom-styles/getStyle");
var a=d("@marcom/ac-dom-metrics/getContentDimensions");f.exports=function g(h){var i=b(h,"margin-right","margin-left");
return Math.round(a(h).width)+parseInt(i.marginRight,10)+parseInt(i.marginLeft,10)
}},{"@marcom/ac-dom-metrics/getContentDimensions":137,"@marcom/ac-dom-styles/getStyle":42}],179:[function(b,c,a){c.exports=function d(){var f=["input","select","textarea"];
return f.indexOf(document.activeElement.nodeName.toLowerCase())>-1}},{}],180:[function(c,f,b){var g=c("@marcom/ac-dom-traversal/querySelectorAll");
var a=function(i,n){var j;var m=document.getElementsByTagName("*");var h=0;var k=m.length;
var l=[];for(h;h<k;h++){j=m[h];if(j.getAttribute(i)!==null&&j.getAttribute(i).split(" ").indexOf(n)>-1){l[l.length]=j
}}return l};f.exports=function d(j,m){var l=g("["+j+'*="'+m+'"]');if(l.length===0&&document.documentMode===7){return a(j,m)
}var n=[];var i=0;var k=l.length;var h;for(i;i<k;i++){h=l[i].getAttribute(j);if(h===m){n.push(l[i])
}else{if(h&&h.length){h=h.split(" ");if(h.indexOf(m)>-1){n.push(l[i])}}}}return n
}},{"@marcom/ac-dom-traversal/querySelectorAll":50}],181:[function(c,d,b){var h=c("@marcom/ac-dom-traversal/querySelectorAll");
var f=c("@marcom/ac-dom-traversal/ancestors");var a=function(j,k){var l;var o=document.getElementsByTagName("*");
var i=0;var m=o.length;var n=[];for(i;i<m;i++){l=o[i];if(l.getAttribute(j)!==null&&(!k||f(l).indexOf(k)>-1)){n[n.length]=l
}}return n};d.exports=function g(i,j){j=j||document.body;var k=h("["+i+"]",j);if(k.length===0&&document.documentMode===7){return a(i,j)
}return k}},{"@marcom/ac-dom-traversal/ancestors":45,"@marcom/ac-dom-traversal/querySelectorAll":50}],182:[function(i,c,s){var g=i("@marcom/ac-dom-events/addEventListener");
var h=i("@marcom/ac-dom-events/removeEventListener");var m=i("@marcom/ac-dom-metrics/getDimensions");
var r=i("@marcom/ac-dom-metrics/getPosition");var f=i("@marcom/ac-dom-styles/getStyle");
var d=i("@marcom/ac-dom-styles/setStyle");var a=i("@marcom/ac-dom-traversal/ancestors");
var j=i("@marcom/ac-object/create");var q=i("@marcom/ac-solar/scrollX");var k=i("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var n=i("./../Gallery");var l=0.5;function p(v,t,u){u=u||{};this._el=v;this._isRightToLeft=(u.rightToLeft===undefined)?f(v,"direction").direction==="rtl":u.rightToLeft;
this._scrollType=this._scrollDirection();this._gallery=t;this._triggers={};this._ordered=[];
this._containerEl=this._el.children[0];this._slideDuration=(u.duration===undefined)?l:u.duration;
k.call(this)}var b=k.prototype;var o=p.prototype=j(b);o.start=function(){this._onWindowLoad=this._onWindowLoad.bind(this);
this._onGalleryUpdated=this._onGalleryUpdated.bind(this);this._gallery.on(n.UPDATE,this._onGalleryUpdated);
this.resize();g(window,"load",this._onWindowLoad)};o.addTrigger=function(u,v){if(this._triggers[v.getElementId()]!==undefined){return
}var t=a(u);if(t.indexOf(this._el)>-1){var w={el:u};this._triggers[v.getElementId()]=w;
this._ordered.push(w)}};o.resize=function(){if(!this._ordered.length){return}d(this._containerEl,{paddingLeft:null,paddingRight:null});
this._containerWidth=m(this._containerEl).width;this._width=m(this._el).width;this._viewCenter=Math.round(this._width*0.5);
var v=this._ordered.length;while(v--){this._setTriggerData(this._ordered[v])}this._ordered.sort(function(A,z){return A.left-z.left
});if(this._containerWidth>this._width){var x=this._ordered[0];var w=this._ordered[this._ordered.length-1];
var u=(this._width-x.width)*0.5;var y=(this._width-w.width)*0.5;d(this._containerEl,{paddingLeft:u+"px",paddingRight:y+"px"});
var t=this._triggers[this._gallery.getCurrentItem().getElementId()];if(t){this._centerNav(t)
}}};o.destroy=function(){this._gallery.off(n.UPDATE,this._onGalleryUpdated);h(window,"load",this._onWindowLoad);
d(this._containerEl,{paddingLeft:null,paddingRight:null});this._el=null;this._gallery=null;
this._triggers=null;this._ordered=null;this._containerEl=null;this._destroyCurrentClip();
this._clip=null;return b.destroy.call(this)};o._onWindowLoad=function(){h(window,"load",this._onWindowLoad);
this.resize()};o._setTriggerData=function(u){u.width=m(u.el).width;var t=r(u.el);
u.left=t.left;u.right=t.right;u.center=u.left+(u.width*0.5)};o._centerNav=function(t,v){this._setTriggerData(t);
this._width=m(this._el).width;this._viewCenter=Math.round(this._width*0.5);var u=Math.round(t.center-this._viewCenter);
if(this._isRightToLeft){if(this._scrollType!=="negative"){u=Math.abs(u)}if(this._scrollType==="default"){u=this._el.scrollWidth-this._el.clientWidth-u
}}this._destroyCurrentClip();if(v){this._clip=q(this._el,u,v)}else{this._el.scrollLeft=u
}};o._onGalleryUpdated=function(t){var u=this._triggers[t.incoming[0].getElementId()];
if(u){this._centerNav(u,this._slideDuration)}};o._destroyCurrentClip=function(){if(this._clip&&this._clip.playing()){this._clip.destroy()
}};o._scrollDirection=function(){var u="reverse";var t=document.createElement("div");
t.style.cssText="width:2px; height:1px; position:absolute; top:-1000px; overflow:scroll; font-size: 14px;";
t.style.direction="rtl";t.innerHTML="test";document.body.appendChild(t);if(t.scrollLeft>0){u="default"
}else{t.scrollLeft=1;if(t.scrollLeft===0){u="negative"}}document.body.removeChild(t);
return u};c.exports=p},{"./../Gallery":168,"@marcom/ac-dom-events/addEventListener":17,"@marcom/ac-dom-events/removeEventListener":21,"@marcom/ac-dom-metrics/getDimensions":138,"@marcom/ac-dom-metrics/getPosition":142,"@marcom/ac-dom-styles/getStyle":42,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-dom-traversal/ancestors":45,"@marcom/ac-event-emitter-micro":148,"@marcom/ac-object/create":259,"@marcom/ac-solar/scrollX":167}],183:[function(b,d,a){var c=b("./../analytics/AnalyticsManager");
d.exports=new c()},{"./../analytics/AnalyticsManager":171}],184:[function(c,d,b){var g=["input","select","textarea","button","object"];
var h=["href","tabindex","contenteditable"];var a=function(){this.focusableSelectors=g.concat(h.map(function(i){return(i==="href")?"a["+i+"]":"*["+i+"]"
})).join(",")};var f=a.prototype;f.isFocusable=function(k,i){var l=k.nodeName.toLowerCase();
var j=g.indexOf(l)>-1;if(l==="a"){return true}if(j){return !k.disabled}if(!k.contentEditable){return true
}i=i||k.tabIndex;return isNaN(i)};f.isTabbable=function(j){var i=j.getAttribute("tabindex");
if(!isNaN(i)){return(i>=0)}else{return this.isFocusable(j,i)}};f.getTabbable=function(n){var k=n.length;
var j=[];for(var m=0;m<k;m++){if(this.isTabbable(n[m])){j.push(n[m])}}return j};
d.exports=new a()},{}],185:[function(g,c,w){var d=g("@marcom/ac-classlist");var o=g("@marcom/ac-dom-styles");
var u=g("@marcom/ac-dom-traversal/querySelectorAll");var s=g("@marcom/ac-object/clone");
var i=g("@marcom/ac-object/create");var v=g("./../helpers/getElementFullWidth");
var m=g("@marcom/ac-solar/moveX");var t=g("./../helpers/selectElementFromDataAttributeValue");
var h=g("./../helpers/selectElementThatHasDataAttribute");var l=g("./../auto/AutoGallery");
var f=g("@marcom/ac-pointer-tracker").PointerTracker;var q=g("./SlideItem");var j=g("./SlideItemWrapper");
var a=0.5;var k=0.5;var r=true;function p(z,y){y=s(y)||{};y.itemType=y.itemType||q;
this._itemsPerSlide=y.itemsPerSlide||1;var x=y.deeplink!==false;y.deeplink=false;
this._slideDuration=(y.duration!==undefined)?y.duration:k;y.toggleNavDuration=(y.toggleNavDuration===undefined)?this._slideDuration:y.toggleNavDuration;
this._itemCenterPoint=(y.itemCenterPoint!==undefined)?y.itemCenterPoint:a;this._edgePullResistance=(y.edgePullResistance?y.edgePullResistance:r);
this._slideOptions={ease:y.ease};if(y.resizeContainerOnUpdate===true){y.resizeContainerOnUpdate=this._slideDuration
}y.touch=y.touch!==false;this._originalWrapAround=y.wrapAround||false;l.call(this,z,y);
if(x){var A=this._getDeeplinkedItem();if(A){if(this._currentItem!==A){this._currentItem.hide();
this._setCurrentItem(A);this._currentItem.show()}}}this._positionItems=this._positionItems.bind(this);
this._createContainer();if(this._items.length!==0){this._positionItems()}this._isInstantiated=true
}p.RESIZED=l.RESIZED;p.UPDATE=l.UPDATE;p.UPDATE_COMPLETE=l.UPDATE_COMPLETE;var b=l.prototype;
var n=p.prototype=i(b);n.addItem=function(z,x){if(z.nodeType){z=new this._itemType(z)
}var y=b.addItem.call(this,z,x);if(this._containerEl!==undefined){this._addItemToContainer(z);
this._positionItems()}this._updateWrapAround();return y};n.removeItem=function(A,y){if(this._containerEl&&A.getElement().parentElement===this._containerEl){var x=A.getOriginalParentElement();
if(x){x.appendChild(A.getElement())}else{if(typeof A.removeItems==="function"){A.removeItems();
y.destroyItem=true}}var z=b.removeItem.call(this,A,y);if(this._currentItem){this._positionItems(this._currentItem)
}this._updateWrapAround();return z}return b.removeItem.call(this,A,y)};n.resize=function(){this._positionItems();
this._snapToPosition(this._currentItem.position());return b.resize.call(this)};
n.destroy=function(y){this._destroyCurrentClip();this._clip=null;var x=this._items.length;
while(x--){this._items[x].off(q.CENTER_POINT_CHANGED,this._positionItems)}if(this._touchSwipe){this._touchSwipe.off(f.START,this._onSwipeStart);
this._touchSwipe.off(f.UPDATE,this._onSwipeUpdate)}if(this._clickSwipe){this._clickSwipe.off(f.START,this._onSwipeStart);
this._clickSwipe.off(f.UPDATE,this._onSwipeUpdate)}var A=this._el;var z=b.destroy.call(this,y);
A.removeChild(this._containerEl);this._containerEl=null;this._slideDuration=null;
this._itemCenterPoint=null;this._positionItems=null;this._slideOptions=null;return z
};n._addItems=function(A){if(this._itemsPerSlide>1){var F;var z=/(^\[).*(\]$)/.test(A);
if(z){F=h(A.replace(/\[|\]/g,""),this._el)}else{F=u(A,this._el)}var x;var E;var B;
var C=0;var D=0;var y=F.length;for(D;D<y;D++){if(C===0){x=new j()}x.addItem(F[D]);
B=F[D].getAttribute("id");if(B){E=t("data-ac-gallery-trigger",B);this._addItemTriggers(x,E)
}if(++C===this._itemsPerSlide||D===y-1){C=0;x.resize();this.addItem(x)}}}else{b._addItems.call(this,A)
}};n._createContainer=function(){this._containerEl=document.createElement("div");
d.add(this._containerEl,"ac-gallery-slidecontainer");o.setStyle(this._containerEl,{position:"absolute",left:"0",top:"0",width:"100%",height:"100%"});
this._el.appendChild(this._containerEl);var x=0;var y=this._items.length;for(x;
x<y;x++){this._addItemToContainer(this._items[x])}};n._addItemToContainer=function(x){this._containerEl.appendChild(x.getElement());
x.on(q.CENTER_POINT_CHANGED,this._positionItems)};n._positionItems=function(B){B=B||this._currentItem;
var F=this._items;if(this._wrapAround){F=this._shuffleItems()}var H=(this._getActualPositionX()-B.position())||0;
var G=parseInt(o.getStyle(this._el,"width").width,10);var y=0;var D=0;var A=F.length;
var I;var z;var x;var C;var E;for(D;D<A;D++){I=F[D];I.resize();z=I.getElement();
o.setStyle(z,{left:y+"px"});x=v(z);C=G-x;E=(I.centerPoint&&I.centerPoint()!==null)?I.centerPoint():this._itemCenterPoint;
I.position((y*-1)+(C*E));if(this._isRightToLeft){y-=x}else{y+=x}}y=B.position()+H;
this._snapToPosition(y)};n._getActualPositionX=function(){var y=o.getStyle(this._containerEl,"transform").transform;
if(!y||y==="none"){var z=o.getStyle(this._containerEl,"left").left;return parseInt(z,10)
}else{if(y===this._transformStyles&&this._actualPositionX!==undefined){return this._actualPositionX
}}this._transformStyles=y;var x=this._transformStyles.split(",");this._actualPositionX=x[4]||this._currentItem.position();
return this._actualPositionX*1};n._snapToPosition=function(x){this._destroyCurrentClip();
this._positionX=x;o.setStyle(this._containerEl,{transition:"transform 0s, left 0s"});
m(this._containerEl,x,0,this._slideOptions)};n._slideToPosition=function(x,y,z){this._positionX=x;
this._clip=m(this._containerEl,x,y,{ease:this._slideOptions.ease,onComplete:z})
};n._setUpSwiping=function(y,x){var z=b._setUpSwiping.call(this,y,x);this._onSwipeStart=this._onSwipeStart.bind(this);
this._onSwipeUpdate=this._onSwipeUpdate.bind(this);if(this._touchSwipe){this._touchSwipe.on(f.START,this._onSwipeStart);
this._touchSwipe.on(f.UPDATE,this._onSwipeUpdate)}if(this._clickSwipe){this._clickSwipe.on(f.START,this._onSwipeStart);
this._clickSwipe.on(f.UPDATE,this._onSwipeUpdate)}return z};n._onSwipeStart=function(x){if(this._clip&&this._clip.playing()){this._destroyCurrentClip();
this._positionX=this._getActualPositionX()}};n._onSwipeUpdate=function(x){this._destroyCurrentClip();
var z=this.getItems().slice(-1)[0].position();var A=this._positionX>0||this._positionX<z;
var y=x.diffX;if(this._edgePullResistance&&!this._wrapAround&&A){y*=0.5}this._snapToPosition(this._positionX-y)
};n._onSwipeEnd=function(x){var y=b._onSwipeEnd.call(this,x);if(y===null){y=this.show(this._currentItem,{interactionEvent:x.interactionEvent})
}return y};n._shuffleItems=function(){var B=this._items.length===2&&!this._isAutoPlaying;
if(B){return this._items.slice()}var E=this._items.length;var y=this._items.indexOf(this._currentItem);
var D=Math.floor(E*0.5);var A;var x;var z;if(y<D){A=D-y;var C=E-A;x=this._items.slice(C);
z=this._items.slice(0,C);return x.concat(z)}else{if(y>D){A=y-D;x=this._items.slice(0,A);
z=this._items.slice(A);return z.concat(x)}}return this._items};n._updateItems=function(y,x){this._destroyCurrentClip();
if(this._wrapAround){this._positionItems(y.outgoing[0])}if(this.getItemIndex(y.outgoing[0])>-1){var A=(x)?null:this.trigger.bind(this,p.UPDATE_COMPLETE,y);
var z=this._slideDuration;this._slideToPosition(y.incoming[0].position(),z,A);if(y.incoming[0]!==y.outgoing[0]){y.incoming[0].show();
y.outgoing[0].hide()}}else{this._slideToPosition(this._currentItem.position(),this._slideDuration);
y.incoming[0].show();if(!x){this.trigger(p.UPDATE_COMPLETE,y)}}};n._updateWrapAround=function(){if(this._items.length<=2){this._wrapAround=false
}else{if(this._originalWrapAround){this._wrapAround=this._originalWrapAround}}if(this._isInstantiated&&(this._previousButtons||this._nextButtons)){this._updatePaddleNavState()
}};n._destroyCurrentClip=function(){if(this._clip&&this._clip.playing()){this._clip.destroy()
}};c.exports=p},{"./../auto/AutoGallery":172,"./../helpers/getElementFullWidth":178,"./../helpers/selectElementFromDataAttributeValue":180,"./../helpers/selectElementThatHasDataAttribute":181,"./SlideItem":186,"./SlideItemWrapper":187,"@marcom/ac-classlist":8,"@marcom/ac-dom-styles":41,"@marcom/ac-dom-traversal/querySelectorAll":50,"@marcom/ac-object/clone":258,"@marcom/ac-object/create":259,"@marcom/ac-pointer-tracker":158,"@marcom/ac-solar/moveX":165}],186:[function(b,a,d){var h=b("@marcom/ac-dom-styles/setStyle");
var g=b("@marcom/ac-object/create");var c=b("./../Item");function i(l,k){c.call(this,l,k);
h(l,{position:"absolute",transform:{translateZ:0}});this._parentElement=l.parentElement
}i.CENTER_POINT_CHANGED="centerpointchanged";i.SELECTED=c.SELECTED;i.SHOW=c.SHOW;
i.HIDE=c.HIDE;var j=c.prototype;var f=i.prototype=g(j);f.position=function(k){if(k!==undefined){this._position=k
}return this._position||0};f.centerPoint=function(k){if(k!==undefined){this._centerPoint=k;
this.trigger(i.CENTER_POINT_CHANGED)}return(this._centerPoint!==undefined)?this._centerPoint:null
};f.getOriginalParentElement=function(){return this._parentElement};f.resize=function(){};
f.destroy=function(){h(this._el,{position:null,left:null,transform:null});j.destroy.call(this)
};a.exports=i},{"./../Item":169,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-object/create":259}],187:[function(g,d,h){var n=g("@marcom/ac-classlist");
var k=g("@marcom/ac-dom-styles/setStyle");var c=g("@marcom/ac-dom-traversal/querySelectorAll");
var j=g("@marcom/ac-object/create");var o=g("./../singletons/tabManager");var a=g("./../helpers/getElementFullWidth");
var l=g("./SlideItem");var b="ac-gallery-slideitemwrapper";function f(){l.call(this,document.createElement("div"));
this._items=[];this._currentWidth=0;n.add(this._el,b)}var m=l.prototype;var i=f.prototype=j(m);
i.addItem=function(r){this._items.push({el:r,parentElement:r.parentElement});this._el.appendChild(r);
var p=r.getAttribute("id");if(p){var s=this._el.getAttribute("id")||"";var q=(s.length)?"-":"";
s+=q+p;this._el.setAttribute("id",s)}this._focusableEls=this._focusableEls.concat(c(o.focusableSelectors,r))
};i.removeItems=function(){var r;var p;var q=0;var s=this._items.length;for(q;q<s;
q++){r=this._items[q].el;k(r,{position:null,left:null});p=this._items[q].parentElement;
if(p){p.appendChild(r)}}};i.resize=function(){this._currentWidth=0;var q;var p=0;
var r=this._items.length;for(p;p<r;p++){q=this._items[p].el;k(q,{position:"absolute",left:this._currentWidth+"px"});
this._currentWidth+=a(q)}k(this._el,{width:this._currentWidth+"px"})};i.destroy=function(){this.removeItems();
this._items=null;this._currentWidth=null;var p=this._el.parentElement;if(p){p.removeChild(this._el)
}m.destroy.call(this)};d.exports=f},{"./../helpers/getElementFullWidth":178,"./../singletons/tabManager":184,"./SlideItem":186,"@marcom/ac-classlist":8,"@marcom/ac-dom-styles/setStyle":44,"@marcom/ac-dom-traversal/querySelectorAll":50,"@marcom/ac-object/create":259}],188:[function(b,c,a){var d="";
d+='<nav class="paddlenav">';d+="<ul>";d+='<li><button class="paddlenav-arrow paddlenav-arrow-previous" data-ac-gallery-previous-trigger="%ID%"></button></li>';
d+='<li><button class="paddlenav-arrow paddlenav-arrow-next" data-ac-gallery-next-trigger="%ID%"></button></li>';
d+="</ul>";d+="</nav>";c.exports=d},{}],189:[function(b,c,a){c.exports={GPUReporter:b("./ac-gpu-reporter/GPUReporter")}
},{"./ac-gpu-reporter/GPUReporter":190}],190:[function(d,f,c){var b=d("@marcom/ac-feature/webGLAvailable");
var a=d("./defaults");function g(){}var h=g.prototype;h.BLACKLISTED=1;h.WHITELISTED=2;
h.NOT_LISTED=4;h.NOT_FOUND=8;h.NO_WEBGL=16;h.getGPUClass=function(j){var i;var k=this._extendLists(j);
if(b()){i=this.getGPU();if(i!==null){if(this._matchesList(i,k.whitelist)){return this.WHITELISTED
}else{if(this._matchesList(i,k.blacklist)){return this.BLACKLISTED}else{return this.NOT_LISTED
}}}else{return this.NOT_FOUND}}else{return this.NO_WEBGL}};h.getGPU=function(){var i,j,k;
i=document.createElement("canvas");j=i.getContext("webgl")||i.getContext("experimental-webgl")||i.getContext("moz-webgl");
if(j){k=j.getExtension("WEBGL_debug_renderer_info");if(k!==null){return j.getParameter(k.UNMASKED_RENDERER_WEBGL)
}return j.getParameter(j.VERSION)}return null};h._matchesList=function(k,l){var j;
for(j=0;j<l.length;j++){if(this._matchesEntry(k,l[j])){return true}}return false
};h._matchesEntry=function(l,n){var o=l.toLowerCase();var j=n.toLowerCase().split(" ");
var m=true;var k;for(k=0;k<j.length;k++){if(o.indexOf(j[k])===-1){m=false}}return m
};h._extendLists=function(k){var j;var l=JSON.parse(JSON.stringify(a));if(k!==undefined){if(k.blacklist!==undefined&&k.blacklist.length>0){for(j=0;
j<k.blacklist.length;j++){l.blacklist.push(k.blacklist[j])}}if(k.whitelist!==undefined&&k.whitelist.length>0){for(j=0;
j<k.whitelist.length;j++){l.whitelist.push(k.whitelist[j])}}}return l};f.exports=g
},{"./defaults":191,"@marcom/ac-feature/webGLAvailable":133}],191:[function(b,c,a){c.exports={blacklist:["Intel HD Graphics 5300","AMD Radeon R5 Graphics","Apple A7 GPU"],whitelist:["Radeon FirePro D700","GeForce GT 750 M","Apple A8 GPU","Apple A9 GPU","Apple A9X GPU"]}
},{}],192:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.6.0
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine.plugin({propName:"attr",API:2,version:"0.6.0",init:function(l,j,i,h){var k,g;
if(typeof(l.setAttribute)!=="function"){return false}for(k in j){g=j[k];if(typeof(g)==="function"){g=g(h,l)
}this._addTween(l,"setAttribute",l.getAttribute(k)+"",g+"",k,false,k);this._overwriteProps.push(k)
}return true}})});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("AttrPlugin"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],193:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.3.7
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var w=180/Math.PI,s=[],q=[],o=[],u={},m=d._gsDefine.globals,k=function(y,p,A,z){if(A===z){A=z-(z-p)/1000000
}if(y===p){p=y+(A-y)/1000000}this.a=y;this.b=p;this.c=A;this.d=z;this.da=z-y;this.ca=A-y;
this.ba=p-y},i=",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,",l=function(J,I,H,F){var D={a:J},C={},B={},A={c:F},G=(J+I)/2,z=(I+H)/2,K=(H+F)/2,y=(G+z)/2,p=(z+K)/2,E=(p-y)/8;
D.b=G+(J-G)/4;C.b=y+E;D.c=C.a=(D.b+C.b)/2;C.c=B.a=(y+p)/2;B.b=p-E;A.b=K+(F-K)/4;
B.c=A.a=(B.b+A.b)/2;return[D,C,B,A]},h=function(R,G,H,D,C){var J=R.length-1,I=0,Q=R[0].a,M,B,A,y,O,z,p,N,P,F,L,K,E;
for(M=0;M<J;M++){O=R[I];B=O.a;A=O.d;y=R[I+1].d;if(C){L=s[M];K=q[M];E=((K+L)*G*0.25)/(D?0.5:o[M]||0.5);
z=A-(A-B)*(D?G*0.5:(L!==0?E/L:0));p=A+(y-A)*(D?G*0.5:(K!==0?E/K:0));N=A-(z+(((p-z)*((L*3/(L+K))+0.5)/4)||0))
}else{z=A-(A-B)*G*0.5;p=A+(y-A)*G*0.5;N=A-(z+p)/2}z+=N;p+=N;O.c=P=z;if(M!==0){O.b=Q
}else{O.b=Q=O.a+(O.c-O.a)*0.6}O.da=A-B;O.ca=P-B;O.ba=Q-B;if(H){F=l(B,Q,P,A);R.splice(I,1,F[0],F[1],F[2],F[3]);
I+=4}else{I++}Q=p}O=R[I];O.b=Q;O.c=Q+(O.d-Q)*0.4;O.da=O.d-O.a;O.ca=O.c-O.a;O.ba=Q-O.a;
if(H){F=l(O.a,Q,O.c,O.d);R.splice(I,1,F[0],F[1],F[2],F[3])}},v=function(G,y,z,I){var D=[],A,C,H,F,E,B;
if(I){G=[I].concat(G);C=G.length;while(--C>-1){if(typeof((B=G[C][y]))==="string"){if(B.charAt(1)==="="){G[C][y]=I[y]+Number(B.charAt(0)+B.substr(2))
}}}}A=G.length-2;if(A<0){D[0]=new k(G[0][y],0,0,G[0][y]);return D}for(C=0;C<A;C++){H=G[C][y];
F=G[C+1][y];D[C]=new k(H,0,0,F);if(z){E=G[C+2][y];s[C]=(s[C]||0)+(F-H)*(F-H);q[C]=(q[C]||0)+(E-F)*(E-F)
}}D[C]=new k(G[C][y],0,0,G[C+1][y]);return D},r=function(N,z,G,E,B,O){var I={},K=[],J=O||N[0],H,A,L,F,y,D,C,M;
B=(typeof(B)==="string")?","+B+",":i;if(z==null){z=1}for(A in N[0]){K.push(A)}if(N.length>1){M=N[N.length-1];
C=true;H=K.length;while(--H>-1){A=K[H];if(Math.abs(J[A]-M[A])>0.05){C=false;break
}}if(C){N=N.concat();if(O){N.unshift(O)}N.push(N[1]);O=N[N.length-3]}}s.length=q.length=o.length=0;
H=K.length;while(--H>-1){A=K[H];u[A]=(B.indexOf(","+A+",")!==-1);I[A]=v(N,A,u[A],O)
}H=s.length;while(--H>-1){s[H]=Math.sqrt(s[H]);q[H]=Math.sqrt(q[H])}if(!E){H=K.length;
while(--H>-1){if(u[A]){L=I[K[H]];D=L.length-1;for(F=0;F<D;F++){y=(L[F+1].da/q[F]+L[F].da/s[F])||0;
o[F]=(o[F]||0)+y*y}}}H=o.length;while(--H>-1){o[H]=Math.sqrt(o[H])}}H=K.length;
F=G?4:1;while(--H>-1){A=K[H];L=I[A];h(L,z,G,E,u[A]);if(C){L.splice(0,F);L.splice(L.length-F,F)
}}return I},t=function(y,B,P){B=B||"soft";var D={},C=(B==="cubic")?3:2,J=(B==="soft"),A=[],O,N,M,K,z,I,G,F,E,H,L;
if(J&&P){y=[P].concat(y)}if(y==null||y.length<C+1){throw"invalid Bezier data"}for(E in y[0]){A.push(E)
}I=A.length;while(--I>-1){E=A[I];D[E]=z=[];H=0;F=y.length;for(G=0;G<F;G++){O=(P==null)?y[G][E]:(typeof((L=y[G][E]))==="string"&&L.charAt(1)==="=")?P[E]+Number(L.charAt(0)+L.substr(2)):Number(L);
if(J){if(G>1){if(G<F-1){z[H++]=(O+z[H-2])/2}}}z[H++]=O}F=H-C+1;H=0;for(G=0;G<F;
G+=C){O=z[G];N=z[G+1];M=z[G+2];K=(C===2)?0:z[G+3];z[H++]=L=(C===3)?new k(O,N,M,K):new k(O,(2*N+O)/3,(2*N+M)/3,M)
}z.length=H}return D},x=function(K,J,B){var A=1/B,D=K.length,H,y,N,M,C,I,z,F,E,L,G;
while(--D>-1){L=K[D];N=L.a;M=L.d-N;C=L.c-N;I=L.b-N;H=y=0;for(F=1;F<=B;F++){z=A*F;
E=1-z;H=y-(y=(z*z*M+3*E*(z*C+E*I))*z);G=D*B+F-1;J[G]=(J[G]||0)+H*H}}},n=function(D,B){B=B>>0||6;
var K=[],A=[],I=0,J=0,F=B-1,E=[],H=[],y,C,z,G;for(y in D){x(D[y],K,B)}z=K.length;
for(C=0;C<z;C++){I+=Math.sqrt(K[C]);G=C%B;H[G]=I;if(G===F){J+=I;G=(C/B)>>0;E[G]=H;
A[G]=J;I=0;H=[]}}return{length:J,lengths:A,segments:E}},g=d._gsDefine.plugin({propName:"bezier",priority:-1,version:"1.3.7",API:2,global:true,init:function(F,G,J){this._target=F;
if(G instanceof Array){G={values:G}}this._func={};this._mod={};this._props=[];this._timeRes=(G.timeResolution==null)?6:parseInt(G.timeResolution,10);
var I=G.values||[],E={},A=I[0],B=G.autoRotate||J.vars.orientToBezier,z,H,D,C,K;
this._autoRotate=B?(B instanceof Array)?B:[["x","y","rotation",((B===true)?0:Number(B)||0)]]:null;
for(z in A){this._props.push(z)}D=this._props.length;while(--D>-1){z=this._props[D];
this._overwriteProps.push(z);H=this._func[z]=(typeof(F[z])==="function");E[z]=(!H)?parseFloat(F[z]):F[((z.indexOf("set")||typeof(F["get"+z.substr(3)])!=="function")?z:"get"+z.substr(3))]();
if(!K){if(E[z]!==I[0][z]){K=E}}}this._beziers=(G.type!=="cubic"&&G.type!=="quadratic"&&G.type!=="soft")?r(I,isNaN(G.curviness)?1:G.curviness,false,(G.type==="thruBasic"),G.correlate,K):t(I,G.type,E);
this._segCount=this._beziers[z].length;if(this._timeRes){var y=n(this._beziers,this._timeRes);
this._length=y.length;this._lengths=y.lengths;this._segments=y.segments;this._l1=this._li=this._s1=this._si=0;
this._l2=this._lengths[0];this._curSeg=this._segments[0];this._s2=this._curSeg[0];
this._prec=1/this._curSeg.length}if((B=this._autoRotate)){this._initialRotations=[];
if(!(B[0] instanceof Array)){this._autoRotate=B=[B]}D=B.length;while(--D>-1){for(C=0;
C<3;C++){z=B[D][C];this._func[z]=(typeof(F[z])==="function")?F[((z.indexOf("set")||typeof(F["get"+z.substr(3)])!=="function")?z:"get"+z.substr(3))]:false
}z=B[D][2];this._initialRotations[D]=(this._func[z]?this._func[z].call(this._target):this._target[z])||0;
this._overwriteProps.push(z)}}this._startRatio=J.vars.runBackwards?1:0;return true
},set:function(I){var N=this._segCount,E=this._func,T=this._target,y=(I!==this._startRatio),H,z,P,M,S,J,U,O,D,G;
if(!this._timeRes){H=(I<0)?0:(I>=1)?N-1:(N*I)>>0;J=(I-(H*(1/N)))*N}else{D=this._lengths;
G=this._curSeg;I*=this._length;P=this._li;if(I>this._l2&&P<N-1){O=N-1;while(P<O&&(this._l2=D[++P])<=I){}this._l1=D[P-1];
this._li=P;this._curSeg=G=this._segments[P];this._s2=G[(this._s1=this._si=0)]}else{if(I<this._l1&&P>0){while(P>0&&(this._l1=D[--P])>=I){}if(P===0&&I<this._l1){this._l1=0
}else{P++}this._l2=D[P];this._li=P;this._curSeg=G=this._segments[P];this._s1=G[(this._si=G.length-1)-1]||0;
this._s2=G[this._si]}}H=P;I-=this._l1;P=this._si;if(I>this._s2&&P<G.length-1){O=G.length-1;
while(P<O&&(this._s2=G[++P])<=I){}this._s1=G[P-1];this._si=P}else{if(I<this._s1&&P>0){while(P>0&&(this._s1=G[--P])>=I){}if(P===0&&I<this._s1){this._s1=0
}else{P++}this._s2=G[P];this._si=P}}J=((P+(I-this._s1)/(this._s2-this._s1))*this._prec)||0
}z=1-J;P=this._props.length;while(--P>-1){M=this._props[P];S=this._beziers[M][H];
U=(J*J*S.da+3*z*(J*S.ca+z*S.ba))*J+S.a;if(this._mod[M]){U=this._mod[M](U,T)}if(E[M]){T[M](U)
}else{T[M]=U}}if(this._autoRotate){var L=this._autoRotate,F,R,C,Q,B,K,A;P=L.length;
while(--P>-1){M=L[P][2];K=L[P][3]||0;A=(L[P][4]===true)?1:w;S=this._beziers[L[P][0]];
F=this._beziers[L[P][1]];if(S&&F){S=S[H];F=F[H];R=S.a+(S.b-S.a)*J;Q=S.b+(S.c-S.b)*J;
R+=(Q-R)*J;Q+=((S.c+(S.d-S.c)*J)-Q)*J;C=F.a+(F.b-F.a)*J;B=F.b+(F.c-F.b)*J;C+=(B-C)*J;
B+=((F.c+(F.d-F.c)*J)-B)*J;U=y?Math.atan2(B-C,Q-R)*A+K:this._initialRotations[P];
if(this._mod[M]){U=this._mod[M](U,T)}if(E[M]){T[M](U)}else{T[M]=U}}}}}}),j=g.prototype;
g.bezierThrough=r;g.cubicToQuadratic=l;g._autoCSS=true;g.quadraticToCubic=function(y,p,z){return new k(y,(2*p+y)/3,(2*p+z)/3,z)
};g._cssRegister=function(){var z=m.CSSPlugin;if(!z){return}var p=z._internals,A=p._parseToProxy,y=p._setPluginRatio,B=p.CSSPropTween;
p._registerComplexSpecialProp("bezier",{parser:function(N,K,C,F,O,J){if(K instanceof Array){K={values:K}
}J=new g();var M=K.values,G=M.length-1,E=[],L={},I,D,H;if(G<0){return O}for(I=0;
I<=G;I++){H=A(N,M[I],F,O,J,(G!==I));E[I]=H.end}for(D in K){L[D]=K[D]}L.values=E;
O=new B(N,"bezier",0,0,H.pt,2);O.data=H;O.plugin=J;O.setRatio=y;if(L.autoRotate===0){L.autoRotate=true
}if(L.autoRotate&&!(L.autoRotate instanceof Array)){I=(L.autoRotate===true)?0:Number(L.autoRotate);
L.autoRotate=(H.end.left!=null)?[["left","top","rotation",I,false]]:(H.end.x!=null)?[["x","y","rotation",I,false]]:false
}if(L.autoRotate){if(!F._transform){F._enableTransforms(false)}H.autoRotate=F._target._gsTransform;
H.proxy.rotation=H.autoRotate.rotation||0;F._overwriteProps.push("rotation")}J._onInitTween(H.proxy,L,F._tween);
return O}})};j._mod=function(y){var A=this._overwriteProps,p=A.length,z;while(--p>-1){z=y[A[p]];
if(z&&typeof(z)==="function"){this._mod[A[p]]=z}}};j._kill=function(B){var y=this._props,A,z;
for(A in this._beziers){if(A in B){delete this._beziers[A];delete this._func[A];
z=y.length;while(--z>-1){if(y[z]===A){y.splice(z,1)}}}}y=this._autoRotate;if(y){z=y.length;
while(--z>-1){if(B[y[z][2]]){y.splice(z,1)}}}return this._super._kill.call(this,B)
}});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("BezierPlugin"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],194:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.19.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("plugins.CSSPlugin",["plugins.TweenPlugin","TweenLite"],function(L,y){var aL=function(){L.call(this,"css");
this._overwriteProps.length=0;this.setRatio=aL.prototype.setRatio},C=d._gsDefine.globals,aJ,g,W,a9,h={},ad=aL.prototype=new L("css");
ad.constructor=aL;aL.version="1.19.1";aL.API=2;aL.defaultTransformPerspective=0;
aL.defaultSkewType="compensated";aL.defaultSmoothOrigin=true;ad="px";aL.suffixMap={top:ad,right:ad,bottom:ad,left:ad,width:ad,height:ad,fontSize:ad,padding:ad,margin:ad,perspective:ad,lineHeight:""};
var aY=/(?:\-|\.|\b)(\d|\.|e\-)+/g,E=/(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,aD=/(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,aV=/(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,aw=/(?:\d|\-|\+|=|#|\.)*/g,aR=/opacity *= *([^)]*)/i,t=/opacity:([^;]*)/i,au=/alpha\(opacity *=.+?\)/i,ag=/^(rgb|hsl)/,am=/([A-Z])/g,m=/-([a-z])/gi,ah=/(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,aE=function(i,p){return p.toUpperCase()
},H=/(?:Left|Right|Width)/i,at=/(M11|M12|M21|M22)=[\d\-\.e]+/gi,R=/progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,F=/,(?=[^\)]*(?:\(|$))/gi,an=/[\s,\(]/i,ac=Math.PI/180,aN=180/Math.PI,bc={},T={style:{}},a1=d.document||{createElement:function(){return T
}},a4=function(p,i){return a1.createElementNS?a1.createElementNS(i||"http://www.w3.org/1999/xhtml",p):a1.createElement(p)
},ba=a4("div"),G=a4("img"),s=aL._internals={_specialProps:h},aB=(d.navigator||{}).userAgent||"",K,aM,O,S,u,Z,af=(function(){var bd=aB.indexOf("Android"),p=a4("a");
O=(aB.indexOf("Safari")!==-1&&aB.indexOf("Chrome")===-1&&(bd===-1||parseFloat(aB.substr(bd+8,2))>3));
u=(O&&(parseFloat(aB.substr(aB.indexOf("Version/")+8,2))<6));S=(aB.indexOf("Firefox")!==-1);
if((/MSIE ([0-9]{1,}[\.0-9]{0,})/).exec(aB)||(/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/).exec(aB)){Z=parseFloat(RegExp.$1)
}if(!p){return false}p.style.cssText="top:1px;opacity:.55;";return/^0.55/.test(p.style.opacity)
}()),ax=function(i){return(aR.test(((typeof(i)==="string")?i:(i.currentStyle?i.currentStyle.filter:i.style.filter)||""))?(parseFloat(RegExp.$1)/100):1)
},az=function(i){if(d.console){console.log(i)}},aI,aT,z="",a3="",X=function(bh,bg){bg=bg||ba;
var bf=bg.style,bd,be;if(bf[bh]!==undefined){return bh}bh=bh.charAt(0).toUpperCase()+bh.substr(1);
bd=["O","Moz","ms","Ms","Webkit"];be=5;while(--be>-1&&bf[bd[be]+bh]===undefined){}if(be>=0){a3=(be===3)?"ms":bd[be];
z="-"+a3.toLowerCase()+"-";return a3+bh}return null},aQ=a1.defaultView?a1.defaultView.getComputedStyle:function(){},I=aL.getStyle=function(bd,bg,be,i,bf){var bh;
if(!af){if(bg==="opacity"){return ax(bd)}}if(!i&&bd.style[bg]){bh=bd.style[bg]}else{if((be=be||aQ(bd))){bh=be[bg]||be.getPropertyValue(bg)||be.getPropertyValue(bg.replace(am,"-$1").toLowerCase())
}else{if(bd.currentStyle){bh=bd.currentStyle[bg]}}}return(bf!=null&&(!bh||bh==="none"||bh==="auto"||bh==="auto auto"))?bf:bh
},N=s.convertToPixels=function(bo,bf,bm,bj,bd){if(bj==="px"||!bj){return bm}if(bj==="auto"||!bm){return 0
}var bn=H.test(bf),bh=bo,be=ba.style,bi=(bm<0),bk=(bm===1),bl,i,bg;if(bi){bm=-bm
}if(bk){bm*=100}if(bj==="%"&&bf.indexOf("border")!==-1){bl=(bm/100)*(bn?bo.clientWidth:bo.clientHeight)
}else{be.cssText="border:0 solid red;position:"+I(bo,"position")+";line-height:0;";
if(bj==="%"||!bh.appendChild||bj.charAt(0)==="v"||bj==="rem"){bh=bo.parentNode||a1.body;
i=bh._gsCache;bg=y.ticker.frame;if(i&&bn&&i.time===bg){return i.width*bm/100}be[(bn?"width":"height")]=bm+bj
}else{be[(bn?"borderLeftWidth":"borderTopWidth")]=bm+bj}bh.appendChild(ba);bl=parseFloat(ba[(bn?"offsetWidth":"offsetHeight")]);
bh.removeChild(ba);if(bn&&bj==="%"&&aL.cacheWidths!==false){i=bh._gsCache=bh._gsCache||{};
i.time=bg;i.width=bl/bm*100}if(bl===0&&!bd){bl=N(bo,bf,bm,bj,true)}}if(bk){bl/=100
}return bi?-bl:bl},l=s.calculateOffset=function(bd,bg,be){if(I(bd,"position",be)!=="absolute"){return 0
}var bf=((bg==="left")?"Left":"Top"),i=I(bd,"margin"+bf,be);return bd["offset"+bf]-(N(bd,bg,parseFloat(i),i.replace(aw,""))||0)
},aK=function(be,bg){var bf={},bd,bh,bi;if((bg=bg||aQ(be,null))){if((bd=bg.length)){while(--bd>-1){bi=bg[bd];
if(bi.indexOf("-transform")===-1||aF===bi){bf[bi.replace(m,aE)]=bg.getPropertyValue(bi)
}}}else{for(bd in bg){if(bd.indexOf("Transform")===-1||aX===bd){bf[bd]=bg[bd]}}}}else{if((bg=be.currentStyle||be.style)){for(bd in bg){if(typeof(bd)==="string"&&bf[bd]===undefined){bf[bd.replace(m,aE)]=bg[bd]
}}}}if(!af){bf.opacity=ax(be)}bh=j(be,bg,false);bf.rotation=bh.rotation;bf.skewX=bh.skewX;
bf.scaleX=bh.scaleX;bf.scaleY=bh.scaleY;bf.x=bh.x;bf.y=bh.y;if(k){bf.z=bh.z;bf.rotationX=bh.rotationX;
bf.rotationY=bh.rotationY;bf.scaleZ=bh.scaleZ}if(bf.filters){delete bf.filters}return bf
},w=function(bl,bk,bj,bh,bg){var bf={},i=bl.style,be,bd,bi;for(bd in bj){if(bd!=="cssText"){if(bd!=="length"){if(isNaN(bd)){if(bk[bd]!==(be=bj[bd])||(bg&&bg[bd])){if(bd.indexOf("Origin")===-1){if(typeof(be)==="number"||typeof(be)==="string"){bf[bd]=(be==="auto"&&(bd==="left"||bd==="top"))?l(bl,bd):((be===""||be==="auto"||be==="none")&&typeof(bk[bd])==="string"&&bk[bd].replace(aV,"")!=="")?0:be;
if(i[bd]!==undefined){bi=new ak(i,bd,i[bd],bi)}}}}}}}}if(bh){for(bd in bh){if(bd!=="className"){bf[bd]=bh[bd]
}}}return{difs:bf,firstMPT:bi}},aW={width:["Left","Right"],height:["Top","Bottom"]},ao=["marginLeft","marginRight","marginTop","marginBottom"],aS=function(bg,bi,bh){if((bg.nodeName+"").toLowerCase()==="svg"){return(bh||aQ(bg))[bi]||0
}else{if(bg.getCTM&&v(bg)){return bg.getBBox()[bi]||0}}var be=parseFloat((bi==="width")?bg.offsetWidth:bg.offsetHeight),bd=aW[bi],bf=bd.length;
bh=bh||aQ(bg,null);while(--bf>-1){be-=parseFloat(I(bg,"padding"+bd[bf],bh,true))||0;
be-=parseFloat(I(bg,"border"+bd[bf]+"Width",bh,true))||0}return be},aO=function(be,bf){if(be==="contain"||be==="auto"||be==="auto auto"){return be+" "
}if(be==null||be===""){be="0 0"}var bd=be.split(" "),p=(be.indexOf("left")!==-1)?"0%":(be.indexOf("right")!==-1)?"100%":bd[0],bh=(be.indexOf("top")!==-1)?"0%":(be.indexOf("bottom")!==-1)?"100%":bd[1],bg;
if(bd.length>3&&!bf){bd=be.split(", ").join(",").split(",");be=[];for(bg=0;bg<bd.length;
bg++){be.push(aO(bd[bg]))}return be.join(",")}if(bh==null){bh=(p==="center")?"50%":"0"
}else{if(bh==="center"){bh="50%"}}if(p==="center"||(isNaN(parseFloat(p))&&(p+"").indexOf("=")===-1)){p="50%"
}be=p+" "+bh+((bd.length>2)?" "+bd[2]:"");if(bf){bf.oxp=(p.indexOf("%")!==-1);bf.oyp=(bh.indexOf("%")!==-1);
bf.oxr=(p.charAt(1)==="=");bf.oyr=(bh.charAt(1)==="=");bf.ox=parseFloat(p.replace(aV,""));
bf.oy=parseFloat(bh.replace(aV,""));bf.v=be}return bf||be},bb=function(p,i){if(typeof(p)==="function"){p=p(aT,aI)
}return(typeof(p)==="string"&&p.charAt(1)==="=")?parseInt(p.charAt(0)+"1",10)*parseFloat(p.substr(2)):(parseFloat(p)-parseFloat(i))||0
},D=function(i,p){if(typeof(i)==="function"){i=i(aT,aI)}return(i==null)?p:(typeof(i)==="string"&&i.charAt(1)==="=")?parseInt(i.charAt(0)+"1",10)*parseFloat(i.substr(2))+p:parseFloat(i)||0
},a7=function(bj,be,i,bi){var bd=0.000001,bk,bf,bg,bl,bh;if(typeof(bj)==="function"){bj=bj(aT,aI)
}if(bj==null){bl=be}else{if(typeof(bj)==="number"){bl=bj}else{bk=360;bf=bj.split("_");
bh=(bj.charAt(1)==="=");bg=(bh?parseInt(bj.charAt(0)+"1",10)*parseFloat(bf[0].substr(2)):parseFloat(bf[0]))*((bj.indexOf("rad")===-1)?1:aN)-(bh?0:be);
if(bf.length){if(bi){bi[i]=be+bg}if(bj.indexOf("short")!==-1){bg=bg%bk;if(bg!==bg%(bk/2)){bg=(bg<0)?bg+bk:bg-bk
}}if(bj.indexOf("_cw")!==-1&&bg<0){bg=((bg+bk*9999999999)%bk)-((bg/bk)|0)*bk}else{if(bj.indexOf("ccw")!==-1&&bg>0){bg=((bg-bk*9999999999)%bk)-((bg/bk)|0)*bk
}}}bl=be+bg}}if(bl<bd&&bl>-bd){bl=0}return bl},al={aqua:[0,255,255],lime:[0,255,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,255],navy:[0,0,128],white:[255,255,255],fuchsia:[255,0,255],olive:[128,128,0],yellow:[255,255,0],orange:[255,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[255,0,0],pink:[255,192,203],cyan:[0,255,255],transparent:[255,255,255,0]},aP=function(bd,p,i){bd=(bd<0)?bd+1:(bd>1)?bd-1:bd;
return((((bd*6<1)?p+(i-p)*bd*6:(bd<0.5)?i:(bd*3<2)?p+(i-p)*(2/3-bd)*6:p)*255)+0.5)|0
},a6=aL.parseColor=function(bm,be){var bl,i,bh,bk,bf,bn,p,bj,bd,bi,bg;if(!bm){bl=al.black
}else{if(typeof(bm)==="number"){bl=[bm>>16,(bm>>8)&255,bm&255]}else{if(bm.charAt(bm.length-1)===","){bm=bm.substr(0,bm.length-1)
}if(al[bm]){bl=al[bm]}else{if(bm.charAt(0)==="#"){if(bm.length===4){i=bm.charAt(1);
bh=bm.charAt(2);bk=bm.charAt(3);bm="#"+i+i+bh+bh+bk+bk}bm=parseInt(bm.substr(1),16);
bl=[bm>>16,(bm>>8)&255,bm&255]}else{if(bm.substr(0,3)==="hsl"){bl=bg=bm.match(aY);
if(!be){bf=(Number(bl[0])%360)/360;bn=Number(bl[1])/100;p=Number(bl[2])/100;bh=(p<=0.5)?p*(bn+1):p+bn-p*bn;
i=p*2-bh;if(bl.length>3){bl[3]=Number(bm[3])}bl[0]=aP(bf+1/3,i,bh);bl[1]=aP(bf,i,bh);
bl[2]=aP(bf-1/3,i,bh)}else{if(bm.indexOf("=")!==-1){return bm.match(E)}}}else{bl=bm.match(aY)||al.transparent
}}}bl[0]=Number(bl[0]);bl[1]=Number(bl[1]);bl[2]=Number(bl[2]);if(bl.length>3){bl[3]=Number(bl[3])
}}}if(be&&!bg){i=bl[0]/255;bh=bl[1]/255;bk=bl[2]/255;bj=Math.max(i,bh,bk);bd=Math.min(i,bh,bk);
p=(bj+bd)/2;if(bj===bd){bf=bn=0}else{bi=bj-bd;bn=p>0.5?bi/(2-bj-bd):bi/(bj+bd);
bf=(bj===i)?(bh-bk)/bi+(bh<bk?6:0):(bj===bh)?(bk-i)/bi+2:(i-bh)/bi+4;bf*=60}bl[0]=(bf+0.5)|0;
bl[1]=(bn*100+0.5)|0;bl[2]=(p*100+0.5)|0}return bl},J=function(bh,bj){var p=bh.match(aG)||[],bi=0,bf=p.length?"":bh,bg,be,bd;
for(bg=0;bg<p.length;bg++){be=p[bg];bd=bh.substr(bi,bh.indexOf(be,bi)-bi);bi+=bd.length+be.length;
be=a6(be,bj);if(be.length===3){be.push(1)}bf+=bd+(bj?"hsla("+be[0]+","+be[1]+"%,"+be[2]+"%,"+be[3]:"rgba("+be.join(","))+")"
}return bf+bh.substr(bi)},aG="(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
for(ad in al){aG+="|"+ad+"\\b"}aG=new RegExp(aG+")","gi");aL.colorStringFilter=function(i){var p=i[0]+i[1],bd;
if(aG.test(p)){bd=(p.indexOf("hsl(")!==-1||p.indexOf("hsla(")!==-1);i[0]=J(i[0],bd);
i[1]=J(i[1],bd)}aG.lastIndex=0};if(!y.defaultStringFilter){y.defaultStringFilter=aL.colorStringFilter
}var aC=function(bg,bm,bl,bh){if(bg==null){return function(bn){return bn}}var bk=bm?(bg.match(aG)||[""])[0]:"",bf=bg.split(bk).join("").match(aD)||[],bi=bg.substr(0,bg.indexOf(bf[0])),be=(bg.charAt(bg.length-1)===")")?")":"",i=(bg.indexOf(" ")!==-1)?" ":",",bd=bf.length,p=(bd>0)?bf[0].replace(aY,""):"",bj;
if(!bd){return function(bn){return bn}}if(bm){bj=function(bp){var bo,br,bq,bn;if(typeof(bp)==="number"){bp+=p
}else{if(bh&&F.test(bp)){bn=bp.replace(F,"|").split("|");for(bq=0;bq<bn.length;
bq++){bn[bq]=bj(bn[bq])}return bn.join(",")}}bo=(bp.match(aG)||[bk])[0];br=bp.split(bo).join("").match(aD)||[];
bq=br.length;if(bd>bq--){while(++bq<bd){br[bq]=bl?br[(((bq-1)/2)|0)]:bf[bq]}}return bi+br.join(i)+i+bo+be+(bp.indexOf("inset")!==-1?" inset":"")
};return bj}bj=function(bo){var bq,bn,bp;if(typeof(bo)==="number"){bo+=p}else{if(bh&&F.test(bo)){bn=bo.replace(F,"|").split("|");
for(bp=0;bp<bn.length;bp++){bn[bp]=bj(bn[bp])}return bn.join(",")}}bq=bo.match(aD)||[];
bp=bq.length;if(bd>bp--){while(++bp<bd){bq[bp]=bl?bq[(((bp-1)/2)|0)]:bf[bp]}}return bi+bq.join(i)+be
};return bj},aU=function(i){i=i.split(",");return function(bk,bh,bd,be,bl,bg,bi){var bj=(bh+"").split(" "),bf;
bi={};for(bf=0;bf<4;bf++){bi[i[bf]]=bj[bf]=bj[bf]||bj[(((bf-1)/2)>>0)]}return be.parse(bk,bi,bl,bg)
}},aA=s._setPluginRatio=function(bl){this.plugin.setRatio(bl);var bh=this.data,bi=bh.proxy,bk=bh.firstMPT,bf=0.000001,be,bm,bg,bj,bd;
while(bk){be=bi[bk.v];if(bk.r){be=Math.round(be)}else{if(be<bf&&be>-bf){be=0}}bk.t[bk.p]=be;
bk=bk._next}if(bh.autoRotate){bh.autoRotate.rotation=bh.mod?bh.mod(bi.rotation,this.t):bi.rotation
}if(bl===1||bl===0){bk=bh.firstMPT;bd=(bl===1)?"e":"b";while(bk){bm=bk.t;if(!bm.type){bm[bd]=bm.s+bm.xs0
}else{if(bm.type===1){bj=bm.xs0+bm.s+bm.xs1;for(bg=1;bg<bm.l;bg++){bj+=bm["xn"+bg]+bm["xs"+(bg+1)]
}bm[bd]=bj}}bk=bk._next}}},ak=function(bd,bg,i,be,bf){this.t=bd;this.p=bg;this.v=i;
this.r=bf;if(be){be._prev=this;this._next=be}},V=s._parseToProxy=function(br,bp,bh,bs,bo,bg){var bi=bs,be={},bl={},bf=bh._transform,bk=bc,bn,bd,bm,bq,bj;
bh._transform=null;bc=bp;bs=bj=bh.parse(br,bp,bs,bo);bc=bk;if(bg){bh._transform=bf;
if(bi){bi._prev=null;if(bi._prev){bi._prev._next=null}}}while(bs&&bs!==bi){if(bs.type<=1){bd=bs.p;
bl[bd]=bs.s+bs.c;be[bd]=bs.s;if(!bg){bq=new ak(bs,"s",bd,bq,bs.r);bs.c=0}if(bs.type===1){bn=bs.l;
while(--bn>0){bm="xn"+bn;bd=bs.p+"_"+bm;bl[bd]=bs.data[bm];be[bd]=bs[bm];if(!bg){bq=new ak(bs,bm,bd,bq,bs.rxp[bm])
}}}}bs=bs._next}return{proxy:be,end:bl,firstMPT:bq,pt:bj}},A=s.CSSPropTween=function(bl,be,bm,bi,bg,bj,bf,i,bd,bk,bh){this.t=bl;
this.p=be;this.s=bm;this.c=bi;this.n=bf||be;if(!(bl instanceof A)){a9.push(this.n)
}this.r=i;this.type=bj||0;if(bd){this.pr=bd;aJ=true}this.b=(bk===undefined)?bm:bk;
this.e=(bh===undefined)?bm+bi:bh;if(bg){this._next=bg;bg._prev=this}},x=function(bf,bh,bg,i,bd,p){var be=new A(bf,bh,bg,i-bg,bd,-1,p);
be.b=bg;be.e=be.xs0=i;return be},q=aL.parseComplex=function(bl,bp,bF,bB,bA,bo,bq,bt,bg,bx){bF=bF||bo||"";
if(typeof(bB)==="function"){bB=bB(aT,aI)}bq=new A(bl,bp,0,0,bq,(bx?2:1),null,false,bt,bF,bB);
bB+="";if(bA&&aG.test(bB+bF)){bB=[bF,bB];aL.colorStringFilter(bB);bF=bB[0];bB=bB[1]
}var bj=bF.split(", ").join(",").split(" "),bk=bB.split(", ").join(",").split(" "),bs=bj.length,bE=(K!==false),bw,bm,bh,bz,bD,bi,be,bd,bu,bC,bf,br,by;
if(bB.indexOf(",")!==-1||bF.indexOf(",")!==-1){bj=bj.join(" ").replace(F,", ").split(" ");
bk=bk.join(" ").replace(F,", ").split(" ");bs=bj.length}if(bs!==bk.length){bj=(bo||"").split(" ");
bs=bj.length}bq.plugin=bg;bq.setRatio=bx;aG.lastIndex=0;for(bw=0;bw<bs;bw++){bz=bj[bw];
bD=bk[bw];bd=parseFloat(bz);if(bd||bd===0){bq.appendXtra("",bd,bb(bD,bd),bD.replace(E,""),(bE&&bD.indexOf("px")!==-1),true)
}else{if(bA&&aG.test(bz)){br=bD.indexOf(")")+1;br=")"+(br?bD.substr(br):"");by=(bD.indexOf("hsl")!==-1&&af);
bz=a6(bz,by);bD=a6(bD,by);bu=(bz.length+bD.length>6);if(bu&&!af&&bD[3]===0){bq["xs"+bq.l]+=bq.l?" transparent":"transparent";
bq.e=bq.e.split(bk[bw]).join("transparent")}else{if(!af){bu=false}if(by){bq.appendXtra((bu?"hsla(":"hsl("),bz[0],bb(bD[0],bz[0]),",",false,true).appendXtra("",bz[1],bb(bD[1],bz[1]),"%,",false).appendXtra("",bz[2],bb(bD[2],bz[2]),(bu?"%,":"%"+br),false)
}else{bq.appendXtra((bu?"rgba(":"rgb("),bz[0],bD[0]-bz[0],",",true,true).appendXtra("",bz[1],bD[1]-bz[1],",",true).appendXtra("",bz[2],bD[2]-bz[2],(bu?",":br),true)
}if(bu){bz=(bz.length<4)?1:bz[3];bq.appendXtra("",bz,((bD.length<4)?1:bD[3])-bz,br,false)
}}aG.lastIndex=0}else{bi=bz.match(aY);if(!bi){bq["xs"+bq.l]+=(bq.l||bq["xs"+bq.l])?" "+bD:bD
}else{be=bD.match(E);if(!be||be.length!==bi.length){return bq}bh=0;for(bm=0;bm<bi.length;
bm++){bf=bi[bm];bC=bz.indexOf(bf,bh);bq.appendXtra(bz.substr(bh,bC-bh),Number(bf),bb(be[bm],bf),"",(bE&&bz.substr(bC+bf.length,2)==="px"),(bm===0));
bh=bC+bf.length}bq["xs"+bq.l]+=bz.substr(bh)}}}}if(bB.indexOf("=")!==-1){if(bq.data){br=bq.xs0+bq.data.s;
for(bw=1;bw<bq.l;bw++){br+=bq["xs"+bw]+bq.data["xn"+bw]}bq.e=br+bq["xs"+bw]}}if(!bq.l){bq.type=-1;
bq.xs0=bq.e}return bq.xfirst||bq},aj=9;ad=A.prototype;ad.l=ad.pr=0;while(--aj>0){ad["xn"+aj]=0;
ad["xs"+aj]=""}ad.xs0="";ad._next=ad._prev=ad.xfirst=ad.data=ad.plugin=ad.setRatio=ad.rxp=null;
ad.appendXtra=function(bh,p,bi,bg,bd,bf){var be=this,i=be.l;be["xs"+i]+=(bf&&(i||be["xs"+i]))?" "+bh:bh||"";
if(!bi){if(i!==0&&!be.plugin){be["xs"+i]+=p+(bg||"");return be}}be.l++;be.type=be.setRatio?2:1;
be["xs"+be.l]=bg||"";if(i>0){be.data["xn"+i]=p+bi;be.rxp["xn"+i]=bd;be["xn"+i]=p;
if(!be.plugin){be.xfirst=new A(be,"xn"+i,p,bi,be.xfirst||be,0,be.n,bd,be.pr);be.xfirst.xs0=0
}return be}be.data={s:p+bi};be.rxp={};be.s=p;be.c=bi;be.r=bd;return be};var aq=function(bd,i){i=i||{};
this.p=i.prefix?X(bd)||bd:bd;h[bd]=h[this.p]=this;this.format=i.formatter||aC(i.defaultValue,i.color,i.collapsible,i.multi);
if(i.parser){this.parse=i.parser}this.clrs=i.color;this.multi=i.multi;this.keyword=i.keyword;
this.dflt=i.defaultValue;this.pr=i.priority||0},U=s._registerComplexSpecialProp=function(bi,bf,bh){if(typeof(bf)!=="object"){bf={parser:bh}
}var bd=bi.split(","),bj=bf.defaultValue,bg,be;bh=bh||[bj];for(bg=0;bg<bd.length;
bg++){bf.prefix=(bg===0&&bf.prefix);bf.defaultValue=bh[bg]||bj;be=new aq(bd[bg],bf)
}},o=s._registerPluginProp=function(bd){if(!h[bd]){var i=bd.charAt(0).toUpperCase()+bd.substr(1)+"Plugin";
U(bd,{parser:function(be,bk,bj,bl,bi,bg,bh){var bf=C.com.greensock.plugins[i];if(!bf){az("Error: "+i+" js file not loaded.");
return bi}bf._cssRegister();return h[bj].parse(be,bk,bj,bl,bi,bg,bh)}})}};ad=aq.prototype;
ad.parseComplex=function(bo,bn,bk,bp,bh,p){var bj=this.keyword,bg,bm,bl,be,bf,bd;
if(this.multi){if(F.test(bk)||F.test(bn)){bm=bn.replace(F,"|").split("|");bl=bk.replace(F,"|").split("|")
}else{if(bj){bm=[bn];bl=[bk]}}}if(bl){be=(bl.length>bm.length)?bl.length:bm.length;
for(bg=0;bg<be;bg++){bn=bm[bg]=bm[bg]||this.dflt;bk=bl[bg]=bl[bg]||this.dflt;if(bj){bf=bn.indexOf(bj);
bd=bk.indexOf(bj);if(bf!==bd){if(bd===-1){bm[bg]=bm[bg].split(bj).join("")}else{if(bf===-1){bm[bg]+=" "+bj
}}}}}bn=bm.join(", ");bk=bl.join(", ")}return q(bo,this.p,bn,bk,this.clrs,this.dflt,bp,this.pr,bh,p)
};ad.parse=function(i,bh,bg,bi,bf,bd,be){return this.parseComplex(i.style,this.format(I(i,this.p,W,false,this.dflt)),this.format(bh),bf,bd)
};aL.registerSpecialProp=function(i,bd,p){U(i,{parser:function(be,bj,bi,bk,bh,bf,bg){var bl=new A(be,bi,0,0,bh,2,bi,false,p);
bl.plugin=bf;bl.setRatio=bd(be,bj,bk._tween,bi);return bl},priority:p})};aL.useSVGTransformAttr=true;
var ay=("scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent").split(","),aX=X("transform"),aF=z+"transform",ab=X("transformOrigin"),k=(X("perspective")!==null),a5=s.Transform=function(){this.perspective=parseFloat(aL.defaultTransformPerspective)||0;
this.force3D=(aL.defaultForce3D===false||!k)?false:aL.defaultForce3D||"auto"},av=d.SVGElement,M,a0=function(bg,i,bd){var be=a1.createElementNS("http://www.w3.org/2000/svg",bg),bf=/([a-z])([A-Z])/g,bh;
for(bh in bd){be.setAttributeNS(null,bh.replace(bf,"$1-$2").toLowerCase(),bd[bh])
}i.appendChild(be);return be},P=a1.documentElement||{},aa=(function(){var be=Z||(/Android/i.test(aB)&&!d.chrome),i,bd,p;
if(a1.createElementNS&&!be){i=a0("svg",P);bd=a0("rect",i,{width:100,height:50,x:100});
p=bd.getBoundingClientRect().width;bd.style[ab]="50% 50%";bd.style[aX]="scaleX(0.5)";
be=(p===bd.getBoundingClientRect().width&&!(S&&k));P.removeChild(i)}return be})(),r=function(bn,bk,bw,bq,bi,be){var p=bn._gsTransform,bl=ar(bn,true),bh,bg,bf,bm,i,bv,bt,br,bp,bu,bs,bj,bo,bd;
if(p){bo=p.xOrigin;bd=p.yOrigin}if(!bq||(bh=bq.split(" ")).length<2){bt=bn.getBBox();
if(bt.x===0&&bt.y===0&&bt.width+bt.height===0){bt={x:parseFloat(bn.hasAttribute("x")?bn.getAttribute("x"):bn.hasAttribute("cx")?bn.getAttribute("cx"):0)||0,y:parseFloat(bn.hasAttribute("y")?bn.getAttribute("y"):bn.hasAttribute("cy")?bn.getAttribute("cy"):0)||0,width:0,height:0}
}bk=aO(bk).split(" ");bh=[(bk[0].indexOf("%")!==-1?parseFloat(bk[0])/100*bt.width:parseFloat(bk[0]))+bt.x,(bk[1].indexOf("%")!==-1?parseFloat(bk[1])/100*bt.height:parseFloat(bk[1]))+bt.y]
}bw.xOrigin=bm=parseFloat(bh[0]);bw.yOrigin=i=parseFloat(bh[1]);if(bq&&bl!==Y){bv=bl[0];
bt=bl[1];br=bl[2];bp=bl[3];bu=bl[4];bs=bl[5];bj=(bv*bp-bt*br);if(bj){bg=bm*(bp/bj)+i*(-br/bj)+((br*bs-bp*bu)/bj);
bf=bm*(-bt/bj)+i*(bv/bj)-((bv*bs-bt*bu)/bj);bm=bw.xOrigin=bh[0]=bg;i=bw.yOrigin=bh[1]=bf
}}if(p){if(be){bw.xOffset=p.xOffset;bw.yOffset=p.yOffset;p=bw}if(bi||(bi!==false&&aL.defaultSmoothOrigin!==false)){bg=bm-bo;
bf=i-bd;p.xOffset+=(bg*bl[0]+bf*bl[2])-bg;p.yOffset+=(bg*bl[1]+bf*bl[3])-bf}else{p.xOffset=p.yOffset=0
}}if(!be){bn.setAttribute("data-svg-origin",bh.join(" "))}},n=function(be){var i=a4("svg",this.ownerSVGElement.getAttribute("xmlns")||"http://www.w3.org/2000/svg"),bd=this.parentNode,p=this.nextSibling,bh=this.style.cssText,bg;
P.appendChild(i);i.appendChild(this);this.style.display="block";if(be){try{bg=this.getBBox();
this._originalGetBBox=this.getBBox;this.getBBox=n}catch(bf){}}else{if(this._originalGetBBox){bg=this._originalGetBBox()
}}if(p){bd.insertBefore(this,p)}else{bd.appendChild(this)}P.removeChild(i);this.style.cssText=bh;
return bg},aZ=function(p){try{return p.getBBox()}catch(i){return n.call(p,true)
}},v=function(i){return !!(av&&i.getCTM&&aZ(i)&&(!i.parentNode||i.ownerSVGElement))
},Y=[1,0,0,1,0,0],ar=function(bi,be){var bk=bi._gsTransform||new a5(),p=100000,i=bi.style,bh,bl,bf,bd,bg,bj;
if(aX){bl=I(bi,aF,null,true)}else{if(bi.currentStyle){bl=bi.currentStyle.filter.match(at);
bl=(bl&&bl.length===4)?[bl[0].substr(4),Number(bl[2].substr(4)),Number(bl[1].substr(4)),bl[3].substr(4),(bk.x||0),(bk.y||0)].join(","):""
}}bh=(!bl||bl==="none"||bl==="matrix(1, 0, 0, 1, 0, 0)");if(bh&&aX&&((bj=(aQ(bi).display==="none"))||!bi.parentNode)){if(bj){bd=i.display;
i.display="block"}if(!bi.parentNode){bg=1;P.appendChild(bi)}bl=I(bi,aF,null,true);
bh=(!bl||bl==="none"||bl==="matrix(1, 0, 0, 1, 0, 0)");if(bd){i.display=bd}else{if(bj){ae(i,"display")
}}if(bg){P.removeChild(bi)}}if(bk.svg||(bi.getCTM&&v(bi))){if(bh&&(i[aX]+"").indexOf("matrix")!==-1){bl=i[aX];
bh=0}bf=bi.getAttribute("transform");if(bh&&bf){if(bf.indexOf("matrix")!==-1){bl=bf;
bh=0}else{if(bf.indexOf("translate")!==-1){bl="matrix(1,0,0,1,"+bf.match(/(?:\-|\b)[\d\-\.e]+\b/gi).join(",")+")";
bh=0}}}}if(bh){return Y}bf=(bl||"").match(aY)||[];aj=bf.length;while(--aj>-1){bd=Number(bf[aj]);
bf[aj]=(bg=bd-(bd|=0))?((bg*p+(bg<0?-0.5:0.5))|0)/p+bd:bd}return(be&&bf.length>6)?[bf[0],bf[1],bf[4],bf[5],bf[12],bf[13]]:bf
},j=s.getTransform=function(bB,bo,bC,bn){if(bB._gsTransform&&bC&&!bn){return bB._gsTransform
}var bS=bC?bB._gsTransform||new a5():new a5(),bK=(bS.scaleX<0),bO=0.00002,bE=100000,by=k?parseFloat(I(bB,ab,bo,false,"0 0 0").split(" ")[2])||bS.zOrigin||0:0,p=parseFloat(aL.defaultTransformPerspective)||0,bD,bG,bA,bz,br,bR;
bS.svg=!!(bB.getCTM&&v(bB));if(bS.svg){r(bB,I(bB,ab,bo,false,"50% 50%")+"",bS,bB.getAttribute("data-svg-origin"));
M=aL.useSVGTransformAttr||aa}bD=ar(bB);if(bD!==Y){if(bD.length===16){var bi=bD[0],bL=bD[1],bu=bD[2],bl=bD[3],bg=bD[4],bJ=bD[5],bt=bD[6],bk=bD[7],bf=bD[8],bI=bD[9],bq=bD[10],be=bD[12],bH=bD[13],bp=bD[14],bj=bD[11],bm=Math.atan2(bt,bq),bx,bw,bv,bs,bd,bh;
if(bS.zOrigin){bp=-bS.zOrigin;be=bf*bp-bD[12];bH=bI*bp-bD[13];bp=bq*bp+bS.zOrigin-bD[14]
}bS.rotationX=bm*aN;if(bm){bd=Math.cos(-bm);bh=Math.sin(-bm);bx=bg*bd+bf*bh;bw=bJ*bd+bI*bh;
bv=bt*bd+bq*bh;bf=bg*-bh+bf*bd;bI=bJ*-bh+bI*bd;bq=bt*-bh+bq*bd;bj=bk*-bh+bj*bd;
bg=bx;bJ=bw;bt=bv}bm=Math.atan2(-bu,bq);bS.rotationY=bm*aN;if(bm){bd=Math.cos(-bm);
bh=Math.sin(-bm);bx=bi*bd-bf*bh;bw=bL*bd-bI*bh;bv=bu*bd-bq*bh;bI=bL*bh+bI*bd;bq=bu*bh+bq*bd;
bj=bl*bh+bj*bd;bi=bx;bL=bw;bu=bv}bm=Math.atan2(bL,bi);bS.rotation=bm*aN;if(bm){bd=Math.cos(-bm);
bh=Math.sin(-bm);bi=bi*bd+bg*bh;bw=bL*bd+bJ*bh;bJ=bL*-bh+bJ*bd;bt=bu*-bh+bt*bd;
bL=bw}if(bS.rotationX&&Math.abs(bS.rotationX)+Math.abs(bS.rotation)>359.9){bS.rotationX=bS.rotation=0;
bS.rotationY=180-bS.rotationY}bS.scaleX=((Math.sqrt(bi*bi+bL*bL)*bE+0.5)|0)/bE;
bS.scaleY=((Math.sqrt(bJ*bJ+bI*bI)*bE+0.5)|0)/bE;bS.scaleZ=((Math.sqrt(bt*bt+bq*bq)*bE+0.5)|0)/bE;
if(bS.rotationX||bS.rotationY){bS.skewX=0}else{bS.skewX=(bg||bJ)?Math.atan2(bg,bJ)*aN+bS.rotation:bS.skewX||0;
if(Math.abs(bS.skewX)>90&&Math.abs(bS.skewX)<270){if(bK){bS.scaleX*=-1;bS.skewX+=(bS.rotation<=0)?180:-180;
bS.rotation+=(bS.rotation<=0)?180:-180}else{bS.scaleY*=-1;bS.skewX+=(bS.skewX<=0)?180:-180
}}}bS.perspective=bj?1/((bj<0)?-bj:bj):0;bS.x=be;bS.y=bH;bS.z=bp;if(bS.svg){bS.x-=bS.xOrigin-(bS.xOrigin*bi-bS.yOrigin*bg);
bS.y-=bS.yOrigin-(bS.yOrigin*bL-bS.xOrigin*bJ)}}else{if((!k||bn||!bD.length||bS.x!==bD[4]||bS.y!==bD[5]||(!bS.rotationX&&!bS.rotationY))){var bF=(bD.length>=6),bQ=bF?bD[0]:1,bP=bD[1]||0,bN=bD[2]||0,bM=bF?bD[3]:1;
bS.x=bD[4]||0;bS.y=bD[5]||0;bA=Math.sqrt(bQ*bQ+bP*bP);bz=Math.sqrt(bM*bM+bN*bN);
br=(bQ||bP)?Math.atan2(bP,bQ)*aN:bS.rotation||0;bR=(bN||bM)?Math.atan2(bN,bM)*aN+br:bS.skewX||0;
if(Math.abs(bR)>90&&Math.abs(bR)<270){if(bK){bA*=-1;bR+=(br<=0)?180:-180;br+=(br<=0)?180:-180
}else{bz*=-1;bR+=(bR<=0)?180:-180}}bS.scaleX=bA;bS.scaleY=bz;bS.rotation=br;bS.skewX=bR;
if(k){bS.rotationX=bS.rotationY=bS.z=0;bS.perspective=p;bS.scaleZ=1}if(bS.svg){bS.x-=bS.xOrigin-(bS.xOrigin*bQ+bS.yOrigin*bN);
bS.y-=bS.yOrigin-(bS.xOrigin*bP+bS.yOrigin*bM)}}}bS.zOrigin=by;for(bG in bS){if(bS[bG]<bO){if(bS[bG]>-bO){bS[bG]=0
}}}}if(bC){bB._gsTransform=bS;if(bS.svg){if(M&&bB.style[aX]){y.delayedCall(0.001,function(){ae(bB.style,aX)
})}else{if(!M&&bB.getAttribute("transform")){y.delayedCall(0.001,function(){bB.removeAttribute("transform")
})}}}}return bS},aH=function(bm){var bo=this.data,bx=-bo.rotation*ac,p=bx+bo.skewX*ac,bh=100000,by=((Math.cos(bx)*bo.scaleX*bh)|0)/bh,bw=((Math.sin(bx)*bo.scaleX*bh)|0)/bh,bv=((Math.sin(p)*-bo.scaleY*bh)|0)/bh,bt=((Math.cos(p)*bo.scaleY*bh)|0)/bh,br=this.t.style,bg=this.t.currentStyle,bi,bz;
if(!bg){return}bz=bw;bw=-bv;bv=-bz;bi=bg.filter;br.filter="";var bk=this.t.offsetWidth,bq=this.t.offsetHeight,bs=(bg.position!=="absolute"),bp="progid:DXImageTransform.Microsoft.Matrix(M11="+by+", M12="+bw+", M21="+bv+", M22="+bt,be=bo.x+(bk*bo.xPercent/100),bd=bo.y+(bq*bo.yPercent/100),bl,bj;
if(bo.ox!=null){bl=((bo.oxp)?bk*bo.ox*0.01:bo.ox)-bk/2;bj=((bo.oyp)?bq*bo.oy*0.01:bo.oy)-bq/2;
be+=bl-(bl*by+bj*bw);bd+=bj-(bl*bv+bj*bt)}if(!bs){bp+=", sizingMethod='auto expand')"
}else{bl=(bk/2);bj=(bq/2);bp+=", Dx="+(bl-(bl*by+bj*bw)+be)+", Dy="+(bj-(bl*bv+bj*bt)+bd)+")"
}if(bi.indexOf("DXImageTransform.Microsoft.Matrix(")!==-1){br.filter=bi.replace(R,bp)
}else{br.filter=bp+" "+bi}if(bm===0||bm===1){if(by===1){if(bw===0){if(bv===0){if(bt===1){if(!bs||bp.indexOf("Dx=0, Dy=0")!==-1){if(!aR.test(bi)||parseFloat(RegExp.$1)===100){if(bi.indexOf("gradient("&&bi.indexOf("Alpha"))===-1){br.removeAttribute("filter")
}}}}}}}}if(!bs){var bf=(Z<8)?1:-1,bn,i,bu;bl=bo.ieOffsetX||0;bj=bo.ieOffsetY||0;
bo.ieOffsetX=Math.round((bk-((by<0?-by:by)*bk+(bw<0?-bw:bw)*bq))/2+be);bo.ieOffsetY=Math.round((bq-((bt<0?-bt:bt)*bq+(bv<0?-bv:bv)*bk))/2+bd);
for(aj=0;aj<4;aj++){i=ao[aj];bn=bg[i];bz=(bn.indexOf("px")!==-1)?parseFloat(bn):N(this.t,i,parseFloat(bn),bn.replace(aw,""))||0;
if(bz!==bo[i]){bu=(aj<2)?-bo.ieOffsetX:-bo.ieOffsetY}else{bu=(aj<2)?bl-bo.ieOffsetX:bj-bo.ieOffsetY
}br[i]=(bo[i]=Math.round(bz-bu*((aj===0||aj===2)?1:bf)))+"px"}}},a2=s.set3DTransformRatio=s.setTransformRatio=function(bE){var bF=this.data,bG=this.t.style,br=bF.rotation,bq=bF.rotationX,bp=bF.rotationY,bg=bF.scaleX,bf=bF.scaleY,be=bF.scaleZ,bD=bF.x,bC=bF.y,bB=bF.z,p=bF.svg,bA=bF.perspective,bJ=bF.force3D,bN=bF.skewY,bO=bF.skewX,by,bk,bi,bh,bL,bK,bI,bw,bu,bt,bo,bn,bl,bz,bM,bd,bm,bx,bs,bj,i,bv,bH;
if(bN){bO+=bN;br+=bN}if(((((bE===1||bE===0)&&bJ==="auto"&&(this.tween._totalTime===this.tween._totalDuration||!this.tween._totalTime))||!bJ)&&!bB&&!bA&&!bp&&!bq&&be===1)||(M&&p)||!k){if(br||bO||p){br*=ac;
bv=bO*ac;bH=100000;bk=Math.cos(br)*bg;bL=Math.sin(br)*bg;bi=Math.sin(br-bv)*-bf;
bK=Math.cos(br-bv)*bf;if(bv&&bF.skewType==="simple"){by=Math.tan(bv-bN*ac);by=Math.sqrt(1+by*by);
bi*=by;bK*=by;if(bN){by=Math.tan(bN*ac);by=Math.sqrt(1+by*by);bk*=by;bL*=by}}if(p){bD+=bF.xOrigin-(bF.xOrigin*bk+bF.yOrigin*bi)+bF.xOffset;
bC+=bF.yOrigin-(bF.xOrigin*bL+bF.yOrigin*bK)+bF.yOffset;if(M&&(bF.xPercent||bF.yPercent)){bM=this.t.getBBox();
bD+=bF.xPercent*0.01*bM.width;bC+=bF.yPercent*0.01*bM.height}bM=0.000001;if(bD<bM){if(bD>-bM){bD=0
}}if(bC<bM){if(bC>-bM){bC=0}}}bs=(((bk*bH)|0)/bH)+","+(((bL*bH)|0)/bH)+","+(((bi*bH)|0)/bH)+","+(((bK*bH)|0)/bH)+","+bD+","+bC+")";
if(p&&M){this.t.setAttribute("transform","matrix("+bs)}else{bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix(":"matrix(")+bs
}}else{bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix(":"matrix(")+bg+",0,0,"+bf+","+bD+","+bC+")"
}return}if(S){bM=0.0001;if(bg<bM&&bg>-bM){bg=be=0.00002}if(bf<bM&&bf>-bM){bf=be=0.00002
}if(bA&&!bF.z&&!bF.rotationX&&!bF.rotationY){bA=0}}if(br||bO){br*=ac;bd=bk=Math.cos(br);
bm=bL=Math.sin(br);if(bO){br-=bO*ac;bd=Math.cos(br);bm=Math.sin(br);if(bF.skewType==="simple"){by=Math.tan((bO-bN)*ac);
by=Math.sqrt(1+by*by);bd*=by;bm*=by;if(bF.skewY){by=Math.tan(bN*ac);by=Math.sqrt(1+by*by);
bk*=by;bL*=by}}}bi=-bm;bK=bd}else{if(!bp&&!bq&&be===1&&!bA&&!p){bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) translate3d(":"translate3d(")+bD+"px,"+bC+"px,"+bB+"px)"+((bg!==1||bf!==1)?" scale("+bg+","+bf+")":"");
return}else{bk=bK=1;bi=bL=0}}bt=1;bh=bI=bw=bu=bo=bn=0;bl=(bA)?-1/bA:0;bz=bF.zOrigin;
bM=0.000001;bj=",";i="0";br=bp*ac;if(br){bd=Math.cos(br);bm=Math.sin(br);bw=-bm;
bo=bl*-bm;bh=bk*bm;bI=bL*bm;bt=bd;bl*=bd;bk*=bd;bL*=bd}br=bq*ac;if(br){bd=Math.cos(br);
bm=Math.sin(br);by=bi*bd+bh*bm;bx=bK*bd+bI*bm;bu=bt*bm;bn=bl*bm;bh=bi*-bm+bh*bd;
bI=bK*-bm+bI*bd;bt=bt*bd;bl=bl*bd;bi=by;bK=bx}if(be!==1){bh*=be;bI*=be;bt*=be;bl*=be
}if(bf!==1){bi*=bf;bK*=bf;bu*=bf;bn*=bf}if(bg!==1){bk*=bg;bL*=bg;bw*=bg;bo*=bg}if(bz||p){if(bz){bD+=bh*-bz;
bC+=bI*-bz;bB+=bt*-bz+bz}if(p){bD+=bF.xOrigin-(bF.xOrigin*bk+bF.yOrigin*bi)+bF.xOffset;
bC+=bF.yOrigin-(bF.xOrigin*bL+bF.yOrigin*bK)+bF.yOffset}if(bD<bM&&bD>-bM){bD=i}if(bC<bM&&bC>-bM){bC=i
}if(bB<bM&&bB>-bM){bB=0}}bs=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix3d(":"matrix3d(");
bs+=((bk<bM&&bk>-bM)?i:bk)+bj+((bL<bM&&bL>-bM)?i:bL)+bj+((bw<bM&&bw>-bM)?i:bw);
bs+=bj+((bo<bM&&bo>-bM)?i:bo)+bj+((bi<bM&&bi>-bM)?i:bi)+bj+((bK<bM&&bK>-bM)?i:bK);
if(bq||bp||be!==1){bs+=bj+((bu<bM&&bu>-bM)?i:bu)+bj+((bn<bM&&bn>-bM)?i:bn)+bj+((bh<bM&&bh>-bM)?i:bh);
bs+=bj+((bI<bM&&bI>-bM)?i:bI)+bj+((bt<bM&&bt>-bM)?i:bt)+bj+((bl<bM&&bl>-bM)?i:bl)+bj
}else{bs+=",0,0,0,0,1,0,"}bs+=bD+bj+bC+bj+bB+bj+(bA?(1+(-bB/bA)):1)+")";bG[aX]=bs
};ad=a5.prototype;ad.x=ad.y=ad.z=ad.skewX=ad.skewY=ad.rotation=ad.rotationX=ad.rotationY=ad.zOrigin=ad.xPercent=ad.yPercent=ad.xOffset=ad.yOffset=0;
ad.scaleX=ad.scaleY=ad.scaleZ=1;U("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin",{parser:function(bp,bC,bq,bg,bv,bj,br){if(bg._lastParsedTransform===br){return bv
}bg._lastParsedTransform=br;var bo=(br.scale&&typeof(br.scale)==="function")?br.scale:0,bx;
if(typeof(br[bq])==="function"){bx=br[bq];br[bq]=bC}if(bo){br.scale=bo(aT,bp)}var bu=bp._gsTransform,bB=bp.style,by=0.000001,bA=ay.length,bn=br,bk={},be="transformOrigin",bf=j(bp,W,true,bn.parseTransform),bi=bn.transform&&((typeof(bn.transform)==="function")?bn.transform(aT,aI):bn.transform),bd,bw,bh,bD,bt,bm,bl,bz,bs;
bg._transform=bf;if(bi&&typeof(bi)==="string"&&aX){bw=ba.style;bw[aX]=bi;bw.display="block";
bw.position="absolute";a1.body.appendChild(ba);bd=j(ba,null,false);if(bf.svg){bm=bf.xOrigin;
bl=bf.yOrigin;bd.x-=bf.xOffset;bd.y-=bf.yOffset;if(bn.transformOrigin||bn.svgOrigin){bi={};
r(bp,aO(bn.transformOrigin),bi,bn.svgOrigin,bn.smoothOrigin,true);bm=bi.xOrigin;
bl=bi.yOrigin;bd.x-=bi.xOffset-bf.xOffset;bd.y-=bi.yOffset-bf.yOffset}if(bm||bl){bz=ar(ba,true);
bd.x-=bm-(bm*bz[0]+bl*bz[2]);bd.y-=bl-(bm*bz[1]+bl*bz[3])}}a1.body.removeChild(ba);
if(!bd.perspective){bd.perspective=bf.perspective}if(bn.xPercent!=null){bd.xPercent=D(bn.xPercent,bf.xPercent)
}if(bn.yPercent!=null){bd.yPercent=D(bn.yPercent,bf.yPercent)}}else{if(typeof(bn)==="object"){bd={scaleX:D((bn.scaleX!=null)?bn.scaleX:bn.scale,bf.scaleX),scaleY:D((bn.scaleY!=null)?bn.scaleY:bn.scale,bf.scaleY),scaleZ:D(bn.scaleZ,bf.scaleZ),x:D(bn.x,bf.x),y:D(bn.y,bf.y),z:D(bn.z,bf.z),xPercent:D(bn.xPercent,bf.xPercent),yPercent:D(bn.yPercent,bf.yPercent),perspective:D(bn.transformPerspective,bf.perspective)};
bt=bn.directionalRotation;if(bt!=null){if(typeof(bt)==="object"){for(bw in bt){bn[bw]=bt[bw]
}}else{bn.rotation=bt}}if(typeof(bn.x)==="string"&&bn.x.indexOf("%")!==-1){bd.x=0;
bd.xPercent=D(bn.x,bf.xPercent)}if(typeof(bn.y)==="string"&&bn.y.indexOf("%")!==-1){bd.y=0;
bd.yPercent=D(bn.y,bf.yPercent)}bd.rotation=a7(("rotation" in bn)?bn.rotation:("shortRotation" in bn)?bn.shortRotation+"_short":("rotationZ" in bn)?bn.rotationZ:bf.rotation,bf.rotation,"rotation",bk);
if(k){bd.rotationX=a7(("rotationX" in bn)?bn.rotationX:("shortRotationX" in bn)?bn.shortRotationX+"_short":bf.rotationX||0,bf.rotationX,"rotationX",bk);
bd.rotationY=a7(("rotationY" in bn)?bn.rotationY:("shortRotationY" in bn)?bn.shortRotationY+"_short":bf.rotationY||0,bf.rotationY,"rotationY",bk)
}bd.skewX=a7(bn.skewX,bf.skewX);bd.skewY=a7(bn.skewY,bf.skewY)}}if(k&&bn.force3D!=null){bf.force3D=bn.force3D;
bD=true}bf.skewType=bn.skewType||bf.skewType||aL.defaultSkewType;bh=(bf.force3D||bf.z||bf.rotationX||bf.rotationY||bd.z||bd.rotationX||bd.rotationY||bd.perspective);
if(!bh&&bn.scale!=null){bd.scaleZ=1}while(--bA>-1){bs=ay[bA];bi=bd[bs]-bf[bs];if(bi>by||bi<-by||bn[bs]!=null||bc[bs]!=null){bD=true;
bv=new A(bf,bs,bf[bs],bi,bv);if(bs in bk){bv.e=bk[bs]}bv.xs0=0;bv.plugin=bj;bg._overwriteProps.push(bv.n)
}}bi=bn.transformOrigin;if(bf.svg&&(bi||bn.svgOrigin)){bm=bf.xOffset;bl=bf.yOffset;
r(bp,aO(bi),bd,bn.svgOrigin,bn.smoothOrigin);bv=x(bf,"xOrigin",(bu?bf:bd).xOrigin,bd.xOrigin,bv,be);
bv=x(bf,"yOrigin",(bu?bf:bd).yOrigin,bd.yOrigin,bv,be);if(bm!==bf.xOffset||bl!==bf.yOffset){bv=x(bf,"xOffset",(bu?bm:bf.xOffset),bf.xOffset,bv,be);
bv=x(bf,"yOffset",(bu?bl:bf.yOffset),bf.yOffset,bv,be)}bi="0px 0px"}if(bi||(k&&bh&&bf.zOrigin)){if(aX){bD=true;
bs=ab;bi=(bi||I(bp,bs,W,false,"50% 50%"))+"";bv=new A(bB,bs,0,0,bv,-1,be);bv.b=bB[bs];
bv.plugin=bj;if(k){bw=bf.zOrigin;bi=bi.split(" ");bf.zOrigin=((bi.length>2&&!(bw!==0&&bi[2]==="0px"))?parseFloat(bi[2]):bw)||0;
bv.xs0=bv.e=bi[0]+" "+(bi[1]||"50%")+" 0px";bv=new A(bf,"zOrigin",0,0,bv,-1,bv.n);
bv.b=bw;bv.xs0=bv.e=bf.zOrigin}else{bv.xs0=bv.e=bi}}else{aO(bi+"",bf)}}if(bD){bg._transformType=(!(bf.svg&&M)&&(bh||this._transformType===3))?3:2
}if(bx){br[bq]=bx}if(bo){br.scale=bo}return bv},prefix:true});U("boxShadow",{defaultValue:"0px 0px 0px 0px #999",prefix:true,color:true,multi:true,keyword:"inset"});
U("borderRadius",{defaultValue:"0px",parser:function(bp,by,bq,bh,br,bk){by=this.format(by);
var bj=["borderTopLeftRadius","borderTopRightRadius","borderBottomRightRadius","borderBottomLeftRadius"],bv=bp.style,bz,bt,bC,bl,bA,bB,bd,be,bo,bu,bx,bm,bi,bg,bw,bf;
bo=parseFloat(bp.offsetWidth);bu=parseFloat(bp.offsetHeight);bz=by.split(" ");for(bt=0;
bt<bj.length;bt++){if(this.p.indexOf("border")){bj[bt]=X(bj[bt])}bA=bl=I(bp,bj[bt],W,false,"0px");
if(bA.indexOf(" ")!==-1){bl=bA.split(" ");bA=bl[0];bl=bl[1]}bB=bC=bz[bt];bd=parseFloat(bA);
bm=bA.substr((bd+"").length);bi=(bB.charAt(1)==="=");if(bi){be=parseInt(bB.charAt(0)+"1",10);
bB=bB.substr(2);be*=parseFloat(bB);bx=bB.substr((be+"").length-(be<0?1:0))||""}else{be=parseFloat(bB);
bx=bB.substr((be+"").length)}if(bx===""){bx=g[bq]||bm}if(bx!==bm){bg=N(bp,"borderLeft",bd,bm);
bw=N(bp,"borderTop",bd,bm);if(bx==="%"){bA=(bg/bo*100)+"%";bl=(bw/bu*100)+"%"}else{if(bx==="em"){bf=N(bp,"borderLeft",1,"em");
bA=(bg/bf)+"em";bl=(bw/bf)+"em"}else{bA=bg+"px";bl=bw+"px"}}if(bi){bB=(parseFloat(bA)+be)+bx;
bC=(parseFloat(bl)+be)+bx}}br=q(bv,bj[bt],bA+" "+bl,bB+" "+bC,false,"0px",br)}return br
},prefix:true,formatter:aC("0px 0px 0px 0px",false,true)});U("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius",{defaultValue:"0px",parser:function(i,bg,bf,bh,be,bd){return q(i.style,bf,this.format(I(i,bf,W,false,"0px 0px")),this.format(bg),false,"0px",be)
},prefix:true,formatter:aC("0px 0px",false,true)});U("backgroundPosition",{defaultValue:"0 0",parser:function(bt,bk,bf,bg,bu,bi){var be="background-position",bj=(W||aQ(bt,null)),br=this.format(((bj)?Z?bj.getPropertyValue(be+"-x")+" "+bj.getPropertyValue(be+"-y"):bj.getPropertyValue(be):bt.currentStyle.backgroundPositionX+" "+bt.currentStyle.backgroundPositionY)||"0 0"),bq=this.format(bk),bm,bl,bh,bo,bn,bd;
if((br.indexOf("%")!==-1)!==(bq.indexOf("%")!==-1)&&bq.split(",").length<2){bd=I(bt,"backgroundImage").replace(ah,"");
if(bd&&bd!=="none"){bm=br.split(" ");bl=bq.split(" ");G.setAttribute("src",bd);
bh=2;while(--bh>-1){br=bm[bh];bo=(br.indexOf("%")!==-1);if(bo!==(bl[bh].indexOf("%")!==-1)){bn=(bh===0)?bt.offsetWidth-G.width:bt.offsetHeight-G.height;
bm[bh]=bo?(parseFloat(br)/100*bn)+"px":(parseFloat(br)/bn*100)+"%"}}br=bm.join(" ")
}}return this.parseComplex(bt.style,br,bq,bu,bi)},formatter:aO});U("backgroundSize",{defaultValue:"0 0",formatter:function(i){i+="";
return aO(i.indexOf(" ")===-1?i+" "+i:i)}});U("perspective",{defaultValue:"0px",prefix:true});
U("perspectiveOrigin",{defaultValue:"50% 50%",prefix:true});U("transformStyle",{prefix:true});
U("backfaceVisibility",{prefix:true});U("userSelect",{prefix:true});U("margin",{parser:aU("marginTop,marginRight,marginBottom,marginLeft")});
U("padding",{parser:aU("paddingTop,paddingRight,paddingBottom,paddingLeft")});U("clip",{defaultValue:"rect(0px,0px,0px,0px)",parser:function(bj,bh,i,be,bk,bf){var bi,bg,bd;
if(Z<9){bg=bj.currentStyle;bd=Z<8?" ":",";bi="rect("+bg.clipTop+bd+bg.clipRight+bd+bg.clipBottom+bd+bg.clipLeft+")";
bh=this.format(bh).split(",").join(bd)}else{bi=this.format(I(bj,this.p,W,false,this.dflt));
bh=this.format(bh)}return this.parseComplex(bj.style,bi,bh,bk,bf)}});U("textShadow",{defaultValue:"0px 0px 0px #999",color:true,multi:true});
U("autoRound,strictUnits",{parser:function(i,bf,be,bg,bd){return bd}});U("border",{defaultValue:"0px solid #000",parser:function(bj,bg,i,bd,bk,bf){var bh=I(bj,"borderTopWidth",W,false,"0px"),be=this.format(bg).split(" "),bi=be[0].replace(aw,"");
if(bi!=="px"){bh=(parseFloat(bh)/N(bj,"borderTopWidth",1,bi))+bi}return this.parseComplex(bj.style,this.format(bh+" "+I(bj,"borderTopStyle",W,false,"solid")+" "+I(bj,"borderTopColor",W,false,"#000")),be.join(" "),bk,bf)
},color:true,formatter:function(p){var i=p.split(" ");return i[0]+" "+(i[1]||"solid")+" "+(p.match(aG)||["#000"])[0]
}});U("borderWidth",{parser:aU("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")});
U("float,cssFloat,styleFloat",{parser:function(i,bh,bg,bi,bf,be){var bd=i.style,bj=("cssFloat" in bd)?"cssFloat":"styleFloat";
return new A(bd,bj,0,0,bf,-1,bg,false,0,bd[bj],bh)}});var ai=function(i){var p=this.t,be=p.filter||I(this.data,"filter")||"",bf=(this.s+this.c*i)|0,bd;
if(bf===100){if(be.indexOf("atrix(")===-1&&be.indexOf("radient(")===-1&&be.indexOf("oader(")===-1){p.removeAttribute("filter");
bd=(!I(this.data,"filter"))}else{p.filter=be.replace(au,"");bd=true}}if(!bd){if(this.xn1){p.filter=be=be||("alpha(opacity="+bf+")")
}if(be.indexOf("pacity")===-1){if(bf!==0||!this.xn1){p.filter=be+" alpha(opacity="+bf+")"
}}else{p.filter=be.replace(aR,"opacity="+bf)}}};U("opacity,alpha,autoAlpha",{defaultValue:"1",parser:function(bj,bh,be,bf,bk,bg){var bi=parseFloat(I(bj,"opacity",W,false,"1")),bd=bj.style,i=(be==="autoAlpha");
if(typeof(bh)==="string"&&bh.charAt(1)==="="){bh=((bh.charAt(0)==="-")?-1:1)*parseFloat(bh.substr(2))+bi
}if(i&&bi===1&&I(bj,"visibility",W)==="hidden"&&bh!==0){bi=0}if(af){bk=new A(bd,"opacity",bi,bh-bi,bk)
}else{bk=new A(bd,"opacity",bi*100,(bh-bi)*100,bk);bk.xn1=i?1:0;bd.zoom=1;bk.type=2;
bk.b="alpha(opacity="+bk.s+")";bk.e="alpha(opacity="+(bk.s+bk.c)+")";bk.data=bj;
bk.plugin=bg;bk.setRatio=ai}if(i){bk=new A(bd,"visibility",0,0,bk,-1,null,false,0,((bi!==0)?"inherit":"hidden"),((bh===0)?"hidden":"inherit"));
bk.xs0="inherit";bf._overwriteProps.push(bk.n);bf._overwriteProps.push(be)}return bk
}});var ae=function(i,bd){if(bd){if(i.removeProperty){if(bd.substr(0,2)==="ms"||bd.substr(0,6)==="webkit"){bd="-"+bd
}i.removeProperty(bd.replace(am,"-$1").toLowerCase())}else{i.removeAttribute(bd)
}}},B=function(p){this.t._gsClassPT=this;if(p===1||p===0){this.t.setAttribute("class",(p===0)?this.b:this.e);
var i=this.data,bd=this.t.style;while(i){if(!i.v){ae(bd,i.p)}else{bd[i.p]=i.v}i=i._next
}if(p===1&&this.t._gsClassPT===this){this.t._gsClassPT=null}}else{if(this.t.getAttribute("class")!==this.e){this.t.setAttribute("class",this.e)
}}};U("className",{parser:function(bo,bj,bd,bg,bp,bi,bk){var bm=bo.getAttribute("class")||"",be=bo.style.cssText,bf,bn,i,bh,bl;
bp=bg._classNamePT=new A(bo,bd,0,0,bp,2);bp.setRatio=B;bp.pr=-11;aJ=true;bp.b=bm;
bn=aK(bo,W);i=bo._gsClassPT;if(i){bh={};bl=i.data;while(bl){bh[bl.p]=1;bl=bl._next
}i.setRatio(1)}bo._gsClassPT=bp;bp.e=(bj.charAt(1)!=="=")?bj:bm.replace(new RegExp("(?:\\s|^)"+bj.substr(2)+"(?![\\w-])"),"")+((bj.charAt(0)==="+")?" "+bj.substr(2):"");
bo.setAttribute("class",bp.e);bf=w(bo,bn,aK(bo),bk,bh);bo.setAttribute("class",bm);
bp.data=bf.firstMPT;bo.style.cssText=be;bp=bp.xfirst=bg.parse(bo,bf.difs,bp,bi);
return bp}});var Q=function(be){if(be===1||be===0){if(this.data._totalTime===this.data._totalDuration&&this.data.data!=="isFromStart"){var bh=this.t.style,bk=h.transform.parse,bd,bj,bg,bi,bf;
if(this.e==="all"){bh.cssText="";bi=true}else{bd=this.e.split(" ").join("").split(",");
bg=bd.length;while(--bg>-1){bj=bd[bg];if(h[bj]){if(h[bj].parse===bk){bi=true}else{bj=(bj==="transformOrigin")?ab:h[bj].p
}}ae(bh,bj)}}if(bi){ae(bh,aX);bf=this.t._gsTransform;if(bf){if(bf.svg){this.t.removeAttribute("data-svg-origin");
this.t.removeAttribute("transform")}delete this.t._gsTransform}}}}};U("clearProps",{parser:function(i,bf,be,bg,bd){bd=new A(i,be,0,0,bd,2);
bd.setRatio=Q;bd.e=bf;bd.pr=-10;bd.data=bg._tween;aJ=true;return bd}});ad="bezier,throwProps,physicsProps,physics2D".split(",");
aj=ad.length;while(aj--){o(ad[aj])}ad=aL.prototype;ad._firstPT=ad._lastParsedTransform=ad._transform=null;
ad._onInitTween=function(bg,bi,bn,bf){if(!bg.nodeType){return false}this._target=aI=bg;
this._tween=bn;this._vars=bi;aT=bf;K=bi.autoRound;aJ=false;g=bi.suffixMap||aL.suffixMap;
W=aQ(bg,"");a9=this._overwriteProps;var i=bg.style,bm,bo,bk,be,bl,bd,bj,p,bh;if(aM){if(i.zIndex===""){bm=I(bg,"zIndex",W);
if(bm==="auto"||bm===""){this._addLazySet(i,"zIndex",0)}}}if(typeof(bi)==="string"){be=i.cssText;
bm=aK(bg,W);i.cssText=be+";"+bi;bm=w(bg,bm,aK(bg)).difs;if(!af&&t.test(bi)){bm.opacity=parseFloat(RegExp.$1)
}bi=bm;i.cssText=be}if(bi.className){this._firstPT=bo=h.className.parse(bg,bi.className,"className",this,null,null,bi)
}else{this._firstPT=bo=this.parse(bg,bi,null)}if(this._transformType){bh=(this._transformType===3);
if(!aX){i.zoom=1}else{if(O){aM=true;if(i.zIndex===""){bj=I(bg,"zIndex",W);if(bj==="auto"||bj===""){this._addLazySet(i,"zIndex",0)
}}if(u){this._addLazySet(i,"WebkitBackfaceVisibility",this._vars.WebkitBackfaceVisibility||(bh?"visible":"hidden"))
}}}bk=bo;while(bk&&bk._next){bk=bk._next}p=new A(bg,"transform",0,0,null,2);this._linkCSSP(p,null,bk);
p.setRatio=aX?a2:aH;p.data=this._transform||j(bg,W,true);p.tween=bn;p.pr=-1;a9.pop()
}if(aJ){while(bo){bd=bo._next;bk=be;while(bk&&bk.pr>bo.pr){bk=bk._next}if((bo._prev=bk?bk._prev:bl)){bo._prev._next=bo
}else{be=bo}if((bo._next=bk)){bk._prev=bo}else{bl=bo}bo=bd}this._firstPT=be}return true
};ad.parse=function(bj,bk,br,bh){var bd=bj.style,be,bg,bf,i,bo,bm,bl,bq,bi,bp;for(be in bk){bm=bk[be];
if(typeof(bm)==="function"){bm=bm(aT,aI)}bg=h[be];if(bg){br=bg.parse(bj,bm,be,this,br,bh,bk)
}else{bo=I(bj,be,W)+"";bi=(typeof(bm)==="string");if(be==="color"||be==="fill"||be==="stroke"||be.indexOf("Color")!==-1||(bi&&ag.test(bm))){if(!bi){bm=a6(bm);
bm=((bm.length>3)?"rgba(":"rgb(")+bm.join(",")+")"}br=q(bd,be,bo,bm,true,"transparent",br,0,bh)
}else{if(bi&&an.test(bm)){br=q(bd,be,bo,bm,true,null,br,0,bh)}else{bf=parseFloat(bo);
bl=(bf||bf===0)?bo.substr((bf+"").length):"";if(bo===""||bo==="auto"){if(be==="width"||be==="height"){bf=aS(bj,be,W);
bl="px"}else{if(be==="left"||be==="top"){bf=l(bj,be,W);bl="px"}else{bf=(be!=="opacity")?0:1;
bl=""}}}bp=(bi&&bm.charAt(1)==="=");if(bp){i=parseInt(bm.charAt(0)+"1",10);bm=bm.substr(2);
i*=parseFloat(bm);bq=bm.replace(aw,"")}else{i=parseFloat(bm);bq=bi?bm.replace(aw,""):""
}if(bq===""){bq=(be in g)?g[be]:bl}bm=(i||i===0)?(bp?i+bf:i)+bq:bk[be];if(bl!==bq){if(bq!==""){if(i||i===0){if(bf){bf=N(bj,be,bf,bl);
if(bq==="%"){bf/=N(bj,be,100,"%")/100;if(bk.strictUnits!==true){bo=bf+"%"}}else{if(bq==="em"||bq==="rem"||bq==="vw"||bq==="vh"){bf/=N(bj,be,1,bq)
}else{if(bq!=="px"){i=N(bj,be,i,bq);bq="px"}}}if(bp){if(i||i===0){bm=(i+bf)+bq}}}}}}if(bp){i+=bf
}if((bf||bf===0)&&(i||i===0)){br=new A(bd,be,bf,i-bf,br,0,be,(K!==false&&(bq==="px"||be==="zIndex")),0,bo,bm);
br.xs0=bq}else{if(bd[be]===undefined||!bm&&(bm+""==="NaN"||bm==null)){az("invalid "+be+" tween value: "+bk[be])
}else{br=new A(bd,be,i||bf||0,0,br,-1,be,false,0,bo,bm);br.xs0=(bm==="none"&&(be==="display"||be.indexOf("Style")!==-1))?bo:bm
}}}}}if(bh){if(br&&!br.plugin){br.plugin=bh}}}return br};ad.setRatio=function(p){var bf=this._firstPT,be=0.000001,bh,bg,bd;
if(p===1&&(this._tween._time===this._tween._duration||this._tween._time===0)){while(bf){if(bf.type!==2){if(bf.r&&bf.type!==-1){bh=Math.round(bf.s+bf.c);
if(!bf.type){bf.t[bf.p]=bh+bf.xs0}else{if(bf.type===1){bd=bf.l;bg=bf.xs0+bh+bf.xs1;
for(bd=1;bd<bf.l;bd++){bg+=bf["xn"+bd]+bf["xs"+(bd+1)]}bf.t[bf.p]=bg}}}else{bf.t[bf.p]=bf.e
}}else{bf.setRatio(p)}bf=bf._next}}else{if(p||!(this._tween._time===this._tween._duration||this._tween._time===0)||this._tween._rawPrevTime===-0.000001){while(bf){bh=bf.c*p+bf.s;
if(bf.r){bh=Math.round(bh)}else{if(bh<be){if(bh>-be){bh=0}}}if(!bf.type){bf.t[bf.p]=bh+bf.xs0
}else{if(bf.type===1){bd=bf.l;if(bd===2){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2
}else{if(bd===3){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3}else{if(bd===4){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3+bf.xn3+bf.xs4
}else{if(bd===5){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3+bf.xn3+bf.xs4+bf.xn4+bf.xs5
}else{bg=bf.xs0+bh+bf.xs1;for(bd=1;bd<bf.l;bd++){bg+=bf["xn"+bd]+bf["xs"+(bd+1)]
}bf.t[bf.p]=bg}}}}}else{if(bf.type===-1){bf.t[bf.p]=bf.xs0}else{if(bf.setRatio){bf.setRatio(p)
}}}}bf=bf._next}}else{while(bf){if(bf.type!==2){bf.t[bf.p]=bf.b}else{bf.setRatio(p)
}bf=bf._next}}}};ad._enableTransforms=function(i){this._transform=this._transform||j(this._target,W,true);
this._transformType=(!(this._transform.svg&&M)&&(i||this._transformType===3))?3:2
};var ap=function(i){this.t[this.p]=this.e;this.data._linkCSSP(this,this._next,null,true)
};ad._addLazySet=function(bd,bf,i){var be=this._firstPT=new A(bd,bf,0,0,this._firstPT,2);
be.e=i;be.setRatio=ap;be.data=this};ad._linkCSSP=function(be,p,bd,i){if(be){if(p){p._prev=be
}if(be._next){be._next._prev=be._prev}if(be._prev){be._prev._next=be._next}else{if(this._firstPT===be){this._firstPT=be._next;
i=true}}if(bd){bd._next=be}else{if(!i&&this._firstPT===null){this._firstPT=be}}be._next=p;
be._prev=bd}return be};ad._mod=function(p){var i=this._firstPT;while(i){if(typeof(p[i.p])==="function"&&p[i.p]===Math.round){i.r=1
}i=i._next}};ad._kill=function(bf){var bg=bf,be,bd,i;if(bf.autoAlpha||bf.alpha){bg={};
for(bd in bf){bg[bd]=bf[bd]}bg.opacity=1;if(bg.autoAlpha){bg.visibility=1}}if(bf.className&&(be=this._classNamePT)){i=be.xfirst;
if(i&&i._prev){this._linkCSSP(i._prev,be._next,i._prev._prev)}else{if(i===this._firstPT){this._firstPT=be._next
}}if(be._next){this._linkCSSP(be._next,be._next._next,i._prev)}this._classNamePT=null
}be=this._firstPT;while(be){if(be.plugin&&be.plugin!==bd&&be.plugin._kill){be.plugin._kill(bf);
bd=be.plugin}be=be._next}return L.prototype._kill.call(this,bg)};var a8=function(bh,bg,p){var be,bd,bi,bf;
if(bh.slice){bd=bh.length;while(--bd>-1){a8(bh[bd],bg,p)}return}be=bh.childNodes;
bd=be.length;while(--bd>-1){bi=be[bd];bf=bi.type;if(bi.style){bg.push(aK(bi));if(p){p.push(bi)
}}if((bf===1||bf===9||bf===11)&&bi.childNodes.length){a8(bi,bg,p)}}};aL.cascadeTo=function(bj,bf,bl){var bp=y.to(bj,bf,bl),bh=[bp],bm=[],bk=[],bi=[],bo=y._internals.reservedProps,bg,be,bd,bn;
bj=bp._targets||bp.target;a8(bj,bm,bi);bp.render(bf,true,true);a8(bj,bk);bp.render(0,true,true);
bp._enabled(true);bg=bi.length;while(--bg>-1){be=w(bi[bg],bm[bg],bk[bg]);if(be.firstMPT){be=be.difs;
for(bd in bl){if(bo[bd]){be[bd]=bl[bd]}}bn={};for(bd in be){bn[bd]=bm[bg][bd]}bh.push(y.fromTo(bi[bg],bf,bn,be))
}}return bh};L.activate([aL]);return aL},true)});if(d._gsDefine){d._gsQueue.pop()()
}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)
}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");c.exports=h()}}}("CSSPlugin"))
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],195:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.6.4
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("plugins.CSSRulePlugin",["plugins.TweenPlugin","TweenLite","plugins.CSSPlugin"],function(h,j,l){var i=function(){h.call(this,"cssRule");
this._overwriteProps.length=0},m=d.document,g=l.prototype.setRatio,k=i.prototype=new l();
k._propName="cssRule";k.constructor=i;i.version="0.6.4";i.API=2;i.getRule=function(o){var v=m.all?"rules":"cssRules",w=m.styleSheets,q=w.length,u=(o.charAt(0)===":"),p,n,r,t;
o=(u?"":",")+o.toLowerCase()+",";if(u){t=[]}while(--q>-1){try{n=w[q][v];if(!n){continue
}p=n.length}catch(s){console.log(s);continue}while(--p>-1){r=n[p];if(r.selectorText&&(","+r.selectorText.split("::").join(":").toLowerCase()+",").indexOf(o)!==-1){if(u){t.push(r.style)
}else{return r.style}}}}return t};k._onInitTween=function(p,o,n){if(p.cssText===undefined){return false
}var q=p._gsProxy=p._gsProxy||m.createElement("div");this._ss=p;this._proxy=q.style;
q.style.cssText=p.cssText;l.prototype._onInitTween.call(this,q,o,n);return true
};k.setRatio=function(n){g.call(this,n);this._ss.cssText=this._proxy.cssText};h.activate([i]);
return i},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("CSSRulePlugin"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],196:[function(b,c,a){(function(f){
/*!
 * VERSION: beta 1.5.0
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var r=/(\d|\.)+/g,l=/(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,q={aqua:[0,255,255],lime:[0,255,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,255],navy:[0,0,128],white:[255,255,255],fuchsia:[255,0,255],olive:[128,128,0],yellow:[255,255,0],orange:[255,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[255,0,0],pink:[255,192,203],cyan:[0,255,255],transparent:[255,255,255,0]},m=function(t,s,p){t=(t<0)?t+1:(t>1)?t-1:t;
return((((t*6<1)?s+(p-s)*t*6:(t<0.5)?p:(t*3<2)?s+(p-s)*(2/3-t)*6:s)*255)+0.5)|0
},h=function(E,w){var D,p,z,C,x,F,t,B,u,A,y;if(!E){D=q.black}else{if(typeof(E)==="number"){D=[E>>16,(E>>8)&255,E&255]
}else{if(E.charAt(E.length-1)===","){E=E.substr(0,E.length-1)}if(q[E]){D=q[E]}else{if(E.charAt(0)==="#"){if(E.length===4){p=E.charAt(1);
z=E.charAt(2);C=E.charAt(3);E="#"+p+p+z+z+C+C}E=parseInt(E.substr(1),16);D=[E>>16,(E>>8)&255,E&255]
}else{if(E.substr(0,3)==="hsl"){D=y=E.match(r);if(!w){x=(Number(D[0])%360)/360;
F=Number(D[1])/100;t=Number(D[2])/100;z=(t<=0.5)?t*(F+1):t+F-t*F;p=t*2-z;if(D.length>3){D[3]=Number(E[3])
}D[0]=m(x+1/3,p,z);D[1]=m(x,p,z);D[2]=m(x-1/3,p,z)}else{if(E.indexOf("=")!==-1){return E.match(l)
}}}else{D=E.match(r)||q.transparent}}}D[0]=Number(D[0]);D[1]=Number(D[1]);D[2]=Number(D[2]);
if(D.length>3){D[3]=Number(D[3])}}}if(w&&!y){p=D[0]/255;z=D[1]/255;C=D[2]/255;B=Math.max(p,z,C);
u=Math.min(p,z,C);t=(B+u)/2;if(B===u){x=F=0}else{A=B-u;F=t>0.5?A/(2-B-u):A/(B+u);
x=(B===p)?(z-C)/A+(z<C?6:0):(B===z)?(C-p)/A+2:(p-z)/A+4;x*=60}D[0]=(x+0.5)|0;D[1]=(F*100+0.5)|0;
D[2]=(t*100+0.5)|0}return D},o=function(x,z){var p=(x+"").match(k)||[],y=0,v=p.length?"":x,w,u,t;
for(w=0;w<p.length;w++){u=p[w];t=x.substr(y,x.indexOf(u,y)-y);y+=t.length+u.length;
u=h(u,z);if(u.length===3){u.push(1)}v+=t+(z?"hsla("+u[0]+","+u[1]+"%,"+u[2]+"%,"+u[3]:"rgba("+u.join(","))+")"
}return v+x.substr(y)},g,i,j=d.TweenLite,k="(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b",n=d._gsDefine.plugin({propName:"colorProps",version:"1.5.0",priority:-1,API:2,global:true,init:function(y,v,u,s){var x,t,w,z;
this._target=y;this._proxy=t=((v.format+"").toUpperCase()==="NUMBER")?{}:0;for(x in v){if(x!=="format"){if(t){this._firstNumPT=w={_next:this._firstNumPT,t:y,p:x,f:(typeof(y[x])==="function")};
t[x]="rgb("+h(!w.f?y[x]:y[((x.indexOf("set")||typeof(y["get"+x.substr(3)])!=="function")?x:"get"+x.substr(3))]()).join(",")+")";
z=v[x];if(typeof(z)==="function"){z=z(s,y)}this._addTween(t,x,"get",((typeof(z)==="number")?"rgb("+h(z,false).join(",")+")":z),x,null,null,i)
}else{this._addTween(y,x,"get",v[x],x,null,null,i,s)}}}return true},set:function(p){var s=this._firstNumPT,t;
this._super.setRatio.call(this,p);while(s){t=h(this._proxy[s.p],false);t=t[0]<<16|t[1]<<8|t[2];
if(s.f){this._target[s.p](t)}else{this._target[s.p]=t}s=s._next}}});for(g in q){k+="|"+g+"\\b"
}k=new RegExp(k+")","gi");n.colorStringFilter=i=function(p){var s=p[0]+p[1],t;k.lastIndex=0;
if(k.test(s)){t=(s.indexOf("hsl(")!==-1||s.indexOf("hsla(")!==-1);p[0]=o(p[0],t);
p[1]=o(p[1],t)}};if(!j.defaultStringFilter){j.defaultStringFilter=n.colorStringFilter
}n.parseColor=h;g=n.prototype;g._firstNumPT=null;g._kill=function(t){var s=this._firstNumPT,p;
while(s){if(s.p in t){if(s===g._firstNumPT){this._firstNumPT=s._next}if(p){p._next=s._next
}}else{p=s}s=s._next}return this._super._kill(t)}});if(d._gsDefine){d._gsQueue.pop()()
}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)
}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");c.exports=h()}}}("ColorPropsPlugin"))
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],197:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.3.0
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine.plugin({propName:"directionalRotation",version:"0.3.0",API:2,init:function(l,o,r,k){if(typeof(o)!=="object"){o={rotation:o}
}this.finals={};var s=(o.useRadians===true)?Math.PI*2:360,j=0.000001,h,q,g,i,n,m;
for(h in o){if(h!=="useRadians"){i=o[h];if(typeof(i)==="function"){i=i(k,l)}m=(i+"").split("_");
q=m[0];g=parseFloat((typeof(l[h])!=="function")?l[h]:l[((h.indexOf("set")||typeof(l["get"+h.substr(3)])!=="function")?h:"get"+h.substr(3))]());
i=this.finals[h]=(typeof(q)==="string"&&q.charAt(1)==="=")?g+parseInt(q.charAt(0)+"1",10)*Number(q.substr(2)):Number(q)||0;
n=i-g;if(m.length){q=m.join("_");if(q.indexOf("short")!==-1){n=n%s;if(n!==n%(s/2)){n=(n<0)?n+s:n-s
}}if(q.indexOf("_cw")!==-1&&n<0){n=((n+s*9999999999)%s)-((n/s)|0)*s}else{if(q.indexOf("ccw")!==-1&&n>0){n=((n-s*9999999999)%s)-((n/s)|0)*s
}}}if(n>j||n<-j){this._addTween(l,h,g,g+n,h);this._overwriteProps.push(h)}}}return true
},set:function(g){var h;if(g!==1){this._super.setRatio.call(this,g)}else{h=this._firstPT;
while(h){if(h.f){h.t[h.p](this.finals[h.p])}else{h.t[h.p]=this.finals[h.p]}h=h._next
}}}})._autoCSS=true});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("DirectionalRotationPlugin"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],198:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.15.0
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * Requires TweenLite and CSSPlugin version 1.17.0 or later (TweenMax contains both TweenLite and CSSPlugin). ThrowPropsPlugin is required for momentum-based continuation of movement after the mouse/touch is released (ThrowPropsPlugin is a membership benefit of Club GreenSock - http://greensock.com/club/).
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 *
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("utils.Draggable",["events.EventDispatcher","TweenLite","plugins.CSSPlugin"],function(aD,B,aw){var a0={css:{}},T={css:{}},S={css:{}},aZ={css:{}},C=d._gsDefine.globals,z={},R={style:{}},aL=d.document||{createElement:function(){return R
}},P=aL.documentElement||{},aT=function(p){return aL.createElementNS?aL.createElementNS("http://www.w3.org/1999/xhtml",p):aL.createElement(p)
},a6=aT("div"),x=[],aj=function(){return false},aA=180/Math.PI,az=999999999999999,ac=Date.now||function(){return new Date().getTime()
},m=!!(!aL.addEventListener&&aL.all),t=aL.createElement("div"),K=[],a4={},aG=0,a3=/^(?:a|input|textarea|button|select)$/i,y=0,aR,ak,aJ=(navigator.userAgent.toLowerCase().indexOf("android")!==-1),Z=0,aE={},ai={},l=function(a9){if(typeof(a9)==="string"){a9=B.selector(a9)
}if(!a9||a9.nodeType){return[a9]}var p=[],a8=a9.length,ba;for(ba=0;ba!==a8;p.push(a9[ba++])){}return p
},W=function(ba,a8){var bb={},a9;if(a8){for(a9 in ba){bb[a9]=ba[a9]*a8}}else{for(a9 in ba){bb[a9]=ba[a9]
}}return bb},U,A=function(){var p=K.length;while(--p>-1){K[p]()}},an=function(p){K.push(p);
if(K.length===1){B.ticker.addEventListener("tick",A,this,false,1)}},ae=function(a8){var p=K.length;
while(--p>-1){if(K[p]===a8){K.splice(p,1)}}B.to(ad,0,{overwrite:"all",delay:15,onComplete:ad})
},ad=function(){if(!K.length){B.ticker.removeEventListener("tick",A)}},ay=function(ba,a9){var a8;
for(a8 in a9){if(ba[a8]===undefined){ba[a8]=a9[a8]}}return ba},at=function(){return(window.pageYOffset!=null)?window.pageYOffset:(aL.scrollTop!=null)?aL.scrollTop:P.scrollTop||aL.body.scrollTop||0
},av=function(){return(window.pageXOffset!=null)?window.pageXOffset:(aL.scrollLeft!=null)?aL.scrollLeft:P.scrollLeft||aL.body.scrollLeft||0
},aX=function(p,a8){aM(p,"scroll",a8);if(!aK(p.parentNode)){aX(p.parentNode,a8)
}},N=function(p,a8){aH(p,"scroll",a8);if(!aK(p.parentNode)){N(p.parentNode,a8)}},aK=function(p){return !!(!p||p===P||p===aL||p===aL.body||p===window||!p.nodeType||!p.parentNode)
},aQ=function(ba,bb){var bc=(bb==="x")?"Width":"Height",a8="scroll"+bc,a9="client"+bc,p=aL.body;
return Math.max(0,aK(ba)?Math.max(P[a8],p[a8])-(window["inner"+bc]||P[a9]||p[a9]):ba[a8]-ba[a9])
},au=function(a9){var a8=aK(a9),p=aQ(a9,"x"),ba=aQ(a9,"y");if(a8){a9=ai}else{au(a9.parentNode)
}a9._gsMaxScrollX=p;a9._gsMaxScrollY=ba;a9._gsScrollX=a9.scrollLeft||0;a9._gsScrollY=a9.scrollTop||0
},aF=function(a8,p){a8=a8||window.event;z.pageX=a8.clientX+aL.body.scrollLeft+P.scrollLeft;
z.pageY=a8.clientY+aL.body.scrollTop+P.scrollTop;if(p){a8.returnValue=false}return z
},ap=function(p){if(!p){return p}if(typeof(p)==="string"){p=B.selector(p)}if(p.length&&p!==window&&p[0]&&p[0].style&&!p.nodeType){p=p[0]
}return(p===window||(p.nodeType&&p.style))?p:null},a5=function(bd,bc){var bb=bd.style,a8,ba,a9;
if(bb[bc]===undefined){a9=["O","Moz","ms","Ms","Webkit"];ba=5;a8=bc.charAt(0).toUpperCase()+bc.substr(1);
while(--ba>-1&&bb[a9[ba]+a8]===undefined){}if(ba<0){return""}aR=(ba===3)?"ms":a9[ba];
bc=aR+a8}return bc},aP=function(bb,ba,a9){var a8=bb.style;if(!a8){return}if(a8[ba]===undefined){ba=a5(bb,ba)
}if(a9==null){if(a8.removeProperty){a8.removeProperty(ba.replace(/([A-Z])/g,"-$1").toLowerCase())
}else{a8.removeAttribute(ba)}}else{if(a8[ba]!==undefined){a8[ba]=a9}}},aB=aL.defaultView?aL.defaultView.getComputedStyle:aj,H=/(?:Left|Right|Width)/i,ah=/(?:\d|\-|\+|=|#|\.)*/g,O=function(bh,ba,bf,bd,a8){if(bd==="px"||!bd){return bf
}if(bd==="auto"||!bf){return 0}var bg=H.test(ba),bb=bh,a9=a6.style,bc=(bf<0),be;
if(bc){bf=-bf}if(bd==="%"&&ba.indexOf("border")!==-1){be=(bf/100)*(bg?bh.clientWidth:bh.clientHeight)
}else{a9.cssText="border:0 solid red;position:"+I(bh,"position",true)+";line-height:0;";
if(bd==="%"||!bb.appendChild){bb=bh.parentNode||aL.body;a9[(bg?"width":"height")]=bf+bd
}else{a9[(bg?"borderLeftWidth":"borderTopWidth")]=bf+bd}bb.appendChild(a6);be=parseFloat(a6[(bg?"offsetWidth":"offsetHeight")]);
bb.removeChild(a6);if(be===0&&!a8){be=O(bh,ba,bf,bd,true)}}return bc?-be:be},h=function(a9,bb){if(I(a9,"position",true)!=="absolute"){return 0
}var ba=((bb==="left")?"Left":"Top"),a8=I(a9,"margin"+ba,true);return a9["offset"+ba]-(O(a9,bb,parseFloat(a8),(a8+"").replace(ah,""))||0)
},I=function(p,bb,a9){var ba=(p._gsTransform||{})[bb],a8;if(ba||ba===0){return ba
}else{if(p.style[bb]){ba=p.style[bb]}else{if((a8=aB(p))){ba=a8.getPropertyValue(bb.replace(/([A-Z])/g,"-$1").toLowerCase());
ba=(ba||a8.length)?ba:a8[bb]}else{if(p.currentStyle){ba=p.currentStyle[bb]}}}}if(ba==="auto"&&(bb==="top"||bb==="left")){ba=h(p,bb)
}return a9?ba:parseFloat(ba)||0},a1=function(p,a9,bb){var ba=p.vars,bc=ba[bb],a8=p._listeners[a9];
if(typeof(bc)==="function"){bc.apply(ba[bb+"Scope"]||ba.callbackScope||p,ba[bb+"Params"]||[p.pointerEvent])
}if(a8){p.dispatchEvent(a9)}},s=function(bb,p){var ba=ap(bb),a9,a8,bc;if(!ba){if(bb.left!==undefined){bc=L(p);
return{left:bb.left-bc.x,top:bb.top-bc.y,width:bb.width,height:bb.height}}a8=bb.min||bb.minX||bb.minRotation||0;
a9=bb.min||bb.minY||0;return{left:a8,top:a9,width:(bb.max||bb.maxX||bb.maxRotation||0)-a8,height:(bb.max||bb.maxY||0)-a9}
}return r(ba,p)},D,ao,G,ar,ab,v=function(){if(!aL.createElementNS){D=0;ao=false;
return}var a8=aT("div"),bb=aL.createElementNS("http://www.w3.org/2000/svg","svg"),a9=aT("div"),ba=a8.style,be=aL.body||P,bd,bc,bf,p;
if(aL.body&&aI){ba.position="absolute";be.appendChild(a9);a9.appendChild(a8);p=a8.offsetParent;
a9.style[aI]="rotate(1deg)";ab=(a8.offsetParent===p);a9.style.position="absolute";
ba.height="10px";p=a8.offsetTop;a9.style.border="5px solid red";ar=(p!==a8.offsetTop);
be.removeChild(a9)}ba=bb.style;bb.setAttributeNS(null,"width","400px");bb.setAttributeNS(null,"height","400px");
bb.setAttributeNS(null,"viewBox","0 0 400 400");ba.display="block";ba.boxSizing="border-box";
ba.border="0px solid red";ba.transform="none";a8.style.cssText="width:100px;height:100px;overflow:scroll;-ms-overflow-style:none;";
be.appendChild(a8);a8.appendChild(bb);bf=bb.createSVGPoint().matrixTransform(bb.getScreenCTM());
bc=bf.y;a8.scrollTop=100;bf.x=bf.y=0;bf=bf.matrixTransform(bb.getScreenCTM());G=(bc-bf.y<100.1)?0:bc-bf.y-150;
a8.removeChild(bb);be.removeChild(a8);be.appendChild(bb);bd=bb.getScreenCTM();bc=bd.e;
ba.border="50px solid red";bd=bb.getScreenCTM();if(bc===0&&bd.e===0&&bd.f===0&&bd.a===1){D=1;
ao=true}else{D=(bc!==bd.e)?1:0;ao=(bd.a!==1)}be.removeChild(bb)},g=(a5(a6,"perspective")!==""),X=a5(a6,"transformOrigin").replace(/^ms/g,"Ms").replace(/([A-Z])/g,"-$1").toLowerCase(),aI=a5(a6,"transform"),aq=aI.replace(/^ms/g,"Ms").replace(/([A-Z])/g,"-$1").toLowerCase(),aU={},aS={},ag=window.SVGElement,o=function(p){return !!(ag&&typeof(p.getBBox)==="function"&&p.getCTM&&(!p.parentNode||(p.parentNode.getBBox&&p.parentNode.getCTM)))
},a7=(((/MSIE ([0-9]{1,}[\.0-9]{0,})/).exec(navigator.userAgent)||(/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/).exec(navigator.userAgent))&&parseFloat(RegExp.$1)<11),M=[],a2=[],i=function(bg){if(!bg.getBoundingClientRect||!bg.parentNode||!aI){return{offsetTop:0,offsetLeft:0,scaleX:1,scaleY:1,offsetParent:P}
}if(aY.cacheSVGData!==false&&bg._dCache&&bg._dCache.lastUpdate===B.ticker.frame){return bg._dCache
}var bi=bg,a8=w(bg),bc,bl,a9,bf,bb,bd,bj,bh,p,be,ba,bk;a8.lastUpdate=B.ticker.frame;
if(bg.getBBox&&!a8.isSVGRoot){bi=bg.parentNode;bc=bg.getBBox();while(bi&&(bi.nodeName+"").toLowerCase()!=="svg"){bi=bi.parentNode
}bf=i(bi);a8.offsetTop=bc.y*bf.scaleY;a8.offsetLeft=bc.x*bf.scaleX;a8.scaleX=bf.scaleX;
a8.scaleY=bf.scaleY;a8.offsetParent=bi||P;return a8}a9=a8.offsetParent;if(a9===aL.body){a9=P
}a2.length=M.length=0;while(bi){bb=I(bi,aI,true);if(bb!=="matrix(1, 0, 0, 1, 0, 0)"&&bb!=="none"&&bb!=="translate3d(0px, 0px, 0px)"){a2.push(bi);
M.push(bi.style[aI]);bi.style[aI]="none"}if(bi===a9){break}bi=bi.parentNode}bl=a9.getBoundingClientRect();
bb=bg.getScreenCTM();bh=bg.createSVGPoint();bj=bh.matrixTransform(bb);bh.x=bh.y=10;
bh=bh.matrixTransform(bb);a8.scaleX=(bh.x-bj.x)/10;a8.scaleY=(bh.y-bj.y)/10;if(D===undefined){v()
}if(a8.borderBox&&!ao&&bg.getAttribute("width")){bf=aB(bg)||{};p=(parseFloat(bf.borderLeftWidth)+parseFloat(bf.borderRightWidth))||0;
be=(parseFloat(bf.borderTopWidth)+parseFloat(bf.borderBottomWidth))||0;ba=parseFloat(bf.width)||0;
bk=parseFloat(bf.height)||0;a8.scaleX*=(ba-p)/ba;a8.scaleY*=(bk-be)/bk}if(G){bc=bg.getBoundingClientRect();
a8.offsetLeft=bc.left-bl.left;a8.offsetTop=bc.top-bl.top}else{a8.offsetLeft=bj.x-bl.left;
a8.offsetTop=bj.y-bl.top}a8.offsetParent=a9;bd=a2.length;while(--bd>-1){a2[bd].style[aI]=M[bd]
}return a8},L=function(bc,bb){bb=bb||{};if(!bc||bc===P||!bc.parentNode||bc===window){return{x:0,y:0}
}var ba=aB(bc),a9=(X&&ba)?ba.getPropertyValue(X):"50% 50%",a8=a9.split(" "),p=(a9.indexOf("left")!==-1)?"0%":(a9.indexOf("right")!==-1)?"100%":a8[0],bd=(a9.indexOf("top")!==-1)?"0%":(a9.indexOf("bottom")!==-1)?"100%":a8[1];
if(bd==="center"||bd==null){bd="50%"}if(p==="center"||isNaN(parseFloat(p))){p="50%"
}if(bc.getBBox&&o(bc)){if(!bc._gsTransform){B.set(bc,{x:"+=0",overwrite:false});
if(bc._gsTransform.xOrigin===undefined){console.log("Draggable requires at least GSAP 1.17.0")
}}a9=bc.getBBox();bb.x=(bc._gsTransform.xOrigin-a9.x);bb.y=(bc._gsTransform.yOrigin-a9.y)
}else{if(bc.getBBox&&(p+bd).indexOf("%")!==-1){bc=bc.getBBox();bc={offsetWidth:bc.width,offsetHeight:bc.height}
}bb.x=((p.indexOf("%")!==-1)?bc.offsetWidth*parseFloat(p)/100:parseFloat(p));bb.y=((bd.indexOf("%")!==-1)?bc.offsetHeight*parseFloat(bd)/100:parseFloat(bd))
}return bb},w=function(ba){if(aY.cacheSVGData!==false&&ba._dCache&&ba._dCache.lastUpdate===B.ticker.frame){return ba._dCache
}var p=ba._dCache=ba._dCache||{},a8=aB(ba),bc=(ba.getBBox&&o(ba)),a9=((ba.nodeName+"").toLowerCase()==="svg"),bb;
p.isSVG=bc;p.isSVGRoot=a9;p.borderBox=(a8.boxSizing==="border-box");p.computedStyle=a8;
if(a9){bb=ba.parentNode||P;bb.insertBefore(a6,ba);p.offsetParent=a6.offsetParent||P;
bb.removeChild(a6)}else{if(bc){bb=ba.parentNode;while(bb&&(bb.nodeName+"").toLowerCase()!=="svg"){bb=bb.parentNode
}p.offsetParent=bb}else{p.offsetParent=ba.offsetParent}}return p},V=function(bs,bk,bo,bm){if(bs===window||!bs||!bs.style||!bs.parentNode){return[1,0,0,1,0,0]
}var bh=bs._dCache||w(bs),bd=bs.parentNode,bc=bd._dCache||w(bd),ba=bh.computedStyle,a9=bh.isSVG?bc.offsetParent:bd.offsetParent,bn,bp,bb,p,bg,bl,bj,bt,br,bq,bi,a8,bf,be;
bn=(bh.isSVG&&(bs.style[aI]+"").indexOf("matrix")!==-1)?bs.style[aI]:ba?ba.getPropertyValue(aq):bs.currentStyle?bs.currentStyle[aI]:"1,0,0,1,0,0";
if(bs.getBBox&&(bs.getAttribute("transform")+"").indexOf("matrix")!==-1){bn=bs.getAttribute("transform")
}bn=(bn+"").match(/(?:\-|\.|\b)(\d|\.|e\-)+/g)||[1,0,0,1,0,0];if(bn.length>6){bn=[bn[0],bn[1],bn[4],bn[5],bn[12],bn[13]]
}if(bm){bn[4]=bn[5]=0}else{if(bh.isSVG&&(bg=bs._gsTransform)&&(bg.xOrigin||bg.yOrigin)){bn[0]=parseFloat(bn[0]);
bn[1]=parseFloat(bn[1]);bn[2]=parseFloat(bn[2]);bn[3]=parseFloat(bn[3]);bn[4]=parseFloat(bn[4])-(bg.xOrigin-(bg.xOrigin*bn[0]+bg.yOrigin*bn[2]));
bn[5]=parseFloat(bn[5])-(bg.yOrigin-(bg.xOrigin*bn[1]+bg.yOrigin*bn[3]))}}if(bk){if(D===undefined){v()
}bb=(bh.isSVG||bh.isSVGRoot)?i(bs):bs;if(bh.isSVG){p=bs.getBBox();bq=(bc.isSVGRoot)?{x:0,y:0}:bd.getBBox();
bb={offsetLeft:p.x-bq.x,offsetTop:p.y-bq.y,offsetParent:bh.offsetParent}}else{if(bh.isSVGRoot){bi=parseInt(ba.borderTopWidth,10)||0;
a8=parseInt(ba.borderLeftWidth,10)||0;bf=((bn[0]-D)*a8+bn[2]*bi);be=(bn[1]*a8+(bn[3]-D)*bi);
bl=bk.x;bj=bk.y;bt=(bl-(bl*bn[0]+bj*bn[2]));br=(bj-(bl*bn[1]+bj*bn[3]));bn[4]=parseFloat(bn[4])+bt;
bn[5]=parseFloat(bn[5])+br;bk.x-=bt;bk.y-=br;bl=bb.scaleX;bj=bb.scaleY;bk.x*=bl;
bk.y*=bj;bn[0]*=bl;bn[1]*=bj;bn[2]*=bl;bn[3]*=bj;if(!a7){bk.x+=bf;bk.y+=be}}else{if(!ar&&bs.offsetParent){bk.x+=parseInt(I(bs.offsetParent,"borderLeftWidth"),10)||0;
bk.y+=parseInt(I(bs.offsetParent,"borderTopWidth"),10)||0}}}bp=(bd===P||bd===aL.body);
bn[4]=Number(bn[4])+bk.x+(bb.offsetLeft||0)-bo.x-(bp?0:bd.scrollLeft||0);bn[5]=Number(bn[5])+bk.y+(bb.offsetTop||0)-bo.y-(bp?0:bd.scrollTop||0);
if(bd&&I(bs,"position",ba)==="fixed"){bn[4]+=av();bn[5]+=at()}if(bd&&bd!==P&&a9===bb.offsetParent&&!bc.isSVG&&(!ab||V(bd).join("")==="100100")){bb=(bc.isSVGRoot)?i(bd):bd;
bn[4]-=bb.offsetLeft||0;bn[5]-=bb.offsetTop||0;if(!ar&&bc.offsetParent&&!bh.isSVG&&!bh.isSVGRoot){bn[4]-=parseInt(I(bc.offsetParent,"borderLeftWidth"),10)||0;
bn[5]-=parseInt(I(bc.offsetParent,"borderTopWidth"),10)||0}}}return bn},aO=function(bd,p){if(!bd||bd===window||!bd.parentNode){return[1,0,0,1,0,0]
}var bc=L(bd,aU),ba=L(bd.parentNode,aS),a8=V(bd,bc,ba),bi,bh,bf,be,bb,a9,bj,bg;
while((bd=bd.parentNode)&&bd.parentNode&&bd!==P){bc=ba;ba=L(bd.parentNode,(bc===aU)?aS:aU);
bj=V(bd,bc,ba);bi=a8[0];bh=a8[1];bf=a8[2];be=a8[3];bb=a8[4];a9=a8[5];a8[0]=bi*bj[0]+bh*bj[2];
a8[1]=bi*bj[1]+bh*bj[3];a8[2]=bf*bj[0]+be*bj[2];a8[3]=bf*bj[1]+be*bj[3];a8[4]=bb*bj[0]+a9*bj[2]+bj[4];
a8[5]=bb*bj[1]+a9*bj[3]+bj[5]}if(p){bi=a8[0];bh=a8[1];bf=a8[2];be=a8[3];bb=a8[4];
a9=a8[5];bg=(bi*be-bh*bf);a8[0]=be/bg;a8[1]=-bh/bg;a8[2]=-bf/bg;a8[3]=bi/bg;a8[4]=(bf*a9-be*bb)/bg;
a8[5]=-(bi*a9-bh*bb)/bg}return a8},q=function(bd,bc,bf,bb,ba){bd=ap(bd);var a9=aO(bd,false,ba),a8=bc.x,be=bc.y;
if(bf){L(bd,bc);a8-=bc.x;be-=bc.y}bb=(bb===true)?bc:bb||{};bb.x=a8*a9[0]+be*a9[2]+a9[4];
bb.y=a8*a9[1]+be*a9[3]+a9[5];return bb},af=function(bb,ba,a9){var a8=bb.x*ba[0]+bb.y*ba[2]+ba[4],bc=bb.x*ba[1]+bb.y*ba[3]+ba[5];
bb.x=a8*a9[0]+bc*a9[2]+a9[4];bb.y=a8*a9[1]+bc*a9[3]+a9[5];return bb},r=function(bs,bd,bt){if(!(bs=ap(bs))){return null
}bd=ap(bd);var bo=(bs.getBBox&&o(bs)),bw,be,bu,bm,bh,bg,bi,bb,ba,a9,p,a8,br,bn,bk,bc,bl,bj,bq,bp,bv,bf;
if(bs===window){bm=at();be=av();bu=be+(P.clientWidth||bs.innerWidth||aL.body.clientWidth||0);
bh=bm+(((bs.innerHeight||0)-20<P.clientHeight)?P.clientHeight:bs.innerHeight||aL.body.clientHeight||0)
}else{if(bd===undefined||bd===window){return bs.getBoundingClientRect()}else{bw=L(bs);
be=-bw.x;bm=-bw.y;if(bo){a8=bs.getBBox();br=a8.width;bn=a8.height}else{if((bs.nodeName+"").toLowerCase()!=="svg"&&bs.offsetWidth){br=bs.offsetWidth;
bn=bs.offsetHeight}else{bv=aB(bs);br=parseFloat(bv.width);bn=parseFloat(bv.height)
}}bu=be+br;bh=bm+bn;if(bs.nodeName.toLowerCase()==="svg"&&!m){bk=i(bs);bf=bk.computedStyle||{};
bj=(bs.getAttribute("viewBox")||"0 0").split(" ");bq=parseFloat(bj[0]);bp=parseFloat(bj[1]);
bc=parseFloat(bf.borderLeftWidth)||0;bl=parseFloat(bf.borderTopWidth)||0;bu-=br-((br-bc)/bk.scaleX)-bq;
bh-=bn-((bn-bl)/bk.scaleY)-bp;be-=bc/bk.scaleX-bq;bm-=bl/bk.scaleY-bp;if(bv){bu+=(parseFloat(bf.borderRightWidth)+bc)/bk.scaleX;
bh+=(bl+parseFloat(bf.borderBottomWidth))/bk.scaleY}}}}if(bs===bd){return{left:be,top:bm,width:bu-be,height:bh-bm}
}bg=aO(bs);bi=aO(bd,true);bb=af({x:be,y:bm},bg,bi);ba=af({x:bu,y:bm},bg,bi);a9=af({x:bu,y:bh},bg,bi);
p=af({x:be,y:bh},bg,bi);be=Math.min(bb.x,ba.x,a9.x,p.x);bm=Math.min(bb.y,ba.y,a9.y,p.y);
aE.x=aE.y=0;if(bt){L(bd,aE)}return{left:be+aE.x,top:bm+aE.y,width:Math.max(bb.x,ba.x,a9.x,p.x)-be,height:Math.max(bb.y,ba.y,a9.y,p.y)-bm}
},aa=function(p){return(p&&p.length&&p[0]&&((p[0].nodeType&&p[0].style&&!p.nodeType)||(p[0].length&&p[0][0])))?true:false
},k=function(a9){var p=[],a8=a9.length,bb,bc,ba;for(bb=0;bb<a8;bb++){bc=a9[bb];
if(aa(bc)){ba=bc.length;for(ba=0;ba<bc.length;ba++){p.push(bc[ba])}}else{if(bc&&bc.length!==0){p.push(bc)
}}}return p},F=(("ontouchstart" in P)&&("orientation" in window)),u=(function(a9){var p=a9.split(","),bb=((a6.onpointerdown!==undefined)?"pointerdown,pointermove,pointerup,pointercancel":(a6.onmspointerdown!==undefined)?"MSPointerDown,MSPointerMove,MSPointerUp,MSPointerCancel":a9).split(","),ba={},a8=8;
while(--a8>-1){ba[p[a8]]=bb[a8];ba[bb[a8]]=p[a8]}return ba}("touchstart,touchmove,touchend,touchcancel")),aM=function(a8,a9,ba,p){if(a8.addEventListener){a8.addEventListener(u[a9]||a9,ba,p)
}else{if(a8.attachEvent){a8.attachEvent("on"+a9,ba)}}},aH=function(p,a8,a9){if(p.removeEventListener){p.removeEventListener(u[a8]||a8,a9)
}else{if(p.detachEvent){p.detachEvent("on"+a8,a9)}}},n=function(a9,p){var a8=a9.length;
while(--a8>-1){if(a9[a8].identifier===p){return true}}return false},Q=function(p){ak=(p.touches&&y<p.touches.length);
aH(p.target,"touchend",Q)},aV=function(p){ak=(p.touches&&y<p.touches.length);aM(p.target,"touchend",Q)
},al=function(bg,a8,bd,a9,bc,bf){var bb={},be,ba,p;if(a8){if(bc!==1&&a8 instanceof Array){bb.end=be=[];
p=a8.length;if(typeof(a8[0])==="object"){for(ba=0;ba<p;ba++){be[ba]=W(a8[ba],bc)
}}else{for(ba=0;ba<p;ba++){be[ba]=a8[ba]*bc}}bd+=1.1;a9-=1.1}else{if(typeof(a8)==="function"){bb.end=function(bi){var bh=a8.call(bg,bi),bk,bj;
if(bc!==1&&typeof(bh)==="object"){bk={};for(bj in bh){bk[bj]=bh[bj]*bc}bh=bk}return bh
}}else{bb.end=a8}}}if(bd||bd===0){bb.max=bd}if(a9||a9===0){bb.min=a9}if(bf){bb.velocity=0
}return bb},aC=function(a8){var p;return(!a8||!a8.getAttribute||a8.nodeName==="BODY")?false:((p=a8.getAttribute("data-clickable"))==="true"||(p!=="false"&&(a8.onclick||a3.test(a8.nodeName+"")||a8.getAttribute("contentEditable")==="true")))?true:aC(a8.parentNode)
},E=function(a9,p){var a8=a9.length,ba;while(--a8>-1){ba=a9[a8];ba.ondragstart=ba.onselectstart=p?null:aj;
aP(ba,"userSelect",(p?"text":"none"))}},j,ax=(function(){var bb=aL.createElement("div"),ba=aL.createElement("div"),p=ba.style,a8=aL.body||a6,a9;
p.display="inline-block";p.position="relative";bb.style.cssText=ba.innerHTML="width:90px; height:40px; padding:10px; overflow:auto; visibility: hidden";
bb.appendChild(ba);a8.appendChild(bb);j=(ba.offsetHeight+18>bb.scrollHeight);p.width="100%";
if(!aI){p.paddingRight="500px";a9=bb.scrollLeft=bb.scrollWidth-bb.clientWidth;p.left="-90px";
a9=(a9!==bb.scrollLeft)}a8.removeChild(bb);return a9}()),J=function(p,bg){p=ap(p);
bg=bg||{};var bi=aL.createElement("div"),bk=bi.style,bh=p.firstChild,bn=0,bb=0,be=p.scrollTop,a9=p.scrollLeft,bc=p.scrollWidth,bo=p.scrollHeight,bd=0,bl=0,bq=0,bp,bf,bj,a8,ba,bm;
if(g&&bg.force3D!==false){ba="translate3d(";bm="px,0px)"}else{if(aI){ba="translate(";
bm="px)"}}this.scrollTop=function(bs,br){if(!arguments.length){return -this.top()
}this.top(-bs,br)};this.scrollLeft=function(bs,br){if(!arguments.length){return -this.left()
}this.left(-bs,br)};this.left=function(bt,bs){if(!arguments.length){return -(p.scrollLeft+bb)
}var br=p.scrollLeft-a9,bu=bb;if((br>2||br<-2)&&!bs){a9=p.scrollLeft;B.killTweensOf(this,true,{left:1,scrollLeft:1});
this.left(-a9);if(bg.onKill){bg.onKill()}return}bt=-bt;if(bt<0){bb=(bt-0.5)|0;bt=0
}else{if(bt>bl){bb=(bt-bl)|0;bt=bl}else{bb=0}}if(bb||bu){if(ba){if(!this._suspendTransforms){bk[aI]=ba+-bb+"px,"+-bn+bm
}}else{bk.left=-bb+"px"}if(ax&&bb+bd>=0){bk.paddingRight=bb+bd+"px"}}p.scrollLeft=bt|0;
a9=p.scrollLeft};this.top=function(bt,bs){if(!arguments.length){return -(p.scrollTop+bn)
}var br=p.scrollTop-be,bu=bn;if((br>2||br<-2)&&!bs){be=p.scrollTop;B.killTweensOf(this,true,{top:1,scrollTop:1});
this.top(-be);if(bg.onKill){bg.onKill()}return}bt=-bt;if(bt<0){bn=(bt-0.5)|0;bt=0
}else{if(bt>bq){bn=(bt-bq)|0;bt=bq}else{bn=0}}if(bn||bu){if(ba){if(!this._suspendTransforms){bk[aI]=ba+-bb+"px,"+-bn+bm
}}else{bk.top=-bn+"px"}}p.scrollTop=bt|0;be=p.scrollTop};this.maxScrollTop=function(){return bq
};this.maxScrollLeft=function(){return bl};this.disable=function(){bh=bi.firstChild;
while(bh){a8=bh.nextSibling;p.appendChild(bh);bh=a8}if(p===bi.parentNode){p.removeChild(bi)
}};this.enable=function(){bh=p.firstChild;if(bh===bi){return}while(bh){a8=bh.nextSibling;
bi.appendChild(bh);bh=a8}p.appendChild(bi);this.calibrate()};this.calibrate=function(bt){var bs=(p.clientWidth===bp),br,bu;
be=p.scrollTop;a9=p.scrollLeft;if(bs&&p.clientHeight===bf&&bi.offsetHeight===bj&&bc===p.scrollWidth&&bo===p.scrollHeight&&!bt){return
}if(bn||bb){br=this.left();bu=this.top();this.left(-p.scrollLeft);this.top(-p.scrollTop)
}if(!bs||bt){bk.display="block";bk.width="auto";bk.paddingRight="0px";bd=Math.max(0,p.scrollWidth-p.clientWidth);
if(bd){bd+=I(p,"paddingLeft")+(j?I(p,"paddingRight"):0)}}bk.display="inline-block";
bk.position="relative";bk.overflow="visible";bk.verticalAlign="top";bk.width="100%";
bk.paddingRight=bd+"px";if(j){bk.paddingBottom=I(p,"paddingBottom",true)}if(m){bk.zoom="1"
}bp=p.clientWidth;bf=p.clientHeight;bc=p.scrollWidth;bo=p.scrollHeight;bl=p.scrollWidth-bp;
bq=p.scrollHeight-bf;bj=bi.offsetHeight;bk.display="block";if(br||bu){this.left(br);
this.top(bu)}};this.content=bi;this.element=p;this._suspendTransforms=false;this.enable()
},aY=function(p,bW){aD.call(this,p);p=ap(p);if(!U){U=C.com.greensock.plugins.ThrowPropsPlugin
}this.vars=bW=W(bW||{});this.target=p;this.x=this.y=this.rotation=0;this.dragResistance=parseFloat(bW.dragResistance)||0;
this.edgeResistance=isNaN(bW.edgeResistance)?1:parseFloat(bW.edgeResistance)||0;
this.lockAxis=bW.lockAxis;this.autoScroll=bW.autoScroll||0;this.lockedAxis=null;
this.allowEventDefault=!!bW.allowEventDefault;var cd=(bW.type||(m?"top,left":"x,y")).toLowerCase(),b3=(cd.indexOf("x")!==-1||cd.indexOf("y")!==-1),b4=(cd.indexOf("rotation")!==-1),bq=b4?"rotation":b3?"x":"left",bb=b3?"y":"top",bi=(cd.indexOf("x")!==-1||cd.indexOf("left")!==-1||cd==="scroll"),bh=(cd.indexOf("y")!==-1||cd.indexOf("top")!==-1||cd==="scroll"),bS=bW.minimumMovement||2,be=this,bD=l(bW.trigger||bW.handle||p),a9={},cc=0,ba=false,b8=bW.clickableTest||aC,bs=0,bf,bJ,cb,ca,bB,bA,bl,bK,bv,bR,bu,bQ,bG,bU,b2,bI,b6,bt,bZ,b9,b7,bw,bg,bd,bF,bP,bO,bV,bE,b5,bY,bp,b0,bo,bH=function(cq){if(be.autoScroll&&be.isDragging&&(ba||bt)){var ch=p,cj=be.autoScroll*15,cn,cf,ck,ce,cr,cp,co,cm;
ba=false;ai.scrollTop=((window.pageYOffset!=null)?window.pageYOffset:(P.scrollTop!=null)?P.scrollTop:aL.body.scrollTop);
ai.scrollLeft=((window.pageXOffset!=null)?window.pageXOffset:(P.scrollLeft!=null)?P.scrollLeft:aL.body.scrollLeft);
ce=be.pointerX-ai.scrollLeft;cr=be.pointerY-ai.scrollTop;while(ch&&!cf){cf=aK(ch.parentNode);
cn=cf?ai:ch.parentNode;ck=cf?{bottom:Math.max(P.clientHeight,window.innerHeight||0),right:Math.max(P.clientWidth,window.innerWidth||0),left:0,top:0}:cn.getBoundingClientRect();
cp=co=0;if(bh){cm=cn._gsMaxScrollY-cn.scrollTop;if(cm<0){co=cm}else{if(cr>ck.bottom-40&&cm){ba=true;
co=Math.min(cm,(cj*(1-Math.max(0,(ck.bottom-cr))/40))|0)}else{if(cr<ck.top+40&&cn.scrollTop){ba=true;
co=-Math.min(cn.scrollTop,(cj*(1-Math.max(0,(cr-ck.top))/40))|0)}}}if(co){cn.scrollTop+=co
}}if(bi){cm=cn._gsMaxScrollX-cn.scrollLeft;if(cm<0){cp=cm}else{if(ce>ck.right-40&&cm){ba=true;
cp=Math.min(cm,(cj*(1-Math.max(0,(ck.right-ce))/40))|0)}else{if(ce<ck.left+40&&cn.scrollLeft){ba=true;
cp=-Math.min(cn.scrollLeft,(cj*(1-Math.max(0,(ce-ck.left))/40))|0)}}}if(cp){cn.scrollLeft+=cp
}}if(cf&&(cp||co)){window.scrollTo(cn.scrollLeft,cn.scrollTop);bL(be.pointerX+cp,be.pointerY+co)
}ch=cn}}if(bt){var cl=be.x,ci=be.y,cg=0.000001;if(cl<cg&&cl>-cg){cl=0}if(ci<cg&&ci>-cg){ci=0
}if(b4){be.deltaX=cl-bE.data.rotation;bE.data.rotation=be.rotation=cl;bE.setRatio(1)
}else{if(bJ){if(bh){be.deltaY=ci-bJ.top();bJ.top(ci)}if(bi){be.deltaX=cl-bJ.left();
bJ.left(cl)}}else{if(b3){if(bh){be.deltaY=ci-bE.data.y;bE.data.y=ci}if(bi){be.deltaX=cl-bE.data.x;
bE.data.x=cl}bE.setRatio(1)}else{if(bh){be.deltaY=ci-parseFloat(p.style.top||0);
p.style.top=ci+"px"}if(bi){be.deltaY=cl-parseFloat(p.style.left||0);p.style.left=cl+"px"
}}}}if(bK&&!cq&&!bp){bp=true;a1(be,"drag","onDrag");bp=false}}bt=false},bk=function(cf,ci){var ce=be.x,ch=be.y,cg;
if(!p._gsTransform&&(b3||b4)){B.set(p,{x:"+=0",overwrite:false})}if(b3){be.y=p._gsTransform.y;
be.x=p._gsTransform.x}else{if(b4){be.x=be.rotation=p._gsTransform.rotation}else{if(bJ){be.y=bJ.top();
be.x=bJ.left()}else{be.y=parseInt(p.style.top,10)||0;be.x=parseInt(p.style.left,10)||0
}}}if((b9||b7||bw)&&!ci&&(be.isDragging||be.isThrowing)){if(bw){aE.x=be.x;aE.y=be.y;
cg=bw(aE);if(cg.x!==be.x){be.x=cg.x;bt=true}if(cg.y!==be.y){be.y=cg.y;bt=true}}if(b9){cg=b9(be.x);
if(cg!==be.x){be.x=cg;if(b4){be.rotation=cg}bt=true}}if(b7){cg=b7(be.y);if(cg!==be.y){be.y=cg
}bt=true}}if(bt){bH(true)}if(!cf){be.deltaX=be.x-ce;be.deltaY=be.y-ch;a1(be,"throwupdate","onThrowUpdate")
}},bM=function(){var ch,cg,ce,cf;bl=false;if(bJ){bJ.calibrate();be.minX=bR=-bJ.maxScrollLeft();
be.minY=bQ=-bJ.maxScrollTop();be.maxX=bv=be.maxY=bu=0;bl=true}else{if(!!bW.bounds){ch=s(bW.bounds,p.parentNode);
if(b4){be.minX=bR=ch.left;be.maxX=bv=ch.left+ch.width;be.minY=bQ=be.maxY=bu=0}else{if(bW.bounds.maxX!==undefined||bW.bounds.maxY!==undefined){ch=bW.bounds;
be.minX=bR=ch.minX;be.minY=bQ=ch.minY;be.maxX=bv=ch.maxX;be.maxY=bu=ch.maxY}else{cg=s(p,p.parentNode);
be.minX=bR=I(p,bq)+ch.left-cg.left;be.minY=bQ=I(p,bb)+ch.top-cg.top;be.maxX=bv=bR+(ch.width-cg.width);
be.maxY=bu=bQ+(ch.height-cg.height)}}if(bR>bv){be.minX=bv;be.maxX=bv=bR;bR=be.minX
}if(bQ>bu){be.minY=bu;be.maxY=bu=bQ;bQ=be.minY}if(b4){be.minRotation=bR;be.maxRotation=bv
}bl=true}}if(bW.liveSnap){ce=(bW.liveSnap===true)?(bW.snap||{}):bW.liveSnap;cf=(ce instanceof Array||typeof(ce)==="function");
if(b4){b9=a8((cf?ce:ce.rotation),bR,bv,1);b7=null}else{if(ce.points){bw=bz((cf?ce:ce.points),bR,bv,bQ,bu,ce.radius,bJ?-1:1)
}else{if(bi){b9=a8((cf?ce:ce.x||ce.left||ce.scrollLeft),bR,bv,bJ?-1:1)}if(bh){b7=a8((cf?ce:ce.y||ce.top||ce.scrollTop),bQ,bu,bJ?-1:1)
}}}}},br=function(){be.isThrowing=false;a1(be,"throwcomplete","onThrowComplete")
},bX=function(){be.isThrowing=false},b1=function(cg,cj){var cf,ci,ch,ce;if(cg&&U){if(cg===true){cf=bW.snap||bW.liveSnap||{};
ci=(cf instanceof Array||typeof(cf)==="function");cg={resistance:(bW.throwResistance||bW.resistance||1000)/(b4?10:1)};
if(b4){cg.rotation=al(be,ci?cf:cf.rotation,bv,bR,1,cj)}else{if(bi){cg[bq]=al(be,ci?cf:cf.points||cf.x||cf.left||cf.scrollLeft,bv,bR,bJ?-1:1,cj||(be.lockedAxis==="x"))
}if(bh){cg[bb]=al(be,ci?cf:cf.points||cf.y||cf.top||cf.scrollTop,bu,bQ,bJ?-1:1,cj||(be.lockedAxis==="y"))
}if(cf.points||(cf instanceof Array&&typeof(cf[0])==="object")){cg.linkedProps=bq+","+bb;
cg.radius=cf.radius}}}be.isThrowing=true;ce=(!isNaN(bW.overshootTolerance))?bW.overshootTolerance:(bW.edgeResistance===1)?0:(1-be.edgeResistance)+0.2;
be.tween=ch=U.to(bJ||p,{throwProps:cg,ease:(bW.ease||C.Power3.easeOut),onComplete:br,onOverwrite:bX,onUpdate:(bW.fastMode?a1:bk),onUpdateParams:(bW.fastMode?[be,"onthrowupdate","onThrowUpdate"]:(cf&&cf.radius)?[false,true]:x)},(isNaN(bW.maxDuration)?2:bW.maxDuration),(!isNaN(bW.minDuration)?bW.minDuration:(ce===0)?0:0.5),ce);
if(!bW.fastMode){if(bJ){bJ._suspendTransforms=true}ch.render(ch.duration(),true,true);
bk(true,true);be.endX=be.x;be.endY=be.y;if(b4){be.endRotation=be.x}ch.play(0);bk(true,true);
if(bJ){bJ._suspendTransforms=false}}}else{if(bl){be.applyBounds()}}},bx=function(cg){var cf=bF||[1,0,0,1,0,0],cn,cm,ck,cj,ci,ch,cl,ce,co;
bF=aO(p.parentNode,true);if(cg&&be.isPressed&&cf.join(",")!==bF.join(",")){cn=cf[0];
cm=cf[1];ck=cf[2];cj=cf[3];ci=cf[4];ch=cf[5];cl=(cn*cj-cm*ck);ce=cb*(cj/cl)+ca*(-ck/cl)+((ck*ch-cj*ci)/cl);
co=cb*(-cm/cl)+ca*(cn/cl)+(-(cn*ch-cm*ci)/cl);ca=ce*bF[1]+co*bF[3]+bF[5];cb=ce*bF[0]+co*bF[2]+bF[4]
}if(!bF[1]&&!bF[2]&&bF[0]==1&&bF[3]==1&&bF[4]==0&&bF[5]==0){bF=null}},bT=function(){var ce=1-be.edgeResistance;
bx(false);if(bF){cb=be.pointerX*bF[0]+be.pointerY*bF[2]+bF[4];ca=be.pointerX*bF[1]+be.pointerY*bF[3]+bF[5]
}if(bt){bL(be.pointerX,be.pointerY);bH(true)}if(bJ){bM();bA=bJ.top();bB=bJ.left()
}else{if(bc()){bk(true,true);bM()}else{be.applyBounds()}if(b4){b6=q(p,{x:0,y:0});
bk(true,true);bB=be.x;bA=be.y=Math.atan2(b6.y-be.pointerY,be.pointerX-b6.x)*aA}else{bO=p.parentNode?p.parentNode.scrollTop||0:0;
bV=p.parentNode?p.parentNode.scrollLeft||0:0;bA=I(p,bb);bB=I(p,bq)}}if(bl&&ce){if(bB>bv){bB=bv+(bB-bv)/ce
}else{if(bB<bR){bB=bR-(bR-bB)/ce}}if(!b4){if(bA>bu){bA=bu+(bA-bu)/ce}else{if(bA<bQ){bA=bQ-(bQ-bA)/ce
}}}}be.startX=bB;be.startY=bA},bc=function(){return(be.tween&&be.tween.isActive())
},bj=function(){if(t.parentNode&&!bc()&&!be.isDragging){t.parentNode.removeChild(t)
}},a8=function(cf,ch,ce,cg){if(typeof(cf)==="function"){return function(cj){var ci=!be.isPressed?1:1-be.edgeResistance;
return cf.call(be,(cj>ce?ce+(cj-ce)*ci:(cj<ch)?ch+(cj-ch)*ci:cj))*cg}}if(cf instanceof Array){return function(cn){var cj=cf.length,cl=0,ck=az,cm,ci;
while(--cj>-1){cm=cf[cj];ci=cm-cn;if(ci<0){ci=-ci}if(ci<ck&&cm>=ch&&cm<=ce){cl=cj;
ck=ci}}return cf[cl]}}return isNaN(cf)?function(ci){return ci}:function(){return cf*cg
}},bz=function(cg,cf,cj,ck,ci,ce,ch){ce=ce||az;if(typeof(cg)==="function"){return function(cn){var cp=!be.isPressed?1:1-be.edgeResistance,cm=cn.x,cr=cn.y,cl,cq,co;
cn.x=cm=(cm>cj?cj+(cm-cj)*cp:(cm<cf)?cf+(cm-cf)*cp:cm);cn.y=cr=(cr>ci?ci+(cr-ci)*cp:(cr<ck)?ck+(cr-ck)*cp:cr);
cl=cg.call(be,cn);if(cl!==cn){cn.x=cl.x;cn.y=cl.y}if(ch!==1){cn.x*=ch;cn.y*=ch}if(ce<az){cq=cn.x-cm;
co=cn.y-cr;if(Math.sqrt(cq*cq+co*co)>ce){cn.x=cm;cn.y=cr}}return cn}}if(cg instanceof Array){return function(cq){var co=cg.length,cp=0,cn=az,cm,cs,cl,cr;
while(--co>-1){cl=cg[co];cm=cl.x-cq.x;cs=cl.y-cq.y;cr=Math.sqrt(cm*cm+cs*cs);if(cr<cn){cp=co;
cn=cr}}return(cn<=ce)?cg[cp]:cq}}return function(cl){return cl}},bC=function(cf){var ce;
if(!bf||be.isPressed||!cf||((cf.type==="mousedown"||cf.type==="pointerdown")&&ac()-bs<30&&u[be.pointerEvent.type])){return
}bP=bc();be.pointerEvent=cf;if(u[cf.type]){bd=(cf.type.indexOf("touch")!==-1)?(cf.currentTarget||cf.target):aL;
aM(bd,"touchend",bm);aM(bd,"touchmove",bn);aM(bd,"touchcancel",bm);aM(aL,"touchstart",aV)
}else{bd=null;aM(aL,"mousemove",bn)}bY=null;aM(aL,"mouseup",bm);if(cf&&cf.target){aM(cf.target,"mouseup",bm)
}bg=(b8.call(be,cf.target)&&!bW.dragClickables);if(bg){aM(cf.target,"change",bm);
a1(be,"press","onPress");E(bD,true);return}b5=(!bd||bi===bh||be.vars.allowNativeTouchScrolling===false)?false:bi?"y":"x";
if(m){cf=aF(cf,true)}else{if(!b5&&!be.allowEventDefault){cf.preventDefault();if(cf.preventManipulation){cf.preventManipulation()
}}}if(cf.changedTouches){cf=b2=cf.changedTouches[0];bI=cf.identifier}else{if(cf.pointerId){bI=cf.pointerId
}else{b2=bI=null}}y++;an(bH);ca=be.pointerY=cf.pageY;cb=be.pointerX=cf.pageX;if(b5||be.autoScroll){au(p.parentNode)
}if(p.parentNode&&(bJ||(be.autoScroll&&!b4&&p.parentNode._gsMaxScrollX&&!t.parentNode))&&!p.getBBox){t.style.width=(p.parentNode.scrollWidth)+"px";
p.parentNode.appendChild(t)}bT();if(be.tween){be.tween.kill()}be.isThrowing=false;
B.killTweensOf(bJ||p,true,a9);if(bJ){B.killTweensOf(p,true,{scrollTo:1})}be.tween=be.lockedAxis=null;
if(bW.zIndexBoost||(!b4&&!bJ&&bW.zIndexBoost!==false)){p.style.zIndex=aY.zIndex++
}be.isPressed=true;bK=!!(bW.onDrag||be._listeners.drag);if(!b4){ce=bD.length;while(--ce>-1){aP(bD[ce],"cursor",bW.cursor||"move")
}}a1(be,"press","onPress")},bn=function(cl){var ce=cl,ck,cj,ci,ch,cg,cf;if(!bf||ak||!be.isPressed||!cl){return
}be.pointerEvent=cl;ck=cl.changedTouches;if(ck){cl=ck[0];if(cl!==b2&&cl.identifier!==bI){ch=ck.length;
while(--ch>-1&&(cl=ck[ch]).identifier!==bI){}if(ch<0){return}}}else{if(cl.pointerId&&bI&&cl.pointerId!==bI){return
}}if(m){cl=aF(cl,true)}else{if(bd&&b5&&!bY){cj=cl.pageX;ci=cl.pageY;if(bF){ch=cj*bF[0]+ci*bF[2]+bF[4];
ci=cj*bF[1]+ci*bF[3]+bF[5];cj=ch}cg=Math.abs(cj-cb);cf=Math.abs(ci-ca);if((cg!==cf&&(cg>bS||cf>bS))||(aJ&&b5===bY)){bY=(cg>cf&&bi)?"x":"y";
if(be.vars.lockAxisOnTouchScroll!==false){be.lockedAxis=(bY==="x")?"y":"x";if(typeof(be.vars.onLockAxis)==="function"){be.vars.onLockAxis.call(be,ce)
}}if(aJ&&b5===bY){bm(ce);return}}}if(!be.allowEventDefault&&(!b5||(bY&&b5!==bY))&&ce.cancelable!==false){ce.preventDefault();
if(ce.preventManipulation){ce.preventManipulation()}}}if(be.autoScroll){ba=true
}bL(cl.pageX,cl.pageY)},bL=function(ce,cn){var cf=1-be.dragResistance,ch=1-be.edgeResistance,cm,cg,ck,ci,cj,cl;
be.pointerX=ce;be.pointerY=cn;if(b4){ci=Math.atan2(b6.y-cn,ce-b6.x)*aA;cj=be.y-ci;
be.y=ci;if(cj>180){bA-=360}else{if(cj<-180){bA+=360}}ck=bB+(bA-ci)*cf}else{if(bF){cl=ce*bF[0]+cn*bF[2]+bF[4];
cn=ce*bF[1]+cn*bF[3]+bF[5];ce=cl}cg=(cn-ca);cm=(ce-cb);if(cg<bS&&cg>-bS){cg=0}if(cm<bS&&cm>-bS){cm=0
}if((be.lockAxis||be.lockedAxis)&&(cm||cg)){cl=be.lockedAxis;if(!cl){be.lockedAxis=cl=(bi&&Math.abs(cm)>Math.abs(cg))?"y":bh?"x":null;
if(cl&&typeof(be.vars.onLockAxis)==="function"){be.vars.onLockAxis.call(be,be.pointerEvent)
}}if(cl==="y"){cg=0}else{if(cl==="x"){cm=0}}}ck=bB+cm*cf;ci=bA+cg*cf}if((b9||b7||bw)&&(be.x!==ck||(be.y!==ci&&!b4))){if(bw){aE.x=ck;
aE.y=ci;cl=bw(aE);ck=cl.x;ci=cl.y}if(b9){ck=b9(ck)}if(b7){ci=b7(ci)}}else{if(bl){if(ck>bv){ck=bv+(ck-bv)*ch
}else{if(ck<bR){ck=bR+(ck-bR)*ch}}if(!b4){if(ci>bu){ci=bu+(ci-bu)*ch}else{if(ci<bQ){ci=bQ+(ci-bQ)*ch
}}}}}if(!b4){ck=Math.round(ck);ci=Math.round(ci)}if(be.x!==ck||(be.y!==ci&&!b4)){if(b4){be.endRotation=be.x=be.endX=ck;
bt=true}else{if(bh){be.y=be.endY=ci;bt=true}if(bi){be.x=be.endX=ck;bt=true}}if(!be.isDragging&&be.isPressed){be.isDragging=true;
a1(be,"dragstart","onDragStart")}}},bm=function(cl,cg){if(!bf||!be.isPressed||(cl&&bI!=null&&!cg&&((cl.pointerId&&cl.pointerId!==bI)||(cl.changedTouches&&!n(cl.changedTouches,bI))))){return
}be.isPressed=false;var ce=cl,cf=be.isDragging,cn=B.delayedCall(0.001,bj),ck,cj,ci,cm,ch;
if(bd){aH(bd,"touchend",bm);aH(bd,"touchmove",bn);aH(bd,"touchcancel",bm);aH(aL,"touchstart",aV)
}else{aH(aL,"mousemove",bn)}aH(aL,"mouseup",bm);if(cl&&cl.target){aH(cl.target,"mouseup",bm)
}bt=false;if(bg){if(cl){aH(cl.target,"change",bm)}E(bD,false);a1(be,"release","onRelease");
a1(be,"click","onClick");bg=false;return}ae(bH);if(!b4){cj=bD.length;while(--cj>-1){aP(bD[cj],"cursor",bW.cursor||"move")
}}if(cf){cc=Z=ac();be.isDragging=false}y--;if(cl){if(m){cl=aF(cl,false)}ck=cl.changedTouches;
if(ck){cl=ck[0];if(cl!==b2&&cl.identifier!==bI){cj=ck.length;while(--cj>-1&&(cl=ck[cj]).identifier!==bI){}if(cj<0){return
}}}be.pointerEvent=ce;be.pointerX=cl.pageX;be.pointerY=cl.pageY}if(ce&&!cf){if(bP&&(bW.snap||bW.bounds)){b1(bW.throwProps)
}a1(be,"release","onRelease");if(!aJ||ce.type!=="touchmove"){a1(be,"click","onClick");
cm=ce.target||ce.srcElement||p;bs=ac();ch=function(){if(bs!==b0&&be.enabled()&&!be.isPressed){if(cm.click){cm.click()
}else{if(aL.createEvent){ci=aL.createEvent("MouseEvents");ci.initMouseEvent("click",true,true,window,1,be.pointerEvent.screenX,be.pointerEvent.screenY,be.pointerX,be.pointerY,false,false,false,false,0,null);
cm.dispatchEvent(ci)}}}};if(!aJ&&!ce.defaultPrevented){B.delayedCall(0.00001,ch)
}}}else{b1(bW.throwProps);if(!m&&!be.allowEventDefault&&ce&&(bW.dragClickables||!b8.call(be,ce.target))&&cf&&(!b5||(bY&&b5===bY))&&ce.cancelable!==false){ce.preventDefault();
if(ce.preventManipulation){ce.preventManipulation()}}a1(be,"release","onRelease")
}if(bc()){cn.duration(be.tween.duration())}if(cf){a1(be,"dragend","onDragEnd")}return true
},bN=function(ch){if(ch&&be.isDragging&&!bJ){var cg=ch.target||ch.srcElement||p.parentNode,cf=cg.scrollLeft-cg._gsScrollX,ce=cg.scrollTop-cg._gsScrollY;
if(cf||ce){if(bF){cb-=cf*bF[0]+ce*bF[2];ca-=ce*bF[3]+cf*bF[1]}else{cb-=cf;ca-=ce
}cg._gsScrollX+=cf;cg._gsScrollY+=ce;bL(be.pointerX,be.pointerY)}}},by=function(ch){var cf=ac(),cl=(cf-bs<40),ce=(cf-cc<40),ck=(cl&&b0===bs),cj=!!ch.preventDefault,ci=(be.pointerEvent&&be.pointerEvent.defaultPrevented),cm=(cl&&bo===bs),cg=ch.isTrusted||(ch.isTrusted==null&&cl&&ck);
if(cj&&(ck||(ce&&be.vars.suppressClickOnDrag!==false))){ch.stopImmediatePropagation()
}if(cl&&!(be.pointerEvent&&be.pointerEvent.defaultPrevented)&&(!ck||(cg!==cm))){if(cg&&ck){bo=bs
}b0=bs;return}if(be.isPressed||ce||cl){if(!cj){ch.returnValue=false}else{if(!cg||!ch.detail||!cl||ci){ch.preventDefault();
if(ch.preventManipulation){ch.preventManipulation()}}}}};bZ=aY.get(this.target);
if(bZ){bZ.kill()}this.startDrag=function(ce){bC(ce);if(!be.isDragging){be.isDragging=true;
a1(be,"dragstart","onDragStart")}};this.drag=bn;this.endDrag=function(ce){bm(ce,true)
};this.timeSinceDrag=function(){return be.isDragging?0:(ac()-cc)/1000};this.hitTest=function(cf,ce){return aY.hitTest(be.target,cf,ce)
};this.getDirection=function(cl,cg){var ci=(cl==="velocity"&&U)?cl:(typeof(cl)==="object"&&!b4)?"element":"start",cm,ch,cj,ck,cf,ce;
if(ci==="element"){cf=aW(be.target);ce=aW(cl)}cm=(ci==="start")?be.x-bB:(ci==="velocity")?U.getVelocity(this.target,bq):(cf.left+cf.width/2)-(ce.left+ce.width/2);
if(b4){return cm<0?"counter-clockwise":"clockwise"}else{cg=cg||2;ch=(ci==="start")?be.y-bA:(ci==="velocity")?U.getVelocity(this.target,bb):(cf.top+cf.height/2)-(ce.top+ce.height/2);
cj=Math.abs(cm/ch);ck=(cj<1/cg)?"":(cm<0)?"left":"right";if(cj<cg){if(ck!==""){ck+="-"
}ck+=(ch<0)?"up":"down"}}return ck};this.applyBounds=function(ch){var ce,ck,cj,ci,cg,cf;
if(ch&&bW.bounds!==ch){bW.bounds=ch;return be.update(true)}bk(true);bM();if(bl){ce=be.x;
ck=be.y;if(ce>bv){ce=bv}else{if(ce<bR){ce=bR}}if(ck>bu){ck=bu}else{if(ck<bQ){ck=bQ
}}if(be.x!==ce||be.y!==ck){cj=true;be.x=be.endX=ce;if(b4){be.endRotation=ce}else{be.y=be.endY=ck
}bt=true;bH(true);if(be.autoScroll&&!be.isDragging){au(p.parentNode);ci=p;ai.scrollTop=((window.pageYOffset!=null)?window.pageYOffset:(P.scrollTop!=null)?P.scrollTop:aL.body.scrollTop);
ai.scrollLeft=((window.pageXOffset!=null)?window.pageXOffset:(P.scrollLeft!=null)?P.scrollLeft:aL.body.scrollLeft);
while(ci&&!cf){cf=aK(ci.parentNode);cg=cf?ai:ci.parentNode;if(bh&&cg.scrollTop>cg._gsMaxScrollY){cg.scrollTop=cg._gsMaxScrollY
}if(bi&&cg.scrollLeft>cg._gsMaxScrollX){cg.scrollLeft=cg._gsMaxScrollX}ci=cg}}}if(be.isThrowing&&(cj||be.endX>bv||be.endX<bR||be.endY>bu||be.endY<bQ)){b1(bW.throwProps,cj)
}}return be};this.update=function(cg,ch,cf){var ce=be.x,ci=be.y;bx(!ch);if(cg){be.applyBounds()
}else{if(bt&&cf){bH(true)}bk(true)}if(ch){bL(be.pointerX,be.pointerY);if(bt){bH(true)
}}if(be.isPressed&&!ch&&((bi&&Math.abs(ce-be.x)>0.01)||(bh&&(Math.abs(ci-be.y)>0.01&&!b4)))){bT()
}if(be.autoScroll){au(p.parentNode);ba=be.isDragging;bH(true)}if(be.autoScroll){N(p,bN);
aX(p,bN)}return be};this.enable=function(cg){var ch,cf,ce;if(cg!=="soft"){cf=bD.length;
while(--cf>-1){ce=bD[cf];aM(ce,"mousedown",bC);aM(ce,"touchstart",bC);aM(ce,"click",by,true);
if(!b4){aP(ce,"cursor",bW.cursor||"move")}aP(ce,"touchCallout","none");aP(ce,"touchAction",(bi===bh)?"none":bi?"pan-y":"pan-x")
}E(bD,false)}aX(p,bN);bf=true;if(U&&cg!=="soft"){U.track(bJ||p,(b3?"x,y":b4?"rotation":"top,left"))
}if(bJ){bJ.enable()}p._gsDragID=ch="d"+(aG++);a4[ch]=this;if(bJ){bJ.element._gsDragID=ch
}B.set(p,{x:"+=0",overwrite:false});bE={t:p,data:m?bU:p._gsTransform,tween:{},setRatio:(m?function(){B.set(p,bG)
}:aw._internals.setTransformRatio||aw._internals.set3DTransformRatio)};bT();be.update(true);
return be};this.disable=function(cg){var ch=be.isDragging,cf,ce;if(!b4){cf=bD.length;
while(--cf>-1){aP(bD[cf],"cursor",null)}}if(cg!=="soft"){cf=bD.length;while(--cf>-1){ce=bD[cf];
aP(ce,"touchCallout",null);aP(ce,"touchAction",null);aH(ce,"mousedown",bC);aH(ce,"touchstart",bC);
aH(ce,"click",by)}E(bD,true);if(bd){aH(bd,"touchcancel",bm);aH(bd,"touchend",bm);
aH(bd,"touchmove",bn)}aH(aL,"mouseup",bm);aH(aL,"mousemove",bn)}N(p,bN);bf=false;
if(U&&cg!=="soft"){U.untrack(bJ||p,(b3?"x,y":b4?"rotation":"top,left"))}if(bJ){bJ.disable()
}ae(bH);be.isDragging=be.isPressed=bg=false;if(ch){a1(be,"dragend","onDragEnd")
}return be};this.enabled=function(cf,ce){return arguments.length?(cf?be.enable(ce):be.disable(ce)):bf
};this.kill=function(){be.isThrowing=false;B.killTweensOf(bJ||p,true,a9);be.disable();
delete a4[p._gsDragID];return be};if(cd.indexOf("scroll")!==-1){bJ=this.scrollProxy=new J(p,ay({onKill:function(){if(be.isPressed){bm(null)
}}},bW));p.style.overflowY=(bh&&!F)?"auto":"hidden";p.style.overflowX=(bi&&!F)?"auto":"hidden";
p=bJ.content}if(bW.force3D!==false){B.set(p,{force3D:true})}if(b4){a9.rotation=1
}else{if(bi){a9[bq]=1}if(bh){a9[bb]=1}}if(b4){bG=aZ;bU=bG.css;bG.overwrite=false
}else{if(b3){bG=(bi&&bh)?a0:bi?T:S;bU=bG.css;bG.overwrite=false}}this.enable()},Y=aY.prototype=new aD();
Y.constructor=aY;Y.pointerX=Y.pointerY=Y.startX=Y.startY=Y.deltaX=Y.deltaY=0;Y.isDragging=Y.isPressed=false;
aY.version="0.15.0";aY.zIndex=1000;aM(aL,"touchcancel",function(){});aM(aL,"contextmenu",function(a9){var a8;
for(a8 in a4){if(a4[a8].isPressed){a4[a8].endDrag()}}});aY.create=function(a8,ba){if(typeof(a8)==="string"){a8=B.selector(a8)
}var p=(!a8||a8.length===0)?[]:aa(a8)?k(a8):[a8],a9=p.length;while(--a9>-1){p[a9]=new aY(p[a9],ba)
}return p};aY.get=function(p){return a4[(ap(p)||{})._gsDragID]};aY.timeSinceDrag=function(){return(ac()-Z)/1000
};var aN={},am=function(bb){var ba=0,a9=0,a8,p;bb=ap(bb);a8=bb.offsetWidth;p=bb.offsetHeight;
while(bb){ba+=bb.offsetTop;a9+=bb.offsetLeft;bb=bb.offsetParent}return{top:ba,left:a9,width:a8,height:p}
},aW=function(a8,a9){if(a8===window){aN.left=aN.top=0;aN.width=aN.right=P.clientWidth||a8.innerWidth||aL.body.clientWidth||0;
aN.height=aN.bottom=((a8.innerHeight||0)-20<P.clientHeight)?P.clientHeight:a8.innerHeight||aL.body.clientHeight||0;
return aN}var p=(a8.pageX!==a9)?{left:a8.pageX-av(),top:a8.pageY-at(),right:a8.pageX-av()+1,bottom:a8.pageY-at()+1}:(!a8.nodeType&&a8.left!==a9&&a8.top!==a9)?a8:m?am(a8):ap(a8).getBoundingClientRect();
if(p.right===a9&&p.width!==a9){p.right=p.left+p.width;p.bottom=p.top+p.height}else{if(p.width===a9){p={width:p.right-p.left,height:p.bottom-p.top,right:p.right,left:p.left,bottom:p.bottom,top:p.top}
}}return p};aY.hitTest=function(bc,bb,bd){if(bc===bb){return false}var ba=aW(bc),a8=aW(bb),a9=(a8.left>ba.right||a8.right<ba.left||a8.top>ba.bottom||a8.bottom<ba.top),bf,p,be;
if(a9||!bd){return !a9}be=((bd+"").indexOf("%")!==-1);bd=parseFloat(bd)||0;bf={left:Math.max(ba.left,a8.left),top:Math.max(ba.top,a8.top)};
bf.width=Math.min(ba.right,a8.right)-bf.left;bf.height=Math.min(ba.bottom,a8.bottom)-bf.top;
if(bf.width<0||bf.height<0){return false}if(be){bd*=0.01;p=bf.width*bf.height;return(p>=ba.width*ba.height*bd||p>=a8.width*a8.height*bd)
}return(bf.width>bd&&bf.height>bd)};t.style.cssText="visibility:hidden;height:1px;top:-1px;pointer-events:none;position:relative;clear:both;";
return aY},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite","./CSSPlugin"],h)
}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");b("./CSSPlugin.js");
c.exports=h()}}}("Draggable"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./CSSPlugin.js":194,"./TweenLite.js":207}],199:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.15.5
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("easing.Back",["easing.Ease"],function(t){var v=(d.GreenSockGlobals||d),k=v.com.greensock,g=Math.PI*2,s=Math.PI/2,r=k._class,y=function(B,w){var A=r("easing."+B,function(){},true),z=A.prototype=new t();
z.constructor=A;z.getRatio=w;return A},q=t.register||function(){},x=function(z,w,B,A,p){var D=r("easing."+z,{easeOut:new w(),easeIn:new B(),easeInOut:new A()},true);
q(D,z);return D},n=function(z,w,p){this.t=z;this.v=w;if(p){this.next=p;p.prev=this;
this.c=p.v-w;this.gap=p.t-z}},m=function(B,w){var A=r("easing."+B,function(p){this._p1=(p||p===0)?p:1.70158;
this._p2=this._p1*1.525},true),z=A.prototype=new t();z.constructor=A;z.getRatio=w;
z.config=function(p){return new A(p)};return A},u=x("Back",m("BackOut",function(w){return((w=w-1)*w*((this._p1+1)*w+this._p1)+1)
}),m("BackIn",function(w){return w*w*((this._p1+1)*w-this._p1)}),m("BackInOut",function(w){return((w*=2)<1)?0.5*w*w*((this._p2+1)*w-this._p2):0.5*((w-=2)*w*((this._p2+1)*w+this._p2)+2)
})),o=r("easing.SlowMo",function(p,w,z){w=(w||w===0)?w:0.7;if(p==null){p=0.7}else{if(p>1){p=1
}}this._p=(p!==1)?w:0;this._p1=(1-p)/2;this._p2=p;this._p3=this._p1+this._p2;this._calcEnd=(z===true)
},true),i=o.prototype=new t(),l,j,h;i.constructor=o;i.getRatio=function(z){var w=z+(0.5-z)*this._p;
if(z<this._p1){return this._calcEnd?1-((z=1-(z/this._p1))*z):w-((z=1-(z/this._p1))*z*z*z*w)
}else{if(z>this._p3){return this._calcEnd?1-(z=(z-this._p3)/this._p1)*z:w+((z-w)*(z=(z-this._p3)/this._p1)*z*z*z)
}}return this._calcEnd?1:w};o.ease=new o(0.7,0.7);i.config=o.config=function(p,w,z){return new o(p,w,z)
};l=r("easing.SteppedEase",function(p){p=p||1;this._p1=1/p;this._p2=p+1},true);
i=l.prototype=new t();i.constructor=l;i.getRatio=function(w){if(w<0){w=0}else{if(w>=1){w=0.999999999
}}return((this._p2*w)>>0)*this._p1};i.config=l.config=function(p){return new l(p)
};j=r("easing.RoughEase",function(G){G=G||{};var M=G.taper||"none",J=[],B=0,L=(G.points||20)|0,D=L,z=(G.randomize!==false),E=(G.clamp===true),K=(G.template instanceof t)?G.template:null,A=(typeof(G.strength)==="number")?G.strength*0.4:0.4,I,H,w,F,C,p;
while(--D>-1){I=z?Math.random():(1/L)*D;H=K?K.getRatio(I):I;if(M==="none"){w=A}else{if(M==="out"){F=1-I;
w=F*F*A}else{if(M==="in"){w=I*I*A}else{if(I<0.5){F=I*2;w=F*F*0.5*A}else{F=(1-I)*2;
w=F*F*0.5*A}}}}if(z){H+=(Math.random()*w)-(w*0.5)}else{if(D%2){H+=w*0.5}else{H-=w*0.5
}}if(E){if(H>1){H=1}else{if(H<0){H=0}}}J[B++]={x:I,y:H}}J.sort(function(O,N){return O.x-N.x
});p=new n(1,1,null);D=L;while(--D>-1){C=J[D];p=new n(C.x,C.y,p)}this._prev=new n(0,0,(p.t!==0)?p:p.next)
},true);i=j.prototype=new t();i.constructor=j;i.getRatio=function(z){var w=this._prev;
if(z>w.t){while(w.next&&z>=w.t){w=w.next}w=w.prev}else{while(w.prev&&z<=w.t){w=w.prev
}}this._prev=w;return(w.v+((z-w.t)/w.gap)*w.c)};i.config=function(p){return new j(p)
};j.ease=new j();x("Bounce",y("BounceOut",function(w){if(w<1/2.75){return 7.5625*w*w
}else{if(w<2/2.75){return 7.5625*(w-=1.5/2.75)*w+0.75}else{if(w<2.5/2.75){return 7.5625*(w-=2.25/2.75)*w+0.9375
}}}return 7.5625*(w-=2.625/2.75)*w+0.984375}),y("BounceIn",function(w){if((w=1-w)<1/2.75){return 1-(7.5625*w*w)
}else{if(w<2/2.75){return 1-(7.5625*(w-=1.5/2.75)*w+0.75)}else{if(w<2.5/2.75){return 1-(7.5625*(w-=2.25/2.75)*w+0.9375)
}}}return 1-(7.5625*(w-=2.625/2.75)*w+0.984375)}),y("BounceInOut",function(w){var z=(w<0.5);
if(z){w=1-(w*2)}else{w=(w*2)-1}if(w<1/2.75){w=7.5625*w*w}else{if(w<2/2.75){w=7.5625*(w-=1.5/2.75)*w+0.75
}else{if(w<2.5/2.75){w=7.5625*(w-=2.25/2.75)*w+0.9375}else{w=7.5625*(w-=2.625/2.75)*w+0.984375
}}}return z?(1-w)*0.5:w*0.5+0.5}));x("Circ",y("CircOut",function(w){return Math.sqrt(1-(w=w-1)*w)
}),y("CircIn",function(w){return -(Math.sqrt(1-(w*w))-1)}),y("CircInOut",function(w){return((w*=2)<1)?-0.5*(Math.sqrt(1-w*w)-1):0.5*(Math.sqrt(1-(w-=2)*w)+1)
}));h=function(D,z,w){var B=r("easing."+D,function(p,C){this._p1=(p>=1)?p:1;this._p2=(C||w)/(p<1?p:1);
this._p3=this._p2/g*(Math.asin(1/this._p1)||0);this._p2=g/this._p2},true),A=B.prototype=new t();
A.constructor=B;A.getRatio=z;A.config=function(p,C){return new B(p,C)};return B
};x("Elastic",h("ElasticOut",function(w){return this._p1*Math.pow(2,-10*w)*Math.sin((w-this._p3)*this._p2)+1
},0.3),h("ElasticIn",function(w){return -(this._p1*Math.pow(2,10*(w-=1))*Math.sin((w-this._p3)*this._p2))
},0.3),h("ElasticInOut",function(w){return((w*=2)<1)?-0.5*(this._p1*Math.pow(2,10*(w-=1))*Math.sin((w-this._p3)*this._p2)):this._p1*Math.pow(2,-10*(w-=1))*Math.sin((w-this._p3)*this._p2)*0.5+1
},0.45));x("Expo",y("ExpoOut",function(w){return 1-Math.pow(2,-10*w)}),y("ExpoIn",function(w){return Math.pow(2,10*(w-1))-0.001
}),y("ExpoInOut",function(w){return((w*=2)<1)?0.5*Math.pow(2,10*(w-1)):0.5*(2-Math.pow(2,-10*(w-1)))
}));x("Sine",y("SineOut",function(w){return Math.sin(w*s)}),y("SineIn",function(w){return -Math.cos(w*s)+1
}),y("SineInOut",function(w){return -0.5*(Math.cos(Math.PI*w)-1)}));r("easing.EaseLookup",{find:function(p){return t.map[p]
}},true);q(v.SlowMo,"SlowMo","ease,");q(j,"RoughEase","ease,");q(l,"SteppedEase","ease,");
return u},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(){var g=function(){return(d.GreenSockGlobals||d)
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],g)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=g()}}}())}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],200:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.1.3
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine.plugin({propName:"endArray",API:2,version:"0.1.3",init:function(m,l,k){var j=l.length,h=this.a=[],n,g;
this.target=m;this._mod=0;if(!j){return false}while(--j>-1){n=m[j];g=l[j];if(n!==g){h.push({i:j,s:n,c:g-n})
}}return true},mod:function(g){if(typeof(g.endArray)==="function"){this._mod=g.endArray
}},set:function(k){var m=this.target,g=this.a,j=g.length,h=this._mod,l,n;if(h){while(--j>-1){l=g[j];
m[l.i]=h(l.s+l.c*k,m)}}else{while(--j>-1){l=g[j];n=l.s+l.c*k;m[l.i]=(n<0.000001&&n>-0.000001)?0:n
}}}})});if(d._gsDefine){d._gsQueue.pop()()}}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{}],201:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.0.2
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var h=function(p,q,m){var n=p.type,k=p.setRatio,l=q._tween,o=q._target;
p.type=2;p.m=m;p.setRatio=function(r){var t=0.000001,w,u,s;if(r===1&&(l._time===l._duration||l._time===0)){if(n!==2){if(p.r&&n!==-1){w=Math.round(p.s+p.c);
if(!n){p.t[p.p]=m(w+p.xs0,o)}else{if(n===1){u=p.xs0+w+p.xs1;for(s=1;s<p.l;s++){u+=p["xn"+s]+p["xs"+(s+1)]
}p.t[p.p]=m(u,o)}}}else{p.t[p.p]=m(p.e,o)}}else{k.call(p,r)}}else{if(r||!(l._time===l._duration||l._time===0)||l._rawPrevTime===-0.000001){w=p.c*r+p.s;
if(p.r){w=Math.round(w)}else{if(w<t){if(w>-t){w=0}}}if(!n){p.t[p.p]=m(w+p.xs0,o)
}else{if(n===1){u=p.xs0+w+p.xs1;for(s=1;s<p.l;s++){u+=p["xn"+s]+p["xs"+(s+1)]}p.t[p.p]=m(u,o)
}else{if(n===-1){p.t[p.p]=m(p.xs0,o)}else{if(k){k.call(p,r)}}}}}else{if(n!==2){p.t[p.p]=m(p.b,o)
}else{k.call(p,r)}}}}},g=function(m,n){var l=n._firstPT,k=(m.rotation&&n._overwriteProps.join("").indexOf("bezier")!==-1);
while(l){if(typeof(m[l.p])==="function"){h(l,n,m[l.p])}else{if(k&&l.n==="bezier"&&l.plugin._overwriteProps.join("").indexOf("rotation")!==-1){l.data.mod=m.rotation
}}l=l._next}},j=d._gsDefine.plugin({propName:"modifiers",version:"0.0.2",API:2,init:function(m,l,k){this._tween=k;
this._vars=l;return true},initAll:function(){var l=this._tween,o=this._vars,k=this,n=l._firstPT,p,m;
while(n){m=n._next;p=o[n.n];if(n.pg){if(n.t._propName==="css"){g(o,n.t)}else{if(n.t!==k){p=o[n.t._propName];
n.t._mod((typeof(p)==="object")?p:o)}}}else{if(typeof(p)==="function"){if(n.f===2&&n.t){n.t._applyPT.m=p
}else{this._add(n.t,n.p,n.s,n.c,p);if(m){m._prev=n._prev}if(n._prev){n._prev._next=m
}else{if(l._firstPT===n){l._firstPT=m}}n._next=n._prev=null;l._propLookup[n.n]=k
}}}n=m}return false}}),i=j.prototype;i._add=function(n,m,l,o,k){this._addTween(n,m,l,l+o,m,k);
this._overwriteProps.push(m)};i=d._gsDefine.globals.TweenLite.version.split(".");
if(Number(i[0])<=1&&Number(i[1])<19&&d.console){console.log("ModifiersPlugin requires GSAP 1.19.0 or later.")
}});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("ModifiersPlugin"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],202:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.6.0
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var g=d._gsDefine.plugin({propName:"roundProps",version:"1.6.0",priority:-1,API:2,init:function(l,k,j){this._tween=j;
return true}}),i=function(j){while(j){if(!j.f&&!j.blob){j.m=Math.round}j=j._next
}},h=g.prototype;h._onInitAllProps=function(){var l=this._tween,n=(l.vars.roundProps.join)?l.vars.roundProps:l.vars.roundProps.split(","),k=n.length,p={},j=l._propLookup.roundProps,q,o,m;
while(--k>-1){p[n[k]]=Math.round}k=n.length;while(--k>-1){q=n[k];o=l._firstPT;while(o){m=o._next;
if(o.pg){o.t._mod(p)}else{if(o.n===q){if(o.f===2&&o.t){i(o.t._firstPT)}else{this._add(o.t,q,o.s,o.c);
if(m){m._prev=o._prev}if(o._prev){o._prev._next=m}else{if(l._firstPT===o){l._firstPT=m
}}o._next=o._prev=null;l._propLookup[q]=j}}}o=m}}return false};h._add=function(l,k,j,m){this._addTween(l,k,j,j+m,k,Math.round);
this._overwriteProps.push(k)}});if(d._gsDefine){d._gsQueue.pop()()}}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{}],203:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.8.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var g=document.documentElement,h=d,o=function(s,t){var u=(t==="x")?"Width":"Height",q="scroll"+u,r="client"+u,p=document.body;
return(s===h||s===g||s===p)?Math.max(g[q],p[q])-(h["inner"+u]||g[r]||p[r]):s[q]-s["offset"+u]
},j=function(p){if(typeof(p)==="string"){p=TweenLite.selector(p)}if(p.length&&p!==h&&p[0]&&p[0].style&&!p.nodeType){p=p[0]
}return(p===h||(p.nodeType&&p.style))?p:null},m=function(s,q){var r="scroll"+((q==="x")?"Left":"Top");
if(s===h){if(s.pageXOffset!=null){r="page"+q.toUpperCase()+"Offset"}else{if(g[r]!=null){s=g
}else{s=document.body}}}return function(){return s[r]}},n=function(s,p){var u=j(s).getBoundingClientRect(),q=(!p||p===h||p===document.body),r=(q?g:p).getBoundingClientRect(),t={x:u.left-r.left,y:u.top-r.top};
if(!q&&p){t.x+=m(p,"x")();t.y+=m(p,"y")()}return t},k=function(r,s,q){var p=typeof(r);
if(p==="number"||(p==="string"&&r.charAt(1)==="=")){return r}else{if(r==="max"){return o(s,q)
}}return Math.min(o(s,q),n(r,s)[q])},l=d._gsDefine.plugin({propName:"scrollTo",API:2,global:true,version:"1.8.1",init:function(r,q,p){this._wdw=(r===h);
this._target=r;this._tween=p;if(typeof(q)!=="object"){q={y:q};if(typeof(q.y)==="string"&&q.y!=="max"&&q.y.charAt(1)!=="="){q.x=q.y
}}else{if(q.nodeType){q={y:q,x:q}}}this.vars=q;this._autoKill=(q.autoKill!==false);
this.getX=m(r,"x");this.getY=m(r,"y");this.x=this.xPrev=this.getX();this.y=this.yPrev=this.getY();
if(q.x!=null){this._addTween(this,"x",this.x,k(q.x,r,"x")-(q.offsetX||0),"scrollTo_x",true);
this._overwriteProps.push("scrollTo_x")}else{this.skipX=true}if(q.y!=null){this._addTween(this,"y",this.y,k(q.y,r,"y")-(q.offsetY||0),"scrollTo_y",true);
this._overwriteProps.push("scrollTo_y")}else{this.skipY=true}return true},set:function(s){this._super.setRatio.call(this,s);
var r=(this._wdw||!this.skipX)?this.getX():this.xPrev,u=(this._wdw||!this.skipY)?this.getY():this.yPrev,q=u-this.yPrev,t=r-this.xPrev,p=l.autoKillThreshold;
if(this.x<0){this.x=0}if(this.y<0){this.y=0}if(this._autoKill){if(!this.skipX&&(t>p||t<-p)&&r<o(this._target,"x")){this.skipX=true
}if(!this.skipY&&(q>p||q<-p)&&u<o(this._target,"y")){this.skipY=true}if(this.skipX&&this.skipY){this._tween.kill();
if(this.vars.onAutoKill){this.vars.onAutoKill.apply(this.vars.onAutoKillScope||this._tween,this.vars.onAutoKillParams||[])
}}}if(this._wdw){h.scrollTo((!this.skipX)?this.x:r,(!this.skipY)?this.y:u)}else{if(!this.skipY){this._target.scrollTop=this.y
}if(!this.skipX){this._target.scrollLeft=this.x}}this.xPrev=this.x;this.yPrev=this.y
}}),i=l.prototype;l.max=o;l.getOffset=n;l.autoKillThreshold=7;i._kill=function(p){if(p.scrollTo_x){this.skipX=true
}if(p.scrollTo_y){this.skipY=true}return this._super._kill.call(this,p)}});if(d._gsDefine){d._gsQueue.pop()()
}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)
}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");c.exports=h()}}}("ScrollToPlugin"))
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],204:[function(b,c,a){(function(f){
/*!
 * VERSION: 0.5.2
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){var h=function(l){var k=l.nodeType,j="";
if(k===1||k===9||k===11){if(typeof(l.textContent)==="string"){return l.textContent
}else{for(l=l.firstChild;l;l=l.nextSibling){j+=h(l)}}}else{if(k===3||k===4){return l.nodeValue
}}return j},g=d._gsDefine.plugin({propName:"text",API:2,version:"0.5.2",init:function(n,m,l,j){var k=n.nodeName.toUpperCase(),o;
if(typeof(m)==="function"){m=m(j,n)}this._svg=(n.getBBox&&(k==="TEXT"||k==="TSPAN"));
if(!("innerHTML" in n)&&!this._svg){return false}this._target=n;if(typeof(m)!=="object"){m={value:m}
}if(m.value===undefined){this._text=this._original=[""];return true}this._delimiter=m.delimiter||"";
this._original=h(n).replace(/\s+/g," ").split(this._delimiter);this._text=m.value.replace(/\s+/g," ").split(this._delimiter);
this._runBackwards=(l.vars.runBackwards===true);if(this._runBackwards){k=this._original;
this._original=this._text;this._text=k}if(typeof(m.newClass)==="string"){this._newClass=m.newClass;
this._hasClass=true}if(typeof(m.oldClass)==="string"){this._oldClass=m.oldClass;
this._hasClass=true}k=this._original.length-this._text.length;o=(k<0)?this._original:this._text;
this._fillChar=m.fillChar||(m.padSpace?"&nbsp;":"");if(k<0){k=-k}while(--k>-1){o.push(this._fillChar)
}return true},set:function(o){if(o>1){o=1}else{if(o<0){o=0}}if(this._runBackwards){o=1-o
}var k=this._text.length,m=(o*k+0.5)|0,n,j,p;if(this._hasClass){n=(this._newClass&&m!==0);
j=(this._oldClass&&m!==k);p=(n?"<span class='"+this._newClass+"'>":"")+this._text.slice(0,m).join(this._delimiter)+(n?"</span>":"")+(j?"<span class='"+this._oldClass+"'>":"")+this._delimiter+this._original.slice(m).join(this._delimiter)+(j?"</span>":"")
}else{p=this._text.slice(0,m).join(this._delimiter)+this._delimiter+this._original.slice(m).join(this._delimiter)
}if(this._svg){this._target.textContent=p}else{this._target.innerHTML=(this._fillChar==="&nbsp;"&&p.indexOf("  ")!==-1)?p.split("  ").join("&nbsp;&nbsp;"):p
}}}),i=g.prototype;i._newClass=i._oldClass=i._delimiter=""});if(d._gsDefine){d._gsQueue.pop()()
}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)
}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");c.exports=h()}}}("TextPlugin"))
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],205:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.19.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("TimelineLite",["core.Animation","core.SimpleTimeline","TweenLite"],function(o,l,r){var i=function(A){l.call(this,A);
this._labels={};this.autoRemoveChildren=(this.vars.autoRemoveChildren===true);this.smoothChildTiming=(this.vars.smoothChildTiming===true);
this._sortChildren=true;this._onUpdate=this.vars.onUpdate;var y=this.vars,B,z;for(z in y){B=y[z];
if(t(B)){if(B.join("").indexOf("{self}")!==-1){y[z]=this._swapSelfInParams(B)}}}if(t(y.tweens)){this.add(y.tweens,0,y.align,y.stagger)
}},n=1e-10,v=r._internals,q=i._internals={},h=v.isSelector,t=v.isArray,g=v.lazyTweens,s=v.lazyRender,m=d._gsDefine.globals,u=function(z){var A={},y;
for(y in z){A[y]=z[y]}return A},k=function(C,y,z){var B=C.cycle,A,D;for(A in B){D=B[A];
C[A]=(typeof(D)==="function")?D(z,y[z]):D[z%D.length]}delete C.cycle},x=q.pauseCallback=function(){},w=function(z){var p=[],y=z.length,A;
for(A=0;A!==y;p.push(z[A++])){}return p},j=i.prototype=new l();i.version="1.19.1";
j.constructor=i;j.kill()._gc=j._forcingPlayhead=j._hasPause=false;j.to=function(B,A,z,p){var y=(z.repeat&&m.TweenMax)||r;
return A?this.add(new y(B,A,z),p):this.set(B,z,p)};j.from=function(A,z,y,p){return this.add(((y.repeat&&m.TweenMax)||r).from(A,z,y),p)
};j.fromTo=function(B,A,C,z,p){var y=(z.repeat&&m.TweenMax)||r;return A?this.add(y.fromTo(B,A,C,z),p):this.set(B,z,p)
};j.staggerTo=function(F,B,G,y,E,H,z,A){var I=new i({onComplete:H,onCompleteParams:z,callbackScope:A,smoothChildTiming:this.smoothChildTiming}),C=G.cycle,p,D;
if(typeof(F)==="string"){F=r.selector(F)||F}F=F||[];if(h(F)){F=w(F)}y=y||0;if(y<0){F=w(F);
F.reverse();y*=-1}for(D=0;D<F.length;D++){p=u(G);if(p.startAt){p.startAt=u(p.startAt);
if(p.startAt.cycle){k(p.startAt,F,D)}}if(C){k(p,F,D);if(p.duration!=null){B=p.duration;
delete p.duration}}I.to(F[D],B,p,D*y)}return this.add(I,E)};j.staggerFrom=function(z,E,D,C,y,B,p,A){D.immediateRender=(D.immediateRender!=false);
D.runBackwards=true;return this.staggerTo(z,E,D,C,y,B,p,A)};j.staggerFromTo=function(D,B,y,F,p,C,E,z,A){F.startAt=y;
F.immediateRender=(F.immediateRender!=false&&y.immediateRender!=false);return this.staggerTo(D,B,F,p,C,E,z,A)
};j.call=function(A,z,y,p){return this.add(r.delayedCall(0,A,z,y),p)};j.set=function(z,y,p){p=this._parseTimeOrLabel(p,0,true);
if(y.immediateRender==null){y.immediateRender=(p===this._time&&!this._paused)}return this.add(new r(z,0,y),p)
};i.exportRoot=function(C,B){C=C||{};if(C.smoothChildTiming==null){C.smoothChildTiming=true
}var y=new i(C),p=y._timeline,z,A;if(B==null){B=true}p._remove(y,true);y._startTime=0;
y._rawPrevTime=y._time=y._totalTime=p._time;z=p._first;while(z){A=z._next;if(!B||!(z instanceof r&&z.target===z.vars.onComplete)){y.add(z,z._startTime-z._delay)
}z=A}p.add(y,0);return y};j.add=function(F,D,E,p){var z,A,C,y,G,B;if(typeof(D)!=="number"){D=this._parseTimeOrLabel(D,0,true,F)
}if(!(F instanceof o)){if((F instanceof Array)||(F&&F.push&&t(F))){E=E||"normal";
p=p||0;z=D;A=F.length;for(C=0;C<A;C++){if(t(y=F[C])){y=new i({tweens:y})}this.add(y,z);
if(typeof(y)!=="string"&&typeof(y)!=="function"){if(E==="sequence"){z=y._startTime+(y.totalDuration()/y._timeScale)
}else{if(E==="start"){y._startTime-=y.delay()}}}z+=p}return this._uncache(true)
}else{if(typeof(F)==="string"){return this.addLabel(F,D)}else{if(typeof(F)==="function"){F=r.delayedCall(0,F)
}else{throw ("Cannot add "+F+" into the timeline; it is not a tween, timeline, function, or string.")
}}}}l.prototype.add.call(this,F,D);if(this._gc||this._time===this._duration){if(!this._paused){if(this._duration<this.duration()){G=this;
B=(G.rawTime()>F._startTime);while(G._timeline){if(B&&G._timeline.smoothChildTiming){G.totalTime(G._totalTime,true)
}else{if(G._gc){G._enabled(true,false)}}G=G._timeline}}}}return this};j.remove=function(z){if(z instanceof o){this._remove(z,false);
var p=z._timeline=z.vars.useFrames?o._rootFramesTimeline:o._rootTimeline;z._startTime=(z._paused?z._pauseTime:p._time)-((!z._reversed?z._totalTime:z.totalDuration()-z._totalTime)/z._timeScale);
return this}else{if(z instanceof Array||(z&&z.push&&t(z))){var y=z.length;while(--y>-1){this.remove(z[y])
}return this}else{if(typeof(z)==="string"){return this.removeLabel(z)}}}return this.kill(null,z)
};j._remove=function(p,z){l.prototype._remove.call(this,p,z);var y=this._last;if(!y){this._time=this._totalTime=this._duration=this._totalDuration=0
}else{if(this._time>this.duration()){this._time=this._duration;this._totalTime=this._totalDuration
}}return this};j.append=function(y,p){return this.add(y,this._parseTimeOrLabel(null,p,true,y))
};j.insert=j.insertMultiple=function(z,p,A,y){return this.add(z,p||0,A,y)};j.appendMultiple=function(z,p,A,y){return this.add(z,this._parseTimeOrLabel(null,p,true,z),A,y)
};j.addLabel=function(y,p){this._labels[y]=this._parseTimeOrLabel(p);return this
};j.addPause=function(p,B,A,z){var y=r.delayedCall(0,x,A,z||this);y.vars.onComplete=y.vars.onReverseComplete=B;
y.data="isPause";this._hasPause=true;return this.add(y,p)};j.removeLabel=function(p){delete this._labels[p];
return this};j.getLabelTime=function(p){return(this._labels[p]!=null)?this._labels[p]:-1
};j._parseTimeOrLabel=function(A,p,z,B){var y;if(B instanceof o&&B.timeline===this){this.remove(B)
}else{if(B&&((B instanceof Array)||(B.push&&t(B)))){y=B.length;while(--y>-1){if(B[y] instanceof o&&B[y].timeline===this){this.remove(B[y])
}}}}if(typeof(p)==="string"){return this._parseTimeOrLabel(p,(z&&typeof(A)==="number"&&this._labels[p]==null)?A-this.duration():0,z)
}p=p||0;if(typeof(A)==="string"&&(isNaN(A)||this._labels[A]!=null)){y=A.indexOf("=");
if(y===-1){if(this._labels[A]==null){return z?(this._labels[A]=this.duration()+p):p
}return this._labels[A]+p}p=parseInt(A.charAt(y-1)+"1",10)*Number(A.substr(y+1));
A=(y>1)?this._parseTimeOrLabel(A.substr(0,y-1),0,z):this.duration()}else{if(A==null){A=this.duration()
}}return Number(A)+p};j.seek=function(p,y){return this.totalTime((typeof(p)==="number")?p:this._parseTimeOrLabel(p),(y!==false))
};j.stop=function(){return this.paused(true)};j.gotoAndPlay=function(p,y){return this.play(p,y)
};j.gotoAndStop=function(p,y){return this.pause(p,y)};j.render=function(A,L,z){if(this._gc){this._enabled(true,false)
}var F=(!this._dirty)?this._totalDuration:this.totalDuration(),p=this._time,H=this._startTime,D=this._timeScale,B=this._paused,K,G,E,J,y,I,C;
if(A>=F-1e-7&&A>=0){this._totalTime=this._time=F;if(!this._reversed){if(!this._hasPausedChild()){G=true;
J="onComplete";y=!!this._timeline.autoRemoveChildren;if(this._duration===0){if((A<=0&&A>=-1e-7)||this._rawPrevTime<0||this._rawPrevTime===n){if(this._rawPrevTime!==A&&this._first){y=true;
if(this._rawPrevTime>n){J="onReverseComplete"}}}}}}this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;
A=F+0.0001}else{if(A<1e-7){this._totalTime=this._time=0;if(p!==0||(this._duration===0&&this._rawPrevTime!==n&&(this._rawPrevTime>0||(A<0&&this._rawPrevTime>=0)))){J="onReverseComplete";
G=this._reversed}if(A<0){this._active=false;if(this._timeline.autoRemoveChildren&&this._reversed){y=G=true;
J="onReverseComplete"}else{if(this._rawPrevTime>=0&&this._first){y=true}}this._rawPrevTime=A
}else{this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;if(A===0&&G){K=this._first;
while(K&&K._startTime===0){if(!K._duration){G=false}K=K._next}}A=0;if(!this._initted){y=true
}}}else{if(this._hasPause&&!this._forcingPlayhead&&!L){if(A>=p){K=this._first;while(K&&K._startTime<=A&&!I){if(!K._duration){if(K.data==="isPause"&&!K.ratio&&!(K._startTime===0&&this._rawPrevTime===0)){I=K
}}K=K._next}}else{K=this._last;while(K&&K._startTime>=A&&!I){if(!K._duration){if(K.data==="isPause"&&K._rawPrevTime>0){I=K
}}K=K._prev}}if(I){this._time=A=I._startTime;this._totalTime=A+(this._cycle*(this._totalDuration+this._repeatDelay))
}}this._totalTime=this._time=this._rawPrevTime=A}}if((this._time===p||!this._first)&&!z&&!y&&!I){return
}else{if(!this._initted){this._initted=true}}if(!this._active){if(!this._paused&&this._time!==p&&A>0){this._active=true
}}if(p===0){if(this.vars.onStart){if(this._time!==0||!this._duration){if(!L){this._callback("onStart")
}}}}C=this._time;if(C>=p){K=this._first;while(K){E=K._next;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=C&&!K._paused&&!K._gc)){if(I===K){this.pause()
}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}else{K=this._last;while(K){E=K._prev;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=p&&!K._paused&&!K._gc)){if(I===K){I=K._prev;
while(I&&I.endTime()>this._time){I.render((I._reversed?I.totalDuration()-((A-I._startTime)*I._timeScale):(A-I._startTime)*I._timeScale),L,z);
I=I._prev}I=null;this.pause()}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)
}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}if(this._onUpdate){if(!L){if(g.length){s()}this._callback("onUpdate")}}if(J){if(!this._gc){if(H===this._startTime||D!==this._timeScale){if(this._time===0||F>=this.totalDuration()){if(G){if(g.length){s()
}if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!L&&this.vars[J]){this._callback(J)}}}}}};j._hasPausedChild=function(){var p=this._first;
while(p){if(p._paused||((p instanceof i)&&p._hasPausedChild())){return true}p=p._next
}return false};j.getChildren=function(D,C,A,B){B=B||-9999999999;var p=[],z=this._first,y=0;
while(z){if(z._startTime<B){}else{if(z instanceof r){if(C!==false){p[y++]=z}}else{if(A!==false){p[y++]=z
}if(D!==false){p=p.concat(z.getChildren(true,C,A));y=p.length}}}z=z._next}return p
};j.getTweensOf=function(C,D){var A=this._gc,p=[],z=0,B,y;if(A){this._enabled(true,true)
}B=r.getTweensOf(C);y=B.length;while(--y>-1){if(B[y].timeline===this||(D&&this._contains(B[y]))){p[z++]=B[y]
}}if(A){this._enabled(false,true)}return p};j.recent=function(){return this._recent
};j._contains=function(y){var p=y.timeline;while(p){if(p===this){return true}p=p.timeline
}return false};j.shiftChildren=function(z,C,A){A=A||0;var y=this._first,D=this._labels,B;
while(y){if(y._startTime>=A){y._startTime+=z}y=y._next}if(C){for(B in D){if(D[B]>=A){D[B]+=z
}}}return this._uncache(true)};j._kill=function(A,z){if(!A&&!z){return this._enabled(false,false)
}var y=(!z)?this.getChildren(true,true,false):this.getTweensOf(z),p=y.length,B=false;
while(--p>-1){if(y[p]._kill(A,z)){B=true}}return B};j.clear=function(z){var y=this.getChildren(false,true,true),p=y.length;
this._time=this._totalTime=0;while(--p>-1){y[p]._enabled(false,false)}if(z!==false){this._labels={}
}return this._uncache(true)};j.invalidate=function(){var p=this._first;while(p){p.invalidate();
p=p._next}return o.prototype.invalidate.call(this)};j._enabled=function(y,p){if(y===this._gc){var z=this._first;
while(z){z._enabled(y,true);z=z._next}}return l.prototype._enabled.call(this,y,p)
};j.totalTime=function(z,y,p){this._forcingPlayhead=true;var A=o.prototype.totalTime.apply(this,arguments);
this._forcingPlayhead=false;return A};j.duration=function(p){if(!arguments.length){if(this._dirty){this.totalDuration()
}return this._duration}if(this.duration()!==0&&p!==0){this.timeScale(this._duration/p)
}return this};j.totalDuration=function(C){if(!arguments.length){if(this._dirty){var y=0,A=this._last,p=999999999999,B,z;
while(A){B=A._prev;if(A._dirty){A.totalDuration()}if(A._startTime>p&&this._sortChildren&&!A._paused){this.add(A,A._startTime-A._delay)
}else{p=A._startTime}if(A._startTime<0&&!A._paused){y-=A._startTime;if(this._timeline.smoothChildTiming){this._startTime+=A._startTime/this._timeScale
}this.shiftChildren(-A._startTime,false,-9999999999);p=0}z=A._startTime+(A._totalDuration/A._timeScale);
if(z>y){y=z}A=B}this._duration=this._totalDuration=y;this._dirty=false}return this._totalDuration
}return(C&&this.totalDuration())?this.timeScale(this._totalDuration/C):this};j.paused=function(y){if(!y){var p=this._first,z=this._time;
while(p){if(p._startTime===z&&p.data==="isPause"){p._rawPrevTime=0}p=p._next}}return o.prototype.paused.apply(this,arguments)
};j.usesFrames=function(){var p=this._timeline;while(p._timeline){p=p._timeline
}return(p===o._rootFramesTimeline)};j.rawTime=function(p){return(p&&(this._paused||(this._repeat&&this.time()>0&&this.totalProgress()<1)))?this._totalTime%(this._duration+this._repeatDelay):this._paused?this._totalTime:(this._timeline.rawTime(p)-this._startTime)*this._timeScale
};return i},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("TimelineLite"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],206:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.19.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("TimelineMax",["TimelineLite","TweenLite","easing.Ease"],function(h,m,o){var r=function(p){h.call(this,p);
this._repeat=this.vars.repeat||0;this._repeatDelay=this.vars.repeatDelay||0;this._cycle=0;
this._yoyo=(this.vars.yoyo===true);this._dirty=true},l=1e-10,q=m._internals,g=q.lazyTweens,n=q.lazyRender,k=d._gsDefine.globals,j=new o(null,null,1,0),i=r.prototype=new h();
i.constructor=r;i.kill()._gc=false;r.version="1.19.1";i.invalidate=function(){this._yoyo=(this.vars.yoyo===true);
this._repeat=this.vars.repeat||0;this._repeatDelay=this.vars.repeatDelay||0;this._uncache(true);
return h.prototype.invalidate.call(this)};i.addCallback=function(u,p,t,s){return this.add(m.delayedCall(0,u,t,s),p)
};i.removeCallback=function(v,p){if(v){if(p==null){this._kill(null,v)}else{var s=this.getTweensOf(v,false),t=s.length,u=this._parseTimeOrLabel(p);
while(--t>-1){if(s[t]._startTime===u){s[t]._enabled(false,false)}}}}return this
};i.removePause=function(p){return this.removeCallback(h._internals.pauseCallback,p)
};i.tweenTo=function(s,y){y=y||{};var z={ease:j,useFrames:this.usesFrames(),immediateRender:false},u=(y.repeat&&k.TweenMax)||m,x,w,v;
for(w in y){z[w]=y[w]}z.time=this._parseTimeOrLabel(s);x=(Math.abs(Number(z.time)-this._time)/this._timeScale)||0.001;
v=new u(this,x,z);z.onStart=function(){v.target.paused(true);if(v.vars.time!==v.target.time()&&x===v.duration()){v.duration(Math.abs(v.vars.time-v.target.time())/v.target._timeScale)
}if(y.onStart){y.onStart.apply(y.onStartScope||y.callbackScope||v,y.onStartParams||[])
}};return v};i.tweenFromTo=function(p,v,u){u=u||{};p=this._parseTimeOrLabel(p);
u.startAt={onComplete:this.seek,onCompleteParams:[p],callbackScope:this};u.immediateRender=(u.immediateRender!==false);
var s=this.tweenTo(v,u);return s.duration((Math.abs(s.vars.time-p)/this._timeScale)||0.001)
};i.render=function(C,G,s){if(this._gc){this._enabled(true,false)}var Q=(!this._dirty)?this._totalDuration:this.totalDuration(),N=this._duration,z=this._time,J=this._totalTime,y=this._startTime,p=this._timeScale,K=this._rawPrevTime,O=this._paused,I=this._cycle,v,B,L,x,u,M,A,E;
if(C>=Q-1e-7&&C>=0){if(!this._locked){this._totalTime=Q;this._cycle=this._repeat
}if(!this._reversed){if(!this._hasPausedChild()){B=true;x="onComplete";u=!!this._timeline.autoRemoveChildren;
if(this._duration===0){if((C<=0&&C>=-1e-7)||K<0||K===l){if(K!==C&&this._first){u=true;
if(K>l){x="onReverseComplete"}}}}}}this._rawPrevTime=(this._duration||!G||C||this._rawPrevTime===C)?C:l;
if(this._yoyo&&(this._cycle&1)!==0){this._time=C=0}else{this._time=N;C=N+0.0001
}}else{if(C<1e-7){if(!this._locked){this._totalTime=this._cycle=0}this._time=0;
if(z!==0||(N===0&&K!==l&&(K>0||(C<0&&K>=0))&&!this._locked)){x="onReverseComplete";
B=this._reversed}if(C<0){this._active=false;if(this._timeline.autoRemoveChildren&&this._reversed){u=B=true;
x="onReverseComplete"}else{if(K>=0&&this._first){u=true}}this._rawPrevTime=C}else{this._rawPrevTime=(N||!G||C||this._rawPrevTime===C)?C:l;
if(C===0&&B){v=this._first;while(v&&v._startTime===0){if(!v._duration){B=false}v=v._next
}}C=0;if(!this._initted){u=true}}}else{if(N===0&&K<0){u=true}this._time=this._rawPrevTime=C;
if(!this._locked){this._totalTime=C;if(this._repeat!==0){M=N+this._repeatDelay;
this._cycle=(this._totalTime/M)>>0;if(this._cycle!==0){if(this._cycle===this._totalTime/M&&J<=C){this._cycle--
}}this._time=this._totalTime-(this._cycle*M);if(this._yoyo){if((this._cycle&1)!==0){this._time=N-this._time
}}if(this._time>N){this._time=N;C=N+0.0001}else{if(this._time<0){this._time=C=0
}else{C=this._time}}}}if(this._hasPause&&!this._forcingPlayhead&&!G&&C<N){C=this._time;
if(C>=z||(this._repeat&&I!==this._cycle)){v=this._first;while(v&&v._startTime<=C&&!A){if(!v._duration){if(v.data==="isPause"&&!v.ratio&&!(v._startTime===0&&this._rawPrevTime===0)){A=v
}}v=v._next}}else{v=this._last;while(v&&v._startTime>=C&&!A){if(!v._duration){if(v.data==="isPause"&&v._rawPrevTime>0){A=v
}}v=v._prev}}if(A){this._time=C=A._startTime;this._totalTime=C+(this._cycle*(this._totalDuration+this._repeatDelay))
}}}}if(this._cycle!==I){if(!this._locked){var P=(this._yoyo&&(I&1)!==0),H=(P===(this._yoyo&&(this._cycle&1)!==0)),F=this._totalTime,w=this._cycle,D=this._rawPrevTime,t=this._time;
this._totalTime=I*N;if(this._cycle<I){P=!P}else{this._totalTime+=N}this._time=z;
this._rawPrevTime=(N===0)?K-0.0001:K;this._cycle=I;this._locked=true;z=(P)?0:N;
this.render(z,G,(N===0));if(!G){if(!this._gc){if(this.vars.onRepeat){this._cycle=w;
this._locked=false;this._callback("onRepeat")}}}if(z!==this._time){return}if(H){this._cycle=I;
this._locked=true;z=(P)?N+0.0001:-0.0001;this.render(z,true,false)}this._locked=false;
if(this._paused&&!O){return}this._time=t;this._totalTime=F;this._cycle=w;this._rawPrevTime=D
}}if((this._time===z||!this._first)&&!s&&!u&&!A){if(J!==this._totalTime){if(this._onUpdate){if(!G){this._callback("onUpdate")
}}}return}else{if(!this._initted){this._initted=true}}if(!this._active){if(!this._paused&&this._totalTime!==J&&C>0){this._active=true
}}if(J===0){if(this.vars.onStart){if(this._totalTime!==0||!this._totalDuration){if(!G){this._callback("onStart")
}}}}E=this._time;if(E>=z){v=this._first;while(v){L=v._next;if(E!==this._time||(this._paused&&!O)){break
}else{if(v._active||(v._startTime<=this._time&&!v._paused&&!v._gc)){if(A===v){this.pause()
}if(!v._reversed){v.render((C-v._startTime)*v._timeScale,G,s)}else{v.render(((!v._dirty)?v._totalDuration:v.totalDuration())-((C-v._startTime)*v._timeScale),G,s)
}}}v=L}}else{v=this._last;while(v){L=v._prev;if(E!==this._time||(this._paused&&!O)){break
}else{if(v._active||(v._startTime<=z&&!v._paused&&!v._gc)){if(A===v){A=v._prev;
while(A&&A.endTime()>this._time){A.render((A._reversed?A.totalDuration()-((C-A._startTime)*A._timeScale):(C-A._startTime)*A._timeScale),G,s);
A=A._prev}A=null;this.pause()}if(!v._reversed){v.render((C-v._startTime)*v._timeScale,G,s)
}else{v.render(((!v._dirty)?v._totalDuration:v.totalDuration())-((C-v._startTime)*v._timeScale),G,s)
}}}v=L}}if(this._onUpdate){if(!G){if(g.length){n()}this._callback("onUpdate")}}if(x){if(!this._locked){if(!this._gc){if(y===this._startTime||p!==this._timeScale){if(this._time===0||Q>=this.totalDuration()){if(B){if(g.length){n()
}if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!G&&this.vars[x]){this._callback(x)}}}}}}};i.getActive=function(w,u,v){if(w==null){w=true
}if(u==null){u=true}if(v==null){v=false}var x=[],y=this.getChildren(w,u,v),p=0,s=y.length,t,z;
for(t=0;t<s;t++){z=y[t];if(z.isActive()){x[p++]=z}}return x};i.getLabelAfter=function(t){if(!t){if(t!==0){t=this._time
}}var u=this.getLabelsArray(),p=u.length,s;for(s=0;s<p;s++){if(u[s].time>t){return u[s].name
}}return null};i.getLabelBefore=function(s){if(s==null){s=this._time}var t=this.getLabelsArray(),p=t.length;
while(--p>-1){if(t[p].time<s){return t[p].name}}return null};i.getLabelsArray=function(){var s=[],t=0,u;
for(u in this._labels){s[t++]={time:this._labels[u],name:u}}s.sort(function(v,p){return v.time-p.time
});return s};i.invalidate=function(){this._locked=false;return h.prototype.invalidate.call(this)
};i.progress=function(s,p){return(!arguments.length)?this._time/this.duration():this.totalTime(this.duration()*((this._yoyo&&(this._cycle&1)!==0)?1-s:s)+(this._cycle*(this._duration+this._repeatDelay)),p)
};i.totalProgress=function(s,p){return(!arguments.length)?this._totalTime/this.totalDuration():this.totalTime(this.totalDuration()*s,p)
};i.totalDuration=function(p){if(!arguments.length){if(this._dirty){h.prototype.totalDuration.call(this);
this._totalDuration=(this._repeat===-1)?999999999999:this._duration*(this._repeat+1)+(this._repeatDelay*this._repeat)
}return this._totalDuration}return(this._repeat===-1||!p)?this:this.timeScale(this.totalDuration()/p)
};i.time=function(s,p){if(!arguments.length){return this._time}if(this._dirty){this.totalDuration()
}if(s>this._duration){s=this._duration}if(this._yoyo&&(this._cycle&1)!==0){s=(this._duration-s)+(this._cycle*(this._duration+this._repeatDelay))
}else{if(this._repeat!==0){s+=this._cycle*(this._duration+this._repeatDelay)}}return this.totalTime(s,p)
};i.repeat=function(p){if(!arguments.length){return this._repeat}this._repeat=p;
return this._uncache(true)};i.repeatDelay=function(p){if(!arguments.length){return this._repeatDelay
}this._repeatDelay=p;return this._uncache(true)};i.yoyo=function(p){if(!arguments.length){return this._yoyo
}this._yoyo=p;return this};i.currentLabel=function(p){if(!arguments.length){return this.getLabelBefore(this._time+1e-8)
}return this.seek(p,true)};return r},true);d._gsDefine("TimelineLite",["core.Animation","core.SimpleTimeline","TweenLite"],function(o,l,r){var i=function(A){l.call(this,A);
this._labels={};this.autoRemoveChildren=(this.vars.autoRemoveChildren===true);this.smoothChildTiming=(this.vars.smoothChildTiming===true);
this._sortChildren=true;this._onUpdate=this.vars.onUpdate;var y=this.vars,B,z;for(z in y){B=y[z];
if(t(B)){if(B.join("").indexOf("{self}")!==-1){y[z]=this._swapSelfInParams(B)}}}if(t(y.tweens)){this.add(y.tweens,0,y.align,y.stagger)
}},n=1e-10,v=r._internals,q=i._internals={},h=v.isSelector,t=v.isArray,g=v.lazyTweens,s=v.lazyRender,m=d._gsDefine.globals,u=function(z){var A={},y;
for(y in z){A[y]=z[y]}return A},k=function(C,y,z){var B=C.cycle,A,D;for(A in B){D=B[A];
C[A]=(typeof(D)==="function")?D(z,y[z]):D[z%D.length]}delete C.cycle},x=q.pauseCallback=function(){},w=function(z){var p=[],y=z.length,A;
for(A=0;A!==y;p.push(z[A++])){}return p},j=i.prototype=new l();i.version="1.19.1";
j.constructor=i;j.kill()._gc=j._forcingPlayhead=j._hasPause=false;j.to=function(B,A,z,p){var y=(z.repeat&&m.TweenMax)||r;
return A?this.add(new y(B,A,z),p):this.set(B,z,p)};j.from=function(A,z,y,p){return this.add(((y.repeat&&m.TweenMax)||r).from(A,z,y),p)
};j.fromTo=function(B,A,C,z,p){var y=(z.repeat&&m.TweenMax)||r;return A?this.add(y.fromTo(B,A,C,z),p):this.set(B,z,p)
};j.staggerTo=function(F,B,G,y,E,H,z,A){var I=new i({onComplete:H,onCompleteParams:z,callbackScope:A,smoothChildTiming:this.smoothChildTiming}),C=G.cycle,p,D;
if(typeof(F)==="string"){F=r.selector(F)||F}F=F||[];if(h(F)){F=w(F)}y=y||0;if(y<0){F=w(F);
F.reverse();y*=-1}for(D=0;D<F.length;D++){p=u(G);if(p.startAt){p.startAt=u(p.startAt);
if(p.startAt.cycle){k(p.startAt,F,D)}}if(C){k(p,F,D);if(p.duration!=null){B=p.duration;
delete p.duration}}I.to(F[D],B,p,D*y)}return this.add(I,E)};j.staggerFrom=function(z,E,D,C,y,B,p,A){D.immediateRender=(D.immediateRender!=false);
D.runBackwards=true;return this.staggerTo(z,E,D,C,y,B,p,A)};j.staggerFromTo=function(D,B,y,F,p,C,E,z,A){F.startAt=y;
F.immediateRender=(F.immediateRender!=false&&y.immediateRender!=false);return this.staggerTo(D,B,F,p,C,E,z,A)
};j.call=function(A,z,y,p){return this.add(r.delayedCall(0,A,z,y),p)};j.set=function(z,y,p){p=this._parseTimeOrLabel(p,0,true);
if(y.immediateRender==null){y.immediateRender=(p===this._time&&!this._paused)}return this.add(new r(z,0,y),p)
};i.exportRoot=function(C,B){C=C||{};if(C.smoothChildTiming==null){C.smoothChildTiming=true
}var y=new i(C),p=y._timeline,z,A;if(B==null){B=true}p._remove(y,true);y._startTime=0;
y._rawPrevTime=y._time=y._totalTime=p._time;z=p._first;while(z){A=z._next;if(!B||!(z instanceof r&&z.target===z.vars.onComplete)){y.add(z,z._startTime-z._delay)
}z=A}p.add(y,0);return y};j.add=function(F,D,E,p){var z,A,C,y,G,B;if(typeof(D)!=="number"){D=this._parseTimeOrLabel(D,0,true,F)
}if(!(F instanceof o)){if((F instanceof Array)||(F&&F.push&&t(F))){E=E||"normal";
p=p||0;z=D;A=F.length;for(C=0;C<A;C++){if(t(y=F[C])){y=new i({tweens:y})}this.add(y,z);
if(typeof(y)!=="string"&&typeof(y)!=="function"){if(E==="sequence"){z=y._startTime+(y.totalDuration()/y._timeScale)
}else{if(E==="start"){y._startTime-=y.delay()}}}z+=p}return this._uncache(true)
}else{if(typeof(F)==="string"){return this.addLabel(F,D)}else{if(typeof(F)==="function"){F=r.delayedCall(0,F)
}else{throw ("Cannot add "+F+" into the timeline; it is not a tween, timeline, function, or string.")
}}}}l.prototype.add.call(this,F,D);if(this._gc||this._time===this._duration){if(!this._paused){if(this._duration<this.duration()){G=this;
B=(G.rawTime()>F._startTime);while(G._timeline){if(B&&G._timeline.smoothChildTiming){G.totalTime(G._totalTime,true)
}else{if(G._gc){G._enabled(true,false)}}G=G._timeline}}}}return this};j.remove=function(z){if(z instanceof o){this._remove(z,false);
var p=z._timeline=z.vars.useFrames?o._rootFramesTimeline:o._rootTimeline;z._startTime=(z._paused?z._pauseTime:p._time)-((!z._reversed?z._totalTime:z.totalDuration()-z._totalTime)/z._timeScale);
return this}else{if(z instanceof Array||(z&&z.push&&t(z))){var y=z.length;while(--y>-1){this.remove(z[y])
}return this}else{if(typeof(z)==="string"){return this.removeLabel(z)}}}return this.kill(null,z)
};j._remove=function(p,z){l.prototype._remove.call(this,p,z);var y=this._last;if(!y){this._time=this._totalTime=this._duration=this._totalDuration=0
}else{if(this._time>this.duration()){this._time=this._duration;this._totalTime=this._totalDuration
}}return this};j.append=function(y,p){return this.add(y,this._parseTimeOrLabel(null,p,true,y))
};j.insert=j.insertMultiple=function(z,p,A,y){return this.add(z,p||0,A,y)};j.appendMultiple=function(z,p,A,y){return this.add(z,this._parseTimeOrLabel(null,p,true,z),A,y)
};j.addLabel=function(y,p){this._labels[y]=this._parseTimeOrLabel(p);return this
};j.addPause=function(p,B,A,z){var y=r.delayedCall(0,x,A,z||this);y.vars.onComplete=y.vars.onReverseComplete=B;
y.data="isPause";this._hasPause=true;return this.add(y,p)};j.removeLabel=function(p){delete this._labels[p];
return this};j.getLabelTime=function(p){return(this._labels[p]!=null)?this._labels[p]:-1
};j._parseTimeOrLabel=function(A,p,z,B){var y;if(B instanceof o&&B.timeline===this){this.remove(B)
}else{if(B&&((B instanceof Array)||(B.push&&t(B)))){y=B.length;while(--y>-1){if(B[y] instanceof o&&B[y].timeline===this){this.remove(B[y])
}}}}if(typeof(p)==="string"){return this._parseTimeOrLabel(p,(z&&typeof(A)==="number"&&this._labels[p]==null)?A-this.duration():0,z)
}p=p||0;if(typeof(A)==="string"&&(isNaN(A)||this._labels[A]!=null)){y=A.indexOf("=");
if(y===-1){if(this._labels[A]==null){return z?(this._labels[A]=this.duration()+p):p
}return this._labels[A]+p}p=parseInt(A.charAt(y-1)+"1",10)*Number(A.substr(y+1));
A=(y>1)?this._parseTimeOrLabel(A.substr(0,y-1),0,z):this.duration()}else{if(A==null){A=this.duration()
}}return Number(A)+p};j.seek=function(p,y){return this.totalTime((typeof(p)==="number")?p:this._parseTimeOrLabel(p),(y!==false))
};j.stop=function(){return this.paused(true)};j.gotoAndPlay=function(p,y){return this.play(p,y)
};j.gotoAndStop=function(p,y){return this.pause(p,y)};j.render=function(A,L,z){if(this._gc){this._enabled(true,false)
}var F=(!this._dirty)?this._totalDuration:this.totalDuration(),p=this._time,H=this._startTime,D=this._timeScale,B=this._paused,K,G,E,J,y,I,C;
if(A>=F-1e-7&&A>=0){this._totalTime=this._time=F;if(!this._reversed){if(!this._hasPausedChild()){G=true;
J="onComplete";y=!!this._timeline.autoRemoveChildren;if(this._duration===0){if((A<=0&&A>=-1e-7)||this._rawPrevTime<0||this._rawPrevTime===n){if(this._rawPrevTime!==A&&this._first){y=true;
if(this._rawPrevTime>n){J="onReverseComplete"}}}}}}this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;
A=F+0.0001}else{if(A<1e-7){this._totalTime=this._time=0;if(p!==0||(this._duration===0&&this._rawPrevTime!==n&&(this._rawPrevTime>0||(A<0&&this._rawPrevTime>=0)))){J="onReverseComplete";
G=this._reversed}if(A<0){this._active=false;if(this._timeline.autoRemoveChildren&&this._reversed){y=G=true;
J="onReverseComplete"}else{if(this._rawPrevTime>=0&&this._first){y=true}}this._rawPrevTime=A
}else{this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;if(A===0&&G){K=this._first;
while(K&&K._startTime===0){if(!K._duration){G=false}K=K._next}}A=0;if(!this._initted){y=true
}}}else{if(this._hasPause&&!this._forcingPlayhead&&!L){if(A>=p){K=this._first;while(K&&K._startTime<=A&&!I){if(!K._duration){if(K.data==="isPause"&&!K.ratio&&!(K._startTime===0&&this._rawPrevTime===0)){I=K
}}K=K._next}}else{K=this._last;while(K&&K._startTime>=A&&!I){if(!K._duration){if(K.data==="isPause"&&K._rawPrevTime>0){I=K
}}K=K._prev}}if(I){this._time=A=I._startTime;this._totalTime=A+(this._cycle*(this._totalDuration+this._repeatDelay))
}}this._totalTime=this._time=this._rawPrevTime=A}}if((this._time===p||!this._first)&&!z&&!y&&!I){return
}else{if(!this._initted){this._initted=true}}if(!this._active){if(!this._paused&&this._time!==p&&A>0){this._active=true
}}if(p===0){if(this.vars.onStart){if(this._time!==0||!this._duration){if(!L){this._callback("onStart")
}}}}C=this._time;if(C>=p){K=this._first;while(K){E=K._next;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=C&&!K._paused&&!K._gc)){if(I===K){this.pause()
}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}else{K=this._last;while(K){E=K._prev;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=p&&!K._paused&&!K._gc)){if(I===K){I=K._prev;
while(I&&I.endTime()>this._time){I.render((I._reversed?I.totalDuration()-((A-I._startTime)*I._timeScale):(A-I._startTime)*I._timeScale),L,z);
I=I._prev}I=null;this.pause()}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)
}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}if(this._onUpdate){if(!L){if(g.length){s()}this._callback("onUpdate")}}if(J){if(!this._gc){if(H===this._startTime||D!==this._timeScale){if(this._time===0||F>=this.totalDuration()){if(G){if(g.length){s()
}if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!L&&this.vars[J]){this._callback(J)}}}}}};j._hasPausedChild=function(){var p=this._first;
while(p){if(p._paused||((p instanceof i)&&p._hasPausedChild())){return true}p=p._next
}return false};j.getChildren=function(D,C,A,B){B=B||-9999999999;var p=[],z=this._first,y=0;
while(z){if(z._startTime<B){}else{if(z instanceof r){if(C!==false){p[y++]=z}}else{if(A!==false){p[y++]=z
}if(D!==false){p=p.concat(z.getChildren(true,C,A));y=p.length}}}z=z._next}return p
};j.getTweensOf=function(C,D){var A=this._gc,p=[],z=0,B,y;if(A){this._enabled(true,true)
}B=r.getTweensOf(C);y=B.length;while(--y>-1){if(B[y].timeline===this||(D&&this._contains(B[y]))){p[z++]=B[y]
}}if(A){this._enabled(false,true)}return p};j.recent=function(){return this._recent
};j._contains=function(y){var p=y.timeline;while(p){if(p===this){return true}p=p.timeline
}return false};j.shiftChildren=function(z,C,A){A=A||0;var y=this._first,D=this._labels,B;
while(y){if(y._startTime>=A){y._startTime+=z}y=y._next}if(C){for(B in D){if(D[B]>=A){D[B]+=z
}}}return this._uncache(true)};j._kill=function(A,z){if(!A&&!z){return this._enabled(false,false)
}var y=(!z)?this.getChildren(true,true,false):this.getTweensOf(z),p=y.length,B=false;
while(--p>-1){if(y[p]._kill(A,z)){B=true}}return B};j.clear=function(z){var y=this.getChildren(false,true,true),p=y.length;
this._time=this._totalTime=0;while(--p>-1){y[p]._enabled(false,false)}if(z!==false){this._labels={}
}return this._uncache(true)};j.invalidate=function(){var p=this._first;while(p){p.invalidate();
p=p._next}return o.prototype.invalidate.call(this)};j._enabled=function(y,p){if(y===this._gc){var z=this._first;
while(z){z._enabled(y,true);z=z._next}}return l.prototype._enabled.call(this,y,p)
};j.totalTime=function(z,y,p){this._forcingPlayhead=true;var A=o.prototype.totalTime.apply(this,arguments);
this._forcingPlayhead=false;return A};j.duration=function(p){if(!arguments.length){if(this._dirty){this.totalDuration()
}return this._duration}if(this.duration()!==0&&p!==0){this.timeScale(this._duration/p)
}return this};j.totalDuration=function(C){if(!arguments.length){if(this._dirty){var y=0,A=this._last,p=999999999999,B,z;
while(A){B=A._prev;if(A._dirty){A.totalDuration()}if(A._startTime>p&&this._sortChildren&&!A._paused){this.add(A,A._startTime-A._delay)
}else{p=A._startTime}if(A._startTime<0&&!A._paused){y-=A._startTime;if(this._timeline.smoothChildTiming){this._startTime+=A._startTime/this._timeScale
}this.shiftChildren(-A._startTime,false,-9999999999);p=0}z=A._startTime+(A._totalDuration/A._timeScale);
if(z>y){y=z}A=B}this._duration=this._totalDuration=y;this._dirty=false}return this._totalDuration
}return(C&&this.totalDuration())?this.timeScale(this._totalDuration/C):this};j.paused=function(y){if(!y){var p=this._first,z=this._time;
while(p){if(p._startTime===z&&p.data==="isPause"){p._rawPrevTime=0}p=p._next}}return o.prototype.paused.apply(this,arguments)
};j.usesFrames=function(){var p=this._timeline;while(p._timeline){p=p._timeline
}return(p===o._rootFramesTimeline)};j.rawTime=function(p){return(p&&(this._paused||(this._repeat&&this.time()>0&&this.totalProgress()<1)))?this._totalTime%(this._duration+this._repeatDelay):this._paused?this._totalTime:(this._timeline.rawTime(p)-this._startTime)*this._timeScale
};return i},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(g){var h=function(){return(d.GreenSockGlobals||d)[g]
};if(typeof(define)==="function"&&define.amd){define(["./TweenLite"],h)}else{if(typeof(c)!=="undefined"&&c.exports){b("./TweenLite.js");
c.exports=h()}}}("TimelineMax"))}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"./TweenLite.js":207}],207:[function(b,c,a){(function(d){
/*!
 * VERSION: 1.19.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
(function(Y,w){var v={},o=Y.document,L=Y.GreenSockGlobals=Y.GreenSockGlobals||Y;
if(L.TweenLite){return}var F=function(ao){var am=ao.split("."),ap=L,an;for(an=0;
an<am.length;an++){ap[am[an]]=ap=ap[am[an]]||{}}return ap},r=F("com.greensock"),k=1e-10,A=function(an){var p=[],am=an.length,ao;
for(ao=0;ao!==am;p.push(an[ao++])){}return p},K=function(){},ai=(function(){var i=Object.prototype.toString,p=i.call([]);
return function(am){return am!=null&&(am instanceof Array||(typeof(am)==="object"&&!!am.push&&i.call(am)===p))
}}()),ak,ae,aa,E,N,n={},I=function(p,ao,an,am){this.sc=(n[p])?n[p].sc:[];n[p]=this;
this.gsClass=null;this.func=an;var i=[];this.check=function(av){var at=ao.length,ar=at,au,aq,ax,ap,aw;
while(--at>-1){if((au=n[ao[at]]||new I(ao[at],[])).gsClass){i[at]=au.gsClass;ar--
}else{if(av){au.sc.push(this)}}}if(ar===0&&an){aq=("com.greensock."+p).split(".");
ax=aq.pop();ap=F(aq.join("."))[ax]=this.gsClass=an.apply(an,i);if(am){L[ax]=v[ax]=ap;
aw=(typeof(c)!=="undefined"&&c.exports);if(!aw&&typeof(define)==="function"&&define.amd){define((Y.GreenSockAMDPath?Y.GreenSockAMDPath+"/":"")+p.split(".").pop(),[],function(){return ap
})}else{if(aw){if(p===w){c.exports=v[w]=ap;for(at in v){ap[at]=v[at]}}else{if(v[w]){v[w][ax]=ap
}}}}}for(at=0;at<this.sc.length;at++){this.sc[at].check()}}};this.check(true)},g=Y._gsDefine=function(i,an,am,p){return new I(i,an,am,p)
},x=r._class=function(i,am,p){am=am||function(){};g(i,[],function(){return am},p);
return am};g.globals=L;var aj=[0,0,1,1],ab=[],G=x("easing.Ease",function(am,an,p,i){this._func=am;
this._type=p||0;this._power=i||0;this._params=an?aj.concat(an):aj},true),al=G.map={},u=G.register=function(am,aw,at,aq){var ar=aw.split(","),ao=ar.length,ap=(at||"easeIn,easeOut,easeInOut").split(","),au,p,an,av;
while(--ao>-1){p=ar[ao];au=aq?x("easing."+p,null,true):r.easing[p]||{};an=ap.length;
while(--an>-1){av=ap[an];al[p+"."+av]=al[av+p]=au[av]=am.getRatio?am:am[av]||new am()
}}};aa=G.prototype;aa._calcEnd=false;aa.getRatio=function(ao){if(this._func){this._params[0]=ao;
return this._func.apply(null,this._params)}var i=this._type,am=this._power,an=(i===1)?1-ao:(i===2)?ao:(ao<0.5)?ao*2:(1-ao)*2;
if(am===1){an*=an}else{if(am===2){an*=an*an}else{if(am===3){an*=an*an*an}else{if(am===4){an*=an*an*an*an
}}}}return(i===1)?1-an:(i===2)?an:(ao<0.5)?an/2:1-(an/2)};ak=["Linear","Quad","Cubic","Quart","Quint,Strong"];
ae=ak.length;while(--ae>-1){aa=ak[ae]+",Power"+ae;u(new G(null,null,1,ae),aa,"easeOut",true);
u(new G(null,null,2,ae),aa,"easeIn"+((ae===0)?",easeNone":""));u(new G(null,null,3,ae),aa,"easeInOut")
}al.linear=r.easing.Linear.easeIn;al.swing=r.easing.Quad.easeInOut;var ad=x("events.EventDispatcher",function(i){this._listeners={};
this._eventTarget=i||this});aa=ad.prototype;aa.addEventListener=function(aq,at,au,am,ar){ar=ar||0;
var ap=this._listeners[aq],ao=0,p,an;if(this===E&&!N){E.wake()}if(ap==null){this._listeners[aq]=ap=[]
}an=ap.length;while(--an>-1){p=ap[an];if(p.c===at&&p.s===au){ap.splice(an,1)}else{if(ao===0&&p.pr<ar){ao=an+1
}}}ap.splice(ao,0,{c:at,s:au,up:am,pr:ar})};aa.removeEventListener=function(am,ao){var an=this._listeners[am],p;
if(an){p=an.length;while(--p>-1){if(an[p].c===ao){an.splice(p,1);return}}}};aa.dispatchEvent=function(an){var ap=this._listeners[an],am,p,ao;
if(ap){am=ap.length;if(am>1){ap=ap.slice(0)}p=this._eventTarget;while(--am>-1){ao=ap[am];
if(ao){if(ao.up){ao.c.call(ao.s||p,{type:an,target:p})}else{ao.c.call(ao.s||p)}}}}};
var q=Y.requestAnimationFrame,s=Y.cancelAnimationFrame,X=Date.now||function(){return new Date().getTime()
},P=X();ak=["ms","moz","webkit","o"];ae=ak.length;while(--ae>-1&&!q){q=Y[ak[ae]+"RequestAnimationFrame"];
s=Y[ak[ae]+"CancelAnimationFrame"]||Y[ak[ae]+"CancelRequestAnimationFrame"]}x("Ticker",function(ao,au){var av=this,i=X(),am=(au!==false&&q)?"auto":false,ap=500,p=33,at="tick",ar,ax,aw,ay,aq,an=function(aC){var aA=X()-P,az,aB;
if(aA>ap){i+=aA-p}P+=aA;av.time=(P-i)/1000;az=av.time-aq;if(!ar||az>0||aC===true){av.frame++;
aq+=az+(az>=ay?0.004:ay-az);aB=true}if(aC!==true){aw=ax(an)}if(aB){av.dispatchEvent(at)
}};ad.call(av);av.time=av.frame=0;av.tick=function(){an(true)};av.lagSmoothing=function(az,aA){ap=az||(1/k);
p=Math.min(aA,ap,0)};av.sleep=function(){if(aw==null){return}if(!am||!s){clearTimeout(aw)
}else{s(aw)}ax=K;aw=null;if(av===E){N=false}};av.wake=function(az){if(aw!==null){av.sleep()
}else{if(az){i+=-P+(P=X())}else{if(av.frame>10){P=X()-ap+5}}}ax=(ar===0)?K:(!am||!q)?function(aA){return setTimeout(aA,((aq-av.time)*1000+1)|0)
}:q;if(av===E){N=true}an(2)};av.fps=function(az){if(!arguments.length){return ar
}ar=az;ay=1/(ar||60);aq=this.time+ay;av.wake()};av.useRAF=function(az){if(!arguments.length){return am
}av.sleep();am=az;av.fps(ar)};av.fps(ao);setTimeout(function(){if(am==="auto"&&av.frame<5&&o.visibilityState!=="hidden"){av.useRAF(false)
}},1500)});aa=r.Ticker.prototype=new r.events.EventDispatcher();aa.constructor=r.Ticker;
var z=x("core.Animation",function(am,p){this.vars=p=p||{};this._duration=this._totalDuration=am||0;
this._delay=Number(p.delay)||0;this._timeScale=1;this._active=(p.immediateRender===true);
this.data=p.data;this._reversed=(p.reversed===true);if(!M){return}if(!N){E.wake()
}var i=this.vars.useFrames?y:M;i.add(this,i._time);if(this.vars.paused){this.paused(true)
}});E=z.ticker=new r.Ticker();aa=z.prototype;aa._dirty=aa._gc=aa._initted=aa._paused=false;
aa._totalTime=aa._time=0;aa._rawPrevTime=-1;aa._next=aa._last=aa._onUpdate=aa._timeline=aa.timeline=null;
aa._paused=false;var Q=function(){if(N&&X()-P>2000){E.wake()}setTimeout(Q,2000)
};Q();aa.play=function(p,i){if(p!=null){this.seek(p,i)}return this.reversed(false).paused(false)
};aa.pause=function(i,p){if(i!=null){this.seek(i,p)}return this.paused(true)};aa.resume=function(p,i){if(p!=null){this.seek(p,i)
}return this.paused(false)};aa.seek=function(p,i){return this.totalTime(Number(p),i!==false)
};aa.restart=function(p,i){return this.reversed(false).paused(false).totalTime(p?-this._delay:0,(i!==false),true)
};aa.reverse=function(p,i){if(p!=null){this.seek((p||this.totalDuration()),i)}return this.reversed(true).paused(false)
};aa.render=function(am,i,p){};aa.invalidate=function(){this._time=this._totalTime=0;
this._initted=this._gc=false;this._rawPrevTime=-1;if(this._gc||!this.timeline){this._enabled(true)
}return this};aa.isActive=function(){var p=this._timeline,am=this._startTime,i;
return(!p||(!this._gc&&!this._paused&&p.isActive()&&(i=p.rawTime(true))>=am&&i<am+this.totalDuration()/this._timeScale))
};aa._enabled=function(p,i){if(!N){E.wake()}this._gc=!p;this._active=this.isActive();
if(i!==true){if(p&&!this.timeline){this._timeline.add(this,this._startTime-this._delay)
}else{if(!p&&this.timeline){this._timeline._remove(this,true)}}}return false};aa._kill=function(p,i){return this._enabled(false,false)
};aa.kill=function(p,i){this._kill(p,i);return this};aa._uncache=function(i){var p=i?this:this.timeline;
while(p){p._dirty=true;p=p.timeline}return this};aa._swapSelfInParams=function(am){var p=am.length,an=am.concat();
while(--p>-1){if(am[p]==="{self}"){an[p]=this}}return an};aa._callback=function(an){var p=this.vars,ap=p[an],ao=p[an+"Params"],am=p[an+"Scope"]||p.callbackScope||this,i=ao?ao.length:0;
switch(i){case 0:ap.call(am);break;case 1:ap.call(am,ao[0]);break;case 2:ap.call(am,ao[0],ao[1]);
break;default:ap.apply(am,ao)}};aa.eventCallback=function(am,ao,an,p){if((am||"").substr(0,2)==="on"){var i=this.vars;
if(arguments.length===1){return i[am]}if(ao==null){delete i[am]}else{i[am]=ao;i[am+"Params"]=(ai(an)&&an.join("").indexOf("{self}")!==-1)?this._swapSelfInParams(an):an;
i[am+"Scope"]=p}if(am==="onUpdate"){this._onUpdate=ao}}return this};aa.delay=function(i){if(!arguments.length){return this._delay
}if(this._timeline.smoothChildTiming){this.startTime(this._startTime+i-this._delay)
}this._delay=i;return this};aa.duration=function(i){if(!arguments.length){this._dirty=false;
return this._duration}this._duration=this._totalDuration=i;this._uncache(true);
if(this._timeline.smoothChildTiming){if(this._time>0){if(this._time<this._duration){if(i!==0){this.totalTime(this._totalTime*(i/this._duration),true)
}}}}return this};aa.totalDuration=function(i){this._dirty=false;return(!arguments.length)?this._totalDuration:this.duration(i)
};aa.time=function(p,i){if(!arguments.length){return this._time}if(this._dirty){this.totalDuration()
}return this.totalTime((p>this._duration)?this._duration:p,i)};aa.totalTime=function(an,am,p){if(!N){E.wake()
}if(!arguments.length){return this._totalTime}if(this._timeline){if(an<0&&!p){an+=this.totalDuration()
}if(this._timeline.smoothChildTiming){if(this._dirty){this.totalDuration()}var ao=this._totalDuration,i=this._timeline;
if(an>ao&&!p){an=ao}this._startTime=(this._paused?this._pauseTime:i._time)-((!this._reversed?an:ao-an)/this._timeScale);
if(!i._dirty){this._uncache(false)}if(i._timeline){while(i._timeline){if(i._timeline._time!==(i._startTime+i._totalTime)/i._timeScale){i.totalTime(i._totalTime,true)
}i=i._timeline}}}if(this._gc){this._enabled(true,false)}if(this._totalTime!==an||this._duration===0){if(J.length){t()
}this.render(an,am,false);if(J.length){t()}}}return this};aa.progress=aa.totalProgress=function(p,i){var am=this.duration();
return(!arguments.length)?(am?this._time/am:this.ratio):this.totalTime(am*p,i)};
aa.startTime=function(i){if(!arguments.length){return this._startTime}if(i!==this._startTime){this._startTime=i;
if(this.timeline){if(this.timeline._sortChildren){this.timeline.add(this,i-this._delay)
}}}return this};aa.endTime=function(i){return this._startTime+((i!=false)?this.totalDuration():this.duration())/this._timeScale
};aa.timeScale=function(am){if(!arguments.length){return this._timeScale}am=am||k;
if(this._timeline&&this._timeline.smoothChildTiming){var i=this._pauseTime,p=(i||i===0)?i:this._timeline.totalTime();
this._startTime=p-((p-this._startTime)*this._timeScale/am)}this._timeScale=am;return this._uncache(false)
};aa.reversed=function(i){if(!arguments.length){return this._reversed}if(i!=this._reversed){this._reversed=i;
this.totalTime(((this._timeline&&!this._timeline.smoothChildTiming)?this.totalDuration()-this._totalTime:this._totalTime),true)
}return this};aa.paused=function(an){if(!arguments.length){return this._paused}var p=this._timeline,am,i;
if(an!=this._paused){if(p){if(!N&&!an){E.wake()}am=p.rawTime();i=am-this._pauseTime;
if(!an&&p.smoothChildTiming){this._startTime+=i;this._uncache(false)}this._pauseTime=an?am:null;
this._paused=an;this._active=this.isActive();if(!an&&i!==0&&this._initted&&this.duration()){am=p.smoothChildTiming?this._totalTime:(am-this._startTime)/this._timeScale;
this.render(am,(am===this._totalTime),true)}}}if(this._gc&&!an){this._enabled(true,false)
}return this};var ag=x("core.SimpleTimeline",function(i){z.call(this,0,i);this.autoRemoveChildren=this.smoothChildTiming=true
});aa=ag.prototype=new z();aa.constructor=ag;aa.kill()._gc=false;aa._first=aa._last=aa._recent=null;
aa._sortChildren=false;aa.add=aa.insert=function(ap,i,ao,an){var am,p;ap._startTime=Number(i||0)+ap._delay;
if(ap._paused){if(this!==ap._timeline){ap._pauseTime=ap._startTime+((this.rawTime()-ap._startTime)/ap._timeScale)
}}if(ap.timeline){ap.timeline._remove(ap,true)}ap.timeline=ap._timeline=this;if(ap._gc){ap._enabled(true,true)
}am=this._last;if(this._sortChildren){p=ap._startTime;while(am&&am._startTime>p){am=am._prev
}}if(am){ap._next=am._next;am._next=ap}else{ap._next=this._first;this._first=ap
}if(ap._next){ap._next._prev=ap}else{this._last=ap}ap._prev=am;this._recent=ap;
if(this._timeline){this._uncache(true)}return this};aa._remove=function(i,p){if(i.timeline===this){if(!p){i._enabled(false,true)
}if(i._prev){i._prev._next=i._next}else{if(this._first===i){this._first=i._next
}}if(i._next){i._next._prev=i._prev}else{if(this._last===i){this._last=i._prev}}i._next=i._prev=i.timeline=null;
if(i===this._recent){this._recent=this._last}if(this._timeline){this._uncache(true)
}}return this};aa.render=function(ao,am,an){var i=this._first,p;this._totalTime=this._time=this._rawPrevTime=ao;
while(i){p=i._next;if(i._active||(ao>=i._startTime&&!i._paused)){if(!i._reversed){i.render((ao-i._startTime)*i._timeScale,am,an)
}else{i.render(((!i._dirty)?i._totalDuration:i.totalDuration())-((ao-i._startTime)*i._timeScale),am,an)
}}i=p}};aa.rawTime=function(){if(!N){E.wake()}return this._totalTime};var H=x("TweenLite",function(ar,aq,ap){z.call(this,aq,ap);
this.render=H.prototype.render;if(ar==null){throw"Cannot tween a null target."}this.target=ar=(typeof(ar)!=="string")?ar:H.selector(ar)||ar;
var at=(ar.jquery||(ar.length&&ar!==Y&&ar[0]&&(ar[0]===Y||(ar[0].nodeType&&ar[0].style&&!ar.nodeType)))),am=this.vars.overwrite,ao,an,p;
this._overwrite=am=(am==null)?ac[H.defaultOverwrite]:(typeof(am)==="number")?am>>0:ac[am];
if((at||ar instanceof Array||(ar.push&&ai(ar)))&&typeof(ar[0])!=="number"){this._targets=p=A(ar);
this._propLookup=[];this._siblings=[];for(ao=0;ao<p.length;ao++){an=p[ao];if(!an){p.splice(ao--,1);
continue}else{if(typeof(an)==="string"){an=p[ao--]=H.selector(an);if(typeof(an)==="string"){p.splice(ao+1,1)
}continue}else{if(an.length&&an!==Y&&an[0]&&(an[0]===Y||(an[0].nodeType&&an[0].style&&!an.nodeType))){p.splice(ao--,1);
this._targets=p=p.concat(A(an));continue}}}this._siblings[ao]=S(an,this,false);
if(am===1){if(this._siblings[ao].length>1){l(an,this,null,1,this._siblings[ao])
}}}}else{this._propLookup={};this._siblings=S(ar,this,false);if(am===1){if(this._siblings.length>1){l(ar,this,null,1,this._siblings)
}}}if(this.vars.immediateRender||(aq===0&&this._delay===0&&this.vars.immediateRender!==false)){this._time=-k;
this.render(Math.min(0,-this._delay))}},true),ah=function(i){return(i&&i.length&&i!==Y&&i[0]&&(i[0]===Y||(i[0].nodeType&&i[0].style&&!i.nodeType)))
},m=function(ao,an){var i={},am;for(am in ao){if(!U[am]&&(!(am in an)||am==="transform"||am==="x"||am==="y"||am==="width"||am==="height"||am==="className"||am==="border")&&(!D[am]||(D[am]&&D[am]._autoCSS))){i[am]=ao[am];
delete ao[am]}}ao.css=i};aa=H.prototype=new z();aa.constructor=H;aa.kill()._gc=false;
aa.ratio=0;aa._firstPT=aa._targets=aa._overwrittenProps=aa._startAt=null;aa._notifyPluginsOfEnabled=aa._lazy=false;
H.version="1.19.1";H.defaultEase=aa._ease=new G(null,null,1,1);H.defaultOverwrite="auto";
H.ticker=E;H.autoSleep=120;H.lagSmoothing=function(i,p){E.lagSmoothing(i,p)};H.selector=Y.$||Y.jQuery||function(p){var i=Y.$||Y.jQuery;
if(i){H.selector=i;return i(p)}return(typeof(o)==="undefined")?p:(o.querySelectorAll?o.querySelectorAll(p):o.getElementById((p.charAt(0)==="#")?p.substr(1):p))
};var J=[],W={},V=/(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/ig,j=function(i){var am=this._firstPT,p=0.000001,an;
while(am){an=!am.blob?am.c*i+am.s:(i===1)?this.end:i?this.join(""):this.start;if(am.m){an=am.m(an,this._target||am.t)
}else{if(an<p){if(an>-p&&!am.blob){an=0}}}if(!am.f){am.t[am.p]=an}else{if(am.fp){am.t[am.p](am.fp,an)
}else{am.t[am.p](an)}}am=am._next}},h=function(an,at,ao,az){var ax=[],p=0,aA="",ar=0,aw,am,av,au,ap,ay,aq;
ax.start=an;ax.end=at;an=ax[0]=an+"";at=ax[1]=at+"";if(ao){ao(ax);an=ax[0];at=ax[1]
}ax.length=0;aw=an.match(V)||[];am=at.match(V)||[];if(az){az._next=null;az.blob=1;
ax._firstPT=ax._applyPT=az}ap=am.length;for(au=0;au<ap;au++){aq=am[au];ay=at.substr(p,at.indexOf(aq,p)-p);
aA+=(ay||!au)?ay:",";p+=ay.length;if(ar){ar=(ar+1)%5}else{if(ay.substr(-5)==="rgba("){ar=1
}}if(aq===aw[au]||aw.length<=au){aA+=aq}else{if(aA){ax.push(aA);aA=""}av=parseFloat(aw[au]);
ax.push(av);ax._firstPT={_next:ax._firstPT,t:ax,p:ax.length-1,s:av,c:((aq.charAt(1)==="=")?parseInt(aq.charAt(0)+"1",10)*parseFloat(aq.substr(2)):(parseFloat(aq)-av))||0,f:0,m:(ar&&ar<4)?Math.round:0}
}p+=aq.length}aA+=at.substr(p);if(aA){ax.push(aA)}ax.setRatio=j;return ax},B=function(ar,p,an,ap,ao,av,am,az,aq){if(typeof(ap)==="function"){ap=ap(aq||0,ar)
}var at=typeof(ar[p]),au=(at!=="function")?"":((p.indexOf("set")||typeof(ar["get"+p.substr(3)])!=="function")?p:"get"+p.substr(3)),ay=(an!=="get")?an:!au?ar[p]:am?ar[au](am):ar[au](),aw=(typeof(ap)==="string"&&ap.charAt(1)==="="),ax={t:ar,p:p,s:ay,f:(at==="function"),pg:0,n:ao||p,m:(!av?0:(typeof(av)==="function")?av:Math.round),pr:0,c:aw?parseInt(ap.charAt(0)+"1",10)*parseFloat(ap.substr(2)):(parseFloat(ap)-ay)||0},i;
if(typeof(ay)!=="number"||(typeof(ap)!=="number"&&!aw)){if(am||isNaN(ay)||(!aw&&isNaN(ap))||typeof(ay)==="boolean"||typeof(ap)==="boolean"){ax.fp=am;
i=h(ay,(aw?ax.s+ax.c:ap),az||H.defaultStringFilter,ax);ax={t:i,p:"setRatio",s:0,c:1,f:2,pg:0,n:ao||p,pr:0,m:0}
}else{ax.s=parseFloat(ay);if(!aw){ax.c=(parseFloat(ap)-ax.s)||0}}}if(ax.c){if((ax._next=this._firstPT)){ax._next._prev=ax
}this._firstPT=ax;return ax}},T=H._internals={isArray:ai,isSelector:ah,lazyTweens:J,blobDif:h},D=H._plugins={},C=T.tweenLookup={},R=0,U=T.reservedProps={ease:1,delay:1,overwrite:1,onComplete:1,onCompleteParams:1,onCompleteScope:1,useFrames:1,runBackwards:1,startAt:1,onUpdate:1,onUpdateParams:1,onUpdateScope:1,onStart:1,onStartParams:1,onStartScope:1,onReverseComplete:1,onReverseCompleteParams:1,onReverseCompleteScope:1,onRepeat:1,onRepeatParams:1,onRepeatScope:1,easeParams:1,yoyo:1,immediateRender:1,repeat:1,repeatDelay:1,data:1,paused:1,reversed:1,autoCSS:1,lazy:1,onOverwrite:1,callbackScope:1,stringFilter:1,id:1},ac={none:0,all:1,auto:2,concurrent:3,allOnStart:4,preexisting:5,"true":1,"false":0},y=z._rootFramesTimeline=new ag(),M=z._rootTimeline=new ag(),af=30,t=T.lazyRender=function(){var am=J.length,p;
W={};while(--am>-1){p=J[am];if(p&&p._lazy!==false){p.render(p._lazy[0],p._lazy[1],true);
p._lazy=false}}J.length=0};M._startTime=E.time;y._startTime=E.frame;M._active=y._active=true;
setTimeout(t,1);z._updateRoot=H.render=function(){var an,am,ao;if(J.length){t()
}M.render((E.time-M._startTime)*M._timeScale,false,false);y.render((E.frame-y._startTime)*y._timeScale,false,false);
if(J.length){t()}if(E.frame>=af){af=E.frame+(parseInt(H.autoSleep,10)||120);for(ao in C){am=C[ao].tweens;
an=am.length;while(--an>-1){if(am[an]._gc){am.splice(an,1)}}if(am.length===0){delete C[ao]
}}ao=M._first;if(!ao||ao._paused){if(H.autoSleep&&!y._first&&E._listeners.tick.length===1){while(ao&&ao._paused){ao=ao._next
}if(!ao){E.sleep()}}}}};E.addEventListener("tick",z._updateRoot);var S=function(ap,an,ao){var aq=ap._gsTweenID,p,am;
if(!C[aq||(ap._gsTweenID=aq="t"+(R++))]){C[aq]={target:ap,tweens:[]}}if(an){p=C[aq].tweens;
p[(am=p.length)]=an;if(ao){while(--am>-1){if(p[am]===an){p.splice(am,1)}}}}return C[aq].tweens
},O=function(ap,aq,ao,an){var am=ap.vars.onOverwrite,p,i;if(am){p=am(ap,aq,ao,an)
}am=H.onOverwrite;if(am){i=am(ap,aq,ao,an)}return(p!==false&&i!==false)},l=function(aw,az,ax,av,ay){var at,aq,ar,an;
if(av===1||av>=4){an=ay.length;for(at=0;at<an;at++){if((ar=ay[at])!==az){if(!ar._gc){if(ar._kill(null,aw,az)){aq=true
}}}else{if(av===5){break}}}return aq}var am=az._startTime+k,p=[],ap=0,ao=(az._duration===0),au;
at=ay.length;while(--at>-1){if((ar=ay[at])===az||ar._gc||ar._paused){}else{if(ar._timeline!==az._timeline){au=au||Z(az,0,ao);
if(Z(ar,au,ao)===0){p[ap++]=ar}}else{if(ar._startTime<=am){if(ar._startTime+ar.totalDuration()/ar._timeScale>am){if(!((ao||!ar._initted)&&am-ar._startTime<=2e-10)){p[ap++]=ar
}}}}}}at=ap;while(--at>-1){ar=p[at];if(av===2){if(ar._kill(ax,aw,az)){aq=true}}if(av!==2||(!ar._firstPT&&ar._initted)){if(av!==2&&!O(ar,az)){continue
}if(ar._enabled(false,false)){aq=true}}}return aq},Z=function(ao,i,am){var p=ao._timeline,ap=p._timeScale,an=ao._startTime;
while(p._timeline){an+=p._startTime;ap*=p._timeScale;if(p._paused){return -100}p=p._timeline
}an/=ap;return(an>i)?an-i:((am&&an===i)||(!ao._initted&&an-i<2*k))?k:((an+=ao.totalDuration()/ao._timeScale/ap)>i+k)?0:an-i-k
};aa._init=function(){var aw=this.vars,au=this._overwrittenProps,am=this._duration,ao=!!aw.immediateRender,aq=aw.ease,at,ar,ax,an,av,ap;
if(aw.startAt){if(this._startAt){this._startAt.render(-1,true);this._startAt.kill()
}av={};for(an in aw.startAt){av[an]=aw.startAt[an]}av.overwrite=false;av.immediateRender=true;
av.lazy=(ao&&aw.lazy!==false);av.startAt=av.delay=null;this._startAt=H.to(this.target,0,av);
if(ao){if(this._time>0){this._startAt=null}else{if(am!==0){return}}}}else{if(aw.runBackwards&&am!==0){if(this._startAt){this._startAt.render(-1,true);
this._startAt.kill();this._startAt=null}else{if(this._time!==0){ao=false}ax={};
for(an in aw){if(!U[an]||an==="autoCSS"){ax[an]=aw[an]}}ax.overwrite=0;ax.data="isFromStart";
ax.lazy=(ao&&aw.lazy!==false);ax.immediateRender=ao;this._startAt=H.to(this.target,0,ax);
if(!ao){this._startAt._init();this._startAt._enabled(false);if(this.vars.immediateRender){this._startAt=null
}}else{if(this._time===0){return}}}}}this._ease=aq=(!aq)?H.defaultEase:(aq instanceof G)?aq:(typeof(aq)==="function")?new G(aq,aw.easeParams):al[aq]||H.defaultEase;
if(aw.easeParams instanceof Array&&aq.config){this._ease=aq.config.apply(aq,aw.easeParams)
}this._easeType=this._ease._type;this._easePower=this._ease._power;this._firstPT=null;
if(this._targets){ap=this._targets.length;for(at=0;at<ap;at++){if(this._initProps(this._targets[at],(this._propLookup[at]={}),this._siblings[at],(au?au[at]:null),at)){ar=true
}}}else{ar=this._initProps(this.target,this._propLookup,this._siblings,au,0)}if(ar){H._onPluginEvent("_onInitAllProps",this)
}if(au){if(!this._firstPT){if(typeof(this.target)!=="function"){this._enabled(false,false)
}}}if(aw.runBackwards){ax=this._firstPT;while(ax){ax.s+=ax.c;ax.c=-ax.c;ax=ax._next
}}this._onUpdate=aw.onUpdate;this._initted=true};aa._initProps=function(at,ar,au,aw,aq){var am,ao,an,ap,ax,av;
if(at==null){return false}if(W[at._gsTweenID]){t()}if(!this.vars.css){if(at.style){if(at!==Y&&at.nodeType){if(D.css){if(this.vars.autoCSS!==false){m(this.vars,at)
}}}}}for(am in this.vars){av=this.vars[am];if(U[am]){if(av){if((av instanceof Array)||(av.push&&ai(av))){if(av.join("").indexOf("{self}")!==-1){this.vars[am]=av=this._swapSelfInParams(av,this)
}}}}else{if(D[am]&&(ap=new D[am]())._onInitTween(at,this.vars[am],this,aq)){this._firstPT=ax={_next:this._firstPT,t:ap,p:"setRatio",s:0,c:1,f:1,n:am,pg:1,pr:ap._priority,m:0};
ao=ap._overwriteProps.length;while(--ao>-1){ar[ap._overwriteProps[ao]]=this._firstPT
}if(ap._priority||ap._onInitAllProps){an=true}if(ap._onDisable||ap._onEnable){this._notifyPluginsOfEnabled=true
}if(ax._next){ax._next._prev=ax}}else{ar[am]=B.call(this,at,am,"get",av,am,0,null,this.vars.stringFilter,aq)
}}}if(aw){if(this._kill(aw,at)){return this._initProps(at,ar,au,aw,aq)}}if(this._overwrite>1){if(this._firstPT){if(au.length>1){if(l(at,this,ar,this._overwrite,au)){this._kill(ar,at);
return this._initProps(at,ar,au,aw,aq)}}}}if(this._firstPT){if((this.vars.lazy!==false&&this._duration)||(this.vars.lazy&&!this._duration)){W[at._gsTweenID]=true
}}return an};aa.render=function(an,av,am){var p=this._time,ao=this._duration,aw=this._rawPrevTime,at,au,ax,ap;
if(an>=ao-1e-7&&an>=0){this._totalTime=this._time=ao;this.ratio=this._ease._calcEnd?this._ease.getRatio(1):1;
if(!this._reversed){at=true;au="onComplete";am=(am||this._timeline.autoRemoveChildren)
}if(ao===0){if(this._initted||!this.vars.lazy||am){if(this._startTime===this._timeline._duration){an=0
}if(aw<0||(an<=0&&an>=-1e-7)||(aw===k&&this.data!=="isPause")){if(aw!==an){am=true;
if(aw>k){au="onReverseComplete"}}}this._rawPrevTime=ap=(!av||an||aw===an)?an:k}}}else{if(an<1e-7){this._totalTime=this._time=0;
this.ratio=this._ease._calcEnd?this._ease.getRatio(0):0;if(p!==0||(ao===0&&aw>0)){au="onReverseComplete";
at=this._reversed}if(an<0){this._active=false;if(ao===0){if(this._initted||!this.vars.lazy||am){if(aw>=0&&!(aw===k&&this.data==="isPause")){am=true
}this._rawPrevTime=ap=(!av||an||aw===an)?an:k}}}if(!this._initted){am=true}}else{this._totalTime=this._time=an;
if(this._easeType){var i=an/ao,ar=this._easeType,aq=this._easePower;if(ar===1||(ar===3&&i>=0.5)){i=1-i
}if(ar===3){i*=2}if(aq===1){i*=i}else{if(aq===2){i*=i*i}else{if(aq===3){i*=i*i*i
}else{if(aq===4){i*=i*i*i*i}}}}if(ar===1){this.ratio=1-i}else{if(ar===2){this.ratio=i
}else{if(an/ao<0.5){this.ratio=i/2}else{this.ratio=1-(i/2)}}}}else{this.ratio=this._ease.getRatio(an/ao)
}}}if(this._time===p&&!am){return}else{if(!this._initted){this._init();if(!this._initted||this._gc){return
}else{if(!am&&this._firstPT&&((this.vars.lazy!==false&&this._duration)||(this.vars.lazy&&!this._duration))){this._time=this._totalTime=p;
this._rawPrevTime=aw;J.push(this);this._lazy=[an,av];return}}if(this._time&&!at){this.ratio=this._ease.getRatio(this._time/ao)
}else{if(at&&this._ease._calcEnd){this.ratio=this._ease.getRatio((this._time===0)?0:1)
}}}}if(this._lazy!==false){this._lazy=false}if(!this._active){if(!this._paused&&this._time!==p&&an>=0){this._active=true
}}if(p===0){if(this._startAt){if(an>=0){this._startAt.render(an,av,am)}else{if(!au){au="_dummyGS"
}}}if(this.vars.onStart){if(this._time!==0||ao===0){if(!av){this._callback("onStart")
}}}}ax=this._firstPT;while(ax){if(ax.f){ax.t[ax.p](ax.c*this.ratio+ax.s)}else{ax.t[ax.p]=ax.c*this.ratio+ax.s
}ax=ax._next}if(this._onUpdate){if(an<0){if(this._startAt&&an!==-0.0001){this._startAt.render(an,av,am)
}}if(!av){if(this._time!==p||at||am){this._callback("onUpdate")}}}if(au){if(!this._gc||am){if(an<0&&this._startAt&&!this._onUpdate&&an!==-0.0001){this._startAt.render(an,av,am)
}if(at){if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!av&&this.vars[au]){this._callback(au)}if(ao===0&&this._rawPrevTime===k&&ap!==k){this._rawPrevTime=0
}}}};aa._kill=function(av,au,ax){if(av==="all"){av=null}if(av==null){if(au==null||au===this.target){this._lazy=false;
return this._enabled(false,false)}}au=(typeof(au)!=="string")?(au||this._targets||this.target):H.selector(au)||au;
var aq=(ax&&this._time&&ax._startTime===this._startTime&&this._timeline===ax._timeline),ao,ay,am,az,at,an,aw,ap,ar;
if((ai(au)||ah(au))&&typeof(au[0])!=="number"){ao=au.length;while(--ao>-1){if(this._kill(av,au[ao],ax)){an=true
}}}else{if(this._targets){ao=this._targets.length;while(--ao>-1){if(au===this._targets[ao]){at=this._propLookup[ao]||{};
this._overwrittenProps=this._overwrittenProps||[];ay=this._overwrittenProps[ao]=av?this._overwrittenProps[ao]||{}:"all";
break}}}else{if(au!==this.target){return false}else{at=this._propLookup;ay=this._overwrittenProps=av?this._overwrittenProps||{}:"all"
}}if(at){aw=av||at;ap=(av!==ay&&ay!=="all"&&av!==at&&(typeof(av)!=="object"||!av._tempKill));
if(ax&&(H.onOverwrite||this.vars.onOverwrite)){for(am in aw){if(at[am]){if(!ar){ar=[]
}ar.push(am)}}if((ar||!av)&&!O(this,ax,au,ar)){return false}}for(am in aw){if((az=at[am])){if(aq){if(az.f){az.t[az.p](az.s)
}else{az.t[az.p]=az.s}an=true}if(az.pg&&az.t._kill(aw)){an=true}if(!az.pg||az.t._overwriteProps.length===0){if(az._prev){az._prev._next=az._next
}else{if(az===this._firstPT){this._firstPT=az._next}}if(az._next){az._next._prev=az._prev
}az._next=az._prev=null}delete at[am]}if(ap){ay[am]=1}}if(!this._firstPT&&this._initted){this._enabled(false,false)
}}}return an};aa.invalidate=function(){if(this._notifyPluginsOfEnabled){H._onPluginEvent("_onDisable",this)
}this._firstPT=this._overwrittenProps=this._startAt=this._onUpdate=null;this._notifyPluginsOfEnabled=this._active=this._lazy=false;
this._propLookup=(this._targets)?{}:[];z.prototype.invalidate.call(this);if(this.vars.immediateRender){this._time=-k;
this.render(Math.min(0,-this._delay))}return this};aa._enabled=function(an,p){if(!N){E.wake()
}if(an&&this._gc){var am=this._targets,ao;if(am){ao=am.length;while(--ao>-1){this._siblings[ao]=S(am[ao],this,true)
}}else{this._siblings=S(this.target,this,true)}}z.prototype._enabled.call(this,an,p);
if(this._notifyPluginsOfEnabled){if(this._firstPT){return H._onPluginEvent((an?"_onEnable":"_onDisable"),this)
}}return false};H.to=function(am,p,i){return new H(am,p,i)};H.from=function(am,p,i){i.runBackwards=true;
i.immediateRender=(i.immediateRender!=false);return new H(am,p,i)};H.fromTo=function(am,p,an,i){i.startAt=an;
i.immediateRender=(i.immediateRender!=false&&an.immediateRender!=false);return new H(am,p,i)
};H.delayedCall=function(i,ao,an,am,p){return new H(ao,0,{delay:i,onComplete:ao,onCompleteParams:an,callbackScope:am,onReverseComplete:ao,onReverseCompleteParams:an,immediateRender:false,lazy:false,useFrames:p,overwrite:0})
};H.set=function(p,i){return new H(p,0,i)};H.getTweensOf=function(aq,an){if(aq==null){return[]
}aq=(typeof(aq)!=="string")?aq:H.selector(aq)||aq;var ap,p,am,ao;if((ai(aq)||ah(aq))&&typeof(aq[0])!=="number"){ap=aq.length;
p=[];while(--ap>-1){p=p.concat(H.getTweensOf(aq[ap],an))}ap=p.length;while(--ap>-1){ao=p[ap];
am=ap;while(--am>-1){if(ao===p[am]){p.splice(ap,1)}}}}else{p=S(aq).concat();ap=p.length;
while(--ap>-1){if(p[ap]._gc||(an&&!p[ap].isActive())){p.splice(ap,1)}}}return p
};H.killTweensOf=H.killDelayedCallsTo=function(ap,am,ao){if(typeof(am)==="object"){ao=am;
am=false}var p=H.getTweensOf(ap,am),an=p.length;while(--an>-1){p[an]._kill(ao,ap)
}};var f=x("plugins.TweenPlugin",function(p,i){this._overwriteProps=(p||"").split(",");
this._propName=this._overwriteProps[0];this._priority=i||0;this._super=f.prototype
},true);aa=f.prototype;f.version="1.19.0";f.API=2;aa._firstPT=null;aa._addTween=B;
aa.setRatio=j;aa._kill=function(ao){var p=this._overwriteProps,an=this._firstPT,am;
if(ao[this._propName]!=null){this._overwriteProps=[]}else{am=p.length;while(--am>-1){if(ao[p[am]]!=null){p.splice(am,1)
}}}while(an){if(ao[an.n]!=null){if(an._next){an._next._prev=an._prev}if(an._prev){an._prev._next=an._next;
an._prev=null}else{if(this._firstPT===an){this._firstPT=an._next}}}an=an._next}return false
};aa._mod=aa._roundProps=function(p){var i=this._firstPT,am;while(i){am=p[this._propName]||(i.n!=null&&p[i.n.split(this._propName+"_").join("")]);
if(am&&typeof(am)==="function"){if(i.f===2){i.t._applyPT.m=am}else{i.m=am}}i=i._next
}};H._onPluginEvent=function(am,i){var ap=i._firstPT,ar,ao,aq,an,p;if(am==="_onInitAllProps"){while(ap){p=ap._next;
ao=aq;while(ao&&ao.pr>ap.pr){ao=ao._next}if((ap._prev=ao?ao._prev:an)){ap._prev._next=ap
}else{aq=ap}if((ap._next=ao)){ao._prev=ap}else{an=ap}ap=p}ap=i._firstPT=aq}while(ap){if(ap.pg){if(typeof(ap.t[am])==="function"){if(ap.t[am]()){ar=true
}}}ap=ap._next}return ar};f.activate=function(p){var am=p.length;while(--am>-1){if(p[am].API===f.API){D[(new p[am]())._propName]=p[am]
}}return true};g.plugin=function(i){if(!i||!i.propName||!i.init||!i.API){throw"illegal plugin definition."
}var ao=i.propName,am=i.priority||0,ar=i.overwriteProps,aq={init:"_onInitTween",set:"setRatio",kill:"_kill",round:"_mod",mod:"_mod",initAll:"_onInitAllProps"},an=x("plugins."+ao.charAt(0).toUpperCase()+ao.substr(1)+"Plugin",function(){f.call(this,ao,am);
this._overwriteProps=ar||[]},(i.global===true)),ap=an.prototype=new f(ao),at;ap.constructor=an;
an.API=i.API;for(at in aq){if(typeof(i[at])==="function"){ap[aq[at]]=i[at]}}an.version=i.version;
f.activate([an]);return an};ak=Y._gsQueue;if(ak){for(ae=0;ae<ak.length;ae++){ak[ae]()
}for(aa in n){if(!n[aa].func){Y.console.log("GSAP encountered missing dependency: "+aa)
}}}N=false})((typeof(c)!=="undefined"&&c.exports&&typeof(d)!=="undefined")?d:this||window,"TweenLite")
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{}],208:[function(b,c,a){(function(f){
/*!
 * VERSION: 1.19.1
 * DATE: 2017-01-17
 * UPDATES AND DOCS AT: http://greensock.com
 * 
 * Includes all of the following: TweenLite, TweenMax, TimelineLite, TimelineMax, EasePack, CSSPlugin, RoundPropsPlugin, BezierPlugin, AttrPlugin, DirectionalRotationPlugin
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var d=(typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window;
(d._gsQueue||(d._gsQueue=[])).push(function(){d._gsDefine("TweenMax",["core.Animation","core.SimpleTimeline","TweenLite"],function(m,i,n){var v=function(x){var p=[],w=x.length,y;
for(y=0;y!==w;p.push(x[y++])){}return p},j=function(A,w,x){var z=A.cycle,y,B;for(y in z){B=z[y];
A[y]=(typeof(B)==="function")?B(x,w[x]):B[x%B.length]}delete A.cycle},s=function(x,w,p){n.call(this,x,w,p);
this._cycle=0;this._yoyo=(this.vars.yoyo===true);this._repeat=this.vars.repeat||0;
this._repeatDelay=this.vars.repeatDelay||0;this._dirty=true;this.render=s.prototype.render
},l=1e-10,t=n._internals,g=t.isSelector,r=t.isArray,h=s.prototype=n.to({},0.1,{}),q=[];
s.version="1.19.1";h.constructor=s;h.kill()._gc=false;s.killTweensOf=s.killDelayedCallsTo=n.killTweensOf;
s.getTweensOf=n.getTweensOf;s.lagSmoothing=n.lagSmoothing;s.ticker=n.ticker;s.render=n.render;
h.invalidate=function(){this._yoyo=(this.vars.yoyo===true);this._repeat=this.vars.repeat||0;
this._repeatDelay=this.vars.repeatDelay||0;this._uncache(true);return n.prototype.invalidate.call(this)
};h.updateTo=function(C,A){var y=this.ratio,z=this.vars.immediateRender||C.immediateRender,x;
if(A&&this._startTime<this._timeline._time){this._startTime=this._timeline._time;
this._uncache(false);if(this._gc){this._enabled(true,false)}else{this._timeline.insert(this,this._startTime-this._delay)
}}for(x in C){this.vars[x]=C[x]}if(this._initted||z){if(A){this._initted=false;
if(z){this.render(0,true,true)}}else{if(this._gc){this._enabled(true,false)}if(this._notifyPluginsOfEnabled&&this._firstPT){n._onPluginEvent("_onDisable",this)
}if(this._time/this._duration>0.998){var w=this._totalTime;this.render(0,true,false);
this._initted=false;this.render(w,true,false)}else{this._initted=false;this._init();
if(this._time>0||z){var B=1/(1-y),E=this._firstPT,D;while(E){D=E.s+E.c;E.c*=B;E.s=D-E.c;
E=E._next}}}}}return this};h.render=function(A,K,x){if(!this._initted){if(this._duration===0&&this.vars.repeat){this.invalidate()
}}var D=(!this._dirty)?this._totalDuration:this.totalDuration(),w=this._time,G=this._totalTime,y=this._cycle,B=this._duration,J=this._rawPrevTime,H,I,L,z,p,F,E,C;
if(A>=D-1e-7&&A>=0){this._totalTime=D;this._cycle=this._repeat;if(this._yoyo&&(this._cycle&1)!==0){this._time=0;
this.ratio=this._ease._calcEnd?this._ease.getRatio(0):0}else{this._time=B;this.ratio=this._ease._calcEnd?this._ease.getRatio(1):1
}if(!this._reversed){H=true;I="onComplete";x=(x||this._timeline.autoRemoveChildren)
}if(B===0){if(this._initted||!this.vars.lazy||x){if(this._startTime===this._timeline._duration){A=0
}if(J<0||(A<=0&&A>=-1e-7)||(J===l&&this.data!=="isPause")){if(J!==A){x=true;if(J>l){I="onReverseComplete"
}}}this._rawPrevTime=C=(!K||A||J===A)?A:l}}}else{if(A<1e-7){this._totalTime=this._time=this._cycle=0;
this.ratio=this._ease._calcEnd?this._ease.getRatio(0):0;if(G!==0||(B===0&&J>0)){I="onReverseComplete";
H=this._reversed}if(A<0){this._active=false;if(B===0){if(this._initted||!this.vars.lazy||x){if(J>=0){x=true
}this._rawPrevTime=C=(!K||A||J===A)?A:l}}}if(!this._initted){x=true}}else{this._totalTime=this._time=A;
if(this._repeat!==0){z=B+this._repeatDelay;this._cycle=(this._totalTime/z)>>0;if(this._cycle!==0){if(this._cycle===this._totalTime/z&&G<=A){this._cycle--
}}this._time=this._totalTime-(this._cycle*z);if(this._yoyo){if((this._cycle&1)!==0){this._time=B-this._time
}}if(this._time>B){this._time=B}else{if(this._time<0){this._time=0}}}if(this._easeType){p=this._time/B;
F=this._easeType;E=this._easePower;if(F===1||(F===3&&p>=0.5)){p=1-p}if(F===3){p*=2
}if(E===1){p*=p}else{if(E===2){p*=p*p}else{if(E===3){p*=p*p*p}else{if(E===4){p*=p*p*p*p
}}}}if(F===1){this.ratio=1-p}else{if(F===2){this.ratio=p}else{if(this._time/B<0.5){this.ratio=p/2
}else{this.ratio=1-(p/2)}}}}else{this.ratio=this._ease.getRatio(this._time/B)}}}if(w===this._time&&!x&&y===this._cycle){if(G!==this._totalTime){if(this._onUpdate){if(!K){this._callback("onUpdate")
}}}return}else{if(!this._initted){this._init();if(!this._initted||this._gc){return
}else{if(!x&&this._firstPT&&((this.vars.lazy!==false&&this._duration)||(this.vars.lazy&&!this._duration))){this._time=w;
this._totalTime=G;this._rawPrevTime=J;this._cycle=y;t.lazyTweens.push(this);this._lazy=[A,K];
return}}if(this._time&&!H){this.ratio=this._ease.getRatio(this._time/B)}else{if(H&&this._ease._calcEnd){this.ratio=this._ease.getRatio((this._time===0)?0:1)
}}}}if(this._lazy!==false){this._lazy=false}if(!this._active){if(!this._paused&&this._time!==w&&A>=0){this._active=true
}}if(G===0){if(this._initted===2&&A>0){this._init()}if(this._startAt){if(A>=0){this._startAt.render(A,K,x)
}else{if(!I){I="_dummyGS"}}}if(this.vars.onStart){if(this._totalTime!==0||B===0){if(!K){this._callback("onStart")
}}}}L=this._firstPT;while(L){if(L.f){L.t[L.p](L.c*this.ratio+L.s)}else{L.t[L.p]=L.c*this.ratio+L.s
}L=L._next}if(this._onUpdate){if(A<0){if(this._startAt&&this._startTime){this._startAt.render(A,K,x)
}}if(!K){if(this._totalTime!==G||I){this._callback("onUpdate")}}}if(this._cycle!==y){if(!K){if(!this._gc){if(this.vars.onRepeat){this._callback("onRepeat")
}}}}if(I){if(!this._gc||x){if(A<0&&this._startAt&&!this._onUpdate&&this._startTime){this._startAt.render(A,K,x)
}if(H){if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!K&&this.vars[I]){this._callback(I)}if(B===0&&this._rawPrevTime===l&&C!==l){this._rawPrevTime=0
}}}};s.to=function(x,w,p){return new s(x,w,p)};s.from=function(x,w,p){p.runBackwards=true;
p.immediateRender=(p.immediateRender!=false);return new s(x,w,p)};s.fromTo=function(x,w,y,p){p.startAt=y;
p.immediateRender=(p.immediateRender!=false&&y.immediateRender!=false);return new s(x,w,p)
};s.staggerTo=s.allTo=function(G,C,I,x,J,z,A){x=x||0;var F=0,K=[],L=function(){if(I.onComplete){I.onComplete.apply(I.onCompleteScope||this,arguments)
}J.apply(A||I.callbackScope||this,z||q)},D=I.cycle,H=(I.startAt&&I.startAt.cycle),B,w,E,y;
if(!r(G)){if(typeof(G)==="string"){G=n.selector(G)||G}if(g(G)){G=v(G)}}G=G||[];
if(x<0){G=v(G);G.reverse();x*=-1}B=G.length-1;for(E=0;E<=B;E++){w={};for(y in I){w[y]=I[y]
}if(D){j(w,G,E);if(w.duration!=null){C=w.duration;delete w.duration}}if(H){H=w.startAt={};
for(y in I.startAt){H[y]=I.startAt[y]}j(w.startAt,G,E)}w.delay=F+(w.delay||0);if(E===B&&J){w.onComplete=L
}K[E]=new s(G[E],C,w);F+=x}return K};s.staggerFrom=s.allFrom=function(w,B,A,z,y,p,x){A.runBackwards=true;
A.immediateRender=(A.immediateRender!=false);return s.staggerTo(w,B,A,z,y,p,x)};
s.staggerFromTo=s.allFromTo=function(w,B,C,A,z,y,p,x){A.startAt=C;A.immediateRender=(A.immediateRender!=false&&C.immediateRender!=false);
return s.staggerTo(w,B,A,z,y,p,x)};s.delayedCall=function(p,z,y,x,w){return new s(z,0,{delay:p,onComplete:z,onCompleteParams:y,callbackScope:x,onReverseComplete:z,onReverseCompleteParams:y,immediateRender:false,useFrames:w,overwrite:0})
};s.set=function(w,p){return new s(w,0,p)};s.isTweening=function(p){return(n.getTweensOf(p,true).length>0)
};var u=function(y,z){var p=[],x=0,w=y._first;while(w){if(w instanceof n){p[x++]=w
}else{if(z){p[x++]=w}p=p.concat(u(w,z));x=p.length}w=w._next}return p},k=s.getAllTweens=function(p){return u(m._rootTimeline,p).concat(u(m._rootFramesTimeline,p))
};s.killAll=function(x,A,E,B){if(A==null){A=true}if(E==null){E=true}var C=k((B!=false)),y=C.length,w=(A&&E&&B),p,D,z;
for(z=0;z<y;z++){D=C[z];if(w||(D instanceof i)||((p=(D.target===D.vars.onComplete))&&E)||(A&&!p)){if(x){D.totalTime(D._reversed?0:D.totalDuration())
}else{D._enabled(false,false)}}}};s.killChildTweensOf=function(C,y){if(C==null){return
}var z=t.tweenLookup,x,B,D,A,w;if(typeof(C)==="string"){C=n.selector(C)||C}if(g(C)){C=v(C)
}if(r(C)){A=C.length;while(--A>-1){s.killChildTweensOf(C[A],y)}return}x=[];for(D in z){B=z[D].target.parentNode;
while(B){if(B===C){x=x.concat(z[D].tweens)}B=B.parentNode}}w=x.length;for(A=0;A<w;
A++){if(y){x[A].totalTime(x[A].totalDuration())}x[A]._enabled(false,false)}};var o=function(D,y,C,z){y=(y!==false);
C=(C!==false);z=(z!==false);var A=k(z),w=(y&&C&&z),x=A.length,p,B;while(--x>-1){B=A[x];
if(w||(B instanceof i)||((p=(B.target===B.vars.onComplete))&&C)||(y&&!p)){B.paused(D)
}}};s.pauseAll=function(w,x,p){o(true,w,x,p)};s.resumeAll=function(w,x,p){o(false,w,x,p)
};s.globalTimeScale=function(x){var p=m._rootTimeline,w=n.ticker.time;if(!arguments.length){return p._timeScale
}x=x||l;p._startTime=w-((w-p._startTime)*p._timeScale/x);p=m._rootFramesTimeline;
w=n.ticker.frame;p._startTime=w-((w-p._startTime)*p._timeScale/x);p._timeScale=m._rootTimeline._timeScale=x;
return x};h.progress=function(w,p){return(!arguments.length)?this._time/this.duration():this.totalTime(this.duration()*((this._yoyo&&(this._cycle&1)!==0)?1-w:w)+(this._cycle*(this._duration+this._repeatDelay)),p)
};h.totalProgress=function(w,p){return(!arguments.length)?this._totalTime/this.totalDuration():this.totalTime(this.totalDuration()*w,p)
};h.time=function(w,p){if(!arguments.length){return this._time}if(this._dirty){this.totalDuration()
}if(w>this._duration){w=this._duration}if(this._yoyo&&(this._cycle&1)!==0){w=(this._duration-w)+(this._cycle*(this._duration+this._repeatDelay))
}else{if(this._repeat!==0){w+=this._cycle*(this._duration+this._repeatDelay)}}return this.totalTime(w,p)
};h.duration=function(p){if(!arguments.length){return this._duration}return m.prototype.duration.call(this,p)
};h.totalDuration=function(p){if(!arguments.length){if(this._dirty){this._totalDuration=(this._repeat===-1)?999999999999:this._duration*(this._repeat+1)+(this._repeatDelay*this._repeat);
this._dirty=false}return this._totalDuration}return(this._repeat===-1)?this:this.duration((p-(this._repeat*this._repeatDelay))/(this._repeat+1))
};h.repeat=function(p){if(!arguments.length){return this._repeat}this._repeat=p;
return this._uncache(true)};h.repeatDelay=function(p){if(!arguments.length){return this._repeatDelay
}this._repeatDelay=p;return this._uncache(true)};h.yoyo=function(p){if(!arguments.length){return this._yoyo
}this._yoyo=p;return this};return s},true);d._gsDefine("TimelineLite",["core.Animation","core.SimpleTimeline","TweenLite"],function(o,l,r){var i=function(A){l.call(this,A);
this._labels={};this.autoRemoveChildren=(this.vars.autoRemoveChildren===true);this.smoothChildTiming=(this.vars.smoothChildTiming===true);
this._sortChildren=true;this._onUpdate=this.vars.onUpdate;var y=this.vars,B,z;for(z in y){B=y[z];
if(t(B)){if(B.join("").indexOf("{self}")!==-1){y[z]=this._swapSelfInParams(B)}}}if(t(y.tweens)){this.add(y.tweens,0,y.align,y.stagger)
}},n=1e-10,v=r._internals,q=i._internals={},h=v.isSelector,t=v.isArray,g=v.lazyTweens,s=v.lazyRender,m=d._gsDefine.globals,u=function(z){var A={},y;
for(y in z){A[y]=z[y]}return A},k=function(C,y,z){var B=C.cycle,A,D;for(A in B){D=B[A];
C[A]=(typeof(D)==="function")?D(z,y[z]):D[z%D.length]}delete C.cycle},x=q.pauseCallback=function(){},w=function(z){var p=[],y=z.length,A;
for(A=0;A!==y;p.push(z[A++])){}return p},j=i.prototype=new l();i.version="1.19.1";
j.constructor=i;j.kill()._gc=j._forcingPlayhead=j._hasPause=false;j.to=function(B,A,z,p){var y=(z.repeat&&m.TweenMax)||r;
return A?this.add(new y(B,A,z),p):this.set(B,z,p)};j.from=function(A,z,y,p){return this.add(((y.repeat&&m.TweenMax)||r).from(A,z,y),p)
};j.fromTo=function(B,A,C,z,p){var y=(z.repeat&&m.TweenMax)||r;return A?this.add(y.fromTo(B,A,C,z),p):this.set(B,z,p)
};j.staggerTo=function(F,B,G,y,E,H,z,A){var I=new i({onComplete:H,onCompleteParams:z,callbackScope:A,smoothChildTiming:this.smoothChildTiming}),C=G.cycle,p,D;
if(typeof(F)==="string"){F=r.selector(F)||F}F=F||[];if(h(F)){F=w(F)}y=y||0;if(y<0){F=w(F);
F.reverse();y*=-1}for(D=0;D<F.length;D++){p=u(G);if(p.startAt){p.startAt=u(p.startAt);
if(p.startAt.cycle){k(p.startAt,F,D)}}if(C){k(p,F,D);if(p.duration!=null){B=p.duration;
delete p.duration}}I.to(F[D],B,p,D*y)}return this.add(I,E)};j.staggerFrom=function(z,E,D,C,y,B,p,A){D.immediateRender=(D.immediateRender!=false);
D.runBackwards=true;return this.staggerTo(z,E,D,C,y,B,p,A)};j.staggerFromTo=function(D,B,y,F,p,C,E,z,A){F.startAt=y;
F.immediateRender=(F.immediateRender!=false&&y.immediateRender!=false);return this.staggerTo(D,B,F,p,C,E,z,A)
};j.call=function(A,z,y,p){return this.add(r.delayedCall(0,A,z,y),p)};j.set=function(z,y,p){p=this._parseTimeOrLabel(p,0,true);
if(y.immediateRender==null){y.immediateRender=(p===this._time&&!this._paused)}return this.add(new r(z,0,y),p)
};i.exportRoot=function(C,B){C=C||{};if(C.smoothChildTiming==null){C.smoothChildTiming=true
}var y=new i(C),p=y._timeline,z,A;if(B==null){B=true}p._remove(y,true);y._startTime=0;
y._rawPrevTime=y._time=y._totalTime=p._time;z=p._first;while(z){A=z._next;if(!B||!(z instanceof r&&z.target===z.vars.onComplete)){y.add(z,z._startTime-z._delay)
}z=A}p.add(y,0);return y};j.add=function(F,D,E,p){var z,A,C,y,G,B;if(typeof(D)!=="number"){D=this._parseTimeOrLabel(D,0,true,F)
}if(!(F instanceof o)){if((F instanceof Array)||(F&&F.push&&t(F))){E=E||"normal";
p=p||0;z=D;A=F.length;for(C=0;C<A;C++){if(t(y=F[C])){y=new i({tweens:y})}this.add(y,z);
if(typeof(y)!=="string"&&typeof(y)!=="function"){if(E==="sequence"){z=y._startTime+(y.totalDuration()/y._timeScale)
}else{if(E==="start"){y._startTime-=y.delay()}}}z+=p}return this._uncache(true)
}else{if(typeof(F)==="string"){return this.addLabel(F,D)}else{if(typeof(F)==="function"){F=r.delayedCall(0,F)
}else{throw ("Cannot add "+F+" into the timeline; it is not a tween, timeline, function, or string.")
}}}}l.prototype.add.call(this,F,D);if(this._gc||this._time===this._duration){if(!this._paused){if(this._duration<this.duration()){G=this;
B=(G.rawTime()>F._startTime);while(G._timeline){if(B&&G._timeline.smoothChildTiming){G.totalTime(G._totalTime,true)
}else{if(G._gc){G._enabled(true,false)}}G=G._timeline}}}}return this};j.remove=function(z){if(z instanceof o){this._remove(z,false);
var p=z._timeline=z.vars.useFrames?o._rootFramesTimeline:o._rootTimeline;z._startTime=(z._paused?z._pauseTime:p._time)-((!z._reversed?z._totalTime:z.totalDuration()-z._totalTime)/z._timeScale);
return this}else{if(z instanceof Array||(z&&z.push&&t(z))){var y=z.length;while(--y>-1){this.remove(z[y])
}return this}else{if(typeof(z)==="string"){return this.removeLabel(z)}}}return this.kill(null,z)
};j._remove=function(p,z){l.prototype._remove.call(this,p,z);var y=this._last;if(!y){this._time=this._totalTime=this._duration=this._totalDuration=0
}else{if(this._time>this.duration()){this._time=this._duration;this._totalTime=this._totalDuration
}}return this};j.append=function(y,p){return this.add(y,this._parseTimeOrLabel(null,p,true,y))
};j.insert=j.insertMultiple=function(z,p,A,y){return this.add(z,p||0,A,y)};j.appendMultiple=function(z,p,A,y){return this.add(z,this._parseTimeOrLabel(null,p,true,z),A,y)
};j.addLabel=function(y,p){this._labels[y]=this._parseTimeOrLabel(p);return this
};j.addPause=function(p,B,A,z){var y=r.delayedCall(0,x,A,z||this);y.vars.onComplete=y.vars.onReverseComplete=B;
y.data="isPause";this._hasPause=true;return this.add(y,p)};j.removeLabel=function(p){delete this._labels[p];
return this};j.getLabelTime=function(p){return(this._labels[p]!=null)?this._labels[p]:-1
};j._parseTimeOrLabel=function(A,p,z,B){var y;if(B instanceof o&&B.timeline===this){this.remove(B)
}else{if(B&&((B instanceof Array)||(B.push&&t(B)))){y=B.length;while(--y>-1){if(B[y] instanceof o&&B[y].timeline===this){this.remove(B[y])
}}}}if(typeof(p)==="string"){return this._parseTimeOrLabel(p,(z&&typeof(A)==="number"&&this._labels[p]==null)?A-this.duration():0,z)
}p=p||0;if(typeof(A)==="string"&&(isNaN(A)||this._labels[A]!=null)){y=A.indexOf("=");
if(y===-1){if(this._labels[A]==null){return z?(this._labels[A]=this.duration()+p):p
}return this._labels[A]+p}p=parseInt(A.charAt(y-1)+"1",10)*Number(A.substr(y+1));
A=(y>1)?this._parseTimeOrLabel(A.substr(0,y-1),0,z):this.duration()}else{if(A==null){A=this.duration()
}}return Number(A)+p};j.seek=function(p,y){return this.totalTime((typeof(p)==="number")?p:this._parseTimeOrLabel(p),(y!==false))
};j.stop=function(){return this.paused(true)};j.gotoAndPlay=function(p,y){return this.play(p,y)
};j.gotoAndStop=function(p,y){return this.pause(p,y)};j.render=function(A,L,z){if(this._gc){this._enabled(true,false)
}var F=(!this._dirty)?this._totalDuration:this.totalDuration(),p=this._time,H=this._startTime,D=this._timeScale,B=this._paused,K,G,E,J,y,I,C;
if(A>=F-1e-7&&A>=0){this._totalTime=this._time=F;if(!this._reversed){if(!this._hasPausedChild()){G=true;
J="onComplete";y=!!this._timeline.autoRemoveChildren;if(this._duration===0){if((A<=0&&A>=-1e-7)||this._rawPrevTime<0||this._rawPrevTime===n){if(this._rawPrevTime!==A&&this._first){y=true;
if(this._rawPrevTime>n){J="onReverseComplete"}}}}}}this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;
A=F+0.0001}else{if(A<1e-7){this._totalTime=this._time=0;if(p!==0||(this._duration===0&&this._rawPrevTime!==n&&(this._rawPrevTime>0||(A<0&&this._rawPrevTime>=0)))){J="onReverseComplete";
G=this._reversed}if(A<0){this._active=false;if(this._timeline.autoRemoveChildren&&this._reversed){y=G=true;
J="onReverseComplete"}else{if(this._rawPrevTime>=0&&this._first){y=true}}this._rawPrevTime=A
}else{this._rawPrevTime=(this._duration||!L||A||this._rawPrevTime===A)?A:n;if(A===0&&G){K=this._first;
while(K&&K._startTime===0){if(!K._duration){G=false}K=K._next}}A=0;if(!this._initted){y=true
}}}else{if(this._hasPause&&!this._forcingPlayhead&&!L){if(A>=p){K=this._first;while(K&&K._startTime<=A&&!I){if(!K._duration){if(K.data==="isPause"&&!K.ratio&&!(K._startTime===0&&this._rawPrevTime===0)){I=K
}}K=K._next}}else{K=this._last;while(K&&K._startTime>=A&&!I){if(!K._duration){if(K.data==="isPause"&&K._rawPrevTime>0){I=K
}}K=K._prev}}if(I){this._time=A=I._startTime;this._totalTime=A+(this._cycle*(this._totalDuration+this._repeatDelay))
}}this._totalTime=this._time=this._rawPrevTime=A}}if((this._time===p||!this._first)&&!z&&!y&&!I){return
}else{if(!this._initted){this._initted=true}}if(!this._active){if(!this._paused&&this._time!==p&&A>0){this._active=true
}}if(p===0){if(this.vars.onStart){if(this._time!==0||!this._duration){if(!L){this._callback("onStart")
}}}}C=this._time;if(C>=p){K=this._first;while(K){E=K._next;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=C&&!K._paused&&!K._gc)){if(I===K){this.pause()
}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}else{K=this._last;while(K){E=K._prev;if(C!==this._time||(this._paused&&!B)){break
}else{if(K._active||(K._startTime<=p&&!K._paused&&!K._gc)){if(I===K){I=K._prev;
while(I&&I.endTime()>this._time){I.render((I._reversed?I.totalDuration()-((A-I._startTime)*I._timeScale):(A-I._startTime)*I._timeScale),L,z);
I=I._prev}I=null;this.pause()}if(!K._reversed){K.render((A-K._startTime)*K._timeScale,L,z)
}else{K.render(((!K._dirty)?K._totalDuration:K.totalDuration())-((A-K._startTime)*K._timeScale),L,z)
}}}K=E}}if(this._onUpdate){if(!L){if(g.length){s()}this._callback("onUpdate")}}if(J){if(!this._gc){if(H===this._startTime||D!==this._timeScale){if(this._time===0||F>=this.totalDuration()){if(G){if(g.length){s()
}if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!L&&this.vars[J]){this._callback(J)}}}}}};j._hasPausedChild=function(){var p=this._first;
while(p){if(p._paused||((p instanceof i)&&p._hasPausedChild())){return true}p=p._next
}return false};j.getChildren=function(D,C,A,B){B=B||-9999999999;var p=[],z=this._first,y=0;
while(z){if(z._startTime<B){}else{if(z instanceof r){if(C!==false){p[y++]=z}}else{if(A!==false){p[y++]=z
}if(D!==false){p=p.concat(z.getChildren(true,C,A));y=p.length}}}z=z._next}return p
};j.getTweensOf=function(C,D){var A=this._gc,p=[],z=0,B,y;if(A){this._enabled(true,true)
}B=r.getTweensOf(C);y=B.length;while(--y>-1){if(B[y].timeline===this||(D&&this._contains(B[y]))){p[z++]=B[y]
}}if(A){this._enabled(false,true)}return p};j.recent=function(){return this._recent
};j._contains=function(y){var p=y.timeline;while(p){if(p===this){return true}p=p.timeline
}return false};j.shiftChildren=function(z,C,A){A=A||0;var y=this._first,D=this._labels,B;
while(y){if(y._startTime>=A){y._startTime+=z}y=y._next}if(C){for(B in D){if(D[B]>=A){D[B]+=z
}}}return this._uncache(true)};j._kill=function(A,z){if(!A&&!z){return this._enabled(false,false)
}var y=(!z)?this.getChildren(true,true,false):this.getTweensOf(z),p=y.length,B=false;
while(--p>-1){if(y[p]._kill(A,z)){B=true}}return B};j.clear=function(z){var y=this.getChildren(false,true,true),p=y.length;
this._time=this._totalTime=0;while(--p>-1){y[p]._enabled(false,false)}if(z!==false){this._labels={}
}return this._uncache(true)};j.invalidate=function(){var p=this._first;while(p){p.invalidate();
p=p._next}return o.prototype.invalidate.call(this)};j._enabled=function(y,p){if(y===this._gc){var z=this._first;
while(z){z._enabled(y,true);z=z._next}}return l.prototype._enabled.call(this,y,p)
};j.totalTime=function(z,y,p){this._forcingPlayhead=true;var A=o.prototype.totalTime.apply(this,arguments);
this._forcingPlayhead=false;return A};j.duration=function(p){if(!arguments.length){if(this._dirty){this.totalDuration()
}return this._duration}if(this.duration()!==0&&p!==0){this.timeScale(this._duration/p)
}return this};j.totalDuration=function(C){if(!arguments.length){if(this._dirty){var y=0,A=this._last,p=999999999999,B,z;
while(A){B=A._prev;if(A._dirty){A.totalDuration()}if(A._startTime>p&&this._sortChildren&&!A._paused){this.add(A,A._startTime-A._delay)
}else{p=A._startTime}if(A._startTime<0&&!A._paused){y-=A._startTime;if(this._timeline.smoothChildTiming){this._startTime+=A._startTime/this._timeScale
}this.shiftChildren(-A._startTime,false,-9999999999);p=0}z=A._startTime+(A._totalDuration/A._timeScale);
if(z>y){y=z}A=B}this._duration=this._totalDuration=y;this._dirty=false}return this._totalDuration
}return(C&&this.totalDuration())?this.timeScale(this._totalDuration/C):this};j.paused=function(y){if(!y){var p=this._first,z=this._time;
while(p){if(p._startTime===z&&p.data==="isPause"){p._rawPrevTime=0}p=p._next}}return o.prototype.paused.apply(this,arguments)
};j.usesFrames=function(){var p=this._timeline;while(p._timeline){p=p._timeline
}return(p===o._rootFramesTimeline)};j.rawTime=function(p){return(p&&(this._paused||(this._repeat&&this.time()>0&&this.totalProgress()<1)))?this._totalTime%(this._duration+this._repeatDelay):this._paused?this._totalTime:(this._timeline.rawTime(p)-this._startTime)*this._timeScale
};return i},true);d._gsDefine("TimelineMax",["TimelineLite","TweenLite","easing.Ease"],function(h,m,o){var r=function(p){h.call(this,p);
this._repeat=this.vars.repeat||0;this._repeatDelay=this.vars.repeatDelay||0;this._cycle=0;
this._yoyo=(this.vars.yoyo===true);this._dirty=true},l=1e-10,q=m._internals,g=q.lazyTweens,n=q.lazyRender,k=d._gsDefine.globals,j=new o(null,null,1,0),i=r.prototype=new h();
i.constructor=r;i.kill()._gc=false;r.version="1.19.1";i.invalidate=function(){this._yoyo=(this.vars.yoyo===true);
this._repeat=this.vars.repeat||0;this._repeatDelay=this.vars.repeatDelay||0;this._uncache(true);
return h.prototype.invalidate.call(this)};i.addCallback=function(u,p,t,s){return this.add(m.delayedCall(0,u,t,s),p)
};i.removeCallback=function(v,p){if(v){if(p==null){this._kill(null,v)}else{var s=this.getTweensOf(v,false),t=s.length,u=this._parseTimeOrLabel(p);
while(--t>-1){if(s[t]._startTime===u){s[t]._enabled(false,false)}}}}return this
};i.removePause=function(p){return this.removeCallback(h._internals.pauseCallback,p)
};i.tweenTo=function(s,y){y=y||{};var z={ease:j,useFrames:this.usesFrames(),immediateRender:false},u=(y.repeat&&k.TweenMax)||m,x,w,v;
for(w in y){z[w]=y[w]}z.time=this._parseTimeOrLabel(s);x=(Math.abs(Number(z.time)-this._time)/this._timeScale)||0.001;
v=new u(this,x,z);z.onStart=function(){v.target.paused(true);if(v.vars.time!==v.target.time()&&x===v.duration()){v.duration(Math.abs(v.vars.time-v.target.time())/v.target._timeScale)
}if(y.onStart){y.onStart.apply(y.onStartScope||y.callbackScope||v,y.onStartParams||[])
}};return v};i.tweenFromTo=function(p,v,u){u=u||{};p=this._parseTimeOrLabel(p);
u.startAt={onComplete:this.seek,onCompleteParams:[p],callbackScope:this};u.immediateRender=(u.immediateRender!==false);
var s=this.tweenTo(v,u);return s.duration((Math.abs(s.vars.time-p)/this._timeScale)||0.001)
};i.render=function(C,G,s){if(this._gc){this._enabled(true,false)}var Q=(!this._dirty)?this._totalDuration:this.totalDuration(),N=this._duration,z=this._time,J=this._totalTime,y=this._startTime,p=this._timeScale,K=this._rawPrevTime,O=this._paused,I=this._cycle,v,B,L,x,u,M,A,E;
if(C>=Q-1e-7&&C>=0){if(!this._locked){this._totalTime=Q;this._cycle=this._repeat
}if(!this._reversed){if(!this._hasPausedChild()){B=true;x="onComplete";u=!!this._timeline.autoRemoveChildren;
if(this._duration===0){if((C<=0&&C>=-1e-7)||K<0||K===l){if(K!==C&&this._first){u=true;
if(K>l){x="onReverseComplete"}}}}}}this._rawPrevTime=(this._duration||!G||C||this._rawPrevTime===C)?C:l;
if(this._yoyo&&(this._cycle&1)!==0){this._time=C=0}else{this._time=N;C=N+0.0001
}}else{if(C<1e-7){if(!this._locked){this._totalTime=this._cycle=0}this._time=0;
if(z!==0||(N===0&&K!==l&&(K>0||(C<0&&K>=0))&&!this._locked)){x="onReverseComplete";
B=this._reversed}if(C<0){this._active=false;if(this._timeline.autoRemoveChildren&&this._reversed){u=B=true;
x="onReverseComplete"}else{if(K>=0&&this._first){u=true}}this._rawPrevTime=C}else{this._rawPrevTime=(N||!G||C||this._rawPrevTime===C)?C:l;
if(C===0&&B){v=this._first;while(v&&v._startTime===0){if(!v._duration){B=false}v=v._next
}}C=0;if(!this._initted){u=true}}}else{if(N===0&&K<0){u=true}this._time=this._rawPrevTime=C;
if(!this._locked){this._totalTime=C;if(this._repeat!==0){M=N+this._repeatDelay;
this._cycle=(this._totalTime/M)>>0;if(this._cycle!==0){if(this._cycle===this._totalTime/M&&J<=C){this._cycle--
}}this._time=this._totalTime-(this._cycle*M);if(this._yoyo){if((this._cycle&1)!==0){this._time=N-this._time
}}if(this._time>N){this._time=N;C=N+0.0001}else{if(this._time<0){this._time=C=0
}else{C=this._time}}}}if(this._hasPause&&!this._forcingPlayhead&&!G&&C<N){C=this._time;
if(C>=z||(this._repeat&&I!==this._cycle)){v=this._first;while(v&&v._startTime<=C&&!A){if(!v._duration){if(v.data==="isPause"&&!v.ratio&&!(v._startTime===0&&this._rawPrevTime===0)){A=v
}}v=v._next}}else{v=this._last;while(v&&v._startTime>=C&&!A){if(!v._duration){if(v.data==="isPause"&&v._rawPrevTime>0){A=v
}}v=v._prev}}if(A){this._time=C=A._startTime;this._totalTime=C+(this._cycle*(this._totalDuration+this._repeatDelay))
}}}}if(this._cycle!==I){if(!this._locked){var P=(this._yoyo&&(I&1)!==0),H=(P===(this._yoyo&&(this._cycle&1)!==0)),F=this._totalTime,w=this._cycle,D=this._rawPrevTime,t=this._time;
this._totalTime=I*N;if(this._cycle<I){P=!P}else{this._totalTime+=N}this._time=z;
this._rawPrevTime=(N===0)?K-0.0001:K;this._cycle=I;this._locked=true;z=(P)?0:N;
this.render(z,G,(N===0));if(!G){if(!this._gc){if(this.vars.onRepeat){this._cycle=w;
this._locked=false;this._callback("onRepeat")}}}if(z!==this._time){return}if(H){this._cycle=I;
this._locked=true;z=(P)?N+0.0001:-0.0001;this.render(z,true,false)}this._locked=false;
if(this._paused&&!O){return}this._time=t;this._totalTime=F;this._cycle=w;this._rawPrevTime=D
}}if((this._time===z||!this._first)&&!s&&!u&&!A){if(J!==this._totalTime){if(this._onUpdate){if(!G){this._callback("onUpdate")
}}}return}else{if(!this._initted){this._initted=true}}if(!this._active){if(!this._paused&&this._totalTime!==J&&C>0){this._active=true
}}if(J===0){if(this.vars.onStart){if(this._totalTime!==0||!this._totalDuration){if(!G){this._callback("onStart")
}}}}E=this._time;if(E>=z){v=this._first;while(v){L=v._next;if(E!==this._time||(this._paused&&!O)){break
}else{if(v._active||(v._startTime<=this._time&&!v._paused&&!v._gc)){if(A===v){this.pause()
}if(!v._reversed){v.render((C-v._startTime)*v._timeScale,G,s)}else{v.render(((!v._dirty)?v._totalDuration:v.totalDuration())-((C-v._startTime)*v._timeScale),G,s)
}}}v=L}}else{v=this._last;while(v){L=v._prev;if(E!==this._time||(this._paused&&!O)){break
}else{if(v._active||(v._startTime<=z&&!v._paused&&!v._gc)){if(A===v){A=v._prev;
while(A&&A.endTime()>this._time){A.render((A._reversed?A.totalDuration()-((C-A._startTime)*A._timeScale):(C-A._startTime)*A._timeScale),G,s);
A=A._prev}A=null;this.pause()}if(!v._reversed){v.render((C-v._startTime)*v._timeScale,G,s)
}else{v.render(((!v._dirty)?v._totalDuration:v.totalDuration())-((C-v._startTime)*v._timeScale),G,s)
}}}v=L}}if(this._onUpdate){if(!G){if(g.length){n()}this._callback("onUpdate")}}if(x){if(!this._locked){if(!this._gc){if(y===this._startTime||p!==this._timeScale){if(this._time===0||Q>=this.totalDuration()){if(B){if(g.length){n()
}if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!G&&this.vars[x]){this._callback(x)}}}}}}};i.getActive=function(w,u,v){if(w==null){w=true
}if(u==null){u=true}if(v==null){v=false}var x=[],y=this.getChildren(w,u,v),p=0,s=y.length,t,z;
for(t=0;t<s;t++){z=y[t];if(z.isActive()){x[p++]=z}}return x};i.getLabelAfter=function(t){if(!t){if(t!==0){t=this._time
}}var u=this.getLabelsArray(),p=u.length,s;for(s=0;s<p;s++){if(u[s].time>t){return u[s].name
}}return null};i.getLabelBefore=function(s){if(s==null){s=this._time}var t=this.getLabelsArray(),p=t.length;
while(--p>-1){if(t[p].time<s){return t[p].name}}return null};i.getLabelsArray=function(){var s=[],t=0,u;
for(u in this._labels){s[t++]={time:this._labels[u],name:u}}s.sort(function(v,p){return v.time-p.time
});return s};i.invalidate=function(){this._locked=false;return h.prototype.invalidate.call(this)
};i.progress=function(s,p){return(!arguments.length)?this._time/this.duration():this.totalTime(this.duration()*((this._yoyo&&(this._cycle&1)!==0)?1-s:s)+(this._cycle*(this._duration+this._repeatDelay)),p)
};i.totalProgress=function(s,p){return(!arguments.length)?this._totalTime/this.totalDuration():this.totalTime(this.totalDuration()*s,p)
};i.totalDuration=function(p){if(!arguments.length){if(this._dirty){h.prototype.totalDuration.call(this);
this._totalDuration=(this._repeat===-1)?999999999999:this._duration*(this._repeat+1)+(this._repeatDelay*this._repeat)
}return this._totalDuration}return(this._repeat===-1||!p)?this:this.timeScale(this.totalDuration()/p)
};i.time=function(s,p){if(!arguments.length){return this._time}if(this._dirty){this.totalDuration()
}if(s>this._duration){s=this._duration}if(this._yoyo&&(this._cycle&1)!==0){s=(this._duration-s)+(this._cycle*(this._duration+this._repeatDelay))
}else{if(this._repeat!==0){s+=this._cycle*(this._duration+this._repeatDelay)}}return this.totalTime(s,p)
};i.repeat=function(p){if(!arguments.length){return this._repeat}this._repeat=p;
return this._uncache(true)};i.repeatDelay=function(p){if(!arguments.length){return this._repeatDelay
}this._repeatDelay=p;return this._uncache(true)};i.yoyo=function(p){if(!arguments.length){return this._yoyo
}this._yoyo=p;return this};i.currentLabel=function(p){if(!arguments.length){return this.getLabelBefore(this._time+1e-8)
}return this.seek(p,true)};return r},true);(function(){var w=180/Math.PI,s=[],q=[],o=[],u={},m=d._gsDefine.globals,k=function(y,p,A,z){if(A===z){A=z-(z-p)/1000000
}if(y===p){p=y+(A-y)/1000000}this.a=y;this.b=p;this.c=A;this.d=z;this.da=z-y;this.ca=A-y;
this.ba=p-y},i=",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,",l=function(J,I,H,F){var D={a:J},C={},B={},A={c:F},G=(J+I)/2,z=(I+H)/2,K=(H+F)/2,y=(G+z)/2,p=(z+K)/2,E=(p-y)/8;
D.b=G+(J-G)/4;C.b=y+E;D.c=C.a=(D.b+C.b)/2;C.c=B.a=(y+p)/2;B.b=p-E;A.b=K+(F-K)/4;
B.c=A.a=(B.b+A.b)/2;return[D,C,B,A]},h=function(R,G,H,D,C){var J=R.length-1,I=0,Q=R[0].a,M,B,A,y,O,z,p,N,P,F,L,K,E;
for(M=0;M<J;M++){O=R[I];B=O.a;A=O.d;y=R[I+1].d;if(C){L=s[M];K=q[M];E=((K+L)*G*0.25)/(D?0.5:o[M]||0.5);
z=A-(A-B)*(D?G*0.5:(L!==0?E/L:0));p=A+(y-A)*(D?G*0.5:(K!==0?E/K:0));N=A-(z+(((p-z)*((L*3/(L+K))+0.5)/4)||0))
}else{z=A-(A-B)*G*0.5;p=A+(y-A)*G*0.5;N=A-(z+p)/2}z+=N;p+=N;O.c=P=z;if(M!==0){O.b=Q
}else{O.b=Q=O.a+(O.c-O.a)*0.6}O.da=A-B;O.ca=P-B;O.ba=Q-B;if(H){F=l(B,Q,P,A);R.splice(I,1,F[0],F[1],F[2],F[3]);
I+=4}else{I++}Q=p}O=R[I];O.b=Q;O.c=Q+(O.d-Q)*0.4;O.da=O.d-O.a;O.ca=O.c-O.a;O.ba=Q-O.a;
if(H){F=l(O.a,Q,O.c,O.d);R.splice(I,1,F[0],F[1],F[2],F[3])}},v=function(G,y,z,I){var D=[],A,C,H,F,E,B;
if(I){G=[I].concat(G);C=G.length;while(--C>-1){if(typeof((B=G[C][y]))==="string"){if(B.charAt(1)==="="){G[C][y]=I[y]+Number(B.charAt(0)+B.substr(2))
}}}}A=G.length-2;if(A<0){D[0]=new k(G[0][y],0,0,G[(A<-1)?0:1][y]);return D}for(C=0;
C<A;C++){H=G[C][y];F=G[C+1][y];D[C]=new k(H,0,0,F);if(z){E=G[C+2][y];s[C]=(s[C]||0)+(F-H)*(F-H);
q[C]=(q[C]||0)+(E-F)*(E-F)}}D[C]=new k(G[C][y],0,0,G[C+1][y]);return D},r=function(N,z,G,E,B,O){var I={},K=[],J=O||N[0],H,A,L,F,y,D,C,M;
B=(typeof(B)==="string")?","+B+",":i;if(z==null){z=1}for(A in N[0]){K.push(A)}if(N.length>1){M=N[N.length-1];
C=true;H=K.length;while(--H>-1){A=K[H];if(Math.abs(J[A]-M[A])>0.05){C=false;break
}}if(C){N=N.concat();if(O){N.unshift(O)}N.push(N[1]);O=N[N.length-3]}}s.length=q.length=o.length=0;
H=K.length;while(--H>-1){A=K[H];u[A]=(B.indexOf(","+A+",")!==-1);I[A]=v(N,A,u[A],O)
}H=s.length;while(--H>-1){s[H]=Math.sqrt(s[H]);q[H]=Math.sqrt(q[H])}if(!E){H=K.length;
while(--H>-1){if(u[A]){L=I[K[H]];D=L.length-1;for(F=0;F<D;F++){y=(L[F+1].da/q[F]+L[F].da/s[F])||0;
o[F]=(o[F]||0)+y*y}}}H=o.length;while(--H>-1){o[H]=Math.sqrt(o[H])}}H=K.length;
F=G?4:1;while(--H>-1){A=K[H];L=I[A];h(L,z,G,E,u[A]);if(C){L.splice(0,F);L.splice(L.length-F,F)
}}return I},t=function(y,B,P){B=B||"soft";var D={},C=(B==="cubic")?3:2,J=(B==="soft"),A=[],O,N,M,K,z,I,G,F,E,H,L;
if(J&&P){y=[P].concat(y)}if(y==null||y.length<C+1){throw"invalid Bezier data"}for(E in y[0]){A.push(E)
}I=A.length;while(--I>-1){E=A[I];D[E]=z=[];H=0;F=y.length;for(G=0;G<F;G++){O=(P==null)?y[G][E]:(typeof((L=y[G][E]))==="string"&&L.charAt(1)==="=")?P[E]+Number(L.charAt(0)+L.substr(2)):Number(L);
if(J){if(G>1){if(G<F-1){z[H++]=(O+z[H-2])/2}}}z[H++]=O}F=H-C+1;H=0;for(G=0;G<F;
G+=C){O=z[G];N=z[G+1];M=z[G+2];K=(C===2)?0:z[G+3];z[H++]=L=(C===3)?new k(O,N,M,K):new k(O,(2*N+O)/3,(2*N+M)/3,M)
}z.length=H}return D},x=function(K,J,B){var A=1/B,D=K.length,H,y,N,M,C,I,z,F,E,L,G;
while(--D>-1){L=K[D];N=L.a;M=L.d-N;C=L.c-N;I=L.b-N;H=y=0;for(F=1;F<=B;F++){z=A*F;
E=1-z;H=y-(y=(z*z*M+3*E*(z*C+E*I))*z);G=D*B+F-1;J[G]=(J[G]||0)+H*H}}},n=function(D,B){B=B>>0||6;
var K=[],A=[],I=0,J=0,F=B-1,E=[],H=[],y,C,z,G;for(y in D){x(D[y],K,B)}z=K.length;
for(C=0;C<z;C++){I+=Math.sqrt(K[C]);G=C%B;H[G]=I;if(G===F){J+=I;G=(C/B)>>0;E[G]=H;
A[G]=J;I=0;H=[]}}return{length:J,lengths:A,segments:E}},g=d._gsDefine.plugin({propName:"bezier",priority:-1,version:"1.3.7",API:2,global:true,init:function(F,G,J){this._target=F;
if(G instanceof Array){G={values:G}}this._func={};this._mod={};this._props=[];this._timeRes=(G.timeResolution==null)?6:parseInt(G.timeResolution,10);
var I=G.values||[],E={},A=I[0],B=G.autoRotate||J.vars.orientToBezier,z,H,D,C,K;
this._autoRotate=B?(B instanceof Array)?B:[["x","y","rotation",((B===true)?0:Number(B)||0)]]:null;
for(z in A){this._props.push(z)}D=this._props.length;while(--D>-1){z=this._props[D];
this._overwriteProps.push(z);H=this._func[z]=(typeof(F[z])==="function");E[z]=(!H)?parseFloat(F[z]):F[((z.indexOf("set")||typeof(F["get"+z.substr(3)])!=="function")?z:"get"+z.substr(3))]();
if(!K){if(E[z]!==I[0][z]){K=E}}}this._beziers=(G.type!=="cubic"&&G.type!=="quadratic"&&G.type!=="soft")?r(I,isNaN(G.curviness)?1:G.curviness,false,(G.type==="thruBasic"),G.correlate,K):t(I,G.type,E);
this._segCount=this._beziers[z].length;if(this._timeRes){var y=n(this._beziers,this._timeRes);
this._length=y.length;this._lengths=y.lengths;this._segments=y.segments;this._l1=this._li=this._s1=this._si=0;
this._l2=this._lengths[0];this._curSeg=this._segments[0];this._s2=this._curSeg[0];
this._prec=1/this._curSeg.length}if((B=this._autoRotate)){this._initialRotations=[];
if(!(B[0] instanceof Array)){this._autoRotate=B=[B]}D=B.length;while(--D>-1){for(C=0;
C<3;C++){z=B[D][C];this._func[z]=(typeof(F[z])==="function")?F[((z.indexOf("set")||typeof(F["get"+z.substr(3)])!=="function")?z:"get"+z.substr(3))]:false
}z=B[D][2];this._initialRotations[D]=(this._func[z]?this._func[z].call(this._target):this._target[z])||0;
this._overwriteProps.push(z)}}this._startRatio=J.vars.runBackwards?1:0;return true
},set:function(I){var N=this._segCount,E=this._func,T=this._target,y=(I!==this._startRatio),H,z,P,M,S,J,U,O,D,G;
if(!this._timeRes){H=(I<0)?0:(I>=1)?N-1:(N*I)>>0;J=(I-(H*(1/N)))*N}else{D=this._lengths;
G=this._curSeg;I*=this._length;P=this._li;if(I>this._l2&&P<N-1){O=N-1;while(P<O&&(this._l2=D[++P])<=I){}this._l1=D[P-1];
this._li=P;this._curSeg=G=this._segments[P];this._s2=G[(this._s1=this._si=0)]}else{if(I<this._l1&&P>0){while(P>0&&(this._l1=D[--P])>=I){}if(P===0&&I<this._l1){this._l1=0
}else{P++}this._l2=D[P];this._li=P;this._curSeg=G=this._segments[P];this._s1=G[(this._si=G.length-1)-1]||0;
this._s2=G[this._si]}}H=P;I-=this._l1;P=this._si;if(I>this._s2&&P<G.length-1){O=G.length-1;
while(P<O&&(this._s2=G[++P])<=I){}this._s1=G[P-1];this._si=P}else{if(I<this._s1&&P>0){while(P>0&&(this._s1=G[--P])>=I){}if(P===0&&I<this._s1){this._s1=0
}else{P++}this._s2=G[P];this._si=P}}J=((P+(I-this._s1)/(this._s2-this._s1))*this._prec)||0
}z=1-J;P=this._props.length;while(--P>-1){M=this._props[P];S=this._beziers[M][H];
U=(J*J*S.da+3*z*(J*S.ca+z*S.ba))*J+S.a;if(this._mod[M]){U=this._mod[M](U,T)}if(E[M]){T[M](U)
}else{T[M]=U}}if(this._autoRotate){var L=this._autoRotate,F,R,C,Q,B,K,A;P=L.length;
while(--P>-1){M=L[P][2];K=L[P][3]||0;A=(L[P][4]===true)?1:w;S=this._beziers[L[P][0]];
F=this._beziers[L[P][1]];if(S&&F){S=S[H];F=F[H];R=S.a+(S.b-S.a)*J;Q=S.b+(S.c-S.b)*J;
R+=(Q-R)*J;Q+=((S.c+(S.d-S.c)*J)-Q)*J;C=F.a+(F.b-F.a)*J;B=F.b+(F.c-F.b)*J;C+=(B-C)*J;
B+=((F.c+(F.d-F.c)*J)-B)*J;U=y?Math.atan2(B-C,Q-R)*A+K:this._initialRotations[P];
if(this._mod[M]){U=this._mod[M](U,T)}if(E[M]){T[M](U)}else{T[M]=U}}}}}}),j=g.prototype;
g.bezierThrough=r;g.cubicToQuadratic=l;g._autoCSS=true;g.quadraticToCubic=function(y,p,z){return new k(y,(2*p+y)/3,(2*p+z)/3,z)
};g._cssRegister=function(){var z=m.CSSPlugin;if(!z){return}var p=z._internals,A=p._parseToProxy,y=p._setPluginRatio,B=p.CSSPropTween;
p._registerComplexSpecialProp("bezier",{parser:function(N,K,C,F,O,J){if(K instanceof Array){K={values:K}
}J=new g();var M=K.values,G=M.length-1,E=[],L={},I,D,H;if(G<0){return O}for(I=0;
I<=G;I++){H=A(N,M[I],F,O,J,(G!==I));E[I]=H.end}for(D in K){L[D]=K[D]}L.values=E;
O=new B(N,"bezier",0,0,H.pt,2);O.data=H;O.plugin=J;O.setRatio=y;if(L.autoRotate===0){L.autoRotate=true
}if(L.autoRotate&&!(L.autoRotate instanceof Array)){I=(L.autoRotate===true)?0:Number(L.autoRotate);
L.autoRotate=(H.end.left!=null)?[["left","top","rotation",I,false]]:(H.end.x!=null)?[["x","y","rotation",I,false]]:false
}if(L.autoRotate){if(!F._transform){F._enableTransforms(false)}H.autoRotate=F._target._gsTransform;
H.proxy.rotation=H.autoRotate.rotation||0;F._overwriteProps.push("rotation")}J._onInitTween(H.proxy,L,F._tween);
return O}})};j._mod=function(y){var A=this._overwriteProps,p=A.length,z;while(--p>-1){z=y[A[p]];
if(z&&typeof(z)==="function"){this._mod[A[p]]=z}}};j._kill=function(B){var y=this._props,A,z;
for(A in this._beziers){if(A in B){delete this._beziers[A];delete this._func[A];
z=y.length;while(--z>-1){if(y[z]===A){y.splice(z,1)}}}}y=this._autoRotate;if(y){z=y.length;
while(--z>-1){if(B[y[z][2]]){y.splice(z,1)}}}return this._super._kill.call(this,B)
}}());d._gsDefine("plugins.CSSPlugin",["plugins.TweenPlugin","TweenLite"],function(L,y){var aL=function(){L.call(this,"css");
this._overwriteProps.length=0;this.setRatio=aL.prototype.setRatio},C=d._gsDefine.globals,aJ,g,W,a9,h={},ad=aL.prototype=new L("css");
ad.constructor=aL;aL.version="1.19.1";aL.API=2;aL.defaultTransformPerspective=0;
aL.defaultSkewType="compensated";aL.defaultSmoothOrigin=true;ad="px";aL.suffixMap={top:ad,right:ad,bottom:ad,left:ad,width:ad,height:ad,fontSize:ad,padding:ad,margin:ad,perspective:ad,lineHeight:""};
var aY=/(?:\-|\.|\b)(\d|\.|e\-)+/g,E=/(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,aD=/(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,aV=/(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,aw=/(?:\d|\-|\+|=|#|\.)*/g,aR=/opacity *= *([^)]*)/i,t=/opacity:([^;]*)/i,au=/alpha\(opacity *=.+?\)/i,ag=/^(rgb|hsl)/,am=/([A-Z])/g,m=/-([a-z])/gi,ah=/(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,aE=function(i,p){return p.toUpperCase()
},H=/(?:Left|Right|Width)/i,at=/(M11|M12|M21|M22)=[\d\-\.e]+/gi,R=/progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,F=/,(?=[^\)]*(?:\(|$))/gi,an=/[\s,\(]/i,ac=Math.PI/180,aN=180/Math.PI,bc={},T={style:{}},a1=d.document||{createElement:function(){return T
}},a4=function(p,i){return a1.createElementNS?a1.createElementNS(i||"http://www.w3.org/1999/xhtml",p):a1.createElement(p)
},ba=a4("div"),G=a4("img"),s=aL._internals={_specialProps:h},aB=(d.navigator||{}).userAgent||"",K,aM,O,S,u,Z,af=(function(){var bd=aB.indexOf("Android"),p=a4("a");
O=(aB.indexOf("Safari")!==-1&&aB.indexOf("Chrome")===-1&&(bd===-1||parseFloat(aB.substr(bd+8,2))>3));
u=(O&&(parseFloat(aB.substr(aB.indexOf("Version/")+8,2))<6));S=(aB.indexOf("Firefox")!==-1);
if((/MSIE ([0-9]{1,}[\.0-9]{0,})/).exec(aB)||(/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/).exec(aB)){Z=parseFloat(RegExp.$1)
}if(!p){return false}p.style.cssText="top:1px;opacity:.55;";return/^0.55/.test(p.style.opacity)
}()),ax=function(i){return(aR.test(((typeof(i)==="string")?i:(i.currentStyle?i.currentStyle.filter:i.style.filter)||""))?(parseFloat(RegExp.$1)/100):1)
},az=function(i){if(d.console){console.log(i)}},aI,aT,z="",a3="",X=function(bh,bg){bg=bg||ba;
var bf=bg.style,bd,be;if(bf[bh]!==undefined){return bh}bh=bh.charAt(0).toUpperCase()+bh.substr(1);
bd=["O","Moz","ms","Ms","Webkit"];be=5;while(--be>-1&&bf[bd[be]+bh]===undefined){}if(be>=0){a3=(be===3)?"ms":bd[be];
z="-"+a3.toLowerCase()+"-";return a3+bh}return null},aQ=a1.defaultView?a1.defaultView.getComputedStyle:function(){},I=aL.getStyle=function(bd,bg,be,i,bf){var bh;
if(!af){if(bg==="opacity"){return ax(bd)}}if(!i&&bd.style[bg]){bh=bd.style[bg]}else{if((be=be||aQ(bd))){bh=be[bg]||be.getPropertyValue(bg)||be.getPropertyValue(bg.replace(am,"-$1").toLowerCase())
}else{if(bd.currentStyle){bh=bd.currentStyle[bg]}}}return(bf!=null&&(!bh||bh==="none"||bh==="auto"||bh==="auto auto"))?bf:bh
},N=s.convertToPixels=function(bo,bf,bm,bj,bd){if(bj==="px"||!bj){return bm}if(bj==="auto"||!bm){return 0
}var bn=H.test(bf),bh=bo,be=ba.style,bi=(bm<0),bk=(bm===1),bl,i,bg;if(bi){bm=-bm
}if(bk){bm*=100}if(bj==="%"&&bf.indexOf("border")!==-1){bl=(bm/100)*(bn?bo.clientWidth:bo.clientHeight)
}else{be.cssText="border:0 solid red;position:"+I(bo,"position")+";line-height:0;";
if(bj==="%"||!bh.appendChild||bj.charAt(0)==="v"||bj==="rem"){bh=bo.parentNode||a1.body;
i=bh._gsCache;bg=y.ticker.frame;if(i&&bn&&i.time===bg){return i.width*bm/100}be[(bn?"width":"height")]=bm+bj
}else{be[(bn?"borderLeftWidth":"borderTopWidth")]=bm+bj}bh.appendChild(ba);bl=parseFloat(ba[(bn?"offsetWidth":"offsetHeight")]);
bh.removeChild(ba);if(bn&&bj==="%"&&aL.cacheWidths!==false){i=bh._gsCache=bh._gsCache||{};
i.time=bg;i.width=bl/bm*100}if(bl===0&&!bd){bl=N(bo,bf,bm,bj,true)}}if(bk){bl/=100
}return bi?-bl:bl},l=s.calculateOffset=function(bd,bg,be){if(I(bd,"position",be)!=="absolute"){return 0
}var bf=((bg==="left")?"Left":"Top"),i=I(bd,"margin"+bf,be);return bd["offset"+bf]-(N(bd,bg,parseFloat(i),i.replace(aw,""))||0)
},aK=function(be,bg){var bf={},bd,bh,bi;if((bg=bg||aQ(be,null))){if((bd=bg.length)){while(--bd>-1){bi=bg[bd];
if(bi.indexOf("-transform")===-1||aF===bi){bf[bi.replace(m,aE)]=bg.getPropertyValue(bi)
}}}else{for(bd in bg){if(bd.indexOf("Transform")===-1||aX===bd){bf[bd]=bg[bd]}}}}else{if((bg=be.currentStyle||be.style)){for(bd in bg){if(typeof(bd)==="string"&&bf[bd]===undefined){bf[bd.replace(m,aE)]=bg[bd]
}}}}if(!af){bf.opacity=ax(be)}bh=j(be,bg,false);bf.rotation=bh.rotation;bf.skewX=bh.skewX;
bf.scaleX=bh.scaleX;bf.scaleY=bh.scaleY;bf.x=bh.x;bf.y=bh.y;if(k){bf.z=bh.z;bf.rotationX=bh.rotationX;
bf.rotationY=bh.rotationY;bf.scaleZ=bh.scaleZ}if(bf.filters){delete bf.filters}return bf
},w=function(bl,bk,bj,bh,bg){var bf={},i=bl.style,be,bd,bi;for(bd in bj){if(bd!=="cssText"){if(bd!=="length"){if(isNaN(bd)){if(bk[bd]!==(be=bj[bd])||(bg&&bg[bd])){if(bd.indexOf("Origin")===-1){if(typeof(be)==="number"||typeof(be)==="string"){bf[bd]=(be==="auto"&&(bd==="left"||bd==="top"))?l(bl,bd):((be===""||be==="auto"||be==="none")&&typeof(bk[bd])==="string"&&bk[bd].replace(aV,"")!=="")?0:be;
if(i[bd]!==undefined){bi=new ak(i,bd,i[bd],bi)}}}}}}}}if(bh){for(bd in bh){if(bd!=="className"){bf[bd]=bh[bd]
}}}return{difs:bf,firstMPT:bi}},aW={width:["Left","Right"],height:["Top","Bottom"]},ao=["marginLeft","marginRight","marginTop","marginBottom"],aS=function(bg,bi,bh){if((bg.nodeName+"").toLowerCase()==="svg"){return(bh||aQ(bg))[bi]||0
}else{if(bg.getCTM&&v(bg)){return bg.getBBox()[bi]||0}}var be=parseFloat((bi==="width")?bg.offsetWidth:bg.offsetHeight),bd=aW[bi],bf=bd.length;
bh=bh||aQ(bg,null);while(--bf>-1){be-=parseFloat(I(bg,"padding"+bd[bf],bh,true))||0;
be-=parseFloat(I(bg,"border"+bd[bf]+"Width",bh,true))||0}return be},aO=function(be,bf){if(be==="contain"||be==="auto"||be==="auto auto"){return be+" "
}if(be==null||be===""){be="0 0"}var bd=be.split(" "),p=(be.indexOf("left")!==-1)?"0%":(be.indexOf("right")!==-1)?"100%":bd[0],bh=(be.indexOf("top")!==-1)?"0%":(be.indexOf("bottom")!==-1)?"100%":bd[1],bg;
if(bd.length>3&&!bf){bd=be.split(", ").join(",").split(",");be=[];for(bg=0;bg<bd.length;
bg++){be.push(aO(bd[bg]))}return be.join(",")}if(bh==null){bh=(p==="center")?"50%":"0"
}else{if(bh==="center"){bh="50%"}}if(p==="center"||(isNaN(parseFloat(p))&&(p+"").indexOf("=")===-1)){p="50%"
}be=p+" "+bh+((bd.length>2)?" "+bd[2]:"");if(bf){bf.oxp=(p.indexOf("%")!==-1);bf.oyp=(bh.indexOf("%")!==-1);
bf.oxr=(p.charAt(1)==="=");bf.oyr=(bh.charAt(1)==="=");bf.ox=parseFloat(p.replace(aV,""));
bf.oy=parseFloat(bh.replace(aV,""));bf.v=be}return bf||be},bb=function(p,i){if(typeof(p)==="function"){p=p(aT,aI)
}return(typeof(p)==="string"&&p.charAt(1)==="=")?parseInt(p.charAt(0)+"1",10)*parseFloat(p.substr(2)):(parseFloat(p)-parseFloat(i))||0
},D=function(i,p){if(typeof(i)==="function"){i=i(aT,aI)}return(i==null)?p:(typeof(i)==="string"&&i.charAt(1)==="=")?parseInt(i.charAt(0)+"1",10)*parseFloat(i.substr(2))+p:parseFloat(i)||0
},a7=function(bj,be,i,bi){var bd=0.000001,bk,bf,bg,bl,bh;if(typeof(bj)==="function"){bj=bj(aT,aI)
}if(bj==null){bl=be}else{if(typeof(bj)==="number"){bl=bj}else{bk=360;bf=bj.split("_");
bh=(bj.charAt(1)==="=");bg=(bh?parseInt(bj.charAt(0)+"1",10)*parseFloat(bf[0].substr(2)):parseFloat(bf[0]))*((bj.indexOf("rad")===-1)?1:aN)-(bh?0:be);
if(bf.length){if(bi){bi[i]=be+bg}if(bj.indexOf("short")!==-1){bg=bg%bk;if(bg!==bg%(bk/2)){bg=(bg<0)?bg+bk:bg-bk
}}if(bj.indexOf("_cw")!==-1&&bg<0){bg=((bg+bk*9999999999)%bk)-((bg/bk)|0)*bk}else{if(bj.indexOf("ccw")!==-1&&bg>0){bg=((bg-bk*9999999999)%bk)-((bg/bk)|0)*bk
}}}bl=be+bg}}if(bl<bd&&bl>-bd){bl=0}return bl},al={aqua:[0,255,255],lime:[0,255,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,255],navy:[0,0,128],white:[255,255,255],fuchsia:[255,0,255],olive:[128,128,0],yellow:[255,255,0],orange:[255,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[255,0,0],pink:[255,192,203],cyan:[0,255,255],transparent:[255,255,255,0]},aP=function(bd,p,i){bd=(bd<0)?bd+1:(bd>1)?bd-1:bd;
return((((bd*6<1)?p+(i-p)*bd*6:(bd<0.5)?i:(bd*3<2)?p+(i-p)*(2/3-bd)*6:p)*255)+0.5)|0
},a6=aL.parseColor=function(bm,be){var bl,i,bh,bk,bf,bn,p,bj,bd,bi,bg;if(!bm){bl=al.black
}else{if(typeof(bm)==="number"){bl=[bm>>16,(bm>>8)&255,bm&255]}else{if(bm.charAt(bm.length-1)===","){bm=bm.substr(0,bm.length-1)
}if(al[bm]){bl=al[bm]}else{if(bm.charAt(0)==="#"){if(bm.length===4){i=bm.charAt(1);
bh=bm.charAt(2);bk=bm.charAt(3);bm="#"+i+i+bh+bh+bk+bk}bm=parseInt(bm.substr(1),16);
bl=[bm>>16,(bm>>8)&255,bm&255]}else{if(bm.substr(0,3)==="hsl"){bl=bg=bm.match(aY);
if(!be){bf=(Number(bl[0])%360)/360;bn=Number(bl[1])/100;p=Number(bl[2])/100;bh=(p<=0.5)?p*(bn+1):p+bn-p*bn;
i=p*2-bh;if(bl.length>3){bl[3]=Number(bm[3])}bl[0]=aP(bf+1/3,i,bh);bl[1]=aP(bf,i,bh);
bl[2]=aP(bf-1/3,i,bh)}else{if(bm.indexOf("=")!==-1){return bm.match(E)}}}else{bl=bm.match(aY)||al.transparent
}}}bl[0]=Number(bl[0]);bl[1]=Number(bl[1]);bl[2]=Number(bl[2]);if(bl.length>3){bl[3]=Number(bl[3])
}}}if(be&&!bg){i=bl[0]/255;bh=bl[1]/255;bk=bl[2]/255;bj=Math.max(i,bh,bk);bd=Math.min(i,bh,bk);
p=(bj+bd)/2;if(bj===bd){bf=bn=0}else{bi=bj-bd;bn=p>0.5?bi/(2-bj-bd):bi/(bj+bd);
bf=(bj===i)?(bh-bk)/bi+(bh<bk?6:0):(bj===bh)?(bk-i)/bi+2:(i-bh)/bi+4;bf*=60}bl[0]=(bf+0.5)|0;
bl[1]=(bn*100+0.5)|0;bl[2]=(p*100+0.5)|0}return bl},J=function(bh,bj){var p=bh.match(aG)||[],bi=0,bf=p.length?"":bh,bg,be,bd;
for(bg=0;bg<p.length;bg++){be=p[bg];bd=bh.substr(bi,bh.indexOf(be,bi)-bi);bi+=bd.length+be.length;
be=a6(be,bj);if(be.length===3){be.push(1)}bf+=bd+(bj?"hsla("+be[0]+","+be[1]+"%,"+be[2]+"%,"+be[3]:"rgba("+be.join(","))+")"
}return bf+bh.substr(bi)},aG="(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
for(ad in al){aG+="|"+ad+"\\b"}aG=new RegExp(aG+")","gi");aL.colorStringFilter=function(i){var p=i[0]+i[1],bd;
if(aG.test(p)){bd=(p.indexOf("hsl(")!==-1||p.indexOf("hsla(")!==-1);i[0]=J(i[0],bd);
i[1]=J(i[1],bd)}aG.lastIndex=0};if(!y.defaultStringFilter){y.defaultStringFilter=aL.colorStringFilter
}var aC=function(bg,bm,bl,bh){if(bg==null){return function(bn){return bn}}var bk=bm?(bg.match(aG)||[""])[0]:"",bf=bg.split(bk).join("").match(aD)||[],bi=bg.substr(0,bg.indexOf(bf[0])),be=(bg.charAt(bg.length-1)===")")?")":"",i=(bg.indexOf(" ")!==-1)?" ":",",bd=bf.length,p=(bd>0)?bf[0].replace(aY,""):"",bj;
if(!bd){return function(bn){return bn}}if(bm){bj=function(bp){var bo,br,bq,bn;if(typeof(bp)==="number"){bp+=p
}else{if(bh&&F.test(bp)){bn=bp.replace(F,"|").split("|");for(bq=0;bq<bn.length;
bq++){bn[bq]=bj(bn[bq])}return bn.join(",")}}bo=(bp.match(aG)||[bk])[0];br=bp.split(bo).join("").match(aD)||[];
bq=br.length;if(bd>bq--){while(++bq<bd){br[bq]=bl?br[(((bq-1)/2)|0)]:bf[bq]}}return bi+br.join(i)+i+bo+be+(bp.indexOf("inset")!==-1?" inset":"")
};return bj}bj=function(bo){var bq,bn,bp;if(typeof(bo)==="number"){bo+=p}else{if(bh&&F.test(bo)){bn=bo.replace(F,"|").split("|");
for(bp=0;bp<bn.length;bp++){bn[bp]=bj(bn[bp])}return bn.join(",")}}bq=bo.match(aD)||[];
bp=bq.length;if(bd>bp--){while(++bp<bd){bq[bp]=bl?bq[(((bp-1)/2)|0)]:bf[bp]}}return bi+bq.join(i)+be
};return bj},aU=function(i){i=i.split(",");return function(bk,bh,bd,be,bl,bg,bi){var bj=(bh+"").split(" "),bf;
bi={};for(bf=0;bf<4;bf++){bi[i[bf]]=bj[bf]=bj[bf]||bj[(((bf-1)/2)>>0)]}return be.parse(bk,bi,bl,bg)
}},aA=s._setPluginRatio=function(bl){this.plugin.setRatio(bl);var bh=this.data,bi=bh.proxy,bk=bh.firstMPT,bf=0.000001,be,bm,bg,bj,bd;
while(bk){be=bi[bk.v];if(bk.r){be=Math.round(be)}else{if(be<bf&&be>-bf){be=0}}bk.t[bk.p]=be;
bk=bk._next}if(bh.autoRotate){bh.autoRotate.rotation=bh.mod?bh.mod(bi.rotation,this.t):bi.rotation
}if(bl===1||bl===0){bk=bh.firstMPT;bd=(bl===1)?"e":"b";while(bk){bm=bk.t;if(!bm.type){bm[bd]=bm.s+bm.xs0
}else{if(bm.type===1){bj=bm.xs0+bm.s+bm.xs1;for(bg=1;bg<bm.l;bg++){bj+=bm["xn"+bg]+bm["xs"+(bg+1)]
}bm[bd]=bj}}bk=bk._next}}},ak=function(bd,bg,i,be,bf){this.t=bd;this.p=bg;this.v=i;
this.r=bf;if(be){be._prev=this;this._next=be}},V=s._parseToProxy=function(br,bp,bh,bs,bo,bg){var bi=bs,be={},bl={},bf=bh._transform,bk=bc,bn,bd,bm,bq,bj;
bh._transform=null;bc=bp;bs=bj=bh.parse(br,bp,bs,bo);bc=bk;if(bg){bh._transform=bf;
if(bi){bi._prev=null;if(bi._prev){bi._prev._next=null}}}while(bs&&bs!==bi){if(bs.type<=1){bd=bs.p;
bl[bd]=bs.s+bs.c;be[bd]=bs.s;if(!bg){bq=new ak(bs,"s",bd,bq,bs.r);bs.c=0}if(bs.type===1){bn=bs.l;
while(--bn>0){bm="xn"+bn;bd=bs.p+"_"+bm;bl[bd]=bs.data[bm];be[bd]=bs[bm];if(!bg){bq=new ak(bs,bm,bd,bq,bs.rxp[bm])
}}}}bs=bs._next}return{proxy:be,end:bl,firstMPT:bq,pt:bj}},A=s.CSSPropTween=function(bl,be,bm,bi,bg,bj,bf,i,bd,bk,bh){this.t=bl;
this.p=be;this.s=bm;this.c=bi;this.n=bf||be;if(!(bl instanceof A)){a9.push(this.n)
}this.r=i;this.type=bj||0;if(bd){this.pr=bd;aJ=true}this.b=(bk===undefined)?bm:bk;
this.e=(bh===undefined)?bm+bi:bh;if(bg){this._next=bg;bg._prev=this}},x=function(bf,bh,bg,i,bd,p){var be=new A(bf,bh,bg,i-bg,bd,-1,p);
be.b=bg;be.e=be.xs0=i;return be},q=aL.parseComplex=function(bl,bp,bF,bB,bA,bo,bq,bt,bg,bx){bF=bF||bo||"";
if(typeof(bB)==="function"){bB=bB(aT,aI)}bq=new A(bl,bp,0,0,bq,(bx?2:1),null,false,bt,bF,bB);
bB+="";if(bA&&aG.test(bB+bF)){bB=[bF,bB];aL.colorStringFilter(bB);bF=bB[0];bB=bB[1]
}var bj=bF.split(", ").join(",").split(" "),bk=bB.split(", ").join(",").split(" "),bs=bj.length,bE=(K!==false),bw,bm,bh,bz,bD,bi,be,bd,bu,bC,bf,br,by;
if(bB.indexOf(",")!==-1||bF.indexOf(",")!==-1){bj=bj.join(" ").replace(F,", ").split(" ");
bk=bk.join(" ").replace(F,", ").split(" ");bs=bj.length}if(bs!==bk.length){bj=(bo||"").split(" ");
bs=bj.length}bq.plugin=bg;bq.setRatio=bx;aG.lastIndex=0;for(bw=0;bw<bs;bw++){bz=bj[bw];
bD=bk[bw];bd=parseFloat(bz);if(bd||bd===0){bq.appendXtra("",bd,bb(bD,bd),bD.replace(E,""),(bE&&bD.indexOf("px")!==-1),true)
}else{if(bA&&aG.test(bz)){br=bD.indexOf(")")+1;br=")"+(br?bD.substr(br):"");by=(bD.indexOf("hsl")!==-1&&af);
bz=a6(bz,by);bD=a6(bD,by);bu=(bz.length+bD.length>6);if(bu&&!af&&bD[3]===0){bq["xs"+bq.l]+=bq.l?" transparent":"transparent";
bq.e=bq.e.split(bk[bw]).join("transparent")}else{if(!af){bu=false}if(by){bq.appendXtra((bu?"hsla(":"hsl("),bz[0],bb(bD[0],bz[0]),",",false,true).appendXtra("",bz[1],bb(bD[1],bz[1]),"%,",false).appendXtra("",bz[2],bb(bD[2],bz[2]),(bu?"%,":"%"+br),false)
}else{bq.appendXtra((bu?"rgba(":"rgb("),bz[0],bD[0]-bz[0],",",true,true).appendXtra("",bz[1],bD[1]-bz[1],",",true).appendXtra("",bz[2],bD[2]-bz[2],(bu?",":br),true)
}if(bu){bz=(bz.length<4)?1:bz[3];bq.appendXtra("",bz,((bD.length<4)?1:bD[3])-bz,br,false)
}}aG.lastIndex=0}else{bi=bz.match(aY);if(!bi){bq["xs"+bq.l]+=(bq.l||bq["xs"+bq.l])?" "+bD:bD
}else{be=bD.match(E);if(!be||be.length!==bi.length){return bq}bh=0;for(bm=0;bm<bi.length;
bm++){bf=bi[bm];bC=bz.indexOf(bf,bh);bq.appendXtra(bz.substr(bh,bC-bh),Number(bf),bb(be[bm],bf),"",(bE&&bz.substr(bC+bf.length,2)==="px"),(bm===0));
bh=bC+bf.length}bq["xs"+bq.l]+=bz.substr(bh)}}}}if(bB.indexOf("=")!==-1){if(bq.data){br=bq.xs0+bq.data.s;
for(bw=1;bw<bq.l;bw++){br+=bq["xs"+bw]+bq.data["xn"+bw]}bq.e=br+bq["xs"+bw]}}if(!bq.l){bq.type=-1;
bq.xs0=bq.e}return bq.xfirst||bq},aj=9;ad=A.prototype;ad.l=ad.pr=0;while(--aj>0){ad["xn"+aj]=0;
ad["xs"+aj]=""}ad.xs0="";ad._next=ad._prev=ad.xfirst=ad.data=ad.plugin=ad.setRatio=ad.rxp=null;
ad.appendXtra=function(bh,p,bi,bg,bd,bf){var be=this,i=be.l;be["xs"+i]+=(bf&&(i||be["xs"+i]))?" "+bh:bh||"";
if(!bi){if(i!==0&&!be.plugin){be["xs"+i]+=p+(bg||"");return be}}be.l++;be.type=be.setRatio?2:1;
be["xs"+be.l]=bg||"";if(i>0){be.data["xn"+i]=p+bi;be.rxp["xn"+i]=bd;be["xn"+i]=p;
if(!be.plugin){be.xfirst=new A(be,"xn"+i,p,bi,be.xfirst||be,0,be.n,bd,be.pr);be.xfirst.xs0=0
}return be}be.data={s:p+bi};be.rxp={};be.s=p;be.c=bi;be.r=bd;return be};var aq=function(bd,i){i=i||{};
this.p=i.prefix?X(bd)||bd:bd;h[bd]=h[this.p]=this;this.format=i.formatter||aC(i.defaultValue,i.color,i.collapsible,i.multi);
if(i.parser){this.parse=i.parser}this.clrs=i.color;this.multi=i.multi;this.keyword=i.keyword;
this.dflt=i.defaultValue;this.pr=i.priority||0},U=s._registerComplexSpecialProp=function(bi,bf,bh){if(typeof(bf)!=="object"){bf={parser:bh}
}var bd=bi.split(","),bj=bf.defaultValue,bg,be;bh=bh||[bj];for(bg=0;bg<bd.length;
bg++){bf.prefix=(bg===0&&bf.prefix);bf.defaultValue=bh[bg]||bj;be=new aq(bd[bg],bf)
}},o=s._registerPluginProp=function(bd){if(!h[bd]){var i=bd.charAt(0).toUpperCase()+bd.substr(1)+"Plugin";
U(bd,{parser:function(be,bk,bj,bl,bi,bg,bh){var bf=C.com.greensock.plugins[i];if(!bf){az("Error: "+i+" js file not loaded.");
return bi}bf._cssRegister();return h[bj].parse(be,bk,bj,bl,bi,bg,bh)}})}};ad=aq.prototype;
ad.parseComplex=function(bo,bn,bk,bp,bh,p){var bj=this.keyword,bg,bm,bl,be,bf,bd;
if(this.multi){if(F.test(bk)||F.test(bn)){bm=bn.replace(F,"|").split("|");bl=bk.replace(F,"|").split("|")
}else{if(bj){bm=[bn];bl=[bk]}}}if(bl){be=(bl.length>bm.length)?bl.length:bm.length;
for(bg=0;bg<be;bg++){bn=bm[bg]=bm[bg]||this.dflt;bk=bl[bg]=bl[bg]||this.dflt;if(bj){bf=bn.indexOf(bj);
bd=bk.indexOf(bj);if(bf!==bd){if(bd===-1){bm[bg]=bm[bg].split(bj).join("")}else{if(bf===-1){bm[bg]+=" "+bj
}}}}}bn=bm.join(", ");bk=bl.join(", ")}return q(bo,this.p,bn,bk,this.clrs,this.dflt,bp,this.pr,bh,p)
};ad.parse=function(i,bh,bg,bi,bf,bd,be){return this.parseComplex(i.style,this.format(I(i,this.p,W,false,this.dflt)),this.format(bh),bf,bd)
};aL.registerSpecialProp=function(i,bd,p){U(i,{parser:function(be,bj,bi,bk,bh,bf,bg){var bl=new A(be,bi,0,0,bh,2,bi,false,p);
bl.plugin=bf;bl.setRatio=bd(be,bj,bk._tween,bi);return bl},priority:p})};aL.useSVGTransformAttr=true;
var ay=("scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent").split(","),aX=X("transform"),aF=z+"transform",ab=X("transformOrigin"),k=(X("perspective")!==null),a5=s.Transform=function(){this.perspective=parseFloat(aL.defaultTransformPerspective)||0;
this.force3D=(aL.defaultForce3D===false||!k)?false:aL.defaultForce3D||"auto"},av=d.SVGElement,M,a0=function(bg,i,bd){var be=a1.createElementNS("http://www.w3.org/2000/svg",bg),bf=/([a-z])([A-Z])/g,bh;
for(bh in bd){be.setAttributeNS(null,bh.replace(bf,"$1-$2").toLowerCase(),bd[bh])
}i.appendChild(be);return be},P=a1.documentElement||{},aa=(function(){var be=Z||(/Android/i.test(aB)&&!d.chrome),i,bd,p;
if(a1.createElementNS&&!be){i=a0("svg",P);bd=a0("rect",i,{width:100,height:50,x:100});
p=bd.getBoundingClientRect().width;bd.style[ab]="50% 50%";bd.style[aX]="scaleX(0.5)";
be=(p===bd.getBoundingClientRect().width&&!(S&&k));P.removeChild(i)}return be})(),r=function(bn,bk,bw,bq,bi,be){var p=bn._gsTransform,bl=ar(bn,true),bh,bg,bf,bm,i,bv,bt,br,bp,bu,bs,bj,bo,bd;
if(p){bo=p.xOrigin;bd=p.yOrigin}if(!bq||(bh=bq.split(" ")).length<2){bt=bn.getBBox();
if(bt.x===0&&bt.y===0&&bt.width+bt.height===0){bt={x:parseFloat(bn.hasAttribute("x")?bn.getAttribute("x"):bn.hasAttribute("cx")?bn.getAttribute("cx"):0)||0,y:parseFloat(bn.hasAttribute("y")?bn.getAttribute("y"):bn.hasAttribute("cy")?bn.getAttribute("cy"):0)||0,width:0,height:0}
}bk=aO(bk).split(" ");bh=[(bk[0].indexOf("%")!==-1?parseFloat(bk[0])/100*bt.width:parseFloat(bk[0]))+bt.x,(bk[1].indexOf("%")!==-1?parseFloat(bk[1])/100*bt.height:parseFloat(bk[1]))+bt.y]
}bw.xOrigin=bm=parseFloat(bh[0]);bw.yOrigin=i=parseFloat(bh[1]);if(bq&&bl!==Y){bv=bl[0];
bt=bl[1];br=bl[2];bp=bl[3];bu=bl[4];bs=bl[5];bj=(bv*bp-bt*br);if(bj){bg=bm*(bp/bj)+i*(-br/bj)+((br*bs-bp*bu)/bj);
bf=bm*(-bt/bj)+i*(bv/bj)-((bv*bs-bt*bu)/bj);bm=bw.xOrigin=bh[0]=bg;i=bw.yOrigin=bh[1]=bf
}}if(p){if(be){bw.xOffset=p.xOffset;bw.yOffset=p.yOffset;p=bw}if(bi||(bi!==false&&aL.defaultSmoothOrigin!==false)){bg=bm-bo;
bf=i-bd;p.xOffset+=(bg*bl[0]+bf*bl[2])-bg;p.yOffset+=(bg*bl[1]+bf*bl[3])-bf}else{p.xOffset=p.yOffset=0
}}if(!be){bn.setAttribute("data-svg-origin",bh.join(" "))}},n=function(be){var i=a4("svg",this.ownerSVGElement.getAttribute("xmlns")||"http://www.w3.org/2000/svg"),bd=this.parentNode,p=this.nextSibling,bh=this.style.cssText,bg;
P.appendChild(i);i.appendChild(this);this.style.display="block";if(be){try{bg=this.getBBox();
this._originalGetBBox=this.getBBox;this.getBBox=n}catch(bf){}}else{if(this._originalGetBBox){bg=this._originalGetBBox()
}}if(p){bd.insertBefore(this,p)}else{bd.appendChild(this)}P.removeChild(i);this.style.cssText=bh;
return bg},aZ=function(p){try{return p.getBBox()}catch(i){return n.call(p,true)
}},v=function(i){return !!(av&&i.getCTM&&aZ(i)&&(!i.parentNode||i.ownerSVGElement))
},Y=[1,0,0,1,0,0],ar=function(bi,be){var bk=bi._gsTransform||new a5(),p=100000,i=bi.style,bh,bl,bf,bd,bg,bj;
if(aX){bl=I(bi,aF,null,true)}else{if(bi.currentStyle){bl=bi.currentStyle.filter.match(at);
bl=(bl&&bl.length===4)?[bl[0].substr(4),Number(bl[2].substr(4)),Number(bl[1].substr(4)),bl[3].substr(4),(bk.x||0),(bk.y||0)].join(","):""
}}bh=(!bl||bl==="none"||bl==="matrix(1, 0, 0, 1, 0, 0)");if(bh&&aX&&((bj=(aQ(bi).display==="none"))||!bi.parentNode)){if(bj){bd=i.display;
i.display="block"}if(!bi.parentNode){bg=1;P.appendChild(bi)}bl=I(bi,aF,null,true);
bh=(!bl||bl==="none"||bl==="matrix(1, 0, 0, 1, 0, 0)");if(bd){i.display=bd}else{if(bj){ae(i,"display")
}}if(bg){P.removeChild(bi)}}if(bk.svg||(bi.getCTM&&v(bi))){if(bh&&(i[aX]+"").indexOf("matrix")!==-1){bl=i[aX];
bh=0}bf=bi.getAttribute("transform");if(bh&&bf){if(bf.indexOf("matrix")!==-1){bl=bf;
bh=0}else{if(bf.indexOf("translate")!==-1){bl="matrix(1,0,0,1,"+bf.match(/(?:\-|\b)[\d\-\.e]+\b/gi).join(",")+")";
bh=0}}}}if(bh){return Y}bf=(bl||"").match(aY)||[];aj=bf.length;while(--aj>-1){bd=Number(bf[aj]);
bf[aj]=(bg=bd-(bd|=0))?((bg*p+(bg<0?-0.5:0.5))|0)/p+bd:bd}return(be&&bf.length>6)?[bf[0],bf[1],bf[4],bf[5],bf[12],bf[13]]:bf
},j=s.getTransform=function(bB,bo,bC,bn){if(bB._gsTransform&&bC&&!bn){return bB._gsTransform
}var bS=bC?bB._gsTransform||new a5():new a5(),bK=(bS.scaleX<0),bO=0.00002,bE=100000,by=k?parseFloat(I(bB,ab,bo,false,"0 0 0").split(" ")[2])||bS.zOrigin||0:0,p=parseFloat(aL.defaultTransformPerspective)||0,bD,bG,bA,bz,br,bR;
bS.svg=!!(bB.getCTM&&v(bB));if(bS.svg){r(bB,I(bB,ab,bo,false,"50% 50%")+"",bS,bB.getAttribute("data-svg-origin"));
M=aL.useSVGTransformAttr||aa}bD=ar(bB);if(bD!==Y){if(bD.length===16){var bi=bD[0],bL=bD[1],bu=bD[2],bl=bD[3],bg=bD[4],bJ=bD[5],bt=bD[6],bk=bD[7],bf=bD[8],bI=bD[9],bq=bD[10],be=bD[12],bH=bD[13],bp=bD[14],bj=bD[11],bm=Math.atan2(bt,bq),bx,bw,bv,bs,bd,bh;
if(bS.zOrigin){bp=-bS.zOrigin;be=bf*bp-bD[12];bH=bI*bp-bD[13];bp=bq*bp+bS.zOrigin-bD[14]
}bS.rotationX=bm*aN;if(bm){bd=Math.cos(-bm);bh=Math.sin(-bm);bx=bg*bd+bf*bh;bw=bJ*bd+bI*bh;
bv=bt*bd+bq*bh;bf=bg*-bh+bf*bd;bI=bJ*-bh+bI*bd;bq=bt*-bh+bq*bd;bj=bk*-bh+bj*bd;
bg=bx;bJ=bw;bt=bv}bm=Math.atan2(-bu,bq);bS.rotationY=bm*aN;if(bm){bd=Math.cos(-bm);
bh=Math.sin(-bm);bx=bi*bd-bf*bh;bw=bL*bd-bI*bh;bv=bu*bd-bq*bh;bI=bL*bh+bI*bd;bq=bu*bh+bq*bd;
bj=bl*bh+bj*bd;bi=bx;bL=bw;bu=bv}bm=Math.atan2(bL,bi);bS.rotation=bm*aN;if(bm){bd=Math.cos(-bm);
bh=Math.sin(-bm);bi=bi*bd+bg*bh;bw=bL*bd+bJ*bh;bJ=bL*-bh+bJ*bd;bt=bu*-bh+bt*bd;
bL=bw}if(bS.rotationX&&Math.abs(bS.rotationX)+Math.abs(bS.rotation)>359.9){bS.rotationX=bS.rotation=0;
bS.rotationY=180-bS.rotationY}bS.scaleX=((Math.sqrt(bi*bi+bL*bL)*bE+0.5)|0)/bE;
bS.scaleY=((Math.sqrt(bJ*bJ+bI*bI)*bE+0.5)|0)/bE;bS.scaleZ=((Math.sqrt(bt*bt+bq*bq)*bE+0.5)|0)/bE;
if(bS.rotationX||bS.rotationY){bS.skewX=0}else{bS.skewX=(bg||bJ)?Math.atan2(bg,bJ)*aN+bS.rotation:bS.skewX||0;
if(Math.abs(bS.skewX)>90&&Math.abs(bS.skewX)<270){if(bK){bS.scaleX*=-1;bS.skewX+=(bS.rotation<=0)?180:-180;
bS.rotation+=(bS.rotation<=0)?180:-180}else{bS.scaleY*=-1;bS.skewX+=(bS.skewX<=0)?180:-180
}}}bS.perspective=bj?1/((bj<0)?-bj:bj):0;bS.x=be;bS.y=bH;bS.z=bp;if(bS.svg){bS.x-=bS.xOrigin-(bS.xOrigin*bi-bS.yOrigin*bg);
bS.y-=bS.yOrigin-(bS.yOrigin*bL-bS.xOrigin*bJ)}}else{if((!k||bn||!bD.length||bS.x!==bD[4]||bS.y!==bD[5]||(!bS.rotationX&&!bS.rotationY))){var bF=(bD.length>=6),bQ=bF?bD[0]:1,bP=bD[1]||0,bN=bD[2]||0,bM=bF?bD[3]:1;
bS.x=bD[4]||0;bS.y=bD[5]||0;bA=Math.sqrt(bQ*bQ+bP*bP);bz=Math.sqrt(bM*bM+bN*bN);
br=(bQ||bP)?Math.atan2(bP,bQ)*aN:bS.rotation||0;bR=(bN||bM)?Math.atan2(bN,bM)*aN+br:bS.skewX||0;
if(Math.abs(bR)>90&&Math.abs(bR)<270){if(bK){bA*=-1;bR+=(br<=0)?180:-180;br+=(br<=0)?180:-180
}else{bz*=-1;bR+=(bR<=0)?180:-180}}bS.scaleX=bA;bS.scaleY=bz;bS.rotation=br;bS.skewX=bR;
if(k){bS.rotationX=bS.rotationY=bS.z=0;bS.perspective=p;bS.scaleZ=1}if(bS.svg){bS.x-=bS.xOrigin-(bS.xOrigin*bQ+bS.yOrigin*bN);
bS.y-=bS.yOrigin-(bS.xOrigin*bP+bS.yOrigin*bM)}}}bS.zOrigin=by;for(bG in bS){if(bS[bG]<bO){if(bS[bG]>-bO){bS[bG]=0
}}}}if(bC){bB._gsTransform=bS;if(bS.svg){if(M&&bB.style[aX]){y.delayedCall(0.001,function(){ae(bB.style,aX)
})}else{if(!M&&bB.getAttribute("transform")){y.delayedCall(0.001,function(){bB.removeAttribute("transform")
})}}}}return bS},aH=function(bm){var bo=this.data,bx=-bo.rotation*ac,p=bx+bo.skewX*ac,bh=100000,by=((Math.cos(bx)*bo.scaleX*bh)|0)/bh,bw=((Math.sin(bx)*bo.scaleX*bh)|0)/bh,bv=((Math.sin(p)*-bo.scaleY*bh)|0)/bh,bt=((Math.cos(p)*bo.scaleY*bh)|0)/bh,br=this.t.style,bg=this.t.currentStyle,bi,bz;
if(!bg){return}bz=bw;bw=-bv;bv=-bz;bi=bg.filter;br.filter="";var bk=this.t.offsetWidth,bq=this.t.offsetHeight,bs=(bg.position!=="absolute"),bp="progid:DXImageTransform.Microsoft.Matrix(M11="+by+", M12="+bw+", M21="+bv+", M22="+bt,be=bo.x+(bk*bo.xPercent/100),bd=bo.y+(bq*bo.yPercent/100),bl,bj;
if(bo.ox!=null){bl=((bo.oxp)?bk*bo.ox*0.01:bo.ox)-bk/2;bj=((bo.oyp)?bq*bo.oy*0.01:bo.oy)-bq/2;
be+=bl-(bl*by+bj*bw);bd+=bj-(bl*bv+bj*bt)}if(!bs){bp+=", sizingMethod='auto expand')"
}else{bl=(bk/2);bj=(bq/2);bp+=", Dx="+(bl-(bl*by+bj*bw)+be)+", Dy="+(bj-(bl*bv+bj*bt)+bd)+")"
}if(bi.indexOf("DXImageTransform.Microsoft.Matrix(")!==-1){br.filter=bi.replace(R,bp)
}else{br.filter=bp+" "+bi}if(bm===0||bm===1){if(by===1){if(bw===0){if(bv===0){if(bt===1){if(!bs||bp.indexOf("Dx=0, Dy=0")!==-1){if(!aR.test(bi)||parseFloat(RegExp.$1)===100){if(bi.indexOf("gradient("&&bi.indexOf("Alpha"))===-1){br.removeAttribute("filter")
}}}}}}}}if(!bs){var bf=(Z<8)?1:-1,bn,i,bu;bl=bo.ieOffsetX||0;bj=bo.ieOffsetY||0;
bo.ieOffsetX=Math.round((bk-((by<0?-by:by)*bk+(bw<0?-bw:bw)*bq))/2+be);bo.ieOffsetY=Math.round((bq-((bt<0?-bt:bt)*bq+(bv<0?-bv:bv)*bk))/2+bd);
for(aj=0;aj<4;aj++){i=ao[aj];bn=bg[i];bz=(bn.indexOf("px")!==-1)?parseFloat(bn):N(this.t,i,parseFloat(bn),bn.replace(aw,""))||0;
if(bz!==bo[i]){bu=(aj<2)?-bo.ieOffsetX:-bo.ieOffsetY}else{bu=(aj<2)?bl-bo.ieOffsetX:bj-bo.ieOffsetY
}br[i]=(bo[i]=Math.round(bz-bu*((aj===0||aj===2)?1:bf)))+"px"}}},a2=s.set3DTransformRatio=s.setTransformRatio=function(bE){var bF=this.data,bG=this.t.style,br=bF.rotation,bq=bF.rotationX,bp=bF.rotationY,bg=bF.scaleX,bf=bF.scaleY,be=bF.scaleZ,bD=bF.x,bC=bF.y,bB=bF.z,p=bF.svg,bA=bF.perspective,bJ=bF.force3D,bN=bF.skewY,bO=bF.skewX,by,bk,bi,bh,bL,bK,bI,bw,bu,bt,bo,bn,bl,bz,bM,bd,bm,bx,bs,bj,i,bv,bH;
if(bN){bO+=bN;br+=bN}if(((((bE===1||bE===0)&&bJ==="auto"&&(this.tween._totalTime===this.tween._totalDuration||!this.tween._totalTime))||!bJ)&&!bB&&!bA&&!bp&&!bq&&be===1)||(M&&p)||!k){if(br||bO||p){br*=ac;
bv=bO*ac;bH=100000;bk=Math.cos(br)*bg;bL=Math.sin(br)*bg;bi=Math.sin(br-bv)*-bf;
bK=Math.cos(br-bv)*bf;if(bv&&bF.skewType==="simple"){by=Math.tan(bv-bN*ac);by=Math.sqrt(1+by*by);
bi*=by;bK*=by;if(bN){by=Math.tan(bN*ac);by=Math.sqrt(1+by*by);bk*=by;bL*=by}}if(p){bD+=bF.xOrigin-(bF.xOrigin*bk+bF.yOrigin*bi)+bF.xOffset;
bC+=bF.yOrigin-(bF.xOrigin*bL+bF.yOrigin*bK)+bF.yOffset;if(M&&(bF.xPercent||bF.yPercent)){bM=this.t.getBBox();
bD+=bF.xPercent*0.01*bM.width;bC+=bF.yPercent*0.01*bM.height}bM=0.000001;if(bD<bM){if(bD>-bM){bD=0
}}if(bC<bM){if(bC>-bM){bC=0}}}bs=(((bk*bH)|0)/bH)+","+(((bL*bH)|0)/bH)+","+(((bi*bH)|0)/bH)+","+(((bK*bH)|0)/bH)+","+bD+","+bC+")";
if(p&&M){this.t.setAttribute("transform","matrix("+bs)}else{bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix(":"matrix(")+bs
}}else{bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix(":"matrix(")+bg+",0,0,"+bf+","+bD+","+bC+")"
}return}if(S){bM=0.0001;if(bg<bM&&bg>-bM){bg=be=0.00002}if(bf<bM&&bf>-bM){bf=be=0.00002
}if(bA&&!bF.z&&!bF.rotationX&&!bF.rotationY){bA=0}}if(br||bO){br*=ac;bd=bk=Math.cos(br);
bm=bL=Math.sin(br);if(bO){br-=bO*ac;bd=Math.cos(br);bm=Math.sin(br);if(bF.skewType==="simple"){by=Math.tan((bO-bN)*ac);
by=Math.sqrt(1+by*by);bd*=by;bm*=by;if(bF.skewY){by=Math.tan(bN*ac);by=Math.sqrt(1+by*by);
bk*=by;bL*=by}}}bi=-bm;bK=bd}else{if(!bp&&!bq&&be===1&&!bA&&!p){bG[aX]=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) translate3d(":"translate3d(")+bD+"px,"+bC+"px,"+bB+"px)"+((bg!==1||bf!==1)?" scale("+bg+","+bf+")":"");
return}else{bk=bK=1;bi=bL=0}}bt=1;bh=bI=bw=bu=bo=bn=0;bl=(bA)?-1/bA:0;bz=bF.zOrigin;
bM=0.000001;bj=",";i="0";br=bp*ac;if(br){bd=Math.cos(br);bm=Math.sin(br);bw=-bm;
bo=bl*-bm;bh=bk*bm;bI=bL*bm;bt=bd;bl*=bd;bk*=bd;bL*=bd}br=bq*ac;if(br){bd=Math.cos(br);
bm=Math.sin(br);by=bi*bd+bh*bm;bx=bK*bd+bI*bm;bu=bt*bm;bn=bl*bm;bh=bi*-bm+bh*bd;
bI=bK*-bm+bI*bd;bt=bt*bd;bl=bl*bd;bi=by;bK=bx}if(be!==1){bh*=be;bI*=be;bt*=be;bl*=be
}if(bf!==1){bi*=bf;bK*=bf;bu*=bf;bn*=bf}if(bg!==1){bk*=bg;bL*=bg;bw*=bg;bo*=bg}if(bz||p){if(bz){bD+=bh*-bz;
bC+=bI*-bz;bB+=bt*-bz+bz}if(p){bD+=bF.xOrigin-(bF.xOrigin*bk+bF.yOrigin*bi)+bF.xOffset;
bC+=bF.yOrigin-(bF.xOrigin*bL+bF.yOrigin*bK)+bF.yOffset}if(bD<bM&&bD>-bM){bD=i}if(bC<bM&&bC>-bM){bC=i
}if(bB<bM&&bB>-bM){bB=0}}bs=((bF.xPercent||bF.yPercent)?"translate("+bF.xPercent+"%,"+bF.yPercent+"%) matrix3d(":"matrix3d(");
bs+=((bk<bM&&bk>-bM)?i:bk)+bj+((bL<bM&&bL>-bM)?i:bL)+bj+((bw<bM&&bw>-bM)?i:bw);
bs+=bj+((bo<bM&&bo>-bM)?i:bo)+bj+((bi<bM&&bi>-bM)?i:bi)+bj+((bK<bM&&bK>-bM)?i:bK);
if(bq||bp||be!==1){bs+=bj+((bu<bM&&bu>-bM)?i:bu)+bj+((bn<bM&&bn>-bM)?i:bn)+bj+((bh<bM&&bh>-bM)?i:bh);
bs+=bj+((bI<bM&&bI>-bM)?i:bI)+bj+((bt<bM&&bt>-bM)?i:bt)+bj+((bl<bM&&bl>-bM)?i:bl)+bj
}else{bs+=",0,0,0,0,1,0,"}bs+=bD+bj+bC+bj+bB+bj+(bA?(1+(-bB/bA)):1)+")";bG[aX]=bs
};ad=a5.prototype;ad.x=ad.y=ad.z=ad.skewX=ad.skewY=ad.rotation=ad.rotationX=ad.rotationY=ad.zOrigin=ad.xPercent=ad.yPercent=ad.xOffset=ad.yOffset=0;
ad.scaleX=ad.scaleY=ad.scaleZ=1;U("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin",{parser:function(bp,bC,bq,bg,bv,bj,br){if(bg._lastParsedTransform===br){return bv
}bg._lastParsedTransform=br;var bo=(br.scale&&typeof(br.scale)==="function")?br.scale:0,bx;
if(typeof(br[bq])==="function"){bx=br[bq];br[bq]=bC}if(bo){br.scale=bo(aT,bp)}var bu=bp._gsTransform,bB=bp.style,by=0.000001,bA=ay.length,bn=br,bk={},be="transformOrigin",bf=j(bp,W,true,bn.parseTransform),bi=bn.transform&&((typeof(bn.transform)==="function")?bn.transform(aT,aI):bn.transform),bd,bw,bh,bD,bt,bm,bl,bz,bs;
bg._transform=bf;if(bi&&typeof(bi)==="string"&&aX){bw=ba.style;bw[aX]=bi;bw.display="block";
bw.position="absolute";a1.body.appendChild(ba);bd=j(ba,null,false);if(bf.svg){bm=bf.xOrigin;
bl=bf.yOrigin;bd.x-=bf.xOffset;bd.y-=bf.yOffset;if(bn.transformOrigin||bn.svgOrigin){bi={};
r(bp,aO(bn.transformOrigin),bi,bn.svgOrigin,bn.smoothOrigin,true);bm=bi.xOrigin;
bl=bi.yOrigin;bd.x-=bi.xOffset-bf.xOffset;bd.y-=bi.yOffset-bf.yOffset}if(bm||bl){bz=ar(ba,true);
bd.x-=bm-(bm*bz[0]+bl*bz[2]);bd.y-=bl-(bm*bz[1]+bl*bz[3])}}a1.body.removeChild(ba);
if(!bd.perspective){bd.perspective=bf.perspective}if(bn.xPercent!=null){bd.xPercent=D(bn.xPercent,bf.xPercent)
}if(bn.yPercent!=null){bd.yPercent=D(bn.yPercent,bf.yPercent)}}else{if(typeof(bn)==="object"){bd={scaleX:D((bn.scaleX!=null)?bn.scaleX:bn.scale,bf.scaleX),scaleY:D((bn.scaleY!=null)?bn.scaleY:bn.scale,bf.scaleY),scaleZ:D(bn.scaleZ,bf.scaleZ),x:D(bn.x,bf.x),y:D(bn.y,bf.y),z:D(bn.z,bf.z),xPercent:D(bn.xPercent,bf.xPercent),yPercent:D(bn.yPercent,bf.yPercent),perspective:D(bn.transformPerspective,bf.perspective)};
bt=bn.directionalRotation;if(bt!=null){if(typeof(bt)==="object"){for(bw in bt){bn[bw]=bt[bw]
}}else{bn.rotation=bt}}if(typeof(bn.x)==="string"&&bn.x.indexOf("%")!==-1){bd.x=0;
bd.xPercent=D(bn.x,bf.xPercent)}if(typeof(bn.y)==="string"&&bn.y.indexOf("%")!==-1){bd.y=0;
bd.yPercent=D(bn.y,bf.yPercent)}bd.rotation=a7(("rotation" in bn)?bn.rotation:("shortRotation" in bn)?bn.shortRotation+"_short":("rotationZ" in bn)?bn.rotationZ:bf.rotation,bf.rotation,"rotation",bk);
if(k){bd.rotationX=a7(("rotationX" in bn)?bn.rotationX:("shortRotationX" in bn)?bn.shortRotationX+"_short":bf.rotationX||0,bf.rotationX,"rotationX",bk);
bd.rotationY=a7(("rotationY" in bn)?bn.rotationY:("shortRotationY" in bn)?bn.shortRotationY+"_short":bf.rotationY||0,bf.rotationY,"rotationY",bk)
}bd.skewX=a7(bn.skewX,bf.skewX);bd.skewY=a7(bn.skewY,bf.skewY)}}if(k&&bn.force3D!=null){bf.force3D=bn.force3D;
bD=true}bf.skewType=bn.skewType||bf.skewType||aL.defaultSkewType;bh=(bf.force3D||bf.z||bf.rotationX||bf.rotationY||bd.z||bd.rotationX||bd.rotationY||bd.perspective);
if(!bh&&bn.scale!=null){bd.scaleZ=1}while(--bA>-1){bs=ay[bA];bi=bd[bs]-bf[bs];if(bi>by||bi<-by||bn[bs]!=null||bc[bs]!=null){bD=true;
bv=new A(bf,bs,bf[bs],bi,bv);if(bs in bk){bv.e=bk[bs]}bv.xs0=0;bv.plugin=bj;bg._overwriteProps.push(bv.n)
}}bi=bn.transformOrigin;if(bf.svg&&(bi||bn.svgOrigin)){bm=bf.xOffset;bl=bf.yOffset;
r(bp,aO(bi),bd,bn.svgOrigin,bn.smoothOrigin);bv=x(bf,"xOrigin",(bu?bf:bd).xOrigin,bd.xOrigin,bv,be);
bv=x(bf,"yOrigin",(bu?bf:bd).yOrigin,bd.yOrigin,bv,be);if(bm!==bf.xOffset||bl!==bf.yOffset){bv=x(bf,"xOffset",(bu?bm:bf.xOffset),bf.xOffset,bv,be);
bv=x(bf,"yOffset",(bu?bl:bf.yOffset),bf.yOffset,bv,be)}bi="0px 0px"}if(bi||(k&&bh&&bf.zOrigin)){if(aX){bD=true;
bs=ab;bi=(bi||I(bp,bs,W,false,"50% 50%"))+"";bv=new A(bB,bs,0,0,bv,-1,be);bv.b=bB[bs];
bv.plugin=bj;if(k){bw=bf.zOrigin;bi=bi.split(" ");bf.zOrigin=((bi.length>2&&!(bw!==0&&bi[2]==="0px"))?parseFloat(bi[2]):bw)||0;
bv.xs0=bv.e=bi[0]+" "+(bi[1]||"50%")+" 0px";bv=new A(bf,"zOrigin",0,0,bv,-1,bv.n);
bv.b=bw;bv.xs0=bv.e=bf.zOrigin}else{bv.xs0=bv.e=bi}}else{aO(bi+"",bf)}}if(bD){bg._transformType=(!(bf.svg&&M)&&(bh||this._transformType===3))?3:2
}if(bx){br[bq]=bx}if(bo){br.scale=bo}return bv},prefix:true});U("boxShadow",{defaultValue:"0px 0px 0px 0px #999",prefix:true,color:true,multi:true,keyword:"inset"});
U("borderRadius",{defaultValue:"0px",parser:function(bp,by,bq,bh,br,bk){by=this.format(by);
var bj=["borderTopLeftRadius","borderTopRightRadius","borderBottomRightRadius","borderBottomLeftRadius"],bv=bp.style,bz,bt,bC,bl,bA,bB,bd,be,bo,bu,bx,bm,bi,bg,bw,bf;
bo=parseFloat(bp.offsetWidth);bu=parseFloat(bp.offsetHeight);bz=by.split(" ");for(bt=0;
bt<bj.length;bt++){if(this.p.indexOf("border")){bj[bt]=X(bj[bt])}bA=bl=I(bp,bj[bt],W,false,"0px");
if(bA.indexOf(" ")!==-1){bl=bA.split(" ");bA=bl[0];bl=bl[1]}bB=bC=bz[bt];bd=parseFloat(bA);
bm=bA.substr((bd+"").length);bi=(bB.charAt(1)==="=");if(bi){be=parseInt(bB.charAt(0)+"1",10);
bB=bB.substr(2);be*=parseFloat(bB);bx=bB.substr((be+"").length-(be<0?1:0))||""}else{be=parseFloat(bB);
bx=bB.substr((be+"").length)}if(bx===""){bx=g[bq]||bm}if(bx!==bm){bg=N(bp,"borderLeft",bd,bm);
bw=N(bp,"borderTop",bd,bm);if(bx==="%"){bA=(bg/bo*100)+"%";bl=(bw/bu*100)+"%"}else{if(bx==="em"){bf=N(bp,"borderLeft",1,"em");
bA=(bg/bf)+"em";bl=(bw/bf)+"em"}else{bA=bg+"px";bl=bw+"px"}}if(bi){bB=(parseFloat(bA)+be)+bx;
bC=(parseFloat(bl)+be)+bx}}br=q(bv,bj[bt],bA+" "+bl,bB+" "+bC,false,"0px",br)}return br
},prefix:true,formatter:aC("0px 0px 0px 0px",false,true)});U("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius",{defaultValue:"0px",parser:function(i,bg,bf,bh,be,bd){return q(i.style,bf,this.format(I(i,bf,W,false,"0px 0px")),this.format(bg),false,"0px",be)
},prefix:true,formatter:aC("0px 0px",false,true)});U("backgroundPosition",{defaultValue:"0 0",parser:function(bt,bk,bf,bg,bu,bi){var be="background-position",bj=(W||aQ(bt,null)),br=this.format(((bj)?Z?bj.getPropertyValue(be+"-x")+" "+bj.getPropertyValue(be+"-y"):bj.getPropertyValue(be):bt.currentStyle.backgroundPositionX+" "+bt.currentStyle.backgroundPositionY)||"0 0"),bq=this.format(bk),bm,bl,bh,bo,bn,bd;
if((br.indexOf("%")!==-1)!==(bq.indexOf("%")!==-1)&&bq.split(",").length<2){bd=I(bt,"backgroundImage").replace(ah,"");
if(bd&&bd!=="none"){bm=br.split(" ");bl=bq.split(" ");G.setAttribute("src",bd);
bh=2;while(--bh>-1){br=bm[bh];bo=(br.indexOf("%")!==-1);if(bo!==(bl[bh].indexOf("%")!==-1)){bn=(bh===0)?bt.offsetWidth-G.width:bt.offsetHeight-G.height;
bm[bh]=bo?(parseFloat(br)/100*bn)+"px":(parseFloat(br)/bn*100)+"%"}}br=bm.join(" ")
}}return this.parseComplex(bt.style,br,bq,bu,bi)},formatter:aO});U("backgroundSize",{defaultValue:"0 0",formatter:function(i){i+="";
return aO(i.indexOf(" ")===-1?i+" "+i:i)}});U("perspective",{defaultValue:"0px",prefix:true});
U("perspectiveOrigin",{defaultValue:"50% 50%",prefix:true});U("transformStyle",{prefix:true});
U("backfaceVisibility",{prefix:true});U("userSelect",{prefix:true});U("margin",{parser:aU("marginTop,marginRight,marginBottom,marginLeft")});
U("padding",{parser:aU("paddingTop,paddingRight,paddingBottom,paddingLeft")});U("clip",{defaultValue:"rect(0px,0px,0px,0px)",parser:function(bj,bh,i,be,bk,bf){var bi,bg,bd;
if(Z<9){bg=bj.currentStyle;bd=Z<8?" ":",";bi="rect("+bg.clipTop+bd+bg.clipRight+bd+bg.clipBottom+bd+bg.clipLeft+")";
bh=this.format(bh).split(",").join(bd)}else{bi=this.format(I(bj,this.p,W,false,this.dflt));
bh=this.format(bh)}return this.parseComplex(bj.style,bi,bh,bk,bf)}});U("textShadow",{defaultValue:"0px 0px 0px #999",color:true,multi:true});
U("autoRound,strictUnits",{parser:function(i,bf,be,bg,bd){return bd}});U("border",{defaultValue:"0px solid #000",parser:function(bj,bg,i,bd,bk,bf){var bh=I(bj,"borderTopWidth",W,false,"0px"),be=this.format(bg).split(" "),bi=be[0].replace(aw,"");
if(bi!=="px"){bh=(parseFloat(bh)/N(bj,"borderTopWidth",1,bi))+bi}return this.parseComplex(bj.style,this.format(bh+" "+I(bj,"borderTopStyle",W,false,"solid")+" "+I(bj,"borderTopColor",W,false,"#000")),be.join(" "),bk,bf)
},color:true,formatter:function(p){var i=p.split(" ");return i[0]+" "+(i[1]||"solid")+" "+(p.match(aG)||["#000"])[0]
}});U("borderWidth",{parser:aU("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")});
U("float,cssFloat,styleFloat",{parser:function(i,bh,bg,bi,bf,be){var bd=i.style,bj=("cssFloat" in bd)?"cssFloat":"styleFloat";
return new A(bd,bj,0,0,bf,-1,bg,false,0,bd[bj],bh)}});var ai=function(i){var p=this.t,be=p.filter||I(this.data,"filter")||"",bf=(this.s+this.c*i)|0,bd;
if(bf===100){if(be.indexOf("atrix(")===-1&&be.indexOf("radient(")===-1&&be.indexOf("oader(")===-1){p.removeAttribute("filter");
bd=(!I(this.data,"filter"))}else{p.filter=be.replace(au,"");bd=true}}if(!bd){if(this.xn1){p.filter=be=be||("alpha(opacity="+bf+")")
}if(be.indexOf("pacity")===-1){if(bf!==0||!this.xn1){p.filter=be+" alpha(opacity="+bf+")"
}}else{p.filter=be.replace(aR,"opacity="+bf)}}};U("opacity,alpha,autoAlpha",{defaultValue:"1",parser:function(bj,bh,be,bf,bk,bg){var bi=parseFloat(I(bj,"opacity",W,false,"1")),bd=bj.style,i=(be==="autoAlpha");
if(typeof(bh)==="string"&&bh.charAt(1)==="="){bh=((bh.charAt(0)==="-")?-1:1)*parseFloat(bh.substr(2))+bi
}if(i&&bi===1&&I(bj,"visibility",W)==="hidden"&&bh!==0){bi=0}if(af){bk=new A(bd,"opacity",bi,bh-bi,bk)
}else{bk=new A(bd,"opacity",bi*100,(bh-bi)*100,bk);bk.xn1=i?1:0;bd.zoom=1;bk.type=2;
bk.b="alpha(opacity="+bk.s+")";bk.e="alpha(opacity="+(bk.s+bk.c)+")";bk.data=bj;
bk.plugin=bg;bk.setRatio=ai}if(i){bk=new A(bd,"visibility",0,0,bk,-1,null,false,0,((bi!==0)?"inherit":"hidden"),((bh===0)?"hidden":"inherit"));
bk.xs0="inherit";bf._overwriteProps.push(bk.n);bf._overwriteProps.push(be)}return bk
}});var ae=function(i,bd){if(bd){if(i.removeProperty){if(bd.substr(0,2)==="ms"||bd.substr(0,6)==="webkit"){bd="-"+bd
}i.removeProperty(bd.replace(am,"-$1").toLowerCase())}else{i.removeAttribute(bd)
}}},B=function(p){this.t._gsClassPT=this;if(p===1||p===0){this.t.setAttribute("class",(p===0)?this.b:this.e);
var i=this.data,bd=this.t.style;while(i){if(!i.v){ae(bd,i.p)}else{bd[i.p]=i.v}i=i._next
}if(p===1&&this.t._gsClassPT===this){this.t._gsClassPT=null}}else{if(this.t.getAttribute("class")!==this.e){this.t.setAttribute("class",this.e)
}}};U("className",{parser:function(bo,bj,bd,bg,bp,bi,bk){var bm=bo.getAttribute("class")||"",be=bo.style.cssText,bf,bn,i,bh,bl;
bp=bg._classNamePT=new A(bo,bd,0,0,bp,2);bp.setRatio=B;bp.pr=-11;aJ=true;bp.b=bm;
bn=aK(bo,W);i=bo._gsClassPT;if(i){bh={};bl=i.data;while(bl){bh[bl.p]=1;bl=bl._next
}i.setRatio(1)}bo._gsClassPT=bp;bp.e=(bj.charAt(1)!=="=")?bj:bm.replace(new RegExp("(?:\\s|^)"+bj.substr(2)+"(?![\\w-])"),"")+((bj.charAt(0)==="+")?" "+bj.substr(2):"");
bo.setAttribute("class",bp.e);bf=w(bo,bn,aK(bo),bk,bh);bo.setAttribute("class",bm);
bp.data=bf.firstMPT;bo.style.cssText=be;bp=bp.xfirst=bg.parse(bo,bf.difs,bp,bi);
return bp}});var Q=function(be){if(be===1||be===0){if(this.data._totalTime===this.data._totalDuration&&this.data.data!=="isFromStart"){var bh=this.t.style,bk=h.transform.parse,bd,bj,bg,bi,bf;
if(this.e==="all"){bh.cssText="";bi=true}else{bd=this.e.split(" ").join("").split(",");
bg=bd.length;while(--bg>-1){bj=bd[bg];if(h[bj]){if(h[bj].parse===bk){bi=true}else{bj=(bj==="transformOrigin")?ab:h[bj].p
}}ae(bh,bj)}}if(bi){ae(bh,aX);bf=this.t._gsTransform;if(bf){if(bf.svg){this.t.removeAttribute("data-svg-origin");
this.t.removeAttribute("transform")}delete this.t._gsTransform}}}}};U("clearProps",{parser:function(i,bf,be,bg,bd){bd=new A(i,be,0,0,bd,2);
bd.setRatio=Q;bd.e=bf;bd.pr=-10;bd.data=bg._tween;aJ=true;return bd}});ad="bezier,throwProps,physicsProps,physics2D".split(",");
aj=ad.length;while(aj--){o(ad[aj])}ad=aL.prototype;ad._firstPT=ad._lastParsedTransform=ad._transform=null;
ad._onInitTween=function(bg,bi,bn,bf){if(!bg.nodeType){return false}this._target=aI=bg;
this._tween=bn;this._vars=bi;aT=bf;K=bi.autoRound;aJ=false;g=bi.suffixMap||aL.suffixMap;
W=aQ(bg,"");a9=this._overwriteProps;var i=bg.style,bm,bo,bk,be,bl,bd,bj,p,bh;if(aM){if(i.zIndex===""){bm=I(bg,"zIndex",W);
if(bm==="auto"||bm===""){this._addLazySet(i,"zIndex",0)}}}if(typeof(bi)==="string"){be=i.cssText;
bm=aK(bg,W);i.cssText=be+";"+bi;bm=w(bg,bm,aK(bg)).difs;if(!af&&t.test(bi)){bm.opacity=parseFloat(RegExp.$1)
}bi=bm;i.cssText=be}if(bi.className){this._firstPT=bo=h.className.parse(bg,bi.className,"className",this,null,null,bi)
}else{this._firstPT=bo=this.parse(bg,bi,null)}if(this._transformType){bh=(this._transformType===3);
if(!aX){i.zoom=1}else{if(O){aM=true;if(i.zIndex===""){bj=I(bg,"zIndex",W);if(bj==="auto"||bj===""){this._addLazySet(i,"zIndex",0)
}}if(u){this._addLazySet(i,"WebkitBackfaceVisibility",this._vars.WebkitBackfaceVisibility||(bh?"visible":"hidden"))
}}}bk=bo;while(bk&&bk._next){bk=bk._next}p=new A(bg,"transform",0,0,null,2);this._linkCSSP(p,null,bk);
p.setRatio=aX?a2:aH;p.data=this._transform||j(bg,W,true);p.tween=bn;p.pr=-1;a9.pop()
}if(aJ){while(bo){bd=bo._next;bk=be;while(bk&&bk.pr>bo.pr){bk=bk._next}if((bo._prev=bk?bk._prev:bl)){bo._prev._next=bo
}else{be=bo}if((bo._next=bk)){bk._prev=bo}else{bl=bo}bo=bd}this._firstPT=be}return true
};ad.parse=function(bj,bk,br,bh){var bd=bj.style,be,bg,bf,i,bo,bm,bl,bq,bi,bp;for(be in bk){bm=bk[be];
if(typeof(bm)==="function"){bm=bm(aT,aI)}bg=h[be];if(bg){br=bg.parse(bj,bm,be,this,br,bh,bk)
}else{bo=I(bj,be,W)+"";bi=(typeof(bm)==="string");if(be==="color"||be==="fill"||be==="stroke"||be.indexOf("Color")!==-1||(bi&&ag.test(bm))){if(!bi){bm=a6(bm);
bm=((bm.length>3)?"rgba(":"rgb(")+bm.join(",")+")"}br=q(bd,be,bo,bm,true,"transparent",br,0,bh)
}else{if(bi&&an.test(bm)){br=q(bd,be,bo,bm,true,null,br,0,bh)}else{bf=parseFloat(bo);
bl=(bf||bf===0)?bo.substr((bf+"").length):"";if(bo===""||bo==="auto"){if(be==="width"||be==="height"){bf=aS(bj,be,W);
bl="px"}else{if(be==="left"||be==="top"){bf=l(bj,be,W);bl="px"}else{bf=(be!=="opacity")?0:1;
bl=""}}}bp=(bi&&bm.charAt(1)==="=");if(bp){i=parseInt(bm.charAt(0)+"1",10);bm=bm.substr(2);
i*=parseFloat(bm);bq=bm.replace(aw,"")}else{i=parseFloat(bm);bq=bi?bm.replace(aw,""):""
}if(bq===""){bq=(be in g)?g[be]:bl}bm=(i||i===0)?(bp?i+bf:i)+bq:bk[be];if(bl!==bq){if(bq!==""){if(i||i===0){if(bf){bf=N(bj,be,bf,bl);
if(bq==="%"){bf/=N(bj,be,100,"%")/100;if(bk.strictUnits!==true){bo=bf+"%"}}else{if(bq==="em"||bq==="rem"||bq==="vw"||bq==="vh"){bf/=N(bj,be,1,bq)
}else{if(bq!=="px"){i=N(bj,be,i,bq);bq="px"}}}if(bp){if(i||i===0){bm=(i+bf)+bq}}}}}}if(bp){i+=bf
}if((bf||bf===0)&&(i||i===0)){br=new A(bd,be,bf,i-bf,br,0,be,(K!==false&&(bq==="px"||be==="zIndex")),0,bo,bm);
br.xs0=bq}else{if(bd[be]===undefined||!bm&&(bm+""==="NaN"||bm==null)){az("invalid "+be+" tween value: "+bk[be])
}else{br=new A(bd,be,i||bf||0,0,br,-1,be,false,0,bo,bm);br.xs0=(bm==="none"&&(be==="display"||be.indexOf("Style")!==-1))?bo:bm
}}}}}if(bh){if(br&&!br.plugin){br.plugin=bh}}}return br};ad.setRatio=function(p){var bf=this._firstPT,be=0.000001,bh,bg,bd;
if(p===1&&(this._tween._time===this._tween._duration||this._tween._time===0)){while(bf){if(bf.type!==2){if(bf.r&&bf.type!==-1){bh=Math.round(bf.s+bf.c);
if(!bf.type){bf.t[bf.p]=bh+bf.xs0}else{if(bf.type===1){bd=bf.l;bg=bf.xs0+bh+bf.xs1;
for(bd=1;bd<bf.l;bd++){bg+=bf["xn"+bd]+bf["xs"+(bd+1)]}bf.t[bf.p]=bg}}}else{bf.t[bf.p]=bf.e
}}else{bf.setRatio(p)}bf=bf._next}}else{if(p||!(this._tween._time===this._tween._duration||this._tween._time===0)||this._tween._rawPrevTime===-0.000001){while(bf){bh=bf.c*p+bf.s;
if(bf.r){bh=Math.round(bh)}else{if(bh<be){if(bh>-be){bh=0}}}if(!bf.type){bf.t[bf.p]=bh+bf.xs0
}else{if(bf.type===1){bd=bf.l;if(bd===2){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2
}else{if(bd===3){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3}else{if(bd===4){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3+bf.xn3+bf.xs4
}else{if(bd===5){bf.t[bf.p]=bf.xs0+bh+bf.xs1+bf.xn1+bf.xs2+bf.xn2+bf.xs3+bf.xn3+bf.xs4+bf.xn4+bf.xs5
}else{bg=bf.xs0+bh+bf.xs1;for(bd=1;bd<bf.l;bd++){bg+=bf["xn"+bd]+bf["xs"+(bd+1)]
}bf.t[bf.p]=bg}}}}}else{if(bf.type===-1){bf.t[bf.p]=bf.xs0}else{if(bf.setRatio){bf.setRatio(p)
}}}}bf=bf._next}}else{while(bf){if(bf.type!==2){bf.t[bf.p]=bf.b}else{bf.setRatio(p)
}bf=bf._next}}}};ad._enableTransforms=function(i){this._transform=this._transform||j(this._target,W,true);
this._transformType=(!(this._transform.svg&&M)&&(i||this._transformType===3))?3:2
};var ap=function(i){this.t[this.p]=this.e;this.data._linkCSSP(this,this._next,null,true)
};ad._addLazySet=function(bd,bf,i){var be=this._firstPT=new A(bd,bf,0,0,this._firstPT,2);
be.e=i;be.setRatio=ap;be.data=this};ad._linkCSSP=function(be,p,bd,i){if(be){if(p){p._prev=be
}if(be._next){be._next._prev=be._prev}if(be._prev){be._prev._next=be._next}else{if(this._firstPT===be){this._firstPT=be._next;
i=true}}if(bd){bd._next=be}else{if(!i&&this._firstPT===null){this._firstPT=be}}be._next=p;
be._prev=bd}return be};ad._mod=function(p){var i=this._firstPT;while(i){if(typeof(p[i.p])==="function"&&p[i.p]===Math.round){i.r=1
}i=i._next}};ad._kill=function(bf){var bg=bf,be,bd,i;if(bf.autoAlpha||bf.alpha){bg={};
for(bd in bf){bg[bd]=bf[bd]}bg.opacity=1;if(bg.autoAlpha){bg.visibility=1}}if(bf.className&&(be=this._classNamePT)){i=be.xfirst;
if(i&&i._prev){this._linkCSSP(i._prev,be._next,i._prev._prev)}else{if(i===this._firstPT){this._firstPT=be._next
}}if(be._next){this._linkCSSP(be._next,be._next._next,i._prev)}this._classNamePT=null
}be=this._firstPT;while(be){if(be.plugin&&be.plugin!==bd&&be.plugin._kill){be.plugin._kill(bf);
bd=be.plugin}be=be._next}return L.prototype._kill.call(this,bg)};var a8=function(bh,bg,p){var be,bd,bi,bf;
if(bh.slice){bd=bh.length;while(--bd>-1){a8(bh[bd],bg,p)}return}be=bh.childNodes;
bd=be.length;while(--bd>-1){bi=be[bd];bf=bi.type;if(bi.style){bg.push(aK(bi));if(p){p.push(bi)
}}if((bf===1||bf===9||bf===11)&&bi.childNodes.length){a8(bi,bg,p)}}};aL.cascadeTo=function(bj,bf,bl){var bp=y.to(bj,bf,bl),bh=[bp],bm=[],bk=[],bi=[],bo=y._internals.reservedProps,bg,be,bd,bn;
bj=bp._targets||bp.target;a8(bj,bm,bi);bp.render(bf,true,true);a8(bj,bk);bp.render(0,true,true);
bp._enabled(true);bg=bi.length;while(--bg>-1){be=w(bi[bg],bm[bg],bk[bg]);if(be.firstMPT){be=be.difs;
for(bd in bl){if(bo[bd]){be[bd]=bl[bd]}}bn={};for(bd in be){bn[bd]=bm[bg][bd]}bh.push(y.fromTo(bi[bg],bf,bn,be))
}}return bh};L.activate([aL]);return aL},true);(function(){var g=d._gsDefine.plugin({propName:"roundProps",version:"1.6.0",priority:-1,API:2,init:function(l,k,j){this._tween=j;
return true}}),i=function(j){while(j){if(!j.f&&!j.blob){j.m=Math.round}j=j._next
}},h=g.prototype;h._onInitAllProps=function(){var l=this._tween,n=(l.vars.roundProps.join)?l.vars.roundProps:l.vars.roundProps.split(","),k=n.length,p={},j=l._propLookup.roundProps,q,o,m;
while(--k>-1){p[n[k]]=Math.round}k=n.length;while(--k>-1){q=n[k];o=l._firstPT;while(o){m=o._next;
if(o.pg){o.t._mod(p)}else{if(o.n===q){if(o.f===2&&o.t){i(o.t._firstPT)}else{this._add(o.t,q,o.s,o.c);
if(m){m._prev=o._prev}if(o._prev){o._prev._next=m}else{if(l._firstPT===o){l._firstPT=m
}}o._next=o._prev=null;l._propLookup[q]=j}}}o=m}}return false};h._add=function(l,k,j,m){this._addTween(l,k,j,j+m,k,Math.round);
this._overwriteProps.push(k)}}());(function(){d._gsDefine.plugin({propName:"attr",API:2,version:"0.6.0",init:function(l,j,i,h){var k,g;
if(typeof(l.setAttribute)!=="function"){return false}for(k in j){g=j[k];if(typeof(g)==="function"){g=g(h,l)
}this._addTween(l,"setAttribute",l.getAttribute(k)+"",g+"",k,false,k);this._overwriteProps.push(k)
}return true}})}());d._gsDefine.plugin({propName:"directionalRotation",version:"0.3.0",API:2,init:function(l,o,r,k){if(typeof(o)!=="object"){o={rotation:o}
}this.finals={};var s=(o.useRadians===true)?Math.PI*2:360,j=0.000001,h,q,g,i,n,m;
for(h in o){if(h!=="useRadians"){i=o[h];if(typeof(i)==="function"){i=i(k,l)}m=(i+"").split("_");
q=m[0];g=parseFloat((typeof(l[h])!=="function")?l[h]:l[((h.indexOf("set")||typeof(l["get"+h.substr(3)])!=="function")?h:"get"+h.substr(3))]());
i=this.finals[h]=(typeof(q)==="string"&&q.charAt(1)==="=")?g+parseInt(q.charAt(0)+"1",10)*Number(q.substr(2)):Number(q)||0;
n=i-g;if(m.length){q=m.join("_");if(q.indexOf("short")!==-1){n=n%s;if(n!==n%(s/2)){n=(n<0)?n+s:n-s
}}if(q.indexOf("_cw")!==-1&&n<0){n=((n+s*9999999999)%s)-((n/s)|0)*s}else{if(q.indexOf("ccw")!==-1&&n>0){n=((n-s*9999999999)%s)-((n/s)|0)*s
}}}if(n>j||n<-j){this._addTween(l,h,g,g+n,h);this._overwriteProps.push(h)}}}return true
},set:function(g){var h;if(g!==1){this._super.setRatio.call(this,g)}else{h=this._firstPT;
while(h){if(h.f){h.t[h.p](this.finals[h.p])}else{h.t[h.p]=this.finals[h.p]}h=h._next
}}}})._autoCSS=true;d._gsDefine("easing.Back",["easing.Ease"],function(t){var v=(d.GreenSockGlobals||d),k=v.com.greensock,g=Math.PI*2,s=Math.PI/2,r=k._class,y=function(B,w){var A=r("easing."+B,function(){},true),z=A.prototype=new t();
z.constructor=A;z.getRatio=w;return A},q=t.register||function(){},x=function(z,w,B,A,p){var D=r("easing."+z,{easeOut:new w(),easeIn:new B(),easeInOut:new A()},true);
q(D,z);return D},n=function(z,w,p){this.t=z;this.v=w;if(p){this.next=p;p.prev=this;
this.c=p.v-w;this.gap=p.t-z}},m=function(B,w){var A=r("easing."+B,function(p){this._p1=(p||p===0)?p:1.70158;
this._p2=this._p1*1.525},true),z=A.prototype=new t();z.constructor=A;z.getRatio=w;
z.config=function(p){return new A(p)};return A},u=x("Back",m("BackOut",function(w){return((w=w-1)*w*((this._p1+1)*w+this._p1)+1)
}),m("BackIn",function(w){return w*w*((this._p1+1)*w-this._p1)}),m("BackInOut",function(w){return((w*=2)<1)?0.5*w*w*((this._p2+1)*w-this._p2):0.5*((w-=2)*w*((this._p2+1)*w+this._p2)+2)
})),o=r("easing.SlowMo",function(p,w,z){w=(w||w===0)?w:0.7;if(p==null){p=0.7}else{if(p>1){p=1
}}this._p=(p!==1)?w:0;this._p1=(1-p)/2;this._p2=p;this._p3=this._p1+this._p2;this._calcEnd=(z===true)
},true),i=o.prototype=new t(),l,j,h;i.constructor=o;i.getRatio=function(z){var w=z+(0.5-z)*this._p;
if(z<this._p1){return this._calcEnd?1-((z=1-(z/this._p1))*z):w-((z=1-(z/this._p1))*z*z*z*w)
}else{if(z>this._p3){return this._calcEnd?1-(z=(z-this._p3)/this._p1)*z:w+((z-w)*(z=(z-this._p3)/this._p1)*z*z*z)
}}return this._calcEnd?1:w};o.ease=new o(0.7,0.7);i.config=o.config=function(p,w,z){return new o(p,w,z)
};l=r("easing.SteppedEase",function(p){p=p||1;this._p1=1/p;this._p2=p+1},true);
i=l.prototype=new t();i.constructor=l;i.getRatio=function(w){if(w<0){w=0}else{if(w>=1){w=0.999999999
}}return((this._p2*w)>>0)*this._p1};i.config=l.config=function(p){return new l(p)
};j=r("easing.RoughEase",function(G){G=G||{};var M=G.taper||"none",J=[],B=0,L=(G.points||20)|0,D=L,z=(G.randomize!==false),E=(G.clamp===true),K=(G.template instanceof t)?G.template:null,A=(typeof(G.strength)==="number")?G.strength*0.4:0.4,I,H,w,F,C,p;
while(--D>-1){I=z?Math.random():(1/L)*D;H=K?K.getRatio(I):I;if(M==="none"){w=A}else{if(M==="out"){F=1-I;
w=F*F*A}else{if(M==="in"){w=I*I*A}else{if(I<0.5){F=I*2;w=F*F*0.5*A}else{F=(1-I)*2;
w=F*F*0.5*A}}}}if(z){H+=(Math.random()*w)-(w*0.5)}else{if(D%2){H+=w*0.5}else{H-=w*0.5
}}if(E){if(H>1){H=1}else{if(H<0){H=0}}}J[B++]={x:I,y:H}}J.sort(function(O,N){return O.x-N.x
});p=new n(1,1,null);D=L;while(--D>-1){C=J[D];p=new n(C.x,C.y,p)}this._prev=new n(0,0,(p.t!==0)?p:p.next)
},true);i=j.prototype=new t();i.constructor=j;i.getRatio=function(z){var w=this._prev;
if(z>w.t){while(w.next&&z>=w.t){w=w.next}w=w.prev}else{while(w.prev&&z<=w.t){w=w.prev
}}this._prev=w;return(w.v+((z-w.t)/w.gap)*w.c)};i.config=function(p){return new j(p)
};j.ease=new j();x("Bounce",y("BounceOut",function(w){if(w<1/2.75){return 7.5625*w*w
}else{if(w<2/2.75){return 7.5625*(w-=1.5/2.75)*w+0.75}else{if(w<2.5/2.75){return 7.5625*(w-=2.25/2.75)*w+0.9375
}}}return 7.5625*(w-=2.625/2.75)*w+0.984375}),y("BounceIn",function(w){if((w=1-w)<1/2.75){return 1-(7.5625*w*w)
}else{if(w<2/2.75){return 1-(7.5625*(w-=1.5/2.75)*w+0.75)}else{if(w<2.5/2.75){return 1-(7.5625*(w-=2.25/2.75)*w+0.9375)
}}}return 1-(7.5625*(w-=2.625/2.75)*w+0.984375)}),y("BounceInOut",function(w){var z=(w<0.5);
if(z){w=1-(w*2)}else{w=(w*2)-1}if(w<1/2.75){w=7.5625*w*w}else{if(w<2/2.75){w=7.5625*(w-=1.5/2.75)*w+0.75
}else{if(w<2.5/2.75){w=7.5625*(w-=2.25/2.75)*w+0.9375}else{w=7.5625*(w-=2.625/2.75)*w+0.984375
}}}return z?(1-w)*0.5:w*0.5+0.5}));x("Circ",y("CircOut",function(w){return Math.sqrt(1-(w=w-1)*w)
}),y("CircIn",function(w){return -(Math.sqrt(1-(w*w))-1)}),y("CircInOut",function(w){return((w*=2)<1)?-0.5*(Math.sqrt(1-w*w)-1):0.5*(Math.sqrt(1-(w-=2)*w)+1)
}));h=function(D,z,w){var B=r("easing."+D,function(p,C){this._p1=(p>=1)?p:1;this._p2=(C||w)/(p<1?p:1);
this._p3=this._p2/g*(Math.asin(1/this._p1)||0);this._p2=g/this._p2},true),A=B.prototype=new t();
A.constructor=B;A.getRatio=z;A.config=function(p,C){return new B(p,C)};return B
};x("Elastic",h("ElasticOut",function(w){return this._p1*Math.pow(2,-10*w)*Math.sin((w-this._p3)*this._p2)+1
},0.3),h("ElasticIn",function(w){return -(this._p1*Math.pow(2,10*(w-=1))*Math.sin((w-this._p3)*this._p2))
},0.3),h("ElasticInOut",function(w){return((w*=2)<1)?-0.5*(this._p1*Math.pow(2,10*(w-=1))*Math.sin((w-this._p3)*this._p2)):this._p1*Math.pow(2,-10*(w-=1))*Math.sin((w-this._p3)*this._p2)*0.5+1
},0.45));x("Expo",y("ExpoOut",function(w){return 1-Math.pow(2,-10*w)}),y("ExpoIn",function(w){return Math.pow(2,10*(w-1))-0.001
}),y("ExpoInOut",function(w){return((w*=2)<1)?0.5*Math.pow(2,10*(w-1)):0.5*(2-Math.pow(2,-10*(w-1)))
}));x("Sine",y("SineOut",function(w){return Math.sin(w*s)}),y("SineIn",function(w){return -Math.cos(w*s)+1
}),y("SineInOut",function(w){return -0.5*(Math.cos(Math.PI*w)-1)}));r("easing.EaseLookup",{find:function(p){return t.map[p]
}},true);q(v.SlowMo,"SlowMo","ease,");q(j,"RoughEase","ease,");q(l,"SteppedEase","ease,");
return u},true)});if(d._gsDefine){d._gsQueue.pop()()}(function(Z,x){var w={},q=Z.document,M=Z.GreenSockGlobals=Z.GreenSockGlobals||Z;
if(M.TweenLite){return}var G=function(ap){var an=ap.split("."),aq=M,ao;for(ao=0;
ao<an.length;ao++){aq[an[ao]]=aq=aq[an[ao]]||{}}return aq},s=G("com.greensock"),l=1e-10,B=function(ao){var p=[],an=ao.length,ap;
for(ap=0;ap!==an;p.push(ao[ap++])){}return p},L=function(){},aj=(function(){var i=Object.prototype.toString,p=i.call([]);
return function(an){return an!=null&&(an instanceof Array||(typeof(an)==="object"&&!!an.push&&i.call(an)===p))
}}()),al,af,ab,F,O,o={},J=function(p,ap,ao,an){this.sc=(o[p])?o[p].sc:[];o[p]=this;
this.gsClass=null;this.func=ao;var i=[];this.check=function(aw){var au=ap.length,at=au,av,ar,ay,aq,ax;
while(--au>-1){if((av=o[ap[au]]||new J(ap[au],[])).gsClass){i[au]=av.gsClass;at--
}else{if(aw){av.sc.push(this)}}}if(at===0&&ao){ar=("com.greensock."+p).split(".");
ay=ar.pop();aq=G(ar.join("."))[ay]=this.gsClass=ao.apply(ao,i);if(an){M[ay]=w[ay]=aq;
ax=(typeof(c)!=="undefined"&&c.exports);if(!ax&&typeof(define)==="function"&&define.amd){define((Z.GreenSockAMDPath?Z.GreenSockAMDPath+"/":"")+p.split(".").pop(),[],function(){return aq
})}else{if(ax){if(p===x){c.exports=w[x]=aq;for(au in w){aq[au]=w[au]}}else{if(w[x]){w[x][ay]=aq
}}}}}for(au=0;au<this.sc.length;au++){this.sc[au].check()}}};this.check(true)},h=Z._gsDefine=function(i,ao,an,p){return new J(i,ao,an,p)
},y=s._class=function(i,an,p){an=an||function(){};h(i,[],function(){return an},p);
return an};h.globals=M;var ak=[0,0,1,1],ac=[],H=y("easing.Ease",function(an,ao,p,i){this._func=an;
this._type=p||0;this._power=i||0;this._params=ao?ak.concat(ao):ak},true),am=H.map={},v=H.register=function(an,ax,au,ar){var at=ax.split(","),ap=at.length,aq=(au||"easeIn,easeOut,easeInOut").split(","),av,p,ao,aw;
while(--ap>-1){p=at[ap];av=ar?y("easing."+p,null,true):s.easing[p]||{};ao=aq.length;
while(--ao>-1){aw=aq[ao];am[p+"."+aw]=am[aw+p]=av[aw]=an.getRatio?an:an[aw]||new an()
}}};ab=H.prototype;ab._calcEnd=false;ab.getRatio=function(ap){if(this._func){this._params[0]=ap;
return this._func.apply(null,this._params)}var i=this._type,an=this._power,ao=(i===1)?1-ap:(i===2)?ap:(ap<0.5)?ap*2:(1-ap)*2;
if(an===1){ao*=ao}else{if(an===2){ao*=ao*ao}else{if(an===3){ao*=ao*ao*ao}else{if(an===4){ao*=ao*ao*ao*ao
}}}}return(i===1)?1-ao:(i===2)?ao:(ap<0.5)?ao/2:1-(ao/2)};al=["Linear","Quad","Cubic","Quart","Quint,Strong"];
af=al.length;while(--af>-1){ab=al[af]+",Power"+af;v(new H(null,null,1,af),ab,"easeOut",true);
v(new H(null,null,2,af),ab,"easeIn"+((af===0)?",easeNone":""));v(new H(null,null,3,af),ab,"easeInOut")
}am.linear=s.easing.Linear.easeIn;am.swing=s.easing.Quad.easeInOut;var ae=y("events.EventDispatcher",function(i){this._listeners={};
this._eventTarget=i||this});ab=ae.prototype;ab.addEventListener=function(ar,au,av,an,at){at=at||0;
var aq=this._listeners[ar],ap=0,p,ao;if(this===F&&!O){F.wake()}if(aq==null){this._listeners[ar]=aq=[]
}ao=aq.length;while(--ao>-1){p=aq[ao];if(p.c===au&&p.s===av){aq.splice(ao,1)}else{if(ap===0&&p.pr<at){ap=ao+1
}}}aq.splice(ap,0,{c:au,s:av,up:an,pr:at})};ab.removeEventListener=function(an,ap){var ao=this._listeners[an],p;
if(ao){p=ao.length;while(--p>-1){if(ao[p].c===ap){ao.splice(p,1);return}}}};ab.dispatchEvent=function(ao){var aq=this._listeners[ao],an,p,ap;
if(aq){an=aq.length;if(an>1){aq=aq.slice(0)}p=this._eventTarget;while(--an>-1){ap=aq[an];
if(ap){if(ap.up){ap.c.call(ap.s||p,{type:ao,target:p})}else{ap.c.call(ap.s||p)}}}}};
var r=Z.requestAnimationFrame,t=Z.cancelAnimationFrame,Y=Date.now||function(){return new Date().getTime()
},Q=Y();al=["ms","moz","webkit","o"];af=al.length;while(--af>-1&&!r){r=Z[al[af]+"RequestAnimationFrame"];
t=Z[al[af]+"CancelAnimationFrame"]||Z[al[af]+"CancelRequestAnimationFrame"]}y("Ticker",function(ap,av){var aw=this,i=Y(),an=(av!==false&&r)?"auto":false,aq=500,p=33,au="tick",at,ay,ax,az,ar,ao=function(aD){var aB=Y()-Q,aA,aC;
if(aB>aq){i+=aB-p}Q+=aB;aw.time=(Q-i)/1000;aA=aw.time-ar;if(!at||aA>0||aD===true){aw.frame++;
ar+=aA+(aA>=az?0.004:az-aA);aC=true}if(aD!==true){ax=ay(ao)}if(aC){aw.dispatchEvent(au)
}};ae.call(aw);aw.time=aw.frame=0;aw.tick=function(){ao(true)};aw.lagSmoothing=function(aA,aB){aq=aA||(1/l);
p=Math.min(aB,aq,0)};aw.sleep=function(){if(ax==null){return}if(!an||!t){clearTimeout(ax)
}else{t(ax)}ay=L;ax=null;if(aw===F){O=false}};aw.wake=function(aA){if(ax!==null){aw.sleep()
}else{if(aA){i+=-Q+(Q=Y())}else{if(aw.frame>10){Q=Y()-aq+5}}}ay=(at===0)?L:(!an||!r)?function(aB){return setTimeout(aB,((ar-aw.time)*1000+1)|0)
}:r;if(aw===F){O=true}ao(2)};aw.fps=function(aA){if(!arguments.length){return at
}at=aA;az=1/(at||60);ar=this.time+az;aw.wake()};aw.useRAF=function(aA){if(!arguments.length){return an
}aw.sleep();an=aA;aw.fps(at)};aw.fps(ap);setTimeout(function(){if(an==="auto"&&aw.frame<5&&q.visibilityState!=="hidden"){aw.useRAF(false)
}},1500)});ab=s.Ticker.prototype=new s.events.EventDispatcher();ab.constructor=s.Ticker;
var A=y("core.Animation",function(an,p){this.vars=p=p||{};this._duration=this._totalDuration=an||0;
this._delay=Number(p.delay)||0;this._timeScale=1;this._active=(p.immediateRender===true);
this.data=p.data;this._reversed=(p.reversed===true);if(!N){return}if(!O){F.wake()
}var i=this.vars.useFrames?z:N;i.add(this,i._time);if(this.vars.paused){this.paused(true)
}});F=A.ticker=new s.Ticker();ab=A.prototype;ab._dirty=ab._gc=ab._initted=ab._paused=false;
ab._totalTime=ab._time=0;ab._rawPrevTime=-1;ab._next=ab._last=ab._onUpdate=ab._timeline=ab.timeline=null;
ab._paused=false;var R=function(){if(O&&Y()-Q>2000){F.wake()}setTimeout(R,2000)
};R();ab.play=function(p,i){if(p!=null){this.seek(p,i)}return this.reversed(false).paused(false)
};ab.pause=function(i,p){if(i!=null){this.seek(i,p)}return this.paused(true)};ab.resume=function(p,i){if(p!=null){this.seek(p,i)
}return this.paused(false)};ab.seek=function(p,i){return this.totalTime(Number(p),i!==false)
};ab.restart=function(p,i){return this.reversed(false).paused(false).totalTime(p?-this._delay:0,(i!==false),true)
};ab.reverse=function(p,i){if(p!=null){this.seek((p||this.totalDuration()),i)}return this.reversed(true).paused(false)
};ab.render=function(an,i,p){};ab.invalidate=function(){this._time=this._totalTime=0;
this._initted=this._gc=false;this._rawPrevTime=-1;if(this._gc||!this.timeline){this._enabled(true)
}return this};ab.isActive=function(){var p=this._timeline,an=this._startTime,i;
return(!p||(!this._gc&&!this._paused&&p.isActive()&&(i=p.rawTime(true))>=an&&i<an+this.totalDuration()/this._timeScale))
};ab._enabled=function(p,i){if(!O){F.wake()}this._gc=!p;this._active=this.isActive();
if(i!==true){if(p&&!this.timeline){this._timeline.add(this,this._startTime-this._delay)
}else{if(!p&&this.timeline){this._timeline._remove(this,true)}}}return false};ab._kill=function(p,i){return this._enabled(false,false)
};ab.kill=function(p,i){this._kill(p,i);return this};ab._uncache=function(i){var p=i?this:this.timeline;
while(p){p._dirty=true;p=p.timeline}return this};ab._swapSelfInParams=function(an){var p=an.length,ao=an.concat();
while(--p>-1){if(an[p]==="{self}"){ao[p]=this}}return ao};ab._callback=function(ao){var p=this.vars,aq=p[ao],ap=p[ao+"Params"],an=p[ao+"Scope"]||p.callbackScope||this,i=ap?ap.length:0;
switch(i){case 0:aq.call(an);break;case 1:aq.call(an,ap[0]);break;case 2:aq.call(an,ap[0],ap[1]);
break;default:aq.apply(an,ap)}};ab.eventCallback=function(an,ap,ao,p){if((an||"").substr(0,2)==="on"){var i=this.vars;
if(arguments.length===1){return i[an]}if(ap==null){delete i[an]}else{i[an]=ap;i[an+"Params"]=(aj(ao)&&ao.join("").indexOf("{self}")!==-1)?this._swapSelfInParams(ao):ao;
i[an+"Scope"]=p}if(an==="onUpdate"){this._onUpdate=ap}}return this};ab.delay=function(i){if(!arguments.length){return this._delay
}if(this._timeline.smoothChildTiming){this.startTime(this._startTime+i-this._delay)
}this._delay=i;return this};ab.duration=function(i){if(!arguments.length){this._dirty=false;
return this._duration}this._duration=this._totalDuration=i;this._uncache(true);
if(this._timeline.smoothChildTiming){if(this._time>0){if(this._time<this._duration){if(i!==0){this.totalTime(this._totalTime*(i/this._duration),true)
}}}}return this};ab.totalDuration=function(i){this._dirty=false;return(!arguments.length)?this._totalDuration:this.duration(i)
};ab.time=function(p,i){if(!arguments.length){return this._time}if(this._dirty){this.totalDuration()
}return this.totalTime((p>this._duration)?this._duration:p,i)};ab.totalTime=function(ao,an,p){if(!O){F.wake()
}if(!arguments.length){return this._totalTime}if(this._timeline){if(ao<0&&!p){ao+=this.totalDuration()
}if(this._timeline.smoothChildTiming){if(this._dirty){this.totalDuration()}var ap=this._totalDuration,i=this._timeline;
if(ao>ap&&!p){ao=ap}this._startTime=(this._paused?this._pauseTime:i._time)-((!this._reversed?ao:ap-ao)/this._timeScale);
if(!i._dirty){this._uncache(false)}if(i._timeline){while(i._timeline){if(i._timeline._time!==(i._startTime+i._totalTime)/i._timeScale){i.totalTime(i._totalTime,true)
}i=i._timeline}}}if(this._gc){this._enabled(true,false)}if(this._totalTime!==ao||this._duration===0){if(K.length){u()
}this.render(ao,an,false);if(K.length){u()}}}return this};ab.progress=ab.totalProgress=function(p,i){var an=this.duration();
return(!arguments.length)?(an?this._time/an:this.ratio):this.totalTime(an*p,i)};
ab.startTime=function(i){if(!arguments.length){return this._startTime}if(i!==this._startTime){this._startTime=i;
if(this.timeline){if(this.timeline._sortChildren){this.timeline.add(this,i-this._delay)
}}}return this};ab.endTime=function(i){return this._startTime+((i!=false)?this.totalDuration():this.duration())/this._timeScale
};ab.timeScale=function(an){if(!arguments.length){return this._timeScale}an=an||l;
if(this._timeline&&this._timeline.smoothChildTiming){var i=this._pauseTime,p=(i||i===0)?i:this._timeline.totalTime();
this._startTime=p-((p-this._startTime)*this._timeScale/an)}this._timeScale=an;return this._uncache(false)
};ab.reversed=function(i){if(!arguments.length){return this._reversed}if(i!=this._reversed){this._reversed=i;
this.totalTime(((this._timeline&&!this._timeline.smoothChildTiming)?this.totalDuration()-this._totalTime:this._totalTime),true)
}return this};ab.paused=function(ao){if(!arguments.length){return this._paused}var p=this._timeline,an,i;
if(ao!=this._paused){if(p){if(!O&&!ao){F.wake()}an=p.rawTime();i=an-this._pauseTime;
if(!ao&&p.smoothChildTiming){this._startTime+=i;this._uncache(false)}this._pauseTime=ao?an:null;
this._paused=ao;this._active=this.isActive();if(!ao&&i!==0&&this._initted&&this.duration()){an=p.smoothChildTiming?this._totalTime:(an-this._startTime)/this._timeScale;
this.render(an,(an===this._totalTime),true)}}}if(this._gc&&!ao){this._enabled(true,false)
}return this};var ah=y("core.SimpleTimeline",function(i){A.call(this,0,i);this.autoRemoveChildren=this.smoothChildTiming=true
});ab=ah.prototype=new A();ab.constructor=ah;ab.kill()._gc=false;ab._first=ab._last=ab._recent=null;
ab._sortChildren=false;ab.add=ab.insert=function(aq,i,ap,ao){var an,p;aq._startTime=Number(i||0)+aq._delay;
if(aq._paused){if(this!==aq._timeline){aq._pauseTime=aq._startTime+((this.rawTime()-aq._startTime)/aq._timeScale)
}}if(aq.timeline){aq.timeline._remove(aq,true)}aq.timeline=aq._timeline=this;if(aq._gc){aq._enabled(true,true)
}an=this._last;if(this._sortChildren){p=aq._startTime;while(an&&an._startTime>p){an=an._prev
}}if(an){aq._next=an._next;an._next=aq}else{aq._next=this._first;this._first=aq
}if(aq._next){aq._next._prev=aq}else{this._last=aq}aq._prev=an;this._recent=aq;
if(this._timeline){this._uncache(true)}return this};ab._remove=function(i,p){if(i.timeline===this){if(!p){i._enabled(false,true)
}if(i._prev){i._prev._next=i._next}else{if(this._first===i){this._first=i._next
}}if(i._next){i._next._prev=i._prev}else{if(this._last===i){this._last=i._prev}}i._next=i._prev=i.timeline=null;
if(i===this._recent){this._recent=this._last}if(this._timeline){this._uncache(true)
}}return this};ab.render=function(ap,an,ao){var i=this._first,p;this._totalTime=this._time=this._rawPrevTime=ap;
while(i){p=i._next;if(i._active||(ap>=i._startTime&&!i._paused)){if(!i._reversed){i.render((ap-i._startTime)*i._timeScale,an,ao)
}else{i.render(((!i._dirty)?i._totalDuration:i.totalDuration())-((ap-i._startTime)*i._timeScale),an,ao)
}}i=p}};ab.rawTime=function(){if(!O){F.wake()}return this._totalTime};var I=y("TweenLite",function(at,ar,aq){A.call(this,ar,aq);
this.render=I.prototype.render;if(at==null){throw"Cannot tween a null target."}this.target=at=(typeof(at)!=="string")?at:I.selector(at)||at;
var au=(at.jquery||(at.length&&at!==Z&&at[0]&&(at[0]===Z||(at[0].nodeType&&at[0].style&&!at.nodeType)))),an=this.vars.overwrite,ap,ao,p;
this._overwrite=an=(an==null)?ad[I.defaultOverwrite]:(typeof(an)==="number")?an>>0:ad[an];
if((au||at instanceof Array||(at.push&&aj(at)))&&typeof(at[0])!=="number"){this._targets=p=B(at);
this._propLookup=[];this._siblings=[];for(ap=0;ap<p.length;ap++){ao=p[ap];if(!ao){p.splice(ap--,1);
continue}else{if(typeof(ao)==="string"){ao=p[ap--]=I.selector(ao);if(typeof(ao)==="string"){p.splice(ap+1,1)
}continue}else{if(ao.length&&ao!==Z&&ao[0]&&(ao[0]===Z||(ao[0].nodeType&&ao[0].style&&!ao.nodeType))){p.splice(ap--,1);
this._targets=p=p.concat(B(ao));continue}}}this._siblings[ap]=T(ao,this,false);
if(an===1){if(this._siblings[ap].length>1){m(ao,this,null,1,this._siblings[ap])
}}}}else{this._propLookup={};this._siblings=T(at,this,false);if(an===1){if(this._siblings.length>1){m(at,this,null,1,this._siblings)
}}}if(this.vars.immediateRender||(ar===0&&this._delay===0&&this.vars.immediateRender!==false)){this._time=-l;
this.render(Math.min(0,-this._delay))}},true),ai=function(i){return(i&&i.length&&i!==Z&&i[0]&&(i[0]===Z||(i[0].nodeType&&i[0].style&&!i.nodeType)))
},n=function(ap,ao){var i={},an;for(an in ap){if(!V[an]&&(!(an in ao)||an==="transform"||an==="x"||an==="y"||an==="width"||an==="height"||an==="className"||an==="border")&&(!E[an]||(E[an]&&E[an]._autoCSS))){i[an]=ap[an];
delete ap[an]}}ap.css=i};ab=I.prototype=new A();ab.constructor=I;ab.kill()._gc=false;
ab.ratio=0;ab._firstPT=ab._targets=ab._overwrittenProps=ab._startAt=null;ab._notifyPluginsOfEnabled=ab._lazy=false;
I.version="1.19.1";I.defaultEase=ab._ease=new H(null,null,1,1);I.defaultOverwrite="auto";
I.ticker=F;I.autoSleep=120;I.lagSmoothing=function(i,p){F.lagSmoothing(i,p)};I.selector=Z.$||Z.jQuery||function(p){var i=Z.$||Z.jQuery;
if(i){I.selector=i;return i(p)}return(typeof(q)==="undefined")?p:(q.querySelectorAll?q.querySelectorAll(p):q.getElementById((p.charAt(0)==="#")?p.substr(1):p))
};var K=[],X={},W=/(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/ig,k=function(i){var an=this._firstPT,p=0.000001,ao;
while(an){ao=!an.blob?an.c*i+an.s:(i===1)?this.end:i?this.join(""):this.start;if(an.m){ao=an.m(ao,this._target||an.t)
}else{if(ao<p){if(ao>-p&&!an.blob){ao=0}}}if(!an.f){an.t[an.p]=ao}else{if(an.fp){an.t[an.p](an.fp,ao)
}else{an.t[an.p](ao)}}an=an._next}},j=function(ao,au,ap,aA){var ay=[],p=0,aB="",at=0,ax,an,aw,av,aq,az,ar;
ay.start=ao;ay.end=au;ao=ay[0]=ao+"";au=ay[1]=au+"";if(ap){ap(ay);ao=ay[0];au=ay[1]
}ay.length=0;ax=ao.match(W)||[];an=au.match(W)||[];if(aA){aA._next=null;aA.blob=1;
ay._firstPT=ay._applyPT=aA}aq=an.length;for(av=0;av<aq;av++){ar=an[av];az=au.substr(p,au.indexOf(ar,p)-p);
aB+=(az||!av)?az:",";p+=az.length;if(at){at=(at+1)%5}else{if(az.substr(-5)==="rgba("){at=1
}}if(ar===ax[av]||ax.length<=av){aB+=ar}else{if(aB){ay.push(aB);aB=""}aw=parseFloat(ax[av]);
ay.push(aw);ay._firstPT={_next:ay._firstPT,t:ay,p:ay.length-1,s:aw,c:((ar.charAt(1)==="=")?parseInt(ar.charAt(0)+"1",10)*parseFloat(ar.substr(2)):(parseFloat(ar)-aw))||0,f:0,m:(at&&at<4)?Math.round:0}
}p+=ar.length}aB+=au.substr(p);if(aB){ay.push(aB)}ay.setRatio=k;return ay},C=function(at,p,ao,aq,ap,aw,an,aA,ar){if(typeof(aq)==="function"){aq=aq(ar||0,at)
}var au=typeof(at[p]),av=(au!=="function")?"":((p.indexOf("set")||typeof(at["get"+p.substr(3)])!=="function")?p:"get"+p.substr(3)),az=(ao!=="get")?ao:!av?at[p]:an?at[av](an):at[av](),ax=(typeof(aq)==="string"&&aq.charAt(1)==="="),ay={t:at,p:p,s:az,f:(au==="function"),pg:0,n:ap||p,m:(!aw?0:(typeof(aw)==="function")?aw:Math.round),pr:0,c:ax?parseInt(aq.charAt(0)+"1",10)*parseFloat(aq.substr(2)):(parseFloat(aq)-az)||0},i;
if(typeof(az)!=="number"||(typeof(aq)!=="number"&&!ax)){if(an||isNaN(az)||(!ax&&isNaN(aq))||typeof(az)==="boolean"||typeof(aq)==="boolean"){ay.fp=an;
i=j(az,(ax?ay.s+ay.c:aq),aA||I.defaultStringFilter,ay);ay={t:i,p:"setRatio",s:0,c:1,f:2,pg:0,n:ap||p,pr:0,m:0}
}else{ay.s=parseFloat(az);if(!ax){ay.c=(parseFloat(aq)-ay.s)||0}}}if(ay.c){if((ay._next=this._firstPT)){ay._next._prev=ay
}this._firstPT=ay;return ay}},U=I._internals={isArray:aj,isSelector:ai,lazyTweens:K,blobDif:j},E=I._plugins={},D=U.tweenLookup={},S=0,V=U.reservedProps={ease:1,delay:1,overwrite:1,onComplete:1,onCompleteParams:1,onCompleteScope:1,useFrames:1,runBackwards:1,startAt:1,onUpdate:1,onUpdateParams:1,onUpdateScope:1,onStart:1,onStartParams:1,onStartScope:1,onReverseComplete:1,onReverseCompleteParams:1,onReverseCompleteScope:1,onRepeat:1,onRepeatParams:1,onRepeatScope:1,easeParams:1,yoyo:1,immediateRender:1,repeat:1,repeatDelay:1,data:1,paused:1,reversed:1,autoCSS:1,lazy:1,onOverwrite:1,callbackScope:1,stringFilter:1,id:1},ad={none:0,all:1,auto:2,concurrent:3,allOnStart:4,preexisting:5,"true":1,"false":0},z=A._rootFramesTimeline=new ah(),N=A._rootTimeline=new ah(),ag=30,u=U.lazyRender=function(){var an=K.length,p;
X={};while(--an>-1){p=K[an];if(p&&p._lazy!==false){p.render(p._lazy[0],p._lazy[1],true);
p._lazy=false}}K.length=0};N._startTime=F.time;z._startTime=F.frame;N._active=z._active=true;
setTimeout(u,1);A._updateRoot=I.render=function(){var ao,an,ap;if(K.length){u()
}N.render((F.time-N._startTime)*N._timeScale,false,false);z.render((F.frame-z._startTime)*z._timeScale,false,false);
if(K.length){u()}if(F.frame>=ag){ag=F.frame+(parseInt(I.autoSleep,10)||120);for(ap in D){an=D[ap].tweens;
ao=an.length;while(--ao>-1){if(an[ao]._gc){an.splice(ao,1)}}if(an.length===0){delete D[ap]
}}ap=N._first;if(!ap||ap._paused){if(I.autoSleep&&!z._first&&F._listeners.tick.length===1){while(ap&&ap._paused){ap=ap._next
}if(!ap){F.sleep()}}}}};F.addEventListener("tick",A._updateRoot);var T=function(aq,ao,ap){var ar=aq._gsTweenID,p,an;
if(!D[ar||(aq._gsTweenID=ar="t"+(S++))]){D[ar]={target:aq,tweens:[]}}if(ao){p=D[ar].tweens;
p[(an=p.length)]=ao;if(ap){while(--an>-1){if(p[an]===ao){p.splice(an,1)}}}}return D[ar].tweens
},P=function(aq,ar,ap,ao){var an=aq.vars.onOverwrite,p,i;if(an){p=an(aq,ar,ap,ao)
}an=I.onOverwrite;if(an){i=an(aq,ar,ap,ao)}return(p!==false&&i!==false)},m=function(ax,aA,ay,aw,az){var au,ar,at,ao;
if(aw===1||aw>=4){ao=az.length;for(au=0;au<ao;au++){if((at=az[au])!==aA){if(!at._gc){if(at._kill(null,ax,aA)){ar=true
}}}else{if(aw===5){break}}}return ar}var an=aA._startTime+l,p=[],aq=0,ap=(aA._duration===0),av;
au=az.length;while(--au>-1){if((at=az[au])===aA||at._gc||at._paused){}else{if(at._timeline!==aA._timeline){av=av||aa(aA,0,ap);
if(aa(at,av,ap)===0){p[aq++]=at}}else{if(at._startTime<=an){if(at._startTime+at.totalDuration()/at._timeScale>an){if(!((ap||!at._initted)&&an-at._startTime<=2e-10)){p[aq++]=at
}}}}}}au=aq;while(--au>-1){at=p[au];if(aw===2){if(at._kill(ay,ax,aA)){ar=true}}if(aw!==2||(!at._firstPT&&at._initted)){if(aw!==2&&!P(at,aA)){continue
}if(at._enabled(false,false)){ar=true}}}return ar},aa=function(ap,i,an){var p=ap._timeline,aq=p._timeScale,ao=ap._startTime;
while(p._timeline){ao+=p._startTime;aq*=p._timeScale;if(p._paused){return -100}p=p._timeline
}ao/=aq;return(ao>i)?ao-i:((an&&ao===i)||(!ap._initted&&ao-i<2*l))?l:((ao+=ap.totalDuration()/ap._timeScale/aq)>i+l)?0:ao-i-l
};ab._init=function(){var ax=this.vars,av=this._overwrittenProps,an=this._duration,ap=!!ax.immediateRender,ar=ax.ease,au,at,ay,ao,aw,aq;
if(ax.startAt){if(this._startAt){this._startAt.render(-1,true);this._startAt.kill()
}aw={};for(ao in ax.startAt){aw[ao]=ax.startAt[ao]}aw.overwrite=false;aw.immediateRender=true;
aw.lazy=(ap&&ax.lazy!==false);aw.startAt=aw.delay=null;this._startAt=I.to(this.target,0,aw);
if(ap){if(this._time>0){this._startAt=null}else{if(an!==0){return}}}}else{if(ax.runBackwards&&an!==0){if(this._startAt){this._startAt.render(-1,true);
this._startAt.kill();this._startAt=null}else{if(this._time!==0){ap=false}ay={};
for(ao in ax){if(!V[ao]||ao==="autoCSS"){ay[ao]=ax[ao]}}ay.overwrite=0;ay.data="isFromStart";
ay.lazy=(ap&&ax.lazy!==false);ay.immediateRender=ap;this._startAt=I.to(this.target,0,ay);
if(!ap){this._startAt._init();this._startAt._enabled(false);if(this.vars.immediateRender){this._startAt=null
}}else{if(this._time===0){return}}}}}this._ease=ar=(!ar)?I.defaultEase:(ar instanceof H)?ar:(typeof(ar)==="function")?new H(ar,ax.easeParams):am[ar]||I.defaultEase;
if(ax.easeParams instanceof Array&&ar.config){this._ease=ar.config.apply(ar,ax.easeParams)
}this._easeType=this._ease._type;this._easePower=this._ease._power;this._firstPT=null;
if(this._targets){aq=this._targets.length;for(au=0;au<aq;au++){if(this._initProps(this._targets[au],(this._propLookup[au]={}),this._siblings[au],(av?av[au]:null),au)){at=true
}}}else{at=this._initProps(this.target,this._propLookup,this._siblings,av,0)}if(at){I._onPluginEvent("_onInitAllProps",this)
}if(av){if(!this._firstPT){if(typeof(this.target)!=="function"){this._enabled(false,false)
}}}if(ax.runBackwards){ay=this._firstPT;while(ay){ay.s+=ay.c;ay.c=-ay.c;ay=ay._next
}}this._onUpdate=ax.onUpdate;this._initted=true};ab._initProps=function(au,at,av,ax,ar){var an,ap,ao,aq,ay,aw;
if(au==null){return false}if(X[au._gsTweenID]){u()}if(!this.vars.css){if(au.style){if(au!==Z&&au.nodeType){if(E.css){if(this.vars.autoCSS!==false){n(this.vars,au)
}}}}}for(an in this.vars){aw=this.vars[an];if(V[an]){if(aw){if((aw instanceof Array)||(aw.push&&aj(aw))){if(aw.join("").indexOf("{self}")!==-1){this.vars[an]=aw=this._swapSelfInParams(aw,this)
}}}}else{if(E[an]&&(aq=new E[an]())._onInitTween(au,this.vars[an],this,ar)){this._firstPT=ay={_next:this._firstPT,t:aq,p:"setRatio",s:0,c:1,f:1,n:an,pg:1,pr:aq._priority,m:0};
ap=aq._overwriteProps.length;while(--ap>-1){at[aq._overwriteProps[ap]]=this._firstPT
}if(aq._priority||aq._onInitAllProps){ao=true}if(aq._onDisable||aq._onEnable){this._notifyPluginsOfEnabled=true
}if(ay._next){ay._next._prev=ay}}else{at[an]=C.call(this,au,an,"get",aw,an,0,null,this.vars.stringFilter,ar)
}}}if(ax){if(this._kill(ax,au)){return this._initProps(au,at,av,ax,ar)}}if(this._overwrite>1){if(this._firstPT){if(av.length>1){if(m(au,this,at,this._overwrite,av)){this._kill(at,au);
return this._initProps(au,at,av,ax,ar)}}}}if(this._firstPT){if((this.vars.lazy!==false&&this._duration)||(this.vars.lazy&&!this._duration)){X[au._gsTweenID]=true
}}return ao};ab.render=function(ao,aw,an){var p=this._time,ap=this._duration,ax=this._rawPrevTime,au,av,ay,aq;
if(ao>=ap-1e-7&&ao>=0){this._totalTime=this._time=ap;this.ratio=this._ease._calcEnd?this._ease.getRatio(1):1;
if(!this._reversed){au=true;av="onComplete";an=(an||this._timeline.autoRemoveChildren)
}if(ap===0){if(this._initted||!this.vars.lazy||an){if(this._startTime===this._timeline._duration){ao=0
}if(ax<0||(ao<=0&&ao>=-1e-7)||(ax===l&&this.data!=="isPause")){if(ax!==ao){an=true;
if(ax>l){av="onReverseComplete"}}}this._rawPrevTime=aq=(!aw||ao||ax===ao)?ao:l}}}else{if(ao<1e-7){this._totalTime=this._time=0;
this.ratio=this._ease._calcEnd?this._ease.getRatio(0):0;if(p!==0||(ap===0&&ax>0)){av="onReverseComplete";
au=this._reversed}if(ao<0){this._active=false;if(ap===0){if(this._initted||!this.vars.lazy||an){if(ax>=0&&!(ax===l&&this.data==="isPause")){an=true
}this._rawPrevTime=aq=(!aw||ao||ax===ao)?ao:l}}}if(!this._initted){an=true}}else{this._totalTime=this._time=ao;
if(this._easeType){var i=ao/ap,at=this._easeType,ar=this._easePower;if(at===1||(at===3&&i>=0.5)){i=1-i
}if(at===3){i*=2}if(ar===1){i*=i}else{if(ar===2){i*=i*i}else{if(ar===3){i*=i*i*i
}else{if(ar===4){i*=i*i*i*i}}}}if(at===1){this.ratio=1-i}else{if(at===2){this.ratio=i
}else{if(ao/ap<0.5){this.ratio=i/2}else{this.ratio=1-(i/2)}}}}else{this.ratio=this._ease.getRatio(ao/ap)
}}}if(this._time===p&&!an){return}else{if(!this._initted){this._init();if(!this._initted||this._gc){return
}else{if(!an&&this._firstPT&&((this.vars.lazy!==false&&this._duration)||(this.vars.lazy&&!this._duration))){this._time=this._totalTime=p;
this._rawPrevTime=ax;K.push(this);this._lazy=[ao,aw];return}}if(this._time&&!au){this.ratio=this._ease.getRatio(this._time/ap)
}else{if(au&&this._ease._calcEnd){this.ratio=this._ease.getRatio((this._time===0)?0:1)
}}}}if(this._lazy!==false){this._lazy=false}if(!this._active){if(!this._paused&&this._time!==p&&ao>=0){this._active=true
}}if(p===0){if(this._startAt){if(ao>=0){this._startAt.render(ao,aw,an)}else{if(!av){av="_dummyGS"
}}}if(this.vars.onStart){if(this._time!==0||ap===0){if(!aw){this._callback("onStart")
}}}}ay=this._firstPT;while(ay){if(ay.f){ay.t[ay.p](ay.c*this.ratio+ay.s)}else{ay.t[ay.p]=ay.c*this.ratio+ay.s
}ay=ay._next}if(this._onUpdate){if(ao<0){if(this._startAt&&ao!==-0.0001){this._startAt.render(ao,aw,an)
}}if(!aw){if(this._time!==p||au||an){this._callback("onUpdate")}}}if(av){if(!this._gc||an){if(ao<0&&this._startAt&&!this._onUpdate&&ao!==-0.0001){this._startAt.render(ao,aw,an)
}if(au){if(this._timeline.autoRemoveChildren){this._enabled(false,false)}this._active=false
}if(!aw&&this.vars[av]){this._callback(av)}if(ap===0&&this._rawPrevTime===l&&aq!==l){this._rawPrevTime=0
}}}};ab._kill=function(aw,av,ay){if(aw==="all"){aw=null}if(aw==null){if(av==null||av===this.target){this._lazy=false;
return this._enabled(false,false)}}av=(typeof(av)!=="string")?(av||this._targets||this.target):I.selector(av)||av;
var ar=(ay&&this._time&&ay._startTime===this._startTime&&this._timeline===ay._timeline),ap,az,an,aA,au,ao,ax,aq,at;
if((aj(av)||ai(av))&&typeof(av[0])!=="number"){ap=av.length;while(--ap>-1){if(this._kill(aw,av[ap],ay)){ao=true
}}}else{if(this._targets){ap=this._targets.length;while(--ap>-1){if(av===this._targets[ap]){au=this._propLookup[ap]||{};
this._overwrittenProps=this._overwrittenProps||[];az=this._overwrittenProps[ap]=aw?this._overwrittenProps[ap]||{}:"all";
break}}}else{if(av!==this.target){return false}else{au=this._propLookup;az=this._overwrittenProps=aw?this._overwrittenProps||{}:"all"
}}if(au){ax=aw||au;aq=(aw!==az&&az!=="all"&&aw!==au&&(typeof(aw)!=="object"||!aw._tempKill));
if(ay&&(I.onOverwrite||this.vars.onOverwrite)){for(an in ax){if(au[an]){if(!at){at=[]
}at.push(an)}}if((at||!aw)&&!P(this,ay,av,at)){return false}}for(an in ax){if((aA=au[an])){if(ar){if(aA.f){aA.t[aA.p](aA.s)
}else{aA.t[aA.p]=aA.s}ao=true}if(aA.pg&&aA.t._kill(ax)){ao=true}if(!aA.pg||aA.t._overwriteProps.length===0){if(aA._prev){aA._prev._next=aA._next
}else{if(aA===this._firstPT){this._firstPT=aA._next}}if(aA._next){aA._next._prev=aA._prev
}aA._next=aA._prev=null}delete au[an]}if(aq){az[an]=1}}if(!this._firstPT&&this._initted){this._enabled(false,false)
}}}return ao};ab.invalidate=function(){if(this._notifyPluginsOfEnabled){I._onPluginEvent("_onDisable",this)
}this._firstPT=this._overwrittenProps=this._startAt=this._onUpdate=null;this._notifyPluginsOfEnabled=this._active=this._lazy=false;
this._propLookup=(this._targets)?{}:[];A.prototype.invalidate.call(this);if(this.vars.immediateRender){this._time=-l;
this.render(Math.min(0,-this._delay))}return this};ab._enabled=function(ao,p){if(!O){F.wake()
}if(ao&&this._gc){var an=this._targets,ap;if(an){ap=an.length;while(--ap>-1){this._siblings[ap]=T(an[ap],this,true)
}}else{this._siblings=T(this.target,this,true)}}A.prototype._enabled.call(this,ao,p);
if(this._notifyPluginsOfEnabled){if(this._firstPT){return I._onPluginEvent((ao?"_onEnable":"_onDisable"),this)
}}return false};I.to=function(an,p,i){return new I(an,p,i)};I.from=function(an,p,i){i.runBackwards=true;
i.immediateRender=(i.immediateRender!=false);return new I(an,p,i)};I.fromTo=function(an,p,ao,i){i.startAt=ao;
i.immediateRender=(i.immediateRender!=false&&ao.immediateRender!=false);return new I(an,p,i)
};I.delayedCall=function(i,ap,ao,an,p){return new I(ap,0,{delay:i,onComplete:ap,onCompleteParams:ao,callbackScope:an,onReverseComplete:ap,onReverseCompleteParams:ao,immediateRender:false,lazy:false,useFrames:p,overwrite:0})
};I.set=function(p,i){return new I(p,0,i)};I.getTweensOf=function(ar,ao){if(ar==null){return[]
}ar=(typeof(ar)!=="string")?ar:I.selector(ar)||ar;var aq,p,an,ap;if((aj(ar)||ai(ar))&&typeof(ar[0])!=="number"){aq=ar.length;
p=[];while(--aq>-1){p=p.concat(I.getTweensOf(ar[aq],ao))}aq=p.length;while(--aq>-1){ap=p[aq];
an=aq;while(--an>-1){if(ap===p[an]){p.splice(aq,1)}}}}else{p=T(ar).concat();aq=p.length;
while(--aq>-1){if(p[aq]._gc||(ao&&!p[aq].isActive())){p.splice(aq,1)}}}return p
};I.killTweensOf=I.killDelayedCallsTo=function(aq,an,ap){if(typeof(an)==="object"){ap=an;
an=false}var p=I.getTweensOf(aq,an),ao=p.length;while(--ao>-1){p[ao]._kill(ap,aq)
}};var g=y("plugins.TweenPlugin",function(p,i){this._overwriteProps=(p||"").split(",");
this._propName=this._overwriteProps[0];this._priority=i||0;this._super=g.prototype
},true);ab=g.prototype;g.version="1.19.0";g.API=2;ab._firstPT=null;ab._addTween=C;
ab.setRatio=k;ab._kill=function(ap){var p=this._overwriteProps,ao=this._firstPT,an;
if(ap[this._propName]!=null){this._overwriteProps=[]}else{an=p.length;while(--an>-1){if(ap[p[an]]!=null){p.splice(an,1)
}}}while(ao){if(ap[ao.n]!=null){if(ao._next){ao._next._prev=ao._prev}if(ao._prev){ao._prev._next=ao._next;
ao._prev=null}else{if(this._firstPT===ao){this._firstPT=ao._next}}}ao=ao._next}return false
};ab._mod=ab._roundProps=function(p){var i=this._firstPT,an;while(i){an=p[this._propName]||(i.n!=null&&p[i.n.split(this._propName+"_").join("")]);
if(an&&typeof(an)==="function"){if(i.f===2){i.t._applyPT.m=an}else{i.m=an}}i=i._next
}};I._onPluginEvent=function(an,i){var aq=i._firstPT,at,ap,ar,ao,p;if(an==="_onInitAllProps"){while(aq){p=aq._next;
ap=ar;while(ap&&ap.pr>aq.pr){ap=ap._next}if((aq._prev=ap?ap._prev:ao)){aq._prev._next=aq
}else{ar=aq}if((aq._next=ap)){ap._prev=aq}else{ao=aq}aq=p}aq=i._firstPT=ar}while(aq){if(aq.pg){if(typeof(aq.t[an])==="function"){if(aq.t[an]()){at=true
}}}aq=aq._next}return at};g.activate=function(p){var an=p.length;while(--an>-1){if(p[an].API===g.API){E[(new p[an]())._propName]=p[an]
}}return true};h.plugin=function(i){if(!i||!i.propName||!i.init||!i.API){throw"illegal plugin definition."
}var ap=i.propName,an=i.priority||0,at=i.overwriteProps,ar={init:"_onInitTween",set:"setRatio",kill:"_kill",round:"_mod",mod:"_mod",initAll:"_onInitAllProps"},ao=y("plugins."+ap.charAt(0).toUpperCase()+ap.substr(1)+"Plugin",function(){g.call(this,ap,an);
this._overwriteProps=at||[]},(i.global===true)),aq=ao.prototype=new g(ap),au;aq.constructor=ao;
ao.API=i.API;for(au in ar){if(typeof(i[au])==="function"){aq[ar[au]]=i[au]}}ao.version=i.version;
g.activate([ao]);return ao};al=Z._gsQueue;if(al){for(af=0;af<al.length;af++){al[af]()
}for(ab in o){if(!o[ab].func){Z.console.log("GSAP encountered missing dependency: "+ab)
}}}O=false})((typeof(c)!=="undefined"&&c.exports&&typeof(f)!=="undefined")?f:this||window,"TweenMax")
}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{}],209:[function(b,c,a){var d=b("./initializer");d.setup();b("gsap/TimelineLite");
d.complete();c.exports=window.TimelineLite},{"./initializer":215,"gsap/TimelineLite":205}],210:[function(b,c,a){var d=b("./initializer");
d.setup();b("gsap/TimelineMax");d.complete();c.exports=window.TimelineMax},{"./initializer":215,"gsap/TimelineMax":206}],211:[function(b,c,a){var d=b("./initializer");
d.setup();b("gsap/TweenLite");d.complete();c.exports=window.TweenLite},{"./initializer":215,"gsap/TweenLite":207}],212:[function(b,c,a){var d=b("./initializer");
d.setup();b("gsap/TweenMax");d.complete();c.exports=window.TweenMax},{"./initializer":215,"gsap/TweenMax":208}],213:[function(b,c,a){c.exports={initializer:b("./initializer"),TimelineLite:b("./TimelineLite"),TimelineMax:b("./TimelineMax"),TweenLite:b("./TweenLite"),TweenMax:b("./TweenMax"),EasePack:b("./easing/EasePack.js"),AttrPlugin:b("./plugins/AttrPlugin.js"),BezierPlugin:b("./plugins/BezierPlugin.js"),CSSPlugin:b("./plugins/CSSPlugin.js"),CSSRulePlugin:b("./plugins/CSSRulePlugin.js"),ColorPropsPlugin:b("./plugins/ColorPropsPlugin.js"),DirectionalRotationPlugin:b("./plugins/DirectionalRotationPlugin.js"),EndArrayPlugin:b("./plugins/EndArrayPlugin.js"),ModifiersPlugin:b("./plugins/ModifiersPlugin.js"),RoundPropsPlugin:b("./plugins/RoundPropsPlugin.js"),ScrollToPlugin:b("./plugins/ScrollToPlugin.js"),TextPlugin:b("./plugins/TextPlugin.js"),Draggable:b("./utils/Draggable.js")}
},{"./TimelineLite":209,"./TimelineMax":210,"./TweenLite":211,"./TweenMax":212,"./easing/EasePack.js":214,"./initializer":215,"./plugins/AttrPlugin.js":216,"./plugins/BezierPlugin.js":217,"./plugins/CSSPlugin.js":218,"./plugins/CSSRulePlugin.js":219,"./plugins/ColorPropsPlugin.js":220,"./plugins/DirectionalRotationPlugin.js":221,"./plugins/EndArrayPlugin.js":222,"./plugins/ModifiersPlugin.js":223,"./plugins/RoundPropsPlugin.js":224,"./plugins/ScrollToPlugin.js":225,"./plugins/TextPlugin.js":226,"./utils/Draggable.js":227}],214:[function(b,c,a){var d=b("../initializer");
d.setup();b("gsap/EasePack");d.complete();c.exports=window.Ease},{"../initializer":215,"gsap/EasePack":199}],215:[function(b,c,a){var d=b("@marcom/ac-raf-emitter/external");
var f=b("@marcom/ac-raf-emitter/cancelExternal");c.exports=(function(){var h=true;
var i=window.requestAnimationFrame;var g=window.cancelAnimationFrame;return{useRAFEmitter:function(j){h=j
},setup:function(){if(h){window.requestAnimationFrame=d;window.cancelAnimationFrame=f
}},complete:function(){window.requestAnimationFrame=i;window.cancelAnimationFrame=g
}}})()},{"@marcom/ac-raf-emitter/cancelExternal":301,"@marcom/ac-raf-emitter/external":303}],216:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/AttrPlugin");d.complete();
return true}})()},{"../initializer":215,"gsap/AttrPlugin":192}],217:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/BezierPlugin");d.complete();
return window.BezierPlugin}})()},{"../initializer":215,"gsap/BezierPlugin":193}],218:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/CSSPlugin");d.complete();
return window.CSSPlugin}})()},{"../initializer":215,"gsap/CSSPlugin":194}],219:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/CSSRulePlugin");d.complete();
return window.CSSRulePlugin}})()},{"../initializer":215,"gsap/CSSRulePlugin":195}],220:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/ColorPropsPlugin");
d.complete();return window.ColorPropsPlugin}})()},{"../initializer":215,"gsap/ColorPropsPlugin":196}],221:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/DirectionalRotationPlugin");
d.complete();return true}})()},{"../initializer":215,"gsap/DirectionalRotationPlugin":197}],222:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();var g=b("gsap/EndArrayPlugin");
d.complete();return g}})()},{"../initializer":215,"gsap/EndArrayPlugin":200}],223:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/ModifiersPlugin");d.complete();
return true}})()},{"../initializer":215,"gsap/ModifiersPlugin":201}],224:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();var g=b("gsap/RoundPropsPlugin");
d.complete();return g}})()},{"../initializer":215,"gsap/RoundPropsPlugin":202}],225:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();var g=b("gsap/ScrollToPlugin");
d.complete();return g}})()},{"../initializer":215,"gsap/ScrollToPlugin":203}],226:[function(b,c,a){var d=b("../initializer");
c.exports=(function(){return function f(){d.setup();b("gsap/TextPlugin");d.complete();
return true}})()},{"../initializer":215,"gsap/TextPlugin":204}],227:[function(c,d,b){var f=c("../initializer");
f.setup();var a=c("gsap/Draggable");f.complete();d.exports=a},{"../initializer":215,"gsap/Draggable":198}],228:[function(b,c,a){(function(u){
/*!
 * The buffer module from node.js, for the browser.
 *
 * @author   Feross Aboukhadijeh <feross@feross.org> <http://feross.org>
 * @license  MIT
 */
"use strict";
var aL=b("base64-js");var g=b("ieee754");var f=b("isarray");a.Buffer=aJ;a.SlowBuffer=aW;
a.INSPECT_MAX_BYTES=50;aJ.TYPED_ARRAY_SUPPORT=u.TYPED_ARRAY_SUPPORT!==undefined?u.TYPED_ARRAY_SUPPORT:aP();
a.kMaxLength=ax();function aP(){try{var a9=new Uint8Array(1);a9.__proto__={__proto__:Uint8Array.prototype,foo:function(){return 42
}};return a9.foo()===42&&typeof a9.subarray==="function"&&a9.subarray(1,1).byteLength===0
}catch(ba){return false}}function ax(){return aJ.TYPED_ARRAY_SUPPORT?2147483647:1073741823
}function S(ba,a9){if(ax()<a9){throw new RangeError("Invalid typed array length")
}if(aJ.TYPED_ARRAY_SUPPORT){ba=new Uint8Array(a9);ba.__proto__=aJ.prototype}else{if(ba===null){ba=new aJ(a9)
}ba.length=a9}return ba}function aJ(a9,ba,bb){if(!aJ.TYPED_ARRAY_SUPPORT&&!(this instanceof aJ)){return new aJ(a9,ba,bb)
}if(typeof a9==="number"){if(typeof ba==="string"){throw new Error("If encoding is specified then the first argument must be a string")
}return ah(this,a9)}return ae(this,a9,ba,bb)}aJ.poolSize=8192;aJ._augment=function(a9){a9.__proto__=aJ.prototype;
return a9};function ae(bb,bc,a9,ba){if(typeof bc==="number"){throw new TypeError('"value" argument must not be a number')
}if(typeof ArrayBuffer!=="undefined"&&bc instanceof ArrayBuffer){return ar(bb,bc,a9,ba)
}if(typeof bc==="string"){return h(bb,bc,a9)}return aj(bb,bc)}aJ.from=function(bb,a9,ba){return ae(null,bb,a9,ba)
};if(aJ.TYPED_ARRAY_SUPPORT){aJ.prototype.__proto__=Uint8Array.prototype;aJ.__proto__=Uint8Array;
if(typeof Symbol!=="undefined"&&Symbol.species&&aJ[Symbol.species]===aJ){Object.defineProperty(aJ,Symbol.species,{value:null,configurable:true})
}}function P(a9){if(typeof a9!=="number"){throw new TypeError('"size" argument must be a number')
}else{if(a9<0){throw new RangeError('"size" argument must not be negative')}}}function an(bb,a9,bc,ba){P(a9);
if(a9<=0){return S(bb,a9)}if(bc!==undefined){return typeof ba==="string"?S(bb,a9).fill(bc,ba):S(bb,a9).fill(bc)
}return S(bb,a9)}aJ.alloc=function(a9,bb,ba){return an(null,a9,bb,ba)};function ah(bb,ba){P(ba);
bb=S(bb,ba<0?0:aU(ba)|0);if(!aJ.TYPED_ARRAY_SUPPORT){for(var a9=0;a9<ba;++a9){bb[a9]=0
}}return bb}aJ.allocUnsafe=function(a9){return ah(null,a9)};aJ.allocUnsafeSlow=function(a9){return ah(null,a9)
};function h(bc,a9,bb){if(typeof bb!=="string"||bb===""){bb="utf8"}if(!aJ.isEncoding(bb)){throw new TypeError('"encoding" must be a valid string encoding')
}var ba=aC(a9,bb)|0;bc=S(bc,ba);var bd=bc.write(a9,bb);if(bd!==ba){bc=bc.slice(0,bd)
}return bc}function O(bb,bc){var ba=bc.length<0?0:aU(bc.length)|0;bb=S(bb,ba);for(var a9=0;
a9<ba;a9+=1){bb[a9]=bc[a9]&255}return bb}function ar(bb,bc,a9,ba){bc.byteLength;
if(a9<0||bc.byteLength<a9){throw new RangeError("'offset' is out of bounds")}if(bc.byteLength<a9+(ba||0)){throw new RangeError("'length' is out of bounds")
}if(a9===undefined&&ba===undefined){bc=new Uint8Array(bc)}else{if(ba===undefined){bc=new Uint8Array(bc,a9)
}else{bc=new Uint8Array(bc,a9,ba)}}if(aJ.TYPED_ARRAY_SUPPORT){bb=bc;bb.__proto__=aJ.prototype
}else{bb=O(bb,bc)}return bb}function aj(ba,bb){if(aJ.isBuffer(bb)){var a9=aU(bb.length)|0;
ba=S(ba,a9);if(ba.length===0){return ba}bb.copy(ba,0,0,a9);return ba}if(bb){if((typeof ArrayBuffer!=="undefined"&&bb.buffer instanceof ArrayBuffer)||"length" in bb){if(typeof bb.length!=="number"||W(bb.length)){return S(ba,0)
}return O(ba,bb)}if(bb.type==="Buffer"&&f(bb.data)){return O(ba,bb.data)}}throw new TypeError("First argument must be a string, Buffer, ArrayBuffer, Array, or array-like object.")
}function aU(a9){if(a9>=ax()){throw new RangeError("Attempt to allocate Buffer larger than maximum size: 0x"+ax().toString(16)+" bytes")
}return a9|0}function aW(a9){if(+a9!=a9){a9=0}return aJ.alloc(+a9)}aJ.isBuffer=function x(a9){return !!(a9!=null&&a9._isBuffer)
};aJ.compare=function a5(bc,bb){if(!aJ.isBuffer(bc)||!aJ.isBuffer(bb)){throw new TypeError("Arguments must be Buffers")
}if(bc===bb){return 0}var ba=bc.length;var be=bb.length;for(var bd=0,a9=Math.min(ba,be);
bd<a9;++bd){if(bc[bd]!==bb[bd]){ba=bc[bd];be=bb[bd];break}}if(ba<be){return -1}if(be<ba){return 1
}return 0};aJ.isEncoding=function Z(a9){switch(String(a9).toLowerCase()){case"hex":case"utf8":case"utf-8":case"ascii":case"latin1":case"binary":case"base64":case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return true;
default:return false}};aJ.concat=function a2(bd,bc){if(!f(bd)){throw new TypeError('"list" argument must be an Array of Buffers')
}if(bd.length===0){return aJ.alloc(0)}var bb;if(bc===undefined){bc=0;for(bb=0;bb<bd.length;
++bb){bc+=bd[bb].length}}var a9=aJ.allocUnsafe(bc);var be=0;for(bb=0;bb<bd.length;
++bb){var ba=bd[bb];if(!aJ.isBuffer(ba)){throw new TypeError('"list" argument must be an Array of Buffers')
}ba.copy(a9,be);be+=ba.length}return a9};function aC(ba,bb){if(aJ.isBuffer(ba)){return ba.length
}if(typeof ArrayBuffer!=="undefined"&&typeof ArrayBuffer.isView==="function"&&(ArrayBuffer.isView(ba)||ba instanceof ArrayBuffer)){return ba.byteLength
}if(typeof ba!=="string"){ba=""+ba}var a9=ba.length;if(a9===0){return 0}var bc=false;
for(;;){switch(bb){case"ascii":case"latin1":case"binary":return a9;case"utf8":case"utf-8":case undefined:return aY(ba).length;
case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return a9*2;case"hex":return a9>>>1;
case"base64":return ak(ba).length;default:if(bc){return aY(ba).length}bb=(""+bb).toLowerCase();
bc=true}}}aJ.byteLength=aC;function R(ba,bc,a9){var bb=false;if(bc===undefined||bc<0){bc=0
}if(bc>this.length){return""}if(a9===undefined||a9>this.length){a9=this.length}if(a9<=0){return""
}a9>>>=0;bc>>>=0;if(a9<=bc){return""}if(!ba){ba="utf8"}while(true){switch(ba){case"hex":return ag(this,bc,a9);
case"utf8":case"utf-8":return aV(this,bc,a9);case"ascii":return L(this,bc,a9);case"latin1":case"binary":return aq(this,bc,a9);
case"base64":return aN(this,bc,a9);case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return ap(this,bc,a9);
default:if(bb){throw new TypeError("Unknown encoding: "+ba)}ba=(ba+"").toLowerCase();
bb=true}}}aJ.prototype._isBuffer=true;function a4(ba,bc,a9){var bb=ba[bc];ba[bc]=ba[a9];
ba[a9]=bb}aJ.prototype.swap16=function I(){var a9=this.length;if(a9%2!==0){throw new RangeError("Buffer size must be a multiple of 16-bits")
}for(var ba=0;ba<a9;ba+=2){a4(this,ba,ba+1)}return this};aJ.prototype.swap32=function a8(){var a9=this.length;
if(a9%4!==0){throw new RangeError("Buffer size must be a multiple of 32-bits")}for(var ba=0;
ba<a9;ba+=4){a4(this,ba,ba+3);a4(this,ba+1,ba+2)}return this};aJ.prototype.swap64=function ad(){var a9=this.length;
if(a9%8!==0){throw new RangeError("Buffer size must be a multiple of 64-bits")}for(var ba=0;
ba<a9;ba+=8){a4(this,ba,ba+7);a4(this,ba+1,ba+6);a4(this,ba+2,ba+5);a4(this,ba+3,ba+4)
}return this};aJ.prototype.toString=function az(){var a9=this.length|0;if(a9===0){return""
}if(arguments.length===0){return aV(this,0,a9)}return R.apply(this,arguments)};
aJ.prototype.equals=function K(a9){if(!aJ.isBuffer(a9)){throw new TypeError("Argument must be a Buffer")
}if(this===a9){return true}return aJ.compare(this,a9)===0};aJ.prototype.inspect=function aZ(){var ba="";
var a9=a.INSPECT_MAX_BYTES;if(this.length>0){ba=this.toString("hex",0,a9).match(/.{2}/g).join(" ");
if(this.length>a9){ba+=" ... "}}return"<Buffer "+ba+">"};aJ.prototype.compare=function a5(bg,a9,bc,bh,ba){if(!aJ.isBuffer(bg)){throw new TypeError("Argument must be a Buffer")
}if(a9===undefined){a9=0}if(bc===undefined){bc=bg?bg.length:0}if(bh===undefined){bh=0
}if(ba===undefined){ba=this.length}if(a9<0||bc>bg.length||bh<0||ba>this.length){throw new RangeError("out of range index")
}if(bh>=ba&&a9>=bc){return 0}if(bh>=ba){return -1}if(a9>=bc){return 1}a9>>>=0;bc>>>=0;
bh>>>=0;ba>>>=0;if(this===bg){return 0}var bj=ba-bh;var bi=bc-a9;var bf=Math.min(bj,bi);
var bb=this.slice(bh,ba);var be=bg.slice(a9,bc);for(var bd=0;bd<bf;++bd){if(bb[bd]!==be[bd]){bj=bb[bd];
bi=be[bd];break}}if(bj<bi){return -1}if(bi<bj){return 1}return 0};function ay(a9,bd,bb,bc,ba){if(a9.length===0){return -1
}if(typeof bb==="string"){bc=bb;bb=0}else{if(bb>2147483647){bb=2147483647}else{if(bb<-2147483648){bb=-2147483648
}}}bb=+bb;if(isNaN(bb)){bb=ba?0:(a9.length-1)}if(bb<0){bb=a9.length+bb}if(bb>=a9.length){if(ba){return -1
}else{bb=a9.length-1}}else{if(bb<0){if(ba){bb=0}else{return -1}}}if(typeof bd==="string"){bd=aJ.from(bd,bc)
}if(aJ.isBuffer(bd)){if(bd.length===0){return -1}return r(a9,bd,bb,bc,ba)}else{if(typeof bd==="number"){bd=bd&255;
if(aJ.TYPED_ARRAY_SUPPORT&&typeof Uint8Array.prototype.indexOf==="function"){if(ba){return Uint8Array.prototype.indexOf.call(a9,bd,bb)
}else{return Uint8Array.prototype.lastIndexOf.call(a9,bd,bb)}}return r(a9,[bd],bb,bc,ba)
}}throw new TypeError("val must be string, number or Buffer")}function r(bg,bb,bc,ba,bd){var bj=1;
var bk=bg.length;var bh=bb.length;if(ba!==undefined){ba=String(ba).toLowerCase();
if(ba==="ucs2"||ba==="ucs-2"||ba==="utf16le"||ba==="utf-16le"){if(bg.length<2||bb.length<2){return -1
}bj=2;bk/=2;bh/=2;bc/=2}}function a9(bm,bn){if(bj===1){return bm[bn]}else{return bm.readUInt16BE(bn*bj)
}}var bf;if(bd){var bi=-1;for(bf=bc;bf<bk;bf++){if(a9(bg,bf)===a9(bb,bi===-1?0:bf-bi)){if(bi===-1){bi=bf
}if(bf-bi+1===bh){return bi*bj}}else{if(bi!==-1){bf-=bf-bi}bi=-1}}}else{if(bc+bh>bk){bc=bk-bh
}for(bf=bc;bf>=0;bf--){var bl=true;for(var be=0;be<bh;be++){if(a9(bg,bf+be)!==a9(bb,be)){bl=false;
break}}if(bl){return bf}}}return -1}aJ.prototype.includes=function M(bb,a9,ba){return this.indexOf(bb,a9,ba)!==-1
};aJ.prototype.indexOf=function k(bb,a9,ba){return ay(this,bb,a9,ba,true)};aJ.prototype.lastIndexOf=function aR(bb,a9,ba){return ay(this,bb,a9,ba,false)
};function q(bb,ba,bg,bf){bg=Number(bg)||0;var bd=bb.length-bg;if(!bf){bf=bd}else{bf=Number(bf);
if(bf>bd){bf=bd}}var be=ba.length;if(be%2!==0){throw new TypeError("Invalid hex string")
}if(bf>be/2){bf=be/2}for(var bc=0;bc<bf;++bc){var a9=parseInt(ba.substr(bc*2,2),16);
if(isNaN(a9)){return bc}bb[bg+bc]=a9}return bc}function ab(ba,a9,bc,bb){return aa(aY(a9,ba.length-bc),ba,bc,bb)
}function a6(ba,a9,bc,bb){return aa(al(a9),ba,bc,bb)}function E(ba,a9,bc,bb){return a6(ba,a9,bc,bb)
}function X(ba,a9,bc,bb){return aa(ak(a9),ba,bc,bb)}function w(ba,a9,bc,bb){return aa(aB(a9,ba.length-bc),ba,bc,bb)
}aJ.prototype.write=function a1(a9,bd,bc,bb){if(bd===undefined){bb="utf8";bc=this.length;
bd=0}else{if(bc===undefined&&typeof bd==="string"){bb=bd;bc=this.length;bd=0}else{if(isFinite(bd)){bd=bd|0;
if(isFinite(bc)){bc=bc|0;if(bb===undefined){bb="utf8"}}else{bb=bc;bc=undefined}}else{throw new Error("Buffer.write(string, encoding, offset[, length]) is no longer supported")
}}}var ba=this.length-bd;if(bc===undefined||bc>ba){bc=ba}if((a9.length>0&&(bc<0||bd<0))||bd>this.length){throw new RangeError("Attempt to write outside buffer bounds")
}if(!bb){bb="utf8"}var be=false;for(;;){switch(bb){case"hex":return q(this,a9,bd,bc);
case"utf8":case"utf-8":return ab(this,a9,bd,bc);case"ascii":return a6(this,a9,bd,bc);
case"latin1":case"binary":return E(this,a9,bd,bc);case"base64":return X(this,a9,bd,bc);
case"ucs2":case"ucs-2":case"utf16le":case"utf-16le":return w(this,a9,bd,bc);default:if(be){throw new TypeError("Unknown encoding: "+bb)
}bb=(""+bb).toLowerCase();be=true}}};aJ.prototype.toJSON=function D(){return{type:"Buffer",data:Array.prototype.slice.call(this._arr||this,0)}
};function aN(ba,bb,a9){if(bb===0&&a9===ba.length){return aL.fromByteArray(ba)}else{return aL.fromByteArray(ba.slice(bb,a9))
}}function aV(bb,ba,bd){bd=Math.min(bb.length,bd);var bg=[];var be=ba;while(be<bd){var bi=bb[be];
var bh=null;var bk=(bi>239)?4:(bi>223)?3:(bi>191)?2:1;if(be+bk<=bd){var bj,a9,bf,bc;
switch(bk){case 1:if(bi<128){bh=bi}break;case 2:bj=bb[be+1];if((bj&192)===128){bc=(bi&31)<<6|(bj&63);
if(bc>127){bh=bc}}break;case 3:bj=bb[be+1];a9=bb[be+2];if((bj&192)===128&&(a9&192)===128){bc=(bi&15)<<12|(bj&63)<<6|(a9&63);
if(bc>2047&&(bc<55296||bc>57343)){bh=bc}}break;case 4:bj=bb[be+1];a9=bb[be+2];bf=bb[be+3];
if((bj&192)===128&&(a9&192)===128&&(bf&192)===128){bc=(bi&15)<<18|(bj&63)<<12|(a9&63)<<6|(bf&63);
if(bc>65535&&bc<1114112){bh=bc}}}}if(bh===null){bh=65533;bk=1}else{if(bh>65535){bh-=65536;
bg.push(bh>>>10&1023|55296);bh=56320|bh&1023}}bg.push(bh);be+=bk}return ai(bg)}var Y=4096;
function ai(ba){var a9=ba.length;if(a9<=Y){return String.fromCharCode.apply(String,ba)
}var bc="";var bb=0;while(bb<a9){bc+=String.fromCharCode.apply(String,ba.slice(bb,bb+=Y))
}return bc}function L(bb,bd,a9){var ba="";a9=Math.min(bb.length,a9);for(var bc=bd;
bc<a9;++bc){ba+=String.fromCharCode(bb[bc]&127)}return ba}function aq(bb,bd,a9){var ba="";
a9=Math.min(bb.length,a9);for(var bc=bd;bc<a9;++bc){ba+=String.fromCharCode(bb[bc])
}return ba}function ag(bc,be,ba){var a9=bc.length;if(!be||be<0){be=0}if(!ba||ba<0||ba>a9){ba=a9
}var bb="";for(var bd=be;bd<ba;++bd){bb+=aF(bc[bd])}return bb}function ap(bb,be,ba){var a9=bb.slice(be,ba);
var bd="";for(var bc=0;bc<a9.length;bc+=2){bd+=String.fromCharCode(a9[bc]+a9[bc+1]*256)
}return bd}aJ.prototype.slice=function A(be,ba){var a9=this.length;be=~~be;ba=ba===undefined?a9:~~ba;
if(be<0){be+=a9;if(be<0){be=0}}else{if(be>a9){be=a9}}if(ba<0){ba+=a9;if(ba<0){ba=0
}}else{if(ba>a9){ba=a9}}if(ba<be){ba=be}var bd;if(aJ.TYPED_ARRAY_SUPPORT){bd=this.subarray(be,ba);
bd.__proto__=aJ.prototype}else{var bc=ba-be;bd=new aJ(bc,undefined);for(var bb=0;
bb<bc;++bb){bd[bb]=this[bb+be]}}return bd};function aA(bb,a9,ba){if((bb%1)!==0||bb<0){throw new RangeError("offset is not uint")
}if(bb+a9>ba){throw new RangeError("Trying to access beyond buffer length")}}aJ.prototype.readUIntLE=function j(be,a9,bc){be=be|0;
a9=a9|0;if(!bc){aA(be,a9,this.length)}var bd=this[be];var bb=1;var ba=0;while(++ba<a9&&(bb*=256)){bd+=this[be+ba]*bb
}return bd};aJ.prototype.readUIntBE=function aG(bd,a9,bb){bd=bd|0;a9=a9|0;if(!bb){aA(bd,a9,this.length)
}var bc=this[bd+ --a9];var ba=1;while(a9>0&&(ba*=256)){bc+=this[bd+ --a9]*ba}return bc
};aJ.prototype.readUInt8=function m(ba,a9){if(!a9){aA(ba,1,this.length)}return this[ba]
};aJ.prototype.readUInt16LE=function p(ba,a9){if(!a9){aA(ba,2,this.length)}return this[ba]|(this[ba+1]<<8)
};aJ.prototype.readUInt16BE=function aQ(ba,a9){if(!a9){aA(ba,2,this.length)}return(this[ba]<<8)|this[ba+1]
};aJ.prototype.readUInt32LE=function Q(ba,a9){if(!a9){aA(ba,4,this.length)}return((this[ba])|(this[ba+1]<<8)|(this[ba+2]<<16))+(this[ba+3]*16777216)
};aJ.prototype.readUInt32BE=function a7(ba,a9){if(!a9){aA(ba,4,this.length)}return(this[ba]*16777216)+((this[ba+1]<<16)|(this[ba+2]<<8)|this[ba+3])
};aJ.prototype.readIntLE=function at(be,a9,bc){be=be|0;a9=a9|0;if(!bc){aA(be,a9,this.length)
}var bd=this[be];var bb=1;var ba=0;while(++ba<a9&&(bb*=256)){bd+=this[be+ba]*bb
}bb*=128;if(bd>=bb){bd-=Math.pow(2,8*a9)}return bd};aJ.prototype.readIntBE=function B(be,a9,bc){be=be|0;
a9=a9|0;if(!bc){aA(be,a9,this.length)}var ba=a9;var bb=1;var bd=this[be+ --ba];
while(ba>0&&(bb*=256)){bd+=this[be+ --ba]*bb}bb*=128;if(bd>=bb){bd-=Math.pow(2,8*a9)
}return bd};aJ.prototype.readInt8=function aT(ba,a9){if(!a9){aA(ba,1,this.length)
}if(!(this[ba]&128)){return(this[ba])}return((255-this[ba]+1)*-1)};aJ.prototype.readInt16LE=function aD(bb,a9){if(!a9){aA(bb,2,this.length)
}var ba=this[bb]|(this[bb+1]<<8);return(ba&32768)?ba|4294901760:ba};aJ.prototype.readInt16BE=function N(bb,a9){if(!a9){aA(bb,2,this.length)
}var ba=this[bb+1]|(this[bb]<<8);return(ba&32768)?ba|4294901760:ba};aJ.prototype.readInt32LE=function a0(ba,a9){if(!a9){aA(ba,4,this.length)
}return(this[ba])|(this[ba+1]<<8)|(this[ba+2]<<16)|(this[ba+3]<<24)};aJ.prototype.readInt32BE=function af(ba,a9){if(!a9){aA(ba,4,this.length)
}return(this[ba]<<24)|(this[ba+1]<<16)|(this[ba+2]<<8)|(this[ba+3])};aJ.prototype.readFloatLE=function l(ba,a9){if(!a9){aA(ba,4,this.length)
}return g.read(this,ba,true,23,4)};aJ.prototype.readFloatBE=function aK(ba,a9){if(!a9){aA(ba,4,this.length)
}return g.read(this,ba,false,23,4)};aJ.prototype.readDoubleLE=function d(ba,a9){if(!a9){aA(ba,8,this.length)
}return g.read(this,ba,true,52,8)};aJ.prototype.readDoubleBE=function au(ba,a9){if(!a9){aA(ba,8,this.length)
}return g.read(this,ba,false,52,8)};function aS(ba,bd,be,bc,a9,bb){if(!aJ.isBuffer(ba)){throw new TypeError('"buffer" argument must be a Buffer instance')
}if(bd>a9||bd<bb){throw new RangeError('"value" argument is out of bounds')}if(be+bc>ba.length){throw new RangeError("Index out of range")
}}aJ.prototype.writeUIntLE=function aw(bc,bf,ba,be){bc=+bc;bf=bf|0;ba=ba|0;if(!be){var a9=Math.pow(2,8*ba)-1;
aS(this,bc,bf,ba,a9,0)}var bd=1;var bb=0;this[bf]=bc&255;while(++bb<ba&&(bd*=256)){this[bf+bb]=(bc/bd)&255
}return bf+ba};aJ.prototype.writeUIntBE=function H(bc,bf,ba,be){bc=+bc;bf=bf|0;
ba=ba|0;if(!be){var a9=Math.pow(2,8*ba)-1;aS(this,bc,bf,ba,a9,0)}var bb=ba-1;var bd=1;
this[bf+bb]=bc&255;while(--bb>=0&&(bd*=256)){this[bf+bb]=(bc/bd)&255}return bf+ba
};aJ.prototype.writeUInt8=function aH(a9,bb,ba){a9=+a9;bb=bb|0;if(!ba){aS(this,a9,bb,1,255,0)
}if(!aJ.TYPED_ARRAY_SUPPORT){a9=Math.floor(a9)}this[bb]=(a9&255);return bb+1};function aE(ba,bc,be,bd){if(bc<0){bc=65535+bc+1
}for(var bb=0,a9=Math.min(ba.length-be,2);bb<a9;++bb){ba[be+bb]=(bc&(255<<(8*(bd?bb:1-bb))))>>>(bd?bb:1-bb)*8
}}aJ.prototype.writeUInt16LE=function ac(a9,bb,ba){a9=+a9;bb=bb|0;if(!ba){aS(this,a9,bb,2,65535,0)
}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9&255);this[bb+1]=(a9>>>8)}else{aE(this,a9,bb,true)
}return bb+2};aJ.prototype.writeUInt16BE=function i(a9,bb,ba){a9=+a9;bb=bb|0;if(!ba){aS(this,a9,bb,2,65535,0)
}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9>>>8);this[bb+1]=(a9&255)}else{aE(this,a9,bb,false)
}return bb+2};function V(ba,bc,be,bd){if(bc<0){bc=4294967295+bc+1}for(var bb=0,a9=Math.min(ba.length-be,4);
bb<a9;++bb){ba[be+bb]=(bc>>>(bd?bb:3-bb)*8)&255}}aJ.prototype.writeUInt32LE=function av(a9,bb,ba){a9=+a9;
bb=bb|0;if(!ba){aS(this,a9,bb,4,4294967295,0)}if(aJ.TYPED_ARRAY_SUPPORT){this[bb+3]=(a9>>>24);
this[bb+2]=(a9>>>16);this[bb+1]=(a9>>>8);this[bb]=(a9&255)}else{V(this,a9,bb,true)
}return bb+4};aJ.prototype.writeUInt32BE=function F(a9,bb,ba){a9=+a9;bb=bb|0;if(!ba){aS(this,a9,bb,4,4294967295,0)
}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9>>>24);this[bb+1]=(a9>>>16);this[bb+2]=(a9>>>8);
this[bb+3]=(a9&255)}else{V(this,a9,bb,false)}return bb+4};aJ.prototype.writeIntLE=function v(bd,bg,ba,bf){bd=+bd;
bg=bg|0;if(!bf){var a9=Math.pow(2,8*ba-1);aS(this,bd,bg,ba,a9-1,-a9)}var bb=0;var be=1;
var bc=0;this[bg]=bd&255;while(++bb<ba&&(be*=256)){if(bd<0&&bc===0&&this[bg+bb-1]!==0){bc=1
}this[bg+bb]=((bd/be)>>0)-bc&255}return bg+ba};aJ.prototype.writeIntBE=function aX(bd,bg,ba,bf){bd=+bd;
bg=bg|0;if(!bf){var a9=Math.pow(2,8*ba-1);aS(this,bd,bg,ba,a9-1,-a9)}var bb=ba-1;
var be=1;var bc=0;this[bg+bb]=bd&255;while(--bb>=0&&(be*=256)){if(bd<0&&bc===0&&this[bg+bb+1]!==0){bc=1
}this[bg+bb]=((bd/be)>>0)-bc&255}return bg+ba};aJ.prototype.writeInt8=function am(a9,bb,ba){a9=+a9;
bb=bb|0;if(!ba){aS(this,a9,bb,1,127,-128)}if(!aJ.TYPED_ARRAY_SUPPORT){a9=Math.floor(a9)
}if(a9<0){a9=255+a9+1}this[bb]=(a9&255);return bb+1};aJ.prototype.writeInt16LE=function ao(a9,bb,ba){a9=+a9;
bb=bb|0;if(!ba){aS(this,a9,bb,2,32767,-32768)}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9&255);
this[bb+1]=(a9>>>8)}else{aE(this,a9,bb,true)}return bb+2};aJ.prototype.writeInt16BE=function z(a9,bb,ba){a9=+a9;
bb=bb|0;if(!ba){aS(this,a9,bb,2,32767,-32768)}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9>>>8);
this[bb+1]=(a9&255)}else{aE(this,a9,bb,false)}return bb+2};aJ.prototype.writeInt32LE=function aM(a9,bb,ba){a9=+a9;
bb=bb|0;if(!ba){aS(this,a9,bb,4,2147483647,-2147483648)}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9&255);
this[bb+1]=(a9>>>8);this[bb+2]=(a9>>>16);this[bb+3]=(a9>>>24)}else{V(this,a9,bb,true)
}return bb+4};aJ.prototype.writeInt32BE=function U(a9,bb,ba){a9=+a9;bb=bb|0;if(!ba){aS(this,a9,bb,4,2147483647,-2147483648)
}if(a9<0){a9=4294967295+a9+1}if(aJ.TYPED_ARRAY_SUPPORT){this[bb]=(a9>>>24);this[bb+1]=(a9>>>16);
this[bb+2]=(a9>>>8);this[bb+3]=(a9&255)}else{V(this,a9,bb,false)}return bb+4};function T(ba,bd,be,bc,a9,bb){if(be+bc>ba.length){throw new RangeError("Index out of range")
}if(be<0){throw new RangeError("Index out of range")}}function y(a9,ba,bd,bc,bb){if(!bb){T(a9,ba,bd,4,3.4028234663852886e+38,-3.4028234663852886e+38)
}g.write(a9,ba,bd,bc,23,4);return bd+4}aJ.prototype.writeFloatLE=function n(a9,bb,ba){return y(this,a9,bb,true,ba)
};aJ.prototype.writeFloatBE=function aO(a9,bb,ba){return y(this,a9,bb,false,ba)
};function t(a9,ba,bd,bc,bb){if(!bb){T(a9,ba,bd,8,1.7976931348623157e+308,-1.7976931348623157e+308)
}g.write(a9,ba,bd,bc,52,8);return bd+8}aJ.prototype.writeDoubleLE=function J(a9,bb,ba){return t(this,a9,bb,true,ba)
};aJ.prototype.writeDoubleBE=function a3(a9,bb,ba){return t(this,a9,bb,false,ba)
};aJ.prototype.copy=function G(bc,bd,be,ba){if(!be){be=0}if(!ba&&ba!==0){ba=this.length
}if(bd>=bc.length){bd=bc.length}if(!bd){bd=0}if(ba>0&&ba<be){ba=be}if(ba===be){return 0
}if(bc.length===0||this.length===0){return 0}if(bd<0){throw new RangeError("targetStart out of bounds")
}if(be<0||be>=this.length){throw new RangeError("sourceStart out of bounds")}if(ba<0){throw new RangeError("sourceEnd out of bounds")
}if(ba>this.length){ba=this.length}if(bc.length-bd<ba-be){ba=bc.length-bd+be}var a9=ba-be;
var bb;if(this===bc&&be<bd&&bd<ba){for(bb=a9-1;bb>=0;--bb){bc[bb+bd]=this[bb+be]
}}else{if(a9<1000||!aJ.TYPED_ARRAY_SUPPORT){for(bb=0;bb<a9;++bb){bc[bb+bd]=this[bb+be]
}}else{Uint8Array.prototype.set.call(bc,this.subarray(be,be+a9),bd)}}return a9};
aJ.prototype.fill=function C(bf,bg,bb,be){if(typeof bf==="string"){if(typeof bg==="string"){be=bg;
bg=0;bb=this.length}else{if(typeof bb==="string"){be=bb;bb=this.length}}if(bf.length===1){var bd=bf.charCodeAt(0);
if(bd<256){bf=bd}}if(be!==undefined&&typeof be!=="string"){throw new TypeError("encoding must be a string")
}if(typeof be==="string"&&!aJ.isEncoding(be)){throw new TypeError("Unknown encoding: "+be)
}}else{if(typeof bf==="number"){bf=bf&255}}if(bg<0||this.length<bg||this.length<bb){throw new RangeError("Out of range index")
}if(bb<=bg){return this}bg=bg>>>0;bb=bb===undefined?this.length:bb>>>0;if(!bf){bf=0
}var bc;if(typeof bf==="number"){for(bc=bg;bc<bb;++bc){this[bc]=bf}}else{var ba=aJ.isBuffer(bf)?bf:aY(new aJ(bf,be).toString());
var a9=ba.length;for(bc=0;bc<bb-bg;++bc){this[bc+bg]=ba[bc%a9]}}return this};var aI=/[^+\/0-9A-Za-z-_]/g;
function o(a9){a9=s(a9).replace(aI,"");if(a9.length<2){return""}while(a9.length%4!==0){a9=a9+"="
}return a9}function s(a9){if(a9.trim){return a9.trim()}return a9.replace(/^\s+|\s+$/g,"")
}function aF(a9){if(a9<16){return"0"+a9.toString(16)}return a9.toString(16)}function aY(bc,ba){ba=ba||Infinity;
var bb;var bf=bc.length;var be=null;var a9=[];for(var bd=0;bd<bf;++bd){bb=bc.charCodeAt(bd);
if(bb>55295&&bb<57344){if(!be){if(bb>56319){if((ba-=3)>-1){a9.push(239,191,189)
}continue}else{if(bd+1===bf){if((ba-=3)>-1){a9.push(239,191,189)}continue}}be=bb;
continue}if(bb<56320){if((ba-=3)>-1){a9.push(239,191,189)}be=bb;continue}bb=(be-55296<<10|bb-56320)+65536
}else{if(be){if((ba-=3)>-1){a9.push(239,191,189)}}}be=null;if(bb<128){if((ba-=1)<0){break
}a9.push(bb)}else{if(bb<2048){if((ba-=2)<0){break}a9.push(bb>>6|192,bb&63|128)}else{if(bb<65536){if((ba-=3)<0){break
}a9.push(bb>>12|224,bb>>6&63|128,bb&63|128)}else{if(bb<1114112){if((ba-=4)<0){break
}a9.push(bb>>18|240,bb>>12&63|128,bb>>6&63|128,bb&63|128)}else{throw new Error("Invalid code point")
}}}}}return a9}function al(bb){var a9=[];for(var ba=0;ba<bb.length;++ba){a9.push(bb.charCodeAt(ba)&255)
}return a9}function aB(be,ba){var bf,bb,bd;var a9=[];for(var bc=0;bc<be.length;
++bc){if((ba-=2)<0){break}bf=be.charCodeAt(bc);bb=bf>>8;bd=bf%256;a9.push(bd);a9.push(bb)
}return a9}function ak(a9){return aL.toByteArray(o(a9))}function aa(bc,bd,bb,ba){for(var a9=0;
a9<ba;++a9){if((a9+bb>=bd.length)||(a9>=bc.length)){break}bd[a9+bb]=bc[a9]}return a9
}function W(a9){return a9!==a9}}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{})
},{"base64-js":229,ieee754:230,isarray:231}],229:[function(g,c,k){k.byteLength=q;
k.toByteArray=h;k.fromByteArray=a;var f=[];var n=[];var o=typeof Uint8Array!=="undefined"?Uint8Array:Array;
var b="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";for(var m=0,p=b.length;
m<p;++m){f[m]=b[m];n[b.charCodeAt(m)]=m}n["-".charCodeAt(0)]=62;n["_".charCodeAt(0)]=63;
function d(r){var i=r.length;if(i%4>0){throw new Error("Invalid string. Length must be a multiple of 4")
}return r[i-2]==="="?2:r[i-1]==="="?1:0}function q(i){return i.length*3/4-d(i)}function h(r){var v,u,s,w,t,x;
var y=r.length;t=d(r);x=new o(y*3/4-t);s=t>0?y-4:y;var z=0;for(v=0,u=0;v<s;v+=4,u+=3){w=(n[r.charCodeAt(v)]<<18)|(n[r.charCodeAt(v+1)]<<12)|(n[r.charCodeAt(v+2)]<<6)|n[r.charCodeAt(v+3)];
x[z++]=(w>>16)&255;x[z++]=(w>>8)&255;x[z++]=w&255}if(t===2){w=(n[r.charCodeAt(v)]<<2)|(n[r.charCodeAt(v+1)]>>4);
x[z++]=w&255}else{if(t===1){w=(n[r.charCodeAt(v)]<<10)|(n[r.charCodeAt(v+1)]<<4)|(n[r.charCodeAt(v+2)]>>2);
x[z++]=(w>>8)&255;x[z++]=w&255}}return x}function l(i){return f[i>>18&63]+f[i>>12&63]+f[i>>6&63]+f[i&63]
}function j(s,w,r){var v;var t=[];for(var u=w;u<r;u+=3){v=(s[u]<<16)+(s[u+1]<<8)+(s[u+2]);
t.push(l(v))}return t.join("")}function a(x){var v;var y=x.length;var z=y%3;var s="";
var u=[];var r=16383;for(var w=0,t=y-z;w<t;w+=r){u.push(j(x,w,(w+r)>t?t:(w+r)))
}if(z===1){v=x[y-1];s+=f[v>>2];s+=f[(v<<4)&63];s+="=="}else{if(z===2){v=(x[y-2]<<8)+(x[y-1]);
s+=f[v>>10];s+=f[(v>>4)&63];s+=f[(v<<2)&63];s+="="}}u.push(s);return u.join("")
}},{}],230:[function(b,c,a){a.read=function(n,l,h,g,q){var r,k;var j=q*8-g-1;var p=(1<<j)-1;
var f=p>>1;var u=-7;var o=h?(q-1):0;var t=h?-1:1;var v=n[l+o];o+=t;r=v&((1<<(-u))-1);
v>>=(-u);u+=j;for(;u>0;r=r*256+n[l+o],o+=t,u-=8){}k=r&((1<<(-u))-1);r>>=(-u);u+=g;
for(;u>0;k=k*256+n[l+o],o+=t,u-=8){}if(r===0){r=1-f}else{if(r===p){return k?NaN:((v?-1:1)*Infinity)
}else{k=k+Math.pow(2,g);r=r-f}}return(v?-1:1)*k*Math.pow(2,r-g)};a.write=function(o,w,n,h,g,r){var t,k,v;
var j=r*8-g-1;var q=(1<<j)-1;var f=q>>1;var l=(g===23?Math.pow(2,-24)-Math.pow(2,-77):0);
var p=h?0:(r-1);var u=h?1:-1;var x=w<0||(w===0&&1/w<0)?1:0;w=Math.abs(w);if(isNaN(w)||w===Infinity){k=isNaN(w)?1:0;
t=q}else{t=Math.floor(Math.log(w)/Math.LN2);if(w*(v=Math.pow(2,-t))<1){t--;v*=2
}if(t+f>=1){w+=l/v}else{w+=l*Math.pow(2,1-f)}if(w*v>=2){t++;v/=2}if(t+f>=q){k=0;
t=q}else{if(t+f>=1){k=(w*v-1)*Math.pow(2,g);t=t+f}else{k=w*Math.pow(2,f-1)*Math.pow(2,g);
t=0}}}for(;g>=8;o[n+p]=k&255,p+=u,k/=256,g-=8){}t=(t<<g)|k;j+=g;for(;j>0;o[n+p]=t&255,p+=u,t/=256,j-=8){}o[n+p-u]|=x*128
}},{}],231:[function(b,c,a){var d={}.toString;c.exports=Array.isArray||function(f){return d.call(f)=="[object Array]"
}},{}],232:[function(c,d,b){d.exports=function a(f,h){var g;if(h){g=f.getBoundingClientRect();
return{width:g.width,height:g.height}}return{width:f.offsetWidth,height:f.offsetHeight}
}},{}],233:[function(f,g,d){var c=f("./getDimensions");var b=f("./getScrollX");
var a=f("./getScrollY");g.exports=function h(i,n){var k;var m;var l;var j;if(n){k=i.getBoundingClientRect();
m=b();l=a();return{top:k.top+l,right:k.right+m,bottom:k.bottom+l,left:k.left+m}
}j=c(i,n);k={top:i.offsetTop,left:i.offsetLeft,width:j.width,height:j.height};while((i=i.offsetParent)){k.top+=i.offsetTop;
k.left+=i.offsetLeft}return{top:k.top,right:k.left+k.width,bottom:k.top+k.height,left:k.left}
}},{"./getDimensions":232,"./getScrollX":234,"./getScrollY":235}],234:[function(c,d,b){d.exports=function a(f){f=f||window;
if(f===window){return window.scrollX||window.pageXOffset}return f.scrollLeft}},{}],235:[function(c,d,b){d.exports=function a(f){f=f||window;
if(f===window){return window.scrollY||window.pageYOffset}return f.scrollTop}},{}],236:[function(b,d,a){var c=b("./ac-element-engagement/ElementEngagement");
d.exports=new c();d.exports.ElementEngagement=c},{"./ac-element-engagement/ElementEngagement":237}],237:[function(c,b,f){var g;
var k=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;var d={defaults:c("@marcom/ac-object/defaults"),extend:c("@marcom/ac-object/extend")};
var h=c("@marcom/ac-element-tracker").ElementTracker;var j={timeToEngage:500,inViewThreshold:0.75,stopOnEngaged:true};
var i={thresholdEnterTime:0,thresholdExitTime:0,inThreshold:false,engaged:false,tracking:true};
var a=function(l){h.call(this,null,l);k.call(this);this._thresholdEnter=this._thresholdEnter.bind(this);
this._thresholdExit=this._thresholdExit.bind(this);this._enterView=this._enterView.bind(this);
this._exitView=this._exitView.bind(this)};g=a.prototype=Object.create(h.prototype);
g=d.extend(g,k.prototype);g._decorateTrackedElement=function(m,l){var n;n=d.defaults(j,l||{});
d.extend(m,n);d.extend(m,i)};g._attachElementListeners=function(l){l.on("thresholdenter",this._thresholdEnter,this);
l.on("thresholdexit",this._thresholdExit,this);l.on("enterview",this._enterView,this);
l.on("exitview",this._exitView,this)};g._removeElementListeners=function(l){l.off("thresholdenter",this._thresholdEnter);
l.off("thresholdexit",this._thresholdExit);l.off("enterview",this._enterView);l.off("exitview",this._exitView)
};g._attachAllElementListeners=function(){this.elements.forEach(function(l){if(!l.stopOnEngaged){this._attachElementListeners(l)
}else{if(!l.engaged){this._attachElementListeners(l)}}},this)};g._removeAllElementListeners=function(){this.elements.forEach(function(l){this._removeElementListeners(l)
},this)};g._elementInViewPastThreshold=function(m){var l=false;if(m.pixelsInView===this._windowHeight){l=true
}else{l=(m.percentInView>m.inViewThreshold)}return l};g._ifInView=function(l,n){var m=l.inThreshold;
h.prototype._ifInView.apply(this,arguments);if(!m&&this._elementInViewPastThreshold(l)){l.inThreshold=true;
l.trigger("thresholdenter",l);if(typeof l.timeToEngage==="number"&&l.timeToEngage>=0){l.engagedTimeout=window.setTimeout(this._engaged.bind(this,l),l.timeToEngage)
}}};g._ifAlreadyInView=function(l){var m=l.inThreshold;h.prototype._ifAlreadyInView.apply(this,arguments);
if(m&&!this._elementInViewPastThreshold(l)){l.inThreshold=false;l.trigger("thresholdexit",l);
if(l.engagedTimeout){window.clearTimeout(l.engagedTimeout);l.engagedTimeout=null
}}};g._engaged=function(l){l.engagedTimeout=null;this._elementEngaged(l);l.trigger("engaged",l);
this.trigger("engaged",l)};g._thresholdEnter=function(l){l.thresholdEnterTime=Date.now();
l.thresholdExitTime=0;this.trigger("thresholdenter",l)};g._thresholdExit=function(l){l.thresholdExitTime=Date.now();
this.trigger("thresholdexit",l)};g._enterView=function(l){this.trigger("enterview",l)
};g._exitView=function(l){this.trigger("exitview",l)};g._elementEngaged=function(l){l.engaged=true;
if(l.stopOnEngaged){this.stop(l)}};g.stop=function(l){if(this.tracking&&!l){this._removeAllElementListeners();
h.prototype.stop.call(this)}if(l&&l.tracking){l.tracking=false;this._removeElementListeners(l);
this.removeElement(l)}};g.start=function(l){if(!l){this._attachAllElementListeners()
}if(l&&!l.tracking){if(!l.stopOnEngaged){l.tracking=true;this._attachElementListeners(l)
}else{if(!l.engaged){l.tracking=true;this._attachElementListeners(l)}}}if(!this.tracking){h.prototype.start.call(this)
}else{this.refreshAllElementMetrics();this.refreshAllElementStates()}};g.addElement=function(n,l){l=l||{};
var m=h.prototype.addElement.call(this,n,l.useRenderedPosition);this._decorateTrackedElement(m,l);
return m};g.addElements=function(m,l){[].forEach.call(m,function(n){this.addElement(n,l)
},this)};b.exports=a},{"@marcom/ac-element-tracker":238,"@marcom/ac-event-emitter-micro":241,"@marcom/ac-object/defaults":260,"@marcom/ac-object/extend":261}],238:[function(b,c,a){var f=b("./ac-element-tracker/ElementTracker");
var d=b("./ac-element-tracker/TrackedElement");c.exports=new f();c.exports.ElementTracker=f;
c.exports.TrackedElement=d},{"./ac-element-tracker/ElementTracker":239,"./ac-element-tracker/TrackedElement":240}],239:[function(d,c,h){var k={isNodeList:d("@marcom/ac-dom-nodes/isNodeList"),isElement:d("@marcom/ac-dom-nodes/isElement")};
var a={getDimensions:d("@marcom/ac-dom-metrics/getDimensions"),getPagePosition:d("@marcom/ac-dom-metrics/getPagePosition"),getScrollY:d("@marcom/ac-dom-metrics/getScrollY")};
var f={clone:d("@marcom/ac-object/clone"),extend:d("@marcom/ac-object/extend")};
var j=d("./TrackedElement");var g={autoStart:false,useRenderedPosition:false};function b(m,l){this.options=f.clone(g);
this.options=typeof l==="object"?f.extend(this.options,l):this.options;this._scrollY=this._getScrollY();
this._windowHeight=this._getWindowHeight();this.tracking=false;this.elements=[];
if(m&&(Array.isArray(m)||k.isNodeList(m)||k.isElement(m))){this.addElements(m)}this.refreshAllElementStates=this.refreshAllElementStates.bind(this);
this.refreshAllElementMetrics=this.refreshAllElementMetrics.bind(this);if(this.options.autoStart){this.start()
}}var i=b.prototype;i.destroy=function(){var m,l;this.stop();for(m=0,l=this.elements.length;
m<l;m++){this.elements[m].destroy()}this.elements=null;this.options=null};i._registerTrackedElements=function(l){var m=[].concat(l);
m.forEach(function(n){if(this._elementInDOM(n.element)){n.offsetTop=n.element.offsetTop;
this.elements.push(n)}},this)};i._elementInDOM=function(n){var m=false;var l=document.getElementsByTagName("body")[0];
if(k.isElement(n)&&l.contains(n)){m=true}return m};i._elementPercentInView=function(l){return l.pixelsInView/l.height
};i._elementPixelsInView=function(m){var l=m.top-this._scrollY;var n=m.bottom-this._scrollY;
if(l>this._windowHeight||n<0){return 0}return Math.min(n,this._windowHeight)-Math.max(l,0)
};i._ifInView=function(l,m){if(!m){l.trigger("enterview",l)}};i._ifAlreadyInView=function(l){if(!l.inView){l.trigger("exitview",l)
}};i.addElements=function(o,n){if(typeof n==="undefined"){n=this.options.useRenderedPosition
}o=k.isNodeList(o)?Array.prototype.slice.call(o):[].concat(o);for(var m=0,l=o.length;
m<l;m++){this.addElement(o[m],n)}};i.addElement=function(m,n){var l=null;if(typeof n==="undefined"){n=this.options.useRenderedPosition
}if(k.isElement(m)){l=new j(m,n);this._registerTrackedElements(l);this.refreshElementMetrics(l);
this.refreshElementState(l)}else{throw new TypeError("ElementTracker: "+m+" is not a valid DOM element")
}return l};i.removeElement=function(n){var m=[];var l;this.elements.forEach(function(p,o){if(p===n||p.element===n){m.push(o)
}});l=this.elements.filter(function(p,o){return m.indexOf(o)<0});this.elements=l
};i.start=function(){if(this.tracking===false){this.tracking=true;window.addEventListener("resize",this.refreshAllElementMetrics);
window.addEventListener("orientationchange",this.refreshAllElementMetrics);window.addEventListener("scroll",this.refreshAllElementStates);
this.refreshAllElementMetrics()}};i.stop=function(){if(this.tracking===true){this.tracking=false;
window.removeEventListener("resize",this.refreshAllElementMetrics);window.removeEventListener("orientationchange",this.refreshAllElementMetrics);
window.removeEventListener("scroll",this.refreshAllElementStates)}};i.refreshAllElementMetrics=function(l,m){if(typeof l!=="number"){l=this._getScrollY()
}if(typeof m!=="number"){m=this._getWindowHeight()}this._scrollY=l;this._windowHeight=m;
this.elements.forEach(this.refreshElementMetrics,this)};i.refreshElementMetrics=function(m){if(!m.isActive){return m
}var n=a.getDimensions(m.element,m.useRenderedPosition);var l=a.getPagePosition(m.element,m.useRenderedPosition);
m=f.extend(m,n,l);return this.refreshElementState(m)};i.refreshAllElementStates=function(l){if(typeof l!=="number"){l=this._getScrollY()
}this._scrollY=l;this.elements.forEach(this.refreshElementState,this)};i.refreshElementState=function(l){if(!l.isActive){return l
}var m=l.inView;l.pixelsInView=this._elementPixelsInView(l);l.percentInView=this._elementPercentInView(l);
l.inView=l.pixelsInView>0;if(l.inView){this._ifInView(l,m)}if(m){this._ifAlreadyInView(l)
}return l};i.pauseElementTracking=function(l){if(l){l.isActive=false}};i.resumeElementTracking=function(l){if(l){l.isActive=true
}};i._getWindowHeight=function(){return window.innerHeight};i._getScrollY=function(){return a.getScrollY()
};c.exports=b},{"./TrackedElement":240,"@marcom/ac-dom-metrics/getDimensions":232,"@marcom/ac-dom-metrics/getPagePosition":233,"@marcom/ac-dom-metrics/getScrollY":235,"@marcom/ac-dom-nodes/isElement":37,"@marcom/ac-dom-nodes/isNodeList":39,"@marcom/ac-object/clone":258,"@marcom/ac-object/extend":261}],240:[function(c,d,b){var a={isElement:c("@marcom/ac-dom-nodes/isElement")};
var g=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;var i=g.prototype;function h(j,k){if(!a.isElement(j)){throw new TypeError("TrackedElement: "+j+" is not a valid DOM element")
}g.call(this);this.element=j;this.inView=false;this.isActive=true;this.percentInView=0;
this.pixelsInView=0;this.offsetTop=0;this.top=0;this.right=0;this.bottom=0;this.left=0;
this.width=0;this.height=0;this.useRenderedPosition=k||false}var f=h.prototype=Object.create(i);
f.destroy=function(){this.element=null;i.destroy.call(this)};d.exports=h},{"@marcom/ac-dom-nodes/isElement":37,"@marcom/ac-event-emitter-micro":241}],241:[function(b,c,a){arguments[4][11][0].apply(a,arguments)
},{"./ac-event-emitter-micro/EventEmitterMicro":242,dup:11}],242:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],243:[function(d,f,c){d("@marcom/ac-polyfills/Object/create");var a=d("@marcom/ac-raf-emitter/RAFEmitter");
var h=d("@marcom/ac-event-emitter-micro").EventEmitterMicro;var i=h.prototype;function b(n,p,j,m,k,o,l){if(arguments.length!==7){throw new Error("Incorrect number of arguments passed to BaseComponent check the constructor or BaseComponent.call method - argument's should be (section, componentElement, componentName, currentBreakpoint, scrollPosition, windowHeight, index)")
}h.call(this);this.section=n;this.element=p;this.componentName=j;this.index=l;this.isEnabled=true
}var g=b.prototype=Object.create(h.prototype);b.prototype.constructor=b;g.destroy=function(){this.teardownEvents();
this.teardownRAFEmitter();this.section=null;i.destroy.call(this)};g.setupEvents=function(){};
g.teardownEvents=function(){};g.setupRAFEmitter=function(){if(this._rafEmitter){return
}this._rafEmitter=new a();this.onDOMRead=this.onDOMRead.bind(this);this.onDOMWrite=this.onDOMWrite.bind(this);
this._rafEmitter.on("update",this.onDOMRead);this._rafEmitter.on("draw",this.onDOMWrite)
};g.teardownRAFEmitter=function(){if(!this._rafEmitter){return}this._rafEmitter.destroy();
this._rafEmitter=null};g.parsePropsFromDataAttribute=function(r,p,l){l=l||this.element;
p=p||{};r="data-"+r;var q=l.getAttribute(r)||"{}";var n=null;try{n=JSON.parse(q)
}catch(o){throw new Error(this.componentName+"::parsePropsFromDataAttribute bad JSON in `"+r+"`",o)
}var m={};for(var j in p){m[j]=n[j];if(!n.hasOwnProperty(j)){if(p[j]===null){throw new Error(this.componentName+"::parsePropsFromDataAttribute `"+j+"` is required in `"+r+"`")
}else{m[j]=p[j]}}}return m};g.onSectionWillAppearWithPadding=function(j,k){};g.onSectionWillAppear=function(j,k){};
g.activate=function(){};g.animateIn=function(){};g.requestDOMChange=function(){if(!this.isEnabled||!this.section.isVisible){return false
}if(!this._rafEmitter){this.setupRAFEmitter()}return this._rafEmitter.run()};g.onDOMRead=function(j){};
g.onDOMWrite=function(j){};g.deactivate=function(){};g.onScroll=function(k,j,l){};
g.onSectionWillDisappearWithPadding=function(j,k){};g.onSectionWillDisappear=function(j,k){};
g.onResizeDebounced=function(k,j,l){};g.onResizeImmediate=function(k,j,l){};g.onOrientationChange=function(l,k,j,m){};
g.onBreakpoint=function(k,m,j,l){};g.onRetinaChange=function(m,k,j,l){};f.exports=b
},{"@marcom/ac-event-emitter-micro":241,"@marcom/ac-polyfills/Object/create":undefined,"@marcom/ac-raf-emitter/RAFEmitter":297}],244:[function(f,c,i){f("@marcom/ac-polyfills/console.log");
var b=f("@marcom/ac-element-tracker").ElementTracker;var l=f("@marcom/ac-viewport-emitter");
if(!l.viewport){console.log("Jetpack Error: Required module `ac-viewport-emitter` not initialized properly (missing required css styles). Please see `ac-viewport-emitter` documentation.\n\tBreakpoint will always be 'large' and no `onBreakPoint` events will be fired");
l=f("../utils/ViewportEmitterStub")()}var k=f("../utils/Page");var a=f("../model/SectionMap");
var h=f("../model/DataAttributes");var d=f("../model/EnabledFeatures");function g(m){d.init();
k.setPage(this);this.name=this.name||"[NOT SET]";this._mainEl=document.querySelector("main,.main");
this._sections=[];this._visibleSections=[];this._visibleSectionsWithPadding=[];
this._elementTracker=new b(null,{autoStart:true});this._currentSection=null;this._sectionUnderLocalNav=null;
this._currentBreakpoint=l.viewport;this.isRetina=l.retina;this._cachedScrollY=this._getScrollY(true);
this._cachedWindowHeight=this.getWindowHeight(true);this._resizeTimeout=-1;this._resizeTimeoutDelay=this._resizeTimeoutDelay||250;
this.setupSections();this.setupEvents();this._updateSectionVisibility()}var j=g.prototype;
j.destroy=function(){for(var n=0,m=this._sections.length;n<m;n++){this._sections[n].destroy()
}this.teardownEvents();this._elementTracker.destroy();this._elementTracker=null;
this._sections=null;this._currentSection=null;this._sectionUnderLocalNav=null;this._visibleSections=null;
this._mainEl=null;k.removePage(this)};j.setupEvents=function(){this._onScroll=this._onScroll.bind(this);
this._onBreakpoint=this._onBreakpoint.bind(this);this._onRetinaChange=this._onRetinaChange.bind(this);
this._onPageDidAppear=this._onPageDidAppear.bind(this);this._onResizeImmediate=this._onResizeImmediate.bind(this);
this._onOrientationChange=this._onOrientationChange.bind(this);this._onPageWillDisappear=this._onPageWillDisappear.bind(this);
this.performDeepMetricsRefresh=this.performDeepMetricsRefresh.bind(this);window.addEventListener("scroll",this._onScroll);
window.addEventListener("resize",this._onResizeImmediate);window.addEventListener("orientationchange",this._onOrientationChange);
l.on("change",this._onBreakpoint);l.on("retinachange",this._onRetinaChange);k.on(k.DEEP_REFRESH_ALL_METRICS,this.performDeepMetricsRefresh)
};j.teardownEvents=function(){window.removeEventListener("scroll",this._onScroll);
window.removeEventListener("resize",this._onResizeImmediate);window.removeEventListener("orientationchange",this._onOrientationChange);
l.off("change",this._onBreakpoint);l.off("retinachange",this._onRetinaChange);k.off(k.DEEP_REFRESH_ALL_METRICS,this.performDeepMetricsRefresh);
this._elementTracker.stop();clearTimeout(this._resizeTimeout)};j.setupSections=function(){var n=this._mainEl.querySelectorAll("section,.section,[data-section-type]");
for(var p=0,m=n.length;p<m;p++){if(n[p].parentElement!==this._mainEl){console.warn("BasePage::addSection - Jetpack does not support nested BaseSections, consider using a component instead.",n[p]);
continue}var o=n[p];this._addSectionImp(o)}};j.addSection=function(m){var n=this.getBaseSectionForElement(m);
if(n){return n}n=this._addSectionImp(m);this._updateSectionVisibility();return n
};j.removeSection=function(m){var o=(m instanceof a.BaseSection);var n=o?m:this.getBaseSectionForElement(m);
if(n){this._sections.splice(this._sections.indexOf(n),1)}this._updateSectionVisibility();
return n};j._addSectionImp=function(o){if(o.parentNode!==this._mainEl&&this._isNestedSection(o)){console.warn("BasePage::addSection - Jetpack does not support nested BaseSections, consider using a component instead.",o);
return null}var n=this._elementTracker.addElement(o);this._elementTracker.refreshElementState(n);
var p=(o.hasAttribute(h.SECTION_TYPE))?o.getAttribute(h.SECTION_TYPE):"BaseSection";
if(p===""){p="BaseSection"}if(!a.hasOwnProperty(p)){throw"BasePage::setupSections parsing '#"+o.id+" ."+o.className+"' no section type '"+p+"'found!"
}var m=a[p];var q=new m(o,n,this._getCurrentBreakpoint(),this._getScrollY(),this.getWindowHeight(),this._sections.length);
q.setupEvents();this._sections.push(q);return q};j.getWindowHeight=function(m){if(m){this._cachedWindowHeight=window.innerHeight
}return this._cachedWindowHeight};j._activateSection=function(m){if(this._currentSection===m){return
}if(this._currentSection){this._currentSection.deactivate()}this._currentSection=m;
this._currentSection.activate()};j._updateSectionVisibility=function(){var A=this._getScrollY();
var m=this.getWindowHeight();var q=k.getViewportPadding();var r=[];var t=this._sections[0];
var p=[];var y=0;var w=[];var C=A-q;var o=A+m+q;for(var s=0,v=this._sections.length;
s<v;s++){var B=this._sections[s];var z=B.trackedElement;var x=z.pixelsInView;if(B.isFixedHero){x=m-A
}if(x>y){t=B;y=x}if(x>0.000001){r.push(B);p.push(B);w.push(B)}else{if(o>z.top&&C<z.bottom){r.push(B);
w.push(B)}}}var n={};var u={};for(s=0,v=Math.max(this._visibleSections.length,r.length);
s<v;s++){if(this._visibleSectionsWithPadding[s]){if(typeof n[s]==="undefined"){n[s]=w.indexOf(this._visibleSectionsWithPadding[s])===-1
}if(n[s]){this._visibleSectionsWithPadding[s].onSectionWillDisappearWithPadding(A,m)
}}if(this._visibleSections[s]&&p.indexOf(this._visibleSections[s])===-1){this._visibleSections[s].onSectionWillDisappear(A,m)
}if(w[s]){if(typeof u[s]==="undefined"){u[s]=this._visibleSectionsWithPadding.indexOf(w[s])===-1
}if(u[s]){w[s].onSectionWillAppearWithPadding(A,m)}}if(p[s]&&this._visibleSections.indexOf(p[s])===-1){p[s].onSectionWillAppear(A,m)
}}this._visibleSections=p;this._visibleSectionsWithPadding=w;this._activateSection(t)
};j._onPageDidAppear=function(m){};j._onPageWillDisappear=function(m){this.destroy()
};j._onBreakpoint=function(r){var n=r.to;var p=r.from;this._currentBreakpoint=n;
var o=this._getScrollY();var s=this.getWindowHeight();this._elementTracker.refreshAllElementMetrics(o,s);
for(var q=0,m=this._sections.length;q<m;q++){this._sections[q].onBreakpoint(n,p,o,s)
}this.performDeepMetricsRefresh()};j._onRetinaChange=function(q){var n=this._getScrollY(true);
var r=this.getWindowHeight(true);this.isRetina=l.retina;var p=this._currentBreakpoint;
this._elementTracker.refreshAllElementMetrics(n,r);for(var o=0,m=this._sections.length;
o<m;o++){this._sections[o].onRetinaChange(this.isRetina,p,n,r)}};j._onScroll=function(p){var n=this._getScrollY(true);
var q=this.getWindowHeight();this._updateSectionVisibility();for(var o=0,m=this._visibleSections.length;
o<m;o++){this._visibleSections[o].onScroll(p,n,q)}};j._onResizeDebounced=function(q){var n=this._getScrollY();
var r=this.getWindowHeight();var p=false;for(var o=0,m=this._sections.length;o<m;
o++){if(!p&&this._sections[o]["onResize"]){console.warn("Jetpack: onResize has been removed please use `onResizeImmediate` or `onResizeDebounced` instead.");
p=true}this._sections[o].onResizeDebounced(q,n,r)}this._updateSectionVisibility()
};j.performDeepMetricsRefresh=function(){var n=this._getScrollY();var p=this.getWindowHeight();
this._elementTracker.refreshAllElementMetrics(n,p);for(var o=0,m=this._sections.length;
o<m;o++){this._sections[o].elementEngagement.refreshAllElementMetrics(n,p);this._sections[o].updateScrollToPosition()
}this._updateSectionVisibility()};j._onOrientationChange=function(q){var o=this._getScrollY(true);
var r=this.getWindowHeight(true);var n=q.orientation;for(var p=0,m=this._sections.length;
p<m;p++){this._sections[p].onOrientationChange(q,n,o,r)}};j._onResizeImmediate=function(q){var n=this._getScrollY();
var r=this.getWindowHeight(true);var p=false;for(var o=0,m=this._sections.length;
o<m;o++){if(!p&&this._sections[o]["onResizeWillBeCalledAfterDelay"]){console.warn("Jetpack: onResizeWillBeCalledAfterDelay has been removed please use `onResizeImmediate` or `onResizeDebounced` instead.");
p=true}this._sections[o].onResizeImmediate(q,n,r)}window.clearTimeout(this._resizeTimeout);
this._resizeTimeout=window.setTimeout(this._onResizeDebounced.bind(this,q),this._resizeTimeoutDelay)
};j._getScrollY=function(m){if(m){this._cachedScrollY=window.pageYOffset||(document.documentElement||document.body).scrollTop
}return this._cachedScrollY};j._getVisibleBottomOfPage=function(){return this._getScrollY()+this.getWindowHeight()
};j._getCurrentBreakpoint=function(){return this._currentBreakpoint};j._isNestedSection=function(o){var p=o;
var m=this._sections.length;while(p=p.parentElement){for(var n=0;n<m;n++){if(this._sections[n].element===p){return true
}}}return false};j.getBaseSectionForElement=function(o){for(var n=0,m=this._sections.length;
n<m;n++){if(this._sections[n].element===o){return this._sections[n]}}return null
};c.exports=g},{"../model/DataAttributes":247,"../model/EnabledFeatures":248,"../model/SectionMap":249,"../utils/Page":250,"../utils/ViewportEmitterStub":251,"@marcom/ac-element-tracker":238,"@marcom/ac-polyfills/console.log":undefined,"@marcom/ac-viewport-emitter":412}],245:[function(c,b,g){c("@marcom/ac-polyfills/Object/create");
c("@marcom/ac-polyfills/console.log");var n={};var k={getPagePosition:c("@marcom/ac-dom-metrics/getPagePosition")};
var a=c("@marcom/ac-element-engagement").ElementEngagement;var f=c("./../model/DataAttributes");
var h=c("./../model/ComponentMap");var d=c("./BaseComponent");var l=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var m=l.prototype;function j(s,r,q,o,t,p){if(arguments.length!==6){throw new Error("Incorrect number of arguments passed to BaseSection")
}l.call(this);this.element=s;this.trackedElement=r;this.elementEngagement=new a(null,{autoStart:false});
this.index=p;this.isVisible=this.trackedElement.pixelsInView>0;this.isVisibleWithPadding=false;
this.hasAnimatedIn=false;this.isActive=false;this.isFixedHero=false;this.cachedBreakpoint=q;
this.cachedScrollPosition=o;this.cachedWindowHeight=t;this.name=this.name||this.element.className;
this.scrollToPosition=0;this.updateScrollToPosition();this._components=[];this.setupComponents(q,o,t);
this.setIsFixedHero();this.performDeprecatedMethodCheck()}var i=j.prototype=Object.create(l.prototype);
j.prototype.constructor=j;i.performDeprecatedMethodCheck=function(){if(this["onViewWillAppear"]){throw new Error("Section.onViewWillAppear is now `onSectionWillAppear`, please update your BaseSection subclass")
}if(this["onViewWillDisappear"]){throw new Error("Section.onViewWillDisappear is now `onSectionWillDisappear`, please update your BaseSection subclass")
}return true};i.destroy=function(){this.teardownEvents();this.elementEngagement.stop();
this.elementEngagement=null;for(var p=0,o=this._components.length;p<o;p++){this._components[p].destroy()
}this._components=null;this.trackedElement=null;this.element=null;m.destroy.call(this)
};i.setupEvents=function(){for(var p=0,o=this._components.length;p<o;p++){this._components[p].setupEvents()
}};i.teardownEvents=function(){for(var p=0,o=this._components.length;p<o;p++){this._components[p].teardownEvents()
}};i.setupComponents=function(){var t=Array.prototype.slice.call(this.element.querySelectorAll("["+f.COMPONENT_LIST+"]"));
if(this.element.hasAttribute(f.COMPONENT_LIST)){t.push(this.element)}for(var r=0;
r<t.length;r++){var v=t[r];var u=v.getAttribute(f.COMPONENT_LIST);if(u.indexOf("|")!==-1){throw"BaseSection::setupComponents component list should be space delimited, pipe character is no longer supported. Error at: '"+u+"'"
}var s=u.split(" ");for(var q=0,o=s.length;q<o;q++){var p=s[q];if(p===""||p===" "){continue
}this.addComponentOfType(p,v)}setTimeout(this.elementEngagement.refreshAllElementStates.bind(this.elementEngagement),100)
}};i.addComponentOfType=function(p,r){if(!h.hasOwnProperty(p)){throw"BaseSection::setupComponents parsing '#"+r.id+" ."+r.className+"' no component type '"+p+"'found!"
}var q=h[p];if(!this.componentIsSupported(q,p)){if(n[p]===undefined){console.log("BaseSection::setupComponents unsupported component '"+p+"'. Reason: '"+p+".IS_SUPPORTED' returned false");
n[p]=true}return}var o=new q(this,r,p,this.cachedBreakpoint,this.cachedScrollPosition,this.cachedWindowHeight,this._components.length);
this._components.push(o);return o};i.removeComponentOfType=function(o){var p=this.getComponentOfType(o);
if(p===null){return}this.removeComponent(p)};i.removeComponent=function(p){var o=this._components.indexOf(p);
if(o===-1){return}this._components.splice(o,1);p.destroy()};i.activate=function(){for(var p=0,o=this._components.length;
p<o;p++){if(!this._components[p].isEnabled){continue}this._components[p].activate()
}this.isActive=true;if(!this.hasAnimatedIn){this.animateIn();this.hasAnimatedIn=true
}};i.deactivate=function(){this.isActive=false;for(var p=0,o=this._components.length;
p<o;p++){if(!this._components[p].isEnabled){continue}this._components[p].deactivate()
}};i.animateIn=function(){for(var p=0,o=this._components.length;p<o;p++){if(!this._components[p].isEnabled){continue
}this._components[p].animateIn()}};i.onResizeImmediate=function(s,p,t){this.cachedScrollPosition=p;
this.cachedWindowHeight=t;var r=false;for(var q=0,o=this._components.length;q<o;
q++){if(!this._components[q].isEnabled){continue}if(!r&&this._components[q]["onResizeWillBeCalledAfterDelay"]){console.warn("Jetpack: onResizeWillBeCalledAfterDelay has been removed please use `onResizeImmediate` or `onResizeDebounced` instead.");
r=true}this._components[q].onResizeImmediate(s,p,t)}};i.onResizeDebounced=function(s,p,t){this.updateScrollToPosition();
var r=false;for(var q=0,o=this._components.length;q<o;q++){if(!this._components[q].isEnabled){continue
}if(!r&&this._components[q]["onResize"]){console.warn("Jetpack: onResize has been removed please use `onResizeImmediate` or `onResizeDebounced` instead.");
r=true}this._components[q].onResizeDebounced(s,p,t)}this.elementEngagement.refreshAllElementMetrics(p,t)
};i.onBreakpoint=function(q,t,p,s){this.cachedBreakpoint=q;for(var r=0,o=this._components.length;
r<o;r++){if(!this._components[r].isEnabled){continue}this._components[r].onBreakpoint(q,t,p,s)
}};i.onRetinaChange=function(t,r,p,s){for(var q=0,o=this._components.length;q<o;
q++){if(!this._components[q].isEnabled){continue}this._components[q].onRetinaChange(t,r,p,s)
}this.elementEngagement.refreshAllElementMetrics(p,s)};i.onOrientationChange=function(s,q,p,t){this.cachedScrollPosition=p;
this.cachedWindowHeight=t;for(var r=0,o=this._components.length;r<o;r++){if(!this._components[r].isEnabled){continue
}this._components[r].onOrientationChange(s,q,p,t)}};i.onScroll=function(r,p,s){this.cachedScrollPosition=p;
this.elementEngagement.refreshAllElementStates(p);for(var q=0,o=this._components.length;
q<o;q++){if(!this._components[q].isEnabled){continue}this._components[q].onScroll(r,p,s)
}};i.onSectionWillAppearWithPadding=function(p,r){this.cachedScrollPosition=p;this.isVisibleWithPadding=true;
this.elementEngagement.refreshAllElementStates(p);for(var q=0,o=this._components.length;
q<o;q++){this._components[q].onSectionWillAppearWithPadding(p,r)}};i.onSectionWillAppear=function(p,r){this.cachedScrollPosition=p;
this.isVisible=true;this.elementEngagement.refreshAllElementStates(p);for(var q=0,o=this._components.length;
q<o;q++){this._components[q].onSectionWillAppear(p,r)}};i.onSectionWillDisappearWithPadding=function(p,r){this.cachedScrollPosition=p;
this.isVisibleWithPadding=false;for(var q=0,o=this._components.length;q<o;q++){this._components[q].onSectionWillDisappearWithPadding(p,r)
}};i.onSectionWillDisappear=function(p,r){this.cachedScrollPosition=p;this.isVisible=false;
for(var q=0,o=this._components.length;q<o;q++){this._components[q].onSectionWillDisappear(p,r)
}};i.getComponentOfType=function(p){if(!h.hasOwnProperty(p)){throw"BaseSection::getComponentOfType no component type '"+p+"' exist in ComponentMap!"
}for(var q=0,o=this._components.length;q<o;q++){if(this._components[q].componentName===p){return this._components[q]
}}return null};i.getAllComponentsOfType=function(p){if(!h.hasOwnProperty(p)){throw"BaseSection::getAllComponentsOfType no component type '"+p+"' exist in ComponentMap!"
}var r=[];for(var q=0,o=this._components.length;q<o;q++){if(this._components[q].componentName===p){r.push(this._components[q])
}}return r};i.updateScrollToPosition=function(){return this.scrollToPosition=k.getPagePosition(this.element).top
};i.setIsFixedHero=function(){if(this.index!==0){this.isFixedHero=false}else{var o=window.getComputedStyle(this.element);
this.isFixedHero=o.position==="fixed"}};j.prototype.componentIsSupported=function(r,p){var o=r.IS_SUPPORTED;
if(o===undefined){return true}if(typeof o!=="function"){console.error('BaseSection::setupComponents error in "'+p+'".IS_SUPPORTED - it should be a function which returns true/false');
return true}var q=r.IS_SUPPORTED();if(q===undefined){console.error('BaseSection::setupComponents error in "'+p+'".IS_SUPPORTED - it should be a function which returns true/false');
return true}return q};b.exports=j},{"./../model/ComponentMap":246,"./../model/DataAttributes":247,"./BaseComponent":243,"@marcom/ac-dom-metrics/getPagePosition":233,"@marcom/ac-element-engagement":236,"@marcom/ac-event-emitter-micro":241,"@marcom/ac-polyfills/Object/create":undefined,"@marcom/ac-polyfills/console.log":undefined}],246:[function(b,c,a){c.exports={BaseComponent:b("../core/BaseComponent")}
},{"../core/BaseComponent":243}],247:[function(b,c,a){c.exports={PAGE_TYPE:"data-page-type",SECTION_TYPE:"data-section-type",JUMP_SECTION_NAME:"data-page-jump-name",COMPONENT_LIST:"data-component-list"}
},{}],248:[function(c,d,b){var a={isDesktop:c("@marcom/ac-feature/isDesktop"),isRetina:c("@marcom/ac-feature/isRetina"),threeDTransformsAvailable:c("@marcom/ac-feature/threeDTransformsAvailable"),prefersReducedMotion:c("@marcom/ac-feature/prefersReducedMotion")};
d.exports={TOUCH:undefined,SVG:undefined,PAGE_JUMP:undefined,IS_DESKTOP:undefined,IS_RETINA:undefined,THREE_D_TRANSFORMS:undefined,REDUCED_MOTION:undefined,IS_AOW:undefined,init:function(){var f=document.getElementsByTagName("html")[0];
this.TOUCH=f.classList.contains("touch");this.SVG=f.classList.contains("svg");this.PAGE_JUMP=f.classList.contains("pageJump");
this.IS_DESKTOP=a.isDesktop();this.IS_RETINA=a.isRetina();this.THREE_D_TRANSFORMS=a.threeDTransformsAvailable();
this.REDUCED_MOTION=a.prefersReducedMotion();this.IS_AOW=f.classList.contains("aow")
},extend:function(h){if(!h.hasOwnProperty("init")||(typeof h.init!=="function")){throw new TypeError("The object extended Jetpack.model.EnabledFeatures must contain an init function")
}var i=this.init;var g=h.init;var f=Object.assign(this,h);f.init=function(){if(this.HAS_INITIALIZED){return
}this.HAS_INITIALIZED=true;i.call(f);g.call(f)};return f},HAS_INITIALIZED:false}
},{"@marcom/ac-feature/isDesktop":121,"@marcom/ac-feature/isRetina":123,"@marcom/ac-feature/prefersReducedMotion":128,"@marcom/ac-feature/threeDTransformsAvailable":131}],249:[function(b,c,a){c.exports={BaseSection:b("../core/BaseSection")}
},{"../core/BaseSection":245}],250:[function(b,d,a){var g=b("@marcom/ac-event-emitter-micro").EventEmitterMicro;
function c(){g.call(this);this._page=null;this.viewportPaddingRatio=1}var f=c.prototype=Object.create(g.prototype);
c.prototype.constructor=c;f.getPage=function(){return this._page};f.setPage=function(h){this._page=h
};f.removePage=function(h){if(h===this._page){this._page=null}};f.getViewportPadding=function(){return this.getPage().getWindowHeight()*this.viewportPaddingRatio
};f.deepRefreshAllElementMetrics=function(){this.trigger(c.prototype.DEEP_REFRESH_ALL_METRICS)
};f.onPageHeightSettled=function(l,h){var i=document.documentElement.scrollHeight;
var j=0;var h=h||30;window.requestAnimationFrame(function k(){var m=document.documentElement.scrollHeight;
if(i!==m){j=0}else{j++;if(j>=h){l();return}}i=m;window.requestAnimationFrame(k)
})};f.DEEP_REFRESH_ALL_METRICS="page.deep_refresh_all_metrics";d.exports=new c()
},{"@marcom/ac-event-emitter-micro":241}],251:[function(b,c,a){c.exports=function(){var d;
if(window.ViewportEmitterTestProxy){d=window.ViewportEmitterTestProxy}else{d={};
d.viewport="large";d.on=d.off=function(){}}return d}},{}],252:[function(d,f,c){var a=d("qs");
f.exports=function b(h,g){var i=a.stringify(h,{strictNullHandling:true});if(i&&g!==false){i="?"+i
}return i}},{qs:253}],253:[function(b,d,a){var g=b("./stringify");var c=b("./parse");
var f={};d.exports={stringify:g,parse:c}},{"./parse":254,"./stringify":255}],254:[function(b,c,a){var f=b("./utils");
var d={delimiter:"&",depth:5,arrayLimit:20,parameterLimit:1000,strictNullHandling:false,plainObjects:false,allowPrototypes:false};
d.parseValues=function(m,q){var k={};var j=m.split(q.delimiter,q.parameterLimit===Infinity?undefined:q.parameterLimit);
for(var l=0,o=j.length;l<o;++l){var g=j[l];var n=g.indexOf("]=")===-1?g.indexOf("="):g.indexOf("]=")+1;
if(n===-1){k[f.decode(g)]="";if(q.strictNullHandling){k[f.decode(g)]=null}}else{var p=f.decode(g.slice(0,n));
var h=f.decode(g.slice(n+1));if(!Object.prototype.hasOwnProperty.call(k,p)){k[p]=h
}else{k[p]=[].concat(k[p]).concat(h)}}}return k};d.parseObject=function(l,n,k){if(!l.length){return n
}var g=l.shift();var m;if(g==="[]"){m=[];m=m.concat(d.parseObject(l,n,k))}else{m=k.plainObjects?Object.create(null):{};
var j=g[0]==="["&&g[g.length-1]==="]"?g.slice(1,g.length-1):g;var i=parseInt(j,10);
var h=""+i;if(!isNaN(i)&&g!==j&&h===j&&i>=0&&(k.parseArrays&&i<=k.arrayLimit)){m=[];
m[i]=d.parseObject(l,n,k)}else{m[j]=d.parseObject(l,n,k)}}return m};d.parseKeys=function(j,n,g){if(!j){return
}if(g.allowDots){j=j.replace(/\.([^\.\[]+)/g,"[$1]")}var k=/^([^\[\]]*)/;var o=/(\[[^\[\]]*\])/g;
var m=k.exec(j);var l=[];if(m[1]){if(!g.plainObjects&&Object.prototype.hasOwnProperty(m[1])){if(!g.allowPrototypes){return
}}l.push(m[1])}var h=0;while((m=o.exec(j))!==null&&h<g.depth){++h;if(!g.plainObjects&&Object.prototype.hasOwnProperty(m[1].replace(/\[|\]/g,""))){if(!g.allowPrototypes){continue
}}l.push(m[1])}if(m){l.push("["+j.slice(m.index)+"]")}return d.parseObject(l,n,g)
};c.exports=function(k,p){p=p||{};p.delimiter=typeof p.delimiter==="string"||f.isRegExp(p.delimiter)?p.delimiter:d.delimiter;
p.depth=typeof p.depth==="number"?p.depth:d.depth;p.arrayLimit=typeof p.arrayLimit==="number"?p.arrayLimit:d.arrayLimit;
p.parseArrays=p.parseArrays!==false;p.allowDots=p.allowDots!==false;p.plainObjects=typeof p.plainObjects==="boolean"?p.plainObjects:d.plainObjects;
p.allowPrototypes=typeof p.allowPrototypes==="boolean"?p.allowPrototypes:d.allowPrototypes;
p.parameterLimit=typeof p.parameterLimit==="number"?p.parameterLimit:d.parameterLimit;
p.strictNullHandling=typeof p.strictNullHandling==="boolean"?p.strictNullHandling:d.strictNullHandling;
if(k===""||k===null||typeof k==="undefined"){return p.plainObjects?Object.create(null):{}
}var l=typeof k==="string"?d.parseValues(k,p):k;var h=p.plainObjects?Object.create(null):{};
var o=Object.keys(l);for(var j=0,m=o.length;j<m;++j){var n=o[j];var g=d.parseKeys(n,l[n],p);
h=f.merge(h,g,p)}return f.compact(h)}},{"./utils":256}],255:[function(b,c,a){var f=b("./utils");
var d={delimiter:"&",arrayPrefixGenerators:{brackets:function(h,g){return h+"[]"
},indices:function(h,g){return h+"["+g+"]"},repeat:function(h,g){return h}},strictNullHandling:false};
d.stringify=function(l,n,g,j,h){if(typeof h==="function"){l=h(n,l)}else{if(f.isBuffer(l)){l=l.toString()
}else{if(l instanceof Date){l=l.toISOString()}else{if(l===null){if(j){return f.encode(n)
}l=""}}}}if(typeof l==="string"||typeof l==="number"||typeof l==="boolean"){return[f.encode(n)+"="+f.encode(l)]
}var q=[];if(typeof l==="undefined"){return q}var k=Array.isArray(h)?h:Object.keys(l);
for(var m=0,o=k.length;m<o;++m){var p=k[m];if(Array.isArray(l)){q=q.concat(d.stringify(l[p],g(n,p),g,j,h))
}else{q=q.concat(d.stringify(l[p],n+"["+p+"]",g,j,h))}}return q};c.exports=function(o,s){s=s||{};
var j=typeof s.delimiter==="undefined"?d.delimiter:s.delimiter;var l=typeof s.strictNullHandling==="boolean"?s.strictNullHandling:d.strictNullHandling;
var n;var k;if(typeof s.filter==="function"){k=s.filter;o=k("",o)}else{if(Array.isArray(s.filter)){n=k=s.filter
}}var r=[];if(typeof o!=="object"||o===null){return""}var g;if(s.arrayFormat in d.arrayPrefixGenerators){g=s.arrayFormat
}else{if("indices" in s){g=s.indices?"indices":"repeat"}else{g="indices"}}var h=d.arrayPrefixGenerators[g];
if(!n){n=Object.keys(o)}for(var m=0,p=n.length;m<p;++m){var q=n[m];r=r.concat(d.stringify(o[q],q,h,l,k))
}return r.join(j)}},{"./utils":256}],256:[function(b,c,a){var f={};f.hexTable=new Array(256);
for(var d=0;d<256;++d){f.hexTable[d]="%"+((d<16?"0":"")+d.toString(16)).toUpperCase()
}a.arrayToObject=function(k,h){var l=h.plainObjects?Object.create(null):{};for(var j=0,g=k.length;
j<g;++j){if(typeof k[j]!=="undefined"){l[j]=k[j]}}return l};a.merge=function(o,n,h){if(!n){return o
}if(typeof n!=="object"){if(Array.isArray(o)){o.push(n)}else{if(typeof o==="object"){o[n]=true
}else{o=[o,n]}}return o}if(typeof o!=="object"){o=[o].concat(n);return o}if(Array.isArray(o)&&!Array.isArray(n)){o=a.arrayToObject(o,h)
}var l=Object.keys(n);for(var g=0,j=l.length;g<j;++g){var i=l[g];var m=n[i];if(!Object.prototype.hasOwnProperty.call(o,i)){o[i]=m
}else{o[i]=a.merge(o[i],m,h)}}return o};a.decode=function(h){try{return decodeURIComponent(h.replace(/\+/g," "))
}catch(g){return h}};a.encode=function(k){if(k.length===0){return k}if(typeof k!=="string"){k=""+k
}var h="";for(var j=0,g=k.length;j<g;++j){var l=k.charCodeAt(j);if(l===45||l===46||l===95||l===126||(l>=48&&l<=57)||(l>=65&&l<=90)||(l>=97&&l<=122)){h+=k[j];
continue}if(l<128){h+=f.hexTable[l];continue}if(l<2048){h+=f.hexTable[192|(l>>6)]+f.hexTable[128|(l&63)];
continue}if(l<55296||l>=57344){h+=f.hexTable[224|(l>>12)]+f.hexTable[128|((l>>6)&63)]+f.hexTable[128|(l&63)];
continue}++j;l=65536+(((l&1023)<<10)|(k.charCodeAt(j)&1023));h+=f.hexTable[240|(l>>18)]+f.hexTable[128|((l>>12)&63)]+f.hexTable[128|((l>>6)&63)]+f.hexTable[128|(l&63)]
}return h};a.compact=function(o,j){if(typeof o!=="object"||o===null){return o}j=j||[];
var n=j.indexOf(o);if(n!==-1){return j[n]}j.push(o);if(Array.isArray(o)){var g=[];
for(var l=0,h=o.length;l<h;++l){if(typeof o[l]!=="undefined"){g.push(o[l])}}return g
}var m=Object.keys(o);for(l=0,h=m.length;l<h;++l){var k=m[l];o[k]=a.compact(o[k],j)
}return o};a.isRegExp=function(g){return Object.prototype.toString.call(g)==="[object RegExp]"
};a.isBuffer=function(g){if(g===null||typeof g==="undefined"){return false}return !!(g.constructor&&g.constructor.isBuffer&&g.constructor.isBuffer(g))
}},{}],257:[function(b,c,a){c.exports={clone:b("./clone"),create:b("./create"),defaults:b("./defaults"),extend:b("./extend"),getPrototypeOf:b("./getPrototypeOf"),isDate:b("./isDate"),isEmpty:b("./isEmpty"),isRegExp:b("./isRegExp"),toQueryParameters:b("./toQueryParameters")}
},{"./clone":258,"./create":259,"./defaults":260,"./extend":261,"./getPrototypeOf":262,"./isDate":263,"./isEmpty":264,"./isRegExp":265,"./toQueryParameters":266}],258:[function(c,d,b){c("@marcom/ac-polyfills/Array/isArray");
var h=c("./extend");var a=Object.prototype.hasOwnProperty;var f=function(i,j){var k;
for(k in j){if(a.call(j,k)){if(j[k]===null){i[k]=null}else{if(typeof j[k]==="object"){i[k]=Array.isArray(j[k])?[]:{};
f(i[k],j[k])}else{i[k]=j[k]}}}}return i};d.exports=function g(j,i){if(i){return f({},j)
}return h({},j)}},{"./extend":261,"@marcom/ac-polyfills/Array/isArray":undefined}],259:[function(b,d,a){var f=function(){};
d.exports=function c(g){if(arguments.length>1){throw new Error("Second argument not supported")
}if(g===null||typeof g!=="object"){throw new TypeError("Object prototype may only be an Object.")
}if(typeof Object.create==="function"){return Object.create(g)}else{f.prototype=g;
return new f()}}},{}],260:[function(b,c,a){var f=b("./extend");c.exports=function d(h,g){if(typeof h!=="object"){throw new TypeError("defaults: must provide a defaults object")
}g=g||{};if(typeof g!=="object"){throw new TypeError("defaults: options must be a typeof object")
}return f({},h,g)}},{"./extend":261}],261:[function(c,d,b){c("@marcom/ac-polyfills/Array/prototype.forEach");
var a=Object.prototype.hasOwnProperty;d.exports=function f(){var h;var g;if(arguments.length<2){h=[{},arguments[0]]
}else{h=[].slice.call(arguments)}g=h.shift();h.forEach(function(j){if(j!=null){for(var i in j){if(a.call(j,i)){g[i]=j[i]
}}}});return g}},{"@marcom/ac-polyfills/Array/prototype.forEach":undefined}],262:[function(c,d,b){var a=Object.prototype.hasOwnProperty;
d.exports=function f(i){if(Object.getPrototypeOf){return Object.getPrototypeOf(i)
}else{if(typeof i!=="object"){throw new Error("Requested prototype of a value that is not an object.")
}else{if(typeof this.__proto__==="object"){return i.__proto__}else{var g=i.constructor;
var h;if(a.call(i,"constructor")){h=g;if(!(delete i.constructor)){return null}g=i.constructor;
i.constructor=h}return g?g.prototype:null}}}}},{}],263:[function(b,d,a){d.exports=function c(f){return Object.prototype.toString.call(f)==="[object Date]"
}},{}],264:[function(c,d,b){var a=Object.prototype.hasOwnProperty;d.exports=function f(g){var h;
if(typeof g!=="object"){throw new TypeError("ac-base.Object.isEmpty : Invalid parameter - expected object")
}for(h in g){if(a.call(g,h)){return false}}return true}},{}],265:[function(c,d,b){d.exports=function a(f){return window.RegExp?f instanceof RegExp:false
}},{}],266:[function(c,f,b){var a=c("@marcom/ac-url/joinSearchParams");f.exports=function d(g){if(typeof g!=="object"){throw new TypeError("toQueryParameters error: argument is not an object")
}return a(g,false)}},{"@marcom/ac-url/joinSearchParams":252}],267:[function(b,c,a){arguments[4][11][0].apply(a,arguments)
},{"./ac-event-emitter-micro/EventEmitterMicro":268,dup:11}],268:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],269:[function(b,c,a){c.exports={PageVisibilityManager:b("./ac-page-visibility/PageVisibilityManager")}
},{"./ac-page-visibility/PageVisibilityManager":270}],270:[function(c,f,b){var d=c("@marcom/ac-object/create");
var h=c("@marcom/ac-event-emitter-micro").EventEmitterMicro;function a(){if(typeof document.addEventListener==="undefined"){return
}var i;if(typeof document.hidden!=="undefined"){this._hidden="hidden";i="visibilitychange"
}else{if(typeof document.mozHidden!=="undefined"){this._hidden="mozHidden";i="mozvisibilitychange"
}else{if(typeof document.msHidden!=="undefined"){this._hidden="msHidden";i="msvisibilitychange"
}else{if(typeof document.webkitHidden!=="undefined"){this._hidden="webkitHidden";
i="webkitvisibilitychange"}}}}if(typeof document[this._hidden]==="undefined"){this.isHidden=false
}else{this.isHidden=document[this._hidden]}if(i){document.addEventListener(i,this._handleVisibilityChange.bind(this),false)
}h.call(this)}var g=a.prototype=d(h.prototype);g.CHANGED="changed";g._handleVisibilityChange=function(i){this.isHidden=document[this._hidden];
this.trigger(this.CHANGED,{isHidden:this.isHidden})};f.exports=new a()},{"@marcom/ac-event-emitter-micro":267,"@marcom/ac-object/create":259}],271:[function(d,b,f){var g=d("./utils/eventTypeAvailable");
var j=d("./shared/camelCasedEventTypes");var c=d("./shared/windowFallbackEventTypes");
var h=d("./shared/prefixHelper");var a={};b.exports=function i(m,l){var n;var o;
var k;l=l||"div";m=m.toLowerCase();if(!(l in a)){a[l]={}}o=a[l];if(m in o){return o[m]
}if(g(m,l)){return o[m]=m}if(m in j){for(k=0;k<j[m].length;k++){n=j[m][k];if(g(n.toLowerCase(),l)){return o[m]=n
}}}for(k=0;k<h.evt.length;k++){n=h.evt[k]+m;if(g(n,l)){h.reduce(k);return o[m]=n
}}if(l!=="window"&&c.indexOf(m)){return o[m]=i(m,"window")}return o[m]=false}},{"./shared/camelCasedEventTypes":275,"./shared/prefixHelper":277,"./shared/windowFallbackEventTypes":280,"./utils/eventTypeAvailable":282}],272:[function(d,f,c){var b=d("./shared/stylePropertyCache");
var h=d("./getStyleProperty");var g=d("./getStyleValue");f.exports=function a(k,j){var i;
k=h(k);if(!k){return false}i=b[k].css;if(typeof j!=="undefined"){j=g(k,j);if(j===false){return false
}i+=":"+j+";"}return i}},{"./getStyleProperty":273,"./getStyleValue":274,"./shared/stylePropertyCache":278}],273:[function(f,d,h){var a=f("./shared/stylePropertyCache");
var i=f("./shared/getStyleTestElement");var b=f("./utils/toCSS");var k=f("./utils/toDOM");
var j=f("./shared/prefixHelper");var c=function(o,l){var m=b(o);var n=(l===false)?false:b(l);
a[o]=a[l]=a[m]=a[n]={dom:l,css:n};return l};d.exports=function g(p){var n;var l;
var o;var m;p+="";if(p in a){return a[p].dom}o=i();p=k(p);l=p.charAt(0).toUpperCase()+p.substring(1);
if(p==="filter"){n=["WebkitFilter","filter"]}else{n=(p+" "+j.dom.join(l+" ")+l).split(" ")
}for(m=0;m<n.length;m++){if(typeof o.style[n[m]]!=="undefined"){if(m!==0){j.reduce(m-1)
}return c(p,n[m])}}return c(p,false)}},{"./shared/getStyleTestElement":276,"./shared/prefixHelper":277,"./shared/stylePropertyCache":278,"./utils/toCSS":283,"./utils/toDOM":284}],274:[function(d,b,h){var f=d("./getStyleProperty");
var k=d("./shared/styleValueAvailable");var j=d("./shared/prefixHelper");var a=d("./shared/stylePropertyCache");
var i={};var l=/(\([^\)]+\))/gi;var g=/([^ ,;\(]+(\([^\)]+\))?)/gi;b.exports=function c(o,n){var m;
n+="";o=f(o);if(!o){return false}if(k(o,n)){return n}m=a[o].css;n=n.replace(g,function(q){var p;
var t;var s;var r;if(q[0]==="#"||!isNaN(q[0])){return q}t=q.replace(l,"");s=m+":"+t;
if(s in i){if(i[s]===false){return""}return q.replace(t,i[s])}p=j.css.map(function(u){return u+q
});p=[q].concat(p);for(r=0;r<p.length;r++){if(k(o,p[r])){if(r!==0){j.reduce(r-1)
}i[s]=p[r].replace(l,"");return p[r]}}i[s]=false;return""});n=n.trim();return(n==="")?false:n
}},{"./getStyleProperty":273,"./shared/prefixHelper":277,"./shared/stylePropertyCache":278,"./shared/styleValueAvailable":279}],275:[function(b,c,a){c.exports={transitionend:["webkitTransitionEnd","MSTransitionEnd"],animationstart:["webkitAnimationStart","MSAnimationStart"],animationend:["webkitAnimationEnd","MSAnimationEnd"],animationiteration:["webkitAnimationIteration","MSAnimationIteration"],fullscreenchange:["MSFullscreenChange"],fullscreenerror:["MSFullscreenError"]}
},{}],276:[function(c,d,b){var f;d.exports=function a(){if(!f){f=document.createElement("_")
}else{f.style.cssText="";f.removeAttribute("style")}return f};d.exports.resetElement=function(){f=null
}},{}],277:[function(b,d,a){var i=["-webkit-","-moz-","-ms-"];var f=["Webkit","Moz","ms"];
var h=["webkit","moz","ms"];var c=function(){this.initialize()};var g=c.prototype;
g.initialize=function(){this.reduced=false;this.css=i;this.dom=f;this.evt=h};g.reduce=function(j){if(!this.reduced){this.reduced=true;
this.css=[this.css[j]];this.dom=[this.dom[j]];this.evt=[this.evt[j]]}};d.exports=new c()
},{}],278:[function(b,c,a){c.exports={}},{}],279:[function(c,b,d){var a=c("./stylePropertyCache");
var f=c("./getStyleTestElement");var i=false;var k;var j;var g=function(){var l;
if(!i){i=true;k=("CSS" in window&&"supports" in window.CSS);j=false;l=f();try{l.style.width="invalid"
}catch(m){j=true}}};b.exports=function h(o,n){var m;var l;g();if(k){o=a[o].css;
return CSS.supports(o,n)}l=f();m=l.style[o];if(j){try{l.style[o]=n}catch(p){return false
}}else{l.style[o]=n}return(l.style[o]&&l.style[o]!==m)};b.exports.resetFlags=function(){i=false
}},{"./getStyleTestElement":276,"./stylePropertyCache":278}],280:[function(b,c,a){c.exports=["transitionend","animationstart","animationend","animationiteration",]
},{}],281:[function(c,d,a){var b=/(-webkit-|-moz-|-ms-)|^(webkit|moz|ms)/gi;d.exports=function f(g){g=String.prototype.replace.call(g,b,"");
return g.charAt(0).toLowerCase()+g.substring(1)}},{}],282:[function(c,f,b){var a={window:window,document:document};
f.exports=function d(i,g){var h;i="on"+i;if(!(g in a)){a[g]=document.createElement(g)
}h=a[g];if(i in h){return true}if("setAttribute" in h){h.setAttribute(i,"return;");
return(typeof h[i]==="function")}return false}},{}],283:[function(c,d,b){var f=/^(webkit|moz|ms)/gi;
d.exports=function a(h){var g;if(h.toLowerCase()==="cssfloat"){return"float"}if(f.test(h)){h="-"+h
}return h.replace(/([A-Z]+)([A-Z][a-z])/g,"$1-$2").replace(/([a-z\d])([A-Z])/g,"$1-$2").toLowerCase()
}},{}],284:[function(b,c,a){var f=/-([a-z])/g;c.exports=function d(h){var g;if(h.toLowerCase()==="float"){return"cssFloat"
}h=h.replace(f,function(j,i){return i.toUpperCase()});if(h.substr(0,2)==="Ms"){h="ms"+h.substring(2)
}return h}},{}],285:[function(b,c,a){arguments[4][11][0].apply(a,arguments)},{"./ac-event-emitter-micro/EventEmitterMicro":286,dup:11}],286:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],287:[function(b,c,a){c.exports={Queue:b("./ac-queue/Queue"),QueueItem:b("./ac-queue/QueueItem"),LiveQueue:b("./ac-queue/LiveQueue")}
},{"./ac-queue/LiveQueue":288,"./ac-queue/Queue":289,"./ac-queue/QueueItem":290}],288:[function(b,c,a){b("@marcom/ac-polyfills/Promise");
b("@marcom/ac-polyfills/requestAnimationFrame");b("@marcom/ac-polyfills/Function/prototype.bind");
var g=b("./Queue");var h=b("./QueueItem");function f(i){this._queue=new g();this._maxProcesses=i||1;
this._availableSlots=this._maxProcesses;this._rafId=0;this._isRunning=false;this._boundFunctions={_run:this._run.bind(this),_releaseSlot:this._releaseSlot.bind(this)}
}var d=f.prototype;d.start=function(){if(this._isRunning){cancelAnimationFrame(this._rafId)
}this._rafId=requestAnimationFrame(this._boundFunctions._run);this._isRunning=true
};d.pause=function(){if(this._isRunning){cancelAnimationFrame(this._rafId);this._rafId=0
}this._isRunning=false};d.stop=function(){this.pause();this.clear()};d.enqueue=function(i,j){if(typeof i!=="function"){throw new Error("LiveQueue can only enqueue functions")
}if(j===undefined){j=g.PRIORITY_DEFAULT}var k=new h(i,j);return this.enqueueQueueItem(k)
};d.enqueueQueueItem=function(i){this._queue.enqueueQueueItem(i);if(this._isRunning&&this._rafId===0){this.start()
}return i};d.dequeueQueueItem=function(i){return this._queue.dequeueQueueItem(i)
};d.clear=function(){this._queue=new g()};d.destroy=function(){this.pause();this._isRunning=false;
this._queue=null;this._boundFunctions=null};d.count=function(){return this._queue.count()+this.pending()
};d.pending=function(){return this._maxProcesses-this._availableSlots};d.isEmpty=function(){return this.count()===0
};d._run=function(){if(!this._isRunning){return}this._rafId=requestAnimationFrame(this._boundFunctions._run);
if(this._queue.isEmpty()||this._availableSlots===0){return}var j=this._queue.dequeue();
var i=j.data();if(this._isPromise(i)){this._retainSlot();i.then(this._boundFunctions._releaseSlot,this._boundFunctions._releaseSlot)
}this._stopRunningIfDone()};d._retainSlot=function(){this._availableSlots--};d._releaseSlot=function(){this._availableSlots++;
this._stopRunningIfDone()};d._stopRunningIfDone=function(){if(this._rafId!=0&&this._queue.count()===0&&this._availableSlots==this._maxProcesses){cancelAnimationFrame(this._rafId);
this._rafId=0}};d._isPromise=function(i){return !!(i&&typeof i.then==="function")
};c.exports=f},{"./Queue":289,"./QueueItem":290,"@marcom/ac-polyfills/Function/prototype.bind":undefined,"@marcom/ac-polyfills/Promise":undefined,"@marcom/ac-polyfills/requestAnimationFrame":undefined}],289:[function(b,c,a){var g=b("./QueueItem");
function f(){this._items=[]}var d=f.prototype;d.enqueue=function(j,h){if(h===undefined){h=f.PRIORITY_DEFAULT
}var i=new g(j,h);return this.enqueueQueueItem(i)};d.enqueueQueueItem=function(h){if(this._items.indexOf(h)===-1){this._items.push(h)
}return h};d.dequeue=function(){this._heapSort();var i=this._items.length-1;var h=this._items[0];
this._items[0]=this._items[i];this._items.pop();return h};d.dequeueQueueItem=function(i){var h=this._items.indexOf(i);
if(h>-1){this._items.splice(h,1)}return i};d.peek=function(){if(this.count()==0){return null
}this._heapSort();return this._items[0]};d.isEmpty=function(){return this._items.length===0
};d.count=function(){return this._items.length};d.toString=function(){var j=["Queue total items: "+this.count()+"\n"];
for(var h=0;h<this.count();++h){j.push(this._items[h].toString()+"\n")}return j.join("")
};d._heapSort=function(){var h=0;for(var m=this._items.length-1;m>=0;m--){var n=m;
while(n>0){h++;var j=Math.floor((n-1)/2);if(this._items[n].compareTo(this._items[j])>=0){break
}var l=this._items[n];this._items[n]=this._items[j];this._items[j]=l;n=j}}};f.PRIORITY_LOW=10;
f.PRIORITY_DEFAULT=5;f.PRIORITY_HIGH=1;c.exports=f},{"./QueueItem":290}],290:[function(b,c,a){var g=0;
function f(i,h){this.priority=h;this.data=i;this.insertionOrder=g++}var d=f.prototype;
d.compareTo=function(h){if(this.priority<h.priority){return -1}else{if(this.priority>h.priority){return 1
}else{return(this.insertionOrder<h.insertionOrder)?-1:1}}};d.toString=function(){return"QueueItem {priority:"+this.priority+",\tdata:"+this.data+"\tinsertionOrder:"+this.insertionOrder+"}"
};c.exports=f},{}],291:[function(b,a,h){var d=b("@marcom/ac-object/defaults");var f=b("@marcom/ac-queue").LiveQueue;
var l=b("@marcom/ac-event-emitter-micro").EventEmitterMicro;var g=b("@marcom/ac-raf-emitter/update");
var j=b("@marcom/ac-raf-emitter/draw");var c={container:document.body,includeContainer:false};
var k={loadingPoolSize:8,timeout:null,imageDataAttribute:"data-progressive-image",imageAnimate:true,imageAnimateClass:"progressive-image-animated"};
m.Events={ImageLoad:"image-load",Complete:"complete"};function m(n){l.call(this);
this.options=d(c,n);this.loadingOptions=null;this.els=[];this.loadingQueue=null;
this._queueItems=[];this._queueItemsObj={};this._loadOrder=[];this._timeout=null;
this._didCallLoad=false}var i=m.prototype=Object.create(l.prototype);i.load=function(n){if(this._didCallLoad){return
}this._didCallLoad=true;this.loadingOptions=d(k,n);this.loadingQueue=new f(this.loadingOptions.loadingPoolSize);
this.els=Array.from(this._getProgressiveImageElements());if(this.options.includeContainer&&this.options.container.hasAttribute(this._getProgressiveImageDataAttribute())){this.els.unshift(this.options.container)
}j(function(){var p,o=this.els.length,q;for(p=0;p<o;p++){q={queueItem:this.loadingQueue.enqueue(this._loadNextItem.bind(this,p),p),el:this.els[p],id:p};
this._queueItems.push(q);this._queueItemsObj[p]=q;if(this.loadingOptions.imageAnimate){this.els[p].classList.add(this.loadingOptions.imageAnimateClass)
}}g(function(){this.loadingQueue.start();if(typeof this.loadingOptions.timeout==="number"){this._timeout=setTimeout(this.cancel.bind(this),this.loadingOptions.timeout)
}}.bind(this))}.bind(this))};i.setVisible=function(n){return new Promise(function(p,o){j(function(){n.removeAttribute(this._getProgressiveImageDataAttribute());
p();n=null}.bind(this))}.bind(this))};i.cancel=function(){if(this.els){var o,n=this.els.length;
for(o=0;o<n;o++){this.setVisible(this.els[o]);if(this.loadingOptions.imageAnimate){j(function(){this.els[o].setAttribute("data-progressive-image-loaded","")
}.bind(this,o))}}}this._handleLoadingComplete()};i.destroy=function(){this.cancel();
this.off();l.prototype.destroy.call(this)};i._loadNextItem=function(n){return new Promise(function(o,q,p){var r=this._queueItemsObj[o];
this._loadAndSetVisible(r.el).then(function(){var s=this._queueItems.indexOf(r);
this._queueItems.splice(s,1);this._queueItemsObj[r.id]=null;q();this._handleImageLoad(r.el);
r=q=null;if(this.loadingQueue.count()===1){this._handleLoadingComplete()}}.bind(this))
}.bind(this,n))};i._loadAndSetVisible=function(n){return new Promise(function(p,o){this.setVisible(n).then(function(){this._getBackgroundImageSrc(n).then(function(q){this._loadImage(q).then(p);
n=null}.bind(this))}.bind(this))}.bind(this))};i._getBackgroundImageSrc=function(n){return new Promise(function(p,o){g(function(){var q=n.currentStyle;
if(!q){q=window.getComputedStyle(n,false)}n=null;if(q.backgroundImage.indexOf("url(")===0){p(q.backgroundImage.slice(4,-1).replace(/"/g,""));
return}p(null)}.bind(this))}.bind(this))};i._getProgressiveImageDataAttribute=function(){return this.loadingOptions.imageDataAttribute
};i._getProgressiveImageCSSQuery=function(){return"["+this._getProgressiveImageDataAttribute()+"]"
};i._getProgressiveImageElements=function(){return this.options.container.querySelectorAll(this._getProgressiveImageCSSQuery())||[]
};i._loadImage=function(n){return new Promise(this._loadImagePromiseFunc.bind(this,n))
};i._loadImagePromiseFunc=function(r,q,p){function o(){this.removeEventListener("load",o);
q(this);q=null}if(!r){q(null);return}var n=new Image();n.addEventListener("load",o);
n.src=r};i._clearTimeout=function(){if(this._timeout){window.clearTimeout(this._timeout);
this._timeout=null}};i._handleImageLoad=function(n){j(function(){this.trigger(m.Events.ImageLoad,n);
if(this.loadingOptions.imageAnimate){n.setAttribute("data-progressive-image-loaded","")
}n=null}.bind(this))};i._handleLoadingComplete=function(){this.loadingQueue.stop();
this._clearTimeout();this.trigger(m.Events.Complete)};a.exports=m},{"@marcom/ac-event-emitter-micro":285,"@marcom/ac-object/defaults":260,"@marcom/ac-queue":287,"@marcom/ac-raf-emitter/draw":302,"@marcom/ac-raf-emitter/update":304}],292:[function(b,c,a){arguments[4][11][0].apply(a,arguments)
},{"./ac-event-emitter-micro/EventEmitterMicro":293,dup:11}],293:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],294:[function(c,f,b){var a=c("@marcom/ac-shared-instance").SharedInstance;
var g="ac-raf-emitter-id-generator:sharedRAFEmitterIDGeneratorInstance",d="1.0.3";
var h=function(){this._currentID=0};h.prototype.getNewID=function(){this._currentID++;
return"raf:"+this._currentID};f.exports=a.share(g,d,h)},{"@marcom/ac-shared-instance":305}],295:[function(b,d,a){b("@marcom/ac-polyfills/performance/now");
var f;function c(g){g=g||{};this._reset();this._willRun=false;this._totalSubscribeCount=-1;
this._requestAnimationFrame=window.requestAnimationFrame;this._cancelAnimationFrame=window.cancelAnimationFrame;
this._boundOnAnimationFrame=this._onAnimationFrame.bind(this);this._boundOnExternalAnimationFrame=this._onExternalAnimationFrame.bind(this)
}f=c.prototype;f.subscribe=function(g,h){this._totalSubscribeCount++;if(!this._nextFrameSubscribers[g.id]){if(h){this._nextFrameSubscribersOrder.unshift(g.id)
}else{this._nextFrameSubscribersOrder.push(g.id)}this._nextFrameSubscribers[g.id]=g;
this._nextFrameSubscriberArrayLength++;this._nextFrameSubscriberCount++;this._run()
}return this._totalSubscribeCount};f.unsubscribe=function(g){if(!this._nextFrameSubscribers[g.id]){return false
}this._nextFrameSubscribers[g.id]=null;this._nextFrameSubscriberCount--;if(this._nextFrameSubscriberCount===0){this._cancel()
}return true};f.trigger=function(j,h){var g;for(g=0;g<this._subscriberArrayLength;
g++){if(this._subscribers[this._subscribersOrder[g]]!==null&&this._subscribers[this._subscribersOrder[g]]._didDestroy===false){this._subscribers[this._subscribersOrder[g]].trigger(j,h)
}}};f.destroy=function(){var g=this._cancel();this._subscribers=null;this._subscribersOrder=null;
this._nextFrameSubscribers=null;this._nextFrameSubscribersOrder=null;this._rafData=null;
this._boundOnAnimationFrame=null;this._onExternalAnimationFrame=null;return g};
f.useExternalAnimationFrame=function(g){if(typeof g!=="boolean"){return}var h=this._isUsingExternalAnimationFrame;
if(g&&this._animationFrame){this._cancelAnimationFrame.call(window,this._animationFrame);
this._animationFrame=null}if(this._willRun&&!g&&!this._animationFrame){this._animationFrame=this._requestAnimationFrame.call(window,this._boundOnAnimationFrame)
}this._isUsingExternalAnimationFrame=g;if(g){return this._boundOnExternalAnimationFrame
}return h||false};f._run=function(){if(!this._willRun){this._willRun=true;if(this.lastFrameTime===0){this.lastFrameTime=performance.now()
}this._animationFrameActive=true;if(!this._isUsingExternalAnimationFrame){this._animationFrame=this._requestAnimationFrame.call(window,this._boundOnAnimationFrame)
}return true}};f._cancel=function(){var g=false;if(this._animationFrameActive){if(this._animationFrame){this._cancelAnimationFrame.call(window,this._animationFrame);
this._animationFrame=null}this._animationFrameActive=false;this._willRun=false;
g=true}if(!this._isRunning){this._reset()}return g};f._onSubscribersAnimationFrameStart=function(h){var g;
for(g=0;g<this._subscriberArrayLength;g++){if(this._subscribers[this._subscribersOrder[g]]!==null&&this._subscribers[this._subscribersOrder[g]]._didDestroy===false){this._subscribers[this._subscribersOrder[g]]._onAnimationFrameStart(h)
}}};f._onSubscribersAnimationFrameEnd=function(h){var g;for(g=0;g<this._subscriberArrayLength;
g++){if(this._subscribers[this._subscribersOrder[g]]!==null&&this._subscribers[this._subscribersOrder[g]]._didDestroy===false){this._subscribers[this._subscribersOrder[g]]._onAnimationFrameEnd(h)
}}};f._onAnimationFrame=function(g){this._subscribers=this._nextFrameSubscribers;
this._subscribersOrder=this._nextFrameSubscribersOrder;this._subscriberArrayLength=this._nextFrameSubscriberArrayLength;
this._subscriberCount=this._nextFrameSubscriberCount;this._nextFrameSubscribers={};
this._nextFrameSubscribersOrder=[];this._nextFrameSubscriberArrayLength=0;this._nextFrameSubscriberCount=0;
this._isRunning=true;this._willRun=false;this._didRequestNextRAF=false;this._rafData.delta=g-this.lastFrameTime;
this.lastFrameTime=g;this._rafData.fps=0;if(this._rafData.delta>=1000){this._rafData.delta=0
}if(this._rafData.delta!==0){this._rafData.fps=1000/this._rafData.delta}this._rafData.time=g;
this._rafData.naturalFps=this._rafData.fps;this._rafData.timeNow=Date.now();this._onSubscribersAnimationFrameStart(this._rafData);
this.trigger("update",this._rafData);this.trigger("external",this._rafData);this.trigger("draw",this._rafData);
this._onSubscribersAnimationFrameEnd(this._rafData);if(!this._willRun){this._reset()
}};f._onExternalAnimationFrame=function(g){if(!this._isUsingExternalAnimationFrame){return
}this._onAnimationFrame(g)};f._reset=function(){this._rafData={time:0,delta:0,fps:0,naturalFps:0,timeNow:0};
this._subscribers={};this._subscribersOrder=[];this._subscriberArrayLength=0;this._subscriberCount=0;
this._nextFrameSubscribers={};this._nextFrameSubscribersOrder=[];this._nextFrameSubscriberArrayLength=0;
this._nextFrameSubscriberCount=0;this._didEmitFrameData=false;this._animationFrame=null;
this._animationFrameActive=false;this._isRunning=false;this._shouldReset=false;
this.lastFrameTime=0};d.exports=c},{"@marcom/ac-polyfills/performance/now":undefined}],296:[function(c,g,b){var a=c("@marcom/ac-shared-instance").SharedInstance;
var h="ac-raf-executor:sharedRAFExecutorInstance",f="2.0.1";var d=c("./RAFExecutor");
g.exports=a.share(h,f,d)},{"./RAFExecutor":295,"@marcom/ac-shared-instance":305}],297:[function(f,g,d){var i;
var h=f("@marcom/ac-event-emitter-micro").EventEmitterMicro;var c=f("@marcom/ac-raf-executor/sharedRAFExecutorInstance");
var b=f("@marcom/ac-raf-emitter-id-generator/sharedRAFEmitterIDGeneratorInstance");
function a(j){j=j||{};h.call(this);this.id=b.getNewID();this.executor=j.executor||c;
this._reset();this._willRun=false;this._didDestroy=false}i=a.prototype=Object.create(h.prototype);
i.run=function(){if(!this._willRun){this._willRun=true}return this._subscribe()
};i.cancel=function(){this._unsubscribe();if(this._willRun){this._willRun=false
}this._reset()};i.destroy=function(){var j=this.willRun();this.cancel();this.executor=null;
h.prototype.destroy.call(this);this._didDestroy=true;return j};i.willRun=function(){return this._willRun
};i.isRunning=function(){return this._isRunning};i._subscribe=function(){return this.executor.subscribe(this)
};i._unsubscribe=function(){return this.executor.unsubscribe(this)};i._onAnimationFrameStart=function(j){this._isRunning=true;
this._willRun=false;if(!this._didEmitFrameData){this._didEmitFrameData=true;this.trigger("start",j)
}};i._onAnimationFrameEnd=function(j){if(!this._willRun){this.trigger("stop",j);
this._reset()}};i._reset=function(){this._didEmitFrameData=false;this._isRunning=false
};g.exports=a},{"@marcom/ac-event-emitter-micro":292,"@marcom/ac-raf-emitter-id-generator/sharedRAFEmitterIDGeneratorInstance":294,"@marcom/ac-raf-executor/sharedRAFExecutorInstance":296}],298:[function(b,c,a){var d=b("./SingleCallRAFEmitter");
var g=function(h){this.rafEmitter=new d();this.rafEmitter.on(h,this._onRAFExecuted.bind(this));
this.requestAnimationFrame=this.requestAnimationFrame.bind(this);this.cancelAnimationFrame=this.cancelAnimationFrame.bind(this);
this._frameCallbacks=[];this._nextFrameCallbacks=[];this._currentFrameID=-1;this._cancelFrameIdx=-1;
this._frameCallbackLength=0;this._nextFrameCallbacksLength=0;this._frameCallbackIteration=0
};var f=g.prototype;f.requestAnimationFrame=function(h){this._currentFrameID=this.rafEmitter.run();
this._nextFrameCallbacks.push(this._currentFrameID,h);this._nextFrameCallbacksLength+=2;
return this._currentFrameID};f.cancelAnimationFrame=function(h){this._cancelFrameIdx=this._nextFrameCallbacks.indexOf(h);
if(this._cancelFrameIdx===-1){return}this._nextFrameCallbacks.splice(this._cancelFrameIdx,2);
this._nextFrameCallbacksLength-=2;if(this._nextFrameCallbacksLength===0){this.rafEmitter.cancel()
}};f._onRAFExecuted=function(h){this._frameCallbacks=this._nextFrameCallbacks;this._frameCallbackLength=this._nextFrameCallbacksLength;
this._nextFrameCallbacks=[];this._nextFrameCallbacksLength=0;for(this._frameCallbackIteration=0;
this._frameCallbackIteration<this._frameCallbackLength;this._frameCallbackIteration+=2){this._frameCallbacks[this._frameCallbackIteration+1](h.time,h)
}};c.exports=g},{"./SingleCallRAFEmitter":300}],299:[function(b,c,a){var g=b("./RAFInterface");
var f=function(){this.events={}};var d=f.prototype;d.requestAnimationFrame=function(h){if(!this.events[h]){this.events[h]=new g(h)
}return this.events[h].requestAnimationFrame};d.cancelAnimationFrame=function(h){if(!this.events[h]){this.events[h]=new g(h)
}return this.events[h].cancelAnimationFrame};c.exports=new f()},{"./RAFInterface":298}],300:[function(c,d,b){var a=c("./RAFEmitter");
var f=function(h){a.call(this,h)};var g=f.prototype=Object.create(a.prototype);
g._subscribe=function(){return this.executor.subscribe(this,true)};d.exports=f},{"./RAFEmitter":297}],301:[function(b,c,a){var d=b("./RAFInterfaceController");
c.exports=d.cancelAnimationFrame("external")},{"./RAFInterfaceController":299}],302:[function(b,c,a){var d=b("./RAFInterfaceController");
c.exports=d.requestAnimationFrame("draw")},{"./RAFInterfaceController":299}],303:[function(b,c,a){var d=b("./RAFInterfaceController");
c.exports=d.requestAnimationFrame("external")},{"./RAFInterfaceController":299}],304:[function(b,c,a){var d=b("./RAFInterfaceController");
c.exports=d.requestAnimationFrame("update")},{"./RAFInterfaceController":299}],305:[function(b,c,a){c.exports={SharedInstance:b("./ac-shared-instance/SharedInstance")}
},{"./ac-shared-instance/SharedInstance":306}],306:[function(d,h,c){var i=window,g="AC",a="SharedInstance",f=i[g];
var b=(function(){var j={};return{get:function(l,k){var m=null;if(j[l]&&j[l][k]){m=j[l][k]
}return m},set:function(m,k,l){if(!j[m]){j[m]={}}if(typeof l==="function"){j[m][k]=new l()
}else{j[m][k]=l}return j[m][k]},share:function(m,k,l){var n=this.get(m,k);if(!n){n=this.set(m,k,l)
}return n},remove:function(l,k){var m=typeof k;if(m==="string"||m==="number"){if(!j[l]||!j[l][k]){return
}j[l][k]=null;return}if(j[l]){j[l]=null}}}}());if(!f){f=i[g]={}}if(!f[a]){f[a]=b
}h.exports=f[a]},{}],307:[function(b,c,a){c.exports.EventEmitter=b("./ac-event-emitter/EventEmitter")
},{"./ac-event-emitter/EventEmitter":308}],308:[function(d,c,f){var h="EventEmitter:propagation";
var k=function(l){if(l){this.context=l}};var g=k.prototype;var i=function(){if(!this.hasOwnProperty("_events")&&typeof this._events!=="object"){this._events={}
}return this._events};var a=function(m,o){var p=m[0];var q=m[1];var n=m[2];if((typeof p!=="string"&&typeof p!=="object")||p===null||Array.isArray(p)){throw new TypeError("Expecting event name to be a string or object.")
}if((typeof p==="string")&&!q){throw new Error("Expecting a callback function to be provided.")
}if(q&&(typeof q!=="function")){if(typeof p==="object"&&typeof q==="object"){n=q
}else{throw new TypeError("Expecting callback to be a function.")}}if(typeof p==="object"){for(var l in p){o.call(this,l,p[l],n)
}}if(typeof p==="string"){p=p.split(" ");p.forEach(function(r){o.call(this,r,q,n)
},this)}};var j=function(o,p){var l;var m;var n;l=i.call(this)[o];if(!l||l.length===0){return
}l=l.slice();this._stoppedImmediatePropagation=false;for(m=0,n=l.length;m<n;m++){if(this._stoppedImmediatePropagation||p(l[m],m)){break
}}};var b=function(m,n,o){var l=-1;j.call(this,n,function(q,p){if(q.callback===o){l=p;
return true}});if(l===-1){return}m[n].splice(l,1)};g.on=function(){var l=i.call(this);
a.call(this,arguments,function(n,o,m){l[n]=l[n]||(l[n]=[]);l[n].push({callback:o,context:m})
});return this};g.once=function(){a.call(this,arguments,function(m,o,l){var n=function(p){o.call(l||this,p);
this.off(m,n)};this.on(m,n,this)});return this};g.off=function(n,p){var m=i.call(this);
if(arguments.length===0){this._events={}}else{if(!n||(typeof n!=="string"&&typeof n!=="object")||Array.isArray(n)){throw new TypeError("Expecting event name to be a string or object.")
}}if(typeof n==="object"){for(var o in n){b.call(this,m,o,n[o])}}if(typeof n==="string"){var l=n.split(" ");
if(l.length===1){if(p){b.call(this,m,n,p)}else{m[n]=[]}}else{l.forEach(function(q){m[q]=[]
})}}return this};g.trigger=function(m,n,l){if(!m){throw new Error("trigger method requires an event name")
}if(typeof m!=="string"){throw new TypeError("Expecting event names to be a string.")
}if(l&&typeof l!=="boolean"){throw new TypeError("Expecting doNotPropagate to be a boolean.")
}m=m.split(" ");m.forEach(function(o){j.call(this,o,function(p){p.callback.call(p.context||this.context||this,n)
}.bind(this));if(!l){j.call(this,h,function(q){var p=o;if(q.prefix){p=q.prefix+p
}q.emitter.trigger(p,n)})}},this);return this};g.propagateTo=function(m,n){var l=i.call(this);
if(!l[h]){this._events[h]=[]}l[h].push({emitter:m,prefix:n})};g.stopPropagatingTo=function(o){var m=i.call(this);
if(!o){m[h]=[];return}var p=m[h];var n=p.length;var l;for(l=0;l<n;l++){if(p[l].emitter===o){p.splice(l,1);
break}}};g.stopImmediatePropagation=function(){this._stoppedImmediatePropagation=true
};g.has=function(l,s,p){var o=i.call(this);var m=o[l];if(arguments.length===0){return Object.keys(o)
}if(!m){return false}if(!s){return(m.length>0)?true:false}for(var n=0,q=m.length;
n<q;n++){var r=m[n];if(p&&s&&r.context===p&&r.callback===s){return true}else{if(s&&!p&&r.callback===s){return true
}}}return false};c.exports=k},{}],309:[function(b,c,a){c.exports={DOMEmitter:b("./ac-dom-emitter/DOMEmitter")}
},{"./ac-dom-emitter/DOMEmitter":310}],310:[function(c,b,d){var f;var k=c("ac-event-emitter").EventEmitter,j=c("./DOMEmitterEvent"),g={addEventListener:c("@marcom/ac-dom-events/addEventListener"),removeEventListener:c("@marcom/ac-dom-events/removeEventListener"),dispatchEvent:c("@marcom/ac-dom-events/dispatchEvent")},a={querySelectorAll:c("@marcom/ac-dom-traversal/querySelectorAll"),matchesSelector:c("@marcom/ac-dom-traversal/matchesSelector")};
var i="dom-emitter";function h(l){if(l===null){return}this.el=l;this._bindings={};
this._delegateFuncs={};this._eventEmitter=new k()}f=h.prototype;f.on=function(){this._normalizeArgumentsAndCall(Array.prototype.slice.call(arguments,0),this._on);
return this};f.once=function(){this._normalizeArgumentsAndCall(Array.prototype.slice.call(arguments,0),this._once);
return this};f.off=function(){this._normalizeArgumentsAndCall(Array.prototype.slice.call(arguments,0),this._off);
return this};f.has=function(l,q,p,n){var o,r;if(typeof q==="string"){o=q;r=p}else{r=q;
n=p}if(o){var m=this._getDelegateFuncBindingIdx(l,o,r,n,true);if(m>-1){return true
}return false}if(this._eventEmitter&&this._eventEmitter.has.apply(this._eventEmitter,arguments)){return true
}return false};f.trigger=function(n,m,o,s){n=this._parseEventNames(n);n=this._cleanStringData(n);
var q,r,p,l=n.length;if(typeof m==="string"){q=this._cleanStringData(m);r=o}else{r=m;
s=o}for(p=0;p<l;p++){this._triggerDOMEvents(n[p],r,q)}return this};f.emitterTrigger=function(m,o,p){if(!this._eventEmitter){return this
}m=this._parseEventNames(m);m=this._cleanStringData(m);o=new j(o,this);var n,l=m.length;
for(n=0;n<l;n++){this._eventEmitter.trigger(m[n],o,p)}return this};f.propagateTo=function(l,m){this._eventEmitter.propagateTo(l,m);
return this};f.stopPropagatingTo=function(l){this._eventEmitter.stopPropagatingTo(l);
return this};f.stopImmediatePropagation=function(){this._eventEmitter.stopImmediatePropagation();
return this};f.destroy=function(){this._triggerInternalEvent("willdestroy");this.off();
var l;for(l in this){if(this.hasOwnProperty(l)){this[l]=null}}};f._parseEventNames=function(l){if(!l){return[l]
}return l.split(" ")};f._onListenerEvent=function(n,m){var l=new j(m,this);this._eventEmitter.trigger(n,l,false)
};f._setListener=function(l){this._bindings[l]=this._onListenerEvent.bind(this,l);
g.addEventListener(this.el,l,this._bindings[l])};f._removeListener=function(l){g.removeEventListener(this.el,l,this._bindings[l]);
this._bindings[l]=null};f._triggerInternalEvent=function(l,m){this.emitterTrigger(i+":"+l,m)
};f._normalizeArgumentsAndCall=function(l,n){var r={};if(l.length===0){n.call(this,r);
return}if(typeof l[0]==="string"||l[0]===null){l=this._cleanStringData(l);r.events=l[0];
if(typeof l[1]==="string"){r.delegateQuery=l[1];r.callback=l[2];r.context=l[3]}else{r.callback=l[1];
r.context=l[2]}n.call(this,r);return}var m,p,q=":",o=l[0];for(m in o){if(o.hasOwnProperty(m)){r={};
p=this._cleanStringData(m.split(q));r.events=p[0];r.delegateQuery=p[1];r.callback=o[m];
r.context=l[1];n.call(this,r)}}};f._registerDelegateFunc=function(n,p,q,l,o){var m=this._delegateFunc.bind(this,n,p,q,o);
this._delegateFuncs[p]=this._delegateFuncs[p]||{};this._delegateFuncs[p][n]=this._delegateFuncs[p][n]||[];
this._delegateFuncs[p][n].push({func:l,context:o,delegateFunc:m});return m};f._cleanStringData=function(o){var n=false;
if(typeof o==="string"){o=[o];n=true}var m=[],q,s,r,p,l=o.length;for(q=0;q<l;q++){s=o[q];
if(typeof s==="string"){if(s===""||s===" "){continue}r=s.length;while(s[0]===" "){s=s.slice(1,r);
r--}while(s[r-1]===" "){s=s.slice(0,r-1);r--}}m.push(s)}if(n){return m[0]}return m
};f._unregisterDelegateFunc=function(n,q,l,p){if(!this._delegateFuncs[q]||!this._delegateFuncs[q][n]){return
}var o=this._getDelegateFuncBindingIdx(n,q,l,p),m;if(o>-1){m=this._delegateFuncs[q][n][o].delegateFunc;
this._delegateFuncs[q][n].splice(o,1);if(this._delegateFuncs[q][n].length===0){this._delegateFuncs[q][n]=null
}}return m};f._unregisterDelegateFuncs=function(l,n){if(!this._delegateFuncs[n]){return
}if(l!==null&&!this._delegateFuncs[n][l]){return}if(l===null){var m;for(m in this._delegateFuncs[n]){if(this._delegateFuncs[n].hasOwnProperty(m)){this._unbindDelegateFunc(m,n)
}}return}this._unbindDelegateFunc(l,n)};f._unbindDelegateFunc=function(l,n){var o,p,m=0;
while(this._delegateFuncs[n][l]&&this._delegateFuncs[n][l][m]){o=this._delegateFuncs[n][l][m];
p=this._delegateFuncs[n][l][m].length;this._off({events:l,delegateQuery:n,callback:o.func,context:o.context});
if(this._delegateFuncs[n][l]&&p===this._delegateFuncs[n][l].length){m++}}o=p=null
};f._unregisterDelegateFuncsByEvent=function(l){var m;for(m in this._delegateFuncs){if(this._delegateFuncs.hasOwnProperty(m)){this._unregisterDelegateFuncs(l,m)
}}};f._delegateFunc=function(l,p,r,n,q){if(this._targetHasDelegateAncestor(q.target,p)){var m=Array.prototype.slice.call(arguments,0),o=m.slice(4,m.length);
n=n||window;if(typeof q.detail==="object"){o[0]=q.detail}r.apply(n,o)}};f._targetHasDelegateAncestor=function(n,m){var l=n;
while(l&&l!==this.el&&l!==document.documentElement){if(a.matchesSelector(l,m)){return true
}l=l.parentNode}return false};f._on=function(p){var m=p.events,q=p.callback,o=p.delegateQuery,n=p.context,l=p.unboundCallback||q;
m=this._parseEventNames(m);m.forEach(function(v,r,t,u,s){if(!this.has(s)){this._setListener(s)
}if(typeof u==="string"){v=this._registerDelegateFunc(s,u,v,r,t)}this._triggerInternalEvent("willon",{evt:s,callback:v,context:t,delegateQuery:u});
this._eventEmitter.on(s,v,t);this._triggerInternalEvent("didon",{evt:s,callback:v,context:t,delegateQuery:u})
}.bind(this,q,l,n,o));m=q=l=o=n=null};f._off=function(q){var m=q.events,r=q.callback,p=q.delegateQuery,o=q.context,l=q.unboundCallback||r;
if(typeof m==="undefined"){this._eventEmitter.off();var n;for(n in this._bindings){if(this._bindings.hasOwnProperty(n)){this._removeListener(n)
}}for(n in this._delegateFuncs){if(this._delegateFuncs.hasOwnProperty(n)){this._delegateFuncs[n]=null
}}return}m=this._parseEventNames(m);m.forEach(function(w,s,u,v,t){if(typeof v==="string"&&typeof s==="function"){w=this._unregisterDelegateFunc(t,v,s,u);
if(!w){return}}if(typeof v==="string"&&typeof w==="undefined"){this._unregisterDelegateFuncs(t,v);
return}if(typeof t==="string"&&typeof w==="undefined"){this._unregisterDelegateFuncsByEvent(t);
if(typeof v==="string"){return}}this._triggerInternalEvent("willoff",{evt:t,callback:w,context:u,delegateQuery:v});
this._eventEmitter.off(t,w,u);this._triggerInternalEvent("didoff",{evt:t,callback:w,context:u,delegateQuery:v});
if(!this.has(t)){this._removeListener(t)}}.bind(this,r,l,o,p));m=r=l=p=o=null};
f._once=function(o){var l=o.events,p=o.callback,n=o.delegateQuery,m=o.context;l=this._parseEventNames(l);
l.forEach(function(t,r,s,q){if(typeof s==="string"){return this._handleDelegateOnce(q,t,r,s)
}if(!this.has(q)){this._setListener(q)}this._triggerInternalEvent("willonce",{evt:q,callback:t,context:r,delegateQuery:s});
this._eventEmitter.once.call(this,q,t,r);this._triggerInternalEvent("didonce",{evt:q,callback:t,context:r,delegateQuery:s})
}.bind(this,p,m,n));l=p=n=m=null};f._handleDelegateOnce=function(l,o,m,n){this._triggerInternalEvent("willonce",{evt:l,callback:o,context:m,delegateQuery:n});
this._on({events:l,context:m,delegateQuery:n,callback:this._getDelegateOnceCallback.bind(this,l,o,m,n),unboundCallback:o});
this._triggerInternalEvent("didonce",{evt:l,callback:o,context:m,delegateQuery:n});
return this};f._getDelegateOnceCallback=function(l,q,n,p){var m=Array.prototype.slice.call(arguments,0),o=m.slice(4,m.length);
q.apply(n,o);this._off({events:l,delegateQuery:p,callback:q,context:n})};f._getDelegateFuncBindingIdx=function(s,p,n,l,t){var r=-1;
if(this._delegateFuncs[p]&&this._delegateFuncs[p][s]){var o,m,q=this._delegateFuncs[p][s].length;
for(o=0;o<q;o++){m=this._delegateFuncs[p][s][o];if(t&&typeof n==="undefined"){n=m.func
}if(m.func===n&&m.context===l){r=o;break}}}return r};f._triggerDOMEvents=function(n,q,p){var m=[this.el];
if(p){m=a.querySelectorAll(p,this.el)}var o,r,l=m.length;for(o=0;o<l;o++){g.dispatchEvent(m[o],n,{bubbles:true,cancelable:true,detail:q})
}};b.exports=h},{"./DOMEmitterEvent":311,"@marcom/ac-dom-events/addEventListener":17,"@marcom/ac-dom-events/dispatchEvent":18,"@marcom/ac-dom-events/removeEventListener":21,"@marcom/ac-dom-traversal/matchesSelector":48,"@marcom/ac-dom-traversal/querySelectorAll":50,"ac-event-emitter":307}],311:[function(b,c,a){var f={preventDefault:b("@marcom/ac-dom-events/preventDefault"),stopPropagation:b("@marcom/ac-dom-events/stopPropagation"),target:b("@marcom/ac-dom-events/target")};
var d;var g=function(i,h){this._domEmitter=h;this.originalEvent=i||{};this._originalTarget=f.target(this.originalEvent);
this.target=this._originalTarget||this._domEmitter.el;this.currentTarget=this._domEmitter.el;
this.timeStamp=this.originalEvent.timeStamp||Date.now();if(this._isDOMEvent(this.originalEvent)){if(typeof this.originalEvent.detail==="object"){this.data=this.originalEvent.detail
}}else{if(i){this.data=this.originalEvent;this.originalEvent={}}}};d=g.prototype;
d.preventDefault=function(){f.preventDefault(this.originalEvent)};d.stopPropagation=function(){f.stopPropagation(this.originalEvent)
};d.stopImmediatePropagation=function(){if(this.originalEvent.stopImmediatePropagation){this.originalEvent.stopImmediatePropagation()
}this._domEmitter.stopImmediatePropagation()};d._isDOMEvent=function(h){if(this._originalTarget||(document.createEvent!=="undefined"&&typeof CustomEvent!=="undefined"&&h instanceof CustomEvent)){return true
}return false};c.exports=g},{"@marcom/ac-dom-events/preventDefault":20,"@marcom/ac-dom-events/stopPropagation":24,"@marcom/ac-dom-events/target":25}],312:[function(b,c,a){arguments[4][11][0].apply(a,arguments)
},{"./ac-event-emitter-micro/EventEmitterMicro":313,dup:11}],313:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],314:[function(b,c,a){c.exports={path:b("./ac-path/path")}},{"./ac-path/path":315}],315:[function(b,c,a){function d(f){return d.parse(f)
}d.basename=function(g,f){d._assertStr(g);var i;var h=g.match(/[^/]*$/)[0];if(f){i=h.match(new RegExp("(.*)"+f+"$"));
if(i){h=i[1]}}return h};d.dirname=function(g){d._assertStr(g);var f=g.match(/^(.*)\b\/|.*/);
return f[1]||g};d.extname=function(f){d._assertStr(f);var g=f.match(/\.[^.]*$/);
return g?g[0]:""};d.filename=function(f){d._assertStr(f);return d.basename(f,d.extname(f))
};d.format=function(g,h){d._assertObj(g);var f=(g.dirname)?g.dirname+"/":"";if(g.basename){f+=g.basename
}else{if(g.filename){f+=g.filename;if(g.extname){f+=g.extname}}}if(h){if(typeof h==="string"){f+="?"+h
}else{if(Object.prototype.toString.call(h)===Object.prototype.toString.call([])){f+="?"+h.join("&")
}}}return f};d.isAbsolute=function(f){d._assertStr(f);return(!!f.match(/(^http(s?))/))
};d.isRootRelative=function(f){d._assertStr(f);return !!f.match(/^\/(?!\/)/)};d.parse=function(f){d._assertStr(f);
return{dirname:d.dirname(f),basename:d.basename(f),filename:d.filename(f),extname:d.extname(f)}
};d._assertStr=function(f){d._assertType(f,"string")};d._assertObj=function(f){d._assertType(f,"object")
};d._assertType=function(h,f){var g=typeof h;if(g==="undefined"||g!==f){throw new TypeError("path param must be of type "+f)
}};c.exports=d},{}],316:[function(b,c,a){c.exports={cname:b("./ac-cname/cname")}
},{"./ac-cname/cname":317}],317:[function(c,d,a){var f=c("ac-path").path;function b(g){return b.addPrefix(g)
}b._prefix=(function(){var g="https://images.apple.com/global/elements/blank.gif";return g.replace(/global\/.*/,"")
}());b.addPrefix=function(g){if(f.isAbsolute(g)){return g}b._assertRootRelative(g);
g=b._prefix+g.replace(/^\//,"");g=g.replace(/(^.+)(\/105\/)/,"$1/");return g};b.formatUrl=function(j,g,l,k){var i=f.format({dirname:j,filename:g,extname:l},k);
if(f.isAbsolute(i)){return i}b._assertRootRelative(j);var h=b.addPrefix(i);return h
};b._assertRootRelative=function(g){if(!f.isRootRelative(g)){throw new URIError("Only root-relative paths are currently supported")
}};d.exports=b},{"ac-path":314}],318:[function(j,c,v){var u=j("ndarray");var d=j("ndarray-ops");
var m=j("typedarray-pool");c.exports=f;var w=null;var p=null;var r=null;function b(x){w=[x.LINEAR,x.NEAREST_MIPMAP_LINEAR,x.LINEAR_MIPMAP_NEAREST,x.LINEAR_MIPMAP_NEAREST];
p=[x.NEAREST,x.LINEAR,x.NEAREST_MIPMAP_NEAREST,x.NEAREST_MIPMAP_LINEAR,x.LINEAR_MIPMAP_NEAREST,x.LINEAR_MIPMAP_LINEAR];
r=[x.REPEAT,x.CLAMP_TO_EDGE,x.MIRRORED_REPEAT]}function k(x){return(("undefined"!=typeof HTMLCanvasElement&&x instanceof HTMLCanvasElement)||("undefined"!=typeof HTMLImageElement&&x instanceof HTMLImageElement)||("undefined"!=typeof HTMLVideoElement&&x instanceof HTMLVideoElement)||("undefined"!=typeof ImageData&&x instanceof ImageData))
}var l=function(x,y){d.muls(x,y,255)};function s(y,x,z){var A=y.gl;var B=A.getParameter(A.MAX_TEXTURE_SIZE);
if(x<0||x>B||z<0||z>B){throw new Error("gl-texture2d: Invalid texture size")}y._shape=[x,z];
y.bind();A.texImage2D(A.TEXTURE_2D,0,y.format,x,z,0,y.format,y.type,null);y._mipLevels=[0];
return y}function t(y,z,x,E,C,B){this.gl=y;this.handle=z;this.format=C;this.type=B;
this._shape=[x,E];this._mipLevels=[0];this._magFilter=y.NEAREST;this._minFilter=y.NEAREST;
this._wrapS=y.CLAMP_TO_EDGE;this._wrapT=y.CLAMP_TO_EDGE;this._anisoSamples=1;var D=this;
var F=[this._wrapS,this._wrapT];Object.defineProperties(F,[{get:function(){return D._wrapS
},set:function(G){return D.wrapS=G}},{get:function(){return D._wrapT},set:function(G){return D.wrapT=G
}}]);this._wrapVector=F;var A=[this._shape[0],this._shape[1]];Object.defineProperties(A,[{get:function(){return D._shape[0]
},set:function(G){return D.width=G}},{get:function(){return D._shape[1]},set:function(G){return D.height=G
}}]);this._shapeVector=A}var n=t.prototype;Object.defineProperties(n,{minFilter:{get:function(){return this._minFilter
},set:function(x){this.bind();var y=this.gl;if(this.type===y.FLOAT&&w.indexOf(x)>=0){if(!y.getExtension("OES_texture_float_linear")){x=y.NEAREST
}}if(p.indexOf(x)<0){throw new Error("gl-texture2d: Unknown filter mode "+x)}y.texParameteri(y.TEXTURE_2D,y.TEXTURE_MIN_FILTER,x);
return this._minFilter=x}},magFilter:{get:function(){return this._magFilter},set:function(x){this.bind();
var y=this.gl;if(this.type===y.FLOAT&&w.indexOf(x)>=0){if(!y.getExtension("OES_texture_float_linear")){x=y.NEAREST
}}if(p.indexOf(x)<0){throw new Error("gl-texture2d: Unknown filter mode "+x)}y.texParameteri(y.TEXTURE_2D,y.TEXTURE_MAG_FILTER,x);
return this._magFilter=x}},mipSamples:{get:function(){return this._anisoSamples
},set:function(x){var z=this._anisoSamples;this._anisoSamples=Math.max(x,1)|0;if(z!==this._anisoSamples){var y=this.gl.getExtension("EXT_texture_filter_anisotropic");
if(y){this.gl.texParameterf(this.gl.TEXTURE_2D,y.TEXTURE_MAX_ANISOTROPY_EXT,this._anisoSamples)
}}return this._anisoSamples}},wrapS:{get:function(){return this._wrapS},set:function(x){this.bind();
if(r.indexOf(x)<0){throw new Error("gl-texture2d: Unknown wrap mode "+x)}this.gl.texParameteri(this.gl.TEXTURE_2D,this.gl.TEXTURE_WRAP_S,x);
return this._wrapS=x}},wrapT:{get:function(){return this._wrapT},set:function(x){this.bind();
if(r.indexOf(x)<0){throw new Error("gl-texture2d: Unknown wrap mode "+x)}this.gl.texParameteri(this.gl.TEXTURE_2D,this.gl.TEXTURE_WRAP_T,x);
return this._wrapT=x}},wrap:{get:function(){return this._wrapVector},set:function(x){if(!Array.isArray(x)){x=[x,x]
}if(x.length!==2){throw new Error("gl-texture2d: Must specify wrap mode for rows and columns")
}for(var y=0;y<2;++y){if(r.indexOf(x[y])<0){throw new Error("gl-texture2d: Unknown wrap mode "+x)
}}this._wrapS=x[0];this._wrapT=x[1];var z=this.gl;this.bind();z.texParameteri(z.TEXTURE_2D,z.TEXTURE_WRAP_S,this._wrapS);
z.texParameteri(z.TEXTURE_2D,z.TEXTURE_WRAP_T,this._wrapT);return x}},shape:{get:function(){return this._shapeVector
},set:function(y){if(!Array.isArray(y)){y=[y|0,y|0]}else{if(y.length!==2){throw new Error("gl-texture2d: Invalid texture shape")
}}s(this,y[0]|0,y[1]|0);return[y[0]|0,y[1]|0]}},width:{get:function(){return this._shape[0]
},set:function(x){x=x|0;s(this,x,this._shape[1]);return x}},height:{get:function(){return this._shape[1]
},set:function(x){x=x|0;s(this,this._shape[0],x);return x}}});n.bind=function(x){var y=this.gl;
if(x!==undefined){y.activeTexture(y.TEXTURE0+(x|0))}y.bindTexture(y.TEXTURE_2D,this.handle);
if(x!==undefined){return(x|0)}return y.getParameter(y.ACTIVE_TEXTURE)-y.TEXTURE0
};n.dispose=function(){this.gl.deleteTexture(this.handle)};n.generateMipmap=function(){this.bind();
this.gl.generateMipmap(this.gl.TEXTURE_2D);var x=Math.min(this._shape[0],this._shape[1]);
for(var y=0;x>0;++y,x>>>=1){if(this._mipLevels.indexOf(y)<0){this._mipLevels.push(y)
}}};n.setPixels=function(z,y,D,C){var B=this.gl;this.bind();if(Array.isArray(y)){C=D;
D=y[1]|0;y=y[0]|0}else{y=y||0;D=D||0}C=C||0;var A=k(z)?z:z.raw;if(A){var x=this._mipLevels.indexOf(C)<0;
if(x){B.texImage2D(B.TEXTURE_2D,0,this.format,this.format,this.type,A);this._mipLevels.push(C)
}else{B.texSubImage2D(B.TEXTURE_2D,C,y,D,this.format,this.type,A)}}else{if(z.shape&&z.stride&&z.data){if(z.shape.length<2||y+z.shape[1]>this._shape[1]>>>C||D+z.shape[0]>this._shape[0]>>>C||y<0||D<0){throw new Error("gl-texture2d: Texture dimensions are out of bounds")
}q(B,y,D,C,this.format,this.type,this._mipLevels,z)}else{throw new Error("gl-texture2d: Unsupported data type")
}}};function g(x,y){if(x.length===3){return(y[2]===1)&&(y[1]===x[0]*x[2])&&(y[0]===x[2])
}return(y[0]===1)&&(y[1]===x[0])}function q(J,A,I,D,O,E,G,F){var N=F.dtype;var z=F.shape.slice();
if(z.length<2||z.length>3){throw new Error("gl-texture2d: Invalid ndarray, must be 2d or 3d")
}var C=0,L=0;var K=g(z,F.stride.slice());if(N==="float32"){C=J.FLOAT}else{if(N==="float64"){C=J.FLOAT;
K=false;N="float32"}else{if(N==="uint8"){C=J.UNSIGNED_BYTE}else{C=J.UNSIGNED_BYTE;
K=false;N="uint8"}}}var x=1;if(z.length===2){L=J.LUMINANCE;z=[z[0],z[1],1];F=u(F.data,z,[F.stride[0],F.stride[1],1],F.offset)
}else{if(z.length===3){if(z[2]===1){L=J.ALPHA}else{if(z[2]===2){L=J.LUMINANCE_ALPHA
}else{if(z[2]===3){L=J.RGB}else{if(z[2]===4){L=J.RGBA}else{throw new Error("gl-texture2d: Invalid shape for pixel coords")
}}}}x=z[2]}else{throw new Error("gl-texture2d: Invalid shape for texture")}}if((L===J.LUMINANCE||L===J.ALPHA)&&(O===J.LUMINANCE||O===J.ALPHA)){L=O
}if(L!==O){throw new Error("gl-texture2d: Incompatible texture format for setPixels")
}var H=F.size;var y=G.indexOf(D)<0;if(y){G.push(D)}if(C===E&&K){if(F.offset===0&&F.data.length===H){if(y){J.texImage2D(J.TEXTURE_2D,D,O,z[0],z[1],0,O,E,F.data)
}else{J.texSubImage2D(J.TEXTURE_2D,D,A,I,z[0],z[1],O,E,F.data)}}else{if(y){J.texImage2D(J.TEXTURE_2D,D,O,z[0],z[1],0,O,E,F.data.subarray(F.offset,F.offset+H))
}else{J.texSubImage2D(J.TEXTURE_2D,D,A,I,z[0],z[1],O,E,F.data.subarray(F.offset,F.offset+H))
}}}else{var M;if(E===J.FLOAT){M=m.mallocFloat32(H)}else{M=m.mallocUint8(H)}var B=u(M,z,[z[2],z[2]*z[0],1]);
if(C===J.FLOAT&&E===J.UNSIGNED_BYTE){l(B,F)}else{d.assign(B,F)}if(y){J.texImage2D(J.TEXTURE_2D,D,O,z[0],z[1],0,O,E,M.subarray(0,H))
}else{J.texSubImage2D(J.TEXTURE_2D,D,A,I,z[0],z[1],O,E,M.subarray(0,H))}if(E===J.FLOAT){m.freeFloat32(M)
}else{m.freeUint8(M)}}}function i(y){var x=y.createTexture();y.bindTexture(y.TEXTURE_2D,x);
y.texParameteri(y.TEXTURE_2D,y.TEXTURE_MIN_FILTER,y.NEAREST);y.texParameteri(y.TEXTURE_2D,y.TEXTURE_MAG_FILTER,y.NEAREST);
y.texParameteri(y.TEXTURE_2D,y.TEXTURE_WRAP_S,y.CLAMP_TO_EDGE);y.texParameteri(y.TEXTURE_2D,y.TEXTURE_WRAP_T,y.CLAMP_TO_EDGE);
return x}function a(D,B,x,C,A){var y=D.getParameter(D.MAX_TEXTURE_SIZE);if(B<0||B>y||x<0||x>y){throw new Error("gl-texture2d: Invalid texture shape")
}if(A===D.FLOAT&&!D.getExtension("OES_texture_float")){throw new Error("gl-texture2d: Floating point textures not supported on this platform")
}var z=i(D);D.texImage2D(D.TEXTURE_2D,0,C,B,x,0,C,A,null);return new t(D,z,B,x,C,A)
}function o(D,C,A,x,B,z){var y=i(D);D.texImage2D(D.TEXTURE_2D,0,B,B,z,C);return new t(D,y,A,x,B,z)
}function h(A,C){var K=C.dtype;var D=C.shape.slice();var F=A.getParameter(A.MAX_TEXTURE_SIZE);
if(D[0]<0||D[0]>F||D[1]<0||D[1]>F){throw new Error("gl-texture2d: Invalid texture size")
}var I=g(D,C.stride.slice());var E=0;if(K==="float32"){E=A.FLOAT}else{if(K==="float64"){E=A.FLOAT;
I=false;K="float32"}else{if(K==="uint8"){E=A.UNSIGNED_BYTE}else{E=A.UNSIGNED_BYTE;
I=false;K="uint8"}}}var G=0;if(D.length===2){G=A.LUMINANCE;D=[D[0],D[1],1];C=u(C.data,D,[C.stride[0],C.stride[1],1],C.offset)
}else{if(D.length===3){if(D[2]===1){G=A.ALPHA}else{if(D[2]===2){G=A.LUMINANCE_ALPHA
}else{if(D[2]===3){G=A.RGB}else{if(D[2]===4){G=A.RGBA}else{throw new Error("gl-texture2d: Invalid shape for pixel coords")
}}}}}else{throw new Error("gl-texture2d: Invalid shape for texture")}}if(E===A.FLOAT&&!A.getExtension("OES_texture_float")){E=A.UNSIGNED_BYTE;
I=false}var z,B;var J=C.size;if(!I){var x=[D[2],D[2]*D[0],1];B=m.malloc(J,K);var y=u(B,D,x,0);
if((K==="float32"||K==="float64")&&E===A.UNSIGNED_BYTE){l(y,C)}else{d.assign(y,C)
}z=B.subarray(0,J)}else{if(C.offset===0&&C.data.length===J){z=C.data}else{z=C.data.subarray(C.offset,C.offset+J)
}}var H=i(A);A.texImage2D(A.TEXTURE_2D,0,G,D[0],D[1],0,G,E,z);if(!I){m.free(B)}return new t(A,H,D[0],D[1],G,E)
}function f(z){if(arguments.length<=1){throw new Error("gl-texture2d: Missing arguments for texture2d constructor")
}if(!w){b(z)}if(typeof arguments[1]==="number"){return a(z,arguments[1],arguments[2],arguments[3]||z.RGBA,arguments[4]||z.UNSIGNED_BYTE)
}if(Array.isArray(arguments[1])){return a(z,arguments[1][0]|0,arguments[1][1]|0,arguments[2]||z.RGBA,arguments[3]||z.UNSIGNED_BYTE)
}if(typeof arguments[1]==="object"){var x=arguments[1];var y=k(x)?x:x.raw;if(y){return o(z,y,x.width|0,x.height|0,arguments[2]||z.RGBA,arguments[3]||z.UNSIGNED_BYTE)
}else{if(x.shape&&x.data&&x.stride){return h(z,x)}}}throw new Error("gl-texture2d: Invalid arguments for texture2d constructor")
}},{ndarray:362,"ndarray-ops":357,"typedarray-pool":366}],319:[function(b,c,a){c.exports={TextureLoader:b("./ac-texture-loader/TextureLoader")}
},{"./ac-texture-loader/TextureLoader":320}],320:[function(b,a,f){var n=b("@marcom/ac-event-emitter-micro").EventEmitterMicro,i=b("gl-texture2d"),d=b("@marcom/ac-object"),h=b("ac-cname").cname,l=b("@marcom/ac-dom-emitter").DOMEmitter,k=b("@marcom/ac-viewport").Viewport;
var c={basePath:"/",ignoreBreakpoint:false,type:"image",extension:"png",allowXLarge:false,timeout:5000};
var m=["mp4"];function j(o){n.call(this);o=o||{};this.options=d.defaults(c,o);this.textureUnitCount=0;
this._boundOnBreakpoint=this._onBreakpoint.bind(this);k.on("breakpoint",this._boundOnBreakpoint);
this._onBreakpoint();this.textures={}}var g=j.prototype=Object.create(n.prototype);
g.createTexture=function(q,p,o){var r=this._getTextureDOMElement(o);this.textures[p]={texture:{},el:r,unit:this.textureUnitCount,context:q,options:o||{}};
this.textureUnitCount++;return this.textures[p].texture};g.load=function(r,q){if(typeof r!=="string"){return false
}var s=this.textures[r];if(!s){this.createTexture(r,q);s=this.textures[r]}var o=d.defaults(s.options,q||{});
var p=this.getAssetPath(r,o);var t=new XMLHttpRequest();t.open("GET",p,true);t.responseType="arraybuffer";
t.onload=this._handleXHRLoaded.bind(this,r,s,o,t);t.send(null);return s.texture
};g.emptyTextureCache=function(){var o;for(o in this.textures){if(this.textures.hasOwnProperty(o)){this.textures[o].texture.dispose()
}}this.textures={}};g.getAssetPath=function(q,p){p=d.defaults(this.options,p||{});
var v=p.basePath,u=p.extension,s="",o="_2x";u="."+u;if(!p.ignoreBreakpoint){var r=this.breakpointName;
if(r==="xlarge"&&!p.allowXLarge){r="large"}s+="_"+r}if(p.retina===true){s+=o}else{if(p.retina===false){s+=""
}else{var t="";if(window.devicePixelRatio>1.5){t=o}s+=t}}return h.formatUrl(v,q+s,u)
};g.cancelXHR=function(){};g.destroy=function(){this.emptyTextureCache();this.cancelXHR();
k.off("breakpoint",this._boundOnBreakpoint);var o;for(o in this){if(this.hasOwnProperty(o)){this[o]=null
}}};g._getTextureDOMElement=function(o){var q,p="img";if(m.indexOf(o.extension)>-1){p="video"
}return document.createElement(p)};g._handleXHRLoaded=function(p,w,y,x){if(x.status>=400){this.trigger("error",{name:p,xhr:x});
x=null;return}var v=window.URL||window.webkitURL;var z="image",q=w.el.tagName.toLowerCase();
if(q==="video"){z="video"}var s=new Uint8Array(x.response),o=new Blob([s],{type:z+"/"+y.extension}),u=v.createObjectURL(o);
var t=new l(w.el);var r="load";if(q==="video"){r="canplay"}t.on(r,this._onImageBlobTextureLoaded.bind(this,p,w,t,x));
w.el.src=u};g._onImageBlobTextureLoaded=function(o,q,p,r){q.texture=i(q.context,q.el);
this.textures[o]=q;this.trigger("load",{name:o,texture:q.texture,el:q.el});p.destroy();
r=p=null};g._onBreakpoint=function(){this.breakpointName=k.getBreakpoint().name
};a.exports=j},{"@marcom/ac-dom-emitter":309,"@marcom/ac-event-emitter-micro":312,"@marcom/ac-object":257,"@marcom/ac-viewport":343,"ac-cname":316,"gl-texture2d":318}],321:[function(b,c,a){c.exports={BreakpointsDelegate:b("./ac-breakpoints-delegate/BreakpointsDelegate")}
},{"./ac-breakpoints-delegate/BreakpointsDelegate":322}],322:[function(f,b,j){var d=f("@marcom/ac-shared-instance").SharedInstance,g=f("@marcom/ac-object"),q=f("@marcom/ac-window-delegate").WindowDelegate,c=f("@marcom/ac-window-delegate").WindowDelegateCustomEvent,p=f("@marcom/ac-event-emitter").EventEmitter;
var m="ac-breakpoints-delegate:BreakpointsDelegate",a="2.1.1";var n="breakpoint",o="resize orientationchange";
var h={large:{"min-width":1069,"max-width":1441,content:980,oldie:true},xlarge:{"min-width":1442,content:980},medium:{"min-width":736,"max-width":1068,content:692},small:{"min-width":320,"max-width":735,content:288,"max-device-width":768}};
var i={minWidth:"min-width",maxWidth:"max-width",maxDeviceWidth:"max-device-width",content:"content",oldIE:"oldie"};
function l(r){this._customEvent=new c(n,this._onBreakpointListenerAdded.bind(this),this._onBreakpointListenerRemoved.bind(this));
this.setBreakpoints(h)}var k=l.prototype;k.initialize=function(){this._breakpoint=null;
this._lastBreakpoint=null;this._handleOldIE();this._breakpointOrder=this._setBreakpointOrder();
if(!this._isOldIE){this._handleResize()}};k.getCustomEvent=function(){return this._customEvent
};k.getBreakpoint=function(){if(!this._customEvent.active){this._handleResize()
}return this._breakpoint};k.setBreakpoints=function(r){this.breakpoints=g.clone(r);
this.initialize()};k._handleResize=function(){var v=q.clientWidth(),w;var u,t,s,r=this._breakpointOrder.length;
for(u=0;u<r;u++){t=this._breakpointOrder[u];s=this.breakpoints[t];if(s._breakPosition>v){break
}}if(u>0){u=u-1}w=this.breakpoints[this._breakpointOrder[u]];if(!this._breakpoint){this._breakpoint=w;
return}if(w.name===this._breakpoint.name){return}this._lastBreakpoint=this._breakpoint;
this._breakpoint=w;q.trigger(n,{incoming:this._breakpoint,outgoing:this._lastBreakpoint})
};k._setBreakpointOrder=function(){var v=0,s=[],r=[],u=i.minWidth,t;for(t in this.breakpoints){if(this.breakpoints.hasOwnProperty(t)){this.breakpoints[t].name=t;
s.push(this.breakpoints[t][u])}}s.sort(function(x,w){return x-w});s.forEach(function(x){var w;
for(w in this.breakpoints){if(this.breakpoints.hasOwnProperty(w)){if(this.breakpoints[w][u]===x){r.push(w)
}}}},this);r.forEach(function(x,w){this.breakpoints[x]._breakPosition=v;if(r[w+1]){v=this.breakpoints[r[w+1]][u]
}},this);return r};k._handleOldIE=function(){var r=document.documentElement,t=i.oldIE;
if(r.className.indexOf("no-"+t)>-1||r.className.indexOf(t)===-1){return}this._isOldIE=true;
this._replaceBreakpoints(function(u){return u[t]===true});var s;for(s in this.breakpoints){if(this.breakpoints.hasOwnProperty(s)){this._breakpoint=this.breakpoints[s];
return}}};k._replaceBreakpoints=function(u){var s,t={},r;for(s in this.breakpoints){if(this.breakpoints.hasOwnProperty(s)){r=this.breakpoints[s];
if(u(r)){t[s]=g.clone(this.breakpoints[s])}}}this.breakpoints=t};k._onBreakpointListenerAdded=function(){q.on(o,this._handleResize,this)
};k._onBreakpointListenerRemoved=function(){q.off(o,this._handleResize,this)};b.exports=d.share(m,a,l)
},{"@marcom/ac-event-emitter":323,"@marcom/ac-object":257,"@marcom/ac-shared-instance":305,"@marcom/ac-window-delegate":325}],323:[function(b,c,a){arguments[4][307][0].apply(a,arguments)
},{"./ac-event-emitter/EventEmitter":324,dup:307}],324:[function(b,c,a){arguments[4][308][0].apply(a,arguments)
},{dup:308}],325:[function(b,c,a){c.exports={WindowDelegate:b("./ac-window-delegate/WindowDelegate"),WindowDelegateOptimizer:b("./ac-window-delegate/WindowDelegateOptimizer"),WindowDelegateCustomEvent:b("./ac-window-delegate/WindowDelegateCustomEvent")}
},{"./ac-window-delegate/WindowDelegate":328,"./ac-window-delegate/WindowDelegateCustomEvent":329,"./ac-window-delegate/WindowDelegateOptimizer":330}],326:[function(b,c,a){var f=b("@marcom/ac-event-emitter").EventEmitter;
var g=function(){this._emitter=new f();this._customEvents={}};var d=g.prototype;
d.on=function(h,j,i){this._activateCustomEvents(h);this._emitterOn.apply(this,arguments);
return this};d.once=function(h,j,i){this._emitterOnce.apply(this,arguments);return this
};d.off=function(h,j,i){this._emitterOff.apply(this,arguments);this._deactivateCustomEvents(h);
return this};d.has=function(h,j,i){return this._emitter.has.apply(this._emitter,arguments)
};d.trigger=function(){this._emitter.trigger.apply(this._emitter,arguments);return this
};d.propagateTo=function(){this._emitter.propagateTo.apply(this._emitter,arguments);
return this};d.stopPropagatingTo=function(){this._emitter.stopPropagatingTo.apply(this._emitter,arguments);
return this};d.add=function(h){this._customEvents[h.name]=h};d.canHandleCustomEvent=function(h){return this._customEvents.hasOwnProperty(h)
};d.isHandlingCustomEvent=function(h){if(this._customEvents[h]&&this._customEvents[h].active){return true
}return false};d._activateCustomEvents=function(l){var j=l.split(" "),k,m,h=j.length;
for(m=0;m<h;m++){k=j[m];if(this._customEvents[k]&&!this._customEvents[k].active){this._customEvents[k].initialize();
this._customEvents[k].active=true}}};d._deactivateCustomEvents=function(k){var l;
if(!k||k.length===0){for(l in this._customEvents){if(this._customEvents.hasOwnProperty(l)){this._deactivateCustomEvent(l)
}}return}var j=k.split(" "),h=j.length;for(l=0;l<h;l++){this._deactivateCustomEvent(j[l])
}};d._deactivateCustomEvent=function(h){if(!this.has(h)&&this._customEvents[h]&&this._customEvents[h].active){this._customEvents[h].deinitialize();
this._customEvents[h].active=false}};d._emitterOn=function(){this._emitter.on.apply(this._emitter,arguments)
};d._emitterOnce=function(){this._emitter.once.apply(this._emitter,arguments)};
d._emitterOff=function(){this._emitter.off.apply(this._emitter,arguments)};c.exports=g
},{"@marcom/ac-event-emitter":323}],327:[function(b,c,a){var g=b("@marcom/ac-event-emitter").EventEmitter;
var f;var d=function(h){g.call(this);this.optimizers=h;this._events={};this._properties={};
this._initialize()};f=d.prototype=new g(null);f.canOptimizeEvent=function(h){return this._events.hasOwnProperty(h)
};f.canOptimizeProperty=function(h){return this._properties.hasOwnProperty(h)};
f.isOptimizingEvent=function(h){if(this._events[h]&&this._events[h].active){return true
}return false};f.isOptimizingProperty=function(h){if(this._properties[h]&&this._properties[h].active){return true
}return false};f.add=function(h){this._setOptimizerEvents(h);this._setOptimizerProperties(h);
h.on("update",this._onUpdate,this);h.on("activate",this._onActivate,this);h.on("deactivate",this._onDeactivate,this)
};f.get=function(h){if(this.isOptimizingProperty(h)){return this._properties[h].value
}return null};f.set=function(i,h){if(!this._properties[i]){return false}this._properties[i].value=h;
return this};f.getOptimizerByEvent=function(h){if(this._events[h]){return this._events[h]
}return null};f._initialize=function(){var j,h;for(j in this.optimizers){if(this.optimizers.hasOwnProperty(j)){this.add(this.optimizers[j])
}}};f._onUpdate=function(h){this.set(h.prop,h.val)};f._onActivate=function(j){var k=j.propertyNames,l,h=k.length;
for(l=0;l<h;l++){this._properties[k[l]].active=true}};f._onDeactivate=function(j){var k=j.propertyNames,l,h=k.length;
for(l=0;l<h;l++){this._properties[k[l]].active=false}};f._setOptimizerEvents=function(j){var l,k=j.eventNames,h=k.length;
for(l=0;l<h;l++){this._setOptimizerEvent(k[l],j)}};f._setOptimizerEvent=function(i,h){if(this._events[i]){return
}this._events[i]=h};f._setOptimizerProperties=function(k){var l,j=k.propertyNames,h=j.length;
for(l=0;l<h;l++){this._setOptimizerProperty(j[l])}};f._setOptimizerProperty=function(h){if(this._properties.hasOwnProperty(h)){return
}this._properties[h]={};this._properties[h].active=false;this._properties[h].value=null
};c.exports=d},{"@marcom/ac-event-emitter":323}],328:[function(d,b,g){var i;var c=d("@marcom/ac-shared-instance").SharedInstance,l=d("@marcom/ac-dom-emitter").DOMEmitter,j=d("./OptimizerController"),f=d("./CustomEventController"),h=d("./queries/queries"),m=d("./optimizers/optimizers");
var k="ac-window-delegate:WindowDelegate",a="3.0.2";function n(){this._emitter=new l(window);
this._controllers={optimizer:new j(m),customEvent:new f()};var o;for(o in h){if(h.hasOwnProperty(o)){this[o]=this._getProperty.bind(this,o);
h[o]=h[o].bind(this)}}this._bindEvents()}i=n.prototype;i.on=function(o,r,p){var q=this._seperateCustomEvents(o);
this._optimizeEvents(q.standardEvents);this._customEventOn(q.customEvents,r,p);
this._emitterOn.apply(this,arguments);return this};i.once=function(o,r,p){var q=this._seperateCustomEvents(o);
this._optimizeEvents(q.standardEvents);this._customEventOnce(q.customEvents,r,p);
this._emitterOnce.apply(this,arguments);return this};i.off=function(p,u,q){var t=this._seperateCustomEvents(p),r=false;
if(!p){r=true}this._customEventOff(t.customEvents,u,q,r);this._emitterOff.apply(this,arguments);
if(r){try{var o;for(o in this._controllers.optimizer._events){if(this._controllers.optimizer._events.hasOwnProperty(o)&&this._shouldDeoptimizeEvent(o,true)){this._deoptimizeEvent(o)
}}this._bindEvents()}catch(s){}}return this};i.has=function(o,q,p){return this._emitter.has.apply(this._emitter,arguments)
};i.trigger=function(){this._emitter.trigger.apply(this._emitter,arguments);return this
};i.emitterTrigger=function(){this._emitter.emitterTrigger.apply(this._emitter,arguments);
return this};i.propagateTo=function(){this._emitter.propagateTo.apply(this._emitter,arguments);
return this};i.stopPropagatingTo=function(){this._emitter.stopPropagatingTo.apply(this._emitter,arguments);
return this};i.addOptimizer=function(o){this._controllers.optimizer.add(o);return this
};i.addCustomEvent=function(o){this._controllers.customEvent.add(o);return this
};i._emitterOn=function(){this._emitter.on.apply(this._emitter,arguments)};i._emitterOnce=function(){this._emitter.once.apply(this._emitter,arguments)
};i._emitterOff=function(){this._emitter.off.apply(this._emitter,arguments)};i._onEventUnbound=function(p){var o=p.data.evt;
if(this._shouldDeoptimizeEvent(o)){this._deoptimizeEvent(o)}};i._customEventOn=function(o,q,p){if(o.length===0){return
}this._controllers.customEvent.on(o.join(" "),q,p)};i._customEventOnce=function(o,q,p){if(o.length===0){return
}this._controllers.customEvent.once(o.join(" "),q,p)};i._customEventOff=function(o,r,p,q){if(!q&&o.length===0){return
}if(q&&o.length===0){this._controllers.customEvent.off();return}this._controllers.customEvent.off(o.join(" "),r,p)
};i._getProperty=function(q,o){var p=null;if(!o){p=this._getOptimizedValue(q)}if(p===null){p=h[q].call(this,o)
}return p};i._optimizeEvents=function(q){var p,r,o=q.length;for(r=0;r<o;r++){p=q[r];
if(this._shouldOptimizeEvent(p)){this._optimizeEvent(p)}}};i._shouldOptimizeEvent=function(o){if(this._controllers.optimizer.canOptimizeEvent(o)&&!this._controllers.optimizer.isOptimizingEvent(o)){return true
}return false};i._shouldDeoptimizeEvent=function(o,p){if(this._controllers.optimizer.isOptimizingEvent(o)&&(p||this._emitter._eventEmitter._events[o].length<=1)){return true
}return false};i._optimizeEvent=function(p){var o=this._controllers.optimizer.getOptimizerByEvent(p);
o.activate();this._emitterOn(p,o.callback,o)};i._deoptimizeEvent=function(p){var o=this._controllers.optimizer.getOptimizerByEvent(p);
o.deactivate();this._emitterOff(p,o.callback,o)};i._getOptimizedValue=function(o){return this._controllers.optimizer.get(o)
};i._seperateCustomEvents=function(s){var p={customEvents:[],standardEvents:[]};
if(typeof s==="string"){var t=s.split(" "),q,r,o=t.length;for(r=0;r<o;r++){q=t[r];
if(this._controllers.customEvent.canHandleCustomEvent(q)){p.customEvents.push(q)
}else{p.standardEvents.push(q)}}}return p};i._bindEvents=function(){this._emitter.on("dom-emitter:didoff",this._onEventUnbound,this)
};b.exports=c.share(k,a,n)},{"./CustomEventController":326,"./OptimizerController":327,"./optimizers/optimizers":333,"./queries/queries":342,"@marcom/ac-dom-emitter":309,"@marcom/ac-shared-instance":305}],329:[function(c,d,a){var g=c("@marcom/ac-event-emitter").EventEmitter;
function b(h,j,i){g.call(this);this.name=h;this.active=false;this._initializeFunc=j;
this._deinitializeFunc=i}var f=b.prototype=new g(null);f.initialize=function(){if(this._initializeFunc){this._initializeFunc()
}return this};f.deinitialize=function(){if(this._deinitializeFunc){this._deinitializeFunc()
}return this};d.exports=b},{"@marcom/ac-event-emitter":323}],330:[function(c,d,b){var g=c("@marcom/ac-event-emitter").EventEmitter;
function a(h,i){g.call(this);this.active=false;this.eventNames=h.eventNames;this.propertyNames=h.propertyNames;
this.options=h.options||{};this.callback=i}var f=a.prototype=new g(null);f.update=function(i,h){this.trigger("update",{prop:i,val:h})
};f.activate=function(){this.active=true;this.trigger("activate",this)};f.deactivate=function(){this.active=false;
this.trigger("deactivate",this)};d.exports=a},{"@marcom/ac-event-emitter":323}],331:[function(f,g,b){var a=f("../../WindowDelegateOptimizer"),d=f("../../queries/queries");
var c={eventNames:["resize"],propertyNames:["clientWidth","clientHeight","innerWidth","innerHeight"]};
var h=new a(c,function(m){var l,k=c.propertyNames,j=k.length;for(l=0;l<j;l++){this.update(k[l],d[k[l]](true))
}});g.exports=h},{"../../WindowDelegateOptimizer":330,"../../queries/queries":342}],332:[function(g,h,b){var a=g("../../WindowDelegateOptimizer"),f=g("../../queries/queries");
var d={eventNames:["scroll"],propertyNames:["scrollX","scrollY","maxScrollX","maxScrollY"]};
var c=new a(d,function(m){var l,k=d.propertyNames,j=k.length;for(l=0;l<j;l++){this.update(k[l],f[k[l]](true))
}});h.exports=c},{"../../WindowDelegateOptimizer":330,"../../queries/queries":342}],333:[function(d,f,b){var c=d("./events/resize"),a=d("./events/scroll");
f.exports=[c,a]},{"./events/resize":331,"./events/scroll":332}],334:[function(b,c,a){var d=function(f){return document.documentElement.clientHeight
};c.exports=d},{}],335:[function(b,c,a){var d=function(f){return document.documentElement.clientWidth
};c.exports=d},{}],336:[function(b,d,a){var c=function(f){return window.innerHeight||this.clientHeight(f)
};d.exports=c},{}],337:[function(b,c,a){var d=function(f){return window.innerWidth||this.clientWidth(f)
};c.exports=d},{}],338:[function(c,d,a){var b=function(f){return document.body.scrollWidth-this.innerWidth()
};d.exports=b},{}],339:[function(c,d,b){var a=function(f){return document.body.scrollHeight-this.innerHeight()
};d.exports=a},{}],340:[function(b,c,a){var d=function(f){var h=window.pageXOffset;
if(!h){var g=document.documentElement||document.body.parentNode||document.body;
h=g.scrollLeft}return h};c.exports=d},{}],341:[function(b,c,a){var d=function(f){var h=window.pageYOffset;
if(!h){var g=document.documentElement||document.body.parentNode||document.body;
h=g.scrollTop}return h};c.exports=d},{}],342:[function(i,g,k){var b=i("./methods/innerWidth"),j=i("./methods/innerHeight"),d=i("./methods/clientWidth"),l=i("./methods/clientHeight"),c=i("./methods/scrollX"),a=i("./methods/scrollY"),h=i("./methods/maxScrollX"),f=i("./methods/maxScrollY");
g.exports={innerWidth:b,innerHeight:j,clientWidth:d,clientHeight:l,scrollX:c,scrollY:a,maxScrollX:h,maxScrollY:f}
},{"./methods/clientHeight":334,"./methods/clientWidth":335,"./methods/innerHeight":336,"./methods/innerWidth":337,"./methods/maxScrollX":338,"./methods/maxScrollY":339,"./methods/scrollX":340,"./methods/scrollY":341}],343:[function(b,c,a){c.exports={Viewport:b("./ac-viewport/Viewport")}
},{"./ac-viewport/Viewport":344}],344:[function(d,b,g){var c=d("@marcom/ac-shared-instance").SharedInstance,k=d("@marcom/ac-window-delegate").WindowDelegate,i=d("@marcom/ac-breakpoints-delegate").BreakpointsDelegate;
var j="ac-viewport:Viewport",a="3.2.0";var h;function f(m){var n,l=k;for(n in l){if(l.hasOwnProperty(n)){this[n]=l[n]
}else{h[n]=l[n]}}this.addCustomEvent(i.getCustomEvent())}h=f.prototype;h.getBreakpoint=function(){return i.getBreakpoint()
};h.setBreakpoints=function(l){return i.setBreakpoints(l)};b.exports=c.share(j,a,f)
},{"@marcom/ac-breakpoints-delegate":321,"@marcom/ac-shared-instance":305,"@marcom/ac-window-delegate":325}],345:[function(d,c,f){var k=d("typedarray-pool");
var b=d("ndarray-ops");var n=d("ndarray");var j=["uint8","uint8_clamped","uint16","uint32","int8","int16","int32","float32"];
function m(s,o,r,p,q){this.gl=s;this.type=o;this.handle=r;this.length=p;this.usage=q
}var i=m.prototype;i.bind=function(){this.gl.bindBuffer(this.type,this.handle)};
i.unbind=function(){this.gl.bindBuffer(this.type,null)};i.dispose=function(){this.gl.deleteBuffer(this.handle)
};function h(u,q,o,s,r,t){var p=r.length*r.BYTES_PER_ELEMENT;if(t<0){u.bufferData(q,r,s);
return p}if(p+t>o){throw new Error("gl-buffer: If resizing buffer, must not specify offset")
}u.bufferSubData(q,t,r);return o}function a(s,o){var q=k.malloc(s.length,o);var r=s.length;
for(var p=0;p<r;++p){q[p]=s[p]}return q}function g(o,q){var r=1;for(var p=q.length-1;
p>=0;--p){if(q[p]!==r){return false}r*=o[p]}return true}i.update=function(v,u){if(typeof u!=="number"){u=-1
}this.bind();if(typeof v==="object"&&typeof v.shape!=="undefined"){var o=v.dtype;
if(j.indexOf(o)<0){o="float32"}if(this.type===this.gl.ELEMENT_ARRAY_BUFFER){var r=gl.getExtension("OES_element_index_uint");
if(r&&o!=="uint16"){o="uint32"}else{o="uint16"}}if(o===v.dtype&&g(v.shape,v.stride)){if(v.offset===0&&v.data.length===v.shape[0]){this.length=h(this.gl,this.type,this.length,this.usage,v.data,u)
}else{this.length=h(this.gl,this.type,this.length,this.usage,v.data.subarray(v.offset,v.shape[0]),u)
}}else{var q=k.malloc(v.size,o);var s=n(q,v.shape);b.assign(s,v);if(u<0){this.length=h(this.gl,this.type,this.length,this.usage,q,u)
}else{this.length=h(this.gl,this.type,this.length,this.usage,q.subarray(0,v.size),u)
}k.free(q)}}else{if(Array.isArray(v)){var p;if(this.type===this.gl.ELEMENT_ARRAY_BUFFER){p=a(v,"uint16")
}else{p=a(v,"float32")}if(u<0){this.length=h(this.gl,this.type,this.length,this.usage,p,u)
}else{this.length=h(this.gl,this.type,this.length,this.usage,p.subarray(0,v.length),u)
}k.free(p)}else{if(typeof v==="object"&&typeof v.length==="number"){this.length=h(this.gl,this.type,this.length,this.usage,v,u)
}else{if(typeof v==="number"||v===undefined){if(u>=0){throw new Error("gl-buffer: Cannot specify offset when resizing buffer")
}v=v|0;if(v<=0){v=1}this.gl.bufferData(this.type,v|0,this.usage);this.length=v}else{throw new Error("gl-buffer: Invalid data type")
}}}}};function l(t,s,p,r){p=p||t.ARRAY_BUFFER;r=r||t.DYNAMIC_DRAW;if(p!==t.ARRAY_BUFFER&&p!==t.ELEMENT_ARRAY_BUFFER){throw new Error("gl-buffer: Invalid type for webgl buffer, must be either gl.ARRAY_BUFFER or gl.ELEMENT_ARRAY_BUFFER")
}if(r!==t.DYNAMIC_DRAW&&r!==t.STATIC_DRAW&&r!==t.STREAM_DRAW){throw new Error("gl-buffer: Invalid usage for buffer, must be either gl.DYNAMIC_DRAW, gl.STATIC_DRAW or gl.STREAM_DRAW")
}var q=t.createBuffer();var o=new m(t,p,q,0,r);o.update(s);return o}c.exports=l
},{ndarray:362,"ndarray-ops":357,"typedarray-pool":366}],346:[function(c,d,a){function b(o,f,k){if(f){f.bind()
}else{o.bindBuffer(o.ELEMENT_ARRAY_BUFFER,null)}var h=o.getParameter(o.MAX_VERTEX_ATTRIBS)|0;
if(k){if(k.length>h){throw new Error("gl-vao: Too many vertex attributes")}for(var n=0;
n<k.length;++n){var m=k[n];if(m.buffer){var l=m.buffer;var r=m.size||4;var p=m.type||o.FLOAT;
var q=!!m.normalized;var g=m.stride||0;var j=m.offset||0;l.bind();o.enableVertexAttribArray(n);
o.vertexAttribPointer(n,r,p,q,g,j)}else{if(typeof m==="number"){o.vertexAttrib1f(n,m)
}else{if(m.length===1){o.vertexAttrib1f(n,m[0])}else{if(m.length===2){o.vertexAttrib2f(n,m[0],m[1])
}else{if(m.length===3){o.vertexAttrib3f(n,m[0],m[1],m[2])}else{if(m.length===4){o.vertexAttrib4f(n,m[0],m[1],m[2],m[3])
}else{throw new Error("gl-vao: Invalid vertex attribute")}}}}}o.disableVertexAttribArray(n)
}}for(;n<h;++n){o.disableVertexAttribArray(n)}}else{o.bindBuffer(o.ARRAY_BUFFER,null);
for(var n=0;n<h;++n){o.disableVertexAttribArray(n)}}}d.exports=b},{}],347:[function(c,d,b){var g=c("./do-bind.js");
function f(h){this.gl=h;this._elements=null;this._attributes=null;this._elementsType=h.UNSIGNED_SHORT
}f.prototype.bind=function(){g(this.gl,this._elements,this._attributes)};f.prototype.update=function(h,j,i){this._elements=j;
this._attributes=h;this._elementsType=i||this.gl.UNSIGNED_SHORT};f.prototype.dispose=function(){};
f.prototype.unbind=function(){};f.prototype.draw=function(k,h,j){j=j||0;var i=this.gl;
if(this._elements){i.drawElements(k,h,this._elementsType,j)}else{i.drawArrays(k,j,h)
}};function a(h){return new f(h)}d.exports=a},{"./do-bind.js":346}],348:[function(c,d,b){var h=c("./do-bind.js");
function g(k,l,j,i,n,m){this.location=k;this.dimension=l;this.a=j;this.b=i;this.c=n;
this.d=m}g.prototype.bind=function(i){switch(this.dimension){case 1:i.vertexAttrib1f(this.location,this.a);
break;case 2:i.vertexAttrib2f(this.location,this.a,this.b);break;case 3:i.vertexAttrib3f(this.location,this.a,this.b,this.c);
break;case 4:i.vertexAttrib4f(this.location,this.a,this.b,this.c,this.d);break}};
function a(k,i,j){this.gl=k;this._ext=i;this.handle=j;this._attribs=[];this._useElements=false;
this._elementsType=k.UNSIGNED_SHORT}a.prototype.bind=function(){this._ext.bindVertexArrayOES(this.handle);
for(var j=0;j<this._attribs.length;++j){this._attribs[j].bind(this.gl)}};a.prototype.unbind=function(){this._ext.bindVertexArrayOES(null)
};a.prototype.dispose=function(){this._ext.deleteVertexArrayOES(this.handle)};a.prototype.update=function(k,n,m){this.bind();
h(this.gl,n,k);this.unbind();this._attribs.length=0;if(k){for(var l=0;l<k.length;
++l){var j=k[l];if(typeof j==="number"){this._attribs.push(new g(l,1,j))}else{if(Array.isArray(j)){this._attribs.push(new g(l,j.length,j[0],j[1],j[2],j[3]))
}}}}this._useElements=!!n;this._elementsType=m||this.gl.UNSIGNED_SHORT};a.prototype.draw=function(l,i,k){k=k||0;
var j=this.gl;if(this._useElements){j.drawElements(l,i,this._elementsType,k)}else{j.drawArrays(l,k,i)
}};function f(j,i){return new a(j,i,i.createVertexArrayOES())}d.exports=f},{"./do-bind.js":346}],349:[function(d,f,b){var g=d("./lib/vao-native.js");
var a=d("./lib/vao-emulated.js");function h(i){this.bindVertexArrayOES=i.bindVertexArray.bind(i);
this.createVertexArrayOES=i.createVertexArray.bind(i);this.deleteVertexArrayOES=i.deleteVertexArray.bind(i)
}function c(n,i,m,l){var j=n.createVertexArray?new h(n):n.getExtension("OES_vertex_array_object");
var k;if(j){k=g(n,j)}else{k=a(n)}k.update(i,m,l);return k}f.exports=c},{"./lib/vao-emulated.js":347,"./lib/vao-native.js":348}],350:[function(c,d,b){(function a(){if(typeof ses!=="undefined"&&ses.ok&&!ses.ok()){return
}function y(G){if(G.permitHostObjects___){G.permitHostObjects___(y)}}if(typeof ses!=="undefined"){ses.weakMapPermitHostObjects=y
}var m=false;if(typeof WeakMap==="function"){var p=WeakMap;if(typeof navigator!=="undefined"&&/Firefox/.test(navigator.userAgent)){}else{var j=new p();
var l=Object.freeze({});j.set(l,1);if(j.get(l)!==1){m=true}else{d.exports=WeakMap;
return}}}var E=Object.prototype.hasOwnProperty;var o=Object.getOwnPropertyNames;
var s=Object.defineProperty;var v=Object.isExtensible;var D="weakmap:";var g=D+"ident:"+Math.random()+"___";
if(typeof crypto!=="undefined"&&typeof crypto.getRandomValues==="function"&&typeof ArrayBuffer==="function"&&typeof Uint8Array==="function"){var C=new ArrayBuffer(25);
var k=new Uint8Array(C);crypto.getRandomValues(k);g=D+"rand:"+Array.prototype.map.call(k,function(G){return(G%36).toString(36)
}).join("")+"___"}function w(G){return !(G.substr(0,D.length)==D&&G.substr(G.length-3)==="___")
}s(Object,"getOwnPropertyNames",{value:function u(G){return o(G).filter(w)}});if("getPropertyNames" in Object){var z=Object.getPropertyNames;
s(Object,"getPropertyNames",{value:function r(G){return z(G).filter(w)}})}function B(H){if(H!==Object(H)){throw new TypeError("Not an object: "+H)
}var I=H[g];if(I&&I.key===H){return I}if(!v(H)){return void 0}I={key:H};try{s(H,g,{value:I,writable:false,enumerable:false,configurable:false});
return I}catch(G){return void 0}}(function(){var J=Object.freeze;s(Object,"freeze",{value:function G(M){B(M);
return J(M)}});var L=Object.seal;s(Object,"seal",{value:function H(M){B(M);return L(M)
}});var K=Object.preventExtensions;s(Object,"preventExtensions",{value:function I(M){B(M);
return K(M)}})})();function h(G){G.prototype=null;return Object.freeze(G)}var A=false;
function t(){if(!A&&typeof console!=="undefined"){A=true;console.warn("WeakMap should be invoked as new WeakMap(), not WeakMap(). This will be an error in the future.")
}}var q=0;var i=function(){if(!(this instanceof i)){t()}var K=[];var H=[];var M=q++;
function J(O,Q){var N;var P=B(O);if(P){return M in P?P[M]:Q}else{N=K.indexOf(O);
return N>=0?H[N]:Q}}function I(N){var O=B(N);if(O){return M in O}else{return K.indexOf(N)>=0
}}function G(O,Q){var N;var P=B(O);if(P){P[M]=Q}else{N=K.indexOf(O);if(N>=0){H[N]=Q
}else{N=K.length;H[N]=Q;K[N]=O}}return this}function L(O){var P=B(O);var N,Q;if(P){return M in P&&delete P[M]
}else{N=K.indexOf(O);if(N<0){return false}Q=K.length-1;K[N]=void 0;H[N]=H[Q];K[N]=K[Q];
K.length=Q;H.length=Q;return true}}return Object.create(i.prototype,{get___:{value:h(J)},has___:{value:h(I)},set___:{value:h(G)},delete___:{value:h(L)}})
};i.prototype=Object.create(Object.prototype,{get:{value:function x(G,H){return this.get___(G,H)
},writable:true,configurable:true},has:{value:function f(G){return this.has___(G)
},writable:true,configurable:true},set:{value:function n(G,H){return this.set___(G,H)
},writable:true,configurable:true},"delete":{value:function F(G){return this.delete___(G)
},writable:true,configurable:true}});if(typeof p==="function"){(function(){if(m&&typeof Proxy!=="undefined"){Proxy=undefined
}function G(){if(!(this instanceof i)){t()}var J=new p();var L=undefined;var N=false;
function I(O,P){if(L){return J.has(O)?J.get(O):L.get___(O,P)}else{return J.get(O,P)
}}function H(O){return J.has(O)||(L?L.has___(O):false)}var M;if(m){M=function(O,P){J.set(O,P);
if(!J.has(O)){if(!L){L=new i()}L.set(O,P)}return this}}else{M=function(O,P){if(N){try{J.set(O,P)
}catch(Q){if(!L){L=new i()}L.set___(O,P)}}else{J.set(O,P)}return this}}function K(P){var O=!!J["delete"](P);
if(L){return L.delete___(P)||O}return O}return Object.create(i.prototype,{get___:{value:h(I)},has___:{value:h(H)},set___:{value:h(M)},delete___:{value:h(K)},permitHostObjects___:{value:h(function(O){if(O===y){N=true
}else{throw new Error("bogus call to permitHostObjects___")}})}})}G.prototype=i.prototype;
d.exports=G;Object.defineProperty(WeakMap.prototype,"constructor",{value:WeakMap,enumerable:false,configurable:true,writable:true})
})()}else{if(typeof Proxy!=="undefined"){Proxy=undefined}d.exports=i}})()},{}],351:[function(d,f,b){var h=typeof WeakMap==="undefined"?d("weak-map"):WeakMap;
var i=d("gl-buffer");var c=d("gl-vao");var a=new h();function g(m){var k=a.get(m);
var l=k&&(k._triangleBuffer.handle||k._triangleBuffer.buffer);if(!l||!m.isBuffer(l)){var j=i(m,new Float32Array([-1,-1,-1,4,4,-1]));
k=c(m,[{buffer:j,type:m.FLOAT,size:2}]);k._triangleBuffer=j;a.set(m,k)}k.bind();
m.drawArrays(m.TRIANGLES,0,3);k.unbind()}f.exports=g},{"gl-buffer":345,"gl-vao":349,"weak-map":350}],352:[function(c,d,a){function g(m,n,l){var o=m[l]|0;
if(o<=0){return[]}var h=new Array(o),k;if(l===m.length-1){for(k=0;k<o;++k){h[k]=n
}}else{for(k=0;k<o;++k){h[k]=g(m,n,l+1)}}return h}function f(k,l){var h,j;h=new Array(k);
for(j=0;j<k;++j){h[j]=l}return h}function b(h,i){if(typeof i==="undefined"){i=0
}switch(typeof h){case"number":if(h>0){return f(h|0,i)}break;case"object":if(typeof(h.length)==="number"){return g(h,i,0)
}break}return[]}d.exports=b},{}],353:[function(d,g,c){g.exports=f;function i(p,k,j,o,l,n,m){this._gl=p;
this._program=k;this._location=j;this._dimension=o;this._name=l;this._constFunc=n;
this._relink=m}var h=i.prototype;h.pointer=function a(j,n,k,m){var l=this._gl;l.vertexAttribPointer(this._location,this._dimension,j||l.FLOAT,!!n,k||0,m||0);
this._gl.enableVertexAttribArray(this._location)};Object.defineProperty(h,"location",{get:function(){return this._location
},set:function(j){if(j!==this._location){this._location=j;this._gl.bindAttribLocation(this._program,j,this._name);
this._gl.linkProgram(this._program);this._relink()}}});function b(q,p,t,m,o,j,k){var s=["gl","v"];
var u=[];for(var n=0;n<m;++n){s.push("x"+n);u.push("x"+n)}s.push(["if(x0.length===void 0){return gl.vertexAttrib",m,"f(v,",u.join(),")}else{return gl.vertexAttrib",m,"fv(v,x0)}"].join(""));
var l=Function.apply(undefined,s);var r=new i(q,p,t,m,j,l,k);Object.defineProperty(o,j,{set:function(v){q.disableVertexAttribArray(r._location);
l(q,r._location,v);return v},get:function(){return r},enumerable:true})}function f(r,q,m,k){var o={};
for(var p=0,l=m.length;p<l;++p){var u=m[p];var j=u.name;var t=u.type;var v=r.getAttribLocation(q,j);
switch(t){case"bool":case"int":case"float":b(r,q,v,1,o,j,k);break;default:if(t.indexOf("vec")>=0){var s=t.charCodeAt(t.length-1)-48;
if(s<2||s>4){throw new Error("gl-shader: Invalid data type for attribute "+j+": "+t)
}b(r,q,v,s,o,j,k)}else{throw new Error("gl-shader: Unknown data type for attribute "+j+": "+t)
}break}}return o}},{}],354:[function(d,f,c){var h=d("dup");var a=d("./reflect");
f.exports=g;function b(i){var j=new Function("y","return function(){return y}");
return j(i)}function g(n,m,r,o){function j(v){var u=new Function("gl","prog","locations","return function(){return gl.getUniform(prog,locations["+v+"])}");
return u(n,m,o)}function l(w,u,v){switch(v){case"bool":case"int":case"sampler2D":case"samplerCube":return"gl.uniform1i(locations["+u+"],obj"+w+")";
case"float":return"gl.uniform1f(locations["+u+"],obj"+w+")";default:var y=v.indexOf("vec");
if(0<=y&&y<=1&&v.length===4+y){var x=v.charCodeAt(v.length-1)-48;if(x<2||x>4){throw new Error("gl-shader: Invalid data type")
}switch(v.charAt(0)){case"b":case"i":return"gl.uniform"+x+"iv(locations["+u+"],obj"+w+")";
case"v":return"gl.uniform"+x+"fv(locations["+u+"],obj"+w+")";default:throw new Error("gl-shader: Unrecognized data type for vector "+name+": "+v)
}}else{if(v.indexOf("mat")===0&&v.length===4){var x=v.charCodeAt(v.length-1)-48;
if(x<2||x>4){throw new Error("gl-shader: Invalid uniform dimension type for matrix "+name+": "+v)
}return"gl.uniformMatrix"+x+"fv(locations["+u+"],false,obj"+w+")"}else{throw new Error("gl-shader: Unknown uniform data type for "+name+": "+v)
}}break}}function s(w,v){if(typeof v!=="object"){return[[w,v]]}var x=[];for(var z in v){var y=v[z];
var u=w;if(parseInt(z)+""===z){u+="["+z+"]"}else{u+="."+z}if(typeof y==="object"){x.push.apply(x,s(u,y))
}else{x.push([u,y])}}return x}function t(x){var z=["return function updateProperty(obj){"];
var B=s("",x);for(var w=0;w<B.length;++w){var y=B[w];var A=y[0];var u=y[1];if(o[u]){z.push(l(A,u,r[u].type))
}}z.push("return obj}");var v=new Function("gl","prog","locations",z.join("\n"));
return v(n,m,o)}function q(u){switch(u){case"bool":return false;case"int":case"sampler2D":case"samplerCube":return 0;
case"float":return 0;default:var w=u.indexOf("vec");if(0<=w&&w<=1&&u.length===4+w){var v=u.charCodeAt(u.length-1)-48;
if(v<2||v>4){throw new Error("gl-shader: Invalid data type")}if(u.charAt(0)==="b"){return h(v,false)
}return h(v)}else{if(u.indexOf("mat")===0&&u.length===4){var v=u.charCodeAt(u.length-1)-48;
if(v<2||v>4){throw new Error("gl-shader: Invalid uniform dimension type for matrix "+name+": "+u)
}return h([v,v])}else{throw new Error("gl-shader: Unknown uniform data type for "+name+": "+u)
}}break}}function p(v,x,u){if(typeof u==="object"){var w=i(u);Object.defineProperty(v,x,{get:b(w),set:t(u),enumerable:true,configurable:false})
}else{if(o[u]){Object.defineProperty(v,x,{get:j(u),set:t(u),enumerable:true,configurable:false})
}else{v[x]=q(r[u].type)}}}function i(w){var u;if(Array.isArray(w)){u=new Array(w.length);
for(var v=0;v<w.length;++v){p(u,v,w[v])}}else{u={};for(var x in w){p(u,x,w[x])}}return u
}var k=a(r,true);return{get:b(i(k)),set:t(k),enumerable:true,configurable:true}
}},{"./reflect":355,dup:352}],355:[function(b,c,a){c.exports=d;function d(u,r){var p={};
for(var q=0;q<u.length;++q){var g=u[q].name;var l=g.split(".");var f=p;for(var m=0;
m<l.length;++m){var t=l[m].split("[");if(t.length>1){if(!(t[0] in f)){f[t[0]]=[]
}f=f[t[0]];for(var h=1;h<t.length;++h){var s=parseInt(t[h]);if(h<t.length-1||m<l.length-1){if(!(s in f)){if(h<t.length-1){f[s]=[]
}else{f[s]={}}}f=f[s]}else{if(r){f[s]=q}else{f[s]=u[q].type}}}}else{if(m<l.length-1){if(!(t[0] in f)){f[t[0]]={}
}f=f[t[0]]}else{if(r){f[t[0]]=q}else{f[t[0]]=u[q].type}}}}}return p}},{}],356:[function(d,c,f){var i=d("./lib/create-uniforms");
var b=d("./lib/create-attributes");var g=d("./lib/reflect");function h(n,m,l,k){this.gl=n;
this.handle=m;this.attributes=null;this.uniforms=null;this.types=null;this.vertexShader=l;
this.fragmentShader=k}h.prototype.bind=function(){this.gl.useProgram(this.handle)
};h.prototype.dispose=function(){var k=this.gl;k.deleteShader(this.vertexShader);
k.deleteShader(this.fragmentShader);k.deleteProgram(this.handle)};h.prototype.updateExports=function(l,n){var k=new Array(l.length);
var m=this.handle;var o=this.gl;var p=a.bind(void 0,o,m,k,l);p();this.types={uniforms:g(l),attributes:g(n)};
this.attributes=b(o,m,n,p);Object.defineProperty(this,"uniforms",i(o,m,l,k))};function a(o,m,l,k){for(var n=0;
n<k.length;++n){l[n]=o.getUniformLocation(m,k[n].name)}}function j(n,q,t,s,l){var k=n.createShader(n.VERTEX_SHADER);
n.shaderSource(k,q);n.compileShader(k);if(!n.getShaderParameter(k,n.COMPILE_STATUS)){var r=n.getShaderInfoLog(k);
console.error("gl-shader: Error compling vertex shader:",r);throw new Error("gl-shader: Error compiling vertex shader:"+r)
}var o=n.createShader(n.FRAGMENT_SHADER);n.shaderSource(o,t);n.compileShader(o);
if(!n.getShaderParameter(o,n.COMPILE_STATUS)){var r=n.getShaderInfoLog(o);console.error("gl-shader: Error compiling fragment shader:",r);
throw new Error("gl-shader: Error compiling fragment shader:"+r)}var m=n.createProgram();
n.attachShader(m,o);n.attachShader(m,k);l.forEach(function(u){if(typeof u.location==="number"){n.bindAttribLocation(m,u.location,u.name)
}});n.linkProgram(m);if(!n.getProgramParameter(m,n.LINK_STATUS)){var r=n.getProgramInfoLog(m);
console.error("gl-shader: Error linking shader program:",r);throw new Error("gl-shader: Error linking shader program:"+r)
}var p=new h(n,m,k,o);p.updateExports(s,l);return p}c.exports=j},{"./lib/create-attributes":353,"./lib/create-uniforms":354,"./lib/reflect":355}],357:[function(d,a,i){var n=d("cwise-compiler");
var b={body:"",args:[],thisVars:[],localVars:[]};function c(p){if(!p){return b}for(var r=0;
r<p.args.length;++r){var q=p.args[r];if(r===0){p.args[r]={name:q,lvalue:true,rvalue:!!p.rvalue,count:p.count||1}
}else{p.args[r]={name:q,lvalue:false,rvalue:true,count:1}}}if(!p.thisVars){p.thisVars=[]
}if(!p.localVars){p.localVars=[]}return p}function m(p){return n({args:p.args,pre:c(p.pre),body:c(p.body),post:c(p.proc),funcName:p.funcName})
}function l(r){var p=[];for(var q=0;q<r.args.length;++q){p.push("a"+q)}var s=new Function("P",["return function ",r.funcName,"_ndarrayops(",p.join(","),") {P(",p.join(","),");return a0}"].join(""));
return s(m(r))}var g={add:"+",sub:"-",mul:"*",div:"/",mod:"%",band:"&",bor:"|",bxor:"^",lshift:"<<",rshift:">>",rrshift:">>>"};
(function(){for(var q in g){var p=g[q];i[q]=l({args:["array","array","array"],body:{args:["a","b","c"],body:"a=b"+p+"c"},funcName:q});
i[q+"eq"]=l({args:["array","array"],body:{args:["a","b"],body:"a"+p+"=b"},rvalue:true,funcName:q+"eq"});
i[q+"s"]=l({args:["array","array","scalar"],body:{args:["a","b","s"],body:"a=b"+p+"s"},funcName:q+"s"});
i[q+"seq"]=l({args:["array","scalar"],body:{args:["a","s"],body:"a"+p+"=s"},rvalue:true,funcName:q+"seq"})
}})();var f={not:"!",bnot:"~",neg:"-",recip:"1.0/"};(function(){for(var q in f){var p=f[q];
i[q]=l({args:["array","array"],body:{args:["a","b"],body:"a="+p+"b"},funcName:q});
i[q+"eq"]=l({args:["array"],body:{args:["a"],body:"a="+p+"a"},rvalue:true,count:2,funcName:q+"eq"})
}})();var h={and:"&&",or:"||",eq:"===",neq:"!==",lt:"<",gt:">",leq:"<=",geq:">="};
(function(){for(var q in h){var p=h[q];i[q]=l({args:["array","array","array"],body:{args:["a","b","c"],body:"a=b"+p+"c"},funcName:q});
i[q+"s"]=l({args:["array","array","scalar"],body:{args:["a","b","s"],body:"a=b"+p+"s"},funcName:q+"s"});
i[q+"eq"]=l({args:["array","array"],body:{args:["a","b"],body:"a=a"+p+"b"},rvalue:true,count:2,funcName:q+"eq"});
i[q+"seq"]=l({args:["array","scalar"],body:{args:["a","s"],body:"a=a"+p+"s"},rvalue:true,count:2,funcName:q+"seq"})
}})();var k=["abs","acos","asin","atan","ceil","cos","exp","floor","log","round","sin","sqrt","tan"];
(function(){for(var p=0;p<k.length;++p){var q=k[p];i[q]=l({args:["array","array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b"],body:"a=this_f(b)",thisVars:["this_f"]},funcName:q});
i[q+"eq"]=l({args:["array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a"],body:"a=this_f(a)",thisVars:["this_f"]},rvalue:true,count:2,funcName:q+"eq"})
}})();var o=["max","min","atan2","pow"];(function(){for(var p=0;p<o.length;++p){var q=o[p];
i[q]=l({args:["array","array","array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b","c"],body:"a=this_f(b,c)",thisVars:["this_f"]},funcName:q});
i[q+"s"]=l({args:["array","array","scalar"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b","c"],body:"a=this_f(b,c)",thisVars:["this_f"]},funcName:q+"s"});
i[q+"eq"]=l({args:["array","array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b"],body:"a=this_f(a,b)",thisVars:["this_f"]},rvalue:true,count:2,funcName:q+"eq"});
i[q+"seq"]=l({args:["array","scalar"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b"],body:"a=this_f(a,b)",thisVars:["this_f"]},rvalue:true,count:2,funcName:q+"seq"})
}})();var j=["atan2","pow"];(function(){for(var p=0;p<j.length;++p){var q=j[p];
i[q+"op"]=l({args:["array","array","array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b","c"],body:"a=this_f(c,b)",thisVars:["this_f"]},funcName:q+"op"});
i[q+"ops"]=l({args:["array","array","scalar"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b","c"],body:"a=this_f(c,b)",thisVars:["this_f"]},funcName:q+"ops"});
i[q+"opeq"]=l({args:["array","array"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b"],body:"a=this_f(b,a)",thisVars:["this_f"]},rvalue:true,count:2,funcName:q+"opeq"});
i[q+"opseq"]=l({args:["array","scalar"],pre:{args:[],body:"this_f=Math."+q,thisVars:["this_f"]},body:{args:["a","b"],body:"a=this_f(b,a)",thisVars:["this_f"]},rvalue:true,count:2,funcName:q+"opseq"})
}})();i.any=n({args:["array"],pre:b,body:{args:[{name:"a",lvalue:false,rvalue:true,count:1}],body:"if(a){return true}",localVars:[],thisVars:[]},post:{args:[],localVars:[],thisVars:[],body:"return false"},funcName:"any"});
i.all=n({args:["array"],pre:b,body:{args:[{name:"x",lvalue:false,rvalue:true,count:1}],body:"if(!x){return false}",localVars:[],thisVars:[]},post:{args:[],localVars:[],thisVars:[],body:"return true"},funcName:"all"});
i.sum=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=0"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:1}],body:"this_s+=a",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return this_s"},funcName:"sum"});
i.prod=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=1"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:1}],body:"this_s*=a",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return this_s"},funcName:"prod"});
i.norm2squared=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=0"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:2}],body:"this_s+=a*a",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return this_s"},funcName:"norm2squared"});
i.norm2=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=0"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:2}],body:"this_s+=a*a",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return Math.sqrt(this_s)"},funcName:"norm2"});
i.norminf=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=0"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:4}],body:"if(-a>this_s){this_s=-a}else if(a>this_s){this_s=a}",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return this_s"},funcName:"norminf"});
i.norm1=n({args:["array"],pre:{args:[],localVars:[],thisVars:["this_s"],body:"this_s=0"},body:{args:[{name:"a",lvalue:false,rvalue:true,count:3}],body:"this_s+=a<0?-a:a",localVars:[],thisVars:["this_s"]},post:{args:[],localVars:[],thisVars:["this_s"],body:"return this_s"},funcName:"norm1"});
i.sup=n({args:["array"],pre:{body:"this_h=-Infinity",args:[],thisVars:["this_h"],localVars:[]},body:{body:"if(_inline_1_arg0_>this_h)this_h=_inline_1_arg0_",args:[{name:"_inline_1_arg0_",lvalue:false,rvalue:true,count:2}],thisVars:["this_h"],localVars:[]},post:{body:"return this_h",args:[],thisVars:["this_h"],localVars:[]}});
i.inf=n({args:["array"],pre:{body:"this_h=Infinity",args:[],thisVars:["this_h"],localVars:[]},body:{body:"if(_inline_1_arg0_<this_h)this_h=_inline_1_arg0_",args:[{name:"_inline_1_arg0_",lvalue:false,rvalue:true,count:2}],thisVars:["this_h"],localVars:[]},post:{body:"return this_h",args:[],thisVars:["this_h"],localVars:[]}});
i.argmin=n({args:["index","array","shape"],pre:{body:"{this_v=Infinity;this_i=_inline_0_arg2_.slice(0)}",args:[{name:"_inline_0_arg0_",lvalue:false,rvalue:false,count:0},{name:"_inline_0_arg1_",lvalue:false,rvalue:false,count:0},{name:"_inline_0_arg2_",lvalue:false,rvalue:true,count:1}],thisVars:["this_i","this_v"],localVars:[]},body:{body:"{if(_inline_1_arg1_<this_v){this_v=_inline_1_arg1_;for(var _inline_1_k=0;_inline_1_k<_inline_1_arg0_.length;++_inline_1_k){this_i[_inline_1_k]=_inline_1_arg0_[_inline_1_k]}}}",args:[{name:"_inline_1_arg0_",lvalue:false,rvalue:true,count:2},{name:"_inline_1_arg1_",lvalue:false,rvalue:true,count:2}],thisVars:["this_i","this_v"],localVars:["_inline_1_k"]},post:{body:"{return this_i}",args:[],thisVars:["this_i"],localVars:[]}});
i.argmax=n({args:["index","array","shape"],pre:{body:"{this_v=-Infinity;this_i=_inline_0_arg2_.slice(0)}",args:[{name:"_inline_0_arg0_",lvalue:false,rvalue:false,count:0},{name:"_inline_0_arg1_",lvalue:false,rvalue:false,count:0},{name:"_inline_0_arg2_",lvalue:false,rvalue:true,count:1}],thisVars:["this_i","this_v"],localVars:[]},body:{body:"{if(_inline_1_arg1_>this_v){this_v=_inline_1_arg1_;for(var _inline_1_k=0;_inline_1_k<_inline_1_arg0_.length;++_inline_1_k){this_i[_inline_1_k]=_inline_1_arg0_[_inline_1_k]}}}",args:[{name:"_inline_1_arg0_",lvalue:false,rvalue:true,count:2},{name:"_inline_1_arg1_",lvalue:false,rvalue:true,count:2}],thisVars:["this_i","this_v"],localVars:["_inline_1_k"]},post:{body:"{return this_i}",args:[],thisVars:["this_i"],localVars:[]}});
i.random=l({args:["array"],pre:{args:[],body:"this_f=Math.random",thisVars:["this_f"]},body:{args:["a"],body:"a=this_f()",thisVars:["this_f"]},funcName:"random"});
i.assign=l({args:["array","array"],body:{args:["a","b"],body:"a=b"},funcName:"assign"});
i.assigns=l({args:["array","scalar"],body:{args:["a","b"],body:"a=b"},funcName:"assigns"});
i.equals=n({args:["array","array"],pre:b,body:{args:[{name:"x",lvalue:false,rvalue:true,count:1},{name:"y",lvalue:false,rvalue:true,count:1}],body:"if(x!==y){return false}",localVars:[],thisVars:[]},post:{args:[],localVars:[],thisVars:[],body:"return true"},funcName:"equals"})
},{"cwise-compiler":358}],358:[function(b,c,a){var g=b("./lib/thunk.js");function f(){this.argTypes=[];
this.shimArgs=[];this.arrayArgs=[];this.arrayBlockIndices=[];this.scalarArgs=[];
this.offsetArgs=[];this.offsetArgIndex=[];this.indexArgs=[];this.shapeArgs=[];this.funcName="";
this.pre=null;this.body=null;this.post=null;this.debug=false}function d(l){var j=new f();
j.pre=l.pre;j.body=l.body;j.post=l.post;var m=l.args.slice(0);j.argTypes=m;for(var k=0;
k<m.length;++k){var h=m[k];if(h==="array"||(typeof h==="object"&&h.blockIndices)){j.argTypes[k]="array";
j.arrayArgs.push(k);j.arrayBlockIndices.push(h.blockIndices?h.blockIndices:0);j.shimArgs.push("array"+k);
if(k<j.pre.args.length&&j.pre.args[k].count>0){throw new Error("cwise: pre() block may not reference array args")
}if(k<j.post.args.length&&j.post.args[k].count>0){throw new Error("cwise: post() block may not reference array args")
}}else{if(h==="scalar"){j.scalarArgs.push(k);j.shimArgs.push("scalar"+k)}else{if(h==="index"){j.indexArgs.push(k);
if(k<j.pre.args.length&&j.pre.args[k].count>0){throw new Error("cwise: pre() block may not reference array index")
}if(k<j.body.args.length&&j.body.args[k].lvalue){throw new Error("cwise: body() block may not write to array index")
}if(k<j.post.args.length&&j.post.args[k].count>0){throw new Error("cwise: post() block may not reference array index")
}}else{if(h==="shape"){j.shapeArgs.push(k);if(k<j.pre.args.length&&j.pre.args[k].lvalue){throw new Error("cwise: pre() block may not write to array shape")
}if(k<j.body.args.length&&j.body.args[k].lvalue){throw new Error("cwise: body() block may not write to array shape")
}if(k<j.post.args.length&&j.post.args[k].lvalue){throw new Error("cwise: post() block may not write to array shape")
}}else{if(typeof h==="object"&&h.offset){j.argTypes[k]="offset";j.offsetArgs.push({array:h.array,offset:h.offset});
j.offsetArgIndex.push(k)}else{throw new Error("cwise: Unknown argument type "+m[k])
}}}}}}if(j.arrayArgs.length<=0){throw new Error("cwise: No array arguments specified")
}if(j.pre.args.length>m.length){throw new Error("cwise: Too many arguments in pre() block")
}if(j.body.args.length>m.length){throw new Error("cwise: Too many arguments in body() block")
}if(j.post.args.length>m.length){throw new Error("cwise: Too many arguments in post() block")
}j.debug=!!l.printCode||!!l.debug;j.funcName=l.funcName||"cwise";j.blockSize=l.blockSize||64;
return g(j)}c.exports=d},{"./lib/thunk.js":360}],359:[function(d,a,g){var k=d("uniq");
function i(n,u,r){var p=n.length,l=u.arrayArgs.length,v=u.indexArgs.length>0,m=[],t=[],w=0,s=0,q,o;
for(q=0;q<p;++q){t.push(["i",q,"=0"].join(""))}for(o=0;o<l;++o){for(q=0;q<p;++q){s=w;
w=n[q];if(q===0){t.push(["d",o,"s",q,"=t",o,"p",w].join(""))}else{t.push(["d",o,"s",q,"=(t",o,"p",w,"-s",s,"*t",o,"p",s,")"].join(""))
}}}if(t.length>0){m.push("var "+t.join(","))}for(q=p-1;q>=0;--q){w=n[q];m.push(["for(i",q,"=0;i",q,"<s",w,";++i",q,"){"].join(""))
}m.push(r);for(q=0;q<p;++q){s=w;w=n[q];for(o=0;o<l;++o){m.push(["p",o,"+=d",o,"s",q].join(""))
}if(v){if(q>0){m.push(["index[",s,"]-=s",s].join(""))}m.push(["++index[",w,"]"].join(""))
}m.push("}")}return m.join("\n")}function b(n,p,v,t){var r=p.length,l=v.arrayArgs.length,u=v.blockSize,w=v.indexArgs.length>0,m=[];
for(var s=0;s<l;++s){m.push(["var offset",s,"=p",s].join(""))}for(var s=n;s<r;++s){m.push(["for(var j"+s+"=SS[",p[s],"]|0;j",s,">0;){"].join(""));
m.push(["if(j",s,"<",u,"){"].join(""));m.push(["s",p[s],"=j",s].join(""));m.push(["j",s,"=0"].join(""));
m.push(["}else{s",p[s],"=",u].join(""));m.push(["j",s,"-=",u,"}"].join(""));if(w){m.push(["index[",p[s],"]=j",s].join(""))
}}for(var s=0;s<l;++s){var o=["offset"+s];for(var q=n;q<r;++q){o.push(["j",q,"*t",s,"p",p[q]].join(""))
}m.push(["p",s,"=(",o.join("+"),")"].join(""))}m.push(i(p,v,t));for(var s=n;s<r;
++s){m.push("}")}return m.join("\n")}function h(n){var l=0,o=n[0].length;while(l<o){for(var m=1;
m<n.length;++m){if(n[m][l]!==n[0][l]){return l}}++l}return l}function f(t,u,x){var m=t.body;
var v=[];var z=[];for(var A=0;A<t.args.length;++A){var l=t.args[A];if(l.count<=0){continue
}var w=new RegExp(l.name,"g");var o="";var B=u.arrayArgs.indexOf(A);switch(u.argTypes[A]){case"offset":var r=u.offsetArgIndex.indexOf(A);
var q=u.offsetArgs[r];B=q.array;o="+q"+r;case"array":o="p"+B+o;var p="l"+A;var n="a"+B;
if(u.arrayBlockIndices[B]===0){if(l.count===1){if(x[B]==="generic"){if(l.lvalue){v.push(["var ",p,"=",n,".get(",o,")"].join(""));
m=m.replace(w,p);z.push([n,".set(",o,",",p,")"].join(""))}else{m=m.replace(w,[n,".get(",o,")"].join(""))
}}else{m=m.replace(w,[n,"[",o,"]"].join(""))}}else{if(x[B]==="generic"){v.push(["var ",p,"=",n,".get(",o,")"].join(""));
m=m.replace(w,p);if(l.lvalue){z.push([n,".set(",o,",",p,")"].join(""))}}else{v.push(["var ",p,"=",n,"[",o,"]"].join(""));
m=m.replace(w,p);if(l.lvalue){z.push([n,"[",o,"]=",p].join(""))}}}}else{var s=[l.name],C=[o];
for(var y=0;y<Math.abs(u.arrayBlockIndices[B]);y++){s.push("\\s*\\[([^\\]]+)\\]");
C.push("$"+(y+1)+"*t"+B+"b"+y)}w=new RegExp(s.join(""),"g");o=C.join("+");if(x[B]==="generic"){throw new Error("cwise: Generic arrays not supported in combination with blocks!")
}else{m=m.replace(w,[n,"[",o,"]"].join(""))}}break;case"scalar":m=m.replace(w,"Y"+u.scalarArgs.indexOf(A));
break;case"index":m=m.replace(w,"index");break;case"shape":m=m.replace(w,"shape");
break}}return[v.join("\n"),m,z.join("\n")].join("\n").trim()}function j(o){var l=new Array(o.length);
var q=true;for(var n=0;n<o.length;++n){var m=o[n];var p=m.match(/\d+/);if(!p){p=""
}else{p=p[0]}if(m.charAt(0)===0){l[n]="u"+m.charAt(1)+p}else{l[n]=m.charAt(0)+p
}if(n>0){q=q&&l[n]===l[n-1]}}if(q){return l[0]}return l.join("")}function c(v,C){var I=(C[1].length-Math.abs(v.arrayBlockIndices[0]))|0;
var n=new Array(v.arrayArgs.length);var B=new Array(v.arrayArgs.length);for(var F=0;
F<v.arrayArgs.length;++F){B[F]=C[2*F];n[F]=C[2*F+1]}var s=[],o=[];var p=[],G=[];
var r=[];for(var F=0;F<v.arrayArgs.length;++F){if(v.arrayBlockIndices[F]<0){p.push(0);
G.push(I);s.push(I);o.push(I+v.arrayBlockIndices[F])}else{p.push(v.arrayBlockIndices[F]);
G.push(v.arrayBlockIndices[F]+I);s.push(0);o.push(v.arrayBlockIndices[F])}var x=[];
for(var E=0;E<n[F].length;E++){if(p[F]<=n[F][E]&&n[F][E]<G[F]){x.push(n[F][E]-p[F])
}}r.push(x)}var q=["SS"];var m=["'use strict'"];var y=[];for(var E=0;E<I;++E){y.push(["s",E,"=SS[",E,"]"].join(""))
}for(var F=0;F<v.arrayArgs.length;++F){q.push("a"+F);q.push("t"+F);q.push("p"+F);
for(var E=0;E<I;++E){y.push(["t",F,"p",E,"=t",F,"[",p[F]+E,"]"].join(""))}for(var E=0;
E<Math.abs(v.arrayBlockIndices[F]);++E){y.push(["t",F,"b",E,"=t",F,"[",s[F]+E,"]"].join(""))
}}for(var F=0;F<v.scalarArgs.length;++F){q.push("Y"+F)}if(v.shapeArgs.length>0){y.push("shape=SS.slice(0)")
}if(v.indexArgs.length>0){var D=new Array(I);for(var F=0;F<I;++F){D[F]="0"}y.push(["index=[",D.join(","),"]"].join(""))
}for(var F=0;F<v.offsetArgs.length;++F){var z=v.offsetArgs[F];var l=[];for(var E=0;
E<z.offset.length;++E){if(z.offset[E]===0){continue}else{if(z.offset[E]===1){l.push(["t",z.array,"p",E].join(""))
}else{l.push([z.offset[E],"*t",z.array,"p",E].join(""))}}}if(l.length===0){y.push("q"+F+"=0")
}else{y.push(["q",F,"=",l.join("+")].join(""))}}var t=k([].concat(v.pre.thisVars).concat(v.body.thisVars).concat(v.post.thisVars));
y=y.concat(t);if(y.length>0){m.push("var "+y.join(","))}for(var F=0;F<v.arrayArgs.length;
++F){m.push("p"+F+"|=0")}if(v.pre.body.length>3){m.push(f(v.pre,v,B))}var w=f(v.body,v,B);
var u=h(r);if(u<I){m.push(b(u,r[0],v,w))}else{m.push(i(r[0],v,w))}if(v.post.body.length>3){m.push(f(v.post,v,B))
}if(v.debug){console.log("-----Generated cwise routine for ",C,":\n"+m.join("\n")+"\n----------")
}var A=[(v.funcName||"unnamed"),"_cwise_loop_",n[0].join("s"),"m",u,j(B)].join("");
var H=new Function(["function ",A,"(",q.join(","),"){",m.join("\n"),"} return ",A].join(""));
return H()}a.exports=c},{uniq:361}],360:[function(b,c,a){var f=b("./compile.js");
function d(q){var g=["'use strict'","var CACHED={}"];var p=[];var r=q.funcName+"_cwise_thunk";
g.push(["return function ",r,"(",q.shimArgs.join(","),"){"].join(""));var t=[];
var o=[];var s=[["array",q.arrayArgs[0],".shape.slice(",Math.max(0,q.arrayBlockIndices[0]),q.arrayBlockIndices[0]<0?(","+q.arrayBlockIndices[0]+")"):")"].join("")];
var m=[],k=[];for(var n=0;n<q.arrayArgs.length;++n){var l=q.arrayArgs[n];p.push(["t",l,"=array",l,".dtype,","r",l,"=array",l,".order"].join(""));
t.push("t"+l);t.push("r"+l);o.push("t"+l);o.push("r"+l+".join()");s.push("array"+l+".data");
s.push("array"+l+".stride");s.push("array"+l+".offset|0");if(n>0){m.push("array"+q.arrayArgs[0]+".shape.length===array"+l+".shape.length+"+(Math.abs(q.arrayBlockIndices[0])-Math.abs(q.arrayBlockIndices[n])));
k.push("array"+q.arrayArgs[0]+".shape[shapeIndex+"+Math.max(0,q.arrayBlockIndices[0])+"]===array"+l+".shape[shapeIndex+"+Math.max(0,q.arrayBlockIndices[n])+"]")
}}if(q.arrayArgs.length>1){g.push("if (!("+m.join(" && ")+")) throw new Error('cwise: Arrays do not all have the same dimensionality!')");
g.push("for(var shapeIndex=array"+q.arrayArgs[0]+".shape.length-"+Math.abs(q.arrayBlockIndices[0])+"; shapeIndex-->0;) {");
g.push("if (!("+k.join(" && ")+")) throw new Error('cwise: Arrays do not all have the same shape!')");
g.push("}")}for(var n=0;n<q.scalarArgs.length;++n){s.push("scalar"+q.scalarArgs[n])
}p.push(["type=[",o.join(","),"].join()"].join(""));p.push("proc=CACHED[type]");
g.push("var "+p.join(","));g.push(["if(!proc){","CACHED[type]=proc=compile([",t.join(","),"])}","return proc(",s.join(","),")}"].join(""));
if(q.debug){console.log("-----Generated thunk:\n"+g.join("\n")+"\n----------")}var h=new Function("compile",g.join("\n"));
return h(f.bind(undefined,q))}c.exports=d},{"./compile.js":359}],361:[function(c,d,a){function b(n,m){var o=1,j=n.length,k=n[0],h=n[0];
for(var l=1;l<j;++l){h=k;k=n[l];if(m(k,h)){if(l===o){o++;continue}n[o++]=k}}n.length=o;
return n}function f(m){var n=1,j=m.length,k=m[0],h=m[0];for(var l=1;l<j;++l,h=k){h=k;
k=m[l];if(k!==h){if(l===n){n++;continue}m[n++]=k}}m.length=n;return m}function g(j,i,h){if(j.length===0){return j
}if(i){if(!h){j.sort(i)}return b(j,i)}if(!h){j.sort()}return f(j)}d.exports=g},{}],362:[function(d,a,h){var b=d("iota-array");
var m=d("is-buffer");var c=((typeof Float64Array)!=="undefined");function l(o,n){return o[0]-n[0]
}function f(){var q=this.stride;var p=new Array(q.length);var o;for(o=0;o<p.length;
++o){p[o]=[Math.abs(q[o]),o]}p.sort(l);var n=new Array(p.length);for(o=0;o<n.length;
++o){n[o]=p[o][1]}return n}function i(C,u){var w=["View",u,"d",C].join("");if(u<0){w="View_Nil"+C
}var q=(C==="generic");if(u===-1){var o="function "+w+"(a){this.data=a;};var proto="+w+".prototype;proto.dtype='"+C+"';proto.index=function(){return -1};proto.size=0;proto.dimension=-1;proto.shape=proto.stride=proto.order=[];proto.lo=proto.hi=proto.transpose=proto.step=function(){return new "+w+"(this.data);};proto.get=proto.set=function(){};proto.pick=function(){return null};return function construct_"+w+"(a){return new "+w+"(a);}";
var n=new Function(o);return n()}else{if(u===0){var o="function "+w+"(a,d) {this.data = a;this.offset = d};var proto="+w+".prototype;proto.dtype='"+C+"';proto.index=function(){return this.offset};proto.dimension=0;proto.size=1;proto.shape=proto.stride=proto.order=[];proto.lo=proto.hi=proto.transpose=proto.step=function "+w+"_copy() {return new "+w+"(this.data,this.offset)};proto.pick=function "+w+"_pick(){return TrivialArray(this.data);};proto.valueOf=proto.get=function "+w+"_get(){return "+(q?"this.data.get(this.offset)":"this.data[this.offset]")+"};proto.set=function "+w+"_set(v){return "+(q?"this.data.set(this.offset,v)":"this.data[this.offset]=v")+"};return function construct_"+w+"(a,b,c,d){return new "+w+"(a,d)}";
var n=new Function("TrivialArray",o);return n(g[C][0])}}var o=["'use strict'"];
var A=b(u);var x=A.map(function(D){return"i"+D});var s="this.offset+"+A.map(function(D){return"this.stride["+D+"]*i"+D
}).join("+");var t=A.map(function(D){return"b"+D}).join(",");var z=A.map(function(D){return"c"+D
}).join(",");o.push("function "+w+"(a,"+t+","+z+",d){this.data=a","this.shape=["+t+"]","this.stride=["+z+"]","this.offset=d|0}","var proto="+w+".prototype","proto.dtype='"+C+"'","proto.dimension="+u);
o.push("Object.defineProperty(proto,'size',{get:function "+w+"_size(){return "+A.map(function(D){return"this.shape["+D+"]"
}).join("*"),"}})");if(u===1){o.push("proto.order=[0]")}else{o.push("Object.defineProperty(proto,'order',{get:");
if(u<4){o.push("function "+w+"_order(){");if(u===2){o.push("return (Math.abs(this.stride[0])>Math.abs(this.stride[1]))?[1,0]:[0,1]}})")
}else{if(u===3){o.push("var s0=Math.abs(this.stride[0]),s1=Math.abs(this.stride[1]),s2=Math.abs(this.stride[2]);if(s0>s1){if(s1>s2){return [2,1,0];}else if(s0>s2){return [1,2,0];}else{return [1,0,2];}}else if(s0>s2){return [2,0,1];}else if(s2>s1){return [0,1,2];}else{return [0,2,1];}}})")
}}}else{o.push("ORDER})")}}o.push("proto.set=function "+w+"_set("+x.join(",")+",v){");
if(q){o.push("return this.data.set("+s+",v)}")}else{o.push("return this.data["+s+"]=v}")
}o.push("proto.get=function "+w+"_get("+x.join(",")+"){");if(q){o.push("return this.data.get("+s+")}")
}else{o.push("return this.data["+s+"]}")}o.push("proto.index=function "+w+"_index(",x.join(),"){return "+s+"}");
o.push("proto.hi=function "+w+"_hi("+x.join(",")+"){return new "+w+"(this.data,"+A.map(function(D){return["(typeof i",D,"!=='number'||i",D,"<0)?this.shape[",D,"]:i",D,"|0"].join("")
}).join(",")+","+A.map(function(D){return"this.stride["+D+"]"}).join(",")+",this.offset)}");
var p=A.map(function(D){return"a"+D+"=this.shape["+D+"]"});var y=A.map(function(D){return"c"+D+"=this.stride["+D+"]"
});o.push("proto.lo=function "+w+"_lo("+x.join(",")+"){var b=this.offset,d=0,"+p.join(",")+","+y.join(","));
for(var v=0;v<u;++v){o.push("if(typeof i"+v+"==='number'&&i"+v+">=0){d=i"+v+"|0;b+=c"+v+"*d;a"+v+"-=d}")
}o.push("return new "+w+"(this.data,"+A.map(function(D){return"a"+D}).join(",")+","+A.map(function(D){return"c"+D
}).join(",")+",b)}");o.push("proto.step=function "+w+"_step("+x.join(",")+"){var "+A.map(function(D){return"a"+D+"=this.shape["+D+"]"
}).join(",")+","+A.map(function(D){return"b"+D+"=this.stride["+D+"]"}).join(",")+",c=this.offset,d=0,ceil=Math.ceil");
for(var v=0;v<u;++v){o.push("if(typeof i"+v+"==='number'){d=i"+v+"|0;if(d<0){c+=b"+v+"*(a"+v+"-1);a"+v+"=ceil(-a"+v+"/d)}else{a"+v+"=ceil(a"+v+"/d)}b"+v+"*=d}")
}o.push("return new "+w+"(this.data,"+A.map(function(D){return"a"+D}).join(",")+","+A.map(function(D){return"b"+D
}).join(",")+",c)}");var B=new Array(u);var r=new Array(u);for(var v=0;v<u;++v){B[v]="a[i"+v+"]";
r[v]="b[i"+v+"]"}o.push("proto.transpose=function "+w+"_transpose("+x+"){"+x.map(function(E,D){return E+"=("+E+"===undefined?"+D+":"+E+"|0)"
}).join(";"),"var a=this.shape,b=this.stride;return new "+w+"(this.data,"+B.join(",")+","+r.join(",")+",this.offset)}");
o.push("proto.pick=function "+w+"_pick("+x+"){var a=[],b=[],c=this.offset");for(var v=0;
v<u;++v){o.push("if(typeof i"+v+"==='number'&&i"+v+">=0){c=(c+this.stride["+v+"]*i"+v+")|0}else{a.push(this.shape["+v+"]);b.push(this.stride["+v+"])}")
}o.push("var ctor=CTOR_LIST[a.length+1];return ctor(this.data,a,b,c)}");o.push("return function construct_"+w+"(data,shape,stride,offset){return new "+w+"(data,"+A.map(function(D){return"shape["+D+"]"
}).join(",")+","+A.map(function(D){return"stride["+D+"]"}).join(",")+",offset)}");
var n=new Function("CTOR_LIST","ORDER",o.join("\n"));return n(g[C],f)}function j(n){if(m(n)){return"buffer"
}if(c){switch(Object.prototype.toString.call(n)){case"[object Float64Array]":return"float64";
case"[object Float32Array]":return"float32";case"[object Int8Array]":return"int8";
case"[object Int16Array]":return"int16";case"[object Int32Array]":return"int32";
case"[object Uint8Array]":return"uint8";case"[object Uint16Array]":return"uint16";
case"[object Uint32Array]":return"uint32";case"[object Uint8ClampedArray]":return"uint8_clamped"
}}if(Array.isArray(n)){return"array"}return"generic"}var g={float32:[],float64:[],int8:[],int16:[],int32:[],uint8:[],uint16:[],uint32:[],array:[],uint8_clamped:[],buffer:[],generic:[]};
(function(){for(var n in g){g[n].push(i(n,-1))}});function k(p,s,n,o){if(p===undefined){var v=g.array[0];
return v([])}else{if(typeof p==="number"){p=[p]}}if(s===undefined){s=[p.length]
}var t=s.length;if(n===undefined){n=new Array(t);for(var q=t-1,u=1;q>=0;--q){n[q]=u;
u*=s[q]}}if(o===undefined){o=0;for(var q=0;q<t;++q){if(n[q]<0){o-=(s[q]-1)*n[q]
}}}var w=j(p);var r=g[w];while(r.length<=t+1){r.push(i(w,r.length-1))}var v=r[t+1];
return v(p,s,n,o)}a.exports=k},{"iota-array":363,"is-buffer":364}],363:[function(c,d,b){function a(h){var f=new Array(h);
for(var g=0;g<h;++g){f[g]=g}return f}d.exports=a},{}],364:[function(c,d,b){
/*!
 * Determine if an object is a Buffer
 *
 * @author   Feross Aboukhadijeh <feross@feross.org> <http://feross.org>
 * @license  MIT
 */
d.exports=function(g){return g!=null&&(f(g)||a(g)||!!g._isBuffer)
};function f(g){return !!g.constructor&&typeof g.constructor.isBuffer==="function"&&g.constructor.isBuffer(g)
}function a(g){return typeof g.readFloatLE==="function"&&typeof g.slice==="function"&&f(g.slice(0,0))
}},{}],365:[function(c,d,b){"use restrict";var g=32;b.INT_BITS=g;b.INT_MAX=2147483647;
b.INT_MIN=-1<<(g-1);b.sign=function(h){return(h>0)-(h<0)};b.abs=function(i){var h=i>>(g-1);
return(i^h)-h};b.min=function(h,i){return i^((h^i)&-(h<i))};b.max=function(h,i){return h^((h^i)&-(h<i))
};b.isPow2=function(h){return !(h&(h-1))&&(!!h)};b.log2=function(i){var j,h;j=(i>65535)<<4;
i>>>=j;h=(i>255)<<3;i>>>=h;j|=h;h=(i>15)<<2;i>>>=h;j|=h;h=(i>3)<<1;i>>>=h;j|=h;
return j|(i>>1)};b.log10=function(h){return(h>=1000000000)?9:(h>=100000000)?8:(h>=10000000)?7:(h>=1000000)?6:(h>=100000)?5:(h>=10000)?4:(h>=1000)?3:(h>=100)?2:(h>=10)?1:0
};b.popCount=function(h){h=h-((h>>>1)&1431655765);h=(h&858993459)+((h>>>2)&858993459);
return((h+(h>>>4)&252645135)*16843009)>>>24};function a(h){var i=32;h&=-h;if(h){i--
}if(h&65535){i-=16}if(h&16711935){i-=8}if(h&252645135){i-=4}if(h&858993459){i-=2
}if(h&1431655765){i-=1}return i}b.countTrailingZeros=a;b.nextPow2=function(h){h+=h===0;
--h;h|=h>>>1;h|=h>>>2;h|=h>>>4;h|=h>>>8;h|=h>>>16;return h+1};b.prevPow2=function(h){h|=h>>>1;
h|=h>>>2;h|=h>>>4;h|=h>>>8;h|=h>>>16;return h-(h>>>1)};b.parity=function(h){h^=h>>>16;
h^=h>>>8;h^=h>>>4;h&=15;return(27030>>>h)&1};var f=new Array(256);(function(l){for(var j=0;
j<256;++j){var h=j,m=j,k=7;for(h>>>=1;h;h>>>=1){m<<=1;m|=h&1;--k}l[j]=(m<<k)&255
}})(f);b.reverse=function(h){return(f[h&255]<<24)|(f[(h>>>8)&255]<<16)|(f[(h>>>16)&255]<<8)|f[(h>>>24)&255]
};b.interleave2=function(h,i){h&=65535;h=(h|(h<<8))&16711935;h=(h|(h<<4))&252645135;
h=(h|(h<<2))&858993459;h=(h|(h<<1))&1431655765;i&=65535;i=(i|(i<<8))&16711935;i=(i|(i<<4))&252645135;
i=(i|(i<<2))&858993459;i=(i|(i<<1))&1431655765;return h|(i<<1)};b.deinterleave2=function(h,i){h=(h>>>i)&1431655765;
h=(h|(h>>>1))&858993459;h=(h|(h>>>2))&252645135;h=(h|(h>>>4))&16711935;h=(h|(h>>>16))&65535;
return(h<<16)>>16};b.interleave3=function(h,j,i){h&=1023;h=(h|(h<<16))&4278190335;
h=(h|(h<<8))&251719695;h=(h|(h<<4))&3272356035;h=(h|(h<<2))&1227133513;j&=1023;
j=(j|(j<<16))&4278190335;j=(j|(j<<8))&251719695;j=(j|(j<<4))&3272356035;j=(j|(j<<2))&1227133513;
h|=(j<<1);i&=1023;i=(i|(i<<16))&4278190335;i=(i|(i<<8))&251719695;i=(i|(i<<4))&3272356035;
i=(i|(i<<2))&1227133513;return h|(i<<2)};b.deinterleave3=function(h,i){h=(h>>>i)&1227133513;
h=(h|(h>>>2))&3272356035;h=(h|(h>>>4))&251719695;h=(h|(h>>>8))&4278190335;h=(h|(h>>>16))&1023;
return(h<<22)>>22};b.nextCombination=function(h){var i=h|(h-1);return(i+1)|(((~i&-~i)-1)>>>(a(h)+1))
}},{}],366:[function(b,c,a){(function(s,j){var t=b("bit-twiddle");var w=b("dup");
if(!s.__TYPEDARRAY_POOL){s.__TYPEDARRAY_POOL={UINT8:w([32,0]),UINT16:w([32,0]),UINT32:w([32,0]),INT8:w([32,0]),INT16:w([32,0]),INT32:w([32,0]),FLOAT:w([32,0]),DOUBLE:w([32,0]),DATA:w([32,0]),UINT8C:w([32,0]),BUFFER:w([32,0])}
}var A=(typeof Uint8ClampedArray)!=="undefined";var B=s.__TYPEDARRAY_POOL;if(!B.UINT8C){B.UINT8C=w([32,0])
}if(!B.BUFFER){B.BUFFER=w([32,0])}var m=B.DATA,x=B.BUFFER;a.free=function n(G){if(j.isBuffer(G)){x[t.log2(G.length)].push(G)
}else{if(Object.prototype.toString.call(G)!=="[object ArrayBuffer]"){G=G.buffer
}if(!G){return}var F=G.length||G.byteLength;var E=t.log2(F)|0;m[E].push(G)}};function q(E){if(!E){return
}var G=E.length||E.byteLength;var F=t.log2(G);m[F].push(E)}function d(E){q(E.buffer)
}a.freeUint8=a.freeUint16=a.freeUint32=a.freeInt8=a.freeInt16=a.freeInt32=a.freeFloat32=a.freeFloat=a.freeFloat64=a.freeDouble=a.freeUint8Clamped=a.freeDataView=d;
a.freeArrayBuffer=q;a.freeBuffer=function r(E){x[t.log2(E.length)].push(E)};a.malloc=function u(F,E){if(E===undefined||E==="arraybuffer"){return v(F)
}else{switch(E){case"uint8":return i(F);case"uint16":return y(F);case"uint32":return p(F);
case"int8":return C(F);case"int16":return f(F);case"int32":return z(F);case"float":case"float32":return h(F);
case"double":case"float64":return o(F);case"uint8_clamped":return g(F);case"buffer":return k(F);
case"data":case"dataview":return l(F);default:return null}}return null};function v(G){var G=t.nextPow2(G);
var E=t.log2(G);var F=m[E];if(F.length>0){return F.pop()}return new ArrayBuffer(G)
}a.mallocArrayBuffer=v;function i(E){return new Uint8Array(v(E),0,E)}a.mallocUint8=i;
function y(E){return new Uint16Array(v(2*E),0,E)}a.mallocUint16=y;function p(E){return new Uint32Array(v(4*E),0,E)
}a.mallocUint32=p;function C(E){return new Int8Array(v(E),0,E)}a.mallocInt8=C;function f(E){return new Int16Array(v(2*E),0,E)
}a.mallocInt16=f;function z(E){return new Int32Array(v(4*E),0,E)}a.mallocInt32=z;
function h(E){return new Float32Array(v(4*E),0,E)}a.mallocFloat32=a.mallocFloat=h;
function o(E){return new Float64Array(v(8*E),0,E)}a.mallocFloat64=a.mallocDouble=o;
function g(E){if(A){return new Uint8ClampedArray(v(E),0,E)}else{return i(E)}}a.mallocUint8Clamped=g;
function l(E){return new DataView(v(E),0,E)}a.mallocDataView=l;function k(G){G=t.nextPow2(G);
var F=t.log2(G);var E=x[F];if(E.length>0){return E.pop()}return new j(G)}a.mallocBuffer=k;
a.clearCache=function D(){for(var E=0;E<32;++E){B.UINT8[E].length=0;B.UINT16[E].length=0;
B.UINT32[E].length=0;B.INT8[E].length=0;B.INT16[E].length=0;B.INT32[E].length=0;
B.FLOAT[E].length=0;B.DOUBLE[E].length=0;B.UINT8C[E].length=0;m[E].length=0;x[E].length=0
}}}).call(this,typeof global!=="undefined"?global:typeof self!=="undefined"?self:typeof window!=="undefined"?window:{},b("buffer").Buffer)
},{"bit-twiddle":365,buffer:228,dup:352}],367:[function(b,c,a){c.exports={ShaderPlayer2D:b("./ac-shader-player-2d/ShaderPlayer2D")}
},{"./ac-shader-player-2d/ShaderPlayer2D":370}],368:[function(b,c,a){var f=function(g){this.w=0;
this.x=0;this.y=0;this.z=0;if(g===0){return}if(Array.isArray(g)){this._setFromArray(g)
}else{if(typeof g==="object"){this._setFromObject(g)}else{if(typeof g==="number"){this._setFromHexNumber(g)
}else{if(typeof g==="string"){this._setFromHexString(g)}}}}};var d=f.prototype;
d._setFromArray=function(g){this._replaceColorVals.apply(this,g)};d._setFromObject=function(g){this._replaceColorVals(g.r,g.g,g.b,g.a)
};d._setFromHexNumber=function(g){this._setFromHexString(g.toString(16))};d._setFromHexString=function(h){var g=this._hexToRGB(h);
this._setFromObject(g)};d._replaceColorVals=function(k,j,h,i){this._replaceColorVal("w",k);
this._replaceColorVal("x",j);this._replaceColorVal("y",h);this._replaceColorVal("z",i)
};d._replaceColorVal=function(g,h){if(typeof h==="undefined"){return}h=h/255;if(h<0){h=0
}else{if(h>1){h=1}}this[g]=h};d._hexToRGB=function(i){var h=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;
i=i.replace(h,function(k,n,l,j){return n+n+l+l+j+j});var g=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(i);
return g?{r:parseInt(g[1],16),g:parseInt(g[2],16),b:parseInt(g[3],16)}:null};c.exports=f
},{}],369:[function(b,c,a){var f=function(g){this.extensions={};this.context=g};
var d=f.prototype;d.get=function(g){if(typeof this.extensions[g]!=="undefined"){return this.extensions[g]
}var i,h=this.context;if(g==="EXT_texture_filter_anisotropic"){i=h.getExtension("EXT_texture_filter_anisotropic")||h.getExtension("MOZ_EXT_texture_filter_anisotropic")||h.getExtension("WEBKIT_EXT_texture_filter_anisotropic")
}else{if(g==="WEBGL_compressed_texture_s3tc"){i=h.getExtension("WEBGL_compressed_texture_s3tc")||h.getExtension("MOZ_WEBGL_compressed_texture_s3tc")||h.getExtension("WEBKIT_WEBGL_compressed_texture_s3tc")
}else{if(g==="WEBGL_compressed_texture_pvrtc"){i=h.getExtension("WEBGL_compressed_texture_pvrtc")||h.getExtension("WEBKIT_WEBGL_compressed_texture_pvrtc")
}else{i=h.getExtension(g)}}}if(i===null){this.extensions[g]=null;return null}this.extensions[g]=i;
return i};c.exports=f},{}],370:[function(f,d,j){var n=f("./WebGLRenderer"),b=f("./Color"),c=f("./TextureController"),p=f("./vertexShader"),q=f("@marcom/ac-event-emitter-micro").EventEmitterMicro,i=f("@marcom/ac-object/defaults"),k=f("@marcom/ac-object/clone"),h=f("@marcom/ac-clock"),o=f("@marcom/ac-dom-emitter").DOMEmitter,m=f("@marcom/ac-viewport").Viewport;
var g={sizes:{},vertexShader:p,antialias:false,preserveDrawingBuffer:false,transparent:false,mipmap:1,reloadOnBreakpoint:false,clearColor:0,autoClearColor:false,allowXLarge:false,backgroundOpacity:0,vertexShadersPath:null,fragmentShadersPath:null,invertX:false,invertY:false,uniforms:{},minFilter:"LINEAR_MIPMAP_LINEAR",magFilter:"LINEAR"};
var r={update:"update",draw:"draw",textureLoadStart:"texture-load-start",textureReloadStart:"texture-reload-start",textureLoad:"texture-load",texturesComplete:"textures-complete",resize:"resize"};
function a(s){q.call(this);this.options=i(g,s||{});this.clock=s.clock||h;this.className=s.className||this.className;
this.activeClassName=s.activeClassName||this.activeClassName;this._currentSize={};
this._textureController=null;this._texturesReady=true;this._shouldUpdate=true;this._progressValue=null;
this._renderingReady=false;this._didBindBreakpoint=false;this._renderCount=0;this._didRender=false;
this._textureKeyMap={};this._textureValMap={};this._textureUpdateMap={};this.devicePixelRatio=this._getDevicePixelRatio();
this._breakpointName=this.getCurrentBreakpointName();this._setBreakpointSizes();
this._boundOnUpdate=this._onUpdate.bind(this);this._boundOnDraw=this._onDraw.bind(this);
this.initialize();this.domEmitter=new o(this.el);this.clock.on("update",this._boundOnUpdate);
this.clock.on("draw",this._boundOnDraw);if(this._getSizesLength()>1||this.options.reloadOnBreakpoint){this._didBindBreakpoint=true;
this._boundOnShaderPlayer2DBreakpoint=this._onShaderPlayer2DBreakpoint.bind(this);
m.on("breakpoint",this._boundOnShaderPlayer2DBreakpoint)}this._bindDOMEvents()}var l=a.prototype=Object.create(q.prototype);
l.rendersBeforeVisible=0;l.className="webgl-object";l.activeClassName="active";
l.initialize=function(){this.options.uniforms=this._appendIncludedUniforms(this.options.uniforms);
this.renderer=this.createRenderer();if(this.options.textures){this._setTextureUniforms(this.options.textures)
}this._initializeRenderer();this.el=this.renderer.el;this.el.className=this.className;
this.setSize()};l.load=function(){if(!this._textureController){return}this.trigger(r.textureLoadStart);
this._textureController.load()};l.start=function(){this.clock.start()};l.stop=function(){this.clock.stop()
};l.render=function(){if(!this.renderer||!this._texturesReady){return}if(!this._didRender){this._setInitialUniforms();
this._didRender=true}this._renderCount++;if(!this._renderingReady){if(this._renderCount<this.rendersBeforeVisible){return
}this.setActive()}this.renderer.render(this.scene,this.camera)};l.createRenderer=function(){return new n(this,this._getRendererOptions())
};l.setClearColor=function(s){s=s||this.options.clearColor;this.options.clearColor=s;
this.renderer.setClearColor(this._getClearColor(s))};l.setBackgroundOpacity=function(s){this.options.backgroundOpacity=s;
this.setClearColor()};l.setTextureMagFilter=function(s,t){var u=this.getTexture(s);
if(!u&&this.renderer.context[t]!=="undefined"){return null}u.texture.magFilter=this.renderer.context[t];
return true};l.setTextureMinFilter=function(s,t){var u=this.getTexture(s);if(!u&&this.renderer.context[t]!=="undefined"){return null
}u.texture.minFilter=this.renderer.context[t];return true};l.createTextureController=function(s){s=s||{};
if(this.options.allowXLarge){s.allowXLarge=true}if(this.options.magFilter){s.magFilter=this.options.magFilter
}if(this.options.minFilter){s.minFilter=this.options.minFilter}this._textureController=new c(this,s);
this._boundOnTextureControllerLoad=this._onTextureControllerLoad.bind(this);this._boundOnTextureControllerComplete=this._onTextureControllerComplete.bind(this);
this._boundOnTextureControllerReadyStateChanged=this._onTextureControllerReadyStateChanged.bind(this);
this._textureController.on("load",this._boundOnTextureControllerLoad);this._textureController.on("complete",this._boundOnTextureControllerComplete);
this._textureController.on("readystatechanged",this._boundOnTextureControllerReadyStateChanged)
};l.getSizesForBreakpoint=function(s){s=s||m.getBreakpoint().name;if(!this.options.sizes[s]){s="defaults"
}return{name:s,sizes:this.options.sizes[s]}};l.getUniform=function(s){if(!this.renderer){return null
}return this.renderer.getUniform(s)};l.setUniform=function(s,t){if(!this.renderer){return false
}return this.renderer.setUniform(s,t)};l.getAttribute=function(s){if(!this.renderer){return null
}return this.renderer.getAttribute(s)};l.setAttribute=function(s,t){if(!this.renderer){return false
}return this.renderer.setAttribute(s,t)};l.setUniforms=function(t){if(typeof t!=="object"){return false
}var s;for(s in t){if(t.hasOwnProperty(s)){this.setUniform(s,t[s])}}};l.setSize=function(t,s){if(typeof t!=="undefined"){this.width=t
}if(typeof s!=="undefined"){this.height=s}this._setResolution();if(this.renderer){this.renderer.setSize(this.width*this.devicePixelRatio,this.height*this.devicePixelRatio,this.options.mipmap)
}if(this.el){this.el.style.width=this.width+"px";this.el.style.height=this.height+"px"
}};l.setBasePath=function(s){if(!this._textureController){return}this._textureController.options.basePath=s
};l.setActive=function(){this.el.classList.add(this.activeClassName);this._renderingReady=true
};l.setInactive=function(){this.el.classList.remove(this.activeClassName);this._renderCount=0;
this._renderingReady=false};l.getTexture=function(s){if(!this.renderer||!this._textureController){return null
}if(typeof this._textureKeyMap[s]!=="undefined"){s=this._textureKeyMap[s]}return this._textureController.getTexture(s)
};l.setTexture=function(s,t){};l.getCurrentBreakpointName=function(){var s=m.getBreakpoint().name;
if(!this.options.allowXLarge&&s==="xlarge"){s="large"}return s};l.getTextures=function(){var s={};
var t;for(t in this._textureKeyMap){if(this._textureKeyMap.hasOwnProperty(t)){s[t]=this.getTexture(t)
}}return s};l.getTextureControllerTextures=function(){if(!this._textureController){return null
}var t={};var u,s=this._textureController._textureLoader.textures;for(u in s){if(s.hasOwnProperty(u)){t[u]=s[u].texture
}}return t};l.refreshTexture=function(s){this._textureUpdateMap[s]=true};l.destroy=function(){this.stop();
if(this._textureController){this._textureController.destroy()}if(this._didBindBreakpoint){m.off("breakpoint",this._boundOnShaderPlayer2DBreakpoint)
}this.domEmitter.destroy();var s;for(s in this){if(this.hasOwnProperty(s)){this[s]=null
}}q.prototype.destroy.call(this)};l._onTextureControllerLoad=function(s){this.trigger(r.textureLoad,s)
};l._onTextureControllerComplete=function(){this._texturesReady=true;this.trigger(r.texturesComplete)
};l._onTextureControllerReadyStateChanged=function(s){this._texturesReady=s.texturesReady
};l._setTextureUniforms=function(s){var u,t=this.renderer.context,v;for(u in s){if(s.hasOwnProperty(u)){v=s[u];
if(!this._textureController){this.createTextureController()}this._texturesRequired++;
this._textureKeyMap[u]=v.name;this._textureValMap[v.name]=u;this.options.uniforms[u]={type:"sampler2D",value:this._textureController.createTexture(t,v.name,v)}
}}};l._setTime=function(s){this.setUniform("time",s)};l._setResolution=function(){this.setUniform("resolution",[this.width,this.height])
};l._setPointer=function(s,t){if(this.options.invertX){s=1-s}if(this.options.invertY){t=1-t
}this.setUniform("pointer",[s,t])};l._getDevicePixelRatio=function(){if(this.options.devicePixelRatio){return this.options.devicePixelRatio
}return window.devicePixelRatio||1};l._onShaderPlayer2DBreakpoint=function(s){var t=this.getCurrentBreakpointName();
if(this._breakpointName===t){return}this._breakpointName=t;if(this._shouldChangeSize(t)){this._setBreakpointSizes()
}if(this.options.reloadOnBreakpoint&&this._textureController){this._texturesReady=false;
this.setInactive();this._textureController.load();this.trigger(r.textureReloadStart)
}};l._getSizesLength=function(){return Object.keys(this.options.sizes).length};
l._shouldChangeSize=function(t){var s=this.getSizesForBreakpoint(t);if(s.sizes.width===this._currentSize.sizes.width&&s.sizes.height===this._currentSize.sizes.height){return false
}return true};l._setBreakpointSizes=function(){var s=this.getSizesForBreakpoint();
this._currentSize=s;this.setSize(s.sizes.width,s.sizes.height);this.trigger(r.resize)
};l._appendIncludedUniforms=function(s){s=s||{};if(!s.progress){s.progress={type:"float",value:0}
}if(!s.time){s.time={type:"float",value:0}}if(!s.resolution){s.resolution={type:"vec2",value:[this.width,this.height]}
}if(!s.pointer){s.pointer={type:"vec2",value:[0,0]}}return k(s,true)};l._setInitialUniforms=function(){if(!this.options||!this.options.uniforms){return
}var s;for(s in this.options.uniforms){if(this.options.uniforms.hasOwnProperty(s)){this.setUniform(s,this.options.uniforms[s].value)
}}};l._onUpdate=function(s){this._setTime(s.time);this.trigger(r.update,s)};l._onDraw=function(s){this.render();
this.trigger(r.draw,s)};l._refreshTexture=function(s){var t=this.getTexture(s);
if(!t){return null}t.texture.setPixels(t.el)};l._bindDOMEvents=function(){this.domEmitter.on("mousemove",this._handleMouseMove,this);
this.domEmitter.on("touchmove",this._handleTouchMove,this)};l._getClearColor=function(s){var t=new b(s);
t.z=this.options.backgroundOpacity;return t};l._initializeRenderer=function(){this.renderer.initialize(this._getRendererOptions())
};l._getRendererOptions=function(){return{clearColor:this._getClearColor(this.options.clearColor),transparent:this.options.transparent,fragmentShader:this.options.fragmentShader,vertexShader:this.options.vertexShader,uniforms:this.options.uniforms,antialias:this.options.antialias}
};l._handleMouseMove=function(s){this._setPointer(s.originalEvent.offsetX/this.width,1-s.originalEvent.offsetY/this.height)
};l._handleTouchMove=function(s){this._setPointer(s.originalEvent.touches[0].offsetX/this.width,1-s.originalEvent.touches[0].offsetY/this.height)
};d.exports=a},{"./Color":368,"./TextureController":371,"./WebGLRenderer":372,"./vertexShader":373,"@marcom/ac-clock":13,"@marcom/ac-dom-emitter":309,"@marcom/ac-event-emitter-micro":312,"@marcom/ac-object/clone":258,"@marcom/ac-object/defaults":260,"@marcom/ac-viewport":343}],371:[function(b,c,a){var g=b("@marcom/ac-event-emitter-micro").EventEmitterMicro,i=b("@marcom/ac-object/defaults"),h=b("@marcom/ac-texture-loader").TextureLoader;
var f;var d=function(j,k){g.call(this);this.options=k||{};this.controller=j;this.options.basePath=this.options.basePath||window.location.pathname;
this._textureLoader=new h(this.options);this._texturesRequired=0;this._texturesLoaded=0;
this._textureLoader.on("load",this._handleTextureLoaderLoaded.bind(this))};f=d.prototype=Object.create(g.prototype);
f.createTexture=function(l,k,j){if(this._textureLoader.textures[k]){throw ('Existing texture "'+k+'" already registered.');
return}if(!l){throw ("Textures require a WebGL context in order to be created.");
return}j=i(this.options,j||{});this._textureLoader.createTexture(l,k,j);this._texturesRequired++;
return this.getTexture(k)};f.getTexture=function(j){if(!this._textureLoader){return null
}return this._textureLoader.textures[j]};f.load=function(j){j=i(this.options,j||{});
this._texturesLoaded=0;if(!this._textureLoader){return}var k;for(k in this._textureLoader.textures){if(this._textureLoader.textures.hasOwnProperty(k)){this._textureLoader.load(k,j)
}}};f.destroy=function(){this._textureLoader.destroy();var j;for(j in this){if(this.hasOwnProperty(j)){this[j]=null
}}g.prototype.destroy.call(this)};f._handleTextureLoaderLoaded=function(m){if(this.controller&&this.controller.renderer){var k=this.controller._textureValMap[m.name];
var l=m.el.width,j=m.el.height;if(m.el instanceof HTMLVideoElement){l=m.el.videoWidth;
j=m.el.videoHeight}if(this._isPowerOfTwo(l)&&this._isPowerOfTwo(j)){m.texture.generateMipmap();
if(this.options.magFilter){m.texture.magFilter=m.texture.gl[this.options.magFilter]
}if(this.options.minFilter){m.texture.minFilter=m.texture.gl[this.options.minFilter]
}}else{m.texture.magFilter=m.texture.gl.LINEAR;m.texture.minFilter=m.texture.gl.LINEAR;
m.texture.wrapT=m.texture.gl.CLAMP_TO_EDGE;m.texture.wrapS=m.texture.gl.CLAMP_TO_EDGE
}this.controller.renderer.bindTexture(k)}this.trigger("load",m);this._texturesLoaded++;
if(this._texturesLoaded===this._texturesRequired){this.trigger("complete")}};f._isPowerOfTwo=function(j){return(j&(j-1))===0
};c.exports=d},{"@marcom/ac-event-emitter-micro":312,"@marcom/ac-object/defaults":260,"@marcom/ac-texture-loader":319}],372:[function(c,a,g){var k=c("@marcom/ac-event-emitter-micro").EventEmitterMicro,i=c("./ExtensionsController"),d=c("a-big-triangle"),b=c("gl-shader-core");
var h;var f={clearDepth:1,clearColor:[0,0,0,0],clearStencil:0};var l=["OES_texture_float","OES_texture_float_linear","OES_texture_half_float","OES_texture_half_float_linear","OES_standard_derivatives"];
var j=function(m,o){k.call(this);this.options=this._initializeOptions(o);this.controller=m;
var n=document.createElement("canvas");var p=n.getContext("webgl",this.options)||n.getContext("experimental-webgl",this.options);
if(!p){this.trigger("error","Unable to initialize WebGL");return null}this.el=n;
this.context=p};h=j.prototype=Object.create(j.prototype);h.initialize=function(o){var q=this.context;
this.options=this._initializeOptions(o);this._shouldClearColor=true;this.options._transformedUniforms=this.transformShaderParameters(this.options.uniforms);
if(this.options.attributes){this.options._transformedAttributes=this.transformShaderParameters(this.options.attributes)
}var n={};n.clearFlags=this.options.clearFlags===undefined?(q.COLOR_BUFFER_BIT|q.DEPTH_BUFFER_BIT):this.options.clearFlags;
var p;for(p in f){if(f.hasOwnProperty(p)){n[p]=f[p];if(typeof this.options[p]!=="undefined"){n[p]=this.options[p]
}}}this._renderSettings=n;this.shader=this.createShader(q,this.options.vertexShader,this.options.fragmentShader,this.options._transformedUniforms,this.options._transformedAttributes);
q.pixelStorei(q.UNPACK_FLIP_Y_WEBGL,true);q.pixelStorei(q.UNPACK_PREMULTIPLY_ALPHA_WEBGL,false);
this.extensions=new i(this.context);var m=l.length;for(p=0;p<m;p++){this.extensions.get(l[p])
}this.bindShader()};h.createShader=function(p,r,n,m,o){var q=this._normalizeShaderParams({context:p,vertexShader:r,fragmentShader:n,uniforms:m||[],attributes:o||[]});
return b(q.context,q.vertexShader,q.fragmentShader,q.uniforms,q.attributes)};h.linkProgram=function(o,m,p){var n=o.createProgram();
o.attachShader(n,m);o.attachShader(n,p);o.linkProgram(n);o.useProgram(n)};h.bindShader=function(){this.shader.bind()
};h.bindTextures=function(){if(!this.controller||!this.controller.options||!this.controller.options.textures){return
}var n,m=this.controller.options.textures;for(n in m){if(m.hasOwnProperty(n)){this.bindTexture(n)
}}};h.bindTexture=function(m,o){if(o||this.controller._textureUpdateMap[m]){this.controller._refreshTexture(m);
this.controller._textureUpdateMap[m]=false}var n=this.controller.getTexture(m);
if(!n){return}this.shader.uniforms[m]=n.texture.bind(n.unit)};h.setClearColor=function(m){this._renderSettings.clearColor=m;
this._shouldClearColor=true};h.clearColor=function(){var n=this.context,m=this._renderSettings;
n.bindFramebuffer(n.FRAMEBUFFER,null);if(m.clearFlags&n.STENCIL_BUFFER_BIT){n.clearStencil(m.clearStencil)
}if(m.clearFlags&n.COLOR_BUFFER_BIT){n.clearColor(m.clearColor.w,m.clearColor.x,m.clearColor.y,m.clearColor.z)
}if(m.clearFlags&n.DEPTH_BUFFER_BIT){n.clearDepth(m.clearDepth)}if(m.clearFlags){n.clear(n.COLOR_BUFFER_BIT|n.DEPTH_BUFFER_BIT|n.STENCIL_BUFFER_BIT)
}};h.render=function(){if(this.options.autoClearColor||this._shouldClearColor){this.clearColor();
this._shouldClearColor=false}this.bindShader();this.bindTextures();d(this.context)
};h.updateShader=function(m){m=m||{};if(m.uniforms){m.uniforms=this.transformShaderParameters(m.uniforms)
}m.vertexShader=m.vertexShader||this.options.vertexShader;m.fragmentShader=m.fragmentShader||this.options.fragmentShader;
m.uniforms=m.uniforms||this.options.uniforms;m.attributes=m.attributes||this.options.attributes;
m=this._normalizeShaderParams(m);this.shader.dispose();this.shader=this.createShader(this.context,m.vertexShader,m.fragmentShader,m.uniforms,m.attributes);
this.options.vertexShader=m.vertexShader;this.options.fragmentShader=m.fragmentShader;
this.options.uniforms=m.uniforms;this.options.attributes=m.attributes};h.getUniform=function(m){if(!this._hasUniform(m)){return null
}return this.options.uniforms[m].value};h.setUniform=function(m,n){if(!this._hasUniform(m)){return
}this.options.uniforms[m].value=n;this.shader.uniforms[m]=n};h.getAttribute=function(m,n){if(!this.shader){return null
}return this.shader.attributes[m]};h.setAttribute=function(m,n){if(!this.shader){return
}this.shader.attributes[m]=n};h.setSize=function(n,m,p){var o=n*p,q=m*p;this.el.setAttribute("width",o);
this.el.setAttribute("height",q);this.el.style.width=n+"px";this.el.style.height=m+"px";
this.context.viewport(0,0,(o)|0,(q)|0)};h.transformShaderParameters=function(o){o=o||{};
var m=[];var n;for(n in o){if(o.hasOwnProperty(n)){m.push({name:n,type:o[n].type})
}}return m};h.destroy=function(){this.shader.dispose();k.prototype.destroy.call(this)
};h._normalizeShaderParams=function(m){if(this.options.setFloatPrecision!==false){m.fragmentShader="precision highp float;\n"+m.fragmentShader
}return m};h._initializeOptions=function(m){m.alpha=m.transparent;return m};h._hasUniform=function(m){return(this.options||this.options.uniforms||this.options.uniforms[m])
};a.exports=j},{"./ExtensionsController":369,"@marcom/ac-event-emitter-micro":312,"a-big-triangle":351,"gl-shader-core":356}],373:[function(b,c,a){c.exports="attribute vec3 position;					varying vec2 vUV;					void main() {						gl_Position = vec4(position, 1.0);						vUV = position.xy * 0.5 + 0.5;					}"
},{}],374:[function(b,c,a){c.exports={SiriPlayer:b("./ac-siri-player/SiriPlayer")}
},{"./ac-siri-player/SiriPlayer":375}],375:[function(d,c,i){var a=d("@marcom/ac-shader-player-2d").ShaderPlayer2D,g=d("./fragmentShader.js"),k=d("./white-fragmentShader.js"),f=d("@marcom/ac-object/defaults");
var h={antialias:false,mipmap:1,alpha:false,transparent:false,fragmentShader:g,uniforms:{fw:{type:"float",value:0},fj:{type:"vec2",value:[0,0]},ee:{type:"float",value:1.5},kq:{type:"float",value:0},et:{type:"float",value:0.2},dq:{type:"float",value:1.5},ww:{type:"float",value:0.15},qa:{type:"float",value:0.5},te:{type:"float",value:0.05},jf:{type:"vec2",value:[0,0]},qd:{type:"vec2",value:[1,1]}},sizes:{defaults:{width:800,height:180}}};
function b(l){l=l||{};l.uniforms=f(h.uniforms,l.uniforms);l=f(h,l);if(l.white===true){l.fragmentShader=k
}a.call(this,l);this.setUniform("fj",this.getUniform("resolution"));this.on("update",this._updateChangedUniforms.bind(this))
}var j=b.prototype=Object.create(a.prototype);j._updateChangedUniforms=function(o){this.setUniform("fw",this.getUniform("time")/1000);
this.setUniform("fj",this.getUniform("resolution"));var l=this.getUniform("kq"),n=this.getUniform("ee"),p=(o.time-this.clock.lastFrameTime)/1000;
var m=l+(p*n);this.setUniform("kq",m)};c.exports=b},{"./fragmentShader.js":376,"./white-fragmentShader.js":377,"@marcom/ac-object/defaults":260,"@marcom/ac-shader-player-2d":367}],376:[function(b,c,a){c.exports="/* * Description : Array and textureless GLSL 2D/3D/4D simplex  *            noise functions. *     Author : Ian McEwan, Ashima Arts. * Maintainer : stegu *   Lastmod : 20110822 (ijm) *   License : Copyright (C) 2011 Ashima Arts. All rights reserved. *             Distributed under the MIT License. See LICENSE file. *             https://github.com/ashima/webgl-noise *             https://github.com/stegu/webgl-noise */vec3 mod289(vec3 x) {  return x - floor(x * (1.0 / 289.0)) * 289.0;}vec4 mod289(vec4 x) {  return x - floor(x * (1.0 / 289.0)) * 289.0;}vec4 permute(vec4 x) {     return mod289(((x*34.0)+1.0)*x);}vec4 taylorInvSqrt(vec4 r){  return 1.79284291400159 - 0.85373472095314 * r;}float snoise(vec3 v)  {   const vec2  C = vec2(1.0/6.0, 1.0/3.0) ;  const vec4  D = vec4(0.0, 0.5, 1.0, 2.0);  vec3 i  = floor(v + dot(v, C.yyy) );  vec3 x0 =   v - i + dot(i, C.xxx) ;  vec3 g = step(x0.yzx, x0.xyz);  vec3 l = 1.0 - g;  vec3 i1 = min( g.xyz, l.zxy );  vec3 i2 = max( g.xyz, l.zxy );  vec3 x1 = x0 - i1 + C.xxx;  vec3 x2 = x0 - i2 + C.yyy;  vec3 x3 = x0 - D.yyy;  i = mod289(i);   vec4 p = permute( permute( permute(              i.z + vec4(0.0, i1.z, i2.z, 1.0 ))           + i.y + vec4(0.0, i1.y, i2.y, 1.0 ))            + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));  float n_ = 0.142857142857;  vec3  ns = n_ * D.wyz - D.xzx;  vec4 j = p - 49.0 * floor(p * ns.z * ns.z);  vec4 x_ = floor(j * ns.z);  vec4 y_ = floor(j - 7.0 * x_ );  vec4 x = x_ *ns.x + ns.yyyy;  vec4 y = y_ *ns.x + ns.yyyy;  vec4 h = 1.0 - abs(x) - abs(y);  vec4 b0 = vec4( x.xy, y.xy );  vec4 b1 = vec4( x.zw, y.zw );  vec4 s0 = floor(b0)*2.0 + 1.0;  vec4 s1 = floor(b1)*2.0 + 1.0;  vec4 sh = -step(h, vec4(0.0));  vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;  vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;  vec3 p0 = vec3(a0.xy,h.x);  vec3 p1 = vec3(a0.zw,h.y);  vec3 p2 = vec3(a1.xy,h.z);  vec3 p3 = vec3(a1.zw,h.w);  vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));  p0 *= norm.x;  p1 *= norm.y;  p2 *= norm.z;  p3 *= norm.w;  vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);  m = m * m;  return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1),                                 dot(p2,x2), dot(p3,x3) ) );  }/**  * @copyright 2016 Apple Inc. All rights reserved. */varying vec2 vUV;uniform float fw;uniform vec2 fj;uniform float et;uniform float dq;uniform float ee;uniform float kq;uniform vec2 qd;uniform vec2 jf;uniform float ww;uniform float qa;uniform float te; void main() {if ((vUV.x< 1.0-qd.x-jf.x)||(vUV.y<1.0-qd.y-jf.y)){return;}vec2 ge=vUV+jf;float gd=snoise(vec3(0.,0.,fw));float wa=snoise(vec3(0.,0.,kq*3.))*0.3+0.7;float qf=snoise(vec3(0.,0.,kq*3.))*0.1+0.9;vec2 dz=vec2(kq+gd*0.1*ee,(ge.x-0.5)/et/qf);vec3 yf=abs(vec3(snoise(vec3(dz,1.0)),snoise(vec3(dz,5.0)),snoise(vec3(dz,9.0))))*0.5+0.01;yf *=min(1.,smoothstep(ww,qa+ww,ge.x)*smoothstep(1.-ww,1.-ww-qa,ge.x))*wa;float da=abs(ge.y-0.5);vec3 kp=smoothstep(yf+(dq/fj.y),yf,vec3(da));kp*=smoothstep(0.25,0.0,yf)*0.7+0.3;kp*= min(1., smoothstep(0., te, ge.x)*smoothstep(1.,1.-te, ge.x));vec4 ca=vec4(1.0,0.176,0.333,.1)*kp.x;vec4 op=vec4(0.251,1.0,0.639,.1)*kp.y;vec4 sf=vec4(0.0,0.478,1.0,.1)*kp.z;gl_FragColor=1.0-(1.0-ca)*(1.0-op)*(1.0-sf);}"
},{}],377:[function(b,c,a){c.exports="/* * Description : Array and textureless GLSL 2D/3D/4D simplex  *            noise functions. *     Author : Ian McEwan, Ashima Arts. * Maintainer : stegu *   Lastmod : 20110822 (ijm) *   License : Copyright (C) 2011 Ashima Arts. All rights reserved. *             Distributed under the MIT License. See LICENSE file. *             https://github.com/ashima/webgl-noise *             https://github.com/stegu/webgl-noise */vec3 mod289(vec3 x) {  return x - floor(x * (1.0 / 289.0)) * 289.0;}vec4 mod289(vec4 x) {  return x - floor(x * (1.0 / 289.0)) * 289.0;}vec4 permute(vec4 x) {     return mod289(((x*34.0)+1.0)*x);}vec4 taylorInvSqrt(vec4 r){  return 1.79284291400159 - 0.85373472095314 * r;}float snoise(vec3 v)  {   const vec2  C = vec2(1.0/6.0, 1.0/3.0) ;  const vec4  D = vec4(0.0, 0.5, 1.0, 2.0);  vec3 i  = floor(v + dot(v, C.yyy) );  vec3 x0 =   v - i + dot(i, C.xxx) ;  vec3 g = step(x0.yzx, x0.xyz);  vec3 l = 1.0 - g;  vec3 i1 = min( g.xyz, l.zxy );  vec3 i2 = max( g.xyz, l.zxy );  vec3 x1 = x0 - i1 + C.xxx;  vec3 x2 = x0 - i2 + C.yyy;  vec3 x3 = x0 - D.yyy;  i = mod289(i);   vec4 p = permute( permute( permute(              i.z + vec4(0.0, i1.z, i2.z, 1.0 ))           + i.y + vec4(0.0, i1.y, i2.y, 1.0 ))            + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));  float n_ = 0.142857142857;  vec3  ns = n_ * D.wyz - D.xzx;  vec4 j = p - 49.0 * floor(p * ns.z * ns.z);  vec4 x_ = floor(j * ns.z);  vec4 y_ = floor(j - 7.0 * x_ );  vec4 x = x_ *ns.x + ns.yyyy;  vec4 y = y_ *ns.x + ns.yyyy;  vec4 h = 1.0 - abs(x) - abs(y);  vec4 b0 = vec4( x.xy, y.xy );  vec4 b1 = vec4( x.zw, y.zw );  vec4 s0 = floor(b0)*2.0 + 1.0;  vec4 s1 = floor(b1)*2.0 + 1.0;  vec4 sh = -step(h, vec4(0.0));  vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;  vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;  vec3 p0 = vec3(a0.xy,h.x);  vec3 p1 = vec3(a0.zw,h.y);  vec3 p2 = vec3(a1.xy,h.z);  vec3 p3 = vec3(a1.zw,h.w);  vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));  p0 *= norm.x;  p1 *= norm.y;  p2 *= norm.z;  p3 *= norm.w;  vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);  m = m * m;  return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1),                                 dot(p2,x2), dot(p3,x3) ) );  }/** * @copyright 2016 Apple Inc. All rights reserved.*//*  time -> fw  resolution -> fj  speed -> ee  timeSpeed -> kq  scale -> et  thickness -> dq  envelopeStart -> ww  envelope2 -> te  offset -> jf  limit -> qd */varying vec2 vUV;uniform float fw;uniform vec2 fj;uniform float et;uniform float dq;uniform float ee;uniform float kq;uniform vec2 qd;uniform vec2 jf;uniform float ww;uniform float qa;uniform float te;void main() {float gd = snoise(vec3(0., 0., fw));float wa = snoise(vec3(0., 0., kq*3.))*0.3+0.7;float qf = snoise(vec3(0., 0., kq*3.))*0.1+0.9;vec2  dz = vec2(kq+gd*0.1*ee,(vUV.x-0.5)/et/qf);vec3 yf = abs(vec3(snoise(vec3(dz, 1.0)), snoise(vec3(dz, 5.0)), snoise(vec3(dz, 9.0))))*0.5;yf *= min(1., smoothstep(    ww,    qa+ww, vUV.x)            * smoothstep( 1.-ww, 1.-ww-qa, vUV.x))* wa;float p = abs(vUV.y-0.5);vec3 kp = smoothstep(yf,yf-(dq/fj.y),vec3(p));vec3 dr = vec3(255., 69., 61.)/255.;vec3 lr = vec3(255., 103., 92.)/255.;vec3 dg = vec3(50., 201., 69.)/255.;vec3 lg = vec3(164., 255., 196.)/255.;vec3 db = vec3(21., 124., 255.)/255.;vec3 lb = vec3(80., 227., 255.)/255.;vec3 rr   = mix(dr, lr, yf.x*6.);vec3 gg   = mix(dg, lg, yf.y*6.);vec3 bb   = mix(db, lb, yf.z*6.);vec4 xx       = vec4(rr, 1. )*( kp.x);vec4 yy       = vec4(gg, 1. )*( kp.y);vec4 zz       = vec4(bb, 1. )*( kp.z); gl_FragColor =  1.-(1.-xx)*(1.-yy)*(1.-zz);}"
},{}],378:[function(b,c,a){c.exports=d;function d(f){var g=new Float32Array(16);
g[0]=f[0];g[1]=f[1];g[2]=f[2];g[3]=f[3];g[4]=f[4];g[5]=f[5];g[6]=f[6];g[7]=f[7];
g[8]=f[8];g[9]=f[9];g[10]=f[10];g[11]=f[11];g[12]=f[12];g[13]=f[13];g[14]=f[14];
g[15]=f[15];return g}},{}],379:[function(b,d,a){d.exports=c;function c(){var f=new Float32Array(16);
f[0]=1;f[1]=0;f[2]=0;f[3]=0;f[4]=0;f[5]=1;f[6]=0;f[7]=0;f[8]=0;f[9]=0;f[10]=1;f[11]=0;
f[12]=0;f[13]=0;f[14]=0;f[15]=1;return f}},{}],380:[function(b,c,a){c.exports=d;
function d(t,r,o){var l=r[0],k=r[1],j=r[2],m=r[3],u=l+l,f=k+k,n=j+j,i=l*u,h=l*f,g=l*n,s=k*f,p=k*n,C=j*n,D=m*u,B=m*f,A=m*n;
t[0]=1-(s+C);t[1]=h+A;t[2]=g-B;t[3]=0;t[4]=h-A;t[5]=1-(i+C);t[6]=p+D;t[7]=0;t[8]=g+B;
t[9]=p-D;t[10]=1-(i+s);t[11]=0;t[12]=o[0];t[13]=o[1];t[14]=o[2];t[15]=1;return t
}},{}],381:[function(c,d,b){d.exports=a;function a(f){f[0]=1;f[1]=0;f[2]=0;f[3]=0;
f[4]=0;f[5]=1;f[6]=0;f[7]=0;f[8]=0;f[9]=0;f[10]=1;f[11]=0;f[12]=0;f[13]=0;f[14]=0;
f[15]=1;return f}},{}],382:[function(b,c,a){c.exports=d;function d(y,D){var H=D[0],F=D[1],E=D[2],B=D[3],j=D[4],i=D[5],h=D[6],g=D[7],x=D[8],w=D[9],v=D[10],u=D[11],J=D[12],I=D[13],G=D[14],C=D[15],t=H*i-F*j,s=H*h-E*j,r=H*g-B*j,q=F*h-E*i,p=F*g-B*i,o=E*g-B*h,n=x*I-w*J,m=x*G-v*J,l=x*C-u*J,k=w*G-v*I,A=w*C-u*I,z=v*C-u*G,f=t*z-s*A+r*k+q*l-p*m+o*n;
if(!f){return null}f=1/f;y[0]=(i*z-h*A+g*k)*f;y[1]=(E*A-F*z-B*k)*f;y[2]=(I*o-G*p+C*q)*f;
y[3]=(v*p-w*o-u*q)*f;y[4]=(h*l-j*z-g*m)*f;y[5]=(H*z-E*l+B*m)*f;y[6]=(G*r-J*o-C*s)*f;
y[7]=(x*o-v*r+u*s)*f;y[8]=(j*A-i*l+g*n)*f;y[9]=(F*l-H*A-B*n)*f;y[10]=(J*p-I*r+C*t)*f;
y[11]=(w*r-x*p-u*t)*f;y[12]=(i*m-j*k-h*n)*f;y[13]=(H*k-F*m+E*n)*f;y[14]=(I*s-J*q-G*t)*f;
y[15]=(x*q-w*s+v*t)*f;return y}},{}],383:[function(c,d,b){d.exports=a;function a(r,v,s){var z=v[0],y=v[1],w=v[2],t=v[3],l=v[4],j=v[5],h=v[6],f=v[7],q=v[8],p=v[9],o=v[10],n=v[11],B=v[12],A=v[13],x=v[14],u=v[15];
var m=s[0],k=s[1],i=s[2],g=s[3];r[0]=m*z+k*l+i*q+g*B;r[1]=m*y+k*j+i*p+g*A;r[2]=m*w+k*h+i*o+g*x;
r[3]=m*t+k*f+i*n+g*u;m=s[4];k=s[5];i=s[6];g=s[7];r[4]=m*z+k*l+i*q+g*B;r[5]=m*y+k*j+i*p+g*A;
r[6]=m*w+k*h+i*o+g*x;r[7]=m*t+k*f+i*n+g*u;m=s[8];k=s[9];i=s[10];g=s[11];r[8]=m*z+k*l+i*q+g*B;
r[9]=m*y+k*j+i*p+g*A;r[10]=m*w+k*h+i*o+g*x;r[11]=m*t+k*f+i*n+g*u;m=s[12];k=s[13];
i=s[14];g=s[15];r[12]=m*z+k*l+i*q+g*B;r[13]=m*y+k*j+i*p+g*A;r[14]=m*w+k*h+i*o+g*x;
r[15]=m*t+k*f+i*n+g*u;return r}},{}],384:[function(c,d,a){d.exports=b;function b(E,L,N,f){var p=f[0],o=f[1],n=f[2],F=Math.sqrt(p*p+o*o+n*n),w,J,v,P,O,M,K,m,l,k,j,D,C,B,A,u,r,q,I,H,G,i,h,g;
if(Math.abs(F)<0.000001){return null}F=1/F;p*=F;o*=F;n*=F;w=Math.sin(N);J=Math.cos(N);
v=1-J;P=L[0];O=L[1];M=L[2];K=L[3];m=L[4];l=L[5];k=L[6];j=L[7];D=L[8];C=L[9];B=L[10];
A=L[11];u=p*p*v+J;r=o*p*v+n*w;q=n*p*v-o*w;I=p*o*v-n*w;H=o*o*v+J;G=n*o*v+p*w;i=p*n*v+o*w;
h=o*n*v-p*w;g=n*n*v+J;E[0]=P*u+m*r+D*q;E[1]=O*u+l*r+C*q;E[2]=M*u+k*r+B*q;E[3]=K*u+j*r+A*q;
E[4]=P*I+m*H+D*G;E[5]=O*I+l*H+C*G;E[6]=M*I+k*H+B*G;E[7]=K*I+j*H+A*G;E[8]=P*i+m*h+D*g;
E[9]=O*i+l*h+C*g;E[10]=M*i+k*h+B*g;E[11]=K*i+j*h+A*g;if(L!==E){E[12]=L[12];E[13]=L[13];
E[14]=L[14];E[15]=L[15]}return E}},{}],385:[function(c,d,a){d.exports=b;function b(f,m,l){var r=Math.sin(l),k=Math.cos(l),q=m[4],p=m[5],o=m[6],n=m[7],j=m[8],i=m[9],h=m[10],g=m[11];
if(m!==f){f[0]=m[0];f[1]=m[1];f[2]=m[2];f[3]=m[3];f[12]=m[12];f[13]=m[13];f[14]=m[14];
f[15]=m[15]}f[4]=q*k+j*r;f[5]=p*k+i*r;f[6]=o*k+h*r;f[7]=n*k+g*r;f[8]=j*k-q*r;f[9]=i*k-p*r;
f[10]=h*k-o*r;f[11]=g*k-n*r;return f}},{}],386:[function(c,d,b){d.exports=a;function a(j,q,p){var r=Math.sin(p),o=Math.cos(p),i=q[0],h=q[1],g=q[2],f=q[3],n=q[8],m=q[9],l=q[10],k=q[11];
if(q!==j){j[4]=q[4];j[5]=q[5];j[6]=q[6];j[7]=q[7];j[12]=q[12];j[13]=q[13];j[14]=q[14];
j[15]=q[15]}j[0]=i*o-n*r;j[1]=h*o-m*r;j[2]=g*o-l*r;j[3]=f*o-k*r;j[8]=i*r+n*o;j[9]=h*r+m*o;
j[10]=g*r+l*o;j[11]=f*r+k*o;return j}},{}],387:[function(c,d,b){d.exports=a;function a(j,m,l){var r=Math.sin(l),k=Math.cos(l),i=m[0],h=m[1],g=m[2],f=m[3],q=m[4],p=m[5],o=m[6],n=m[7];
if(m!==j){j[8]=m[8];j[9]=m[9];j[10]=m[10];j[11]=m[11];j[12]=m[12];j[13]=m[13];j[14]=m[14];
j[15]=m[15]}j[0]=i*k+q*r;j[1]=h*k+p*r;j[2]=g*k+o*r;j[3]=f*k+n*r;j[4]=q*k-i*r;j[5]=p*k-h*r;
j[6]=o*k-g*r;j[7]=n*k-f*r;return j}},{}],388:[function(b,c,a){c.exports=d;function d(i,g,h){var f=h[0],k=h[1],j=h[2];
i[0]=g[0]*f;i[1]=g[1]*f;i[2]=g[2]*f;i[3]=g[3]*f;i[4]=g[4]*k;i[5]=g[5]*k;i[6]=g[6]*k;
i[7]=g[7]*k;i[8]=g[8]*j;i[9]=g[9]*j;i[10]=g[10]*j;i[11]=g[11]*j;i[12]=g[12];i[13]=g[13];
i[14]=g[14];i[15]=g[15];return i}},{}],389:[function(b,c,a){c.exports=d;function d(r,t,m){var l=m[0],k=m[1],j=m[2],A,w,u,s,i,h,g,f,q,p,o,n;
if(t===r){r[12]=t[0]*l+t[4]*k+t[8]*j+t[12];r[13]=t[1]*l+t[5]*k+t[9]*j+t[13];r[14]=t[2]*l+t[6]*k+t[10]*j+t[14];
r[15]=t[3]*l+t[7]*k+t[11]*j+t[15]}else{A=t[0];w=t[1];u=t[2];s=t[3];i=t[4];h=t[5];
g=t[6];f=t[7];q=t[8];p=t[9];o=t[10];n=t[11];r[0]=A;r[1]=w;r[2]=u;r[3]=s;r[4]=i;
r[5]=h;r[6]=g;r[7]=f;r[8]=q;r[9]=p;r[10]=o;r[11]=n;r[12]=A*l+i*k+q*j+t[12];r[13]=w*l+h*k+p*j+t[13];
r[14]=u*l+g*k+o*j+t[14];r[15]=s*l+f*k+n*j+t[15]}return r}},{}],390:[function(b,c,a){c.exports=d;
function d(i,h){if(i===h){var m=h[1],k=h[2],j=h[3],f=h[6],l=h[7],g=h[11];i[1]=h[4];
i[2]=h[8];i[3]=h[12];i[4]=m;i[6]=h[9];i[7]=h[13];i[8]=k;i[9]=f;i[11]=h[14];i[12]=j;
i[13]=l;i[14]=g}else{i[0]=h[0];i[1]=h[4];i[2]=h[8];i[3]=h[12];i[4]=h[1];i[5]=h[5];
i[6]=h[9];i[7]=h[13];i[8]=h[2];i[9]=h[6];i[10]=h[10];i[11]=h[14];i[12]=h[3];i[13]=h[7];
i[14]=h[11];i[15]=h[15]}return i}},{}],391:[function(b,d,a){d.exports=c;function c(){var f=new Float32Array(3);
f[0]=0;f[1]=0;f[2]=0;return f}},{}],392:[function(b,c,a){c.exports=d;function d(g,l,k){var f=l[0],n=l[1],m=l[2],j=k[0],i=k[1],h=k[2];
g[0]=n*h-m*i;g[1]=m*j-f*h;g[2]=f*i-n*j;return g}},{}],393:[function(c,d,b){d.exports=a;
function a(g,f){return g[0]*f[0]+g[1]*f[1]+g[2]*f[2]}},{}],394:[function(b,c,a){c.exports=d;
function d(f,i,h){var g=new Float32Array(3);g[0]=f;g[1]=i;g[2]=h;return g}},{}],395:[function(b,c,a){c.exports=d;
function d(g){var f=g[0],i=g[1],h=g[2];return Math.sqrt(f*f+i*i+h*h)}},{}],396:[function(c,d,b){d.exports=a;
function a(i,h){var g=h[0],k=h[1],j=h[2];var f=g*g+k*k+j*j;if(f>0){f=1/Math.sqrt(f);
i[0]=h[0]*f;i[1]=h[1]*f;i[2]=h[2]*f}return i}},{}],397:[function(b,d,a){d.exports=c;
function c(){var f=new Float32Array(4);f[0]=0;f[1]=0;f[2]=0;f[3]=0;return f}},{}],398:[function(b,c,a){c.exports=d;
function d(f,j,i,g){var h=new Float32Array(4);h[0]=f;h[1]=j;h[2]=i;h[3]=g;return h
}},{}],399:[function(b,d,a){d.exports=c;function c(j,i,g){var f=i[0],l=i[1],k=i[2],h=i[3];
j[0]=g[0]*f+g[4]*l+g[8]*k+g[12]*h;j[1]=g[1]*f+g[5]*l+g[9]*k+g[13]*h;j[2]=g[2]*f+g[6]*l+g[10]*k+g[14]*h;
j[3]=g[3]*f+g[7]*l+g[11]*k+g[15]*h;return j}},{}],400:[function(b,c,a){c.exports={Transform:b("./ac-transform/Transform")}
},{"./ac-transform/Transform":401}],401:[function(l,d,H){var k=l("./gl-matrix/mat4");
var b=l("./gl-matrix/vec3");var a=l("./gl-matrix/vec4");var f=Math.PI/180;var c=180/Math.PI;
var F=0,y=0,D=1,x=1,B=2,z=3;var j=4,w=4,i=5,v=5,h=6,g=7;var t=8,q=9,o=10,n=11;var G=12,u=12,E=13,s=13,C=14,A=15;
function p(){this.m=k.create()}var r=p.prototype;r.rotateX=function(J){var I=f*J;
k.rotateX(this.m,this.m,I);return this};r.rotateY=function(J){var I=f*J;k.rotateY(this.m,this.m,I);
return this};r.rotateZ=function(J){var I=f*J;k.rotateZ(this.m,this.m,I);return this
};r.rotate=r.rotateZ;r.rotate3d=function(J,M,L,K){if(M===null||M===undefined){M=J
}if(L===null||M===undefined){L=J}var I=f*K;k.rotate(this.m,this.m,I,[J,M,L]);return this
};r.rotateAxisAngle=r.rotate3d;r.scale=function(J,I){I=I||J;k.scale(this.m,this.m,[J,I,1]);
return this};r.scaleX=function(I){k.scale(this.m,this.m,[I,1,1]);return this};r.scaleY=function(I){k.scale(this.m,this.m,[1,I,1]);
return this};r.scaleZ=function(I){k.scale(this.m,this.m,[1,1,I]);return this};r.scale3d=function(K,J,I){k.scale(this.m,this.m,[K,J,I]);
return this};r.skew=function(K,J){if(J===null||J===undefined){return this.skewX(K)
}K=f*K;J=f*J;var I=k.create();I[w]=Math.tan(K);I[x]=Math.tan(J);k.multiply(this.m,this.m,I);
return this};r.skewX=function(J){J=f*J;var I=k.create();I[w]=Math.tan(J);k.multiply(this.m,this.m,I);
return this};r.skewY=function(J){J=f*J;var I=k.create();I[x]=Math.tan(J);k.multiply(this.m,this.m,I);
return this};r.translate=function(J,I){I=I||0;k.translate(this.m,this.m,[J,I,0]);
return this};r.translate3d=function(J,I,K){k.translate(this.m,this.m,[J,I,K]);return this
};r.translateX=function(I){k.translate(this.m,this.m,[I,0,0]);return this};r.translateY=function(I){k.translate(this.m,this.m,[0,I,0]);
return this};r.translateZ=function(I){k.translate(this.m,this.m,[0,0,I]);return this
};r.perspective=function(J){var I=k.create();if(J!==0){I[n]=-1/J}k.multiply(this.m,this.m,I)
};r.inverse=function(){var I=this.clone();I.m=k.invert(I.m,this.m);return I};r.reset=function(){k.identity(this.m);
return this};r.getTranslateXY=function(){var I=this.m;if(this.isAffine()){return[I[u],I[s]]
}return[I[G],I[E]]};r.getTranslateXYZ=function(){var I=this.m;if(this.isAffine()){return[I[u],I[s],0]
}return[I[G],I[E],I[C]]};r.getTranslateX=function(){var I=this.m;if(this.isAffine()){return I[u]
}return I[G]};r.getTranslateY=function(){var I=this.m;if(this.isAffine()){return I[s]
}return I[E]};r.getTranslateZ=function(){var I=this.m;if(this.isAffine()){return 0
}return I[C]};r.clone=function(){var I=new p();I.m=k.clone(this.m);return I};r.toArray=function(){var I=this.m;
if(this.isAffine()){return[I[y],I[x],I[w],I[v],I[u],I[s]]}return[I[F],I[D],I[B],I[z],I[j],I[i],I[h],I[g],I[t],I[q],I[o],I[n],I[G],I[E],I[C],I[A]]
};r.fromArray=function(I){this.m=Array.prototype.slice.call(I);return this};r.setMatrixValue=function(J){J=String(J).trim();
var I=k.create();if(J==="none"){this.m=I;return this}var L=J.slice(0,J.indexOf("(")),M,K;
if(L==="matrix3d"){M=J.slice(9,-1).split(",");for(K=0;K<M.length;K++){I[K]=parseFloat(M[K])
}}else{if(L==="matrix"){M=J.slice(7,-1).split(",");for(K=M.length;K--;){M[K]=parseFloat(M[K])
}I[F]=M[0];I[D]=M[1];I[G]=M[4];I[j]=M[2];I[i]=M[3];I[E]=M[5]}else{throw new TypeError("Invalid Matrix Value")
}}this.m=I;return this};var m=function(I){return Math.abs(I)<0.0001};r.decompose=function(T){T=T||false;
var X=k.clone(this.m);var O=b.create();var ad=b.create();var L=b.create();var Q=a.create();
var J=a.create();var K=b.create();for(var Z=0;Z<16;Z++){X[Z]/=X[A]}var V=k.clone(X);
V[z]=0;V[g]=0;V[n]=0;V[A]=1;var aa=X[3],M=X[7],P=X[11],af=X[12],ae=X[13],ac=X[14],ab=X[15];
var S=a.create();if(!m(X[z])||!m(X[g])||!m(X[n])){S[0]=X[z];S[1]=X[g];S[2]=X[n];
S[3]=X[A];var Y=k.invert(k.create(),V);var R=k.transpose(k.create(),Y);Q=a.transformMat4(Q,S,R)
}else{Q=a.fromValues(0,0,0,1)}O[0]=af;O[1]=ae;O[2]=ac;var N=[b.create(),b.create(),b.create()];
N[0][0]=X[0];N[0][1]=X[1];N[0][2]=X[2];N[1][0]=X[4];N[1][1]=X[5];N[1][2]=X[6];N[2][0]=X[8];
N[2][1]=X[9];N[2][2]=X[10];ad[0]=b.length(N[0]);b.normalize(N[0],N[0]);L[0]=b.dot(N[0],N[1]);
N[1]=this._combine(N[1],N[0],1,-L[0]);ad[1]=b.length(N[1]);b.normalize(N[1],N[1]);
L[0]/=ad[1];L[1]=b.dot(N[0],N[2]);N[2]=this._combine(N[2],N[0],1,-L[1]);L[2]=b.dot(N[1],N[2]);
N[2]=this._combine(N[2],N[1],1,-L[2]);ad[2]=b.length(N[2]);b.normalize(N[2],N[2]);
L[1]/=ad[2];L[2]/=ad[2];var W=b.cross(b.create(),N[1],N[2]);if(b.dot(N[0],W)<0){for(Z=0;
Z<3;Z++){ad[Z]*=-1;N[Z][0]*=-1;N[Z][1]*=-1;N[Z][2]*=-1}}J[0]=0.5*Math.sqrt(Math.max(1+N[0][0]-N[1][1]-N[2][2],0));
J[1]=0.5*Math.sqrt(Math.max(1-N[0][0]+N[1][1]-N[2][2],0));J[2]=0.5*Math.sqrt(Math.max(1-N[0][0]-N[1][1]+N[2][2],0));
J[3]=0.5*Math.sqrt(Math.max(1+N[0][0]+N[1][1]+N[2][2],0));if(N[2][1]>N[1][2]){J[0]=-J[0]
}if(N[0][2]>N[2][0]){J[1]=-J[1]}if(N[1][0]>N[0][1]){J[2]=-J[2]}var I=a.fromValues(J[0],J[1],J[2],2*Math.acos(J[3]));
var U=this._rotationFromQuat(J);if(T){L[0]=Math.round(L[0]*c*100)/100;L[1]=Math.round(L[1]*c*100)/100;
L[2]=Math.round(L[2]*c*100)/100;U[0]=Math.round(U[0]*c*100)/100;U[1]=Math.round(U[1]*c*100)/100;
U[2]=Math.round(U[2]*c*100)/100;I[3]=Math.round(I[3]*c*100)/100}return{translation:O,scale:ad,skew:L,perspective:Q,quaternion:J,eulerRotation:U,axisAngle:I}
};r.recompose=function(O,N,K,L,M){O=O||b.create();N=N||b.create();K=K||b.create();
L=L||a.create();M=M||a.create();var J=k.fromRotationTranslation(k.create(),M,O);
J[z]=L[0];J[g]=L[1];J[n]=L[2];J[A]=L[3];var I=k.create();if(K[2]!==0){I[q]=K[2];
k.multiply(J,J,I)}if(K[1]!==0){I[q]=0;I[t]=K[1];k.multiply(J,J,I)}if(K[0]){I[t]=0;
I[4]=K[0];k.multiply(J,J,I)}k.scale(J,J,N);this.m=J;return this};r.isAffine=function(){return(this.m[B]===0&&this.m[z]===0&&this.m[h]===0&&this.m[g]===0&&this.m[t]===0&&this.m[q]===0&&this.m[o]===1&&this.m[n]===0&&this.m[C]===0&&this.m[A]===1)
};r.toString=function(){var I=this.m;if(this.isAffine()){return"matrix("+I[y]+", "+I[x]+", "+I[w]+", "+I[v]+", "+I[u]+", "+I[s]+")"
}return"matrix3d("+I[F]+", "+I[D]+", "+I[B]+", "+I[z]+", "+I[j]+", "+I[i]+", "+I[h]+", "+I[g]+", "+I[t]+", "+I[q]+", "+I[o]+", "+I[n]+", "+I[G]+", "+I[E]+", "+I[C]+", "+I[A]+")"
};r.toCSSString=r.toString;r._combine=function(J,M,L,K){var I=b.create();I[0]=(L*J[0])+(K*M[0]);
I[1]=(L*J[1])+(K*M[1]);I[2]=(L*J[2])+(K*M[2]);return I};r._matrix2dToMat4=function(I){var K=k.create();
for(var L=0;L<4;L++){for(var J=0;J<4;J++){K[L*4+J]=I[L][J]}}return K};r._mat4ToMatrix2d=function(L){var I=[];
for(var K=0;K<4;K++){I[K]=[];for(var J=0;J<4;J++){I[K][J]=L[K*4+J]}}return I};r._rotationFromQuat=function(I){var M=I[3]*I[3];
var L=I[0]*I[0];var K=I[1]*I[1];var J=I[2]*I[2];var R=L+K+J+M;var N=I[0]*I[1]+I[2]*I[3];
var Q,P,O;if(N>0.499*R){P=2*Math.atan2(I[0],I[3]);O=Math.PI/2;Q=0;return b.fromValues(Q,P,O)
}if(N<-0.499*R){P=-2*Math.atan2(I[0],I[3]);O=-Math.PI/2;Q=0;return b.fromValues(Q,P,O)
}P=Math.atan2(2*I[1]*I[3]-2*I[0]*I[2],L-K-J+M);O=Math.asin(2*N/R);Q=Math.atan2(2*I[0]*I[3]-2*I[1]*I[2],-L+K-J+M);
return b.fromValues(Q,P,O)};d.exports=p},{"./gl-matrix/mat4":402,"./gl-matrix/vec3":403,"./gl-matrix/vec4":404}],402:[function(c,d,a){var b={create:c("gl-mat4/create"),rotate:c("gl-mat4/rotate"),rotateX:c("gl-mat4/rotateX"),rotateY:c("gl-mat4/rotateY"),rotateZ:c("gl-mat4/rotateZ"),scale:c("gl-mat4/scale"),multiply:c("gl-mat4/multiply"),translate:c("gl-mat4/translate"),invert:c("gl-mat4/invert"),clone:c("gl-mat4/clone"),transpose:c("gl-mat4/transpose"),identity:c("gl-mat4/identity"),fromRotationTranslation:c("gl-mat4/fromRotationTranslation")};
d.exports=b},{"gl-mat4/clone":378,"gl-mat4/create":379,"gl-mat4/fromRotationTranslation":380,"gl-mat4/identity":381,"gl-mat4/invert":382,"gl-mat4/multiply":383,"gl-mat4/rotate":384,"gl-mat4/rotateX":385,"gl-mat4/rotateY":386,"gl-mat4/rotateZ":387,"gl-mat4/scale":388,"gl-mat4/translate":389,"gl-mat4/transpose":390}],403:[function(b,d,a){var c={create:b("gl-vec3/create"),dot:b("gl-vec3/dot"),normalize:b("gl-vec3/normalize"),length:b("gl-vec3/length"),cross:b("gl-vec3/cross"),fromValues:b("gl-vec3/fromValues")};
d.exports=c},{"gl-vec3/create":391,"gl-vec3/cross":392,"gl-vec3/dot":393,"gl-vec3/fromValues":394,"gl-vec3/length":395,"gl-vec3/normalize":396}],404:[function(c,d,a){var b={create:c("gl-vec4/create"),transformMat4:c("gl-vec4/transformMat4"),fromValues:c("gl-vec4/fromValues")};
d.exports=b},{"gl-vec4/create":397,"gl-vec4/fromValues":398,"gl-vec4/transformMat4":399}],405:[function(b,c,a){var d={ua:window.navigator.userAgent,platform:window.navigator.platform,vendor:window.navigator.vendor};
c.exports=b("./parseUserAgent")(d)},{"./parseUserAgent":408}],406:[function(b,c,a){c.exports={browser:{safari:false,chrome:false,firefox:false,ie:false,opera:false,android:false,edge:false,version:{name:"",major:0,minor:0,patch:0,documentMode:false}},os:{osx:false,ios:false,android:false,windows:false,linux:false,fireos:false,chromeos:false,version:{name:"",major:0,minor:0,patch:0}}}
},{}],407:[function(b,c,a){c.exports={browser:[{name:"edge",userAgent:"Edge",version:["rv","Edge"],test:function(d){return(d.ua.indexOf("Edge")>-1||d.ua==="Mozilla/5.0 (Windows NT 10.0; Win64; x64)")
}},{name:"chrome",userAgent:"Chrome"},{name:"firefox",test:function(d){return(d.ua.indexOf("Firefox")>-1&&d.ua.indexOf("Opera")===-1)
},version:"Firefox"},{name:"android",userAgent:"Android"},{name:"safari",test:function(d){return(d.ua.indexOf("Safari")>-1&&d.vendor.indexOf("Apple")>-1)
},version:"Version"},{name:"ie",test:function(d){return(d.ua.indexOf("IE")>-1||d.ua.indexOf("Trident")>-1)
},version:["MSIE","rv"],parseDocumentMode:function(){var d=false;if(document.documentMode){d=parseInt(document.documentMode,10)
}return d}},{name:"opera",userAgent:"Opera",version:["Version","Opera"]}],os:[{name:"windows",test:function(d){return(d.platform.indexOf("Win")>-1)
},version:"Windows NT"},{name:"osx",userAgent:"Mac",test:function(d){return(d.platform.indexOf("Mac")>-1)
}},{name:"ios",test:function(d){return(d.ua.indexOf("iPhone")>-1||d.ua.indexOf("iPad")>-1)
},version:["iPhone OS","CPU OS"]},{name:"linux",userAgent:"Linux",test:function(d){return(d.platform.indexOf("Linux")>-1&&d.ua.indexOf("Android")===-1)
}},{name:"fireos",test:function(d){return(d.ua.indexOf("Firefox")>-1&&d.ua.indexOf("Mobile")>-1)
},version:"rv"},{name:"android",userAgent:"Android"},{name:"chromeos",userAgent:"CrOS"}]}
},{}],408:[function(b,a,d){var c=b("./defaults");var h=b("./dictionary");function g(k){return new RegExp(k+"[a-zA-Z\\s/:]+([0-9_.]+)","i")
}function f(n,m){if(typeof n.parseVersion==="function"){return n.parseVersion(m)
}else{var p=n.version||n.userAgent;if(typeof p==="string"){p=[p]}var o=p.length;
var k;for(var l=0;l<o;l++){k=m.match(g(p[l]));if(k&&k.length>1){return k[1].replace(/_/g,".")
}}}}function j(m,r,p){var o=m.length;var q;var k;for(var n=0;n<o;n++){if(typeof m[n].test==="function"){if(m[n].test(p)===true){q=m[n].name
}}else{if(p.ua.indexOf(m[n].userAgent)>-1){q=m[n].name}}if(q){r[q]=true;k=f(m[n],p.ua);
if(typeof k==="string"){var l=k.split(".");r.version.name=k;if(l&&l.length>0){r.version.major=parseInt(l[0]||0);
r.version.minor=parseInt(l[1]||0);r.version.patch=parseInt(l[2]||0)}}else{if(q==="edge"){r.version.name="12.0.0";
r.version.major="12";r.version.minor="0";r.version.patch="0"}}if(typeof m[n].parseDocumentMode==="function"){r.version.documentMode=m[n].parseDocumentMode()
}return r}}return r}function i(l){var k={};k.browser=j(h.browser,c.browser,l);k.os=j(h.os,c.os,l);
return k}a.exports=i},{"./defaults":406,"./dictionary":407}],409:[function(b,c,a){arguments[4][11][0].apply(a,arguments)
},{"./ac-event-emitter-micro/EventEmitterMicro":410,dup:11}],410:[function(b,c,a){arguments[4][12][0].apply(a,arguments)
},{dup:12}],411:[function(b,a,f){b("@marcom/ac-polyfills/Function/prototype.bind");
b("@marcom/ac-polyfills/Object/keys");b("@marcom/ac-polyfills/Object/create");var l=b("@marcom/ac-event-emitter-micro").EventEmitterMicro;
var i=b("@marcom/ac-dom-events/utils/addEventListener");var h=b("@marcom/ac-feature/mediaQueriesAvailable");
var c="viewport-emitter";var j="::before";var d="only screen and (-webkit-min-device-pixel-ratio: 1.5), screen and (min-resolution: 1.5dppx), screen and (min-resolution: 144dpi)";
function k(m){l.call(this);this._initializeElement(m);if(h()){this._updateViewport=this._updateViewport.bind(this);
i(window,"resize",this._updateViewport);i(window,"orientationchange",this._updateViewport);
this._retinaQuery=window.matchMedia(d);this._updateRetina();if(this._retinaQuery.addListener){this._updateRetina=this._updateRetina.bind(this);
this._retinaQuery.addListener(this._updateRetina)}}this._updateViewport()}var g=k.prototype=Object.create(l.prototype);
g.viewport=false;g.retina=false;g._initializeElement=function(n){var m;n=n||c;m=document.getElementById(n);
if(!m){m=document.createElement("div");m.id=n;m=document.body.appendChild(m)}this._el=m
};g._getElementContent=function(){var m;if("currentStyle" in this._el){m=this._el.currentStyle["x-content"]
}else{this._invalidateStyles();m=window.getComputedStyle(this._el,j).content}if(m){m=m.replace(/["']/g,"")
}if(m){return m}return false};g._updateViewport=function(){var m=this.viewport;
var n;var o;this.viewport=this._getElementContent();if(this.viewport){this.viewport=this.viewport.split(":").pop()
}if(m&&this.viewport!==m){o={from:m,to:this.viewport};this.trigger("change",o);
this.trigger("from:"+m,o);this.trigger("to:"+this.viewport,o)}};g._updateRetina=function(m){var n=this.retina;
this.retina=this._retinaQuery.matches;if(n!==this.retina){this.trigger("retinachange",{from:n,to:this.retina})
}};g._invalidateStyles=function(){document.documentElement.clientWidth;this._el.innerHTML=(this._el.innerHTML===" ")?" ":" ";
document.documentElement.clientWidth};a.exports=k},{"@marcom/ac-dom-events/utils/addEventListener":26,"@marcom/ac-event-emitter-micro":409,"@marcom/ac-feature/mediaQueriesAvailable":127,"@marcom/ac-polyfills/Function/prototype.bind":undefined,"@marcom/ac-polyfills/Object/create":undefined,"@marcom/ac-polyfills/Object/keys":undefined}],412:[function(c,d,b){var a=c("./ViewportEmitter");
d.exports=new a()},{"./ViewportEmitter":411}],413:[function(d,c,h){var f=d("@marcom/ac-jetpack-lib/core/BaseComponent");
var a=d("./ProgressiveImageComponent");var k=d("@marcom/ac-gsap").TweenMax;var b=d("@marcom/ac-gsap").TimelineLite;
var i=d("../helpers/MathUtils");function g(q,s,l,p,m,r,n){f.apply(this,arguments);
this.imagesLoadedAndEngaged=this.imagesLoadedAndEngaged.bind(this);this.onLifestyleTweenUpdate=this.onLifestyleTweenUpdate.bind(this);
this.options={};this.standardItems=[].slice.call(this.element.querySelectorAll(".build-in-item"));
this.lifestyleImage=this.element.querySelector(".build-in-image-lifestyle");this.screenImage=this.element.querySelector(".build-in-image-screen");
this.attrs=this.element.getAttribute("data-build-in-attrs");var o=[];o.push(this.trackImagesLoaded());
o.push(this.trackOnEngaged());Promise.all(o).then(this.imagesLoadedAndEngaged);
if(this.attrs){this.options=Object.assign({},this.options,JSON.parse(this.attrs))
}}var j=g.prototype=Object.create(f.prototype);g.prototype.constructor=g;j.createTimeline=function(){this.tl=new b({paused:true,onComplete:this.unsetWillChange,onCompleteScope:this});
if(this.standardItems.length>0){this.tl.staggerTo(this.standardItems,0.7,{opacity:1,y:0,force3D:true,onComplete:function m(){var n=this.target;
n.style.willChange="";TweenLite.set(n,{force3D:false})}},0.1)}this.tl.addLabel("screenIn","-=0.6");
if(this.screenImage){this.tl.to(this.screenImage,1,{opacity:1,force3D:true,onComplete:function m(){var n=this.target;
n.style.willChange="";TweenLite.set(n,{force3D:false})}},"screenIn")}if(this.lifestyleImage){var l=this.lifestyleImage;
this.tl.from({},1,{onUpdate:this.onLifestyleTweenUpdate,onUpdateParams:["{self}"],onComplete:function m(){var n=l;
n.style.willChange="";TweenLite.set(n,{force3D:false})}},"screenIn")}return this.tl
};j.trackImagesLoaded=function(){return new Promise(function(m,l){this.section.on(a.Events.Complete,function(){this.createTimeline();
m()}.bind(this))}.bind(this))};j.trackOnEngaged=function(){return new Promise(function(n,m){var l=this.section.elementEngagement.addElement(this.element,{timeToEngage:200,inViewThreshold:0.1});
l.once("engaged",n)}.bind(this))};j.setWillChange=function(){for(var l=0;l<this.standardItems.length;
l++){var m=this.standardItems[l];m.style.willChange="transform, opacity"}if(this.lifestyleImage){this.lifestyleImage.style.willChange="filter"
}if(this.screenImage){this.screenImage.style.willChange="opacity"}};j.unsetWillChange=function(){for(var l=0;
l<this.standardItems.length;l++){var m=this.standardItems[l];m.style.willChange=""
}if(this.lifestyleImage){this.lifestyleImage.style.willChange=""}if(this.screenImage){this.screenImage.style.willChange=""
}};j.imagesLoadedAndEngaged=function(){this.setWillChange();this.tl.play()};j.onLifestyleTweenUpdate=function(m){if(this.lifestyleImage){var n=m.progress();
var p=i.clamp(n+0.2,0,1);var l=(1-n)*100>>0;var o="grayscale("+l+"%) brightness("+p+")";
k.set(this.lifestyleImage,{"-webkit-filter":o,filter:o,force3D:true})}};c.exports=g
},{"../helpers/MathUtils":420,"./ProgressiveImageComponent":415,"@marcom/ac-gsap":213,"@marcom/ac-jetpack-lib/core/BaseComponent":243}],414:[function(f,c,i){var g=f("@marcom/ac-jetpack-lib/core/BaseComponent");
var k=f("@marcom/ac-gallery").FadeGallery;var a=f("./ProgressiveImageComponent");
var l=f("@marcom/ac-gsap").TweenMax;var b=f("@marcom/ac-gsap").TimelineLite;var h=f("../helpers/MathUtils");
function d(q,s,m,p,n,r,o){g.call(this,q,s,m,p,n,r,o);this.onImagesLoadedAndGalleryHeightSettledAndEngaged=this.onImagesLoadedAndGalleryHeightSettledAndEngaged.bind(this);
this.onLifestyleTweenUpdate=this.onLifestyleTweenUpdate.bind(this);this.section=q;
this.componentElement=s;this.imagesLoadedTracker=this.trackImagesLoaded();this.galleryHeightSettledTracker=this.trackGalleryHeightSettled(30);
this.engagedTracker=this.trackOnEngaged();this.galleryLifestyle=this.element.querySelector(".gallery-build-in-lifestyle");
this.galleryScreen=this.element.querySelector(".gallery-build-in-screen");this.tl=null;
Promise.all([this.imagesLoadedTracker,this.galleryHeightSettledTracker,this.engagedTracker]).then(this.onImagesLoadedAndGalleryHeightSettledAndEngaged)
}var j=d.prototype=Object.create(g.prototype);d.prototype.constructor=d;j.setupEvents=function(){this._addCaptions()
};j._addCaptions=function(){var m=this.componentElement.querySelector(".gallery-main-content");
var n=this.section.element.querySelector(".gallery-captions");var o=new k(m,{resizeContainer:true});
var p=new k(n,{crossFade:true,itemSelector:"[data-captions-gallery]",resizeContainer:true});
o.on(k.UPDATE,function(q){var r=o.getItemIndex(q.incoming[0]);p.show(r)});p.on(k.UPDATE,function(q){var r=p.getItemIndex(q.incoming[0]);
o.show(r)})};j.trackImagesLoaded=function(){return new Promise(function(n,m){this.section.on(a.Events.Complete,function(){this.createTimeline();
n()}.bind(this))}.bind(this))};j.trackGalleryHeightSettled=function(o){var s=this.element.getBoundingClientRect().height;
var p=0;var o=o||30;var n=this.element;var r=null;var q=function q(){var t=n.getBoundingClientRect().height;
if(s!==t){p=0}else{p++;if(p>=o){r();return}}s=t;window.requestAnimationFrame(q)
};var m=function m(u,t){r=u;window.requestAnimationFrame(q)};return new Promise(m)
};j.trackOnEngaged=function(){return new Promise(function(o,n){var m=this.section.elementEngagement.addElement(this.element,{timeToEngage:200,inViewThreshold:0.1});
m.once("engaged",o)}.bind(this))};j.onImagesLoadedAndGalleryHeightSettledAndEngaged=function(){this.tl.play()
};j.onSectionWillAppear=function(){this.setWillChange()};j.onSectionWillDisappear=function(){this.unsetWillChange()
};j.setWillChange=function(){this.element.style.willChange="transform, opacity";
if(this.galleryLifestyle){this.galleryLifestyle.style.willChange="filter"}if(this.galleryScreen){this.galleryScreen.style.willChange="opacity"
}};j.unsetWillChange=function(){this.element.style.willChange="";if(this.galleryLifestyle){this.galleryLifestyle.style.willChange=""
}if(this.galleryScreen){this.galleryScreen.style.willChange=""}};j.createTimeline=function(){this.tl=new b({paused:true});
this.tl.to(this.element,0.5,{opacity:1,y:0,force3D:true,onComplete:function n(){var o=this.target;
o.style.willChange="";TweenLite.set(o,{force3D:false})}});this.tl.addLabel("galleryIn","-=0.6");
this.tl.to(this.galleryScreen,1,{opacity:1,force3D:true,onComplete:function n(){var o=this.target;
o.style.willChange="";TweenLite.set(o,{force3D:false})}},"galleryIn");if(this.galleryLifestyle){var m=this.galleryLifestyle;
this.tl.from({},1,{onUpdate:this.onLifestyleTweenUpdate,onUpdateParams:["{self}"],onComplete:function n(){var o=m;
o.style.willChange="";TweenLite.set(o,{force3D:false})}},"galleryIn")}return this.tl
};j.onLifestyleTweenUpdate=function(n){if(this.galleryLifestyle){var o=n.progress();
var q=h.clamp(o+0.2,0,1);var m=(1-o)*100>>0;var p="grayscale("+m+"%) brightness("+q+")";
l.set(this.galleryLifestyle,{"-webkit-filter":p,filter:p,force3D:true})}};c.exports=d
},{"../helpers/MathUtils":420,"./ProgressiveImageComponent":415,"@marcom/ac-gallery":170,"@marcom/ac-gsap":213,"@marcom/ac-jetpack-lib/core/BaseComponent":243}],415:[function(c,b,g){var f=c("@marcom/ac-object/defaults");
var d=c("@marcom/ac-jetpack-lib/core/BaseComponent");var k=c("@marcom/ac-progressive-image-loader/ProgressiveImageLoader");
var i={};a.Events={ImageLoad:"progressive-image-load",Complete:"progressive-image-complete"};
function a(q,s,l,p,m,r,o){this.name=l+"_"+o;d.apply(this,arguments);this.loadImages=this.loadImages.bind(this);
if(this.section.getComponentOfType(this.componentName)){throw new Error("Each Jetpack Section can only contain one ProgressiveImageComponent. Mark progressive images with the [data-progressive-image] attribute, or use [data-progressive-image-group] to distinctly load multiple groups of images in a section")
}try{this._loadOptions=JSON.parse(this.element.getAttribute("data-progressive-image-options"))
}catch(n){this._loadOptions=null}this.imageLoader=new k({container:this.element,includeContainer:true})
}var h=a.prototype=Object.create(d.prototype);var j=d.prototype;a.IS_SUPPORTED=function(){var l=document.getElementsByTagName("html")[0];
return l.classList.contains("progressive-image")};h.setupEvents=function(){j.setupEvents.apply(this,arguments);
this._onImageLoad=this._onImageLoad.bind(this);this._onComplete=this._onComplete.bind(this);
this.imageLoader.on(k.Events.ImageLoad,this._onImageLoad);this.imageLoader.on(k.Events.Complete,this._onComplete)
};h.onSectionWillAppearWithPadding=function(){j.onSectionWillAppearWithPadding.apply(this,arguments);
var m=this.section.cachedBreakpoint==="large"||this.section.cachedBreakpoint==="xlarge";
var n=this.section.element.classList.contains("section-four-k");var l=this.section.cachedScrollPosition<300;
if(n&&l&&m){setTimeout(this.loadImages,500);return}this.loadImages()};h.loadImages=function(){this.imageLoader.load(Object.assign({},{imageAnimate:false},this._loadOptions))
};h.destroy=function(){this.imageLoader.destroy();this.imageLoader=null;j.destroy.apply(this,arguments)
};h._onImageLoad=function(l){this.section.trigger(a.Events.ImageLoad,l)};h._onComplete=function(){this.section.trigger(a.Events.Complete)
};b.exports=a},{"@marcom/ac-jetpack-lib/core/BaseComponent":243,"@marcom/ac-object/defaults":260,"@marcom/ac-progressive-image-loader/ProgressiveImageLoader":291}],416:[function(f,g,d){var c=f("@marcom/ac-jetpack-lib/core/BaseComponent");
var a=f("@marcom/ac-raf-emitter/RAFEmitter");function b(n,p,j,m,k,o,l){c.call(this,n,p,j,m,k,o,l);
this.onEngaged=this.onEngaged.bind(this);this.updateRiverState=this.updateRiverState.bind(this);
var i=this.section.elementEngagement.addElement(this.element,{timeToEngage:200,inViewThreshold:0.1});
this.riverContainer=this.element.querySelector(".river-container");this.riverStreams=[].slice.call(this.element.querySelectorAll(".image-river"));
this.top=this.riverContainer.querySelector(".top");this.middle=this.riverContainer.querySelector(".middle");
this.bottom=this.riverContainer.querySelector(".bottom");this.rafEmitter=new a();
this.isActive=false;i.once("engaged",this.onEngaged);this.rafEmitter.on("update",this.updateRiverState)
}var h=b.prototype=Object.create(c.prototype);b.prototype.constructor=b;h.onEngaged=function(){this.isActive=true;
this.rafEmitter.run()};h.onSectionWillAppear=function(i,j){this.isActive=true;this.rafEmitter.run()
};h.onSectionWillDisappear=function(i,j){this.isActive=false;this.rafEmitter.run()
};h.updateRiverState=function(){var j=!this.isActive?"":"transform";for(var k=0;
k<this.riverStreams.length;k++){var l=this.riverStreams[k];l.style.willChange=j
}};g.exports=b},{"@marcom/ac-jetpack-lib/core/BaseComponent":243,"@marcom/ac-raf-emitter/RAFEmitter":297}],417:[function(j,c,u){j("@marcom/ac-polyfills/Object/create");
var s=j("@marcom/ac-jetpack-lib/core/BaseComponent");var o=j("@marcom/ac-jetpack-lib/model/EnabledFeatures");
var m=s.prototype;var b=j("@marcom/ac-eclipse").Clip;var h=j("@marcom/ac-eclipse").Timeline;
var p=j("@marcom/ac-siri-player").SiriPlayer;var r=j("@marcom/ac-feature");var i=j("@marcom/ac-gpu-reporter").GPUReporter;
var f=j("@marcom/ac-classlist/add");var t=j("@marcom/ac-object/clone");var d=j("@marcom/ac-dom-traversal/querySelector");
var l=j("@marcom/ac-dom-traversal/querySelectorAll");var n=j("@marcom/ac-gsap").TweenLite;
var q=new i();var v=q.getGPU();var a=function a(){var x={blacklist:["PowerVR SGX 554","IMGSGX554"]};
var y=q.getGPUClass(x)===1;if(y){var w=[].slice.call(document.documentElement.querySelectorAll(".siri-callout-container")).forEach(function(A){A.classList.add("static");
var z=A.querySelector(".wave-container");z.classList.add("static")})}return y};
function g(F,z,D,y,E,w,C){this.name="SiriCommandComponent_"+C;s.call(this,F,z,D,y,E,w,C);
this.siriWaveEl=d(".wave-container",z);this.siriCommandEl=l(".siri-command",z);
this.animationDuration=parseFloat(this.element.getAttribute("data-siri-command-duration"));
this.completedAnimation=false;if(!(!o.IS_IE&&!o.IS_EDGE&&!o.IS_ANDROID&&!o.IS_OLD_SAFARI&&!a())){return
}if(document.documentElement.classList.contains("no-background-clip")||document.documentElement.classList.contains("ie")||document.documentElement.classList.contains("edge")){return
}this.siriWaveEl.classList.remove("siri-wave");this.siriWaveClip=new b(this.siriWaveEl,0.5,{transform:{rotateY:"0deg"}});
this.TRANSITION_IN_DURATION=1;this.TRANSITION_OUT_DURATION=1;this.TRANSITION_IN_EASE="easeOutExpo";
this.TRANSITION_OUT_EASE="easeOutExpo";this.NORMAL_ENVELOPE=0.5;this.SILENT_ENVELOPE=0.95;
this.PAUSE_ENVELOPE=0.5;this.NORMAL_ENVELOPE_2=0.05;this.SILENT_ENVELOPE_2=0.3;
this.PAUSE_ENVELOPE_2=0.3;this.NORMAL_SCALE=0.2;this.SILENT_SCALE=0.85;this.PAUSE_SCALE=0.2;
this.NORMAL_SPEED=1.5;this.SILENT_SPEED=0.5;this.PAUSE_SPEED=0;this.siriTalkingClips={talkingStart:{duration:this.TRANSITION_IN_DURATION,ease:this.TRANSITION_IN_EASE,propsFrom:{et:this.SILENT_SCALE,ee:this.SILENT_SPEED,qa:this.SILENT_ENVELOPE,te:this.SILENT_ENVELOPE_2},propsTo:{et:this.NORMAL_SCALE,ee:this.NORMAL_SPEED,qa:this.NORMAL_ENVELOPE,te:this.NORMAL_ENVELOPE_2}},talkingEnd:{duration:this.TRANSITION_OUT_DURATION,ease:this.TRANSITION_OUT_EASE,propsFrom:{et:this.NORMAL_SCALE,ee:this.NORMAL_SPEED,qa:this.NORMAL_ENVELOPE,te:this.NORMAL_ENVELOPE_2},propsTo:{et:this.SILENT_SCALE,ee:this.SILENT_SPEED,qa:this.SILENT_ENVELOPE,te:this.SILENT_ENVELOPE_2}},talkingPaused:{duration:this.TRANSITION_OUT_DURATION,ease:this.TRANSITION_OUT_EASE,propsFrom:{et:this.SILENT_SCALE,ee:this.SILENT_SPEED,qa:this.SILENT_ENVELOPE,te:this.SILENT_ENVELOPE_2},propsTo:{et:this.PAUSE_SCALE,ee:this.PAUSE_SPEED,qa:this.PAUSE_ENVELOPE,te:this.PAUSE_ENVELOPE_2}}};
var B=[];for(var A=0;A<this.siriCommandEl.length;A++){B[A]=this.siriCommandEl[A].textContent.length
}var x=Math.max.apply(Math,B);var G=B.indexOf(x);f(this.siriCommandEl[G],"relative");
f(z,"enhanced");this.rafWhenVisible=false}var k=g.prototype=Object.create(s.prototype);
g.prototype.constructor=g;g.IS_SUPPORTED=function(){return !o.IS_IE&&!o.IS_EDGE&&!o.IS_ANDROID&&!o.IS_OLD_SAFARI&&!a()
};k.siriWavePlayer=function(){this.siriPlayer=new p({alpha:true,transparent:true,white:false,sizes:{defaults:{width:462,height:106},medium:{width:462,height:106},small:{width:320,height:106}}});
this.siriPlayer.setUniforms(this.siriTalkingClips.talkingStart.propsFrom);while(this.siriWaveEl.firstChild){this.siriWaveEl.removeChild(this.siriWaveEl.firstChild)
}this.siriWaveEl.appendChild(this.siriPlayer.el)};k.getSiriWaveClip=function(y){var w=function w(z,A){this.siriPlayer.setUniforms(z)
};var x=t(y.propsFrom);return new b(x,y.duration,t(y.propsTo),{ease:y.ease,propsEase:t(y.propsEase),propsFrom:t(y.propsFrom),onUpdate:w.bind(this,x)})
};k.timeline=function(){var z=0.8,x=this.animationDuration+0.001,y=this.animationDuration+0.2,D=z+y*this.siriCommandEl.length,C,w;
this.myTimeline=new h({ease:"linear",onStart:function(){n.to(this.element,1,{autoAlpha:1})
}.bind(this),onComplete:function(){this.completedAnimation=true}.bind(this)});this.myTimeline.addClip(this.siriWaveClip,0.4);
for(var B=0;B<this.siriCommandEl.length;B++){var F=this.siriCommandEl[B],G=y*B,A=x+G,E=z+G;
C=new b(F,1.5,{opacity:1},{propsFrom:{opacity:0}});w=new b(F,0.75,{opacity:0},{propsFrom:{opacity:1}});
this.siriStartTalkingClip=this.getSiriWaveClip(this.siriTalkingClips.talkingStart);
this.siriEndTalkingClip=this.getSiriWaveClip(this.siriTalkingClips.talkingEnd);
this.myTimeline.addClip(this.siriEndTalkingClip,A);this.myTimeline.addClip(this.siriStartTalkingClip,E)
}this.myTimeline.addClip(this.getSiriWaveClip(this.siriTalkingClips.talkingPaused),D)
};k.onElementAppear=function(){if(this.completedAnimation){return}if(typeof this.siriPlayer=="undefined"){this.siriWavePlayer()
}this.siriPlayer.start();if(typeof this.myTimeline=="undefined"){this.timeline()
}this.myTimeline.play()};k.onBreakpoint=function(x,z,w,y){this.gotoStatic()};k.onRetinaChange=function(z,x,w,y){this.gotoStatic()
};k.gotoStatic=function(){this.completedAnimation=true;if(typeof this.siriPlayer=="undefined"){this.siriWavePlayer()
}this.siriPlayer.stop();this.siriWaveEl.classList.add("static","siri-wave");this.element.classList.add("static")
};k.onSectionWillAppear=function(){if(this.completedAnimation){return}if(typeof this.siriPlayer=="undefined"){this.siriWavePlayer()
}this.siriPlayer.start();if(typeof this.myTimeline=="undefined"){this.timeline()
}};k.onSectionWillDisappear=function(){if(this.completedAnimation){this.siriPlayer.stop()
}};k.setupEvents=function(){m.setupEvents.call(this);this.onElementAppear=this.onElementAppear.bind(this);
this.trackedElement=this.section.elementEngagement.addElement(this.element,{timeToEngage:200,inViewThreshold:0.99});
this.trackedElement.on("engaged",this.onElementAppear)};c.exports=g},{"@marcom/ac-classlist/add":1,"@marcom/ac-dom-traversal/querySelector":49,"@marcom/ac-dom-traversal/querySelectorAll":50,"@marcom/ac-eclipse":90,"@marcom/ac-feature":111,"@marcom/ac-gpu-reporter":189,"@marcom/ac-gsap":213,"@marcom/ac-jetpack-lib/core/BaseComponent":243,"@marcom/ac-jetpack-lib/model/EnabledFeatures":248,"@marcom/ac-object/clone":258,"@marcom/ac-polyfills/Object/create":undefined,"@marcom/ac-siri-player":374}],418:[function(c,b,f){var d=c("@marcom/ac-jetpack-lib/core/BaseComponent");
var h=c("@marcom/ac-gsap").TweenLite;var a=c("@marcom/ac-gsap").TimelineLite;var j=c("@marcom/ac-jetpack-lib/utils/Page");
function i(o,q,k,n,l,p,m){d.call(this,o,q,k,n,l,p,m);this.onEngaged=this.onEngaged.bind(this);
this.columnHeight=Math.round(this.element.getBoundingClientRect().height);this.phraseEls=[].slice.call(this.element.querySelectorAll(".phrase"));
this.phraseYIncrement=this.columnHeight/this.phraseEls.length;this.currentBreakpoint=n;
this.TRANSITION_EASE=Power3.easeInOut;this.TRANSITION_DURATION=0.8;this.TRANSITION_DELAY=0;
this.INITIAL_Y_OFFSET=100;this.IN_VIEW_THRESHOLD={xlarge:0.3,large:0.3,medium:0.3,small:0.5}
}var g=i.prototype=Object.create(d.prototype);i.prototype.constructor=i;g.setupEvents=function(){this.setupTrackedElms();
this.setInitialValues()};g.setupTrackedElms=function(){this.setEngagementOptions();
this.trackedElement=this.section.elementEngagement.addElement(this.element,this.options);
this.trackedElement.once("engaged",this.onEngaged)};g.setEngagementOptions=function(){this.options={timeToEngage:100,inViewThreshold:this.IN_VIEW_THRESHOLD[this.currentBreakpoint]}
};g.refreshMetrics=function(){this.setEngagementOptions();j.trigger(j.DEEP_REFRESH_ALL_METRICS)
};g.setInitialValues=function(){this.opacityTimeline=new a();this.phraseEls.forEach(function(k){this.opacityTimeline.set(k,{y:this.INITIAL_Y_OFFSET,opacity:0})
}.bind(this))};g.onEngaged=function(k){this.createContainerTimeline();j.trigger(j.DEEP_REFRESH_ALL_METRICS)
};g.createContainerTimeline=function(){var m=new a();var o,k;var p=[];for(var l=this.phraseEls.length-1;
l>=0;l--){o=this.phraseYIncrement*(l+1);k=this.phraseYIncrement*l;var n=h.fromTo(this.element,this.TRANSITION_DURATION,{y:o,ease:this.TRANSITION_EASE},{y:k,ease:this.TRANSITION_EASE});
p.push(n)}m.add(p,0,"sequence",this.TRANSITION_DELAY);this.createPhraseTimelines()
};g.createPhraseTimelines=function(){var q=[1,0.6,0.35,0.2];var p=[],o=[],n=[],l=[];
for(var k=0;k<this.phraseEls.length;k++){var m=h.to(this.phraseEls[k],this.TRANSITION_DURATION,{opacity:q[0],y:0,ease:this.TRANSITION_EASE,force3D:true});
p.push(m)}this.opacityTimeline.add(p,this.TRANSITION_DURATION*0,"sequence",this.TRANSITION_DELAY);
for(var k=0;k<this.phraseEls.length-1;k++){var m=h.to(this.phraseEls[k],this.TRANSITION_DURATION,{opacity:q[1],ease:this.TRANSITION_EASE,force3D:true});
o.push(m)}this.opacityTimeline.add(o,this.TRANSITION_DURATION*1,"sequence",this.TRANSITION_DELAY);
for(var k=0;k<this.phraseEls.length-2;k++){var m=h.to(this.phraseEls[k],this.TRANSITION_DURATION,{opacity:q[2],ease:this.TRANSITION_EASE,force3D:true});
n.push(m)}this.opacityTimeline.add(n,this.TRANSITION_DURATION*2,"sequence",this.TRANSITION_DELAY);
for(var k=0;k<this.phraseEls.length-3;k++){var m=h.to(this.phraseEls[k],this.TRANSITION_DURATION,{opacity:q[3],ease:this.TRANSITION_EASE,force3D:true});
l.push(m)}this.opacityTimeline.add(l,this.TRANSITION_DURATION*3,"sequence",this.TRANSITION_DELAY)
};g.onBreakpoint=function(l,n,k,m){this.currentBreakpoint=l;this.refreshMetrics()
};b.exports=i},{"@marcom/ac-gsap":213,"@marcom/ac-jetpack-lib/core/BaseComponent":243,"@marcom/ac-jetpack-lib/utils/Page":250}],419:[function(b,d,a){var c=b("@marcom/ac-useragent");
d.exports={init:function f(){var g=document.getElementsByTagName("html")[0];this.IS_ANDROID=g.classList.contains("android");
this.IS_IE=g.classList.contains("ie");this.IS_EDGE=g.classList.contains("edge");
this.IS_OLD_SAFARI=c.browser.safari&&c.browser.version.major<10}}},{"@marcom/ac-useragent":405}],420:[function(d,c,h){var i={lerp:function f(n,o,m){return o+(m-o)*n
},map:function b(q,p,n,o,m){return this.lerp(this.norm(q,p,n),o,m)},mapClamp:function l(q,p,n,o,m){var q=this.lerp(this.norm(q,p,n),o,m);
return Math.max(o,Math.min(m,q))},norm:function a(o,n,m){return(o-n)/(m-n)},clamp:function k(o,n,m){return Math.max(n,Math.min(m,o))
},randFloat:function g(n,m){return Math.random()*(m-n)+n},randInt:function j(n,m){return Math.floor(Math.random()*(m-n)+n)
}};c.exports=i},{}],421:[function(c,a,g){var f=c("@marcom/ac-jetpack-lib/core/BasePage");
var h=c("@marcom/ac-jetpack-lib/model/ComponentMap");var b=c("@marcom/ac-jetpack-lib/model/EnabledFeatures");
var d=c("./helpers/EnabledFeatures");var j=c("@marcom/ac-jetpack-lib/utils/Page");
var l=c("@marcom/ac-viewport-emitter");var k=c("@marcom/ac-raf-emitter/RAFEmitter");
var i=function(){return{initialize:function n(){j.onPageHeightSettled(this.initializeJetpack)
},initializeJetpack:function m(){Object.assign(h,{BuildInComponent:c("./components/BuildInComponent"),GalleryComponent:c("./components/GalleryComponent"),ProgressiveImageComponent:c("./components/ProgressiveImageComponent"),RiverComponent:c("./components/RiverComponent"),SiriPhrasesComponent:c("./components/SiriPhrasesComponent"),SiriCommandComponent:c("./components/SiriCommandComponent")});
b=b.extend(d);var o=new k();f.prototype.setupEvents=function(){this._onScroll=this._onScroll.bind(this);
this._onBreakpoint=this._onBreakpoint.bind(this);this._onRetinaChange=this._onRetinaChange.bind(this);
this._onPageDidAppear=this._onPageDidAppear.bind(this);this._onResizeImmediate=this._onResizeImmediate.bind(this);
this._onOrientationChange=this._onOrientationChange.bind(this);this._onPageWillDisappear=this._onPageWillDisappear.bind(this);
this.performDeepMetricsRefresh=this.performDeepMetricsRefresh.bind(this);var t=false;
var s=function s(v){if(!t){o.on("update",function(){this._onScroll(v);t=false}.bind(this));
o.run()}t=true};s=s.bind(this);var p=false;try{var r=Object.defineProperty({},"passive",{get:function q(){p=true
}});window.addEventListener("test",null,r)}catch(u){}window.addEventListener("scroll",this._onScroll,p?{passive:true}:false);
window.addEventListener("resize",this._onResizeImmediate);window.addEventListener("orientationchange",this._onOrientationChange);
l.on("change",this._onBreakpoint);l.on("retinachange",this._onRetinaChange);j.on(j.DEEP_REFRESH_ALL_METRICS,this.performDeepMetricsRefresh)
};new f()}}}();a.exports=i.initialize()},{"./components/BuildInComponent":413,"./components/GalleryComponent":414,"./components/ProgressiveImageComponent":415,"./components/RiverComponent":416,"./components/SiriCommandComponent":417,"./components/SiriPhrasesComponent":418,"./helpers/EnabledFeatures":419,"@marcom/ac-jetpack-lib/core/BasePage":244,"@marcom/ac-jetpack-lib/model/ComponentMap":246,"@marcom/ac-jetpack-lib/model/EnabledFeatures":248,"@marcom/ac-jetpack-lib/utils/Page":250,"@marcom/ac-raf-emitter/RAFEmitter":297,"@marcom/ac-viewport-emitter":412}]},{},[421]);