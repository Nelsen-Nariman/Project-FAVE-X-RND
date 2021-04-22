<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
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
        <h2 class="font-bold text-4xl">Login</h2>
        <h4>Don't have an account yet?<a href="./register.html"><span> Sign Up</span></a></h4>
      </div>
      <div class="pembatas">
        <hr />
      </div>
      <div class="formBody">
        <div class="formBeneran">
          <label for="email">Email</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8" type="email" name="email" id="email" placeholder="Email" />
          <label for="password">Password</label>
          <input class="mb-4 text-white rounded-full border-4 rounded border text-base outline-none py-1  leading-8"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
        </div>
      </div>
      <button class="flex items-center mr-12 mt-3 mt-48 mb-8 border-4 rounded-full px-10 py-0 font-bold tracking-tighter text-2xl text-black log" type="submit">Login</button>
    </form>
  </body>
</html>
