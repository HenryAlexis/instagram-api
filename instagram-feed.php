$ch = curl_init();
$url = "https://graph.instagram.com/me/media?fields=id%2Cpermalink%2Ccaption%2Cmedia_url%2Cmedia_type&access_token=".$InstaAccessToken;

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  $response = json_decode($response, true);

  if (isset($response["data"])) {

      foreach ($response["data"] as $data) {
              $ID = $data["id"]; // ID instagram feed
              $URL = $data["permalink"]; // URL of instagram feed, good for links
              $Caption = $data["caption"]; // Caption, use for description of the instagram feed
              $Image = $data["media_url"]; // The URL of the image, this can be inserted into a src attribute of a image tag in HTML
              // DO SOMETHING WITH THESE VARIABLES
      }

   }
}
