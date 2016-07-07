###Here's an easy, elegant way to retry a jQuery AJAX call that returns an error:

####Limit by retry count
```
$.ajax( {
    url : 'someurl',
    type : 'POST',
    data :  ....,   
    tryCount : 0,
    retryLimit : 3,
    success : function( json ) {
        //do something
    },
    error : function( xhr, textStatus, errorThrown ) {
        if ( textStatus === 'timeout' ) {
            this.tryCount++;
            if ( this.tryCount <= this.retryLimit ) {
                //try again
                $.ajax( this );
                return;
            }            
            return;
        }
        if ( xhr.status === 500 ) {
            //handle error
        } else {
            //handle error
        }
    }
} );
```

####Alternatively retry after a timeout:
```
$.ajaxSetup( {
    timeout: 3000, 
    retryAfter:7000
} );

function func( param ){
    $.ajax( 'http://www.example.com/' )
        .success( function() {
            console.log( 'Ajax request worked' );
        })
        .error( function() {
            console.log( 'Ajax request failed...' );
            setTimeout ( function(){ func( param ) }, $.ajaxSetup().retryAfter );
        } );
}
```
