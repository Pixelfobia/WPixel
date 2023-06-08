/*! For license information please see blocks.js.LICENSE.txt */
!function(){"use strict";var e={"./src/js/gutenberg/blocks/heading-with-icon/edit.js":function(e,t,n){n.r(t);var o=n("@wordpress/block-editor"),s=n("@wordpress/i18n"),r=n("@wordpress/components"),c=n("./src/js/gutenberg/blocks/heading-with-icon/icons-map.js");t.default=function(e){var t=e.className,n=e.attributes,i=e.setAttributes,a=n.option,l=n.content,d=(0,c.getIconComponent)(a);return React.createElement("div",{className:"wpixel-icon-heading"},React.createElement("span",{className:"wpixel-icon-heading__heading"},React.createElement(d,null)),React.createElement(o.RichText,{tagName:"h4",className:t,value:l,onChange:function(e){return i({content:e})},placeholder:(0,s.__)("Heading...","wpixel")}),React.createElement(o.InspectorControls,null,React.createElement(r.PanelBody,{title:(0,s.__)("Block Settings","wpixel")},React.createElement(r.RadioControl,{label:(0,s.__)("Select the icon","wpixel"),help:(0,s.__)("Controls icon selection","wpixel"),selected:a,options:[{label:(0,s.__)("Dos","wpixel"),value:"dos"},{label:(0,s.__)("Dont's","wpixel"),value:"donts"}],onChange:function(e){i({option:e})}}))))}},"./src/js/gutenberg/blocks/heading-with-icon/icons-map.js":function(e,t,n){n.r(t),n.d(t,{getIconComponent:function(){return r}});var o=n("./src/js/icons/index.js"),s=n("lodash"),r=function(e){var t={dos:o.Check,donts:o.Cross};return!(0,s.isEmpty)(e)&&e in t?t[e]:t.dos}},"./src/js/gutenberg/blocks/heading-with-icon/index.js":function(e,t,n){n.r(t);var o=n("@wordpress/blocks"),s=n("@wordpress/i18n"),r=n("@wordpress/block-editor"),c=n("./src/js/gutenberg/blocks/heading-with-icon/edit.js"),i=n("./src/js/gutenberg/blocks/heading-with-icon/icons-map.js");(0,o.registerBlockType)("wpixel-blocks/heading",{title:(0,s.__)("Heading with Icon","wpixel"),icon:"admin-customizer",description:(0,s.__)("Add Heading and select Icons","wpixel"),category:"wpixel",attributes:{option:{type:"string",default:"dos"},content:{type:"string",source:"html",selector:"h4",default:(0,s.__)("Dos","wpixel")}},edit:c.default,save:function(e){var t=e.attributes,n=t.option,o=t.content,s=(0,i.getIconComponent)(n);return React.createElement("div",{className:"wpixel-icon-heading"},React.createElement("span",{className:"wpixel-icon-heading__heading"},React.createElement(s,null)),React.createElement(r.RichText.Content,{tagName:"h4",value:o}))}})},"./src/js/icons/Check.js":function(e,t,n){function o(){return o=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},o.apply(this,arguments)}n.r(t);t.default=function(e){return React.createElement("svg",o({xmlns:"http://www.w3.org/2000/svg",xmlSpace:"preserve",width:20,height:20,style:{enableBackground:"new 0 0 20 20"},viewBox:"0 0 417.813 417"},e),React.createElement("path",{xmlns:"http://www.w3.org/2000/svg",fill:"#06ab1c",d:"M159.988 318.582c-3.988 4.012-9.43 6.25-15.082 6.25s-11.094-2.238-15.082-6.25L9.375 198.113c-12.5-12.5-12.5-32.77 0-45.246l15.082-15.086c12.504-12.5 32.75-12.5 45.25 0l75.2 75.203L348.104 9.781c12.504-12.5 32.77-12.5 45.25 0l15.082 15.086c12.5 12.5 12.5 32.766 0 45.246zm0 0","data-original":"#2196f3"}))}},"./src/js/icons/Cross.js":function(e,t,n){function o(){return o=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},o.apply(this,arguments)}n.r(t);t.default=function(e){return React.createElement("svg",o({xmlns:"http://www.w3.org/2000/svg",xmlSpace:"preserve",width:20,height:20,style:{enableBackground:"new 0 0 20 20"},viewBox:"0 0 123.05 123.05"},e),React.createElement("path",{xmlns:"http://www.w3.org/2000/svg",fill:"#e30101",d:"m121.325 10.925-8.5-8.399c-2.3-2.3-6.1-2.3-8.5 0l-42.4 42.399L18.726 1.726c-2.301-2.301-6.101-2.301-8.5 0l-8.5 8.5c-2.301 2.3-2.301 6.1 0 8.5l43.1 43.1-42.3 42.5c-2.3 2.3-2.3 6.1 0 8.5l8.5 8.5c2.3 2.3 6.1 2.3 8.5 0l42.399-42.4 42.4 42.4c2.3 2.3 6.1 2.3 8.5 0l8.5-8.5c2.3-2.3 2.3-6.1 0-8.5l-42.5-42.4 42.4-42.399a6.13 6.13 0 0 0 .1-8.602z","data-original":"#000000"}))}},"./src/js/icons/index.js":function(e,t,n){n.r(t),n.d(t,{Check:function(){return o.default},Cross:function(){return s.default}});var o=n("./src/js/icons/Check.js"),s=n("./src/js/icons/Cross.js")},"./src/sass/blocks.scss":function(e,t,n){n.r(t)},lodash:function(e){e.exports=window.lodash},"@wordpress/block-editor":function(e){e.exports=window.wp.blockEditor},"@wordpress/blocks":function(e){e.exports=window.wp.blocks},"@wordpress/components":function(e){e.exports=window.wp.components},"@wordpress/i18n":function(e){e.exports=window.wp.i18n}},t={};function n(o){var s=t[o];if(void 0!==s)return s.exports;var r=t[o]={exports:{}};return e[o](r,r.exports,n),r.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var o={};!function(){n.r(o);n("./src/sass/blocks.scss"),n("./src/js/gutenberg/blocks/heading-with-icon/index.js")}()}();
//# sourceMappingURL=blocks.js.map