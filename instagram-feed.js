var form = new FormData();
form.append("app_id", APP_ID);
form.append("redirect_uri", REDIRECT_URI);
form.append("response_type", CODE);
form.append("scope", "user_profile,user_media");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://graph.instagram.com/me/media?fields=id%2Ccaption%2Cmedia_url%2Cmedia_type&access_token="+LONGELIVETOKEN,
  "method": "GET",
  "headers": {
    "cache-control": "no-cache",
    "postman-token": "eb1bdfbf-c884-c52d-7bf2-ca73fc868751"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
