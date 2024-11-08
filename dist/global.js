/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/cursor.js":
/*!**********************!*\
  !*** ./js/cursor.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\n\n// GSAP cursor follower logic\nvar cursor = document.getElementById('cursor-follower');\nvar cursorText = cursor.querySelector('.cursor-text');\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.set(cursor, {\n  xPercent: -5,\n  yPercent: -5\n});\nvar xTo = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.quickTo(cursor, \"x\", {\n    duration: 0.6,\n    ease: \"power3\"\n  }),\n  yTo = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.quickTo(cursor, \"y\", {\n    duration: 0.6,\n    ease: \"power3\"\n  });\n\n// Base cursor movement\nwindow.addEventListener(\"mousemove\", function (e) {\n  xTo(e.clientX);\n  yTo(e.clientY);\n});\n\n// Hover effect with custom text\ndocument.querySelectorAll('.hover-content').forEach(function (el) {\n  el.addEventListener('mouseenter', function () {\n    cursor.classList.add('hover');\n    cursorText.textContent = el.dataset.hoverText || 'learn more';\n  });\n  el.addEventListener('mouseleave', function () {\n    cursor.classList.remove('hover');\n    cursorText.textContent = '';\n  });\n});\n\n// Initial opacity\nwindow.addEventListener(\"mousemove\", function () {\n  cursor.style.opacity = 1;\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/cursor.js?");

/***/ }),

/***/ "./js/nav.js":
/*!*******************!*\
  !*** ./js/nav.js ***!
  \*******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap/ScrollTrigger */ \"./node_modules/gsap/ScrollTrigger.js\");\n\n\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger);\ndocument.addEventListener('DOMContentLoaded', function () {\n  var logo = document.querySelector('nav .logo svg');\n  var path = logo.querySelector('path');\n  gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger.create({\n    trigger: 'window',\n    start: 'top top',\n    end: '130px top',\n    onUpdate: function onUpdate(self) {\n      var progress = self.progress;\n\n      // Transition fill from black to transparent\n      var fillOpacity = 1 - progress;\n      path.style.fill = \"rgba(0, 0, 0, \".concat(fillOpacity, \")\");\n\n      // Transition stroke from transparent to black\n      var strokeOpacity = progress;\n      path.style.stroke = \"rgba(0, 0, 0, \".concat(strokeOpacity, \")\");\n      path.style.strokeWidth = \"\".concat(progress * 2, \"px\");\n\n      // Add data attribute to track state\n      if (progress > 0.5) {\n        logo.setAttribute('data-state', 'outlined');\n      } else {\n        logo.setAttribute('data-state', 'filled');\n      }\n    }\n  });\n});\n\n// HAMBURGER MENU\n\nvar hamMenu = document.querySelector(\".ham-menu\");\nvar offScreenMenu = document.querySelector(\".off-screen-menu\");\nhamMenu.addEventListener(\"click\", function () {\n  hamMenu.classList.toggle(\"active\");\n  offScreenMenu.classList.toggle(\"active\");\n});\n\n// NAV LINKS CURRENT STYLE\n\nfunction setCurrentClass() {\n  var currentPage = window.location.pathname.split(\"/\").pop(); // Get the current page name\n  var navLinks = document.querySelectorAll('.nav-link'); // Select all links with class 'nav-link'\n\n  navLinks.forEach(function (link) {\n    var pageName = link.getAttribute('href').split(\"/\").pop(); // Get the page name from href\n    if (currentPage === \"\" && pageName === \"./\") {\n      // Set current for the home page when on the root index.php\n      link.classList.add('current');\n    } else if (currentPage === pageName) {\n      // Set current for matching pages (e.g., work.php, about.php)\n      link.classList.add('current');\n    }\n  });\n}\nsetCurrentClass();\n\n//# sourceURL=webpack://mashasupix.com/./js/nav.js?");

/***/ }),

/***/ "./js/sayhi.js":
/*!*********************!*\
  !*** ./js/sayhi.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\n\n// RUNNING TEXT LINE\n// animates elements with the class .running ul li\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".running-line ul li\", {\n  // set the animation duration to 6 seconds\n  duration: 4,\n  // moves the elements horizontally by -102%\n  x: \"-105%\",\n  // linear easing\n  ease: \"linear\",\n  // makes the animation repeat infinitely\n  repeat: -1\n});\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".mobile-running-line ul\", {\n  // set the animation duration to 6 seconds\n  duration: 10,\n  // moves the elements horizontally by -102%\n  x: \"-104%\",\n  // linear easing\n  ease: \"linear\",\n  // makes the animation repeat infinitely\n  repeat: -1\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/sayhi.js?");

/***/ }),

/***/ "./js/scroll.js":
/*!**********************!*\
  !*** ./js/scroll.js ***!
  \**********************/
/***/ (() => {

eval("document.addEventListener('scroll', function () {\n  var scrolled = window.scrollY;\n  var scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;\n  var scrollPercentage = scrolled / scrollableHeight * 100;\n  document.querySelector('.bottom-right').textContent = \"\".concat(Math.round(scrollPercentage), \"%\");\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/scroll.js?");

/***/ }),

/***/ "./js/smooth.js":
/*!**********************!*\
  !*** ./js/smooth.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var lenis__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lenis */ \"./node_modules/lenis/dist/lenis.mjs\");\n\nvar lenis = new lenis__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\nfunction raf(time) {\n  lenis.raf(time);\n  requestAnimationFrame(raf);\n}\nrequestAnimationFrame(raf);\n\n//# sourceURL=webpack://mashasupix.com/./js/smooth.js?");

/***/ }),

/***/ "./js/tippy.js":
/*!*********************!*\
  !*** ./js/tippy.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var tippy_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tippy.js */ \"./node_modules/tippy.js/dist/tippy.esm.js\");\n\n\nvar elements = document.querySelectorAll('.context');\nelements.forEach(function (element) {\n  (0,tippy_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(element, {\n    content: element.getAttribute('data-tippy-content'),\n    theme: 'custom'\n  });\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/tippy.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"global": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkmashasupix_com"] = self["webpackChunkmashasupix_com"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/smooth.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/cursor.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/nav.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/tippy.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/sayhi.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/scroll.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;