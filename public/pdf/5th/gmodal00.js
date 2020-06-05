function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}

function setCookie(name, value, days) {
    var d = new Date;
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

if (getCookie('gModal') == 'true') {
    document.querySelector('.gModal').style.display = 'none';
}

function toggle_visibility(id) {
    var e = document.getElementById(id);
    if (e.style.display == 'block')
        e.style.display = 'none';
    else
        e.style.display = 'block';

    setCookie('gModal', true);
    return false;
}

// Create an immediately invoked functional expression to wrap our code
(function () {

    // Define our constructor
    this.Modal = function () {

        // Create global element references
        this.closeButton = null;
        this.modal = null;
        this.overlay = null;

        // Determine proper prefix
        this.transitionEnd = transitionSelect();

        // Define option defaults
        var defaults = {
            autoOpen: false,
            className: 'fade-and-drop',
            closeButton: true,
            content: "",
            maxWidth: 400,
            minWidth: 280,
            overlay: true
        }

        // Create options by extending defaults with the passed in arugments
        if (arguments[0] && typeof arguments[0] === "object") {
            this.options = extendDefaults(defaults, arguments[0]);
        }

        if (this.options.autoOpen === true) this.open();

    }

    // Public Methods

    Modal.prototype.close = function () {
        var _ = this;
        if (this.modal) {
            this.modal.className = this.modal.className.replace(" scotch-open", "");
            this.overlay.className = this.overlay.className.replace(" scotch-open",
                "");
            this.modal.addEventListener(this.transitionEnd, function () {
                _.modal.parentNode.removeChild(_.modal);
            });
            this.overlay.addEventListener(this.transitionEnd, function () {
                if (_.overlay.parentNode) _.overlay.parentNode.removeChild(_.overlay);
            });
        }
    }

    Modal.prototype.open = function () {
        if (getCookie("gModal") != 'true') {
            buildOut.call(this);
            initializeEvents.call(this);
            window.getComputedStyle(this.modal).height;
            this.modal.className = this.modal.className +
                (this.modal.offsetHeight > window.innerHeight ?
                    " scotch-open scotch-anchored" : " scotch-open");
            this.overlay.className = this.overlay.className + " scotch-open";
        }
    }

    Modal.prototype.isOpen = function () {
        if (this.modal && hasClass(this.modal, "scotch-open")) {
            return true;
        }
        return false;
    }

    // Private Methods

    function buildOut() {

        var content, contentHolder, docFrag;

        /*
         * If content is an HTML string, append the HTML string.
         * If content is a domNode, append its content.
         */

        if (typeof this.options.content === "string") {
            content = this.options.content;
        } else {
            content = this.options.content.innerHTML;
        }

        // Create a DocumentFragment to build with
        docFrag = document.createDocumentFragment();

        // Create modal element
        this.modal = document.createElement("div");
        this.modal.className = "scotch-modal " + this.options.className;
        this.modal.style.minWidth = this.options.minWidth + "px";
        this.modal.style.maxWidth = this.options.maxWidth + "px";

        // If closeButton option is true, add a close button
        if (this.options.closeButton === true) {
            this.closeButton = document.createElement("button");
            this.closeButton.className = "scotch-close";
            this.closeButton.innerHTML = "&times;";
            this.modal.appendChild(this.closeButton);
        }

        // If overlay is true, add one
        if (this.options.overlay === true) {
            this.overlay = document.createElement("div");
            this.overlay.className = "scotch-overlay " + this.options.className;
            docFrag.appendChild(this.overlay);
        }

        // Create content area and append to modal
        contentHolder = document.createElement("div");
        contentHolder.className = "scotch-content";
        contentHolder.innerHTML = content;
        this.modal.appendChild(contentHolder);

        // Append modal to DocumentFragment
        docFrag.appendChild(this.modal);

        // Append DocumentFragment to body
        document.body.appendChild(docFrag);

    }

    function extendDefaults(source, properties) {
        var property;
        for (property in properties) {
            if (properties.hasOwnProperty(property)) {
                source[property] = properties[property];
            }
        }
        return source;
    }

    function hasClass(element, cls) {
        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    }

    function initializeEvents() {

        if (this.closeButton) {
            setCookie('gModal', true);
            this.closeButton.addEventListener('click', this.close.bind(this));
        }

        if (this.overlay) {
            setCookie('gModal', true);
            this.overlay.addEventListener('click', this.close.bind(this));
        }

        if (document.querySelector('.close-modal')) {
            setCookie('gModal', true);
            document.querySelector('.close-modal').addEventListener('click', this.close.bind(this));
        }
    }

    function transitionSelect() {
        var el = document.createElement("div");
        if (el.style.WebkitTransition) return "webkitTransitionEnd";
        if (el.style.OTransition) return "oTransitionEnd";
        return 'transitionend';
    }

}());

window.onbeforeunload = function (e) {
    setCookie("gModal", false);
};

function closeModal() {
    setCookie('gModal', true);
    myModal.close();
    return false;
}

function openModal() {
    if (!myModal.isOpen()) {
        myModal.open();
    }
}

var myContent = document.getElementById('gModal');

var myModal = new Modal({
    content: myContent
});


// Features
if (features.hasScroll) {
    window.onscroll = function () {
        if (window.pageYOffset > document.querySelector(features.scrollItem).scrollHeight - 400) {
            openModal();
        }
    }
}

if (features.hasMouseout) {
    setTimeout(function () {
        document.addEventListener('mouseleave', function () {
            openModal();
        })
    }, 5000)
}

if (features.hasTimeout) {
    setTimeout(function () {
        openModal();
    }, 30000)
}
// End Features