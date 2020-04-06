    var options_1 = {
		valueNames: ["post1-title"]
	};

	var options_2 = {
		valueNames: ["post2-title"]
	};

	var list1 = new List("container1", options_1);
	var list2 = new List("container2", options_2);

	jQuery(".search").keyup(function () {
		list1.search(jQuery(this).val());
		list2.search(jQuery(this).val());
	});

