<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.20/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
    <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

    <section class="bg-white">
      <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
          <img alt="Pattern" src="Telkom-University-2.webp" class="absolute inset-0 h-full w-full object-cover" />
        </aside>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
          <div class="max-w-xl lg:max-w-3xl">
            <a class="block text-blue-600" href="/">
              <span class="sr-only">Home</span>
            </a>

            <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">Welcome to T-Fleet</h1>

            <form action="#" class="mt-8 grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="FirstName" class="block text-sm font-medium text-gray-700"> First Name </label>

                <input type="text" id="FirstName" name="first_name" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="LastName" class="block text-sm font-medium text-gray-700"> Last Name </label>

                <input type="text" id="LastName" name="last_name" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
              </div>

              <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

                <input type="email" id="Email" name="email" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

                <input type="password" id="Password" name="password" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700"> Password Confirmation </label>

                <input type="password" id="PasswordConfirmation" name="password_confirmation" class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
              </div>

              <div class="col-span-6">
                <p class="text-sm text-gray-500">
                  By creating an account, you agree to our
                  <a href="#" class="text-gray-700 underline"> terms and conditions </a>
                  and
                  <a href="#" class="text-gray-700 underline">privacy policy</a>.
                </p>
              </div>

              <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <button
                  class="inline-block shrink-0 rounded-md border border-red-600 bg-red-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-red-600 focus:outline-none focus:ring active:text-red-500"
                >
                  Create an account
                </button>

                <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                  Already have an account?
                  <a href="login.php" class="text-gray-700 underline">Log in</a>.
                </p>
              </div>
            </form>
          </div>
        </main>
      </div>
    </section>
  </body>
</html>
