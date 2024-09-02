$(document).ready(function () {
    $("#show_password").click(function () {
        var passwordInput = $('input[name="password_confirmation"]');
        var passwordInput1 = $('input[name="password"]');
        var passwordType = passwordInput1.prop('type');
        if (passwordType === 'password') {
            passwordInput.prop('type', 'text');
            passwordInput1.prop('type', 'text');
            $("#show_icon").removeClass('fas fa-eye').addClass('fas fa-eye-slash');
        } else {
            passwordInput.prop('type', 'password');
            passwordInput1.prop('type', 'password');
            $("#show_icon").removeClass('fas fa-eye-slash').addClass('fas fa-eye');
        }
    });
    $("#show_current_password").click(function () {
        var passwordCurrentInput = $('input[name="current_password"]');
        var passwordCurrentType = passwordCurrentInput.prop('type');
        if (passwordCurrentType === 'password') {
            passwordCurrentInput.prop('type', 'text');
            $("#show_current_icon").removeClass('fas fa-eye').addClass('fas fa-eye-slash');
        } else {
            passwordCurrentInput.prop('type', 'password');
            $("#show_current_icon").removeClass('fas fa-eye-slash').addClass('fas fa-eye');
        }
    });
    $("#generate_password").click(function () {
        function generatePassword(length) {
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~|}{[];?></-=";
            var password = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                password += charset.charAt(Math.floor(Math.random() * n));
            }
            return password;
        }
        var newPassword = generatePassword(10);
        $('input[name="password"]').val(newPassword);
        $('input[name="password_confirmation"]').val(newPassword);
    });

    document.getElementById("copy_password").addEventListener("click", function() {
        copyToClipboard(document.getElementById("password"));
        alert('Password copied to clipboard!');
    });
    function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;

        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }

        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }
    // function copyToClipboard(text) {
    //     var textarea = document.createElement("textarea");
    //     textarea.value = text;
    //
    //     // Make sure to make it non-editable
    //     textarea.setAttribute("readonly", "");
    //
    //     // Hide the textarea off-screen
    //     textarea.style.position = "absolute";
    //     textarea.style.left = "-9999px";
    //
    //     document.body.appendChild(textarea);
    //
    //     // Select and copy the text inside the textarea
    //     textarea.select();
    //
    //     // Execute the copy command
    //     try {
    //         var successful = document.execCommand('copy');
    //         var msg = successful ? 'successful' : 'unsuccessful';
    //         console.log('Text copy attempt was ' + msg);
    //     } catch (err) {
    //         console.error('Unable to copy text: ', err);
    //     }
    //
    //     document.body.removeChild(textarea);
    // }
});
