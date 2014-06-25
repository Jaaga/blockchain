https://www.facebook.com/v2.0/dialog/oauth?
scope=&response_type=none
&redirect_uri=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Freturn%2Farbiter%3Frelation%3Dopener%26close%3Dtrue%23origin%3Dhttp%253A%252F%252Flocalhost%252Ff159c9a0ac
&seen_revocable_perms_nux=false
&ref=LoginButton&
auth_type=
&state=f3807ac77c
&app_id=630913050331922
&client_id=630913050331922
&display=popup


<!-- FB login -->
<script>
FB.init({
    appId      : '{630913050331922}',
    status     : true,
    xfbml      : true,
    version    : 'v2.0',
  });

FB.login(function(response) {
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 });
</script>
<div id="fb-root"></div>
<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=630913050331922&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--End FB login -->