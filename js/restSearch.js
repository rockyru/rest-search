// Let's create a polyfill for Object.create
if ( typeof Object.create !== 'function') {
    
    Object.create = function( obj ){
        function F() {};
        F.prototype = obj;
        return new F();
    };
}
( function( $, window, document, undefined ) {
    
  


    $.fn.restSearch = function( options ) {
        
        return this.each(function() {
         
        });
        

    };


    // Set plugin options here.
    $.fn.restSearch.options = {
       
    };

}( jQuery, window, document ));
