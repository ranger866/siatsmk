document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("body_cont");
    const passwordInput = document.getElementById("password")
    const btn = document.getElementById("btn_login");

    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const password = passwordInput.value.trim();
        const errors = [];

        if (password.length < 8) {
            errors.push("Password minimal harus 8 karakter");
        }

        const upper_case_count = (password.match(/[A-Z]/g) || []).length;
        if (upper_case_count < 2) {
            errors.push("Password harus mengandung minimal 2 huruf besar");
        }

        if (!/[0-9]/.test(password)) {
            errors.push("Password harus mengandung angka");
        }

        if (errors.length > 0) {
            const msg = "Password tidak valid:\n-" + errors.join("\n- ");
            alert(msg)
            return;
        } 

        form.submit();
    })

})