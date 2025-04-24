const themeToggleButton = document.getElementById('toggleTheme');
const body = document.body;
const sunIcon = '<i class="fas fa-sun"></i>';
const moonIcon = '<i class="fas fa-moon"></i>';

// Function to apply theme based on preference
const applyTheme = (theme) => {
    if (theme === 'dark') {
        body.classList.add('dark-mode');
        // Optional: update button text/icon if needed, though CSS handles icon visibility
        // themeToggleButton.innerHTML = `${sunIcon} / ${moonIcon}`; // Or set specifically
    } else {
        body.classList.remove('dark-mode');
        // themeToggleButton.innerHTML = `${sunIcon} / ${moonIcon}`; // Or set specifically
    }
};

// Check for saved theme preference on load
const savedTheme = localStorage.getItem('theme');

// Check for system preference if no saved theme
if (!savedTheme) {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    applyTheme(prefersDark ? 'dark' : 'light');
} else {
    applyTheme(savedTheme);
}

// Add event listener for the button
themeToggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');

    // Update preference in localStorage
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
        // Remove the item if you want the default to be system preference again
        // localStorage.removeItem('theme');
    }
    // Optional: Update button text/icon if needed upon click
});

// Optional: Listen for changes in system preference
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    // Only apply if no user preference is saved
    if (!localStorage.getItem('theme')) {
        applyTheme(event.matches ? 'dark' : 'light');
    }
});