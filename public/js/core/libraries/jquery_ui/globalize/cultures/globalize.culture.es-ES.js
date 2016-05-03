/*
 * Globalize Culture es-ES
 *
 * http://github.com/jquery/globalize
 *
 * Copyright Software Freedom Conservancy, Inc.
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * This file was generated by the Globalize Culture Generator
 * Translation: bugs found in this file need to be fixed in the generator
 */

(function( window, undefined ) {

var Globalize;

if ( typeof require !== "undefined" &&
  typeof exports !== "undefined" &&
  typeof module !== "undefined" ) {
  // Assume CommonJS
  Globalize = require( "globalize" );
} else {
  // Global variable
  Globalize = window.Globalize;
}

Globalize.addCultureInfo( "es-ES", "default", {
  name: "es-ES",
  englishName: "Spanish",
  nativeName: "Español",
  language: "es",
  numberFormat: {
    ",": ".",
    ".": ",",
    "NaN": "n. def.",
    negativeInfinity: "-unendlich",
    positiveInfinity: "+unendlich",
    percent: {
      pattern: ["-n%","n%"],
      ",": ".",
      ".": ","
    },
    currency: {
      pattern: ["-n $","n $"],
      ",": ".",
      ".": ",",
      symbol: "$"
    }
  },
  calendars: {
    standard: {
      "/": ".",
      firstDay: 1,
      days: {
        names: ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
        namesAbbr: ["So","Mo","Di","Mi","Do","Fr","Sa"],
        namesShort: ["So","Mo","Di","Mi","Do","Fr","Sa"]
      },
      months: {
        names: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre",""],
        namesAbbr: ["Ene","Feb","Mar","Abr","May","Jun","Jul","Agost","Sep","Oct","Nov","Dic",""]
      },
      AM: null,
      PM: null,
      eras: [{"name":"n. Chr.","start":null,"offset":0}],
      patterns: {
        d: "dd.MM.yyyy",
        D: "dddd, d. MMMM yyyy",
        t: "HH:mm",
        T: "HH:mm:ss",
        f: "dddd, d. MMMM yyyy HH:mm",
        F: "dddd, d. MMMM yyyy HH:mm:ss",
        M: "dd MMMM",
        Y: "MMMM yyyy"
      }
    }
  }
});

}( this ));