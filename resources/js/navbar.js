document.getElementById("dropdown-toggle").onclick = function () {
    document.getElementById("dropdown-menu").classList.remove("hidden");
};

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches("#dropdown-toggle")) {
        document.getElementById("dropdown-menu").classList.add("hidden");
    }
};