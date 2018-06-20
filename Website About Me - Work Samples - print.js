function WorkSampleProcess()
{
  var string;
  string = "<ul>"
			+ "<li><a href=" + "http://members.bestbusinesscoach.ca/jeff-job/" + ">My Version of The Mentoring Page</a></li>"
			+ "<li><a href=" + "http://members.bestbusinesscoach.ca/podcast-interviews" + ">Podcast Interview Page With The Banners Containing the Business Form</a></li>"
			+ "<li><a href=" + "http://members.bestbusinesscoach.ca/main-member-home" + ">Updated Main Member Home Page</a></li>"
		+ "</ul>"
		+ "<p>I transcribed podcast interviews and tested the Basic Business Course, ensuring absence of errors involving webpages and / or broken links.</p>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivWorkSamplesElement");
    // add content to the <div> elementFromPoint
    myDiv.innerHTML = string;
}
