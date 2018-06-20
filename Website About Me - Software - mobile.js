function SoftwareProcess()
{
	// Create HTML code
	var string;
	string = "<table border = " + "3" + ">"
			+ "<caption>Software</caption>"
			+ "<tr>"
				+ "<th>Name</th>"
				+ "<th>Developer(s)</th>"
				+ "<th>Initial Release</th>"
				+ "<th>Type(s)</th>"
				+ "<th>License(s)</th>"
				+ "<th>Platform(s)</th>"
				+ "<th>Resource Number(s)</th>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Office 2010</td>"
				+ "<td>Microsoft</td>"
				+ "<td>June 15 2010</td>"
				+ "<td>Office Suite</td>"
				+ "<td>Trialware</td>"
				+ "<td>IA-32 and x64</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">1</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Office 2013</td>"
				+ "<td>Microsoft</td>"
				+ "<td>January 29, 2013</td>"
				+ "<td>Office Suite</td>"
				+ "<td>Trialware</td>"
				+ "<td>IA-32, x64, ARM</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">2</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Office 2016</td>"
				+ "<td>Microsoft</td>"
				+ "<td>September 22, 2015</td>"
				+ "<td>Office Suite</td>"
				+ "<td>Trialware</td>"
				+ "<td>IA-32, x64</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">3</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Notepad</td>"
				+ "<td>Microsoft</td>"
				+ "<td>May 1, 1983</td>"
				+ "<td>Text Editor</td>"
				+ "<td>None</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">4</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Notepad++</td>"
				+ "<td>Don Ho</td>"
				+ "<td>November 24, 2003</td>"
				+ "<td>Source Code Editor</td>"
				+ "<td>GNU General Public License</td>"
				+ "<td>IA-32, x86-64</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">5</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Internet Explorer</td>"
				+ "<td>Microsoft</td>"
				+ "<td>August 16, 1995</td>"
				+ "<td>Web Browser, Feed Reader</td>"
				+ "<td>Proprietary, requires a Windows license</td>"
				+ "<td>IA-32, x64, ARMv7, IA-64, MIPS, Alpha, PowerPC, 68k, SPARC, PA-RISC</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">6</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Edge</td>"
				+ "<td>Microsoft</td>"
				+ "<td>July 29, 2015</td>"
				+ "<td>Web Browser, Feed Reader</td>"
				+ "<td>Proprietary Software, A Component of Windows 10</td>"
				+ "<td>None</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">7</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Mozilla Firefox</td>"
				+ "<td>Mozilla Foundation, Mozilla Corporation</td>"
				+ "<td>September 23, 2002</td>"
				+ "<td>Web Browser, Feed Reader, Mobile Web Browser</td>"
				+ "<td>MPL 2.0</td>"
				+ "<td>IA-32, x64, ARMv7</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">8</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Google Chrome</td>"
				+ "<td>Google Inc.</td>"
				+ "<td>September 2, 2008</td>"
				+ "<td>Web Browser, Mobile Browser</td>"
				+ "<td>Freeware Under Google Chome Terms of Service</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">9</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Visual Studio 2010 Professional</td>"
				+ "<td>Microsoft</td>"
				+ "<td>April 12, 2010</td>"
				+ "<td>Integrated Development Environment (IDE)</td>"
				+ "<td>Freemium</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">10</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Microsoft Visual Studio 2015 Community</td>"
				+ "<td>Microsoft</td>"
				+ "<td>July 20, 2015</td>"
				+ "<td>Integrated Development Environment (IDE)</td>"
				+ "<td>Freemium</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">11</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Eclipse</td>"
				+ "<td>Eclipse Foundation</td>"
				+ "<td>November 7, 2001</td>"
				+ "<td>Programming Tool, Integrated Development Environment</td>"
				+ "<td>Eclipse Public</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">12</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Android Studio</td>"
				+ "<td>Google Inc.</td>"
				+ "<td>December 1, 2014</td>"
				+ "<td>Integrated Development Environment (IDE)</td>"
				+ "<td>Freeware, Source Code</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">12</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>WAMPServer</td>"
				+ "<td>Romain Bourdon</td>"
				+ "<td>December 14, 2005</td>"
				+ "<td>Web Server Stack Package</td>"
				+ "<td>GNU GPL</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">13</a>, <a href=" + "Website About Me - Works Cited.html" + ">14</a></td>"
			+ "</tr>"
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivSoftwareElement");
	// add content to the <div> elementFromPoint
	myDiv.innerHTML = string;
}