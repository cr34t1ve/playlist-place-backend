<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/index.php';


app()->get('/', function () {
	response()->page('./welcome.html');
});

app()->group('/playlist', function(){
	app()->group('/v1', function(){

		app()->get('/getPlaylist', function () {
			$id = request()->get('id');
			$playlist = db()->select('playlists')->where('id', $id)->fetchObj();
			response()->json($playlist);
		});
	});
});

app()->run();
