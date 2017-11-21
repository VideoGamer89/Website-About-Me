function SoftwareProcess()
{
	// Create HTML code
	var string;
	string = "<table>"
			+ "<th>"
				+ "<td>Name</td>"
				+ "<td>Developer(s)</td>"
				+ "<td>Initial Release</td>"
				+ "<td>Type(s)</td>"
			+ "</th>"
			+ "<tr>"
				+ "<td>Microsoft Office 2010 (Word, Excel, PowerPoint, Access)</td>"
				+ "<td>Microsoft</td>"
				+ "<td>June 15 2010</td>"
				+ "<td>Office Suite</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Office 2013 (Word, Excel, PowerPoint)</td>"
				+ "<td>Microsoft</td>"
				+ "<td>January 29, 2013</td>"
				+ "<td>Office Suite</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Office 2016 (Word, Excel, PowerPoint)</td>"
				+ "<td>Microsoft</td>"
				+ "<td>September 22, 2015</td>"
				+ "<td>Office Suite</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Notepad</td>"
				+ "<td>Microsoft</td>"
				+ "<td>May 1, 1983</td>"
				+ "<td>Text Editor</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Notepad++</td>"
				+ "<td>Don Ho</td>"
				+ "<td>November 24, 2003</td>"
				+ "<td>Source code editor</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Internet Explorer</td>"
				+ "<td>Microsoft</td>"
				+ "<td>August 16, 1995</td>"
				+ "<td>Web browser, Feed reader</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Edge</td>"
				+ "<td>Microsoft</td>"
				+ "<td>July 29, 2015</td>"
				+ "<td>Web browser, Feed reader</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Mozilla Firefox</td>"
				+ "<td>Mozilla Foundation, Mozilla Corporation</td>"
				+ "<td>September 23, 2002</td>"
				+ "<td>Web browser, Feed reader, Mobile Web Browser</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Google Chrome</td>"
				+ "<td>Google Inc.</td>"
				+ "<td>September 2, 2008</td>"
				+ "<td>Web Browser, Mobile Browser</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Visual Studio 2010 Professional</td>"
				+ "<td>Microsoft</td>"
				+ "<td>April 12, 2010</td>"
				+ "<td>Integrated development environment</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Visual Studio 2015 Community</td>"
				+ "<td>Microsoft</td>"
				+ "<td>July 20, 2015</td>"
				+ "<td>Integrated development environment</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Eclipse</td>"
				+ "<td>Eclipse Foundation</td>"
				+ "<td>November 7, 2001</td>"
				+ "<td>Programming Tool, Integrated development environment</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Android Studio</td>"
				+ "<td>Google Inc.</td>"
				+ "<td>December 1, 2014</td>"
				+ "<td>Integrated development environment</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>WAMPServer</td>"
				+ "<td>Romain Bourdon</td>"
				+ "<td>December 14, 2005</td>"
				+ "<td>Web server stack package</td>"
			+ "</tr>"
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivSoftwareElement");
	// add content to the <div> elementFromPoint
	myDiv.innerHTML = string;
}
