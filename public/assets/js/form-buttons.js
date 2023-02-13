let currentTab = 0;
const tabs = document.querySelectorAll('.tab-content');
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

const showTab = index => {
  tabs.forEach(tab => {
    tab.classList.add('hidden');
  });
  tabs[index].classList.remove('hidden');
};

prevBtn.addEventListener('click', () => {
  currentTab--;
  if (currentTab < 0) {
    currentTab = tabs.length - 1;
  }
  showTab(currentTab);
});

nextBtn.addEventListener('click', () => {
  currentTab++;
  if (currentTab >= tabs.length) {
    currentTab = 0;
  }
  showTab(currentTab);
});

showTab(currentTab);
