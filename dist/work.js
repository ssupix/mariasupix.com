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

/***/ "./js/filter.js":
/*!**********************!*\
  !*** ./js/filter.js ***!
  \**********************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var filterMenuItems = document.querySelectorAll('.filter .menu li');\n  var projectCards = document.querySelectorAll('.work-projects .card, .work-projects-list .card-list');\n  filterMenuItems.forEach(function (menuItem) {\n    menuItem.addEventListener('click', function () {\n      // Remove 'selected' class from all items\n      filterMenuItems.forEach(function (item) {\n        return item.classList.remove('selected');\n      });\n\n      // Add 'selected' class to the clicked item\n      menuItem.classList.add('selected');\n      var selectedCategory = menuItem.id;\n\n      // close menu after selection\n      document.querySelector('.filter .menu').classList.remove('show');\n\n      // Show or hide project cards based on the selected category\n      projectCards.forEach(function (card) {\n        var cardCategory = card.getAttribute('data-category');\n        if (selectedCategory === 'all' || cardCategory === selectedCategory) {\n          card.style.display = 'flex';\n        } else {\n          card.style.display = 'none';\n        }\n      });\n    });\n  });\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/filter.js?");

/***/ }),

/***/ "./js/viewtoggle.js":
/*!**************************!*\
  !*** ./js/viewtoggle.js ***!
  \**************************/
/***/ (() => {

eval("var gridSwitch = document.querySelector('.grid-switch');\nvar listSwitch = document.querySelector('.list-switch');\nvar workProjectsGrid = document.querySelector('.work-projects');\nvar workProjectsList = document.querySelector('.work-projects-list');\ngridSwitch.addEventListener('click', function () {\n  workProjectsGrid.classList.remove('hidden');\n  workProjectsList.classList.add('hidden');\n  gridSwitch.classList.add('active-switch');\n  listSwitch.classList.remove('active-switch');\n});\nlistSwitch.addEventListener('click', function () {\n  workProjectsList.classList.remove('hidden');\n  workProjectsGrid.classList.add('hidden');\n  listSwitch.classList.add('active-switch');\n  gridSwitch.classList.remove('active-switch');\n});\n\n//# sourceURL=webpack://mashasupix.com/./js/viewtoggle.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./js/filter.js"]();
/******/ 	__webpack_modules__["./js/viewtoggle.js"]();
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./js/dropdown.js"]();
/******/ 	
/******/ })()
;