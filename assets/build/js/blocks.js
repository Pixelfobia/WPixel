/*! For license information please see blocks.js.LICENSE.txt */
!function(){"use strict";var e={"./src/js/gutenberg/block-extensions/register-block-styles.js":function(e,n,t){t.r(n);var o=t("@wordpress/blocks"),s=t("@wordpress/i18n"),r=[{name:"layout-dark-background",label:(0,s.__)("Dark background","wpixel")}],c=[{name:"layout-border-blue-fill",label:(0,s.__)("Blue outline","wpixel")},{name:"layout-border-white-no-fill",label:(0,s.__)("White outline - to be used with dark background","wpixel")}];wp.domReady((function(){r.forEach((function(e){return(0,o.registerBlockStyle)("core/quote",e)})),c.forEach((function(e){return(0,o.registerBlockStyle)("core/button",e)}))}))},"./src/js/gutenberg/blocks/dos-and-donts/edit.js":function(e,n,t){t.r(n);var o=t("@wordpress/block-editor"),s=t("./src/js/gutenberg/blocks/dos-and-donts/templates.js"),r=["core/group"],c=[["core/group",{className:"wpixel-dos-and-donts__group",backgroundColor:"cyan-bluish-gray"},s.blockColumns]];n.default=function(){return React.createElement("div",{className:"wpixel-dos-and-donts"},React.createElement(o.InnerBlocks,{allowedBlocks:r,template:c,templateLock:!0}))}},"./src/js/gutenberg/blocks/dos-and-donts/index.js":function(e,n,t){t.r(n);var o=t("@wordpress/blocks"),s=t("@wordpress/i18n"),r=t("@wordpress/block-editor"),c=t("./src/js/gutenberg/blocks/dos-and-donts/edit.js");(0,o.registerBlockType)("wpixel-blocks/dos-and-donts",{title:(0,s.__)("Dos and dont's","wpixel"),icon:"editor-table",description:(0,s.__)("Add Heading and text","wpixel"),category:"wpixel",edit:c.default,save:function(){return React.createElement("div",{className:"wpixel-dos-and-donts"},React.createElement(r.InnerBlocks.Content,null))}})},"./src/js/gutenberg/blocks/dos-and-donts/templates.js":function(e,n,t){t.r(n),t.d(n,{blockColumns:function(){return s}});var o=function(e,n,t){return["core/column",{className:n},[["wpixel-blocks/heading",{className:"wpixel-dos-and-donts__heading",option:e,content:t}],["core/list",{className:"wpixel-dos-and-donts__list"}]]]},s=[["core/columns",{className:"wpixel-dos-and-donts__cols"},[o("dos","wpixel-dos-and-donts__col-one","Dos"),o("donts","wpixel-dos-and-donts__col-two","Dont's")]]]},"./src/js/gutenberg/blocks/heading-with-icon/edit.js":function(e,n,t){t.r(n);var o=t("@wordpress/block-editor"),s=t("@wordpress/i18n"),r=t("@wordpress/components"),c=t("./src/js/gutenberg/blocks/heading-with-icon/icons-map.js");n.default=function(e){var n=e.className,t=e.attributes,i=e.setAttributes,l=t.option,a=t.content,d=(0,c.getIconComponent)(l);return React.createElement("div",{className:"wpixel-icon-heading"},React.createElement("span",{className:"wpixel-icon-heading__heading"},React.createElement(d,null)),React.createElement(o.RichText,{tagName:"h4",className:n,value:a,onChange:function(e){return i({content:e})},placeholder:(0,s.__)("Heading…","wpixel")}),React.createElement(o.InspectorControls,null,React.createElement(r.PanelBody,{title:(0,s.__)("Block Settings","wpixel")},React.createElement(r.RadioControl,{label:(0,s.__)("Select the icon","wpixel"),help:(0,s.__)("Controls icon selection","wpixel"),selected:l,options:[{label:(0,s.__)("Dos","wpixel"),value:"dos"},{label:(0,s.__)("Dont's","wpixel"),value:"donts"}],onChange:function(e){i({option:e})}}))))}},"./src/js/gutenberg/blocks/heading-with-icon/icons-map.js":function(e,n,t){t.r(n),t.d(n,{getIconComponent:function(){return r}});var o=t("./src/js/icons/index.js"),s=t("lodash"),r=function(e){var n={dos:o.Check,donts:o.Cross};return!(0,s.isEmpty)(e)&&e in n?n[e]:n.dos}},"./src/js/gutenberg/blocks/heading-with-icon/index.js":function(e,n,t){t.r(n);var o=t("@wordpress/blocks"),s=t("@wordpress/i18n"),r=t("@wordpress/block-editor"),c=t("./src/js/gutenberg/blocks/heading-with-icon/edit.js"),i=t("./src/js/gutenberg/blocks/heading-with-icon/icons-map.js");(0,o.registerBlockType)("wpixel-blocks/heading",{title:(0,s.__)("Heading with Icon","wpixel"),icon:"admin-customizer",description:(0,s.__)("Add Heading and select Icons","wpixel"),category:"wpixel",attributes:{option:{type:"string",default:"dos"},content:{type:"string",source:"html",selector:"h4",default:(0,s.__)("Dos","wpixel")}},edit:c.default,save:function(e){var n=e.attributes,t=n.option,o=n.content,s=(0,i.getIconComponent)(t);return React.createElement("div",{className:"wpixel-icon-heading"},React.createElement("span",{className:"wpixel-icon-heading__heading"},React.createElement(s,null)),React.createElement(r.RichText.Content,{tagName:"h4",value:o}))}})},"./src/js/icons/Check.js":function(e,n,t){function o(){return o=Object.assign?Object.assign.bind():function(e){for(var n=1;n<arguments.length;n++){var t=arguments[n];for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o])}return e},o.apply(this,arguments)}t.r(n);n.default=function(e){return React.createElement("svg",o({xmlns:"http://www.w3.org/2000/svg",xmlSpace:"preserve",width:20,height:20,style:{enableBackground:"new 0 0 20 20"},viewBox:"0 0 417.813 417"},e),React.createElement("path",{xmlns:"http://www.w3.org/2000/svg",fill:"#06ab1c",d:"M159.988 318.582c-3.988 4.012-9.43 6.25-15.082 6.25s-11.094-2.238-15.082-6.25L9.375 198.113c-12.5-12.5-12.5-32.77 0-45.246l15.082-15.086c12.504-12.5 32.75-12.5 45.25 0l75.2 75.203L348.104 9.781c12.504-12.5 32.77-12.5 45.25 0l15.082 15.086c12.5 12.5 12.5 32.766 0 45.246zm0 0","data-original":"#2196f3"}))}},"./src/js/icons/Cross.js":function(e,n,t){function o(){return o=Object.assign?Object.assign.bind():function(e){for(var n=1;n<arguments.length;n++){var t=arguments[n];for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o])}return e},o.apply(this,arguments)}t.r(n);n.default=function(e){return React.createElement("svg",o({xmlns:"http://www.w3.org/2000/svg",xmlSpace:"preserve",width:20,height:20,style:{enableBackground:"new 0 0 20 20"},viewBox:"0 0 123.05 123.05"},e),React.createElement("path",{xmlns:"http://www.w3.org/2000/svg",fill:"#e30101",d:"m121.325 10.925-8.5-8.399c-2.3-2.3-6.1-2.3-8.5 0l-42.4 42.399L18.726 1.726c-2.301-2.301-6.101-2.301-8.5 0l-8.5 8.5c-2.301 2.3-2.301 6.1 0 8.5l43.1 43.1-42.3 42.5c-2.3 2.3-2.3 6.1 0 8.5l8.5 8.5c2.3 2.3 6.1 2.3 8.5 0l42.399-42.4 42.4 42.4c2.3 2.3 6.1 2.3 8.5 0l8.5-8.5c2.3-2.3 2.3-6.1 0-8.5l-42.5-42.4 42.4-42.399a6.13 6.13 0 0 0 .1-8.602z","data-original":"#000000"}))}},"./src/js/icons/index.js":function(e,n,t){t.r(n),t.d(n,{Check:function(){return o.default},Cross:function(){return s.default}});var o=t("./src/js/icons/Check.js"),s=t("./src/js/icons/Cross.js")},"./src/sass/blocks.scss":function(e,n,t){t.r(n)},lodash:function(e){e.exports=window.lodash},"@wordpress/block-editor":function(e){e.exports=window.wp.blockEditor},"@wordpress/blocks":function(e){e.exports=window.wp.blocks},"@wordpress/components":function(e){e.exports=window.wp.components},"@wordpress/i18n":function(e){e.exports=window.wp.i18n}},n={};function t(o){var s=n[o];if(void 0!==s)return s.exports;var r=n[o]={exports:{}};return e[o](r,r.exports,t),r.exports}t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,{a:n}),n},t.d=function(e,n){for(var o in n)t.o(n,o)&&!t.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:n[o]})},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var o={};!function(){t.r(o);t("./src/sass/blocks.scss"),t("./src/js/gutenberg/blocks/heading-with-icon/index.js"),t("./src/js/gutenberg/blocks/dos-and-donts/index.js"),t("./src/js/gutenberg/block-extensions/register-block-styles.js")}()}();
//# sourceMappingURL=blocks.js.map