@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold mb-6 text-gray-900">Drinks Menu</h2>
  <!-- Soft Drinks -->
<div class="mb-8">
  <h3 class="text-xl font-semibold mb-4 text-gray-900">Soft Drinks</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Soft Drink 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Soft Drink 1" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Coca-Cola</h4>
              <p class="text-gray-700">Refreshing cola soda served chilled with ice.</p>
              <p class="text-gray-700 mt-2 font-bold">$2.99</p>
          </div>
      </div>

      <!-- Soft Drink 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Soft Drink 2" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Sprite</h4>
              <p class="text-gray-700">Lemon-lime flavored carbonated beverage, perfect for a refreshing drink.</p>
              <p class="text-gray-700 mt-2 font-bold">$2.99</p>
          </div>
      </div>

      <!-- Add more soft drinks here if needed -->
  </div>
</div>

<!-- Beers -->
<div class="mb-8">
  <h3 class="text-xl font-semibold mb-4 text-gray-900">Beers</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Beer 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Beer 1" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Stella Artois</h4>
              <p class="text-gray-700">Belgian pilsner beer known for its crisp, clean taste and golden color.</p>
              <p class="text-gray-700 mt-2 font-bold">$5.99</p>
          </div>
      </div>

      <!-- Beer 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Beer 2" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Guinness</h4>
              <p class="text-gray-700">Irish dry stout with a creamy head, characterized by its rich, roasted flavor.</p>
              <p class="text-gray-700 mt-2 font-bold">$6.99</p>
          </div>
      </div>

      <!-- Add more beers here if needed -->
  </div>
</div>

<!-- Warm Drinks -->
<div class="mb-8">
  <h3 class="text-xl font-semibold mb-4 text-gray-900">Warm Drinks</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Warm Drink 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Warm Drink 1" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Hot Chocolate</h4>
              <p class="text-gray-700">Rich and creamy chocolate drink served hot with marshmallows.</p>
              <p class="text-gray-700 mt-2 font-bold">$4.99</p>
          </div>
      </div>

      <!-- Warm Drink 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Warm Drink 2" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Chai Latte</h4>
              <p class="text-gray-700">Spiced tea with milk, honey, and a blend of aromatic spices, served hot.</p>
              <p class="text-gray-700 mt-2 font-bold">$4.99</p>
          </div>
      </div>

      <!-- Add more warm drinks here if needed -->
  </div>
</div>

<!-- Cocktails -->
<div class="mb-8">
  <h3 class="text-xl font-semibold mb-4 text-gray-900">Cocktails</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Cocktail 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Cocktail 1" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Margarita</h4>
              <p class="text-gray-700">A classic cocktail made with tequila, triple sec, and lime juice, served with salt on the rim.</p>
              <p class="text-gray-700 mt-2 font-bold">$8.99</p>
          </div>
      </div>

      <!-- Cocktail 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Cocktail 2" class="w-full h-48 object-cover">
          <div class="p-4">
              <h4 class="text-lg font-semibold mb-2 text-gray-900">Cosmopolitan</h4>
              <p class="text-gray-700">A sophisticated cocktail made with vodka, cranberry juice, triple sec, and lime juice.</p>
              <p class="text-gray-700 mt-2 font-bold">$9.99</p>
          </div>
      </div>

      <!-- Add more cocktails here if needed -->
  </div>
</div>

    <h2 class="text-3xl font-bold mb-6 text-gray-900">Sushi Menu</h2>
  
    <!-- Sushi Rolls -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-gray-900">Sushi Rolls</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sushi Roll 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sushi Roll 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">California Roll</h4>
            <p class="text-gray-700">Crab meat, avocado, cucumber, and tobiko wrapped in sushi rice and seaweed.</p>
            <p class="text-gray-700 mt-2 font-bold">$9.99</p>
          </div>
        </div>
  
        <!-- Sushi Roll 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sushi Roll 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Spicy Tuna Roll</h4>
            <p class="text-gray-700">Fresh tuna mixed with spicy mayo, cucumber, and scallions, wrapped in sushi rice and seaweed.</p>
            <p class="text-gray-700 mt-2 font-bold">$10.99</p>
          </div>
        </div>
  
        <!-- Sushi Roll 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sushi Roll 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Dragon Roll</h4>
            <p class="text-gray-700">Shrimp tempura, avocado, and cucumber, topped with eel and avocado slices.</p>
            <p class="text-gray-700 mt-2 font-bold">$12.99</p>
          </div>
        </div>
  
        <!-- Sushi Roll 4 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Sushi Roll 3" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Rainbow Roll</h4>
      <p class="text-gray-700">Assorted fish and avocado wrapped in sushi rice and seaweed, topped with thinly sliced avocado.</p>
      <p class="text-gray-700 mt-2 font-bold">$13.99</p>
    </div>
  </div>
  
  <!-- Sushi Roll 5 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Sushi Roll 4" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Volcano Roll</h4>
      <p class="text-gray-700">Spicy tuna and avocado wrapped in sushi rice and seaweed, topped with baked scallops and spicy mayo.</p>
      <p class="text-gray-700 mt-2 font-bold">$14.99</p>
    </div>
  </div>
  
  <!-- Sushi Roll 6 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Sushi Roll 5" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Caterpillar Roll</h4>
      <p class="text-gray-700">Eel, cucumber, and avocado wrapped in sushi rice and seaweed, topped with thinly sliced avocado and eel sauce.</p>
      <p class="text-gray-700 mt-2 font-bold">$12.99</p>
    </div>
  </div>
  
      </div>
    </div>
  
    <!-- Sashimi -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-gray-900">Sashimi</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sashimi 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sashimi 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Salmon Sashimi</h4>
            <p class="text-gray-700">Fresh slices of premium salmon served with wasabi and soy sauce.</p>
            <p class="text-gray-700 mt-2 font-bold">$12.99</p>
          </div>
        </div>
  
        <!-- Sashimi 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sashimi 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Tuna Sashimi</h4>
            <p class="text-gray-700">Fresh slices of premium tuna served with wasabi and soy sauce.</p>
            <p class="text-gray-700 mt-2 font-bold">$14.99</p>
          </div>
        </div>
  
        <!-- Sashimi 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Sashimi 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Yellowtail Sashimi</h4>
            <p class="text-gray-700">Fresh slices of premium yellowtail served with wasabi and soy sauce.</p>
            <p class="text-gray-700 mt-2 font-bold">$16.99</p>
          </div>
        </div>
  
        <!-- Sashimi 4 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Sashimi 3" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Scallop Sashimi</h4>
      <p class="text-gray-700">Fresh slices of premium scallop served with wasabi and soy sauce.</p>
      <p class="text-gray-700 mt-2 font-bold">$15.99</p>
    </div>
  </div>
  
  <!-- Sashimi 5 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Sashimi 4" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Yellowfin Tuna Sashimi</h4>
      <p class="text-gray-700">Fresh slices of premium yellowfin tuna served with wasabi and soy sauce.</p>
      <p class="text-gray-700 mt-2 font-bold">$17.99</p>
    </div>
  </div>
  
      </div>
    </div>
  
    <!-- Appetizers -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-gray-900">Appetizers</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Appetizer 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Appetizer 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Edamame</h4>
            <p class="text-gray-700">Steamed soybeans lightly salted and served warm.</p>
            <p class="text-gray-700 mt-2 font-bold">$4.99</p>
          </div>
        </div>
  
        <!-- Appetizer 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Appetizer 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Gyoza</h4>
            <p class="text-gray-700">Japanese dumplings filled with ground pork and vegetables, served with dipping sauce.</p>
            <p class="text-gray-700 mt-2 font-bold">$6.99</p>
          </div>
        </div>
  
        <!-- Appetizer 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/300" alt="Appetizer 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Tempura Shrimp</h4>
            <p class="text-gray-700">Crispy battered shrimp served with tempura dipping sauce.</p>
            <p class="text-gray-700 mt-2 font-bold">$8.99</p>
          </div>
        </div>
        <!-- Appetizer 4 -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Appetizer 4" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Agedashi Tofu</h4>
      <p class="text-gray-700">Lightly fried tofu served in a savory dashi broth with grated daikon radish and green onions.</p>
      <p class="text-gray-700 mt-2 font-bold">$7.99</p>
    </div>
  </div>
  
  <!-- Appetizer 5 -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="https://via.placeholder.com/300" alt="Appetizer 5" class="w-full h-48 object-cover">
    <div class="p-4">
      <h4 class="text-lg font-semibold mb-2 text-gray-900">Spider Roll</h4>
      <p class="text-gray-700">Soft-shell crab tempura, avocado, cucumber, and spicy mayo, wrapped in sushi rice and seaweed.</p>
      <p class="text-gray-700 mt-2 font-bold">$11.99</p>
    </div>
  </div>
  
  
        <!-- Add more appetizers here if needed -->
      </div>
    </div>
  
    <!-- Add more menu sections as necessary -->
  
  </div>
  
@endsection
