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

/***/ "./js/banner.js":
/*!**********************!*\
  !*** ./js/banner.js ***!
  \**********************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var bannerImage = document.querySelector('.overlay');\n  var observerOptions = {\n    root: null,\n    // this means the viewport\n    threshold: 0.5\n  };\n  var observerCallback = function observerCallback(entries) {\n    entries.forEach(function (entry) {\n      if (entry.isIntersecting) {\n        bannerImage.classList.add('in-view');\n      } else {\n        bannerImage.classList.remove('in-view');\n      }\n    });\n  };\n  var observer = new IntersectionObserver(observerCallback, observerOptions);\n  observer.observe(bannerImage);\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/banner.js?");

/***/ }),

/***/ "./js/scramble.js":
/*!************************!*\
  !*** ./js/scramble.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n\nfunction scrambleText(targetId, newText) {\n  var duration = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 1.5;\n  var element = document.getElementById(targetId);\n  var originalText = element.innerText;\n  var length = originalText.length; // Use original length to maintain width\n\n  var currentText = originalText;\n  var chars = 'abcdefghijklmnopqrstuvwxyz';\n\n  // Set a fixed width to prevent layout shifts\n  element.style.display = 'inline-block';\n  element.style.width = \"\".concat(element.offsetWidth, \"px\");\n  return gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to({}, {\n    duration: duration,\n    onUpdate: function onUpdate() {\n      var progress = this.progress();\n      var result = '';\n      for (var i = 0; i < length; i++) {\n        if (i < newText.length * progress && i < newText.length) {\n          result += newText[i];\n        } else if (i < currentText.length) {\n          if (Math.random() < 0.1) {\n            result += chars[Math.floor(Math.random() * chars.length)];\n          } else {\n            result += currentText[i];\n          }\n        } else {\n          result += ' ';\n        }\n      }\n      // Trim or pad the result to match the original length\n      result = result.slice(0, length).padEnd(length, ' ');\n      element.innerText = result;\n      currentText = result;\n    },\n    onComplete: function onComplete() {\n      // Trim or pad the final text to match the original length\n      element.innerText = newText.slice(0, length).padEnd(length, ' ');\n      // Remove fixed width after animation\n      element.style.width = '';\n    }\n  });\n}\n// Use the function\nscrambleText(\"scrambleText\", \"front-end developer & product designer\");\n\n//# sourceURL=webpack://mashasupix.com/./js/scramble.js?");

/***/ }),

/***/ "./js/spinner.js":
/*!***********************!*\
  !*** ./js/spinner.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ \"./node_modules/gsap/index.js\");\n/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap/ScrollTrigger */ \"./node_modules/gsap/ScrollTrigger.js\");\n// LOGO SPINNER\n\n\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger);\n\n// GSAP timeline for spinning to the right\ngsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".logo-spinner\", {\n  rotation: 360,\n  duration: 30,\n  repeat: -1,\n  ease: \"linear\"\n});\n\n// Function to reverse the spinning direction\nfunction reverseSpin() {\n  gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".logo-spinner\", {\n    rotation: -360,\n    duration: 30,\n    repeat: -1,\n    ease: \"linear\"\n  });\n}\n\n// ScrollTrigger to detect scrolling\ngsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger.create({\n  onUpdate: function onUpdate(self) {\n    if (self.direction === 1) {\n      // scrolling down\n      reverseSpin();\n    } else if (self.direction === -1) {\n      // scrolling up\n      gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.to(\".logo-spinner\", {\n        rotation: 360,\n        duration: 30,\n        repeat: -1,\n        ease: \"linear\"\n      });\n    }\n  }\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/spinner.js?");

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
/******/ 			"home": 0
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
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/banner.js")))
/******/ 	__webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/scramble.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors"], () => (__webpack_require__("./js/spinner.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;