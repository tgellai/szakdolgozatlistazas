/*$(function() {
    const token=$('meta[name="csrf-token"]').attr('content');
    const ajax=new Ajax(token);

    let szakdogaVegpont="http://localhost:8000/szakdogak";
    const szakdogaTomb=[];
    ajax.getAjax(szakdogaVegpont, szakdogaTomb, szakdogaLista);

    function szakdogaLista(szakdogak) {
        const szuloElem = $(".szakdolgozatoklistazasa");
        const sablonElem = $(".lista");
        szuloElem.empty();
        sablonElem.show();
        szakdogak.forEach(function(elem) {    
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Szakdoga(node, elem);
        });
        sablonElem.hide();

    }
    $("#torol").on("click", () => {
        
        myAjax.deleteAdat(apivegpont,1);
    });
});
*/