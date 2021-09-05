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
  var ingredients = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [new EmptyIngredient()];
  return {
    ingredients: ingredients,
    addIngredient: function addIngredient() {
      this.ingredients.push(new EmptyIngredient());
    },
    removeIngredient: function removeIngredient(index) {
      this.ingredients.splice(index, 1);
    }
  };
};

stepsHandle = function stepsHandle() {
  var steps = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [new EmptyStep()];
  return {
    steps: steps,
    addStep: function addStep() {
      this.steps.push(new EmptyStep());
    },
    removeStep: function removeStep(index) {
      this.steps.splice(index, 1);
    }
  };
};

enableSubmitButton = function enableSubmitButton() {
  document.getElementById('submitRecipe').disabled = false;
};
/******/ })()
;