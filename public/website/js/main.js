
////////////// Customization //////////////
 $('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data) 
    {
        window.print();
        return true;
    }
});

////////////// offer //////////////
var deadline = document.getElementById('productDeadline');
console.log(deadline);
