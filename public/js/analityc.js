/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 227);
/******/ })
/************************************************************************/
/******/ ({

/***/ 227:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(228);


/***/ }),

/***/ 228:
/***/ (function(module, exports) {

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    responsive: true,
    type: 'horizontalBar',
    data: {
        labels: ["Activity Management", "Quality Control", "Customer Expirience"],
        datasets: [{
            label: 'Total Score',
            data: response,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx2 = document.getElementById("activity_chart");
var myChart2 = new Chart(ctx2, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["SDC Production", "Production Goal", "SDC Service", "Service Goal"],
        datasets: [{
            label: 'Data presented on Percentage (%)',
            data: response_activity,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/***/ })

/******/ });