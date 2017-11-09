function FavoriteFoodsProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Pizza</li>"
			+ "<li>Chicken</li>"
			+ "<li>Chicken Quesadilla</li>"
			+ "<li>Subway's Oven Roasted Chicken Breast Sub</li>" +
			+ "<li>Cheeseburgers</li>"
			+ "<li>Macaroni and Cheese</li>"
			+ "<li>Oranges</li>"
			+ "<li>Apples</li>"
			+ "<li>Raisins</li>"
			+ "<li>Apple Sauce</li>"
			+ "<li>Bananas</li>"
			+ "<li>Potato Chips</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById(myDivFavoriteFoodsElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
