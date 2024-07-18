/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
function toggleSideMenu() {
    let menu = document.getElementById("side-menu");
    let svgOpen = document.getElementById("svgopen");
    let svgClosed = document.getElementById("svgclosed");

    // Check if the mobile menu is currently active
    if (menu.classList.contains("mobile-menu-active")) {
        // Remove the "mobile-menu-active" class if already active
        menu.classList.remove("mobile-menu-active");
        svgOpen.classList.add("hidden");
        svgClosed.classList.remove("hidden");
    } else {
        // Add the "mobile-menu-active" class to activate the mobile menu
        menu.classList.add("mobile-menu-active");
        svgOpen.classList.remove("hidden");
        svgClosed.classList.add("hidden");
    }
}

document.getElementById("mobile-menu-btn").addEventListener("click", toggleSideMenu);