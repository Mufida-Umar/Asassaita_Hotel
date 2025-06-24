<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check-in Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      /* background-color: #f6ac0f */
    }
    .fm{
        margin-top: 4.8rem;
    }
    form {
        display: flex;
        flex-direction: column;
      max-width: 400px;
      margin: auto;
      /* text-align: center; */
      background: #fff;
      padding: 3rem 2.5rem 2.5rem;
      border-radius: 8px;
      box-shadow: 0 0 32px rgba(0,0,0,0.1);
    }
    h1{
        margin-bottom: 2rem;
        font-size: 2.4rem;
        color: #f6ac0f
    }
    label {
      display: block;
      margin: 12px 0 4px;
    }
    .actions{
        display: block;
        margin-bottom: 1.5rem;
        margin-top: 1.5rem;
        font-size: 0.9rem;
        text-align: right;
    }
    input[type="email"],
    input[type="password"],
    input[type="time"] {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }
    button {
      margin-top: 16px;
      padding: 10px 20px;
      background-color: #f6ac0f;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<div class="fm">
    <form action="{{route('login')}}" method="post">
        @csrf
        <h1>ASASSAITA HOTEL</h1>
    <div class="form-sec">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />

    </div>
       
            <div class="actions">
              <a href="">Forgot password?</a>
       
    </div>
        <button type="submit">Submit</button>
      </form>
</div>
  

</body>
</html>
