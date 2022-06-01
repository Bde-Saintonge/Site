// document.getElementById("dropdown-toggle").onclick = function () {
//     document.getElementById("dropdown-menu").classList.remove("hidden");
// };

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches("#dropdown-toggle, #dropdown-toggle>svg, #dropdown-toggle>svg>path")) {
        document.getElementById("dropdown-menu").classList.contains("hidden") ? null : document.getElementById("dropdown-menu").classList.add("hidden");
    }
};

document.querySelector("#dropdown-toggle").addEventListener('click', () => {
    document.getElementById("dropdown-menu").classList.contains("hidden") ? document.getElementById("dropdown-menu").classList.remove("hidden") : document.getElementById("dropdown-menu").classList.add("hidden");
})

