// document.getElementById("dropdown-toggle").onclick = function () {
//     document.getElementById("dropdown-menu").classList.remove("hidden");
// };

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches("#dropdown-toggle, #dropdown-toggle>svg, #dropdown-toggle>svg>path")) {
        document.getElementById("dropdown-menu").classList.add("hidden");
    }
};


document.querySelectorAll("#dropdown-toggle, #dropdown-toggle>svg, #dropdown-toggle>svg>path").forEach(element => {
    element.addEventListener('click', () => {
        document.getElementById("dropdown-menu").classList.remove("hidden");
    })
})
