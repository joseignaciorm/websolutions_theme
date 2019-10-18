// (;) no es necesario para Ecmascript6 pero en este caso lo usaremos para crear funciones anónimas, cuando estámos encadenando funciones.

// Paradigma de funciones autoinvocadas
;
((d, c, $) => {
    c('Hello Child theme')
})(document, console.log, jQuery.noConflict());