// function to load menu from html files
function LoadMenu( MenuFileName, OutputID )
{
    // first clear any menus
    ClearMenus();

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
    xmlhttp.open( "GET", MenuFileName, true );

    // send the request to the server
    xmlhttp.send();
}





// we dont need this bc this is just be he has it set up where it populates his div with the items
// clear menues
function ClearMenus()
{

    // get a list of divs to clear
    //      these will be found in the takeout containier
    //          in section elements and in div.menu elements
    var MenuList = document.querySelectorAll( "div.takeout-container section.menu div" );

    for( var i=0; i<MenuList.length; i++ )
        MenuList[i].innerHTML="";
        
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
    CurrentEvent.dataTransfer.setData( "text/plain", CurrentEvent.target.id );
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
    function Drop( CurrentEvent, DestinationID, TotalID ) 

{
    // get the id, price, and the element being dragged
    //      these are used below several times
    var ItemID = CurrentEvent.dataTransfer.getData( "text/plain" );
    var ItemPrice = document.getElementById( ItemID ).getAttribute( "data-price" );
    var Item = document.querySelector( "tr[id=\"" + ItemID + "\"]" );

    // find an existing item in the card
    //      querySelector will return null if
    //      the item doesn't exist
    var ExistingItem = document.querySelector( "tbody[id=\"" + DestinationID + "\"] tr[id=\"" + ItemID + "\"]" );

    // check for an existing item
    if ( null == ExistingItem )
    {
        // add a new item to to the cart

        // create a new table row
        var DestinationItem = document.createElement( "tr" );
        DestinationItem.setAttribute( "id", ItemID ); 
        DestinationItem.setAttribute( "data-price", ItemPrice );
        DestinationItem.addEventListener( "click", function () { RemoveItem( CurrentEvent, ItemID, TotalID ); } );

        // add the description cell
        //      copy the description cell from the
        //      item being dragged. it will be the first
        //      child of the row being dragged.
         DestinationItem.appendChild( Item.children[0].cloneNode( true ) );

        // add the quantity cell. create a new cell
        //      for this
        var NewCell = document.createElement( "td" );
        NewCell.setAttribute( "class", "menu-quantity aligncenter" );
        NewCell.innerHTML = "1";
        DestinationItem.appendChild( NewCell );

        // add the price cell
        //      copy the price cell from the
        //      item being dragged. it will be the second
        //      child of the row being dragged.       
        DestinationItem.appendChild( Item.children[1].cloneNode( true ) );

        // add the new item to the cart
        document.getElementById( DestinationID ).appendChild( DestinationItem );
    }
    else
    {
        // update the quantity and the price in the cart
        //      the quantity is the second cell in the row
        //      the price is the third cell in the row
        var NewQty = Number( ExistingItem.children[1].innerHTML ) + 1;
        var NewPrice = NewQty * Number( ExistingItem.getAttribute( "data-price" ));
        ExistingItem.children[1].innerHTML = NewQty;
        ExistingItem.children[2].innerHTML = "$" + NewPrice.toFixed( 2 );
    }

    // update the total
    UpdateTotal( TotalID );
        
    // prevent the default handling which is to
    //      not allow dropping
    CurrentEvent.preventDefault();
}



// remove an item from the cart
function RemoveItem( CurrentEvent, ItemID, TotalID )
{
    // find an existing item in the cart
    //      querySelector will return null if
    //      the item doesn't exist
    var ExistingItem = document.querySelector( "tbody[id=\"order-cart\"] tr[id=\"" + ItemID + "\"]" );

    // check to remove the item
    var Result = window.confirm( "Remove one " + ExistingItem.children[0].innerHTML + "?" );

    // process the result
    if ( Result )
    {
        // get the count of the items
        var NewQty = Number( ExistingItem.children[1].innerHTML ) - 1;

        // check to remove the items
        if ( 0 == NewQty )
        {
            // remove the item
            ExistingItem.parentNode.removeChild( ExistingItem );
        }
        else
        {
            // update the quantity and the price in the cart
            //      the quantity is the second cell in the row
            //      the price is the third cell in the row
            var NewPrice = NewQty * Number( ExistingItem.getAttribute( "data-price" ));
            ExistingItem.children[1].innerHTML = NewQty;
            ExistingItem.children[2].innerHTML = "$" + NewPrice.toFixed( 2 );            
        }

        // update the total
        UpdateTotal( TotalID );
    }
}



// update the total
function UpdateTotal( TotalID )
{
    // get the items in the cart
    var Items = document.querySelectorAll( "tbody[id=\"order-cart\"] tr" );

    // compute the total using the 
    //      price cell of the row
    var Total = 0;
    for( var i=0; i<Items.length; i++ )
        // use the substring to skip the $ in the cell contents
        Total += Number( Items[i].children[2].innerHTML.substring(1) );

    // update the total in the table
    document.getElementById( TotalID ).innerHTML = "$" + Total.toFixed( 2 );
}











    




