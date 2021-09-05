class EmptyIngredient {
    constructor() {
    this.amount = null;
    this.unit = null;
    this.name = null;
    }
}

class EmptyStep {
    constructor() {
    this.description = null;
    }
}

ingredientsHandle = function(ingredients=[new EmptyIngredient()])
{
    return {
        ingredients: ingredients,
        addIngredient() {
            this.ingredients.push(new EmptyIngredient());
        },
        removeIngredient(index) {
            this.ingredients.splice(index, 1);
        }
    }
}

stepsHandle = function (steps=[new EmptyStep()]) {
    return {
        steps: steps,
        addStep() {
            this.steps.push(new EmptyStep())
        },
        removeStep(index) {
            this.steps.splice(index, 1);
        }
    }
}

enableSubmitButton = function ()
{
    document.getElementById('submitRecipe').disabled = false;
}
