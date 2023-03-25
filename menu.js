// function to Grab the Entrees with AJAX
function GetItems(Items, OutputID){
    // declare local variables
    var xmlhttp;

    // create the request object depending on
    //      the browser type
    if ( window.XMLHttpRequest )
    {
        // code for IE7+, Firefox, Chrome, Safari, Opera
        xmlhttp = new XMLHttpRequest;
    }
    else
    {
        // code for IE6 and earlier - need to use an
        //      ActiveX object (yuck!)
        xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
    }

    // set the callback function. this function inserts the html that
    //      is received into the "info" section of the page. It is
    //      a callback function because the XMLHttpRequest object
    //      calls this function when the ready state changes and it
    //      is provided by the user of the object.
    xmlhttp.onreadystatechange = function ()
    {
        // check for a good return
        if (( xmlhttp.readyState == 4 ) &&
            ( xmlhttp.status == 200 ))
        {
            // add the received html to the info section
            document.getElementById( OutputID ).innerHTML = xmlhttp.responseText;
        }
    }

    // create the request. this creates a HTTP GET request
    //      for the file name in the second parameter (argument).
    //      the final argument is whether the request is
    //      synchronous or asynchronous. generally use
    //      asynchronous (true). also note that you don't need
    //      the complete https:// on the file name if you are
    //      getting something from the same server. if you are
    //      not, you WILL need the fully qualified path.
    xmlhttp.open( "GET", Items, true );

    // send the request to the server
    xmlhttp.send();
}

// END OF AJAX //


/////



// start drag of item
//      pass in the event that is triggering
//      the drag
function StartDrag( CurrentEvent )
{
    // sets the data type using MIME (first argument)
    //      sets the source of the data (second argument)
    //      the second argument is why the draggable items
    //      need a unique id
    CurrentEvent.dataTransfer.setData( "text/html", CurrentEvent.target.id );
}
     // allow a drop into the element
function AllowDrop( CurrentEvent )
{
    // prevent the browser from handling the event
    //      with its default handling. the default
    //      is to not allow drag and drop. 
    CurrentEvent.preventDefault();
}
        // handle dropping here
function Drop( CurrentEvent, DestinationID)
{
    // this creates a variable called data
    //      and initializes it in the same statement.
    //      it gets the ID of the element that is being dragged.
    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );

    // this copies the dragged element and adds it into
    //      the destination element. the cloneNode method
    //      makes a copy of the node instead of moving it
    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));

    // prevent the default handling which is to
    //      not allow dropping
    CurrentEvent.preventDefault();

        // get the grade element and point value
        var SourceGrade = document.querySelector( "div[id=\"leftlist\"] div[id=\"" + DataID + "\"]" )
        var PointValue = SourceGrade.getAttribute( "price" );

        // get the grade element and point value
        var DestinationGrade = document.querySelector( "div[id=\"rightlist\"] div[id=\"" + DataID + "\"]" );
    
        // check for no grade found
        if ( null == DestinationGrade )
            {
                // // add a new grade
                // DestinationGrade = document.createElement( "DIV" );
    
                // set the element attributes
                DestinationGrade.setAttribute( "id", Item );
                DestinationGrade.setAttribute( "class", "item" );        
                DestinationGrade.setAttribute( "price", PointValue );
                DestinationGrade.setAttribute( "data-count", 1 );
                DestinationGrade.addEventListener( "dblclick", function () { RemoveItem( DataID ); } );
                // add the text for the grade in the calculator
                DestinationGrade.innerHTML = DataID + "<br />(1)";
    
                // add the element to the destination div
                document.querySelector( "div[id=\"rightlist\"]" ).appendChild( DestinationGrade );
            }
        else
            {
                // update existing grade 
                var Count = Number( DestinationGrade.getAttribute( "data-count" )) + 1;
                DestinationGrade.addEventListener( "dblclick", function () { RemoveItem( DataID ); } );
                DestinationGrade.setAttribute( "data-count", Count );
                DestinationGrade.innerHTML = DataID + "<br />(" + Count + ")";    
            }
}
            // function RemoveItem(DataID) {
            //     var Result = window.confirm( "Remove " + DataID );
                
            //     if (Result == true)
            //     {
            //         const element = document.getElementById(DataID);
            //         element.remove();

            //     }
            // }
            

            function RemoveItem( Item ) {
                // prompt the user
                var Result = window.confirm( "Remove the Item?" );
                // process based on the result
                if ( Result == true )
                {
                // get the existing grade in the calculator
                var DestinationGrade = document.querySelector( "div[id=\"rightlist\"] div[id=\"" + Item + "\"]" );
                // drop the count down by one
                var Count = Number( DestinationGrade.getAttribute( "data-count" )) - 1;
                // see if it is the last
                if ( 0 == Count )
                {
                // remove the node
                DestinationGrade.parentNode.removeChild( DestinationGrade );
                }
                else
                {
                // update the count
                DestinationGrade.setAttribute( "data-count", Count );
                DestinationGrade.innerHTML = Item + "<br />(" + Count + ")";
                }
                }
                ComputeGPA();
                }
                













    




