function setTheme(themeName) {
  localStorage.setItem('theme', themeName);
  document.documentElement.className = themeName;
  document.documentElement.setAttribute('data-theme', themeName);
}

document.addEventListener('DOMContentLoaded', () => {
  const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  const currentTheme = localStorage.getItem('theme');

  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem('theme') !== 'light') {
    setTheme('dark');
  }

  if (localStorage.getItem('theme') === 'dark') {
    setTheme('dark');
    toggleSwitch.checked = true;
  } else {
    setTheme('light');
    toggleSwitch.checked = false;
  }

  if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
      toggleSwitch.checked = true;
    }
  }

  function switchTheme(e) {
    if (document.documentElement.getAttribute('data-theme') === 'light') {
      document.documentElement.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark');
    } else {
      document.documentElement.setAttribute('data-theme', 'light');
      localStorage.setItem('theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
});
