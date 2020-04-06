<input name="SearchData" class="search" placeholder="Search Anything !" />
<div id="SearchBarContainer_1" class="col l10 offset-l1">

	<h1 class="McqHeading">MCQs</h1>
	<ul class="list">

		<li class="a">
			<p class="mcq">Mcqs One</p>
		</li>
		<li class="a">
			<p class="mcq">Mcqs Two</p>
		</li>
		<li class="a">
			<p class="mcq">Mcqs Three</p>
		</li>
		<li class="a">
			<p class="mcq">Mcqs Four</p>
		</li>
		<li class="a">
			<p class="mcq">Mcqs Five</p>
		</li>
	</ul>
</div>
<div id="SearchBarContainer_2" class="col l10 offset-l1">
	<h1 class="NotesHeading">Notes</h1>
	<ul class="list">
		<li class="b">
			<p class="note">Notes One</p>
		</li>
		<li class="b">
			<p class="note">Notes Two</p>
		</li>
		<li class="b">
			<p class="note">Notes Three</p>
		</li>
		<li class="b">
			<p class="note">Notes Four</p>
		</li>
		<li class="b">
			<p class="note">Notes Five</p>
		</li>

	</ul>
</div>

<script type="text/javascript">
var options_1 = {
	valueNames: ["mcq"]
};

var options_2 = {
	valueNames: ["note"]
};

var list1 = new List("SearchBarContainer_1", options_1);
var list2 = new List("SearchBarContainer_2", options_2);

jQuery(".search").keyup(function () {
	list1.search(jQuery(this).val());
	list2.search(jQuery(this).val());
});


</script>