var tabs = document.querySelectorAll('.tab_btn');
var all_content = document.querySelectorAll('.content');
var line = document.querySelector('.line');

function positionLine(element) {
    line.style.width = element.offsetWidth + 'px';
    line.style.left = element.offsetLeft + 'px';
}

function changeActiveContent(index) {
    all_content.forEach(content => content.classList.remove('active'));
    all_content[index].classList.add('active');
}


// Set up the click event listeners for tabs
tabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
        // Remove the active class from all tabs

        tabs.forEach(tab => { tab.classList.remove('active') });
        tab.classList.add('active');

        // Position the line under the clicked tab
        positionLine(e.target);

        changeActiveContent(index);

    });
});

// Initialize the line position on page load
window.addEventListener('DOMContentLoaded', (event) => {
    const activeTab = document.querySelector('.tab_btn.active');
    if (activeTab) {
        positionLine(activeTab);
    }
    console.log('JS loaded from amila\'s plugin');
});