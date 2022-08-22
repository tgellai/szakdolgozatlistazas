$(function() {
    const token=$('meta[name="csrf-token"]').attr('content');
    const ajax=new MyAjax(token);

    let szakdogaVegpont="http://localhost:8000/api/szakdogak";
    const szakdogaTomb=[];
    ajax.getAdat(szakdogaVegpont, szakdogaTomb, szakdogaLista);

    function szakdogaLista(szakdogak) {
        const szuloElem = $("section table tbody");
        const sablonElem = $("aside table tr");
        szuloElem.empty();
        sablonElem.show();
        szakdogak.forEach(function(elem) {    
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Szakdoga(node, elem);
        });
        sablonElem.hide();

    }
    $("#torol").on("click", () => {
        ajax.deleteAdat(apivegpont,1);
        location.reload();
    });
    $(window).on("modosit",(event)=>{
        $("#szakdoga_nev").val(event.detail.szakdoga_nev);
        $("#tagokneve").val(event.detail.tagokneve);
        $("#oldallink").val(event.detail.oldallink);
        $("#githublink").val(event.detail.githublink);
        $("#form").show();
    });
    $("#uj").on("click",()=>{
        let szakdoga_nev=$("#szakdoga_nev").val();
        let tagokneve=$("#tagokneve").val();
        let oldallink=$("#oldallink").val();
        let githublink=$("#githublink").val();
        let ujAdat={
            "szakdoga_nev":szakdoga_nev,
            "tagokneve":tagokneve,
            "oldallink":oldallink,
            "githublink":githublink,
        };
        ajax.postAdat(szakdogaVegpont, ujAdat);
    });
});