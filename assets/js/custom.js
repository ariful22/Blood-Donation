
	var countryStateInfo = {
	"Sylhet": {
		"Sylhet": {
			"Sylhet Sadar": [""],
			"Beanibazar": [""],
			"Golapganj": [""],
			"Companiganj": [""],
			"Fenchuganj": [""],
			"Bishwanath": [""],
			"Gowainghat": [""],
			"Jaintiapur": [""],
			"Kanaighat": [""],
			"Balaganj": [""],
			"South Shurma": [""],
			"Zakiganj": [""]
		},
		"Moulvibazar": {
			"Moulvibazar Sadar": [""],
			"Kulaura": [""]
		}
	},
	"Dhaka": {
		"Dhaka": {
			"Faridpur Sadar": [""]
		}
	}
}


window.onload = function () {
	
	//Get html elements
	var countySel = document.getElementById("countySel");
	var stateSel = document.getElementById("stateSel");	
	var citySel = document.getElementById("citySel");
	var zipSel = document.getElementById("zipSel");
	
	//Load countries
	for (var country in countryStateInfo) {
		countySel.options[countySel.options.length] = new Option(country, country);
	}
	
	//County Changed
	countySel.onchange = function () {
		 
		 stateSel.length = 1; // remove all options bar first
		 citySel.length = 1; // remove all options bar first
		 zipSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var state in countryStateInfo[this.value]) {
			 stateSel.options[stateSel.options.length] = new Option(state, state);
		 }
	}
	
	//State Changed
	stateSel.onchange = function () {		 
		 
		 citySel.length = 1; // remove all options bar first
		 zipSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var city in countryStateInfo[countySel.value][this.value]) {
			 citySel.options[citySel.options.length] = new Option(city, city);
		 }
	}
	
	//City Changed
	citySel.onchange = function () {
		zipSel.length = 1; // remove all options bar first
		
		if (this.selectedIndex < 1)
			return; // done
		
		var zips = countryStateInfo[countySel.value][stateSel.value][this.value];
		for (var i = 0; i < zips.length; i++) {
			zipSel.options[zipSel.options.length] = new Option(zips[i], zips[i]);
		}
	}	
}
