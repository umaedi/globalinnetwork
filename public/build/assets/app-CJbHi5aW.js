function qt(e,t){return function(){return e.apply(t,arguments)}}const{toString:Yn}=Object.prototype,{getPrototypeOf:Xe}=Object,he=(e=>t=>{const n=Yn.call(t);return e[n]||(e[n]=n.slice(8,-1).toLowerCase())})(Object.create(null)),v=e=>(e=e.toLowerCase(),t=>he(t)===e),pe=e=>t=>typeof t===e,{isArray:G}=Array,Q=pe("undefined");function Zn(e){return e!==null&&!Q(e)&&e.constructor!==null&&!Q(e.constructor)&&R(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}const Vt=v("ArrayBuffer");function Qn(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&Vt(e.buffer),t}const er=pe("string"),R=pe("function"),Wt=pe("number"),me=e=>e!==null&&typeof e=="object",tr=e=>e===!0||e===!1,ie=e=>{if(he(e)!=="object")return!1;const t=Xe(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},nr=v("Date"),rr=v("File"),or=v("Blob"),sr=v("FileList"),ir=e=>me(e)&&R(e.pipe),ar=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||R(e.append)&&((t=he(e))==="formdata"||t==="object"&&R(e.toString)&&e.toString()==="[object FormData]"))},cr=v("URLSearchParams"),[ur,lr,fr,dr]=["ReadableStream","Request","Response","Headers"].map(v),hr=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function re(e,t,{allOwnKeys:n=!1}={}){if(e===null||typeof e>"u")return;let r,o;if(typeof e!="object"&&(e=[e]),G(e))for(r=0,o=e.length;r<o;r++)t.call(null,e[r],r,e);else{const s=n?Object.getOwnPropertyNames(e):Object.keys(e),i=s.length;let a;for(r=0;r<i;r++)a=s[r],t.call(null,e[a],a,e)}}function zt(e,t){t=t.toLowerCase();const n=Object.keys(e);let r=n.length,o;for(;r-- >0;)if(o=n[r],t===o.toLowerCase())return o;return null}const U=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Kt=e=>!Q(e)&&e!==U;function Le(){const{caseless:e}=Kt(this)&&this||{},t={},n=(r,o)=>{const s=e&&zt(t,o)||o;ie(t[s])&&ie(r)?t[s]=Le(t[s],r):ie(r)?t[s]=Le({},r):G(r)?t[s]=r.slice():t[s]=r};for(let r=0,o=arguments.length;r<o;r++)arguments[r]&&re(arguments[r],n);return t}const pr=(e,t,n,{allOwnKeys:r}={})=>(re(t,(o,s)=>{n&&R(o)?e[s]=qt(o,n):e[s]=o},{allOwnKeys:r}),e),mr=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),gr=(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},br=(e,t,n,r)=>{let o,s,i;const a={};if(t=t||{},e==null)return t;do{for(o=Object.getOwnPropertyNames(e),s=o.length;s-- >0;)i=o[s],(!r||r(i,e,t))&&!a[i]&&(t[i]=e[i],a[i]=!0);e=n!==!1&&Xe(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},wr=(e,t,n)=>{e=String(e),(n===void 0||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return r!==-1&&r===n},yr=e=>{if(!e)return null;if(G(e))return e;let t=e.length;if(!Wt(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},Er=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&Xe(Uint8Array)),Sr=(e,t)=>{const r=(e&&e[Symbol.iterator]).call(e);let o;for(;(o=r.next())&&!o.done;){const s=o.value;t.call(e,s[0],s[1])}},Tr=(e,t)=>{let n;const r=[];for(;(n=e.exec(t))!==null;)r.push(n);return r},Ar=v("HTMLFormElement"),_r=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(n,r,o){return r.toUpperCase()+o}),lt=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),Ir=v("RegExp"),Jt=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};re(n,(o,s)=>{let i;(i=t(o,s,e))!==!1&&(r[s]=i||o)}),Object.defineProperties(e,r)},Or=e=>{Jt(e,(t,n)=>{if(R(e)&&["arguments","caller","callee"].indexOf(n)!==-1)return!1;const r=e[n];if(R(r)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")})}})},Cr=(e,t)=>{const n={},r=o=>{o.forEach(s=>{n[s]=!0})};return G(e)?r(e):r(String(e).split(t)),n},Rr=()=>{},vr=(e,t)=>e!=null&&Number.isFinite(e=+e)?e:t,Ae="abcdefghijklmnopqrstuvwxyz",ft="0123456789",Gt={DIGIT:ft,ALPHA:Ae,ALPHA_DIGIT:Ae+Ae.toUpperCase()+ft},Dr=(e=16,t=Gt.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n};function kr(e){return!!(e&&R(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}const Nr=e=>{const t=new Array(10),n=(r,o)=>{if(me(r)){if(t.indexOf(r)>=0)return;if(!("toJSON"in r)){t[o]=r;const s=G(r)?[]:{};return re(r,(i,a)=>{const f=n(i,o+1);!Q(f)&&(s[a]=f)}),t[o]=void 0,s}}return r};return n(e,0)},Pr=v("AsyncFunction"),Br=e=>e&&(me(e)||R(e))&&R(e.then)&&R(e.catch),Xt=((e,t)=>e?setImmediate:t?((n,r)=>(U.addEventListener("message",({source:o,data:s})=>{o===U&&s===n&&r.length&&r.shift()()},!1),o=>{r.push(o),U.postMessage(n,"*")}))(`axios@${Math.random()}`,[]):n=>setTimeout(n))(typeof setImmediate=="function",R(U.postMessage)),xr=typeof queueMicrotask<"u"?queueMicrotask.bind(U):typeof process<"u"&&process.nextTick||Xt,c={isArray:G,isArrayBuffer:Vt,isBuffer:Zn,isFormData:ar,isArrayBufferView:Qn,isString:er,isNumber:Wt,isBoolean:tr,isObject:me,isPlainObject:ie,isReadableStream:ur,isRequest:lr,isResponse:fr,isHeaders:dr,isUndefined:Q,isDate:nr,isFile:rr,isBlob:or,isRegExp:Ir,isFunction:R,isStream:ir,isURLSearchParams:cr,isTypedArray:Er,isFileList:sr,forEach:re,merge:Le,extend:pr,trim:hr,stripBOM:mr,inherits:gr,toFlatObject:br,kindOf:he,kindOfTest:v,endsWith:wr,toArray:yr,forEachEntry:Sr,matchAll:Tr,isHTMLForm:Ar,hasOwnProperty:lt,hasOwnProp:lt,reduceDescriptors:Jt,freezeMethods:Or,toObjectSet:Cr,toCamelCase:_r,noop:Rr,toFiniteNumber:vr,findKey:zt,global:U,isContextDefined:Kt,ALPHABET:Gt,generateString:Dr,isSpecCompliantForm:kr,toJSONObject:Nr,isAsyncFn:Pr,isThenable:Br,setImmediate:Xt,asap:xr};function m(e,t,n,r,o){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),o&&(this.response=o,this.status=o.status?o.status:null)}c.inherits(m,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:c.toJSONObject(this.config),code:this.code,status:this.status}}});const Yt=m.prototype,Zt={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{Zt[e]={value:e}});Object.defineProperties(m,Zt);Object.defineProperty(Yt,"isAxiosError",{value:!0});m.from=(e,t,n,r,o,s)=>{const i=Object.create(Yt);return c.toFlatObject(e,i,function(f){return f!==Error.prototype},a=>a!=="isAxiosError"),m.call(i,e.message,t,n,r,o),i.cause=e,i.name=e.name,s&&Object.assign(i,s),i};const Mr=null;function Fe(e){return c.isPlainObject(e)||c.isArray(e)}function Qt(e){return c.endsWith(e,"[]")?e.slice(0,-2):e}function dt(e,t,n){return e?e.concat(t).map(function(o,s){return o=Qt(o),!n&&s?"["+o+"]":o}).join(n?".":""):t}function Lr(e){return c.isArray(e)&&!e.some(Fe)}const Fr=c.toFlatObject(c,{},null,function(t){return/^is[A-Z]/.test(t)});function ge(e,t,n){if(!c.isObject(e))throw new TypeError("target must be an object");t=t||new FormData,n=c.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,function(g,p){return!c.isUndefined(p[g])});const r=n.metaTokens,o=n.visitor||l,s=n.dots,i=n.indexes,f=(n.Blob||typeof Blob<"u"&&Blob)&&c.isSpecCompliantForm(t);if(!c.isFunction(o))throw new TypeError("visitor must be a function");function u(h){if(h===null)return"";if(c.isDate(h))return h.toISOString();if(!f&&c.isBlob(h))throw new m("Blob is not supported. Use a Buffer instead.");return c.isArrayBuffer(h)||c.isTypedArray(h)?f&&typeof Blob=="function"?new Blob([h]):Buffer.from(h):h}function l(h,g,p){let E=h;if(h&&!p&&typeof h=="object"){if(c.endsWith(g,"{}"))g=r?g:g.slice(0,-2),h=JSON.stringify(h);else if(c.isArray(h)&&Lr(h)||(c.isFileList(h)||c.endsWith(g,"[]"))&&(E=c.toArray(h)))return g=Qt(g),E.forEach(function(A,k){!(c.isUndefined(A)||A===null)&&t.append(i===!0?dt([g],k,s):i===null?g:g+"[]",u(A))}),!1}return Fe(h)?!0:(t.append(dt(p,g,s),u(h)),!1)}const d=[],b=Object.assign(Fr,{defaultVisitor:l,convertValue:u,isVisitable:Fe});function y(h,g){if(!c.isUndefined(h)){if(d.indexOf(h)!==-1)throw Error("Circular reference detected in "+g.join("."));d.push(h),c.forEach(h,function(E,T){(!(c.isUndefined(E)||E===null)&&o.call(t,E,c.isString(T)?T.trim():T,g,b))===!0&&y(E,g?g.concat(T):[T])}),d.pop()}}if(!c.isObject(e))throw new TypeError("data must be an object");return y(e),t}function ht(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(r){return t[r]})}function Ye(e,t){this._pairs=[],e&&ge(e,this,t)}const en=Ye.prototype;en.append=function(t,n){this._pairs.push([t,n])};en.toString=function(t){const n=t?function(r){return t.call(this,r,ht)}:ht;return this._pairs.map(function(o){return n(o[0])+"="+n(o[1])},"").join("&")};function $r(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function tn(e,t,n){if(!t)return e;const r=n&&n.encode||$r;c.isFunction(n)&&(n={serialize:n});const o=n&&n.serialize;let s;if(o?s=o(t,n):s=c.isURLSearchParams(t)?t.toString():new Ye(t,n).toString(r),s){const i=e.indexOf("#");i!==-1&&(e=e.slice(0,i)),e+=(e.indexOf("?")===-1?"?":"&")+s}return e}class pt{constructor(){this.handlers=[]}use(t,n,r){return this.handlers.push({fulfilled:t,rejected:n,synchronous:r?r.synchronous:!1,runWhen:r?r.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){c.forEach(this.handlers,function(r){r!==null&&t(r)})}}const nn={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},jr=typeof URLSearchParams<"u"?URLSearchParams:Ye,Hr=typeof FormData<"u"?FormData:null,Ur=typeof Blob<"u"?Blob:null,qr={isBrowser:!0,classes:{URLSearchParams:jr,FormData:Hr,Blob:Ur},protocols:["http","https","file","blob","url","data"]},Ze=typeof window<"u"&&typeof document<"u",$e=typeof navigator=="object"&&navigator||void 0,Vr=Ze&&(!$e||["ReactNative","NativeScript","NS"].indexOf($e.product)<0),Wr=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",zr=Ze&&window.location.href||"http://localhost",Kr=Object.freeze(Object.defineProperty({__proto__:null,hasBrowserEnv:Ze,hasStandardBrowserEnv:Vr,hasStandardBrowserWebWorkerEnv:Wr,navigator:$e,origin:zr},Symbol.toStringTag,{value:"Module"})),_={...Kr,...qr};function Jr(e,t){return ge(e,new _.classes.URLSearchParams,Object.assign({visitor:function(n,r,o,s){return _.isNode&&c.isBuffer(n)?(this.append(r,n.toString("base64")),!1):s.defaultVisitor.apply(this,arguments)}},t))}function Gr(e){return c.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function Xr(e){const t={},n=Object.keys(e);let r;const o=n.length;let s;for(r=0;r<o;r++)s=n[r],t[s]=e[s];return t}function rn(e){function t(n,r,o,s){let i=n[s++];if(i==="__proto__")return!0;const a=Number.isFinite(+i),f=s>=n.length;return i=!i&&c.isArray(o)?o.length:i,f?(c.hasOwnProp(o,i)?o[i]=[o[i],r]:o[i]=r,!a):((!o[i]||!c.isObject(o[i]))&&(o[i]=[]),t(n,r,o[i],s)&&c.isArray(o[i])&&(o[i]=Xr(o[i])),!a)}if(c.isFormData(e)&&c.isFunction(e.entries)){const n={};return c.forEachEntry(e,(r,o)=>{t(Gr(r),o,n,0)}),n}return null}function Yr(e,t,n){if(c.isString(e))try{return(t||JSON.parse)(e),c.trim(e)}catch(r){if(r.name!=="SyntaxError")throw r}return(n||JSON.stringify)(e)}const oe={transitional:nn,adapter:["xhr","http","fetch"],transformRequest:[function(t,n){const r=n.getContentType()||"",o=r.indexOf("application/json")>-1,s=c.isObject(t);if(s&&c.isHTMLForm(t)&&(t=new FormData(t)),c.isFormData(t))return o?JSON.stringify(rn(t)):t;if(c.isArrayBuffer(t)||c.isBuffer(t)||c.isStream(t)||c.isFile(t)||c.isBlob(t)||c.isReadableStream(t))return t;if(c.isArrayBufferView(t))return t.buffer;if(c.isURLSearchParams(t))return n.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let a;if(s){if(r.indexOf("application/x-www-form-urlencoded")>-1)return Jr(t,this.formSerializer).toString();if((a=c.isFileList(t))||r.indexOf("multipart/form-data")>-1){const f=this.env&&this.env.FormData;return ge(a?{"files[]":t}:t,f&&new f,this.formSerializer)}}return s||o?(n.setContentType("application/json",!1),Yr(t)):t}],transformResponse:[function(t){const n=this.transitional||oe.transitional,r=n&&n.forcedJSONParsing,o=this.responseType==="json";if(c.isResponse(t)||c.isReadableStream(t))return t;if(t&&c.isString(t)&&(r&&!this.responseType||o)){const i=!(n&&n.silentJSONParsing)&&o;try{return JSON.parse(t)}catch(a){if(i)throw a.name==="SyntaxError"?m.from(a,m.ERR_BAD_RESPONSE,this,null,this.response):a}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:_.classes.FormData,Blob:_.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};c.forEach(["delete","get","head","post","put","patch"],e=>{oe.headers[e]={}});const Zr=c.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),Qr=e=>{const t={};let n,r,o;return e&&e.split(`
`).forEach(function(i){o=i.indexOf(":"),n=i.substring(0,o).trim().toLowerCase(),r=i.substring(o+1).trim(),!(!n||t[n]&&Zr[n])&&(n==="set-cookie"?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)}),t},mt=Symbol("internals");function Z(e){return e&&String(e).trim().toLowerCase()}function ae(e){return e===!1||e==null?e:c.isArray(e)?e.map(ae):String(e)}function eo(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}const to=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function _e(e,t,n,r,o){if(c.isFunction(r))return r.call(this,t,n);if(o&&(t=n),!!c.isString(t)){if(c.isString(r))return t.indexOf(r)!==-1;if(c.isRegExp(r))return r.test(t)}}function no(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,n,r)=>n.toUpperCase()+r)}function ro(e,t){const n=c.toCamelCase(" "+t);["get","set","has"].forEach(r=>{Object.defineProperty(e,r+n,{value:function(o,s,i){return this[r].call(this,t,o,s,i)},configurable:!0})})}let C=class{constructor(t){t&&this.set(t)}set(t,n,r){const o=this;function s(a,f,u){const l=Z(f);if(!l)throw new Error("header name must be a non-empty string");const d=c.findKey(o,l);(!d||o[d]===void 0||u===!0||u===void 0&&o[d]!==!1)&&(o[d||f]=ae(a))}const i=(a,f)=>c.forEach(a,(u,l)=>s(u,l,f));if(c.isPlainObject(t)||t instanceof this.constructor)i(t,n);else if(c.isString(t)&&(t=t.trim())&&!to(t))i(Qr(t),n);else if(c.isHeaders(t))for(const[a,f]of t.entries())s(f,a,r);else t!=null&&s(n,t,r);return this}get(t,n){if(t=Z(t),t){const r=c.findKey(this,t);if(r){const o=this[r];if(!n)return o;if(n===!0)return eo(o);if(c.isFunction(n))return n.call(this,o,r);if(c.isRegExp(n))return n.exec(o);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,n){if(t=Z(t),t){const r=c.findKey(this,t);return!!(r&&this[r]!==void 0&&(!n||_e(this,this[r],r,n)))}return!1}delete(t,n){const r=this;let o=!1;function s(i){if(i=Z(i),i){const a=c.findKey(r,i);a&&(!n||_e(r,r[a],a,n))&&(delete r[a],o=!0)}}return c.isArray(t)?t.forEach(s):s(t),o}clear(t){const n=Object.keys(this);let r=n.length,o=!1;for(;r--;){const s=n[r];(!t||_e(this,this[s],s,t,!0))&&(delete this[s],o=!0)}return o}normalize(t){const n=this,r={};return c.forEach(this,(o,s)=>{const i=c.findKey(r,s);if(i){n[i]=ae(o),delete n[s];return}const a=t?no(s):String(s).trim();a!==s&&delete n[s],n[a]=ae(o),r[a]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){const n=Object.create(null);return c.forEach(this,(r,o)=>{r!=null&&r!==!1&&(n[o]=t&&c.isArray(r)?r.join(", "):r)}),n}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,n])=>t+": "+n).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...n){const r=new this(t);return n.forEach(o=>r.set(o)),r}static accessor(t){const r=(this[mt]=this[mt]={accessors:{}}).accessors,o=this.prototype;function s(i){const a=Z(i);r[a]||(ro(o,i),r[a]=!0)}return c.isArray(t)?t.forEach(s):s(t),this}};C.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);c.reduceDescriptors(C.prototype,({value:e},t)=>{let n=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(r){this[n]=r}}});c.freezeMethods(C);function Ie(e,t){const n=this||oe,r=t||n,o=C.from(r.headers);let s=r.data;return c.forEach(e,function(a){s=a.call(n,s,o.normalize(),t?t.status:void 0)}),o.normalize(),s}function on(e){return!!(e&&e.__CANCEL__)}function X(e,t,n){m.call(this,e??"canceled",m.ERR_CANCELED,t,n),this.name="CanceledError"}c.inherits(X,m,{__CANCEL__:!0});function sn(e,t,n){const r=n.config.validateStatus;!n.status||!r||r(n.status)?e(n):t(new m("Request failed with status code "+n.status,[m.ERR_BAD_REQUEST,m.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))}function oo(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function so(e,t){e=e||10;const n=new Array(e),r=new Array(e);let o=0,s=0,i;return t=t!==void 0?t:1e3,function(f){const u=Date.now(),l=r[s];i||(i=u),n[o]=f,r[o]=u;let d=s,b=0;for(;d!==o;)b+=n[d++],d=d%e;if(o=(o+1)%e,o===s&&(s=(s+1)%e),u-i<t)return;const y=l&&u-l;return y?Math.round(b*1e3/y):void 0}}function io(e,t){let n=0,r=1e3/t,o,s;const i=(u,l=Date.now())=>{n=l,o=null,s&&(clearTimeout(s),s=null),e.apply(null,u)};return[(...u)=>{const l=Date.now(),d=l-n;d>=r?i(u,l):(o=u,s||(s=setTimeout(()=>{s=null,i(o)},r-d)))},()=>o&&i(o)]}const ue=(e,t,n=3)=>{let r=0;const o=so(50,250);return io(s=>{const i=s.loaded,a=s.lengthComputable?s.total:void 0,f=i-r,u=o(f),l=i<=a;r=i;const d={loaded:i,total:a,progress:a?i/a:void 0,bytes:f,rate:u||void 0,estimated:u&&a&&l?(a-i)/u:void 0,event:s,lengthComputable:a!=null,[t?"download":"upload"]:!0};e(d)},n)},gt=(e,t)=>{const n=e!=null;return[r=>t[0]({lengthComputable:n,total:e,loaded:r}),t[1]]},bt=e=>(...t)=>c.asap(()=>e(...t)),ao=_.hasStandardBrowserEnv?((e,t)=>n=>(n=new URL(n,_.origin),e.protocol===n.protocol&&e.host===n.host&&(t||e.port===n.port)))(new URL(_.origin),_.navigator&&/(msie|trident)/i.test(_.navigator.userAgent)):()=>!0,co=_.hasStandardBrowserEnv?{write(e,t,n,r,o,s){const i=[e+"="+encodeURIComponent(t)];c.isNumber(n)&&i.push("expires="+new Date(n).toGMTString()),c.isString(r)&&i.push("path="+r),c.isString(o)&&i.push("domain="+o),s===!0&&i.push("secure"),document.cookie=i.join("; ")},read(e){const t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove(e){this.write(e,"",Date.now()-864e5)}}:{write(){},read(){return null},remove(){}};function uo(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function lo(e,t){return t?e.replace(/\/?\/$/,"")+"/"+t.replace(/^\/+/,""):e}function an(e,t){return e&&!uo(t)?lo(e,t):t}const wt=e=>e instanceof C?{...e}:e;function W(e,t){t=t||{};const n={};function r(u,l,d,b){return c.isPlainObject(u)&&c.isPlainObject(l)?c.merge.call({caseless:b},u,l):c.isPlainObject(l)?c.merge({},l):c.isArray(l)?l.slice():l}function o(u,l,d,b){if(c.isUndefined(l)){if(!c.isUndefined(u))return r(void 0,u,d,b)}else return r(u,l,d,b)}function s(u,l){if(!c.isUndefined(l))return r(void 0,l)}function i(u,l){if(c.isUndefined(l)){if(!c.isUndefined(u))return r(void 0,u)}else return r(void 0,l)}function a(u,l,d){if(d in t)return r(u,l);if(d in e)return r(void 0,u)}const f={url:s,method:s,data:s,baseURL:i,transformRequest:i,transformResponse:i,paramsSerializer:i,timeout:i,timeoutMessage:i,withCredentials:i,withXSRFToken:i,adapter:i,responseType:i,xsrfCookieName:i,xsrfHeaderName:i,onUploadProgress:i,onDownloadProgress:i,decompress:i,maxContentLength:i,maxBodyLength:i,beforeRedirect:i,transport:i,httpAgent:i,httpsAgent:i,cancelToken:i,socketPath:i,responseEncoding:i,validateStatus:a,headers:(u,l,d)=>o(wt(u),wt(l),d,!0)};return c.forEach(Object.keys(Object.assign({},e,t)),function(l){const d=f[l]||o,b=d(e[l],t[l],l);c.isUndefined(b)&&d!==a||(n[l]=b)}),n}const cn=e=>{const t=W({},e);let{data:n,withXSRFToken:r,xsrfHeaderName:o,xsrfCookieName:s,headers:i,auth:a}=t;t.headers=i=C.from(i),t.url=tn(an(t.baseURL,t.url),e.params,e.paramsSerializer),a&&i.set("Authorization","Basic "+btoa((a.username||"")+":"+(a.password?unescape(encodeURIComponent(a.password)):"")));let f;if(c.isFormData(n)){if(_.hasStandardBrowserEnv||_.hasStandardBrowserWebWorkerEnv)i.setContentType(void 0);else if((f=i.getContentType())!==!1){const[u,...l]=f?f.split(";").map(d=>d.trim()).filter(Boolean):[];i.setContentType([u||"multipart/form-data",...l].join("; "))}}if(_.hasStandardBrowserEnv&&(r&&c.isFunction(r)&&(r=r(t)),r||r!==!1&&ao(t.url))){const u=o&&s&&co.read(s);u&&i.set(o,u)}return t},fo=typeof XMLHttpRequest<"u",ho=fo&&function(e){return new Promise(function(n,r){const o=cn(e);let s=o.data;const i=C.from(o.headers).normalize();let{responseType:a,onUploadProgress:f,onDownloadProgress:u}=o,l,d,b,y,h;function g(){y&&y(),h&&h(),o.cancelToken&&o.cancelToken.unsubscribe(l),o.signal&&o.signal.removeEventListener("abort",l)}let p=new XMLHttpRequest;p.open(o.method.toUpperCase(),o.url,!0),p.timeout=o.timeout;function E(){if(!p)return;const A=C.from("getAllResponseHeaders"in p&&p.getAllResponseHeaders()),O={data:!a||a==="text"||a==="json"?p.responseText:p.response,status:p.status,statusText:p.statusText,headers:A,config:e,request:p};sn(function(j){n(j),g()},function(j){r(j),g()},O),p=null}"onloadend"in p?p.onloadend=E:p.onreadystatechange=function(){!p||p.readyState!==4||p.status===0&&!(p.responseURL&&p.responseURL.indexOf("file:")===0)||setTimeout(E)},p.onabort=function(){p&&(r(new m("Request aborted",m.ECONNABORTED,e,p)),p=null)},p.onerror=function(){r(new m("Network Error",m.ERR_NETWORK,e,p)),p=null},p.ontimeout=function(){let k=o.timeout?"timeout of "+o.timeout+"ms exceeded":"timeout exceeded";const O=o.transitional||nn;o.timeoutErrorMessage&&(k=o.timeoutErrorMessage),r(new m(k,O.clarifyTimeoutError?m.ETIMEDOUT:m.ECONNABORTED,e,p)),p=null},s===void 0&&i.setContentType(null),"setRequestHeader"in p&&c.forEach(i.toJSON(),function(k,O){p.setRequestHeader(O,k)}),c.isUndefined(o.withCredentials)||(p.withCredentials=!!o.withCredentials),a&&a!=="json"&&(p.responseType=o.responseType),u&&([b,h]=ue(u,!0),p.addEventListener("progress",b)),f&&p.upload&&([d,y]=ue(f),p.upload.addEventListener("progress",d),p.upload.addEventListener("loadend",y)),(o.cancelToken||o.signal)&&(l=A=>{p&&(r(!A||A.type?new X(null,e,p):A),p.abort(),p=null)},o.cancelToken&&o.cancelToken.subscribe(l),o.signal&&(o.signal.aborted?l():o.signal.addEventListener("abort",l)));const T=oo(o.url);if(T&&_.protocols.indexOf(T)===-1){r(new m("Unsupported protocol "+T+":",m.ERR_BAD_REQUEST,e));return}p.send(s||null)})},po=(e,t)=>{const{length:n}=e=e?e.filter(Boolean):[];if(t||n){let r=new AbortController,o;const s=function(u){if(!o){o=!0,a();const l=u instanceof Error?u:this.reason;r.abort(l instanceof m?l:new X(l instanceof Error?l.message:l))}};let i=t&&setTimeout(()=>{i=null,s(new m(`timeout ${t} of ms exceeded`,m.ETIMEDOUT))},t);const a=()=>{e&&(i&&clearTimeout(i),i=null,e.forEach(u=>{u.unsubscribe?u.unsubscribe(s):u.removeEventListener("abort",s)}),e=null)};e.forEach(u=>u.addEventListener("abort",s));const{signal:f}=r;return f.unsubscribe=()=>c.asap(a),f}},mo=function*(e,t){let n=e.byteLength;if(n<t){yield e;return}let r=0,o;for(;r<n;)o=r+t,yield e.slice(r,o),r=o},go=async function*(e,t){for await(const n of bo(e))yield*mo(n,t)},bo=async function*(e){if(e[Symbol.asyncIterator]){yield*e;return}const t=e.getReader();try{for(;;){const{done:n,value:r}=await t.read();if(n)break;yield r}}finally{await t.cancel()}},yt=(e,t,n,r)=>{const o=go(e,t);let s=0,i,a=f=>{i||(i=!0,r&&r(f))};return new ReadableStream({async pull(f){try{const{done:u,value:l}=await o.next();if(u){a(),f.close();return}let d=l.byteLength;if(n){let b=s+=d;n(b)}f.enqueue(new Uint8Array(l))}catch(u){throw a(u),u}},cancel(f){return a(f),o.return()}},{highWaterMark:2})},be=typeof fetch=="function"&&typeof Request=="function"&&typeof Response=="function",un=be&&typeof ReadableStream=="function",wo=be&&(typeof TextEncoder=="function"?(e=>t=>e.encode(t))(new TextEncoder):async e=>new Uint8Array(await new Response(e).arrayBuffer())),ln=(e,...t)=>{try{return!!e(...t)}catch{return!1}},yo=un&&ln(()=>{let e=!1;const t=new Request(_.origin,{body:new ReadableStream,method:"POST",get duplex(){return e=!0,"half"}}).headers.has("Content-Type");return e&&!t}),Et=64*1024,je=un&&ln(()=>c.isReadableStream(new Response("").body)),le={stream:je&&(e=>e.body)};be&&(e=>{["text","arrayBuffer","blob","formData","stream"].forEach(t=>{!le[t]&&(le[t]=c.isFunction(e[t])?n=>n[t]():(n,r)=>{throw new m(`Response type '${t}' is not supported`,m.ERR_NOT_SUPPORT,r)})})})(new Response);const Eo=async e=>{if(e==null)return 0;if(c.isBlob(e))return e.size;if(c.isSpecCompliantForm(e))return(await new Request(_.origin,{method:"POST",body:e}).arrayBuffer()).byteLength;if(c.isArrayBufferView(e)||c.isArrayBuffer(e))return e.byteLength;if(c.isURLSearchParams(e)&&(e=e+""),c.isString(e))return(await wo(e)).byteLength},So=async(e,t)=>{const n=c.toFiniteNumber(e.getContentLength());return n??Eo(t)},To=be&&(async e=>{let{url:t,method:n,data:r,signal:o,cancelToken:s,timeout:i,onDownloadProgress:a,onUploadProgress:f,responseType:u,headers:l,withCredentials:d="same-origin",fetchOptions:b}=cn(e);u=u?(u+"").toLowerCase():"text";let y=po([o,s&&s.toAbortSignal()],i),h;const g=y&&y.unsubscribe&&(()=>{y.unsubscribe()});let p;try{if(f&&yo&&n!=="get"&&n!=="head"&&(p=await So(l,r))!==0){let O=new Request(t,{method:"POST",body:r,duplex:"half"}),x;if(c.isFormData(r)&&(x=O.headers.get("content-type"))&&l.setContentType(x),O.body){const[j,se]=gt(p,ue(bt(f)));r=yt(O.body,Et,j,se)}}c.isString(d)||(d=d?"include":"omit");const E="credentials"in Request.prototype;h=new Request(t,{...b,signal:y,method:n.toUpperCase(),headers:l.normalize().toJSON(),body:r,duplex:"half",credentials:E?d:void 0});let T=await fetch(h);const A=je&&(u==="stream"||u==="response");if(je&&(a||A&&g)){const O={};["status","statusText","headers"].forEach(ut=>{O[ut]=T[ut]});const x=c.toFiniteNumber(T.headers.get("content-length")),[j,se]=a&&gt(x,ue(bt(a),!0))||[];T=new Response(yt(T.body,Et,j,()=>{se&&se(),g&&g()}),O)}u=u||"text";let k=await le[c.findKey(le,u)||"text"](T,e);return!A&&g&&g(),await new Promise((O,x)=>{sn(O,x,{data:k,headers:C.from(T.headers),status:T.status,statusText:T.statusText,config:e,request:h})})}catch(E){throw g&&g(),E&&E.name==="TypeError"&&/fetch/i.test(E.message)?Object.assign(new m("Network Error",m.ERR_NETWORK,e,h),{cause:E.cause||E}):m.from(E,E&&E.code,e,h)}}),He={http:Mr,xhr:ho,fetch:To};c.forEach(He,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});const St=e=>`- ${e}`,Ao=e=>c.isFunction(e)||e===null||e===!1,fn={getAdapter:e=>{e=c.isArray(e)?e:[e];const{length:t}=e;let n,r;const o={};for(let s=0;s<t;s++){n=e[s];let i;if(r=n,!Ao(n)&&(r=He[(i=String(n)).toLowerCase()],r===void 0))throw new m(`Unknown adapter '${i}'`);if(r)break;o[i||"#"+s]=r}if(!r){const s=Object.entries(o).map(([a,f])=>`adapter ${a} `+(f===!1?"is not supported by the environment":"is not available in the build"));let i=t?s.length>1?`since :
`+s.map(St).join(`
`):" "+St(s[0]):"as no adapter specified";throw new m("There is no suitable adapter to dispatch the request "+i,"ERR_NOT_SUPPORT")}return r},adapters:He};function Oe(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new X(null,e)}function Tt(e){return Oe(e),e.headers=C.from(e.headers),e.data=Ie.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),fn.getAdapter(e.adapter||oe.adapter)(e).then(function(r){return Oe(e),r.data=Ie.call(e,e.transformResponse,r),r.headers=C.from(r.headers),r},function(r){return on(r)||(Oe(e),r&&r.response&&(r.response.data=Ie.call(e,e.transformResponse,r.response),r.response.headers=C.from(r.response.headers))),Promise.reject(r)})}const dn="1.7.9",we={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{we[e]=function(r){return typeof r===e||"a"+(t<1?"n ":" ")+e}});const At={};we.transitional=function(t,n,r){function o(s,i){return"[Axios v"+dn+"] Transitional option '"+s+"'"+i+(r?". "+r:"")}return(s,i,a)=>{if(t===!1)throw new m(o(i," has been removed"+(n?" in "+n:"")),m.ERR_DEPRECATED);return n&&!At[i]&&(At[i]=!0,console.warn(o(i," has been deprecated since v"+n+" and will be removed in the near future"))),t?t(s,i,a):!0}};we.spelling=function(t){return(n,r)=>(console.warn(`${r} is likely a misspelling of ${t}`),!0)};function _o(e,t,n){if(typeof e!="object")throw new m("options must be an object",m.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let o=r.length;for(;o-- >0;){const s=r[o],i=t[s];if(i){const a=e[s],f=a===void 0||i(a,s,e);if(f!==!0)throw new m("option "+s+" must be "+f,m.ERR_BAD_OPTION_VALUE);continue}if(n!==!0)throw new m("Unknown option "+s,m.ERR_BAD_OPTION)}}const ce={assertOptions:_o,validators:we},D=ce.validators;let V=class{constructor(t){this.defaults=t,this.interceptors={request:new pt,response:new pt}}async request(t,n){try{return await this._request(t,n)}catch(r){if(r instanceof Error){let o={};Error.captureStackTrace?Error.captureStackTrace(o):o=new Error;const s=o.stack?o.stack.replace(/^.+\n/,""):"";try{r.stack?s&&!String(r.stack).endsWith(s.replace(/^.+\n.+\n/,""))&&(r.stack+=`
`+s):r.stack=s}catch{}}throw r}}_request(t,n){typeof t=="string"?(n=n||{},n.url=t):n=t||{},n=W(this.defaults,n);const{transitional:r,paramsSerializer:o,headers:s}=n;r!==void 0&&ce.assertOptions(r,{silentJSONParsing:D.transitional(D.boolean),forcedJSONParsing:D.transitional(D.boolean),clarifyTimeoutError:D.transitional(D.boolean)},!1),o!=null&&(c.isFunction(o)?n.paramsSerializer={serialize:o}:ce.assertOptions(o,{encode:D.function,serialize:D.function},!0)),ce.assertOptions(n,{baseUrl:D.spelling("baseURL"),withXsrfToken:D.spelling("withXSRFToken")},!0),n.method=(n.method||this.defaults.method||"get").toLowerCase();let i=s&&c.merge(s.common,s[n.method]);s&&c.forEach(["delete","get","head","post","put","patch","common"],h=>{delete s[h]}),n.headers=C.concat(i,s);const a=[];let f=!0;this.interceptors.request.forEach(function(g){typeof g.runWhen=="function"&&g.runWhen(n)===!1||(f=f&&g.synchronous,a.unshift(g.fulfilled,g.rejected))});const u=[];this.interceptors.response.forEach(function(g){u.push(g.fulfilled,g.rejected)});let l,d=0,b;if(!f){const h=[Tt.bind(this),void 0];for(h.unshift.apply(h,a),h.push.apply(h,u),b=h.length,l=Promise.resolve(n);d<b;)l=l.then(h[d++],h[d++]);return l}b=a.length;let y=n;for(d=0;d<b;){const h=a[d++],g=a[d++];try{y=h(y)}catch(p){g.call(this,p);break}}try{l=Tt.call(this,y)}catch(h){return Promise.reject(h)}for(d=0,b=u.length;d<b;)l=l.then(u[d++],u[d++]);return l}getUri(t){t=W(this.defaults,t);const n=an(t.baseURL,t.url);return tn(n,t.params,t.paramsSerializer)}};c.forEach(["delete","get","head","options"],function(t){V.prototype[t]=function(n,r){return this.request(W(r||{},{method:t,url:n,data:(r||{}).data}))}});c.forEach(["post","put","patch"],function(t){function n(r){return function(s,i,a){return this.request(W(a||{},{method:t,headers:r?{"Content-Type":"multipart/form-data"}:{},url:s,data:i}))}}V.prototype[t]=n(),V.prototype[t+"Form"]=n(!0)});let Io=class hn{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let n;this.promise=new Promise(function(s){n=s});const r=this;this.promise.then(o=>{if(!r._listeners)return;let s=r._listeners.length;for(;s-- >0;)r._listeners[s](o);r._listeners=null}),this.promise.then=o=>{let s;const i=new Promise(a=>{r.subscribe(a),s=a}).then(o);return i.cancel=function(){r.unsubscribe(s)},i},t(function(s,i,a){r.reason||(r.reason=new X(s,i,a),n(r.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;const n=this._listeners.indexOf(t);n!==-1&&this._listeners.splice(n,1)}toAbortSignal(){const t=new AbortController,n=r=>{t.abort(r)};return this.subscribe(n),t.signal.unsubscribe=()=>this.unsubscribe(n),t.signal}static source(){let t;return{token:new hn(function(o){t=o}),cancel:t}}};function Oo(e){return function(n){return e.apply(null,n)}}function Co(e){return c.isObject(e)&&e.isAxiosError===!0}const Ue={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(Ue).forEach(([e,t])=>{Ue[t]=e});function pn(e){const t=new V(e),n=qt(V.prototype.request,t);return c.extend(n,V.prototype,t,{allOwnKeys:!0}),c.extend(n,t,null,{allOwnKeys:!0}),n.create=function(o){return pn(W(e,o))},n}const S=pn(oe);S.Axios=V;S.CanceledError=X;S.CancelToken=Io;S.isCancel=on;S.VERSION=dn;S.toFormData=ge;S.AxiosError=m;S.Cancel=S.CanceledError;S.all=function(t){return Promise.all(t)};S.spread=Oo;S.isAxiosError=Co;S.mergeConfig=W;S.AxiosHeaders=C;S.formToJSON=e=>rn(c.isHTMLForm(e)?new FormData(e):e);S.getAdapter=fn.getAdapter;S.HttpStatusCode=Ue;S.default=S;const{Axios:Da,AxiosError:ka,CanceledError:Na,isCancel:Pa,CancelToken:Ba,VERSION:xa,all:Ma,Cancel:La,isAxiosError:Fa,spread:$a,toFormData:ja,AxiosHeaders:Ha,HttpStatusCode:Ua,formToJSON:qa,getAdapter:Va,mergeConfig:Wa}=S;window.axios=S;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";var _t={};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const mn=function(e){const t=[];let n=0;for(let r=0;r<e.length;r++){let o=e.charCodeAt(r);o<128?t[n++]=o:o<2048?(t[n++]=o>>6|192,t[n++]=o&63|128):(o&64512)===55296&&r+1<e.length&&(e.charCodeAt(r+1)&64512)===56320?(o=65536+((o&1023)<<10)+(e.charCodeAt(++r)&1023),t[n++]=o>>18|240,t[n++]=o>>12&63|128,t[n++]=o>>6&63|128,t[n++]=o&63|128):(t[n++]=o>>12|224,t[n++]=o>>6&63|128,t[n++]=o&63|128)}return t},Ro=function(e){const t=[];let n=0,r=0;for(;n<e.length;){const o=e[n++];if(o<128)t[r++]=String.fromCharCode(o);else if(o>191&&o<224){const s=e[n++];t[r++]=String.fromCharCode((o&31)<<6|s&63)}else if(o>239&&o<365){const s=e[n++],i=e[n++],a=e[n++],f=((o&7)<<18|(s&63)<<12|(i&63)<<6|a&63)-65536;t[r++]=String.fromCharCode(55296+(f>>10)),t[r++]=String.fromCharCode(56320+(f&1023))}else{const s=e[n++],i=e[n++];t[r++]=String.fromCharCode((o&15)<<12|(s&63)<<6|i&63)}}return t.join("")},gn={byteToCharMap_:null,charToByteMap_:null,byteToCharMapWebSafe_:null,charToByteMapWebSafe_:null,ENCODED_VALS_BASE:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",get ENCODED_VALS(){return this.ENCODED_VALS_BASE+"+/="},get ENCODED_VALS_WEBSAFE(){return this.ENCODED_VALS_BASE+"-_."},HAS_NATIVE_SUPPORT:typeof atob=="function",encodeByteArray(e,t){if(!Array.isArray(e))throw Error("encodeByteArray takes an array as a parameter");this.init_();const n=t?this.byteToCharMapWebSafe_:this.byteToCharMap_,r=[];for(let o=0;o<e.length;o+=3){const s=e[o],i=o+1<e.length,a=i?e[o+1]:0,f=o+2<e.length,u=f?e[o+2]:0,l=s>>2,d=(s&3)<<4|a>>4;let b=(a&15)<<2|u>>6,y=u&63;f||(y=64,i||(b=64)),r.push(n[l],n[d],n[b],n[y])}return r.join("")},encodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?btoa(e):this.encodeByteArray(mn(e),t)},decodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?atob(e):Ro(this.decodeStringToByteArray(e,t))},decodeStringToByteArray(e,t){this.init_();const n=t?this.charToByteMapWebSafe_:this.charToByteMap_,r=[];for(let o=0;o<e.length;){const s=n[e.charAt(o++)],a=o<e.length?n[e.charAt(o)]:0;++o;const u=o<e.length?n[e.charAt(o)]:64;++o;const d=o<e.length?n[e.charAt(o)]:64;if(++o,s==null||a==null||u==null||d==null)throw new vo;const b=s<<2|a>>4;if(r.push(b),u!==64){const y=a<<4&240|u>>2;if(r.push(y),d!==64){const h=u<<6&192|d;r.push(h)}}}return r},init_(){if(!this.byteToCharMap_){this.byteToCharMap_={},this.charToByteMap_={},this.byteToCharMapWebSafe_={},this.charToByteMapWebSafe_={};for(let e=0;e<this.ENCODED_VALS.length;e++)this.byteToCharMap_[e]=this.ENCODED_VALS.charAt(e),this.charToByteMap_[this.byteToCharMap_[e]]=e,this.byteToCharMapWebSafe_[e]=this.ENCODED_VALS_WEBSAFE.charAt(e),this.charToByteMapWebSafe_[this.byteToCharMapWebSafe_[e]]=e,e>=this.ENCODED_VALS_BASE.length&&(this.charToByteMap_[this.ENCODED_VALS_WEBSAFE.charAt(e)]=e,this.charToByteMapWebSafe_[this.ENCODED_VALS.charAt(e)]=e)}}};class vo extends Error{constructor(){super(...arguments),this.name="DecodeBase64StringError"}}const Do=function(e){const t=mn(e);return gn.encodeByteArray(t,!0)},bn=function(e){return Do(e).replace(/\./g,"")},ko=function(e){try{return gn.decodeString(e,!0)}catch(t){console.error("base64Decode failed: ",t)}return null};/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function No(){if(typeof self<"u")return self;if(typeof window<"u")return window;if(typeof global<"u")return global;throw new Error("Unable to locate global object.")}/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Po=()=>No().__FIREBASE_DEFAULTS__,Bo=()=>{if(typeof process>"u"||typeof _t>"u")return;const e=_t.__FIREBASE_DEFAULTS__;if(e)return JSON.parse(e)},xo=()=>{if(typeof document>"u")return;let e;try{e=document.cookie.match(/__FIREBASE_DEFAULTS__=([^;]+)/)}catch{return}const t=e&&ko(e[1]);return t&&JSON.parse(t)},Mo=()=>{try{return Po()||Bo()||xo()}catch(e){console.info(`Unable to get __FIREBASE_DEFAULTS__ due to: ${e}`);return}},wn=()=>{var e;return(e=Mo())===null||e===void 0?void 0:e.config};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Lo{constructor(){this.reject=()=>{},this.resolve=()=>{},this.promise=new Promise((t,n)=>{this.resolve=t,this.reject=n})}wrapCallback(t){return(n,r)=>{n?this.reject(n):this.resolve(r),typeof t=="function"&&(this.promise.catch(()=>{}),t.length===1?t(n):t(n,r))}}}function yn(){try{return typeof indexedDB=="object"}catch{return!1}}function En(){return new Promise((e,t)=>{try{let n=!0;const r="validate-browser-context-for-indexeddb-analytics-module",o=self.indexedDB.open(r);o.onsuccess=()=>{o.result.close(),n||self.indexedDB.deleteDatabase(r),e(!0)},o.onupgradeneeded=()=>{n=!1},o.onerror=()=>{var s;t(((s=o.error)===null||s===void 0?void 0:s.message)||"")}}catch(n){t(n)}})}function Fo(){return!(typeof navigator>"u"||!navigator.cookieEnabled)}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const $o="FirebaseError";class Y extends Error{constructor(t,n,r){super(n),this.code=t,this.customData=r,this.name=$o,Object.setPrototypeOf(this,Y.prototype),Error.captureStackTrace&&Error.captureStackTrace(this,ye.prototype.create)}}class ye{constructor(t,n,r){this.service=t,this.serviceName=n,this.errors=r}create(t,...n){const r=n[0]||{},o=`${this.service}/${t}`,s=this.errors[t],i=s?jo(s,r):"Error",a=`${this.serviceName}: ${i} (${o}).`;return new Y(o,a,r)}}function jo(e,t){return e.replace(Ho,(n,r)=>{const o=t[r];return o!=null?String(o):`<${r}?>`})}const Ho=/\{\$([^}]+)}/g;function qe(e,t){if(e===t)return!0;const n=Object.keys(e),r=Object.keys(t);for(const o of n){if(!r.includes(o))return!1;const s=e[o],i=t[o];if(It(s)&&It(i)){if(!qe(s,i))return!1}else if(s!==i)return!1}for(const o of r)if(!n.includes(o))return!1;return!0}function It(e){return e!==null&&typeof e=="object"}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Qe(e){return e&&e._delegate?e._delegate:e}class F{constructor(t,n,r){this.name=t,this.instanceFactory=n,this.type=r,this.multipleInstances=!1,this.serviceProps={},this.instantiationMode="LAZY",this.onInstanceCreated=null}setInstantiationMode(t){return this.instantiationMode=t,this}setMultipleInstances(t){return this.multipleInstances=t,this}setServiceProps(t){return this.serviceProps=t,this}setInstanceCreatedCallback(t){return this.onInstanceCreated=t,this}}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const H="[DEFAULT]";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Uo{constructor(t,n){this.name=t,this.container=n,this.component=null,this.instances=new Map,this.instancesDeferred=new Map,this.instancesOptions=new Map,this.onInitCallbacks=new Map}get(t){const n=this.normalizeInstanceIdentifier(t);if(!this.instancesDeferred.has(n)){const r=new Lo;if(this.instancesDeferred.set(n,r),this.isInitialized(n)||this.shouldAutoInitialize())try{const o=this.getOrInitializeService({instanceIdentifier:n});o&&r.resolve(o)}catch{}}return this.instancesDeferred.get(n).promise}getImmediate(t){var n;const r=this.normalizeInstanceIdentifier(t==null?void 0:t.identifier),o=(n=t==null?void 0:t.optional)!==null&&n!==void 0?n:!1;if(this.isInitialized(r)||this.shouldAutoInitialize())try{return this.getOrInitializeService({instanceIdentifier:r})}catch(s){if(o)return null;throw s}else{if(o)return null;throw Error(`Service ${this.name} is not available`)}}getComponent(){return this.component}setComponent(t){if(t.name!==this.name)throw Error(`Mismatching Component ${t.name} for Provider ${this.name}.`);if(this.component)throw Error(`Component for ${this.name} has already been provided`);if(this.component=t,!!this.shouldAutoInitialize()){if(Vo(t))try{this.getOrInitializeService({instanceIdentifier:H})}catch{}for(const[n,r]of this.instancesDeferred.entries()){const o=this.normalizeInstanceIdentifier(n);try{const s=this.getOrInitializeService({instanceIdentifier:o});r.resolve(s)}catch{}}}}clearInstance(t=H){this.instancesDeferred.delete(t),this.instancesOptions.delete(t),this.instances.delete(t)}async delete(){const t=Array.from(this.instances.values());await Promise.all([...t.filter(n=>"INTERNAL"in n).map(n=>n.INTERNAL.delete()),...t.filter(n=>"_delete"in n).map(n=>n._delete())])}isComponentSet(){return this.component!=null}isInitialized(t=H){return this.instances.has(t)}getOptions(t=H){return this.instancesOptions.get(t)||{}}initialize(t={}){const{options:n={}}=t,r=this.normalizeInstanceIdentifier(t.instanceIdentifier);if(this.isInitialized(r))throw Error(`${this.name}(${r}) has already been initialized`);if(!this.isComponentSet())throw Error(`Component ${this.name} has not been registered yet`);const o=this.getOrInitializeService({instanceIdentifier:r,options:n});for(const[s,i]of this.instancesDeferred.entries()){const a=this.normalizeInstanceIdentifier(s);r===a&&i.resolve(o)}return o}onInit(t,n){var r;const o=this.normalizeInstanceIdentifier(n),s=(r=this.onInitCallbacks.get(o))!==null&&r!==void 0?r:new Set;s.add(t),this.onInitCallbacks.set(o,s);const i=this.instances.get(o);return i&&t(i,o),()=>{s.delete(t)}}invokeOnInitCallbacks(t,n){const r=this.onInitCallbacks.get(n);if(r)for(const o of r)try{o(t,n)}catch{}}getOrInitializeService({instanceIdentifier:t,options:n={}}){let r=this.instances.get(t);if(!r&&this.component&&(r=this.component.instanceFactory(this.container,{instanceIdentifier:qo(t),options:n}),this.instances.set(t,r),this.instancesOptions.set(t,n),this.invokeOnInitCallbacks(r,t),this.component.onInstanceCreated))try{this.component.onInstanceCreated(this.container,t,r)}catch{}return r||null}normalizeInstanceIdentifier(t=H){return this.component?this.component.multipleInstances?t:H:t}shouldAutoInitialize(){return!!this.component&&this.component.instantiationMode!=="EXPLICIT"}}function qo(e){return e===H?void 0:e}function Vo(e){return e.instantiationMode==="EAGER"}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Wo{constructor(t){this.name=t,this.providers=new Map}addComponent(t){const n=this.getProvider(t.name);if(n.isComponentSet())throw new Error(`Component ${t.name} has already been registered with ${this.name}`);n.setComponent(t)}addOrOverwriteComponent(t){this.getProvider(t.name).isComponentSet()&&this.providers.delete(t.name),this.addComponent(t)}getProvider(t){if(this.providers.has(t))return this.providers.get(t);const n=new Uo(t,this);return this.providers.set(t,n),n}getProviders(){return Array.from(this.providers.values())}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */var w;(function(e){e[e.DEBUG=0]="DEBUG",e[e.VERBOSE=1]="VERBOSE",e[e.INFO=2]="INFO",e[e.WARN=3]="WARN",e[e.ERROR=4]="ERROR",e[e.SILENT=5]="SILENT"})(w||(w={}));const zo={debug:w.DEBUG,verbose:w.VERBOSE,info:w.INFO,warn:w.WARN,error:w.ERROR,silent:w.SILENT},Ko=w.INFO,Jo={[w.DEBUG]:"log",[w.VERBOSE]:"log",[w.INFO]:"info",[w.WARN]:"warn",[w.ERROR]:"error"},Go=(e,t,...n)=>{if(t<e.logLevel)return;const r=new Date().toISOString(),o=Jo[t];if(o)console[o](`[${r}]  ${e.name}:`,...n);else throw new Error(`Attempted to log a message with an invalid logType (value: ${t})`)};class Xo{constructor(t){this.name=t,this._logLevel=Ko,this._logHandler=Go,this._userLogHandler=null}get logLevel(){return this._logLevel}set logLevel(t){if(!(t in w))throw new TypeError(`Invalid value "${t}" assigned to \`logLevel\``);this._logLevel=t}setLogLevel(t){this._logLevel=typeof t=="string"?zo[t]:t}get logHandler(){return this._logHandler}set logHandler(t){if(typeof t!="function")throw new TypeError("Value assigned to `logHandler` must be a function");this._logHandler=t}get userLogHandler(){return this._userLogHandler}set userLogHandler(t){this._userLogHandler=t}debug(...t){this._userLogHandler&&this._userLogHandler(this,w.DEBUG,...t),this._logHandler(this,w.DEBUG,...t)}log(...t){this._userLogHandler&&this._userLogHandler(this,w.VERBOSE,...t),this._logHandler(this,w.VERBOSE,...t)}info(...t){this._userLogHandler&&this._userLogHandler(this,w.INFO,...t),this._logHandler(this,w.INFO,...t)}warn(...t){this._userLogHandler&&this._userLogHandler(this,w.WARN,...t),this._logHandler(this,w.WARN,...t)}error(...t){this._userLogHandler&&this._userLogHandler(this,w.ERROR,...t),this._logHandler(this,w.ERROR,...t)}}const Yo=(e,t)=>t.some(n=>e instanceof n);let Ot,Ct;function Zo(){return Ot||(Ot=[IDBDatabase,IDBObjectStore,IDBIndex,IDBCursor,IDBTransaction])}function Qo(){return Ct||(Ct=[IDBCursor.prototype.advance,IDBCursor.prototype.continue,IDBCursor.prototype.continuePrimaryKey])}const Sn=new WeakMap,Ve=new WeakMap,Tn=new WeakMap,Ce=new WeakMap,et=new WeakMap;function es(e){const t=new Promise((n,r)=>{const o=()=>{e.removeEventListener("success",s),e.removeEventListener("error",i)},s=()=>{n(P(e.result)),o()},i=()=>{r(e.error),o()};e.addEventListener("success",s),e.addEventListener("error",i)});return t.then(n=>{n instanceof IDBCursor&&Sn.set(n,e)}).catch(()=>{}),et.set(t,e),t}function ts(e){if(Ve.has(e))return;const t=new Promise((n,r)=>{const o=()=>{e.removeEventListener("complete",s),e.removeEventListener("error",i),e.removeEventListener("abort",i)},s=()=>{n(),o()},i=()=>{r(e.error||new DOMException("AbortError","AbortError")),o()};e.addEventListener("complete",s),e.addEventListener("error",i),e.addEventListener("abort",i)});Ve.set(e,t)}let We={get(e,t,n){if(e instanceof IDBTransaction){if(t==="done")return Ve.get(e);if(t==="objectStoreNames")return e.objectStoreNames||Tn.get(e);if(t==="store")return n.objectStoreNames[1]?void 0:n.objectStore(n.objectStoreNames[0])}return P(e[t])},set(e,t,n){return e[t]=n,!0},has(e,t){return e instanceof IDBTransaction&&(t==="done"||t==="store")?!0:t in e}};function ns(e){We=e(We)}function rs(e){return e===IDBDatabase.prototype.transaction&&!("objectStoreNames"in IDBTransaction.prototype)?function(t,...n){const r=e.call(Re(this),t,...n);return Tn.set(r,t.sort?t.sort():[t]),P(r)}:Qo().includes(e)?function(...t){return e.apply(Re(this),t),P(Sn.get(this))}:function(...t){return P(e.apply(Re(this),t))}}function os(e){return typeof e=="function"?rs(e):(e instanceof IDBTransaction&&ts(e),Yo(e,Zo())?new Proxy(e,We):e)}function P(e){if(e instanceof IDBRequest)return es(e);if(Ce.has(e))return Ce.get(e);const t=os(e);return t!==e&&(Ce.set(e,t),et.set(t,e)),t}const Re=e=>et.get(e);function Ee(e,t,{blocked:n,upgrade:r,blocking:o,terminated:s}={}){const i=indexedDB.open(e,t),a=P(i);return r&&i.addEventListener("upgradeneeded",f=>{r(P(i.result),f.oldVersion,f.newVersion,P(i.transaction),f)}),n&&i.addEventListener("blocked",f=>n(f.oldVersion,f.newVersion,f)),a.then(f=>{s&&f.addEventListener("close",()=>s()),o&&f.addEventListener("versionchange",u=>o(u.oldVersion,u.newVersion,u))}).catch(()=>{}),a}function ve(e,{blocked:t}={}){const n=indexedDB.deleteDatabase(e);return t&&n.addEventListener("blocked",r=>t(r.oldVersion,r)),P(n).then(()=>{})}const ss=["get","getKey","getAll","getAllKeys","count"],is=["put","add","delete","clear"],De=new Map;function Rt(e,t){if(!(e instanceof IDBDatabase&&!(t in e)&&typeof t=="string"))return;if(De.get(t))return De.get(t);const n=t.replace(/FromIndex$/,""),r=t!==n,o=is.includes(n);if(!(n in(r?IDBIndex:IDBObjectStore).prototype)||!(o||ss.includes(n)))return;const s=async function(i,...a){const f=this.transaction(i,o?"readwrite":"readonly");let u=f.store;return r&&(u=u.index(a.shift())),(await Promise.all([u[n](...a),o&&f.done]))[0]};return De.set(t,s),s}ns(e=>({...e,get:(t,n,r)=>Rt(t,n)||e.get(t,n,r),has:(t,n)=>!!Rt(t,n)||e.has(t,n)}));/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class as{constructor(t){this.container=t}getPlatformInfoString(){return this.container.getProviders().map(n=>{if(cs(n)){const r=n.getImmediate();return`${r.library}/${r.version}`}else return null}).filter(n=>n).join(" ")}}function cs(e){const t=e.getComponent();return(t==null?void 0:t.type)==="VERSION"}const ze="@firebase/app",vt="0.11.1";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const B=new Xo("@firebase/app"),us="@firebase/app-compat",ls="@firebase/analytics-compat",fs="@firebase/analytics",ds="@firebase/app-check-compat",hs="@firebase/app-check",ps="@firebase/auth",ms="@firebase/auth-compat",gs="@firebase/database",bs="@firebase/data-connect",ws="@firebase/database-compat",ys="@firebase/functions",Es="@firebase/functions-compat",Ss="@firebase/installations",Ts="@firebase/installations-compat",As="@firebase/messaging",_s="@firebase/messaging-compat",Is="@firebase/performance",Os="@firebase/performance-compat",Cs="@firebase/remote-config",Rs="@firebase/remote-config-compat",vs="@firebase/storage",Ds="@firebase/storage-compat",ks="@firebase/firestore",Ns="@firebase/vertexai",Ps="@firebase/firestore-compat",Bs="firebase";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Ke="[DEFAULT]",xs={[ze]:"fire-core",[us]:"fire-core-compat",[fs]:"fire-analytics",[ls]:"fire-analytics-compat",[hs]:"fire-app-check",[ds]:"fire-app-check-compat",[ps]:"fire-auth",[ms]:"fire-auth-compat",[gs]:"fire-rtdb",[bs]:"fire-data-connect",[ws]:"fire-rtdb-compat",[ys]:"fire-fn",[Es]:"fire-fn-compat",[Ss]:"fire-iid",[Ts]:"fire-iid-compat",[As]:"fire-fcm",[_s]:"fire-fcm-compat",[Is]:"fire-perf",[Os]:"fire-perf-compat",[Cs]:"fire-rc",[Rs]:"fire-rc-compat",[vs]:"fire-gcs",[Ds]:"fire-gcs-compat",[ks]:"fire-fst",[Ps]:"fire-fst-compat",[Ns]:"fire-vertex","fire-js":"fire-js",[Bs]:"fire-js-all"};/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const fe=new Map,Ms=new Map,Je=new Map;function Dt(e,t){try{e.container.addComponent(t)}catch(n){B.debug(`Component ${t.name} failed to register with FirebaseApp ${e.name}`,n)}}function z(e){const t=e.name;if(Je.has(t))return B.debug(`There were multiple attempts to register component ${t}.`),!1;Je.set(t,e);for(const n of fe.values())Dt(n,e);for(const n of Ms.values())Dt(n,e);return!0}function tt(e,t){const n=e.container.getProvider("heartbeat").getImmediate({optional:!0});return n&&n.triggerHeartbeat(),e.container.getProvider(t)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Ls={"no-app":"No Firebase App '{$appName}' has been created - call initializeApp() first","bad-app-name":"Illegal App name: '{$appName}'","duplicate-app":"Firebase App named '{$appName}' already exists with different options or config","app-deleted":"Firebase App named '{$appName}' already deleted","server-app-deleted":"Firebase Server App has been deleted","no-options":"Need to provide options, when not being deployed to hosting via source.","invalid-app-argument":"firebase.{$appName}() takes either no argument or a Firebase App instance.","invalid-log-argument":"First argument to `onLog` must be null or a function.","idb-open":"Error thrown when opening IndexedDB. Original error: {$originalErrorMessage}.","idb-get":"Error thrown when reading from IndexedDB. Original error: {$originalErrorMessage}.","idb-set":"Error thrown when writing to IndexedDB. Original error: {$originalErrorMessage}.","idb-delete":"Error thrown when deleting from IndexedDB. Original error: {$originalErrorMessage}.","finalization-registry-not-supported":"FirebaseServerApp deleteOnDeref field defined but the JS runtime does not support FinalizationRegistry.","invalid-server-app-environment":"FirebaseServerApp is not for use in browser environments."},M=new ye("app","Firebase",Ls);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Fs{constructor(t,n,r){this._isDeleted=!1,this._options=Object.assign({},t),this._config=Object.assign({},n),this._name=n.name,this._automaticDataCollectionEnabled=n.automaticDataCollectionEnabled,this._container=r,this.container.addComponent(new F("app",()=>this,"PUBLIC"))}get automaticDataCollectionEnabled(){return this.checkDestroyed(),this._automaticDataCollectionEnabled}set automaticDataCollectionEnabled(t){this.checkDestroyed(),this._automaticDataCollectionEnabled=t}get name(){return this.checkDestroyed(),this._name}get options(){return this.checkDestroyed(),this._options}get config(){return this.checkDestroyed(),this._config}get container(){return this._container}get isDeleted(){return this._isDeleted}set isDeleted(t){this._isDeleted=t}checkDestroyed(){if(this.isDeleted)throw M.create("app-deleted",{appName:this._name})}}function An(e,t={}){let n=e;typeof t!="object"&&(t={name:t});const r=Object.assign({name:Ke,automaticDataCollectionEnabled:!1},t),o=r.name;if(typeof o!="string"||!o)throw M.create("bad-app-name",{appName:String(o)});if(n||(n=wn()),!n)throw M.create("no-options");const s=fe.get(o);if(s){if(qe(n,s.options)&&qe(r,s.config))return s;throw M.create("duplicate-app",{appName:o})}const i=new Wo(o);for(const f of Je.values())i.addComponent(f);const a=new Fs(n,r,i);return fe.set(o,a),a}function $s(e=Ke){const t=fe.get(e);if(!t&&e===Ke&&wn())return An();if(!t)throw M.create("no-app",{appName:e});return t}function L(e,t,n){var r;let o=(r=xs[e])!==null&&r!==void 0?r:e;n&&(o+=`-${n}`);const s=o.match(/\s|\//),i=t.match(/\s|\//);if(s||i){const a=[`Unable to register library "${o}" with version "${t}":`];s&&a.push(`library name "${o}" contains illegal characters (whitespace or "/")`),s&&i&&a.push("and"),i&&a.push(`version name "${t}" contains illegal characters (whitespace or "/")`),B.warn(a.join(" "));return}z(new F(`${o}-version`,()=>({library:o,version:t}),"VERSION"))}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const js="firebase-heartbeat-database",Hs=1,ee="firebase-heartbeat-store";let ke=null;function _n(){return ke||(ke=Ee(js,Hs,{upgrade:(e,t)=>{switch(t){case 0:try{e.createObjectStore(ee)}catch(n){console.warn(n)}}}}).catch(e=>{throw M.create("idb-open",{originalErrorMessage:e.message})})),ke}async function Us(e){try{const n=(await _n()).transaction(ee),r=await n.objectStore(ee).get(In(e));return await n.done,r}catch(t){if(t instanceof Y)B.warn(t.message);else{const n=M.create("idb-get",{originalErrorMessage:t==null?void 0:t.message});B.warn(n.message)}}}async function kt(e,t){try{const r=(await _n()).transaction(ee,"readwrite");await r.objectStore(ee).put(t,In(e)),await r.done}catch(n){if(n instanceof Y)B.warn(n.message);else{const r=M.create("idb-set",{originalErrorMessage:n==null?void 0:n.message});B.warn(r.message)}}}function In(e){return`${e.name}!${e.options.appId}`}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const qs=1024,Vs=30;class Ws{constructor(t){this.container=t,this._heartbeatsCache=null;const n=this.container.getProvider("app").getImmediate();this._storage=new Ks(n),this._heartbeatsCachePromise=this._storage.read().then(r=>(this._heartbeatsCache=r,r))}async triggerHeartbeat(){var t,n;try{const o=this.container.getProvider("platform-logger").getImmediate().getPlatformInfoString(),s=Nt();if(((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null&&(this._heartbeatsCache=await this._heartbeatsCachePromise,((n=this._heartbeatsCache)===null||n===void 0?void 0:n.heartbeats)==null)||this._heartbeatsCache.lastSentHeartbeatDate===s||this._heartbeatsCache.heartbeats.some(i=>i.date===s))return;if(this._heartbeatsCache.heartbeats.push({date:s,agent:o}),this._heartbeatsCache.heartbeats.length>Vs){const i=Js(this._heartbeatsCache.heartbeats);this._heartbeatsCache.heartbeats.splice(i,1)}return this._storage.overwrite(this._heartbeatsCache)}catch(r){B.warn(r)}}async getHeartbeatsHeader(){var t;try{if(this._heartbeatsCache===null&&await this._heartbeatsCachePromise,((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null||this._heartbeatsCache.heartbeats.length===0)return"";const n=Nt(),{heartbeatsToSend:r,unsentEntries:o}=zs(this._heartbeatsCache.heartbeats),s=bn(JSON.stringify({version:2,heartbeats:r}));return this._heartbeatsCache.lastSentHeartbeatDate=n,o.length>0?(this._heartbeatsCache.heartbeats=o,await this._storage.overwrite(this._heartbeatsCache)):(this._heartbeatsCache.heartbeats=[],this._storage.overwrite(this._heartbeatsCache)),s}catch(n){return B.warn(n),""}}}function Nt(){return new Date().toISOString().substring(0,10)}function zs(e,t=qs){const n=[];let r=e.slice();for(const o of e){const s=n.find(i=>i.agent===o.agent);if(s){if(s.dates.push(o.date),Pt(n)>t){s.dates.pop();break}}else if(n.push({agent:o.agent,dates:[o.date]}),Pt(n)>t){n.pop();break}r=r.slice(1)}return{heartbeatsToSend:n,unsentEntries:r}}class Ks{constructor(t){this.app=t,this._canUseIndexedDBPromise=this.runIndexedDBEnvironmentCheck()}async runIndexedDBEnvironmentCheck(){return yn()?En().then(()=>!0).catch(()=>!1):!1}async read(){if(await this._canUseIndexedDBPromise){const n=await Us(this.app);return n!=null&&n.heartbeats?n:{heartbeats:[]}}else return{heartbeats:[]}}async overwrite(t){var n;if(await this._canUseIndexedDBPromise){const o=await this.read();return kt(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:o.lastSentHeartbeatDate,heartbeats:t.heartbeats})}else return}async add(t){var n;if(await this._canUseIndexedDBPromise){const o=await this.read();return kt(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:o.lastSentHeartbeatDate,heartbeats:[...o.heartbeats,...t.heartbeats]})}else return}}function Pt(e){return bn(JSON.stringify({version:2,heartbeats:e})).length}function Js(e){if(e.length===0)return-1;let t=0,n=e[0].date;for(let r=1;r<e.length;r++)e[r].date<n&&(n=e[r].date,t=r);return t}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Gs(e){z(new F("platform-logger",t=>new as(t),"PRIVATE")),z(new F("heartbeat",t=>new Ws(t),"PRIVATE")),L(ze,vt,e),L(ze,vt,"esm2017"),L("fire-js","")}Gs("");var Xs="firebase",Ys="11.3.1";/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */L(Xs,Ys,"app");const On="@firebase/installations",nt="0.6.12";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Cn=1e4,Rn=`w:${nt}`,vn="FIS_v2",Zs="https://firebaseinstallations.googleapis.com/v1",Qs=60*60*1e3,ei="installations",ti="Installations";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const ni={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"not-registered":"Firebase Installation is not registered.","installation-not-found":"Firebase Installation not found.","request-failed":'{$requestName} request failed with error "{$serverCode} {$serverStatus}: {$serverMessage}"',"app-offline":"Could not process request. Application offline.","delete-pending-registration":"Can't delete installation while there is a pending registration request."},K=new ye(ei,ti,ni);function Dn(e){return e instanceof Y&&e.code.includes("request-failed")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function kn({projectId:e}){return`${Zs}/projects/${e}/installations`}function Nn(e){return{token:e.token,requestStatus:2,expiresIn:oi(e.expiresIn),creationTime:Date.now()}}async function Pn(e,t){const r=(await t.json()).error;return K.create("request-failed",{requestName:e,serverCode:r.code,serverMessage:r.message,serverStatus:r.status})}function Bn({apiKey:e}){return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e})}function ri(e,{refreshToken:t}){const n=Bn(e);return n.append("Authorization",si(t)),n}async function xn(e){const t=await e();return t.status>=500&&t.status<600?e():t}function oi(e){return Number(e.replace("s","000"))}function si(e){return`${vn} ${e}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ii({appConfig:e,heartbeatServiceProvider:t},{fid:n}){const r=kn(e),o=Bn(e),s=t.getImmediate({optional:!0});if(s){const u=await s.getHeartbeatsHeader();u&&o.append("x-firebase-client",u)}const i={fid:n,authVersion:vn,appId:e.appId,sdkVersion:Rn},a={method:"POST",headers:o,body:JSON.stringify(i)},f=await xn(()=>fetch(r,a));if(f.ok){const u=await f.json();return{fid:u.fid||n,registrationStatus:2,refreshToken:u.refreshToken,authToken:Nn(u.authToken)}}else throw await Pn("Create Installation",f)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Mn(e){return new Promise(t=>{setTimeout(t,e)})}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function ai(e){return btoa(String.fromCharCode(...e)).replace(/\+/g,"-").replace(/\//g,"_")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const ci=/^[cdef][\w-]{21}$/,Ge="";function ui(){try{const e=new Uint8Array(17);(self.crypto||self.msCrypto).getRandomValues(e),e[0]=112+e[0]%16;const n=li(e);return ci.test(n)?n:Ge}catch{return Ge}}function li(e){return ai(e).substr(0,22)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Se(e){return`${e.appName}!${e.appId}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Ln=new Map;function Fn(e,t){const n=Se(e);$n(n,t),fi(n,t)}function $n(e,t){const n=Ln.get(e);if(n)for(const r of n)r(t)}function fi(e,t){const n=di();n&&n.postMessage({key:e,fid:t}),hi()}let q=null;function di(){return!q&&"BroadcastChannel"in self&&(q=new BroadcastChannel("[Firebase] FID Change"),q.onmessage=e=>{$n(e.data.key,e.data.fid)}),q}function hi(){Ln.size===0&&q&&(q.close(),q=null)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const pi="firebase-installations-database",mi=1,J="firebase-installations-store";let Ne=null;function rt(){return Ne||(Ne=Ee(pi,mi,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(J)}}})),Ne}async function de(e,t){const n=Se(e),o=(await rt()).transaction(J,"readwrite"),s=o.objectStore(J),i=await s.get(n);return await s.put(t,n),await o.done,(!i||i.fid!==t.fid)&&Fn(e,t.fid),t}async function jn(e){const t=Se(e),r=(await rt()).transaction(J,"readwrite");await r.objectStore(J).delete(t),await r.done}async function Te(e,t){const n=Se(e),o=(await rt()).transaction(J,"readwrite"),s=o.objectStore(J),i=await s.get(n),a=t(i);return a===void 0?await s.delete(n):await s.put(a,n),await o.done,a&&(!i||i.fid!==a.fid)&&Fn(e,a.fid),a}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ot(e){let t;const n=await Te(e.appConfig,r=>{const o=gi(r),s=bi(e,o);return t=s.registrationPromise,s.installationEntry});return n.fid===Ge?{installationEntry:await t}:{installationEntry:n,registrationPromise:t}}function gi(e){const t=e||{fid:ui(),registrationStatus:0};return Hn(t)}function bi(e,t){if(t.registrationStatus===0){if(!navigator.onLine){const o=Promise.reject(K.create("app-offline"));return{installationEntry:t,registrationPromise:o}}const n={fid:t.fid,registrationStatus:1,registrationTime:Date.now()},r=wi(e,n);return{installationEntry:n,registrationPromise:r}}else return t.registrationStatus===1?{installationEntry:t,registrationPromise:yi(e)}:{installationEntry:t}}async function wi(e,t){try{const n=await ii(e,t);return de(e.appConfig,n)}catch(n){throw Dn(n)&&n.customData.serverCode===409?await jn(e.appConfig):await de(e.appConfig,{fid:t.fid,registrationStatus:0}),n}}async function yi(e){let t=await Bt(e.appConfig);for(;t.registrationStatus===1;)await Mn(100),t=await Bt(e.appConfig);if(t.registrationStatus===0){const{installationEntry:n,registrationPromise:r}=await ot(e);return r||n}return t}function Bt(e){return Te(e,t=>{if(!t)throw K.create("installation-not-found");return Hn(t)})}function Hn(e){return Ei(e)?{fid:e.fid,registrationStatus:0}:e}function Ei(e){return e.registrationStatus===1&&e.registrationTime+Cn<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Si({appConfig:e,heartbeatServiceProvider:t},n){const r=Ti(e,n),o=ri(e,n),s=t.getImmediate({optional:!0});if(s){const u=await s.getHeartbeatsHeader();u&&o.append("x-firebase-client",u)}const i={installation:{sdkVersion:Rn,appId:e.appId}},a={method:"POST",headers:o,body:JSON.stringify(i)},f=await xn(()=>fetch(r,a));if(f.ok){const u=await f.json();return Nn(u)}else throw await Pn("Generate Auth Token",f)}function Ti(e,{fid:t}){return`${kn(e)}/${t}/authTokens:generate`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function st(e,t=!1){let n;const r=await Te(e.appConfig,s=>{if(!Un(s))throw K.create("not-registered");const i=s.authToken;if(!t&&Ii(i))return s;if(i.requestStatus===1)return n=Ai(e,t),s;{if(!navigator.onLine)throw K.create("app-offline");const a=Ci(s);return n=_i(e,a),a}});return n?await n:r.authToken}async function Ai(e,t){let n=await xt(e.appConfig);for(;n.authToken.requestStatus===1;)await Mn(100),n=await xt(e.appConfig);const r=n.authToken;return r.requestStatus===0?st(e,t):r}function xt(e){return Te(e,t=>{if(!Un(t))throw K.create("not-registered");const n=t.authToken;return Ri(n)?Object.assign(Object.assign({},t),{authToken:{requestStatus:0}}):t})}async function _i(e,t){try{const n=await Si(e,t),r=Object.assign(Object.assign({},t),{authToken:n});return await de(e.appConfig,r),n}catch(n){if(Dn(n)&&(n.customData.serverCode===401||n.customData.serverCode===404))await jn(e.appConfig);else{const r=Object.assign(Object.assign({},t),{authToken:{requestStatus:0}});await de(e.appConfig,r)}throw n}}function Un(e){return e!==void 0&&e.registrationStatus===2}function Ii(e){return e.requestStatus===2&&!Oi(e)}function Oi(e){const t=Date.now();return t<e.creationTime||e.creationTime+e.expiresIn<t+Qs}function Ci(e){const t={requestStatus:1,requestTime:Date.now()};return Object.assign(Object.assign({},e),{authToken:t})}function Ri(e){return e.requestStatus===1&&e.requestTime+Cn<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function vi(e){const t=e,{installationEntry:n,registrationPromise:r}=await ot(t);return r?r.catch(console.error):st(t).catch(console.error),n.fid}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Di(e,t=!1){const n=e;return await ki(n),(await st(n,t)).token}async function ki(e){const{registrationPromise:t}=await ot(e);t&&await t}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Ni(e){if(!e||!e.options)throw Pe("App Configuration");if(!e.name)throw Pe("App Name");const t=["projectId","apiKey","appId"];for(const n of t)if(!e.options[n])throw Pe(n);return{appName:e.name,projectId:e.options.projectId,apiKey:e.options.apiKey,appId:e.options.appId}}function Pe(e){return K.create("missing-app-config-values",{valueName:e})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const qn="installations",Pi="installations-internal",Bi=e=>{const t=e.getProvider("app").getImmediate(),n=Ni(t),r=tt(t,"heartbeat");return{app:t,appConfig:n,heartbeatServiceProvider:r,_delete:()=>Promise.resolve()}},xi=e=>{const t=e.getProvider("app").getImmediate(),n=tt(t,qn).getImmediate();return{getId:()=>vi(n),getToken:o=>Di(n,o)}};function Mi(){z(new F(qn,Bi,"PUBLIC")),z(new F(Pi,xi,"PRIVATE"))}Mi();L(On,nt);L(On,nt,"esm2017");/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Li="/firebase-messaging-sw.js",Fi="/firebase-cloud-messaging-push-scope",Vn="BDOU99-h67HcA6JeFXHbSNMu7e2yNNu3RzoMj8TM4W88jITfq7ZmPvIM1Iv-4_l2LxQcYwhqby2xGpWwzjfAnG4",$i="https://fcmregistrations.googleapis.com/v1",Wn="google.c.a.c_id",ji="google.c.a.c_l",Hi="google.c.a.ts",Ui="google.c.a.e",Mt=1e4;var Lt;(function(e){e[e.DATA_MESSAGE=1]="DATA_MESSAGE",e[e.DISPLAY_NOTIFICATION=3]="DISPLAY_NOTIFICATION"})(Lt||(Lt={}));/**
 * @license
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except
 * in compliance with the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the License
 * is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing permissions and limitations under
 * the License.
 */var te;(function(e){e.PUSH_RECEIVED="push-received",e.NOTIFICATION_CLICKED="notification-clicked"})(te||(te={}));/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function N(e){const t=new Uint8Array(e);return btoa(String.fromCharCode(...t)).replace(/=/g,"").replace(/\+/g,"-").replace(/\//g,"_")}function qi(e){const t="=".repeat((4-e.length%4)%4),n=(e+t).replace(/\-/g,"+").replace(/_/g,"/"),r=atob(n),o=new Uint8Array(r.length);for(let s=0;s<r.length;++s)o[s]=r.charCodeAt(s);return o}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Be="fcm_token_details_db",Vi=5,Ft="fcm_token_object_Store";async function Wi(e){if("databases"in indexedDB&&!(await indexedDB.databases()).map(s=>s.name).includes(Be))return null;let t=null;return(await Ee(Be,Vi,{upgrade:async(r,o,s,i)=>{var a;if(o<2||!r.objectStoreNames.contains(Ft))return;const f=i.objectStore(Ft),u=await f.index("fcmSenderId").get(e);if(await f.clear(),!!u){if(o===2){const l=u;if(!l.auth||!l.p256dh||!l.endpoint)return;t={token:l.fcmToken,createTime:(a=l.createTime)!==null&&a!==void 0?a:Date.now(),subscriptionOptions:{auth:l.auth,p256dh:l.p256dh,endpoint:l.endpoint,swScope:l.swScope,vapidKey:typeof l.vapidKey=="string"?l.vapidKey:N(l.vapidKey)}}}else if(o===3){const l=u;t={token:l.fcmToken,createTime:l.createTime,subscriptionOptions:{auth:N(l.auth),p256dh:N(l.p256dh),endpoint:l.endpoint,swScope:l.swScope,vapidKey:N(l.vapidKey)}}}else if(o===4){const l=u;t={token:l.fcmToken,createTime:l.createTime,subscriptionOptions:{auth:N(l.auth),p256dh:N(l.p256dh),endpoint:l.endpoint,swScope:l.swScope,vapidKey:N(l.vapidKey)}}}}}})).close(),await ve(Be),await ve("fcm_vapid_details_db"),await ve("undefined"),zi(t)?t:null}function zi(e){if(!e||!e.subscriptionOptions)return!1;const{subscriptionOptions:t}=e;return typeof e.createTime=="number"&&e.createTime>0&&typeof e.token=="string"&&e.token.length>0&&typeof t.auth=="string"&&t.auth.length>0&&typeof t.p256dh=="string"&&t.p256dh.length>0&&typeof t.endpoint=="string"&&t.endpoint.length>0&&typeof t.swScope=="string"&&t.swScope.length>0&&typeof t.vapidKey=="string"&&t.vapidKey.length>0}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Ki="firebase-messaging-database",Ji=1,ne="firebase-messaging-store";let xe=null;function zn(){return xe||(xe=Ee(Ki,Ji,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(ne)}}})),xe}async function Gi(e){const t=Kn(e),r=await(await zn()).transaction(ne).objectStore(ne).get(t);if(r)return r;{const o=await Wi(e.appConfig.senderId);if(o)return await it(e,o),o}}async function it(e,t){const n=Kn(e),o=(await zn()).transaction(ne,"readwrite");return await o.objectStore(ne).put(t,n),await o.done,t}function Kn({appConfig:e}){return e.appId}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Xi={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"only-available-in-window":"This method is available in a Window context.","only-available-in-sw":"This method is available in a service worker context.","permission-default":"The notification permission was not granted and dismissed instead.","permission-blocked":"The notification permission was not granted and blocked instead.","unsupported-browser":"This browser doesn't support the API's required to use the Firebase SDK.","indexed-db-unsupported":"This browser doesn't support indexedDb.open() (ex. Safari iFrame, Firefox Private Browsing, etc)","failed-service-worker-registration":"We are unable to register the default service worker. {$browserErrorMessage}","token-subscribe-failed":"A problem occurred while subscribing the user to FCM: {$errorInfo}","token-subscribe-no-token":"FCM returned no token when subscribing the user to push.","token-unsubscribe-failed":"A problem occurred while unsubscribing the user from FCM: {$errorInfo}","token-update-failed":"A problem occurred while updating the user from FCM: {$errorInfo}","token-update-no-token":"FCM returned no token when updating the user to push.","use-sw-after-get-token":"The useServiceWorker() method may only be called once and must be called before calling getToken() to ensure your service worker is used.","invalid-sw-registration":"The input to useServiceWorker() must be a ServiceWorkerRegistration.","invalid-bg-handler":"The input to setBackgroundMessageHandler() must be a function.","invalid-vapid-key":"The public VAPID key must be a string.","use-vapid-key-after-get-token":"The usePublicVapidKey() method may only be called once and must be called before calling getToken() to ensure your VAPID key is used."},I=new ye("messaging","Messaging",Xi);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Yi(e,t){const n=await ct(e),r=Jn(t),o={method:"POST",headers:n,body:JSON.stringify(r)};let s;try{s=await(await fetch(at(e.appConfig),o)).json()}catch(i){throw I.create("token-subscribe-failed",{errorInfo:i==null?void 0:i.toString()})}if(s.error){const i=s.error.message;throw I.create("token-subscribe-failed",{errorInfo:i})}if(!s.token)throw I.create("token-subscribe-no-token");return s.token}async function Zi(e,t){const n=await ct(e),r=Jn(t.subscriptionOptions),o={method:"PATCH",headers:n,body:JSON.stringify(r)};let s;try{s=await(await fetch(`${at(e.appConfig)}/${t.token}`,o)).json()}catch(i){throw I.create("token-update-failed",{errorInfo:i==null?void 0:i.toString()})}if(s.error){const i=s.error.message;throw I.create("token-update-failed",{errorInfo:i})}if(!s.token)throw I.create("token-update-no-token");return s.token}async function Qi(e,t){const r={method:"DELETE",headers:await ct(e)};try{const s=await(await fetch(`${at(e.appConfig)}/${t}`,r)).json();if(s.error){const i=s.error.message;throw I.create("token-unsubscribe-failed",{errorInfo:i})}}catch(o){throw I.create("token-unsubscribe-failed",{errorInfo:o==null?void 0:o.toString()})}}function at({projectId:e}){return`${$i}/projects/${e}/registrations`}async function ct({appConfig:e,installations:t}){const n=await t.getToken();return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e.apiKey,"x-goog-firebase-installations-auth":`FIS ${n}`})}function Jn({p256dh:e,auth:t,endpoint:n,vapidKey:r}){const o={web:{endpoint:n,auth:t,p256dh:e}};return r!==Vn&&(o.web.applicationPubKey=r),o}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const ea=7*24*60*60*1e3;async function ta(e){const t=await ra(e.swRegistration,e.vapidKey),n={vapidKey:e.vapidKey,swScope:e.swRegistration.scope,endpoint:t.endpoint,auth:N(t.getKey("auth")),p256dh:N(t.getKey("p256dh"))},r=await Gi(e.firebaseDependencies);if(r){if(oa(r.subscriptionOptions,n))return Date.now()>=r.createTime+ea?na(e,{token:r.token,createTime:Date.now(),subscriptionOptions:n}):r.token;try{await Qi(e.firebaseDependencies,r.token)}catch(o){console.warn(o)}return $t(e.firebaseDependencies,n)}else return $t(e.firebaseDependencies,n)}async function na(e,t){try{const n=await Zi(e.firebaseDependencies,t),r=Object.assign(Object.assign({},t),{token:n,createTime:Date.now()});return await it(e.firebaseDependencies,r),n}catch(n){throw n}}async function $t(e,t){const r={token:await Yi(e,t),createTime:Date.now(),subscriptionOptions:t};return await it(e,r),r.token}async function ra(e,t){const n=await e.pushManager.getSubscription();return n||e.pushManager.subscribe({userVisibleOnly:!0,applicationServerKey:qi(t)})}function oa(e,t){const n=t.vapidKey===e.vapidKey,r=t.endpoint===e.endpoint,o=t.auth===e.auth,s=t.p256dh===e.p256dh;return n&&r&&o&&s}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function jt(e){const t={from:e.from,collapseKey:e.collapse_key,messageId:e.fcmMessageId};return sa(t,e),ia(t,e),aa(t,e),t}function sa(e,t){if(!t.notification)return;e.notification={};const n=t.notification.title;n&&(e.notification.title=n);const r=t.notification.body;r&&(e.notification.body=r);const o=t.notification.image;o&&(e.notification.image=o);const s=t.notification.icon;s&&(e.notification.icon=s)}function ia(e,t){t.data&&(e.data=t.data)}function aa(e,t){var n,r,o,s,i;if(!t.fcmOptions&&!(!((n=t.notification)===null||n===void 0)&&n.click_action))return;e.fcmOptions={};const a=(o=(r=t.fcmOptions)===null||r===void 0?void 0:r.link)!==null&&o!==void 0?o:(s=t.notification)===null||s===void 0?void 0:s.click_action;a&&(e.fcmOptions.link=a);const f=(i=t.fcmOptions)===null||i===void 0?void 0:i.analytics_label;f&&(e.fcmOptions.analyticsLabel=f)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function ca(e){return typeof e=="object"&&!!e&&Wn in e}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function ua(e){if(!e||!e.options)throw Me("App Configuration Object");if(!e.name)throw Me("App Name");const t=["projectId","apiKey","appId","messagingSenderId"],{options:n}=e;for(const r of t)if(!n[r])throw Me(r);return{appName:e.name,projectId:n.projectId,apiKey:n.apiKey,appId:n.appId,senderId:n.messagingSenderId}}function Me(e){return I.create("missing-app-config-values",{valueName:e})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class la{constructor(t,n,r){this.deliveryMetricsExportedToBigQueryEnabled=!1,this.onBackgroundMessageHandler=null,this.onMessageHandler=null,this.logEvents=[],this.isLogServiceStarted=!1;const o=ua(t);this.firebaseDependencies={app:t,appConfig:o,installations:n,analyticsProvider:r}}_delete(){return Promise.resolve()}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function fa(e){try{e.swRegistration=await navigator.serviceWorker.register(Li,{scope:Fi}),e.swRegistration.update().catch(()=>{}),await da(e.swRegistration)}catch(t){throw I.create("failed-service-worker-registration",{browserErrorMessage:t==null?void 0:t.message})}}async function da(e){return new Promise((t,n)=>{const r=setTimeout(()=>n(new Error(`Service worker not registered after ${Mt} ms`)),Mt),o=e.installing||e.waiting;e.active?(clearTimeout(r),t()):o?o.onstatechange=s=>{var i;((i=s.target)===null||i===void 0?void 0:i.state)==="activated"&&(o.onstatechange=null,clearTimeout(r),t())}:(clearTimeout(r),n(new Error("No incoming service worker found.")))})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ha(e,t){if(!t&&!e.swRegistration&&await fa(e),!(!t&&e.swRegistration)){if(!(t instanceof ServiceWorkerRegistration))throw I.create("invalid-sw-registration");e.swRegistration=t}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function pa(e,t){t?e.vapidKey=t:e.vapidKey||(e.vapidKey=Vn)}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Gn(e,t){if(!navigator)throw I.create("only-available-in-window");if(Notification.permission==="default"&&await Notification.requestPermission(),Notification.permission!=="granted")throw I.create("permission-blocked");return await pa(e,t==null?void 0:t.vapidKey),await ha(e,t==null?void 0:t.serviceWorkerRegistration),ta(e)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ma(e,t,n){const r=ga(t);(await e.firebaseDependencies.analyticsProvider.get()).logEvent(r,{message_id:n[Wn],message_name:n[ji],message_time:n[Hi],message_device_time:Math.floor(Date.now()/1e3)})}function ga(e){switch(e){case te.NOTIFICATION_CLICKED:return"notification_open";case te.PUSH_RECEIVED:return"notification_foreground";default:throw new Error}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ba(e,t){const n=t.data;if(!n.isFirebaseMessaging)return;e.onMessageHandler&&n.messageType===te.PUSH_RECEIVED&&(typeof e.onMessageHandler=="function"?e.onMessageHandler(jt(n)):e.onMessageHandler.next(jt(n)));const r=n.data;ca(r)&&r[Ui]==="1"&&await ma(e,n.messageType,r)}const Ht="@firebase/messaging",Ut="0.12.16";/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const wa=e=>{const t=new la(e.getProvider("app").getImmediate(),e.getProvider("installations-internal").getImmediate(),e.getProvider("analytics-internal"));return navigator.serviceWorker.addEventListener("message",n=>ba(t,n)),t},ya=e=>{const t=e.getProvider("messaging").getImmediate();return{getToken:r=>Gn(t,r)}};function Ea(){z(new F("messaging",wa,"PUBLIC")),z(new F("messaging-internal",ya,"PRIVATE")),L(Ht,Ut),L(Ht,Ut,"esm2017")}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Sa(){try{await En()}catch{return!1}return typeof window<"u"&&yn()&&Fo()&&"serviceWorker"in navigator&&"PushManager"in window&&"Notification"in window&&"fetch"in window&&ServiceWorkerRegistration.prototype.hasOwnProperty("showNotification")&&PushSubscription.prototype.hasOwnProperty("getKey")}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Ta(e,t){if(!navigator)throw I.create("only-available-in-window");return e.onMessageHandler=t,()=>{e.onMessageHandler=null}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Aa(e=$s()){return Sa().then(t=>{if(!t)throw I.create("unsupported-browser")},t=>{throw I.create("indexed-db-unsupported")}),tt(Qe(e),"messaging").getImmediate()}async function _a(e,t){return e=Qe(e),Gn(e,t)}function Ia(e,t){return e=Qe(e),Ta(e,t)}Ea();const Oa={apiKey:"AIzaSyCvUPJmwjQyZof5HN19Tdm2AmgGuIX12eA",authDomain:"globalnetwork-5c900.firebaseapp.com",projectId:"globalnetwork-5c900",storageBucket:"globalnetwork-5c900.firebasestorage.app",messagingSenderId:"888777265294",appId:"1:888777265294:web:5d399f18042c76ec8df9df",measurementId:"G-ZTRM9SLYBS"},Ca=An(Oa),Xn=Aa(Ca);Ia(Xn,e=>{console.log("Message received: ",e)});document.addEventListener("DOMContentLoaded",function(){if(localStorage.getItem("notifPermission")=="denied")return;let t=document.getElementById("notifPopup");Notification.permission==="default"&&setTimeout(()=>{t.style.display="block"},3e3),document.getElementById("closePopup").addEventListener("click",function(){t.style.display="none",localStorage.setItem("notifPermission","denied")});let r=document.getElementById("requestNotification");r&&r.addEventListener("click",function(){t.style.display="none",Notification.requestPermission().then(o=>{o==="granted"?(localStorage.setItem("notifPermission",o),_a(Xn,{vapidKey:"BPY_9dc1MIaSpX4HlfpRTZk8J7gArQLkfbpRHAWeUw2sGldHuWpsjdZlhqd74XKfWLnWCU1v4sqMz_vgJKki7JE"}).then(s=>{s?(console.log("Token:",s),fetch("/fcm_token/store",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},body:JSON.stringify({token:s})}).then(i=>i.json()).then(i=>console.log("Token saved:",i)).catch(i=>console.error("Error saving token:",i))):console.log("No registration token available.")}).catch(s=>{console.log("Error retrieving token:",s)})):localStorage.setItem("notifPermission",o)})})});"serviceWorker"in navigator&&navigator.serviceWorker.register("/firebase-messaging-sw.js").then(e=>{console.log("Service Worker registered:",e)}).catch(e=>{console.log("Service Worker registration failed:",e)});
