<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    body{
      background:#f4f4f4;
      font-family:'sans-serif'
    }
    .home{
      display: flex;
      flex-direction:column;
      height: 100vh;
      width: 100vw;
      justify-content:center;
      align-items:center;
    }
    .route{
      background:#f9f9f9;
      padding:0.3rem 0.6rem;
      border-radius:0.4rem;
    }
    span{
      border-bottom:0.1rem solid #ddd;
    }
  </style>
</head>
<body>
  <div class="home">
    <h1>Welcome to the api homepage</h1>
    <h3>To fetch the api home route:</h3>
    <div class="route">
      <p>URL: <span>http://localhost:8000/api</span></p>
      <p>Method: GET</p>
    </div>
  </div>
</body>
</html>