<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Ricettario</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- page-wrapper: contenitore principale per centrare e dare spazio -->
  <div class="page-wrapper">
    <!-- L'articolo rappresenta una SINGOLA ricetta -->
    <article class="recipe-card">
      <!-- Header con immagine e titolo -->
      <header class="recipe-header">
        <figure class="recipe-image">
          <img src="../recipe-page-main/assets/images/image-omelette.jpeg" alt="Example Recipe" />
        </figure>
        <h1 class="recipe-title">Titolo di test</h1>
        <p class="recipe-intro">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius odit earum quasi doloremque expedita...
        </p>
      </header>

      <!-- Sezione dedicata alle info sul tempo -->
      <section class="recipe-time">
        <h2 class="section-title">Preparation Time</h2>
        <ul class="time-list">
          <li><span>Total:</span> ~10 min</li>
          <li><span>Preparation:</span> 5 min</li>
          <li><span>Cooking:</span> 10 min</li>
        </ul>
      </section>

      <!-- Sezione Ingredienti -->
      <section class="recipe-ingredients">
        <h2 class="section-title">Ingredients</h2>
        <ul class="ingredient-list">
          <li>2-3 large eggs</li>
          <li>Salt, to taste</li>
          <li>Pepper, to taste</li>
          <li>1 tablespoon of butter or oil</li>
          <li>Optional: cheese, diced vegetables, cooked meats, herbs</li>
        </ul>
      </section>

      <hr />

      <!-- Sezione Istruzioni -->
      <section class="recipe-instructions">
        <h2 class="section-title">Instructions</h2>
        <ol class="instruction-steps">
          <li><span>Preheat</span> the oven to 350°F (175°C)</li>
          <li><span>Beat</span> the eggs in a bowl until smooth</li>
          <li><span>Add</span> salt and pepper to taste</li>
          <li><span>Stir</span> in the butter or oil</li>
          <li><span>Grease</span> a 9x13 inch pan with cooking spray</li>
          <li><span>Spoon</span> the batter evenly into the pan</li>
          <li><span>Bake</span> for 20-25 minutes, or until golden brown</li>
        </ol>
      </section>

      <hr />

      <!-- Sezione Nutrizione (aside) -->
      <aside class="recipe-nutrition">
        <h2 class="section-title">Nutrition</h2>
        <div class="nutrition-grid">
          <div class="nutrient">
            <span>Calories</span>
            <strong>200</strong>
          </div>
          <div class="nutrient">
            <span>Protein</span>
            <strong>10g</strong>
          </div>
          <div class="nutrient">
            <span>Fat</span>
            <strong>10g</strong>
          </div>
          <div class="nutrient">
            <span>Carbs</span>
            <strong>10g</strong>
          </div>
        </div>
      </aside>
    </article>
  </div>
</body>

</html>
