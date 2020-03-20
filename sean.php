<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <button>Click Me</button>
    <?php
    $handle = curl_init('https://enqhf8jl70i8e.x.pipedream.net/');
    $data = [
      'key' => 'value'
    ];
    $encodedData = json_encode($data);
    curl_setopt($handle, CURLOPT_POST, 1);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
    curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $result = curl_exec($handle);
    ?>
  </body>
</html>