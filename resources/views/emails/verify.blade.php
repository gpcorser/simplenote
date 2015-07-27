<!DOCTYPE html> <html long="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Please verify your email address</h2>
    <div>
      Please follow the link below 
      {{ URL::to('auth/register/verify/' . $confirmation_code) }}. <br />
      Or paste link into browser
    </div>
  </body>
</html>
