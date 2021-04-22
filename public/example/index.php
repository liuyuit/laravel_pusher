<?php
require __DIR__ . '/../vendor/autoload.php';

use Pusher\Pusher;
$options = array(
  'cluster' => 'ap1',
  'useTLS' => true
);
$pusher = new Pusher(
  '0506a6093d0656c25198',
  'e177b780ad1c80ff1803',
  '1191870',
  $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
