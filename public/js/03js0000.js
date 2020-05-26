

window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-101108363-3');

WebFontConfig = {
    google: {families: ['Material+Icons']}
};
(function () {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();

setTimeout(function () {
    var st = document.createElement('style');
    st.innerText = 'i.material-icons {font-size: 24px !important;}'
    document.body.appendChild(st);
}, 2000);