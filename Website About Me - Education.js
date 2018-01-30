function EducationProcess()
{
	// Create HTML code
	var string;
	string = "<table>"
			+ "<caption>Education</caption>"
			+ "<tr>"
				+ "<th>Name</th>"
				+ "<th>Year Started</th>"
				+ "<th>Year Ended</th>"
				+ "<th>Area of Study</th>"
				+ "<th>Location</th>"
				+ "<th>Street Address</th>"
				+ "<th>County</th>"
				+ "<th>Zip Code</th>"
				+ "<th>Number of Years</th>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Pine Technical and Community College</td>"
				+ "<td>2011</td>"
				+ "<td>2015</td>"
				+ "<td>Computer Programming</td>"
				+ "<td>Pine City, MN</td>"
				+ "<td>900 4th St. SE</td>"
				+ "<td>Pine</td>"
				+ "<td>55063</td>"
				+ "<td>4</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Chisago County Schools' Life Work Center (Formerly North Branch Area STEP (Student Transition and Employability Program))</td>"
				+ "<td>2008</td>"
				+ "<td>2011</td>"
				+ "<td>Life Skills</td>"
				+ "<td>North Branch, MN</td>"
				+ "<td>38423 Lincoln Trail</td>"
				+ "<td>Chisago</td>"
				+ "<td>55056</td>"
				+ "<td>3</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>North Branch Area Senior High School</td>"
				+ "<td>2004</td>"
				+ "<td>2008</td>"
				+ "<td>General</td>"
				+ "<td>North Branch, MN</td>"
				+ "<td>38175 Grand Ave.</td>"
				+ "<td>Chisago</td>"
				+ "<td>55056</td>"
				+ "<td>4</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>North Branch Area Middle School</td>"
				+ "<td>2000</td>"
				+ "<td>2004</td>"
				+ "<td>General</td>"
				+ "<td>North Branch, MN</td>"
				+ "<td>38431 Lincoln Trail</td>"
				+ "<td>Chisago</td>"
				+ "<td>55056</td>"
				+ "<td>4</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>North Branch Area Main Street School (RIP)</td>"
				+ "<td>1999</td>"
				+ "<td>2000</td>"
				+ "<td>General</td>"
				+ "<td>North Branch, MN</td>"
				+ "<td>N/A</td>"
				+ "<td>Chisago</td>"
				+ "<td>55056</td>"
				+ "<td>1</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>North Branch Area Primary School</td>"
				+ "<td>1992</td>"
				+ "<td>1999</td>"
				+ "<td>General</td>"
				+ "<td>North Branch, MN</td>"
				+ "<td>38705 Grand Ave.</td>"
				+ "<td>Chisago</td>"
				+ "<td>55056</td>"
				+ "<td>7</td>"
			+ "</tr>"
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivEducationElement");
	// add content to the <div> elementFromPoint
	myDiv.innerHTML = string;
}
