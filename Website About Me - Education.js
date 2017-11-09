function EducationProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Pine Technical and Community College: 2011 - 2015, Area of Study: Computer Programming, Location: Pine City, MN, Number of Years: 4</li>"
			+ "<li>North Branch Area STEP (Student Transition and Employibility Program): 2008 - 2011, Area of Study: Life Skills, Location: North Branch, MN, Number of Years: 3</li>"
			+ "<li>North Branch Area Senior High School: 2004 - 2008, Area of Study: General, Location: North Branch, MN, Number of Years: 4</li>"
			+ "<li>North Branch Area Middle School: 2000 - 2004, Area of Study: General, Location: North Branch, MN, Number of Years: 4</li>"
			+ "<li>North Branch Area Main Street School: 1999 - 2000, Area of Study: General, Location: North Branch, MN, Number of Years: 1</li>"
			+ "<li>North Branch Area Primary School: 1992 - 1999, Area of Study: General, Location: North Branch, MN, Number of Years: 7</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivEducationElement");
    // add content to the <div> elementFromPoint
    myDiv.innerHTML = string;
}
