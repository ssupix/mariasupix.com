
const gridSwitch = document.querySelector('.grid-switch');
const listSwitch = document.querySelector('.list-switch');
const workProjectsGrid = document.querySelector('.work-projects');
const workProjectsList = document.querySelector('.work-projects-list');

gridSwitch.addEventListener('click', () => {
    workProjectsGrid.classList.remove('hidden');
    workProjectsList.classList.add('hidden');
    gridSwitch.classList.add('active-switch');
    listSwitch.classList.remove('active-switch');
});

listSwitch.addEventListener('click', () => {
    workProjectsList.classList.remove('hidden');
    workProjectsGrid.classList.add('hidden');
    listSwitch.classList.add('active-switch');
    gridSwitch.classList.remove('active-switch');
});