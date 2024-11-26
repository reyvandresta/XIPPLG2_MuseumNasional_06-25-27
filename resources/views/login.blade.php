<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Museum Nasional</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <div id="background" class="min-h-screen flex items-center justify-center bg-cover bg-center relative">
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="relative z-10 bg-white shadow-lg rounded-lg p-8 w-96">
      <div class="text-center mb-6">
        <img src="/Assets/logo.png" alt="Museum Nasional Logo" class=" h-auto mx-auto">
      </div>

      <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>

      <form id="loginForm" class="space-y-4">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div class="text-right">
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
        </div>
        <button type="button" onclick="validateLogin()" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
          Login
        </button>
      </form>
      <p class="text-center text-sm text-gray-600 mt-4">
        Don't have an account?
        <a href="/register" class="text-blue-600 hover:underline">Register here</a>.
      </p>
    </div>
  </div>

  <script>
    const backgroundImages = [
      '/Assets/msuemm 1 (2).png',
      '/Assets/museum2.png',
      '/Assets/museum3.png',
    ];

    let currentImageIndex = 0;

    function changeBackgroundImage() {
      currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
      document.getElementById('background').style.backgroundImage = `url(${backgroundImages[currentImageIndex]})`;
    }

    setInterval(changeBackgroundImage, 5000);

    function validateLogin() {
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      const validCredentials = [
        { email: "user@museum.com", password: "password123" },
        { email: "admin@museum.com", password: "admin123" },
      ];

      const user = validCredentials.find(
        (cred) => cred.email === email && cred.password === password
      );

      if (user) {
        alert("Login successful!");
        window.location.href = "/home";
      } else {
        alert("Invalid email or password. Please try again.");
      }
    }
  </script>
</body>

</html>
