<?php 
	
	$pikachu = [];
	$pikachu['name'] = 'Pikachu';
	$pikachu['type'] = 'electric';
	$pikachu['moves'] = [];
	$pikachu['moves']['basic'] = 'Thunderbolt';
	$pikachu['moves']['special'] = 'Thundershock';
	//['name' => 'pikachu', 'type' => 'electric', 'moves' => ['basic' => 'thunderbolt'], 'moves' => ['special' => 'thundershock']]


	$charmander = [];
	$charmander['name'] = 'charmander';
	$charmander['type'] = 'fire'; 
	$charmander['moves'] = [];
	$charmander['moves']['basic'] = 'Tail Whip';
	$charmander['moves']['special'] = 'Flamethrower';

	$squirtle = [];
	$squirtle['name'] = 'squirtle';
	$squirtle['type'] = 'water';
	$squirtle['moves'] = [];
	$squirtle['moves']['basic'] = 'Tackle';
	$squirtle['moves']['special'] = 'Tatergun';

	$bulbasaur = [];
	$bulbasaur['name'] = 'bulbasaur';
	$bulbasaur['type'] = 'grass';
	$bulbasaur['moves'] = [];
	$bulbasaur['moves']['basic'] = 'Tackle';
	$bulbasaur['moves']['special'] = 'Solar Beam';

	$pokemons = [
		'pikachu' => $pikachu,
		'charmander' => $charmander,
		'squirtle' => $squirtle,
		'bulbasaur' => $bulbasaur
	];


	$key = $_GET['pokemon'];

	if (array_key_exists($key, $pokemons)) {
		echo json_encode($pokemons[$key]);
	} else {
		echo "";
	}
?>