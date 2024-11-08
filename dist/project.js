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

/***/ "./js/dropdown.js":
/*!************************!*\
  !*** ./js/dropdown.js ***!
  \************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var filterMenuItems = document.querySelectorAll('.filter .menu li');\n  var projectCards = document.querySelectorAll('.work-projects .card, .work-projects-list .card-list');\n  var currentText = document.querySelector('.filter .select .current');\n  filterMenuItems.forEach(function (menuItem) {\n    menuItem.addEventListener('click', function () {\n      // Remove 'selected' class from all items\n      filterMenuItems.forEach(function (item) {\n        return item.classList.remove('selected');\n      });\n\n      // Add 'selected' class to the clicked item\n      menuItem.classList.add('selected');\n\n      // Update the current text in the filter\n      currentText.textContent = menuItem.textContent;\n      var selectedCategory = menuItem.id;\n\n      // Show or hide project cards based on the selected category\n      projectCards.forEach(function (card) {\n        var cardCategory = card.getAttribute('data-category');\n        if (selectedCategory === 'all' || cardCategory === selectedCategory) {\n          card.style.display = 'flex';\n        } else {\n          card.style.display = 'none';\n        }\n      });\n      document.querySelector('.filter').classList.remove('active');\n    });\n  });\n\n  // Handle dropdown open/close toggle\n  var filters = document.querySelectorAll('.filter');\n  filters.forEach(function (filter) {\n    var select = filter.querySelector('.select');\n    var menu = filter.querySelector('.menu');\n    select.addEventListener('click', function (e) {\n      e.stopPropagation();\n      // Toggle current filter's dropdown open/close\n      filter.classList.toggle('active');\n    });\n\n    // Close dropdown when clicking outside\n    document.addEventListener('click', function (event) {\n      if (!filter.contains(event.target)) {\n        filter.classList.remove('active');\n      }\n    });\n  });\n});\n\n// CODE\ndocument.querySelectorAll('.code-show').forEach(function (dropdown) {\n  var select = dropdown.querySelector('.select');\n  var caret = dropdown.querySelector('.caret');\n  var code = dropdown.querySelector('.code');\n  select.addEventListener('click', function () {\n    // Toggle active class for dropdown animation\n    dropdown.classList.toggle('active');\n\n    // Rotate the caret\n    caret.classList.toggle('caret-rotate');\n  });\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/dropdown.js?");

/***/ }),

/***/ "./js/highlight.js":
/*!*************************!*\
  !*** ./js/highlight.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var highlight_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! highlight.js */ \"./node_modules/highlight.js/es/index.js\");\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  highlight_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].highlightAll();\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/highlight.js?");

/***/ }),

/***/ "./js/moreprojects.js":
/*!****************************!*\
  !*** ./js/moreprojects.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\n\n// RUNNING CARDS LINE\n// animates elements with the class .running ul li\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".project-scroll ul li\", {\n  // set the animation duration to 6 seconds\n  duration: 15,\n  // moves the elements horizontally by -102%\n  x: \"-100%\",\n  // linear easing\n  ease: \"linear\",\n  // makes the animation repeat infinitely\n  repeat: -1\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/moreprojects.js?");

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
/******/ 			"project": 0
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
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/moreprojects.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/dropdown.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/highlight.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;