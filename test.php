<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId: '1672090539911429',
      autoLogAppEvents: true,
      xfbml: true,
      version: 'v16.0'
    });

    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        var accessToken = response.authResponse.accessToken;

        // Request video sources
        FB.api('/me/videos', 'GET', { fields: 'source', access_token: 'EAAXwweqp6QUBAPl3YQ6Ka79NZBqaRVZCf8M8Cfn2ggwYt3ZBfP4GJpFK3kcmhqjiXmWNfHsB4TOBfHylPE6EV8DSYFSUDjZA2LZAOPgf9XH5LKzhnIcA2oEgkbd1npnZAqZBr3bm3pAC5kkb4AEclGQ9GTpe3I70ulUiXoZCpBVEKqevBhaInCVyZBBOzbGR8xqJlsprxbPVVeL3z0zH24tkO' }, function(response) {
          console.log('Videos:', response);
        });

        // Request photo sources
        FB.api('/me/photos', 'GET', { fields: 'source', access_token: 'EAAXwweqp6QUBAPl3YQ6Ka79NZBqaRVZCf8M8Cfn2ggwYt3ZBfP4GJpFK3kcmhqjiXmWNfHsB4TOBfHylPE6EV8DSYFSUDjZA2LZAOPgf9XH5LKzhnIcA2oEgkbd1npnZAqZBr3bm3pAC5kkb4AEclGQ9GTpe3I70ulUiXoZCpBVEKqevBhaInCVyZBBOzbGR8xqJlsprxbPVVeL3z0zH24tkO' }, function(response) {
          console.log('Photos:', response);
        });

      } else {
        // User is not logged in or has not granted permission to your app
      }
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


 
</body>
</html>