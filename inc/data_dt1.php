<script>


/***  Line details ***/
/*** https://datatables.net/examples/server_side/row_details.html SERVER-SIDE ***/
/*** https://datatables.net/examples/api/row_details.html CLIENT-SIDE ***/
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="3" cellspacing="0" border="0" style="padding-left:65px; margin-left:50px;font-size:90%;">'+
        '<tr>'+
            '<td><b>Creator:</b></td>'+
            '<td style="padding-left:55px;"> <a href ="https://explore.burst.cryptoguru.org/transaction/' + d.genesisMsg + '"> ' +
             d.creator + '</a></td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>CreatorRS:</b></td>'+
            '<td style="padding-left:55px;"> <a href ="https://explore.burst.cryptoguru.org/transaction/' + d.genesisMsg + '"> ' +
             d.creatorRS + '</a></td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Genesis Tx:</b></td>'+
            '<td style="padding-left:55px;"><a href ="https://explore.burst.cryptoguru.org/transaction/' + d.genesisFee + '"> ' +
             d.genesisFee + '</a></td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Genesis Msg:</b></td>'+
            '<td style="padding-left:55px;"> <a href ="https://explore.burst.cryptoguru.org/transaction/' + d.genesisMsg + '"> ' +
             d.genesisMsg + '</a></td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Genesis Str:</b></td>'+
            '<td style="padding-left:55px;">' + d.genesisStr + '</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Ticker:</b></td>'+
            '<td style="padding-left:55px;"> ' + d.ticker + ' </td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Amount:</b></td>'+
            '<td style="padding-left:55px;"> ' + d.amount + ' </td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Unix Time:</b></td>'+
            '<td style="padding-left:55px;">'+
            '<a href ="https://wallet.burst.cryptoguru.org:8125/burst?requestType=getTransaction&transaction=' + d.genesisMsg + '"> ' +
             d.unixTime + '</a>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Timestamp:</b></td>'+
            '<td style="padding-left:55px;">'+
            d.timestamp +'</td>'+
        '</tr>'+
    '</table>';
}
 

/***  Line headers ***/
$(document).ready(function() {
    var table = $('#example').DataTable( {
      "lengthMenu": [ 5, 10, 25, 50 ],
      "pageLength": 10,
        "ajax": "ajax/objects_genesis.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
            { "data": "ticker" },
            { "data": "creatorRS" },
            { "data": "unixTime" },
            { "data": "amount" }
        ],
        "order": [[1, 'asc']]
    } );
     


     /***  Open/close details ***/
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );

</script>
