const $select = $('main>form>.zamowienie section div>select')

// const cena_zupy = $('#zupa1').data('price');
// const cena_dania = $('#danie1').data('price');
// const cena_dodatku = $('#dodatek1').data('price');
// const cena_surowki = $('#surowka1').data('price');
// const cena_pierogow = $('#pierogi1').data('price');

let tab = [];

$select.on('click', function () {
    // document.cookie = $(this).attr('id') + "=" + $(this).get(0).value;
    // console.log($(this).attr('id') + "=" + $(this).get(0).value)
    tab[$(this).attr('id')] = $(this).get(0).value;

})

$select.on('change',
    function () {
        let showPrice = document.querySelector('aside.cena>p>span');
        const changedSelect = $(this);
        cena = parseInt(showPrice.innerText);

        const select = $(this).get(0).value;
        if (tab[$(this).attr('id')] == "---") {

            if (select == "---") {
                cena -= changedSelect.data('price');
            } else if (select != "---") {
                cena += changedSelect.data('price');
            }


        } else if (tab[$(this).attr('id')] != "---") {
            if (select == "---") {
                cena -= changedSelect.data('price');
            }
        }

        document.cookie = "cena=" + cena;

        showPrice.innerText = cena;
    })