import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}

var themeToggleDarkIcon = document.getElementsByClassName('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementsByClassName('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    for(var i=0 ; i<themeToggleLightIcon.length; i++){
        themeToggleLightIcon[i].classList.remove('hidden');
    }
} else {
    for(var i=0 ; i<themeToggleDarkIcon.length; i++){
        themeToggleDarkIcon[i].classList.remove('hidden');
    }
}

var themeToggleBtn = document.getElementsByClassName('theme-toggle');

function changeDarkMode() { 
    // toggle icons inside button
    for(var i=0 ; i<themeToggleLightIcon.length; i++){
        themeToggleLightIcon[i].classList.toggle('hidden');
    }
    for(var i=0 ; i<themeToggleDarkIcon.length; i++){
        themeToggleDarkIcon[i].classList.toggle('hidden');
    }
    
    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
}
for (var i = 0; i < themeToggleBtn.length; i++) {
    themeToggleBtn[i].addEventListener('click', changeDarkMode, false);
}