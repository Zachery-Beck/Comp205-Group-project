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
function Drop( CurrentEvent, DestinationID )
{
    // this creates a variable called data
    //      and initializes it in the same statement.
    //      it gets the ID of the element that is being dragged.
    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );

    // this moves the dragged element and adds it into
    //      the destination element 
    //document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ));

    // this copies the dragged element and adds it into
    //      the destination element. the cloneNode method
    //      makes a copy of the node instead of moving it
    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));

    // prevent the default handling which is to
    //      not allow dropping
    CurrentEvent.preventDefault();



    if ( null == DestinationItem )
    {
        // add a new grade
        // DestinationItem = document.createElement( "DIV" );

        // set the element attributes
        // DestinationItem.setAttribute( "id", Item );
        // DestinationItem.setAttribute( "class", "item" );        
        DestinationItem.setAttribute( "price", PointValue );
        DestinationItem.setAttribute( "data-count", 1 );
        DestinationItem.addEventListener( "dblclick", function () { RemoveItem( Item ); } );
        // add the text for the grade in the calculator
        DestinationItem.innerHTML = Item + "<br />(1)";

        // add the element to the destination div
        document.querySelector( "div[id=\"rightlist\"]" ).appendChild( DestinationItem );
    }
else
    {
        // update existing grade 
        var Count = Number( DestinationItem.getAttribute( "data-count" )) + 1;
        DestinationItem.setAttribute( "data-count", Count );
        DestinationItem.innerHTML = Item + "<br />(" + Count + ")";    
    }
    ComputeTotal()

}
function AddItem( Item )
{
    // get the item element and point value
    var SourceItem = document.querySelector( "div[id=\"leftlist\"] div[id=\"" + Item + "\"]" )
    var PointValue = SourceItem.getAttribute( "price" );
        

    // get the existing grade in the calculator
    var DestinationItem = document.querySelector( "div[id=\"rightlist\"] div[id=\"" + Item + "\"]" );

    // check for no grade found
    if ( null == DestinationItem )
        {
            // add a new grade
            DestinationItem = document.createElement( "DIV" );

            // set the element attributes
            DestinationItem.setAttribute( "id", Item );
            DestinationItem.setAttribute( "class", "item" );        
            DestinationItem.setAttribute( "price", PointValue );
            DestinationItem.setAttribute( "data-count", 1 );
            DestinationItem.addEventListener( "dblclick", function () { RemoveItem( Item ); } );
            // add the text for the grade in the calculator
            DestinationItem.innerHTML = Item + "<br />(1)";

            // add the element to the destination div
            document.querySelector( "div[id=\"rightlist\"]" ).appendChild( DestinationItem );
        }
    else
        {
            // update existing grade 
            var Count = Number( DestinationItem.getAttribute( "data-count" )) + 1;
            DestinationItem.setAttribute( "data-count", Count );
            DestinationItem.innerHTML = Item + "<br />(" + Count + ")";    
        }
        ComputeTotal()
}

function ComputeTotal(){
    // get the list of grades
var ItemList = document.querySelectorAll( "div[id=\"rightlist\"] div" );

var totalp = 0;
for( var i=0; i<ItemList.length; i++ ){
    var count = Number(ItemList[i].getAttribute("data-count"));
    var value = Number(ItemList[i].getAttribute("Price"));
    var total = count*value;
    totalp += total
}
  

    var GT = document.querySelector("div[id='rightlist']+p");
    GT.innerHTML = 'Your Total Price is:'+totalp;
}


        
function RemoveItem( Item ) {
    // prompt the user
    var Result = window.confirm( "Remove the Item?" );
    // process based on the result
    if ( Result == true )
    {
    // get the existing grade in the calculator
    var DestinationItem = document.querySelector( "div[id=\"rightlist\"] div[id=\"" + Item + "\"]" );
    // drop the count down by one
    var Count = Number( DestinationItem.getAttribute( "data-count" )) - 1;
    // see if it is the last
    if ( 0 == Count )
    {
    // remove the node
    DestinationItem.parentNode.removeChild( DestinationItem );
    }
    else
    {
    // update the count
    DestinationItem.setAttribute( "data-count", Count );
    DestinationItem.innerHTML = Item + "<br />(" + Count + ")";
    }
    }
    ComputeTotal();
    }