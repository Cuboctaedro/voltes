import 'lazysizes';
import Siema from 'siema';

function addClass(el, className) {
    if (el.classList) {
        el.classList.add(className);
    } else {
        el.className += ' ' + className;
    }
}

function removeClass(el, className) {
    if (el.classList) {
        el.classList.remove(className);
    } else {
        el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }
}

function toggleClass(el, className) {
    if (el.classList) {
        el.classList.toggle(className);
    } else {
        var classes = el.className.split(' ');
        var existingIndex = classes.indexOf(className);
        if (existingIndex >= 0) {
            classes.splice(existingIndex, 1);
        } else {
            classes.push(className);
        }
        el.className = classes.join(' ');
    }
}

function siblings(el) {
    Array.prototype.filter.call(el.parentNode.children, function(child){
        return child !== el;
    });
}

function toggleMenu() {
    var togglesArray = Array.from(document.querySelectorAll('[data-toggle-menu]'));
    togglesArray.forEach(function(item) {

        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute('data-toggle-menu'))[0];
                toggleClass(target, 'hidden');
                var state = this.getAttribute('aria-expanded');
                this.setAttribute('aria-expanded', !state);
            },
            false
        );
    });
}
toggleMenu();



const mySiema = new Siema({
    selector: '.siema',
    duration: 700,
    easing: 'ease-in-out',
    loop: true,
    onInit: () => {},
    onChange: () => {},
});
setInterval(() => mySiema.next(), 5000)


// toggleTarget('data-toggle-panel', ['block', 'hidden'], ['is-active']);
