
function captchaGenerator() {
    const captcha_characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const captcha_length = 6;
    let captcha = '';
    for (let i = 0; i < captcha_length; i++) {
        const random_index = Math.floor(Math.random() * captchacharacters.length);
        captcha += captcha_characters[random_index];
    }
    return captcha;
}

function captchaDisplay() {
    const captcha_text = captchaGenerator();
    const captcha_element = document.getElementById('captcha');
    captcha_element.textContent = captcha_text;
}

function captchaValidator(input) {
    const captcha_element = document.getElementById('captcha');
    const captcha_text = captcha_element.textContent;
    return input === captcha_text;
}

window.onload = function() {
    captchaDisplay();
    const submit_button = document.getElementById('submit');
    submit_button.onclick = function() {
        const user_input = document.getElementById('user_input').value;
        if (captchaValidator(user_input)) {
            alert('Captcha validated.');
        } else {
            alert('Invalid captcha. Please try again.');
            captchaDisplay();
        }
    };
};
