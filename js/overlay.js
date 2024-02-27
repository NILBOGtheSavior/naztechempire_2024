function closeOverlay() {
    let overlay = document.getElementById('overlay');
    let window = document.getElementById('window');
    window.remove();
    overlay.style.display = 'none';
    clearQueryParam('account')
    // document.getElementsByTagName('body')[0].style.overflow = 'visible';
}

function openOverlay(option) {
    let overlay = document.getElementById('overlay');
    let window = document.getElementById('window');
    // document.getElementsByTagName('body')[0].style.overflow = 'hidden';
    switch (option) {
        case ('signup'):
            overlay.style.display = 'block';
            updateQueryParam('account', 'signup');
            loadSignUp();
            break;
        case ('login'):
            overlay.style.display = 'block';
            updateQueryParam('account', 'login');
            loadSignIn();
            break;
        default:
            break;
    }
    
}

function viewPassword() {
    var element = document.getElementById("password");
    let image = document.getElementById("showPassword");
    if (element.type === "password") {
        element.type = "text";
        image.src = '/img/icons/password-hide.png'
    } else {
        element.type = "password";
        image.src = '/img/icons/password-show.png'
    }
  }

  function loadSignUp() {
    let overlay = document.getElementById('overlay');
    var code = 
`
<div id="window">
    <div class="close" onclick="closeOverlay()">X</div>
    <h2>SIGNUP</h2>
    <form action="/scripts/signup.php" method="POST">
        <div class="formInput">
            <img src="img/icons/user.png" alt="">
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="formInput">
            <img src="img/icons/email.png" alt="">
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="formInput">
            <img src="/img/icons/password.png" alt="">
            <input type="password" name="password" id="password" placeholder="Password">
            <img src="/img/icons/password-show.png" alt="" id="showPassword" onclick="viewPassword()">
        </div>
            <a href="#">Forgot Password?</a>
            <button type="submit" id="submit">SIGN UP</button>
            <p>Already Have An Account?</p>
            <button type="submit" id="switch" onclick="openOverlay('login')">SIGN IN</button>
        <div class="divider">
            <hr><p>OR</p><hr>
        </div>
        <button type="submit" class="social-login" id="google"><div><img src='/img/icons/google.png'></div><p>Sign up with Google</p></button>
        <button type="submit" class="social-login" id="facebook"><div><img src='/img/icons/facebook.png'></div><p>Sign up with Facebook</p></button>
        </form>
</div>
`;
    overlay.innerHTML = code;
  }

  function loadSignIn() {
    let overlay = document.getElementById('overlay');
    console.log(valid);
    var code =
`
<div id="window">
    <div class="close" onclick="closeOverlay()">X</div>
    <h2>LOGIN</h2>
    <form method="POST">
        <em><h4 id="error"></h4></em>
        <div class="formInput">
            <img src="/img/icons/email.png" alt="">
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="formInput">
            <img src="/img/icons/password.png" alt="">
            <input type="password" name="password" id="password" placeholder="Password">
            <img src="/img/icons/password-show.png" alt="" id="showPassword" onclick="viewPassword()">
        </div>
        <a href="#">Forgot Password?</a>
        <button type="submit" id="submit">
        <p>LOGIN</>
        </button>
        <p>Don't Have An Account?</p>
        <button type="submit" id="switch" onclick="openOverlay('signup')"><p>SIGN UP</p></button>
        <div class="divider">
            <hr><p>OR</p><hr>
        </div>
        <button type="submit" class="social-login" id="google"><div><img src='/img/icons/google.png'></div><p>Login with Google</p></button>
        <button type="submit" class="social-login" id="facebook"><div><img src='/img/icons/facebook.png'></div><p>Login with Facebook</p></button>
    </form>
</div>
    `
    overlay.innerHTML = code;
    displayLoginError("Invalid Login");
  }

function displayLoginError(message) {
    let error = document.getElementsByTagName('em')[0];
    let text = document.getElementById('error');
    if (! valid) {
        error.style.display = 'block';
        text.innerHTML = message;
    }
}

function checkQueryParam() {
    let param = getQueryParam('account');
    openOverlay(param);
}

function getQueryParam(parameter) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parameter);
}

function updateQueryParam(key, value) {
    const url = new URL(window.location.href);
    url.searchParams.set(key, value);
    window.history.pushState({}, '', url);
}

function clearQueryParam(key) {
    const url = new URL(window.location.href);
    url.searchParams.delete(key);
    window.history.pushState({}, '', url);
}

document.addEventListener("DOMContentLoaded", function() {
    checkQueryParam();
 });