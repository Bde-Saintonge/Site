// Close the dropdown if the user clicks outside

// Permet de fermer le menu lorsqu'on clique ailleurs que sur le bouton d'ouverture
window.onclick = function (event) {
    if (
        !event.target.matches(
            '#dropdown-toggle2, #dropdown-toggle2 button, #dropdown-toggle2 svg, #dropdown-toggle2 path'
        )
    ) {
        document.getElementById('dropdown-menu2').classList.contains('hidden')
            ? null
            : document.getElementById('dropdown-menu2').classList.add('hidden');
    }
};

document.querySelector('#dropdown-toggle2').addEventListener('click', () => {
    console.log('hey');
    document.getElementById('dropdown-menu2').classList.contains('hidden')
        ? document.getElementById('dropdown-menu2').classList.remove('hidden')
        : document.getElementById('dropdown-menu2').classList.add('hidden');
});
