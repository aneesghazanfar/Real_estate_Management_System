<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>  
    <style>
        body{
          margin-left: 25%;
          margin-right: 25%;
          margin-top: 3%;
          background-color: gray;
          background-size: 100%;
        }
        fieldset{
            text-align: center;
          background-color: rgb(211, 211, 211);
          padding: 60px;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        h1{
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
          
        }
        label{
            height: 30px;
            width: 80%;
            font-size: 18px;
        }
        a{
          color: white;
        }
        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          width:80%;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
        }

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

    </style>
  </head>
<body>

<h1>Property Price Predictor</h1>


<form action="" method="get">
  @csrf
  <fieldset>

  <button class="button button1"><a href="{{ route('admin.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Log in</a></button><br>
    <button class="button button1"><a href="{{ route('user.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">User Log in</a></button><br>
    <button class="button button1"><a href="{{ route('user.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">User Register</button></a><br>

  </fieldset>
</form>


</body>
</html>

