<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/register.css" />
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   
  </head>
  <body>
    <header class="body-font pb-32">
      <div class="mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" id="Navbar">
        <a href="./index.html" class="flex title-font font-medium items-center mb-4 md:mb-0">
          <span class="tracking-tighter text-5xl font-black text-white ml-5 mt-5"><span class="cine">Cine</span>Mov.</span>
        </a>
        </div>
    </header>

    <form action="./index.html">
      <div class="header">
        <h2 class="font-bold text-4xl">Welcome!</h2>
        <h4>Already have an account?<span><a href="./login.html"> Login</a></span></h4>
      </div>
      <div class="pembatas">
        <p>or please fill the form below</p>
      </div>
      <div class="formBody">
        <div class="inputPP">
          <img src="./pic/bi_person-circle.png" alt="" />
          <input type="file" name="" id="" />
        </div>
        <div class="formBeneran">
          <label for="username tracking-wider">Username</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8"
            type="text"
            name="username"
            id="username"
            placeholder="Username"
          />
          <label for="email tracking-wider">Email</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8" type="email" name="email" id="email" placeholder="Email" />
          <label for="password tracking-wider">Password</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
          <label for="confirmPass tracking-wider">Confirm Password</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8"
            type="password"
            name="confirmPass"
            id="confirmPass"
            placeholder="Confirm Password"
            onblur="confirmPass()"
          />
          <p class="errMsg" id="errMsg">
            Password and Confirmation Password do not match
          </p>
        </div>
      </div>
      <button class="flex items-center mr-12 mt-3 mb-8 border-4 rounded-full px-10 py-0 font-bold tracking-tighter text-2xl text-black signup" type="submit">Sign Up</button>
    </form>
    <script>
      let password = document.getElementById("password");
      let confirmPassword = document.getElementById("confirmPass");
      let errMsg = document.getElementById("errMsg");
      confirmPass.onkeyup = function () {
        if (confirmPass.value != password.value) {
          document.getElementById("errMsg").style.display = "block";
        } else {
          document.getElementById("errMsg").style.display = "none";
        }
      };
    </script>
  </body>
</html>
