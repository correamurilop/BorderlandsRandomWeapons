<html>
<style>
html,body {
	background-color: white !important;
}
</style>
<?php

// I find it handy to have the "Roll It!" button get autofocus,
// but only on a desktop or laptop. It does weird things on some
// phone and tablets. This can be snipped safely.

/*require_once 'Mobile_Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
if ($detect->isMobile())
{
	$focus = "";
}
else
{
	$focus = "autofocus";
}
*/
function minclip($clip, $rof, $barrels)
// Returns TRUE if clip supports ROF and Barrels
// $barrels = 0 for one barrel, 1 for two
{
	if ($clip >= ($rof * $rof) * ($barrels + 1)) { return TRUE; }
	else { return FALSE; }
}

function randomcolor()
{
	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
		case 11:
		case 12:
			return "green";
			break;
		case 13:
		case 14:
		case 15:
		case 16:
		case 17:
			return "blue";
			break;
		case 18:
		case 19:
			return "purple";
			break;
		case 20:
			return "orange";
	}
	return "COLOR ERROR";
}

function randomtype()
{
	switch (rand(1, 20))
	{
		case 1:
			if ($GLOBALS['meleerarity'] == "common") { return "melee weapon"; }
			else { return "pistol"; }
			break;
		case 2:
		case 3:
		case 4:
			return "pistol";
			break;
		case 5:
		case 6:
			return "smg";
			break;
		case 7:
		case 8:
			return "assault rifle";
			break;
		case 9:
		case 10:
			return "sniper rifle";
			break;
		case 11:
		case 12:
			return "shotgun";
			break;
		case 13:
			return "rocket launcher";
			break;
		case 14:
		case 15:
			return "grenade mod";
			break;
		case 16:
		case 17:
		case 18:
		case 19:
			return "shield";
			break;
		case 20:
			if ($GLOBALS['meleerarity'] != "none") { return "melee weapon"; }
			else { return "shield"; }
			break;
	}
	return "TYPE ERROR";
}

function prefix($type, $imp, $man)
{
	// Cryo doesn't have the same level of support, so I'm going to punt
	if ($imp == "cryo")
	{
		if ($man == "Bandit") { return "icee"; }
		else { return "Icy"; }
	}

	switch($type)
	{
	case "pistol":
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "misles";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "murduerer's";
						break;
					case "bayonet":
						return "baynaneted";
						break;
					case "clip capacity":
						return "extendified";
					case "corrosive":
						return "crudy";
						break;
					case "incendiary":
						return "fire fire";
						break;
					case "shock":
						return "zapper";
						break;
					case "slag":
						return "slaged";
						break;
					case "barrels":
						return "dubble";
						break;
					case "shooting mode":
						return "rapider";
						break;
					case "stability":
						return "marxmans";
						break;
					default:
						return "";
						break;
				}
			} // END BANDIT
			break;
			case "Dahl":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Floated";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Neutralizing";
						break;
					case "bayonet":
						return "Close Quarters";
						break;
					case "clip capacity":
						return "Loaded";
					case "corrosive":
						return "Corrosive";
						break;
					case "incendiary":
						return "Incendiary";
						break;
					case "shock":
						return "Sapping";
						break;
					case "slag":
						return "Amped";
						break;
					case "barrels":
						return "Twin";
						break;
					case "shooting mode":
						return "React";
						break;
					case "stability":
						return "Tactical";
						break;
					default:
						return "";
						break;
				}
			} // END DAHL
			break;
			case "Hyperion":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Earnest";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Win-Win";
						break;
					case "bayonet":
						return "Action";
						break;
					case "clip capacity":
						return "Maximized";
					case "corrosive":
						return "Base";
						break;
					case "incendiary":
						return "Hot Button";
						break;
					case "shock":
						return "Energizing";
						break;
					case "slag":
						return "Amplified";
						break;
					case "barrels":
						return "Redundant";
						break;
					case "shooting mode":
						return "Dynamic";
						break;
					case "stability":
						return "Core";
						break;
					default:
						return "";
						break;
				}
			} // END HYPERION
			break;
			case "Jakobs":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Straight Shootin";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Dastardly";
						break;
					case "bayonet":
						return "Bowie";
						break;
					case "clip capacity":
						return "Loaded";
					case "barrels":
						return "Two Fer";
						break;
					case "shooting mode":
						return "Trick Shot";
						break;
					case "stability":
						return "Gunstock";
						break;
					default:
						return "";
						break;
				}
			} // END JAKOBS
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "corrosive":
						return "Trenchant";
						break;
					case "incendiary":
						return "Inflammatory";
						break;
					case "shock":
						return "Electrified";
						break;
					case "slag":
						return "Scoria";
						break;
					default:
						return "";
						break;
				}
			} // END MALIWAN
			break;
			case "Tediore":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Dependable";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Super";
						break;
					case "bayonet":
						return "Permasharp";
						break;
					case "clip capacity":
						return "Jam Packed";
					case "corrosive":
						return "Pine Fresh";
						break;
					case "incendiary":
						return "Red Hot";
						break;
					case "shock":
						return "Energizing";
						break;
					case "slag":
						return "Disinfecting";
						break;
					case "barrels":
						return "Two-for-One";
						break;
					case "shooting mode":
						return "Peppy";
						break;
					case "Clean":
						return "marxmans";
						break;
					default:
						return "";
						break;
				}
			} // END TEDIORE
			break;
			case "Torgue":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Explicit";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Hard";
						break;
					case "bayonet":
						return "Thrusting";
						break;
					case "clip capacity":
						return "Crammed";
					case "barrels":
						return "Double Penetrating";
						break;
					case "shooting mode":
						return "Intense";
						break;
					case "stability":
						return "Stiff";
						break;
					default:
						return "";
						break;
				}
			} // END TORGUE
			break;
			case "Vladof":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Righteous";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Purging";
						break;
					case "bayonet":
						return "Patriot's";
						break;
					case "clip capacity":
						return "Unending";
					case "corrosive":
						return "Caustic";
						break;
					case "incendiary":
						return "Burning";
						break;
					case "shock":
						return "Discharge";
						break;
					case "slag":
						return "Slag";
						break;
					case "barrels":
						return "Dva";
						break;
					case "shooting mode":
						return "Vengeful";
						break;
					case "stability":
						return "Resolute";
						break;
					default:
						return "";
						break;
				}
			} // END VLADOF
			break;
		default:
			return "#" . $imp . "#";
		} // END PISTOL
		break;
	case ("smg"):
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "akurate";
						break;
					case "AP":
					case "damage":
						return "murduring";
						break;
					case "bayonet":
						return "cuting";
						break;
					case "corrosive":
						return "crudy";
						break;
					case "incendiary":
						return "fire fire";
						break;
					case "shock":
						return "zapper";
						break;
					case "slag":
						return "slaged";
						break;
					case "range":
					case "shooting mode":
						return "bulets-go-fasterified";
						break;
					case "rapid reload":
						return "agresive";
						break;
					case "stability":
						return "ballanced";
						break;
					default:
						return "";
						break;
				}
			} // END BANDIT
			break;
			case "Dahl":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Deft";
						break;
					case "AP":
					case "damage":
						return "Stopping";
						break;
					case "bayonet":
						return "Bladed";
						break;
					case "corrosive":
						return "Corrosive";
						break;
					case "incendiary":
						return "Incendiary";
						break;
					case "shock":
						return "Sapping";
						break;
					case "slag":
						return "Amp";
						break;
					case "range":
					case "shooting mode":
						return "Flying";
						break;
					case "rapid reload":
						return "Skirmish";
						break;
					case "stability":
						return "Stoic";
						break;
					default:
						return "";
						break;
				}
			} // END DAHL
			break;
			case "Hyperion":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Analytical";
						break;
					case "AP":
					case "damage":
						return "Rightsizing";
						break;
					case "bayonet":
						return "Cutting Edge";
						break;
					case "corrosive":
						return "Base";
						break;
					case "incendiary":
						return "Hot Button";
						break;
					case "shock":
						return "Energizing";
						break;
					case "slag":
						return "Amplified";
						break;
					case "range":
					case "shooting mode":
						return "Proactive";
						break;
					case "rapid reload":
						return "Social";
						break;
					case "stability":
						return "Corporate";
						break;
					default:
						return "";
						break;
				}
			} // END HYPERION
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "corrosive":
						return "Caustic";
						break;
					case "incendiary":
						return "Fervid";
						break;
					case "shock":
						return "Storming";
						break;
					case "slag":
						return "Feculent";
						break;
					default:
						return "";
						break;
				}
			} // END MALIWAN
			break;
			case "Tediore":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Guaranteed";
						break;
					case "AP":
					case "damage":
						return "Hefty";
						break;
					case "bayonet":
						return "Perma-Sharp";
						break;
					case "corrosive":
						return "Peppermint";
						break;
					case "incendiary":
						return "Toasty";
						break;
					case "shock":
						return "Sparkling";
						break;
					case "slag":
						return "Biodegradable";
						break;
					case "range":
					case "shooting mode":
						return "Brisk";
						break;
					case "rapid reload":
						return "Refill";
						break;
					case "stability":
						return "Quality";
						break;
					default:
						return "";
						break;
				}
			} // END TEDIORE
			break;
		default:
			return "#" . $imp . "#";
		} // END SMG
		break;
	case "assault rifle":
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "aiming":
						return "akurate";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "nassty";
						break;
					case "bayonet":
						return "nifed";
						break;
					case "clip capacity":
						return "expandifide";
					case "corrosive":
						return "crudy";
						break;
					case "incendiary":
						return "fire fire";
						break;
					case "shock":
						return "zapper";
						break;
					case "slag":
						return "slaged";
						break;
					case "range":
						return "fast bulets";
						break;
					case "shooting mode":
						return "wyld asss";
						break;
					case "stability":
						return "taktikal";
						break;
					default:
						return "";
						break;
				}
			} // END BANDIT
			break;
			case "Dahl":
			{
				switch($imp)
				{
					case "aiming":
						return "Scout";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Attack";
						break;
					case "bayonet":
						return "Breach";
						break;
					case "clip capacity":
						return "Onslaught";
					case "corrosive":
						return "Corrosive";
						break;
					case "incendiary":
						return "Incendiary";
						break;
					case "shock":
						return "Sapping";
						break;
					case "slag":
						return "Amp";
						break;
					case "range":
						return "Deep";
						break;
					case "shooting mode":
						return "Feral";
						break;
					case "stability":
						return "Patrol";
						break;
					default:
						return "";
						break;
				}
			} // END DAHL
			break;
			case "Jakobs":
			{
				switch($imp)
				{
					case "aiming":
						return "Deadshot";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Boss";
						break;
					case "bayonet":
						return "Razor";
						break;
					case "clip capacity":
						return "Flush";
					case "range":
						return "Cowboy";
						break;
					case "shooting mode":
						return "Wild";
						break;
					case "stability":
						return "Horse";
						break;
					default:
						return "";
						break;
				}
			} // END JAKOBS
			break;
			case "Torgue":
			{
				switch($imp)
				{
					case "aiming":
						return "Rigorous";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Nasty";
						break;
					case "bayonet":
						return "Stabbing";
						break;
					case "clip capacity":
						return "Plump";
					case "range":
						return "Slippery";
						break;
					case "shooting mode":
						return "Wild";
						break;
					case "stability":
						return "Rhythmic";
						break;
					default:
						return "";
						break;
				}
			} // END TORGUE
			break;
			case "Vladof":
			{
				switch($imp)
				{
					case "aiming":
						return "Severe";
						break;
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Ferocious";
						break;
					case "bayonet":
						return "Skewering";
						break;
					case "clip capacity":
						return "Expansive";
					case "corrosive":
						return "Corrosive";
						break;
					case "incendiary":
						return "Hot";
						break;
					case "shock":
						return "Sapping";
						break;
					case "slag":
						return "Slag";
						break;
					case "range":
						return "Swift";
						break;
					case "shooting mode":
						return "Rabid";
						break;
					case "stability":
						return "Resolute";
						break;
					default:
						return "";
						break;
				}
			} // END VLADOF
			break;
		default:
			return "#" . $imp . "#";
		} // END ASSAULT RIFLE
		break;
	case "sniper rifle":
		switch($man)
		{
			case "Dahl":
			{
				switch($imp)
				{
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Pacifying";
						break;
					case "bayonet":
						return "Cartel";
						break;
					case "clip capacity":
						return "Operational";
						break;
					case "critical":
						return "Night";
						break;
					case "corrosive":
						return "Nerve";
						break;
					case "incendiary":
						return "Phosphor";
						break;
					case "shock":
						return "Shock";
						break;
					case "slag":
						return "Slag";
						break;
					case "range":
						return "Surgical";
						break;
					case "shooting mode":
						return "Suppressive";
						break;
					case "improved snapfire":
					case "stability":
						return "Liquid";
						break;
					default:
						return "";
						break;
				}
			} // END DAHL
			break;
			case "Hyperion":
			{
				switch($imp)
				{
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Auditing";
						break;
					case "bayonet":
						return "Contingent";
						break;
					case "clip capacity":
						return "Resource";
						break;
					case "critical":
						return "Venture";
						break;
					case "corrosive":
						return "Residual";
						break;
					case "incendiary":
						return "Thermogenic";
						break;
					case "shock":
						return "Energy";
						break;
					case "slag":
						return "Diffusion";
						break;
					case "range":
						return "Longitudinal";
						break;
					case "shooting mode":
						return "Operational";
						break;
					case "improved snapfire":
					case "stability":
						return "Cohesion";
						break;
					default:
						return "";
						break;
				}
			} // END HYPERION
			break;
			case "Jakobs":
			{
				switch($imp)
				{
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Skookum";
						break;
					case "bayonet":
						return "Tl'kope";
						break;
					case "clip capacity":
						return "Hyiu";
						break;
					case "critical":
						return "Tumtum";
						break;
					case "range":
						return "Siah-Siah";
						break;
					case "shooting mode":
						return "Klook";
						break;
					case "improved snapfire":
					case "stability":
						return "Chikamin";
						break;
					default:
						return "";
						break;
				}
			} // END JAKOBS
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "corrosive":
						return "Bumblebroth";
						break;
					case "incendiary":
						return "Scarlet";
						break;
					case "shock":
						return "Zooks";
						break;
					case "slag":
						return "Deuced";
						break;
					default:
						return "";
						break;
				}
			} // END MALIWAN
			break;
			case "Vladof":
			{
				switch($imp)
				{
					case "AP":
					case "damage":
					case "heavy weapon":
						return "Gromky";
						break;
					case "bayonet":
						return "Britva";
						break;
					case "clip capacity":
						return "Bolshy";
						break;
					case "critical":
						return "Razrez";
						break;
					case "corrosive":
						return "Splodge";
						break;
					case "incendiary":
						return "Phospher";
						break;
					case "shock":
						return "Strack";
						break;
					case "slag":
						return "Bolnoy";
						break;
					case "range":
						return "Zammechat";
						break;
					case "shooting mode":
						return "Skorry";
						break;
					case "improved snapfire":
					case "stability":
						return "Dobby";
						break;
					default:
						return "";
						break;
				}
			} // END VLADOF
			break;
		default:
			return "#" . $imp . "#";
		} // END SNIPER RIFLE
		break;
	case "shotgun":
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "sketer";
						break;
					case "AP":
					case "damage":
					case "shooting mode":
						return "assssult";
						break;
					case "bayonet":
						return "slising";
						break;
					case "clip capacity":
						return "drumed";
					case "critical":
						return "critikal hit";
					case "corrosive":
						return "crudy";
						break;
					case "incendiary":
						return "fire fire";
						break;
					case "shock":
						return "zapper";
						break;
					case "slag":
						return "slaged";
						break;
					case "rapid reload":
						return "quik loadeder";
						break;
					default:
						return "redy stedy";
						break;
				}
			} // END BANDIT
			break;
			case "Hyperion":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Potential";
						break;
					case "AP":
					case "damage":
					case "shooting mode":
						return "Practicable";
						break;
					case "bayonet":
						return "Restructuring";
						break;
					case "clip capacity":
						return "Scalable";
					case "critical":
						return "Critical";
					case "corrosive":
						return "Industrial";
						break;
					case "incendiary":
						return "Clement";
						break;
					case "shock":
						return "Conductive";
						break;
					case "slag":
						return "Negative";
						break;
					case "rapid reload":
						return "Reactive";
						break;
					default:
						return "Social";
						break;
				}
			} // END HYPERION
			break;
			case "Jakobs":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Huntin";
						break;
					case "AP":
					case "damage":
					case "shooting mode":
						return "Rustler's";
						break;
					case "bayonet":
						return "Barbed";
						break;
					case "clip capacity":
						return "Sidewinder";
					case "critical":
						return "Doc's";
					case "rapid reload":
						return "Texas";
						break;
					default:
						return "Well Kept";
						break;
				}
			} // END JAKOBS
			break;
			case "Tediore":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Original";
						break;
					case "AP":
					case "damage":
					case "shooting mode":
						return "Gentle";
						break;
					case "bayonet":
						return "Swiss";
						break;
					case "clip capacity":
						return "Extra Large";
					case "critical":
						return "Royal";
					case "corrosive":
						return "Spring Time";
						break;
					case "incendiary":
						return "Sunny";
						break;
					case "shock":
						return "Blue Light";
						break;
					case "slag":
						return "Boosted";
						break;
					case "rapid reload":
						return "Basic";
						break;
					default:
						return "New and Improved";
						break;
				}
			} // END TEDIORE
			break;
			case "Torgue":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Potent";
						break;
					case "AP":
					case "damage":
					case "shooting mode":
						return "Casual";
						break;
					case "bayonet":
						return "Bad Touch";
						break;
					case "clip capacity":
						return "Desperate";
					case "critical":
						return "Juicy";
					case "rapid reload":
						return "Impetuous";
						break;
					default:
						return "Sinewy";
						break;
				}
			} // END TORGUE
			break;
		default:
			return "#" . $imp . "#";
		} // END SHOTGUN
		break;
	case "rocket launcher":
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "snyper";
						break;
					case "bayonet":
						return "gratuitius";
						break;
					case "clip capacity":
						return "roket pawket";
						break;
					case "damage":
						return "big";
						break;
					case "corrosive":
						return "corodoe";
						break;
					case "incendiary":
						return "hunka burnin";
						break;
					case "shock":
						return "shoky";
						break;
					case "slag":
						return "slaged";
						break;
					case "range":
						return "speedee";
						break;
					case "barrels":
						return "rappid";
						break;
					case "reduced weight":
						return "quik drawler";
						break;
					default:
						return "";
						break;
				}
			} // END BANDIT
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "corrosive":
						return "Paraquat";
						break;
					case "incendiary":
						return "Pyroclastic";
						break;
					case "shock":
						return "Paraelectronomic";
						break;
					case "slag":
						return "Purulence";
						break;
					default:
						return "";
						break;
				}
			} // END MALIWAN
			break;
			case "Tediore":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Ultraprecise";
						break;
					case "bayonet":
						return "Multi-Use";
						break;
					case "clip capacity":
						return "Bonus";
						break;
					case "damage":
						return "Large";
						break;
					case "corrosive":
						return "Fungicide";
						break;
					case "incendiary":
						return "Toasty";
						break;
					case "shock":
						return "Sparkling";
						break;
					case "slag":
						return "Disinfecting";
						break;
					case "range":
						return "Rocket Speed";
						break;
					case "barrels":
						return "Bustling";
						break;
					case "reduced weight":
						return "Swapper's";
						break;
					default:
						return "";
						break;
				}
			} // END TEDIORE
			break;
			case "Torgue":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Gaa Dunk Ga";
						break;
					case "bayonet":
						return "Pokee Doke";
						break;
					case "clip capacity":
						return "Deep a";
						break;
					case "damage":
						return "Derp";
						break;
					case "range":
						return "Fidle Dee";
						break;
					case "barrels":
						return "Dum Pa";
						break;
					case "reduced weight":
						return "Fwap a";
						break;
					default:
						return "";
						break;
				}
			} // END TORGUE
			break;
			case "Vladof":
			{
				switch($imp)
				{
					case "aiming":
					case "range":
						return "Victorious";
						break;
					case "bayonet":
						return "Revolt";
						break;
					case "clip capacity":
						return "Worker's";
						break;
					case "damage":
						return "Rugged";
						break;
					case "corrosive":
						return "Virulent";
						break;
					case "incendiary":
						return "Red";
						break;
					case "shock":
						return "Shock";
						break;
					case "slag":
						return "Opposing";
						break;
					case "range":
						return "Partisan";
						break;
					case "barrels":
						return "Turbulent";
						break;
					case "reduced weight":
						return "Moscovite's";
						break;
					default:
						return "";
						break;
				}
			} // END VLADOF
			break;
		default:
			return "#" . $imp . "#";
		} // END ROCKET LAUNCHER
		break;
	case "shield":
		switch($man)
		{
			case "Anshin":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Terminal";
								break;
							case "seasoned":
								return "Inferior";
								break;
							case "veteran":
								return "Maximal";
								break;
							case "heroic":
								return "Superior";
								break;
							default: // legendary+
								return "Diagnostic";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Ligated";
								break;
							case "seasoned":
								return "Occluded";
								break;
							case "veteran":
								return "Patent";
								break;
							case "heroic":
								return "Hyper";
								break;
							default: // legendary+
								return "Vital";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Anemic";
								break;
							case "seasoned":
								return "Dilatory";
								break;
							case "veteran":
								return "Augmented";
								break;
							case "heroic":
								return "Intensified";
								break;
							default: // legendary+
								return "Invasive";
								break;
						}
						break;
					default:
						return "Stable";
						break;
				}
			} // END ANSHIN
			break;
			case "Bandit":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "meate";
								break;
							case "seasoned":
								return "crumy";
								break;
							case "veteran":
								return "tuff";
								break;
							case "heroic":
								return "stoppiest";
								break;
							default: // legendary+
								return "biger";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "y so lonng";
								break;
							case "seasoned":
								return "waite-ee";
								break;
							case "veteran":
								return "qik startr";
								break;
							case "heroic":
								return "go nowe";
								break;
							default: // legendary+
								return "less waite";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "slo";
								break;
							case "seasoned":
								return "whish fastr";
								break;
							case "veteran":
								return "charje fasst";
								break;
							case "heroic":
								return "spazz";
								break;
							default: // legendary+
								return "gud charjer";
								break;
						}
						break;
					default:
						return "";
						break;
				}
			} // END BANDIT
			break;
			case "Dahl":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Brigworthy";
								break;
							case "seasoned":
								return "Improvised";
								break;
							case "veteran":
								return "Bulletproof";
								break;
							case "heroic":
								return "Phalanx";
								break;
							default: // legendary+
								return "Roughneck";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Goat Rope";
								break;
							case "seasoned":
								return "Thumbsucking";
								break;
							case "veteran":
								return "Frosty";
								break;
							case "heroic":
								return "Low Drag";
								break;
							default: // legendary+
								return "Wide Eyed";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "No-Go";
								break;
							case "seasoned":
								return "Slow Mover";
								break;
							case "veteran":
								return "Double Time";
								break;
							case "heroic":
								return "Blitz";
								break;
							default: // legendary+
								return "PDQ";
								break;
						}
						break;
					default:
						return "Doughboy";
						break;
				}
			} // END DAHL
			break;
			case "Hyperion":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Downsized";
								break;
							case "seasoned":
								return "Outsourced";
								break;
							case "veteran":
								return "Commendable";
								break;
							case "heroic":
								return "Maximized";
								break;
							default: // legendary+
								return "Consolidated";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Tabled";
								break;
							case "seasoned":
								return "Bureaucratic";
								break;
							case "veteran":
								return "Efficient";
								break;
							case "heroic":
								return "Incentivized";
								break;
							default: // legendary+
								return "Competent";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Recessive";
								break;
							case "seasoned":
								return "Deliberate";
								break;
							case "veteran":
								return "Expeditious";
								break;
							case "heroic":
								return "Agile";
								break;
							default: // legendary+
								return "Streamlined";
								break;
						}
						break;
					default:
						return "Synergistic";
						break;
				}
			} // END HYPERION
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Frail";
								break;
							case "seasoned":
								return "Feeble";
								break;
							case "veteran":
								return "Unwavering";
								break;
							case "heroic":
								return "Steadfast";
								break;
							default: // legendary+
								return "Majestic";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Loitering";
								break;
							case "seasoned":
								return "Dawdling";
								break;
							case "veteran":
								return "Dashing";
								break;
							case "heroic":
								return "Exigent";
								break;
							default: // legendary+
								return "Ardent";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Listless";
								break;
							case "seasoned":
								return "Lethargic";
								break;
							case "veteran":
								return "Winged";
								break;
							case "heroic":
								return "Mercurial";
								break;
							default: // legendary+
								return "Fleet";
								break;
						}
						break;
					default:
						return "Cultured";
						break;
				}
			} // END MALIWAN
			break;
			case "Pangolin":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Cracked";
								break;
							case "seasoned":
								return "Brittle";
								break;
							case "veteran":
								return "Chitinous";
								break;
							case "heroic":
								return "Carapaced";
								break;
							default: // legendary+
								return "Armored";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Dormant";
								break;
							case "seasoned":
								return "Hibernating";
								break;
							case "veteran":
								return "Snapping";
								break;
							case "heroic":
								return "Pouncing";
								break;
							default: // legendary+
								return "Anxious";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Plodding";
								break;
							case "seasoned":
								return "Sluggish";
								break;
							case "veteran":
								return "Nimble";
								break;
							case "heroic":
								return "Sprinting";
								break;
							default: // legendary+
								return "Spry";
								break;
						}
						break;
					default:
						return "Symmetrical";
						break;
				}
			} // END PANGOLIN
			break;
			case "Tediore":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "My First";
								break;
							case "seasoned":
								return "Kiddie";
								break;
							case "veteran":
								return "Supersized";
								break;
							case "heroic":
								return "Jumbo";
								break;
							default: // legendary+
								return "Expanded";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Leaden";
								break;
							case "seasoned":
								return "Steady";
								break;
							case "veteran":
								return "Quick";
								break;
							case "heroic":
								return "Instant";
								break;
							default: // legendary+
								return "Fast-Acting";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Cut Rate";
								break;
							case "seasoned":
								return "Leisurely";
								break;
							case "veteran":
								return "Speedy";
								break;
							case "heroic":
								return "Express";
								break;
							default: // legendary+
								return "Quick Charge";
								break;
						}
						break;
					default:
						return "Classic";
						break;
				}
			} // END TEDIORE
			break;
			case "Torgue":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Wussified";
								break;
							case "seasoned":
								return "Tore Up";
								break;
							case "veteran":
								return "Macho";
								break;
							case "heroic":
								return "Monster";
								break;
							default: // legendary+
								return "Chiseled";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "First Gear";
								break;
							case "seasoned":
								return "Slow Lane";
								break;
							case "veteran":
								return "Turbo";
								break;
							case "heroic":
								return "Hi Octane";
								break;
							default: // legendary+
								return "Supercharged";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Elderly";
								break;
							case "seasoned":
								return "Slow-Ass";
								break;
							case "veteran":
								return "Acceleratin";
								break;
							case "heroic":
								return "Screamin";
								break;
							default: // legendary+
								return "Haulin";
								break;
						}
						break;
					default:
						return "Totally Adequate";
						break;
				}
			} // END TORGUE
			break;
			case "Vladof":
			{
				switch($imp)
				{
					case "capacity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Traitorous";
								break;
							case "seasoned":
								return "Meek";
								break;
							case "veteran":
								return "Righteous";
								break;
							case "heroic":
								return "Unyielding";
								break;
							default: // legendary+
								return "Unbroken";
								break;
						}
						break;
					case "reactivity":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Apathetic";
								break;
							case "seasoned":
								return "Torpid";
								break;
							case "veteran":
								return "Ever-Alert";
								break;
							case "heroic":
								return "Vigilant";
								break;
							default: // legendary+
								return "Watchful";
								break;
						}
						break;
					case "recharge rate":
						switch($GLOBALS['level'])
						{
							case "novice":
								return "Cowardly";
								break;
							case "seasoned":
								return "Timid";
								break;
							case "veteran":
								return "Momentous";
								break;
							case "heroic":
								return "Revolutionary";
								break;
							default: // legendary+
								return "Mobilized";
								break;
						}
						break;
					default:
						return "";
						break;
				}
			} // END VLADOF
			break;
		} // END SHIELD
		break;
	case "melee weapon":
		switch($man)
		{
			case "Bandit":
			{
				switch($imp)
				{
					case "AP":
					case "critical":
					case "damage":
					case "strength":
						return "hurty";
						break;
					case "balance":
					case "parry":
						return "swushy";
						break;
					case "weight":
					case "compact":
					case "lightweight":
						return "smol";
						break;
					case "reach":
						return "lungass";
						break;
					case "corrosive":
						return "asidy";
						break;
					case "explosive":
						return "boomstik";
						break;
					case "incendiary":
						return "burnee";
						break;
					case "shock":
						return "zzapin";
						break;
					case "slag":
						return "perpul";
						break;
					case "heavy weapon":
						return "can opunr";
						break;
				}
			} // END BANDIT
			break;
			case "Dahl":
			{
				switch($imp)
				{
					case "AP":
					case "critical":
					case "damage":
					case "strength":
						return "Vibroblade";
						break;
					case "balance":
					case "parry":
						return "Fencing";
						break;
					case "weight":
					case "compact":
					case "lightweight":
						return "Holdout";
						break;
					case "reach":
						return "Extendable";
						break;
					case "corrosive":
						return "Corrosive";
						break;
					case "explosive":
						return "Detonating";
						break;
					case "incendiary":
						return "Incendiary";
						break;
					case "shock":
						return "Sapping";
						break;
					case "slag":
						return "Amplified";
						break;
					case "heavy weapon":
						return "Breaching";
						break;
				}
			} // END DAHL
			break;
			case "Maliwan":
			{
				switch($imp)
				{
					case "corrosive":
						return "Caustic";
						break;
					case "incendiary":
						return "Fervid";
						break;
					case "shock":
						return "Storming";
						break;
					case "slag":
						return "Feculent";
						break;
				}
			} // END MALIWAN
			break;
		default:
			return "#" . $imp . "#";
		} // END MELEE
		break;
	default:
		return "#" . $imp . "#";
		break;
	} // END SWITCH(TYPE)
}

function damageadd($damage, $add)
{
	if ($add == 0) { return $damage; }
	$newdamage = "";

	if ($plus = strrpos($damage, "+"))
	{
		$oldadd = substr($damage, $plus + 1);
		$newadd = $oldadd + $add;
		$newdamage = substr($damage, 0, $plus + 1) . $newadd;
	}
	elseif ($minus = strrpos($damage, "-"))
	{
		$oldminus = substr($damage, $minus);
		$newadd = $oldminus + $add;
		if ($newadd < 0) { return substr($damage, 0, $minus) . $newadd; }
		if ($newadd > 0) { return substr($damage, 0, $minus) . "+" . $newadd; }
		return substr($damage, 0, $minus);
	}
	else
	{
		$newdamage = $damage . "+" . $add;
	}
	return $newdamage;
}

// Credit to Philip Norton for this function
// http://www.hashbangcode.com/blog/php-array-mode-function
function array_mode($array,$justMode=0)
{
  $count = array();
  foreach ( $array as $item) {
    if ( isset($count[$item]) ) {
      $count[$item]++;
    }else{
      $count[$item] = 1;
    };
  };
  $mostcommon = '';
  $iter = 0;
  foreach ( $count as $k => $v ) {
    if ( $v > $iter ) {
    $mostcommon = $k;
    $iter = $v;
    };
  };
  if ( $justMode==0 ) {
    return $mostcommon;
  } else {
    return array("mode" => $mostcommon, "count" => $iter);
  }
}

function gen_pistol($imp, $forceman)
{
	$bulletdamage = array("2d6-1", "2d6", "2d6+1", "2d8", "2d8+1", "2d10", "2d10+1", "2d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$bayonet = 0;
	$element = "none";
	$aiming = "";
	$elementdamage = 0;
	$damagebonus = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Dahl":
			$manroll = 4;
			break;
		case "Hyperion":
			$manroll = 7;
			break;
		case "Jakobs":
			$manroll = 10;
			break;
		case "Maliwan":
			$manroll = 12;
			break;
		case "Tediore":
			$manroll = 14;
			break;
		case "Torgue":
			$manroll = 17;
			break;
		case "Vladof":
			$manroll = 19;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
			$subtype = "handgun";
			$range = 3;
			$damage = 3;
			$rof = 1;
			$weight = 3;
			$clip = 16;
			$str = 0;
			$ap = 0;
			$shootingmode = "SA";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
					$man = "Bandit";
					$name = "pistal";
					$clip = 2 * $clip;
					break;
				case 4:
				case 5:
				case 6:
					$man = "Dahl";
					$name = "Repeater";
					$shootingmode .= ", 3RB";
					break;
				case 7:
				case 8:
				case 9:
					$man = "Hyperion";
					$name = "Apparatus";
					$stability = "Stable";
					break;
				case 10:
				case 11:
					$man = "Jakobs";
					$name = "Revolver";
					$damage++;
					$ap++;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 12:
				case 13:
					$man = "Maliwan";
					$name = "Aegis";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Handgun";
					break;
				case 17:
				case 18:
					$man = "Torgue";
					$name = "Hand Cannon";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 19:
				case 20:
					$man = "Vladof";
					$name = "TMP";
					$clip = ceil(1.5 * $clip);
					$shootingmode .= ", Automatic";
					$rof++;
			}
			break;
		case 5:
		case 6:
		case 7:
		case 8:
			$subtype = "aimshot";
			$range = 5;
			$damage = 3;
			$rof = 1;
			$weight = 4;
			$clip = 13;
			$str = 0;
			$ap = 0;
			$shootingmode = "SA";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
					$man = "Bandit";
					$name = "hed shoter!";
					$clip = 2 * $clip;
					break;
				case 4:
				case 5:
				case 6:
					$man = "Dahl";
					$name = "Anaconda";
					$shootingmode .= ", 3RB";
					break;
				case 7:
				case 8:
				case 9:
					$man = "Hyperion";
					$name = "Vision";
					$stability = "Stable";
					break;
				case 10:
				case 11:
					$man = "Jakobs";
					$name = "Longarm";
					$damage++;
					$ap++;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 12:
				case 13:
					$man = "Maliwan";
					$name = "Phobia";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Aimshot";
					break;
				case 17:
				case 18:
					$man = "Torgue";
					$name = "Hole Puncher";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Assassin";
					$clip = ceil(1.5 * $clip);
					$shootingmode .= ", Automatic";
					$rof++;
			}
			break;
		case 9:
		case 10:
		case 11:
		case 12:
			$subtype = "powershot";
			$range = 4;
			$damage = 4;
			$rof = 1;
			$weight = 7;
			$clip = 12;
			$str = 6;
			$ap = 1;
			$shootingmode = "SA";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
					$man = "Bandit";
					$name = "ass beeter!";
					$clip = 2 * $clip;
					break;
				case 4:
				case 5:
				case 6:
					$man = "Dahl";
					$name = "Peacemaker";
					$shootingmode .= ", 3RB";
					break;
				case 7:
				case 8:
				case 9:
					$man = "Hyperion";
					$name = "Leverage";
					$stability = "Stable";
					break;
				case 10:
				case 11:
					$man = "Jakobs";
					$name = "Iron";
					$damage++;
					$ap++;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 12:
				case 13:
					$man = "Maliwan";
					$name = "Torment";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Powershot";
					break;
				case 17:
				case 18:
					$man = "Torgue";
					$name = "Rod";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Fighter";
					$clip = ceil(1.5 * $clip);
					$shootingmode .= ", Automatic";
					$rof++;
			}
			break;
		case 13:
		case 14:
		case 15:
		case 16:
			$subtype = "big gun";
			$range = 3;
			$damage = 4;
			$rof = 1;
			$weight = 5;
			$clip = 14;
			$str = 0;
			$ap = 1;
			$shootingmode = "SA";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
					$man = "Bandit";
					$name = "magamum!";
					$clip = 2 * $clip;
					break;
				case 4:
				case 5:
				case 6:
					$man = "Dahl";
					$name = "Magnum";
					$shootingmode .= ", 3RB";
					break;
				case 7:
				case 8:
				case 9:
					$man = "Hyperion";
					$name = "Impact";
					$stability = "Stable";
					break;
				case 10:
				case 11:
					$man = "Jakobs";
					$name = "Widow Maker";
					$damage++;
					$ap++;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 12:
				case 13:
					$man = "Maliwan";
					$name = "Animosity";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Biggun";
					break;
				case 17:
				case 18:
					$man = "Torgue";
					$name = "Slapper";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$shootingmode = "";
					// ROF reduced by 1, min 1
					break;
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Troublemaker";
					$clip = ceil(1.5 * $clip);
					$shootingmode .= ", Automatic";
					$rof++;
			}
			break;
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "quickshot";
			$range = 3;
			$damage = 2;
			$rof = 3;
			$weight = 7;
			$clip = 18;
			$str = 0;
			$ap = 0;
			$shootingmode = "SA, Automatic";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
					$man = "Bandit";
					$name = "ratatater!";
					$clip = 2 * $clip;
					break;
				case 4:
				case 5:
				case 6:
					$man = "Dahl";
					$name = "Negotiator";
					$shootingmode .= ", 3RB";
					break;
				case 7:
				case 8:
				case 9:
					$man = "Hyperion";
					$name = "Synergy";
					$stability = "Stable";
					break;
				case 10:
				case 11:
					$man = "Jakobs";
					$name = "Wheelgun";
					$damage++;
					$ap++;
					$rof = "1";
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 12:
				case 13:
					$man = "Maliwan";
					$name = "Umbrage";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					$lowrof = TRUE;
					$shootingmode = "Automatic";
					$rof--;
					break;
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Quickshot";
					break;
				case 17:
				case 18:
					$man = "Torgue";
					$name = "Injector";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$shootingmode = "Automatic";
					$rof--;
					break;
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Anarchist";
					$clip = ceil(1.5 * $clip);
					$rof++;
			}
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impap = 0;
	$impelement = 0;
	$impstability = 0;
	$impaiming = 0;
	$impshootingmode = 0;
	$impbayonet = 0;
	$imprapidreload = 0;
	$impbarrels = 0;
	$trap = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
			case 3:
				if ($impdamage < 2)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				else
				{
					if ($impap < 2)
					{
						$impap++;
						$ap++;
						$implist[$i] = "AP";
					}
					else
					{
						// TRY AGAIN
						$i--;
					}
				}
				break;
			case 4:
			case 5:
				if ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else
				{
					switch ($aiming)
					{
						case "Scope":
							// TRY AGAIN
							$i--;
							break;
						case "Zoom":
							$aiming = "Scope";
							$impaiming++;
							$implist[$i] = "aiming";
							break;
						default:
							$aiming = "Zoom";
							$impaiming++;
							$implist[$i] = "aiming";
					}
				}
				break;
			case 6:
			case 7:
				if ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				else
				{
					if ($shootingmode == "Revolver" OR $lowrof)
					{
						// TRY AGAIN
						$i--;
					}
					else
					{
						$impshootingmode++;
						$implist[$i] = "shooting mode";
						if (strpos($shootingmode, "SA") === FALSE) { $shootingmode .= ", SA"; }
						elseif (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
						elseif (strpos($shootingmode, "Automatic") === FALSE)
						{
							$shootingmode .= ", Automatic";
							if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
						}
						elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
						else { $impshootingmode--; $i--; }
						// TRY AGAIN
					}
				}
				break;
			case 8:
			case 9:
				if ($impap < 2)
				{
					$impap++;
					$ap++;
					$implist[$i] = "AP";
				}
				else
				{
					if ($impdamage < 2)
					{
						$impdamage++;
						$damage++;
						$implist[$i] = "damage";
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 10:
			case 11:
				// HW treated uniquely
				if (rand(1, 20) == 20)
				{
					if (strpos($notes, "HW") === FALSE)
					{
						if ($notes) { $notes .= ", HW"; }
						else { $notes = "HW"; }
						$impelement++;
						$implist[$i] = "heavy weapon";
					}
					else
					{
						if ($impdamage < 2)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($impap < 2)
						{
							$impap++;
							$ap++;
							$implist[$i] = "AP";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				else
				// any of the normal elements
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 2)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add three levels
							if ($impelement < 3)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							else
							{
								if ($impap < 2)
								{
									$impap++;
									$ap++;
									$implist[$i] = "AP";
								}
								elseif ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								else { $i--; } // TRY AGAIN
							}
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 19))
							{
								case 1:
								case 2:
								case 3:
								case 4:
									$element = "corrosive";
									break;
								case 5:
								case 6:
								case 7:
								case 8:
									$element = "shock";
									break;
								case 9:
								case 10:
								case 11:
								case 12:
									$element = "incendiary";
									break;
								case 13:
								case 14:
								case 15:
								case 16:
									$element = "slag";
									break;
								case 17:
								case 18:
								case 19:
									$element = "explosive";
						}
						if ($GLOBALS['ice']) { if(rand(1, 6) == 1) { $element = "cryo"; } }
						// Jakobs can't have elemental, have to undo it
						if ($man == "Jakobs")
						{
							$element = "none";
							$impelement--;
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 2)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
						}
					}
				}
				break;
			case 12:
			case 13:
				switch ($stability)
				{
					case "Very Stable":
						if ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "Stable":
						$stability = "Very Stable";
						$impstability++;
						$implist[$i] = "stability";
						break;
					default:
						$stability = "Stable";
						$impstability++;
						$implist[$i] = "stability";
				}
				break;
			case 14:
			case 15:
				switch ($aiming)
				{
					case "Scope":
						if ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "Zoom":
						$aiming = "Scope";
						$impaiming++;
						$implist[$i] = "aiming";
						break;
					default:
						$aiming = "Zoom";
						$impaiming++;
						$implist[$i] = "aiming";
				}
				break;
			case 16:
			case 17:
				if ($shootingmode == "Revolver" OR $lowrof)
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else { $i--; } // TRY AGAIN
				}
				else
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "SA") === FALSE) { $shootingmode .= ", SA"; }
					elseif (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
					elseif (strpos($shootingmode, "Automatic") === FALSE)
					{
						$shootingmode .= ", Automatic";
						if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					}
					elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					else
					{
						$impshootingmode--;
						if ($impclip < 3)
						{
							$impclip++;
							if ($limitedammo) { $clip += 2; }
							else { $clip = ceil($clip * 1.44); }
							$implist[$i] = "clip capacity";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				break;
			case 18:
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
			case 19:
				if (strpos($notes, "Rapid Reload") === FALSE)
				{
					if ($notes == "") { $notes = "Rapid Reload"; }
					else { $notes .= ", Rapid Reload"; }
					$imprapidreload++;
					$implist[$i] = "rapid reload";
				}
				else
				{
					switch ($aiming)
					{
						case "Scope":
							if ($imprange < 2)
							{
								$imprange++;
								$range++;
								$implist[$i] = "range";
							}
							else { $i--; } // TRY AGAIN
							break;
						case "Zoom":
							$aiming = "Scope";
							$impaiming++;
							$implist[$i] = "aiming";
							break;
						default:
							$aiming = "Zoom";
							$impaiming++;
							$implist[$i] = "aiming";
					}

				}
				break;
			case 20:
				if ($impbarrels < 1 AND minclip($clip, $rof, 1))
				{
					$impbarrels++;
					$damagebonus++;
					$implist[$i] = "barrels";
				}
				else
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else
					{
						if ($shootingmode == "Revolver" OR $lowrof)
						{
							// TRY AGAIN
							$i--;
						}
						else
						{
							$impshootingmode++;
							$implist[$i] = "shooting mode";
							if (strpos($shootingmode, "SA") === FALSE) { $shootingmode .= ", SA"; }
							elseif (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
							elseif (strpos($shootingmode, "Automatic") === FALSE)
							{
								$shootingmode .= ", Automatic";
								if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							}
							elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							else { $impshootingmode--; $i--; }
							// TRY AGAIN
					}
				}
				break;
			}
		}
	}

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> ";
	$returntext .= damageadd($bulletdamage[$damage], $damagebonus);
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($shootingmode) { $returntext .= $shootingmode . ". "; }
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($impbarrels > 0) { $returntext .= "Dual barrels (consumes 2 ammo per shot, +1 to hit). "; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_smg($imp, $forceman)
{
	$bulletdamage = array("2d6-1", "2d6", "2d6+1", "2d8", "2d8+1", "2d10", "2d10+1", "2d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$bayonet = 0;
	$element = "none";
	$aiming = "";
	$elementdamage = 0;
	$damagebonus = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Dahl":
			$manroll = 5;
			break;
		case "Hyperion":
			$manroll = 9;
			break;
		case "Maliwan":
			$manroll = 13;
			break;
		case "Tediore":
			$manroll = 17;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
			$subtype = "subcompact";
			$range = 5;
			$damage = 1;
			$rof = 3;
			$weight = 11;
			$clip = 28;
			$str = 0;
			$ap = 0;
			$shootingmode = "Automatic";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "smig";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "SMG";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Hyperion";
					$name = "Projectile Convergence";
					$stability = "Stable";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "SubMalevolent Grace";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Tediore";
					$name = "Subcompact MG";
			}
			break;
		case 7:
		case 8:
		case 9:
		case 10:
		case 11:
		case 12:
		case 13:
			$subtype = "special";
			$range = 5;
			$damage = 2;
			$rof = 3;
			$weight = 13;
			$clip = 28;
			$str = 6;
			$ap = 0;
			$shootingmode = "Automatic";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "rokgun";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Fox";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Hyperion";
					$name = "Presence";
					$stability = "Stable";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Trance";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Tediore";
					$name = "Special";
			}
			break;
		case 14:
		case 15:
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "ace";
			$range = 6;
			$damage = 0;
			$rof = 3;
			$weight = 10;
			$clip = 26;
			$str = 0;
			$ap = 0;
			$shootingmode = "Automatic";
			$stability = "";
			$aiming = "Zoom";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "smgg";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Falcon";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Hyperion";
					$name = "Transmurdera";
					$stability = "Stable";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Gospel";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Tediore";
					$name = "Ace";
			}
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impap = 0;
	$impelement = 0;
	$impstability = 0;
	$impaiming = 0;
	$impshootingmode = 0;
	$impbayonet = 0;
	$imprapidreload = 0;
	$impbarrels = 0;
	$trap = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
				$implist[$i] = "1-2"; // DEBUG HELP
				if ($impdamage < 2)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				else
				{
					if ($impap < 2)
					{
						$impap++;
						$ap++;
						$implist[$i] = "AP";
					}
					else
					{
						// TRY AGAIN
						$i--;
					}
				}
				break;
			case 3:
				$implist[$i] = "3+"; // DEBUG HELP
				if ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else
				{
					switch ($aiming)
					{
						case "Zoom":
							// TRY AGAIN
							$i--;
							break;
						default:
							$aiming = "Zoom";
							$impaiming++;
							$implist[$i] = "aiming";
					}
				}
				break;
			case 4:
				$implist[$i] = "4+"; // DEBUG HELP
				if ($impbarrels < 1 AND minclip($clip, $rof, 1))
				{
					$impbarrels++;
					$damagebonus++;
					$implist[$i] = "barrels";
				}
				else
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else
					{
						if ($shootingmode == "Revolver" OR $lowrof)
						{
							// TRY AGAIN
							$i--;
						}
						else
						{
							$impshootingmode++;
							$implist[$i] = "shooting mode";
							if (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
							elseif (strpos($shootingmode, "Automatic") === FALSE)
							{
								$shootingmode .= ", Automatic";
								if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							}
							elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							else { $impshootingmode--; $i--; }
							// TRY AGAIN
						}
					}
				}
				break;
			case 5:
			case 6:
				$implist[$i] = "5-6"; // DEBUG HELP
				if ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				else
				{
					if ($shootingmode == "Revolver" OR $lowrof)
					{
						// TRY AGAIN
						$i--;
					}
					else
					{
						$impshootingmode++;
						$implist[$i] = "shooting mode";
						if (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
						elseif (strpos($shootingmode, "Automatic") === FALSE)
						{
							$shootingmode .= ", Automatic";
							if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
						}
						elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
						else { $impshootingmode--; $i--; }
						// TRY AGAIN
					}
				}
				break;
			case 7:
			case 8:
				$implist[$i] = "7-8"; // DEBUG HELP
				if ($impap < 2)
				{
					$impap++;
					$ap++;
					$implist[$i] = "AP";
				}
				else
				{
					if ($impdamage < 2)
					{
						$impdamage++;
						$damage++;
						$implist[$i] = "damage";
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 9:
			case 10:
			case 11:
			case 12:
				$implist[$i] = "9-12"; // DEBUG HELP
				// Fortunately, no need to check for HW or Jakobs
				switch ($element)
				{
					case "slag":
					case "explosive":
					// Already have these, can't level 'em up
						if ($impdamage < 2)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($impap < 2)
						{
							$impap++;
							$ap++;
							$implist[$i] = "AP";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "corrosive":
					case "shock":
					case "incendiary":
					case "cryo":
					// Can add three levels
						if ($impelement < 3)
						{
							$impelement++;
							$elementdamage++;
							$implist[$i] = "element";
						}
						else
						{
							if ($impap < 2)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							else { $i--; } // TRY AGAIN
						}
						break;
					default: // no existing element
						$impelement++;
						$elementdamage = 1;
						$implist[$i] = "element";
						switch (rand(1, 20))
						{
							case 1:
							case 2:
							case 3:
							case 4:
							case 5:
								$element = "corrosive";
								break;
							case 6:
							case 7:
							case 8:
							case 9:
							case 10:
								$element = "shock";
								break;
							case 11:
							case 12:
							case 13:
							case 14:
							case 15:
								$element = "incendiary";
								break;
							case 16:
							case 17:
							case 18:
							case 19:
								$element = "slag";
								break;
							case 20:
								$element = "explosive";
						}
						if ($GLOBALS['ice']) { if(rand(1, 6) == 1) { $element = "cryo"; } }
				}
				break;
			case 13:
			case 14:
				$implist[$i] = "13-14"; // DEBUG HELP
				switch ($stability)
				{
					case "Very Stable":
						if ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "Stable":
						$stability = "Very Stable";
						$impstability++;
						$implist[$i] = "stability";
						break;
					default:
						$stability = "Stable";
						$impstability++;
						$implist[$i] = "stability";
				}
				break;
			case 15:
			case 16:
				$implist[$i] = "15-16"; // DEBUG HELP
				switch ($aiming)
				{
					case "Zoom":
						if ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					default:
						$aiming = "Zoom";
						$impaiming++;
						$implist[$i] = "aiming";
				}
				break;
			case 17:
			case 18:
				$implist[$i] = "17-18"; // DEBUG HELP
				if ($shootingmode == "Revolver" OR $lowrof)
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else { $i--; } // TRY AGAIN
				}
				else
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "3RB") === FALSE) { $shootingmode .= ", 3RB"; }
					elseif (strpos($shootingmode, "Automatic") === FALSE)
					{
						$shootingmode .= ", Automatic";
						if ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					}
					elseif ($rof < 5 AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					else
					{
						$impshootingmode--;
						if ($impclip < 3)
						{
							$impclip++;
							if ($limitedammo) { $clip += 2; }
							else { $clip = ceil($clip * 1.44); }
							$implist[$i] = "clip capacity";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				break;
			case 19:
				$implist[$i] = "19+"; // DEBUG HELP
				if (strpos($notes, "Rapid Reload") === FALSE)
				{
					if ($notes == "") { $notes = "Rapid Reload"; }
					else { $notes .= ", Rapid Reload"; }
					$imprapidreload++;
					$implist[$i] = "rapid reload";
				}
				else
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 20:
				$implist[$i] = "20+"; // DEBUG HELP
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
			
		}
	}

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> ";
	$returntext .= damageadd($bulletdamage[$damage], $damagebonus);
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($shootingmode) { $returntext .= $shootingmode . ". "; }
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($impbarrels > 0) { $returntext .= "Dual barrels (consumes 2 ammo per shot, +1 to hit). "; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_assault($imp, $forceman)
{
	$bulletdamage = array("2d6-1", "2d6", "2d6+1", "2d8", "2d8+1", "2d10", "2d10+1", "2d12", "2d12+1", "2d12+2", "2d12+3", "2d12+4");
	$grenadedamage = array("3d6", "3d6+1", "3d6+2", "3d8", "3d8+1", "3d8+2", "3d10", "3d10+1", "3d10+2", "3d12", "3d12+1", "3d12+2");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$machinegun = FALSE;
	$grenadelauncher = FALSE;
	$bayonet = 0;
	$element = "none";
	$aiming = "";
	$elementdamage = 0;
	$damagebonus = 0;
// Have to put the $imps up here because of the Torgue Grenade Launcher
	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impap = 0;
	$impelement = 0;
	$impstability = 0;
	$impaiming = 0;
	$impshootingmode = 0;
	$impbayonet = 0;
	$imprapidreload = 0;
	$impbarrels = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Dahl":
			$manroll = 5;
			break;
		case "Jakobs":
			$manroll = 9;
			break;
		case "Torgue":
			$manroll = 13;
			break;
		case "Vladof":
			$manroll = 17;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
			$subtype = "assault rifle";
			$range = 7;
			$damage = 2;
			$rof = 2;
			$weight = 8;
			$clip = 22;
			$str = 0;
			$ap = 1;
			$shootingmode = "SA, Automatic";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "mashine gun";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Rifle";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Rifle";
					$damage++;
					$ap++;
					$rof = 1;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Rifle";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$rof--;
					$shootingmode = "SA";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Rifle";
					$clip = ceil(1.5 * $clip);
					$rof++;
			}
			break;
		case 5:
		case 6:
		case 7:
		case 8:
			$subtype = "scoped assault rifle";
			$range = 7;
			$damage = 1;
			$rof = 2;
			$weight = 9;
			$clip = 22;
			$str = 0;
			$ap = 1;
			$shootingmode = "SA, Automatic";
			$stability = "";
			$aiming = "Zoom";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "carbene";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Carbine";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Scarab";
					$damage++;
					$ap++;
					$rof = 1;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Root";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$rof--;
					$shootingmode = "SA";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Renegade";
					$clip = ceil(1.5 * $clip);
					$rof++;
			}
			break;
		case 9:
		case 10:
		case 11:
		case 12:
			$subtype = "heavy assault rifle";
			$range = 8;
			$damage = 2;
			$rof = 2;
			$weight = 10;
			$clip = 20;
			$str = 6;
			$ap = 2;
			$shootingmode = "SA, Automatic";
			$stability = "";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "ass beeter!";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Defender";
					$shootingmode .= ", 3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Rifle";
					$damage++;
					$ap++;
					$rof = 1;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Lance";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$rof--;
					$shootingmode = "SA";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Guerrilla";
					$clip = ceil(1.5 * $clip);
					$rof++;
			}
			break;
		case 13:
		case 14:
		case 15:
		case 16:
			$subtype = "machine gun";
			$range = 7;
			$damage = 2;
			$rof = 3;
			$weight = 16;
			$clip = 27;
			$str = 8;
			$ap = 1;
			$shootingmode = "Full Automatic Only";
			$stability = "";
			$machinegun = TRUE;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "spinigun";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Minigun";
					$shootingmode = "3RB or Full Automatic Only";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Gatling Gun";
					$damage++;
					$ap++;
					$rof = 1;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Spitter";
					$damage++;
					$element = "explosive";
					$range--;
					$lowrof = TRUE;
					$rof--;
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Spinigun";
					$clip = ceil(1.5 * $clip);
					$rof++;
			}
			break;
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "grenade launcher";
			$range = 7;
			$damage = 0;
			$rof = 1;
			$weight = 11;
			$clip = 24;
			$str = 8;
			$ap = 0;
			$shootingmode = "";
			$stability = "";
			$notes = "HW";
			$grenadelauncher = TRUE;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "rokets!";
					$clip = 2 * $clip;
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Dahl";
					$name = "Grenadier";
					$shootingmode = "3RB";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Cannon";
					$damage++;
					$ap++;
					$shootingmode = "Revolver";
					$limitedammo = TRUE;
					$clip = ceil($clip / 2);
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Torpedo";
					$impbarrels = 1;
					$lowrof = TRUE;
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Rocketeer";
					$clip = ceil(1.5 * $clip);
					$rof++;
					$shootingmode = "Automatic";
			}
			break;
	}

	// IMPLEMENT IMPROVEMENTS

	if ($grenadelauncher) { $maxdam = 11; }
	else { $maxdam = 11; }

	if ($man == "Vladof") { $maxrof = 5; }
	else { $maxrof = 4; }

	$trap = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
				if ($damage < $maxdam)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif (!$machinegun AND !$lowrof AND $rof < $maxrof AND $shootingmode != "Revolver" AND minclip($clip, $rof + 1, $impbarrels))
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "SA") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", SA"; }
						else { $shootingmode = "SA"; }
					}
					elseif (strpos($shootingmode, "3RB") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", 3RB"; }
						else { $shootingmode = "3RB"; }
					}
					elseif (strpos($shootingmode, "Automatic") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", Automatic"; }
						else { $shootingmode = "Automatic"; }
						if ($rof < $maxrof) { $rof++; }
					}
					else { $rof++; }
				}
				elseif ($machinegun AND $rof < $maxrof AND $shootingmode != "Revolver" AND minclip($clip, $rof + 1, $impbarrels))
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					$rof++;
				}
				elseif ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 3:
			case 4:
				if ($imprange < 3 AND $range < 10)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else
				{
					switch ($aiming)
					{
						case "Scope":
							// TRY AGAIN
							$i--;
							break;
						case "Zoom":
							$aiming = "Scope";
							$impaiming++;
							$implist[$i] = "aiming";
							break;
						default:
							$aiming = "Zoom";
							$impaiming++;
							$implist[$i] = "aiming";
					}
				}
				break;
			case 5:
			case 6:
				if ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				elseif (!$machinegun AND !$lowrof AND $rof < $maxrof AND $shootingmode != "Revolver" AND minclip($clip, $rof + 1, $impbarrels))
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "SA") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", SA"; }
						else { $shootingmode = "SA"; }
					}
					elseif (strpos($shootingmode, "3RB") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", 3RB"; }
						else { $shootingmode = "3RB"; }
					}
					elseif (strpos($shootingmode, "Automatic") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", Automatic"; }
						else { $shootingmode = "Automatic"; }
						if ($rof < $maxrof) { $rof++; }
					}
					else { $rof++; }
				}
				elseif ($machinegun AND $rof < $maxrof AND $shootingmode != "Revolver" AND minclip($clip, $rof + 1, $impbarrels))
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					$rof++;
				}
				else { $i--; } // TRY AGAIN
				break;
			case 7:
			case 8:
			case 9:
			case 10:
				if ($impap < 2)
				{
					$impap++;
					$ap++;
					$implist[$i] = "AP";
				}
				else
				{
					if ($damage < $maxdam)
					{
						$impdamage++;
						$damage++;
						$implist[$i] = "damage";
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 11:
			case 12:
				// HW treated uniquely
				if (rand(1, 10) == 10)
				{
					if (strpos($notes, "HW") === FALSE)
					{
						if ($notes) { $notes .= ", HW"; }
						else { $notes = "HW"; }
						$impelement++;
						$implist[$i] = "heavy weapon";
					}
					else
					{
						if ($damage < $maxdam)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($impap < 2)
						{
							$impap++;
							$ap++;
							$implist[$i] = "AP";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				else
				// any of the normal elements
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($damage < $maxdam)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 2)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add three levels
							if ($impelement < 3)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							else
							{
								if ($impap < 2)
								{
									$impap++;
									$ap++;
									$implist[$i] = "AP";
								}
								elseif ($damage < $maxdam)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								else { $i--; } // TRY AGAIN
							}
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							// Grenade Launchers can't be explosive
							if ($grenadelauncher) { $elx = 14; }
							else { $elx = 18; }
							switch (rand(1, $elx))
							{
								case 1:
								case 2:
								case 3:
								case 4:
									$element = "corrosive";
									break;
								case 5:
								case 6:
								case 7:
								case 8:
									$element = "shock";
									break;
								case 9:
								case 10:
								case 11:
								case 12:
									$element = "incendiary";
									break;
								case 13:
								case 14:
									$element = "slag";
									break;
								case 15:
								case 16:
								case 17:
								case 18:
									$element = "explosive";
						}
						if ($GLOBALS['ice']) { if(rand(1, 6) == 1) { $element = "cryo"; } }
						// Jakobs and Torgue can't have elemental, have to undo it
						if ($man == "Jakobs" OR $man == "Torgue")
						{
							$element = "none";
							$impelement--;
							if ($damage < $maxdam)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 2)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
						}
					}
				}
				break;
			case 13:
			case 14:
				switch ($stability)
				{
					case "Very Stable":
						if ($imprange < 2 AND $range < 10)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "Stable":
						$stability = "Very Stable";
						$impstability++;
						$implist[$i] = "stability";
						break;
					default:
						$stability = "Stable";
						$impstability++;
						$implist[$i] = "stability";
				}
				break;
			case 15:
			case 16:
				switch ($aiming)
				{
					case "Scope":
						if ($imprange < 2 AND $range < 10)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "Zoom":
						$aiming = "Scope";
						$impaiming++;
						$implist[$i] = "aiming";
						break;
					default:
						$aiming = "Zoom";
						$impaiming++;
						$implist[$i] = "aiming";
				}
				break;
			case 17:
			case 18:
				if ($machinegun AND $rof < $maxrof AND $shootingmode != "Revolver" AND minclip($clip, $rof + 1, $impbarrels))
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					$rof++;
				}
				elseif ($lowrof OR $rof >= $maxrof OR $shootingmode == "Revolver")
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else { $i--; } // TRY AGAIN
				}
				else
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "SA") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", SA"; }
						else { $shootingmode = "SA"; }
					}
					elseif (strpos($shootingmode, "3RB") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", 3RB"; }
						else { $shootingmode = "3RB"; }
					}
					elseif (strpos($shootingmode, "Automatic") === FALSE)
					{
						if ($shootingmode) { $shootingmode .= ", Automatic"; }
						else { $shootingmode = "Automatic"; }
						if ($rof < $maxrof AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					}
					elseif ($rof < $maxrof AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
					else
					{
						$impshootingmode--;
						if ($impclip < 3)
						{
							$impclip++;
							if ($limitedammo) { $clip += 2; }
							else { $clip = ceil($clip * 1.44); }
							$implist[$i] = "clip capacity";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				break;
			case 19:
				if ($impbarrels < 1 AND minclip($clip, $rof, 1))
				{
					$impbarrels++;
					if (!$grenadelauncher) { $damagebonus++; }
					$implist[$i] = "barrels";
				}
				else
				{
					if ($impclip < 3)
					{
						$impclip++;
						if ($limitedammo) { $clip += 2; }
						else { $clip = ceil($clip * 1.44); }
						$implist[$i] = "clip capacity";
					}
					else
					{
						if ($lowrof OR $rof >= $maxrof OR $shootingmode == "Revolver")
						{
							// TRY AGAIN
							$i--;
						}
						elseif ($machinegun)
						{
							$impshootingmode++;
							$implist[$i] = "shooting mode";
							$rof++;
						}
						else
						{
							$impshootingmode++;
							$implist[$i] = "shooting mode";
							if (strpos($shootingmode, "SA") === FALSE)
							{
								if ($shootingmode) { $shootingmode .= ", SA"; }
								else { $shootingmode = "SA"; }
							}
							elseif (strpos($shootingmode, "3RB") === FALSE)
							{
								if ($shootingmode) { $shootingmode .= ", 3RB"; }
								else { $shootingmode = "3RB"; }
							}
							elseif (strpos($shootingmode, "Automatic") === FALSE)
							{
								if ($shootingmode) { $shootingmode .= ", Automatic"; }
								else { $shootingmode = "Automatic"; }
								if ($rof < $maxrof AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							}
							elseif ($rof < $maxrof AND minclip($clip, $rof + 1, $impbarrels)) { $rof++; }
							else { $impshootingmode--; $i--; }
							// TRY AGAIN
						}
					}
				}
				break;
			case 20:
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
		
		}
	}

	// Figure actual damage as $realdam
	if ($grenadelauncher) { $realdam = $grenadedamage[$damage]; }
	else { $realdam = $bulletdamage[$damage]; }

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			if (!$grenadelauncher) { $damagetag = " (explosive: -4 in SBT)"; }
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($grenadelauncher)
	{
		if ($impbarrels == 0) { $damagetag = " in an SBT" . $damagetag; }
		else { $damagetag = " in an MBT" . $damagetag; }
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> ";
	$returntext .= damageadd($realdam, $damagebonus);
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($shootingmode) { $returntext .= $shootingmode . ". "; }
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($impbarrels > 0)
	{
		if ($grenadelauncher)
		{
			$returntext .= "Broad-barreled grenadier (consumes 6 ammo per shot). ";
		}
		else
		{
			$returntext .= "Dual barrels (consumes 2 ammo per shot, +1 to hit). ";
		}

	}
	elseif ($grenadelauncher)
	{
		$returntext .= "Grenadier (consumes 3 ammo per shot). ";
	}
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_sniper($imp, $forceman)
{
	$bulletdamage = array("2d6-1", "2d6", "2d6+1", "2d8", "2d8+1", "2d10", "2d10+1", "2d12", "2d12+1", "2d12+2", "2d12+3", "2d12+4");
	$critdamage = array("d6", "d8", "d10", "d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200", "62/125/250", "75/150/300", "100/200/400", "150/300/600");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$bayonet = 0;
	$element = "none";
	$aiming = "Scope";
	$stability = "";
	$crit = 0;
	$elementdamage = 0;
	$damagebonus = 0;

	switch($forceman)
	{
		case "Dahl":
			$manroll = 1;
			break;
		case "Hyperion":
			$manroll = 5;
			break;
		case "Jakobs":
			$manroll = 9;
			break;
		case "Maliwan":
			$manroll = 13;
			break;
		case "Vladof":
			$manroll = 17;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			$subtype = "basic";
			$range = 9;
			$damage = 5;
			$rof = 1;
			$weight = 9;
			$clip = 8;
			$str = 6;
			$ap = 2;
			$shootingmode = "";
			$snapfire = -2;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Dahl";
					$name = "Sniper";
					$shootingmode = "3RB";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Sniper Rifle";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Callipeen";
					$damage++;
					$ap++;
					$clip -= 2;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Snider";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Pooshka";
					$clip = ceil(1.5 * $clip);
					$shootingmode = "SA";
			}
			break;
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
			$subtype = "extended range";
			$range = 10;
			$damage = 5;
			$rof = 1;
			$weight = 12;
			$clip = 8;
			$str = 6;
			$ap = 2;
			$shootingmode = "";
			$snapfire = -2;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Dahl";
					$name = "Strike";
					$shootingmode = "3RB";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Transaction";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Chinook";
					$damage++;
					$ap++;
					$clip -= 2;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Jericho";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Bratchny";
					$clip = ceil(1.5 * $clip);
					$shootingmode = "SA";
			}
			break;
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
			$subtype = "armor-piercing";
			$range = 9;
			$damage = 5;
			$rof = 1;
			$weight = 18;
			$clip = 7;
			$str = 8;
			$ap = 4;
			$shootingmode = "";
			$snapfire = -2;
			$notes = "HW";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Dahl";
					$name = "Terror";
					$shootingmode = "3RB";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Policy";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Muckamuck";
					$damage++;
					$ap++;
					$clip -= 2;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Corinthian";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Horrorshow";
					$clip = ceil(1.5 * $clip);
					$shootingmode = "SA";
			}
			break;
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "semi-automatic";
			$range = 8;
			$damage = 5;
			$rof = 1;
			$weight = 14;
			$clip = 9;
			$str = 6;
			$ap = 2;
			$shootingmode = "SA";
			$snapfire = -2;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Dahl";
					$name = "Scoop";
					$shootingmode .= ", 3RB";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Competition";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Diaub";
					$damage++;
					$ap++;
					$clip -= 2;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Maliwan";
					$name = "Rakehell";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Droog";
					$clip = ceil(1.5 * $clip);
					$shootingmode = "Automatic";
					$rof = 2;
			}
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impap = 0;
	$impelement = 0;
	$impsnapfire = 0;
	$impaiming = 0;
	$impshootingmode = 0;
	$impbayonet = 0;
	$impcrit = 0;
	$trap = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
				if ($impdamage < 2)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($impcrit < 3)
				{
					$impcrit++;
					$crit++;
					$implist[$i] = "critical";
				}
				elseif ($range < 10)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				else { $i--; } // TRY AGAIN
				break;
			case 3:
			case 4:
				if ($range < 10)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				elseif ($impcrit < 3)
				{
					$impcrit++;
					$crit++;
					$implist[$i] = "critical";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 5:
			case 6:
				if ($impclip < 1)
				{
					$impclip++;
					$clip = ceil($clip * 1.5);
					$implist[$i] = "clip capacity";
				}
				else
				{
					$impshootingmode++;
					$implist[$i] = "shooting mode";
					if (strpos($shootingmode, "SA") === FALSE)
					{
						if ($shootingmode == "") { $shootingmode = "SA"; }
						else { $shootingmode .= ", SA"; }
					}
					elseif (strpos($shootingmode, "3RB") === FALSE)
					{
						if ($shootingmode == "") { $shootingmode = "3RB"; }
						else { $shootingmode .= ", 3RB"; }
					}
					else { $impshootingmode--; $i--; }
					// TRY AGAIN
				}
				break;
			case 7:
			case 8:
				if ($impap < 4)
				{
					$impap++;
					$ap++;
					$implist[$i] = "AP";
				}
				elseif ($impcrit < 3)
				{
					$impcrit++;
					$crit++;
					$implist[$i] = "critical";
				}
				elseif ($range < 10)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				else { $i--; } // TRY AGAIN
				break;
			case 9:
			case 10:
				// HW treated uniquely
				if (rand(1, 5) == 5)
				{
					if (strpos($notes, "HW") === FALSE)
					{
						if ($notes) { $notes .= ", HW"; }
						else { $notes = "HW"; }
						$impelement++;
						$implist[$i] = "heavy weapon";
					}
					else
					{
						if ($impap < 4)
						{
							$impap++;
							$ap++;
							$implist[$i] = "AP";
						}
						elseif ($impdamage < 2)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				else
				// any of the normal elements
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 4)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add four levels
							if ($impelement < 4)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							else
							{
								if ($impap < 4)
								{
									$impap++;
									$ap++;
									$implist[$i] = "AP";
								}
								elseif ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								else { $i--; } // TRY AGAIN
							}
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 16))
							{
								case 1:
								case 2:
								case 3:
								case 4:
									$element = "corrosive";
									break;
								case 5:
								case 6:
								case 7:
								case 8:
									$element = "shock";
									break;
								case 9:
								case 10:
								case 11:
								case 12:
									$element = "incendiary";
									break;
								case 13:
								case 14:
								case 15:
								case 16:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 6) == 1) { $element = "cryo"; } }
						// Jakobs can't have elemental, have to undo it
						if ($man == "Jakobs")
						{
							$element = "none";
							$impelement--;
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($impap < 4)
							{
								$impap++;
								$ap++;
								$implist[$i] = "AP";
							}
							else { $i--; } // TRY AGAIN
						}
					}
				}
				break;
			case 11:
			case 12:
				if ($snapfire < 0)
				{
					$snapfire++;
					$impsnapfire++;
					$implist[$i] = "improved snapfire";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 13:
			case 14:
			case 15:
			case 16:
			case 17:
				if ($impcrit < 3)
				{
					$impcrit++;
					$crit++;
					$implist[$i] = "critical";
				}
				elseif ($range < 10)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				else { $i--; } // TRY AGAIN
				break;
			case 18:
			case 19:
				$impshootingmode++;
				$implist[$i] = "shooting mode";
				if (strpos($shootingmode, "SA") === FALSE)
				{
					if ($shootingmode == "") { $shootingmode = "SA"; }
					else { $shootingmode .= ", SA"; }
				}
				elseif (strpos($shootingmode, "3RB") === FALSE)
				{
					if ($shootingmode == "") { $shootingmode = "3RB"; }
					else { $shootingmode .= ", 3RB"; }
				}
				else
				{
					$impshootingmode--;
					if ($impclip < 1)
					{
						$impclip++;
						$clip = ceil($clip * 1.5);
						$implist[$i] = "clip capacity";
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 20:
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
		}
	}

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> ";
	$returntext .= damageadd($bulletdamage[$damage], $damagebonus);
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($snapfire < 0) { $returntext .= "Snapfire penalty (" . $snapfire . "). "; }
	else { $returntext .= "No snapfire penalty! "; }
	if ($shootingmode) { $returntext .= $shootingmode . ". "; }
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($crit > 0) { $returntext .= "Critical damage " . $critdamage[$crit] . ". "; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_shotgun($imp, $forceman)
{
	$shotgundamage = array("d6", "d6+1", "d8", "d8+1", "d10", "d10+1", "d12", "d12+1");
	$critdamage = array("d6", "d8", "d10", "d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$bayonet = 0;
	$element = "none";
	$stability = "";
	$shootingmode = "";
	$crit = 0;
	$elementdamage = 0;
	$damagebonus = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Hyperion":
			$manroll = 5;
			break;
		case "Jakobs":
			$manroll = 9;
			break;
		case "Tediore":
			$manroll = 13;
			break;
		case "Torgue":
			$manroll = 17;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			$subtype = "basic";
			$range = 3;
			$damage = 0;
			$rof = 1;
			$weight = 7;
			$clip = 7;
			$str = 0;
			$ap = 0;
			$barrels = 1;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "skatergun";
					$clip = ceil(2 * $clip);
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Projectile Diversification";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Scattergun";
					$damage++;
					$ap++;
					$clip = ceil($clip / 2);
					$limitedammo = TRUE;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Home Security";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Torgue";
					$name = "Bangstick";
					$damage++;
					$element = "explosive";
					$range--;
					// "Low Rate of Fire" DOESN'T FIT SHOTGUNS
			}
			break;
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
			$subtype = "accurate";
			$range = 4;
			$damage = 0;
			$rof = 1;
			$weight = 8;
			$clip = 6;
			$str = 0;
			$ap = 0;
			$barrels = 1;
			$aiming = "Zoom";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "longer ragne kilier";
					$clip = ceil(2 * $clip);
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Thinking";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Longrider";
					$damage++;
					$ap++;
					$clip = ceil($clip / 2);
					$limitedammo = TRUE;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Sportsman";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Torgue";
					$name = "Stalker";
					$damage++;
					$element = "explosive";
					$range--;
					// "Low Rate of Fire" DOESN'T FIT SHOTGUNS
			}
			break;
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
			$subtype = "double-barreled";
			$range = 2;
			$damage = 0;
			$rof = 2;
			$weight = 10;
			$clip = 7;
			$str = 0;
			$ap = 0;
			$barrels = 2;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "stret sweper";
					$clip = ceil(2 * $clip);
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Face Time";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Coach Gun";
					$damage++;
					$ap++;
					$clip = ceil($clip / 2);
					$limitedammo = TRUE;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Double Barrels!";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Torgue";
					$name = "Double Lovin' Pounder";
					$damage++;
					$element = "explosive";
					$range--;
					// "Low Rate of Fire" DOESN'T FIT SHOTGUNS
			}
			break;
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "triple-barreled";
			$range = 1;
			$damage = 0;
			$rof = 3;
			$weight = 12;
			$clip = 10;
			$str = 6;
			$ap = 0;
			$barrels = 3;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "room clener";
					$clip = ceil(2 * $clip);
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Hyperion";
					$name = "Crowdsourcing";
					$stability = "Stable";
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Jakobs";
					$name = "Bushwack";
					$damage++;
					$ap++;
					$clip = ceil($clip / 2);
					$limitedammo = TRUE;
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Tediore";
					$name = "Triple Barrels!";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Torgue";
					$name = "Three Way Hulk";
					$damage++;
					$element = "explosive";
					$range--;
					// "Low Rate of Fire" DOESN'T FIT SHOTGUNS
			}
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impcrit = 0;
	$impelement = 0;
	$impaiming = 0;
	$imprapidreload = 0;
	$impbarrels = 0;
	$impbayonet = 0;
	$trap = 0;
	$maxdam = 4;

	// I'M REDUCING TERTIARY "BARRELS" EFFECTS, TO ALLOW FOR 1B SHOTGUNS

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
			case 3:
			case 4:
				if ($damage < $maxdam)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($barrels < 4)
				{
					$impbarrels++;
					$barrels++;
					$rof++;
					$weight++;
					$implist[$i] = "barrels";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 5:
			case 6:
				if ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 7:
				if ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				elseif ($barrels < 4)
				{
					$impbarrels++;
					$barrels++;
					$rof++;
					$weight++;
					$implist[$i] = "barrels";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 8:
			case 9:
				if ($impcrit < 3)
				{
					$impcrit++;
					$crit++;
					$implist[$i] = "critical";
				}
				elseif ($damage < $maxdam)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 10:
			case 11:
			case 12:
				switch ($element)
				{
					case "slag":
					case "explosive":
					// Already have these, can't level 'em up
						if ($damage < $maxdam)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";					
						}
						elseif ($aiming == "")
						{
							$impaiming++;
							$aiming = "Zoom";
							$implist[$i] = "aiming";
						}
						else { $i--; } // TRY AGAIN
						break;
					case "incendiary":
					case "corrosive":
					case "shock":
					case "cryo":
						if ($element == "incendiary") { $maxelement = 3; }
						else { $maxelement = 2; }
						if ($impelement < $maxelement)
						{
							$impelement++;
							$elementdamage++;
							$implist[$i] = "element";
						}
						elseif ($damage < $maxdam)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($imprange < 2)
						{
							$imprange++;
							$range++;
							$implist[$i] = "range";					
						}
						elseif ($aiming == "")
						{
							$impaiming++;
							$aiming = "Zoom";
							$implist[$i] = "aiming";
						}
						else { $i--; } // TRY AGAIN
						break;
					default: // no existing element
						$impelement++;
						$elementdamage = 1;
						$implist[$i] = "element";
						// REDUCE ODDS OF EXPLOSIVE JUST A LITTLE BIT
						switch (rand(5, 20))
						{
							case 1:
							case 2:
							case 3:
							case 4:
							case 5:
							case 6:
							case 7:
							case 8:
							case 9:
							case 10:
							case 11:
							case 12:
								$element = "explosive";
								break;
							case 13:
							case 14:
								$element = "corrosive";
								break;
							case 15:
							case 16:
								$element = "shock";
								break;
							case 17:
							case 18:
								$element = "incendiary";
								break;
							case 19:
							case 20:
								$element = "slag";
						}
						if ($GLOBALS['ice']) { if(rand(1, 9) == 1) { $element = "cryo"; } }
					// Jakobs can't have elemental, have to undo it
					if ($man == "Jakobs")
					{
						$element = "none";
						$impelement--;
						if ($impdamage < 2)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($impap < 4)
						{
							$impap++;
							$ap++;
							$implist[$i] = "AP";
						}
						else { $i--; } // TRY AGAIN
					}
				}
				break;
			case 13:
			case 14:
				if ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 15:
			case 16:
				if ($imprapidreload < 1)
				{
					$imprapidreload++;
					$implist[$i] = "rapid reload";
					if ($notes) { $notes .= ", Rapid Reload"; }
					else { $notes = "Rapid Reload"; }
				}
				elseif ($impclip < 3)
				{
					$impclip++;
					if ($limitedammo) { $clip += 2; }
					else { $clip = ceil($clip * 1.44); }
					$implist[$i] = "clip capacity";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 17:
			case 18:
			case 19:
				if ($barrels < 4)
				{
					$impbarrels++;
					$barrels++;
					$rof++;
					$weight++;
					$implist[$i] = "barrels";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";					
				}
				elseif ($aiming == "")
				{
					$impaiming++;
					$aiming = "Zoom";
					$implist[$i] = "aiming";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 20:
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
		}
	}

	// LOTS OF ADJUSTING FOR BARRELS
	if ($shootingmode) { $append = ". " . $shootingmode; }
	else { $append = ""; }
	switch ($barrels)
	{
		case 1:
			$shootingmode = "Standard Shotgun (+2 to hit)";
			break;
		case 2:
			$shootingmode = "Double-Barreled Attack Only";
			switch ($man)
			{
				case "Bandit":
					$name = "stret sweper";
					break;
				case "Hyperion":
					$name = "Face Time";
					break;
				case "Jakobs":
					$name = "Coach Gun";
					break;
				case "Tediore":
					$name = "Double Barrels!";
					break;
				case "Torgue":
					$name = "Double Lovin' Pounder";
			}
			break;
		case 3:
			$shootingmode = "Triple-Barreled Attack Only";
			if ($str < 6) { $str = 6; }
			switch ($man)
			{
				case "Bandit":
					$name = "room clener";
					break;
				case "Hyperion":
					$name = "Crowdsourcing";
					break;
				case "Jakobs":
					$name = "Bushwack";
					break;
				case "Tediore":
					$name = "Triple Barrels!";
					break;
				case "Torgue":
					$name = "Three Way Hulk";
			}
			break;
		case 4:
			$shootingmode = "Quadruple-Barreled Attack Only";
			if ($str < 8) { $str = 8; }
			switch ($man)
			{
				case "Bandit":
					$name = "oberkil!";
					break;
				case "Hyperion":
					$name = "Development";
					break;
				case "Jakobs":
					$name = "Quad";
					break;
				case "Tediore":
					$name = "Shotgun Supreme!";
					break;
				case "Torgue":
					$name = "Ravager";
			}
			break;
		default:
			$shootingmode = "BARREL ERROR";
	}
	$shootingmode .= $append;
	if ($clip < $barrels) { $clip = $barrels; }

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> (1-3)";
	$returntext .= damageadd($shotgundamage[$damage], $damagebonus);
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> " . $shootingmode . ". ";
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($crit > 0) { $returntext .= "Critical damage " . $critdamage[$crit] . ". "; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_rocket($imp, $forceman)
{
	$rocketdamage = array("2d10", "3d6", "3d6+1", "3d6+2", "3d8", "3d8+1", "3d8+2", "3d10", "3d10+1", "3d10+2", "3d12");
	$critdamage = array("d6", "d8", "d10", "d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$bayonetdamage = array("", "Bayonet (Str+d8)", "Super-Bayonet (Str+d10)");
	$implist = array("");
	$limitedammo = FALSE;
	$lowrof = FALSE;
	$bayonet = 0;
	$element = "none";
	$aiming = "";
	$shootingmode = "";
	$stability = "";
	$blast = "MBT";
	$notes = "HW, Snapfire penalty (-2)";
	$barrels = 1;
	$elementdamage = 0;
	$ap = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Maliwan":
			$manroll = 5;
			break;
		case "Tediore":
			$manroll = 9;
			break;
		case "Torgue":
			$manroll = 13;
			break;
		case "Vladof":
			$manroll = 17;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			$subtype = "basic1";
			$range = 7;
			$damage = 1;
			$rof = 1;
			$weight = 20;
			$clip = 3;
			$str = 6;
			$hardap = 10;
			$reloadtime = 1;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "launcher";
					$weight += $clip;
					$clip = $clip * 2;
					$damage--;
					$barrels = 2;
					$blast = "LBT";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Maliwan";
					$name = "Projectile";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Tediore";
					$name = "Launcher";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Boom";
					$damage += 2;
					$range--;
					$reloadtime++;
					// INTERPRETATION OF "LOW RATE OF FIRE"
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "RPG";
					$damage--;
					$weight += $clip;
					$clip = 2 * $clip;
					$shootingmode = "SA";
					$notes .= ", Fast Rockets (-4 to evade instead of -2)";
			}
			break;
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
			$subtype = "basic2";
			$range = 7;
			$damage = 1;
			$rof = 1;
			$weight = 20;
			$clip = 4;
			$str = 6;
			$hardap = 10;
			$reloadtime = 1;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "bombabarbardeer";
					$weight += $clip;
					$clip = $clip * 2;
					$damage--;
					$barrels = 2;
					$blast = "LBT";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Maliwan";
					$name = "Prowler";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Tediore";
					$name = "Dispatch";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Dee";
					$damage += 2;
					$range--;
					$reloadtime++;
					// INTERPRETATION OF "LOW RATE OF FIRE"
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Vanquisher";
					$damage--;
					$weight += $clip;
					$clip = 2 * $clip;
					$shootingmode = "SA";
					$notes .= ", Fast Rockets (-4 to evade instead of -2)";
			}
			break;
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
			$subtype = "powerful";
			$range = 7;
			$damage = 3;
			$rof = 1;
			$weight = 28;
			$clip = 3;
			$str = 8;
			$hardap = 15;
			$reloadtime = 2;
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "zooka!";
					$weight += $clip;
					$clip = $clip * 2;
					$damage--;
					$barrels = 2;
					$blast = "LBT";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Maliwan";
					$name = "Punishment";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Tediore";
					$name = "Bazooka";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Duuurp!";
					$damage += 2;
					$range--;
					$reloadtime++;
					// INTERPRETATION OF "LOW RATE OF FIRE"
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Hero";
					$damage--;
					$weight += $clip;
					$clip = 2 * $clip;
					$shootingmode = "SA";
					$notes .= ", Fast Rockets (-4 to evade instead of -2)";
			}
			break;
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$subtype = "accurate";
			$range = 7;
			$damage = 1;
			$rof = 1;
			$weight = 23;
			$clip = 3;
			$str = 6;
			$hardap = 10;
			$reloadtime = 1;
			$aiming = "Zoom";
			switch ($manroll)
			{
				case 1:
				case 2:
				case 3:
				case 4:
					$man = "Bandit";
					$name = "area efect";
					$weight += $clip;
					$clip = $clip * 2;
					$damage--;
					$barrels = 2;
					$blast = "LBT";
					break;
				case 5:
				case 6:
				case 7:
				case 8:
					$man = "Maliwan";
					$name = "Panorama";
					$elementdamage = 1;
					switch (rand(1, 4))
					{
						case 1:
							$element = "corrosive";
							break;
						case 2:
							$element = "shock";
							break;
						case 3:
							$element = "incendiary";
							break;
						case 4:
							$element = "slag";
							break;
						default:
							$element = "ERROR";
					}
					if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
					break;
				case 9:
				case 10:
				case 11:
				case 12:
					$man = "Tediore";
					$name = "Spread";
					break;
				case 13:
				case 14:
				case 15:
				case 16:
					$man = "Torgue";
					$name = "Blaaa";
					$damage += 2;
					$range--;
					$reloadtime++;
					// INTERPRETATION OF "LOW RATE OF FIRE"
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					$man = "Vladof";
					$name = "Glory";
					$damage--;
					$weight += $clip;
					$clip = 2 * $clip;
					$shootingmode = "SA";
					$notes .= ", Fast Rockets (-4 to evade instead of -2)";
			}
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imprange = 0;
	$impclip = 0;
	$impelement = 0;
	$impaiming = 0;
	$impweight = 0;
	$impbarrels = 0;
	$impbayonet = 0;
	$trap = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
			case 3:
			case 4:
				if ($impdamage < 2)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
			case 5:
			case 6:
				if ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				}
				break;
			case 7:
			case 8:
				if ($impclip < 1)
				{
					$impclip++;
					$weight += ceil($clip * 0.5);
					$clip = ceil($clip * 1.5);
					$implist[$i] = "clip capacity";
				}
				elseif ($impweight < 1)
				{
					$impweight++;
					$implist[$i] = "reduced weight";
				}
				else
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				}
				break;
			case 9:
			case 10:
			case 11:
			case 12:
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				break;
			case 13:
			case 14:
			case 15:
				if ($aiming == "")
				{
					$aiming = "Zoom";
					$impaiming++;
					$implist[$i] = "aiming";
				}
				elseif ($aiming == "Zoom")
				{
					$aiming = "Scope";
					$impaiming++;
					$implist[$i] = "aiming";
				}
				elseif ($imprange < 2)
				{
					$imprange++;
					$range++;
					$implist[$i] = "range";
				}
				else
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				}
				break;
			case 16:
			case 17:
				if ($impweight < 1)
				{
					$impweight++;
					$implist[$i] = "reduced weight";
					// HALVE WEIGHT LATER, AT THE END
				}
				else
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				}
				break;
			case 18:
			case 19:
				if ($barrels == 1 AND $man != "Vladof")
				{
					$impbarrels++;
					$barrels = 2;
					$blast = "LBT";
					$implist[$i] = "barrels";
				}
				elseif ($impclip < 1)
				{
					$impclip++;
					$weight += ceil($clip * 0.5);
					$clip = ceil($clip * 1.5);
					$implist[$i] = "clip capacity";
				}
				elseif ($impweight < 1)
				{
					$impweight++;
					$implist[$i] = "reduced weight";
				}
				else
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							if ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add two levels
							if ($impelement < 2)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							elseif ($impdamage < 2)
							{
								$impdamage++;
								$damage++;
								$implist[$i] = "damage";
							}
							elseif ($bayonet < 2)
							{
								$impbayonet++;
								$implist[$i] = "bayonet";
								$bayonet++;
								$weight++;
							}
							else { $i--; } // TRY AGAIN
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 20))
							{
								case 1:
								case 2:
								case 3:
								case 4:
								case 5:
									$element = "corrosive";
									break;
								case 6:
								case 7:
								case 8:
								case 9:
								case 10:
									$element = "shock";
									break;
								case 11:
								case 12:
								case 13:
								case 14:
								case 15:
									$element = "incendiary";
									break;
								case 16:
								case 17:
								case 18:
								case 19:
								case 20:
									$element = "slag";
							}
							if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
							// TORGUE CAN'T HAVE ELEMENTS
							if ($man == "Torgue")
							{
								$impelement--;
								$element = "none";
								$elementdamage = 0;
								if ($impdamage < 2)
								{
									$impdamage++;
									$damage++;
									$implist[$i] = "damage";
								}
								elseif ($bayonet < 2)
								{
									$impbayonet++;
									$implist[$i] = "bayonet";
									$bayonet++;
									$weight++;
								}
								else { $i--; } // TRY AGAIN
							}
					}
				}
				break;
			case 20:
				if ($bayonet < 2)
				{
					$impbayonet++;
					$implist[$i] = "bayonet";
					$bayonet++;
					$weight++;
				}
				else { $i--; } // TRY AGAIN
				break;
		}
	}

	// Hidden feature: Any rocket launcher with dual barrels always
	// has an even clip size. We round toward 4 normally, or toward
	// 6 with improved clip size, which seems to produce fair results.
	if ($impclip > 0) { $ideal = 6; }
	else { $ideal = 4; }
	if ($barrels == 2 AND ($clip % 2) == 1)
	{
		if ($clip < $ideal) { $clip++; }
		else { $clip--; }
	}
	// ADJUST WEIGHT
	if ($damage > 3) { $weight += $clip * ($damage - 3); }
	if ($impweight > 0) { $weight = ceil($weight / 2); }

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none" OR $element == "explosive")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }
	$fullname = $man . " " . $prefix . $name;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> " . $rocketdamage[$damage] . " in an " . $blast;
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap . " (+" . $hardap . "*)";
	$returntext .= " &nbsp; <b>RoF</b> " . $rof;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Clip</b> " . $clip;
	$returntext .= " &nbsp; <b>Min Str</b> ";
	if ($str) { $returntext .= "d" . $str; }
	else { $returntext .= "-"; }
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($shootingmode) { $returntext .= $shootingmode . ". "; }
	if ($aiming) { $returntext .= $aiming . ". "; }
	if ($bayonet > 0) { $returntext .= $bayonetdamage[$bayonet] . ". "; }
	if ($stability) { $returntext .= $stability . ". "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($barrels > 1) { $returntext .= "Dual barrels (2 ammo per shot). "; }
	$returntext .= "Reloading (" . $reloadtime . "). ";
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . $subtype . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	$returntext .= "<p>* Extra AP applies to direct hits against hard targets (physical armor only, not shields).</p>";
	return $returntext;
}

function gen_grenade($imp, $forceman)
{
	$grenadedamage = array("3d6", "3d6+2", "3d8", "3d8+2", "3d10", "3d10+2", "3d12");
	$rangedistance = array("2/4/8", "3/6/12", "5/10/20", "10/20/40", "12/24/48", "15/30/60", "20/40/80", "24/48/96", "30/60/120", "40/80/160", "50/100/200");
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$implist = array("");
	$element = "none";
	$elementdamage = 0;
	$damage = 0;
	$range = 2;
	$delivery = "Lobbed ";
	$blast = "MBT";
	$fuse = "";
	$weight = 2;
	$evasion = -2;
	$tohit = 0;
	$sticky = "";
	$notes = "";
	$ap = 0;

	switch($forceman)
	{
		case "Bandit":
			// The only weird one, since they make two kinds
			if (rand(1, 2) == 1) { $manroll = 1; }
			else { $manroll = 21; }
			break;
		case "Dahl":
			$manroll = 5;
			break;
		case "Hyperion":
			$manroll = 13;
			break;
		case "Maliwan":
			$manroll = 17;
			break;
		case "Tediore":
			$manroll = 23;
			break;
		case "Torgue":
			$manroll = 3;
			break;
		case "Vladof":
			$manroll = 9;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch ($manroll)
	{
		case 1:
		case 2:
			$man = "Bandit";
			$name = "murrv";
			$blast = "LBT";
			break;
		case 3:
		case 4:
			$man = "Torgue";
			$name = "MIRV";
			$blast = "LBT";
			break;
		case 5:
		case 6:
		case 7:
		case 8:
			$man = "Dahl";
			$name = "Bouncing Betty";
			$notes = "Bouncing Betty (Ignores non-overhead cover)";
			break;
		case 9:
		case 10:
		case 11:
		case 12:
			$man = "Vladof";
			switch (rand(1, 3))
			{
				case 1:
					$name = "Cloud";
					$element = "corrosive";
					$notes = "Cloud (Damages again on each target's turn, with another +1 AP)";
					break;
				case 2:
					$name = "Tesla";
					$element = "shock";
					$notes = "Tesla (Damages again on each target's turn, with another +2 AP)";
					break;
				case 3:
					$name = "Burst";
					$element = "incendiary";
					$notes = "Fire Burst (Damages again on each target's turn, but with incendiary raised to ###)";
				break;
			}
			if ($GLOBALS['ice']) { if(rand(1, 4) == 1) {
				$name = "Grenade";
				$element = "cryo";
				$notes = "Cryo Burst (Damages again on each target's turn, with another -2 Agility/Pace and +1 impact damage)";
			} }
			break;
		case 13:
		case 14:
		case 15:
		case 16:
			$man = "Hyperion";
			$name = "Singularity";
			$notes = "Singularity (evade at -1, using lower of Agility or Strength)";
			$evasion--;
			break;
		case 17:
		case 18:
		case 19:
		case 20:
			$man = "Maliwan";
			$name = "Transfusion";
			$notes = "Transfusion (If it deals at least one wound, thrower rolls Vigor to heal one wound)";
			break;
		case 21:
		case 22:
			$man = "Bandit";
			$name = "gurnade";
			$imp++;
			break;
		case 23:
		case 24:
			$man = "Tediore";
			$name = "Grenade";
			$imp++;
	}

	// IMPLEMENT IMPROVEMENTS

	$impdamage = 0;
	$imparea = 0;
	$impfuse = 0;
	$impelement = 0;
	$imprubberized = 0;
	$impdelivery = 0;
	$impsticky = 0;
	$trap = 0;
	
	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation

		// House rule: First few Vladof improvements likely to be element
		if ($man == "Vladof" AND rand(1, (($i + 1) * 6)) == 1) { $roll = 11; }
		else { $roll = rand(1, 20); }
		switch ($implist[$i] = $roll)
		{
			case 1:
			case 2:
			case 3:
			case 4:
				if ($damage < 6)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($blast != "LBT")
				{
					$imparea++;
					$implist[$i] = "area of effect";
					if ($blast == "MBT") { $blast = "LBT"; }
					else { $blast = "MBT"; }
				}
				else { $i--; } // TRY AGAIN
				break;
			case 5:
			case 6:
				if ($blast != "LBT")
				{
					$imparea++;
					$implist[$i] = "area of effect";
					if ($blast == "MBT") { $blast = "LBT"; }
					else { $blast = "MBT"; }
				}
				elseif ($damage < 6)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 7:
			case 8:
			case 9:
			case 10:
				if ($impfuse == 1)
				{
					$fuse = "Very Short Fuse (-2 to evade)";
					$evasion--;
					$impfuse++;
					$implist[$i] = "fuse";
				}
				elseif ($impfuse == 0)
				{
					$fuse = "Short Fuse (-1 to evade)";
					$evasion--;
					$impfuse++;
					$implist[$i] = "fuse";
				}
				elseif ($impsticky < 1)
				{
					$impsticky++;
					$implist[$i] = "sticky";
					$sticky = "Sticky ";
					$tohit++;
				}
				else { $i--; } // TRY AGAIN
				break;
			case 11:
			case 12:
			case 13:
			case 14:
				switch ($element)
				{
					case "slag":
					case "explosive":
					// Already have these, can't level 'em up
						if ($damage < 6)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($blast != "LBT")
						{
							$imparea++;
							$implist[$i] = "area of effect";
							if ($blast == "MBT") { $blast = "LBT"; }
							else { $blast = "MBT"; }
						}
						else { $i--; } // TRY AGAIN
						break;
					case "corrosive":
					case "shock":
					case "incendiary":
					case "cryo":
					// Can go to five levels
						if ($elementdamage < 5)
						{
							$impelement++;
							$elementdamage++;
							$implist[$i] = "element";
						}
						elseif ($damage < 6)
						{
							$impdamage++;
							$damage++;
							$implist[$i] = "damage";
						}
						elseif ($blast != "LBT")
						{
							$imparea++;
							$implist[$i] = "area of effect";
							if ($blast == "MBT") { $blast = "LBT"; }
							else { $blast = "MBT"; }
						}
						else { $i--; } // TRY AGAIN
						break;
					default: // no existing element
						$impelement++;
						$elementdamage = 1;
						$implist[$i] = "element";
						switch (rand(1, 4))
						{
							case 1:
								$element = "corrosive";
								break;
							case 2:
								$element = "shock";
								break;
							case 3:
								$element = "incendiary";
								break;
							case 4:
								$element = "slag";
						}
						if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
				}
				break;
			case 15:
				if ($imprubberized == 0 AND $impdelivery == 0)
				{
					$imprubberized++;
					$delivery = "Rubberized ";
					$evasion++;
					if ($notes) { $notes .= ". Rubberized (+1 to evade, must have clear line to target square)"; }
					else { $notes = "Rubberized (+1 to evade, must have clear line to target square)"; }
					$imp += 2;
					$implist[$i] = "rubberized";
				}
				elseif ($damage < 6)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				elseif ($blast != "LBT")
				{
					$imparea++;
					$implist[$i] = "area of effect";
					if ($blast == "MBT") { $blast = "LBT"; }
					else { $blast = "MBT"; }
				}
				else { $i--; } // TRY AGAIN
				break;
			case 16:
			case 17:
			case 18:
				if ($imprubberized == 0)
				{
					if ($delivery != "Homing ")
					{
						$impdelivery++;
						$implist[$i] = "delivery";
						$range++;
						if ($delivery == "Lobbed ")
						{
							$delivery = "Longbow ";
						}
						elseif ($delivery == "Longbow ")
						{
							$delivery = "Homing ";
							$tohit++;
							if ($notes) { $notes .= ". Homing (+1 to hit)"; }
							else { $notes = "Homing (+1 to hit)"; }
						}
						else { $delivery = "DELIVERY ERROR "; }
					}
					elseif ($impfuse == 1)
					{
						$fuse = "Very Short Fuse (-2 to evade)";
						$evasion--;
						$impfuse++;
						$implist[$i] = "fuse";
					}
					elseif ($impfuse == 0)
					{
						$fuse = "Short Fuse (-1 to evade)";
						$evasion--;
						$impfuse++;
						$implist[$i] = "fuse";
					}
					elseif ($impsticky < 1)
					{
						$impsticky++;
						$implist[$i] = "sticky";
						$sticky = "Sticky ";
						$tohit++;
					}
					else { $i--; } // TRY AGAIN
				}
				else // TREAT THIS AS DAMAGE RESULT IF RUBBERIZED
				{
					if ($damage < 6)
					{
						$impdamage++;
						$damage++;
						$implist[$i] = "damage";
					}
					elseif ($blast != "LBT")
					{
						$imparea++;
						$implist[$i] = "area of effect";
						if ($blast == "MBT") { $blast = "LBT"; }
						else { $blast = "MBT"; }
					}
					else { $i--; } // TRY AGAIN
				}
				break;
			case 19:
			case 20:
				if ($impsticky < 1)
				{
					$impsticky++;
					$implist[$i] = "sticky";
					$sticky = "Sticky ";
					$tohit++;
				}
				elseif ($blast != "LBT")
				{
					$imparea++;
					$implist[$i] = "area of effect";
					if ($blast == "MBT") { $blast = "LBT"; }
					else { $blast = "MBT"; }
				}
				elseif ($damage < 6)
				{
					$impdamage++;
					$damage++;
					$implist[$i] = "damage";
				}
				else { $i--; } // TRY AGAIN
				break;
		}
	}

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	// Grenades have a specific name order
	$fullname = $man . " " . $sticky . $delivery;
	if ($element != "none") { $fullname .= ucfirst($element) . " "; }
	$fullname .= $name;

	if ($man == "Bandit") // THIS IS FUN
	{
		$fullname = str_replace("Sticky Lobbed", "throw'n stik", $fullname);
		$fullname = str_replace("Sticky", "stiky", $fullname);
		$fullname = str_replace("Rubberized", "bowncy", $fullname);
		$fullname = str_replace("Lobbed", "throwin", $fullname);
		$fullname = str_replace("Longbow", "lungbomm", $fullname);
		$fullname = str_replace("Homing", "hummin", $fullname);
		$fullname = str_replace("Corrosive", "asidy", $fullname);
		$fullname = str_replace("Incendiary", "burnin", $fullname);
		$fullname = str_replace("Shock", "lectrik", $fullname);
		$fullname = str_replace("Slag", "sluj", $fullname);
		$fullname = str_replace("Cryo", "icee", $fullname);
	}

	// Give useful data for Burst grenade
	if ($name == "Burst")
	{
		$notes = str_replace("###", $incendiarydamage[$elementdamage + 1], $notes);
	}

	$returntext = "<h2>";
	$returntext .= $fullname . " (" . $GLOBALS['rarity'] . " grenade mod)</h2>";
	$returntext .= "<b>Range</b> " . $rangedistance[$range];
	$returntext .= " &nbsp; <b>Damage</b> " . $grenadedamage[$damage] . " in an " . $blast . $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>To Hit</b> +" . $tohit;
	$returntext .= " &nbsp; <b>To Evade</b> " . $evasion;
	$returntext .= " &nbsp; <b>Notes:</b> HW. ";
	if ($element == "cryo" AND $elementdamage > 0) { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($notes) { $returntext .= $notes . ". "; }
	if ($fuse) { $returntext .= $fuse . ". "; }
	if ($sticky) { $returntext .= "Sticky (+1 to hit; can attach to surfaces). "; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " grenade mod with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		$returntext .= $implist[$i];
	}
	$returntext .= "</i></p>";
	return $returntext;
}

function gen_shield($imp, $forceman)
{
	$incendiarydamage = array("1", "1d4", "1d4+1", "1d6", "1d6+1", "1d8", "1d8+1", "1d10", "1d10+1", "1d12", "1d12+1");
	$implist = array("");
	$absorption = "";
	$adaptive = -1;
	$amplify = -1;
	$booster = -1;
	$nova = -1;
	$novadamage = array("2d10", "3d6", "3d6+2", "3d8", "3d8+2", "3d10", "3d10+2", "3d12", "3d12+2");
	$novarange = -1;
	$novaarea = array("SBT", "MBT", "LBT");
	$resistance = -1;
	$resistancelevels = array("ERROR", "one level of ", "up to two levels of ", "up to three levels of ", "all ");
	$element = "";
	$elementdamage = 0;
	$roid = -1;
	$spike = -1;
	$spikedamage = array("2d6-1", "2d6", "2d6+1", "2d8", "2d8+1", "2d10", "2d10+1", "2d12", "2d12+1");
	$toughness = 0;
	$capacity = 4;
	$reactivity = 1;
	$reactvalue = array("d4-2", "d4", "d6", "d8", "d10", "d12");
	$recharge = 1;
	$weight = 2;

	switch($forceman)
	{
		case "Anshin":
			$manroll = 1;
			break;
		case "Bandit":
			$manroll = 3;
			break;
		case "Dahl":
			$manroll = 5;
			break;
		case "Hyperion":
			$manroll = 7;
			break;
		case "Maliwan":
			if (rand(1, 2) == 1) { $manroll = 9; }
			else { $manroll = 11; }
			break;
		case "Pangolin":
			$manroll = 13;
			break;
		case "Tediore":
			$manroll = 15;
			break;
		case "Torgue":
			if (rand(1, 2) == 1) { $manroll = 17; }
			else { $manroll = 18; }
			break;
		case "Vladof":
			$manroll = 19;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch($manroll)
	{
		case 1:
		case 2:
			$man = "Anshin";
			$name = "Adaptive";
			$adaptive = 1;
			$toughness = 1;
			break;
		case 3:
		case 4:
			$man = "Bandit";
			$name = "Roid";
			$roid = 2;
			break;
		case 5:
		case 6:
			$man = "Dahl";
			$name = "Booster";
			$booster = 0;
			break;
		case 7:
		case 8:
			$man = "Hyperion";
			$name = "Amplify";
			$amplify = 1;
			break;
		case 9:
		case 10:
			$man = "Maliwan";
			$name = "Nova";
			$nova = 1;
			$novarange = 0;
			$elementdamage = 1;
			$resistance = 0;
			switch(rand(1, 4))
			{
				case 1:
					$element = "corrosive";
					break;
				case 2:
					$element = "shock";
					break;
				case 3:
					$element = "incendiary";
					break;
				case 4:
					$element = "slag";
			}
			if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
			break;
		case 11:
		case 12:
			$man = "Maliwan";
			$name = "Spike";
			$spike = 1;
			$elementdamage = 1;
			$resistance = 0;
			switch(rand(1, 4))
			{
				case 1:
					$element = "corrosive";
					break;
				case 2:
					$element = "shock";
					break;
				case 3:
					$element = "incendiary";
					break;
				case 4:
					$element = "slag";
			}
			if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
			break;
		case 13:
		case 14:
			$man = "Pangolin";
			$name = "Turtle";
			$capacity += 2;
			$toughness--;
			break;
		case 15:
		case 16:
			$man = "Tediore";
			$name = "Shield";
			$recharge++;
			$capacity--;
			// REACTIVITY GETS A +1, ADDED DURING DISPLAY
			break;
		case 17:
			$man = "Torgue";
			$name = "Nova";
			$nova = 2;
			$novarange = 0;
			break;
		case 18:
			$man = "Torgue";
			$name = "Spike";
			$spike = 2;
			break;
		case 19:
		case 20:
			$man = "Vladof";
			$name = "Absorb";
			$absorption = "12";
	}

	// IMPLEMENT IMPROVEMENTS
	$impturtle = 0;
	$trap = 0;

	// House rule to avoid nothing but "special" improvements
	$maxspecial = ceil($imp / 2);
	$impspecial = 0;

	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch($implist[$i] = rand(1, 4))
		{
			case 1:
				// I WANT REACTIVITY TO COME UP SLIGHTLY LESS OFTEN FOR ROID
				$coinflip = 1;
				if ($man == "Bandit") { $coinflip = rand(1, 3); }
				if ($capacity < 12)
				{
					$capacity++;
					$implist[$i] = "capacity";
				}
				elseif ($reactivity < 5 AND $coinflip == 1)
				{
					$reactivity++;
					$implist[$i] = "reactivity";
				}
				elseif ($recharge < ($capacity - 1)/2 AND $coinflip == 2)
				{
					$recharge++;
					$implist[$i] = "recharge rate";
				}
				elseif ($coinflip == 3) { $i--; } // TRY AGAIN
				else { $i--; } // TRY AGAIN
				break;
			case 2:
				if ($reactivity < 5)
				{
					$reactivity++;
					$implist[$i] = "reactivity";
				}
				elseif ($capacity < 12)
				{
					$capacity++;
					$implist[$i] = "capacity";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 3:
				if ($recharge < ($capacity - 1)/2)
				{
					$recharge++;
					$implist[$i] = "recharge rate";
				}
				elseif ($capacity < 12)
				{
					$capacity++;
					$implist[$i] = "capacity";
				}
				else { $i--; } // TRY AGAIN
				break;
			case 4: // SPECIAL PROPERTY
				$aborted = FALSE;
				if ($impspecial < $maxspecial)
				{
					$goto = $name;
					$impspecial++;
				}
				else
				{
					$goto = "Too Many Special Properties";
				}
				switch($goto)
				{
					case "Absorb":
						// Now on a d12, ranging from 12+ to 9+.
						if ($absorption == "9-12")
						{
							$aborted = TRUE;
						}
						elseif ($absorption == "10-12")
						{
							$absorption = "9-12";
							$implist[$i] = "absorption";
						}
						elseif ($absorption == "11-12")
						{
							$absorption = "10-12";
							$implist[$i] = "absorption";
						}
						elseif ($absorption == "12")
						{
							$absorption = "11-12";
							$implist[$i] = "absorption";
						}
						else { $implist [$i] = "ABSORPTION ERROR"; }
						break;
					case "Adaptive":
						if (rand(1, 2) == "1")
						{
							if ($adaptive < 5)
							{
								$adaptive++;
								$implist[$i] = "adaptive";
							}
							elseif ($toughness < 3)
							{
								$toughness++;
								$implist[$i] = "toughness";
							}
							else { $aborted = TRUE; }
						}
						else
						{
							if ($toughness < 3)
							{
								$toughness++;
								$implist[$i] = "toughness";
							}
							elseif ($adaptive < 5)
							{
								$adaptive++;
								$implist[$i] = "adaptive";
							}
							else { $aborted = TRUE; }
						}
						break;
					case "Amplify":
						if ($amplify < 3)
						{
							$amplify++;
							$implist[$i] = "amplify";
						}
						else { $aborted = TRUE; }
						break;
					case "Booster":
						if ($booster < 3)
						{
							$booster++;
							$implist[$i] = "booster";
						}
						else { $aborted = TRUE; }
						break;
					case "Nova":
						if ($man == "Maliwan") { $seed = rand(1, 8); }
						else { $seed = rand(1, 7); }
						switch ($seed)
						{
							case 1:
							case 2:
							case 3:
								if ($nova < 5)
								{
									$nova++;
									$implist[$i] = "nova";
								}
								elseif ($novarange < 2)
								{
									$novarange++;
									$implist[$i] = "area of effect";
								}
								else { $aborted = TRUE; }
								break;
							case 4:
							case 5:
							case 6:
							case 7:
								if ($novarange < 2)
								{
									$novarange++;
									$implist[$i] = "area of effect";
								}
								elseif ($nova < 5)
								{
									$nova++;
									$implist[$i] = "nova";
								}
								else { $aborted = TRUE; }
								break;
							case 8:
								if ($element == "slag" AND $resistance == 0)
								{
									$resistance = 4;
									$implist[$i] = "resistance";
								}
								elseif ($element == "corrosive" AND $resistance < 4)
								{
									$resistance++;
									$implist[$i] = "resistance";
								}
								elseif ($element == "cryo" AND $resistance < 4)
								{
									$resistance++;
									$implist[$i] = "resistance";
								}
								elseif ($element == "incendiary" AND $resistance < 4)
								{
									$resistance++;
									$implist[$i] = "resistance";
								}
								elseif ($element == "shock" AND $resistance < 4)
								{
									$resistance++;
									$implist[$i] = "resistance";
								}
								elseif ($nova < 5)
								{
									$nova++;
									$implist[$i] = "nova";
								}
								else { $aborted = TRUE; }
						}
						break;
					case "Roid":
						if ($roid < 4)
						{
							$roid++;
							$implist[$i] = "roid";
						}
						else { $aborted = TRUE; }
						break;
					case "Shield":
						$aborted = TRUE;
						break;
					case "Spike":
						if ($man == "Torgue")
						{
							if ($spike < 7)
							{
								$spike++;
								$implist[$i] = "spike";
							}
							else { $aborted = TRUE; }
						}
						else // Maliwan
						{
							switch(rand(1, 4))
							{
								case 1:
								case 2:
								case 3:
									if ($spike < 7)
									{
										$spike++;
										$implist[$i] = "spike";
									}
									elseif ($element == "slag" AND $resistance == 0)
									{
										$resistance = 4;
										$implist[$i] = "resistance";
									}
									elseif ($element == "corrosive" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "cryo" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "incendiary" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "shock" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									else { $aborted = TRUE; }
									break;
								case 4:
									if ($element == "slag" AND $resistance == 0)
									{
										$resistance = 4;
										$implist[$i] = "resistance";
									}
									elseif ($element == "corrosive" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "cryo" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "incendiary" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($element == "shock" AND $resistance < 4)
									{
										$resistance++;
										$implist[$i] = "resistance";
									}
									elseif ($spike < 7)
									{
										$spike++;
										$implist[$i] = "spike";
									}
									else { $aborted = TRUE; }
							}
						}
						break;
					case "Turtle":
						if ($impturtle < 2 AND $capacity < 12)
						{
							$impturtle++;
							$implist[$i] = "turtle";
							if ($impturtle == 1)
							{
								$capacity++;
							}
							elseif ($impturtle == 2)
							{
								$capacity++;
								if ($capacity < 12)
								{
									$capacity++;
									$toughness--;
								}
							}
							else { $implist[$i] = "TURTLE ERROR"; }
						}
						else { $aborted = TRUE; }
						break;
					default:
						$aborted = TRUE;
						break;
				}
				if ($aborted == TRUE)
				{
					if ($capacity < 12)
					{
						$capacity++;
						$implist[$i] = "capacity";
					}
					elseif ($reactivity < 5)
					{
						$reactivity++;
						$implist[$i] = "reactivity";
					}
					elseif ($recharge < ($capacity - 1)/2)
					{
						$recharge++;
						$implist[$i] = "recharge rate";
					}
					else { $i--; } // TRY AGAIN I GUESS; CAN THIS EVEN HAPPEN?
				}
		}
	}

	// TEDIORES HAVE A MINIMUM
	if ($capacity < 4) { $capacity = 4; }

	$fullname = "";
	$fullname = prefix($GLOBALS['type'], array_mode($implist, 0), $man);
	if ($fullname) { $fullname .= " "; }
	if ($imp == 0 AND $man == "Tediore")
	{
		// YOU REALLY HAVE TO HAVE THIS ONE
		$fullname = "My First ";
	}
	if ($man == "Maliwan") { $fullname .= ucfirst($element) . " "; }
	$fullname .= $name;

	if ($name != "Shield") { $fullname .= " Shield"; }
	if ($man == "Bandit") { $fullname = strtolower($fullname); }

	$returntext = "<h2>" . $man . " " . $fullname . " (" . $GLOBALS['rarity'] . " " . $GLOBALS['type'] . ")</h2>";
	$returntext .= "<b>Capacity</b> " . $capacity;
	$returntext .= " &nbsp; <b>Reactivity</b> " . $reactvalue[$reactivity];
	if ($man == "Tediore") { $returntext .= "+1"; }
	$returntext .= " &nbsp; <b>Recharge Rate</b> " . $recharge;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Notes:</b> ";

	$details = "";
	switch ($name)
	{
		case "Absorb":
			$returntext .= "Absorption (" . $absorption . " on d12).";
			$details = "While your shield's Capacity is above 0, roll a d12 each time you're shot with a bullet or rocket (not indirect blasts, barf, etc.). On a " . $absorption . ", ignore the hit and add the bullet to your supply.";
			break;
		case "Adaptive":
			$returntext .= "Toughness +" . $toughness . ", Elemental resistance " . $adaptive . ".";
			$details = "Regardless of current Capacity, grants +" . $toughness . " Toughness and provides " . $adaptive . " level(s) of resistance against the last element to hit you.";
			break;
		case "Amplify":
			$returntext .= "Amplify +" . $amplify . ".";
			$details = "When your shield is fully charged, your next attack does +" . $amplify . " damage. However, this temporarily reduces your Capacity by " . $amplify . ".";
			break;
		case "Booster":
			$returntext .= "Drops boosters (" . ($recharge + $booster) . " Capacity).";
			$details = "When a hit exceeds your shield's Capacity, you drop a booster one game-inch away. If you or an ally pick this up, it recharges up to " . ($recharge + $booster) . " Capacity immediately, though this does not re-enable a disabled shield.";
			break;
		case "Nova":
			switch ($element)
			{
				case "incendiary":
					$eltext = " plus " . $incendiarydamage[$elementdamage] . " incendiary";
					break;
				case "corrosive":
					$eltext = " with AP " . $elementdamage . " (corrosive)";
					break;
				case "shock":
					$eltext = " with AP " . ($elementdamage * 2) . " (shock)";
					break;
				case "slag":
					$eltext = " plus slag";
					break;
				case "cryo":
					$eltext = " plus cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace and +" . $elementdamage . " impact damage)";
					break;
				default:
					$eltext = "";
			}
			$returntext .= "Nova (" . $novadamage[$nova] . " damage" . $eltext . " in an " . $novaarea[$novarange] . ").";
			$details = "The first time your shield's Capacity drops to 0, it sends out a Nova that does " . $novadamage[$nova] . " damage" . $eltext . ", affecting all enemies in an " . $novaarea[$novarange] . ". This ability resets once it returns to maximum Capacity.";
			if ($resistance > 0)
			{
				$returntext .= " Negates ". $resistancelevels[$resistance] . $element . " damage.";
				$details .= " Your shield also negates " . $resistancelevels[$resistance] . $element . " damage, as long as its Capacity is above 0.";
			}
			break;
		case "Roid":
			$returntext .= "Roid +" . $roid . ".";
			$details = "As long as your shield's Capacity is at 0, your melee attacks do an extra +" . $roid . " damage.";
			break;
		case "Shield":
			$returntext .= "-";
			break;
		case "Spike":
			switch ($element)
			{
				case "incendiary":
					$eltext = " plus " . $incendiarydamage[$elementdamage] . " incendiary";
					break;
				case "corrosive":
					$eltext = " with AP " . $elementdamage . " (corrosive)";
					break;
				case "shock":
					$eltext = " with AP " . ($elementdamage * 2) . " (shock)";
					break;
				case "slag":
					$eltext = " plus slag";
					break;
				case "cryo":
					$eltext = " plus cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace and +" . $elementdamage . " impact damage)";
					break;
				default:
					$eltext = "";
			}
			$returntext .= "Spike (" . $spikedamage[$spike] . " damage" . $eltext . ").";
			$details = "If you're struck in melee while your shield's Capacity is above 0, the attacker takes " . $spikedamage[$spike] . " damage" . $eltext . ".";
			if ($resistance > 0)
			{
				$returntext .= " Negates ". $resistancelevels[$resistance] . $element . " damage.";
				$details .= " Your shield also negates " . $resistancelevels[$resistance] . $element . " damage, as long as its Capacity is above 0.";
			}
			break;
		case "Turtle":
			$returntext .= "Toughness " . $toughness . ".";
			$details = "While wearing this shield, regardless of its state, you have " . $toughness . " Toughness.";
			break;
		default:
			$returntext .= "ERROR FINDING SHIELD TYPE";
	} // END NOTES

	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " shield with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		$returntext .= $implist[$i];
	}
	$returntext .= "</i></p>";
	if ($details) { $returntext .= "<p><i>Detailed Rules:</i>" . $details . "</p>"; }
	return $returntext;
}

function gen_melee($imp, $forceman)
{
	$parry = 0;
	$maxparry = 1;
	$hands = 1;
	$ap = 0;
	$fighting = 0;
	$reach = 0;
	$damage = 0;
	$crit = 6;
	$element = "none";
	$elementdamage = 0;
	$incendiarydamage = array("+1", "+1d4", "+1d4+1", "+1d6", "+1d6+1", "+1d8", "+1d8+1", "+1d10", "+1d10+1", "+1d12", "+1d12+1");
	$implist = array("");
	$notes = "";
	$thrown = 0;

	switch($forceman)
	{
		case "Bandit":
			$manroll = 1;
			break;
		case "Dahl":
			$manroll = 9;
			break;
		case "Maliwan":
			$manroll = 16;
			break;
		default:
			$manroll = rand(1, 20);
	}

	switch (rand(1, 20))
	{
		case 1:
		case 2:
			$name = "Axe";
			$strength = 8;
			$weight = 8;
			break;
		case 3:
		case 4:
		case 5:
			$name = "Buzzaxe";
			$strength = 6;
			$damage = 2;
			$weight = 15;
			$hands = 2;
			$notes = "A natural 1 on the Fighting die (regardless of the Wild Die) hits the user instead.";
			break;
		case 6:
		case 7:
			$name = "Chainsaw";
			$strength = 8;
			$damage = 2;
			$weight = 20;
			$hands = 2;
			$parry = -1;
			$notes = "A natural 1 on the Fighting die (regardless of the Wild Die) hits the user instead.";
			break;
		case 8:
			$name = "Dagger";
			$strength = 4;
			$weight = 1;
			$thrown = 1;
			break;
		case 9:
		case 10:
			$name = "Greataxe";
			$strength = 10;
			$weight = 15;
			$ap = 1;
			$parry = -1;
			$hands = 2;
			break;
		case 11:
		case 12:
			$name = "Greatsword";
			$strength = 10;
			$weight = 12;
			$parry = -1;
			$hands = 2;
			break;
		case 13:
			$name = "Halberd";
			$strength = 8;
			$weight = 15;
			$hands = 2;
			$reach = 1;
			break;
		case 14:
		case 15:
			$name = "Handclaws";
			$strength = 6;
			$weight = 2;
			$notes = "Always equipped; no action required to switch to or from.";
			$fighting = -1;
			break;
		case 16:
			$name = "Rapier";
			$strength = 4;
			$weight = 3;
			$parry = 1;
			$maxparry = 2;
			break;
		case 17:
		case 18:
			$name = "Spear";
			$strength = 6;
			$weight = 5;
			$parry = 1;
			$maxparry = 2;
			$reach = 1;
			$hands = 2;
			$thrown = 1;
			break;
		case 19:
		case 20:
			$name = "Sword";
			$strength = 6;
			$weight = 4;
			break;
	}

	switch($manroll)
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
			$man = "Bandit";
			$damage++;
			$parry--;
			break;
		case 9:
		case 10:
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
			$man = "Dahl";
			break;
		case 16:
		case 17:
		case 18:
		case 19:
		case 20:
			$man = "Maliwan";
			$damage--;
			$elementdamage = 1;
			switch (rand(1, 4))
			{
				case 1:
					$element = "corrosive";
					break;
				case 2:
					$element = "shock";
					break;
				case 3:
					$element = "incendiary";
					break;
				case 4:
					$element = "slag";
					break;
				default:
					$element = "ERROR";
			}
			if ($GLOBALS['ice']) { if(rand(1, 5) == 1) { $element = "cryo"; } }
			break;
	}

	// IMPLEMENT IMPROVEMENTS

	$impap = 0;
	$impbalance = 0;
	$impcrit = 0;
	$impdamage = 0;
	$impstrength = 0;
	$impparry = 0;
	$impreach = 0;
	$impweight = 0;
	$impelement = 0;
	$impcompact = 0;
	$impthrown = 0;
	$trap = 0;
	
	for ($i = 0; $i < $imp; $i++)
	{
		$trap++;
		if ($trap > 50) { break; }
		// ^catches infinite loops due to $i manipulation
		switch ($implist[$i] = rand(1, 20))
		{
			case 1:
			case 2:
				if ($impap < 2)
				{
					$ap++;
					$impap++;
					$implist[$i] = "AP";
				}
				else { $i--; }
				break;
			case 3:
			case 4:
				if ($impbalance < 2)
				{
					$fighting++;
					$impbalance++;
					$implist[$i] = "balance";
				}
				else { $i--; }
				break;
			case 5:
			case 6:
				if ($crit < 12)
				{
					$crit += 2;
					$impcrit++;
					$implist[$i] = "critical";
				}
				else { $i--; }
				break;
			case 7:
			case 8:
				if ($impdamage < 2)
				{
					$damage++;
					$impdamage++;
					$implist[$i] = "damage";
				}
				else { $i--; }
				break;
			case 9:
			case 10:
				if ($parry < $maxparry)
				{
					$parry++;
					$impparry++;
					$implist[$i] = "parry";
				}
				else { $i--; }
				break;
			case 11:
				if ($reach < 1 AND $name != "Handclaws")
				{
					$reach++;
					$impreach++;
					$implist[$i] = "reach";
				}
				else { $i--; }
				break;
			case 12:
			case 13:
				if ($impweight < 1 AND $weight > 7)
				{
					$weight = floor($weight / 2);
					$impweight++;
					$implist[$i] = "lightweight";
				}
				elseif ($hands == 2)
				{
					$hands = 1;
					$impcompact++;
					$implist[$i] = "lightweight";
				}
				else { $i--; }
				break;
			case 14:
			case 15:
			case 16:
				// HW treated uniquely
				if (rand(1, 20) == 20)
				{
					if (strpos($notes, "HW") === FALSE)
					{
						if ($notes) { $notes .= " HW."; }
						else { $notes = "HW."; }
						$impelement++;
						$implist[$i] = "heavy weapon";
					}
					else { $i--; } // TRY AGAIN
				}
				else
				// any of the normal elements
				{
					switch ($element)
					{
						case "slag":
						case "explosive":
						// Already have these, can't level 'em up
							$i--;
							break;
						case "corrosive":
						case "shock":
						case "incendiary":
						case "cryo":
						// Can add four levels
							if ($impelement < 4)
							{
								$impelement++;
								$elementdamage++;
								$implist[$i] = "element";
							}
							else
							{
								$i--;
							}
							break;
						default: // no existing element
							$impelement++;
							$elementdamage = 1;
							$implist[$i] = "element";
							switch (rand(1, 19))
							{
								case 1:
								case 2:
								case 3:
								case 4:
									$element = "corrosive";
									break;
								case 5:
								case 6:
								case 7:
								case 8:
									$element = "incendiary";
									break;
								case 9:
								case 10:
								case 11:
								case 12:
									$element = "shock";
									break;
								case 13:
								case 14:
								case 15:
								case 16:
									$element = "slag";
									break;
								case 17:
								case 18:
								case 19:
									$element = "explosive";
									break;
						}
						if ($GLOBALS['ice']) { if(rand(1, 6) == 1) { $element = "cryo"; } }
					}
				}
				break;
			case 17:
			case 18:
				if ($strength < 12 AND (rand(1, 12) + 4) > $strength)
				{
					$strength += 2;
					$impstrength++;
					$implist[$i] = "strength";
				}
				else { $i--; }
				break;
			case 19:
			case 20:
				if ($impthrown < 2 AND $weight < 10 AND $name != "Handclaws" AND $thrown < 2)
				{
					$thrown++;
					$impthrown++;
					$implist[$i] = "thrown";
				}
				else { $i--; }
				break;
		}
	}

	// Apply elemental effects
	switch ($element)
	{
		case "none":
			$damagetag = "";
			$displayap = $ap;
			break;
		case "cryo":
			$damagetag = " (cryo " . $elementdamage . ")";
			$displayap = $ap;
			break;
		case "corrosive":
			$ap += $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (corrosive)";
			break;
		case "explosive":
			$damagetag = " (explosive: -4 in SBT)";
			$displayap = $ap;
			break;
		case "incendiary":
			$elementdamage += $impap;
			$damagetag = " (" . $incendiarydamage[$elementdamage] . " incendiary)";
			$displayap = "-";
			break;
		case "shock":
			$ap += 2 * $elementdamage;
			$damagetag = "";
			$displayap = $ap . " (shock)";
			break;
		case "slag":
			$damagetag = " (slag)";
			$displayap = $ap;
			break;
		default:
			$damagetag = " ELEMENT ERROR";
			$displayap = "ELEMENT ERROR";
	}

	if ($element == "none") { $explanation = ""; }
	else { $explanation = $element . " "; }
	$prefix = "";
	if ($element == "none")
	{
		if (count($implist) > 0) { $prefix = prefix($GLOBALS['type'], array_mode($implist, 0), $man) . " "; }
	}
	else // For melee weapons only, explosive counts as a prefix!
	{
		$prefix = prefix($GLOBALS['type'], $element, $man) . " ";
	}
	if ($prefix == " ") { $prefix = ""; }

	if ($man == "Bandit")
	{
		switch ($name)
		{
			case "Axe":
				$displayname = "hachet";
				break;
			case "Buzzaxe":
				$displayname = "buzzersawer";
				break;
			case "Chainsaw":
				$displayname = "bigg buzszaw";
				break;
			case "Dagger":
				$displayname = "nife";
				break;
			case "Greataxe":
				$displayname = "hed removr";
				break;
			case "Greatsword":
				$displayname = "claymoor";
				break;
			case "Halberd":
				$displayname = "pol ax";
				break;
			case "Handclaws":
				$displayname = "handstabers";
				break;
			case "Rapier":
				$displayname = "whipsord";
				break;
			case "Spear":
				$displayname = "pig stikr";
				break;
			case "Sword":
				$displayname = "sord";
				break;
			default:
				$displayname = "BANDIT ERROR";
				break;
		}
		if ($thrown > 0) { $displayname = "tossin " . $displayname; }
	}
	else
	{
		$displayname = $name;
		if ($thrown > 0) { $displayname = "Thrown " . $displayname; }
	}

	$fullname = $man . " " . $prefix . $displayname;

	$returntext = "<h2>" . $fullname . " (" . $GLOBALS['rarity'] . " " . $explanation . $GLOBALS['type'] . ")</h2>";
	switch ($thrown)
	{
		case 0:
			break;
		case 1:
			$returntext .= "<b>Range (Thrown):</b> 3/6/12 &nbsp; ";
			break;
		case 2:
			$returntext .= "<b>Range (Thrown):</b> 5/10/20 &nbsp; ";
			break;
		default:
			$returntext .= "THROWN ERROR";
			break;
	}
	$returntext .= "<b>Damage</b> Str+d" . $strength;
	if ($damage != 0) { $returntext .= sprintf("%+d", $damage); }
	$returntext .= $damagetag;
	$returntext .= " &nbsp; <b>AP</b> " . $displayap;
	$returntext .= " &nbsp; <b>Weight</b> " . $weight;
	$returntext .= " &nbsp; <b>Notes:</b> ";
	if ($fighting != 0) { $returntext .= "Fighting " . sprintf("%+d", $fighting) . ". "; }
	if ($parry != 0) { $returntext .= "Parry " . sprintf("%+d", $parry) . ". "; }
	if ($reach > 0) { $returntext .= "Reach 1. "; }
	if ($hands > 1) { $returntext .= "Two hands. "; }
	elseif ($impcompact > 0) { $returntext .= "Compact (Can be used one-handed). "; }
	if ($crit > 6) { $returntext .= "Critical damage d" . $crit . ". "; }
	if ($element == "cryo") { $returntext .= "Cryo " . $elementdamage . " (-" . ($elementdamage * 2) . " Agility/Pace, +" . $elementdamage . " impact damage). "; }
	if ($notes) { $returntext .= $notes; }
	$returntext .= "</p>";
	$returntext .= "<p><i>" . $GLOBALS['level'] . " " . $GLOBALS['rarity'] . " " . strtolower($name) . " with " . $imp . " improvement(s): ";
	sort($implist);
	for ($i = 0; $i < $imp; $i++)
	{
		if ($i > 0) { $returntext .= ", "; }
		if ($element == "incendiary" AND $implist[$i] == "AP")
		{ $returntext .= "added incendiary"; }
		else { $returntext .= $implist[$i]; }
	}
	$returntext .= "</i></p>";
	return $returntext;
}


// BEGIN MAIN BODY - #main

// DEFINE CHECKBOX SWITCHES AS NULL FOR LATER FORM

$rarity = "white";
$display = "";
$randgreen = $randwhite = $white = $green = $blue = $purple = $orange = "";
$novice = $seasoned = $veteran = $heroic = $legendary = $legplus1 = $legplus2 = "";
$randtype = $pistol = $smg = $assault = $sniper = $shotgun = $rocket = $grenade = $shield = "";
$randman = $bandit = $dahl = $hyperion = $jakobs = $maliwan = $tediore = $torgue = $vladof = $anshin = $pangolin = "";
$boostorange = $ice = FALSE;
$meleecommon = $meleeuncommon = $meleenone = "";
$kept = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$postrarity = $_POST["rarity"];
	$level = $_POST["level"];
	$posttype = $_POST["type"];
	$kept = $_POST["keep"];
	$man = $_POST["man"];
	$ice = $_POST["ice"];
	$boostorange = $_POST["boostorange"];
	$meleerarity = $_POST["meleerarity"];

	// NARROW DOWN RARITY, CHECK CORRECT BOXES FOR FORM LATER

	switch ($postrarity)
	{
		case "randgreen":
			$randgreen = "checked";
			$rarity = randomcolor();
			break;
		case "randwhite":
			$randwhite = "checked";
			if (rand(1,2) == 1) { $rarity = "white"; }
			else { $rarity = randomcolor(); }
			break;
		case "white":
			$white = "checked";
			$rarity = "white";
			break;
		case "green":
			$green = "checked";
			$rarity = "green";
			break;
		case "blue":
			$blue = "checked";
			$rarity = "blue";
			break;
		case "purple":
			$purple = "checked";
			$rarity = "purple";
			break;
		case "orange":
			$orange = "checked";
			$rarity = "orange";
			break;
		default:
			$rarity = "error";
	}

	switch ($level)
	{
		case "novice":
			$novice = "checked";
			break;
		case "seasoned":
			$seasoned = "checked";
			break;
		case "veteran":
			$veteran = "checked";
			break;
		case "heroic":
			$heroic = "checked";
			break;
		case "legendary":
			$legendary = "checked";
			break;
		case "legplus1":
			$legplus1 = "checked";
			break;
		case "legplus2":
			$legplus2 = "checked";
			break;
		default:
			$level = "error";
	}

	switch($man)
	{
		case "Anshin":
			$anshin = "checked";
			break;
		case "Bandit":
			$bandit = "checked";
			break;
		case "Dahl":
			$dahl = "checked";
			break;
		case "Hyperion":
			$hyperion = "checked";
			break;
		case "Jakobs":
			$jakobs = "checked";
			break;
		case "Maliwan":
			$maliwan = "checked";
			break;
		case "Pangolin":
			$pangolin = "checked";
			break;
		case "Tediore":
			$tediore = "checked";
			break;
		case "Torgue":
			$torgue = "checked";
			break;
		case "Vladof":
			$vladof = "checked";
			break;
		case "Random":
			$randman = "checked";
		default:
			$man = "error";
	}

	switch ($posttype)
	{
		case "randtype":
			$randtype = "checked";
			break;
		case "pistol":
			$pistol = "checked";
			break;
		case "smg":
			$smg = "checked";
			break;
		case "assault rifle":
			$assault = "checked";
			break;
		case "sniper rifle":
			$sniper = "checked";
			break;
		case "shotgun":
			$shotgun = "checked";
			break;
		case "rocket launcher":
			$rocket = "checked";
			break;
		case "grenade mod":
			$grenade = "checked";
			break;
		case "shield":
			$shield = "checked";
			break;
		case "melee weapon":
			$melee = "checked";
			break;
		default:
			$posttype = "error";
	}

	switch ($meleerarity)
	{
		case "common":
			$meleecommon = "selected";
			break;
		case "none":
			$meleenone = "selected";
			break;
		default:
			$meleeuncommon = "selected";
			break;
	}

	if ($posttype == "randtype") { $type = randomtype(); }
	else { $type = $posttype; }

	$improvements = 0;
	switch ($rarity)
	{
		case "orange":
			if ($boostorange)
			{
				switch (rand(1, 4))
				{
					case 4:
						$improvements++;
					case 3:
					case 2:
						$improvements++;
					case 1:
				}
			}
			$improvements++;
		case "purple":
			$improvements++;
		case "blue":
			$improvements++;
		case "green":
			$improvements++;
	}
	switch ($level)
	{
		case "legplus2":
			$improvements++;
		case "legplus1":
			$improvements++;
		case "legendary":
			$improvements++;
		case "heroic":
			$improvements++;
		case "veteran":
			$improvements++;
		case "seasoned":
			$improvements++;
	}

	switch ($type)
	{
		case "pistol":
			$stats = gen_pistol($improvements, $man);
			break;
		case "smg":
			$stats = gen_smg($improvements, $man);
			break;
		case "assault rifle":
			$stats = gen_assault($improvements, $man);
			break;
		case "sniper rifle":
			$stats = gen_sniper($improvements, $man);
			break;
		case "shotgun":
			$stats = gen_shotgun($improvements, $man);
			break;
		case "rocket launcher":
			$stats = gen_rocket($improvements, $man);
			break;
		case "grenade mod":
			$stats = gen_grenade($improvements, $man);
			break;
		case "shield":
			$stats = gen_shield($improvements, $man);
			break;
		case "melee weapon":
			$stats = gen_melee($improvements, $man);
			break;
		default:
			$stats = "<h1>ERROR</h1>";
	}

$keepthis = "<div class=\"corner\">keep <input type=\"checkbox\" name=\"keep[]\" value=\"" . $stats . "\"></div>\n";

$display = "<div class=\"outlined\">" . $stats . $keepthis . "</div>\n";
}
else // ON VIRGIN LOAD, CHECK THE DEFAULT ASSUMPTIONS
{
$randgreen = "checked";
$novice = "checked";
$randtype = "checked";
$randman = "checked";
$ice = "checked";
$boostorange = "checked";
$meleeuncommon = "selected";
}

?>
<head>
<title>Savage Borderlands Gear Generator</title>
<link rel="shortcut icon" href="/favicon.ico">
<style>
.padded
{
	padding-left: 20px;
}
.flex-container
{
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
}
.corner
{
	float: right;
}
.outlined
{
	margin-top: 25px;
	margin-right: 25px;
	margin-left: 25px;
	margin-bottom: 40px;
	outline: 25px solid <?php echo $rarity ?>;
	padding: 10px;
}
.kept
{
	margin-top: 20px;
	margin-right: 25px;
	margin-left: 25px;
	margin-bottom: 20px;
	outline: 1px solid black;
	padding: 10px;
}
.outlined::after
{
	content: "";
	clear: both;
	display: table;
}
.kept::after
{
	content: "";
	clear: both;
	display: table;
}
</style>
<!-- LAST TWO STYLES ARE THE "CLEARFIX HACK" -->
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<?php

echo $display;
if (strpos($kept[0], ">") > 0)
{
	for ($i = 0; $i < count($kept); $i++)
	{
		echo "<div class=\"kept\">" . $kept[$i];
		echo "<span class=\"corner\">keep <input type=\"checkbox\" name=\"keep[]\" checked value=\"" . $kept[$i] . "\"></div></div>\n";
	}
}

?>

<h1>Savage Borderlands Gear Generator</h1>

<p>A PHP generator using the rules from Brice Naudin's <a href="https://arfe.net/savage-borderlands/"><b><i>Savage Borderlands</i></b></a> fanbook, with a few small tweaks. See <a href="http://mygurps.com/pmwiki.php?n=Main.SavageBorderlands">here</a> for details, along with further resources. Please report any bugs to <a href="mailto:pkitty@mygurps.com">pkitty@mygurps.com</a>.</p><br />

<div class="padded"><input type="submit" name="submit" value="Roll It!" style="font-weight: bold;font-size:16pt;" <?php echo $focus; ?> ></div>
<div class="flex-container">
<div class="padded">
	<p><b><u>Rarity</u>:</b></p>
	<input type="radio" name="rarity" value="randgreen" <?php echo $randgreen; ?> > Random (non-white)<br />
	<input type="radio" name="rarity" value="randwhite" <?php echo $randwhite; ?> > Random (with white)<br />
	<input type="radio" name="rarity" value="white" <?php echo $white; ?> > White<br />
	<input type="radio" name="rarity" value="green" <?php echo $green; ?> > Green<br />
	<input type="radio" name="rarity" value="blue" <?php echo $blue; ?> > Blue<br />
	<input type="radio" name="rarity" value="purple" <?php echo $purple; ?> > Purple<br />
	<input type="radio" name="rarity" value="orange" <?php echo $orange; ?> > Orange<br />
	<br />
	<input type="checkbox" name="ice" value="checked" <?php echo $ice; ?> > Enable Cryo?<br />
	<input type="checkbox" name="boostorange" value="checked" <?php echo $boostorange; ?> > Boost Orange?<br />
	<select name="meleerarity">
		<option value="none" <?php echo $meleenone; ?> >No Melee Weapons</option>
		<option value="uncommon" <?php echo $meleeuncommon; ?> >Uncommon Melee</option>
		<option value="common" <?php echo $meleecommon; ?> >Common Melee</option>
	</select>
</div>
<div class="padded">
	<p><b><u>Rank</u>:*</b></p>
	<input type="radio" name="level" value="novice" <?php echo $novice; ?> > Novice<br />
	<input type="radio" name="level" value="seasoned" <?php echo $seasoned; ?> > Seasoned<br />
	<input type="radio" name="level" value="veteran" <?php echo $veteran; ?> > Veteran<br />
	<input type="radio" name="level" value="heroic" <?php echo $heroic; ?> > Heroic<br />
	<input type="radio" name="level" value="legendary" <?php echo $legendary; ?> > Legendary<br />
	<input type="radio" name="level" value="legplus1" <?php echo $legplus1; ?> > Legendary&nbsp;+&nbsp;1<br />
	<input type="radio" name="level" value="legplus2" <?php echo $legplus2; ?> > Legendary&nbsp;+&nbsp;2<br />
</div>
<div class="padded">
	<p><b><u>Type</u>:</b></p>
	<input type="radio" name="type" value="randtype" <?php echo $randtype; ?> > Random<br />
	<input type="radio" name="type" value="pistol" <?php echo $pistol; ?> > Pistol<br />
	<input type="radio" name="type" value="smg" <?php echo $smg; ?> > SMG<br />
	<input type="radio" name="type" value="assault rifle" <?php echo $assault; ?> > Assault Rifle<br />
	<input type="radio" name="type" value="sniper rifle" <?php echo $sniper; ?> > Sniper Rifle<br />
	<input type="radio" name="type" value="shotgun" <?php echo $shotgun; ?> > Shotgun<br />
	<input type="radio" name="type" value="rocket launcher" <?php echo $rocket; ?> > Rocket Launcher<br />
	<input type="radio" name="type" value="grenade mod" <?php echo $grenade; ?> > Grenade Mod<br />
	<input type="radio" name="type" value="shield" <?php echo $shield; ?> > Shield<br />
	<input type="radio" name="type" value="melee weapon" <?php echo $melee; ?> > <a href="http://mygurps.com/pmwiki.php?n=Main.SavageBorderlandsMeleeWeapons">Melee Weapon</a><br />
</div>
<div class="padded">
	<p><b><u>Manufacturer</u>:**</b></p>
	<input type="radio" name="man" value="Random" <?php echo $randman; ?> > Random<br />
	<input type="radio" name="man" value="Anshin" <?php echo $anshin; ?> > Anshin<br />
	<input type="radio" name="man" value="Bandit" <?php echo $bandit; ?> > Bandit<br />
	<input type="radio" name="man" value="Dahl" <?php echo $dahl; ?> > Dahl<br />
	<input type="radio" name="man" value="Hyperion" <?php echo $hyperion; ?> > Hyperion<br />
	<input type="radio" name="man" value="Jakobs" <?php echo $jakobs; ?> > Jakobs<br />
	<input type="radio" name="man" value="Maliwan" <?php echo $maliwan; ?> > Maliwan<br />
	<input type="radio" name="man" value="Pangolin" <?php echo $pangolin; ?> > Pangolin<br />
	<input type="radio" name="man" value="Tediore" <?php echo $tediore; ?> > Tediore<br />
	<input type="radio" name="man" value="Torgue" <?php echo $torgue; ?> > Torgue<br />
	<input type="radio" name="man" value="Vladof" <?php echo $vladof; ?> > Vladof<br />
</div>
</div>
</form>
<div class="padded"><p><b>*</b> Increase effective Rank by one for Rich, two for Filthy Rich.<br />
<b>**</b> If the manufacturer makes that type of gear; randomly chosen otherwise. For GM use only! Players <i>always</i> roll this randomly.</p>
</div>
</body>
</html>