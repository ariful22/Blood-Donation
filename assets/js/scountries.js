// Countries
var country_arr = new Array("Sylhet","Moulvibazar","Sunamganj","Habiganj");

// States
var s_a = new Array();     
s_a[0]="";	
  
  
s_a[1]="Amkuna|Balaganj|Beanibazar|Bishwanath|Companiganj|Dayamir|Fenchuganj|Golapganj|Gowainghat|Jaintiapur|Kanaighat|Osmani Nagar|South Surma|Sylhet Sadar|Uttar Bade Pasha|Zakiganj";
s_a[2]="Barlekha|Juri|Kamalganj|Kulaura|Moulvibazar Sadar|Rajnagar|Sreemangal";
s_a[3]="Bishwamvarpur|Chhatak|Dakshin Sunamganj|Derai|Dharamapasha|Dowarabazar|Jagannathpur|Jamalganj|Sullah|Sunamganj Sadar|Tahirpur"; 
s_a[4]="Ajmiriganj|Bahubal|Baniachong|Chunarughat|Habiganj Sadar|Lakhai|Madhabpur|Nabiganj";

function populateStates( scountryElementId, sstateElementId ){
	
	var selectedCountryIndex = document.getElementById( scountryElementId ).selectedIndex;

	var stateElement = document.getElementById( sstateElementId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('Select Upazila','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateCountries(scountryElementId, sstateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(scountryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('Select District','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( sstateElementId ){
		countryElement.onchange = function(){
			populateStates( scountryElementId, sstateElementId );
		};
	}
}