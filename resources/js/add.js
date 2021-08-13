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


ingredientsHandle = function()
{
    return {
        ingredients: [new EmptyIngredient()],
        addIngredient() {
            this.ingredients.push(new EmptyIngredient());
        },
        removeIngredient(index) {
            this.ingredients.splice(index, 1);
        }
    }
}

stepsHandle = function () {
    return {
        steps: [new EmptyStep()],
        addStep() {
            this.steps.push(new EmptyStep())
        },
        removeStep(index) {
            this.steps.splice(index, 1);
        }
    }
}
