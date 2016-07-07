###Here's an easy, elegant way to retry a jQuery AJAX call that returns an error:

####Limit by retry count
When the user clicks a button and they are expecting a reaction immediately, the ajax call tries itself three times right after each other if needed without waiting.
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
In some situations, it would be good to put a small delay between retries if the response doesn't need to be immediate.
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
