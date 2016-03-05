<?php

//$url = 'https://api.tropo.com/1.0/sessions?action=create';
//$voiceAppId = '816';
//$voiceToken = '464b4a6f4446714c616e48686a4e4f714c7054574c6f6e45526b63486f6b4468697663524f6e5848696a4e4e';
//$numberToDial = '639173176758';

call('+639173176758', {
	"timeout" => 60,
	"onAnswer" => "answerFcn"
});

function answerFcn($event) {
	say('Hi! Welcome to Tropo!');
	_log("Call complete.");
}

?>