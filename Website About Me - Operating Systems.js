function OperatingSystemProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Microsoft Windows 7</li>"
			+ "<li>Microsoft Windows 8</li>"
			+ "<li>Microsoft Windows 8.1</li>"
			+ "<li>Microsoft Windows 10</li>"
			+ "<li>Android</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivOperatingSystemsElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
