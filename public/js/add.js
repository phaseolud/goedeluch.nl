/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/add.js ***!
  \*****************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var EmptyIngredient = function EmptyIngredient() {
  _classCallCheck(this, EmptyIngredient);

  this.amount = null;
  this.unit = null;
  this.name = null;
};

var EmptyStep = function EmptyStep() {
  _classCallCheck(this, EmptyStep);

  this.description = null;
};

ingredientsHandle = function ingredientsHandle() {
  return {
    ingredients: [new EmptyIngredient()],
    addIngredient: function addIngredient() {
      this.ingredients.push(new EmptyIngredient());
    },
    removeIngredient: function removeIngredient(index) {
      this.ingredients.splice(index, 1);
    }
  };
};

stepsHandle = function stepsHandle() {
  return {
    steps: [new EmptyStep()],
    addStep: function addStep() {
      this.steps.push(new EmptyStep());
    },
    removeStep: function removeStep(index) {
      this.steps.splice(index, 1);
    }
  };
};
/******/ })()
;