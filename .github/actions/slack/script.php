<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

// $response = Requests::post(
//   "https://hooks.slack.com/services/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",
//   array(
//     'Content-type' => 'application/json'
//   ),
//   json_encode(array(
//     "blocks"=> [
//       array(
//         "type"=> "section",
//         "text"=> array(
//           "type"=> "mrkdwn",
//           "text"=> "You have a new request=>\n*<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*"
//         )
//       ),
//       array(
//         "type"=> "section",
//         "fields"=> array(
//           array(
//             "type"=> "mrkdwn",
//             "text"=> "*Type:*\nComputer (laptop)"
//           ),
//           array(
//             "type"=> "mrkdwn",
//             "text"=> "*When:*\nSubmitted Aut 10"
//           ),
//           array(
//             "type"=> "mrkdwn",
//             "text"=> "*Last Update:*\nMar 10, 2015 (3 years, 5 months)"
//           ),
//           array(
//             "type"=> "mrkdwn",
//             "text"=> "*Reason:*\nAll vowel keys aren't working."
//           ),
//           array(
//             "type"=> "mrkdwn",
//             "text"=> "*Specs:*\n\"Cheetah Pro 15\" - Fast, really fast\""
//           )
//         )
//       )
//     ]
//   )));

  var_dump($response);

  if(!$response->success){
    echo 'error';
  }