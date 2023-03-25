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



//drop function 
function Drop( CurrentEvent, DestinationID)
{
    //creates variable data
    var DataID = CurrentEvent.dataTransfer.getData( "text/html" );


    // create counter 
    var Counter = Number( document.getElementById(DataID).getAttribute("count")); 
    if (Counter < 1) {
   
        //moves dragged element + add
   
    document.getElementById( DestinationID ).appendChild( document.getElementById( DataID ).cloneNode( true ));
    
    
    CurrentEvent.preventDefault();

    // create a count
    var Count = Number( document.getElementById(DataID).getAttribute("count"));
    }
    // variable to change DIV
    var element = document.getElementById(DataID);

    
    amount.setAttribute("id", "itemPrice" + DataID)
// If new add to list
    if (Count< 1) {

        element.classList.remove("item");
        element.classList.add("menuItem");
        Count = Number( element.getAttribute("count"))+1;
        element.setAttribute("count",Count);
        amount.innerHTML = "Total: " + Count;
        element.addEventListener( "ondblclick", function () { RemoveItems(DataID); } );
        

    }
// if already there add to count
    else {
        Count = Number( element.getAttribute("count")) + 1;
        document.getElementById(("ItemPrice"+ DataID)).innerHTML = "Total: " + Count;
        element.setAttribute("count", Count);
        
    }
        FindPrice();
    }
//end of drop function

    
    function FindPrice() {

        // get the list right
        var List = document.querySelectorAll( "div[id=\"rightlist\"] div" );
        
        //create price constant variable
        var Price = 0;
        
            // run for each item in the cart
    for( var i=0; i<List.length; i++ )
    {
        // variable to store how many of each item there is
        var Count = 0;
        var amount = List[i].getAttribute( "count" );
        Count += Number(amount);
       
        // get the price of item for position
        var iprice = List[i].getAttribute( "price" );
        
        // add the price to the total
        for (k=0; k<Count; k++){
        Price += Number(iprice);
        }
    }
        
       
        // select the box to get tot
        var TotalPrice = document.querySelector( "p[id=\"total\"]");
        TotalPrice.innerHTML = "Total is $" + Price;
    
        // check if the length is 0 then set output
        if(List.length == 0) {
            TotalPrice.innerHTML = "Total is $0";
        }
    
    }
    
    function RemoveItem(DataID) {
        // prompt the user
    var Result = window.confirm( "Do you want to remove " + DataID );

    // remove if clicked
    //Could not get this to work in the double click
    if ( Result == true )
    {
        // get the count number and create an element to adjust variables
        var Count = Number( document.getElementById(DataID).getAttribute("count"));
        const element = document.getElementById(DataID);
        
        if (Count > 1){
            Count = Number( element.getAttribute("count")) - 1;
        document.getElementById("itemPrice" + DataID).innerHTML = "Total: " + Count;
        element.setAttribute("count", Count );   
        }
        // remove last
        else {
            element.remove();
        }

    }
    // call back to function for finding price
    FindPrice();
    }











    




