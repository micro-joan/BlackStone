#CVSSjs

CVSS (Common Vulnerability Scoring System) Calculator

<a href="http://cvssjs.github.io/cvssjs">Standalone Calculator</a>

CVSSjs Version 0.2 beta

Usage:

    //include the cvss.js script 
    <script src="http://cvssjs.github.io/cvssjs/cvss.js"></script>
    
    craete an HTML element with an id for eg.,
    <div id="cvssboard"/>
    
    // create a new instance of CVSS calculator:
    var c = new CVSS("cvssboard");

    // create a new instance of CVSS calculator with some event handler callbacks
    var c = new CVSS("cvssboard", {
                onchange: function() {....} //optional
                onsubmit: function() {....} //optional
                }
                
    // set a vector
    c.set('CVSS:3.0/AV:L/AC:L/PR:N/UI:N/S:C/C:N/I:N/A:L');
    
    // it is also backwards compatible with CVSS v2 vectors, 
    // buts only sets the parameters that can be set without ambiguity.
    c.set('AV:L/AC:L/Au:N/C:P/I:P/A:C');
    
    //get the value
    c.get() returns an object like:
      {
        score: 4.3,
        vector: 'CVSS:3.0/AV:L/AC:L/PR:N/UI:N/S:C/C:N/I:N/A:L'
      }


Copyright (c) 2015-2016, Chandan B.N.

Copyright (c) 2015, FIRST.ORG, INC
