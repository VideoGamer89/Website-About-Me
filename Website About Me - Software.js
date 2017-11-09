function SoftwareProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
		+ "<li>Microsoft Office 2010 (Word, Excel, PowerPoint, Access)</li>"
		+ "<li>Microsoft Office 2013 (Word, Excel, PowerPoint)</li>"
		+ "<li>Notepad</li>"
		+ "<li>Notepad++</li>"
		+ "<li>Internet Explorer</li>"
		+ "<li>Microsoft Edge</li>"
		+ "<li>Mozilla Firefox</li>"
		+ "<li>Google Chrome</li>"
		+ "<li>Microsoft Visual Studio 2010 Professional</li>"
		+ "<li>Microsoft Visual Studio 2015 Community</li>"
		+ "<li>Eclipse</li>"
		+ "<li>Android Studio</li>"
		+ "<li>WAMPServer</li>"
	+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivSoftwareElement");
  // add content to the <div> element
  myDiv.innerHTML = string;
}
