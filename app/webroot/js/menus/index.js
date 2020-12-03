var jPM = $.jPanelMenu({
    menu: '#menu-selector'
});

var jRes = jRespond([
    {
        label: 'small',
        enter: 0,
        exit: 800
    },{
        label: 'large',
        enter: 800,
        exit: 10000
    }
]);

jRes.addFunc({
    breakpoint: 'small',
    enter: function() {
        jPM.on();
    },
    exit: function() {
        jPM.off();
    }
});